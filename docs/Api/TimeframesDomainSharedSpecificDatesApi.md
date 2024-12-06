# SpectrumVoip\\\\NetSapiens\TimeframesDomainSharedSpecificDatesApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainTimeframes1Post()**](TimeframesDomainSharedSpecificDatesApi.md#domainsDomainTimeframes1Post) | **POST** /domains/{domain}/timeframes#1 | Create Specific Dates Timeframe |
| [**domainsDomainTimeframesId1Put()**](TimeframesDomainSharedSpecificDatesApi.md#domainsDomainTimeframesId1Put) | **PUT** /domains/{domain}/timeframes/{id}#1 | Update Date Ranges within Specific Dates Timeframe |
| [**domainsDomainTimeframesIdDelete()**](TimeframesDomainSharedSpecificDatesApi.md#domainsDomainTimeframesIdDelete) | **DELETE** /domains/{domain}/timeframes/{id} | Delete Date Range within Specific Dates Timeframe |
| [**domainsDomainTimeframesIdPost()**](TimeframesDomainSharedSpecificDatesApi.md#domainsDomainTimeframesIdPost) | **POST** /domains/{domain}/timeframes/{id} | Create Additional Date Ranges within Specific Dates Timeframe |
| [**domainsDomainTimeframesIdPut()**](TimeframesDomainSharedSpecificDatesApi.md#domainsDomainTimeframesIdPut) | **PUT** /domains/{domain}/timeframes/{id} | Replace All Date Ranges in Specific Dates Timeframe |


## `domainsDomainTimeframes1Post()`

```php
domainsDomainTimeframes1Post($domain, $domains_domain_timeframes1_post_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframes1Post200Response
```

Create Specific Dates Timeframe

When creating a Specific Dates timeframe it is not necessary to supply a ```timeframe-id``` for the timeframe or for the date ranges within that timeframe. These ```timeframe-id```s will be generated automatically.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesDomainSharedSpecificDatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$domains_domain_timeframes1_post_request = {"timeframe-name":"specificDatesNoRecurrence","timeframe-type":"specific-dates","timeframe-specific-dates-array":[{"timeframe-specific-dates-begin-date":"20290101","timeframe-specific-dates-begin-time":"0000","timeframe-specific-dates-end-date":"20290102","timeframe-specific-dates-end-time":"2359","timeframe-recurrence-type":"doesNotRecur","timeframe-recurrence-custom-interval":"","timeframe-recurrence-custom-interval-count":"","timeframe-recurrence-custom-interval-option":"","timeframe-recurrence-end-option":"","timeframe-recurrence-end-date":""}]}; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframes1PostRequest

try {
    $result = $apiInstance->domainsDomainTimeframes1Post($domain, $domains_domain_timeframes1_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesDomainSharedSpecificDatesApi->domainsDomainTimeframes1Post: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_timeframes1_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframes1PostRequest**](../Model/DomainsDomainTimeframes1PostRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframes1Post200Response**](../Model/DomainsDomainTimeframes1Post200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainTimeframesId1Put()`

```php
domainsDomainTimeframesId1Put($domain, $id, $domains_domain_timeframes_id1_put_request): object
```

Update Date Ranges within Specific Dates Timeframe

In order to update date ranges within a Specific Dates timeframe, include the parameter ```update_only``` and provide within the array ```timeframe-specific-dates-array``` the new values for the date ranges you intend to update, including in each date range the associated ```timeframe-id``` for that range. If any date ranges are missing the ```timeframe-id``` parameter, it may result in undesired behavior.   The value for ```update-only``` must be set to ```yes``` for this operation to succeed as desired. If any other value is supplied or the parameter ```update-only``` is omitted, it will result in the behavior described in \"Replace All Date Ranges in Specific Dates Timeframe\" - see examples for more information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesDomainSharedSpecificDatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$id = 'id_example'; // string | ```timeframe-id``` of the timeframe to modify
$domains_domain_timeframes_id1_put_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId1PutRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId1PutRequest

try {
    $result = $apiInstance->domainsDomainTimeframesId1Put($domain, $id, $domains_domain_timeframes_id1_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesDomainSharedSpecificDatesApi->domainsDomainTimeframesId1Put: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**| &#x60;&#x60;&#x60;timeframe-id&#x60;&#x60;&#x60; of the timeframe to modify | |
| **domains_domain_timeframes_id1_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId1PutRequest**](../Model/DomainsDomainTimeframesId1PutRequest.md)|  | [optional] |

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

## `domainsDomainTimeframesIdDelete()`

```php
domainsDomainTimeframesIdDelete($domain, $id, $domains_domain_timeframes_id_delete_request): object
```

Delete Date Range within Specific Dates Timeframe

In order to delete a date range within a Specific Dates timeframe, supply the ```timeframe-id``` of the particular range to be deleted as the parameter ```child_id``` within the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesDomainSharedSpecificDatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$id = 'id_example'; // string | ```timeframe-id``` of the timeframe to modify
$domains_domain_timeframes_id_delete_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesIdDeleteRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesIdDeleteRequest

try {
    $result = $apiInstance->domainsDomainTimeframesIdDelete($domain, $id, $domains_domain_timeframes_id_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesDomainSharedSpecificDatesApi->domainsDomainTimeframesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**| &#x60;&#x60;&#x60;timeframe-id&#x60;&#x60;&#x60; of the timeframe to modify | |
| **domains_domain_timeframes_id_delete_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesIdDeleteRequest**](../Model/DomainsDomainTimeframesIdDeleteRequest.md)|  | [optional] |

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

## `domainsDomainTimeframesIdPost()`

```php
domainsDomainTimeframesIdPost($domain, $id, $domains_domain_timeframes_id_post_request): object
```

Create Additional Date Ranges within Specific Dates Timeframe

When creating additional date ranges within a Specific Dates timeframe it is not necessary to supply a ```timeframe-id``` for the new date ranges. These ```timeframe-id```s will be generated automatically.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesDomainSharedSpecificDatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$id = 'id_example'; // string | ```timeframe-id``` for the timeframe to modify
$domains_domain_timeframes_id_post_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesIdPostRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesIdPostRequest

try {
    $result = $apiInstance->domainsDomainTimeframesIdPost($domain, $id, $domains_domain_timeframes_id_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesDomainSharedSpecificDatesApi->domainsDomainTimeframesIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**| &#x60;&#x60;&#x60;timeframe-id&#x60;&#x60;&#x60; for the timeframe to modify | |
| **domains_domain_timeframes_id_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesIdPostRequest**](../Model/DomainsDomainTimeframesIdPostRequest.md)|  | [optional] |

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

## `domainsDomainTimeframesIdPut()`

```php
domainsDomainTimeframesIdPut($domain, $id, $domains_domain_timeframes_id_put_request): object
```

Replace All Date Ranges in Specific Dates Timeframe

If a new array of specific date ranges is supplied in the update request for a Specific Dates timeframe, it will replace all existing specific date ranges in the timeframe, meaning that any existing specific date ranges in that timeframe will be removed. To update individual specific date ranges within a Specific Dates timeframe, refer to \"Update Date Ranges within Specific Dates Timeframe.\" It is not necessary to supply a ```timeframe-id``` for the new date ranges. These ```timeframe-id```s will be generated automatically.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesDomainSharedSpecificDatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$id = 'id_example'; // string | ```timeframe-id``` of the timeframe to modify
$domains_domain_timeframes_id_put_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesIdPutRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesIdPutRequest

try {
    $result = $apiInstance->domainsDomainTimeframesIdPut($domain, $id, $domains_domain_timeframes_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesDomainSharedSpecificDatesApi->domainsDomainTimeframesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**| &#x60;&#x60;&#x60;timeframe-id&#x60;&#x60;&#x60; of the timeframe to modify | |
| **domains_domain_timeframes_id_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesIdPutRequest**](../Model/DomainsDomainTimeframesIdPutRequest.md)|  | [optional] |

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
