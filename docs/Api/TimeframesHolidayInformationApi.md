# SpectrumVoip\\\\NetSapiens\TimeframesHolidayInformationApi

All URIs are relative to https://ns-api.com/ns-api/v2, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**holidaysCountriesGet()**](TimeframesHolidayInformationApi.md#holidaysCountriesGet) | **GET** /holidays/countries | Read List of Supported Countries |
| [**holidaysCountryRegionYearGet()**](TimeframesHolidayInformationApi.md#holidaysCountryRegionYearGet) | **GET** /holidays/{country}/{region}/{year} | Read Holiday Information by Country and Region |
| [**holidaysCountryYearGet()**](TimeframesHolidayInformationApi.md#holidaysCountryYearGet) | **GET** /holidays/{country}/{year} | Read Holiday Information by Country |
| [**holidaysRegionsGet()**](TimeframesHolidayInformationApi.md#holidaysRegionsGet) | **GET** /holidays/regions | Read List of Supported Regions |


## `holidaysCountriesGet()`

```php
holidaysCountriesGet(): \SpectrumVoip\\\\NetSapiens\Model\HolidaysCountriesGet200ResponseInner[]
```

Read List of Supported Countries

Retrieve a list of supported country codes to be used when reading holiday information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesHolidayInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->holidaysCountriesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesHolidayInformationApi->holidaysCountriesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\SpectrumVoip\\\\NetSapiens\Model\HolidaysCountriesGet200ResponseInner[]**](../Model/HolidaysCountriesGet200ResponseInner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `holidaysCountryRegionYearGet()`

```php
holidaysCountryRegionYearGet($country, $region, $year, $language): object
```

Read Holiday Information by Country and Region



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesHolidayInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = 'country_example'; // string | The country from which to read holidays - format: ISO-3166 A-2 e.g.: US, MX
$region = 'region_example'; // string | The region within the ```country``` from which to read holidays - format: ISO 3166-2 e.g.: US-NY, MX-ZAC
$year = 'year_example'; // string | The year in which to read holidays
$language = ; // string | Language formatted according to ISO 639-1

try {
    $result = $apiInstance->holidaysCountryRegionYearGet($country, $region, $year, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesHolidayInformationApi->holidaysCountryRegionYearGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**| The country from which to read holidays - format: ISO-3166 A-2 e.g.: US, MX | |
| **region** | **string**| The region within the &#x60;&#x60;&#x60;country&#x60;&#x60;&#x60; from which to read holidays - format: ISO 3166-2 e.g.: US-NY, MX-ZAC | |
| **year** | **string**| The year in which to read holidays | |
| **language** | **string**| Language formatted according to ISO 639-1 | [optional] |

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

## `holidaysCountryYearGet()`

```php
holidaysCountryYearGet($country, $year, $language, $body): object[]
```

Read Holiday Information by Country

In order to create holidays in a Holiday timeframe or a Custom timeframe, it is necessary to supply a series of parameters for each holiday that can be obtained via this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesHolidayInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = 'country_example'; // string | The country from which to read holidays - format: ISO-3166 A-2
$year = 'year_example'; // string | The year in which to read holidays - format: YYYY
$language = ; // string | Language formatted according to ISO 639-1
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->holidaysCountryYearGet($country, $year, $language, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesHolidayInformationApi->holidaysCountryYearGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **country** | **string**| The country from which to read holidays - format: ISO-3166 A-2 | |
| **year** | **string**| The year in which to read holidays - format: YYYY | |
| **language** | **string**| Language formatted according to ISO 639-1 | [optional] |
| **body** | **object**|  | [optional] |

### Return type

**object[]**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `holidaysRegionsGet()`

```php
holidaysRegionsGet(): object
```

Read List of Supported Regions

Retrieve a list of supported region codes by country, to be used when reading holiday information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = SpectrumVoip\\\\NetSapiens\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SpectrumVoip\\\\NetSapiens\Api\TimeframesHolidayInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->holidaysRegionsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeframesHolidayInformationApi->holidaysRegionsGet: ', $e->getMessage(), PHP_EOL;
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
