# API\Characters


## List all available characters (or search by term)


A People resource is an individual person or character within the Star Wars universe.

<h4 class="fancy-heading-panel"><b>Attributes</b></h4>
<small class="badge badge-purple">name</small> <i>string</i> -- The name of this person.<br>
<small class="badge badge-purple">birth_year</small> <i>string</i> -- The birth year of the person, using the in-universe standard of BBY or ABY - Before the Battle of Yavin or After the Battle of Yavin. The Battle of Yavin is a battle that occurs at the end of Star Wars episode IV: A New Hope.<br>
<small class="badge badge-purple">eye_color</small> <i>string</i> -- The eye color of this person. Will be "unknown" if not known or "n/a" if the person does not have an eye.<br>
<small class="badge badge-purple">gender</small> <i>string</i> -- The gender of this person. Either "Male", "Female" or "unknown", "n/a" if the person does not have a gender.<br>
<small class="badge badge-purple">hair_color</small> <i>string</i> -- The hair color of this person. Will be "unknown" if not known or "n/a" if the person does not have hair.<br>
<small class="badge badge-purple">height</small> <i>string</i> -- The height of the person in centimeters.<br>
<small class="badge badge-purple">mass</small> <i>string</i> -- The mass of the person in kilograms.<br>
<small class="badge badge-purple">skin_color</small> <i>string</i> -- The skin color of this person.<br>
<small class="badge badge-purple">homeworld</small> <i>string</i> -- The URL of a planet resource, a planet that this person was born on or inhabits.<br>
<small class="badge badge-purple">films</small> <i>array</i> -- An array of film resource URLs that this person has been in.<br>
<small class="badge badge-purple">species</small> <i>array</i> -- An array of species resource URLs that this person belongs to.<br>
<small class="badge badge-purple">starships</small> <i>array</i> -- An array of starship resource URLs that this person has piloted.<br>
<small class="badge badge-purple">vehicles</small> <i>array</i> -- An array of vehicle resource URLs that this person has piloted.<br>
<small class="badge badge-purple">url</small> <i>string</i> -- The hypermedia URL of this resource.<br>
<small class="badge badge-purple">created</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was created.<br>
<small class="badge badge-purple">edited</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was edited.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/people?search=Skywalker&page=1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/people',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
        'query' => [
            'search'=> 'Skywalker',
            'page'=> '1',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```javascript
const url = new URL(
    "http://127.0.0.1:8000/api/people"
);

let params = {
    "search": "Skywalker",
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
    "count": 3,
    "next": null,
    "previous": null,
    "results": [
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
        }
    ]
}
```
<div id="execution-results-GETapi-people" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-people"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-people"></code></pre>
</div>
<div id="execution-error-GETapi-people" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-people"></code></pre>
</div>
<form id="form-GETapi-people" data-method="GET" data-path="api/people" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-people', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-people" onclick="tryItOut('GETapi-people');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-people" onclick="cancelTryOut('GETapi-people');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-people" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/people</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>search</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="search" data-endpoint="GETapi-people" data-component="query"  hidden>
<br>
Term to search resources by. In case of People resource search applies to the name attribute. Defaults to 'null'.
</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETapi-people" data-component="query"  hidden>
<br>
Page number parameter used for pagination of results. Defaults to 'null'.
</p>
</form>


## List characters schema


Schema allows you to see which attributes and their types are available for this resource.

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/people/schema" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/people/schema',
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
    "http://127.0.0.1:8000/api/people/schema"
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
    "description": "A person within the Star Wars universe",
    "title": "People",
    "required": [
        "name",
        "height",
        "mass",
        "hair_color",
        "skin_color",
        "eye_color",
        "birth_year",
        "gender",
        "homeworld",
        "films",
        "species",
        "vehicles",
        "starships",
        "url",
        "created",
        "edited"
    ],
    "$schema": "http:\/\/json-schema.org\/draft-04\/schema",
    "type": "object",
    "properties": {
        "starships": {
            "type": "array",
            "description": "An array of starship resources that this person has piloted"
        },
        "edited": {
            "type": "string",
            "description": "the ISO 8601 date format of the time that this resource was edited.",
            "format": "date-time"
        },
        "name": {
            "type": "string",
            "description": "The name of this person."
        },
        "created": {
            "type": "string",
            "description": "The ISO 8601 date format of the time that this resource was created.",
            "format": "date-time"
        },
        "url": {
            "type": "string",
            "description": "The url of this resource",
            "format": "uri"
        },
        "gender": {
            "type": "string",
            "description": "The gender of this person (if known)."
        },
        "vehicles": {
            "type": "array",
            "description": "An array of vehicle resources that this person has piloted"
        },
        "skin_color": {
            "type": "string",
            "description": "The skin color of this person."
        },
        "hair_color": {
            "type": "string",
            "description": "The hair color of this person."
        },
        "height": {
            "type": "string",
            "description": "The height of this person in meters."
        },
        "eye_color": {
            "type": "string",
            "description": "The eye color of this person."
        },
        "mass": {
            "type": "string",
            "description": "The mass of this person in kilograms."
        },
        "films": {
            "type": "array",
            "description": "An array of urls of film resources that this person has been in."
        },
        "species": {
            "type": "array",
            "description": "The url of the species resource that this person is."
        },
        "homeworld": {
            "type": "string",
            "description": "The url of the planet resource that this person was born on."
        },
        "birth_year": {
            "type": "string",
            "description": "The birth year of this person. BBY (Before the Battle of Yavin) or ABY (After the Battle of Yavin)."
        }
    }
}
```
<div id="execution-results-GETapi-people-schema" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-people-schema"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-people-schema"></code></pre>
</div>
<div id="execution-error-GETapi-people-schema" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-people-schema"></code></pre>
</div>
<form id="form-GETapi-people-schema" data-method="GET" data-path="api/people/schema" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-people-schema', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-people-schema" onclick="tryItOut('GETapi-people-schema');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-people-schema" onclick="cancelTryOut('GETapi-people-schema');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-people-schema" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/people/schema</code></b>
</p>
</form>


## Retrieve a character




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/people/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/people/1',
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
    "http://127.0.0.1:8000/api/people/1"
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
}
```
<div id="execution-results-GETapi-people--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-people--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-people--id-"></code></pre>
</div>
<div id="execution-error-GETapi-people--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-people--id-"></code></pre>
</div>
<form id="form-GETapi-people--id-" data-method="GET" data-path="api/people/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-people--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-people--id-" onclick="tryItOut('GETapi-people--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-people--id-" onclick="cancelTryOut('GETapi-people--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-people--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/people/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-people--id-" data-component="url" required  hidden>
<br>
The ID of the character resource.
</p>
</form>


