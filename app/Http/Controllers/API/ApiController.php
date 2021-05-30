<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\SWAPI\SWAPI;
use Illuminate\Http\JsonResponse;

/**
 * @group API
 *
 */
class ApiController extends Controller
{
    use SWAPI;

    protected string $resourceName;

    public function __construct()
    {
        $this->resourceName = '';
    }

    /**
     * List all available resources
     *
     * The Root resource provides information on all available resources within the API.
     *
     * <h4 class="fancy-heading-panel"><b>Attributes</b></h4>
     * <small class="badge badge-purple">films</small> <i>string</i> -- The URL root for Films resources<br>
     * <small class="badge badge-purple">people</small> <i>string</i> -- The URL root for People resources<br>
     * <small class="badge badge-purple">planets</small> <i>string</i> -- The URL root for Planets resources<br>
     * <small class="badge badge-purple">species</small> <i>string</i> -- The URL root for Species resources<br>
     * <small class="badge badge-purple">starships</small> <i>string</i> -- The URL root for Starships resources<br>
     * <small class="badge badge-purple">vehicles</small> <i>string</i> -- The URL root for Vehicles resources
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->getResource($this->resourceName, null, null);
    }
}
