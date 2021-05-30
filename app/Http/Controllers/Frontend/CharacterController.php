<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\SWAPI\SWAPI;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

/**
 * @hideFromAPIDocumentation
 *
 * Class CharacterController
 * @package App\Http\Controllers\Frontend
 */
class CharacterController extends Controller
{
    use SWAPI;

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $category['title'] = 'Characters';
        $category['description'] = 'All the information about all characters from 6 films from the original Star Wars saga.';
        $category['tableView'] = 'pages.category.characters';
        $category['scriptsView'] = 'pages.category.scripts.characters';

        return view('pages.category', compact('category'));
    }

    /**
     * AJAX request for fetching resource for datatable.
     *
     * @param Request $request
     */
    public function fetch(Request $request)
    {
        $columns = array(
            0 =>'id',
            1 =>'name',
            2 =>'height',
            3 =>'mass',
            4 =>'hair_color',
            5 =>'skin_color',
            6 =>'eye_color',
            7 =>'birth_year',
            8 =>'gender',
            9 =>'id',
        );

        $totalData = $this->getAllResourceData('people')->count();
        $totalFiltered = $totalData;

        $limit = $request->input('length');
        $start = $request->input('start');

        $ordersArr = $request->input('order');
        $orderBy = [];
        if ($ordersArr && count($ordersArr)) {
            $orderBy = array();

            for ($i=0, $ien=count($ordersArr); $i<$ien; $i++) {
                // Convert the column index into the column data property
                $columnIdx = intval($ordersArr[$i]['column']);
                $column = $columns[$columnIdx];
                $dir = $ordersArr[$i]['dir'];
                $orderBy[] = [$column, $dir];
            }
        }

        $search = $request->input('search.value');

        $query = $this->getAllResourceData('people');
        if($search) {
            $query = $query->filter(function($item) use ($search) {
                return stripos($item['name'], $search) !== false;
            });

            $totalFiltered = $query->count();
        }

        $characters = $query->skip($start)
            ->take($limit)
            ->sortBy($orderBy)
            ->all();

        $data = array();
        if(!empty($characters))
        {
            foreach ($characters as $character)
            {
                $show = route('categories.people.show', $character['id']);

                $nestedData['id'] = $character['id'];
                $nestedData['name'] = $character['name'];
                $nestedData['height'] = $character['height'];
                $nestedData['mass'] = $character['mass'];
                $nestedData['hair_color'] = $character['hair_color'];
                $nestedData['skin_color'] = $character['skin_color'];
                $nestedData['eye_color'] = $character['eye_color'];
                $nestedData['birth_year'] = $character['birth_year'];
                $nestedData['gender'] = $character['gender'];
                $nestedData['view'] = "<a href='{$show}' class='btn btn-sm btn-warning' title='View'><i class='bi bi-eye'></i></a>";

                $data[] = $nestedData;
            }
        }

        $json_data = array(
            "draw"            => intval($request->input('draw')),
            "recordsTotal"    => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"            => $data
        );

        echo json_encode($json_data);
    }

    /**
     * Display the specified resource.
     *
     * @param integer $id
     * @return Application|Factory|View
     */
    public function show(int $id): View|Factory|Application
    {
        $character = $this->getSpecificResourceData('people', $id);
        $item['parent'] = 'people';
        $item['title'] = $character['name'];
        $item['description'] = 'Star Wars Character';
        $item['view'] = 'pages.item.character';
        $item['scriptsView'] = 'pages.item.scripts.character';

        if (!empty($character['homeworld'])) {
            $url_parts = explode('/', parse_url($character['homeworld'])['path']);
            $id = $url_parts[3];
            $homeworld = $this->getSpecificResourceData('planets', $id);
            $homeworld['url'] = str_replace('/api', '/categories', $homeworld['url']);
            $character['homeworld'] = "<a class='link-dark fw-bold' href='" . $homeworld['url'] . "'>" . $homeworld['name'] . "</a>";
        }

        $films = [];
        if (!empty($character['films'])) {
            foreach ($character['films'] as $film) {
                $url_parts = explode('/', parse_url($film)['path']);
                $id = $url_parts[3];
                $films[] = $id;
            }
        }
        $character['films'] = $films;

        $species = [];
        if (!empty($character['species'])) {
            foreach ($character['species'] as $speciesSingle) {
                $url_parts = explode('/', parse_url($speciesSingle)['path']);
                $id = $url_parts[3];
                $species[] = $id;
            }
        }
        $character['species'] = $species;

        $starships = [];
        if (!empty($character['starships'])) {
            foreach ($character['starships'] as $starship) {
                $url_parts = explode('/', parse_url($starship)['path']);
                $id = $url_parts[3];
                $starships[] = $id;
            }
        }
        $character['starships'] = $starships;

        $vehicles = [];
        if (!empty($character['vehicles'])) {
            foreach ($character['vehicles'] as $vehicle) {
                $url_parts = explode('/', parse_url($vehicle)['path']);
                $id = $url_parts[3];
                $vehicles[] = $id;
            }
        }
        $character['vehicles'] = $vehicles;

        return view('pages.item', compact('item', 'character'));
    }

    /**
     * @param Request $request
     * @return string|false
     */
    public function fetchSubresource(Request $request): bool|string
    {
        $ids = $request->input('ids');
        $relationName = $request->input('relationName');

        $relations = [];

        foreach ($ids as $id) {
            $resource = $this->getSpecificResourceData($relationName, $id);
            $resource['url'] = str_replace('/api', '/categories', $resource['url']);
            if ($relationName === 'films') {
                $resource['name'] = $resource['title'];
            }
            $relations[] = "<a class='btn btn-sm btn-warning fw-bold m-1' href='".$resource['url']."'>".$resource['name']."</a>";
        }

        return json_encode($relations);
    }
}
