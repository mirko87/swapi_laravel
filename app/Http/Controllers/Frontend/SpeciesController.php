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
 * Class SpeciesController
 * @package App\Http\Controllers\Frontend
 */
class SpeciesController extends Controller
{
    use SWAPI;

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $category['title'] = 'Species';
        $category['description'] = 'All the information about all species from 6 films from the original Star Wars saga.';
        $category['tableView'] = 'pages.category.species';
        $category['scriptsView'] = 'pages.category.scripts.species';

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
            2 =>'classification',
            3 =>'designation',
            4 =>'average_height',
            5 =>'average_lifespan',
            6 =>'eye_colors',
            7 =>'hair_colors',
            8 =>'skin_colors',
            9 =>'language',
            10=>'id',
        );

        $totalData = $this->getAllResourceData('species')->count();
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

        $query = $this->getAllResourceData('species');
        if($search) {
            $query = $query->filter(function($item) use ($search) {
                return stripos($item['name'], $search) !== false;
            });

            $totalFiltered = $query->count();
        }

        $species = $query->skip($start)
            ->take($limit)
            ->sortBy($orderBy)
            ->all();

        $data = array();
        if(!empty($species))
        {
            foreach ($species as $singleSpecies)
            {
                $show = route('categories.species.show', $singleSpecies['id']);

                $nestedData['id'] = $singleSpecies['id'];
                $nestedData['name'] = $singleSpecies['name'];
                $nestedData['classification'] = $singleSpecies['classification'];
                $nestedData['designation'] = $singleSpecies['designation'];
                $nestedData['average_height'] = $singleSpecies['average_height'];
                $nestedData['average_lifespan'] = $singleSpecies['average_lifespan'];
                $nestedData['eye_colors'] = $singleSpecies['eye_colors'];
                $nestedData['hair_colors'] = $singleSpecies['hair_colors'];
                $nestedData['skin_colors'] = $singleSpecies['skin_colors'];
                $nestedData['language'] = $singleSpecies['language'];
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
        $species = $this->getSpecificResourceData('species', $id);
        $item['parent'] = 'species';
        $item['title'] = $species['name'];
        $item['description'] = $species['classification'];
        $item['view'] = 'pages.item.species';
        $item['scriptsView'] = 'pages.item.scripts.species';

        if (!empty($species['homeworld'])) {
            $url_parts = explode('/', parse_url($species['homeworld'])['path']);
            $id = $url_parts[3];
            $homeworld = $this->getSpecificResourceData('planets', $id);
            $homeworld['url'] = str_replace('/api', '/categories', $homeworld['url']);
            $species['homeworld'] = "<a class='link-light fw-bold' href='" . $homeworld['url'] . "'>" . $homeworld['name'] . "</a>";
        }

        $films = [];
        if (!empty($species['films'])) {
            foreach ($species['films'] as $film) {
                $url_parts = explode('/', parse_url($film)['path']);
                $id = $url_parts[3];
                $films[] = $id;
            }
        }
        $species['films'] = $films;

        $characters = [];
        if (!empty($species['people'])) {
            foreach ($species['people'] as $character) {
                $url_parts = explode('/', parse_url($character)['path']);
                $id = $url_parts[3];
                $characters[] = $id;
            }
        }
        $species['people'] = $characters;

        return view('pages.item', compact('item', 'species'));
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
