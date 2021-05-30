# API\Vehicles


## List all available vehicles (or search by term)


A Vehicle resource is a single transport craft that does not have hyperdrive capability.

<h4 class="fancy-heading-panel"><b>Attributes</b></h4>
<small class="badge badge-purple">name</small> <i>string</i> -- The name of this vehicle. The common name, such as "Sand Crawler" or "Speeder bike".<br>
<small class="badge badge-purple">model</small> <i>string</i> -- The model or official name of this vehicle. Such as "All-Terrain Attack Transport".<br>
<small class="badge badge-purple">vehicle_class</small> <i>string</i> -- The class of this vehicle, such as "Wheeled" or "Repulsorcraft".<br>
<small class="badge badge-purple">manufacturer</small> <i>string</i> -- The manufacturer of this vehicle. Comma separated if more than one.<br>
<small class="badge badge-purple">length</small> <i>string</i> -- The length of this vehicle in meters.<br>
<small class="badge badge-purple">cost_in_credits</small> <i>string</i> -- The cost of this vehicle new, in Galactic Credits.<br>
<small class="badge badge-purple">crew</small> <i>string</i> -- The number of personnel needed to run or pilot this vehicle.<br>
<small class="badge badge-purple">passengers</small> <i>string</i> -- The number of non-essential people this vehicle can transport.<br>
<small class="badge badge-purple">max_atmosphering_speed</small> <i>string</i> -- The maximum speed of this vehicle in the atmosphere.<br>
<small class="badge badge-purple">cargo_capacity</small> <i>string</i> -- The maximum number of kilograms that this vehicle can transport.<br>
<small class="badge badge-purple">consumables</small> <i>string</i> -- The maximum length of time that this vehicle can provide consumables for its entire crew without having to resupply.<br>
<small class="badge badge-purple">films</small> <i>array</i> -- An array of Film URL Resources that this vehicle has appeared in.<br>
<small class="badge badge-purple">pilots</small> <i>array</i> -- An array of People URL Resources that this vehicle has been piloted by.<br>
<small class="badge badge-purple">url</small> <i>string</i> -- The hypermedia URL of this resource.<br>
<small class="badge badge-purple">created</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was created.<br>
<small class="badge badge-purple">edited</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was edited.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/vehicles?search=Sand+Crawler&page=1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/vehicles',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Sand Crawler',
            'page'=> '1',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/vehicles"
);

