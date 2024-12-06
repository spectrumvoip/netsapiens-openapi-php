# SpectrumVoip\\\\NetSapiens\TimeframesDomainSharedDaysOfWeekApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainTimeframes2Post()**](TimeframesDomainSharedDaysOfWeekApi.md#domainsDomainTimeframes2Post) | **POST** /domains/{domain}/timeframes#2 | Create Days of Week Timeframe |
| [**domainsDomainTimeframesId2Put()**](TimeframesDomainSharedDaysOfWeekApi.md#domainsDomainTimeframesId2Put) | **PUT** /domains/{domain}/timeframes/{id}#2 | Update Days of Week Timeframe |


## `domainsDomainTimeframes2Post()`

```php
domainsDomainTimeframes2Post($domain, $domains_domain_timeframes2_post_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframes2Post200Response
```

Create Days of Week Timeframe

A Days of Week timeframe consists of a single Days of Week entry within the ```timeframe-day-of-week-array``` array inside the timeframe. In order to create a Days of Week timeframe, supply a single new Days of Week entry object within the ```timeframe-day-of-week-array``` array in the create request. See examples for more information.  When creating a Days of Week timeframe it is not necessary to supply a ```timeframe-id``` for the timeframe or for the Days of Week entry within that timeframe. These ```timeframe-id```s will be generated automatically.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesDomainSharedDaysOfWeekApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{user}}; // string | 
$domains_domain_timeframes2_post_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframes2PostRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframes2PostRequest

try {
    $result = $apiInstance->domainsDomainTimeframes2Post($domain, $domains_domain_timeframes2_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesDomainSharedDaysOfWeekApi->domainsDomainTimeframes2Post: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_timeframes2_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframes2PostRequest**](../Model/DomainsDomainTimeframes2PostRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframes2Post200Response**](../Model/DomainsDomainTimeframes2Post200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainTimeframesId2Put()`

```php
domainsDomainTimeframesId2Put($domain, $id, $domains_domain_timeframes_id2_put_request): object
```

Update Days of Week Timeframe

A Days of Week timeframe consists of a single Days of Week entry within the ```timeframe-day-of-week-array``` array inside the timeframe. In order to update a Days of Week timeframe, supply a single new Days of Week entry object within the ```timeframe-day-of-week-array``` array in the update request. It is not necessary to supply a ```timeframe-id``` for the new Days of Week entry. The ```timeframe-id``` will be generated automatically. See examples for more information.  The value for ```update-only``` must be set to ```yes``` for this operation to succeed as desired. If any other value is supplied or the parameter ```update-only``` is omitted, undesired behavior will occur.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesDomainSharedDaysOfWeekApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$id = 'id_example'; // string | ```timeframe-id``` of the timeframe to modify
$domains_domain_timeframes_id2_put_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId2PutRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId2PutRequest

try {
    $result = $apiInstance->domainsDomainTimeframesId2Put($domain, $id, $domains_domain_timeframes_id2_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesDomainSharedDaysOfWeekApi->domainsDomainTimeframesId2Put: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**| &#x60;&#x60;&#x60;timeframe-id&#x60;&#x60;&#x60; of the timeframe to modify | |
| **domains_domain_timeframes_id2_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId2PutRequest**](../Model/DomainsDomainTimeframesId2PutRequest.md)|  | [optional] |

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
