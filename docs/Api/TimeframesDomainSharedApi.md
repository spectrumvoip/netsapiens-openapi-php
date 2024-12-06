# SpectrumVoip\\\\NetSapiens\TimeframesDomainSharedApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainTimeframesGet()**](TimeframesDomainSharedApi.md#domainsDomainTimeframesGet) | **GET** /domains/{domain}/timeframes | Read All Timeframes for Domain (Shared) |
| [**domainsDomainTimeframesId3Delete()**](TimeframesDomainSharedApi.md#domainsDomainTimeframesId3Delete) | **DELETE** /domains/{domain}/timeframes/{id}#3 | Delete Specific Timeframe for Domain (Shared) |
| [**domainsDomainTimeframesId7Put()**](TimeframesDomainSharedApi.md#domainsDomainTimeframesId7Put) | **PUT** /domains/{domain}/timeframes/{id}#7 | Convert Timeframe to Another Type |
| [**domainsDomainTimeframesIdGet()**](TimeframesDomainSharedApi.md#domainsDomainTimeframesIdGet) | **GET** /domains/{domain}/timeframes/{id} | Read Specific Timeframe for Domain (Shared) |


## `domainsDomainTimeframesGet()`

```php
domainsDomainTimeframesGet($domain): \SpectrumVoip\\\\NetSapiens\Model\RecurringTimeframe[]
```

Read All Timeframes for Domain (Shared)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesDomainSharedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 

try {
    $result = $apiInstance->domainsDomainTimeframesGet($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesDomainSharedApi->domainsDomainTimeframesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\RecurringTimeframe[]**](../Model/RecurringTimeframe.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainTimeframesId3Delete()`

```php
domainsDomainTimeframesId3Delete($domain, $id): object
```

Delete Specific Timeframe for Domain (Shared)

A timeframe can be deleted via its ID. Any answering rules will become invalid upon deleting their associated timeframe and will cease to function.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesDomainSharedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$id = 'id_example'; // string | ```timeframe-id``` of the timeframe to delete

try {
    $result = $apiInstance->domainsDomainTimeframesId3Delete($domain, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesDomainSharedApi->domainsDomainTimeframesId3Delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**| &#x60;&#x60;&#x60;timeframe-id&#x60;&#x60;&#x60; of the timeframe to delete | |

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

## `domainsDomainTimeframesId7Put()`

```php
domainsDomainTimeframesId7Put($domain, $id, $domains_domain_timeframes_id7_put_request): object
```

Convert Timeframe to Another Type

It is possible to convert a timeframe from one type to another, e.g. from Holiday to Specific Dates or from Days of Week to Custom.  It is not possible to convert a Custom timeframe to any other type.   Converting Specific Dates, Days of Week, or Holiday to Custom will result in a Custom timeframe which contains any entries which existed in the time frame before conversion.   Converting Always to Custom will result in an empty Custom timeframe to which desired entries can then be added.   Converting between any non-Custom types will result in losing those entries (for instance, converting Specific Dates to Days of Week will delete any date ranges in the timeframe)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesDomainSharedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$id = 'id_example'; // string | ```timeframe-id``` of the timeframe to convert the type of
$domains_domain_timeframes_id7_put_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId7PutRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId7PutRequest

try {
    $result = $apiInstance->domainsDomainTimeframesId7Put($domain, $id, $domains_domain_timeframes_id7_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesDomainSharedApi->domainsDomainTimeframesId7Put: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**| &#x60;&#x60;&#x60;timeframe-id&#x60;&#x60;&#x60; of the timeframe to convert the type of | |
| **domains_domain_timeframes_id7_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId7PutRequest**](../Model/DomainsDomainTimeframesId7PutRequest.md)|  | [optional] |

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

## `domainsDomainTimeframesIdGet()`

```php
domainsDomainTimeframesIdGet($domain, $id): object
```

Read Specific Timeframe for Domain (Shared)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesDomainSharedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$id = 'id_example'; // string | ```timeframe-id``` of the timeframe to read

try {
    $result = $apiInstance->domainsDomainTimeframesIdGet($domain, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesDomainSharedApi->domainsDomainTimeframesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**| &#x60;&#x60;&#x60;timeframe-id&#x60;&#x60;&#x60; of the timeframe to read | |

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
