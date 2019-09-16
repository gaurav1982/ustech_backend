---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_22294a831446a8007bc3c28ea6577664 -->
## Get List of Teams or Single team

[Insert optional longer description of the API endpoint here.]

> Example request:

```bash
curl -X GET -G "/api/team[/1]" 
```

```javascript
const url = new URL("/api/team[/1]");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "Invalid URI"
}
```

### HTTP Request
`GET /api/team[/{id}]`


<!-- END_22294a831446a8007bc3c28ea6577664 -->

<!-- START_4b68fa1353ac5356e1c44064ded8719b -->
## /api/player[/{id}]
> Example request:

```bash
curl -X GET -G "/api/player[/1]" 
```

```javascript
const url = new URL("/api/player[/1]");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "Invalid URI"
}
```

### HTTP Request
`GET /api/player[/{id}]`


<!-- END_4b68fa1353ac5356e1c44064ded8719b -->

<!-- START_054b70662f264c4777a6720041c4858d -->
## /api/player/{id}/history
> Example request:

```bash
curl -X GET -G "/api/player/1/history" 
```

```javascript
const url = new URL("/api/player/1/history");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "team_id": 1,
        "f_name": "gaurav",
        "l_name": "jain",
        "imageuri": "abc",
        "jersey_number": "1",
        "country": "India",
        "created_at": null,
        "updated_at": null,
        "get_team": {
            "id": 1,
            "name": "India",
            "logo": "test",
            "club": "Bigboss",
            "created_at": null,
            "updated_at": null
        },
        "player_Summary": {
            "total_match": 2,
            "total_run": "68",
            "total_six": "4"
        }
    }
]
```

### HTTP Request
`GET /api/player/{id}/history`


<!-- END_054b70662f264c4777a6720041c4858d -->

<!-- START_4f03c2d002e5e8e4b9cf61242a699a22 -->
## /api/match[/{id}]
> Example request:

```bash
curl -X GET -G "/api/match[/1]" 
```

```javascript
const url = new URL("/api/match[/1]");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "message": "Invalid URI"
}
```

### HTTP Request
`GET /api/match[/{id}]`


<!-- END_4f03c2d002e5e8e4b9cf61242a699a22 -->

<!-- START_c0ca48ec1e977a764ab44e0157ad0c9b -->
## /api/team/{id}/match
> Example request:

```bash
curl -X GET -G "/api/team/1/match" 
```

```javascript
const url = new URL("/api/team/1/match");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 1,
        "team1_name": "India",
        "team1_logo": "test",
        "team2_name": "Australia",
        "team2_logo": "aust",
        "schedule_time": "2019-09-16 18:30:00",
        "result": 0
    },
    {
        "id": 2,
        "team1_name": "India",
        "team1_logo": "test",
        "team2_name": "Australia",
        "team2_logo": "aust",
        "schedule_time": "2019-09-14 19:17:14",
        "result": 1
    },
    {
        "id": 3,
        "team1_name": "SouthAfrica",
        "team1_logo": "testAfrica",
        "team2_name": "India",
        "team2_logo": "test",
        "schedule_time": "2019-09-24 18:30:00",
        "result": 0
    }
]
```

### HTTP Request
`GET /api/team/{id}/match`


<!-- END_c0ca48ec1e977a764ab44e0157ad0c9b -->


