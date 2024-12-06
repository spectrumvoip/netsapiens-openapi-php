# SpectrumVoip\\\\NetSapiens\CDRCallHistoryApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cdrsCountGet()**](CDRCallHistoryApi.md#cdrsCountGet) | **GET** /cdrs/count | Count CDRs and SUM minutes |
| [**cdrsGet()**](CDRCallHistoryApi.md#cdrsGet) | **GET** /cdrs | Read CDRs |
| [**domainsDomainCdrs1Get()**](CDRCallHistoryApi.md#domainsDomainCdrs1Get) | **GET** /domains/{domain}/cdrs#1 | Read CDRs for Site in Domain |
| [**domainsDomainCdrs2Get()**](CDRCallHistoryApi.md#domainsDomainCdrs2Get) | **GET** /domains/{domain}/cdrs#2 | Search CDRs for Domain |
| [**domainsDomainCdrsCountGet()**](CDRCallHistoryApi.md#domainsDomainCdrsCountGet) | **GET** /domains/{domain}/cdrs/count | Count CDRs and SUM minutes for Domain |
| [**domainsDomainCdrsGet()**](CDRCallHistoryApi.md#domainsDomainCdrsGet) | **GET** /domains/{domain}/cdrs | Read CDRs for Domain |
| [**domainsDomainUsersUserCdrsCountGet()**](CDRCallHistoryApi.md#domainsDomainUsersUserCdrsCountGet) | **GET** /domains/{domain}/users/{user}/cdrs/count | Count CDRs and SUM minutes for Specifc User |
| [**domainsDomainUsersUserCdrsGet()**](CDRCallHistoryApi.md#domainsDomainUsersUserCdrsGet) | **GET** /domains/{domain}/users/{user}/cdrs | Read CDRs for Specific User |


## `cdrsCountGet()`

```php
cdrsCountGet($datetime_start, $datetime_end, $type): \SpectrumVoip\\\\NetSapiens\Model\Count
```

Count CDRs and SUM minutes



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CDRCallHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datetime_start = 2023-11-27T13:00:00Z[US/Pacific]; // string | 
$datetime_end = 2023-11-27T13:00:00Z[US/Pacific]; // string | 
$type = 3; // string | Options include Inbound, Outbound, On-net, Off-net, Missed, Received, or integer type 0,1,2,3

try {
    $result = $apiInstance->cdrsCountGet($datetime_start, $datetime_end, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CDRCallHistoryApi->cdrsCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **datetime_start** | **string**|  | |
| **datetime_end** | **string**|  | |
| **type** | **string**| Options include Inbound, Outbound, On-net, Off-net, Missed, Received, or integer type 0,1,2,3 | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Count**](../Model/Count.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cdrsGet()`

```php
cdrsGet($datetime_start, $datetime_end, $start, $limit, $type): \SpectrumVoip\\\\NetSapiens\Model\CdrD[]
```

Read CDRs



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CDRCallHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datetime_start = 2023-11-27T13:00:00Z[US/Pacific]; // string | 
$datetime_end = 2023-11-27T13:00:00Z[US/Pacific]; // string | 
$start = 0; // int | 
$limit = 1; // int | 
$type = Off-net; // string | Options include Inbound, Outbound, On-net, Off-net, Missed, Received, or integer type 0,1,2,3

try {
    $result = $apiInstance->cdrsGet($datetime_start, $datetime_end, $start, $limit, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CDRCallHistoryApi->cdrsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **datetime_start** | **string**|  | |
| **datetime_end** | **string**|  | |
| **start** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **type** | **string**| Options include Inbound, Outbound, On-net, Off-net, Missed, Received, or integer type 0,1,2,3 | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\CdrD[]**](../Model/CdrD.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainCdrs1Get()`

```php
domainsDomainCdrs1Get($domain, $datetime_start, $datetime_end, $site): \SpectrumVoip\\\\NetSapiens\Model\CdrD[]
```

Read CDRs for Site in Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CDRCallHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$datetime_start = 2023-07-23 00:00:00; // string | 
$datetime_end = 2023-07-24 23:59:59; // string | 
$site = New York; // string | Use if wanting to seach for calls in a certain \"site\".

try {
    $result = $apiInstance->domainsDomainCdrs1Get($domain, $datetime_start, $datetime_end, $site);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CDRCallHistoryApi->domainsDomainCdrs1Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **datetime_start** | **string**|  | [optional] |
| **datetime_end** | **string**|  | [optional] |
| **site** | **string**| Use if wanting to seach for calls in a certain \&quot;site\&quot;. | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\CdrD[]**](../Model/CdrD.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainCdrs2Get()`

```php
domainsDomainCdrs2Get($domain, $datetime_start, $datetime_end, $dialled, $caller, $site, $group): \SpectrumVoip\\\\NetSapiens\Model\CdrD[]
```

Search CDRs for Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CDRCallHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$datetime_start = 2023-11-27T13:00:00Z[US/Pacific]; // string | 
$datetime_end = 2023-11-27T13:00:00Z[US/Pacific]; // string | 
$dialled = ; // string | The dialed number for the call. Can be a paritial match.
$caller = ; // string | The callerid number for the call. Can be a paritial match.
$site = ; // string | Use if wanting to seach for calls in a certain \"site\".
$group = ; // string | Use if wanting to seach for calls in a certain \"department\".

try {
    $result = $apiInstance->domainsDomainCdrs2Get($domain, $datetime_start, $datetime_end, $dialled, $caller, $site, $group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CDRCallHistoryApi->domainsDomainCdrs2Get: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **datetime_start** | **string**|  | |
| **datetime_end** | **string**|  | |
| **dialled** | **string**| The dialed number for the call. Can be a paritial match. | [optional] |
| **caller** | **string**| The callerid number for the call. Can be a paritial match. | [optional] |
| **site** | **string**| Use if wanting to seach for calls in a certain \&quot;site\&quot;. | [optional] |
| **group** | **string**| Use if wanting to seach for calls in a certain \&quot;department\&quot;. | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\CdrD[]**](../Model/CdrD.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainCdrsCountGet()`

```php
domainsDomainCdrsCountGet($domain, $datetime_start, $datetime_end, $type): \SpectrumVoip\\\\NetSapiens\Model\Count
```

Count CDRs and SUM minutes for Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CDRCallHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$datetime_start = 2023-11-27T13:00:00Z[US/Pacific]; // string | 
$datetime_end = 2023-11-27T14:00:00Z[US/Pacific]; // string | 
$type = 3; // string | Options include Inbound, Outbound, On-net, Off-net, Missed, Received, or integer type 0,1,2,3

try {
    $result = $apiInstance->domainsDomainCdrsCountGet($domain, $datetime_start, $datetime_end, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CDRCallHistoryApi->domainsDomainCdrsCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **datetime_start** | **string**|  | |
| **datetime_end** | **string**|  | |
| **type** | **string**| Options include Inbound, Outbound, On-net, Off-net, Missed, Received, or integer type 0,1,2,3 | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Count**](../Model/Count.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainCdrsGet()`

```php
domainsDomainCdrsGet($domain, $datetime_start, $datetime_end, $start, $limit, $type): \SpectrumVoip\\\\NetSapiens\Model\CdrD[]
```

Read CDRs for Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CDRCallHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$datetime_start = 2023-11-27T13:00:00Z[US/Pacific]; // string | 
$datetime_end = 2023-11-27T13:00:00Z[US/Pacific]; // string | 
$start = 0; // int | 
$limit = 1; // int | 
$type = Off-net; // string | Options include Inbound, Outbound, On-net, Off-net, Missed, Received, or integer type 0,1,2,3

try {
    $result = $apiInstance->domainsDomainCdrsGet($domain, $datetime_start, $datetime_end, $start, $limit, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CDRCallHistoryApi->domainsDomainCdrsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **datetime_start** | **string**|  | |
| **datetime_end** | **string**|  | |
| **start** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **type** | **string**| Options include Inbound, Outbound, On-net, Off-net, Missed, Received, or integer type 0,1,2,3 | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\CdrD[]**](../Model/CdrD.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserCdrsCountGet()`

```php
domainsDomainUsersUserCdrsCountGet($domain, $user, $datetime_start, $datetime_end, $type): \SpectrumVoip\\\\NetSapiens\Model\Count
```

Count CDRs and SUM minutes for Specifc User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CDRCallHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$datetime_start = 2023-11-27T13:00:00Z[US/Pacific]; // string | 
$datetime_end = 2023-11-27T13:00:00Z[US/Pacific]; // string | 
$type = 3; // string | Options include Inbound, Outbound, On-net, Off-net, Missed, Received, or integer type 0,1,2,3

try {
    $result = $apiInstance->domainsDomainUsersUserCdrsCountGet($domain, $user, $datetime_start, $datetime_end, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CDRCallHistoryApi->domainsDomainUsersUserCdrsCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **datetime_start** | **string**|  | |
| **datetime_end** | **string**|  | |
| **type** | **string**| Options include Inbound, Outbound, On-net, Off-net, Missed, Received, or integer type 0,1,2,3 | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Count**](../Model/Count.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserCdrsGet()`

```php
domainsDomainUsersUserCdrsGet($domain, $user, $datetime_start, $datetime_end, $start, $limit, $type): \SpectrumVoip\\\\NetSapiens\Model\CdrU[]
```

Read CDRs for Specific User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CDRCallHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$datetime_start = 2023-11-27T13:00:00Z[US/Pacific]; // string | 
$datetime_end = 2023-11-27T13:00:00Z[US/Pacific]; // string | 
$start = 0; // int | 
$limit = 1; // int | 
$type = Off-net; // string | Options include Inbound, Outbound, On-net, Off-net, Missed, Received, or integer type 0,1,2,3

try {
    $result = $apiInstance->domainsDomainUsersUserCdrsGet($domain, $user, $datetime_start, $datetime_end, $start, $limit, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CDRCallHistoryApi->domainsDomainUsersUserCdrsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **datetime_start** | **string**|  | |
| **datetime_end** | **string**|  | |
| **start** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **type** | **string**| Options include Inbound, Outbound, On-net, Off-net, Missed, Received, or integer type 0,1,2,3 | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\CdrU[]**](../Model/CdrU.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
