# SpectrumVoip\\\\NetSapiens\ConfigsConfigurationDefinitionsApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**configDefinitionsConfigNameDelete()**](ConfigsConfigurationDefinitionsApi.md#configDefinitionsConfigNameDelete) | **DELETE** /config-definitions/{config-name} | Delete Configuration Definition |
| [**configDefinitionsConfigNameGet()**](ConfigsConfigurationDefinitionsApi.md#configDefinitionsConfigNameGet) | **GET** /config-definitions/{config-name} | Read a Specific Configuration Definition |
| [**configDefinitionsConfigNamePut()**](ConfigsConfigurationDefinitionsApi.md#configDefinitionsConfigNamePut) | **PUT** /config-definitions/{config-name} | Update a Configuration Definition |
| [**configDefinitionsGet()**](ConfigsConfigurationDefinitionsApi.md#configDefinitionsGet) | **GET** /config-definitions | Read all Configuration Definitions |
| [**configDefinitionsPost()**](ConfigsConfigurationDefinitionsApi.md#configDefinitionsPost) | **POST** /config-definitions | Create a Configuration Definition |


## `configDefinitionsConfigNameDelete()`

```php
configDefinitionsConfigNameDelete($config_name): object
```

Delete Configuration Definition

This will delete the configuration definition and all configurations that match the name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConfigsConfigurationDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config_name = PORTAL_NEW_CUSTOM_CONFIG_API_DOG; // string | 

try {
    $result = $apiInstance->configDefinitionsConfigNameDelete($config_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsConfigurationDefinitionsApi->configDefinitionsConfigNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **config_name** | **string**|  | |

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

## `configDefinitionsConfigNameGet()`

```php
configDefinitionsConfigNameGet($config_name, $tags, $start, $limit, $sort): \SpectrumVoip\\\\NetSapiens\Model\ConfigDefinitionsConfigNameGet200ResponseInner[]
```

Read a Specific Configuration Definition



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConfigsConfigurationDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config_name = PORTAL_NEW_CUSTOM_CONFIG; // string | To read definitions for all configurations, use \"*\"
$tags = portal,emergency; // string | An optional comma seperated list of tags the definition to search has. To search all configs with the tags, set config-name to \"*\"
$start = ; // int | 
$limit = ; // int | Default to 100
$sort = ; // string | Defaults to \"code_version desc,config_name asc\"

try {
    $result = $apiInstance->configDefinitionsConfigNameGet($config_name, $tags, $start, $limit, $sort);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsConfigurationDefinitionsApi->configDefinitionsConfigNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **config_name** | **string**| To read definitions for all configurations, use \&quot;*\&quot; | |
| **tags** | **string**| An optional comma seperated list of tags the definition to search has. To search all configs with the tags, set config-name to \&quot;*\&quot; | [optional] |
| **start** | **int**|  | [optional] |
| **limit** | **int**| Default to 100 | [optional] |
| **sort** | **string**| Defaults to \&quot;code_version desc,config_name asc\&quot; | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\ConfigDefinitionsConfigNameGet200ResponseInner[]**](../Model/ConfigDefinitionsConfigNameGet200ResponseInner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configDefinitionsConfigNamePut()`

```php
configDefinitionsConfigNamePut($config_name, $config_definitions_config_name_put_request): object
```

Update a Configuration Definition



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConfigsConfigurationDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config_name = PORTAL_NEW_CUSTOM_CONFIG_API_DOG; // string | 
$config_definitions_config_name_put_request = {"config-name":"PORTAL_NEW_CUSTOM_CONFIG_API_DOG","description":"Sample configuration definition from api dog","default":"no","data-type":"string","code-version":"v44.0","config-def-default-basic-user":"","config-def-default-call-center-supervisor":"","config-def-default-office-manager":"","config-def-default-reseller":"","config-def-default-super-user":"","config-def-allow-hostname":"yes","config-def-allow-reseller-access":"yes","tags":"portal,sample"}; // \SpectrumVoip\\\\NetSapiens\Model\ConfigDefinitionsConfigNamePutRequest

try {
    $result = $apiInstance->configDefinitionsConfigNamePut($config_name, $config_definitions_config_name_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsConfigurationDefinitionsApi->configDefinitionsConfigNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **config_name** | **string**|  | |
| **config_definitions_config_name_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\ConfigDefinitionsConfigNamePutRequest**](../Model/ConfigDefinitionsConfigNamePutRequest.md)|  | [optional] |

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

## `configDefinitionsGet()`

```php
configDefinitionsGet(): \SpectrumVoip\\\\NetSapiens\Model\ConfigDefinition[]
```

Read all Configuration Definitions



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConfigsConfigurationDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->configDefinitionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsConfigurationDefinitionsApi->configDefinitionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\ConfigDefinition[]**](../Model/ConfigDefinition.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `configDefinitionsPost()`

```php
configDefinitionsPost($config_definition): object
```

Create a Configuration Definition



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConfigsConfigurationDefinitionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config_definition = {"config-name":"PORTAL_NEW_CUSTOM_CONFIG_API_DOG","description":"Sample configuration definition from api dog","default":"yes","data-type":"string","code-version":"v44.0","config-def-default-basic-user":"no","config-def-default-call-center-supervisor":"","config-def-default-office-manager":"","config-def-default-reseller":"yes","config-def-default-super-user":"yes","config-def-allow-hostname":"yes","config-def-allow-reseller-access":"yes","tags":"portal,sample"}; // \SpectrumVoip\\\\NetSapiens\Model\ConfigDefinition

try {
    $result = $apiInstance->configDefinitionsPost($config_definition);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsConfigurationDefinitionsApi->configDefinitionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **config_definition** | [**\SpectrumVoip\\\\NetSapiens\Model\ConfigDefinition**](../Model/ConfigDefinition.md)|  | [optional] |

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
