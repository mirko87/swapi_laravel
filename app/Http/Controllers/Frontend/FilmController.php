<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\SWAPI\SWAPI;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

/**
 * @hideFromAPIDocumentation
 *
 * Class FilmController
 * @package App\Http\Controllers\Frontend
 */
class FilmController extends Controller
{
    use SWAPI;

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $category['title'] = 'Films';
        $category['description'] = 'All the information about 6 films from the original Star Wars saga.';
        $category['tableView'] = 'pages.category.films';
        $category['scriptsView'] = 'pages.category.scripts.films';

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
            1 =>'title',
            2 =>'episode_id',
            3 =>'opening_crawl',
            4 =>'director',
            5 =>'producer',
            6 =>'release_date',
            7 =>'id',
        );

        $totalData = $this->getAllResourceData('films')->count();
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

        $query = $this->getAllResourceData('films');
        if($search) {
            $query = $query->filter(function($item) use ($search) {
                return stripos($item['title'], $search) !== false;
            });

            $totalFiltered = $query->count();
        }

        $films = $query->skip($start)
            ->take($limit)
            ->sortBy($orderBy)
            ->all();

        $data = array();
        if(!empty($films))
        {
            foreach ($films as $film)
            {
                $show = route('categories.films.show', $film['id']);

                $nestedData['id'] = $film['id'];
                $nestedData['title'] = $film['title'];
                $nestedData['episode_id'] = $film['episode_id'];
                $nestedData['opening_crawl'] = "<button type='button' class='btn btn-sm btn-warning modal-btn' data-bs-toggle='modal' data-bs-target='#modal'><i class='bi bi-info-circle'></i></button><textarea class='modal-text d-none'>".$film['opening_crawl']."</textarea><input type='hidden' class='modal-title' value='".$film['title']." - Opening Crawl'>";
                $nestedData['director'] = $film['director'];
                $nestedData['producer'] = $film['producer'];
                $nestedData['release_date'] = Carbon::parse($film['release_date'])->format('m/d/Y');
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
        $film = $this->getSpecificResourceData('films', $id);
        $item['parent'] = 'films';
        $item['title'] = $film['title'];
        $item['description'] = substr($film['opening_crawl'], 0, 100).'...';
        $item['opening_crawl'] = $film['opening_crawl'];
        $item['view'] = 'pages.item.film';
        $item['scriptsView'] = 'pages.item.scripts.film';

        $characters = [];
        if (!empty($film['characters'])) {
            foreach ($film['characters'] as $character) {
                $url_parts = explode('/', parse_url($character)['path']);
                $id = $url_parts[3];
                $characters[] = $id;
            }
        }
        $film['characters'] = $characters;

        $planets = [];
        if (!empty($film['planets'])) {
            foreach ($film['planets'] as $planet) {
                $url_parts = explode('/', parse_url($planet)['path']);
                $id = $url_parts[3];
                $planets[] = $id;
            }
        }
        $film['planets'] = $planets;

        $starships = [];
        if (!empty($film['starships'])) {
            foreach ($film['starships'] as $starship) {
                $url_parts = explode('/', parse_url($starship)['path']);
                $id = $url_parts[3];
                $starships[] = $id;
            }
        }
        $film['starships'] = $starships;

        $vehicles = [];
        if (!empty($film['vehicles'])) {
            foreach ($film['vehicles'] as $vehicle) {
                $url_parts = explode('/', parse_url($vehicle)['path']);
                $id = $url_parts[3];
                $vehicles[] = $id;
            }
        }
        $film['vehicles'] = $vehicles;

        $species = [];
        if (!empty($film['species'])) {
            foreach ($film['species'] as $speciesSingle) {
                $url_parts = explode('/', parse_url($speciesSingle)['path']);
                $id = $url_parts[3];
                $species[] = $id;
            }
        }
        $film['species'] = $species;

        return view('pages.item', compact('item', 'film'));
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
            $relations[] = "<a class='btn btn-sm btn-warning fw-bold m-1' href='".$resource['url']."'>".$resource['name']."</a>";
        }

        return json_encode($relations);
    }
}
