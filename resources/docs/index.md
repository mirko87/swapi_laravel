---
title: API Documentation | SWAPI Client Typeqast

language_tabs:
- bash
- php
- javascript

includes:
- "./prepend.md"
- "./authentication.md"
- "./groups/*"
- "./errors.md"
- "./append.md"

logo: img/logo.png

toc_footers:
- <a href="./collection.json">View Postman collection</a>
- <a href="./openapi.yaml">View OpenAPI (Swagger) spec</a>
- <a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a>

---

# Introduction

Example of an api client using Star Wars API. Added few more endpoints including more advanced search.

This documentation aims to provide all the information you need to work with our API.

<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://127.0.0.1:8000";
</script>
<script src="js/tryitout-2.7.6.js"></script>

> Base URL

```yaml
http://127.0.0.1:8000
```