# SpectrumVoip\\\\NetSapiens\CallCenterQueuedCallsApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainQueuedcallQueueGet()**](CallCenterQueuedCallsApi.md#domainsDomainQueuedcallQueueGet) | **GET** /domains/{domain}/queuedcall/{queue} | Read Queued Calls |


## `domainsDomainQueuedcallQueueGet()`

```php
domainsDomainQueuedcallQueueGet($domain, $queue): object
```

Read Queued Calls



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallCenterQueuedCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | Domain containing Callqueue
$queue = 'queue_example'; // string | Callqueue from which to read queued calls

try {
    $result = $apiInstance->domainsDomainQueuedcallQueueGet($domain, $queue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallCenterQueuedCallsApi->domainsDomainQueuedcallQueueGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**| Domain containing Callqueue | [default to &#39;~&#39;] |
| **queue** | **string**| Callqueue from which to read queued calls | |

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
