<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\SWAPI\SWAPI;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @group API\Films
 *
 */
class FilmController extends Controller
{
    use SWAPI;

    protected string $resourceName;

    public function __construct()
    {
        $this->resourceName = 'films';
    }

    /**
     * List all available films (or search by term)
     *
     * A Film resource is a single film.
     *
     * <h4 class="fancy-heading-panel"><b>Attributes</b></h4>
     * <small class="badge badge-purple">title</small> <i>string</i> -- The title of this film.<br>
     * <small class="badge badge-purple">episode_id</small> <i>integer</i> -- The episode number of this film.<br>
     * <small class="badge badge-purple">opening_crawl</small> <i>string</i> -- The opening paragraphs at the beginning of this film.<br>
     * <small class="badge badge-purple">director</small> <i>string</i> -- The name of the director of this film.<br>
     * <small class="badge badge-purple">producer</small> <i>string</i> -- The name(s) of the producer(s) of this film. Comma separated.<br>
     * <small class="badge badge-purple">release_date</small> <i>date</i> -- The ISO 8601 date format of film release at original creator country.<br>
     * <small class="badge badge-purple">species</small> <i>array</i> -- An array of species resource URLs that are in this film.<br>
     * <small class="badge badge-purple">starships</small> <i>array</i> -- An array of starship resource URLs that are in this film.<br>
     * <small class="badge badge-purple">vehicles</small> <i>array</i> -- An array of vehicle resource URLs that are in this film.<br>
     * <small class="badge badge-purple">characters</small> <i>array</i> -- An array of people resource URLs that are in this film.<br>
     * <small class="badge badge-purple">planets</small> <i>array</i> -- An array of planet resource URLs that are in this film.<br>
     * <small class="badge badge-purple">url</small> <i>string</i> -- The hypermedia URL of this resource.<br>
     * <small class="badge badge-purple">created</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was created.<br>
     * <small class="badge badge-purple">edited</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was edited.
     *
     * @queryParam search string Term to search resources by. In case of Film resource search applies to the title attribute. Defaults to 'null'. Example: A New Hope
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
     * List films schema
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
     * Retrieve a film
     *
     * @urlParam id integer required The ID of the film resource. Example: 1
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        return $this->getSpecificResource($this->resourceName, $id);
    }

    /**
     * List all specified subresource data of a specific film
     *
     * @urlParam id integer required The ID of the film resource. Example: 1
     * @urlParam subresourceName string required The subresource name of the given film. Example: characters
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
     * Advanced search film resources
     *
     * @queryParam attribute string required Attribute name of the given film resource used for condition check. Example: created
     * @queryParam operator string required Operator used in the condition check between attribute and condition parameter. Example: >
     * @queryParam condition string required Condition parameter used in the condition check against attribute. Example: 12/15/2014
     * @queryParam type string required Type of the attribute and condition parameter. Example: date
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
}
