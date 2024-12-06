# SpectrumVoip\\\\NetSapiens\AuthenticationAccessTokenOauthUsernamePasswordApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**tokens1Post()**](AuthenticationAccessTokenOauthUsernamePasswordApi.md#tokens1Post) | **POST** /tokens#1 | Get Access Token From Refresh |
| [**tokens2Post()**](AuthenticationAccessTokenOauthUsernamePasswordApi.md#tokens2Post) | **POST** /tokens#2 | Get Access Token after MFA request |
| [**tokensPost()**](AuthenticationAccessTokenOauthUsernamePasswordApi.md#tokensPost) | **POST** /tokens | Get Access Token From User/Pass |


## `tokens1Post()`

```php
tokens1Post($tokens1_post_request): object
```

Get Access Token From Refresh

> Note: # and anything after is NOT needed, its just to allow multiple examples for the same path/method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AuthenticationAccessTokenOauthUsernamePasswordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tokens1_post_request = {"grant_type":"refresh_token","client_id":"{{client_id}}","client_secret":"{{client_secret}}","refresh_token":"{{refresh_token}}"}; // \SpectrumVoip\\\\NetSapiens\Model\Tokens1PostRequest

try {
    $result = $apiInstance->tokens1Post($tokens1_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationAccessTokenOauthUsernamePasswordApi->tokens1Post: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tokens1_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\Tokens1PostRequest**](../Model/Tokens1PostRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokens2Post()`

```php
tokens2Post($auth_request_mfa): \SpectrumVoip\\\\NetSapiens\Model\AccessToken
```

Get Access Token after MFA request

This API will accept username and password along with a passcode generated via a authenticator application and generate a Access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AuthenticationAccessTokenOauthUsernamePasswordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_request_mfa = {"grant_type":"mfa","client_id":"{{client_id}}","client_secret":"{{client_secret}}","username":"{{user_login}}","password":"{{user_password}}","mfa_vendor":"google","mfa_type":"authenticator","passcode":"110124","ns_id_type":"subscriber","access_token":"2711618e692064e183e9596a26e8eb10"}; // \SpectrumVoip\\\\NetSapiens\Model\AuthRequestMFA

try {
    $result = $apiInstance->tokens2Post($auth_request_mfa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationAccessTokenOauthUsernamePasswordApi->tokens2Post: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_request_mfa** | [**\SpectrumVoip\\\\NetSapiens\Model\AuthRequestMFA**](../Model/AuthRequestMFA.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokensPost()`

```php
tokensPost($auth_request): \SpectrumVoip\\\\NetSapiens\Model\AccessToken
```

Get Access Token From User/Pass



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AuthenticationAccessTokenOauthUsernamePasswordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$auth_request = {"grant_type":"password","client_id":"{{client_id}}","client_secret":"{{client_secret}}","username":"{{sub_login}}","password":"{{user_password}}"}; // \SpectrumVoip\\\\NetSapiens\Model\AuthRequest

try {
    $result = $apiInstance->tokensPost($auth_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationAccessTokenOauthUsernamePasswordApi->tokensPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **auth_request** | [**\SpectrumVoip\\\\NetSapiens\Model\AuthRequest**](../Model/AuthRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
