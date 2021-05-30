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
 * Class PlanetController
 * @package App\Http\Controllers\Frontend
 */
class PlanetController extends Controller
{
    use SWAPI;

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $category['title'] = 'Planets';
        $category['description'] = 'All the information about all planets from 6 films from the original Star Wars saga.';
        $category['tableView'] = 'pages.category.planets';
        $category['scriptsView'] = 'pages.category.scripts.planets';

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
            2 =>'diameter',
            3 =>'rotation_period',
            4 =>'orbital_period',
            5 =>'gravity',
            6 =>'population',
            7 =>'climate',
            8 =>'terrain',
            9 =>'surface_water',
            10=>'id',
        );

        $totalData = $this->getAllResourceData('planets')->count();
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

        $query = $this->getAllResourceData('planets');
        if($search) {
            $query = $query->filter(function($item) use ($search) {
                return stripos($item['name'], $search) !== false;
            });

            $totalFiltered = $query->count();
        }

        $planets = $query->skip($start)
            ->take($limit)
            ->sortBy($orderBy)
            ->all();

        $data = array();
        if(!empty($planets))
        {
            foreach ($planets as $planet)
            {
                $show = route('categories.planets.show', $planet['id']);

                $nestedData['id'] = $planet['id'];
                $nestedData['name'] = $planet['name'];
                $nestedData['diameter'] = $planet['diameter'];
                $nestedData['rotation_period'] = $planet['rotation_period'];
                $nestedData['orbital_period'] = $planet['orbital_period'];
                $nestedData['gravity'] = $planet['gravity'];
                $nestedData['population'] = $planet['population'];
                $nestedData['climate'] = $planet['climate'];
                $nestedData['terrain'] = $planet['terrain'];
                $nestedData['surface_water'] = $planet['surface_water'];
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
        $planet = $this->getSpecificResourceData('planets', $id);
        $item['parent'] = 'planets';
        $item['title'] = $planet['name'];
        $item['description'] = 'Star Wars Planet';
        $item['view'] = 'pages.item.planet';
        $item['scriptsView'] = 'pages.item.scripts.planet';

        $films = [];
        if (!empty($planet['films'])) {
            foreach ($planet['films'] as $film) {
                $url_parts = explode('/', parse_url($film)['path']);
                $id = $url_parts[3];
                $films[] = $id;
            }
        }
        $planet['films'] = $films;

        $characters = [];
        if (!empty($planet['residents'])) {
            foreach ($planet['residents'] as $character) {
                $url_parts = explode('/', parse_url($character)['path']);
                $id = $url_parts[3];
                $characters[] = $id;
            }
        }
        $planet['residents'] = $characters;

        return view('pages.item', compact('item', 'planet'));
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
