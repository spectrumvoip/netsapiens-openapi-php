# SpectrumVoip\\\\NetSapiens\SMSNumbersApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countSmsNumbers()**](SMSNumbersApi.md#countSmsNumbers) | **GET** /domains/{domain}/users/{user}/smsnumbers/count | Count SMS Numbers for User |
| [**createSMSNumber()**](SMSNumbersApi.md#createSMSNumber) | **POST** /domains/{domain}/smsnumbers | Create SMS Number |
| [**deleteSMSNumber()**](SMSNumbersApi.md#deleteSMSNumber) | **DELETE** /domains/{domain}/smsnumbers/{smsnumber} | Delete an SMS Number |
| [**getAllSMSNumbersSystem()**](SMSNumbersApi.md#getAllSMSNumbersSystem) | **GET** /smsnumbers | Get All SMS Numbers for System |
| [**getSmsNumbersForDomain()**](SMSNumbersApi.md#getSmsNumbersForDomain) | **GET** /domains/{domain}/smsnumbers | Get SMS Numbers for Domain |
| [**getSmsNumbersForUser()**](SMSNumbersApi.md#getSmsNumbersForUser) | **GET** /domains/{domain}/users/{user}/smsnumbers | Get SMS Numbers for User |
| [**updateSMSNumber()**](SMSNumbersApi.md#updateSMSNumber) | **PUT** /domains/{domain}/smsnumbers/{smsnumber} | Update SMS Number Copy |


## `countSmsNumbers()`

```php
countSmsNumbers($domain, $user): \SpectrumVoip\\\\NetSapiens\Model\CountSmsNumbers200Response
```

Count SMS Numbers for User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\SMSNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$user = '~'; // string | 

try {
    $result = $apiInstance->countSmsNumbers($domain, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSNumbersApi->countSmsNumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\CountSmsNumbers200Response**](../Model/CountSmsNumbers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSMSNumber()`

```php
createSMSNumber($domain, $create_sms_number_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Create SMS Number



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\SMSNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$create_sms_number_request = {"number":"18586451230","application":"user","dest":"2500"}; // \SpectrumVoip\\\\NetSapiens\Model\CreateSMSNumberRequest

try {
    $result = $apiInstance->createSMSNumber($domain, $create_sms_number_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSNumbersApi->createSMSNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **create_sms_number_request** | [**\SpectrumVoip\\\\NetSapiens\Model\CreateSMSNumberRequest**](../Model/CreateSMSNumberRequest.md)|  | [optional] |

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

## `deleteSMSNumber()`

```php
deleteSMSNumber($domain, $smsnumber): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Delete an SMS Number



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\SMSNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$smsnumber = 'smsnumber_example'; // string | 

try {
    $result = $apiInstance->deleteSMSNumber($domain, $smsnumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSNumbersApi->deleteSMSNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **smsnumber** | **string**|  | |

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

## `getAllSMSNumbersSystem()`

```php
getAllSMSNumbersSystem(): \SpectrumVoip\\\\NetSapiens\Model\SmsNumber[]
```

Get All SMS Numbers for System



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\SMSNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllSMSNumbersSystem();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSNumbersApi->getAllSMSNumbersSystem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\SmsNumber[]**](../Model/SmsNumber.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmsNumbersForDomain()`

```php
getSmsNumbersForDomain($domain): \SpectrumVoip\\\\NetSapiens\Model\SmsNumber[]
```

Get SMS Numbers for Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\SMSNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 

try {
    $result = $apiInstance->getSmsNumbersForDomain($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSNumbersApi->getSmsNumbersForDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\SmsNumber[]**](../Model/SmsNumber.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmsNumbersForUser()`

```php
getSmsNumbersForUser($domain, $user): \SpectrumVoip\\\\NetSapiens\Model\SmsNumber[]
```

Get SMS Numbers for User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\SMSNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$user = '~'; // string | 

try {
    $result = $apiInstance->getSmsNumbersForUser($domain, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSNumbersApi->getSmsNumbersForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\SmsNumber[]**](../Model/SmsNumber.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSMSNumber()`

```php
updateSMSNumber($domain, $smsnumber, $update_sms_number_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Update SMS Number Copy



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\SMSNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$smsnumber = 'smsnumber_example'; // string | 
$update_sms_number_request = {"application":"user","dest":"2500"}; // \SpectrumVoip\\\\NetSapiens\Model\UpdateSMSNumberRequest

try {
    $result = $apiInstance->updateSMSNumber($domain, $smsnumber, $update_sms_number_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSNumbersApi->updateSMSNumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **smsnumber** | **string**|  | |
| **update_sms_number_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateSMSNumberRequest**](../Model/UpdateSMSNumberRequest.md)|  | [optional] |

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
