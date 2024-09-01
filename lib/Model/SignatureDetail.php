<?php
/**
 * SignatureDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TTE Service
 *
 * This API is used for sending whatsapp via API
 *
 * OpenAPI spec version: 1.0.8
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * SignatureDetail Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SignatureDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SignatureDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'info_tsa' => '\OpenAPI\Client\Model\InfoTSA',
        'signature_field' => 'string',
        'info_signer' => '\OpenAPI\Client\Model\InfoSigner',
        'signature_document' => '\OpenAPI\Client\Model\SignatureDocument'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'info_tsa' => null,
        'signature_field' => null,
        'info_signer' => null,
        'signature_document' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'info_tsa' => 'info_tsa',
        'signature_field' => 'signature_field',
        'info_signer' => 'info_signer',
        'signature_document' => 'signature_document'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'info_tsa' => 'setInfoTsa',
        'signature_field' => 'setSignatureField',
        'info_signer' => 'setInfoSigner',
        'signature_document' => 'setSignatureDocument'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'info_tsa' => 'getInfoTsa',
        'signature_field' => 'getSignatureField',
        'info_signer' => 'getInfoSigner',
        'signature_document' => 'getSignatureDocument'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['info_tsa'] = isset($data['info_tsa']) ? $data['info_tsa'] : null;
        $this->container['signature_field'] = isset($data['signature_field']) ? $data['signature_field'] : null;
        $this->container['info_signer'] = isset($data['info_signer']) ? $data['info_signer'] : null;
        $this->container['signature_document'] = isset($data['signature_document']) ? $data['signature_document'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets info_tsa
     *
     * @return \OpenAPI\Client\Model\InfoTSA|null
     */
    public function getInfoTsa()
    {
        return $this->container['info_tsa'];
    }

    /**
     * Sets info_tsa
     *
     * @param \OpenAPI\Client\Model\InfoTSA|null $info_tsa info_tsa
     *
     * @return $this
     */
    public function setInfoTsa($info_tsa)
    {
        $this->container['info_tsa'] = $info_tsa;

        return $this;
    }

    /**
     * Gets signature_field
     *
     * @return string|null
     */
    public function getSignatureField()
    {
        return $this->container['signature_field'];
    }

    /**
     * Sets signature_field
     *
     * @param string|null $signature_field signature_field
     *
     * @return $this
     */
    public function setSignatureField($signature_field)
    {
        $this->container['signature_field'] = $signature_field;

        return $this;
    }

    /**
     * Gets info_signer
     *
     * @return \OpenAPI\Client\Model\InfoSigner|null
     */
    public function getInfoSigner()
    {
        return $this->container['info_signer'];
    }

    /**
     * Sets info_signer
     *
     * @param \OpenAPI\Client\Model\InfoSigner|null $info_signer info_signer
     *
     * @return $this
     */
    public function setInfoSigner($info_signer)
    {
        $this->container['info_signer'] = $info_signer;

        return $this;
    }

    /**
     * Gets signature_document
     *
     * @return \OpenAPI\Client\Model\SignatureDocument|null
     */
    public function getSignatureDocument()
    {
        return $this->container['signature_document'];
    }

    /**
     * Sets signature_document
     *
     * @param \OpenAPI\Client\Model\SignatureDocument|null $signature_document signature_document
     *
     * @return $this
     */
    public function setSignatureDocument($signature_document)
    {
        $this->container['signature_document'] = $signature_document;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


