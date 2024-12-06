# SpectrumVoip\\\\NetSapiens\ResellersApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createReseller()**](ResellersApi.md#createReseller) | **POST** /resellers | Create Reseller |
| [**deleteReseller()**](ResellersApi.md#deleteReseller) | **DELETE** /resellers/{reseller} | Delete Reseller |
| [**getReseller()**](ResellersApi.md#getReseller) | **GET** /resellers/{reseller} | Get Specific Reseller |
| [**getResellers()**](ResellersApi.md#getResellers) | **GET** /resellers | Get Resellers |
| [**updateReseller()**](ResellersApi.md#updateReseller) | **PUT** /resellers/{reseller} | Update Reseller |


## `createReseller()`

```php
createReseller($create_reseller_request): \SpectrumVoip\\\\NetSapiens\Model\Reseller[]
```

Create Reseller



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ResellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_reseller_request = {"reseller":"MyResellerXYZ","description":"Acme UCaaS Services","smtp_host":"email-smtp.us-west-2.amazonaws.com","smtp_port":587,"smtp_pwd":"32432432423142clsdfkds23sdfassalfwlk23","smtp_uid":"567yhyfghsdfvms-dsl4345tryerwe"}; // \SpectrumVoip\\\\NetSapiens\Model\CreateResellerRequest

try {
    $result = $apiInstance->createReseller($create_reseller_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellersApi->createReseller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_reseller_request** | [**\SpectrumVoip\\\\NetSapiens\Model\CreateResellerRequest**](../Model/CreateResellerRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Reseller[]**](../Model/Reseller.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteReseller()`

```php
deleteReseller($reseller): \SpectrumVoip\\\\NetSapiens\Model\Reseller[]
```

Delete Reseller



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ResellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reseller = ; // string | 

try {
    $result = $apiInstance->deleteReseller($reseller);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellersApi->deleteReseller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reseller** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Reseller[]**](../Model/Reseller.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReseller()`

```php
getReseller($reseller): \SpectrumVoip\\\\NetSapiens\Model\Reseller
```

Get Specific Reseller



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ResellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reseller = {{reseller}}; // string | 

try {
    $result = $apiInstance->getReseller($reseller);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellersApi->getReseller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reseller** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Reseller**](../Model/Reseller.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getResellers()`

```php
getResellers(): \SpectrumVoip\\\\NetSapiens\Model\Reseller[]
```

Get Resellers



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ResellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getResellers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellersApi->getResellers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Reseller[]**](../Model/Reseller.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReseller()`

```php
updateReseller($reseller, $update_reseller_request): \SpectrumVoip\\\\NetSapiens\Model\Reseller[]
```

Update Reseller



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ResellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reseller = {{reseller}}; // string | 
$update_reseller_request = {"territory":"MyReseller","description":"Acme UCaaS Services Unlimited!"}; // \SpectrumVoip\\\\NetSapiens\Model\UpdateResellerRequest

try {
    $result = $apiInstance->updateReseller($reseller, $update_reseller_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResellersApi->updateReseller: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reseller** | **string**|  | |
| **update_reseller_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateResellerRequest**](../Model/UpdateResellerRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Reseller[]**](../Model/Reseller.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
