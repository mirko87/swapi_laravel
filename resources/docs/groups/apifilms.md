# API\Films


## List all available films (or search by term)


A Film resource is a single film.

<h4 class="fancy-heading-panel"><b>Attributes</b></h4>
<small class="badge badge-purple">title</small> <i>string</i> -- The title of this film.<br>
<small class="badge badge-purple">episode_id</small> <i>integer</i> -- The episode number of this film.<br>
<small class="badge badge-purple">opening_crawl</small> <i>string</i> -- The opening paragraphs at the beginning of this film.<br>
<small class="badge badge-purple">director</small> <i>string</i> -- The name of the director of this film.<br>
<small class="badge badge-purple">producer</small> <i>string</i> -- The name(s) of the producer(s) of this film. Comma separated.<br>
<small class="badge badge-purple">release_date</small> <i>date</i> -- The ISO 8601 date format of film release at original creator country.<br>
<small class="badge badge-purple">species</small> <i>array</i> -- An array of species resource URLs that are in this film.<br>
<small class="badge badge-purple">starships</small> <i>array</i> -- An array of starship resource URLs that are in this film.<br>
<small class="badge badge-purple">vehicles</small> <i>array</i> -- An array of vehicle resource URLs that are in this film.<br>
<small class="badge badge-purple">characters</small> <i>array</i> -- An array of people resource URLs that are in this film.<br>
<small class="badge badge-purple">planets</small> <i>array</i> -- An array of planet resource URLs that are in this film.<br>
<small class="badge badge-purple">url</small> <i>string</i> -- The hypermedia URL of this resource.<br>
<small class="badge badge-purple">created</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was created.<br>
<small class="badge badge-purple">edited</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was edited.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/films?search=A+New+Hope&page=1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/films',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'A New Hope',
            'page'=> '1',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/films"
);

let params = {
    "search": "A New Hope",
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
<div id="execution-results-GETapi-films" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-films"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-films"></code></pre>
</div>
<div id="execution-error-GETapi-films" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-films"></code></pre>
</div>
<form id="form-GETapi-films" data-method="GET" data-path="api/films" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-films', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-films" onclick="tryItOut('GETapi-films');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-films" onclick="cancelTryOut('GETapi-films');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-films" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/films</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-films" data-component="query"  hidden>
<br>
Term to search resources by. In case of Film resource search applies to the title attribute. Defaults to 'null'.
</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETapi-films" data-component="query"  hidden>
<br>
Page number parameter used for pagination of results. Defaults to 'null'.
</p>
</form>


## List films schema


Schema allows you to see which attributes and their types are available for this resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/films/schema" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/films/schema',
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
    "http://127.0.0.1:8000/api/films/schema"
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
    "description": "A Star Wars film",
    "title": "Film",
    "required": [
        "title",
        "episode_id",
        "opening_crawl",
        "director",
        "producer",
        "release_date",
        "characters",
        "planets",
        "starships",
        "vehicles",
        "species",
        "url",
        "created",
        "edited"
    ],
    "$schema": "http:\/\/json-schema.org\/draft-04\/schema",
    "type": "object",
    "properties": {
        "starships": {
            "type": "array",
            "description": "The starship resources featured within this film."
        },
        "edited": {
            "type": "string",
            "description": "the ISO 8601 date format of the time that this resource was edited.",
            "format": "date-time"
        },
        "planets": {
            "type": "array",
            "description": "The planet resources featured within this film."
        },
        "producer": {
            "type": "string",
            "description": "The producer(s) of this film."
        },
        "title": {
            "type": "string",
            "description": "The title of this film."
        },
        "url": {
            "type": "string",
            "description": "The url of this resource",
            "format": "uri"
        },
        "release_date": {
            "type": "string",
            "description": "The release date at original creator country.",
            "format": "date"
        },
        "vehicles": {
            "type": "array",
            "description": "The vehicle resources featured within this film."
        },
        "episode_id": {
            "type": "integer",
            "description": "The episode number of this film."
        },
        "director": {
            "type": "string",
            "description": "The director of this film."
        },
        "created": {
            "type": "string",
            "description": "The ISO 8601 date format of the time that this resource was created.",
            "format": "date-time"
        },
        "opening_crawl": {
            "type": "string",
            "description": "The opening crawl text at the beginning of this film."
        },
        "characters": {
            "type": "array",
            "description": "The people resources featured within this film."
        },
        "species": {
            "type": "array",
            "description": "The species resources featured within this film."
        }
    }
}
```
<div id="execution-results-GETapi-films-schema" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-films-schema"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-films-schema"></code></pre>
</div>
<div id="execution-error-GETapi-films-schema" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-films-schema"></code></pre>
</div>
<form id="form-GETapi-films-schema" data-method="GET" data-path="api/films/schema" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-films-schema', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-films-schema" onclick="tryItOut('GETapi-films-schema');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-films-schema" onclick="cancelTryOut('GETapi-films-schema');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-films-schema" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/films/schema</code></b>
</p>
</form>


## Retrieve a film




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/films/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/films/1',
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
    "http://127.0.0.1:8000/api/films/1"
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
```
<div id="execution-results-GETapi-films--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-films--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-films--id-"></code></pre>
</div>
<div id="execution-error-GETapi-films--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-films--id-"></code></pre>
</div>
<form id="form-GETapi-films--id-" data-method="GET" data-path="api/films/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-films--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-films--id-" onclick="tryItOut('GETapi-films--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-films--id-" onclick="cancelTryOut('GETapi-films--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-films--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/films/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-films--id-" data-component="url" required  hidden>
<br>
The ID of the film resource.
</p>
</form>


