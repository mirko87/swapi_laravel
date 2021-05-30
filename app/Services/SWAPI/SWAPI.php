<?php

namespace App\Services\SWAPI;

use App\Services\Cache\CacheService;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

trait SWAPI
{
    use CacheService;

    /**
     * Get all data for resource.
     *
     * @param string $resourceName
     * @param string|null $search
     * @param int|null $page
     * @param int|null $schema
     * @return JsonResponse
     */
    public function getResource(string $resourceName, string $search = null, int $page = null, int $schema = null): JsonResponse
    {
        // Check to see if there is a resource name.
        if ($resourceName !== '') {
            // Check if resource is in array of allowed.
            if (!array_key_exists($resourceName, $this->allowedResources())) {
                return response()->json(['message' => 'This resource is not in allowed list'], 503);
            }

            // Check if request is for resource schema
            if (!is_null($schema)) {
                // Request the schema for resource
                $resource = $this->getResourceByUrl(config('swapi.url') . $resourceName.'/schema');
            } else {
                // Set default value for page parameter if it is not set.
                !is_null($page) ?: $page = 1;

                $params['page'] = $page;

                // If search is set, add it to the query parameters.
                is_null($search) ?: $params['search'] = $search;

                // Request the data.
                $resource = $this->getResourceByUrl(config('swapi.url') . $resourceName, $params);
            }
        } else {
            // On empty resource name retrieve the base api url.
            $resource = $this->getResourceByUrl(config('swapi.url'));
        }

        // Return the response.
        return response()->json($resource['data'], $resource['status']);
    }

    /**
     * Get specific resource.
     *
     * @param string $resourceName
     * @param int $id
     * @return JsonResponse
     */
    public function getSpecificResource(string $resourceName, int $id): JsonResponse
    {
        // Check if resource is in array of allowed.
        if (!array_key_exists($resourceName, $this->allowedResources())) {
            response()->json(['message' => 'This resource is not in allowed list'], 503);
        }

        // Request the data.
        $resource = $this->getResourceByUrl(config('swapi.url').$resourceName.'/'.$id);

        // Return the resource.
        return response()->json($resource['data'], $resource['status']);
    }

    /**
     * Get all data for subresource of a specific resource.
     *
     * @param string $resourceName
     * @param int $id
     * @param string $subresourceName
     * @return JsonResponse
     */
    public function getSpecificResourceSubresource(string $resourceName, int $id, string $subresourceName): JsonResponse
    {
        // Check if resource is in array of allowed.
        if (!array_key_exists($resourceName, $this->allowedResources())) {
            return response()->json(['message' => 'This resource is not in allowed list'], 503);
        }

        // Check if subresource is in array of allowed.
        if (!in_array($subresourceName, $this->allowedResources()[$resourceName])) {
            return response()->json(['message' => 'This subresource is not in allowed list'], 503);
        }

        // Set subresource synonym to be equal with subresource name
        $subresourceSynonym = $subresourceName;

        // Check if subresource name has synonym. If yes, set name to the original resource name.
        if (array_key_exists($subresourceName, $this->resourceSynonyms())) {
            $subresourceName = $this->resourceSynonyms()[$subresourceName];
        }

        // Get the data for the resource.
        $response = $this->getSpecificResource($resourceName, $id);
        if ($response->status() !== 200) {
            return response()->json($response->getData(), $response->status());
        }

        // Parent resource data.
        $resource = $response->getData();

        // Set resource name/title attribute.
        $resourceAttributeName = $resourceName === 'films' ? 'title' : 'name';

        // Prepare collector.
        $collector = [];

        // Check if subresource is array.
        if (is_array($resource->$subresourceSynonym)) {
            // Check if subresource array has any elements.
            if (count($resource->$subresourceSynonym) > 0) {
                foreach ($resource->$subresourceSynonym as $item) {
                    // Use basename to get IDs from URLs of subresource item.
                    $itemId = basename($item);

                    // Get the specific subresource based on ID.
                    $response = $this->getSpecificResource($subresourceName, $itemId);
                    if ($response->status() !== 200) {
                        return response()->json($response->getData(), $response->status());
                    }

                    // Push it to collector
                    $collector[$resource->$resourceAttributeName][] = $response->getData();
                }
            } else {
                // Return error message if subresource array is empty.
                return response()->json(['message' => 'This resource was not found on SWAPI routes'], 404);
            }
        } else {
            // If subresource is not array, get single subresource.
            $itemId = basename($resource->$subresourceSynonym);

            // Get the specific subresource based on ID.
            $response = $this->getSpecificResource($subresourceName, $itemId);
            if ($response->status() !== 200) {
                return response()->json($response->getData(), $response->status());
            }

            // Push it to collector
            $collector[$resource->$resourceAttributeName][] = $response->getData();
        }

        // Return the response.
        return response()->json($collector);
    }

