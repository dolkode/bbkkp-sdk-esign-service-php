# BBSPJIKKP\Sdk\Esign\EsignApi

All URIs are relative to http://localhost:10020, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserNik()**](EsignApi.md#getUserNik) | **GET** /api/esign/nik/{nik} | Get user information |
| [**signDocument()**](EsignApi.md#signDocument) | **POST** /api/esign/sign | Add signature to a document |
| [**verifyDocumentByDoc()**](EsignApi.md#verifyDocumentByDoc) | **POST** /api/esign/verify/doc | Verify signature |
| [**verifyDocumentById()**](EsignApi.md#verifyDocumentById) | **GET** /api/esign/verify/id | Verify signature |


## `getUserNik()`

```php
getUserNik($nik): \BBSPJIKKP\Sdk\Esign\Model\GetUserNik200Response
```

Get user information

Get user information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BBSPJIKKP\Sdk\Esign\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BBSPJIKKP\Sdk\Esign\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BBSPJIKKP\Sdk\Esign\Api\EsignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nik = 'nik_example'; // string | NIK, Nomor Induk Kepegawaian

try {
    $result = $apiInstance->getUserNik($nik);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EsignApi->getUserNik: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **nik** | **string**| NIK, Nomor Induk Kepegawaian | |

### Return type

[**\BBSPJIKKP\Sdk\Esign\Model\GetUserNik200Response**](../Model/GetUserNik200Response.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `signDocument()`

```php
signDocument($file, $nik, $passphrase, $ref_code, $file_name, $ref_metadata): \BBSPJIKKP\Sdk\Esign\Model\SignResponse
```

Add signature to a document

Add signature to a document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BBSPJIKKP\Sdk\Esign\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BBSPJIKKP\Sdk\Esign\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BBSPJIKKP\Sdk\Esign\Api\EsignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject
$nik = 'nik_example'; // string
$passphrase = 'passphrase_example'; // string
$ref_code = 'ref_code_example'; // string | Reference code adalah nomor unik disetiap layanan untuk verifikasi dokumen
$file_name = 'file_name_example'; // string
$ref_metadata = 'ref_metadata_example'; // string | Metadata tambahan untuk verifikasi dokumen dalam format JSON yang di encode base64

try {
    $result = $apiInstance->signDocument($file, $nik, $passphrase, $ref_code, $file_name, $ref_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EsignApi->signDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**|  | |
| **nik** | **string**|  | |
| **passphrase** | **string**|  | |
| **ref_code** | **string**| Reference code adalah nomor unik disetiap layanan untuk verifikasi dokumen | |
| **file_name** | **string**|  | [optional] |
| **ref_metadata** | **string**| Metadata tambahan untuk verifikasi dokumen dalam format JSON yang di encode base64 | [optional] |

### Return type

[**\BBSPJIKKP\Sdk\Esign\Model\SignResponse**](../Model/SignResponse.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyDocumentByDoc()`

```php
verifyDocumentByDoc($signed_file): \BBSPJIKKP\Sdk\Esign\Model\EsignResult
```

Verify signature

Can be reference code or esign id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BBSPJIKKP\Sdk\Esign\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BBSPJIKKP\Sdk\Esign\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BBSPJIKKP\Sdk\Esign\Api\EsignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signed_file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->verifyDocumentByDoc($signed_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EsignApi->verifyDocumentByDoc: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signed_file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\BBSPJIKKP\Sdk\Esign\Model\EsignResult**](../Model/EsignResult.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyDocumentById()`

```php
verifyDocumentById($id): \BBSPJIKKP\Sdk\Esign\Model\EsignResult
```

Verify signature

Can be reference code/esign id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = BBSPJIKKP\Sdk\Esign\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BBSPJIKKP\Sdk\Esign\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new BBSPJIKKP\Sdk\Esign\Api\EsignApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Esign ID / Reference Code

try {
    $result = $apiInstance->verifyDocumentById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EsignApi->verifyDocumentById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Esign ID / Reference Code | |

### Return type

[**\BBSPJIKKP\Sdk\Esign\Model\EsignResult**](../Model/EsignResult.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
