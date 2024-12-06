# SpectrumVoip\\\\NetSapiens\RecordingsApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainRecordingsCallidGet()**](RecordingsApi.md#domainsDomainRecordingsCallidGet) | **GET** /domains/{domain}/recordings/{callid} | Get Specific Recording by Callid for Domain |
| [**domainsDomainUsersUserRecordingsCallidGet()**](RecordingsApi.md#domainsDomainUsersUserRecordingsCallidGet) | **GET** /domains/{domain}/users/{user}/recordings/{callid} | Get Specific Recording by Callid for User |


## `domainsDomainRecordingsCallidGet()`

```php
domainsDomainRecordingsCallidGet($domain, $callid): \SpectrumVoip\\\\NetSapiens\Model\Recording[]
```

Get Specific Recording by Callid for Domain

A user with sufficient scope may request recording data for calls to which they were not a party - but which are within their purview - using the domain and callid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\RecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$callid = 'callid_example'; // string | 

try {
    $result = $apiInstance->domainsDomainRecordingsCallidGet($domain, $callid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingsApi->domainsDomainRecordingsCallidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **callid** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Recording[]**](../Model/Recording.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserRecordingsCallidGet()`

```php
domainsDomainUsersUserRecordingsCallidGet($domain, $user, $callid): \SpectrumVoip\\\\NetSapiens\Model\Recording[]
```

Get Specific Recording by Callid for User

A user who is a party to a call may request the recording data for that call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\RecordingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$user = '~'; // string | 
$callid = 'callid_example'; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserRecordingsCallidGet($domain, $user, $callid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordingsApi->domainsDomainUsersUserRecordingsCallidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **callid** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Recording[]**](../Model/Recording.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
