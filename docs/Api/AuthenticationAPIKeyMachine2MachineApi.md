# SpectrumVoip\\\\NetSapiens\AuthenticationAPIKeyMachine2MachineApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createApikey()**](AuthenticationAPIKeyMachine2MachineApi.md#createApikey) | **POST** /apikeys | Create API Key |
| [**readApikey()**](AuthenticationAPIKeyMachine2MachineApi.md#readApikey) | **GET** /apikeys/{key_id} | Read Info on specific APIKey via Key ID |
| [**readApikeys()**](AuthenticationAPIKeyMachine2MachineApi.md#readApikeys) | **GET** /apikeys#1 | Read API Keys under your account |
| [**readMyApikey()**](AuthenticationAPIKeyMachine2MachineApi.md#readMyApikey) | **GET** /apikeys/~ | Read API Key info on your API Key |
| [**revokeApikey()**](AuthenticationAPIKeyMachine2MachineApi.md#revokeApikey) | **DELETE** /apikeys/{key_id} | Revoke API Key |
| [**updateApikey()**](AuthenticationAPIKeyMachine2MachineApi.md#updateApikey) | **PUT** /apikeys/{key_id} | Update API Key |


## `createApikey()`

```php
createApikey($create_apikey_request): \SpectrumVoip\\\\NetSapiens\Model\CreateApikey200Response
```

Create API Key

This is a limited action and will require special access to create API keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AuthenticationAPIKeyMachine2MachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_apikey_request = {"description":"Myomp ApiKey 2","domain":"apidog.ApiReseller","reseller":"ApiReseller","readonly":"no","ip-address":"10.211.55.0/24,127.0.0.1","user-scope":"Office Manager","can-create-keys":"no"}; // \SpectrumVoip\\\\NetSapiens\Model\CreateApikeyRequest

try {
    $result = $apiInstance->createApikey($create_apikey_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationAPIKeyMachine2MachineApi->createApikey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_apikey_request** | [**\SpectrumVoip\\\\NetSapiens\Model\CreateApikeyRequest**](../Model/CreateApikeyRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\CreateApikey200Response**](../Model/CreateApikey200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readApikey()`

```php
readApikey($key_id): \SpectrumVoip\\\\NetSapiens\Model\ReadApikeys200ResponseInner[]
```

Read Info on specific APIKey via Key ID

This action will show apikeys that have been generated by your current APIkey and that you have access to update or revoke as needed.   > Note: # and anything after is NOT needed, its just to allow multiple examples for the same path/method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AuthenticationAPIKeyMachine2MachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = nsr_XDS9kzKV; // string | 

try {
    $result = $apiInstance->readApikey($key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationAPIKeyMachine2MachineApi->readApikey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_id** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\ReadApikeys200ResponseInner[]**](../Model/ReadApikeys200ResponseInner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readApikeys()`

```php
readApikeys(): \SpectrumVoip\\\\NetSapiens\Model\ReadApikeys200ResponseInner[]
```

Read API Keys under your account

This action will show apikeys that have been generated by your current APIkey and that you have access to update or revoke as needed.   > Note: # and anything after is NOT needed, its just to allow multiple examples for the same path/method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AuthenticationAPIKeyMachine2MachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->readApikeys();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationAPIKeyMachine2MachineApi->readApikeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\ReadApikeys200ResponseInner[]**](../Model/ReadApikeys200ResponseInner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readMyApikey()`

```php
readMyApikey(): \SpectrumVoip\\\\NetSapiens\Model\ApiKey
```

Read API Key info on your API Key

This parameter-less action will return the information on the API key being used for the request giving confirmation on access levels allowed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AuthenticationAPIKeyMachine2MachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->readMyApikey();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationAPIKeyMachine2MachineApi->readMyApikey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\ApiKey**](../Model/ApiKey.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeApikey()`

```php
revokeApikey($key_id): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Revoke API Key

This is a limited action and will require special access to revoke API keys. Revoking the apikey will remove the key from the DB and any Cache stoping access immediately.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AuthenticationAPIKeyMachine2MachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = nsr_hTd6kA9I; // string | 

try {
    $result = $apiInstance->revokeApikey($key_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationAPIKeyMachine2MachineApi->revokeApikey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_id** | **string**|  | |

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

## `updateApikey()`

```php
updateApikey($key_id, $update_apikey_request): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Update API Key

This is a limited action and will require special access to create API keys. The Update is even more limited only allowing the change of the description and IP restrictions. You will not be able to change the scope, access rights or any premissions. A new apikey would need to be created in those cases.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AuthenticationAPIKeyMachine2MachineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_id = nss_gPGEUWBI; // string | 
$update_apikey_request = {"description":"my OMP test (updated2)","ip-address":"10.211.55.0/24,127.0.0.1"}; // \SpectrumVoip\\\\NetSapiens\Model\UpdateApikeyRequest

try {
    $result = $apiInstance->updateApikey($key_id, $update_apikey_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationAPIKeyMachine2MachineApi->updateApikey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key_id** | **string**|  | |
| **update_apikey_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateApikeyRequest**](../Model/UpdateApikeyRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
