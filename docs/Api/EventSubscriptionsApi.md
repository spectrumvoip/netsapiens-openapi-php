# SpectrumVoip\\\\NetSapiens\EventSubscriptionsApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSubscription()**](EventSubscriptionsApi.md#createSubscription) | **POST** /subscriptions | Create a Event Subscription |
| [**deleteSubscription()**](EventSubscriptionsApi.md#deleteSubscription) | **DELETE** /subscriptions/{id} | Delete a subscription |
| [**readSubscription()**](EventSubscriptionsApi.md#readSubscription) | **GET** /subscriptions/{id} | Read Event Subscription By Id |
| [**readSubscriptions()**](EventSubscriptionsApi.md#readSubscriptions) | **GET** /subscriptions | Read Event Subscriptions |
| [**updateSubscription()**](EventSubscriptionsApi.md#updateSubscription) | **PUT** /subscriptions/{id} | Update an Event Subscription |


## `createSubscription()`

```php
createSubscription($create_subscription_request): object
```

Create a Event Subscription



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\EventSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_subscription_request = {"post-url":"https://local.netsapiens.com/log.php","model":"call","user":"*","reseller":"*","domain":"*","user-scope":"Super User","subscription-geo-support":"yes","server_preferred":"eng0-san.netsapiens.com"}; // \SpectrumVoip\\\\NetSapiens\Model\CreateSubscriptionRequest

try {
    $result = $apiInstance->createSubscription($create_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriptionsApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_subscription_request** | [**\SpectrumVoip\\\\NetSapiens\Model\CreateSubscriptionRequest**](../Model/CreateSubscriptionRequest.md)|  | [optional] |

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

## `deleteSubscription()`

```php
deleteSubscription($id): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Delete a subscription



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\EventSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | 

try {
    $result = $apiInstance->deleteSubscription($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriptionsApi->deleteSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `readSubscription()`

```php
readSubscription($id): \SpectrumVoip\\\\NetSapiens\Model\Subscription
```

Read Event Subscription By Id



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\EventSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = a4a8d60aa4d735f8f16087143ba5500f; // string | 

try {
    $result = $apiInstance->readSubscription($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriptionsApi->readSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readSubscriptions()`

```php
readSubscriptions(): \SpectrumVoip\\\\NetSapiens\Model\Subscription[]
```

Read Event Subscriptions



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\EventSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->readSubscriptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriptionsApi->readSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubscription()`

```php
updateSubscription($id, $update_subscription_request): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Update an Event Subscription



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\EventSubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 369a5b1f9afa32c060167b68c225f8d0; // string | 
$update_subscription_request = {"post-url":"https://local.netsapiens.com/event2","error-count":0,"posts-count":0}; // \SpectrumVoip\\\\NetSapiens\Model\UpdateSubscriptionRequest

try {
    $result = $apiInstance->updateSubscription($id, $update_subscription_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventSubscriptionsApi->updateSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **update_subscription_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateSubscriptionRequest**](../Model/UpdateSubscriptionRequest.md)|  | [optional] |

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
