# SpectrumVoip\\\\NetSapiens\AuthenticationJWTJSONWebTokenApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**jwt1Post()**](AuthenticationJWTJSONWebTokenApi.md#jwt1Post) | **POST** /jwt#1 | Create JWT token For Delegated  Access |
| [**jwt2Post()**](AuthenticationJWTJSONWebTokenApi.md#jwt2Post) | **POST** /jwt#2 | Create JWT token after MFA request |
| [**jwtGet()**](AuthenticationJWTJSONWebTokenApi.md#jwtGet) | **GET** /jwt | Read Current JWT |
| [**jwtPost()**](AuthenticationJWTJSONWebTokenApi.md#jwtPost) | **POST** /jwt | Create JWT token From User/Pass |
| [**revokeJWTbyJti()**](AuthenticationJWTJSONWebTokenApi.md#revokeJWTbyJti) | **DELETE** /jwt/{jti}#1 | Revoke JWT by JTI (JWT ID) |
| [**revokeJWTbyUid()**](AuthenticationJWTJSONWebTokenApi.md#revokeJWTbyUid) | **DELETE** /jwt/{uid} | Revoke JWT(s) by UID (user@domain) |
| [**revokeMyJWT()**](AuthenticationJWTJSONWebTokenApi.md#revokeMyJWT) | **DELETE** /jwt | Revoke current JWT |


## `jwt1Post()`

```php
jwt1Post($deletegate_request): \SpectrumVoip\\\\NetSapiens\Model\JwtRequestSuccess
```

Create JWT token For Delegated  Access

This API will require valid access through APIKey and allows for generation of a JWT for a different user.   > Note: # and anything after is NOT needed, its just to allow multiple examples for the same path/method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AuthenticationJWTJSONWebTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$deletegate_request = {"user":"{{user}}","domain":"{{domain}}"}; // \SpectrumVoip\\\\NetSapiens\Model\DeletegateRequest

try {
    $result = $apiInstance->jwt1Post($deletegate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationJWTJSONWebTokenApi->jwt1Post: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deletegate_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DeletegateRequest**](../Model/DeletegateRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\JwtRequestSuccess**](../Model/JwtRequestSuccess.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jwt2Post()`

```php
jwt2Post($auth_request_mfa): \SpectrumVoip\\\\NetSapiens\Model\JwtRequestSuccess
```

Create JWT token after MFA request

This API will accept username and password along with a passcode generated via a authenticator application and generate a JWT token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AuthenticationJWTJSONWebTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_request_mfa = {"grant_type":"mfa","client_id":"{{client_id}}","client_secret":"{{client_secret}}","username":"{{user_login}}","password":"{{user_password}}","mfa_vendor":"google","mfa_type":"authenticator","passcode":"371706","ns_id_type":"subscriber","access_token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJucyIsImV4cCI6MTY5OTY4MTA3OSwiaWF0IjoxNjk5NTk0Njc5LCJpc3MiOiJ2Yi5uZXRzYXBpZW5zLmNvbSIsImp0aSI6Ijc2ZTUzOTk5YWM3MmE2ZDVhMTIxZWI2NWZjNDRkZjI1NDFiMGVjOGUiLCJzdWIiOiIxMDAyQHBvcnRhbCIsInRpbWVfb3V0Ijo4NjQwMDAwMCwiZG9tYWluIjoicG9ydGFsIiwidGVycml0b3J5IjoiTmV0U2FwaWVuczIiLCJ1c2VyIjoiMTAwMiIsInVzZXJfZW1haWwiOiJjYWFrZXJAbmV0c2FwaWVucy5jb20iLCJ1c2VyX3Njb3BlIjoibWZhX3JlcXVpcmVkIiwiZGlzcGxheU5hbWUiOiJpbXBvcnQgdGVzdCIsImRlcGFydG1lbnQiOiJTdXBwb3J0IiwibG9naW4iOiIxMDAyQHBvcnRhbCIsIm1mYV92ZW5kb3IiOiJnb29nbGUiLCJtZmFfdHlwZSI6ImF1dGhlbnRpY2F0b3IifQ.78eDopXiLTQRZKwegu7WuFMQG-LMvZ2NcF8EDSxnNiI"}; // \SpectrumVoip\\\\NetSapiens\Model\AuthRequestMFA

try {
    $result = $apiInstance->jwt2Post($auth_request_mfa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationJWTJSONWebTokenApi->jwt2Post: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_request_mfa** | [**\SpectrumVoip\\\\NetSapiens\Model\AuthRequestMFA**](../Model/AuthRequestMFA.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\JwtRequestSuccess**](../Model/JwtRequestSuccess.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jwtGet()`

```php
jwtGet(): \SpectrumVoip\\\\NetSapiens\Model\JwtResponse
```

Read Current JWT



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AuthenticationJWTJSONWebTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->jwtGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationJWTJSONWebTokenApi->jwtGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\JwtResponse**](../Model/JwtResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `jwtPost()`

```php
jwtPost($auth_request): \SpectrumVoip\\\\NetSapiens\Model\JwtRequestSuccess
```

Create JWT token From User/Pass

This API will accept username and password and generate a JWT token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AuthenticationJWTJSONWebTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_request = {grant_type=password, client_id={{client_id}}, client_secret={{client_secret}}, username={{sub_login}}, password={{user_password}}}; // \SpectrumVoip\\\\NetSapiens\Model\AuthRequest

try {
    $result = $apiInstance->jwtPost($auth_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationJWTJSONWebTokenApi->jwtPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_request** | [**\SpectrumVoip\\\\NetSapiens\Model\AuthRequest**](../Model/AuthRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\JwtRequestSuccess**](../Model/JwtRequestSuccess.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeJWTbyJti()`

```php
revokeJWTbyJti($jti): object
```

Revoke JWT by JTI (JWT ID)

> Note: # and anything after is NOT needed, its just to allow multiple examples for the same path/method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AuthenticationJWTJSONWebTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jti = 109832ae46e3ec69b4d57e2398eafe8b034b312c; // string | 

try {
    $result = $apiInstance->revokeJWTbyJti($jti);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationJWTJSONWebTokenApi->revokeJWTbyJti: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **jti** | **string**|  | |

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

## `revokeJWTbyUid()`

```php
revokeJWTbyUid($uid): object
```

Revoke JWT(s) by UID (user@domain)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AuthenticationJWTJSONWebTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uid = 'uid_example'; // string | 

try {
    $result = $apiInstance->revokeJWTbyUid($uid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationJWTJSONWebTokenApi->revokeJWTbyUid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uid** | **string**|  | |

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

## `revokeMyJWT()`

```php
revokeMyJWT(): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Revoke current JWT

This API requires a valid JWT and will revoke it by JTI of the current Token. It will then prevent its use moving forward.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AuthenticationJWTJSONWebTokenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->revokeMyJWT();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationJWTJSONWebTokenApi->revokeMyJWT: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
