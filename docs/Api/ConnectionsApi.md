# SpectrumVoip\\\\NetSapiens\ConnectionsApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**connectionsGet()**](ConnectionsApi.md#connectionsGet) | **GET** /connections | Get All Connections |
| [**countAllConnections()**](ConnectionsApi.md#countAllConnections) | **GET** /connections/count | Count All Conections |
| [**createConnection()**](ConnectionsApi.md#createConnection) | **POST** /connections | Create a Connection |
| [**domainsDomainConnectionsConnectionOrigMatchPatternDelete()**](ConnectionsApi.md#domainsDomainConnectionsConnectionOrigMatchPatternDelete) | **DELETE** /domains/{domain}/connections/{connection-orig-match-pattern} | Delete a Specific Connection for a Domain |
| [**domainsDomainConnectionsConnectionOrigMatchPatternGet()**](ConnectionsApi.md#domainsDomainConnectionsConnectionOrigMatchPatternGet) | **GET** /domains/{domain}/connections/{connection-orig-match-pattern} | Get Specific Connection for a Domain |
| [**domainsDomainConnectionsGet()**](ConnectionsApi.md#domainsDomainConnectionsGet) | **GET** /domains/{domain}/connections | Get All Connections for a Domain |
| [**updateConnection()**](ConnectionsApi.md#updateConnection) | **PUT** /domains/{domain}/connections/{connection-orig-match-pattern} | Update a Connection |


## `connectionsGet()`

```php
connectionsGet($device_sip_registration_uri, $termination_match, $domain, $reseller, $route_chain, $user_scope): \SpectrumVoip\\\\NetSapiens\Model\ConnectionsGet200ResponseInner[]
```

Get All Connections



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_sip_registration_uri = ; // string | 
$termination_match = ; // string | 
$domain = ; // string | 
$reseller = ; // string | 
$route_chain = ; // string | 
$user_scope = ; // string | 

try {
    $result = $apiInstance->connectionsGet($device_sip_registration_uri, $termination_match, $domain, $reseller, $route_chain, $user_scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->connectionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **device_sip_registration_uri** | **string**|  | [optional] |
| **termination_match** | **string**|  | [optional] |
| **domain** | **string**|  | [optional] [default to &#39;~&#39;] |
| **reseller** | **string**|  | [optional] |
| **route_chain** | **string**|  | [optional] |
| **user_scope** | **string**|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\ConnectionsGet200ResponseInner[]**](../Model/ConnectionsGet200ResponseInner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `countAllConnections()`

```php
countAllConnections($device_sip_registration_uri, $termination_match, $domain, $reseller, $route_chain, $user_scope): \SpectrumVoip\\\\NetSapiens\Model\CountSmsNumbers200Response
```

Count All Conections



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_sip_registration_uri = ; // string | 
$termination_match = ; // string | 
$domain = ; // string | 
$reseller = ; // string | 
$route_chain = ; // string | 
$user_scope = ; // string | 

try {
    $result = $apiInstance->countAllConnections($device_sip_registration_uri, $termination_match, $domain, $reseller, $route_chain, $user_scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->countAllConnections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **device_sip_registration_uri** | **string**|  | [optional] |
| **termination_match** | **string**|  | [optional] |
| **domain** | **string**|  | [optional] [default to &#39;~&#39;] |
| **reseller** | **string**|  | [optional] |
| **route_chain** | **string**|  | [optional] |
| **user_scope** | **string**|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\CountSmsNumbers200Response**](../Model/CountSmsNumbers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createConnection()`

```php
createConnection($create_connection_request): object
```

Create a Connection



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_connection_request = {"connection-orig-match-pattern":"sip*@apidog","connection-term-match-pattern":"sip*@apidog","domain":"portal","connection-pcmu-only-enabled":"yes","dial-policy":"Permit All","connection-sip-get-new-dialog-destination-from":"yes","connection-prevent-rtp-port-change-enabled":"yes","connection-remote-ringback-handling":"no-ringback","limits-max-active-calls-orig":"0","connection-allow-mid-call-uri-updates-enabled":"yes","connection-record-all-calls-enabled":"yes","connection-sip-transport-protocol":"TCP","connection-custom-p-asserted-id-format":"hello","connection-sip-session-timer-enabled":"yes","connection-check-orig-matching-sip-header":"contact","connection-audio-relay-enabled":"no","description":"sample description from apidog","dial-plan":"portal","connection-sip-registration-realm":"portal","connection-term-enabled":"yes","connection-linked-billing-user":"domain","connection-enforce-minimum-duration-enabled":"yes","connection-hide-post-dial-delay-with-ringback-enabled":"yes","connection-sip-registration-username":"authusername","connection-translation-source-user":"[*]","connection-require-encrypted-audio-enabled":"optional","connection-include-server-header-enabled":"yes","connection-bind-to-alternate-interface-enabled":"yes","limits-max-active-calls-total":"0","connection-sip-get-response-destination-from":"contact-header","connection-translation-request-user":"[*]","connection-relay-comfort-noise-enabled":"yes","connection-address":"123.1.2.3","connection-block-media-in-sip-180-ringing":"yes","connection-block-video-in-sdp-enabled":"yes","connection-translation-destination-host":"apidogname1","limits-max-active-calls-term":"0","connection-sip-registration-password":"authkey","connection-translation-request-host":"apidogname1","connection-source-ip-checking-enabled":"yes","connection-orig-enabled":"yes","connection-translation-destination-user":"[*]","connection-require-sip-authentication-enabled":"yes","connection-translation-source-host":"apidogname1","utc-offset":"-7","time-zone":"US/Pacific","minimum-call-duration-second":"1","connection-sip-registration-expires-datetime":"2025-05-19 02:41:11","connection-sip-authenticate-as-client-enabled":"no","connection-is-carrier-trunk":"yes"}; // \SpectrumVoip\\\\NetSapiens\Model\CreateConnectionRequest

try {
    $result = $apiInstance->createConnection($create_connection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->createConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_connection_request** | [**\SpectrumVoip\\\\NetSapiens\Model\CreateConnectionRequest**](../Model/CreateConnectionRequest.md)|  | [optional] |

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

## `domainsDomainConnectionsConnectionOrigMatchPatternDelete()`

```php
domainsDomainConnectionsConnectionOrigMatchPatternDelete($domain, $connection_orig_match_pattern): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Delete a Specific Connection for a Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = portal; // string | 
$connection_orig_match_pattern = sip*@apidog; // string | 

try {
    $result = $apiInstance->domainsDomainConnectionsConnectionOrigMatchPatternDelete($domain, $connection_orig_match_pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->domainsDomainConnectionsConnectionOrigMatchPatternDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **connection_orig_match_pattern** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response**](../Model/DomainsDomainUsersUserAnswerrulesReorderPut202Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainConnectionsConnectionOrigMatchPatternGet()`

```php
domainsDomainConnectionsConnectionOrigMatchPatternGet($domain, $connection_orig_match_pattern): \SpectrumVoip\\\\NetSapiens\Model\Connection[]
```

Get Specific Connection for a Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$connection_orig_match_pattern = ; // string | 

try {
    $result = $apiInstance->domainsDomainConnectionsConnectionOrigMatchPatternGet($domain, $connection_orig_match_pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->domainsDomainConnectionsConnectionOrigMatchPatternGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **connection_orig_match_pattern** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Connection[]**](../Model/Connection.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainConnectionsGet()`

```php
domainsDomainConnectionsGet($domain, $device_sip_registration_uri, $termination_match, $reseller, $route_chain, $user_scope): \SpectrumVoip\\\\NetSapiens\Model\Connection[]
```

Get All Connections for a Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$device_sip_registration_uri = ; // string | 
$termination_match = ; // string | 
$reseller = ; // string | 
$route_chain = ; // string | 
$user_scope = ; // string | 

try {
    $result = $apiInstance->domainsDomainConnectionsGet($domain, $device_sip_registration_uri, $termination_match, $reseller, $route_chain, $user_scope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->domainsDomainConnectionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **device_sip_registration_uri** | **string**|  | [optional] |
| **termination_match** | **string**|  | [optional] |
| **reseller** | **string**|  | [optional] |
| **route_chain** | **string**|  | [optional] |
| **user_scope** | **string**|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Connection[]**](../Model/Connection.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateConnection()`

```php
updateConnection($domain, $connection_orig_match_pattern, $update_connection_request): object
```

Update a Connection



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\ConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$connection_orig_match_pattern = 'connection_orig_match_pattern_example'; // string | 
$update_connection_request = {"description":"changed description!","connection-source-ip-checking-enabled":"no","connection-include-server-header-enabled":"yes"}; // \SpectrumVoip\\\\NetSapiens\Model\UpdateConnectionRequest

try {
    $result = $apiInstance->updateConnection($domain, $connection_orig_match_pattern, $update_connection_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConnectionsApi->updateConnection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **connection_orig_match_pattern** | **string**|  | |
| **update_connection_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateConnectionRequest**](../Model/UpdateConnectionRequest.md)|  | [optional] |

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
