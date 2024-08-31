# EsignDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**NamaDokumen** | Pointer to **string** |  | [optional] 
**JumlahSignature** | Pointer to **int32** |  | [optional] 
**Notes** | Pointer to **string** |  | [optional] 
**Details** | Pointer to [**[]SignatureDetail**](SignatureDetail.md) |  | [optional] 
**Summary** | Pointer to **string** |  | [optional] 

## Methods

### NewEsignDetails

`func NewEsignDetails() *EsignDetails`

NewEsignDetails instantiates a new EsignDetails object
This constructor will assign default values to properties that have it defined,
and makes sure properties required by API are set, but the set of arguments
will change when the set of required properties is changed

### NewEsignDetailsWithDefaults

`func NewEsignDetailsWithDefaults() *EsignDetails`

NewEsignDetailsWithDefaults instantiates a new EsignDetails object
This constructor will only assign default values to properties that have it defined,
but it doesn't guarantee that properties required by API are set

### GetNamaDokumen

`func (o *EsignDetails) GetNamaDokumen() string`

GetNamaDokumen returns the NamaDokumen field if non-nil, zero value otherwise.

### GetNamaDokumenOk

`func (o *EsignDetails) GetNamaDokumenOk() (*string, bool)`

GetNamaDokumenOk returns a tuple with the NamaDokumen field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetNamaDokumen

`func (o *EsignDetails) SetNamaDokumen(v string)`

SetNamaDokumen sets NamaDokumen field to given value.

### HasNamaDokumen

`func (o *EsignDetails) HasNamaDokumen() bool`

HasNamaDokumen returns a boolean if a field has been set.

### GetJumlahSignature

`func (o *EsignDetails) GetJumlahSignature() int32`

GetJumlahSignature returns the JumlahSignature field if non-nil, zero value otherwise.

### GetJumlahSignatureOk

`func (o *EsignDetails) GetJumlahSignatureOk() (*int32, bool)`

GetJumlahSignatureOk returns a tuple with the JumlahSignature field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetJumlahSignature

`func (o *EsignDetails) SetJumlahSignature(v int32)`

SetJumlahSignature sets JumlahSignature field to given value.

### HasJumlahSignature

`func (o *EsignDetails) HasJumlahSignature() bool`

HasJumlahSignature returns a boolean if a field has been set.

### GetNotes

`func (o *EsignDetails) GetNotes() string`

GetNotes returns the Notes field if non-nil, zero value otherwise.

### GetNotesOk

`func (o *EsignDetails) GetNotesOk() (*string, bool)`

GetNotesOk returns a tuple with the Notes field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetNotes

`func (o *EsignDetails) SetNotes(v string)`

SetNotes sets Notes field to given value.

### HasNotes

`func (o *EsignDetails) HasNotes() bool`

HasNotes returns a boolean if a field has been set.

### GetDetails

`func (o *EsignDetails) GetDetails() []SignatureDetail`

GetDetails returns the Details field if non-nil, zero value otherwise.

### GetDetailsOk

`func (o *EsignDetails) GetDetailsOk() (*[]SignatureDetail, bool)`

GetDetailsOk returns a tuple with the Details field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetDetails

`func (o *EsignDetails) SetDetails(v []SignatureDetail)`

SetDetails sets Details field to given value.

### HasDetails

`func (o *EsignDetails) HasDetails() bool`

HasDetails returns a boolean if a field has been set.

### GetSummary

`func (o *EsignDetails) GetSummary() string`

GetSummary returns the Summary field if non-nil, zero value otherwise.

### GetSummaryOk

`func (o *EsignDetails) GetSummaryOk() (*string, bool)`

GetSummaryOk returns a tuple with the Summary field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetSummary

`func (o *EsignDetails) SetSummary(v string)`

SetSummary sets Summary field to given value.

### HasSummary

`func (o *EsignDetails) HasSummary() bool`

HasSummary returns a boolean if a field has been set.


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