## List all specified subresource data of a specific character




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/people/1/films" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/people/1/films',
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
    "http://127.0.0.1:8000/api/people/1/films"
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
    "Luke Skywalker": [
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
<div id="execution-results-GETapi-people--id---subresourceName-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-people--id---subresourceName-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-people--id---subresourceName-"></code></pre>
</div>
<div id="execution-error-GETapi-people--id---subresourceName-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-people--id---subresourceName-"></code></pre>
</div>
<form id="form-GETapi-people--id---subresourceName-" data-method="GET" data-path="api/people/{id}/{subresourceName}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-people--id---subresourceName-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-people--id---subresourceName-" onclick="tryItOut('GETapi-people--id---subresourceName-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-people--id---subresourceName-" onclick="cancelTryOut('GETapi-people--id---subresourceName-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-people--id---subresourceName-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/people/{id}/{subresourceName}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETapi-people--id---subresourceName-" data-component="url" required  hidden>
<br>
The ID of the character resource.
</p>
<p>
<b><code>subresourceName</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="subresourceName" data-endpoint="GETapi-people--id---subresourceName-" data-component="url" required  hidden>
<br>
The subresource name of the given character.
</p>
</form>


## Advanced search character resources




> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api/people/advanced-search?attribute=created&operator=%3E&condition=12%2F15%2F2014&type=date" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api/people/advanced-search',
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
    "http://127.0.0.1:8000/api/people/advanced-search"
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
        "name": "Yoda",
        "height": "66",
        "mass": "17",
        "hair_color": "white",
        "skin_color": "green",
        "eye_color": "brown",
        "birth_year": "896BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/28\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/6\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-15T12:26:01.042000Z",
        "edited": "2014-12-20T21:17:50.345000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/20\/"
    },
    {
        "name": "Palpatine",
        "height": "170",
        "mass": "75",
        "hair_color": "grey",
        "skin_color": "pale",
        "eye_color": "yellow",
        "birth_year": "82BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/8\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-15T12:48:05.971000Z",
        "edited": "2014-12-20T21:17:50.347000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/21\/"
    },
    {
        "name": "Boba Fett",
        "height": "183",
        "mass": "78.2",
        "hair_color": "black",
        "skin_color": "fair",
        "eye_color": "brown",
        "birth_year": "31.5BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/10\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "species": [],
        "vehicles": [],
        "starships": [
            "http:\/\/127.0.0.1:8000\/api\/starships\/21\/"
        ],
        "created": "2014-12-15T12:49:32.457000Z",
        "edited": "2014-12-20T21:17:50.349000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/22\/"
    },
    {
        "name": "IG-88",
        "height": "200",
        "mass": "140",
        "hair_color": "none",
        "skin_color": "metal",
        "eye_color": "red",
        "birth_year": "15BBY",
        "gender": "none",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/28\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/2\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-15T12:51:10.076000Z",
        "edited": "2014-12-20T21:17:50.351000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/23\/"
    },
    {
        "name": "Bossk",
        "height": "190",
        "mass": "113",
        "hair_color": "none",
        "skin_color": "green",
        "eye_color": "red",
        "birth_year": "53BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/29\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/7\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-15T12:53:49.297000Z",
        "edited": "2014-12-20T21:17:50.355000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/24\/"
    },
    {
        "name": "Lando Calrissian",
        "height": "177",
        "mass": "79",
        "hair_color": "black",
        "skin_color": "dark",
        "eye_color": "brown",
        "birth_year": "31BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/30\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
        ],
        "species": [],
        "vehicles": [],
        "starships": [
            "http:\/\/127.0.0.1:8000\/api\/starships\/10\/"
        ],
        "created": "2014-12-15T12:56:32.683000Z",
        "edited": "2014-12-20T21:17:50.357000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/25\/"
    },
    {
        "name": "Lobot",
        "height": "175",
        "mass": "79",
        "hair_color": "none",
        "skin_color": "light",
        "eye_color": "blue",
        "birth_year": "37BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/6\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/2\/"
        ],
        "species": [],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-15T13:01:57.178000Z",
        "edited": "2014-12-20T21:17:50.359000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/26\/"
    },
    {
        "name": "Ackbar",
        "height": "180",
        "mass": "83",
        "hair_color": "none",
        "skin_color": "brown mottle",
        "eye_color": "orange",
        "birth_year": "41BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/31\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/8\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-18T11:07:50.584000Z",
        "edited": "2014-12-20T21:17:50.362000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/27\/"
    },
    {
        "name": "Mon Mothma",
        "height": "150",
        "mass": "unknown",
        "hair_color": "auburn",
        "skin_color": "fair",
        "eye_color": "blue",
        "birth_year": "48BBY",
        "gender": "female",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/32\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
        ],
        "species": [],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-18T11:12:38.895000Z",
        "edited": "2014-12-20T21:17:50.364000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/28\/"
    },
    {
        "name": "Arvel Crynyd",
        "height": "unknown",
        "mass": "unknown",
        "hair_color": "brown",
        "skin_color": "fair",
        "eye_color": "brown",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/28\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
        ],
        "species": [],
        "vehicles": [],
        "starships": [
            "http:\/\/127.0.0.1:8000\/api\/starships\/28\/"
        ],
        "created": "2014-12-18T11:16:33.020000Z",
        "edited": "2014-12-20T21:17:50.367000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/29\/"
    },
    {
        "name": "Wicket Systri Warrick",
        "height": "88",
        "mass": "20",
        "hair_color": "brown",
        "skin_color": "brown",
        "eye_color": "brown",
        "birth_year": "8BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/7\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/9\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-18T11:21:58.954000Z",
        "edited": "2014-12-20T21:17:50.369000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/30\/"
    },
    {
        "name": "Nien Nunb",
        "height": "160",
        "mass": "68",
        "hair_color": "none",
        "skin_color": "grey",
        "eye_color": "black",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/33\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/10\/"
        ],
        "vehicles": [],
        "starships": [
            "http:\/\/127.0.0.1:8000\/api\/starships\/10\/"
        ],
        "created": "2014-12-18T11:26:18.541000Z",
        "edited": "2014-12-20T21:17:50.371000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/31\/"
    },
    {
        "name": "Qui-Gon Jinn",
        "height": "193",
        "mass": "89",
        "hair_color": "brown",
        "skin_color": "fair",
        "eye_color": "blue",
        "birth_year": "92BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/28\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "species": [],
        "vehicles": [
            "http:\/\/127.0.0.1:8000\/api\/vehicles\/38\/"
        ],
        "starships": [],
        "created": "2014-12-19T16:54:53.618000Z",
        "edited": "2014-12-20T21:17:50.375000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/32\/"
    },
    {
        "name": "Nute Gunray",
        "height": "191",
        "mass": "90",
        "hair_color": "none",
        "skin_color": "mottled green",
        "eye_color": "red",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/18\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/11\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-19T17:05:57.357000Z",
        "edited": "2014-12-20T21:17:50.377000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/33\/"
    },
    {
        "name": "Finis Valorum",
        "height": "170",
        "mass": "unknown",
        "hair_color": "blond",
        "skin_color": "fair",
        "eye_color": "blue",
        "birth_year": "91BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/9\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "species": [],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-19T17:21:45.915000Z",
        "edited": "2014-12-20T21:17:50.379000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/34\/"
    },
    {
        "name": "Padmé Amidala",
        "height": "185",
        "mass": "45",
        "hair_color": "brown",
        "skin_color": "light",
        "eye_color": "brown",
        "birth_year": "46BBY",
        "gender": "female",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/8\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [],
        "vehicles": [],
        "starships": [
            "http:\/\/127.0.0.1:8000\/api\/starships\/39\/",
            "http:\/\/127.0.0.1:8000\/api\/starships\/49\/",
            "http:\/\/127.0.0.1:8000\/api\/starships\/64\/"
        ],
        "created": "2014-12-19T17:28:26.926000Z",
        "edited": "2014-12-20T21:17:50.381000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/35\/"
    },
    {
        "name": "Jar Jar Binks",
        "height": "196",
        "mass": "66",
        "hair_color": "none",
        "skin_color": "orange",
        "eye_color": "orange",
        "birth_year": "52BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/8\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/12\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-19T17:29:32.489000Z",
        "edited": "2014-12-20T21:17:50.383000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/36\/"
    },
    {
        "name": "Roos Tarpals",
        "height": "224",
        "mass": "82",
        "hair_color": "none",
        "skin_color": "grey",
        "eye_color": "orange",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/8\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/12\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-19T17:32:56.741000Z",
        "edited": "2014-12-20T21:17:50.385000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/37\/"
    },
    {
        "name": "Rugor Nass",
        "height": "206",
        "mass": "unknown",
        "hair_color": "none",
        "skin_color": "green",
        "eye_color": "orange",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/8\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/12\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-19T17:33:38.909000Z",
        "edited": "2014-12-20T21:17:50.388000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/38\/"
    },
    {
        "name": "Ric Olié",
        "height": "183",
        "mass": "unknown",
        "hair_color": "brown",
        "skin_color": "fair",
        "eye_color": "blue",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/8\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "species": [],
        "vehicles": [],
        "starships": [
            "http:\/\/127.0.0.1:8000\/api\/starships\/40\/"
        ],
        "created": "2014-12-19T17:45:01.522000Z",
        "edited": "2014-12-20T21:17:50.392000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/39\/"
    },
    {
        "name": "Watto",
        "height": "137",
        "mass": "unknown",
        "hair_color": "black",
        "skin_color": "blue, grey",
        "eye_color": "yellow",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/34\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/13\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-19T17:48:54.647000Z",
        "edited": "2014-12-20T21:17:50.395000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/40\/"
    },
    {
        "name": "Sebulba",
        "height": "112",
        "mass": "40",
        "hair_color": "none",
        "skin_color": "grey, red",
        "eye_color": "orange",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/35\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/14\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-19T17:53:02.586000Z",
        "edited": "2014-12-20T21:17:50.397000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/41\/"
    },
    {
        "name": "Quarsh Panaka",
        "height": "183",
        "mass": "unknown",
        "hair_color": "black",
        "skin_color": "dark",
        "eye_color": "brown",
        "birth_year": "62BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/8\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "species": [],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-19T17:55:43.348000Z",
        "edited": "2014-12-20T21:17:50.399000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/42\/"
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
        "name": "Darth Maul",
        "height": "175",
        "mass": "80",
        "hair_color": "none",
        "skin_color": "red",
        "eye_color": "yellow",
        "birth_year": "54BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/36\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/22\/"
        ],
        "vehicles": [
            "http:\/\/127.0.0.1:8000\/api\/vehicles\/42\/"
        ],
        "starships": [
            "http:\/\/127.0.0.1:8000\/api\/starships\/41\/"
        ],
        "created": "2014-12-19T18:00:41.929000Z",
        "edited": "2014-12-20T21:17:50.403000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/44\/"
    },
    {
        "name": "Bib Fortuna",
        "height": "180",
        "mass": "unknown",
        "hair_color": "none",
        "skin_color": "pale",
        "eye_color": "pink",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/37\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/3\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/15\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T09:47:02.512000Z",
        "edited": "2014-12-20T21:17:50.407000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/45\/"
    },
    {
        "name": "Ayla Secura",
        "height": "178",
        "mass": "55",
        "hair_color": "none",
        "skin_color": "blue",
        "eye_color": "hazel",
        "birth_year": "48BBY",
        "gender": "female",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/37\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/15\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T09:48:01.172000Z",
        "edited": "2014-12-20T21:17:50.409000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/46\/"
    },
    {
        "name": "Ratts Tyerel",
        "height": "79",
        "mass": "15",
        "hair_color": "none",
        "skin_color": "grey, blue",
        "eye_color": "unknown",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/38\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/16\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T09:53:15.086000Z",
        "edited": "2014-12-20T21:17:50.410000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/47\/"
    },
    {
        "name": "Dud Bolt",
        "height": "94",
        "mass": "45",
        "hair_color": "none",
        "skin_color": "blue, grey",
        "eye_color": "yellow",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/39\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/17\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T09:57:31.858000Z",
        "edited": "2014-12-20T21:17:50.414000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/48\/"
    },
    {
        "name": "Gasgano",
        "height": "122",
        "mass": "unknown",
        "hair_color": "none",
        "skin_color": "white, blue",
        "eye_color": "black",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/40\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/18\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T10:02:12.223000Z",
        "edited": "2014-12-20T21:17:50.416000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/49\/"
    },
    {
        "name": "Ben Quadinaros",
        "height": "163",
        "mass": "65",
        "hair_color": "none",
        "skin_color": "grey, green, yellow",
        "eye_color": "orange",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/41\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/19\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T10:08:33.777000Z",
        "edited": "2014-12-20T21:17:50.417000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/50\/"
    },
    {
        "name": "Mace Windu",
        "height": "188",
        "mass": "84",
        "hair_color": "none",
        "skin_color": "dark",
        "eye_color": "brown",
        "birth_year": "72BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/42\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T10:12:30.846000Z",
        "edited": "2014-12-20T21:17:50.420000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/51\/"
    },
    {
        "name": "Ki-Adi-Mundi",
        "height": "198",
        "mass": "82",
        "hair_color": "white",
        "skin_color": "pale",
        "eye_color": "yellow",
        "birth_year": "92BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/43\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/20\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T10:15:32.293000Z",
        "edited": "2014-12-20T21:17:50.422000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/52\/"
    },
    {
        "name": "Kit Fisto",
        "height": "196",
        "mass": "87",
        "hair_color": "none",
        "skin_color": "green",
        "eye_color": "black",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/44\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/21\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T10:18:57.202000Z",
        "edited": "2014-12-20T21:17:50.424000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/53\/"
    },
    {
        "name": "Eeth Koth",
        "height": "171",
        "mass": "unknown",
        "hair_color": "black",
        "skin_color": "brown",
        "eye_color": "brown",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/45\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/22\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T10:26:47.902000Z",
        "edited": "2014-12-20T21:17:50.427000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/54\/"
    },
    {
        "name": "Adi Gallia",
        "height": "184",
        "mass": "50",
        "hair_color": "none",
        "skin_color": "dark",
        "eye_color": "blue",
        "birth_year": "unknown",
        "gender": "female",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/9\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/23\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T10:29:11.661000Z",
        "edited": "2014-12-20T21:17:50.432000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/55\/"
    },
    {
        "name": "Saesee Tiin",
        "height": "188",
        "mass": "unknown",
        "hair_color": "none",
        "skin_color": "pale",
        "eye_color": "orange",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/47\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/24\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T10:32:11.669000Z",
        "edited": "2014-12-20T21:17:50.434000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/56\/"
    },
    {
        "name": "Yarael Poof",
        "height": "264",
        "mass": "unknown",
        "hair_color": "none",
        "skin_color": "white",
        "eye_color": "yellow",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/48\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/25\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T10:34:48.725000Z",
        "edited": "2014-12-20T21:17:50.437000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/57\/"
    },
    {
        "name": "Plo Koon",
        "height": "188",
        "mass": "80",
        "hair_color": "none",
        "skin_color": "orange",
        "eye_color": "black",
        "birth_year": "22BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/49\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/26\/"
        ],
        "vehicles": [],
        "starships": [
            "http:\/\/127.0.0.1:8000\/api\/starships\/48\/"
        ],
        "created": "2014-12-20T10:49:19.859000Z",
        "edited": "2014-12-20T21:17:50.439000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/58\/"
    },
    {
        "name": "Mas Amedda",
        "height": "196",
        "mass": "unknown",
        "hair_color": "none",
        "skin_color": "blue",
        "eye_color": "blue",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/50\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/4\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/27\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T10:53:26.457000Z",
        "edited": "2014-12-20T21:17:50.442000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/59\/"
    },
    {
        "name": "Gregar Typho",
        "height": "185",
        "mass": "85",
        "hair_color": "black",
        "skin_color": "dark",
        "eye_color": "brown",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/8\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "species": [],
        "vehicles": [],
        "starships": [
            "http:\/\/127.0.0.1:8000\/api\/starships\/39\/"
        ],
        "created": "2014-12-20T11:10:10.381000Z",
        "edited": "2014-12-20T21:17:50.445000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/60\/"
    },
    {
        "name": "Cordé",
        "height": "157",
        "mass": "unknown",
        "hair_color": "brown",
        "skin_color": "light",
        "eye_color": "brown",
        "birth_year": "unknown",
        "gender": "female",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/8\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "species": [],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T11:11:39.630000Z",
        "edited": "2014-12-20T21:17:50.449000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/61\/"
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
    },
    {
        "name": "Poggle the Lesser",
        "height": "183",
        "mass": "80",
        "hair_color": "none",
        "skin_color": "green",
        "eye_color": "yellow",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/11\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/28\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T16:40:43.977000Z",
        "edited": "2014-12-20T21:17:50.453000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/63\/"
    },
    {
        "name": "Luminara Unduli",
        "height": "170",
        "mass": "56.2",
        "hair_color": "black",
        "skin_color": "yellow",
        "eye_color": "blue",
        "birth_year": "58BBY",
        "gender": "female",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/51\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/29\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T16:45:53.668000Z",
        "edited": "2014-12-20T21:17:50.455000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/64\/"
    },
    {
        "name": "Barriss Offee",
        "height": "166",
        "mass": "50",
        "hair_color": "black",
        "skin_color": "yellow",
        "eye_color": "blue",
        "birth_year": "40BBY",
        "gender": "female",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/51\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/29\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T16:46:40.440000Z",
        "edited": "2014-12-20T21:17:50.457000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/65\/"
    },
    {
        "name": "Dormé",
        "height": "165",
        "mass": "unknown",
        "hair_color": "brown",
        "skin_color": "light",
        "eye_color": "brown",
        "birth_year": "unknown",
        "gender": "female",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/8\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/1\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T16:49:14.640000Z",
        "edited": "2014-12-20T21:17:50.460000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/66\/"
    },
    {
        "name": "Dooku",
        "height": "193",
        "mass": "80",
        "hair_color": "white",
        "skin_color": "fair",
        "eye_color": "brown",
        "birth_year": "102BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/52\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/1\/"
        ],
        "vehicles": [
            "http:\/\/127.0.0.1:8000\/api\/vehicles\/55\/"
        ],
        "starships": [],
        "created": "2014-12-20T16:52:14.726000Z",
        "edited": "2014-12-20T21:17:50.462000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/67\/"
    },
    {
        "name": "Bail Prestor Organa",
        "height": "191",
        "mass": "unknown",
        "hair_color": "black",
        "skin_color": "tan",
        "eye_color": "brown",
        "birth_year": "67BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/2\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/1\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T16:53:08.575000Z",
        "edited": "2014-12-20T21:17:50.463000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/68\/"
    },
    {
        "name": "Jango Fett",
        "height": "183",
        "mass": "79",
        "hair_color": "black",
        "skin_color": "tan",
        "eye_color": "brown",
        "birth_year": "66BBY",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/53\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "species": [],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T16:54:41.620000Z",
        "edited": "2014-12-20T21:17:50.465000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/69\/"
    },
    {
        "name": "Zam Wesell",
        "height": "168",
        "mass": "55",
        "hair_color": "blonde",
        "skin_color": "fair, green, yellow",
        "eye_color": "yellow",
        "birth_year": "unknown",
        "gender": "female",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/54\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/30\/"
        ],
        "vehicles": [
            "http:\/\/127.0.0.1:8000\/api\/vehicles\/45\/"
        ],
        "starships": [],
        "created": "2014-12-20T16:57:44.471000Z",
        "edited": "2014-12-20T21:17:50.468000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/70\/"
    },
    {
        "name": "Dexter Jettster",
        "height": "198",
        "mass": "102",
        "hair_color": "none",
        "skin_color": "brown",
        "eye_color": "yellow",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/55\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/31\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T17:28:27.248000Z",
        "edited": "2014-12-20T21:17:50.470000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/71\/"
    },
    {
        "name": "Lama Su",
        "height": "229",
        "mass": "88",
        "hair_color": "none",
        "skin_color": "grey",
        "eye_color": "black",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/10\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/32\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T17:30:50.416000Z",
        "edited": "2014-12-20T21:17:50.473000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/72\/"
    },
    {
        "name": "Taun We",
        "height": "213",
        "mass": "unknown",
        "hair_color": "none",
        "skin_color": "grey",
        "eye_color": "black",
        "birth_year": "unknown",
        "gender": "female",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/10\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/32\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T17:31:21.195000Z",
        "edited": "2014-12-20T21:17:50.474000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/73\/"
    },
    {
        "name": "Jocasta Nu",
        "height": "167",
        "mass": "unknown",
        "hair_color": "white",
        "skin_color": "fair",
        "eye_color": "blue",
        "birth_year": "unknown",
        "gender": "female",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/9\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/1\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T17:32:51.996000Z",
        "edited": "2014-12-20T21:17:50.476000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/74\/"
    },
    {
        "name": "R4-P17",
        "height": "96",
        "mass": "unknown",
        "hair_color": "none",
        "skin_color": "silver, red",
        "eye_color": "red, blue",
        "birth_year": "unknown",
        "gender": "female",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/28\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T17:43:36.409000Z",
        "edited": "2014-12-20T21:17:50.478000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/75\/"
    },
    {
        "name": "Wat Tambor",
        "height": "193",
        "mass": "48",
        "hair_color": "none",
        "skin_color": "green, grey",
        "eye_color": "unknown",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/56\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/33\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T17:53:52.607000Z",
        "edited": "2014-12-20T21:17:50.481000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/76\/"
    },
    {
        "name": "San Hill",
        "height": "191",
        "mass": "unknown",
        "hair_color": "none",
        "skin_color": "grey",
        "eye_color": "gold",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/57\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/34\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T17:58:17.049000Z",
        "edited": "2014-12-20T21:17:50.484000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/77\/"
    },
    {
        "name": "Shaak Ti",
        "height": "178",
        "mass": "57",
        "hair_color": "none",
        "skin_color": "red, blue, white",
        "eye_color": "black",
        "birth_year": "unknown",
        "gender": "female",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/58\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/35\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T18:44:01.103000Z",
        "edited": "2014-12-20T21:17:50.486000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/78\/"
    },
    {
        "name": "Grievous",
        "height": "216",
        "mass": "159",
        "hair_color": "none",
        "skin_color": "brown, white",
        "eye_color": "green, yellow",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/59\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/36\/"
        ],
        "vehicles": [
            "http:\/\/127.0.0.1:8000\/api\/vehicles\/60\/"
        ],
        "starships": [
            "http:\/\/127.0.0.1:8000\/api\/starships\/74\/"
        ],
        "created": "2014-12-20T19:43:53.348000Z",
        "edited": "2014-12-20T21:17:50.488000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/79\/"
    },
    {
        "name": "Tarfful",
        "height": "234",
        "mass": "136",
        "hair_color": "brown",
        "skin_color": "brown",
        "eye_color": "blue",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/14\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/3\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T19:46:34.209000Z",
        "edited": "2014-12-20T21:17:50.491000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/80\/"
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
    },
    {
        "name": "Sly Moore",
        "height": "178",
        "mass": "48",
        "hair_color": "none",
        "skin_color": "pale",
        "eye_color": "white",
        "birth_year": "unknown",
        "gender": "female",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/60\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/5\/",
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T20:18:37.619000Z",
        "edited": "2014-12-20T21:17:50.496000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/82\/"
    },
    {
        "name": "Tion Medon",
        "height": "206",
        "mass": "80",
        "hair_color": "none",
        "skin_color": "grey",
        "eye_color": "black",
        "birth_year": "unknown",
        "gender": "male",
        "homeworld": "http:\/\/127.0.0.1:8000\/api\/planets\/12\/",
        "films": [
            "http:\/\/127.0.0.1:8000\/api\/films\/6\/"
        ],
        "species": [
            "http:\/\/127.0.0.1:8000\/api\/species\/37\/"
        ],
        "vehicles": [],
        "starships": [],
        "created": "2014-12-20T20:35:04.260000Z",
        "edited": "2014-12-20T21:17:50.498000Z",
        "url": "http:\/\/127.0.0.1:8000\/api\/people\/83\/"
    }
]
```
<div id="execution-results-GETapi-people-advanced-search" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-people-advanced-search"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-people-advanced-search"></code></pre>
</div>
<div id="execution-error-GETapi-people-advanced-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-people-advanced-search"></code></pre>
</div>
<form id="form-GETapi-people-advanced-search" data-method="GET" data-path="api/people/advanced-search" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-people-advanced-search', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-people-advanced-search" onclick="tryItOut('GETapi-people-advanced-search');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-people-advanced-search" onclick="cancelTryOut('GETapi-people-advanced-search');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-people-advanced-search" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/people/advanced-search</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>attribute</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="attribute" data-endpoint="GETapi-people-advanced-search" data-component="query" required  hidden>
<br>
Attribute name of the given character resource used for condition check.
</p>
<p>
<b><code>operator</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="operator" data-endpoint="GETapi-people-advanced-search" data-component="query" required  hidden>
<br>
Operator used in the condition check between attribute and condition parameter.
</p>
<p>
<b><code>condition</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="condition" data-endpoint="GETapi-people-advanced-search" data-component="query" required  hidden>
<br>
Condition parameter used in the condition check against attribute.
</p>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="GETapi-people-advanced-search" data-component="query" required  hidden>
<br>
Type of the attribute and condition parameter.
</p>
</form>



