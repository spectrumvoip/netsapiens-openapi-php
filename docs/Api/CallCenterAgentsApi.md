# SpectrumVoip\\\\NetSapiens\CallCenterAgentsApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAgent()**](CallCenterAgentsApi.md#createAgent) | **POST** /domains/{domain}/callqueues/{callqueue}/agents | Add Agent to Call Queue |
| [**deleteAgent()**](CallCenterAgentsApi.md#deleteAgent) | **DELETE** /domains/{domain}/callqueues/{callqueue}/agents/{callqueue-agent-id} | Remove Agent from Call Queue |
| [**readAgent()**](CallCenterAgentsApi.md#readAgent) | **GET** /domains/{domain}/callqueues/{callqueue}/agents/{callqueue-agent-id} | Read Specific Agent in Call Queue |
| [**readAgents()**](CallCenterAgentsApi.md#readAgents) | **GET** /domains/{domain}/callqueues/{callqueue}/agents | Read Agents in Call Queue |
| [**readAgentsDomain()**](CallCenterAgentsApi.md#readAgentsDomain) | **GET** /domains/{domain}/agents | Read Agents in Domain |
| [**updateAgent()**](CallCenterAgentsApi.md#updateAgent) | **PUT** /domains/{domain}/callqueues/{callqueue}/agents/{callqueue-agent-id} | Update Agent in Call Queue |


## `createAgent()`

```php
createAgent($domain, $callqueue, $create_agent_request): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Add Agent to Call Queue



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallCenterAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$callqueue = 2032; // string | 
$create_agent_request = {"callqueue-agent-id":"{{user}}@{{domain}}","callqueue-agent-availability-type":"automatic","limits-max-active-calls-total":2,"callqueue-agent-max-concurrent-sms-conversations":2,"callqueue-agent-answer-confirmation-enabled":"yes","auto-answer-enabled":"yes","callqueue-agent-wrap-up-allowance-seconds":10}; // \SpectrumVoip\\\\NetSapiens\Model\CreateAgentRequest

try {
    $result = $apiInstance->createAgent($domain, $callqueue, $create_agent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallCenterAgentsApi->createAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **callqueue** | **string**|  | |
| **create_agent_request** | [**\SpectrumVoip\\\\NetSapiens\Model\CreateAgentRequest**](../Model/CreateAgentRequest.md)|  | [optional] |

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

## `deleteAgent()`

```php
deleteAgent($domain, $callqueue, $callqueue_agent_id): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Remove Agent from Call Queue



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallCenterAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$callqueue = 6000; // string | 
$callqueue_agent_id = 'callqueue_agent_id_example'; // string | 

try {
    $result = $apiInstance->deleteAgent($domain, $callqueue, $callqueue_agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallCenterAgentsApi->deleteAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **callqueue** | **string**|  | |
| **callqueue_agent_id** | **string**|  | |

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

## `readAgent()`

```php
readAgent($domain, $callqueue, $callqueue_agent_id): \SpectrumVoip\\\\NetSapiens\Model\Agent
```

Read Specific Agent in Call Queue



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallCenterAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$callqueue = 2032; // string | 
$callqueue_agent_id = 'callqueue_agent_id_example'; // string | 

try {
    $result = $apiInstance->readAgent($domain, $callqueue, $callqueue_agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallCenterAgentsApi->readAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **callqueue** | **string**|  | |
| **callqueue_agent_id** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Agent**](../Model/Agent.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readAgents()`

```php
readAgents($domain, $callqueue): \SpectrumVoip\\\\NetSapiens\Model\Agent[]
```

Read Agents in Call Queue



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallCenterAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$callqueue = 2032; // string | 

try {
    $result = $apiInstance->readAgents($domain, $callqueue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallCenterAgentsApi->readAgents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **callqueue** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Agent[]**](../Model/Agent.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readAgentsDomain()`

```php
readAgentsDomain($domain): \SpectrumVoip\\\\NetSapiens\Model\Agent[]
```

Read Agents in Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallCenterAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 

try {
    $result = $apiInstance->readAgentsDomain($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallCenterAgentsApi->readAgentsDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Agent[]**](../Model/Agent.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAgent()`

```php
updateAgent($domain, $callqueue, $callqueue_agent_id, $update_agent_request): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Update Agent in Call Queue



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallCenterAgentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$callqueue = 2032; // string | 
$callqueue_agent_id = 'callqueue_agent_id_example'; // string | 
$update_agent_request = {"callqueue-agent-answer-confirmation-enabled":"no","callqueue-agent-availability-type":"manual","callqueue-agent-wrap-up-allowance-seconds":10,"auto-answer-enabled":"yes"}; // \SpectrumVoip\\\\NetSapiens\Model\UpdateAgentRequest

try {
    $result = $apiInstance->updateAgent($domain, $callqueue, $callqueue_agent_id, $update_agent_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallCenterAgentsApi->updateAgent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **callqueue** | **string**|  | |
| **callqueue_agent_id** | **string**|  | |
| **update_agent_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateAgentRequest**](../Model/UpdateAgentRequest.md)|  | [optional] |

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
