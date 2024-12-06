# SpectrumVoip\\\\NetSapiens\AddressesApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAddressEndpoint()**](AddressesApi.md#createAddressEndpoint) | **POST** /domains/{domain}/addresses/endpoints | Create Address Endpoint |
| [**createAddressForDomain()**](AddressesApi.md#createAddressForDomain) | **POST** /domains/{domain}/addresses | Create Address for Domain |
| [**createAddressForUser()**](AddressesApi.md#createAddressForUser) | **POST** /domains/{domain}/users/{user}/addresses | Create Address for User |
| [**deleteAddressEndpoint()**](AddressesApi.md#deleteAddressEndpoint) | **DELETE** /domains/{domain}/addresses/endpoints/{endpoint} | Delete Address Endpoint |
| [**deleteAddressForDomain()**](AddressesApi.md#deleteAddressForDomain) | **DELETE** /domains/{domain}/addresses/{emergency-address-id} | Delete Address For Domain |
| [**deleteAddressForUser()**](AddressesApi.md#deleteAddressForUser) | **DELETE** /domains/{domain}/users/{user}/addresses/{address_id} | Delete Address For User |
| [**getAddressEndpointsForDomain()**](AddressesApi.md#getAddressEndpointsForDomain) | **GET** /domains/{domain}/addresses/endpoints | Get Address Endpoints for a Domain |
| [**getAddressUsingAddressID()**](AddressesApi.md#getAddressUsingAddressID) | **GET** /domains/{domain}/users/{user}/addresses/{emergency-address-id} | Get Address Using Address ID |
| [**getAddressesCountForDomain()**](AddressesApi.md#getAddressesCountForDomain) | **GET** /domains/{domain}/addresses/count | Get Addresses Count for Domain |
| [**getAddressesForDomain()**](AddressesApi.md#getAddressesForDomain) | **GET** /domains/{domain}/addresses | Get Addresses for Domain |
| [**getAddressesForUser()**](AddressesApi.md#getAddressesForUser) | **GET** /domains/{domain}/users/{user}/addresses | Get Addresses for User |
| [**updateAddressEndpoint()**](AddressesApi.md#updateAddressEndpoint) | **PUT** /domains/{domain}/addresses/endpoints/{endpoint} | Update Address Endpoint |
| [**updateAddressForDomain()**](AddressesApi.md#updateAddressForDomain) | **PUT** /domains/{domain}/addresses/{emergency-address-id} | Update Address for Domain |
| [**updateAddressForUser()**](AddressesApi.md#updateAddressForUser) | **PUT** /domains/{domain}/users/{user}/addresses/{emergency-address-id} | Update Address for User |
| [**validateAddress()**](AddressesApi.md#validateAddress) | **POST** /domains/{domain}/addresses/validate | Validate Address |


## `createAddressEndpoint()`

```php
createAddressEndpoint($domain, $create_address_endpoint_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Create Address Endpoint



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$create_address_endpoint_request = {"address-callback-number":"8585551234","address-name":"WeWork Office","caller-name":"WeWork Secretary","address-line-1":"8910 UNIVERSITY CENTER LN","address-line-2":"STE 400","address-city":"San Diego","address-state-province-abbreviation":"CA","address-postal-code":"92122-1025","address-country-abbreviation":"US","address-location-description":"front left desk","address-provisioned-carrier-name":"bandwidth","address-formatted-pidflo":{"HouseNumber":8910,"StreetName":"UNIVERSITY CENTER","StreetSuffix":"LN","City":"SAN DIEGO","StateCode":"CA","Zip":92122,"PlusFour":1012,"County":[],"Country":"US","AddressType":"E911","LocationId":"LOCATION ID","ValidationStatus":"VALID","Adjusted":"true"}}; // \SpectrumVoip\\\\NetSapiens\Model\CreateAddressEndpointRequest

try {
    $result = $apiInstance->createAddressEndpoint($domain, $create_address_endpoint_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->createAddressEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **create_address_endpoint_request** | [**\SpectrumVoip\\\\NetSapiens\Model\CreateAddressEndpointRequest**](../Model/CreateAddressEndpointRequest.md)|  | [optional] |

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

## `createAddressForDomain()`

```php
createAddressForDomain($domain, $create_address_for_domain_request): \SpectrumVoip\\\\NetSapiens\Model\AddressCreateReturn
```

Create Address for Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$create_address_for_domain_request = {"emergency-address-id":"a-UNIQE_ID","address-name":"WeWork Office","caller-id-number":"WeWork Secretary","address-line-1":"8910 UNIVERSITY CENTER LN","address-line-2":"STE 400","address-city":"San Diego","address-state-province-abbreviation":"CA","address-postal-code":"92122-1025","address-country-abbreviation":"US","address-location-description":"front left desk","address-provisioned-carrier-name":"bandwidth","address-formatted-pidflo":{"HouseNumber":8910,"StreetName":"UNIVERSITY CENTER","StreetSuffix":"LN","City":"SAN DIEGO","StateCode":"CA","Zip":92122,"PlusFour":1012,"County":[],"Country":"US","AddressType":"E911","LocationId":"a-UNIQE_ID","ValidationStatus":"VALID","Adjusted":"true"},"ip-address-public":"XXX.XX.XX.XXX"}; // \SpectrumVoip\\\\NetSapiens\Model\CreateAddressForDomainRequest

try {
    $result = $apiInstance->createAddressForDomain($domain, $create_address_for_domain_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->createAddressForDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **create_address_for_domain_request** | [**\SpectrumVoip\\\\NetSapiens\Model\CreateAddressForDomainRequest**](../Model/CreateAddressForDomainRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\AddressCreateReturn**](../Model/AddressCreateReturn.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAddressForUser()`

```php
createAddressForUser($domain, $user, $create_address_for_user_request): \SpectrumVoip\\\\NetSapiens\Model\AddressCreateReturn
```

Create Address for User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = sampleDomain; // string | 
$user = sampleUser; // string | 
$create_address_for_user_request = {"emergency-address-id":"a-UNIQE_ID","address-name":"WeWork Office","caller-id-number":"WeWork Secretary","address-line-1":"8910 UNIVERSITY CENTER LN","address-line-2":"STE 400","address-city":"San Diego","address-state-province-abbreviation":"CA","address-postal-code":"92122-1025","address-country-abbreviation":"US","address-location-description":"front left desk","address-provisioned-carrier-name":"bandwidth","address-formatted-pidflo":{"HouseNumber":8910,"StreetName":"UNIVERSITY CENTER","StreetSuffix":"LN","City":"SAN DIEGO","StateCode":"CA","Zip":92122,"PlusFour":1012,"County":[],"Country":"US","AddressType":"E911","LocationId":"a-UNIQE_ID","ValidationStatus":"VALID","Adjusted":"true"},"ip-address-public":"XXX.XX.XX.XXX"}; // \SpectrumVoip\\\\NetSapiens\Model\CreateAddressForUserRequest

try {
    $result = $apiInstance->createAddressForUser($domain, $user, $create_address_for_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->createAddressForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **create_address_for_user_request** | [**\SpectrumVoip\\\\NetSapiens\Model\CreateAddressForUserRequest**](../Model/CreateAddressForUserRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\AddressCreateReturn**](../Model/AddressCreateReturn.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAddressEndpoint()`

```php
deleteAddressEndpoint($domain, $endpoint, $delete_address_endpoint_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Delete Address Endpoint



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = sampleDomain; // string | 
$endpoint = 8585551236; // string | The callback number of the address.
$delete_address_endpoint_request = {"carrier":"bandwidth"}; // \SpectrumVoip\\\\NetSapiens\Model\DeleteAddressEndpointRequest

try {
    $result = $apiInstance->deleteAddressEndpoint($domain, $endpoint, $delete_address_endpoint_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->deleteAddressEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **endpoint** | **string**| The callback number of the address. | |
| **delete_address_endpoint_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DeleteAddressEndpointRequest**](../Model/DeleteAddressEndpointRequest.md)|  | [optional] |

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

## `deleteAddressForDomain()`

```php
deleteAddressForDomain($domain, $emergency_address_id): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Delete Address For Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = sampleDomain; // string | 
$emergency_address_id = a-UNIQE_ID; // string | 

try {
    $result = $apiInstance->deleteAddressForDomain($domain, $emergency_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->deleteAddressForDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **emergency_address_id** | **string**|  | |

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

## `deleteAddressForUser()`

```php
deleteAddressForUser($domain, $user, $address_id): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Delete Address For User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = sampleDomain; // string | 
$user = sampleUser; // string | 
$address_id = a-UNIQ_ID; // string | Address ID to delete

try {
    $result = $apiInstance->deleteAddressForUser($domain, $user, $address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->deleteAddressForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **address_id** | **string**| Address ID to delete | |

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

## `getAddressEndpointsForDomain()`

```php
getAddressEndpointsForDomain($domain, $limit): \SpectrumVoip\\\\NetSapiens\Model\Address[]
```

Get Address Endpoints for a Domain

Emergency Address Endpoints are different than Emergency Addresses. Endpoints contain the Emergency Caller ID Number and the address associated with it should be the billing address. Emergency Addresses are what is passed in to the PIDFLO object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$limit = ; // int | 

try {
    $result = $apiInstance->getAddressEndpointsForDomain($domain, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getAddressEndpointsForDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **limit** | **int**|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Address[]**](../Model/Address.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddressUsingAddressID()`

```php
getAddressUsingAddressID($domain, $user, $emergency_address_id): \SpectrumVoip\\\\NetSapiens\Model\Address
```

Get Address Using Address ID



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = domainSample; // string | 
$user = userSample; // string | 
$emergency_address_id = a-5fc83a12c8e98; // string | 

try {
    $result = $apiInstance->getAddressUsingAddressID($domain, $user, $emergency_address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getAddressUsingAddressID: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **emergency_address_id** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Address**](../Model/Address.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddressesCountForDomain()`

```php
getAddressesCountForDomain($domain): \SpectrumVoip\\\\NetSapiens\Model\Count
```

Get Addresses Count for Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 

try {
    $result = $apiInstance->getAddressesCountForDomain($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getAddressesCountForDomain: ', $e->getMessage(), PHP_EOL;
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

## `getAddressesForDomain()`

```php
getAddressesForDomain($domain): \SpectrumVoip\\\\NetSapiens\Model\Address[]
```

Get Addresses for Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 

try {
    $result = $apiInstance->getAddressesForDomain($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getAddressesForDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Address[]**](../Model/Address.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAddressesForUser()`

```php
getAddressesForUser($domain, $user, $limit, $show_all_personal, $show_only_personal): \SpectrumVoip\\\\NetSapiens\Model\Address[]
```

Get Addresses for User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$user = '~'; // string | 
$limit = 10; // int | 
$show_all_personal = ; // string | Set to \"yes\" and do not set user in order to show all addresses in domain regardless of user identity. Requires Office Manager or above
$show_only_personal = yes/no; // string | Set to \"yes\" to show only the personal addresses. Default to \"no\" which would also showing all the domain-level addreses

try {
    $result = $apiInstance->getAddressesForUser($domain, $user, $limit, $show_all_personal, $show_only_personal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getAddressesForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **limit** | **int**|  | [optional] |
| **show_all_personal** | **string**| Set to \&quot;yes\&quot; and do not set user in order to show all addresses in domain regardless of user identity. Requires Office Manager or above | [optional] |
| **show_only_personal** | **string**| Set to \&quot;yes\&quot; to show only the personal addresses. Default to \&quot;no\&quot; which would also showing all the domain-level addreses | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Address[]**](../Model/Address.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAddressEndpoint()`

```php
updateAddressEndpoint($domain, $endpoint, $update_address_endpoint_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Update Address Endpoint



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = sampleDomain; // string | 
$endpoint = 8585551234; // string | The callback number of the address.
$update_address_endpoint_request = {
    "address-name": "WeWork Office",
    "caller-id-number": "WeWork Secretary UPDATED",
    "address-line-1": "8910 UNIVERSITY CENTER LN",
    "address-line-2": "STE 404 UPDATED",
    "address-city": "San Diego",
    "address-state-province-abbreviation": "CA",
    "address-postal-code": "92122-1025",
    "address-country-abbreviation": "US",
    "address-location-description": "front left desk",
    "address-provisioned-carrier-name": "bandwidth",
    "address-formatted-pidflo": {
        "HouseNumber": 8910,
        "StreetName": "UNIVERSITY CENTER",
        "StreetSuffix": "LN",
        "City": "SAN DIEGO",
        "StateCode": "CA",
        "Zip": 92122,
        "PlusFour": 1012,
        "County": [],
        "Country": "US",
        "AddressType": "E911",
        "LocationId": "LOCATION ID",
        "ValidationStatus": "VALID",
        "Adjusted": "true"
    },
}; // \SpectrumVoip\\\\NetSapiens\Model\UpdateAddressEndpointRequest

try {
    $result = $apiInstance->updateAddressEndpoint($domain, $endpoint, $update_address_endpoint_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->updateAddressEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **endpoint** | **string**| The callback number of the address. | |
| **update_address_endpoint_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateAddressEndpointRequest**](../Model/UpdateAddressEndpointRequest.md)|  | [optional] |

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

## `updateAddressForDomain()`

```php
updateAddressForDomain($domain, $emergency_address_id, $update_address_for_domain_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Update Address for Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = sampleDomain; // string | 
$emergency_address_id = a-UNIQE_ID; // string | 
$update_address_for_domain_request = {"address-name":"WeWork Office","caller-name":"WeWork Secretary UPDATED","address-line-1":"8911 UNIVERSITY CENTER LN","address-line-2":"STE 400","address-city":"San Diego","address-state-province-abbreviation":"CA","address-postal-code":"92122-1025","address-country-abbreviation":"US","address-location-description":"front RIGHT desk UPDATED","address-provisioned-carrier-name":"bandwidth","address-formatted-pidflo":{"HouseNumber":8911,"StreetName":"UNIVERSITY CENTER","StreetSuffix":"LN","City":"SAN DIEGO","StateCode":"CA","Zip":92122,"PlusFour":1012,"County":[],"Country":"US","AddressType":"E911","LocationId":"a-652487faeb24d_6","ValidationStatus":"VALID","Adjusted":"true"},"ip-address-public":"207.45.79.249"}; // \SpectrumVoip\\\\NetSapiens\Model\UpdateAddressForDomainRequest

try {
    $result = $apiInstance->updateAddressForDomain($domain, $emergency_address_id, $update_address_for_domain_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->updateAddressForDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **emergency_address_id** | **string**|  | |
| **update_address_for_domain_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateAddressForDomainRequest**](../Model/UpdateAddressForDomainRequest.md)|  | [optional] |

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

## `updateAddressForUser()`

```php
updateAddressForUser($domain, $user, $emergency_address_id, $update_address_for_domain_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Update Address for User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = sampleDomain; // string | 
$user = sampleUser; // string | 
$emergency_address_id = a-UNIQE_ID; // string | 
$update_address_for_domain_request = {"address-name":"WeWork Office","caller-name":"WeWork Secretary","address-line-1":"8911 UNIVERSITY CENTER LN","address-line-2":"STE 400 3","address-city":"San Diego","address-state-province-abbreviation":"CA","address-postal-code":"92122-1025","address-country-abbreviation":"US","address-location-description":"front left desk 2","address-provisioned-carrier-name":"bandwidth","address-formatted-pidflo":{"HouseNumber":8911,"StreetName":"UNIVERSITY CENTER","StreetSuffix":"LN","City":"SAN DIEGO","StateCode":"CA","Zip":92122,"PlusFour":1012,"County":[],"Country":"US","AddressType":"E911","LocationId":"a-652487faeb24d_6","ValidationStatus":"VALID","Adjusted":"true"},"ip-address-public":"207.45.79.249"}; // \SpectrumVoip\\\\NetSapiens\Model\UpdateAddressForDomainRequest

try {
    $result = $apiInstance->updateAddressForUser($domain, $user, $emergency_address_id, $update_address_for_domain_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->updateAddressForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **emergency_address_id** | **string**|  | |
| **update_address_for_domain_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateAddressForDomainRequest**](../Model/UpdateAddressForDomainRequest.md)|  | [optional] |

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

## `validateAddress()`

```php
validateAddress($domain, $validate_address_request): \SpectrumVoip\\\\NetSapiens\Model\ValidateAddress200Response
```

Validate Address



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AddressesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = sampleDomain; // string | 
$validate_address_request = {"domain":"sampleDomain","address-name":"We Work Office","caller-name":"We Work Secretary","address-line-1":"8910 UNIVERSITY CENTER LN","address-line-2":"STE 400","address-country-abbreviation":"US","address-state-province-abbreviation":"CA","address-city":"San Diego","address-postal-code":"92122-1025","address-location-description":"front left desk"}; // \SpectrumVoip\\\\NetSapiens\Model\ValidateAddressRequest

try {
    $result = $apiInstance->validateAddress($domain, $validate_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->validateAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **validate_address_request** | [**\SpectrumVoip\\\\NetSapiens\Model\ValidateAddressRequest**](../Model/ValidateAddressRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\ValidateAddress200Response**](../Model/ValidateAddress200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
