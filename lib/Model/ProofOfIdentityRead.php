<?php
/**
 * ProofOfIdentityRead
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
 * The version of the OpenAPI document: 2.0.113
 * Contact: noc@tripartie.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
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
 * ProofOfIdentityRead Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Tripartie\SafeCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProofOfIdentityRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProofOfIdentity-Read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'status' => 'string',
        'type' => 'string',
        'originalFilename' => 'string',
        'extension' => 'string',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'providerName' => 'string',
        'providerCreatedAt' => '\DateTime',
        'providerUpdatedAt' => '\DateTime',
        'processorStatus' => 'string'
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
        'status' => null,
        'type' => null,
        'originalFilename' => null,
        'extension' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'providerName' => null,
        'providerCreatedAt' => 'date-time',
        'providerUpdatedAt' => 'date-time',
        'processorStatus' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'status' => false,
        'type' => false,
        'originalFilename' => true,
        'extension' => true,
        'createdAt' => false,
        'updatedAt' => false,
        'providerName' => true,
        'providerCreatedAt' => true,
        'providerUpdatedAt' => true,
        'processorStatus' => false
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
        'status' => 'status',
        'type' => 'type',
        'originalFilename' => 'originalFilename',
        'extension' => 'extension',
        'createdAt' => 'createdAt',
        'updatedAt' => 'updatedAt',
        'providerName' => 'providerName',
        'providerCreatedAt' => 'providerCreatedAt',
        'providerUpdatedAt' => 'providerUpdatedAt',
        'processorStatus' => 'processorStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'type' => 'setType',
        'originalFilename' => 'setOriginalFilename',
        'extension' => 'setExtension',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'providerName' => 'setProviderName',
        'providerCreatedAt' => 'setProviderCreatedAt',
        'providerUpdatedAt' => 'setProviderUpdatedAt',
        'processorStatus' => 'setProcessorStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'type' => 'getType',
        'originalFilename' => 'getOriginalFilename',
        'extension' => 'getExtension',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'providerName' => 'getProviderName',
        'providerCreatedAt' => 'getProviderCreatedAt',
        'providerUpdatedAt' => 'getProviderUpdatedAt',
        'processorStatus' => 'getProcessorStatus'
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

    public const STATUS_DRAFTED = 'drafted';
    public const STATUS_UPLOADED = 'uploaded';
    public const STATUS_SUBMITTED = 'submitted';
    public const STATUS_ACCEPTED = 'accepted';
    public const STATUS_REFUSED = 'refused';
    public const STATUS_BLOCKED = 'blocked';
    public const TYPE_NATIONAL_ID = 'national_id';
    public const TYPE_PASSPORT = 'passport';
    public const PROCESSOR_STATUS_UNALLOCATED = 'unallocated';
    public const PROCESSOR_STATUS_ALLOCATING = 'allocating';
    public const PROCESSOR_STATUS_ALLOCATED = 'allocated';
    public const PROCESSOR_STATUS_FREED = 'freed';
    public const PROCESSOR_STATUS_OUTDATED = 'outdated';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFTED,
            self::STATUS_UPLOADED,
            self::STATUS_SUBMITTED,
            self::STATUS_ACCEPTED,
            self::STATUS_REFUSED,
            self::STATUS_BLOCKED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NATIONAL_ID,
            self::TYPE_PASSPORT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessorStatusAllowableValues()
    {
        return [
            self::PROCESSOR_STATUS_UNALLOCATED,
            self::PROCESSOR_STATUS_ALLOCATING,
            self::PROCESSOR_STATUS_ALLOCATED,
            self::PROCESSOR_STATUS_FREED,
            self::PROCESSOR_STATUS_OUTDATED,
        ];
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('originalFilename', $data ?? [], null);
        $this->setIfExists('extension', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('providerName', $data ?? [], null);
        $this->setIfExists('providerCreatedAt', $data ?? [], null);
        $this->setIfExists('providerUpdatedAt', $data ?? [], null);
        $this->setIfExists('processorStatus', $data ?? [], null);
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

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        $allowedValues = $this->getProcessorStatusAllowableValues();
        if (!is_null($this->container['processorStatus']) && !in_array($this->container['processorStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'processorStatus', must be one of '%s'",
                $this->container['processorStatus'],
                implode("', '", $allowedValues)
            );
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
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets originalFilename
     *
     * @return string|null
     */
    public function getOriginalFilename()
    {
        return $this->container['originalFilename'];
    }

    /**
     * Sets originalFilename
     *
     * @param string|null $originalFilename originalFilename
     *
     * @return self
     */
    public function setOriginalFilename($originalFilename)
    {
        if (is_null($originalFilename)) {
            array_push($this->openAPINullablesSetToNull, 'originalFilename');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('originalFilename', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['originalFilename'] = $originalFilename;

        return $this;
    }

    /**
     * Gets extension
     *
     * @return string|null
     */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
     * Sets extension
     *
     * @param string|null $extension extension
     *
     * @return self
     */
    public function setExtension($extension)
    {
        if (is_null($extension)) {
            array_push($this->openAPINullablesSetToNull, 'extension');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extension', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['extension'] = $extension;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        if (is_null($createdAt)) {
            throw new \InvalidArgumentException('non-nullable createdAt cannot be null');
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime $updatedAt updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        if (is_null($updatedAt)) {
            throw new \InvalidArgumentException('non-nullable updatedAt cannot be null');
        }
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets providerName
     *
     * @return string|null
     */
    public function getProviderName()
    {
        return $this->container['providerName'];
    }

    /**
     * Sets providerName
     *
     * @param string|null $providerName providerName
     *
     * @return self
     */
    public function setProviderName($providerName)
    {
        if (is_null($providerName)) {
            array_push($this->openAPINullablesSetToNull, 'providerName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('providerName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['providerName'] = $providerName;

        return $this;
    }

    /**
     * Gets providerCreatedAt
     *
     * @return \DateTime|null
     */
    public function getProviderCreatedAt()
    {
        return $this->container['providerCreatedAt'];
    }

    /**
     * Sets providerCreatedAt
     *
     * @param \DateTime|null $providerCreatedAt providerCreatedAt
     *
     * @return self
     */
    public function setProviderCreatedAt($providerCreatedAt)
    {
        if (is_null($providerCreatedAt)) {
            array_push($this->openAPINullablesSetToNull, 'providerCreatedAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('providerCreatedAt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['providerCreatedAt'] = $providerCreatedAt;

        return $this;
    }

    /**
     * Gets providerUpdatedAt
     *
     * @return \DateTime|null
     */
    public function getProviderUpdatedAt()
    {
        return $this->container['providerUpdatedAt'];
    }

    /**
     * Sets providerUpdatedAt
     *
     * @param \DateTime|null $providerUpdatedAt providerUpdatedAt
     *
     * @return self
     */
    public function setProviderUpdatedAt($providerUpdatedAt)
    {
        if (is_null($providerUpdatedAt)) {
            array_push($this->openAPINullablesSetToNull, 'providerUpdatedAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('providerUpdatedAt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['providerUpdatedAt'] = $providerUpdatedAt;

        return $this;
    }

    /**
     * Gets processorStatus
     *
     * @return string|null
     */
    public function getProcessorStatus()
    {
        return $this->container['processorStatus'];
    }

    /**
     * Sets processorStatus
     *
     * @param string|null $processorStatus Automagically infer on what state the entity is at the Payment Processor.
     *
     * @return self
     */
    public function setProcessorStatus($processorStatus)
    {
        if (is_null($processorStatus)) {
            throw new \InvalidArgumentException('non-nullable processorStatus cannot be null');
        }
        $allowedValues = $this->getProcessorStatusAllowableValues();
        if (!in_array($processorStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'processorStatus', must be one of '%s'",
                    $processorStatus,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['processorStatus'] = $processorStatus;

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


