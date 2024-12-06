# SpectrumVoip\\\\NetSapiens\CallTracesCradleToGraveApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCallTrace()**](CallTracesCradleToGraveApi.md#getCallTrace) | **GET** /sipflow#2 | Get CSV of call trace For Call |
| [**getCradle2Grave()**](CallTracesCradleToGraveApi.md#getCradle2Grave) | **GET** /sipflow#1 | Get Cradle to Grave Info For Call |
| [**getSipFlow()**](CallTracesCradleToGraveApi.md#getSipFlow) | **GET** /sipflow | Get Call Trace (SIPFlow) For Call |


## `getCallTrace()`

```php
getCallTrace($servers, $type, $start_time, $end_time, $callids, $download): object
```

Get CSV of call trace For Call



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallTracesCradleToGraveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$servers = eng0-san.netsapiens.com; // string | 
$type = csv; // string | call_trace,cradle_to_grave,csv
$start_time = ; // string | 
$end_time = ; // string | 
$callids = ; // string | 
$download = ; // string | Set to yes to download the file instead of getting base64 data in JSON.

try {
    $result = $apiInstance->getCallTrace($servers, $type, $start_time, $end_time, $callids, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTracesCradleToGraveApi->getCallTrace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **servers** | **string**|  | |
| **type** | **string**| call_trace,cradle_to_grave,csv | |
| **start_time** | **string**|  | [optional] |
| **end_time** | **string**|  | [optional] |
| **callids** | **string**|  | [optional] |
| **download** | **string**| Set to yes to download the file instead of getting base64 data in JSON. | [optional] |

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

## `getCradle2Grave()`

```php
getCradle2Grave($servers, $type, $start_time, $end_time, $callids): object
```

Get Cradle to Grave Info For Call



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallTracesCradleToGraveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$servers = eng0-san.netsapiens.com; // string | 
$type = cradle_to_grave; // string | call_trace,cradle_to_grave,csv
$start_time = ; // string | 
$end_time = ; // string | 
$callids = ; // string | 

try {
    $result = $apiInstance->getCradle2Grave($servers, $type, $start_time, $end_time, $callids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTracesCradleToGraveApi->getCradle2Grave: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **servers** | **string**|  | |
| **type** | **string**| call_trace,cradle_to_grave,csv | |
| **start_time** | **string**|  | [optional] |
| **end_time** | **string**|  | [optional] |
| **callids** | **string**|  | [optional] |

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

## `getSipFlow()`

```php
getSipFlow($servers, $type, $start_time, $end_time, $callids, $download): object
```

Get Call Trace (SIPFlow) For Call



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallTracesCradleToGraveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$servers = eng0-san.netsapiens.com; // string | 
$type = call_trace; // string | call_trace,cradle_to_grave,csv
$start_time = ; // string | 
$end_time = ; // string | 
$callids = ; // string | 
$download = ; // string | Set to yes to download the file instead of getting base64 data in JSON.

try {
    $result = $apiInstance->getSipFlow($servers, $type, $start_time, $end_time, $callids, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallTracesCradleToGraveApi->getSipFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **servers** | **string**|  | |
| **type** | **string**| call_trace,cradle_to_grave,csv | |
| **start_time** | **string**|  | [optional] |
| **end_time** | **string**|  | [optional] |
| **callids** | **string**|  | [optional] |
| **download** | **string**| Set to yes to download the file instead of getting base64 data in JSON. | [optional] |

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
