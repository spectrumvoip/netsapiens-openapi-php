# SpectrumVoip\\\\NetSapiens\TimeframesUserCustomApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainUsersUserTimeframes4Post()**](TimeframesUserCustomApi.md#domainsDomainUsersUserTimeframes4Post) | **POST** /domains/{domain}/users/{user}/timeframes#4 | Create Custom Timeframe |
| [**domainsDomainUsersUserTimeframesId2Delete()**](TimeframesUserCustomApi.md#domainsDomainUsersUserTimeframesId2Delete) | **DELETE** /domains/{domain}/users/{user}/timeframes/{id}#2 | Delete Entry within Custom Timeframe |
| [**domainsDomainUsersUserTimeframesId2Post()**](TimeframesUserCustomApi.md#domainsDomainUsersUserTimeframesId2Post) | **POST** /domains/{domain}/users/{user}/timeframes/{id}#2 | Create Additional Entries within Custom Timeframe |
| [**domainsDomainUsersUserTimeframesId5Put()**](TimeframesUserCustomApi.md#domainsDomainUsersUserTimeframesId5Put) | **PUT** /domains/{domain}/users/{user}/timeframes/{id}#5 | Update Entries within Custom Timeframe |
| [**domainsDomainUsersUserTimeframesId6Put()**](TimeframesUserCustomApi.md#domainsDomainUsersUserTimeframesId6Put) | **PUT** /domains/{domain}/users/{user}/timeframes/{id}#6 | Replace All Entries in Custom Timeframe |


## `domainsDomainUsersUserTimeframes4Post()`

```php
domainsDomainUsersUserTimeframes4Post($domain, $user, $domains_domain_timeframes4_post_request): object
```

Create Custom Timeframe

When creating a Custom timeframe it is not necessary to supply a ```timeframe-id``` for the timeframe or for the entries within that timeframe. These ```timeframe-id```s will be generated automatically.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesUserCustomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$domains_domain_timeframes4_post_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframes4PostRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframes4PostRequest

try {
    $result = $apiInstance->domainsDomainUsersUserTimeframes4Post($domain, $user, $domains_domain_timeframes4_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesUserCustomApi->domainsDomainUsersUserTimeframes4Post: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_timeframes4_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframes4PostRequest**](../Model/DomainsDomainTimeframes4PostRequest.md)|  | [optional] |

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

## `domainsDomainUsersUserTimeframesId2Delete()`

```php
domainsDomainUsersUserTimeframesId2Delete($domain, $user, $id, $domains_domain_timeframes_id2_delete_request): object
```

Delete Entry within Custom Timeframe

In order to delete an entry within a Custom timeframe, supply the ```timeframe-id``` of the particular entry to be deleted as the parameter ```child_id``` within the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesUserCustomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$id = 'id_example'; // string | ```timeframe-id``` of the timeframe to modify
$domains_domain_timeframes_id2_delete_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId2DeleteRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId2DeleteRequest

try {
    $result = $apiInstance->domainsDomainUsersUserTimeframesId2Delete($domain, $user, $id, $domains_domain_timeframes_id2_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesUserCustomApi->domainsDomainUsersUserTimeframesId2Delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**| &#x60;&#x60;&#x60;timeframe-id&#x60;&#x60;&#x60; of the timeframe to modify | |
| **domains_domain_timeframes_id2_delete_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId2DeleteRequest**](../Model/DomainsDomainTimeframesId2DeleteRequest.md)|  | [optional] |

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

## `domainsDomainUsersUserTimeframesId2Post()`

```php
domainsDomainUsersUserTimeframesId2Post($domain, $user, $id, $domains_domain_timeframes_id2_post_request): object
```

Create Additional Entries within Custom Timeframe

When creating additional entries within a Custom timeframe it is not necessary to supply a ```timeframe-id``` for the new entries. These ```timeframe-id```s will be generated automatically.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesUserCustomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$id = 'id_example'; // string | ```timeframe-id``` of the timeframe to modify
$domains_domain_timeframes_id2_post_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId2PostRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId2PostRequest

try {
    $result = $apiInstance->domainsDomainUsersUserTimeframesId2Post($domain, $user, $id, $domains_domain_timeframes_id2_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesUserCustomApi->domainsDomainUsersUserTimeframesId2Post: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**| &#x60;&#x60;&#x60;timeframe-id&#x60;&#x60;&#x60; of the timeframe to modify | |
| **domains_domain_timeframes_id2_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId2PostRequest**](../Model/DomainsDomainTimeframesId2PostRequest.md)|  | [optional] |

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

## `domainsDomainUsersUserTimeframesId5Put()`

```php
domainsDomainUsersUserTimeframesId5Put($domain, $user, $id, $domains_domain_timeframes_id6_put_request): object
```

Update Entries within Custom Timeframe

In order to update entries within a Custom timeframe, include the parameter ```update_only``` and provide within the arrays ```timeframe-specific-dates-array```, ```timeframe-day-of-week-array```, and/or ```timeframe-holiday-array``` the new values for the entries you intend to update, including in each entry the associated ```timeframe-id``` for that entry. If any entries are missing the ```timeframe-id``` parameter, it may result in undesired behavior.  The value for ```update-only``` must be set to ```yes``` for this operation to succeed as desired. If any other value is supplied or the parameter ```update-only``` is omitted, it will result in the behavior described in \"Replace All Entries in Custom Timeframe\" - see examples for more information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesUserCustomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$id = 'id_example'; // string | ```timeframe-id``` of the timeframe to modify
$domains_domain_timeframes_id6_put_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId6PutRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId6PutRequest

try {
    $result = $apiInstance->domainsDomainUsersUserTimeframesId5Put($domain, $user, $id, $domains_domain_timeframes_id6_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesUserCustomApi->domainsDomainUsersUserTimeframesId5Put: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**| &#x60;&#x60;&#x60;timeframe-id&#x60;&#x60;&#x60; of the timeframe to modify | |
| **domains_domain_timeframes_id6_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId6PutRequest**](../Model/DomainsDomainTimeframesId6PutRequest.md)|  | [optional] |

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

## `domainsDomainUsersUserTimeframesId6Put()`

```php
domainsDomainUsersUserTimeframesId6Put($domain, $user, $id, $domains_domain_timeframes_id5_put_request): object
```

Replace All Entries in Custom Timeframe

If a new array of entries is supplied in the update request for a Custom timeframe, it will replace all existing entries in the timeframe, meaning that any existing entries in that timeframe will be removed. To update individual entries within a Custom timeframe, refer to \"Update Entries within Custom Timeframe.\" It is not necessary to supply a ```timeframe-id``` for the new holidays. These ```timeframe-id```s will be generated automatically.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesUserCustomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$id = 'id_example'; // string | ```timeframe-id``` of the timeframe to modify
$domains_domain_timeframes_id5_put_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId5PutRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId5PutRequest

try {
    $result = $apiInstance->domainsDomainUsersUserTimeframesId6Put($domain, $user, $id, $domains_domain_timeframes_id5_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesUserCustomApi->domainsDomainUsersUserTimeframesId6Put: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**| &#x60;&#x60;&#x60;timeframe-id&#x60;&#x60;&#x60; of the timeframe to modify | |
| **domains_domain_timeframes_id5_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainTimeframesId5PutRequest**](../Model/DomainsDomainTimeframesId5PutRequest.md)|  | [optional] |

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
