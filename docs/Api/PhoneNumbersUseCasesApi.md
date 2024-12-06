# SpectrumVoip\\\\NetSapiens\PhoneNumbersUseCasesApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**updatePhonenumberAvailable()**](PhoneNumbersUseCasesApi.md#updatePhonenumberAvailable) | **PUT** /domains/{domain}/phonenumbers#3 | Move phonenumber back to Available in Inventory |
| [**updatePhonenumberOffnet()**](PhoneNumbersUseCasesApi.md#updatePhonenumberOffnet) | **PUT** /domains/{domain}/phonenumbersHACKHACK2 | Send Phonenumber to Offnet Number |
| [**updatePhonenumberQueue()**](PhoneNumbersUseCasesApi.md#updatePhonenumberQueue) | **PUT** /domains/{domain}/phonenumbers | Send Phonenumber to Call Queue |
| [**updatePhonenumberUser()**](PhoneNumbersUseCasesApi.md#updatePhonenumberUser) | **PUT** /domains/{domain}/phonenumbers#1 | Send Phonenumber to a User |


## `updatePhonenumberAvailable()`

```php
updatePhonenumberAvailable($domain, $update_phonenumber_queue_request): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Move phonenumber back to Available in Inventory

This API example will move the number back to available in the domain's invenetory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhoneNumbersUseCasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$update_phonenumber_queue_request = {"phonenumber":"{{demo_phonenumber}}","responder":"AvailableDID","parameter":"<NULL>","from_name":"[*]","to_user":"[*]","to_host":"{{domain}}","plan_description":"Available Number"}; // \SpectrumVoip\\\\NetSapiens\Model\UpdatePhonenumberQueueRequest

try {
    $result = $apiInstance->updatePhonenumberAvailable($domain, $update_phonenumber_queue_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersUseCasesApi->updatePhonenumberAvailable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **update_phonenumber_queue_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdatePhonenumberQueueRequest**](../Model/UpdatePhonenumberQueueRequest.md)|  | [optional] |

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

## `updatePhonenumberOffnet()`

```php
updatePhonenumberOffnet($domain, $update_phonenumber_queue_request): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Send Phonenumber to Offnet Number

This API example will forward a owned number to an offnet number. It shows ability to add a header and using a responder application that will keep call ownership with the domain for billing needs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhoneNumbersUseCasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$update_phonenumber_queue_request = {"phonenumber":"{{demo_phonenumber}}","responder":"To-Conn-For-DNIS-Add-Header","parameter":"P-Charge-Info: <LT>sip:{{demo_phonenumber}}@<AppIP><GT>","to_user":"18005551234","to_host":"{{domain}}","plan_description":"Forward phonenumber ({{demo_phonenumber}}) to PSTN number 18005551234"}; // \SpectrumVoip\\\\NetSapiens\Model\UpdatePhonenumberQueueRequest

try {
    $result = $apiInstance->updatePhonenumberOffnet($domain, $update_phonenumber_queue_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersUseCasesApi->updatePhonenumberOffnet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **update_phonenumber_queue_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdatePhonenumberQueueRequest**](../Model/UpdatePhonenumberQueueRequest.md)|  | [optional] |

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

## `updatePhonenumberQueue()`

```php
updatePhonenumberQueue($domain, $update_phonenumber_queue_request): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Send Phonenumber to Call Queue

This API will allow updating of an existing number in a domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhoneNumbersUseCasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$update_phonenumber_queue_request = {"phonenumber":"{{demo_phonenumber}}","responder":"sip:start@call-queuing","to_user":"3000","to_host":"{{domain}}","plan_description":"For Marketing to Queue"}; // \SpectrumVoip\\\\NetSapiens\Model\UpdatePhonenumberQueueRequest

try {
    $result = $apiInstance->updatePhonenumberQueue($domain, $update_phonenumber_queue_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersUseCasesApi->updatePhonenumberQueue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **update_phonenumber_queue_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdatePhonenumberQueueRequest**](../Model/UpdatePhonenumberQueueRequest.md)|  | [optional] |

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

## `updatePhonenumberUser()`

```php
updatePhonenumberUser($domain, $update_phonenumber_queue_request): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Send Phonenumber to a User

This API will allow updating of an existing number in a domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhoneNumbersUseCasesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$update_phonenumber_queue_request = {"phonenumber":"{{demo_phonenumber}}","responder":"to-user","to_user":"1234","to_host":"{{domain}}","plan_description":"For Marketing to Queue"}; // \SpectrumVoip\\\\NetSapiens\Model\UpdatePhonenumberQueueRequest

try {
    $result = $apiInstance->updatePhonenumberUser($domain, $update_phonenumber_queue_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhoneNumbersUseCasesApi->updatePhonenumberUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **update_phonenumber_queue_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdatePhonenumberQueueRequest**](../Model/UpdatePhonenumberQueueRequest.md)|  | [optional] |

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
