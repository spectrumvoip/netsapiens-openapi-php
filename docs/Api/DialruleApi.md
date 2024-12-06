# SpectrumVoip\\\\NetSapiens\DialruleApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDialrule()**](DialruleApi.md#createDialrule) | **POST** /domains/{domain}/dialplans/{dialplan}/dialrules | Add a new dial rule into a dial plan |
| [**deleteDialrule()**](DialruleApi.md#deleteDialrule) | **DELETE** /domains/{domain}/dialplans/{dialplan}/dialrules/{dialrule} | Delete a dial rule by ID in a dial plan |
| [**readDialrule()**](DialruleApi.md#readDialrule) | **GET** /domains/{domain}/dialplans/{dialplan}/dialrules/{dialrule} | Read Specific Dialrule in a Dialplan |
| [**readDialrules()**](DialruleApi.md#readDialrules) | **GET** /domains/{domain}/dialplans/{dialplan}/dialrules | Read Dialrules in a Dialplan |
| [**updateDialrule()**](DialruleApi.md#updateDialrule) | **PUT** /domains/{domain}/dialplans/{dialplan}/dialrules/{dialrule} | Update a dial rule by ID in a dial plan |


## `createDialrule()`

```php
createDialrule($domain, $dialplan, $create_dialrule_request): \SpectrumVoip\\\\NetSapiens\Model\DialRule
```

Add a new dial rule into a dial plan



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\DialruleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$dialplan = 'dialplan_example'; // string | 
$create_dialrule_request = {"synchronous":"yes","dail-rule-matching-to-uri":"sip:611@*","dail-rule-matching-from-uri":"*","enabled":"yes","dial-rule-translation-source-name":"611 - [*]","dial-rule-translation-source-user":"[*]","dial-rule-translation-source-host":"[*]","dial-rule-application":"to-callqueue","dial-rule-translation-destination-user":"{{queue}}","dial-rule-translation-destination-host":"{{domain}}","dial-rule-description":"611 - Customer Service Direct Dial"}; // \SpectrumVoip\\\\NetSapiens\Model\CreateDialruleRequest

try {
    $result = $apiInstance->createDialrule($domain, $dialplan, $create_dialrule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DialruleApi->createDialrule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **dialplan** | **string**|  | |
| **create_dialrule_request** | [**\SpectrumVoip\\\\NetSapiens\Model\CreateDialruleRequest**](../Model/CreateDialruleRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DialRule**](../Model/DialRule.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDialrule()`

```php
deleteDialrule($domain, $dialplan, $dialrule): object
```

Delete a dial rule by ID in a dial plan



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\DialruleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$dialplan = {{domain}}; // string | 
$dialrule = 'dialrule_example'; // string | 

try {
    $result = $apiInstance->deleteDialrule($domain, $dialplan, $dialrule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DialruleApi->deleteDialrule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **dialplan** | **string**|  | |
| **dialrule** | **string**|  | |

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

## `readDialrule()`

```php
readDialrule($domain, $dialplan, $dialrule): \SpectrumVoip\\\\NetSapiens\Model\DialRule
```

Read Specific Dialrule in a Dialplan



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\DialruleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$dialplan = {{domain}}; // string | 
$dialrule = c2lwOjYxMUAq; // string | 

try {
    $result = $apiInstance->readDialrule($domain, $dialplan, $dialrule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DialruleApi->readDialrule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **dialplan** | **string**|  | |
| **dialrule** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DialRule**](../Model/DialRule.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readDialrules()`

```php
readDialrules($domain, $dialplan): \SpectrumVoip\\\\NetSapiens\Model\DialRule[]
```

Read Dialrules in a Dialplan



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\DialruleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$dialplan = {{domain}}; // string | 

try {
    $result = $apiInstance->readDialrules($domain, $dialplan);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DialruleApi->readDialrules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **dialplan** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DialRule[]**](../Model/DialRule.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDialrule()`

```php
updateDialrule($domain, $dialplan, $dialrule, $update_dialrule_request): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Update a dial rule by ID in a dial plan



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\DialruleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$dialplan = {{domain}}; // string | 
$dialrule = 'dialrule_example'; // string | 
$update_dialrule_request = {"enable":"yes","from_name":"611 - [*]","from_user":"[*]","from_host":"<OwnDomain>","plan_description":"611 - (updated)"}; // \SpectrumVoip\\\\NetSapiens\Model\UpdateDialruleRequest

try {
    $result = $apiInstance->updateDialrule($domain, $dialplan, $dialrule, $update_dialrule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DialruleApi->updateDialrule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **dialplan** | **string**|  | |
| **dialrule** | **string**|  | |
| **update_dialrule_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateDialruleRequest**](../Model/UpdateDialruleRequest.md)|  | [optional] |

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
