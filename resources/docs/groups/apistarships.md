# API\Starships


## List all available starships (or search by term)


A Starship resource is a single transport craft that has hyperdrive capability.

<h4 class="fancy-heading-panel"><b>Attributes</b></h4>
<small class="badge badge-purple">name</small> <i>string</i> -- The name of this starship. The common name, such as "Death Star".<br>
<small class="badge badge-purple">model</small> <i>string</i> -- The model or official name of this starship. Such as "T-65 X-wing" or "DS-1 Orbital Battle Station".<br>
<small class="badge badge-purple">starship_class</small> <i>string</i> -- The class of this starship, such as "Starfighter" or "Deep Space Mobile Battlestation".<br>
<small class="badge badge-purple">manufacturer</small> <i>string</i> -- The manufacturer of this starship. Comma separated if more than one.<br>
<small class="badge badge-purple">cost_in_credits</small> <i>string</i> -- The cost of this starship new, in galactic credits.<br>
<small class="badge badge-purple">length</small> <i>string</i> -- The length of this starship in meters.<br>
<small class="badge badge-purple">crew</small> <i>string</i> -- The number of personnel needed to run or pilot this starship.<br>
<small class="badge badge-purple">passengers</small> <i>string</i> -- The number of non-essential people this starship can transport.<br>
<small class="badge badge-purple">max_atmosphering_speed</small> <i>string</i> -- The maximum speed of this starship in the atmosphere. "N/A" if this starship is incapable of atmospheric flight.<br>
<small class="badge badge-purple">hyperdrive_rating</small> <i>string</i>  string -- The class of this starships hyperdrive.<br>
<small class="badge badge-purple">MGLT</small> <i>string</i> -- The Maximum number of Megalights this starship can travel in a standard hour. A "Megalight" is a standard unit of distance and has never been defined before within the Star Wars universe. This figure is only really useful for measuring the difference in speed of starships. We can assume it is similar to AU, the distance between our Sun (Sol) and Earth.<br>
<small class="badge badge-purple">cargo_capacity</small> <i>string</i> -- The maximum number of kilograms that this starship can transport.<br>
<small class="badge badge-purple">consumables</small> <i>string</i> -- The maximum length of time that this starship can provide consumables for its entire crew without having to resupply.<br>
<small class="badge badge-purple">films</small> <i>array</i> -- An array of Film URL Resources that this starship has appeared in.<br>
<small class="badge badge-purple">pilots</small> <i>array</i> -- An array of People URL Resources that this starship has been piloted by.<br>
<small class="badge badge-purple">url</small> <i>string</i> -- The hypermedia URL of this resource.<br>
<small class="badge badge-purple">created</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was created.<br>
<small class="badge badge-purple">edited</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was edited.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/starships?search=Death+Star&page=1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/starships',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Death Star',
            'page'=> '1',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/starships"
);

