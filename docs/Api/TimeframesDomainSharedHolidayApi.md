# SpectrumVoip\\\\NetSapiens\TimeframesDomainSharedHolidayApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainTimeframes3Post()**](TimeframesDomainSharedHolidayApi.md#domainsDomainTimeframes3Post) | **POST** /domains/{domain}/timeframes#3 | Create Holidays Timeframe |
| [**domainsDomainTimeframesId1Delete()**](TimeframesDomainSharedHolidayApi.md#domainsDomainTimeframesId1Delete) | **DELETE** /domains/{domain}/timeframes/{id}#1 | Delete Holiday within Holiday Timeframe |
| [**domainsDomainTimeframesId1Post()**](TimeframesDomainSharedHolidayApi.md#domainsDomainTimeframesId1Post) | **POST** /domains/{domain}/timeframes/{id}#1 | Create Additional Holidays within Holiday Timeframe |
| [**domainsDomainTimeframesId3Put()**](TimeframesDomainSharedHolidayApi.md#domainsDomainTimeframesId3Put) | **PUT** /domains/{domain}/timeframes/{id}#3 | Replace All Holidays in Holiday Timeframe |
| [**domainsDomainTimeframesId4Put()**](TimeframesDomainSharedHolidayApi.md#domainsDomainTimeframesId4Put) | **PUT** /domains/{domain}/timeframes/{id}#4 | Update Holidays within Holiday Timeframe |


## `domainsDomainTimeframes3Post()`

```php
domainsDomainTimeframes3Post($domain, $domains_domain_timeframes3_post_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframes3Post200Response
```

Create Holidays Timeframe

When creating a Holiday timeframe it is not necessary to supply a ```timeframe-id``` for the timeframe or for the holidays within that timeframe. These ```timeframe-id```s will be generated automatically.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesDomainSharedHolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$domains_domain_timeframes3_post_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframes3PostRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframes3PostRequest

try {
    $result = $apiInstance->domainsDomainTimeframes3Post($domain, $domains_domain_timeframes3_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesDomainSharedHolidayApi->domainsDomainTimeframes3Post: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_timeframes3_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframes3PostRequest**](../Model/DomainsDomainTimeframes3PostRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframes3Post200Response**](../Model/DomainsDomainTimeframes3Post200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainTimeframesId1Delete()`

```php
domainsDomainTimeframesId1Delete($domain, $id, $domains_domain_timeframes_id1_delete_request): object
```

Delete Holiday within Holiday Timeframe

In order to delete a holiday within a Holidays timeframe, supply the ```timeframe-id``` of the particular holiday to be deleted as the parameter ```child_id``` within the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesDomainSharedHolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$id = 'id_example'; // string | ```timeframe-id``` of the timeframe to modify
$domains_domain_timeframes_id1_delete_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId1DeleteRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId1DeleteRequest

try {
    $result = $apiInstance->domainsDomainTimeframesId1Delete($domain, $id, $domains_domain_timeframes_id1_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesDomainSharedHolidayApi->domainsDomainTimeframesId1Delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**| &#x60;&#x60;&#x60;timeframe-id&#x60;&#x60;&#x60; of the timeframe to modify | |
| **domains_domain_timeframes_id1_delete_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId1DeleteRequest**](../Model/DomainsDomainTimeframesId1DeleteRequest.md)|  | [optional] |

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

## `domainsDomainTimeframesId1Post()`

```php
domainsDomainTimeframesId1Post($domain, $id, $domains_domain_timeframes_id1_post_request): object
```

Create Additional Holidays within Holiday Timeframe

When creating additional holidays within a Holiday timeframe it is not necessary to supply a ```timeframe-id``` for the new holidays. These ```timeframe-id```s will be generated automatically.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesDomainSharedHolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$id = 'id_example'; // string | ```timeframe-id``` of the timeframe to modify
$domains_domain_timeframes_id1_post_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId1PostRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId1PostRequest

try {
    $result = $apiInstance->domainsDomainTimeframesId1Post($domain, $id, $domains_domain_timeframes_id1_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesDomainSharedHolidayApi->domainsDomainTimeframesId1Post: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**| &#x60;&#x60;&#x60;timeframe-id&#x60;&#x60;&#x60; of the timeframe to modify | |
| **domains_domain_timeframes_id1_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId1PostRequest**](../Model/DomainsDomainTimeframesId1PostRequest.md)|  | [optional] |

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

## `domainsDomainTimeframesId3Put()`

```php
domainsDomainTimeframesId3Put($domain, $id, $domains_domain_timeframes_id3_put_request): object
```

Replace All Holidays in Holiday Timeframe

If a new array of holiday objects is supplied in the update request for a Holidays timeframe, it will replace all existing holidays in the timeframe, meaning that any existing holidays in that timeframe will be removed. To update individual holidays within a Holiday timeframe, refer to \"Update Holidays within Holiday Timeframe.\" It is not necessary to supply a ```timeframe-id``` for the new holidays. These ```timeframe-id```s will be generated automatically.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesDomainSharedHolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$id = 'id_example'; // string | ```timeframe-id``` of the timeframe to modify
$domains_domain_timeframes_id3_put_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId3PutRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId3PutRequest

try {
    $result = $apiInstance->domainsDomainTimeframesId3Put($domain, $id, $domains_domain_timeframes_id3_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesDomainSharedHolidayApi->domainsDomainTimeframesId3Put: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**| &#x60;&#x60;&#x60;timeframe-id&#x60;&#x60;&#x60; of the timeframe to modify | |
| **domains_domain_timeframes_id3_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId3PutRequest**](../Model/DomainsDomainTimeframesId3PutRequest.md)|  | [optional] |

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

## `domainsDomainTimeframesId4Put()`

```php
domainsDomainTimeframesId4Put($domain, $id, $domains_domain_timeframes_id4_put_request): object
```

Update Holidays within Holiday Timeframe

In order to update holidays within a Holiday timeframe, include the parameter ```update_only``` and provide within the array ```timeframe-holiday-array``` the new values for the holidays you intend to update, including in each holiday object the associated ```timeframe-id``` for that holiday. If any holidays are missing the ```timeframe-id``` parameter, it may result in undesired behavior.  The value for ```update-only``` must be set to ```yes``` for this operation to succeed as desired. If any other value is supplied or the parameter ```update-only``` is omitted, it will result in the behavior described in \"Replace All Holidays in Holiday Timeframe\" - see examples for more information.  IMPORTANT: Updates to holidays are limited to workweek, observance configurations, time-of-day configurations, and recurrence. To add a different holiday, remove the existing holiday and then create the desired holiday.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesDomainSharedHolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$id = 'id_example'; // string | ```timeframe-id``` of the timeframe to modify
$domains_domain_timeframes_id4_put_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId4PutRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId4PutRequest

try {
    $result = $apiInstance->domainsDomainTimeframesId4Put($domain, $id, $domains_domain_timeframes_id4_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesDomainSharedHolidayApi->domainsDomainTimeframesId4Put: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**| &#x60;&#x60;&#x60;timeframe-id&#x60;&#x60;&#x60; of the timeframe to modify | |
| **domains_domain_timeframes_id4_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId4PutRequest**](../Model/DomainsDomainTimeframesId4PutRequest.md)|  | [optional] |

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
