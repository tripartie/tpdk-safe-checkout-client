<?php
/**
 * Media
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Tripartie\SafeCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Safe Checkout
 *
 * Simple, yet elegant web interfaces for your convenience. One request away from your first secured C2C transaction.
 *
 * The version of the OpenAPI document: 2.0.12
 * Contact: noc@tripartie.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Tripartie\SafeCheckout\Model;

use \ArrayAccess;
use \Tripartie\SafeCheckout\ObjectSerializer;

/**
 * Media Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Tripartie\SafeCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Media implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Media';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'extension' => 'string',
        'filename' => 'string',
        'fingerprint' => 'string',
        'publicUrl' => 'string',
        'file' => '\SplFileObject',
        'b64EncodedTmpFile' => 'string',
        'thumbnail' => 'string',
        'original' => 'string',
        'owner' => 'string',
        'offers' => 'string[]',
        'thumbnailUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'extension' => null,
        'filename' => null,
        'fingerprint' => null,
        'publicUrl' => 'uri',
        'file' => 'binary',
        'b64EncodedTmpFile' => null,
        'thumbnail' => 'iri-reference',
        'original' => 'iri-reference',
        'owner' => 'iri-reference',
        'offers' => 'iri-reference',
        'thumbnailUrl' => 'uri'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'extension' => false,
        'filename' => false,
        'fingerprint' => false,
        'publicUrl' => false,
        'file' => true,
        'b64EncodedTmpFile' => true,
        'thumbnail' => true,
        'original' => true,
        'owner' => true,
        'offers' => false,
        'thumbnailUrl' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'extension' => 'extension',
        'filename' => 'filename',
        'fingerprint' => 'fingerprint',
        'publicUrl' => 'publicUrl',
        'file' => 'file',
        'b64EncodedTmpFile' => 'b64EncodedTmpFile',
        'thumbnail' => 'thumbnail',
        'original' => 'original',
        'owner' => 'owner',
        'offers' => 'offers',
        'thumbnailUrl' => 'thumbnailUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'extension' => 'setExtension',
        'filename' => 'setFilename',
        'fingerprint' => 'setFingerprint',
        'publicUrl' => 'setPublicUrl',
        'file' => 'setFile',
        'b64EncodedTmpFile' => 'setB64EncodedTmpFile',
        'thumbnail' => 'setThumbnail',
        'original' => 'setOriginal',
        'owner' => 'setOwner',
        'offers' => 'setOffers',
        'thumbnailUrl' => 'setThumbnailUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'extension' => 'getExtension',
        'filename' => 'getFilename',
        'fingerprint' => 'getFingerprint',
        'publicUrl' => 'getPublicUrl',
        'file' => 'getFile',
        'b64EncodedTmpFile' => 'getB64EncodedTmpFile',
        'thumbnail' => 'getThumbnail',
        'original' => 'getOriginal',
        'owner' => 'getOwner',
        'offers' => 'getOffers',
        'thumbnailUrl' => 'getThumbnailUrl'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('extension', $data ?? [], null);
        $this->setIfExists('filename', $data ?? [], null);
        $this->setIfExists('fingerprint', $data ?? [], null);
        $this->setIfExists('publicUrl', $data ?? [], null);
        $this->setIfExists('file', $data ?? [], null);
        $this->setIfExists('b64EncodedTmpFile', $data ?? [], null);
        $this->setIfExists('thumbnail', $data ?? [], null);
        $this->setIfExists('original', $data ?? [], null);
        $this->setIfExists('owner', $data ?? [], null);
        $this->setIfExists('offers', $data ?? [], null);
        $this->setIfExists('thumbnailUrl', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['extension'] === null) {
            $invalidProperties[] = "'extension' can't be null";
        }
        if ($this->container['filename'] === null) {
            $invalidProperties[] = "'filename' can't be null";
        }
        if ($this->container['fingerprint'] === null) {
            $invalidProperties[] = "'fingerprint' can't be null";
        }
        if ($this->container['publicUrl'] === null) {
            $invalidProperties[] = "'publicUrl' can't be null";
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param string $extension extension
     *
     * @return self
     */
    public function setExtension($extension)
    {
        if (is_null($extension)) {
            throw new \InvalidArgumentException('non-nullable extension cannot be null');
        }
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string $filename filename
     *
     * @return self
     */
    public function setFilename($filename)
    {
        if (is_null($filename)) {
            throw new \InvalidArgumentException('non-nullable filename cannot be null');
        }
        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets fingerprint
     *
     * @return string
     */
    public function getFingerprint()
    {
        return $this->container['fingerprint'];
    }

    /**
     * Sets fingerprint
     *
     * @param string $fingerprint fingerprint
     *
     * @return self
     */
    public function setFingerprint($fingerprint)
    {
        if (is_null($fingerprint)) {
            throw new \InvalidArgumentException('non-nullable fingerprint cannot be null');
        }
        $this->container['fingerprint'] = $fingerprint;

        return $this;
    }

    /**
     * Gets publicUrl
     *
     * @return string
     */
    public function getPublicUrl()
    {
        return $this->container['publicUrl'];
    }

    /**
     * Sets publicUrl
     *
     * @param string $publicUrl publicUrl
     *
     * @return self
     */
    public function setPublicUrl($publicUrl)
    {
        if (is_null($publicUrl)) {
            throw new \InvalidArgumentException('non-nullable publicUrl cannot be null');
        }
        $this->container['publicUrl'] = $publicUrl;

        return $this;
    }

    /**
     * Gets file
     *
     * @return \SplFileObject|null
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param \SplFileObject|null $file file
     *
     * @return self
     */
    public function setFile($file)
    {
        if (is_null($file)) {
            array_push($this->openAPINullablesSetToNull, 'file');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('file', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets b64EncodedTmpFile
     *
     * @return string|null
     */
    public function getB64EncodedTmpFile()
    {
        return $this->container['b64EncodedTmpFile'];
    }

    /**
     * Sets b64EncodedTmpFile
     *
     * @param string|null $b64EncodedTmpFile b64EncodedTmpFile
     *
     * @return self
     */
    public function setB64EncodedTmpFile($b64EncodedTmpFile)
    {
        if (is_null($b64EncodedTmpFile)) {
            array_push($this->openAPINullablesSetToNull, 'b64EncodedTmpFile');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('b64EncodedTmpFile', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['b64EncodedTmpFile'] = $b64EncodedTmpFile;

        return $this;
    }

    /**
     * Gets thumbnail
     *
     * @return string|null
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     *
     * @param string|null $thumbnail Associated 374x374 pixels small thumbnail
     *
     * @return self
     */
    public function setThumbnail($thumbnail)
    {
        if (is_null($thumbnail)) {
            array_push($this->openAPINullablesSetToNull, 'thumbnail');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('thumbnail', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * Gets original
     *
     * @return string|null
     */
    public function getOriginal()
    {
        return $this->container['original'];
    }

    /**
     * Sets original
     *
     * @param string|null $original original
     *
     * @return self
     */
    public function setOriginal($original)
    {
        if (is_null($original)) {
            array_push($this->openAPINullablesSetToNull, 'original');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('original', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['original'] = $original;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return string|null
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param string|null $owner owner
     *
     * @return self
     */
    public function setOwner($owner)
    {
        if (is_null($owner)) {
            array_push($this->openAPINullablesSetToNull, 'owner');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('owner', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets offers
     *
     * @return string[]|null
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers
     *
     * @param string[]|null $offers offers
     *
     * @return self
     */
    public function setOffers($offers)
    {
        if (is_null($offers)) {
            throw new \InvalidArgumentException('non-nullable offers cannot be null');
        }
        $this->container['offers'] = $offers;

        return $this;
    }

    /**
     * Gets thumbnailUrl
     *
     * @return string|null
     */
    public function getThumbnailUrl()
    {
        return $this->container['thumbnailUrl'];
    }

    /**
     * Sets thumbnailUrl
     *
     * @param string|null $thumbnailUrl thumbnailUrl
     *
     * @return self
     */
    public function setThumbnailUrl($thumbnailUrl)
    {
        if (is_null($thumbnailUrl)) {
            array_push($this->openAPINullablesSetToNull, 'thumbnailUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('thumbnailUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['thumbnailUrl'] = $thumbnailUrl;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