let params = {
    "search": "Sand Crawler",
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
            "name": "Sand Crawler",
            "model": "Digger Crawler",
            "manufacturer": "Corellia Mining Corporation",
            "cost_in_credits": "150000",
            "length": "36.8 ",
            "max_atmosphering_speed": "30",
            "crew": "46",
            "passengers": "30",
            "cargo_capacity": "50000",
            "consumables": "2 months",
            "vehicle_class": "wheeled",
            "pilots": [],
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
            ],
            "created": "2014-12-10T15:36:25.724000Z",
            "edited": "2014-12-20T21:30:21.661000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/4\/"
        }
    ]
}
```
<div id="execution-results-GETapi-vehicles" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-vehicles"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-vehicles"></code></pre>
</div>
<div id="execution-error-GETapi-vehicles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-vehicles"></code></pre>
</div>
<form id="form-GETapi-vehicles" data-method="GET" data-path="api/vehicles" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-vehicles', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-vehicles" onclick="tryItOut('GETapi-vehicles');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-vehicles" onclick="cancelTryOut('GETapi-vehicles');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-vehicles" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/vehicles</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-vehicles" data-component="query"  hidden>
<br>
Term to search resources by. In case of Vehicle resource search applies to the name and model attributes. Defaults to 'null'.
</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETapi-vehicles" data-component="query"  hidden>
<br>
Page number parameter used for pagination of results. Defaults to 'null'.
</p>
</form>


## List vehicles schema


Schema allows you to see which attributes and their types are available for this resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/vehicles/schema" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/vehicles/schema',
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
    "http://127.0.0.1:8000/api/vehicles/schema"
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
    "description": "A vehicle.",
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
        "vehicle_class",
        "pilots",
        "films",
        "created",
        "edited",
        "url"
    ],
    "$schema": "http:\/\/json-schema.org\/draft-04\/schema",
    "type": "object",
    "properties": {
        "vehicle_class": {
            "type": "string",
            "description": "The class of this vehicle, such as Wheeled."
        },
        "passengers": {
            "type": "string",
            "description": "The number of non-essential people this vehicle can transport."
        },
        "pilots": {
            "type": "array",
            "description": "An array of People URL Resources that this vehicle has been piloted by."
        },
        "name": {
            "type": "string",
            "description": "The name of this vehicle. The common name, such as Sand Crawler."
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
        "cargo_capacity": {
            "type": "string",
            "description": "The maximum number of kilograms that this vehicle can transport."
        },
        "edited": {
            "type": "string",
            "description": "the ISO 8601 date format of the time that this resource was edited.",
            "format": "date-time"
        },
        "consumables": {
            "type": "string",
            "description": "The maximum length of time that this vehicle can provide consumables for its entire crew without having to resupply."
        },
        "max_atmosphering_speed": {
            "type": "string",
            "description": "The maximum speed of this vehicle in atmosphere."
        },
        "crew": {
            "type": "string",
            "description": "The number of personnel needed to run or pilot this vehicle."
        },
        "length": {
            "type": "string",
            "description": "The length of this vehicle in meters."
        },
        "films": {
            "type": "array",
            "description": "An array of Film URL Resources that this vehicle has appeared in."
        },
        "model": {
            "type": "string",
            "description": "The model or official name of this vehicle. Such as All Terrain Attack Transport."
        },
        "cost_in_credits": {
            "type": "string",
            "description": "The cost of this vehicle new, in galactic credits."
        },
        "manufacturer": {
            "type": "string",
            "description": "The manufacturer of this vehicle. Comma seperated if more than one."
        }
    }
}
```
<div id="execution-results-GETapi-vehicles-schema" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-vehicles-schema"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-vehicles-schema"></code></pre>
</div>
<div id="execution-error-GETapi-vehicles-schema" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-vehicles-schema"></code></pre>
</div>
<form id="form-GETapi-vehicles-schema" data-method="GET" data-path="api/vehicles/schema" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-vehicles-schema', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-vehicles-schema" onclick="tryItOut('GETapi-vehicles-schema');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-vehicles-schema" onclick="cancelTryOut('GETapi-vehicles-schema');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-vehicles-schema" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/vehicles/schema</code></b>
</p>
</form>


