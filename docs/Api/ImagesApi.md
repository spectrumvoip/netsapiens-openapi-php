# SpectrumVoip\\\\NetSapiens\ImagesApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createImageBase64()**](ImagesApi.md#createImageBase64) | **POST** /images/{filename} | Create Image from Upload (JSON + Base64 File) |
| [**createImageFileUpload()**](ImagesApi.md#createImageFileUpload) | **POST** /images/{filename}#1 | Create Image from Upload (Multipart/Mixed Post) |
| [**deleteImage()**](ImagesApi.md#deleteImage) | **DELETE** /images/{filename} | Delete an Image |
| [**readImage()**](ImagesApi.md#readImage) | **GET** /images/{filename} | Read Image |
| [**updateImageBase64()**](ImagesApi.md#updateImageBase64) | **PUT** /images/{filename}#1 | Update Image from Upload (JSON + Base64 File) |
| [**updateImageFileUpload()**](ImagesApi.md#updateImageFileUpload) | **PUT** /images/{filename} | Update Image from Upload (Multipart/Mixed Post) |


## `createImageBase64()`

```php
createImageBase64($filename, $create_image_base64_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Create Image from Upload (JSON + Base64 File)

Create an image file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filename = 'filename_example'; // string | The name of the image file.
$create_image_base64_request = new \SpectrumVoip\\\\NetSapiens\Model\CreateImageBase64Request(); // \SpectrumVoip\\\\NetSapiens\Model\CreateImageBase64Request

try {
    $result = $apiInstance->createImageBase64($filename, $create_image_base64_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->createImageBase64: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filename** | **string**| The name of the image file. | |
| **create_image_base64_request** | [**\SpectrumVoip\\\\NetSapiens\Model\CreateImageBase64Request**](../Model/CreateImageBase64Request.md)|  | [optional] |

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

## `createImageFileUpload()`

```php
createImageFileUpload($filename, $file, $reseller, $domain, $server, $description): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Create Image from Upload (Multipart/Mixed Post)

Create an image file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filename = 'filename_example'; // string | The name of the image file.
$file = '/path/to/file.txt'; // \SplFileObject | A \\\"File\\\" type parameter that needs to include the image file in question using a file post method
$reseller = 'reseller_example'; // string | The reseller or territory this image file applies to. Defaults to \\\"*\\\"
$domain = 'domain_example'; // string | The domain this image file applies to. Defaults to \\\"*\\\"
$server = 'server_example'; // string | The server this image file applies to. Defaults to \\\"*\\\"
$description = 'description_example'; // string | A description of the image to indicate what it is used for

try {
    $result = $apiInstance->createImageFileUpload($filename, $file, $reseller, $domain, $server, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->createImageFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filename** | **string**| The name of the image file. | |
| **file** | **\SplFileObject****\SplFileObject**| A \\\&quot;File\\\&quot; type parameter that needs to include the image file in question using a file post method | |
| **reseller** | **string**| The reseller or territory this image file applies to. Defaults to \\\&quot;*\\\&quot; | [optional] |
| **domain** | **string**| The domain this image file applies to. Defaults to \\\&quot;*\\\&quot; | [optional] |
| **server** | **string**| The server this image file applies to. Defaults to \\\&quot;*\\\&quot; | [optional] |
| **description** | **string**| A description of the image to indicate what it is used for | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response**](../Model/DomainsDomainUsersUserAnswerrulesReorderPut202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteImage()`

```php
deleteImage($filename, $delete_image_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Delete an Image

Delete an image file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filename = 'filename_example'; // string | The name of the image file.
$delete_image_request = new \SpectrumVoip\\\\NetSapiens\Model\DeleteImageRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DeleteImageRequest

try {
    $result = $apiInstance->deleteImage($filename, $delete_image_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->deleteImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filename** | **string**| The name of the image file. | |
| **delete_image_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DeleteImageRequest**](../Model/DeleteImageRequest.md)|  | [optional] |

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

## `readImage()`

```php
readImage($filename, $reseller, $domain, $server): \SpectrumVoip\\\\NetSapiens\Model\ReadImage200Response
```

Read Image

Read an image file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filename = nonexistent_image.png; // string | The name of the image file.
$reseller = {{reseller}}; // string | 
$domain = {{domain}}; // string | 
$server = *; // string | 

try {
    $result = $apiInstance->readImage($filename, $reseller, $domain, $server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->readImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filename** | **string**| The name of the image file. | |
| **reseller** | **string**|  | |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **server** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\ReadImage200Response**](../Model/ReadImage200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateImageBase64()`

```php
updateImageBase64($filename, $update_image_base64_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Update Image from Upload (JSON + Base64 File)

Update an image file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filename = 'filename_example'; // string | The name of the image file.
$update_image_base64_request = new \SpectrumVoip\\\\NetSapiens\Model\UpdateImageBase64Request(); // \SpectrumVoip\\\\NetSapiens\Model\UpdateImageBase64Request

try {
    $result = $apiInstance->updateImageBase64($filename, $update_image_base64_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->updateImageBase64: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filename** | **string**| The name of the image file. | |
| **update_image_base64_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateImageBase64Request**](../Model/UpdateImageBase64Request.md)|  | [optional] |

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

## `updateImageFileUpload()`

```php
updateImageFileUpload($filename, $file, $reseller, $domain, $server, $description): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Update Image from Upload (Multipart/Mixed Post)

Update an image file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filename = 'filename_example'; // string | The name of the image file.
$file = '/path/to/file.txt'; // \SplFileObject | A \\\"File\\\" type parameter that needs to include the image file in question using a file post method.
$reseller = 'reseller_example'; // string | The reseller or territory this image file applies to. Defaults to \\\"*\\\"
$domain = 'domain_example'; // string | The domain this image file applies to. Defaults to \\\"*\\\"
$server = 'server_example'; // string | The domain this image file applies to. Defaults to \\\"*\\\"
$description = 'description_example'; // string | A description of the image file to indicate what it is used for.

try {
    $result = $apiInstance->updateImageFileUpload($filename, $file, $reseller, $domain, $server, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->updateImageFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filename** | **string**| The name of the image file. | |
| **file** | **\SplFileObject****\SplFileObject**| A \\\&quot;File\\\&quot; type parameter that needs to include the image file in question using a file post method. | |
| **reseller** | **string**| The reseller or territory this image file applies to. Defaults to \\\&quot;*\\\&quot; | [optional] |
| **domain** | **string**| The domain this image file applies to. Defaults to \\\&quot;*\\\&quot; | [optional] |
| **server** | **string**| The domain this image file applies to. Defaults to \\\&quot;*\\\&quot; | [optional] |
| **description** | **string**| A description of the image file to indicate what it is used for. | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response**](../Model/DomainsDomainUsersUserAnswerrulesReorderPut202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