let params = {
    "search": "Death Star",
    "page": "1",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "count": 1,
    "next": null,
    "previous": null,
    "results": [
        {
            "name": "Death Star",
            "model": "DS-1 Orbital Battle Station",
            "manufacturer": "Imperial Department of Military Research, Sienar Fleet Systems",
            "cost_in_credits": "1000000000000",
            "length": "120000",
            "max_atmosphering_speed": "n\/a",
            "crew": "342,953",
            "passengers": "843,342",
            "cargo_capacity": "1000000000000",
            "consumables": "3 years",
            "hyperdrive_rating": "4.0",
            "MGLT": "10",
            "starship_class": "Deep Space Mobile Battlestation",
            "pilots": [],
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/"
            ],
            "created": "2014-12-10T16:36:50.509000Z",
            "edited": "2014-12-20T21:26:24.783000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/starships\/9\/"
        }
    ]
}
```
<div id="execution-results-GETapi-starships" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-starships"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-starships"></code></pre>
</div>
<div id="execution-error-GETapi-starships" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-starships"></code></pre>
</div>
<form id="form-GETapi-starships" data-method="GET" data-path="api/starships" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-starships', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-starships" onclick="tryItOut('GETapi-starships');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-starships" onclick="cancelTryOut('GETapi-starships');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-starships" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/starships</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-starships" data-component="query"  hidden>
<br>
Term to search resources by. In case of Starship resource search applies to the name and model attributes. Defaults to 'null'.
</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETapi-starships" data-component="query"  hidden>
<br>
Page number parameter used for pagination of results. Defaults to 'null'.
</p>
</form>


## List starships schema


Schema allows you to see which attributes and their types are available for this resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/starships/schema" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/starships/schema',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/starships/schema"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "description": "A Starship",
    "title": "Starship",
    "required": [
        "name",
        "model",
        "manufacturer",
        "cost_in_credits",
        "length",
        "max_atmosphering_speed",
        "crew",
        "passengers",
        "cargo_capacity",
        "consumables",
        "hyperdrive_rating",
        "MGLT",
        "starship_class",
        "pilots",
        "films",
        "created",
        "edited",
        "url"
    ],
    "$schema": "http:\/\/json-schema.org\/draft-04\/schema",
    "type": "object",
    "properties": {
        "passengers": {
            "type": "string",
            "description": "The number of non-essential people this starship can transport."
        },
        "pilots": {
            "type": "array",
            "description": "An array of People URL Resources that this starship has been piloted by."
        },
        "name": {
            "type": "string",
            "description": "The name of this starship. The common name, such as Death Star."
        },
        "hyperdrive_rating": {
            "type": "string",
            "description": "The class of this starships hyperdrive."
        },
        "url": {
            "type": "string",
            "description": "The hypermedia URL of this resource.",
            "format": "uri"
        },
        "cargo_capacity": {
            "type": "string",
            "description": "The maximum number of kilograms that this starship can transport."
        },
        "edited": {
            "type": "string",
            "description": "the ISO 8601 date format of the time that this resource was edited.",
            "format": "date-time"
        },
        "consumables": {
            "type": "string",
            "description": "The maximum length of time that this starship can provide consumables for its entire crew without having to resupply."
        },
        "max_atmosphering_speed": {
            "type": "string",
            "description": "The maximum speed of this starship in atmosphere. n\/a if this starship is incapable of atmosphering flight."
        },
        "crew": {
            "type": "string",
            "description": "The number of personnel needed to run or pilot this starship."
        },
        "length": {
            "type": "string",
            "description": "The length of this starship in meters."
        },
        "MGLT": {
            "type": "string",
            "description": "The Maximum number of Megalights this starship can travel in a standard hour. A Megalight is a standard unit of distance and has never been defined before within the Star Wars universe. This figure is only really useful for measuring the difference in speed of starships. We can assume it is similar to AU, the distance between our Sun (Sol) and Earth."
        },
        "starship_class": {
            "type": "string",
            "description": "The class of this starship, such as Starfighter or Deep Space Mobile Battlestation."
        },
        "created": {
            "type": "string",
            "description": "The ISO 8601 date format of the time that this resource was created.",
            "format": "date-time"
        },
        "films": {
            "type": "array",
            "description": "An array of Film URL Resources that this starship has appeared in."
        },
        "model": {
            "type": "string",
            "description": "The model or official name of this starship. Such as T-65 X-wing or DS-1 Orbital Battle Station."
        },
        "cost_in_credits": {
            "type": "string",
            "description": "The cost of this starship new, in galactic credits."
        },
        "manufacturer": {
            "type": "string",
            "description": "The manufacturer of this starship. Comma seperated if more than one."
        }
    }
}
```
<div id="execution-results-GETapi-starships-schema" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-starships-schema"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-starships-schema"></code></pre>
</div>
<div id="execution-error-GETapi-starships-schema" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-starships-schema"></code></pre>
</div>
<form id="form-GETapi-starships-schema" data-method="GET" data-path="api/starships/schema" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-starships-schema', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-starships-schema" onclick="tryItOut('GETapi-starships-schema');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-starships-schema" onclick="cancelTryOut('GETapi-starships-schema');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-starships-schema" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/starships/schema</code></b>
</p>
</form>


