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
 * Class StarshipController
 * @package App\Http\Controllers\Frontend
 */
class StarshipController extends Controller
{
    use SWAPI;

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $category['title'] = 'Starships';
        $category['description'] = 'All the information about all starships from 6 films from the original Star Wars saga.';
        $category['tableView'] = 'pages.category.starships';
        $category['scriptsView'] = 'pages.category.scripts.starships';

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
            3 =>'starship_class',
            4 =>'manufacturer',
            5 =>'cost_in_credits',
            6 =>'length',
            7 =>'crew',
            8 =>'passengers',
            9 =>'max_atmosphering_speed',
            10=>'hyperdrive_rating',
            11=>'MGLT',
            12=>'cargo_capacity',
            13=>'consumables',
            14=>'id',
        );

        $totalData = $this->getAllResourceData('starships')->count();
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

        $query = $this->getAllResourceData('starships');
        if($search) {
            $query = $query->filter(function($item) use ($search) {
                return (stripos($item['name'], $search) !== false || stripos($item['model'], $search) !== false);
            });

            $totalFiltered = $query->count();
        }

        $starships = $query->skip($start)
            ->take($limit)
            ->sortBy($orderBy)
            ->all();

        $data = array();
        if(!empty($starships))
        {
            foreach ($starships as $starship)
            {
                $show = route('categories.starships.show', $starship['id']);

                $nestedData['id'] = $starship['id'];
                $nestedData['name'] = $starship['name'];
                $nestedData['model'] = $starship['model'];
                $nestedData['starship_class'] = $starship['starship_class'];
                $nestedData['manufacturer'] = $starship['manufacturer'];
                $nestedData['cost_in_credits'] = $starship['cost_in_credits'];
                $nestedData['length'] = $starship['length'];
                $nestedData['crew'] = $starship['crew'];
                $nestedData['passengers'] = $starship['passengers'];
                $nestedData['max_atmosphering_speed'] = $starship['max_atmosphering_speed'];
                $nestedData['hyperdrive_rating'] = $starship['hyperdrive_rating'];
                $nestedData['MGLT'] = $starship['MGLT'];
                $nestedData['cargo_capacity'] = $starship['cargo_capacity'];
                $nestedData['consumables'] = $starship['consumables'];
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
        $starship = $this->getSpecificResourceData('starships', $id);
        $item['parent'] = 'starships';
        $item['title'] = $starship['name'];
        $item['description'] = $starship['model'];
        $item['view'] = 'pages.item.starship';
        $item['scriptsView'] = 'pages.item.scripts.starship';

        $films = [];
        if (!empty($starship['films'])) {
            foreach ($starship['films'] as $film) {
                $url_parts = explode('/', parse_url($film)['path']);
                $id = $url_parts[3];
                $films[] = $id;
            }
        }
        $starship['films'] = $films;

        $characters = [];
        if (!empty($starship['pilots'])) {
            foreach ($starship['pilots'] as $character) {
                $url_parts = explode('/', parse_url($character)['path']);
                $id = $url_parts[3];
                $characters[] = $id;
            }
        }
        $starship['pilots'] = $characters;

        return view('pages.item', compact('item', 'starship'));
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
