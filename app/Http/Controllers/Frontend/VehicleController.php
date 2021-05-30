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
 * Class VehicleController
 * @package App\Http\Controllers\Frontend
 */
class VehicleController extends Controller
{
    use SWAPI;

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $category['title'] = 'Vehicles';
        $category['description'] = 'All the information about all vehicles from 6 films from the original Star Wars saga.';
        $category['tableView'] = 'pages.category.vehicles';
        $category['scriptsView'] = 'pages.category.scripts.vehicles';

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
            2 =>'model',
            3 =>'vehicle_class',
            4 =>'manufacturer',
            5 =>'length',
            6 =>'cost_in_credits',
            7 =>'crew',
            8 =>'passengers',
            9 =>'max_atmosphering_speed',
            10=>'cargo_capacity',
            11=>'consumables',
            12=>'id',
        );

        $totalData = $this->getAllResourceData('vehicles')->count();
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

        $query = $this->getAllResourceData('vehicles');
        if($search) {
            $query = $query->filter(function($item) use ($search) {
                return (stripos($item['name'], $search) !== false || stripos($item['model'], $search) !== false);
            });

            $totalFiltered = $query->count();
        }

        $vehicles = $query->skip($start)
            ->take($limit)
            ->sortBy($orderBy)
            ->all();

        $data = array();
        if(!empty($vehicles))
        {
            foreach ($vehicles as $vehicle)
            {
                $show = route('categories.vehicles.show', $vehicle['id']);

                $nestedData['id'] = $vehicle['id'];
                $nestedData['name'] = $vehicle['name'];
                $nestedData['model'] = $vehicle['model'];
                $nestedData['vehicle_class'] = $vehicle['vehicle_class'];
                $nestedData['manufacturer'] = $vehicle['manufacturer'];
                $nestedData['length'] = $vehicle['length'];
                $nestedData['cost_in_credits'] = $vehicle['cost_in_credits'];
                $nestedData['crew'] = $vehicle['crew'];
                $nestedData['passengers'] = $vehicle['passengers'];
                $nestedData['max_atmosphering_speed'] = $vehicle['max_atmosphering_speed'];
                $nestedData['cargo_capacity'] = $vehicle['cargo_capacity'];
                $nestedData['consumables'] = $vehicle['consumables'];
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
        $vehicle = $this->getSpecificResourceData('vehicles', $id);
        $item['parent'] = 'vehicles';
        $item['title'] = $vehicle['name'];
        $item['description'] = $vehicle['model'];
        $item['view'] = 'pages.item.vehicle';
        $item['scriptsView'] = 'pages.item.scripts.vehicle';

        $films = [];
        if (!empty($vehicle['films'])) {
            foreach ($vehicle['films'] as $film) {
                $url_parts = explode('/', parse_url($film)['path']);
                $id = $url_parts[3];
                $films[] = $id;
            }
        }
        $vehicle['films'] = $films;

        $characters = [];
        if (!empty($vehicle['pilots'])) {
            foreach ($vehicle['pilots'] as $character) {
                $url_parts = explode('/', parse_url($character)['path']);
                $id = $url_parts[3];
                $characters[] = $id;
            }
        }
        $vehicle['pilots'] = $characters;

        return view('pages.item', compact('item', 'vehicle'));
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
