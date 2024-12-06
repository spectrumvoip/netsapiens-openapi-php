# SpectrumVoip\\\\NetSapiens\CallCenterAgentActionsApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**agentLogin()**](CallCenterAgentActionsApi.md#agentLogin) | **PATCH** /domains/{domain}/callqueues/{callqueue}/agents/{callqueue-agent-id}/login | Agent Login |
| [**agentLogout()**](CallCenterAgentActionsApi.md#agentLogout) | **PATCH** /domains/{domain}/callqueues/{callqueue}/agents/{callqueue-agent-id}/logout | Agent Logout |
| [**agentSingleCall()**](CallCenterAgentActionsApi.md#agentSingleCall) | **PATCH** /domains/{domain}/callqueues/{callqueue}/agents/{callqueue-agent-id}/onecall | Agent Single Call |
| [**agentStatus()**](CallCenterAgentActionsApi.md#agentStatus) | **PATCH** /domains/{domain}/callqueues/all/agents/{callqueue-agent-id}/{status} | Agent Set Offline Status |


## `agentLogin()`

```php
agentLogin($domain, $callqueue, $callqueue_agent_id): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Agent Login



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallCenterAgentActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$callqueue = all; // string | 
$callqueue_agent_id = 'callqueue_agent_id_example'; // string | 

try {
    $result = $apiInstance->agentLogin($domain, $callqueue, $callqueue_agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallCenterAgentActionsApi->agentLogin: ', $e->getMessage(), PHP_EOL;
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

## `agentLogout()`

```php
agentLogout($domain, $callqueue, $callqueue_agent_id): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Agent Logout



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallCenterAgentActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$callqueue = all; // string | 
$callqueue_agent_id = 'callqueue_agent_id_example'; // string | 

try {
    $result = $apiInstance->agentLogout($domain, $callqueue, $callqueue_agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallCenterAgentActionsApi->agentLogout: ', $e->getMessage(), PHP_EOL;
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

## `agentSingleCall()`

```php
agentSingleCall($domain, $callqueue, $callqueue_agent_id): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Agent Single Call



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallCenterAgentActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$callqueue = 2032; // string | 
$callqueue_agent_id = 'callqueue_agent_id_example'; // string | 

try {
    $result = $apiInstance->agentSingleCall($domain, $callqueue, $callqueue_agent_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallCenterAgentActionsApi->agentSingleCall: ', $e->getMessage(), PHP_EOL;
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

## `agentStatus()`

```php
agentStatus($domain, $callqueue_agent_id, $status): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Agent Set Offline Status



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\CallCenterAgentActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$callqueue_agent_id = 'callqueue_agent_id_example'; // string | 
$status = Lunch; // string | 

try {
    $result = $apiInstance->agentStatus($domain, $callqueue_agent_id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CallCenterAgentActionsApi->agentStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **callqueue_agent_id** | **string**|  | |
| **status** | **string**|  | |

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
