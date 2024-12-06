# SpectrumVoip\\\\NetSapiens\VoicemailRemindersApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainUsersUserVmailnagDelete()**](VoicemailRemindersApi.md#domainsDomainUsersUserVmailnagDelete) | **DELETE** /domains/{domain}/users/{user}/vmailnag | Delete Voicemail Reminders for Specific User |
| [**domainsDomainUsersUserVmailnagGet()**](VoicemailRemindersApi.md#domainsDomainUsersUserVmailnagGet) | **GET** /domains/{domain}/users/{user}/vmailnag | Get Voicemail Reminders for Specific User |
| [**domainsDomainUsersUserVmailnagPost()**](VoicemailRemindersApi.md#domainsDomainUsersUserVmailnagPost) | **POST** /domains/{domain}/users/{user}/vmailnag | Create Voicemail Reminder |
| [**domainsDomainUsersUserVmailnagPut()**](VoicemailRemindersApi.md#domainsDomainUsersUserVmailnagPut) | **PUT** /domains/{domain}/users/{user}/vmailnag | Update Voicemail Reminders for Specific User |


## `domainsDomainUsersUserVmailnagDelete()`

```php
domainsDomainUsersUserVmailnagDelete($domain, $user): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Delete Voicemail Reminders for Specific User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\VoicemailRemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserVmailnagDelete($domain, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailRemindersApi->domainsDomainUsersUserVmailnagDelete: ', $e->getMessage(), PHP_EOL;
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

## `domainsDomainUsersUserVmailnagGet()`

```php
domainsDomainUsersUserVmailnagGet($domain, $user): \SpectrumVoip\\\\NetSapiens\Model\Vmailnag
```

Get Voicemail Reminders for Specific User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\VoicemailRemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserVmailnagGet($domain, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailRemindersApi->domainsDomainUsersUserVmailnagGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Vmailnag**](../Model/Vmailnag.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserVmailnagPost()`

```php
domainsDomainUsersUserVmailnagPost($domain, $user, $domains_domain_users_user_vmailnag_post_request): object
```

Create Voicemail Reminder



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\VoicemailRemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$user = '~'; // string | 
$domains_domain_users_user_vmailnag_post_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserVmailnagPostRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserVmailnagPostRequest

try {
    $result = $apiInstance->domainsDomainUsersUserVmailnagPost($domain, $user, $domains_domain_users_user_vmailnag_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailRemindersApi->domainsDomainUsersUserVmailnagPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_users_user_vmailnag_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserVmailnagPostRequest**](../Model/DomainsDomainUsersUserVmailnagPostRequest.md)|  | [optional] |

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

## `domainsDomainUsersUserVmailnagPut()`

```php
domainsDomainUsersUserVmailnagPut($domain, $user, $domains_domain_users_user_vmailnag_put_request): object
```

Update Voicemail Reminders for Specific User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\VoicemailRemindersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$user = '~'; // string | 
$domains_domain_users_user_vmailnag_put_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserVmailnagPutRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserVmailnagPutRequest

try {
    $result = $apiInstance->domainsDomainUsersUserVmailnagPut($domain, $user, $domains_domain_users_user_vmailnag_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoicemailRemindersApi->domainsDomainUsersUserVmailnagPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_users_user_vmailnag_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserVmailnagPutRequest**](../Model/DomainsDomainUsersUserVmailnagPutRequest.md)|  | [optional] |

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
