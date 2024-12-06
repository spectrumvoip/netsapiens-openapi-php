# SpectrumVoip\\\\NetSapiens\PhonesMacsSupportedModelsAndServersApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProvisionableServer()**](PhonesMacsSupportedModelsAndServersApi.md#getProvisionableServer) | **GET** /phones/servers/{server} | Read Provisionable Server Details |
| [**getProvisionableServers()**](PhonesMacsSupportedModelsAndServersApi.md#getProvisionableServers) | **GET** /phones/servers | Get list of Provisionable Server Profiles |
| [**getSpecificModel()**](PhonesMacsSupportedModelsAndServersApi.md#getSpecificModel) | **GET** /phones/models#2 | Get details of Specific Model |
| [**getSupportedModels()**](PhonesMacsSupportedModelsAndServersApi.md#getSupportedModels) | **GET** /phones/models | Get list of Supported/Provisionable Models |
| [**getSupportedModelsByVendor()**](PhonesMacsSupportedModelsAndServersApi.md#getSupportedModelsByVendor) | **GET** /phones/models#1 | Get list of Supported/Provisionable by Vendor |


## `getProvisionableServer()`

```php
getProvisionableServer($server): \SpectrumVoip\\\\NetSapiens\Model\NdpServer
```

Read Provisionable Server Details



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhonesMacsSupportedModelsAndServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$server = core1; // string | 

try {
    $result = $apiInstance->getProvisionableServer($server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesMacsSupportedModelsAndServersApi->getProvisionableServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **server** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\NdpServer**](../Model/NdpServer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProvisionableServers()`

```php
getProvisionableServers(): \SpectrumVoip\\\\NetSapiens\Model\NdpServer[]
```

Get list of Provisionable Server Profiles



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhonesMacsSupportedModelsAndServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getProvisionableServers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesMacsSupportedModelsAndServersApi->getProvisionableServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\NdpServer[]**](../Model/NdpServer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSpecificModel()`

```php
getSpecificModel($brand, $model): \SpectrumVoip\\\\NetSapiens\Model\NdpModel
```

Get details of Specific Model



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhonesMacsSupportedModelsAndServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand = Yealink; // string | 
$model = SIP-T42G; // string | 

try {
    $result = $apiInstance->getSpecificModel($brand, $model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesMacsSupportedModelsAndServersApi->getSpecificModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brand** | **string**|  | [optional] |
| **model** | **string**|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\NdpModel**](../Model/NdpModel.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupportedModels()`

```php
getSupportedModels(): \SpectrumVoip\\\\NetSapiens\Model\NdpModel[]
```

Get list of Supported/Provisionable Models



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhonesMacsSupportedModelsAndServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSupportedModels();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesMacsSupportedModelsAndServersApi->getSupportedModels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\NdpModel[]**](../Model/NdpModel.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSupportedModelsByVendor()`

```php
getSupportedModelsByVendor($brand): \SpectrumVoip\\\\NetSapiens\Model\NdpModel[]
```

Get list of Supported/Provisionable by Vendor



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhonesMacsSupportedModelsAndServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand = Yealink; // string | 

try {
    $result = $apiInstance->getSupportedModelsByVendor($brand);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesMacsSupportedModelsAndServersApi->getSupportedModelsByVendor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **brand** | **string**|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\NdpModel[]**](../Model/NdpModel.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
