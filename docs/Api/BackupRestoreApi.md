# SpectrumVoip\\\\NetSapiens\BackupRestoreApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**backupPost()**](BackupRestoreApi.md#backupPost) | **POST** /backup | Request a Full System backup |
| [**domainsDomainBackupPost()**](BackupRestoreApi.md#domainsDomainBackupPost) | **POST** /domains/{domain}/backup | Manually Backup a Domain |
| [**restoreGet()**](BackupRestoreApi.md#restoreGet) | **GET** /restore | Read Available Restore Points |
| [**restorePut()**](BackupRestoreApi.md#restorePut) | **PUT** /restore | Restore a Specifc Domain Backup |


## `backupPost()`

```php
backupPost(): object
```

Request a Full System backup



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\BackupRestoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->backupPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupRestoreApi->backupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `domainsDomainBackupPost()`

```php
domainsDomainBackupPost($domain): object
```

Manually Backup a Domain



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\BackupRestoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = '~'; // string | 

try {
    $result = $apiInstance->domainsDomainBackupPost($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupRestoreApi->domainsDomainBackupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |

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

## `restoreGet()`

```php
restoreGet($domain, $hostname, $index, $type, $show_file_details): object
```

Read Available Restore Points



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\BackupRestoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = exmaple.com; // string | 
$hostname = core1.example.com; // string | 
$index = 4; // string | 
$type = nightly; // string | 
$show_file_details = no; // string | 

try {
    $result = $apiInstance->restoreGet($domain, $hostname, $index, $type, $show_file_details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupRestoreApi->restoreGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **hostname** | **string**|  | [optional] |
| **index** | **string**|  | [optional] |
| **type** | **string**|  | [optional] |
| **show_file_details** | **string**|  | [optional] |

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

## `restorePut()`

```php
restorePut($restore): object
```

Restore a Specifc Domain Backup



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\BackupRestoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$restore = new \SpectrumVoip\\\\NetSapiens\Model\Restore(); // \SpectrumVoip\\\\NetSapiens\Model\Restore

try {
    $result = $apiInstance->restorePut($restore);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupRestoreApi->restorePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **restore** | [**\SpectrumVoip\\\\NetSapiens\Model\Restore**](../Model/Restore.md)|  | [optional] |

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
