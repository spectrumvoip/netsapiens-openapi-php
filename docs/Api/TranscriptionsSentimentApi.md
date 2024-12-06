# SpectrumVoip\\\\NetSapiens\TranscriptionsSentimentApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**domainsDomainTranscriptionsGet()**](TranscriptionsSentimentApi.md#domainsDomainTranscriptionsGet) | **GET** /domains/{domain}/transcriptions | Read Transcription for Specific Call |


## `domainsDomainTranscriptionsGet()`

```php
domainsDomainTranscriptionsGet($domain, $id, $date, $orig_callid, $term_callid, $by_callid, $callid): \SpectrumVoip\\\\NetSapiens\Model\Transcription
```

Read Transcription for Specific Call



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TranscriptionsSentimentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain = example.com; // string | 
$id = 423542156; // float | The Job Id of the recording transcription. Required to be given on request. ID can be found in CDR read when available using field \"call-intelligence-job-id\"
$date = 202405; // string | The date will help identify the year and month of the call to limit the search down. The format will be YYYYMM
$orig_callid = 453691718_66427591@4.55.78.161; // string | One callid_id needs to be provided that can be linked to the domain of the call> you can use any of the fields orig_callid, term_callid, by_callid or if you dont know which one you have just callid though callid might have additional DB lookups.
$term_callid = 20241001224534015297-092d2c5baad20a2a3e5ae22b849b5e6; // string | One callid_id needs to be provided that can be linked to the domain of the call> you can use any of the fields orig_callid, term_callid, by_callid or if you dont know which one you have just callid though callid might have additional DB lookups.
$by_callid = 20241001224534015293-092d2c5baad20a2a3e5ae22b849b5e6c; // string | One callid_id needs to be provided that can be linked to the domain of the call> you can use any of the fields orig_callid, term_callid, by_callid or if you dont know which one you have just callid though callid might have additional DB lookups.
$callid = 20241001224534015297-092d2c5baad20a2a3e5ae22b849b5e6; // string | One callid_id needs to be provided that can be linked to the domain of the call> you can use any of the fields orig_callid, term_callid, by_callid or if you dont know which one you have just callid though callid might have additional DB lookups.

try {
    $result = $apiInstance->domainsDomainTranscriptionsGet($domain, $id, $date, $orig_callid, $term_callid, $by_callid, $callid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TranscriptionsSentimentApi->domainsDomainTranscriptionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | [default to &#39;~&#39;] |
| **id** | **float**| The Job Id of the recording transcription. Required to be given on request. ID can be found in CDR read when available using field \&quot;call-intelligence-job-id\&quot; | [optional] |
| **date** | **string**| The date will help identify the year and month of the call to limit the search down. The format will be YYYYMM | [optional] |
| **orig_callid** | **string**| One callid_id needs to be provided that can be linked to the domain of the call&gt; you can use any of the fields orig_callid, term_callid, by_callid or if you dont know which one you have just callid though callid might have additional DB lookups. | [optional] |
| **term_callid** | **string**| One callid_id needs to be provided that can be linked to the domain of the call&gt; you can use any of the fields orig_callid, term_callid, by_callid or if you dont know which one you have just callid though callid might have additional DB lookups. | [optional] |
| **by_callid** | **string**| One callid_id needs to be provided that can be linked to the domain of the call&gt; you can use any of the fields orig_callid, term_callid, by_callid or if you dont know which one you have just callid though callid might have additional DB lookups. | [optional] |
| **callid** | **string**| One callid_id needs to be provided that can be linked to the domain of the call&gt; you can use any of the fields orig_callid, term_callid, by_callid or if you dont know which one you have just callid though callid might have additional DB lookups. | [optional] |

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\Transcription**](../Model/Transcription.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
