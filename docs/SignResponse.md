# SignResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Message** | Pointer to **string** |  | [optional] 
**Results** | Pointer to [**SignResponseResults**](SignResponseResults.md) |  | [optional] 

## Methods

### NewSignResponse

`func NewSignResponse() *SignResponse`

NewSignResponse instantiates a new SignResponse object
This constructor will assign default values to properties that have it defined,
and makes sure properties required by API are set, but the set of arguments
will change when the set of required properties is changed

### NewSignResponseWithDefaults

`func NewSignResponseWithDefaults() *SignResponse`

NewSignResponseWithDefaults instantiates a new SignResponse object
This constructor will only assign default values to properties that have it defined,
but it doesn't guarantee that properties required by API are set

### GetMessage

`func (o *SignResponse) GetMessage() string`

GetMessage returns the Message field if non-nil, zero value otherwise.

### GetMessageOk

`func (o *SignResponse) GetMessageOk() (*string, bool)`

GetMessageOk returns a tuple with the Message field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetMessage

`func (o *SignResponse) SetMessage(v string)`

SetMessage sets Message field to given value.

### HasMessage

`func (o *SignResponse) HasMessage() bool`

HasMessage returns a boolean if a field has been set.

### GetResults

`func (o *SignResponse) GetResults() SignResponseResults`

GetResults returns the Results field if non-nil, zero value otherwise.

### GetResultsOk

`func (o *SignResponse) GetResultsOk() (*SignResponseResults, bool)`

GetResultsOk returns a tuple with the Results field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetResults

`func (o *SignResponse) SetResults(v SignResponseResults)`

SetResults sets Results field to given value.

### HasResults

`func (o *SignResponse) HasResults() bool`

HasResults returns a boolean if a field has been set.


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


