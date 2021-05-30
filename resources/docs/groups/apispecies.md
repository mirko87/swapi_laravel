# API\Species


## List all available species (or search by term)


A Species resource is a type of person or character within the Star Wars Universe.

<h4 class="fancy-heading-panel"><b>Attributes</b></h4>
<small class="badge badge-purple">name</small> <i>string</i> -- The name of this species.<br>
<small class="badge badge-purple">classification</small> <i>string</i> -- The classification of this species, such as "mammal" or "reptile".<br>
<small class="badge badge-purple">designation</small> <i>string</i> -- The designation of this species, such as "sentient".<br>
<small class="badge badge-purple">average_height</small> <i>string</i> -- The average height of this species in centimeters.<br>
<small class="badge badge-purple">average_lifespan</small> <i>string</i> -- The average lifespan of this species in years.<br>
<small class="badge badge-purple">eye_colors</small> <i>string</i> -- A comma-separated string of common eye colors for this species, "none" if this species does not typically have eyes.<br>
<small class="badge badge-purple">hair_colors</small> <i>string</i> -- A comma-separated string of common hair colors for this species, "none" if this species does not typically have hair.<br>
<small class="badge badge-purple">skin_colors</small> <i>string</i> -- A comma-separated string of common skin colors for this species, "none" if this species does not typically have skin.<br>
<small class="badge badge-purple">language</small> <i>string</i> -- The language commonly spoken by this species.<br>
<small class="badge badge-purple">homeworld</small> <i>string</i> -- The URL of a planet resource, a planet that this species originates from.<br>
<small class="badge badge-purple">people</small> <i>array</i> -- An array of People URL Resources that are a part of this species.<br>
<small class="badge badge-purple">films</small> <i>array</i> -- An array of Film URL Resources that this species has appeared in.<br>
<small class="badge badge-purple">url</small> <i>string</i> -- The hypermedia URL of this resource.<br>
<small class="badge badge-purple">created</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was created.<br>
<small class="badge badge-purple">edited</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was edited.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/species?search=Wookie&page=1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/species',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Wookie',
            'page'=> '1',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/species"
);

let params = {
    "search": "Wookie",
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
            "name": "Wookie",
            "classification": "mammal",
            "designation": "sentient",
            "average_height": "210",
            "skin_colors": "gray",
            "hair_colors": "black, brown",
            "eye_colors": "blue, green, yellow, brown, golden, red",
            "average_lifespan": "400",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/14\/",
            "language": "Shyriiwook",
            "people": [
                "http:\/\/127.0.0.1:8000\/api\/people\/13\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/80\/"
            ],
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
            ],
            "created": "2014-12-10T16:44:31.486000Z",
            "edited": "2014-12-20T21:36:42.142000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/species\/3\/"
        }
    ]
}
```
<div id="execution-results-GETapi-species" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-species"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-species"></code></pre>
</div>
<div id="execution-error-GETapi-species" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-species"></code></pre>
</div>
<form id="form-GETapi-species" data-method="GET" data-path="api/species" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-species', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-species" onclick="tryItOut('GETapi-species');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-species" onclick="cancelTryOut('GETapi-species');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-species" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/species</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-species" data-component="query"  hidden>
<br>
Term to search resources by. In case of Species resource search applies to the name attribute. Defaults to 'null'.
</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETapi-species" data-component="query"  hidden>
<br>
Page number parameter used for pagination of results. Defaults to 'null'.
</p>
</form>


## List species schema


Schema allows you to see which attributes and their types are available for this resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/species/schema" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/species/schema',
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
    "http://127.0.0.1:8000/api/species/schema"
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
    "description": "A species within the Star Wars universe",
    "title": "People",
    "required": [
        "name",
        "classification",
        "designation",
        "average_height",
        "average_lifespan",
        "hair_colors",
        "skin_colors",
        "eye_colors",
        "homeworld",
        "language",
        "people",
        "films",
        "url",
        "created",
        "edited"
    ],
    "$schema": "http:\/\/json-schema.org\/draft-04\/schema",
    "type": "object",
    "properties": {
        "edited": {
            "type": "string",
            "description": "The ISO 8601 date format of the time that this resource was edited.",
            "format": "date-time"
        },
        "name": {
            "type": "string",
            "description": "The name of this species."
        },
        "classification": {
            "type": "string",
            "description": "The classification of this species."
        },
        "people": {
            "type": "array",
            "description": "An array of People URL Resources that are a part of this species."
        },
        "eye_colors": {
            "type": "string",
            "description": "A comma-seperated string of common eye colors for this species, none if this species does not typically have eyes."
        },
        "created": {
            "type": "string",
            "description": "The ISO 8601 date format of the time that this resource was created.",
            "format": "date-time"
        },
        "designation": {
            "type": "string",
            "description": "The designation of this species."
        },
        "skin_colors": {
            "type": "string",
            "description": "A comma-seperated string of common skin colors for this species, none if this species does not typically have skin."
        },
        "language": {
            "type": "string",
            "description": "The language commonly spoken by this species."
        },
        "url": {
            "type": "string",
            "description": "The hypermedia URL of this resource.",
            "format": "uri"
        },
        "hair_colors": {
            "type": "string",
            "description": "A comma-seperated string of common hair colors for this species, none if this species does not typically have hair."
        },
        "homeworld": {
            "type": "string",
            "description": "The URL of a planet resource, a planet that this species originates from."
        },
        "films": {
            "type": "array",
            "description": " An array of Film URL Resources that this species has appeared in."
        },
        "average_lifespan": {
            "type": "string",
            "description": "The average lifespan of this species in years."
        },
        "average_height": {
            "type": "string",
            "description": "The average height of this person in centimeters."
        }
    }
}
```
<div id="execution-results-GETapi-species-schema" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-species-schema"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-species-schema"></code></pre>
</div>
<div id="execution-error-GETapi-species-schema" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-species-schema"></code></pre>
</div>
<form id="form-GETapi-species-schema" data-method="GET" data-path="api/species/schema" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-species-schema', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-species-schema" onclick="tryItOut('GETapi-species-schema');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-species-schema" onclick="cancelTryOut('GETapi-species-schema');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-species-schema" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/species/schema</code></b>
</p>
</form>


