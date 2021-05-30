<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Documentation | SWAPI Client Typeqast</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;php&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
    <a href="{{ route('home') }}" style="display: block; padding: 10px 5px 0 !important;"><img src="{{ asset('img/logo.png') }}" alt="logo" class="logo" width="220px"/></a>
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="php">php</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: May 30 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>Example of an api client using Star Wars API. Added few more endpoints including more advanced search.</p>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://127.0.0.1:8000";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.7.6.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://127.0.0.1:8000</code></pre><h1>Authenticating requests</h1>
<p>This API is not authenticated.</p><h1>API</h1>
<h2>List all available resources</h2>
<p>The Root resource provides information on all available resources within the API.</p>
<h4 class="fancy-heading-panel"><b>Attributes</b></h4>
<p><small class="badge badge-purple">films</small> <i>string</i> -- The URL root for Films resources<br>
<small class="badge badge-purple">people</small> <i>string</i> -- The URL root for People resources<br>
<small class="badge badge-purple">planets</small> <i>string</i> -- The URL root for Planets resources<br>
<small class="badge badge-purple">species</small> <i>string</i> -- The URL root for Species resources<br>
<small class="badge badge-purple">starships</small> <i>string</i> -- The URL root for Starships resources<br>
<small class="badge badge-purple">vehicles</small> <i>string</i> -- The URL root for Vehicles resources</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "people": "http:\/\/127.0.0.1:8000\/api\/people\/",
    "planets": "http:\/\/127.0.0.1:8000\/api\/planets\/",
    "films": "http:\/\/127.0.0.1:8000\/api\/films\/",
    "species": "http:\/\/127.0.0.1:8000\/api\/species\/",
    "vehicles": "http:\/\/127.0.0.1:8000\/api\/vehicles\/",
    "starships": "http:\/\/127.0.0.1:8000\/api\/starships\/"
}</code></pre>
<div id="execution-results-GETapi" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi"></code></pre>
</div>
<div id="execution-error-GETapi" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi"></code></pre>
</div>
<form id="form-GETapi" data-method="GET" data-path="api" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi" onclick="tryItOut('GETapi');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi" onclick="cancelTryOut('GETapi');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api</code></b>
</p>
</form><h1>API\Characters</h1>
<h2>List all available characters (or search by term)</h2>
<p>A People resource is an individual person or character within the Star Wars universe.</p>
<h4 class="fancy-heading-panel"><b>Attributes</b></h4>
<p><small class="badge badge-purple">name</small> <i>string</i> -- The name of this person.<br>
<small class="badge badge-purple">birth_year</small> <i>string</i> -- The birth year of the person, using the in-universe standard of BBY or ABY - Before the Battle of Yavin or After the Battle of Yavin. The Battle of Yavin is a battle that occurs at the end of Star Wars episode IV: A New Hope.<br>
<small class="badge badge-purple">eye_color</small> <i>string</i> -- The eye color of this person. Will be &quot;unknown&quot; if not known or &quot;n/a&quot; if the person does not have an eye.<br>
<small class="badge badge-purple">gender</small> <i>string</i> -- The gender of this person. Either &quot;Male&quot;, &quot;Female&quot; or &quot;unknown&quot;, &quot;n/a&quot; if the person does not have a gender.<br>
<small class="badge badge-purple">hair_color</small> <i>string</i> -- The hair color of this person. Will be &quot;unknown&quot; if not known or &quot;n/a&quot; if the person does not have hair.<br>
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
<small class="badge badge-purple">edited</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was edited.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/people?search=Skywalker&amp;page=1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/people',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Skywalker',
            'page'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/people"
);

let params = {
    "search": "Skywalker",
    "page": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>List characters schema</h2>
<p>Schema allows you to see which attributes and their types are available for this resource.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/people/schema" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/people/schema',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/people/schema"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Retrieve a character</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/people/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/people/1',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/people/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>List all specified subresource data of a specific character</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/people/1/films" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/people/1/films',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/people/1/films"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Advanced search character resources</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/people/advanced-search?attribute=created&amp;operator=%3E&amp;condition=12%2F15%2F2014&amp;type=date" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/people/advanced-search',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'attribute'=&gt; 'created',
            'operator'=&gt; '&gt;',
            'condition'=&gt; '12/15/2014',
            'type'=&gt; 'date',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/people/advanced-search"
);

