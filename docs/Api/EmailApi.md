# SpectrumVoip\\\\NetSapiens\EmailApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sendEmail()**](EmailApi.md#sendEmail) | **POST** /domains/{domain}/users/{user}/email | Send Email using Template |


## `sendEmail()`

```php
sendEmail($domain, $user, $email_create): object
```

Send Email using Template

This API will send a email to a specific user usign their email address configured on the account and obtained from the domain and user provided. A example email would be a welcome email with links to setup the new account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 
$user = '~'; // string | 
$email_create = {"template":"welcome_email.php","subject":"New Account Setup"}; // \SpectrumVoip\\\\NetSapiens\Model\EmailCreate

try {
    $result = $apiInstance->sendEmail($domain, $user, $email_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->sendEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **user** | **string**|  | [default to &#39;~&#39;] |
| **email_create** | [**\SpectrumVoip\\\\NetSapiens\Model\EmailCreate**](../Model/EmailCreate.md)|  | [optional] |

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
