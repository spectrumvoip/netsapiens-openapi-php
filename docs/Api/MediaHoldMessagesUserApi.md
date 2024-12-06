# SpectrumVoip\\\\NetSapiens\MediaHoldMessagesUserApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteMsgUser()**](MediaHoldMessagesUserApi.md#deleteMsgUser) | **DELETE** /domains/{domain}/users/{user}/msg/{index} | Delete Hold Messge for User |
| [**domainsDomainUsersUserMsgPost()**](MediaHoldMessagesUserApi.md#domainsDomainUsersUserMsgPost) | **POST** /domains/{domain}/users/{user}/msg | Create a new Hold Messge for User from Upload (Multipart/Mixed Post) |
| [**readMsgUser()**](MediaHoldMessagesUserApi.md#readMsgUser) | **GET** /domains/{domain}/users/{user}/msg | Read Hold Messages for User |
| [**updateMsgUserFileUpload()**](MediaHoldMessagesUserApi.md#updateMsgUserFileUpload) | **PUT** /domains/{domain}/users/{user}/msg/{index} | Update Hold Messge for User from Upload (Multipart/Mixed Post) |


## `deleteMsgUser()`

```php
deleteMsgUser($domain, $user, $index): object
```

Delete Hold Messge for User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaHoldMessagesUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$index = 'index_example'; // string | 

try {
    $result = $apiInstance->deleteMsgUser($domain, $user, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaHoldMessagesUserApi->deleteMsgUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **index** | **string**|  | |

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

## `domainsDomainUsersUserMsgPost()`

```php
domainsDomainUsersUserMsgPost($domain, $user, $synchronous, $script, $file, $index, $convert): object
```

Create a new Hold Messge for User from Upload (Multipart/Mixed Post)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaHoldMessagesUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$synchronous = 'synchronous_example'; // string | When synchronous is requested with \\\"yes\\\" the response will be a 200 on success and will contain a valid JSON representiation of the new resource. If no or left off request a 202 \\\"Accepted\\\" will be given in a success case and this can be considered a success. Synchronous responses will be a little slower as the API will process the geo replication request and wait till the local copy has been written and can be read back berfore sending a response.
$script = 'script_example'; // string | This is a simple explanation of what the audio is and can include what is said in the audio file for explanation.
$file = '/path/to/file.txt'; // \SplFileObject | This is a \\\"File\\\" type parameter that needs to include the audio file in question using a file post method.
$index = 56; // int | The index of the file, Example \\\"2\\\" for greeting 2.
$convert = 'convert_example'; // string | Setting yes will allow the API to attempt to convert the file from accepted formats into the correct format for media playback

try {
    $result = $apiInstance->domainsDomainUsersUserMsgPost($domain, $user, $synchronous, $script, $file, $index, $convert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaHoldMessagesUserApi->domainsDomainUsersUserMsgPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **synchronous** | **string**| When synchronous is requested with \\\&quot;yes\\\&quot; the response will be a 200 on success and will contain a valid JSON representiation of the new resource. If no or left off request a 202 \\\&quot;Accepted\\\&quot; will be given in a success case and this can be considered a success. Synchronous responses will be a little slower as the API will process the geo replication request and wait till the local copy has been written and can be read back berfore sending a response. | |
| **script** | **string**| This is a simple explanation of what the audio is and can include what is said in the audio file for explanation. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| This is a \\\&quot;File\\\&quot; type parameter that needs to include the audio file in question using a file post method. | [optional] |
| **index** | **int**| The index of the file, Example \\\&quot;2\\\&quot; for greeting 2. | [optional] |
| **convert** | **string**| Setting yes will allow the API to attempt to convert the file from accepted formats into the correct format for media playback | [optional] |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readMsgUser()`

```php
readMsgUser($domain, $user): \SpectrumVoip\\\\NetSapiens\Model\Audiofile[]
```

Read Hold Messages for User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaHoldMessagesUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$user = {{user}}; // string | 

try {
    $result = $apiInstance->readMsgUser($domain, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaHoldMessagesUserApi->readMsgUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |

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

## `updateMsgUserFileUpload()`

```php
updateMsgUserFileUpload($domain, $user, $index, $synchronous, $script, $file, $convert): object
```

Update Hold Messge for User from Upload (Multipart/Mixed Post)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MediaHoldMessagesUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$index = 'index_example'; // string | 
$synchronous = 'synchronous_example'; // string | When synchronous is requested with \\\"yes\\\" the response will be a 200 on success and will contain a valid JSON representiation of the new resource. If no or left off request a 202 \\\"Accepted\\\" will be given in a success case and this can be considered a success. Synchronous responses will be a little slower as the API will process the geo replication request and wait till the local copy has been written and can be read back berfore sending a response.
$script = 'script_example'; // string | This is a simple explanation of what the audio is and can include what is said in the audio file for explanation.
$file = '/path/to/file.txt'; // \SplFileObject | This is a \\\"File\\\" type parameter that needs to include the audio file in question using a file post method.
$convert = 'convert_example'; // string | Setting yes will allow the API to attempt to convert the file from accepted formats into the correct format for media playback

try {
    $result = $apiInstance->updateMsgUserFileUpload($domain, $user, $index, $synchronous, $script, $file, $convert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaHoldMessagesUserApi->updateMsgUserFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **index** | **string**|  | |
| **synchronous** | **string**| When synchronous is requested with \\\&quot;yes\\\&quot; the response will be a 200 on success and will contain a valid JSON representiation of the new resource. If no or left off request a 202 \\\&quot;Accepted\\\&quot; will be given in a success case and this can be considered a success. Synchronous responses will be a little slower as the API will process the geo replication request and wait till the local copy has been written and can be read back berfore sending a response. | |
| **script** | **string**| This is a simple explanation of what the audio is and can include what is said in the audio file for explanation. | [optional] |
| **file** | **\SplFileObject****\SplFileObject**| This is a \\\&quot;File\\\&quot; type parameter that needs to include the audio file in question using a file post method. | [optional] |
| **convert** | **string**| Setting yes will allow the API to attempt to convert the file from accepted formats into the correct format for media playback | [optional] |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
