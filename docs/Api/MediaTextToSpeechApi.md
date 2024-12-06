# SpectrumVoip\\\\NetSapiens\MediaTextToSpeechApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainUsersUserVoicesGet()**](MediaTextToSpeechApi.md#domainsDomainUsersUserVoicesGet) | **GET** /domains/{domain}/users/{user}/voices | Synthesize Voice (Text to Speech)  via GET |
| [**domainsDomainUsersUserVoicesLanguageGet()**](MediaTextToSpeechApi.md#domainsDomainUsersUserVoicesLanguageGet) | **GET** /domains/{domain}/users/{user}/voices/{language} | Get Available Voices |
| [**domainsDomainUsersUserVoicesPost()**](MediaTextToSpeechApi.md#domainsDomainUsersUserVoicesPost) | **POST** /domains/{domain}/users/{user}/voices | Synthesize Voice (Text to Speech) |


## `domainsDomainUsersUserVoicesGet()`

```php
domainsDomainUsersUserVoicesGet($domain, $user, $script): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserVoicesGet200Response
```

Synthesize Voice (Text to Speech)  via GET



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaTextToSpeechApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$script = This is a script. ; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserVoicesGet($domain, $user, $script);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaTextToSpeechApi->domainsDomainUsersUserVoicesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **script** | **string**|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserVoicesGet200Response**](../Model/DomainsDomainUsersUserVoicesGet200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserVoicesLanguageGet()`

```php
domainsDomainUsersUserVoicesLanguageGet($domain, $user, $language, $gender, $vendor, $id, $name): \SpectrumVoip\\\\NetSapiens\Model\TtsVoice[]
```

Get Available Voices



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaTextToSpeechApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = ; // string | 
$language = en-US; // string | 
$gender = ; // string | 
$vendor = ; // string | 
$id = ; // string | 
$name = ; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserVoicesLanguageGet($domain, $user, $language, $gender, $vendor, $id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaTextToSpeechApi->domainsDomainUsersUserVoicesLanguageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **language** | **string**|  | |
| **gender** | **string**|  | [optional] |
| **vendor** | **string**|  | [optional] |
| **id** | **string**|  | [optional] |
| **name** | **string**|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\TtsVoice[]**](../Model/TtsVoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserVoicesPost()`

```php
domainsDomainUsersUserVoicesPost($domain, $user, $domains_domain_users_user_voices_post_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserVoicesGet200Response
```

Synthesize Voice (Text to Speech)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaTextToSpeechApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = ; // string | 
$domains_domain_users_user_voices_post_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserVoicesPostRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserVoicesPostRequest

try {
    $result = $apiInstance->domainsDomainUsersUserVoicesPost($domain, $user, $domains_domain_users_user_voices_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaTextToSpeechApi->domainsDomainUsersUserVoicesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_users_user_voices_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserVoicesPostRequest**](../Model/DomainsDomainUsersUserVoicesPostRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserVoicesGet200Response**](../Model/DomainsDomainUsersUserVoicesGet200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
