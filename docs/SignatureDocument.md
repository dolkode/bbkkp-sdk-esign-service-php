# SignatureDocument

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**SignedUsingTsa** | Pointer to **bool** |  | [optional] 
**Reason** | Pointer to **NullableString** |  | [optional] 
**DocumentIntegrity** | Pointer to **bool** |  | [optional] 
**SignatureValue** | Pointer to **NullableString** |  | [optional] 
**SignedIn** | Pointer to **string** |  | [optional] 
**Location** | Pointer to **NullableString** |  | [optional] 
**HashValue** | Pointer to **NullableString** |  | [optional] 

## Methods

### NewSignatureDocument

`func NewSignatureDocument() *SignatureDocument`

NewSignatureDocument instantiates a new SignatureDocument object
This constructor will assign default values to properties that have it defined,
and makes sure properties required by API are set, but the set of arguments
will change when the set of required properties is changed

### NewSignatureDocumentWithDefaults

`func NewSignatureDocumentWithDefaults() *SignatureDocument`

NewSignatureDocumentWithDefaults instantiates a new SignatureDocument object
This constructor will only assign default values to properties that have it defined,
but it doesn't guarantee that properties required by API are set

### GetSignedUsingTsa

`func (o *SignatureDocument) GetSignedUsingTsa() bool`

GetSignedUsingTsa returns the SignedUsingTsa field if non-nil, zero value otherwise.

### GetSignedUsingTsaOk

`func (o *SignatureDocument) GetSignedUsingTsaOk() (*bool, bool)`

GetSignedUsingTsaOk returns a tuple with the SignedUsingTsa field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetSignedUsingTsa

`func (o *SignatureDocument) SetSignedUsingTsa(v bool)`

SetSignedUsingTsa sets SignedUsingTsa field to given value.

### HasSignedUsingTsa

`func (o *SignatureDocument) HasSignedUsingTsa() bool`

HasSignedUsingTsa returns a boolean if a field has been set.

### GetReason

`func (o *SignatureDocument) GetReason() string`

GetReason returns the Reason field if non-nil, zero value otherwise.

### GetReasonOk

`func (o *SignatureDocument) GetReasonOk() (*string, bool)`

GetReasonOk returns a tuple with the Reason field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetReason

`func (o *SignatureDocument) SetReason(v string)`

SetReason sets Reason field to given value.

### HasReason

`func (o *SignatureDocument) HasReason() bool`

HasReason returns a boolean if a field has been set.

### SetReasonNil

`func (o *SignatureDocument) SetReasonNil(b bool)`

 SetReasonNil sets the value for Reason to be an explicit nil

### UnsetReason
`func (o *SignatureDocument) UnsetReason()`

UnsetReason ensures that no value is present for Reason, not even an explicit nil
### GetDocumentIntegrity

`func (o *SignatureDocument) GetDocumentIntegrity() bool`

GetDocumentIntegrity returns the DocumentIntegrity field if non-nil, zero value otherwise.

### GetDocumentIntegrityOk

`func (o *SignatureDocument) GetDocumentIntegrityOk() (*bool, bool)`

GetDocumentIntegrityOk returns a tuple with the DocumentIntegrity field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetDocumentIntegrity

`func (o *SignatureDocument) SetDocumentIntegrity(v bool)`

SetDocumentIntegrity sets DocumentIntegrity field to given value.

### HasDocumentIntegrity

`func (o *SignatureDocument) HasDocumentIntegrity() bool`

HasDocumentIntegrity returns a boolean if a field has been set.

### GetSignatureValue

`func (o *SignatureDocument) GetSignatureValue() string`

GetSignatureValue returns the SignatureValue field if non-nil, zero value otherwise.

### GetSignatureValueOk

`func (o *SignatureDocument) GetSignatureValueOk() (*string, bool)`

GetSignatureValueOk returns a tuple with the SignatureValue field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetSignatureValue

`func (o *SignatureDocument) SetSignatureValue(v string)`

SetSignatureValue sets SignatureValue field to given value.

### HasSignatureValue

`func (o *SignatureDocument) HasSignatureValue() bool`

HasSignatureValue returns a boolean if a field has been set.

### SetSignatureValueNil

`func (o *SignatureDocument) SetSignatureValueNil(b bool)`

 SetSignatureValueNil sets the value for SignatureValue to be an explicit nil

### UnsetSignatureValue
`func (o *SignatureDocument) UnsetSignatureValue()`

UnsetSignatureValue ensures that no value is present for SignatureValue, not even an explicit nil
### GetSignedIn

`func (o *SignatureDocument) GetSignedIn() string`

GetSignedIn returns the SignedIn field if non-nil, zero value otherwise.

### GetSignedInOk

`func (o *SignatureDocument) GetSignedInOk() (*string, bool)`

GetSignedInOk returns a tuple with the SignedIn field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetSignedIn

`func (o *SignatureDocument) SetSignedIn(v string)`

SetSignedIn sets SignedIn field to given value.

### HasSignedIn

`func (o *SignatureDocument) HasSignedIn() bool`

HasSignedIn returns a boolean if a field has been set.

### GetLocation

`func (o *SignatureDocument) GetLocation() string`

GetLocation returns the Location field if non-nil, zero value otherwise.

### GetLocationOk

`func (o *SignatureDocument) GetLocationOk() (*string, bool)`

GetLocationOk returns a tuple with the Location field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetLocation

`func (o *SignatureDocument) SetLocation(v string)`

SetLocation sets Location field to given value.

### HasLocation

`func (o *SignatureDocument) HasLocation() bool`

HasLocation returns a boolean if a field has been set.

### SetLocationNil

`func (o *SignatureDocument) SetLocationNil(b bool)`

 SetLocationNil sets the value for Location to be an explicit nil

### UnsetLocation
`func (o *SignatureDocument) UnsetLocation()`

UnsetLocation ensures that no value is present for Location, not even an explicit nil
### GetHashValue

`func (o *SignatureDocument) GetHashValue() string`

GetHashValue returns the HashValue field if non-nil, zero value otherwise.

### GetHashValueOk

`func (o *SignatureDocument) GetHashValueOk() (*string, bool)`

GetHashValueOk returns a tuple with the HashValue field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetHashValue

`func (o *SignatureDocument) SetHashValue(v string)`

SetHashValue sets HashValue field to given value.

### HasHashValue

`func (o *SignatureDocument) HasHashValue() bool`

HasHashValue returns a boolean if a field has been set.

### SetHashValueNil

`func (o *SignatureDocument) SetHashValueNil(b bool)`

 SetHashValueNil sets the value for HashValue to be an explicit nil

### UnsetHashValue
`func (o *SignatureDocument) UnsetHashValue()`

UnsetHashValue ensures that no value is present for HashValue, not even an explicit nil

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


