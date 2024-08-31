# OpenAPI\Client\EsignApi

All URIs are relative to http://localhost:10020, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiEsignNikNikGet()**](EsignApi.md#apiEsignNikNikGet) | **GET** /api/esign/nik/{nik} | Get user information |
| [**apiEsignSignPost()**](EsignApi.md#apiEsignSignPost) | **POST** /api/esign/sign | Add signature to a document |
| [**apiEsignVerifyDocPost()**](EsignApi.md#apiEsignVerifyDocPost) | **POST** /api/esign/verify/doc | Verify signature |
| [**apiEsignVerifyIdGet()**](EsignApi.md#apiEsignVerifyIdGet) | **GET** /api/esign/verify/id | Verify signature |


## `apiEsignNikNikGet()`

```php
apiEsignNikNikGet($nik): \OpenAPI\Client\Model\ApiEsignNikNikGet200Response
```

Get user information

Get user information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EsignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nik = 'nik_example'; // string | NIK, Nomor Induk Kepegawaian

try {
    $result = $apiInstance->apiEsignNikNikGet($nik);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EsignApi->apiEsignNikNikGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nik** | **string**| NIK, Nomor Induk Kepegawaian | |

### Return type

[**\OpenAPI\Client\Model\ApiEsignNikNikGet200Response**](../Model/ApiEsignNikNikGet200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiEsignSignPost()`

```php
apiEsignSignPost($file, $nik, $passphrase, $ref_code): \OpenAPI\Client\Model\SignResponse
```

Add signature to a document

Add signature to a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EsignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject
$nik = 'nik_example'; // string
$passphrase = 'passphrase_example'; // string
$ref_code = 'ref_code_example'; // string | Reference code adalah nomor unik disetiap layanan untuk verifikasi dokumen

try {
    $result = $apiInstance->apiEsignSignPost($file, $nik, $passphrase, $ref_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EsignApi->apiEsignSignPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |
| **nik** | **string**|  | [optional] |
| **passphrase** | **string**|  | [optional] |
| **ref_code** | **string**| Reference code adalah nomor unik disetiap layanan untuk verifikasi dokumen | [optional] |

### Return type

[**\OpenAPI\Client\Model\SignResponse**](../Model/SignResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiEsignVerifyDocPost()`

```php
apiEsignVerifyDocPost($signed_file): \OpenAPI\Client\Model\EsignDetails
```

Verify signature

Can be reference code or esign id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EsignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signed_file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->apiEsignVerifyDocPost($signed_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EsignApi->apiEsignVerifyDocPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signed_file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EsignDetails**](../Model/EsignDetails.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiEsignVerifyIdGet()`

```php
apiEsignVerifyIdGet($id): \OpenAPI\Client\Model\EsignResult
```

Verify signature

Can be reference code/esign id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EsignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Esign ID / Reference Code

try {
    $result = $apiInstance->apiEsignVerifyIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EsignApi->apiEsignVerifyIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Esign ID / Reference Code | |

### Return type

[**\OpenAPI\Client\Model\EsignResult**](../Model/EsignResult.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
