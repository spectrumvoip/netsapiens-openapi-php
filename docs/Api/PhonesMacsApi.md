# SpectrumVoip\\\\NetSapiens\PhonesMacsApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainPhonesDelete()**](PhonesMacsApi.md#domainsDomainPhonesDelete) | **DELETE** /domains/{domain}/phones | Remove MAC address in Domain |
| [**domainsDomainPhonesGet()**](PhonesMacsApi.md#domainsDomainPhonesGet) | **GET** /domains/{domain}/phones | Read Mac Addresses in Domain |
| [**domainsDomainPhonesPost()**](PhonesMacsApi.md#domainsDomainPhonesPost) | **POST** /domains/{domain}/phones | Add MAC address for Domain |
| [**domainsDomainPhonesPut()**](PhonesMacsApi.md#domainsDomainPhonesPut) | **PUT** /domains/{domain}/phones | Update MAC address in Domain |
| [**phonesDelete()**](PhonesMacsApi.md#phonesDelete) | **DELETE** /phones | Remove MAC address |
| [**phonesGet()**](PhonesMacsApi.md#phonesGet) | **GET** /phones | Read Mac Addresses |
| [**phonesMacGet()**](PhonesMacsApi.md#phonesMacGet) | **GET** /phones/{mac} | Read Specific Mac Address |
| [**phonesPost()**](PhonesMacsApi.md#phonesPost) | **POST** /phones | Add MAC address |
| [**phonesPut()**](PhonesMacsApi.md#phonesPut) | **PUT** /phones | Update MAC address |


## `domainsDomainPhonesDelete()`

```php
domainsDomainPhonesDelete($domain, $phones_delete_request): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Remove MAC address in Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhonesMacsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$phones_delete_request = {mac={{mac}}}; // \SpectrumVoip\\\\NetSapiens\Model\PhonesDeleteRequest

try {
    $result = $apiInstance->domainsDomainPhonesDelete($domain, $phones_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesMacsApi->domainsDomainPhonesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **phones_delete_request** | [**\SpectrumVoip\\\\NetSapiens\Model\PhonesDeleteRequest**](../Model/PhonesDeleteRequest.md)|  | [optional] |

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

## `domainsDomainPhonesGet()`

```php
domainsDomainPhonesGet($domain, $limit): \SpectrumVoip\\\\NetSapiens\Model\NdpPhone[]
```

Read Mac Addresses in Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhonesMacsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$limit = 10; // string | 

try {
    $result = $apiInstance->domainsDomainPhonesGet($domain, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesMacsApi->domainsDomainPhonesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **limit** | **string**|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\NdpPhone[]**](../Model/NdpPhone.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainPhonesPost()`

```php
domainsDomainPhonesPost($domain, $ndp_phone): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Add MAC address for Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhonesMacsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$ndp_phone = {
    "mac": "{{mac}}",
    "server": "eng0-san",
    "domain": "{{domain}}",
    "subscriber_name": "{{user}}",
    "model": "Polycom VVX450",
    "device1": "sip:{{user}}@{{domain}}",
    "notes": "my physical device",
    "transport": "tcp",
    "auth_user": "myProvisioningUsername",
    "auth_pass": "myProvisioningPassword",
}; // \SpectrumVoip\\\\NetSapiens\Model\NdpPhone

try {
    $result = $apiInstance->domainsDomainPhonesPost($domain, $ndp_phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesMacsApi->domainsDomainPhonesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **ndp_phone** | [**\SpectrumVoip\\\\NetSapiens\Model\NdpPhone**](../Model/NdpPhone.md)|  | [optional] |

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

## `domainsDomainPhonesPut()`

```php
domainsDomainPhonesPut($domain, $ndp_phone): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Update MAC address in Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhonesMacsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$ndp_phone = {mac={{mac}}, server=eng0-san, domain={{domain}}, notes=my physical device (updated), transport=tls}; // \SpectrumVoip\\\\NetSapiens\Model\NdpPhone

try {
    $result = $apiInstance->domainsDomainPhonesPut($domain, $ndp_phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesMacsApi->domainsDomainPhonesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **ndp_phone** | [**\SpectrumVoip\\\\NetSapiens\Model\NdpPhone**](../Model/NdpPhone.md)|  | [optional] |

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

## `phonesDelete()`

```php
phonesDelete($phones_delete_request): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Remove MAC address



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhonesMacsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$phones_delete_request = {"mac":"{{mac}}"}; // \SpectrumVoip\\\\NetSapiens\Model\PhonesDeleteRequest

try {
    $result = $apiInstance->phonesDelete($phones_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesMacsApi->phonesDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **phones_delete_request** | [**\SpectrumVoip\\\\NetSapiens\Model\PhonesDeleteRequest**](../Model/PhonesDeleteRequest.md)|  | [optional] |

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

## `phonesGet()`

```php
phonesGet($limit): \SpectrumVoip\\\\NetSapiens\Model\NdpPhone[]
```

Read Mac Addresses



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhonesMacsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 10; // string | 

try {
    $result = $apiInstance->phonesGet($limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesMacsApi->phonesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **string**|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\NdpPhone[]**](../Model/NdpPhone.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `phonesMacGet()`

```php
phonesMacGet($mac): \SpectrumVoip\\\\NetSapiens\Model\NdpPhone
```

Read Specific Mac Address



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhonesMacsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mac = 000111222333; // string | 

try {
    $result = $apiInstance->phonesMacGet($mac);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesMacsApi->phonesMacGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mac** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\NdpPhone**](../Model/NdpPhone.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `phonesPost()`

```php
phonesPost($ndp_phone): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Add MAC address



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhonesMacsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ndp_phone = {
    "mac": "{{mac}}",
    "server": "eng0-san",
    "domain": "{{domain}}",
    "subscriber_name": "{{user}}",
    "model": "Polycom VVX450",
    "device1": "sip:{{user}}@{{domain}}",
    "notes": "my physical device",
    "transport": "tcp",
    "auth_user": "myProvisioningUsername",
    "auth_pass": "myProvisioningPassword",
}; // \SpectrumVoip\\\\NetSapiens\Model\NdpPhone

try {
    $result = $apiInstance->phonesPost($ndp_phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesMacsApi->phonesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ndp_phone** | [**\SpectrumVoip\\\\NetSapiens\Model\NdpPhone**](../Model/NdpPhone.md)|  | [optional] |

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

## `phonesPut()`

```php
phonesPut($ndp_phone): \SpectrumVoip\\\\NetSapiens\Model\SuccessResponse
```

Update MAC address



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\PhonesMacsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ndp_phone = {"mac":"{{mac}}","server":"eng0-san","domain":"{{domain}}","notes":"my physical device (updated)","transport":"tls"}; // \SpectrumVoip\\\\NetSapiens\Model\NdpPhone

try {
    $result = $apiInstance->phonesPut($ndp_phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhonesMacsApi->phonesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ndp_phone** | [**\SpectrumVoip\\\\NetSapiens\Model\NdpPhone**](../Model/NdpPhone.md)|  | [optional] |

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
