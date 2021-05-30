<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\SWAPI\SWAPI;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * @group API\Characters
 *
 */
class CharacterController extends Controller
{
    use SWAPI;

    protected string $resourceName;

    public function __construct()
    {
        $this->resourceName = 'people';
    }

    /**
     * List all available characters (or search by term)
     *
     * A People resource is an individual person or character within the Star Wars universe.
     *
     * <h4 class="fancy-heading-panel"><b>Attributes</b></h4>
     * <small class="badge badge-purple">name</small> <i>string</i> -- The name of this person.<br>
     * <small class="badge badge-purple">birth_year</small> <i>string</i> -- The birth year of the person, using the in-universe standard of BBY or ABY - Before the Battle of Yavin or After the Battle of Yavin. The Battle of Yavin is a battle that occurs at the end of Star Wars episode IV: A New Hope.<br>
     * <small class="badge badge-purple">eye_color</small> <i>string</i> -- The eye color of this person. Will be "unknown" if not known or "n/a" if the person does not have an eye.<br>
     * <small class="badge badge-purple">gender</small> <i>string</i> -- The gender of this person. Either "Male", "Female" or "unknown", "n/a" if the person does not have a gender.<br>
     * <small class="badge badge-purple">hair_color</small> <i>string</i> -- The hair color of this person. Will be "unknown" if not known or "n/a" if the person does not have hair.<br>
     * <small class="badge badge-purple">height</small> <i>string</i> -- The height of the person in centimeters.<br>
     * <small class="badge badge-purple">mass</small> <i>string</i> -- The mass of the person in kilograms.<br>
     * <small class="badge badge-purple">skin_color</small> <i>string</i> -- The skin color of this person.<br>
     * <small class="badge badge-purple">homeworld</small> <i>string</i> -- The URL of a planet resource, a planet that this person was born on or inhabits.<br>
     * <small class="badge badge-purple">films</small> <i>array</i> -- An array of film resource URLs that this person has been in.<br>
     * <small class="badge badge-purple">species</small> <i>array</i> -- An array of species resource URLs that this person belongs to.<br>
     * <small class="badge badge-purple">starships</small> <i>array</i> -- An array of starship resource URLs that this person has piloted.<br>
     * <small class="badge badge-purple">vehicles</small> <i>array</i> -- An array of vehicle resource URLs that this person has piloted.<br>
     * <small class="badge badge-purple">url</small> <i>string</i> -- The hypermedia URL of this resource.<br>
     * <small class="badge badge-purple">created</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was created.<br>
     * <small class="badge badge-purple">edited</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was edited.
     *
     * @queryParam search string Term to search resources by. In case of People resource search applies to the name attribute. Defaults to 'null'. Example: Skywalker
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
     * List characters schema
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
     * Retrieve a character
     *
     * @urlParam id integer required The ID of the character resource. Example: 1
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        return $this->getSpecificResource($this->resourceName, $id);
    }

    /**
     * List all specified subresource data of a specific character
     *
     * @urlParam id integer required The ID of the character resource. Example: 1
     * @urlParam subresourceName string required The subresource name of the given character. Example: films
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
     * Advanced search character resources
     *
     * @queryParam attribute string required Attribute name of the given character resource used for condition check. Example: created
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