## List all specified subresource data of a specific film




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/films/1/characters" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/films/1/characters',
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
    "http://127.0.0.1:8000/api/films/1/characters"
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
    "A New Hope": [
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
            "name": "R2-D2",
            "height": "96",
            "mass": "32",
            "hair_color": "n\/a",
            "skin_color": "white, blue",
            "eye_color": "red",
            "birth_year": "33BBY",
            "gender": "n\/a",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/8\/",
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
            "created": "2014-12-10T15:11:50.376000Z",
            "edited": "2014-12-20T21:17:50.311000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/3\/"
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
            "name": "Leia Organa",
            "height": "150",
            "mass": "49",
            "hair_color": "brown",
            "skin_color": "light",
            "eye_color": "brown",
            "birth_year": "19BBY",
            "gender": "female",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/2\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
            ],
            "species": [],
            "vehicles": [
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/30\/"
            ],
            "starships": [],
            "created": "2014-12-10T15:20:09.791000Z",
            "edited": "2014-12-20T21:17:50.315000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/5\/"
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
            "name": "Obi-Wan Kenobi",
            "height": "182",
            "mass": "77",
            "hair_color": "auburn, white",
            "skin_color": "fair",
            "eye_color": "blue-gray",
            "birth_year": "57BBY",
            "gender": "male",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/20\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
            ],
            "species": [],
            "vehicles": [
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/38\/"
            ],
            "starships": [
                "http:\/\/127.0.0.1:8000\/api\/starships\/48\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/59\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/64\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/65\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/74\/"
            ],
            "created": "2014-12-10T16:16:29.192000Z",
            "edited": "2014-12-20T21:17:50.325000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/10\/"
        },
        {
            "name": "Wilhuff Tarkin",
            "height": "180",
            "mass": "unknown",
            "hair_color": "auburn, grey",
            "skin_color": "fair",
            "eye_color": "blue",
            "birth_year": "64BBY",
            "gender": "male",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/21\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
            ],
            "species": [],
            "vehicles": [],
            "starships": [],
            "created": "2014-12-10T16:26:56.138000Z",
            "edited": "2014-12-20T21:17:50.330000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/12\/"
        },
        {
            "name": "Chewbacca",
            "height": "228",
            "mass": "112",
            "hair_color": "brown",
            "skin_color": "unknown",
            "eye_color": "blue",
            "birth_year": "200BBY",
            "gender": "male",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/14\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
            ],
            "species": [
                "http:\/\/127.0.0.1:8000\/api\/species\/3\/"
            ],
            "vehicles": [
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/19\/"
            ],
            "starships": [
                "http:\/\/127.0.0.1:8000\/api\/starships\/10\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/22\/"
            ],
            "created": "2014-12-10T16:42:45.066000Z",
            "edited": "2014-12-20T21:17:50.332000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/13\/"
        },
        {
            "name": "Han Solo",
            "height": "180",
            "mass": "80",
            "hair_color": "brown",
            "skin_color": "fair",
            "eye_color": "brown",
            "birth_year": "29BBY",
            "gender": "male",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/22\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
            ],
            "species": [],
            "vehicles": [],
            "starships": [
                "http:\/\/127.0.0.1:8000\/api\/starships\/10\/",
                "http:\/\/127.0.0.1:8000\/api\/starships\/22\/"
            ],
            "created": "2014-12-10T16:49:14.582000Z",
            "edited": "2014-12-20T21:17:50.334000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/14\/"
        },
        {
            "name": "Greedo",
            "height": "173",
            "mass": "74",
            "hair_color": "n\/a",
            "skin_color": "green",
            "eye_color": "black",
            "birth_year": "44BBY",
            "gender": "male",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/23\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/"
            ],
            "species": [
                "http:\/\/127.0.0.1:8000\/api\/species\/4\/"
            ],
            "vehicles": [],
            "starships": [],
            "created": "2014-12-10T17:03:30.334000Z",
            "edited": "2014-12-20T21:17:50.336000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/15\/"
        },
        {
            "name": "Jabba Desilijic Tiure",
            "height": "175",
            "mass": "1,358",
            "hair_color": "n\/a",
            "skin_color": "green-tan, brown",
            "eye_color": "orange",
            "birth_year": "600BBY",
            "gender": "hermaphrodite",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/24\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
            ],
            "species": [
                "http:\/\/127.0.0.1:8000\/api\/species\/5\/"
            ],
            "vehicles": [],
            "starships": [],
            "created": "2014-12-10T17:11:31.638000Z",
            "edited": "2014-12-20T21:17:50.338000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/16\/"
        },
        {
            "name": "Wedge Antilles",
            "height": "170",
            "mass": "77",
            "hair_color": "brown",
            "skin_color": "fair",
            "eye_color": "hazel",
            "birth_year": "21BBY",
            "gender": "male",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/22\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
            ],
            "species": [],
            "vehicles": [
                "http:\/\/127.0.0.1:8000\/api\/vehicles\/14\/"
            ],
            "starships": [
                "http:\/\/127.0.0.1:8000\/api\/starships\/12\/"
            ],
            "created": "2014-12-12T11:08:06.469000Z",
            "edited": "2014-12-20T21:17:50.341000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/18\/"
        },
        {
            "name": "Jek Tono Porkins",
            "height": "180",
            "mass": "110",
            "hair_color": "brown",
            "skin_color": "fair",
            "eye_color": "blue",
            "birth_year": "unknown",
            "gender": "male",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/26\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/"
            ],
            "species": [],
            "vehicles": [],
            "starships": [
                "http:\/\/127.0.0.1:8000\/api\/starships\/12\/"
            ],
            "created": "2014-12-12T11:16:56.569000Z",
            "edited": "2014-12-20T21:17:50.343000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/19\/"
        },
        {
            "name": "Raymus Antilles",
            "height": "188",
            "mass": "79",
            "hair_color": "brown",
            "skin_color": "light",
            "eye_color": "brown",
            "birth_year": "unknown",
            "gender": "male",
            "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/2\/",
            "films": [
                "http:\/\/127.0.0.1:8000\/api\/films\/1\/",
                "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
            ],
            "species": [],
            "vehicles": [],
            "starships": [],
            "created": "2014-12-20T19:49:35.583000Z",
            "edited": "2014-12-20T21:17:50.493000Z",
            "url": "http:\/\/127.0.0.1:8000\/api\/people\/81\/"
        }
    ]
}
```
<div id="execution-results-GETapi-films--id---subresourceName-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-films--id---subresourceName-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-films--id---subresourceName-"></code></pre>
</div>
<div id="execution-error-GETapi-films--id---subresourceName-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-films--id---subresourceName-"></code></pre>
</div>
<form id="form-GETapi-films--id---subresourceName-" data-method="GET" data-path="api/films/{id}/{subresourceName}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-films--id---subresourceName-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-films--id---subresourceName-" onclick="tryItOut('GETapi-films--id---subresourceName-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-films--id---subresourceName-" onclick="cancelTryOut('GETapi-films--id---subresourceName-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-films--id---subresourceName-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/films/{id}/{subresourceName}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-films--id---subresourceName-" data-component="url" required  hidden>
<br>
The ID of the film resource.
</p>
<p>
<b><code>subresourceName</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="subresourceName" data-endpoint="GETapi-films--id---subresourceName-" data-component="url" required  hidden>
<br>
The subresource name of the given film.
</p>
</form>


## Advanced search film resources




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/films/advanced-search?attribute=created&operator=%3E&condition=12%2F15%2F2014&type=date" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/films/advanced-search',
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
    "http://127.0.0.1:8000/api/films/advanced-search"
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
```
<div id="execution-results-GETapi-films-advanced-search" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-films-advanced-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-films-advanced-search"></code></pre>
</div>
<div id="execution-error-GETapi-films-advanced-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-films-advanced-search"></code></pre>
</div>
<form id="form-GETapi-films-advanced-search" data-method="GET" data-path="api/films/advanced-search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-films-advanced-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-films-advanced-search" onclick="tryItOut('GETapi-films-advanced-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-films-advanced-search" onclick="cancelTryOut('GETapi-films-advanced-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-films-advanced-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/films/advanced-search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>attribute</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="attribute" data-endpoint="GETapi-films-advanced-search" data-component="query" required  hidden>
<br>
Attribute name of the given film resource used for condition check.
</p>
<p>
<b><code>operator</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="operator" data-endpoint="GETapi-films-advanced-search" data-component="query" required  hidden>
<br>
Operator used in the condition check between attribute and condition parameter.
</p>
<p>
<b><code>condition</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="condition" data-endpoint="GETapi-films-advanced-search" data-component="query" required  hidden>
<br>
Condition parameter used in the condition check against attribute.
</p>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="GETapi-films-advanced-search" data-component="query" required  hidden>
<br>
Type of the attribute and condition parameter.
</p>
</form>



