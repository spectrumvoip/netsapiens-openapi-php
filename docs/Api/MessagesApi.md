# SpectrumVoip\\\\NetSapiens\MessagesApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteMessagesession()**](MessagesApi.md#deleteMessagesession) | **DELETE** /domains/{domain}/users/{user}/messagesessions/{messagesession} | Delete Messagesession |
| [**getMessageSessionsForDomain()**](MessagesApi.md#getMessageSessionsForDomain) | **GET** /domains/{domain}/messagesessions | Get Messagesessions for Domain |
| [**getMessageSessionsForUser()**](MessagesApi.md#getMessageSessionsForUser) | **GET** /domains/{domain}/users/{user}/messagesessions | Get Messagesessions for User |
| [**getMessagesForMessagesession()**](MessagesApi.md#getMessagesForMessagesession) | **GET** /domains/{domain}/users/{user}/messagesessions/{messagesession}/messages | Get Messages for Messagesession |
| [**leaveMessagesession()**](MessagesApi.md#leaveMessagesession) | **PUT** /domains/{domain}/users/{user}/messagesessions/{messagesession}/leave | Update Messagesession (Leave) |
| [**sendMessageChat()**](MessagesApi.md#sendMessageChat) | **POST** /domains/{domain}/users/{user}/messagesessions/{messagesession}/messages | Send a message (Chat) |
| [**sendMessageGroupChat()**](MessagesApi.md#sendMessageGroupChat) | **POST** /domains/{domain}/users/{user}/messagesessions/{messagesession}/messages#1 | Send a message (Group Chat) |
| [**sendMessageGroupSMS()**](MessagesApi.md#sendMessageGroupSMS) | **POST** /domains/{domain}/users/{user}/messagesessions/{messagesession}/messages#4 | Send a message (Group SMS) |
| [**sendMessageMMS()**](MessagesApi.md#sendMessageMMS) | **POST** /domains/{domain}/users/{user}/messagesessions/{messagesession}/messages#5 | Send a message (MMS) |
| [**sendMessageMediaChat()**](MessagesApi.md#sendMessageMediaChat) | **POST** /domains/{domain}/users/{user}/messagesessions/{messagesession}/messages#2 | Send a message (Media Chat) |
| [**sendMessageSMS()**](MessagesApi.md#sendMessageSMS) | **POST** /domains/{domain}/users/{user}/messagesessions/{messagesession}/messages#3 | Send a message (SMS) |
| [**startSession()**](MessagesApi.md#startSession) | **POST** /domains/{domain}/users/{user}/messages | Start a new Message Session |
| [**updateMessageSessionParticipants()**](MessagesApi.md#updateMessageSessionParticipants) | **PUT** /domains/{domain}/users/{user}/messagesessions/{messagesession} | Update Messagesession (Participants) |
| [**updateMessageSessionSessionName()**](MessagesApi.md#updateMessageSessionSessionName) | **PUT** /domains/{domain}/users/{user}/messagesessions/{messagesession}#1 | Update Messagesession (Session Name) |


## `deleteMessagesession()`

```php
deleteMessagesession($domain, $user, $messagesession): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Delete Messagesession



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = sampleDomain; // string | 
$user = 1000; // string | 
$messagesession = ; // string | ID of the message session to delete

try {
    $result = $apiInstance->deleteMessagesession($domain, $user, $messagesession);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->deleteMessagesession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **messagesession** | **string**| ID of the message session to delete | |

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

## `getMessageSessionsForDomain()`

```php
getMessageSessionsForDomain($domain, $limit): \SpectrumVoip\\\\NetSapiens\Model\Messagesession[]
```

Get Messagesessions for Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = {{domain}}; // string | 
$limit = 10; // int | 

try {
    $result = $apiInstance->getMessageSessionsForDomain($domain, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getMessageSessionsForDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **limit** | **int**|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Messagesession[]**](../Model/Messagesession.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessageSessionsForUser()`

```php
getMessageSessionsForUser($domain, $user, $limit): \SpectrumVoip\\\\NetSapiens\Model\Messagesession[]
```

Get Messagesessions for User



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = sampleDomain; // string | 
$user = sampleUser; // string | 
$limit = 10; // int | 

try {
    $result = $apiInstance->getMessageSessionsForUser($domain, $user, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getMessageSessionsForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **limit** | **int**|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Messagesession[]**](../Model/Messagesession.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMessagesForMessagesession()`

```php
getMessagesForMessagesession($domain, $user, $messagesession, $limit): \SpectrumVoip\\\\NetSapiens\Model\Message[]
```

Get Messages for Messagesession



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$user = '~'; // string | 
$messagesession = 'messagesession_example'; // string | 
$limit = 10; // int | 

try {
    $result = $apiInstance->getMessagesForMessagesession($domain, $user, $messagesession, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getMessagesForMessagesession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **messagesession** | **string**|  | |
| **limit** | **int**|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Message[]**](../Model/Message.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `leaveMessagesession()`

```php
leaveMessagesession($domain, $user, $messagesession): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Update Messagesession (Leave)

This is how you leave a chat conversation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = portal; // string | 
$user = 1123; // string | 
$messagesession = ; // string | ID of the message session to send in (when changing participants, do not change the session ID)

try {
    $result = $apiInstance->leaveMessagesession($domain, $user, $messagesession);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->leaveMessagesession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **messagesession** | **string**| ID of the message session to send in (when changing participants, do not change the session ID) | |

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

## `sendMessageChat()`

```php
sendMessageChat($domain, $user, $messagesession, $send_message_chat_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Send a message (Chat)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$user = ; // string | 
$messagesession = ; // string | ID of the message session to send in. Needs to be at least 32 characters long and random. Only alphanumeric chracters and underscore are allowed.
$send_message_chat_request = {"type":"chat","message":"Hello there!","destination":"0010"}; // \SpectrumVoip\\\\NetSapiens\Model\SendMessageChatRequest

try {
    $result = $apiInstance->sendMessageChat($domain, $user, $messagesession, $send_message_chat_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **messagesession** | **string**| ID of the message session to send in. Needs to be at least 32 characters long and random. Only alphanumeric chracters and underscore are allowed. | |
| **send_message_chat_request** | [**\SpectrumVoip\\\\NetSapiens\Model\SendMessageChatRequest**](../Model/SendMessageChatRequest.md)|  | [optional] |

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

## `sendMessageGroupChat()`

```php
sendMessageGroupChat($domain, $user, $messagesession, $send_message_chat_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Send a message (Group Chat)

> Note: # and anything after is NOT needed, its just to allow multiple examples for the same path/method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = sampleDomain; // string | 
$user = sampleUser; // string | 
$messagesession = ; // string | ID of the message session to send in. Needs to be at least 32 characters long and random. Only alphanumeric chracters and underscore are allowed.
$send_message_chat_request = {"type":"chat","message":"Hi there! Sending a group chat message!","destination":["1123","1004"]}; // \SpectrumVoip\\\\NetSapiens\Model\SendMessageChatRequest

try {
    $result = $apiInstance->sendMessageGroupChat($domain, $user, $messagesession, $send_message_chat_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageGroupChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **messagesession** | **string**| ID of the message session to send in. Needs to be at least 32 characters long and random. Only alphanumeric chracters and underscore are allowed. | |
| **send_message_chat_request** | [**\SpectrumVoip\\\\NetSapiens\Model\SendMessageChatRequest**](../Model/SendMessageChatRequest.md)|  | [optional] |

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

## `sendMessageGroupSMS()`

```php
sendMessageGroupSMS($domain, $user, $messagesession, $message_send): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Send a message (Group SMS)

> Note: # and anything after is NOT needed, its just to allow multiple examples for the same path/method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = sampleDomain; // string | 
$user = 1000; // string | 
$messagesession = ; // string | ID of the message session to send in. Needs to be at least 32 characters long and random. Only alphanumeric chracters and underscore are allowed.
$message_send = {"message":"Hello there! Sending a group SMS","type":"sms","from-number":"18585550003","destination":["18585551234","18585550001"]}; // \SpectrumVoip\\\\NetSapiens\Model\MessageSend

try {
    $result = $apiInstance->sendMessageGroupSMS($domain, $user, $messagesession, $message_send);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageGroupSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **messagesession** | **string**| ID of the message session to send in. Needs to be at least 32 characters long and random. Only alphanumeric chracters and underscore are allowed. | |
| **message_send** | [**\SpectrumVoip\\\\NetSapiens\Model\MessageSend**](../Model/MessageSend.md)|  | [optional] |

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

## `sendMessageMMS()`

```php
sendMessageMMS($domain, $user, $messagesession, $message_send): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Send a message (MMS)

> Note: # and anything after is NOT needed, its just to allow multiple examples for the same path/method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = sampleDomain; // string | 
$user = 1000; // string | 
$messagesession = ; // string | ID of the message session to send in. Needs to be at least 32 characters long and random. Only alphanumeric chracters and underscore are allowed.
$message_send = {"message":"media","type":"mms","from-number":"18585550003","destination":["18585551234","18585550001"],"data":"iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNkYPhfDwAChwGA60e6kgAAAABJRU5ErkJggg==","mime-type":"image/png","size":70}; // \SpectrumVoip\\\\NetSapiens\Model\MessageSend

try {
    $result = $apiInstance->sendMessageMMS($domain, $user, $messagesession, $message_send);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageMMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **messagesession** | **string**| ID of the message session to send in. Needs to be at least 32 characters long and random. Only alphanumeric chracters and underscore are allowed. | |
| **message_send** | [**\SpectrumVoip\\\\NetSapiens\Model\MessageSend**](../Model/MessageSend.md)|  | [optional] |

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

## `sendMessageMediaChat()`

```php
sendMessageMediaChat($domain, $user, $messagesession, $send_message_chat_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Send a message (Media Chat)

> Note: # and anything after is NOT needed, its just to allow multiple examples for the same path/method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = sampleDomain; // string | 
$user = sampleUser; // string | 
$messagesession = ; // string | ID of the message session to send in. Needs to be at least 32 characters long and random. Only alphanumeric chracters and underscore are allowed.
$send_message_chat_request = {"type":"chat-media","message":"media","destination":["1123","1004"],"data":"iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAADUlEQVR42mNkYPhfDwAChwGA60e6kgAAAABJRU5ErkJggg==","mime-type":"image/png","size":70}; // \SpectrumVoip\\\\NetSapiens\Model\SendMessageChatRequest

try {
    $result = $apiInstance->sendMessageMediaChat($domain, $user, $messagesession, $send_message_chat_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageMediaChat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **messagesession** | **string**| ID of the message session to send in. Needs to be at least 32 characters long and random. Only alphanumeric chracters and underscore are allowed. | |
| **send_message_chat_request** | [**\SpectrumVoip\\\\NetSapiens\Model\SendMessageChatRequest**](../Model/SendMessageChatRequest.md)|  | [optional] |

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

## `sendMessageSMS()`

```php
sendMessageSMS($domain, $user, $messagesession, $message_send): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Send a message (SMS)

> Note: # and anything after is NOT needed, its just to allow multiple examples for the same path/method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = sampleDomain; // string | 
$user = 1000; // string | 
$messagesession = ; // string | ID of the message session to send in. Needs to be at least 32 characters long and random. Only alphanumeric chracters and underscore are allowed.
$message_send = {"type":"sms","message":"Hello there, sending sms!","destination":"18585551234","from-number":"18585550001"}; // \SpectrumVoip\\\\NetSapiens\Model\MessageSend

try {
    $result = $apiInstance->sendMessageSMS($domain, $user, $messagesession, $message_send);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->sendMessageSMS: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **messagesession** | **string**| ID of the message session to send in. Needs to be at least 32 characters long and random. Only alphanumeric chracters and underscore are allowed. | |
| **message_send** | [**\SpectrumVoip\\\\NetSapiens\Model\MessageSend**](../Model/MessageSend.md)|  | [optional] |

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

## `startSession()`

```php
startSession($domain, $user, $send_message_chat_request): \SpectrumVoip\\\\NetSapiens\Model\Message
```

Start a new Message Session

This is a good place to start with messaging if you do not already have a message session ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = ; // string | 
$user = ; // string | 
$send_message_chat_request = {type=chat, message=Hello there!, destination=0010}; // \SpectrumVoip\\\\NetSapiens\Model\SendMessageChatRequest

try {
    $result = $apiInstance->startSession($domain, $user, $send_message_chat_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->startSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **send_message_chat_request** | [**\SpectrumVoip\\\\NetSapiens\Model\SendMessageChatRequest**](../Model/SendMessageChatRequest.md)|  | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Message**](../Model/Message.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMessageSessionParticipants()`

```php
updateMessageSessionParticipants($domain, $user, $messagesession, $update_message_session_participants_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Update Messagesession (Participants)

This is how you add or remove participants from a chat message session. You cannot add or remove from a group MMS session, in that case you must start a new session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = portal; // string | 
$user = 1123; // string | 
$messagesession = ; // string | ID of the message session to send in (when changing participants, do not change the session ID)
$update_message_session_participants_request = {
    "participants":  "0010@portal,2500@portal,0009@portal,001010@portal,1123@portal",
}; // \SpectrumVoip\\\\NetSapiens\Model\UpdateMessageSessionParticipantsRequest

try {
    $result = $apiInstance->updateMessageSessionParticipants($domain, $user, $messagesession, $update_message_session_participants_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->updateMessageSessionParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **messagesession** | **string**| ID of the message session to send in (when changing participants, do not change the session ID) | |
| **update_message_session_participants_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateMessageSessionParticipantsRequest**](../Model/UpdateMessageSessionParticipantsRequest.md)|  | [optional] |

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

## `updateMessageSessionSessionName()`

```php
updateMessageSessionSessionName($domain, $user, $messagesession, $update_message_session_session_name_request): \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesReorderPut202Response
```

Update Messagesession (Session Name)

This is how you change the chat session name. You cannot name or rename an MMS group session.  > Note: # and anything after is NOT needed, its just to allow multiple examples for the same path/method.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = portal; // string | 
$user = 1123; // string | 
$messagesession = ; // string | ID of the message session to send in (when changing participants, do not change the session ID)
$update_message_session_session_name_request = {"session-name":"Poway Soccer Team"}; // \SpectrumVoip\\\\NetSapiens\Model\UpdateMessageSessionSessionNameRequest

try {
    $result = $apiInstance->updateMessageSessionSessionName($domain, $user, $messagesession, $update_message_session_session_name_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->updateMessageSessionSessionName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **messagesession** | **string**| ID of the message session to send in (when changing participants, do not change the session ID) | |
| **update_message_session_session_name_request** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateMessageSessionSessionNameRequest**](../Model/UpdateMessageSessionSessionNameRequest.md)|  | [optional] |

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