    /**
     * Get specific resource by condition.
     *
     * @param string $resourceName
     * @param string $attribute
     * @param string $operator
     * @param string $condition
     * @param string $type
     * @return JsonResponse
     */
    public function getSpecificResourceByCondition(string $resourceName, string $attribute, string $operator, string $condition, string $type): JsonResponse
    {
        // Check if resource is in array of allowed.
        if (!array_key_exists($resourceName, $this->allowedResources())) {
            return response()->json(['message' => 'This resource is not in allowed list'], 503);
        }

        // Get the data for the resource and populate collection with resource results array.
        $response = $this->getResource($resourceName, null, 1);
        if ($response->status() !== 200) {
            return response()->json($response->getData(), $response->status());
        }
        $resource = $response->getData();
        $allResourceData = collect(json_decode(json_encode($resource->results), true));

        // If searched attribute does not exist for this resource, return error.
        if (!array_key_exists($attribute, $allResourceData[0])) {
            return response()->json(['message' => 'This attribute was not found in the given resource'], 404);
        }

        // If searched attribute is an array in this resource, return error.
        if (is_array($allResourceData[0][$attribute])) {
            return response()->json(['message' => 'This attribute is an array, which is not supported for searching.'], 503);
        }

        // If there is more then one page of results for the resource data, loop through and merge results with collector.
        while (!is_null($resource->next)) {
            $next = intval(Str::after($resource->next, 'page='));
            $response = $this->getResource($resourceName, null, $next);
            $resource = $response->getData();
            $allResourceData = $allResourceData->mergeRecursive(json_decode(json_encode($resource->results), true));
        }

        // Set condition parameter if type parameter is number or date.
        if ($type === 'number') {
            $condition = floatval($condition);
        } elseif ($type === 'date') {
            $condition = Carbon::parse($condition)->format('Y-m-d');
        }

        // Prepare collector for filtered data.
        $filteredResourceData = collect();

        // Loop through resource data and populate filtered data collector if given condition is true.
        foreach ($allResourceData as $resourceData) {
            // Set resource attribute item to correct type based on type parameter
            if ($type === 'number') {
                $formattedAttribute = floatval(str_replace(',', '', $resourceData[$attribute]));
            } elseif ($type === 'date') {
                $formattedAttribute = Carbon::parse($resourceData[$attribute]);
            } else {
                $formattedAttribute = $resourceData[$attribute];
            }

            // Execute the condition check based on type of operator parameter and push the resource data if it returns true.
            if ($operator === '>') {
                if ($formattedAttribute > $condition) {
                    $filteredResourceData->push($resourceData);
                }
            } elseif ($operator === '=') {
                if ($formattedAttribute === $condition) {
                    $filteredResourceData->push($resourceData);
                }
            } elseif ($operator === '<') {
                if ($formattedAttribute < $condition) {
                    $filteredResourceData->push($resourceData);
                }
            } elseif ($operator === 'like') {
                if (stripos($formattedAttribute, $condition) !== false) {
                    $filteredResourceData->push($resourceData);
                }
            }
        }

        // Return the response with the array of filtered resource data.
        return response()->json($filteredResourceData->toArray());
    }

    /**
     * Get all resource data as collection.
     *
     * @param string $resourceName
     * @return Collection
     */
    public function getAllResourceData(string $resourceName): Collection
    {
        if (Cache::has($resourceName)) {
            return Cache::get($resourceName);
        }
        // Get the data for the resource and populate collection with resource results array.
        $response = $this->getResource($resourceName, null, 1);
        $resource = $response->getData();
        $results = json_decode(json_encode($resource->results), true);

        foreach($results as $key => $result) {
            $url_parts = explode('/', parse_url($result['url'])['path']);
            $id = $url_parts[3];
            $results[$key]['id'] = $id;
        }
        $allResourceData = collect($results);

        // If there is more then one page of results for the resource data, loop through and merge results with collector.
        while (!is_null($resource->next)) {
            $next = intval(Str::after($resource->next, 'page='));
            $response = $this->getResource($resourceName, null, $next);
            $resource = $response->getData();
            $results = json_decode(json_encode($resource->results), true);

            foreach($results as $key => $result) {
                $url_parts = explode('/', parse_url($result['url'])['path']);
                $id = $url_parts[3];
                $results[$key]['id'] = $id;
            }
            $allResourceData = $allResourceData->mergeRecursive($results);
        }

        // Return the resource array.
        return $this->putDataIntoCache($resourceName, $allResourceData);
    }

    /**
     * Get specific resource data as collection.
     *
     * @param string $resourceName
     * @param int $id
     * @return Collection
     */
    public function getSpecificResourceData(string $resourceName, int $id): Collection
    {
        if (Cache::has($resourceName."_".$id)) {
            return Cache::get($resourceName."_".$id);
        }

        // Get the data for the resource and populate collection with resource results array.
        $response = $this->getSpecificResource($resourceName, $id);

        // Return the resource array.
        return $this->putDataIntoCache($resourceName."_".$id, collect(json_decode(json_encode($response->getData(), true))));
    }

    /**
     * @param string $url
     * @param array|null $params
     * @return array
     */
    private function getResourceByUrl(string $url, array $params = null): array
    {
        // Request the data.
        $response = Http::get($url, $params);

        // Set the status code.
        $status = $response->status();

        // Check the response status.
        if ($status !== 200) {
            // Set the fail message.
            $data = $response->json();
        } else {
            // Substitute SWAPI url with app url so that our url can be in all displayed data.
            $data = json_decode(str_replace(config('swapi.non-ssl'), config('app.url'), $response->body()), true);
        }

        return ['status' => $status, 'data' => $data];
    }

    /**
     * Get array of allowed resources.
     *
     * @return array
     */
    private function allowedResources(): array
    {
        return [
            'films' => ['characters', 'planets', 'starships', 'vehicles', 'species'],
            'people' => ['homeworld', 'films', 'species', 'vehicles', 'starships'],
            'planets' => ['residents', 'films'],
            'species' => ['homeworld', 'people', 'films'],
            'starships' => ['pilots', 'films'],
            'vehicles' => ['pilots', 'films']
        ];
    }

    /**
     * Get array of resource synonyms.
     *
     * @return array
     */
    private function resourceSynonyms(): array
    {
        return [
            'characters' => 'people',
            'residents' => 'people',
            'pilots' => 'people',
            'homeworld' => 'planets'
        ];
    }
}
