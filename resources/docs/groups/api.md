# API


## List all available resources


The Root resource provides information on all available resources within the API.

<h4 class="fancy-heading-panel"><b>Attributes</b></h4>
<small class="badge badge-purple">films</small> <i>string</i> -- The URL root for Films resources<br>
<small class="badge badge-purple">people</small> <i>string</i> -- The URL root for People resources<br>
<small class="badge badge-purple">planets</small> <i>string</i> -- The URL root for Planets resources<br>
<small class="badge badge-purple">species</small> <i>string</i> -- The URL root for Species resources<br>
<small class="badge badge-purple">starships</small> <i>string</i> -- The URL root for Starships resources<br>
<small class="badge badge-purple">vehicles</small> <i>string</i> -- The URL root for Vehicles resources

> Example request:

```bash
curl -X GET \
    -G "http://127.0.0.1:8000/api" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://127.0.0.1:8000/api',
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
    "http://127.0.0.1:8000/api"
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
    "people": "http:\/\/127.0.0.1:8000\/api\/people\/",
    "planets": "http:\/\/127.0.0.1:8000\/api\/planets\/",
    "films": "http:\/\/127.0.0.1:8000\/api\/films\/",
    "species": "http:\/\/127.0.0.1:8000\/api\/species\/",
    "vehicles": "http:\/\/127.0.0.1:8000\/api\/vehicles\/",
    "starships": "http:\/\/127.0.0.1:8000\/api\/starships\/"
}
```
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
</form>



