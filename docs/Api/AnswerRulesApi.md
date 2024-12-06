# SpectrumVoip\\\\NetSapiens\AnswerRulesApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainUsersUserAnswerrulesGet()**](AnswerRulesApi.md#domainsDomainUsersUserAnswerrulesGet) | **GET** /domains/{domain}/users/{user}/answerrules | Read Answerrules for a User |
| [**domainsDomainUsersUserAnswerrulesPost()**](AnswerRulesApi.md#domainsDomainUsersUserAnswerrulesPost) | **POST** /domains/{domain}/users/{user}/answerrules | Add a Answerrule for a User |
| [**domainsDomainUsersUserAnswerrulesReorderPut()**](AnswerRulesApi.md#domainsDomainUsersUserAnswerrulesReorderPut) | **PUT** /domains/{domain}/users/{user}/answerrules/reorder | Reorder Answerrules for my User |
| [**domainsDomainUsersUserAnswerrulesTimeframeDelete()**](AnswerRulesApi.md#domainsDomainUsersUserAnswerrulesTimeframeDelete) | **DELETE** /domains/{domain}/users/{user}/answerrules/{timeframe} | Delete a Answerrule for a User |
| [**domainsDomainUsersUserAnswerrulesTimeframeGet()**](AnswerRulesApi.md#domainsDomainUsersUserAnswerrulesTimeframeGet) | **GET** /domains/{domain}/users/{user}/answerrules/{timeframe} | Read Specifc Timeframe Answerrule for User |
| [**domainsDomainUsersUserAnswerrulesTimeframePut()**](AnswerRulesApi.md#domainsDomainUsersUserAnswerrulesTimeframePut) | **PUT** /domains/{domain}/users/{user}/answerrules/{timeframe} | Update a Answerrule for a User |
| [**domainsUsersAnswerrulesGet()**](AnswerRulesApi.md#domainsUsersAnswerrulesGet) | **GET** /domains/~/users/~/answerrules | Read Answerrules for my  User |


## `domainsDomainUsersUserAnswerrulesGet()`

```php
domainsDomainUsersUserAnswerrulesGet($domain, $user): \SpectrumVoip\\\\NetSapiens\Model\Answerrule[]
```

Read Answerrules for a User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AnswerRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserAnswerrulesGet($domain, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnswerRulesApi->domainsDomainUsersUserAnswerrulesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Answerrule[]**](../Model/Answerrule.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserAnswerrulesPost()`

```php
domainsDomainUsersUserAnswerrulesPost($domain, $user, $domains_domain_users_user_answerrules_post_request): object
```

Add a Answerrule for a User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AnswerRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$domains_domain_users_user_answerrules_post_request = {"time-frame":"Vacation","enabled":"yes","forward-always":{"enabled":"no","parameters":[18587645226]},"forward-on-busy":{"enabled":"no","parameters":[]},"do-not-disturb":{"enabled":"no"},"forward-when-unregistered":{"enabled":"yes","parameters":[18585551354]},"phone-numbers-to-reject":{"enabled":"yes","parameters":["anonymous","unknown"]},"forward-on-active":{"enabled":"no","parameters":[12545666,"id adipisicing est veniam","ad"]},"forward-no-answer":{"enabled":"no","parameters":[6154343]},"forward-on-spam-call":{"enabled":"yes","parameters":["vmail_1000"]},"call-screening":{"enabled":"no"},"simultaneous-ring":{"enabled":"no","parameters":[1234,3245,"1231wp",18587645200]}}; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesPostRequest

try {
    $result = $apiInstance->domainsDomainUsersUserAnswerrulesPost($domain, $user, $domains_domain_users_user_answerrules_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnswerRulesApi->domainsDomainUsersUserAnswerrulesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_users_user_answerrules_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesPostRequest**](../Model/DomainsDomainUsersUserAnswerrulesPostRequest.md)|  | [optional] |

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

## `domainsDomainUsersUserAnswerrulesReorderPut()`

```php
domainsDomainUsersUserAnswerrulesReorderPut($domain, $user, $domains_domain_users_user_answerrules_reorder_put_request_inner): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Reorder Answerrules for my User

To reorder the answerrules, give an array of time frames used in the user's current answerrules in the order desired. Please be sure to include all time frames and no extraneous ones. Be sure to include \"Default\" when necessary which is named \"*\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AnswerRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$domains_domain_users_user_answerrules_reorder_put_request_inner = [{"time-frame":"my-time-frame-b"},{"time-frame":"my-timeframe-a"},{"time-frame":"my-timeframe-c"}]; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPutRequestInner[]

try {
    $result = $apiInstance->domainsDomainUsersUserAnswerrulesReorderPut($domain, $user, $domains_domain_users_user_answerrules_reorder_put_request_inner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnswerRulesApi->domainsDomainUsersUserAnswerrulesReorderPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_users_user_answerrules_reorder_put_request_inner** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPutRequestInner[]**](../Model/DomainsDomainUsersUserAnswerrulesReorderPutRequestInner.md)|  | [optional] |

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

## `domainsDomainUsersUserAnswerrulesTimeframeDelete()`

```php
domainsDomainUsersUserAnswerrulesTimeframeDelete($domain, $user, $timeframe): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Delete a Answerrule for a User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AnswerRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$timeframe = ; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserAnswerrulesTimeframeDelete($domain, $user, $timeframe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnswerRulesApi->domainsDomainUsersUserAnswerrulesTimeframeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **timeframe** | **string**|  | |

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

## `domainsDomainUsersUserAnswerrulesTimeframeGet()`

```php
domainsDomainUsersUserAnswerrulesTimeframeGet($domain, $user, $timeframe): \SpectrumVoip\\\\NetSapiens\Model\Answerrule
```

Read Specifc Timeframe Answerrule for User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AnswerRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$timeframe = *; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserAnswerrulesTimeframeGet($domain, $user, $timeframe);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnswerRulesApi->domainsDomainUsersUserAnswerrulesTimeframeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **timeframe** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Answerrule**](../Model/Answerrule.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserAnswerrulesTimeframePut()`

```php
domainsDomainUsersUserAnswerrulesTimeframePut($domain, $user, $timeframe, $domains_domain_users_user_answerrules_timeframe_put_request): object
```

Update a Answerrule for a User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AnswerRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$timeframe = ; // string | 
$domains_domain_users_user_answerrules_timeframe_put_request = {"time_frame":"Vacation","enable":"yes","do-not-disturb":{"enable":"yes"},"forward-always":{"enable":"yes"}}; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesTimeframePutRequest

try {
    $result = $apiInstance->domainsDomainUsersUserAnswerrulesTimeframePut($domain, $user, $timeframe, $domains_domain_users_user_answerrules_timeframe_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnswerRulesApi->domainsDomainUsersUserAnswerrulesTimeframePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **timeframe** | **string**|  | |
| **domains_domain_users_user_answerrules_timeframe_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesTimeframePutRequest**](../Model/DomainsDomainUsersUserAnswerrulesTimeframePutRequest.md)|  | [optional] |

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

## `domainsUsersAnswerrulesGet()`

```php
domainsUsersAnswerrulesGet(): \SpectrumVoip\\\\NetSapiens\Model\Answerrule[]
```

Read Answerrules for my  User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AnswerRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->domainsUsersAnswerrulesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnswerRulesApi->domainsUsersAnswerrulesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Answerrule[]**](../Model/Answerrule.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
