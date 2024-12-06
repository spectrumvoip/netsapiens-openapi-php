# SpectrumVoip\\\\NetSapiens\TemplatesApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTemplateBase64()**](TemplatesApi.md#createTemplateBase64) | **POST** /templates/{filename} | Create Template from Upload (JSON + Base64 File) |
| [**deleteTemplate()**](TemplatesApi.md#deleteTemplate) | **DELETE** /templates/{filename} | Delete a Template |
| [**readTemplate()**](TemplatesApi.md#readTemplate) | **GET** /templates/{filename} | Read Template |
| [**updateTemplateBase64()**](TemplatesApi.md#updateTemplateBase64) | **PUT** /templates/{filename} | Update Template from Upload (JSON + Base64 File) |


## `createTemplateBase64()`

```php
createTemplateBase64($filename, $create_template_base64_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Create Template from Upload (JSON + Base64 File)

Create a template file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filename = 'filename_example'; // string | 
$create_template_base64_request = new \SpectrumVoip\\\\NetSapiens\Model\CreateTemplateBase64Request(); // \SpectrumVoip\\\\NetSapiens\Model\CreateTemplateBase64Request

try {
    $result = $apiInstance->createTemplateBase64($filename, $create_template_base64_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->createTemplateBase64: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filename** | **string**|  | |
| **create_template_base64_request** | [**\SpectrumVoip\\\\NetSapiens\Model\CreateTemplateBase64Request**](../Model/CreateTemplateBase64Request.md)|  | [optional] |

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

## `deleteTemplate()`

```php
deleteTemplate($filename, $delete_template_request): object
```

Delete a Template

Delete a template file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filename = 'filename_example'; // string | 
$delete_template_request = new \SpectrumVoip\\\\NetSapiens\Model\DeleteTemplateRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DeleteTemplateRequest

try {
    $result = $apiInstance->deleteTemplate($filename, $delete_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->deleteTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filename** | **string**|  | |
| **delete_template_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DeleteTemplateRequest**](../Model/DeleteTemplateRequest.md)|  | [optional] |

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

## `readTemplate()`

```php
readTemplate($filename, $reseller, $domain, $server): \SpectrumVoip\\\\NetSapiens\Model\ReadImage200Response
```

Read Template

Read a template file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filename = 'filename_example'; // string | 
$reseller = ; // string | The reseller or territory the template file applies to. Defaults to \"*\"
$domain = ; // string | The domain the template file applies to. Defaults to \"*\"
$server = ; // string | The server the template file applies to. Defaults to \"*\"

try {
    $result = $apiInstance->readTemplate($filename, $reseller, $domain, $server);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->readTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filename** | **string**|  | |
| **reseller** | **string**| The reseller or territory the template file applies to. Defaults to \&quot;*\&quot; | [optional] |
| **domain** | **string**| The domain the template file applies to. Defaults to \&quot;*\&quot; | [optional] [default to &#39;~&#39;] |
| **server** | **string**| The server the template file applies to. Defaults to \&quot;*\&quot; | [optional] |

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

## `updateTemplateBase64()`

```php
updateTemplateBase64($filename, $update_template_base64_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Update Template from Upload (JSON + Base64 File)

Update a template file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filename = 'filename_example'; // string | 
$update_template_base64_request = new \SpectrumVoip\\\\NetSapiens\Model\UpdateTemplateBase64Request(); // \SpectrumVoip\\\\NetSapiens\Model\UpdateTemplateBase64Request

try {
    $result = $apiInstance->updateTemplateBase64($filename, $update_template_base64_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplatesApi->updateTemplateBase64: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filename** | **string**|  | |
| **update_template_base64_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateTemplateBase64Request**](../Model/UpdateTemplateBase64Request.md)|  | [optional] |

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
