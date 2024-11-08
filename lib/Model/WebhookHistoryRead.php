<?php
/**
 * WebhookHistoryRead
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
 * WebhookHistoryRead Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Tripartie\SafeCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebhookHistoryRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookHistory-Read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'objectId' => 'string',
        'event' => 'string',
        'url' => 'string',
        'normalizedObject' => 'string[]',
        'responseCode' => 'int',
        'responseBody' => 'string',
        'occurredAt' => '\DateTime',
        'createdAt' => '\DateTime',
        'attemptedAt' => '\DateTime',
        'retryCount' => 'int',
        'inProgress' => 'bool'
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
        'objectId' => null,
        'event' => null,
        'url' => null,
        'normalizedObject' => null,
        'responseCode' => null,
        'responseBody' => null,
        'occurredAt' => 'date-time',
        'createdAt' => 'date-time',
        'attemptedAt' => 'date-time',
        'retryCount' => null,
        'inProgress' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'objectId' => true,
        'event' => false,
        'url' => false,
        'normalizedObject' => true,
        'responseCode' => true,
        'responseBody' => true,
        'occurredAt' => false,
        'createdAt' => false,
        'attemptedAt' => true,
        'retryCount' => false,
        'inProgress' => false
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
        'objectId' => 'objectId',
        'event' => 'event',
        'url' => 'url',
        'normalizedObject' => 'normalizedObject',
        'responseCode' => 'responseCode',
        'responseBody' => 'responseBody',
        'occurredAt' => 'occurredAt',
        'createdAt' => 'createdAt',
        'attemptedAt' => 'attemptedAt',
        'retryCount' => 'retryCount',
        'inProgress' => 'inProgress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'objectId' => 'setObjectId',
        'event' => 'setEvent',
        'url' => 'setUrl',
        'normalizedObject' => 'setNormalizedObject',
        'responseCode' => 'setResponseCode',
        'responseBody' => 'setResponseBody',
        'occurredAt' => 'setOccurredAt',
        'createdAt' => 'setCreatedAt',
        'attemptedAt' => 'setAttemptedAt',
        'retryCount' => 'setRetryCount',
        'inProgress' => 'setInProgress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'objectId' => 'getObjectId',
        'event' => 'getEvent',
        'url' => 'getUrl',
        'normalizedObject' => 'getNormalizedObject',
        'responseCode' => 'getResponseCode',
        'responseBody' => 'getResponseBody',
        'occurredAt' => 'getOccurredAt',
        'createdAt' => 'getCreatedAt',
        'attemptedAt' => 'getAttemptedAt',
        'retryCount' => 'getRetryCount',
        'inProgress' => 'getInProgress'
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

    public const EVENT_OFFER_TRANSACTION_AUTHORIZED = 'offer.transaction.authorized';
    public const EVENT_OFFER_TRANSACTION_ACCEPTED = 'offer.transaction.accepted';
    public const EVENT_OFFER_TRANSACTION_SHIPPED = 'offer.transaction.shipped';
    public const EVENT_OFFER_TRANSACTION_DELIVERED = 'offer.transaction.delivered';
    public const EVENT_OFFER_TRANSACTION_COMPLETED = 'offer.transaction.completed';
    public const EVENT_OFFER_TRANSACTION_CANCELED = 'offer.transaction.canceled';
    public const EVENT_OFFER_TRANSACTION_DISPUTED = 'offer.transaction.disputed';
    public const EVENT_OFFER_CLOSED = 'offer.closed';
    public const EVENT_PERSONA_ADDED = 'persona.added';
    public const EVENT_OFFER_TRANSACTION_REVIEWED = 'offer.transaction.reviewed';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventAllowableValues()
    {
        return [
            self::EVENT_OFFER_TRANSACTION_AUTHORIZED,
            self::EVENT_OFFER_TRANSACTION_ACCEPTED,
            self::EVENT_OFFER_TRANSACTION_SHIPPED,
            self::EVENT_OFFER_TRANSACTION_DELIVERED,
            self::EVENT_OFFER_TRANSACTION_COMPLETED,
            self::EVENT_OFFER_TRANSACTION_CANCELED,
            self::EVENT_OFFER_TRANSACTION_DISPUTED,
            self::EVENT_OFFER_CLOSED,
            self::EVENT_PERSONA_ADDED,
            self::EVENT_OFFER_TRANSACTION_REVIEWED,
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
        $this->setIfExists('objectId', $data ?? [], null);
        $this->setIfExists('event', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('normalizedObject', $data ?? [], null);
        $this->setIfExists('responseCode', $data ?? [], null);
        $this->setIfExists('responseBody', $data ?? [], null);
        $this->setIfExists('occurredAt', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('attemptedAt', $data ?? [], null);
        $this->setIfExists('retryCount', $data ?? [], null);
        $this->setIfExists('inProgress', $data ?? [], null);
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

        if ($this->container['event'] === null) {
            $invalidProperties[] = "'event' can't be null";
        }
        $allowedValues = $this->getEventAllowableValues();
        if (!is_null($this->container['event']) && !in_array($this->container['event'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event', must be one of '%s'",
                $this->container['event'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['occurredAt'] === null) {
            $invalidProperties[] = "'occurredAt' can't be null";
        }
        if ($this->container['retryCount'] === null) {
            $invalidProperties[] = "'retryCount' can't be null";
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
     * Gets objectId
     *
     * @return string|null
     */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
     * Sets objectId
     *
     * @param string|null $objectId objectId
     *
     * @return self
     */
    public function setObjectId($objectId)
    {
        if (is_null($objectId)) {
            array_push($this->openAPINullablesSetToNull, 'objectId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('objectId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['objectId'] = $objectId;

        return $this;
    }

    /**
     * Gets event
     *
     * @return string
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param string $event event
     *
     * @return self
     */
    public function setEvent($event)
    {
        if (is_null($event)) {
            throw new \InvalidArgumentException('non-nullable event cannot be null');
        }
        $allowedValues = $this->getEventAllowableValues();
        if (!in_array($event, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event', must be one of '%s'",
                    $event,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets normalizedObject
     *
     * @return string[]|null
     */
    public function getNormalizedObject()
    {
        return $this->container['normalizedObject'];
    }

    /**
     * Sets normalizedObject
     *
     * @param string[]|null $normalizedObject normalizedObject
     *
     * @return self
     */
    public function setNormalizedObject($normalizedObject)
    {
        if (is_null($normalizedObject)) {
            array_push($this->openAPINullablesSetToNull, 'normalizedObject');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('normalizedObject', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['normalizedObject'] = $normalizedObject;

        return $this;
    }

    /**
     * Gets responseCode
     *
     * @return int|null
     */
    public function getResponseCode()
    {
        return $this->container['responseCode'];
    }

    /**
     * Sets responseCode
     *
     * @param int|null $responseCode responseCode
     *
     * @return self
     */
    public function setResponseCode($responseCode)
    {
        if (is_null($responseCode)) {
            array_push($this->openAPINullablesSetToNull, 'responseCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('responseCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['responseCode'] = $responseCode;

        return $this;
    }

    /**
     * Gets responseBody
     *
     * @return string|null
     */
    public function getResponseBody()
    {
        return $this->container['responseBody'];
    }

    /**
     * Sets responseBody
     *
     * @param string|null $responseBody responseBody
     *
     * @return self
     */
    public function setResponseBody($responseBody)
    {
        if (is_null($responseBody)) {
            array_push($this->openAPINullablesSetToNull, 'responseBody');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('responseBody', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['responseBody'] = $responseBody;

        return $this;
    }

    /**
     * Gets occurredAt
     *
     * @return \DateTime
     */
    public function getOccurredAt()
    {
        return $this->container['occurredAt'];
    }

    /**
     * Sets occurredAt
     *
     * @param \DateTime $occurredAt occurredAt
     *
     * @return self
     */
    public function setOccurredAt($occurredAt)
    {
        if (is_null($occurredAt)) {
            throw new \InvalidArgumentException('non-nullable occurredAt cannot be null');
        }
        $this->container['occurredAt'] = $occurredAt;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt createdAt
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
     * Gets attemptedAt
     *
     * @return \DateTime|null
     */
    public function getAttemptedAt()
    {
        return $this->container['attemptedAt'];
    }

    /**
     * Sets attemptedAt
     *
     * @param \DateTime|null $attemptedAt attemptedAt
     *
     * @return self
     */
    public function setAttemptedAt($attemptedAt)
    {
        if (is_null($attemptedAt)) {
            array_push($this->openAPINullablesSetToNull, 'attemptedAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('attemptedAt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['attemptedAt'] = $attemptedAt;

        return $this;
    }

    /**
     * Gets retryCount
     *
     * @return int
     */
    public function getRetryCount()
    {
        return $this->container['retryCount'];
    }

    /**
     * Sets retryCount
     *
     * @param int $retryCount retryCount
     *
     * @return self
     */
    public function setRetryCount($retryCount)
    {
        if (is_null($retryCount)) {
            throw new \InvalidArgumentException('non-nullable retryCount cannot be null');
        }
        $this->container['retryCount'] = $retryCount;

        return $this;
    }

    /**
     * Gets inProgress
     *
     * @return bool|null
     */
    public function getInProgress()
    {
        return $this->container['inProgress'];
    }

    /**
     * Sets inProgress
     *
     * @param bool|null $inProgress inProgress
     *
     * @return self
     */
    public function setInProgress($inProgress)
    {
        if (is_null($inProgress)) {
            throw new \InvalidArgumentException('non-nullable inProgress cannot be null');
        }
        $this->container['inProgress'] = $inProgress;

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


