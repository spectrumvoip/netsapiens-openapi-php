# SpectrumVoip\\\\NetSapiens\CallBlockingApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainNumberFiltersDelete()**](CallBlockingApi.md#domainsDomainNumberFiltersDelete) | **DELETE** /domains/{domain}/number-filters | Delete blocked numbers for a Domain |
| [**domainsDomainNumberFiltersGet()**](CallBlockingApi.md#domainsDomainNumberFiltersGet) | **GET** /domains/{domain}/number-filters | Read blocked numbers for a Domain |
| [**domainsDomainNumberFiltersPost()**](CallBlockingApi.md#domainsDomainNumberFiltersPost) | **POST** /domains/{domain}/number-filters | Add blocked numbers for a Domain |
| [**domainsDomainUsersUserNumberFiltersDelete()**](CallBlockingApi.md#domainsDomainUsersUserNumberFiltersDelete) | **DELETE** /domains/{domain}/users/{user}/number-filters | Delete blocked numbers for a User |
| [**domainsDomainUsersUserNumberFiltersPost()**](CallBlockingApi.md#domainsDomainUsersUserNumberFiltersPost) | **POST** /domains/{domain}/users/{user}/number-filters | Add blocked numbers for a User |
| [**domainsDomainUsersUsernumberFiltersGet()**](CallBlockingApi.md#domainsDomainUsersUsernumberFiltersGet) | **GET** /domains/{domain}/users/{user}number-filters | Read blocked numbers for a User |


## `domainsDomainNumberFiltersDelete()`

```php
domainsDomainNumberFiltersDelete($domain, $domains_domain_number_filters_post_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersPost202Response
```

Delete blocked numbers for a Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallBlockingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$domains_domain_number_filters_post_request = {"phone-numbers-to-reject":{"parameters":["5555555555"]}}; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersPostRequest

try {
    $result = $apiInstance->domainsDomainNumberFiltersDelete($domain, $domains_domain_number_filters_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallBlockingApi->domainsDomainNumberFiltersDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_number_filters_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersPostRequest**](../Model/DomainsDomainNumberFiltersPostRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersPost202Response**](../Model/DomainsDomainNumberFiltersPost202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainNumberFiltersGet()`

```php
domainsDomainNumberFiltersGet($domain): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersGet200ResponseInner[]
```

Read blocked numbers for a Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallBlockingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 

try {
    $result = $apiInstance->domainsDomainNumberFiltersGet($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallBlockingApi->domainsDomainNumberFiltersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersGet200ResponseInner[]**](../Model/DomainsDomainNumberFiltersGet200ResponseInner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainNumberFiltersPost()`

```php
domainsDomainNumberFiltersPost($domain, $domains_domain_number_filters_post_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersPost202Response
```

Add blocked numbers for a Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallBlockingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$domains_domain_number_filters_post_request = {"phone-numbers-to-reject":{"parameters":["5555555555"]}}; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersPostRequest

try {
    $result = $apiInstance->domainsDomainNumberFiltersPost($domain, $domains_domain_number_filters_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallBlockingApi->domainsDomainNumberFiltersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_number_filters_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersPostRequest**](../Model/DomainsDomainNumberFiltersPostRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersPost202Response**](../Model/DomainsDomainNumberFiltersPost202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserNumberFiltersDelete()`

```php
domainsDomainUsersUserNumberFiltersDelete($domain, $user, $domains_domain_number_filters_post_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersPost202Response
```

Delete blocked numbers for a User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallBlockingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$user = '~'; // string | 
$domains_domain_number_filters_post_request = {"phone-numbers-to-reject":{"parameters":["5555555555"]}}; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersPostRequest

try {
    $result = $apiInstance->domainsDomainUsersUserNumberFiltersDelete($domain, $user, $domains_domain_number_filters_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallBlockingApi->domainsDomainUsersUserNumberFiltersDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_number_filters_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersPostRequest**](../Model/DomainsDomainNumberFiltersPostRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersPost202Response**](../Model/DomainsDomainNumberFiltersPost202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserNumberFiltersPost()`

```php
domainsDomainUsersUserNumberFiltersPost($domain, $user, $domains_domain_number_filters_post_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersPost202Response
```

Add blocked numbers for a User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallBlockingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$user = '~'; // string | 
$domains_domain_number_filters_post_request = {"phone-numbers-to-reject":{"parameters":["5555555555"]}}; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersPostRequest

try {
    $result = $apiInstance->domainsDomainUsersUserNumberFiltersPost($domain, $user, $domains_domain_number_filters_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallBlockingApi->domainsDomainUsersUserNumberFiltersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_number_filters_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersPostRequest**](../Model/DomainsDomainNumberFiltersPostRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersPost202Response**](../Model/DomainsDomainNumberFiltersPost202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUsernumberFiltersGet()`

```php
domainsDomainUsersUsernumberFiltersGet($domain, $user): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersGet200ResponseInner[]
```

Read blocked numbers for a User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallBlockingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$user = '~'; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUsernumberFiltersGet($domain, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallBlockingApi->domainsDomainUsersUsernumberFiltersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersGet200ResponseInner[]**](../Model/DomainsDomainNumberFiltersGet200ResponseInner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
