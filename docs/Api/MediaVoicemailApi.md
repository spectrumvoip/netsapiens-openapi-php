# SpectrumVoip\\\\NetSapiens\MediaVoicemailApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteVoicemail()**](MediaVoicemailApi.md#deleteVoicemail) | **DELETE** /domains/{domain}/users/{user}/voicemails/{folder}/{filename} | Delete Voicemail |
| [**forwardVoicemail()**](MediaVoicemailApi.md#forwardVoicemail) | **PATCH** /domains/{domain}/users/{user}/voicemails/{folder}/{filename}/forward | Forward Voicemail to another user |
| [**readVoicemail()**](MediaVoicemailApi.md#readVoicemail) | **GET** /domains/{domain}/users/{user}/voicemails/{folder}/{filename} | Read Specific Voicemail for User |
| [**readVoicemails()**](MediaVoicemailApi.md#readVoicemails) | **GET** /domains/{domain}/users/{user}/voicemails/{folder} | Read Voicemail for User by Folder |
| [**saveVoicemail()**](MediaVoicemailApi.md#saveVoicemail) | **PATCH** /domains/{domain}/users/{user}/voicemails/{folder}/{filename}/save | Move Voicemail to save folder |


## `deleteVoicemail()`

```php
deleteVoicemail($domain, $user, $folder, $filename): \SpectrumVoip\\\\NetSapiens\Model\Audiofile[]
```

Delete Voicemail



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaVoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$folder = save; // string | Options include new, save, and trash
$filename = vm-20230829235740031843-d739b1936a66eff93de3878ecfbceffa.wav; // string | 

try {
    $result = $apiInstance->deleteVoicemail($domain, $user, $folder, $filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaVoicemailApi->deleteVoicemail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **folder** | **string**| Options include new, save, and trash | |
| **filename** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Audiofile[]**](../Model/Audiofile.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forwardVoicemail()`

```php
forwardVoicemail($domain, $user, $folder, $filename, $forward_voicemail_request): \SpectrumVoip\\\\NetSapiens\Model\Audiofile[]
```

Forward Voicemail to another user



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaVoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$folder = save; // string | Options include new, save, and trash
$filename = vm-20230829235740031843-d739b1936a66eff93de3878ecfbceffa.wav; // string | 
$forward_voicemail_request = new \SpectrumVoip\\\\NetSapiens\Model\ForwardVoicemailRequest(); // \SpectrumVoip\\\\NetSapiens\Model\ForwardVoicemailRequest

try {
    $result = $apiInstance->forwardVoicemail($domain, $user, $folder, $filename, $forward_voicemail_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaVoicemailApi->forwardVoicemail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **folder** | **string**| Options include new, save, and trash | |
| **filename** | **string**|  | |
| **forward_voicemail_request** | [**\SpectrumVoip\\\\NetSapiens\Model\ForwardVoicemailRequest**](../Model/ForwardVoicemailRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Audiofile[]**](../Model/Audiofile.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readVoicemail()`

```php
readVoicemail($domain, $user, $folder, $filename): \SpectrumVoip\\\\NetSapiens\Model\Audiofile[]
```

Read Specific Voicemail for User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaVoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$folder = save; // string | Options include new, save, and trash
$filename = ; // string | 

try {
    $result = $apiInstance->readVoicemail($domain, $user, $folder, $filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaVoicemailApi->readVoicemail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **folder** | **string**| Options include new, save, and trash | |
| **filename** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Audiofile[]**](../Model/Audiofile.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readVoicemails()`

```php
readVoicemails($domain, $user, $folder): \SpectrumVoip\\\\NetSapiens\Model\Audiofile[]
```

Read Voicemail for User by Folder



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaVoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$folder = save; // string | Options include new, save, and trash

try {
    $result = $apiInstance->readVoicemails($domain, $user, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaVoicemailApi->readVoicemails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **folder** | **string**| Options include new, save, and trash | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Audiofile[]**](../Model/Audiofile.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveVoicemail()`

```php
saveVoicemail($domain, $user, $folder, $filename): \SpectrumVoip\\\\NetSapiens\Model\Audiofile[]
```

Move Voicemail to save folder



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaVoicemailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$folder = save; // string | Options include new, save, and trash
$filename = vm-20230829235740031843-d739b1936a66eff93de3878ecfbceffa.wav; // string | 

try {
    $result = $apiInstance->saveVoicemail($domain, $user, $folder, $filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaVoicemailApi->saveVoicemail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **folder** | **string**| Options include new, save, and trash | |
| **filename** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Audiofile[]**](../Model/Audiofile.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
