# SpectrumVoip\\\\NetSapiens\TimeframesUserAlwaysApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainUsersUserTimeframesPost()**](TimeframesUserAlwaysApi.md#domainsDomainUsersUserTimeframesPost) | **POST** /domains/{domain}/users/{user}/timeframes | Create Always Timeframe |


## `domainsDomainUsersUserTimeframesPost()`

```php
domainsDomainUsersUserTimeframesPost($domain, $user, $domains_domain_timeframes_post_request): object
```

Create Always Timeframe



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesUserAlwaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$domains_domain_timeframes_post_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesPostRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesPostRequest

try {
    $result = $apiInstance->domainsDomainUsersUserTimeframesPost($domain, $user, $domains_domain_timeframes_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesUserAlwaysApi->domainsDomainUsersUserTimeframesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_timeframes_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesPostRequest**](../Model/DomainsDomainTimeframesPostRequest.md)|  | [optional] |

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
