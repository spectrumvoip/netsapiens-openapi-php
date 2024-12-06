# SpectrumVoip\\\\NetSapiens\MeetingsApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainUsersUserMeetingsCountGet()**](MeetingsApi.md#domainsDomainUsersUserMeetingsCountGet) | **GET** /domains/{domain}/users/{user}/meetings/count | Count Domains Meetings |
| [**domainsDomainUsersUserMeetingsGet()**](MeetingsApi.md#domainsDomainUsersUserMeetingsGet) | **GET** /domains/{domain}/users/{user}/meetings | Read Meetings for User |
| [**domainsDomainUsersUserMeetingsGetIdPost()**](MeetingsApi.md#domainsDomainUsersUserMeetingsGetIdPost) | **POST** /domains/{domain}/users/{user}/meetings/getId | Request a Meeting ID |
| [**domainsDomainUsersUserMeetingsIdGet()**](MeetingsApi.md#domainsDomainUsersUserMeetingsIdGet) | **GET** /domains/{domain}/users/{user}/meetings/{id} | Read Meeting |
| [**domainsDomainUsersUserMeetingsIdPost()**](MeetingsApi.md#domainsDomainUsersUserMeetingsIdPost) | **POST** /domains/{domain}/users/{user}/meetings/{id} | Create a Meeting with Id |
| [**domainsDomainUsersUserMeetingsMeetingDelete()**](MeetingsApi.md#domainsDomainUsersUserMeetingsMeetingDelete) | **DELETE** /domains/{domain}/users/{user}/meetings/{meeting} | Delete a Meeting |
| [**domainsDomainUsersUserMeetingsMeetingIdCountGet()**](MeetingsApi.md#domainsDomainUsersUserMeetingsMeetingIdCountGet) | **GET** /domains/{domain}/users/{user}/meetings/{meeting_id}/count | Count Meeting |
| [**domainsDomainUsersUserMeetingsMeetingPut()**](MeetingsApi.md#domainsDomainUsersUserMeetingsMeetingPut) | **PUT** /domains/{domain}/users/{user}/meetings/{meeting} | Update a Meeting |
| [**domainsDomainUsersUserMeetingsPost()**](MeetingsApi.md#domainsDomainUsersUserMeetingsPost) | **POST** /domains/{domain}/users/{user}/meetings | Create a Meeting |
| [**meetingsRegisterMeetingRegistrationIdPost()**](MeetingsApi.md#meetingsRegisterMeetingRegistrationIdPost) | **POST** /meetings/register/{meeting_registration_id} | Register Meeting |


## `domainsDomainUsersUserMeetingsCountGet()`

```php
domainsDomainUsersUserMeetingsCountGet($domain, $user): \SpectrumVoip\\\\NetSapiens\Model\CountSmsNumbers200Response
```

Count Domains Meetings



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserMeetingsCountGet($domain, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->domainsDomainUsersUserMeetingsCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |

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

## `domainsDomainUsersUserMeetingsGet()`

```php
domainsDomainUsersUserMeetingsGet($domain, $user): \SpectrumVoip\\\\NetSapiens\Model\Meeting[]
```

Read Meetings for User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$user = '~'; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserMeetingsGet($domain, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->domainsDomainUsersUserMeetingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Meeting[]**](../Model/Meeting.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserMeetingsGetIdPost()`

```php
domainsDomainUsersUserMeetingsGetIdPost($domain, $user): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsGetIdPost200Response
```

Request a Meeting ID

API v1 request Id prior to create meeting

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserMeetingsGetIdPost($domain, $user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->domainsDomainUsersUserMeetingsGetIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsGetIdPost200Response**](../Model/DomainsDomainUsersUserMeetingsGetIdPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserMeetingsIdGet()`

```php
domainsDomainUsersUserMeetingsIdGet($domain, $user, $id): \SpectrumVoip\\\\NetSapiens\Model\Meeting
```

Read Meeting



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$id = ; // string | 

try {
    $result = $apiInstance->domainsDomainUsersUserMeetingsIdGet($domain, $user, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->domainsDomainUsersUserMeetingsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**|  | |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Meeting**](../Model/Meeting.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserMeetingsIdPost()`

```php
domainsDomainUsersUserMeetingsIdPost($domain, $user, $id, $domains_domain_users_user_meetings_id_post_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsIdPost200Response
```

Create a Meeting with Id

API v1 create meeting passing in newly requested meeting Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$id = 779608244; // string | Meeting Id to create
$domains_domain_users_user_meetings_id_post_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsIdPostRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsIdPostRequest

try {
    $result = $apiInstance->domainsDomainUsersUserMeetingsIdPost($domain, $user, $id, $domains_domain_users_user_meetings_id_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->domainsDomainUsersUserMeetingsIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **id** | **string**| Meeting Id to create | |
| **domains_domain_users_user_meetings_id_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsIdPostRequest**](../Model/DomainsDomainUsersUserMeetingsIdPostRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsIdPost200Response**](../Model/DomainsDomainUsersUserMeetingsIdPost200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserMeetingsMeetingDelete()`

```php
domainsDomainUsersUserMeetingsMeetingDelete($domain, $user, $meeting, $domains_domain_users_user_meetings_meeting_delete_request): string
```

Delete a Meeting



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$meeting = 123456789; // string | the meeting id to perfom the delete on
$domains_domain_users_user_meetings_meeting_delete_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsMeetingDeleteRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsMeetingDeleteRequest

try {
    $result = $apiInstance->domainsDomainUsersUserMeetingsMeetingDelete($domain, $user, $meeting, $domains_domain_users_user_meetings_meeting_delete_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->domainsDomainUsersUserMeetingsMeetingDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **meeting** | **string**| the meeting id to perfom the delete on | |
| **domains_domain_users_user_meetings_meeting_delete_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsMeetingDeleteRequest**](../Model/DomainsDomainUsersUserMeetingsMeetingDeleteRequest.md)|  | [optional] |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `domainsDomainUsersUserMeetingsMeetingIdCountGet()`

```php
domainsDomainUsersUserMeetingsMeetingIdCountGet($domain, $user, $meeting_id): \SpectrumVoip\\\\NetSapiens\Model\CountSmsNumbers200Response
```

Count Meeting



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$meeting_id = ; // string | Meeting Id which to query meeting total

try {
    $result = $apiInstance->domainsDomainUsersUserMeetingsMeetingIdCountGet($domain, $user, $meeting_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->domainsDomainUsersUserMeetingsMeetingIdCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **meeting_id** | **string**| Meeting Id which to query meeting total | |

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

## `domainsDomainUsersUserMeetingsMeetingPut()`

```php
domainsDomainUsersUserMeetingsMeetingPut($domain, $user, $meeting, $domains_domain_users_user_meetings_meeting_put_request): object
```

Update a Meeting



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$meeting = 975300547; // string | 
$domains_domain_users_user_meetings_meeting_put_request = new \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsMeetingPutRequest(); // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsMeetingPutRequest

try {
    $result = $apiInstance->domainsDomainUsersUserMeetingsMeetingPut($domain, $user, $meeting, $domains_domain_users_user_meetings_meeting_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->domainsDomainUsersUserMeetingsMeetingPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **meeting** | **string**|  | |
| **domains_domain_users_user_meetings_meeting_put_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsMeetingPutRequest**](../Model/DomainsDomainUsersUserMeetingsMeetingPutRequest.md)|  | [optional] |

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

## `domainsDomainUsersUserMeetingsPost()`

```php
domainsDomainUsersUserMeetingsPost($domain, $user, $domains_domain_users_user_meetings_post_request): \SpectrumVoip\\\\NetSapiens\Model\Meeting[]
```

Create a Meeting

Create a new meeting wit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$user = {{user}}; // string | 
$domains_domain_users_user_meetings_post_request = {"meeting-schedule-start-datetime":"2023-11-07T15:18:52.409Z","timezone":"Etc/GMT-11","meeting-room-enabled":0,"meeting-recording-enabled":0,"meeting-video-allowed-from":"host","meeting-require-host-to-begin-enabled":0,"limits-max-participants":53034089,"description":"proident consectetur","meeting-hide-attendee-list-enabled":0,"meeting-schedule-duration-minutes":5848348,"meeting-question-answer-enabled":0,"meeting-lock-enabled":0,"meeting-allow-changes-from-hosts-enabled":1,"meeting-chat-enabled":1,"meeting-audio-allowed-from":"presenters","meeting-chat-history-enabled":1,"meeting-join-require-passcode-enabled":0,"meeting-type":"conference","meeting-video-layout ":"conversation","meeting-name":"laboris minim mollit ullamco aliquip","meeting-join-require-invite-enabled":0}; // \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsPostRequest

try {
    $result = $apiInstance->domainsDomainUsersUserMeetingsPost($domain, $user, $domains_domain_users_user_meetings_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->domainsDomainUsersUserMeetingsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **domains_domain_users_user_meetings_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsPostRequest**](../Model/DomainsDomainUsersUserMeetingsPostRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Meeting[]**](../Model/Meeting.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `meetingsRegisterMeetingRegistrationIdPost()`

```php
meetingsRegisterMeetingRegistrationIdPost($meeting_registration_id, $meetings_register_meeting_registration_id_post_request): object
```

Register Meeting



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MeetingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meeting_registration_id = 'meeting_registration_id_example'; // string | 
$meetings_register_meeting_registration_id_post_request = new \SpectrumVoip\\\\NetSapiens\Model\MeetingsRegisterMeetingRegistrationIdPostRequest(); // \SpectrumVoip\\\\NetSapiens\Model\MeetingsRegisterMeetingRegistrationIdPostRequest

try {
    $result = $apiInstance->meetingsRegisterMeetingRegistrationIdPost($meeting_registration_id, $meetings_register_meeting_registration_id_post_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MeetingsApi->meetingsRegisterMeetingRegistrationIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **meeting_registration_id** | **string**|  | |
| **meetings_register_meeting_registration_id_post_request** | [**\SpectrumVoip\\\\NetSapiens\Model\MeetingsRegisterMeetingRegistrationIdPostRequest**](../Model/MeetingsRegisterMeetingRegistrationIdPostRequest.md)|  | [optional] |

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
