# SpectrumVoip\\\\NetSapiens\CallsLiveActiveCallsApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainCallsCountGet()**](CallsLiveActiveCallsApi.md#domainsDomainCallsCountGet) | **GET** /domains/{domain}/calls/count | Count Active Calls In Domain |
| [**domainsDomainCallsGet()**](CallsLiveActiveCallsApi.md#domainsDomainCallsGet) | **GET** /domains/{domain}/calls | Read Active Calls In Domain |
| [**domainsDomainUsersUserCallsCallIdAnswerPatch()**](CallsLiveActiveCallsApi.md#domainsDomainUsersUserCallsCallIdAnswerPatch) | **PATCH** /domains/{domain}/users/{user}/calls/{call_id}/answer | Answer Call |
| [**domainsDomainUsersUserCallsCallIdDelete()**](CallsLiveActiveCallsApi.md#domainsDomainUsersUserCallsCallIdDelete) | **DELETE** /domains/{domain}/users/{user}/calls/{call_id} | Disconnect Call |
| [**domainsDomainUsersUserCallsCallIdHoldPatch()**](CallsLiveActiveCallsApi.md#domainsDomainUsersUserCallsCallIdHoldPatch) | **PATCH** /domains/{domain}/users/{user}/calls/{call_id}/hold | Hold Active Call |
| [**domainsDomainUsersUserCallsCallIdTransferPatch()**](CallsLiveActiveCallsApi.md#domainsDomainUsersUserCallsCallIdTransferPatch) | **PATCH** /domains/{domain}/users/{user}/calls/{call_id}/transfer | Transfer Call |
| [**domainsDomainUsersUserCallsCallIdUnholdPatch()**](CallsLiveActiveCallsApi.md#domainsDomainUsersUserCallsCallIdUnholdPatch) | **PATCH** /domains/{domain}/users/{user}/calls/{call_id}/unhold | Un-Hold Active Call |
| [**domainsDomainUsersUserCallsCallidGet()**](CallsLiveActiveCallsApi.md#domainsDomainUsersUserCallsCallidGet) | **GET** /domains/{domain}/users/{user}/calls/{callid} | Read Specific Actice Call |
| [**domainsDomainUsersUserCallsGet()**](CallsLiveActiveCallsApi.md#domainsDomainUsersUserCallsGet) | **GET** /domains/{domain}/users/{user}/calls | Read Active Calls for User |
| [**domainsDomainUsersUserCallsPost()**](CallsLiveActiveCallsApi.md#domainsDomainUsersUserCallsPost) | **POST** /domains/{domain}/users/{user}/calls | Make a new Call |


## `domainsDomainCallsCountGet()`

```php
domainsDomainCallsCountGet($domain): \SpectrumVoip\\\\NetSapiens\Model\Count
```

Count Active Calls In Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallsLiveActiveCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 

try {
    $result = $apiInstance->domainsDomainCallsCountGet($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsLiveActiveCallsApi->domainsDomainCallsCountGet: ', $e->getMessage(), PHP_EOL;
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

## `domainsDomainCallsGet()`

```php
domainsDomainCallsGet($domain): \SpectrumVoip\\\\NetSapiens\Model\ActiveCall[]
```

Read Active Calls In Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallsLiveActiveCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 

try {
    $result = $apiInstance->domainsDomainCallsGet($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsLiveActiveCallsApi->domainsDomainCallsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\ActiveCall[]**](../Model/ActiveCall.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserCallsCallIdAnswerPatch()`

```php
domainsDomainUsersUserCallsCallIdAnswerPatch($domain, $user, $call_id, $call_actions): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Answer Call



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallsLiveActiveCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$call_id = pg7wit1ulu0pk9ru; // string | 
$call_actions = {"destination":"sip:{{user}}wp@{{domain}}"}; // \SpectrumVoip\\\\NetSapiens\Model\CallActions

try {
    $result = $apiInstance->domainsDomainUsersUserCallsCallIdAnswerPatch($domain, $user, $call_id, $call_actions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsLiveActiveCallsApi->domainsDomainUsersUserCallsCallIdAnswerPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **call_id** | **string**|  | |
| **call_actions** | [**\SpectrumVoip\\\\NetSapiens\Model\CallActions**](../Model/CallActions.md)|  | [optional] |

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

## `domainsDomainUsersUserCallsCallIdDelete()`

```php
domainsDomainUsersUserCallsCallIdDelete($domain, $user, $call_id): object
```

Disconnect Call



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallsLiveActiveCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$user = '~'; // string | 
$call_id = 'call_id_example'; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserCallsCallIdDelete($domain, $user, $call_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsLiveActiveCallsApi->domainsDomainUsersUserCallsCallIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **call_id** | **string**|  | |

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

## `domainsDomainUsersUserCallsCallIdHoldPatch()`

```php
domainsDomainUsersUserCallsCallIdHoldPatch($domain, $user, $call_id): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Hold Active Call



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallsLiveActiveCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$call_id = pg7wit1ulu0pk9ru; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserCallsCallIdHoldPatch($domain, $user, $call_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsLiveActiveCallsApi->domainsDomainUsersUserCallsCallIdHoldPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **call_id** | **string**|  | |

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

## `domainsDomainUsersUserCallsCallIdTransferPatch()`

```php
domainsDomainUsersUserCallsCallIdTransferPatch($domain, $user, $call_id, $call_actions): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Transfer Call



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallsLiveActiveCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$call_id = zq3foox8rnkwjycu; // string | 
$call_actions = {"destination":"18587625200"}; // \SpectrumVoip\\\\NetSapiens\Model\CallActions

try {
    $result = $apiInstance->domainsDomainUsersUserCallsCallIdTransferPatch($domain, $user, $call_id, $call_actions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsLiveActiveCallsApi->domainsDomainUsersUserCallsCallIdTransferPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **call_id** | **string**|  | |
| **call_actions** | [**\SpectrumVoip\\\\NetSapiens\Model\CallActions**](../Model/CallActions.md)|  | [optional] |

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

## `domainsDomainUsersUserCallsCallIdUnholdPatch()`

```php
domainsDomainUsersUserCallsCallIdUnholdPatch($domain, $user, $call_id): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Un-Hold Active Call



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallsLiveActiveCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$call_id = pg7wit1ulu0pk9ru; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserCallsCallIdUnholdPatch($domain, $user, $call_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsLiveActiveCallsApi->domainsDomainUsersUserCallsCallIdUnholdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **call_id** | **string**|  | |

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

## `domainsDomainUsersUserCallsCallidGet()`

```php
domainsDomainUsersUserCallsCallidGet($domain, $user, $callid): \SpectrumVoip\\\\NetSapiens\Model\ActiveCall
```

Read Specific Actice Call



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallsLiveActiveCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$user = '~'; // string | 
$callid = 'callid_example'; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserCallsCallidGet($domain, $user, $callid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsLiveActiveCallsApi->domainsDomainUsersUserCallsCallidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **callid** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\ActiveCall**](../Model/ActiveCall.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserCallsGet()`

```php
domainsDomainUsersUserCallsGet($domain, $user): \SpectrumVoip\\\\NetSapiens\Model\ActiveCall[]
```

Read Active Calls for User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallsLiveActiveCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$user = '~'; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserCallsGet($domain, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsLiveActiveCallsApi->domainsDomainUsersUserCallsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\ActiveCall[]**](../Model/ActiveCall.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserCallsPost()`

```php
domainsDomainUsersUserCallsPost($domain, $user, $domains_domain_users_user_calls_post_request): object
```

Make a new Call



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallsLiveActiveCallsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$domains_domain_users_user_calls_post_request = {"synchronous":"yes","call-id":"{% faker random.alphaNumeric(16) %}","dial-rule-application":"call","call-orig-user":"19168475801","call-term-user":"18587645200","auto-answer-enabled":"no","call-term-added-sip-header":"X-Netsapiens: TestHeader","caller-id-number":"18587645226","callback-caller-id-number":"18587645226"}; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserCallsPostRequest

try {
    $result = $apiInstance->domainsDomainUsersUserCallsPost($domain, $user, $domains_domain_users_user_calls_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallsLiveActiveCallsApi->domainsDomainUsersUserCallsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_users_user_calls_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserCallsPostRequest**](../Model/DomainsDomainUsersUserCallsPostRequest.md)|  | [optional] |

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
