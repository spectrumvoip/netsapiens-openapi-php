# SpectrumVoip\\\\NetSapiens\AutoAttendantApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainAutoattendantsGet()**](AutoAttendantApi.md#domainsDomainAutoattendantsGet) | **GET** /domains/{domain}/autoattendants | Read Auto Attendants |
| [**domainsDomainAutoattendantsPost()**](AutoAttendantApi.md#domainsDomainAutoattendantsPost) | **POST** /domains/{domain}/autoattendants | Create Auto Attendant |
| [**domainsDomainUsersUserAutoattendantsPromptGet()**](AutoAttendantApi.md#domainsDomainUsersUserAutoattendantsPromptGet) | **GET** /domains/{domain}/users/{user}/autoattendants/{prompt} | Read Specific Auto Attendant |
| [**domainsDomainUsersUserAutoattendantsPromptPut()**](AutoAttendantApi.md#domainsDomainUsersUserAutoattendantsPromptPut) | **PUT** /domains/{domain}/users/{user}/autoattendants/{prompt} | Update Specific Auto Attendant |


## `domainsDomainAutoattendantsGet()`

```php
domainsDomainAutoattendantsGet($domain): \SpectrumVoip\\\\NetSapiens\Model\AutoAttendant[]
```

Read Auto Attendants



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AutoAttendantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 

try {
    $result = $apiInstance->domainsDomainAutoattendantsGet($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoAttendantApi->domainsDomainAutoattendantsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\AutoAttendant[]**](../Model/AutoAttendant.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainAutoattendantsPost()`

```php
domainsDomainAutoattendantsPost($domain, $domains_domain_autoattendants_post_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainAutoattendantsPost200Response
```

Create Auto Attendant



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AutoAttendantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$domains_domain_autoattendants_post_request = {
    "attendant-name": "Main AA Example",
    "user": "3009",
    "time-frame": "Default",
    "auto-attendant": {
        "no-key-press": "option-1",
        "unassigned-key-press": "repeat",
        "3-digit-dial-by-extension": "no",
        "4-digit-dial-by-extension": "yes",
        "5-digit-dial-by-extension": "yes",
        "audio": {
            "file-script-text": "Hello! Please press 1 2 or 3. "
        },
        "option-1": {
            "destination-application": "to-user",
            "destination-user": "1000",
            "description": "Press 1 to go to user 1000",
        },
        "option-2": {
            "destination-application": "to-user",
            "destination-user": "1001",
            "description": "Press 2 to go to user 1001",
        },
        "option-3": {
            "destination-application": "to-callqueue",
            "destination-user": "2001",
            "description": "Press 4 to go to queue 1001",
            "auto-attendant": {
                "no-key-press": "hangup",
                "unassigned-key-press": "option-3",
                "3-digit-dial-by-extension": "yes",
                "4-digit-dial-by-extension": "no",
                "audio": {
                    "file-script-text": "This is a second tier message. Press some digits. "
                },
                "option-1": {
                    "destination-application": "to-user",
                    "destination-user": "1000",
                    "description": "Press 1 to go to user 1000",
                },
                "option-2": {
                    "destination-application": "to-user",
                    "destination-user": "2003",
                    "description": "Press 2 to go to user 1001",
                },
                "option-3": {
                    "description": "Press 3 to go to user 1001",
                    "auto-attendant": {
                        "audio": {
                            "file-script-text": "This is a third tier message. Press some digits. "
                        },
                        "option-3": {
                            "destination-application": "to-user",
                            "destination-user": "1001",
                            "description": "Press 3 to go to user 1001",
                        }
                    }
                }
            }
        }
    }
}; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainAutoattendantsPostRequest

try {
    $result = $apiInstance->domainsDomainAutoattendantsPost($domain, $domains_domain_autoattendants_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoAttendantApi->domainsDomainAutoattendantsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_autoattendants_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainAutoattendantsPostRequest**](../Model/DomainsDomainAutoattendantsPostRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainAutoattendantsPost200Response**](../Model/DomainsDomainAutoattendantsPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserAutoattendantsPromptGet()`

```php
domainsDomainUsersUserAutoattendantsPromptGet($domain, $user, $prompt): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAutoattendantsPromptGet200Response
```

Read Specific Auto Attendant



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AutoAttendantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = 3008; // string | 
$prompt = Prompt_100; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserAutoattendantsPromptGet($domain, $user, $prompt);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoAttendantApi->domainsDomainUsersUserAutoattendantsPromptGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **prompt** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAutoattendantsPromptGet200Response**](../Model/DomainsDomainUsersUserAutoattendantsPromptGet200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserAutoattendantsPromptPut()`

```php
domainsDomainUsersUserAutoattendantsPromptPut($domain, $user, $prompt, $domains_domain_users_user_autoattendants_prompt_put_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAutoattendantsPromptGet200Response
```

Update Specific Auto Attendant



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\AutoAttendantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = 3008; // string | 
$prompt = Prompt_100; // string | 
$domains_domain_users_user_autoattendants_prompt_put_request = {
    "attendant-name": "Main AA Example",
    "auto-attendant": {
        "no-key-press": "option-1",
        "unassigned-key-press": "repeat",
        "3-digit-dial-by-extension": "no",
        "4-digit-dial-by-extension": "yes",
        "5-digit-dial-by-extension": "yes",
        "audio": {
            "file-script-text": "Hello! Please press 1 2 or 3. "
        },
        "option-1": {
            "destination-application": "to-user",
            "destination-user": "1000",
            "description": "Press 1 to go to user 1000",
        }
    }
}; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAutoattendantsPromptPutRequest

try {
    $result = $apiInstance->domainsDomainUsersUserAutoattendantsPromptPut($domain, $user, $prompt, $domains_domain_users_user_autoattendants_prompt_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoAttendantApi->domainsDomainUsersUserAutoattendantsPromptPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **prompt** | **string**|  | |
| **domains_domain_users_user_autoattendants_prompt_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAutoattendantsPromptPutRequest**](../Model/DomainsDomainUsersUserAutoattendantsPromptPutRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAutoattendantsPromptGet200Response**](../Model/DomainsDomainUsersUserAutoattendantsPromptGet200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