let params = {
    "attribute": "created",
    "operator": "&gt;",
    "condition": "12/15/2014",
    "type": "date",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
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
]</code></pre>
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
</form><h1>API\Films</h1>
<h2>List all available films (or search by term)</h2>
<p>A Film resource is a single film.</p>
<h4 class="fancy-heading-panel"><b>Attributes</b></h4>
<p><small class="badge badge-purple">title</small> <i>string</i> -- The title of this film.<br>
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
<small class="badge badge-purple">edited</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was edited.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/films?search=A+New+Hope&amp;page=1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/films',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'A New Hope',
            'page'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/films"
);

let params = {
    "search": "A New Hope",
    "page": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>List films schema</h2>
<p>Schema allows you to see which attributes and their types are available for this resource.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/films/schema" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/films/schema',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/films/schema"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Retrieve a film</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/films/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/films/1',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/films/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>List all specified subresource data of a specific film</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/films/1/characters" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/films/1/characters',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/films/1/characters"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Advanced search film resources</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/films/advanced-search?attribute=created&amp;operator=%3E&amp;condition=12%2F15%2F2014&amp;type=date" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/films/advanced-search',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'attribute'=&gt; 'created',
            'operator'=&gt; '&gt;',
            'condition'=&gt; '12/15/2014',
            'type'=&gt; 'date',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/films/advanced-search"
);

let params = {
    "attribute": "created",
    "operator": "&gt;",
    "condition": "12/15/2014",
    "type": "date",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
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
]</code></pre>
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
</form><h1>API\Planets</h1>
<h2>List all available planets (or search by term)</h2>
<p>A Planet resource is a large mass, planet or planetoid in the Star Wars Universe, at the time of 0 ABY.</p>
<h4 class="fancy-heading-panel"><b>Attributes</b></h4>
<p><small class="badge badge-purple">name</small> <i>string</i> -- The name of this planet.<br>
<small class="badge badge-purple">diameter</small> <i>string</i> -- The diameter of this planet in kilometers.<br>
<small class="badge badge-purple">rotation_period</small> <i>string</i> -- The number of standard hours it takes for this planet to complete a single rotation on its axis.<br>
<small class="badge badge-purple">orbital_period</small> <i>string</i> -- The number of standard days it takes for this planet to complete a single orbit of its local star.<br>
<small class="badge badge-purple">gravity</small> <i>string</i> -- A number denoting the gravity of this planet, where &quot;1&quot; is normal or 1 standard G. &quot;2&quot; is twice or 2 standard Gs. &quot;0.5&quot; is half or 0.5 standard Gs.<br>
<small class="badge badge-purple">population</small> <i>string</i> -- The average population of sentient beings inhabiting this planet.<br>
<small class="badge badge-purple">climate</small> <i>string</i> -- The climate of this planet. Comma separated if diverse.<br>
<small class="badge badge-purple">terrain</small> <i>string</i> -- The terrain of this planet. Comma separated if diverse.<br>
<small class="badge badge-purple">surface_water</small> <i>string</i> -- The percentage of the planet surface that is naturally occurring water or bodies of water.<br>
<small class="badge badge-purple">residents</small> <i>array</i> -- An array of People URL Resources that live on this planet.<br>
<small class="badge badge-purple">films</small> <i>array</i> -- An array of Film URL Resources that this planet has appeared in.<br>
<small class="badge badge-purple">url</small> <i>string</i> -- The hypermedia URL of this resource.<br>
<small class="badge badge-purple">created</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was created.<br>
<small class="badge badge-purple">edited</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was edited.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/planets?search=Tatooine&amp;page=1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/planets',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Tatooine',
            'page'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/planets"
);

let params = {
    "search": "Tatooine",
    "page": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>List planets schema</h2>
<p>Schema allows you to see which attributes and their types are available for this resource.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/planets/schema" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/planets/schema',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/planets/schema"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Retrieve a planet</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/planets/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/planets/1',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/planets/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>List all specified subresource data of a specific planet</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/planets/1/residents" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/planets/1/residents',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/planets/1/residents"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Advanced search planet resources</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/planets/advanced-search?attribute=diameter&amp;operator=%3C&amp;condition=11000&amp;type=number" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/planets/advanced-search',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'attribute'=&gt; 'diameter',
            'operator'=&gt; '&lt;',
            'condition'=&gt; '11000',
            'type'=&gt; 'number',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/planets/advanced-search"
);