## Retrieve a vehicle




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/vehicles/4" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/vehicles/4',
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
    "http://127.0.0.1:8000/api/vehicles/4"
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
    "name": "Sand Crawler",
    "model": "Digger Crawler",
    "manufacturer": "Corellia Mining Corporation",
    "cost_in_credits": "150000",
    "length": "36.8 ",
    "max_atmosphering_speed": "30",
    "crew": "46",
    "passengers": "30",
    "cargo_capacity": "50000",
    "consumables": "2 months",
    "vehicle_class": "wheeled",
    "pilots": [],
    "films": [
        "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
        "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
    ],
    "created": "2014-12-10T15:36:25.724000Z",
    "edited": "2014-12-20T21:30:21.661000Z",
    "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/4\/"
}
```
<div id="execution-results-GETapi-vehicles--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-vehicles--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-vehicles--id-"></code></pre>
</div>
<div id="execution-error-GETapi-vehicles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-vehicles--id-"></code></pre>
</div>
<form id="form-GETapi-vehicles--id-" data-method="GET" data-path="api/vehicles/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-vehicles--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-vehicles--id-" onclick="tryItOut('GETapi-vehicles--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-vehicles--id-" onclick="cancelTryOut('GETapi-vehicles--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-vehicles--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/vehicles/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-vehicles--id-" data-component="url" required  hidden>
<br>
The ID of the vehicle resource.
</p>
</form>


## List all specified subresource data of a specific vehicle




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/vehicles/4/films" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/vehicles/4/films',
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
    "http://127.0.0.1:8000/api/vehicles/4/films"
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
    "Sand Crawler": [
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
        },
        {
            "title": "Attack of the Clones",
            "episode_id": 2,
            "opening_crawl": "There is unrest in the Galactic\r\nSenate. Several thousand solar\r\nsystems have declared their\r\nintentions to leave the Republic.\r\n\r\nThis separatist movement,\r\nunder the leadership of the\r\nmysterious Count Dooku, has\r\nmade it difficult for the limited\r\nnumber of Jedi Knights to maintain \r\npeace and order in the galaxy.\r\n\r\nSenator Amidala, the former\r\nQueen of Naboo, is returning\r\nto the Galactic Senate to vote\r\non the critical issue of creating\r\nan ARMY OF THE REPUBLIC\r\nto assist the overwhelmed\r\nJedi....",
            "director": "George Lucas",
            "producer": "Rick McCallum",
            "release_date": "2002-05-16",
            "characters": [
                "http:\/\/127.0.0.1:8000\/api\/people\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/6\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/7\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/10\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/11\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/20\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/21\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/22\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/33\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/35\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/36\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/40\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/43\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/46\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/51\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/52\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/53\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/58\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/59\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/60\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/61\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/62\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/63\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/64\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/65\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/66\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/67\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/68\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/69\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/70\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/71\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/72\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/73\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/74\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/75\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/76\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/77\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/78\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/82\/"
            ],
            "planets": [
                "http:\/\/127.0.0.1:8000\/api\/planets\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/8\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/9\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/10\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/11\/"
            ],
            "starships": [
                "http:\/\/127.0.0.1:8000\/api\/starships\/21\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/32\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/39\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/43\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/47\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/48\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/49\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/52\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/58\/"
            ],
            "vehicles": [
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/4\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/44\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/45\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/46\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/50\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/51\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/53\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/54\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/55\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/56\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/57\/"
            ],
            "species": [
                "http:\/\/127.0.0.1:8000\/api\/species\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/6\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/12\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/13\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/15\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/28\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/29\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/30\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/31\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/32\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/33\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/34\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/35\/"
            ],
            "created": "2014-12-20T10:57:57.886000Z",
            "edited": "2014-12-20T20:18:48.516000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        }
    ]
}
```
<div id="execution-results-GETapi-vehicles--id---subresourceName-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-vehicles--id---subresourceName-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-vehicles--id---subresourceName-"></code></pre>
</div>
<div id="execution-error-GETapi-vehicles--id---subresourceName-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-vehicles--id---subresourceName-"></code></pre>
</div>
<form id="form-GETapi-vehicles--id---subresourceName-" data-method="GET" data-path="api/vehicles/{id}/{subresourceName}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-vehicles--id---subresourceName-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-vehicles--id---subresourceName-" onclick="tryItOut('GETapi-vehicles--id---subresourceName-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-vehicles--id---subresourceName-" onclick="cancelTryOut('GETapi-vehicles--id---subresourceName-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-vehicles--id---subresourceName-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/vehicles/{id}/{subresourceName}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-vehicles--id---subresourceName-" data-component="url" required  hidden>
<br>
The ID of the vehicle resource.
</p>
<p>
<b><code>subresourceName</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="subresourceName" data-endpoint="GETapi-vehicles--id---subresourceName-" data-component="url" required  hidden>
<br>
The subresource name of the given vehicle.
</p>
</form>


## Advanced search vehicle resources




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/vehicles/advanced-search?attribute=created&operator=%3E&condition=12%2F15%2F2014&type=date" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/vehicles/advanced-search',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'attribute'=> 'created',
            'operator'=> '>',
            'condition'=> '12/15/2014',
            'type'=> 'date',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/vehicles/advanced-search"
);

