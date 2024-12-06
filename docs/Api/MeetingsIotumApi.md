# SpectrumVoip\\\\NetSapiens\MeetingsIotumApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainUsersUserHostContactsPost()**](MeetingsIotumApi.md#domainsDomainUsersUserHostContactsPost) | **POST** /domains/{domain}/users/{user}/host/contacts | Create Host Contacts |
| [**domainsDomainUsersUserHostDelete()**](MeetingsIotumApi.md#domainsDomainUsersUserHostDelete) | **DELETE** /domains/{domain}/users/{user}/host | Delete a Host |
| [**domainsDomainUsersUserHostPost()**](MeetingsIotumApi.md#domainsDomainUsersUserHostPost) | **POST** /domains/{domain}/users/{user}/host | Create a Host |
| [**domainsDomainUsersUserHostPut()**](MeetingsIotumApi.md#domainsDomainUsersUserHostPut) | **PUT** /domains/{domain}/users/{user}/host | Update User&#39;s Iotum Host |
| [**domainsDomainUsersUserVideoConferenceGet()**](MeetingsIotumApi.md#domainsDomainUsersUserVideoConferenceGet) | **GET** /domains/{domain}/users/{user}/video/conference | Read Iotum Video Host Conferences |
| [**domainsDomainUsersUserVideoConferencePost()**](MeetingsIotumApi.md#domainsDomainUsersUserVideoConferencePost) | **POST** /domains/{domain}/users/{user}/video/conference | Create a Ad-hoc Conference |
| [**domainsDomainUsersUserVideoContactsGet()**](MeetingsIotumApi.md#domainsDomainUsersUserVideoContactsGet) | **GET** /domains/{domain}/users/{user}/video/contacts | Read Iotum Video Host Contacts |
| [**domainsDomainUsersUserVideoGet()**](MeetingsIotumApi.md#domainsDomainUsersUserVideoGet) | **GET** /domains/{domain}/users/{user}/video | Read Iotum Video Host |
| [**domainsDomainVideoAvailableproductsGet()**](MeetingsIotumApi.md#domainsDomainVideoAvailableproductsGet) | **GET** /domains/{domain}/video/availableproducts | Read Iotum Video Available Products |
| [**domainsDomainVideoDelete()**](MeetingsIotumApi.md#domainsDomainVideoDelete) | **DELETE** /domains/{domain}/video | Delete a Host Copy |
| [**domainsDomainVideoGet()**](MeetingsIotumApi.md#domainsDomainVideoGet) | **GET** /domains/{domain}/video | Read Iotum Video Company |
| [**domainsDomainVideoHostsGet()**](MeetingsIotumApi.md#domainsDomainVideoHostsGet) | **GET** /domains/{domain}/video/hosts | Read All Iotum Video Hosts in a Domain |
| [**domainsDomainVideoPost()**](MeetingsIotumApi.md#domainsDomainVideoPost) | **POST** /domains/{domain}/video | Create Iotum Video Company |
| [**domainsDomainVideoProductsGet()**](MeetingsIotumApi.md#domainsDomainVideoProductsGet) | **GET** /domains/{domain}/video/products | Read Iotum Video Company Products |
| [**domainsDomainVideoPut()**](MeetingsIotumApi.md#domainsDomainVideoPut) | **PUT** /domains/{domain}/video | Update Domain&#39;s Iotum Company |
| [**domainsDomainVideoSubscriptionSlugDelete()**](MeetingsIotumApi.md#domainsDomainVideoSubscriptionSlugDelete) | **DELETE** /domains/{domain}/video/subscription/{slug} | Delete Iotum Video Subscription |
| [**domainsDomainVideoSubscriptionSlugPost()**](MeetingsIotumApi.md#domainsDomainVideoSubscriptionSlugPost) | **POST** /domains/{domain}/video/subscription/{slug} | Create Iotum Video Subscription |
| [**domainsDomainVideoSubscriptionsPut()**](MeetingsIotumApi.md#domainsDomainVideoSubscriptionsPut) | **PUT** /domains/{domain}/video/subscriptions | Update Domain&#39;s Iotum Subscriptions |
| [**videoResellersGet()**](MeetingsIotumApi.md#videoResellersGet) | **GET** /video/resellers | Read Iotum Video Domain Resellers |


## `domainsDomainUsersUserHostContactsPost()`

```php
domainsDomainUsersUserHostContactsPost($domain, $user, $iotum_contact): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Create Host Contacts



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$iotum_contact = array(new \SpectrumVoip\\\\NetSapiens\Model\IotumContact()); // \SpectrumVoip\\\\NetSapiens\Model\IotumContact[]

try {
    $result = $apiInstance->domainsDomainUsersUserHostContactsPost($domain, $user, $iotum_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->domainsDomainUsersUserHostContactsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **iotum_contact** | [**\SpectrumVoip\\\\NetSapiens\Model\IotumContact[]**](../Model/IotumContact.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response**](../Model/DomainsDomainUsersUserAnswerrulesReorderPut202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserHostDelete()`

```php
domainsDomainUsersUserHostDelete($domain, $user): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Delete a Host



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserHostDelete($domain, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->domainsDomainUsersUserHostDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response**](../Model/DomainsDomainUsersUserAnswerrulesReorderPut202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserHostPost()`

```php
domainsDomainUsersUserHostPost($domain, $user, $iotum_host): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Create a Host



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$iotum_host = new \SpectrumVoip\\\\NetSapiens\Model\IotumHost(); // \SpectrumVoip\\\\NetSapiens\Model\IotumHost

try {
    $result = $apiInstance->domainsDomainUsersUserHostPost($domain, $user, $iotum_host);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->domainsDomainUsersUserHostPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **iotum_host** | [**\SpectrumVoip\\\\NetSapiens\Model\IotumHost**](../Model/IotumHost.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response**](../Model/DomainsDomainUsersUserAnswerrulesReorderPut202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserHostPut()`

```php
domainsDomainUsersUserHostPut($domain, $user, $domains_domain_users_user_host_put_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Update User's Iotum Host

Update a user's Iotum Host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = '~'; // string | 
$domains_domain_users_user_host_put_request = {"default-plan":"netsapiens_pro","plans":["netsapiens_pro"],"default-addons":["netsapiens_webinar_5000","netsapiens_webinar_3000"],"add-ons":["netsapiens_webinar_500","netsapiens_webinar_5000","netsapiens_webinar_3000"]}; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserHostPutRequest

try {
    $result = $apiInstance->domainsDomainUsersUserHostPut($domain, $user, $domains_domain_users_user_host_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->domainsDomainUsersUserHostPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_users_user_host_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserHostPutRequest**](../Model/DomainsDomainUsersUserHostPutRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response**](../Model/DomainsDomainUsersUserAnswerrulesReorderPut202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserVideoConferenceGet()`

```php
domainsDomainUsersUserVideoConferenceGet($domain, $user): string[]
```

Read Iotum Video Host Conferences

Read a Iotum Host

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserVideoConferenceGet($domain, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->domainsDomainUsersUserVideoConferenceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |

### Return type

**string[]**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserVideoConferencePost()`

```php
domainsDomainUsersUserVideoConferencePost($domain, $user, $domains_domain_users_user_video_conference_post_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Create a Ad-hoc Conference



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$domains_domain_users_user_video_conference_post_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserVideoConferencePostRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserVideoConferencePostRequest

try {
    $result = $apiInstance->domainsDomainUsersUserVideoConferencePost($domain, $user, $domains_domain_users_user_video_conference_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->domainsDomainUsersUserVideoConferencePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_users_user_video_conference_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserVideoConferencePostRequest**](../Model/DomainsDomainUsersUserVideoConferencePostRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response**](../Model/DomainsDomainUsersUserAnswerrulesReorderPut202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserVideoContactsGet()`

```php
domainsDomainUsersUserVideoContactsGet($domain, $user): \SpectrumVoip\\\\NetSapiens\Model\Meeting[]
```

Read Iotum Video Host Contacts

Read a Iotum Host

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserVideoContactsGet($domain, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->domainsDomainUsersUserVideoContactsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Meeting[]**](../Model/Meeting.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserVideoGet()`

```php
domainsDomainUsersUserVideoGet($domain, $user): \SpectrumVoip\\\\NetSapiens\Model\Meeting[]
```

Read Iotum Video Host

Read a Iotum Host

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserVideoGet($domain, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->domainsDomainUsersUserVideoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Meeting[]**](../Model/Meeting.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainVideoAvailableproductsGet()`

```php
domainsDomainVideoAvailableproductsGet($domain): \SpectrumVoip\\\\NetSapiens\Model\Meeting[]
```

Read Iotum Video Available Products

Read all available products for the company via the reseller

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 

try {
    $result = $apiInstance->domainsDomainVideoAvailableproductsGet($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->domainsDomainVideoAvailableproductsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Meeting[]**](../Model/Meeting.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainVideoDelete()`

```php
domainsDomainVideoDelete($domain): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Delete a Host Copy



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 

try {
    $result = $apiInstance->domainsDomainVideoDelete($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->domainsDomainVideoDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response**](../Model/DomainsDomainUsersUserAnswerrulesReorderPut202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainVideoGet()`

```php
domainsDomainVideoGet($domain): \SpectrumVoip\\\\NetSapiens\Model\Meeting[]
```

Read Iotum Video Company

Read a Iotum Company (domain)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 

try {
    $result = $apiInstance->domainsDomainVideoGet($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->domainsDomainVideoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Meeting[]**](../Model/Meeting.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainVideoHostsGet()`

```php
domainsDomainVideoHostsGet($domain): \SpectrumVoip\\\\NetSapiens\Model\Meeting[]
```

Read All Iotum Video Hosts in a Domain

Read All Iotum Video Hosts in a Domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 

try {
    $result = $apiInstance->domainsDomainVideoHostsGet($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->domainsDomainVideoHostsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Meeting[]**](../Model/Meeting.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainVideoPost()`

```php
domainsDomainVideoPost($domain, $domains_domain_video_post_request): \SpectrumVoip\\\\NetSapiens\Model\Meeting[]
```

Create Iotum Video Company

Read a Iotum Company (domain)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = Leftcoast; // string | 
$domains_domain_video_post_request = ; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainVideoPostRequest

try {
    $result = $apiInstance->domainsDomainVideoPost($domain, $domains_domain_video_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->domainsDomainVideoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_video_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainVideoPostRequest**](../Model/DomainsDomainVideoPostRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Meeting[]**](../Model/Meeting.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainVideoProductsGet()`

```php
domainsDomainVideoProductsGet($domain): \SpectrumVoip\\\\NetSapiens\Model\Meeting[]
```

Read Iotum Video Company Products

Read the products (plans and add-ons) a domain's company is currently using

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 

try {
    $result = $apiInstance->domainsDomainVideoProductsGet($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->domainsDomainVideoProductsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Meeting[]**](../Model/Meeting.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainVideoPut()`

```php
domainsDomainVideoPut($domain, $domains_domain_video_put_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Update Domain's Iotum Company

Update the details of a Domain's Iotum Company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$domains_domain_video_put_request = {"default-plan":"netsapiens_pro","plans":["netsapiens_pro"],"default-addons":["netsapiens_webinar_5000","netsapiens_webinar_3000"],"add-ons":["netsapiens_webinar_500","netsapiens_webinar_5000","netsapiens_webinar_3000"]}; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainVideoPutRequest

try {
    $result = $apiInstance->domainsDomainVideoPut($domain, $domains_domain_video_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->domainsDomainVideoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_video_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainVideoPutRequest**](../Model/DomainsDomainVideoPutRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response**](../Model/DomainsDomainUsersUserAnswerrulesReorderPut202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainVideoSubscriptionSlugDelete()`

```php
domainsDomainVideoSubscriptionSlugDelete($domain, $slug): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Delete Iotum Video Subscription

Delete a subscription to a product for the domain's company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$slug = ; // string | 

try {
    $result = $apiInstance->domainsDomainVideoSubscriptionSlugDelete($domain, $slug);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->domainsDomainVideoSubscriptionSlugDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **slug** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response**](../Model/DomainsDomainUsersUserAnswerrulesReorderPut202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainVideoSubscriptionSlugPost()`

```php
domainsDomainVideoSubscriptionSlugPost($domain, $slug, $domains_domain_video_subscription_slug_post_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Create Iotum Video Subscription

Create a Iotum video subscription to one of the available Iotum products for that company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$slug = ; // string | 
$domains_domain_video_subscription_slug_post_request = {"host-limit":201,"switch-plan":false}; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainVideoSubscriptionSlugPostRequest

try {
    $result = $apiInstance->domainsDomainVideoSubscriptionSlugPost($domain, $slug, $domains_domain_video_subscription_slug_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->domainsDomainVideoSubscriptionSlugPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **slug** | **string**|  | |
| **domains_domain_video_subscription_slug_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainVideoSubscriptionSlugPostRequest**](../Model/DomainsDomainVideoSubscriptionSlugPostRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response**](../Model/DomainsDomainUsersUserAnswerrulesReorderPut202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainVideoSubscriptionsPut()`

```php
domainsDomainVideoSubscriptionsPut($domain, $domains_domain_video_subscriptions_put_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Update Domain's Iotum Subscriptions

Update the plans and add-ons a domain's Iotum company is subscribed to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$domains_domain_video_subscriptions_put_request = {"default-plan":"netsapiens_pro","plans":["netsapiens_pro"],"default-addons":["netsapiens_webinar_5000","netsapiens_webinar_3000"],"add-ons":["netsapiens_webinar_500","netsapiens_webinar_5000","netsapiens_webinar_3000"]}; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainVideoSubscriptionsPutRequest

try {
    $result = $apiInstance->domainsDomainVideoSubscriptionsPut($domain, $domains_domain_video_subscriptions_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->domainsDomainVideoSubscriptionsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_video_subscriptions_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainVideoSubscriptionsPutRequest**](../Model/DomainsDomainVideoSubscriptionsPutRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response**](../Model/DomainsDomainUsersUserAnswerrulesReorderPut202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `videoResellersGet()`

```php
videoResellersGet(): \SpectrumVoip\\\\NetSapiens\Model\Meeting[]
```

Read Iotum Video Domain Resellers

Read a Iotum Company (domain)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsIotumApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->videoResellersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsIotumApi->videoResellersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Meeting[]**](../Model/Meeting.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