let params = {
    "attribute": "diameter",
    "operator": "&lt;",
    "condition": "11000",
    "type": "number",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
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
]</code></pre>
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
<h2>Specific endpoint: List all planets created after 12/04/2014</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/planets/created-after-12042014" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/planets/created-after-12042014',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/planets/created-after-12042014"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
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
]</code></pre>
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
</form><h1>API\Species</h1>
<h2>List all available species (or search by term)</h2>
<p>A Species resource is a type of person or character within the Star Wars Universe.</p>
<h4 class="fancy-heading-panel"><b>Attributes</b></h4>
<p><small class="badge badge-purple">name</small> <i>string</i> -- The name of this species.<br>
<small class="badge badge-purple">classification</small> <i>string</i> -- The classification of this species, such as &quot;mammal&quot; or &quot;reptile&quot;.<br>
<small class="badge badge-purple">designation</small> <i>string</i> -- The designation of this species, such as &quot;sentient&quot;.<br>
<small class="badge badge-purple">average_height</small> <i>string</i> -- The average height of this species in centimeters.<br>
<small class="badge badge-purple">average_lifespan</small> <i>string</i> -- The average lifespan of this species in years.<br>
<small class="badge badge-purple">eye_colors</small> <i>string</i> -- A comma-separated string of common eye colors for this species, &quot;none&quot; if this species does not typically have eyes.<br>
<small class="badge badge-purple">hair_colors</small> <i>string</i> -- A comma-separated string of common hair colors for this species, &quot;none&quot; if this species does not typically have hair.<br>
<small class="badge badge-purple">skin_colors</small> <i>string</i> -- A comma-separated string of common skin colors for this species, &quot;none&quot; if this species does not typically have skin.<br>
<small class="badge badge-purple">language</small> <i>string</i> -- The language commonly spoken by this species.<br>
<small class="badge badge-purple">homeworld</small> <i>string</i> -- The URL of a planet resource, a planet that this species originates from.<br>
<small class="badge badge-purple">people</small> <i>array</i> -- An array of People URL Resources that are a part of this species.<br>
<small class="badge badge-purple">films</small> <i>array</i> -- An array of Film URL Resources that this species has appeared in.<br>
<small class="badge badge-purple">url</small> <i>string</i> -- The hypermedia URL of this resource.<br>
<small class="badge badge-purple">created</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was created.<br>
<small class="badge badge-purple">edited</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was edited.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/species?search=Wookie&amp;page=1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/species',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Wookie',
            'page'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/species"
);

let params = {
    "search": "Wookie",
    "page": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>List species schema</h2>
<p>Schema allows you to see which attributes and their types are available for this resource.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/species/schema" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/species/schema',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/species/schema"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Retrieve a specific species</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/species/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/species/1',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/species/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>List all specified subresource data of a specific species</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/species/1/films" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/species/1/films',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/species/1/films"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Advanced search species resources</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/species/advanced-search?attribute=classification&amp;operator=%3D&amp;condition=Mammal&amp;type=string" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/species/advanced-search',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'attribute'=&gt; 'classification',
            'operator'=&gt; '=',
            'condition'=&gt; 'Mammal',
            'type'=&gt; 'string',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/species/advanced-search"
);

let params = {
    "attribute": "classification",
    "operator": "=",
    "condition": "Mammal",
    "type": "string",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">
[]</code></pre>
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
</form><h1>API\Starships</h1>
<h2>List all available starships (or search by term)</h2>
<p>A Starship resource is a single transport craft that has hyperdrive capability.</p>
<h4 class="fancy-heading-panel"><b>Attributes</b></h4>
<p><small class="badge badge-purple">name</small> <i>string</i> -- The name of this starship. The common name, such as &quot;Death Star&quot;.<br>
<small class="badge badge-purple">model</small> <i>string</i> -- The model or official name of this starship. Such as &quot;T-65 X-wing&quot; or &quot;DS-1 Orbital Battle Station&quot;.<br>
<small class="badge badge-purple">starship_class</small> <i>string</i> -- The class of this starship, such as &quot;Starfighter&quot; or &quot;Deep Space Mobile Battlestation&quot;.<br>
<small class="badge badge-purple">manufacturer</small> <i>string</i> -- The manufacturer of this starship. Comma separated if more than one.<br>
<small class="badge badge-purple">cost_in_credits</small> <i>string</i> -- The cost of this starship new, in galactic credits.<br>
<small class="badge badge-purple">length</small> <i>string</i> -- The length of this starship in meters.<br>
<small class="badge badge-purple">crew</small> <i>string</i> -- The number of personnel needed to run or pilot this starship.<br>
<small class="badge badge-purple">passengers</small> <i>string</i> -- The number of non-essential people this starship can transport.<br>
<small class="badge badge-purple">max_atmosphering_speed</small> <i>string</i> -- The maximum speed of this starship in the atmosphere. &quot;N/A&quot; if this starship is incapable of atmospheric flight.<br>
<small class="badge badge-purple">hyperdrive_rating</small> <i>string</i>  string -- The class of this starships hyperdrive.<br>
<small class="badge badge-purple">MGLT</small> <i>string</i> -- The Maximum number of Megalights this starship can travel in a standard hour. A &quot;Megalight&quot; is a standard unit of distance and has never been defined before within the Star Wars universe. This figure is only really useful for measuring the difference in speed of starships. We can assume it is similar to AU, the distance between our Sun (Sol) and Earth.<br>
<small class="badge badge-purple">cargo_capacity</small> <i>string</i> -- The maximum number of kilograms that this starship can transport.<br>
<small class="badge badge-purple">consumables</small> <i>string</i> -- The maximum length of time that this starship can provide consumables for its entire crew without having to resupply.<br>
<small class="badge badge-purple">films</small> <i>array</i> -- An array of Film URL Resources that this starship has appeared in.<br>
<small class="badge badge-purple">pilots</small> <i>array</i> -- An array of People URL Resources that this starship has been piloted by.<br>
<small class="badge badge-purple">url</small> <i>string</i> -- The hypermedia URL of this resource.<br>
<small class="badge badge-purple">created</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was created.<br>
<small class="badge badge-purple">edited</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was edited.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/starships?search=Death+Star&amp;page=1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/starships',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Death Star',
            'page'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/starships"
);

