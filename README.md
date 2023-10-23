# Laravel API Response Wrapper 
If you get tired of rewriting your JSON structure in every response, this package could be something you need.
I believe that rewriting every JSON structure manually could lead to inconsistent JSON structures and be hard to maintain.
If somehow we want to change the JSON response format, we have to change it in every location.
## What this package does? 
This package can help you simplify the way you create a JSON response by using its facade accessor like `ApiResponseWrapper::get("", $data)`, and the output will be something like:
```
HTTP OK 200
{
  "success": true,
  "message": "",
  "data": {...}
}
```
## Installation
```
composer require silverhand7/laravel-api-response-wrapper
```

## Available Response
ApiResponseWrapper::get(?string $message, $data)
  
