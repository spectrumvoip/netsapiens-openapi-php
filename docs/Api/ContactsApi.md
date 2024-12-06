# SpectrumVoip\\\\NetSapiens\ContactsApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainUsersUserContactsContactIdDelete()**](ContactsApi.md#domainsDomainUsersUserContactsContactIdDelete) | **DELETE** /domains/{domain}/users/{user}/contacts/{contact_id} | Delete Contact |
| [**domainsDomainUsersUserContactsContactIdGet()**](ContactsApi.md#domainsDomainUsersUserContactsContactIdGet) | **GET** /domains/{domain}/users/{user}/contacts/{contact_id} | Get Specific Contact for User |
| [**domainsDomainUsersUserContactsContactIdPut()**](ContactsApi.md#domainsDomainUsersUserContactsContactIdPut) | **PUT** /domains/{domain}/users/{user}/contacts/{contact_id} | Update Contact |
| [**domainsDomainUsersUserContactsCountGet()**](ContactsApi.md#domainsDomainUsersUserContactsCountGet) | **GET** /domains/{domain}/users/{user}/contacts/count | Count Contacts for User |
| [**domainsDomainUsersUserContactsGet()**](ContactsApi.md#domainsDomainUsersUserContactsGet) | **GET** /domains/{domain}/users/{user}/contacts | Get Contacts for User |
| [**domainsDomainUsersUserContactsPost()**](ContactsApi.md#domainsDomainUsersUserContactsPost) | **POST** /domains/{domain}/users/{user}/contacts | Create Contact |
| [**domainsUsersContactsGet()**](ContactsApi.md#domainsUsersContactsGet) | **GET** /domains/~/users/~/contacts | Get My Contacts |


## `domainsDomainUsersUserContactsContactIdDelete()`

```php
domainsDomainUsersUserContactsContactIdDelete($domain, $user, $contact_id): object
```

Delete Contact



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$contact_id = 999b5ac4b5095251870476d449954554; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserContactsContactIdDelete($domain, $user, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->domainsDomainUsersUserContactsContactIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
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

## `domainsDomainUsersUserContactsContactIdGet()`

```php
domainsDomainUsersUserContactsContactIdGet($domain, $user, $contact_id): \SpectrumVoip\\\\NetSapiens\Model\Contact
```

Get Specific Contact for User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$user = ; // string | 
$contact_id = 'contact_id_example'; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserContactsContactIdGet($domain, $user, $contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->domainsDomainUsersUserContactsContactIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **contact_id** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Contact**](../Model/Contact.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserContactsContactIdPut()`

```php
domainsDomainUsersUserContactsContactIdPut($domain, $user, $contact_id, $domains_domain_users_user_contacts_contact_id_put_request): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Update Contact



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$user = ; // string | 
$contact_id = 'contact_id_example'; // string | 
$domains_domain_users_user_contacts_contact_id_put_request = ; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserContactsContactIdPutRequest

try {
    $result = $apiInstance->domainsDomainUsersUserContactsContactIdPut($domain, $user, $contact_id, $domains_domain_users_user_contacts_contact_id_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->domainsDomainUsersUserContactsContactIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **contact_id** | **string**|  | |
| **domains_domain_users_user_contacts_contact_id_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserContactsContactIdPutRequest**](../Model/DomainsDomainUsersUserContactsContactIdPutRequest.md)|  | [optional] |

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

## `domainsDomainUsersUserContactsCountGet()`

```php
domainsDomainUsersUserContactsCountGet($domain, $user): \SpectrumVoip\\\\NetSapiens\Model\Count
```

Count Contacts for User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$user = ; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserContactsCountGet($domain, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->domainsDomainUsersUserContactsCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |

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

## `domainsDomainUsersUserContactsGet()`

```php
domainsDomainUsersUserContactsGet($domain, $user, $include_domain): \SpectrumVoip\\\\NetSapiens\Model\Contact[]
```

Get Contacts for User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$user = ; // string | 
$include_domain = yes/no; // string | Whether to include domain contacts or not

try {
    $result = $apiInstance->domainsDomainUsersUserContactsGet($domain, $user, $include_domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->domainsDomainUsersUserContactsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **include_domain** | **string**| Whether to include domain contacts or not | [optional] |

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

## `domainsDomainUsersUserContactsPost()`

```php
domainsDomainUsersUserContactsPost($domain, $user, $domains_domain_users_user_contacts_post_request): object
```

Create Contact



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$user = ; // string | 
$domains_domain_users_user_contacts_post_request = {"name-first-name":"culpa in","name-middle-name":"do voluptate","name-last-name":"consequat esse cillum dolor Lorem","email":"do sunt ut incididunt id","company":"et eu cillum","phonenumber-work":"labore dolore culpa","phonenumber-cell":"sint est ipsum","phonenumber-fax":"aute dolor in","phonenumber-home":"do est"}; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserContactsPostRequest

try {
    $result = $apiInstance->domainsDomainUsersUserContactsPost($domain, $user, $domains_domain_users_user_contacts_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->domainsDomainUsersUserContactsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
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

## `domainsUsersContactsGet()`

```php
domainsUsersContactsGet(): \SpectrumVoip\\\\NetSapiens\Model\Contact[]
```

Get My Contacts



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->domainsUsersContactsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->domainsUsersContactsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
