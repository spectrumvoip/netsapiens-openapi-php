# SpectrumVoip\\\\NetSapiens\PhoneNumbersApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**countDomainPhonenumbers()**](PhoneNumbersApi.md#countDomainPhonenumbers) | **GET** /domains/{domain}/phonenumbers/count | Count Phone Numbers for Domain |
| [**createPhonenumber()**](PhoneNumbersApi.md#createPhonenumber) | **POST** /domains/{domain}/phonenumbers | Add Phone Number in Domain |
| [**deletePhonenumber()**](PhoneNumbersApi.md#deletePhonenumber) | **DELETE** /domains/{domain}/phonenumbers/{phonenumber} | Remove Phone Number from Domain |
| [**getDomainPhonenumbers()**](PhoneNumbersApi.md#getDomainPhonenumbers) | **GET** /domains/{domain}/phonenumbers | Get All Phone Numbers for Domain |
| [**getPhonenumber()**](PhoneNumbersApi.md#getPhonenumber) | **GET** /domains/{domain}/phonenumbers/{phonenumber} | Get Specific Phone Number in Domain |
| [**getPhonenumbers()**](PhoneNumbersApi.md#getPhonenumbers) | **GET** /phonenumbers | Get All Phone Numbers for System or Reseller |
| [**updatePhonenumber()**](PhoneNumbersApi.md#updatePhonenumber) | **PUT** /domains/{domain}/phonenumbers/{phonenumber} | Update Phone Number in Domain |


## `countDomainPhonenumbers()`

```php
countDomainPhonenumbers($domain): \SpectrumVoip\\\\NetSapiens\Model\Count
```

Count Phone Numbers for Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 

try {
    $result = $apiInstance->countDomainPhonenumbers($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->countDomainPhonenumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

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

## `createPhonenumber()`

```php
createPhonenumber($domain, $create_phonenumber_request): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Add Phone Number in Domain

This will allow adding a phone number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$create_phonenumber_request = {"phonenumber":"{{demo_phonenumber}}","enabled":"yes","dial-rule-matching-start-date":"*","dial-rule-matching-end-date":"*","dial-rule-application":"available-number","dial-rule-translation-destination-user":"[*]","dial-rule-translation-destination-host":"[*]","dial-rule-translation-source-name":"[*]","dial-rule-description":"Test Number"}; // \SpectrumVoip\\\\NetSapiens\Model\CreatePhonenumberRequest

try {
    $result = $apiInstance->createPhonenumber($domain, $create_phonenumber_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->createPhonenumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **create_phonenumber_request** | [**\SpectrumVoip\\\\NetSapiens\Model\CreatePhonenumberRequest**](../Model/CreatePhonenumberRequest.md)|  | [optional] |

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

## `deletePhonenumber()`

```php
deletePhonenumber($domain, $phonenumber): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Remove Phone Number from Domain

This will allow adding a phone number.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$phonenumber = {{demo_phonenumber}}; // string | 

try {
    $result = $apiInstance->deletePhonenumber($domain, $phonenumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->deletePhonenumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **phonenumber** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\SuccessResponse**](../Model/SuccessResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDomainPhonenumbers()`

```php
getDomainPhonenumbers($domain): \SpectrumVoip\\\\NetSapiens\Model\Phonenumber[]
```

Get All Phone Numbers for Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 

try {
    $result = $apiInstance->getDomainPhonenumbers($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->getDomainPhonenumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Phonenumber[]**](../Model/Phonenumber.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPhonenumber()`

```php
getPhonenumber($domain, $phonenumber): \SpectrumVoip\\\\NetSapiens\Model\Phonenumber
```

Get Specific Phone Number in Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$phonenumber = {{demo_phonenumber}}; // string | 

try {
    $result = $apiInstance->getPhonenumber($domain, $phonenumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->getPhonenumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **phonenumber** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Phonenumber**](../Model/Phonenumber.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPhonenumbers()`

```php
getPhonenumbers(): \SpectrumVoip\\\\NetSapiens\Model\Phonenumber[]
```

Get All Phone Numbers for System or Reseller

This path will give you all Phonenumbers (DIDs) that are accessable based on the access rights of the Access Token or API Key used to make the requests. Super User or Reseller both supported, but for per domain lookups you should use /domains/{domain}/phonenumbers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPhonenumbers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->getPhonenumbers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Phonenumber[]**](../Model/Phonenumber.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePhonenumber()`

```php
updatePhonenumber($domain, $phonenumber, $update_phonenumber_request): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Update Phone Number in Domain

This API will allow updating of an existing number in a domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhoneNumbersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$phonenumber = {{demo_phonenumber}}; // string | 
$update_phonenumber_request = {"phonenumber":"{{demo_phonenumber}}","responder":"sip:start@call-queuing","to_user":"3000","to_host":"{{domain}}","plan_description":"For Marketing to Queue"}; // \SpectrumVoip\\\\NetSapiens\Model\UpdatePhonenumberRequest

try {
    $result = $apiInstance->updatePhonenumber($domain, $phonenumber, $update_phonenumber_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersApi->updatePhonenumber: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **phonenumber** | **string**|  | |
| **update_phonenumber_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdatePhonenumberRequest**](../Model/UpdatePhonenumberRequest.md)|  | [optional] |

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