let params = {
    "attribute": "created",
    "operator": ">",
    "condition": "12/15/2014",
    "type": "date",
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
        "name": "Snowspeeder",
        "model": "t-47 airspeeder",
        "manufacturer": "Incom corporation",
        "cost_in_credits": "unknown",
        "length": "4.5",
        "max_atmosphering_speed": "650",
        "crew": "2",
        "passengers": "0",
        "cargo_capacity": "10",
        "consumables": "none",
        "vehicle_class": "airspeeder",
        "pilots": [
            "http:\/\/127.0.0.1:8000\/api\/people\/1\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/18\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/"
        ],
        "created": "2014-12-15T12:22:12Z",
        "edited": "2014-12-20T21:30:21.672000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/14\/"
    },
    {
        "name": "TIE bomber",
        "model": "TIE\/sa bomber",
        "manufacturer": "Sienar Fleet Systems",
        "cost_in_credits": "unknown",
        "length": "7.8",
        "max_atmosphering_speed": "850",
        "crew": "1",
        "passengers": "0",
        "cargo_capacity": "none",
        "consumables": "2 days",
        "vehicle_class": "space\/planetary bomber",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
        ],
        "created": "2014-12-15T12:33:15.838000Z",
        "edited": "2014-12-20T21:30:21.675000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/16\/"
    },
    {
        "name": "AT-AT",
        "model": "All Terrain Armored Transport",
        "manufacturer": "Kuat Drive Yards, Imperial Department of Military Research",
        "cost_in_credits": "unknown",
        "length": "20",
        "max_atmosphering_speed": "60",
        "crew": "5",
        "passengers": "40",
        "cargo_capacity": "1000",
        "consumables": "unknown",
        "vehicle_class": "assault walker",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
        ],
        "created": "2014-12-15T12:38:25.937000Z",
        "edited": "2014-12-20T21:30:21.677000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/18\/"
    },
    {
        "name": "AT-ST",
        "model": "All Terrain Scout Transport",
        "manufacturer": "Kuat Drive Yards, Imperial Department of Military Research",
        "cost_in_credits": "unknown",
        "length": "2",
        "max_atmosphering_speed": "90",
        "crew": "2",
        "passengers": "0",
        "cargo_capacity": "200",
        "consumables": "none",
        "vehicle_class": "walker",
        "pilots": [
            "http:\/\/127.0.0.1:8000\/api\/people\/13\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
        ],
        "created": "2014-12-15T12:46:42.384000Z",
        "edited": "2014-12-20T21:30:21.679000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/19\/"
    },
    {
        "name": "Storm IV Twin-Pod cloud car",
        "model": "Storm IV Twin-Pod",
        "manufacturer": "Bespin Motors",
        "cost_in_credits": "75000",
        "length": "7",
        "max_atmosphering_speed": "1500",
        "crew": "2",
        "passengers": "0",
        "cargo_capacity": "10",
        "consumables": "1 day",
        "vehicle_class": "repulsorcraft",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/"
        ],
        "created": "2014-12-15T12:58:50.530000Z",
        "edited": "2014-12-20T21:30:21.681000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/20\/"
    },
    {
        "name": "Sail barge",
        "model": "Modified Luxury Sail Barge",
        "manufacturer": "Ubrikkian Industries Custom Vehicle Division",
        "cost_in_credits": "285000",
        "length": "30",
        "max_atmosphering_speed": "100",
        "crew": "26",
        "passengers": "500",
        "cargo_capacity": "2000000",
        "consumables": "Live food tanks",
        "vehicle_class": "sail barge",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
        ],
        "created": "2014-12-18T10:44:14.217000Z",
        "edited": "2014-12-20T21:30:21.684000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/24\/"
    },
    {
        "name": "Bantha-II cargo skiff",
        "model": "Bantha-II",
        "manufacturer": "Ubrikkian Industries",
        "cost_in_credits": "8000",
        "length": "9.5",
        "max_atmosphering_speed": "250",
        "crew": "5",
        "passengers": "16",
        "cargo_capacity": "135000",
        "consumables": "1 day",
        "vehicle_class": "repulsorcraft cargo skiff",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
        ],
        "created": "2014-12-18T10:48:03.208000Z",
        "edited": "2014-12-20T21:30:21.688000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/25\/"
    },
    {
        "name": "TIE\/IN interceptor",
        "model": "Twin Ion Engine Interceptor",
        "manufacturer": "Sienar Fleet Systems",
        "cost_in_credits": "unknown",
        "length": "9.6",
        "max_atmosphering_speed": "1250",
        "crew": "1",
        "passengers": "0",
        "cargo_capacity": "75",
        "consumables": "2 days",
        "vehicle_class": "starfighter",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
        ],
        "created": "2014-12-18T10:50:28.225000Z",
        "edited": "2014-12-20T21:30:21.691000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/26\/"
    },
    {
        "name": "Imperial Speeder Bike",
        "model": "74-Z speeder bike",
        "manufacturer": "Aratech Repulsor Company",
        "cost_in_credits": "8000",
        "length": "3",
        "max_atmosphering_speed": "360",
        "crew": "1",
        "passengers": "1",
        "cargo_capacity": "4",
        "consumables": "1 day",
        "vehicle_class": "speeder",
        "pilots": [
            "http:\/\/127.0.0.1:8000\/api\/people\/1\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/5\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
        ],
        "created": "2014-12-18T11:20:04.625000Z",
        "edited": "2014-12-20T21:30:21.693000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/30\/"
    },
    {
        "name": "Vulture Droid",
        "model": "Vulture-class droid starfighter",
        "manufacturer": "Haor Chall Engineering, Baktoid Armor Workshop",
        "cost_in_credits": "unknown",
        "length": "3.5",
        "max_atmosphering_speed": "1200",
        "crew": "0",
        "passengers": "0",
        "cargo_capacity": "0",
        "consumables": "none",
        "vehicle_class": "starfighter",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-19T17:09:53.584000Z",
        "edited": "2014-12-20T21:30:21.697000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/33\/"
    },
    {
        "name": "Multi-Troop Transport",
        "model": "Multi-Troop Transport",
        "manufacturer": "Baktoid Armor Workshop",
        "cost_in_credits": "138000",
        "length": "31",
        "max_atmosphering_speed": "35",
        "crew": "4",
        "passengers": "112",
        "cargo_capacity": "12000",
        "consumables": "unknown",
        "vehicle_class": "repulsorcraft",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "created": "2014-12-19T17:12:04.400000Z",
        "edited": "2014-12-20T21:30:21.700000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/34\/"
    },
    {
        "name": "Armored Assault Tank",
        "model": "Armoured Assault Tank",
        "manufacturer": "Baktoid Armor Workshop",
        "cost_in_credits": "unknown",
        "length": "9.75",
        "max_atmosphering_speed": "55",
        "crew": "4",
        "passengers": "6",
        "cargo_capacity": "unknown",
        "consumables": "unknown",
        "vehicle_class": "repulsorcraft",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "created": "2014-12-19T17:13:29.799000Z",
        "edited": "2014-12-20T21:30:21.703000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/35\/"
    },
    {
        "name": "Single Trooper Aerial Platform",
        "model": "Single Trooper Aerial Platform",
        "manufacturer": "Baktoid Armor Workshop",
        "cost_in_credits": "2500",
        "length": "2",
        "max_atmosphering_speed": "400",
        "crew": "1",
        "passengers": "0",
        "cargo_capacity": "none",
        "consumables": "none",
        "vehicle_class": "repulsorcraft",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "created": "2014-12-19T17:15:09.511000Z",
        "edited": "2014-12-20T21:30:21.705000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/36\/"
    },
    {
        "name": "C-9979 landing craft",
        "model": "C-9979 landing craft",
        "manufacturer": "Haor Chall Engineering",
        "cost_in_credits": "200000",
        "length": "210",
        "max_atmosphering_speed": "587",
        "crew": "140",
        "passengers": "284",
        "cargo_capacity": "1800000",
        "consumables": "1 day",
        "vehicle_class": "landing craft",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "created": "2014-12-19T17:20:36.373000Z",
        "edited": "2014-12-20T21:30:21.707000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/37\/"
    },
    {
        "name": "Tribubble bongo",
        "model": "Tribubble bongo",
        "manufacturer": "Otoh Gunga Bongameken Cooperative",
        "cost_in_credits": "unknown",
        "length": "15",
        "max_atmosphering_speed": "85",
        "crew": "1",
        "passengers": "2",
        "cargo_capacity": "1600",
        "consumables": "unknown",
        "vehicle_class": "submarine",
        "pilots": [
            "http:\/\/127.0.0.1:8000\/api\/people\/10\/",
            "http:\/\/127.0.0.1:8000\/api\/people\/32\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "created": "2014-12-19T17:37:37.924000Z",
        "edited": "2014-12-20T21:30:21.710000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/38\/"
    },
    {
        "name": "Sith speeder",
        "model": "FC-20 speeder bike",
        "manufacturer": "Razalon",
        "cost_in_credits": "4000",
        "length": "1.5",
        "max_atmosphering_speed": "180",
        "crew": "1",
        "passengers": "0",
        "cargo_capacity": "2",
        "consumables": "unknown",
        "vehicle_class": "speeder",
        "pilots": [
            "http:\/\/127.0.0.1:8000\/api\/people\/44\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "created": "2014-12-20T10:09:56.095000Z",
        "edited": "2014-12-20T21:30:21.712000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/42\/"
    },
    {
        "name": "Zephyr-G swoop bike",
        "model": "Zephyr-G swoop bike",
        "manufacturer": "Mobquet Swoops and Speeders",
        "cost_in_credits": "5750",
        "length": "3.68",
        "max_atmosphering_speed": "350",
        "crew": "1",
        "passengers": "1",
        "cargo_capacity": "200",
        "consumables": "none",
        "vehicle_class": "repulsorcraft",
        "pilots": [
            "http:\/\/127.0.0.1:8000\/api\/people\/11\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "created": "2014-12-20T16:24:16.026000Z",
        "edited": "2014-12-20T21:30:21.714000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/44\/"
    },
    {
        "name": "Koro-2 Exodrive airspeeder",
        "model": "Koro-2 Exodrive airspeeder",
        "manufacturer": "Desler Gizh Outworld Mobility Corporation",
        "cost_in_credits": "unknown",
        "length": "6.6",
        "max_atmosphering_speed": "800",
        "crew": "1",
        "passengers": "1",
        "cargo_capacity": "80",
        "consumables": "unknown",
        "vehicle_class": "airspeeder",
        "pilots": [
            "http:\/\/127.0.0.1:8000\/api\/people\/70\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "created": "2014-12-20T17:17:33.526000Z",
        "edited": "2014-12-20T21:30:21.716000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/45\/"
    },
    {
        "name": "XJ-6 airspeeder",
        "model": "XJ-6 airspeeder",
        "manufacturer": "Narglatch AirTech prefabricated kit",
        "cost_in_credits": "unknown",
        "length": "6.23",
        "max_atmosphering_speed": "720",
        "crew": "1",
        "passengers": "1",
        "cargo_capacity": "unknown",
        "consumables": "unknown",
        "vehicle_class": "airspeeder",
        "pilots": [
            "http:\/\/127.0.0.1:8000\/api\/people\/11\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "created": "2014-12-20T17:19:19.991000Z",
        "edited": "2014-12-20T21:30:21.719000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/46\/"
    },
    {
        "name": "LAAT\/i",
        "model": "Low Altitude Assault Transport\/infrantry",
        "manufacturer": "Rothana Heavy Engineering",
        "cost_in_credits": "unknown",
        "length": "17.4",
        "max_atmosphering_speed": "620",
        "crew": "6",
        "passengers": "30",
        "cargo_capacity": "170",
        "consumables": "unknown",
        "vehicle_class": "gunship",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-20T18:01:21.014000Z",
        "edited": "2014-12-20T21:30:21.723000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/50\/"
    },
    {
        "name": "LAAT\/c",
        "model": "Low Altitude Assault Transport\/carrier",
        "manufacturer": "Rothana Heavy Engineering",
        "cost_in_credits": "unknown",
        "length": "28.82",
        "max_atmosphering_speed": "620",
        "crew": "1",
        "passengers": "0",
        "cargo_capacity": "40000",
        "consumables": "unknown",
        "vehicle_class": "gunship",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "created": "2014-12-20T18:02:46.802000Z",
        "edited": "2014-12-20T21:30:21.725000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/51\/"
    },
    {
        "name": "AT-TE",
        "model": "All Terrain Tactical Enforcer",
        "manufacturer": "Rothana Heavy Engineering, Kuat Drive Yards",
        "cost_in_credits": "unknown",
        "length": "13.2",
        "max_atmosphering_speed": "60",
        "crew": "6",
        "passengers": "36",
        "cargo_capacity": "10000",
        "consumables": "21 days",
        "vehicle_class": "walker",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-20T18:10:07.560000Z",
        "edited": "2014-12-20T21:30:21.728000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/53\/"
    },
    {
        "name": "SPHA",
        "model": "Self-Propelled Heavy Artillery",
        "manufacturer": "Rothana Heavy Engineering",
        "cost_in_credits": "unknown",
        "length": "140",
        "max_atmosphering_speed": "35",
        "crew": "25",
        "passengers": "30",
        "cargo_capacity": "500",
        "consumables": "7 days",
        "vehicle_class": "walker",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "created": "2014-12-20T18:12:32.315000Z",
        "edited": "2014-12-20T21:30:21.731000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/54\/"
    },
    {
        "name": "Flitknot speeder",
        "model": "Flitknot speeder",
        "manufacturer": "Huppla Pasa Tisc Shipwrights Collective",
        "cost_in_credits": "8000",
        "length": "2",
        "max_atmosphering_speed": "634",
        "crew": "1",
        "passengers": "0",
        "cargo_capacity": "unknown",
        "consumables": "unknown",
        "vehicle_class": "speeder",
        "pilots": [
            "http:\/\/127.0.0.1:8000\/api\/people\/67\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "created": "2014-12-20T18:15:20.312000Z",
        "edited": "2014-12-20T21:30:21.735000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/55\/"
    },
    {
        "name": "Neimoidian shuttle",
        "model": "Sheathipede-class transport shuttle",
        "manufacturer": "Haor Chall Engineering",
        "cost_in_credits": "unknown",
        "length": "20",
        "max_atmosphering_speed": "880",
        "crew": "2",
        "passengers": "6",
        "cargo_capacity": "1000",
        "consumables": "7 days",
        "vehicle_class": "transport",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-20T18:25:44.912000Z",
        "edited": "2014-12-20T21:30:21.739000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/56\/"
    },
    {
        "name": "Geonosian starfighter",
        "model": "Nantex-class territorial defense",
        "manufacturer": "Huppla Pasa Tisc Shipwrights Collective",
        "cost_in_credits": "unknown",
        "length": "9.8",
        "max_atmosphering_speed": "20000",
        "crew": "1",
        "passengers": "0",
        "cargo_capacity": "unknown",
        "consumables": "unknown",
        "vehicle_class": "starfighter",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "created": "2014-12-20T18:34:12.541000Z",
        "edited": "2014-12-20T21:30:21.742000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/57\/"
    },
    {
        "name": "Tsmeu-6 personal wheel bike",
        "model": "Tsmeu-6 personal wheel bike",
        "manufacturer": "Z-Gomot Ternbuell Guppat Corporation",
        "cost_in_credits": "15000",
        "length": "3.5",
        "max_atmosphering_speed": "330",
        "crew": "1",
        "passengers": "1",
        "cargo_capacity": "10",
        "consumables": "none",
        "vehicle_class": "wheeled walker",
        "pilots": [
            "http:\/\/127.0.0.1:8000\/api\/people\/79\/"
        ],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-20T19:43:54.870000Z",
        "edited": "2014-12-20T21:30:21.745000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/60\/"
    },
    {
        "name": "Emergency Firespeeder",
        "model": "Fire suppression speeder",
        "manufacturer": "unknown",
        "cost_in_credits": "unknown",
        "length": "unknown",
        "max_atmosphering_speed": "unknown",
        "crew": "2",
        "passengers": "unknown",
        "cargo_capacity": "unknown",
        "consumables": "unknown",
        "vehicle_class": "fire suppression ship",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-20T19:50:58.559000Z",
        "edited": "2014-12-20T21:30:21.749000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/62\/"
    },
    {
        "name": "Droid tri-fighter",
        "model": "tri-fighter",
        "manufacturer": "Colla Designs, Phlac-Arphocc Automata Industries",
        "cost_in_credits": "20000",
        "length": "5.4",
        "max_atmosphering_speed": "1180",
        "crew": "1",
        "passengers": "0",
        "cargo_capacity": "0",
        "consumables": "none",
        "vehicle_class": "droid starfighter",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-20T20:05:19.992000Z",
        "edited": "2014-12-20T21:30:21.752000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/67\/"
    },
    {
        "name": "Oevvaor jet catamaran",
        "model": "Oevvaor jet catamaran",
        "manufacturer": "Appazanna Engineering Works",
        "cost_in_credits": "12125",
        "length": "15.1",
        "max_atmosphering_speed": "420",
        "crew": "2",
        "passengers": "2",
        "cargo_capacity": "50",
        "consumables": "3 days",
        "vehicle_class": "airspeeder",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-20T20:20:53.931000Z",
        "edited": "2014-12-20T21:30:21.756000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/69\/"
    },
    {
        "name": "Raddaugh Gnasp fluttercraft",
        "model": "Raddaugh Gnasp fluttercraft",
        "manufacturer": "Appazanna Engineering Works",
        "cost_in_credits": "14750",
        "length": "7",
        "max_atmosphering_speed": "310",
        "crew": "2",
        "passengers": "0",
        "cargo_capacity": "20",
        "consumables": "none",
        "vehicle_class": "air speeder",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-20T20:21:55.648000Z",
        "edited": "2014-12-20T21:30:21.759000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/70\/"
    },
    {
        "name": "Clone turbo tank",
        "model": "HAVw A6 Juggernaut",
        "manufacturer": "Kuat Drive Yards",
        "cost_in_credits": "350000",
        "length": "49.4",
        "max_atmosphering_speed": "160",
        "crew": "20",
        "passengers": "300",
        "cargo_capacity": "30000",
        "consumables": "20 days",
        "vehicle_class": "wheeled walker",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-20T20:24:45.587000Z",
        "edited": "2014-12-20T21:30:21.762000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/71\/"
    },
    {
        "name": "Corporate Alliance tank droid",
        "model": "NR-N99 Persuader-class droid enforcer",
        "manufacturer": "Techno Union",
        "cost_in_credits": "49000",
        "length": "10.96",
        "max_atmosphering_speed": "100",
        "crew": "0",
        "passengers": "4",
        "cargo_capacity": "none",
        "consumables": "none",
        "vehicle_class": "droid tank",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-20T20:26:55.522000Z",
        "edited": "2014-12-20T21:30:21.765000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/72\/"
    },
    {
        "name": "Droid gunship",
        "model": "HMP droid gunship",
        "manufacturer": "Baktoid Fleet Ordnance, Haor Chall Engineering",
        "cost_in_credits": "60000",
        "length": "12.3",
        "max_atmosphering_speed": "820",
        "crew": "0",
        "passengers": "0",
        "cargo_capacity": "0",
        "consumables": "none",
        "vehicle_class": "airspeeder",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-20T20:32:05.687000Z",
        "edited": "2014-12-20T21:30:21.768000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/73\/"
    },
    {
        "name": "AT-RT",
        "model": "All Terrain Recon Transport",
        "manufacturer": "Kuat Drive Yards",
        "cost_in_credits": "40000",
        "length": "3.2",
        "max_atmosphering_speed": "90",
        "crew": "1",
        "passengers": "0",
        "cargo_capacity": "20",
        "consumables": "1 day",
        "vehicle_class": "walker",
        "pilots": [],
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "created": "2014-12-20T20:47:49.189000Z",
        "edited": "2014-12-20T21:30:21.772000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/vehicles\/76\/"
    }
]
```
<div id="execution-results-GETapi-vehicles-advanced-search" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-vehicles-advanced-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-vehicles-advanced-search"></code></pre>
</div>
<div id="execution-error-GETapi-vehicles-advanced-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-vehicles-advanced-search"></code></pre>
</div>
<form id="form-GETapi-vehicles-advanced-search" data-method="GET" data-path="api/vehicles/advanced-search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-vehicles-advanced-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-vehicles-advanced-search" onclick="tryItOut('GETapi-vehicles-advanced-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-vehicles-advanced-search" onclick="cancelTryOut('GETapi-vehicles-advanced-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-vehicles-advanced-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/vehicles/advanced-search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>attribute</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="attribute" data-endpoint="GETapi-vehicles-advanced-search" data-component="query" required  hidden>
<br>
Attribute name of the given vehicle resource used for condition check.
</p>
<p>
<b><code>operator</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="operator" data-endpoint="GETapi-vehicles-advanced-search" data-component="query" required  hidden>
<br>
Operator used in the condition check between attribute and condition parameter.
</p>
<p>
<b><code>condition</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="condition" data-endpoint="GETapi-vehicles-advanced-search" data-component="query" required  hidden>
<br>
Condition parameter used in the condition check against attribute.
</p>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="GETapi-vehicles-advanced-search" data-component="query" required  hidden>
<br>
Type of the attribute and condition parameter.
</p>
</form>



