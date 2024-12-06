# SpectrumVoip\\\\NetSapiens\MeetingsEventLogsApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainUsersUserMeetingsIdInstanceInstanceLogGet()**](MeetingsEventLogsApi.md#domainsDomainUsersUserMeetingsIdInstanceInstanceLogGet) | **GET** /domains/{domain}/users/{user}/meetings/{id}/instance/{instance}/log | Read Meeting Events |
| [**domainsDomainUsersUserMeetingsIdInstanceInstanceLogPost()**](MeetingsEventLogsApi.md#domainsDomainUsersUserMeetingsIdInstanceInstanceLogPost) | **POST** /domains/{domain}/users/{user}/meetings/{id}/instance/{instance}/log | Create a Meeting Log Event |


## `domainsDomainUsersUserMeetingsIdInstanceInstanceLogGet()`

```php
domainsDomainUsersUserMeetingsIdInstanceInstanceLogGet($domain, $user, $id, $instance): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsIdInstanceInstanceLogGet200Response
```

Read Meeting Events



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsEventLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$user = '~'; // string | 
$id = 'id_example'; // string | 
$instance = 'instance_example'; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserMeetingsIdInstanceInstanceLogGet($domain, $user, $id, $instance);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsEventLogsApi->domainsDomainUsersUserMeetingsIdInstanceInstanceLogGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**|  | |
| **instance** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsIdInstanceInstanceLogGet200Response**](../Model/DomainsDomainUsersUserMeetingsIdInstanceInstanceLogGet200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserMeetingsIdInstanceInstanceLogPost()`

```php
domainsDomainUsersUserMeetingsIdInstanceInstanceLogPost($domain, $user, $id, $instance, $domains_domain_users_user_meetings_id_instance_instance_log_post_request): object
```

Create a Meeting Log Event



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsEventLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$user = '~'; // string | 
$id = 'id_example'; // string | Meeting Id
$instance = 'instance_example'; // string | Meeting Instance Id
$domains_domain_users_user_meetings_id_instance_instance_log_post_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsIdInstanceInstanceLogPostRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsIdInstanceInstanceLogPostRequest

try {
    $result = $apiInstance->domainsDomainUsersUserMeetingsIdInstanceInstanceLogPost($domain, $user, $id, $instance, $domains_domain_users_user_meetings_id_instance_instance_log_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsEventLogsApi->domainsDomainUsersUserMeetingsIdInstanceInstanceLogPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**| Meeting Id | |
| **instance** | **string**| Meeting Instance Id | |
| **domains_domain_users_user_meetings_id_instance_instance_log_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsIdInstanceInstanceLogPostRequest**](../Model/DomainsDomainUsersUserMeetingsIdInstanceInstanceLogPostRequest.md)|  | [optional] |

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