## Retrieve a starship




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/starships/9" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/starships/9',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/starships/9"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "name": "Death Star",
    "model": "DS-1 Orbital Battle Station",
    "manufacturer": "Imperial Department of Military Research, Sienar Fleet Systems",
    "cost_in_credits": "1000000000000",
    "length": "120000",
    "max_atmosphering_speed": "n\/a",
    "crew": "342,953",
    "passengers": "843,342",
    "cargo_capacity": "1000000000000",
    "consumables": "3 years",
    "hyperdrive_rating": "4.0",
    "MGLT": "10",
    "starship_class": "Deep Space Mobile Battlestation",
    "pilots": [],
    "films": [
        "http:\/\/127.0.0.1:8000\/api\/films\/1\/"
    ],
    "created": "2014-12-10T16:36:50.509000Z",
    "edited": "2014-12-20T21:26:24.783000Z",
    "url": "http:\/\/127.0.0.1:8000\/api\/starships\/9\/"
}
```
<div id="execution-results-GETapi-starships--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-starships--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-starships--id-"></code></pre>
</div>
<div id="execution-error-GETapi-starships--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-starships--id-"></code></pre>
</div>
<form id="form-GETapi-starships--id-" data-method="GET" data-path="api/starships/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-starships--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-starships--id-" onclick="tryItOut('GETapi-starships--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-starships--id-" onclick="cancelTryOut('GETapi-starships--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-starships--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/starships/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-starships--id-" data-component="url" required  hidden>
<br>
The ID of the starship resource.
</p>
</form>


## List all specified subresource data of a specific starship




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/starships/9/films" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/starships/9/films',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/starships/9/films"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "Death Star": [
        {
            "title": "A New Hope",
            "episode_id": 4,
            "opening_crawl": "It is a period of civil war.\r\nRebel spaceships, striking\r\nfrom a hidden base, have won\r\ntheir first victory against\r\nthe evil Galactic Empire.\r\n\r\nDuring the battle, Rebel\r\nspies managed to steal secret\r\nplans to the Empire's\r\nultimate weapon, the DEATH\r\nSTAR, an armored space\r\nstation with enough power\r\nto destroy an entire planet.\r\n\r\nPursued by the Empire's\r\nsinister agents, Princess\r\nLeia races home aboard her\r\nstarship, custodian of the\r\nstolen plans that can save her\r\npeople and restore\r\nfreedom to the galaxy....",
            "director": "George Lucas",
            "producer": "Gary Kurtz, Rick McCallum",
            "release_date": "1977-05-25",
            "characters": [
                "http:\/\/127.0.0.1:8000\/api\/people\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/4\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/5\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/6\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/7\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/8\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/9\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/10\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/12\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/13\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/14\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/15\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/16\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/18\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/19\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/81\/"
            ],
            "planets": [
                "http:\/\/127.0.0.1:8000\/api\/planets\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/3\/"
            ],
            "starships": [
                "http:\/\/127.0.0.1:8000\/api\/starships\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/5\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/9\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/10\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/11\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/12\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/13\/"
            ],
            "vehicles": [
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/4\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/6\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/7\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/8\/"
            ],
            "species": [
                "http:\/\/127.0.0.1:8000\/api\/species\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/4\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/5\/"
            ],
            "created": "2014-12-10T14:23:31.880000Z",
            "edited": "2014-12-20T19:49:45.256000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/films\/1\/"
        }
    ]
}
```
<div id="execution-results-GETapi-starships--id---subresourceName-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-starships--id---subresourceName-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-starships--id---subresourceName-"></code></pre>
</div>
<div id="execution-error-GETapi-starships--id---subresourceName-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-starships--id---subresourceName-"></code></pre>
</div>
<form id="form-GETapi-starships--id---subresourceName-" data-method="GET" data-path="api/starships/{id}/{subresourceName}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-starships--id---subresourceName-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-starships--id---subresourceName-" onclick="tryItOut('GETapi-starships--id---subresourceName-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-starships--id---subresourceName-" onclick="cancelTryOut('GETapi-starships--id---subresourceName-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-starships--id---subresourceName-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/starships/{id}/{subresourceName}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-starships--id---subresourceName-" data-component="url" required  hidden>
<br>
The ID of the starship resource.
</p>
<p>
<b><code>subresourceName</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="subresourceName" data-endpoint="GETapi-starships--id---subresourceName-" data-component="url" required  hidden>
<br>
The subresource name of the given starship.
</p>
</form>


## Advanced search starship resources




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/starships/advanced-search?attribute=length&operator=%3E&condition=10000&type=number" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/starships/advanced-search',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'attribute'=> 'length',
            'operator'=> '>',
            'condition'=> '10000',
            'type'=> 'number',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/starships/advanced-search"
);

