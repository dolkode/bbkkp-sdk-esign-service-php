# \EsignAPI

All URIs are relative to *http://localhost:10020*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ApiEsignNikNikGet**](EsignAPI.md#ApiEsignNikNikGet) | **Get** /api/esign/nik/{nik} | Get user information
[**ApiEsignSignPost**](EsignAPI.md#ApiEsignSignPost) | **Post** /api/esign/sign | Add signature to a document
[**ApiEsignVerifyDocPost**](EsignAPI.md#ApiEsignVerifyDocPost) | **Post** /api/esign/verify/doc | Verify signature
[**ApiEsignVerifyIdGet**](EsignAPI.md#ApiEsignVerifyIdGet) | **Get** /api/esign/verify/id | Verify signature



## ApiEsignNikNikGet

> ApiEsignNikNikGet200Response ApiEsignNikNikGet(ctx, nik).Execute()

Get user information



### Example

```go
package main

import (
	"context"
	"fmt"
	"os"
	openapiclient "github.com/aldinokemal/bbkkp-sdk-esign-service-php"
)

func main() {
	nik := "nik_example" // string | NIK, Nomor Induk Kepegawaian

	configuration := openapiclient.NewConfiguration()
	apiClient := openapiclient.NewAPIClient(configuration)
	resp, r, err := apiClient.EsignAPI.ApiEsignNikNikGet(context.Background(), nik).Execute()
	if err != nil {
		fmt.Fprintf(os.Stderr, "Error when calling `EsignAPI.ApiEsignNikNikGet``: %v\n", err)
		fmt.Fprintf(os.Stderr, "Full HTTP response: %v\n", r)
	}
	// response from `ApiEsignNikNikGet`: ApiEsignNikNikGet200Response
	fmt.Fprintf(os.Stdout, "Response from `EsignAPI.ApiEsignNikNikGet`: %v\n", resp)
}
```

### Path Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**ctx** | **context.Context** | context for authentication, logging, cancellation, deadlines, tracing, etc.
**nik** | **string** | NIK, Nomor Induk Kepegawaian | 

### Other Parameters

Other parameters are passed through a pointer to a apiApiEsignNikNikGetRequest struct via the builder pattern


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------


### Return type

[**ApiEsignNikNikGet200Response**](ApiEsignNikNikGet200Response.md)

### Authorization

[ApiKeyAuth](../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../README.md#documentation-for-models)
[[Back to README]](../README.md)


## ApiEsignSignPost

> SignResponse ApiEsignSignPost(ctx).File(file).Nik(nik).Passphrase(passphrase).RefCode(refCode).Execute()

Add signature to a document



### Example

```go
package main

import (
	"context"
	"fmt"
	"os"
	openapiclient "github.com/aldinokemal/bbkkp-sdk-esign-service-php"
)

func main() {
	file := os.NewFile(1234, "some_file") // *os.File |  (optional)
	nik := "nik_example" // string |  (optional)
	passphrase := "passphrase_example" // string |  (optional)
	refCode := "refCode_example" // string | Reference code adalah nomor unik disetiap layanan untuk verifikasi dokumen (optional)

	configuration := openapiclient.NewConfiguration()
	apiClient := openapiclient.NewAPIClient(configuration)
	resp, r, err := apiClient.EsignAPI.ApiEsignSignPost(context.Background()).File(file).Nik(nik).Passphrase(passphrase).RefCode(refCode).Execute()
	if err != nil {
		fmt.Fprintf(os.Stderr, "Error when calling `EsignAPI.ApiEsignSignPost``: %v\n", err)
		fmt.Fprintf(os.Stderr, "Full HTTP response: %v\n", r)
	}
	// response from `ApiEsignSignPost`: SignResponse
	fmt.Fprintf(os.Stdout, "Response from `EsignAPI.ApiEsignSignPost`: %v\n", resp)
}
```

### Path Parameters



### Other Parameters

Other parameters are passed through a pointer to a apiApiEsignSignPostRequest struct via the builder pattern


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | ***os.File** |  | 
 **nik** | **string** |  | 
 **passphrase** | **string** |  | 
 **refCode** | **string** | Reference code adalah nomor unik disetiap layanan untuk verifikasi dokumen | 

### Return type

[**SignResponse**](SignResponse.md)

### Authorization

[ApiKeyAuth](../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../README.md#documentation-for-models)
[[Back to README]](../README.md)


## ApiEsignVerifyDocPost

> EsignDetails ApiEsignVerifyDocPost(ctx).SignedFile(signedFile).Execute()

Verify signature



### Example

```go
package main

import (
	"context"
	"fmt"
	"os"
	openapiclient "github.com/aldinokemal/bbkkp-sdk-esign-service-php"
)

func main() {
	signedFile := os.NewFile(1234, "some_file") // *os.File |  (optional)

	configuration := openapiclient.NewConfiguration()
	apiClient := openapiclient.NewAPIClient(configuration)
	resp, r, err := apiClient.EsignAPI.ApiEsignVerifyDocPost(context.Background()).SignedFile(signedFile).Execute()
	if err != nil {
		fmt.Fprintf(os.Stderr, "Error when calling `EsignAPI.ApiEsignVerifyDocPost``: %v\n", err)
		fmt.Fprintf(os.Stderr, "Full HTTP response: %v\n", r)
	}
	// response from `ApiEsignVerifyDocPost`: EsignDetails
	fmt.Fprintf(os.Stdout, "Response from `EsignAPI.ApiEsignVerifyDocPost`: %v\n", resp)
}
```

### Path Parameters



### Other Parameters

Other parameters are passed through a pointer to a apiApiEsignVerifyDocPostRequest struct via the builder pattern


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signedFile** | ***os.File** |  | 

### Return type

[**EsignDetails**](EsignDetails.md)

### Authorization

[ApiKeyAuth](../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../README.md#documentation-for-models)
[[Back to README]](../README.md)


## ApiEsignVerifyIdGet

> EsignResult ApiEsignVerifyIdGet(ctx).Id(id).Execute()

Verify signature



### Example

```go
package main

import (
	"context"
	"fmt"
	"os"
	openapiclient "github.com/aldinokemal/bbkkp-sdk-esign-service-php"
)

func main() {
	id := "id_example" // string | Esign ID / Reference Code

	configuration := openapiclient.NewConfiguration()
	apiClient := openapiclient.NewAPIClient(configuration)
	resp, r, err := apiClient.EsignAPI.ApiEsignVerifyIdGet(context.Background()).Id(id).Execute()
	if err != nil {
		fmt.Fprintf(os.Stderr, "Error when calling `EsignAPI.ApiEsignVerifyIdGet``: %v\n", err)
		fmt.Fprintf(os.Stderr, "Full HTTP response: %v\n", r)
	}
	// response from `ApiEsignVerifyIdGet`: EsignResult
	fmt.Fprintf(os.Stdout, "Response from `EsignAPI.ApiEsignVerifyIdGet`: %v\n", resp)
}
```

### Path Parameters



### Other Parameters

Other parameters are passed through a pointer to a apiApiEsignVerifyIdGetRequest struct via the builder pattern


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string** | Esign ID / Reference Code | 

### Return type

[**EsignResult**](EsignResult.md)

### Authorization

[ApiKeyAuth](../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../README.md#documentation-for-models)
[[Back to README]](../README.md)

