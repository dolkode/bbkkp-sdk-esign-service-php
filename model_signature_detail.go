/*
TTE Service

This API is used for sending whatsapp via API

API version: 1.0.0
*/

// Code generated by OpenAPI Generator (https://openapi-generator.tech); DO NOT EDIT.

package sdk-esign-service

import (
	"encoding/json"
)

// checks if the SignatureDetail type satisfies the MappedNullable interface at compile time
var _ MappedNullable = &SignatureDetail{}

// SignatureDetail struct for SignatureDetail
type SignatureDetail struct {
	InfoTsa *InfoTSA `json:"info_tsa,omitempty"`
	SignatureField *string `json:"signature_field,omitempty"`
	InfoSigner *InfoSigner `json:"info_signer,omitempty"`
	SignatureDocument *SignatureDocument `json:"signature_document,omitempty"`
}

// NewSignatureDetail instantiates a new SignatureDetail object
// This constructor will assign default values to properties that have it defined,
// and makes sure properties required by API are set, but the set of arguments
// will change when the set of required properties is changed
func NewSignatureDetail() *SignatureDetail {
	this := SignatureDetail{}
	return &this
}

// NewSignatureDetailWithDefaults instantiates a new SignatureDetail object
// This constructor will only assign default values to properties that have it defined,
// but it doesn't guarantee that properties required by API are set
func NewSignatureDetailWithDefaults() *SignatureDetail {
	this := SignatureDetail{}
	return &this
}

// GetInfoTsa returns the InfoTsa field value if set, zero value otherwise.
func (o *SignatureDetail) GetInfoTsa() InfoTSA {
	if o == nil || IsNil(o.InfoTsa) {
		var ret InfoTSA
		return ret
	}
	return *o.InfoTsa
}

// GetInfoTsaOk returns a tuple with the InfoTsa field value if set, nil otherwise
// and a boolean to check if the value has been set.
func (o *SignatureDetail) GetInfoTsaOk() (*InfoTSA, bool) {
	if o == nil || IsNil(o.InfoTsa) {
		return nil, false
	}
	return o.InfoTsa, true
}

// HasInfoTsa returns a boolean if a field has been set.
func (o *SignatureDetail) HasInfoTsa() bool {
	if o != nil && !IsNil(o.InfoTsa) {
		return true
	}

	return false
}

// SetInfoTsa gets a reference to the given InfoTSA and assigns it to the InfoTsa field.
func (o *SignatureDetail) SetInfoTsa(v InfoTSA) {
	o.InfoTsa = &v
}

// GetSignatureField returns the SignatureField field value if set, zero value otherwise.
func (o *SignatureDetail) GetSignatureField() string {
	if o == nil || IsNil(o.SignatureField) {
		var ret string
		return ret
	}
	return *o.SignatureField
}

// GetSignatureFieldOk returns a tuple with the SignatureField field value if set, nil otherwise
// and a boolean to check if the value has been set.
func (o *SignatureDetail) GetSignatureFieldOk() (*string, bool) {
	if o == nil || IsNil(o.SignatureField) {
		return nil, false
	}
	return o.SignatureField, true
}

// HasSignatureField returns a boolean if a field has been set.
func (o *SignatureDetail) HasSignatureField() bool {
	if o != nil && !IsNil(o.SignatureField) {
		return true
	}

	return false
}

// SetSignatureField gets a reference to the given string and assigns it to the SignatureField field.
func (o *SignatureDetail) SetSignatureField(v string) {
	o.SignatureField = &v
}

// GetInfoSigner returns the InfoSigner field value if set, zero value otherwise.
func (o *SignatureDetail) GetInfoSigner() InfoSigner {
	if o == nil || IsNil(o.InfoSigner) {
		var ret InfoSigner
		return ret
	}
	return *o.InfoSigner
}

// GetInfoSignerOk returns a tuple with the InfoSigner field value if set, nil otherwise
// and a boolean to check if the value has been set.
func (o *SignatureDetail) GetInfoSignerOk() (*InfoSigner, bool) {
	if o == nil || IsNil(o.InfoSigner) {
		return nil, false
	}
	return o.InfoSigner, true
}

// HasInfoSigner returns a boolean if a field has been set.
func (o *SignatureDetail) HasInfoSigner() bool {
	if o != nil && !IsNil(o.InfoSigner) {
		return true
	}

	return false
}

// SetInfoSigner gets a reference to the given InfoSigner and assigns it to the InfoSigner field.
func (o *SignatureDetail) SetInfoSigner(v InfoSigner) {
	o.InfoSigner = &v
}

// GetSignatureDocument returns the SignatureDocument field value if set, zero value otherwise.
func (o *SignatureDetail) GetSignatureDocument() SignatureDocument {
	if o == nil || IsNil(o.SignatureDocument) {
		var ret SignatureDocument
		return ret
	}
	return *o.SignatureDocument
}

// GetSignatureDocumentOk returns a tuple with the SignatureDocument field value if set, nil otherwise
// and a boolean to check if the value has been set.
func (o *SignatureDetail) GetSignatureDocumentOk() (*SignatureDocument, bool) {
	if o == nil || IsNil(o.SignatureDocument) {
		return nil, false
	}
	return o.SignatureDocument, true
}

// HasSignatureDocument returns a boolean if a field has been set.
func (o *SignatureDetail) HasSignatureDocument() bool {
	if o != nil && !IsNil(o.SignatureDocument) {
		return true
	}

	return false
}

// SetSignatureDocument gets a reference to the given SignatureDocument and assigns it to the SignatureDocument field.
func (o *SignatureDetail) SetSignatureDocument(v SignatureDocument) {
	o.SignatureDocument = &v
}

func (o SignatureDetail) MarshalJSON() ([]byte, error) {
	toSerialize,err := o.ToMap()
	if err != nil {
		return []byte{}, err
	}
	return json.Marshal(toSerialize)
}

func (o SignatureDetail) ToMap() (map[string]interface{}, error) {
	toSerialize := map[string]interface{}{}
	if !IsNil(o.InfoTsa) {
		toSerialize["info_tsa"] = o.InfoTsa
	}
	if !IsNil(o.SignatureField) {
		toSerialize["signature_field"] = o.SignatureField
	}
	if !IsNil(o.InfoSigner) {
		toSerialize["info_signer"] = o.InfoSigner
	}
	if !IsNil(o.SignatureDocument) {
		toSerialize["signature_document"] = o.SignatureDocument
	}
	return toSerialize, nil
}

type NullableSignatureDetail struct {
	value *SignatureDetail
	isSet bool
}

func (v NullableSignatureDetail) Get() *SignatureDetail {
	return v.value
}

func (v *NullableSignatureDetail) Set(val *SignatureDetail) {
	v.value = val
	v.isSet = true
}

func (v NullableSignatureDetail) IsSet() bool {
	return v.isSet
}

func (v *NullableSignatureDetail) Unset() {
	v.value = nil
	v.isSet = false
}

func NewNullableSignatureDetail(val *SignatureDetail) *NullableSignatureDetail {
	return &NullableSignatureDetail{value: val, isSet: true}
}

func (v NullableSignatureDetail) MarshalJSON() ([]byte, error) {
	return json.Marshal(v.value)
}

func (v *NullableSignatureDetail) UnmarshalJSON(src []byte) error {
	v.isSet = true
	return json.Unmarshal(src, &v.value)
}


