<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\SWAPI\SWAPI;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @group API\Species
 *
 */
class SpeciesController extends Controller
{
    use SWAPI;

    protected string $resourceName;

    public function __construct()
    {
        $this->resourceName = 'species';
    }

    /**
     * List all available species (or search by term)
     *
     * A Species resource is a type of person or character within the Star Wars Universe.
     *
     * <h4 class="fancy-heading-panel"><b>Attributes</b></h4>
     * <small class="badge badge-purple">name</small> <i>string</i> -- The name of this species.<br>
     * <small class="badge badge-purple">classification</small> <i>string</i> -- The classification of this species, such as "mammal" or "reptile".<br>
     * <small class="badge badge-purple">designation</small> <i>string</i> -- The designation of this species, such as "sentient".<br>
     * <small class="badge badge-purple">average_height</small> <i>string</i> -- The average height of this species in centimeters.<br>
     * <small class="badge badge-purple">average_lifespan</small> <i>string</i> -- The average lifespan of this species in years.<br>
     * <small class="badge badge-purple">eye_colors</small> <i>string</i> -- A comma-separated string of common eye colors for this species, "none" if this species does not typically have eyes.<br>
     * <small class="badge badge-purple">hair_colors</small> <i>string</i> -- A comma-separated string of common hair colors for this species, "none" if this species does not typically have hair.<br>
     * <small class="badge badge-purple">skin_colors</small> <i>string</i> -- A comma-separated string of common skin colors for this species, "none" if this species does not typically have skin.<br>
     * <small class="badge badge-purple">language</small> <i>string</i> -- The language commonly spoken by this species.<br>
     * <small class="badge badge-purple">homeworld</small> <i>string</i> -- The URL of a planet resource, a planet that this species originates from.<br>
     * <small class="badge badge-purple">people</small> <i>array</i> -- An array of People URL Resources that are a part of this species.<br>
     * <small class="badge badge-purple">films</small> <i>array</i> -- An array of Film URL Resources that this species has appeared in.<br>
     * <small class="badge badge-purple">url</small> <i>string</i> -- The hypermedia URL of this resource.<br>
     * <small class="badge badge-purple">created</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was created.<br>
     * <small class="badge badge-purple">edited</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was edited.
     *
     * @queryParam search string Term to search resources by. In case of Species resource search applies to the name attribute. Defaults to 'null'. Example: Wookie
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
     * List species schema
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
     * Retrieve a specific species
     *
     * @urlParam id integer required The ID of the species resource. Example: 1
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        return $this->getSpecificResource($this->resourceName, $id);
    }

    /**
     * List all specified subresource data of a specific species
     *
     * @urlParam id integer required The ID of the species resource. Example: 1
     * @urlParam subresourceName string required The subresource name of the given species. Example: films
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
     * Advanced search species resources
     *
     * @queryParam attribute string required Attribute name of the given species resource used for condition check. Example: classification
     * @queryParam operator string required Operator used in the condition check between attribute and condition parameter. Example: =
     * @queryParam condition string required Condition parameter used in the condition check against attribute. Example: Mammal
     * @queryParam type string required Type of the attribute and condition parameter. Example: string
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
