# SpectrumVoip\\\\NetSapiens\ContactsSharedContactsApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainContactsContactIdDelete()**](ContactsSharedContactsApi.md#domainsDomainContactsContactIdDelete) | **DELETE** /domains/{domain}/contacts/{contact_id} | Delete Shared Contact |
| [**domainsDomainContactsContactIdGet()**](ContactsSharedContactsApi.md#domainsDomainContactsContactIdGet) | **GET** /domains/{domain}/contacts/{contact_id} | Get Specific Domain Contact |
| [**domainsDomainContactsContactIdPut()**](ContactsSharedContactsApi.md#domainsDomainContactsContactIdPut) | **PUT** /domains/{domain}/contacts/{contact_id} | Update Shared Contact |
| [**domainsDomainContactsGet()**](ContactsSharedContactsApi.md#domainsDomainContactsGet) | **GET** /domains/{domain}/contacts | Get Domain Contacts |
| [**domainsDomainContactsPost()**](ContactsSharedContactsApi.md#domainsDomainContactsPost) | **POST** /domains/{domain}/contacts | Create Shared Contact |


## `domainsDomainContactsContactIdDelete()`

```php
domainsDomainContactsContactIdDelete($domain, $contact_id): object
```

Delete Shared Contact



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ContactsSharedContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$contact_id = 'contact_id_example'; // string | 

try {
    $result = $apiInstance->domainsDomainContactsContactIdDelete($domain, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsSharedContactsApi->domainsDomainContactsContactIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **contact_id** | **string**|  | |

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

## `domainsDomainContactsContactIdGet()`

```php
domainsDomainContactsContactIdGet($domain, $contact_id): \SpectrumVoip\\\\NetSapiens\Model\Contact[]
```

Get Specific Domain Contact



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ContactsSharedContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$contact_id = ; // string | 

try {
    $result = $apiInstance->domainsDomainContactsContactIdGet($domain, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsSharedContactsApi->domainsDomainContactsContactIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **contact_id** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Contact[]**](../Model/Contact.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainContactsContactIdPut()`

```php
domainsDomainContactsContactIdPut($domain, $contact_id, $domains_domain_users_user_contacts_post_request): object
```

Update Shared Contact



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ContactsSharedContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$contact_id = 'contact_id_example'; // string | 
$domains_domain_users_user_contacts_post_request = ; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserContactsPostRequest

try {
    $result = $apiInstance->domainsDomainContactsContactIdPut($domain, $contact_id, $domains_domain_users_user_contacts_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsSharedContactsApi->domainsDomainContactsContactIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **contact_id** | **string**|  | |
| **domains_domain_users_user_contacts_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserContactsPostRequest**](../Model/DomainsDomainUsersUserContactsPostRequest.md)|  | [optional] |

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

## `domainsDomainContactsGet()`

```php
domainsDomainContactsGet($domain): \SpectrumVoip\\\\NetSapiens\Model\Contact[]
```

Get Domain Contacts



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ContactsSharedContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 

try {
    $result = $apiInstance->domainsDomainContactsGet($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsSharedContactsApi->domainsDomainContactsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Contact[]**](../Model/Contact.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainContactsPost()`

```php
domainsDomainContactsPost($domain, $domains_domain_users_user_contacts_post_request): object
```

Create Shared Contact



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ContactsSharedContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$domains_domain_users_user_contacts_post_request = {"name-first-name":"John","name-middle-name":"imShared","name-last-name":"Doe","company":"netsap","phonenumber-work":"8587645200"}; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserContactsPostRequest

try {
    $result = $apiInstance->domainsDomainContactsPost($domain, $domains_domain_users_user_contacts_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsSharedContactsApi->domainsDomainContactsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_users_user_contacts_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserContactsPostRequest**](../Model/DomainsDomainUsersUserContactsPostRequest.md)|  | [optional] |

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
