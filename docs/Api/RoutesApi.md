# SpectrumVoip\\\\NetSapiens\RoutesApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countRoutes()**](RoutesApi.md#countRoutes) | **GET** /routes/count | Count All Routes |
| [**deleteRoute()**](RoutesApi.md#deleteRoute) | **DELETE** /routes/frm/{forward_request_match} | Delete A Specific Route |
| [**getRoutes()**](RoutesApi.md#getRoutes) | **GET** /routes | Read Routes |
| [**routeconCountGet()**](RoutesApi.md#routeconCountGet) | **GET** /routecon/count | Count All Route Connections |
| [**routeconGet()**](RoutesApi.md#routeconGet) | **GET** /routecon | Read Route Connections |
| [**routeconPost()**](RoutesApi.md#routeconPost) | **POST** /routecon | Create a Route Connection |
| [**routeconPut()**](RoutesApi.md#routeconPut) | **PUT** /routecon/ | Update A Specific Route Connection |
| [**routesPost()**](RoutesApi.md#routesPost) | **POST** /routes | Create a Route |
| [**routesPut()**](RoutesApi.md#routesPut) | **PUT** /routes | Update A Specific Route |


## `countRoutes()`

```php
countRoutes($forward_request_matchrule): \SpectrumVoip\\\\NetSapiens\Model\GetRoutes200ResponseInner[]
```

Count All Routes



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$forward_request_matchrule = ; // string | 

try {
    $result = $apiInstance->countRoutes($forward_request_matchrule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->countRoutes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **forward_request_matchrule** | **string**|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\GetRoutes200ResponseInner[]**](../Model/GetRoutes200ResponseInner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRoute()`

```php
deleteRoute($forward_request_match, $match_from, $hostname, $class): object
```

Delete A Specific Route



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$forward_request_match = 'forward_request_match_example'; // string | 
$match_from = ; // string | 
$hostname = ; // string | 
$class = ; // string | 

try {
    $result = $apiInstance->deleteRoute($forward_request_match, $match_from, $hostname, $class);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->deleteRoute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **forward_request_match** | **string**|  | |
| **match_from** | **string**|  | [optional] |
| **hostname** | **string**|  | [optional] |
| **class** | **string**|  | [optional] |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoutes()`

```php
getRoutes($forward_request_matchrule, $match_from, $class, $hostname, $start, $limit, $sort): \SpectrumVoip\\\\NetSapiens\Model\GetRoutes200ResponseInner[]
```

Read Routes



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$forward_request_matchrule = ; // string | 
$match_from = ; // string | 
$class = ; // string | 
$hostname = ; // string | 
$start = ; // string | 
$limit = ; // string | 
$sort = ; // string | 

try {
    $result = $apiInstance->getRoutes($forward_request_matchrule, $match_from, $class, $hostname, $start, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->getRoutes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **forward_request_matchrule** | **string**|  | [optional] |
| **match_from** | **string**|  | [optional] |
| **class** | **string**|  | [optional] |
| **hostname** | **string**|  | [optional] |
| **start** | **string**|  | [optional] |
| **limit** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\GetRoutes200ResponseInner[]**](../Model/GetRoutes200ResponseInner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `routeconCountGet()`

```php
routeconCountGet($match_to): \SpectrumVoip\\\\NetSapiens\Model\RouteconGet200ResponseInner[]
```

Count All Route Connections



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_to = ; // string | 

try {
    $result = $apiInstance->routeconCountGet($match_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->routeconCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **match_to** | **string**|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\RouteconGet200ResponseInner[]**](../Model/RouteconGet200ResponseInner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `routeconGet()`

```php
routeconGet($match_to, $match_from, $class, $hostname, $start, $limit, $sort): \SpectrumVoip\\\\NetSapiens\Model\RouteconGet200ResponseInner[]
```

Read Route Connections



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$match_to = ; // string | 
$match_from = ; // string | 
$class = ; // string | 
$hostname = ; // string | 
$start = ; // string | 
$limit = ; // string | 
$sort = ; // string | 

try {
    $result = $apiInstance->routeconGet($match_to, $match_from, $class, $hostname, $start, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->routeconGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **match_to** | **string**|  | |
| **match_from** | **string**|  | [optional] |
| **class** | **string**|  | [optional] |
| **hostname** | **string**|  | [optional] |
| **start** | **string**|  | [optional] |
| **limit** | **string**|  | [optional] |
| **sort** | **string**|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\RouteconGet200ResponseInner[]**](../Model/RouteconGet200ResponseInner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `routeconPost()`

```php
routeconPost($routecon_post_request): object
```

Create a Route Connection



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$routecon_post_request = new \SpectrumVoip\\\\NetSapiens\Model\RouteconPostRequest(); // \SpectrumVoip\\\\NetSapiens\Model\RouteconPostRequest

try {
    $result = $apiInstance->routeconPost($routecon_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->routeconPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **routecon_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\RouteconPostRequest**](../Model/RouteconPostRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `routeconPut()`

```php
routeconPut($routecon_put_request): object
```

Update A Specific Route Connection



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$routecon_put_request = {"template":"welcome_email.php","subject":"New Account Setup"}; // \SpectrumVoip\\\\NetSapiens\Model\RouteconPutRequest

try {
    $result = $apiInstance->routeconPut($routecon_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->routeconPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **routecon_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\RouteconPutRequest**](../Model/RouteconPutRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `routesPost()`

```php
routesPost($routes_post_request): object
```

Create a Route



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$routes_post_request = new \SpectrumVoip\\\\NetSapiens\Model\RoutesPostRequest(); // \SpectrumVoip\\\\NetSapiens\Model\RoutesPostRequest

try {
    $result = $apiInstance->routesPost($routes_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->routesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **routes_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\RoutesPostRequest**](../Model/RoutesPostRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `routesPut()`

```php
routesPut($routes_put_request): object
```

Update A Specific Route



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\RoutesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$routes_put_request = {"template":"welcome_email.php","subject":"New Account Setup"}; // \SpectrumVoip\\\\NetSapiens\Model\RoutesPutRequest

try {
    $result = $apiInstance->routesPut($routes_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutesApi->routesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **routes_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\RoutesPutRequest**](../Model/RoutesPutRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
