<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\SWAPI\SWAPI;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @group API\Planets
 *
 */
class PlanetController extends Controller
{
    use SWAPI;

    protected string $resourceName;

    public function __construct()
    {
        $this->resourceName = 'planets';
    }

    /**
     * List all available planets (or search by term)
     *
     * A Planet resource is a large mass, planet or planetoid in the Star Wars Universe, at the time of 0 ABY.
     *
     * <h4 class="fancy-heading-panel"><b>Attributes</b></h4>
     * <small class="badge badge-purple">name</small> <i>string</i> -- The name of this planet.<br>
     * <small class="badge badge-purple">diameter</small> <i>string</i> -- The diameter of this planet in kilometers.<br>
     * <small class="badge badge-purple">rotation_period</small> <i>string</i> -- The number of standard hours it takes for this planet to complete a single rotation on its axis.<br>
     * <small class="badge badge-purple">orbital_period</small> <i>string</i> -- The number of standard days it takes for this planet to complete a single orbit of its local star.<br>
     * <small class="badge badge-purple">gravity</small> <i>string</i> -- A number denoting the gravity of this planet, where "1" is normal or 1 standard G. "2" is twice or 2 standard Gs. "0.5" is half or 0.5 standard Gs.<br>
     * <small class="badge badge-purple">population</small> <i>string</i> -- The average population of sentient beings inhabiting this planet.<br>
     * <small class="badge badge-purple">climate</small> <i>string</i> -- The climate of this planet. Comma separated if diverse.<br>
     * <small class="badge badge-purple">terrain</small> <i>string</i> -- The terrain of this planet. Comma separated if diverse.<br>
     * <small class="badge badge-purple">surface_water</small> <i>string</i> -- The percentage of the planet surface that is naturally occurring water or bodies of water.<br>
     * <small class="badge badge-purple">residents</small> <i>array</i> -- An array of People URL Resources that live on this planet.<br>
     * <small class="badge badge-purple">films</small> <i>array</i> -- An array of Film URL Resources that this planet has appeared in.<br>
     * <small class="badge badge-purple">url</small> <i>string</i> -- The hypermedia URL of this resource.<br>
     * <small class="badge badge-purple">created</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was created.<br>
     * <small class="badge badge-purple">edited</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was edited.
     *
     * @queryParam search string Term to search resources by. In case of Planet resource search applies to the name attribute. Defaults to 'null'. Example: Tatooine
     * @queryParam page integer Page number parameter used for pagination of results. Defaults to 'null'. Example: 1
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'search'    => 'nullable|string',
            'page'      => 'nullable|integer|min:1',
        ]);

        $search = $validated['search']?? null;
        $page = $validated['page']?? null;

        return $this->getResource($this->resourceName, $search, $page);
    }

    /**
     * List planets schema
     *
     * Schema allows you to see which attributes and their types are available for this resource.
     *
     * @return JsonResponse
     */
    public function schema(): JsonResponse
    {
        return $this->getResource($this->resourceName, null, null, 1);
    }

    /**
     * Retrieve a planet
     *
     * @urlParam id integer required The ID of the planet resource. Example: 1
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        return $this->getSpecificResource($this->resourceName, $id);
    }

    /**
     * List all specified subresource data of a specific planet
     *
     * @urlParam id integer required The ID of the planet resource. Example: 1
     * @urlParam subresourceName string required The subresource name of the given planet. Example: residents
     *
     * @param int $id
     * @param string $subresourceName
     * @return JsonResponse
     */
    public function showSubresource(int $id, string $subresourceName): JsonResponse
    {
        return $this->getSpecificResourceSubresource($this->resourceName, $id, $subresourceName);
    }

    /**
     * Advanced search planet resources
     *
     * @queryParam attribute string required Attribute name of the given planet resource used for condition check. Example: diameter
     * @queryParam operator string required Operator used in the condition check between attribute and condition parameter. Example: <
     * @queryParam condition string required Condition parameter used in the condition check against attribute. Example: 11000
     * @queryParam type string required Type of the attribute and condition parameter. Example: number
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function showByCondition(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'attribute' => 'required|string',
            'operator'  => 'required|string',
            'condition' => 'required|string',
            'type'      => 'required|string',
        ]);

        $attribute = $validated['attribute'];
        $operator = $validated['operator'];
        $condition = $validated['condition'];
        $type = $validated['type'];

        if (!in_array($operator, ['>', '<', '=', '<>', 'like'])) {
            return response()->json(['message' => 'Operator must be one of the following: >, <, =, <>, like'], 503);
        }

        if (!in_array($type, ['string', 'number', 'date'])) {
            return response()->json(['message' => 'Type must be one of the following: string, number, date'], 503);
        }

        return $this->getSpecificResourceByCondition($this->resourceName, $attribute, $operator, $condition, $type);
    }

    /**
     * Specific endpoint: List all planets created after 12/04/2014
     *
     * @return JsonResponse
     */
    public function createdAfter12042014(): JsonResponse
    {
        $attribute = 'created';
        $operator = '>';
        $condition = '12/04/2014';
        $type = 'date';

        return $this->getSpecificResourceByCondition($this->resourceName, $attribute, $operator, $condition, $type);
    }
}
