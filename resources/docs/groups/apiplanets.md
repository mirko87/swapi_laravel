# API\Planets


## List all available planets (or search by term)


A Planet resource is a large mass, planet or planetoid in the Star Wars Universe, at the time of 0 ABY.

<h4 class="fancy-heading-panel"><b>Attributes</b></h4>
<small class="badge badge-purple">name</small> <i>string</i> -- The name of this planet.<br>
<small class="badge badge-purple">diameter</small> <i>string</i> -- The diameter of this planet in kilometers.<br>
<small class="badge badge-purple">rotation_period</small> <i>string</i> -- The number of standard hours it takes for this planet to complete a single rotation on its axis.<br>
<small class="badge badge-purple">orbital_period</small> <i>string</i> -- The number of standard days it takes for this planet to complete a single orbit of its local star.<br>
<small class="badge badge-purple">gravity</small> <i>string</i> -- A number denoting the gravity of this planet, where "1" is normal or 1 standard G. "2" is twice or 2 standard Gs. "0.5" is half or 0.5 standard Gs.<br>
<small class="badge badge-purple">population</small> <i>string</i> -- The average population of sentient beings inhabiting this planet.<br>
<small class="badge badge-purple">climate</small> <i>string</i> -- The climate of this planet. Comma separated if diverse.<br>
<small class="badge badge-purple">terrain</small> <i>string</i> -- The terrain of this planet. Comma separated if diverse.<br>
<small class="badge badge-purple">surface_water</small> <i>string</i> -- The percentage of the planet surface that is naturally occurring water or bodies of water.<br>
<small class="badge badge-purple">residents</small> <i>array</i> -- An array of People URL Resources that live on this planet.<br>
<small class="badge badge-purple">films</small> <i>array</i> -- An array of Film URL Resources that this planet has appeared in.<br>
<small class="badge badge-purple">url</small> <i>string</i> -- The hypermedia URL of this resource.<br>
<small class="badge badge-purple">created</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was created.<br>
<small class="badge badge-purple">edited</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was edited.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/planets?search=Tatooine&page=1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/planets',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Tatooine',
            'page'=> '1',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/planets"
);

let params = {
    "search": "Tatooine",
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
            "name": "Tatooine",
            "rotation_period": "23",
            "orbital_period": "304",
            "diameter": "10465",
            "climate": "arid",
            "gravity": "1 standard",
            "terrain": "desert",
            "surface_water": "1",
            "population": "200000",
            "residents": [
                "http:\/\/127.0.0.1:8000\/api\/people\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/4\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/6\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/7\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/8\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/9\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/11\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/43\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/62\/"
            ],
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
            ],
            "created": "2014-12-09T13:50:49.641000Z",
            "edited": "2014-12-20T20:58:18.411000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/planets\/1\/"
        }
    ]
}
```
<div id="execution-results-GETapi-planets" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-planets"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-planets"></code></pre>
</div>
<div id="execution-error-GETapi-planets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-planets"></code></pre>
</div>
<form id="form-GETapi-planets" data-method="GET" data-path="api/planets" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-planets', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-planets" onclick="tryItOut('GETapi-planets');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-planets" onclick="cancelTryOut('GETapi-planets');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-planets" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/planets</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-planets" data-component="query"  hidden>
<br>
Term to search resources by. In case of Planet resource search applies to the name attribute. Defaults to 'null'.
</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETapi-planets" data-component="query"  hidden>
<br>
Page number parameter used for pagination of results. Defaults to 'null'.
</p>
</form>


## List planets schema


Schema allows you to see which attributes and their types are available for this resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/planets/schema" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/planets/schema',
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
    "http://127.0.0.1:8000/api/planets/schema"
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
    "description": "A planet.",
    "title": "Planet",
    "required": [
        "name",
        "rotation_period",
        "orbital_period",
        "diameter",
        "climate",
        "gravity",
        "terrain",
        "surface_water",
        "population",
        "residents",
        "films",
        "created",
        "edited",
        "url"
    ],
    "$schema": "http:\/\/json-schema.org\/draft-04\/schema",
    "type": "object",
    "properties": {
        "diameter": {
            "type": "string",
            "description": "The diameter of this planet in kilometers."
        },
        "climate": {
            "type": "string",
            "description": "The climate of this planet. Comma-seperated if diverse."
        },
        "surface_water": {
            "type": "string",
            "description": "The percentage of the planet surface that is naturally occuring water or bodies of water."
        },
        "name": {
            "type": "string",
            "description": "The name of this planet."
        },
        "created": {
            "type": "string",
            "description": "The ISO 8601 date format of the time that this resource was created.",
            "format": "date-time"
        },
        "url": {
            "type": "string",
            "description": "The hypermedia URL of this resource.",
            "format": "uri"
        },
        "rotation_period": {
            "type": "string",
            "description": "The number of standard hours it takes for this planet to complete a single rotation on its axis."
        },
        "edited": {
            "type": "string",
            "description": "the ISO 8601 date format of the time that this resource was edited.",
            "format": "date-time"
        },
        "terrain": {
            "type": "string",
            "description": "the terrain of this planet. Comma-seperated if diverse."
        },
        "gravity": {
            "type": "string",
            "description": "A number denoting the gravity of this planet. Where 1 is normal."
        },
        "orbital_period": {
            "type": "string",
            "description": "The number of standard days it takes for this planet to complete a single orbit of its local star."
        },
        "films": {
            "type": "array",
            "description": "An array of Film URL Resources that this planet has appeared in."
        },
        "residents": {
            "type": "array",
            "description": "An array of People URL Resources that live on this planet."
        },
        "population": {
            "type": "string",
            "description": "The average populationof sentient beings inhabiting this planet."
        }
    }
}
```
<div id="execution-results-GETapi-planets-schema" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-planets-schema"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-planets-schema"></code></pre>
</div>
<div id="execution-error-GETapi-planets-schema" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-planets-schema"></code></pre>
</div>
<form id="form-GETapi-planets-schema" data-method="GET" data-path="api/planets/schema" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-planets-schema', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-planets-schema" onclick="tryItOut('GETapi-planets-schema');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-planets-schema" onclick="cancelTryOut('GETapi-planets-schema');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-planets-schema" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/planets/schema</code></b>
</p>
</form>


