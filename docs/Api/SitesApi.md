# SpectrumVoip\\\\NetSapiens\SitesApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainSitesGet()**](SitesApi.md#domainsDomainSitesGet) | **GET** /domains/{domain}/sites | Read Sites in Domain |
| [**domainsDomainSitesListGet()**](SitesApi.md#domainsDomainSitesListGet) | **GET** /domains/{domain}/sites/list | List Sites in Domain |
| [**domainsDomainSitesPost()**](SitesApi.md#domainsDomainSitesPost) | **POST** /domains/{domain}/sites | Create Site in Domain |
| [**domainsDomainSitesSiteGet()**](SitesApi.md#domainsDomainSitesSiteGet) | **GET** /domains/{domain}/sites/{site} | Read Specific Site in Domain |
| [**domainsDomainSitesSitePut()**](SitesApi.md#domainsDomainSitesSitePut) | **PUT** /domains/{domain}/sites/{site} | Update Site in Domain |


## `domainsDomainSitesGet()`

```php
domainsDomainSitesGet($domain): \SpectrumVoip\\\\NetSapiens\Model\Site[]
```

Read Sites in Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\SitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = example.com; // string | 

try {
    $result = $apiInstance->domainsDomainSitesGet($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->domainsDomainSitesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Site[]**](../Model/Site.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainSitesListGet()`

```php
domainsDomainSitesListGet($domain): \SpectrumVoip\\\\NetSapiens\Model\Site[]
```

List Sites in Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\SitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = example.com; // string | 

try {
    $result = $apiInstance->domainsDomainSitesListGet($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->domainsDomainSitesListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Site[]**](../Model/Site.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainSitesPost()`

```php
domainsDomainSitesPost($domain, $site): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Create Site in Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\SitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$site = {"synchronous":"no","site":"New York"}; // \SpectrumVoip\\\\NetSapiens\Model\Site

try {
    $result = $apiInstance->domainsDomainSitesPost($domain, $site);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->domainsDomainSitesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **site** | [**\SpectrumVoip\\\\NetSapiens\Model\Site**](../Model/Site.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainSitesSiteGet()`

```php
domainsDomainSitesSiteGet($domain, $site): \SpectrumVoip\\\\NetSapiens\Model\Site
```

Read Specific Site in Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\SitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = example.com; // string | 
$site = New York; // string | 

try {
    $result = $apiInstance->domainsDomainSitesSiteGet($domain, $site);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->domainsDomainSitesSiteGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **site** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Site**](../Model/Site.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainSitesSitePut()`

```php
domainsDomainSitesSitePut($domain, $site, $domains_domain_sites_site_put_request): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Update Site in Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\SitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$site = 'site_example'; // string | 
$domains_domain_sites_site_put_request = {"synchronous":"no","site":"New York"}; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainSitesSitePutRequest

try {
    $result = $apiInstance->domainsDomainSitesSitePut($domain, $site, $domains_domain_sites_site_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SitesApi->domainsDomainSitesSitePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **site** | **string**|  | |
| **domains_domain_sites_site_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainSitesSitePutRequest**](../Model/DomainsDomainSitesSitePutRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