let params = {
    "attribute": "length",
    "operator": ">",
    "condition": "10000",
    "type": "number",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "name": "Death Star",
        "model": "DS-1 Orbital Battle Station",
        "manufacturer": "Imperial Department of Military Research, Sienar Fleet Systems",
        "cost_in_credits": "1000000000000",
        "length": "120000",
        "max_atmosphering_speed": "n\/a",
        "crew": "342,953",
        "passengers": "843,342",
        "cargo_capacity": "1000000000000",
        "consumables": "3 years",
        "hyperdrive_rating": "4.0",
        "MGLT": "10",
        "starship_class": "Deep Space Mobile Battlestation",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/1\/"
        ],
        "created": "2014-12-10T16:36:50.509000Z",
        "edited": "2014-12-20T21:26:24.783000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/starships\/9\/"
    },
    {
        "name": "Executor",
        "model": "Executor-class star dreadnought",
        "manufacturer": "Kuat Drive Yards, Fondor Shipyards",
        "cost_in_credits": "1143350000",
        "length": "19000",
        "max_atmosphering_speed": "n\/a",
        "crew": "279,144",
        "passengers": "38000",
        "cargo_capacity": "250000000",
        "consumables": "6 years",
        "hyperdrive_rating": "2.0",
        "MGLT": "40",
        "starship_class": "Star dreadnought",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
        ],
        "created": "2014-12-15T12:31:42.547000Z",
        "edited": "2014-12-20T21:23:49.893000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/starships\/15\/"
    }
]
```
<div id="execution-results-GETapi-starships-advanced-search" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-starships-advanced-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-starships-advanced-search"></code></pre>
</div>
<div id="execution-error-GETapi-starships-advanced-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-starships-advanced-search"></code></pre>
</div>
<form id="form-GETapi-starships-advanced-search" data-method="GET" data-path="api/starships/advanced-search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-starships-advanced-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-starships-advanced-search" onclick="tryItOut('GETapi-starships-advanced-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-starships-advanced-search" onclick="cancelTryOut('GETapi-starships-advanced-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-starships-advanced-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/starships/advanced-search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>attribute</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="attribute" data-endpoint="GETapi-starships-advanced-search" data-component="query" required  hidden>
<br>
Attribute name of the given starship resource used for condition check.
</p>
<p>
<b><code>operator</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="operator" data-endpoint="GETapi-starships-advanced-search" data-component="query" required  hidden>
<br>
Operator used in the condition check between attribute and condition parameter.
</p>
<p>
<b><code>condition</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="condition" data-endpoint="GETapi-starships-advanced-search" data-component="query" required  hidden>
<br>
Condition parameter used in the condition check against attribute.
</p>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="GETapi-starships-advanced-search" data-component="query" required  hidden>
<br>
Type of the attribute and condition parameter.
</p>
</form>


## Specific endpoint: List all starships that can have above 84000 passengers.




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/starships/passengers-over-84000" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/starships/passengers-over-84000',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/starships/passengers-over-84000"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "name": "Death Star",
        "model": "DS-1 Orbital Battle Station",
        "manufacturer": "Imperial Department of Military Research, Sienar Fleet Systems",
        "cost_in_credits": "1000000000000",
        "length": "120000",
        "max_atmosphering_speed": "n\/a",
        "crew": "342,953",
        "passengers": "843,342",
        "cargo_capacity": "1000000000000",
        "consumables": "3 years",
        "hyperdrive_rating": "4.0",
        "MGLT": "10",
        "starship_class": "Deep Space Mobile Battlestation",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/1\/"
        ],
        "created": "2014-12-10T16:36:50.509000Z",
        "edited": "2014-12-20T21:26:24.783000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/starships\/9\/"
    },
    {
        "name": "Droid control ship",
        "model": "Lucrehulk-class Droid Control Ship",
        "manufacturer": "Hoersch-Kessel Drive, Inc.",
        "cost_in_credits": "unknown",
        "length": "3170",
        "max_atmosphering_speed": "n\/a",
        "crew": "175",
        "passengers": "139000",
        "cargo_capacity": "4000000000",
        "consumables": "500 days",
        "hyperdrive_rating": "2.0",
        "MGLT": "unknown",
        "starship_class": "Droid control ship",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-19T17:04:06.323000Z",
        "edited": "2014-12-20T21:23:49.915000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/starships\/32\/"
    }
]
```
<div id="execution-results-GETapi-starships-passengers-over-84000" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-starships-passengers-over-84000"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-starships-passengers-over-84000"></code></pre>
</div>
<div id="execution-error-GETapi-starships-passengers-over-84000" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-starships-passengers-over-84000"></code></pre>
</div>
<form id="form-GETapi-starships-passengers-over-84000" data-method="GET" data-path="api/starships/passengers-over-84000" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-starships-passengers-over-84000', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-starships-passengers-over-84000" onclick="tryItOut('GETapi-starships-passengers-over-84000');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-starships-passengers-over-84000" onclick="cancelTryOut('GETapi-starships-passengers-over-84000');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-starships-passengers-over-84000" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/starships/passengers-over-84000</code></b>
</p>
</form>