## Retrieve a planet




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/planets/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/planets/1',
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
    "http://127.0.0.1:8000/api/planets/1"
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
    "name": "Tatooine",
    "rotation_period": "23",
    "orbital_period": "304",
    "diameter": "10465",
    "climate": "arid",
    "gravity": "1 standard",
    "terrain": "desert",
    "surface_water": "1",
    "population": "200000",
    "residents": [
        "http:\/\/127.0.0.1:8000\/api\/people\/1\/",
        "http:\/\/127.0.0.1:8000\/api\/people\/2\/",
        "http:\/\/127.0.0.1:8000\/api\/people\/4\/",
        "http:\/\/127.0.0.1:8000\/api\/people\/6\/",
        "http:\/\/127.0.0.1:8000\/api\/people\/7\/",
        "http:\/\/127.0.0.1:8000\/api\/people\/8\/",
        "http:\/\/127.0.0.1:8000\/api\/people\/9\/",
        "http:\/\/127.0.0.1:8000\/api\/people\/11\/",
        "http:\/\/127.0.0.1:8000\/api\/people\/43\/",
        "http:\/\/127.0.0.1:8000\/api\/people\/62\/"
    ],
    "films": [
        "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
        "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
        "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
        "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
        "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
    ],
    "created": "2014-12-09T13:50:49.641000Z",
    "edited": "2014-12-20T20:58:18.411000Z",
    "url": "http:\/\/127.0.0.1:8000\/api\/planets\/1\/"
}
```
<div id="execution-results-GETapi-planets--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-planets--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-planets--id-"></code></pre>
</div>
<div id="execution-error-GETapi-planets--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-planets--id-"></code></pre>
</div>
<form id="form-GETapi-planets--id-" data-method="GET" data-path="api/planets/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-planets--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-planets--id-" onclick="tryItOut('GETapi-planets--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-planets--id-" onclick="cancelTryOut('GETapi-planets--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-planets--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/planets/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-planets--id-" data-component="url" required  hidden>
<br>
The ID of the planet resource.
</p>
</form>


## List all specified subresource data of a specific planet




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/planets/1/residents" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/planets/1/residents',
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
    "http://127.0.0.1:8000/api/planets/1/residents"
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
    "Tatooine": [
        {
            "name": "Luke Skywalker",
            "height": "172",
            "mass": "77",
            "hair_color": "blond",
            "skin_color": "fair",
            "eye_color": "blue",
            "birth_year": "19BBY",
            "gender": "male",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/1\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
            ],
            "species": [],
            "vehicles": [
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/14\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/30\/"
            ],
            "starships": [
                "http:\/\/127.0.0.1:8000\/api\/starships\/12\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/22\/"
            ],
            "created": "2014-12-09T13:50:51.644000Z",
            "edited": "2014-12-20T21:17:56.891000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/1\/"
        },
        {
            "name": "C-3PO",
            "height": "167",
            "mass": "75",
            "hair_color": "n\/a",
            "skin_color": "gold",
            "eye_color": "yellow",
            "birth_year": "112BBY",
            "gender": "n\/a",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/1\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
            ],
            "species": [
                "http:\/\/127.0.0.1:8000\/api\/species\/2\/"
            ],
            "vehicles": [],
            "starships": [],
            "created": "2014-12-10T15:10:51.357000Z",
            "edited": "2014-12-20T21:17:50.309000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/2\/"
        },
        {
            "name": "Darth Vader",
            "height": "202",
            "mass": "136",
            "hair_color": "none",
            "skin_color": "white",
            "eye_color": "yellow",
            "birth_year": "41.9BBY",
            "gender": "male",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/1\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
            ],
            "species": [],
            "vehicles": [],
            "starships": [
                "http:\/\/127.0.0.1:8000\/api\/starships\/13\/"
            ],
            "created": "2014-12-10T15:18:20.704000Z",
            "edited": "2014-12-20T21:17:50.313000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/4\/"
        },
        {
            "name": "Owen Lars",
            "height": "178",
            "mass": "120",
            "hair_color": "brown, grey",
            "skin_color": "light",
            "eye_color": "blue",
            "birth_year": "52BBY",
            "gender": "male",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/1\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
            ],
            "species": [],
            "vehicles": [],
            "starships": [],
            "created": "2014-12-10T15:52:14.024000Z",
            "edited": "2014-12-20T21:17:50.317000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/6\/"
        },
        {
            "name": "Beru Whitesun lars",
            "height": "165",
            "mass": "75",
            "hair_color": "brown",
            "skin_color": "light",
            "eye_color": "blue",
            "birth_year": "47BBY",
            "gender": "female",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/1\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
            ],
            "species": [],
            "vehicles": [],
            "starships": [],
            "created": "2014-12-10T15:53:41.121000Z",
            "edited": "2014-12-20T21:17:50.319000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/7\/"
        },
        {
            "name": "R5-D4",
            "height": "97",
            "mass": "32",
            "hair_color": "n\/a",
            "skin_color": "white, red",
            "eye_color": "red",
            "birth_year": "unknown",
            "gender": "n\/a",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/1\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/"
            ],
            "species": [
                "http:\/\/127.0.0.1:8000\/api\/species\/2\/"
            ],
            "vehicles": [],
            "starships": [],
            "created": "2014-12-10T15:57:50.959000Z",
            "edited": "2014-12-20T21:17:50.321000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/8\/"
        },
        {
            "name": "Biggs Darklighter",
            "height": "183",
            "mass": "84",
            "hair_color": "black",
            "skin_color": "light",
            "eye_color": "brown",
            "birth_year": "24BBY",
            "gender": "male",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/1\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/"
            ],
            "species": [],
            "vehicles": [],
            "starships": [
                "http:\/\/127.0.0.1:8000\/api\/starships\/12\/"
            ],
            "created": "2014-12-10T15:59:50.509000Z",
            "edited": "2014-12-20T21:17:50.323000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/9\/"
        },
        {
            "name": "Anakin Skywalker",
            "height": "188",
            "mass": "84",
            "hair_color": "blond",
            "skin_color": "fair",
            "eye_color": "blue",
            "birth_year": "41.9BBY",
            "gender": "male",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/1\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
            ],
            "species": [],
            "vehicles": [
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/44\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/46\/"
            ],
            "starships": [
                "http:\/\/127.0.0.1:8000\/api\/starships\/39\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/59\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/65\/"
            ],
            "created": "2014-12-10T16:20:44.310000Z",
            "edited": "2014-12-20T21:17:50.327000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/11\/"
        },
        {
            "name": "Shmi Skywalker",
            "height": "163",
            "mass": "unknown",
            "hair_color": "black",
            "skin_color": "fair",
            "eye_color": "brown",
            "birth_year": "72BBY",
            "gender": "female",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/1\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
            ],
            "species": [],
            "vehicles": [],
            "starships": [],
            "created": "2014-12-19T17:57:41.191000Z",
            "edited": "2014-12-20T21:17:50.401000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/43\/"
        },
        {
            "name": "Cliegg Lars",
            "height": "183",
            "mass": "unknown",
            "hair_color": "brown",
            "skin_color": "fair",
            "eye_color": "blue",
            "birth_year": "82BBY",
            "gender": "male",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/1\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
            ],
            "species": [],
            "vehicles": [],
            "starships": [],
            "created": "2014-12-20T15:59:03.958000Z",
            "edited": "2014-12-20T21:17:50.451000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/62\/"
        }
    ]
}
```
<div id="execution-results-GETapi-planets--id---subresourceName-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-planets--id---subresourceName-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-planets--id---subresourceName-"></code></pre>
</div>
<div id="execution-error-GETapi-planets--id---subresourceName-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-planets--id---subresourceName-"></code></pre>
</div>
<form id="form-GETapi-planets--id---subresourceName-" data-method="GET" data-path="api/planets/{id}/{subresourceName}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-planets--id---subresourceName-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-planets--id---subresourceName-" onclick="tryItOut('GETapi-planets--id---subresourceName-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-planets--id---subresourceName-" onclick="cancelTryOut('GETapi-planets--id---subresourceName-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-planets--id---subresourceName-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/planets/{id}/{subresourceName}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-planets--id---subresourceName-" data-component="url" required  hidden>
<br>
The ID of the planet resource.
</p>
<p>
<b><code>subresourceName</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="subresourceName" data-endpoint="GETapi-planets--id---subresourceName-" data-component="url" required  hidden>
<br>
The subresource name of the given planet.
</p>
</form>