let params = {
    "search": "Death Star",
    "page": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>List starships schema</h2>
<p>Schema allows you to see which attributes and their types are available for this resource.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/starships/schema" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/starships/schema',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/starships/schema"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Retrieve a starship</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/starships/9" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/starships/9',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/starships/9"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>List all specified subresource data of a specific starship</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/starships/9/films" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/starships/9/films',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/starships/9/films"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Advanced search starship resources</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/starships/advanced-search?attribute=length&amp;operator=%3E&amp;condition=10000&amp;type=number" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/starships/advanced-search',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'attribute'=&gt; 'length',
            'operator'=&gt; '&gt;',
            'condition'=&gt; '10000',
            'type'=&gt; 'number',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/starships/advanced-search"
);

let params = {
    "attribute": "length",
    "operator": "&gt;",
    "condition": "10000",
    "type": "number",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
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
]</code></pre>
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
<h2>Specific endpoint: List all starships that can have above 84000 passengers.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/starships/passengers-over-84000" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/starships/passengers-over-84000',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/starships/passengers-over-84000"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
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
]</code></pre>
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
</form><h1>API\Vehicles</h1>
<h2>List all available vehicles (or search by term)</h2>
<p>A Vehicle resource is a single transport craft that does not have hyperdrive capability.</p>
<h4 class="fancy-heading-panel"><b>Attributes</b></h4>
<p><small class="badge badge-purple">name</small> <i>string</i> -- The name of this vehicle. The common name, such as &quot;Sand Crawler&quot; or &quot;Speeder bike&quot;.<br>
<small class="badge badge-purple">model</small> <i>string</i> -- The model or official name of this vehicle. Such as &quot;All-Terrain Attack Transport&quot;.<br>
<small class="badge badge-purple">vehicle_class</small> <i>string</i> -- The class of this vehicle, such as &quot;Wheeled&quot; or &quot;Repulsorcraft&quot;.<br>
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
<small class="badge badge-purple">edited</small> <i>string</i> -- The ISO 8601 date format of the time that this resource was edited.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/vehicles?search=Sand+Crawler&amp;page=1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/vehicles',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'search'=&gt; 'Sand Crawler',
            'page'=&gt; '1',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/vehicles"
);

let params = {
    "search": "Sand Crawler",
    "page": "1",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>List vehicles schema</h2>
<p>Schema allows you to see which attributes and their types are available for this resource.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/vehicles/schema" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/vehicles/schema',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/vehicles/schema"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Retrieve a vehicle</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/vehicles/4" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/vehicles/4',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/vehicles/4"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>List all specified subresource data of a specific vehicle</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/vehicles/4/films" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/vehicles/4/films',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/vehicles/4/films"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
}</code></pre>
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
<h2>Advanced search vehicle resources</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://127.0.0.1:8000/api/vehicles/advanced-search?attribute=created&amp;operator=%3E&amp;condition=12%2F15%2F2014&amp;type=date" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://127.0.0.1:8000/api/vehicles/advanced-search',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
        'query' =&gt; [
            'attribute'=&gt; 'created',
            'operator'=&gt; '&gt;',
            'condition'=&gt; '12/15/2014',
            'type'=&gt; 'date',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/vehicles/advanced-search"
);

let params = {
    "attribute": "created",
    "operator": "&gt;",
    "condition": "12/15/2014",
    "type": "date",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
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
]</code></pre>
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
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="php">php</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","php","javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>