## Retrieve a specific species




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/species/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/species/1',
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
    "http://127.0.0.1:8000/api/species/1"
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
    "name": "Human",
    "classification": "mammal",
    "designation": "sentient",
    "average_height": "180",
    "skin_colors": "caucasian, black, asian, hispanic",
    "hair_colors": "blonde, brown, black, red",
    "eye_colors": "brown, blue, green, hazel, grey, amber",
    "average_lifespan": "120",
    "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/9\/",
    "language": "Galactic Basic",
    "people": [
        "http:\/\/127.0.0.1:8000\/api\/people\/66\/",
        "http:\/\/127.0.0.1:8000\/api\/people\/67\/",
        "http:\/\/127.0.0.1:8000\/api\/people\/68\/",
        "http:\/\/127.0.0.1:8000\/api\/people\/74\/"
    ],
    "films": [
        "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
        "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
        "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
        "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
        "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
        "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
    ],
    "created": "2014-12-10T13:52:11.567000Z",
    "edited": "2014-12-20T21:36:42.136000Z",
    "url": "http:\/\/127.0.0.1:8000\/api\/species\/1\/"
}
```
<div id="execution-results-GETapi-species--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-species--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-species--id-"></code></pre>
</div>
<div id="execution-error-GETapi-species--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-species--id-"></code></pre>
</div>
<form id="form-GETapi-species--id-" data-method="GET" data-path="api/species/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-species--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-species--id-" onclick="tryItOut('GETapi-species--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-species--id-" onclick="cancelTryOut('GETapi-species--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-species--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/species/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-species--id-" data-component="url" required  hidden>
<br>
The ID of the species resource.
</p>
</form>


## List all specified subresource data of a specific species




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/species/1/films" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/species/1/films',
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
    "http://127.0.0.1:8000/api/species/1/films"
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
    "Human": [
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
            "title": "The Empire Strikes Back",
            "episode_id": 5,
            "opening_crawl": "It is a dark time for the\r\nRebellion. Although the Death\r\nStar has been destroyed,\r\nImperial troops have driven the\r\nRebel forces from their hidden\r\nbase and pursued them across\r\nthe galaxy.\r\n\r\nEvading the dreaded Imperial\r\nStarfleet, a group of freedom\r\nfighters led by Luke Skywalker\r\nhas established a new secret\r\nbase on the remote ice world\r\nof Hoth.\r\n\r\nThe evil lord Darth Vader,\r\nobsessed with finding young\r\nSkywalker, has dispatched\r\nthousands of remote probes into\r\nthe far reaches of space....",
            "director": "Irvin Kershner",
            "producer": "Gary Kurtz, Rick McCallum",
            "release_date": "1980-05-17",
            "characters": [
                "http:\/\/127.0.0.1:8000\/api\/people\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/4\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/5\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/10\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/13\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/14\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/18\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/20\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/21\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/22\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/23\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/24\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/25\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/26\/"
            ],
            "planets": [
                "http:\/\/127.0.0.1:8000\/api\/planets\/4\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/5\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/6\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/27\/"
            ],
            "starships": [
                "http:\/\/127.0.0.1:8000\/api\/starships\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/10\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/11\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/12\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/15\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/17\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/21\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/22\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/23\/"
            ],
            "vehicles": [
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/8\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/14\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/16\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/18\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/19\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/20\/"
            ],
            "species": [
                "http:\/\/127.0.0.1:8000\/api\/species\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/6\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/7\/"
            ],
            "created": "2014-12-12T11:26:24.656000Z",
            "edited": "2014-12-15T13:07:53.386000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/films\/2\/"
        },
        {
            "title": "Return of the Jedi",
            "episode_id": 6,
            "opening_crawl": "Luke Skywalker has returned to\r\nhis home planet of Tatooine in\r\nan attempt to rescue his\r\nfriend Han Solo from the\r\nclutches of the vile gangster\r\nJabba the Hutt.\r\n\r\nLittle does Luke know that the\r\nGALACTIC EMPIRE has secretly\r\nbegun construction on a new\r\narmored space station even\r\nmore powerful than the first\r\ndreaded Death Star.\r\n\r\nWhen completed, this ultimate\r\nweapon will spell certain doom\r\nfor the small band of rebels\r\nstruggling to restore freedom\r\nto the galaxy...",
            "director": "Richard Marquand",
            "producer": "Howard G. Kazanjian, George Lucas, Rick McCallum",
            "release_date": "1983-05-25",
            "characters": [
                "http:\/\/127.0.0.1:8000\/api\/people\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/4\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/5\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/10\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/13\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/14\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/16\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/18\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/20\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/21\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/22\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/25\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/27\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/28\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/29\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/30\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/31\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/45\/"
            ],
            "planets": [
                "http:\/\/127.0.0.1:8000\/api\/planets\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/5\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/7\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/8\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/9\/"
            ],
            "starships": [
                "http:\/\/127.0.0.1:8000\/api\/starships\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/10\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/11\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/12\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/15\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/17\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/22\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/23\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/27\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/28\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/29\/"
            ],
            "vehicles": [
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/8\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/16\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/18\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/19\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/24\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/25\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/26\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/30\/"
            ],
            "species": [
                "http:\/\/127.0.0.1:8000\/api\/species\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/5\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/6\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/8\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/9\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/10\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/15\/"
            ],
            "created": "2014-12-18T10:39:33.255000Z",
            "edited": "2014-12-20T09:48:37.462000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
        },
        {
            "title": "The Phantom Menace",
            "episode_id": 1,
            "opening_crawl": "Turmoil has engulfed the\r\nGalactic Republic. The taxation\r\nof trade routes to outlying star\r\nsystems is in dispute.\r\n\r\nHoping to resolve the matter\r\nwith a blockade of deadly\r\nbattleships, the greedy Trade\r\nFederation has stopped all\r\nshipping to the small planet\r\nof Naboo.\r\n\r\nWhile the Congress of the\r\nRepublic endlessly debates\r\nthis alarming chain of events,\r\nthe Supreme Chancellor has\r\nsecretly dispatched two Jedi\r\nKnights, the guardians of\r\npeace and justice in the\r\ngalaxy, to settle the conflict....",
            "director": "George Lucas",
            "producer": "Rick McCallum",
            "release_date": "1999-05-19",
            "characters": [
                "http:\/\/127.0.0.1:8000\/api\/people\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/10\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/11\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/16\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/20\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/21\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/32\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/33\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/34\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/35\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/36\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/37\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/38\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/39\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/40\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/41\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/42\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/43\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/44\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/46\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/47\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/48\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/49\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/50\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/51\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/52\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/53\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/54\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/55\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/56\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/57\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/58\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/59\/"
            ],
            "planets": [
                "http:\/\/127.0.0.1:8000\/api\/planets\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/8\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/9\/"
            ],
            "starships": [
                "http:\/\/127.0.0.1:8000\/api\/starships\/31\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/32\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/39\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/40\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/41\/"
            ],
            "vehicles": [
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/33\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/34\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/35\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/36\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/37\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/38\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/42\/"
            ],
            "species": [
                "http:\/\/127.0.0.1:8000\/api\/species\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/6\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/11\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/12\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/13\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/14\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/15\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/16\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/17\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/18\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/19\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/20\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/21\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/22\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/23\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/24\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/25\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/26\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/27\/"
            ],
            "created": "2014-12-19T16:52:55.740000Z",
            "edited": "2014-12-20T10:54:07.216000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
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
        },
        {
            "title": "Revenge of the Sith",
            "episode_id": 3,
            "opening_crawl": "War! The Republic is crumbling\r\nunder attacks by the ruthless\r\nSith Lord, Count Dooku.\r\nThere are heroes on both sides.\r\nEvil is everywhere.\r\n\r\nIn a stunning move, the\r\nfiendish droid leader, General\r\nGrievous, has swept into the\r\nRepublic capital and kidnapped\r\nChancellor Palpatine, leader of\r\nthe Galactic Senate.\r\n\r\nAs the Separatist Droid Army\r\nattempts to flee the besieged\r\ncapital with their valuable\r\nhostage, two Jedi Knights lead a\r\ndesperate mission to rescue the\r\ncaptive Chancellor....",
            "director": "George Lucas",
            "producer": "Rick McCallum",
            "release_date": "2005-05-19",
            "characters": [
                "http:\/\/127.0.0.1:8000\/api\/people\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/4\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/5\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/6\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/7\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/10\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/11\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/12\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/13\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/20\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/21\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/33\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/35\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/46\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/51\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/52\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/53\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/54\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/55\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/56\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/58\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/63\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/64\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/67\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/68\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/75\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/78\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/79\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/80\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/81\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/82\/",
                "http:\/\/127.0.0.1:8000\/api\/people\/83\/"
            ],
            "planets": [
                "http:\/\/127.0.0.1:8000\/api\/planets\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/5\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/8\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/9\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/12\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/13\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/14\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/15\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/16\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/17\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/18\/",
                "http:\/\/127.0.0.1:8000\/api\/planets\/19\/"
            ],
            "starships": [
                "http:\/\/127.0.0.1:8000\/api\/starships\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/32\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/48\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/59\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/61\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/63\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/64\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/65\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/66\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/68\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/74\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/75\/"
            ],
            "vehicles": [
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/33\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/50\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/53\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/56\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/60\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/62\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/67\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/69\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/70\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/71\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/72\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/73\/",
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/76\/"
            ],
            "species": [
                "http:\/\/127.0.0.1:8000\/api\/species\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/6\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/15\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/19\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/20\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/23\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/24\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/25\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/26\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/27\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/28\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/29\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/30\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/33\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/34\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/35\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/36\/",
                "http:\/\/127.0.0.1:8000\/api\/species\/37\/"
            ],
            "created": "2014-12-20T18:49:38.403000Z",
            "edited": "2014-12-20T20:47:52.073000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        }
    ]
}
```
<div id="execution-results-GETapi-species--id---subresourceName-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-species--id---subresourceName-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-species--id---subresourceName-"></code></pre>
</div>
<div id="execution-error-GETapi-species--id---subresourceName-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-species--id---subresourceName-"></code></pre>
</div>
<form id="form-GETapi-species--id---subresourceName-" data-method="GET" data-path="api/species/{id}/{subresourceName}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-species--id---subresourceName-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-species--id---subresourceName-" onclick="tryItOut('GETapi-species--id---subresourceName-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-species--id---subresourceName-" onclick="cancelTryOut('GETapi-species--id---subresourceName-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-species--id---subresourceName-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/species/{id}/{subresourceName}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-species--id---subresourceName-" data-component="url" required  hidden>
<br>
The ID of the species resource.
</p>
<p>
<b><code>subresourceName</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="subresourceName" data-endpoint="GETapi-species--id---subresourceName-" data-component="url" required  hidden>
<br>
The subresource name of the given species.
</p>
</form>


