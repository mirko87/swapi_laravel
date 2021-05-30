<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\SWAPI\SWAPI;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @group API\Starships
 *
 */
class StarshipController extends Controller
{
    use SWAPI;

    protected string $resourceName;

    public function __construct()
    {
        $this->resourceName = 'starships';
    }

    /**
     * List all available starships (or search by term)
     *
     * A Starship resource is a single transport craft that has hyperdrive capability.
     *
     * <h4 class="fancy-heading-panel"><b>Attributes</b></h4>
     * <small class="badge badge-purple">name</small> <i>string</i> -- The name of this starship. The common name, such as "Death Star".<br>
     * <small class="badge badge-purple">model</small> <i>string</i> -- The model or official name of this starship. Such as "T-65 X-wing" or "DS-1 Orbital Battle Station".<br>
     * <small class="badge badge-purple">starship_class</small> <i>string</i> -- The class of this starship, such as "Starfighter" or "Deep Space Mobile Battlestation".<br>
     * <small class="badge badge-purple">manufacturer</small> <i>string</i> -- The manufacturer of this starship. Comma separated if more than one.<br>
     * <small class="badge badge-purple">cost_in_credits</small> <i>string</i> -- The cost of this starship new, in galactic credits.<br>
     * <small class="badge badge-purple">length</small> <i>string</i> -- The length of this starship in meters.<br>
     * <small class="badge badge-purple">crew</small> <i>string</i> -- The number of personnel needed to run or pilot this starship.<br>
     * <small class="badge badge-purple">passengers</small> <i>string</i> -- The number of non-essential people this starship can transport.<br>
     * <small class="badge badge-purple">max_atmosphering_speed</small> <i>string</i> -- The maximum speed of this starship in the atmosphere. "N/A" if this starship is incapable of atmospheric flight.<br>
     * <small class="badge badge-purple">hyperdrive_rating</small> <i>string</i>  string -- The class of this starships hyperdrive.<br>
     * <small class="badge badge-purple">MGLT</small> <i>string</i> -- The Maximum number of Megalights this starship can travel in a standard hour. A "Megalight" is a standard unit of distance and has never been defined before within the Star Wars universe. This figure is only really useful for measuring the difference in speed of starships. We can assume it is similar to AU, the distance between our Sun (Sol) and Earth.<br>
     * <small class="badge badge-purple">cargo_capacity</small> <i>string</i> -- The maximum number of kilograms that this starship can transport.<br>
     * <small class="badge badge-purple">consumables</small> <i>string</i> -- The maximum length of time that this starship can provide consumables for its entire crew without having to resupply.<br>
     * <small class="badge badge-purple">films</small> <i>array</i> -- An array of Film URL Resources that this starship has appeared in.<br>
     * <small class="badge badge-purple">pilots</small> <i>array</i> -- An array of People URL Resources that this starship has been piloted by.<br>
     * <small class="badge badge-purple">url</small> <i>string</i> -- The hypermedia URL of this resource.<br>
     * <small class="badge badge-purple">created</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was created.<br>
     * <small class="badge badge-purple">edited</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was edited.
     *
     * @queryParam search string Term to search resources by. In case of Starship resource search applies to the name and model attributes. Defaults to 'null'. Example: Death Star
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
     * List starships schema
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
     * Retrieve a starship
     *
     * @urlParam id integer required The ID of the starship resource. Example: 9
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        return $this->getSpecificResource($this->resourceName, $id);
    }

    /**
     * List all specified subresource data of a specific starship
     *
     * @urlParam id integer required The ID of the starship resource. Example: 9
     * @urlParam subresourceName string required The subresource name of the given starship. Example: films
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
     * Advanced search starship resources
     *
     * @queryParam attribute string required Attribute name of the given starship resource used for condition check. Example: length
     * @queryParam operator string required Operator used in the condition check between attribute and condition parameter. Example: >
     * @queryParam condition string required Condition parameter used in the condition check against attribute. Example: 10000
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
     * Specific endpoint: List all starships that can have above 84000 passengers.
     *
     * @return JsonResponse
     */
    public function passengersOver84000(): JsonResponse
    {
        $attribute = 'passengers';
        $operator = '>';
        $condition = '84000';
        $type = 'number';

        return $this->getSpecificResourceByCondition($this->resourceName, $attribute, $operator, $condition, $type);
    }
}
