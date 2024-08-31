# SignatureDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**InfoTsa** | Pointer to [**InfoTSA**](InfoTSA.md) |  | [optional] 
**SignatureField** | Pointer to **string** |  | [optional] 
**InfoSigner** | Pointer to [**InfoSigner**](InfoSigner.md) |  | [optional] 
**SignatureDocument** | Pointer to [**SignatureDocument**](SignatureDocument.md) |  | [optional] 

## Methods

### NewSignatureDetail

`func NewSignatureDetail() *SignatureDetail`

NewSignatureDetail instantiates a new SignatureDetail object
This constructor will assign default values to properties that have it defined,
and makes sure properties required by API are set, but the set of arguments
will change when the set of required properties is changed

### NewSignatureDetailWithDefaults

`func NewSignatureDetailWithDefaults() *SignatureDetail`

NewSignatureDetailWithDefaults instantiates a new SignatureDetail object
This constructor will only assign default values to properties that have it defined,
but it doesn't guarantee that properties required by API are set

### GetInfoTsa

`func (o *SignatureDetail) GetInfoTsa() InfoTSA`

GetInfoTsa returns the InfoTsa field if non-nil, zero value otherwise.

### GetInfoTsaOk

`func (o *SignatureDetail) GetInfoTsaOk() (*InfoTSA, bool)`

GetInfoTsaOk returns a tuple with the InfoTsa field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetInfoTsa

`func (o *SignatureDetail) SetInfoTsa(v InfoTSA)`

SetInfoTsa sets InfoTsa field to given value.

### HasInfoTsa

`func (o *SignatureDetail) HasInfoTsa() bool`

HasInfoTsa returns a boolean if a field has been set.

### GetSignatureField

`func (o *SignatureDetail) GetSignatureField() string`

GetSignatureField returns the SignatureField field if non-nil, zero value otherwise.

### GetSignatureFieldOk

`func (o *SignatureDetail) GetSignatureFieldOk() (*string, bool)`

GetSignatureFieldOk returns a tuple with the SignatureField field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetSignatureField

`func (o *SignatureDetail) SetSignatureField(v string)`

SetSignatureField sets SignatureField field to given value.

### HasSignatureField

`func (o *SignatureDetail) HasSignatureField() bool`

HasSignatureField returns a boolean if a field has been set.

### GetInfoSigner

`func (o *SignatureDetail) GetInfoSigner() InfoSigner`

GetInfoSigner returns the InfoSigner field if non-nil, zero value otherwise.

### GetInfoSignerOk

`func (o *SignatureDetail) GetInfoSignerOk() (*InfoSigner, bool)`

GetInfoSignerOk returns a tuple with the InfoSigner field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetInfoSigner

`func (o *SignatureDetail) SetInfoSigner(v InfoSigner)`

SetInfoSigner sets InfoSigner field to given value.

### HasInfoSigner

`func (o *SignatureDetail) HasInfoSigner() bool`

HasInfoSigner returns a boolean if a field has been set.

### GetSignatureDocument

`func (o *SignatureDetail) GetSignatureDocument() SignatureDocument`

GetSignatureDocument returns the SignatureDocument field if non-nil, zero value otherwise.

### GetSignatureDocumentOk

`func (o *SignatureDetail) GetSignatureDocumentOk() (*SignatureDocument, bool)`

GetSignatureDocumentOk returns a tuple with the SignatureDocument field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetSignatureDocument

`func (o *SignatureDetail) SetSignatureDocument(v SignatureDocument)`

SetSignatureDocument sets SignatureDocument field to given value.

### HasSignatureDocument

`func (o *SignatureDetail) HasSignatureDocument() bool`

HasSignatureDocument returns a boolean if a field has been set.


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