## Advanced search species resources




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/species/advanced-search?attribute=classification&operator=%3D&condition=Mammal&type=string" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/species/advanced-search',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'attribute'=> 'classification',
            'operator'=> '=',
            'condition'=> 'Mammal',
            'type'=> 'string',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/species/advanced-search"
);

let params = {
    "attribute": "classification",
    "operator": "=",
    "condition": "Mammal",
    "type": "string",
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

[]
```
<div id="execution-results-GETapi-species-advanced-search" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-species-advanced-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-species-advanced-search"></code></pre>
</div>
<div id="execution-error-GETapi-species-advanced-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-species-advanced-search"></code></pre>
</div>
<form id="form-GETapi-species-advanced-search" data-method="GET" data-path="api/species/advanced-search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-species-advanced-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-species-advanced-search" onclick="tryItOut('GETapi-species-advanced-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-species-advanced-search" onclick="cancelTryOut('GETapi-species-advanced-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-species-advanced-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/species/advanced-search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>attribute</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="attribute" data-endpoint="GETapi-species-advanced-search" data-component="query" required  hidden>
<br>
Attribute name of the given species resource used for condition check.
</p>
<p>
<b><code>operator</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="operator" data-endpoint="GETapi-species-advanced-search" data-component="query" required  hidden>
<br>
Operator used in the condition check between attribute and condition parameter.
</p>
<p>
<b><code>condition</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="condition" data-endpoint="GETapi-species-advanced-search" data-component="query" required  hidden>
<br>
Condition parameter used in the condition check against attribute.
</p>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="GETapi-species-advanced-search" data-component="query" required  hidden>
<br>
Type of the attribute and condition parameter.
</p>
</form>



