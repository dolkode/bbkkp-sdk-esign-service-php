<?php
/**
 * InlineObject
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
 * The version of the OpenAPI document: 1.0.8
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0
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
 * InlineObject Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_object';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'file' => '\SplFileObject',
        'file_name' => 'string',
        'nik' => 'string',
        'passphrase' => 'string',
        'ref_code' => 'string',
        'ref_metadata' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'file' => 'binary',
        'file_name' => null,
        'nik' => null,
        'passphrase' => null,
        'ref_code' => null,
        'ref_metadata' => null
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
        'file' => 'file',
        'file_name' => 'file_name',
        'nik' => 'nik',
        'passphrase' => 'passphrase',
        'ref_code' => 'ref_code',
        'ref_metadata' => 'ref_metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file' => 'setFile',
        'file_name' => 'setFileName',
        'nik' => 'setNik',
        'passphrase' => 'setPassphrase',
        'ref_code' => 'setRefCode',
        'ref_metadata' => 'setRefMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file' => 'getFile',
        'file_name' => 'getFileName',
        'nik' => 'getNik',
        'passphrase' => 'getPassphrase',
        'ref_code' => 'getRefCode',
        'ref_metadata' => 'getRefMetadata'
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
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['nik'] = isset($data['nik']) ? $data['nik'] : null;
        $this->container['passphrase'] = isset($data['passphrase']) ? $data['passphrase'] : null;
        $this->container['ref_code'] = isset($data['ref_code']) ? $data['ref_code'] : null;
        $this->container['ref_metadata'] = isset($data['ref_metadata']) ? $data['ref_metadata'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['file'] === null) {
            $invalidProperties[] = "'file' can't be null";
        }
        if ($this->container['nik'] === null) {
            $invalidProperties[] = "'nik' can't be null";
        }
        if ($this->container['passphrase'] === null) {
            $invalidProperties[] = "'passphrase' can't be null";
        }
        if ($this->container['ref_code'] === null) {
            $invalidProperties[] = "'ref_code' can't be null";
        }
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
     * Gets file
     *
     * @return \SplFileObject
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param \SplFileObject $file file
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets file_name
     *
     * @return string|null
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string|null $file_name file_name
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets nik
     *
     * @return string
     */
    public function getNik()
    {
        return $this->container['nik'];
    }

    /**
     * Sets nik
     *
     * @param string $nik nik
     *
     * @return $this
     */
    public function setNik($nik)
    {
        $this->container['nik'] = $nik;

        return $this;
    }

    /**
     * Gets passphrase
     *
     * @return string
     */
    public function getPassphrase()
    {
        return $this->container['passphrase'];
    }

    /**
     * Sets passphrase
     *
     * @param string $passphrase passphrase
     *
     * @return $this
     */
    public function setPassphrase($passphrase)
    {
        $this->container['passphrase'] = $passphrase;

        return $this;
    }

    /**
     * Gets ref_code
     *
     * @return string
     */
    public function getRefCode()
    {
        return $this->container['ref_code'];
    }

    /**
     * Sets ref_code
     *
     * @param string $ref_code Reference code adalah nomor unik disetiap layanan untuk verifikasi dokumen
     *
     * @return $this
     */
    public function setRefCode($ref_code)
    {
        $this->container['ref_code'] = $ref_code;

        return $this;
    }

    /**
     * Gets ref_metadata
     *
     * @return string|null
     */
    public function getRefMetadata()
    {
        return $this->container['ref_metadata'];
    }

    /**
     * Sets ref_metadata
     *
     * @param string|null $ref_metadata Metadata tambahan untuk verifikasi dokumen dalam format JSON yang di encode base64
     *
     * @return $this
     */
    public function setRefMetadata($ref_metadata)
    {
        $this->container['ref_metadata'] = $ref_metadata;

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


