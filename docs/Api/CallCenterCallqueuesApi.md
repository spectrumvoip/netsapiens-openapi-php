# SpectrumVoip\\\\NetSapiens\CallCenterCallqueuesApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCallqueue()**](CallCenterCallqueuesApi.md#createCallqueue) | **POST** /domains/{domain}/callqueues | Create Call Queue in Domain |
| [**deleteCallqueue()**](CallCenterCallqueuesApi.md#deleteCallqueue) | **DELETE** /domains/{domain}/callqueues/{callqueue} | Delete Call Queue |
| [**readCallqueue()**](CallCenterCallqueuesApi.md#readCallqueue) | **GET** /domains/{domain}/callqueues/{callqueue} | Read Specific Call Queue |
| [**readCallqueues()**](CallCenterCallqueuesApi.md#readCallqueues) | **GET** /domains/{domain}/callqueues | Read Call Queues in Domain |
| [**updateCallqueue()**](CallCenterCallqueuesApi.md#updateCallqueue) | **PUT** /domains/{domain}/callqueues/{callqueue} | Update Call Queue in Domain |


## `createCallqueue()`

```php
createCallqueue($domain, $create_callqueue_request): \SpectrumVoip\\\\NetSapiens\Model\CallQueue[]
```

Create Call Queue in Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallCenterCallqueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$create_callqueue_request = {"callqueue":"2032","description":"Sales Queue","callqueue-dispatch-type":"RingAll","callqueue-debug":"yes","callqueue-calculate-statistics":"yes","callqueue-source-match":"<Queue>","callqueue-force-full-intro-playback":"yes","callqueue-max-callback-queueing-hours":"2"}; // \SpectrumVoip\\\\NetSapiens\Model\CreateCallqueueRequest

try {
    $result = $apiInstance->createCallqueue($domain, $create_callqueue_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallCenterCallqueuesApi->createCallqueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **create_callqueue_request** | [**\SpectrumVoip\\\\NetSapiens\Model\CreateCallqueueRequest**](../Model/CreateCallqueueRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\CallQueue[]**](../Model/CallQueue.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCallqueue()`

```php
deleteCallqueue($domain, $callqueue): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Delete Call Queue



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallCenterCallqueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$callqueue = ; // string | 

try {
    $result = $apiInstance->deleteCallqueue($domain, $callqueue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallCenterCallqueuesApi->deleteCallqueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **callqueue** | **string**|  | |

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

## `readCallqueue()`

```php
readCallqueue($domain, $callqueue): \SpectrumVoip\\\\NetSapiens\Model\CallQueue
```

Read Specific Call Queue



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallCenterCallqueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$callqueue = ; // string | 

try {
    $result = $apiInstance->readCallqueue($domain, $callqueue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallCenterCallqueuesApi->readCallqueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **callqueue** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\CallQueue**](../Model/CallQueue.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readCallqueues()`

```php
readCallqueues($domain): \SpectrumVoip\\\\NetSapiens\Model\CallQueue[]
```

Read Call Queues in Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallCenterCallqueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 

try {
    $result = $apiInstance->readCallqueues($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallCenterCallqueuesApi->readCallqueues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\CallQueue[]**](../Model/CallQueue.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCallqueue()`

```php
updateCallqueue($domain, $callqueue, $update_callqueue_request): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Update Call Queue in Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallCenterCallqueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$callqueue = ; // string | 
$update_callqueue_request = {"queue_name":"6005","domain":"{{domain}}","description":"My Call queue (updated)","huntgroup_option":"RingAll","run_stats":"no"}; // \SpectrumVoip\\\\NetSapiens\Model\UpdateCallqueueRequest

try {
    $result = $apiInstance->updateCallqueue($domain, $callqueue, $update_callqueue_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallCenterCallqueuesApi->updateCallqueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **callqueue** | **string**|  | |
| **update_callqueue_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateCallqueueRequest**](../Model/UpdateCallqueueRequest.md)|  | [optional] |

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
