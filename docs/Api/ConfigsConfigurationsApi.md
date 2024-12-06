# SpectrumVoip\\\\NetSapiens\ConfigsConfigurationsApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createConfiguration()**](ConfigsConfigurationsApi.md#createConfiguration) | **POST** /configurations | Create a Configuration |
| [**deleteConfiguration()**](ConfigsConfigurationsApi.md#deleteConfiguration) | **DELETE** /configurations/{config-name} | Delete a Configuration |
| [**readAllConfigurations()**](ConfigsConfigurationsApi.md#readAllConfigurations) | **GET** /configurations | Read all Configurations |
| [**readAllNsApiConfigurations()**](ConfigsConfigurationsApi.md#readAllNsApiConfigurations) | **GET** /nsconfigs | Read all NS Api Configurations |
| [**readSpecificConfiguration()**](ConfigsConfigurationsApi.md#readSpecificConfiguration) | **GET** /configurations/{config-name} | Read a Specific Configuration |
| [**updateConfiguration()**](ConfigsConfigurationsApi.md#updateConfiguration) | **PUT** /configurations | Update a Configuration |
| [**updateNsApiConfiguration()**](ConfigsConfigurationsApi.md#updateNsApiConfiguration) | **PUT** /nsconfigs | Update a NS API Configuration |


## `createConfiguration()`

```php
createConfiguration($create_configuration_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Create a Configuration



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConfigsConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_configuration_request = {"config-name":"PORTAL_INVENTORY_PHONENUMBERS_IMPORT","config-value":"yes","domain":"portal","user":"*","user-scope":"Office Manager","core-server":"*","reseller":"*","admin-ui-account-type":"*","description":"Allow inventory phonenumbers to be imported"}; // \SpectrumVoip\\\\NetSapiens\Model\CreateConfigurationRequest

try {
    $result = $apiInstance->createConfiguration($create_configuration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsConfigurationsApi->createConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_configuration_request** | [**\SpectrumVoip\\\\NetSapiens\Model\CreateConfigurationRequest**](../Model/CreateConfigurationRequest.md)|  | [optional] |

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

## `deleteConfiguration()`

```php
deleteConfiguration($config_name, $delete_configuration_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Delete a Configuration



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConfigsConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config_name = 'config_name_example'; // string | 
$delete_configuration_request = {"config-name":"PORTAL_INVENTORY_PHONENUMBERS_IMPORT","config-value":"no","domain":"portal","user":"*","user-scope":"Office Manager","core-server":"*","reseller":"*","admin-ui-account-type":"*","description":"Allow inventory phonenumbers to be imported"}; // \SpectrumVoip\\\\NetSapiens\Model\DeleteConfigurationRequest

try {
    $result = $apiInstance->deleteConfiguration($config_name, $delete_configuration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsConfigurationsApi->deleteConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **config_name** | **string**|  | |
| **delete_configuration_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DeleteConfigurationRequest**](../Model/DeleteConfigurationRequest.md)|  | [optional] |

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

## `readAllConfigurations()`

```php
readAllConfigurations(): \SpectrumVoip\\\\NetSapiens\Model\Configuration[]
```

Read all Configurations



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConfigsConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->readAllConfigurations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsConfigurationsApi->readAllConfigurations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Configuration[]**](../Model/Configuration.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readAllNsApiConfigurations()`

```php
readAllNsApiConfigurations($local_only): \SpectrumVoip\\\\NetSapiens\Model\Configuration[]
```

Read all NS Api Configurations



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConfigsConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$local_only = ; // string | 

try {
    $result = $apiInstance->readAllNsApiConfigurations($local_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsConfigurationsApi->readAllNsApiConfigurations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **local_only** | **string**|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Configuration[]**](../Model/Configuration.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readSpecificConfiguration()`

```php
readSpecificConfiguration($config_name, $domain, $reseller, $user, $core_server, $user_scope, $admin_ui_account_type): \SpectrumVoip\\\\NetSapiens\Model\Configuration[]
```

Read a Specific Configuration



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConfigsConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$config_name = 'config_name_example'; // string | 
$domain = ; // string | This is the domain this configuration applies to. Defaults to search for \"*\"
$reseller = ; // string | This is the reseller or territory this configuration applies to. Defaults to search for \"*\"
$user = ; // string | This is the user this configuration applies to. Defaults to search for \"*\"
$core_server = ; // string | This is the hostname this configuration applies to. Defaults to search for \"*\"
$user_scope = ; // string | This is the user scope this configuration applies to. Defaults to search for \"*\"
$admin_ui_account_type = ; // string | This is the admin UI account this configuration applies to. Defaults to search for \"*\"

try {
    $result = $apiInstance->readSpecificConfiguration($config_name, $domain, $reseller, $user, $core_server, $user_scope, $admin_ui_account_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsConfigurationsApi->readSpecificConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **config_name** | **string**|  | |
| **domain** | **string**| This is the domain this configuration applies to. Defaults to search for \&quot;*\&quot; | [optional] [default to &#39;~&#39;] |
| **reseller** | **string**| This is the reseller or territory this configuration applies to. Defaults to search for \&quot;*\&quot; | [optional] |
| **user** | **string**| This is the user this configuration applies to. Defaults to search for \&quot;*\&quot; | [optional] [default to &#39;~&#39;] |
| **core_server** | **string**| This is the hostname this configuration applies to. Defaults to search for \&quot;*\&quot; | [optional] |
| **user_scope** | **string**| This is the user scope this configuration applies to. Defaults to search for \&quot;*\&quot; | [optional] |
| **admin_ui_account_type** | **string**| This is the admin UI account this configuration applies to. Defaults to search for \&quot;*\&quot; | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Configuration[]**](../Model/Configuration.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateConfiguration()`

```php
updateConfiguration($update_configuration_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Update a Configuration

If the configuration with the input fields does not exist, it will be created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConfigsConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_configuration_request = {"config-name":"PORTAL_INVENTORY_PHONENUMBERS_IMPORT","config-value":"no","domain":"portal","user":"*","user-scope":"Office Manager","core-server":"*","reseller":"*","admin-ui-account-type":"*","description":"Allow inventory phonenumbers to be imported"}; // \SpectrumVoip\\\\NetSapiens\Model\UpdateConfigurationRequest

try {
    $result = $apiInstance->updateConfiguration($update_configuration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsConfigurationsApi->updateConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_configuration_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateConfigurationRequest**](../Model/UpdateConfigurationRequest.md)|  | [optional] |

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

## `updateNsApiConfiguration()`

```php
updateNsApiConfiguration($update_ns_api_configuration_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Update a NS API Configuration

If the configuration with the input fields does not exist, it will be created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConfigsConfigurationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_ns_api_configuration_request = {"config-name":"PORTAL_INVENTORY_PHONENUMBERS_IMPORT","config-value":"no","domain":"portal","user":"*","user-scope":"Office Manager","core-server":"*","reseller":"*","admin-ui-account-type":"*","description":"Allow inventory phonenumbers to be imported"}; // \SpectrumVoip\\\\NetSapiens\Model\UpdateNsApiConfigurationRequest

try {
    $result = $apiInstance->updateNsApiConfiguration($update_ns_api_configuration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigsConfigurationsApi->updateNsApiConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_ns_api_configuration_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateNsApiConfigurationRequest**](../Model/UpdateNsApiConfigurationRequest.md)|  | [optional] |

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