## Advanced search planet resources




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/planets/advanced-search?attribute=diameter&operator=%3C&condition=11000&type=number" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/planets/advanced-search',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'attribute'=> 'diameter',
            'operator'=> '<',
            'condition'=> '11000',
            'type'=> 'number',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/planets/advanced-search"
);

let params = {
    "attribute": "diameter",
    "operator": "<",
    "condition": "11000",
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
        "name": "Tatooine",
        "rotation_period": "23",
        "orbital_period": "304",
        "diameter": "10465",
        "climate": "arid",
        "gravity": "1 standard",
        "terrain": "desert",
        "surface_water": "1",
        "population": "200000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/1\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/2\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/6\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/7\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/8\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/9\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/11\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/43\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/62\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-09T13:50:49.641000Z",
        "edited": "2014-12-20T20:58:18.411000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/1\/"
    },
    {
        "name": "Yavin IV",
        "rotation_period": "24",
        "orbital_period": "4818",
        "diameter": "10200",
        "climate": "temperate, tropical",
        "gravity": "1 standard",
        "terrain": "jungle, rainforests",
        "surface_water": "8",
        "population": "1000",
        "residents": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/1\/"
        ],
        "created": "2014-12-10T11:37:19.144000Z",
        "edited": "2014-12-20T20:58:18.421000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/3\/"
    },
    {
        "name": "Hoth",
        "rotation_period": "23",
        "orbital_period": "549",
        "diameter": "7200",
        "climate": "frozen",
        "gravity": "1.1 standard",
        "terrain": "tundra, ice caves, mountain ranges",
        "surface_water": "100",
        "population": "unknown",
        "residents": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/"
        ],
        "created": "2014-12-10T11:39:13.934000Z",
        "edited": "2014-12-20T20:58:18.423000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/4\/"
    },
    {
        "name": "Dagobah",
        "rotation_period": "23",
        "orbital_period": "341",
        "diameter": "8900",
        "climate": "murky",
        "gravity": "N\/A",
        "terrain": "swamp, jungles",
        "surface_water": "8",
        "population": "unknown",
        "residents": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-10T11:42:22.590000Z",
        "edited": "2014-12-20T20:58:18.425000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/5\/"
    },
    {
        "name": "Endor",
        "rotation_period": "18",
        "orbital_period": "402",
        "diameter": "4900",
        "climate": "temperate",
        "gravity": "0.85 standard",
        "terrain": "forests, mountains, lakes",
        "surface_water": "8",
        "population": "30000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/30\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
        ],
        "created": "2014-12-10T11:50:29.349000Z",
        "edited": "2014-12-20T20:58:18.429000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/7\/"
    },
    {
        "name": "Mustafar",
        "rotation_period": "36",
        "orbital_period": "412",
        "diameter": "4200",
        "climate": "hot",
        "gravity": "1 standard",
        "terrain": "volcanoes, lava rivers, mountains, caves",
        "surface_water": "0",
        "population": "20000",
        "residents": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-10T12:50:16.526000Z",
        "edited": "2014-12-20T20:58:18.440000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/13\/"
    },
    {
        "name": "Polis Massa",
        "rotation_period": "24",
        "orbital_period": "590",
        "diameter": "0",
        "climate": "artificial temperate ",
        "gravity": "0.56 standard",
        "terrain": "airless asteroid",
        "surface_water": "0",
        "population": "1000000",
        "residents": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-10T13:33:46.405000Z",
        "edited": "2014-12-20T20:58:18.444000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/15\/"
    },
    {
        "name": "Mygeeto",
        "rotation_period": "12",
        "orbital_period": "167",
        "diameter": "10088",
        "climate": "frigid",
        "gravity": "1 standard",
        "terrain": "glaciers, mountains, ice canyons",
        "surface_water": "unknown",
        "population": "19000000",
        "residents": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-10T13:43:39.139000Z",
        "edited": "2014-12-20T20:58:18.446000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/16\/"
    },
    {
        "name": "Felucia",
        "rotation_period": "34",
        "orbital_period": "231",
        "diameter": "9100",
        "climate": "hot, humid",
        "gravity": "0.75 standard",
        "terrain": "fungus forests",
        "surface_water": "unknown",
        "population": "8500000",
        "residents": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-10T13:44:50.397000Z",
        "edited": "2014-12-20T20:58:18.447000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/17\/"
    },
    {
        "name": "Cato Neimoidia",
        "rotation_period": "25",
        "orbital_period": "278",
        "diameter": "0",
        "climate": "temperate, moist",
        "gravity": "1 standard",
        "terrain": "mountains, fields, forests, rock arches",
        "surface_water": "unknown",
        "population": "10000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/33\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-10T13:46:28.704000Z",
        "edited": "2014-12-20T20:58:18.449000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/18\/"
    },
    {
        "name": "Stewjon",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "0",
        "climate": "temperate",
        "gravity": "1 standard",
        "terrain": "grass",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/10\/"
        ],
        "films": [],
        "created": "2014-12-10T16:16:26.566000Z",
        "edited": "2014-12-20T20:58:18.452000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/20\/"
    },
    {
        "name": "Rodia",
        "rotation_period": "29",
        "orbital_period": "305",
        "diameter": "7549",
        "climate": "hot",
        "gravity": "1 standard",
        "terrain": "jungles, oceans, urban, swamps",
        "surface_water": "60",
        "population": "1300000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/15\/"
        ],
        "films": [],
        "created": "2014-12-10T17:03:28.110000Z",
        "edited": "2014-12-20T20:58:18.458000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/23\/"
    },
    {
        "name": "Dantooine",
        "rotation_period": "25",
        "orbital_period": "378",
        "diameter": "9830",
        "climate": "temperate",
        "gravity": "1 standard",
        "terrain": "oceans, savannas, mountains, grasslands",
        "surface_water": "unknown",
        "population": "1000",
        "residents": [],
        "films": [],
        "created": "2014-12-10T17:23:29.896000Z",
        "edited": "2014-12-20T20:58:18.461000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/25\/"
    },
    {
        "name": "Bestine IV",
        "rotation_period": "26",
        "orbital_period": "680",
        "diameter": "6400",
        "climate": "temperate",
        "gravity": "unknown",
        "terrain": "rocky islands, oceans",
        "surface_water": "98",
        "population": "62000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/19\/"
        ],
        "films": [],
        "created": "2014-12-12T11:16:55.078000Z",
        "edited": "2014-12-20T20:58:18.463000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/26\/"
    },
    {
        "name": "unknown",
        "rotation_period": "0",
        "orbital_period": "0",
        "diameter": "0",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "unknown",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/20\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/23\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/29\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/32\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/75\/"
        ],
        "films": [],
        "created": "2014-12-15T12:25:59.569000Z",
        "edited": "2014-12-20T20:58:18.466000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/28\/"
    },
    {
        "name": "Trandosha",
        "rotation_period": "25",
        "orbital_period": "371",
        "diameter": "0",
        "climate": "arid",
        "gravity": "0.62 standard",
        "terrain": "mountains, seas, grasslands, deserts",
        "surface_water": "unknown",
        "population": "42000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/24\/"
        ],
        "films": [],
        "created": "2014-12-15T12:53:47.695000Z",
        "edited": "2014-12-20T20:58:18.468000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/29\/"
    },
    {
        "name": "Socorro",
        "rotation_period": "20",
        "orbital_period": "326",
        "diameter": "0",
        "climate": "arid",
        "gravity": "1 standard",
        "terrain": "deserts, mountains",
        "surface_water": "unknown",
        "population": "300000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/25\/"
        ],
        "films": [],
        "created": "2014-12-15T12:56:31.121000Z",
        "edited": "2014-12-20T20:58:18.469000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/30\/"
    },
    {
        "name": "Toydaria",
        "rotation_period": "21",
        "orbital_period": "184",
        "diameter": "7900",
        "climate": "temperate",
        "gravity": "1",
        "terrain": "swamps, lakes",
        "surface_water": "unknown",
        "population": "11000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/40\/"
        ],
        "films": [],
        "created": "2014-12-19T17:47:54.403000Z",
        "edited": "2014-12-20T20:58:18.476000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/34\/"
    },
    {
        "name": "Dathomir",
        "rotation_period": "24",
        "orbital_period": "491",
        "diameter": "10480",
        "climate": "temperate",
        "gravity": "0.9",
        "terrain": "forests, deserts, savannas",
        "surface_water": "unknown",
        "population": "5200",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/44\/"
        ],
        "films": [],
        "created": "2014-12-19T18:00:40.142000Z",
        "edited": "2014-12-20T20:58:18.480000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/36\/"
    },
    {
        "name": "Ryloth",
        "rotation_period": "30",
        "orbital_period": "305",
        "diameter": "10600",
        "climate": "temperate, arid, subartic",
        "gravity": "1",
        "terrain": "mountains, valleys, deserts, tundra",
        "surface_water": "5",
        "population": "1500000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/45\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/46\/"
        ],
        "films": [],
        "created": "2014-12-20T09:46:25.740000Z",
        "edited": "2014-12-20T20:58:18.481000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/37\/"
    },
    {
        "name": "Aleen Minor",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "unknown",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/47\/"
        ],
        "films": [],
        "created": "2014-12-20T09:52:23.452000Z",
        "edited": "2014-12-20T20:58:18.483000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/38\/"
    },
    {
        "name": "Troiken",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "desert, tundra, rainforests, mountains",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/49\/"
        ],
        "films": [],
        "created": "2014-12-20T10:01:37.395000Z",
        "edited": "2014-12-20T20:58:18.487000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/40\/"
    },
    {
        "name": "Haruun Kal",
        "rotation_period": "25",
        "orbital_period": "383",
        "diameter": "10120",
        "climate": "temperate",
        "gravity": "0.98",
        "terrain": "toxic cloudsea, plateaus, volcanoes",
        "surface_water": "unknown",
        "population": "705300",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/51\/"
        ],
        "films": [],
        "created": "2014-12-20T10:12:28.980000Z",
        "edited": "2014-12-20T20:58:18.491000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/42\/"
    },
    {
        "name": "Cerea",
        "rotation_period": "27",
        "orbital_period": "386",
        "diameter": "unknown",
        "climate": "temperate",
        "gravity": "1",
        "terrain": "verdant",
        "surface_water": "20",
        "population": "450000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/52\/"
        ],
        "films": [],
        "created": "2014-12-20T10:14:48.178000Z",
        "edited": "2014-12-20T20:58:18.493000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/43\/"
    },
    {
        "name": "Iridonia",
        "rotation_period": "29",
        "orbital_period": "413",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "rocky canyons, acid pools",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/54\/"
        ],
        "films": [],
        "created": "2014-12-20T10:26:05.788000Z",
        "edited": "2014-12-20T20:58:18.497000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/45\/"
    },
    {
        "name": "Tholoth",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "unknown",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [],
        "films": [],
        "created": "2014-12-20T10:28:31.117000Z",
        "edited": "2014-12-20T20:58:18.498000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/46\/"
    },
    {
        "name": "Iktotch",
        "rotation_period": "22",
        "orbital_period": "481",
        "diameter": "unknown",
        "climate": "arid, rocky, windy",
        "gravity": "1",
        "terrain": "rocky",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/56\/"
        ],
        "films": [],
        "created": "2014-12-20T10:31:32.413000Z",
        "edited": "2014-12-20T20:58:18.500000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/47\/"
    },
    {
        "name": "Quermia",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "unknown",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/57\/"
        ],
        "films": [],
        "created": "2014-12-20T10:34:08.249000Z",
        "edited": "2014-12-20T20:58:18.502000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/48\/"
    },
    {
        "name": "Champala",
        "rotation_period": "27",
        "orbital_period": "318",
        "diameter": "unknown",
        "climate": "temperate",
        "gravity": "1",
        "terrain": "oceans, rainforests, plateaus",
        "surface_water": "unknown",
        "population": "3500000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/59\/"
        ],
        "films": [],
        "created": "2014-12-20T10:52:51.524000Z",
        "edited": "2014-12-20T20:58:18.506000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/50\/"
    },
    {
        "name": "Mirial",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "deserts",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/64\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/65\/"
        ],
        "films": [],
        "created": "2014-12-20T16:44:46.318000Z",
        "edited": "2014-12-20T20:58:18.508000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/51\/"
    },
    {
        "name": "Serenno",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "rainforests, rivers, mountains",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/67\/"
        ],
        "films": [],
        "created": "2014-12-20T16:52:13.357000Z",
        "edited": "2014-12-20T20:58:18.510000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/52\/"
    },
    {
        "name": "Concord Dawn",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "jungles, forests, deserts",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/69\/"
        ],
        "films": [],
        "created": "2014-12-20T16:54:39.909000Z",
        "edited": "2014-12-20T20:58:18.512000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/53\/"
    },
    {
        "name": "Zolan",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "unknown",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/70\/"
        ],
        "films": [],
        "created": "2014-12-20T16:56:37.250000Z",
        "edited": "2014-12-20T20:58:18.514000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/54\/"
    },
    {
        "name": "Ojom",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "frigid",
        "gravity": "unknown",
        "terrain": "oceans, glaciers",
        "surface_water": "100",
        "population": "500000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/71\/"
        ],
        "films": [],
        "created": "2014-12-20T17:27:41.286000Z",
        "edited": "2014-12-20T20:58:18.516000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/55\/"
    },
    {
        "name": "Skako",
        "rotation_period": "27",
        "orbital_period": "384",
        "diameter": "unknown",
        "climate": "temperate",
        "gravity": "1",
        "terrain": "urban, vines",
        "surface_water": "unknown",
        "population": "500000000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/76\/"
        ],
        "films": [],
        "created": "2014-12-20T17:50:47.864000Z",
        "edited": "2014-12-20T20:58:18.517000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/56\/"
    },
    {
        "name": "Shili",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "temperate",
        "gravity": "1",
        "terrain": "cities, savannahs, seas, plains",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/78\/"
        ],
        "films": [],
        "created": "2014-12-20T18:43:14.049000Z",
        "edited": "2014-12-20T20:58:18.521000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/58\/"
    },
    {
        "name": "Umbara",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "unknown",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/82\/"
        ],
        "films": [],
        "created": "2014-12-20T20:18:36.256000Z",
        "edited": "2014-12-20T20:58:18.525000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/60\/"
    }
]
```
<div id="execution-results-GETapi-planets-advanced-search" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-planets-advanced-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-planets-advanced-search"></code></pre>
</div>
<div id="execution-error-GETapi-planets-advanced-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-planets-advanced-search"></code></pre>
</div>
<form id="form-GETapi-planets-advanced-search" data-method="GET" data-path="api/planets/advanced-search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-planets-advanced-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-planets-advanced-search" onclick="tryItOut('GETapi-planets-advanced-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-planets-advanced-search" onclick="cancelTryOut('GETapi-planets-advanced-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-planets-advanced-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/planets/advanced-search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>attribute</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="attribute" data-endpoint="GETapi-planets-advanced-search" data-component="query" required  hidden>
<br>
Attribute name of the given planet resource used for condition check.
</p>
<p>
<b><code>operator</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="operator" data-endpoint="GETapi-planets-advanced-search" data-component="query" required  hidden>
<br>
Operator used in the condition check between attribute and condition parameter.
</p>
<p>
<b><code>condition</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="condition" data-endpoint="GETapi-planets-advanced-search" data-component="query" required  hidden>
<br>
Condition parameter used in the condition check against attribute.
</p>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="GETapi-planets-advanced-search" data-component="query" required  hidden>
<br>
Type of the attribute and condition parameter.
</p>
</form>


## Specific endpoint: List all planets created after 12/04/2014




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/planets/created-after-12042014" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/planets/created-after-12042014',
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
    "http://127.0.0.1:8000/api/planets/created-after-12042014"
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
        "name": "Tatooine",
        "rotation_period": "23",
        "orbital_period": "304",
        "diameter": "10465",
        "climate": "arid",
        "gravity": "1 standard",
        "terrain": "desert",
        "surface_water": "1",
        "population": "200000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/1\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/2\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/6\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/7\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/8\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/9\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/11\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/43\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/62\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-09T13:50:49.641000Z",
        "edited": "2014-12-20T20:58:18.411000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/1\/"
    },
    {
        "name": "Alderaan",
        "rotation_period": "24",
        "orbital_period": "364",
        "diameter": "12500",
        "climate": "temperate",
        "gravity": "1 standard",
        "terrain": "grasslands, mountains",
        "surface_water": "40",
        "population": "2000000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/68\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/81\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-10T11:35:48.479000Z",
        "edited": "2014-12-20T20:58:18.420000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/2\/"
    },
    {
        "name": "Yavin IV",
        "rotation_period": "24",
        "orbital_period": "4818",
        "diameter": "10200",
        "climate": "temperate, tropical",
        "gravity": "1 standard",
        "terrain": "jungle, rainforests",
        "surface_water": "8",
        "population": "1000",
        "residents": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/1\/"
        ],
        "created": "2014-12-10T11:37:19.144000Z",
        "edited": "2014-12-20T20:58:18.421000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/3\/"
    },
    {
        "name": "Hoth",
        "rotation_period": "23",
        "orbital_period": "549",
        "diameter": "7200",
        "climate": "frozen",
        "gravity": "1.1 standard",
        "terrain": "tundra, ice caves, mountain ranges",
        "surface_water": "100",
        "population": "unknown",
        "residents": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/"
        ],
        "created": "2014-12-10T11:39:13.934000Z",
        "edited": "2014-12-20T20:58:18.423000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/4\/"
    },
    {
        "name": "Dagobah",
        "rotation_period": "23",
        "orbital_period": "341",
        "diameter": "8900",
        "climate": "murky",
        "gravity": "N\/A",
        "terrain": "swamp, jungles",
        "surface_water": "8",
        "population": "unknown",
        "residents": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-10T11:42:22.590000Z",
        "edited": "2014-12-20T20:58:18.425000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/5\/"
    },
    {
        "name": "Bespin",
        "rotation_period": "12",
        "orbital_period": "5110",
        "diameter": "118000",
        "climate": "temperate",
        "gravity": "1.5 (surface), 1 standard (Cloud City)",
        "terrain": "gas giant",
        "surface_water": "0",
        "population": "6000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/26\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/"
        ],
        "created": "2014-12-10T11:43:55.240000Z",
        "edited": "2014-12-20T20:58:18.427000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/6\/"
    },
    {
        "name": "Endor",
        "rotation_period": "18",
        "orbital_period": "402",
        "diameter": "4900",
        "climate": "temperate",
        "gravity": "0.85 standard",
        "terrain": "forests, mountains, lakes",
        "surface_water": "8",
        "population": "30000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/30\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
        ],
        "created": "2014-12-10T11:50:29.349000Z",
        "edited": "2014-12-20T20:58:18.429000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/7\/"
    },
    {
        "name": "Naboo",
        "rotation_period": "26",
        "orbital_period": "312",
        "diameter": "12120",
        "climate": "temperate",
        "gravity": "1 standard",
        "terrain": "grassy hills, swamps, forests, mountains",
        "surface_water": "12",
        "population": "4500000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/3\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/21\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/35\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/36\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/37\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/38\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/39\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/42\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/60\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/61\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/66\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-10T11:52:31.066000Z",
        "edited": "2014-12-20T20:58:18.430000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/8\/"
    },
    {
        "name": "Coruscant",
        "rotation_period": "24",
        "orbital_period": "368",
        "diameter": "12240",
        "climate": "temperate",
        "gravity": "1 standard",
        "terrain": "cityscape, mountains",
        "surface_water": "unknown",
        "population": "1000000000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/34\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/55\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/74\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-10T11:54:13.921000Z",
        "edited": "2014-12-20T20:58:18.432000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/9\/"
    },
    {
        "name": "Kamino",
        "rotation_period": "27",
        "orbital_period": "463",
        "diameter": "19720",
        "climate": "temperate",
        "gravity": "1 standard",
        "terrain": "ocean",
        "surface_water": "100",
        "population": "1000000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/22\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/72\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/73\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "created": "2014-12-10T12:45:06.577000Z",
        "edited": "2014-12-20T20:58:18.434000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/10\/"
    },
    {
        "name": "Geonosis",
        "rotation_period": "30",
        "orbital_period": "256",
        "diameter": "11370",
        "climate": "temperate, arid",
        "gravity": "0.9 standard",
        "terrain": "rock, desert, mountain, barren",
        "surface_water": "5",
        "population": "100000000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/63\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "created": "2014-12-10T12:47:22.350000Z",
        "edited": "2014-12-20T20:58:18.437000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/11\/"
    },
    {
        "name": "Utapau",
        "rotation_period": "27",
        "orbital_period": "351",
        "diameter": "12900",
        "climate": "temperate, arid, windy",
        "gravity": "1 standard",
        "terrain": "scrublands, savanna, canyons, sinkholes",
        "surface_water": "0.9",
        "population": "95000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/83\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-10T12:49:01.491000Z",
        "edited": "2014-12-20T20:58:18.439000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/12\/"
    },
    {
        "name": "Mustafar",
        "rotation_period": "36",
        "orbital_period": "412",
        "diameter": "4200",
        "climate": "hot",
        "gravity": "1 standard",
        "terrain": "volcanoes, lava rivers, mountains, caves",
        "surface_water": "0",
        "population": "20000",
        "residents": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-10T12:50:16.526000Z",
        "edited": "2014-12-20T20:58:18.440000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/13\/"
    },
    {
        "name": "Kashyyyk",
        "rotation_period": "26",
        "orbital_period": "381",
        "diameter": "12765",
        "climate": "tropical",
        "gravity": "1 standard",
        "terrain": "jungle, forests, lakes, rivers",
        "surface_water": "60",
        "population": "45000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/13\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/80\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-10T13:32:00.124000Z",
        "edited": "2014-12-20T20:58:18.442000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/14\/"
    },
    {
        "name": "Polis Massa",
        "rotation_period": "24",
        "orbital_period": "590",
        "diameter": "0",
        "climate": "artificial temperate ",
        "gravity": "0.56 standard",
        "terrain": "airless asteroid",
        "surface_water": "0",
        "population": "1000000",
        "residents": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-10T13:33:46.405000Z",
        "edited": "2014-12-20T20:58:18.444000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/15\/"
    },
    {
        "name": "Mygeeto",
        "rotation_period": "12",
        "orbital_period": "167",
        "diameter": "10088",
        "climate": "frigid",
        "gravity": "1 standard",
        "terrain": "glaciers, mountains, ice canyons",
        "surface_water": "unknown",
        "population": "19000000",
        "residents": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-10T13:43:39.139000Z",
        "edited": "2014-12-20T20:58:18.446000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/16\/"
    },
    {
        "name": "Felucia",
        "rotation_period": "34",
        "orbital_period": "231",
        "diameter": "9100",
        "climate": "hot, humid",
        "gravity": "0.75 standard",
        "terrain": "fungus forests",
        "surface_water": "unknown",
        "population": "8500000",
        "residents": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-10T13:44:50.397000Z",
        "edited": "2014-12-20T20:58:18.447000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/17\/"
    },
    {
        "name": "Cato Neimoidia",
        "rotation_period": "25",
        "orbital_period": "278",
        "diameter": "0",
        "climate": "temperate, moist",
        "gravity": "1 standard",
        "terrain": "mountains, fields, forests, rock arches",
        "surface_water": "unknown",
        "population": "10000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/33\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-10T13:46:28.704000Z",
        "edited": "2014-12-20T20:58:18.449000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/18\/"
    },
    {
        "name": "Saleucami",
        "rotation_period": "26",
        "orbital_period": "392",
        "diameter": "14920",
        "climate": "hot",
        "gravity": "unknown",
        "terrain": "caves, desert, mountains, volcanoes",
        "surface_water": "unknown",
        "population": "1400000000",
        "residents": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-10T13:47:46.874000Z",
        "edited": "2014-12-20T20:58:18.450000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/19\/"
    },
    {
        "name": "Stewjon",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "0",
        "climate": "temperate",
        "gravity": "1 standard",
        "terrain": "grass",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/10\/"
        ],
        "films": [],
        "created": "2014-12-10T16:16:26.566000Z",
        "edited": "2014-12-20T20:58:18.452000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/20\/"
    },
    {
        "name": "Eriadu",
        "rotation_period": "24",
        "orbital_period": "360",
        "diameter": "13490",
        "climate": "polluted",
        "gravity": "1 standard",
        "terrain": "cityscape",
        "surface_water": "unknown",
        "population": "22000000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/12\/"
        ],
        "films": [],
        "created": "2014-12-10T16:26:54.384000Z",
        "edited": "2014-12-20T20:58:18.454000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/21\/"
    },
    {
        "name": "Corellia",
        "rotation_period": "25",
        "orbital_period": "329",
        "diameter": "11000",
        "climate": "temperate",
        "gravity": "1 standard",
        "terrain": "plains, urban, hills, forests",
        "surface_water": "70",
        "population": "3000000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/14\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/18\/"
        ],
        "films": [],
        "created": "2014-12-10T16:49:12.453000Z",
        "edited": "2014-12-20T20:58:18.456000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/22\/"
    },
    {
        "name": "Rodia",
        "rotation_period": "29",
        "orbital_period": "305",
        "diameter": "7549",
        "climate": "hot",
        "gravity": "1 standard",
        "terrain": "jungles, oceans, urban, swamps",
        "surface_water": "60",
        "population": "1300000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/15\/"
        ],
        "films": [],
        "created": "2014-12-10T17:03:28.110000Z",
        "edited": "2014-12-20T20:58:18.458000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/23\/"
    },
    {
        "name": "Nal Hutta",
        "rotation_period": "87",
        "orbital_period": "413",
        "diameter": "12150",
        "climate": "temperate",
        "gravity": "1 standard",
        "terrain": "urban, oceans, swamps, bogs",
        "surface_water": "unknown",
        "population": "7000000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/16\/"
        ],
        "films": [],
        "created": "2014-12-10T17:11:29.452000Z",
        "edited": "2014-12-20T20:58:18.460000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/24\/"
    },
    {
        "name": "Dantooine",
        "rotation_period": "25",
        "orbital_period": "378",
        "diameter": "9830",
        "climate": "temperate",
        "gravity": "1 standard",
        "terrain": "oceans, savannas, mountains, grasslands",
        "surface_water": "unknown",
        "population": "1000",
        "residents": [],
        "films": [],
        "created": "2014-12-10T17:23:29.896000Z",
        "edited": "2014-12-20T20:58:18.461000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/25\/"
    },
    {
        "name": "Bestine IV",
        "rotation_period": "26",
        "orbital_period": "680",
        "diameter": "6400",
        "climate": "temperate",
        "gravity": "unknown",
        "terrain": "rocky islands, oceans",
        "surface_water": "98",
        "population": "62000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/19\/"
        ],
        "films": [],
        "created": "2014-12-12T11:16:55.078000Z",
        "edited": "2014-12-20T20:58:18.463000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/26\/"
    },
    {
        "name": "Ord Mantell",
        "rotation_period": "26",
        "orbital_period": "334",
        "diameter": "14050",
        "climate": "temperate",
        "gravity": "1 standard",
        "terrain": "plains, seas, mesas",
        "surface_water": "10",
        "population": "4000000000",
        "residents": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/"
        ],
        "created": "2014-12-15T12:23:41.661000Z",
        "edited": "2014-12-20T20:58:18.464000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/27\/"
    },
    {
        "name": "unknown",
        "rotation_period": "0",
        "orbital_period": "0",
        "diameter": "0",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "unknown",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/20\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/23\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/29\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/32\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/75\/"
        ],
        "films": [],
        "created": "2014-12-15T12:25:59.569000Z",
        "edited": "2014-12-20T20:58:18.466000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/28\/"
    },
    {
        "name": "Trandosha",
        "rotation_period": "25",
        "orbital_period": "371",
        "diameter": "0",
        "climate": "arid",
        "gravity": "0.62 standard",
        "terrain": "mountains, seas, grasslands, deserts",
        "surface_water": "unknown",
        "population": "42000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/24\/"
        ],
        "films": [],
        "created": "2014-12-15T12:53:47.695000Z",
        "edited": "2014-12-20T20:58:18.468000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/29\/"
    },
    {
        "name": "Socorro",
        "rotation_period": "20",
        "orbital_period": "326",
        "diameter": "0",
        "climate": "arid",
        "gravity": "1 standard",
        "terrain": "deserts, mountains",
        "surface_water": "unknown",
        "population": "300000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/25\/"
        ],
        "films": [],
        "created": "2014-12-15T12:56:31.121000Z",
        "edited": "2014-12-20T20:58:18.469000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/30\/"
    },
    {
        "name": "Mon Cala",
        "rotation_period": "21",
        "orbital_period": "398",
        "diameter": "11030",
        "climate": "temperate",
        "gravity": "1",
        "terrain": "oceans, reefs, islands",
        "surface_water": "100",
        "population": "27000000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/27\/"
        ],
        "films": [],
        "created": "2014-12-18T11:07:01.792000Z",
        "edited": "2014-12-20T20:58:18.471000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/31\/"
    },
    {
        "name": "Chandrila",
        "rotation_period": "20",
        "orbital_period": "368",
        "diameter": "13500",
        "climate": "temperate",
        "gravity": "1",
        "terrain": "plains, forests",
        "surface_water": "40",
        "population": "1200000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/28\/"
        ],
        "films": [],
        "created": "2014-12-18T11:11:51.872000Z",
        "edited": "2014-12-20T20:58:18.472000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/32\/"
    },
    {
        "name": "Sullust",
        "rotation_period": "20",
        "orbital_period": "263",
        "diameter": "12780",
        "climate": "superheated",
        "gravity": "1",
        "terrain": "mountains, volcanoes, rocky deserts",
        "surface_water": "5",
        "population": "18500000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/31\/"
        ],
        "films": [],
        "created": "2014-12-18T11:25:40.243000Z",
        "edited": "2014-12-20T20:58:18.474000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/33\/"
    },
    {
        "name": "Toydaria",
        "rotation_period": "21",
        "orbital_period": "184",
        "diameter": "7900",
        "climate": "temperate",
        "gravity": "1",
        "terrain": "swamps, lakes",
        "surface_water": "unknown",
        "population": "11000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/40\/"
        ],
        "films": [],
        "created": "2014-12-19T17:47:54.403000Z",
        "edited": "2014-12-20T20:58:18.476000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/34\/"
    },
    {
        "name": "Malastare",
        "rotation_period": "26",
        "orbital_period": "201",
        "diameter": "18880",
        "climate": "arid, temperate, tropical",
        "gravity": "1.56",
        "terrain": "swamps, deserts, jungles, mountains",
        "surface_water": "unknown",
        "population": "2000000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/41\/"
        ],
        "films": [],
        "created": "2014-12-19T17:52:13.106000Z",
        "edited": "2014-12-20T20:58:18.478000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/35\/"
    },
    {
        "name": "Dathomir",
        "rotation_period": "24",
        "orbital_period": "491",
        "diameter": "10480",
        "climate": "temperate",
        "gravity": "0.9",
        "terrain": "forests, deserts, savannas",
        "surface_water": "unknown",
        "population": "5200",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/44\/"
        ],
        "films": [],
        "created": "2014-12-19T18:00:40.142000Z",
        "edited": "2014-12-20T20:58:18.480000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/36\/"
    },
    {
        "name": "Ryloth",
        "rotation_period": "30",
        "orbital_period": "305",
        "diameter": "10600",
        "climate": "temperate, arid, subartic",
        "gravity": "1",
        "terrain": "mountains, valleys, deserts, tundra",
        "surface_water": "5",
        "population": "1500000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/45\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/46\/"
        ],
        "films": [],
        "created": "2014-12-20T09:46:25.740000Z",
        "edited": "2014-12-20T20:58:18.481000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/37\/"
    },
    {
        "name": "Aleen Minor",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "unknown",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/47\/"
        ],
        "films": [],
        "created": "2014-12-20T09:52:23.452000Z",
        "edited": "2014-12-20T20:58:18.483000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/38\/"
    },
    {
        "name": "Vulpter",
        "rotation_period": "22",
        "orbital_period": "391",
        "diameter": "14900",
        "climate": "temperate, artic",
        "gravity": "1",
        "terrain": "urban, barren",
        "surface_water": "unknown",
        "population": "421000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/48\/"
        ],
        "films": [],
        "created": "2014-12-20T09:56:58.874000Z",
        "edited": "2014-12-20T20:58:18.485000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/39\/"
    },
    {
        "name": "Troiken",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "desert, tundra, rainforests, mountains",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/49\/"
        ],
        "films": [],
        "created": "2014-12-20T10:01:37.395000Z",
        "edited": "2014-12-20T20:58:18.487000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/40\/"
    },
    {
        "name": "Tund",
        "rotation_period": "48",
        "orbital_period": "1770",
        "diameter": "12190",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "barren, ash",
        "surface_water": "unknown",
        "population": "0",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/50\/"
        ],
        "films": [],
        "created": "2014-12-20T10:07:29.578000Z",
        "edited": "2014-12-20T20:58:18.489000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/41\/"
    },
    {
        "name": "Haruun Kal",
        "rotation_period": "25",
        "orbital_period": "383",
        "diameter": "10120",
        "climate": "temperate",
        "gravity": "0.98",
        "terrain": "toxic cloudsea, plateaus, volcanoes",
        "surface_water": "unknown",
        "population": "705300",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/51\/"
        ],
        "films": [],
        "created": "2014-12-20T10:12:28.980000Z",
        "edited": "2014-12-20T20:58:18.491000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/42\/"
    },
    {
        "name": "Cerea",
        "rotation_period": "27",
        "orbital_period": "386",
        "diameter": "unknown",
        "climate": "temperate",
        "gravity": "1",
        "terrain": "verdant",
        "surface_water": "20",
        "population": "450000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/52\/"
        ],
        "films": [],
        "created": "2014-12-20T10:14:48.178000Z",
        "edited": "2014-12-20T20:58:18.493000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/43\/"
    },
    {
        "name": "Glee Anselm",
        "rotation_period": "33",
        "orbital_period": "206",
        "diameter": "15600",
        "climate": "tropical, temperate",
        "gravity": "1",
        "terrain": "lakes, islands, swamps, seas",
        "surface_water": "80",
        "population": "500000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/53\/"
        ],
        "films": [],
        "created": "2014-12-20T10:18:26.110000Z",
        "edited": "2014-12-20T20:58:18.495000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/44\/"
    },
    {
        "name": "Iridonia",
        "rotation_period": "29",
        "orbital_period": "413",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "rocky canyons, acid pools",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/54\/"
        ],
        "films": [],
        "created": "2014-12-20T10:26:05.788000Z",
        "edited": "2014-12-20T20:58:18.497000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/45\/"
    },
    {
        "name": "Tholoth",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "unknown",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [],
        "films": [],
        "created": "2014-12-20T10:28:31.117000Z",
        "edited": "2014-12-20T20:58:18.498000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/46\/"
    },
    {
        "name": "Iktotch",
        "rotation_period": "22",
        "orbital_period": "481",
        "diameter": "unknown",
        "climate": "arid, rocky, windy",
        "gravity": "1",
        "terrain": "rocky",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/56\/"
        ],
        "films": [],
        "created": "2014-12-20T10:31:32.413000Z",
        "edited": "2014-12-20T20:58:18.500000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/47\/"
    },
    {
        "name": "Quermia",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "unknown",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/57\/"
        ],
        "films": [],
        "created": "2014-12-20T10:34:08.249000Z",
        "edited": "2014-12-20T20:58:18.502000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/48\/"
    },
    {
        "name": "Dorin",
        "rotation_period": "22",
        "orbital_period": "409",
        "diameter": "13400",
        "climate": "temperate",
        "gravity": "1",
        "terrain": "unknown",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/58\/"
        ],
        "films": [],
        "created": "2014-12-20T10:48:36.141000Z",
        "edited": "2014-12-20T20:58:18.504000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/49\/"
    },
    {
        "name": "Champala",
        "rotation_period": "27",
        "orbital_period": "318",
        "diameter": "unknown",
        "climate": "temperate",
        "gravity": "1",
        "terrain": "oceans, rainforests, plateaus",
        "surface_water": "unknown",
        "population": "3500000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/59\/"
        ],
        "films": [],
        "created": "2014-12-20T10:52:51.524000Z",
        "edited": "2014-12-20T20:58:18.506000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/50\/"
    },
    {
        "name": "Mirial",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "deserts",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/64\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/65\/"
        ],
        "films": [],
        "created": "2014-12-20T16:44:46.318000Z",
        "edited": "2014-12-20T20:58:18.508000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/51\/"
    },
    {
        "name": "Serenno",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "rainforests, rivers, mountains",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/67\/"
        ],
        "films": [],
        "created": "2014-12-20T16:52:13.357000Z",
        "edited": "2014-12-20T20:58:18.510000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/52\/"
    },
    {
        "name": "Concord Dawn",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "jungles, forests, deserts",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/69\/"
        ],
        "films": [],
        "created": "2014-12-20T16:54:39.909000Z",
        "edited": "2014-12-20T20:58:18.512000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/53\/"
    },
    {
        "name": "Zolan",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "unknown",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/70\/"
        ],
        "films": [],
        "created": "2014-12-20T16:56:37.250000Z",
        "edited": "2014-12-20T20:58:18.514000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/54\/"
    },
    {
        "name": "Ojom",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "frigid",
        "gravity": "unknown",
        "terrain": "oceans, glaciers",
        "surface_water": "100",
        "population": "500000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/71\/"
        ],
        "films": [],
        "created": "2014-12-20T17:27:41.286000Z",
        "edited": "2014-12-20T20:58:18.516000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/55\/"
    },
    {
        "name": "Skako",
        "rotation_period": "27",
        "orbital_period": "384",
        "diameter": "unknown",
        "climate": "temperate",
        "gravity": "1",
        "terrain": "urban, vines",
        "surface_water": "unknown",
        "population": "500000000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/76\/"
        ],
        "films": [],
        "created": "2014-12-20T17:50:47.864000Z",
        "edited": "2014-12-20T20:58:18.517000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/56\/"
    },
    {
        "name": "Muunilinst",
        "rotation_period": "28",
        "orbital_period": "412",
        "diameter": "13800",
        "climate": "temperate",
        "gravity": "1",
        "terrain": "plains, forests, hills, mountains",
        "surface_water": "25",
        "population": "5000000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/77\/"
        ],
        "films": [],
        "created": "2014-12-20T17:57:47.420000Z",
        "edited": "2014-12-20T20:58:18.519000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/57\/"
    },
    {
        "name": "Shili",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "temperate",
        "gravity": "1",
        "terrain": "cities, savannahs, seas, plains",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/78\/"
        ],
        "films": [],
        "created": "2014-12-20T18:43:14.049000Z",
        "edited": "2014-12-20T20:58:18.521000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/58\/"
    },
    {
        "name": "Kalee",
        "rotation_period": "23",
        "orbital_period": "378",
        "diameter": "13850",
        "climate": "arid, temperate, tropical",
        "gravity": "1",
        "terrain": "rainforests, cliffs, canyons, seas",
        "surface_water": "unknown",
        "population": "4000000000",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/79\/"
        ],
        "films": [],
        "created": "2014-12-20T19:43:51.278000Z",
        "edited": "2014-12-20T20:58:18.523000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/59\/"
    },
    {
        "name": "Umbara",
        "rotation_period": "unknown",
        "orbital_period": "unknown",
        "diameter": "unknown",
        "climate": "unknown",
        "gravity": "unknown",
        "terrain": "unknown",
        "surface_water": "unknown",
        "population": "unknown",
        "residents": [
            "http:\/\/127.0.0.1:8000\/api\/people\/82\/"
        ],
        "films": [],
        "created": "2014-12-20T20:18:36.256000Z",
        "edited": "2014-12-20T20:58:18.525000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/planets\/60\/"
    }
]
```
<div id="execution-results-GETapi-planets-created-after-12042014" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-planets-created-after-12042014"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-planets-created-after-12042014"></code></pre>
</div>
<div id="execution-error-GETapi-planets-created-after-12042014" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-planets-created-after-12042014"></code></pre>
</div>
<form id="form-GETapi-planets-created-after-12042014" data-method="GET" data-path="api/planets/created-after-12042014" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-planets-created-after-12042014', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-planets-created-after-12042014" onclick="tryItOut('GETapi-planets-created-after-12042014');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-planets-created-after-12042014" onclick="cancelTryOut('GETapi-planets-created-after-12042014');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-planets-created-after-12042014" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/planets/created-after-12042014</code></b>
</p>
</form>



