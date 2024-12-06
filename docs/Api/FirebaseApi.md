# SpectrumVoip\\\\NetSapiens\FirebaseApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**firebaseGet()**](FirebaseApi.md#firebaseGet) | **GET** /firebase | Read firebase service accounts |
| [**firebasePost()**](FirebaseApi.md#firebasePost) | **POST** /firebase | Add firebase service account |


## `firebaseGet()`

```php
firebaseGet(): object
```

Read firebase service accounts



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\FirebaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->firebaseGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirebaseApi->firebaseGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `firebasePost()`

```php
firebasePost($firebase_post_request): object
```

Add firebase service account



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\FirebaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$firebase_post_request = new \SpectrumVoip\\\\NetSapiens\Model\FirebasePostRequest(); // \SpectrumVoip\\\\NetSapiens\Model\FirebasePostRequest

try {
    $result = $apiInstance->firebasePost($firebase_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FirebaseApi->firebasePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **firebase_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\FirebasePostRequest**](../Model/FirebasePostRequest.md)|  | [optional] |

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
