<?php
/**
 * TransactionQuoteRead
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
 * The version of the OpenAPI document: 2.0.22
 * Contact: noc@tripartie.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.8.0
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
 * TransactionQuoteRead Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Tripartie\SafeCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransactionQuoteRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Transaction-Quote-Read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ulid' => 'string',
        'shippingCarrier' => 'string',
        'quantityToBeAcquired' => 'int',
        'attemptUnitPrice' => 'float',
        'transactionFees' => 'float',
        'shippingFees' => 'float',
        'createdAt' => '\DateTime',
        'expireAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'ulid' => null,
        'shippingCarrier' => null,
        'quantityToBeAcquired' => null,
        'attemptUnitPrice' => 'float',
        'transactionFees' => 'float',
        'shippingFees' => 'float',
        'createdAt' => 'date-time',
        'expireAt' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ulid' => false,
        'shippingCarrier' => false,
        'quantityToBeAcquired' => false,
        'attemptUnitPrice' => false,
        'transactionFees' => false,
        'shippingFees' => false,
        'createdAt' => false,
        'expireAt' => false
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
        'ulid' => 'ulid',
        'shippingCarrier' => 'shippingCarrier',
        'quantityToBeAcquired' => 'quantityToBeAcquired',
        'attemptUnitPrice' => 'attemptUnitPrice',
        'transactionFees' => 'transactionFees',
        'shippingFees' => 'shippingFees',
        'createdAt' => 'createdAt',
        'expireAt' => 'expireAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ulid' => 'setUlid',
        'shippingCarrier' => 'setShippingCarrier',
        'quantityToBeAcquired' => 'setQuantityToBeAcquired',
        'attemptUnitPrice' => 'setAttemptUnitPrice',
        'transactionFees' => 'setTransactionFees',
        'shippingFees' => 'setShippingFees',
        'createdAt' => 'setCreatedAt',
        'expireAt' => 'setExpireAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ulid' => 'getUlid',
        'shippingCarrier' => 'getShippingCarrier',
        'quantityToBeAcquired' => 'getQuantityToBeAcquired',
        'attemptUnitPrice' => 'getAttemptUnitPrice',
        'transactionFees' => 'getTransactionFees',
        'shippingFees' => 'getShippingFees',
        'createdAt' => 'getCreatedAt',
        'expireAt' => 'getExpireAt'
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

    public const SHIPPING_CARRIER_SWISS_POST = 'SwissPost';
    public const SHIPPING_CARRIER_COLISSIMO = 'Colissimo';
    public const SHIPPING_CARRIER_MONDIAL_RELAY = 'MondialRelay';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShippingCarrierAllowableValues()
    {
        return [
            self::SHIPPING_CARRIER_SWISS_POST,
            self::SHIPPING_CARRIER_COLISSIMO,
            self::SHIPPING_CARRIER_MONDIAL_RELAY,
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
        $this->setIfExists('ulid', $data ?? [], null);
        $this->setIfExists('shippingCarrier', $data ?? [], null);
        $this->setIfExists('quantityToBeAcquired', $data ?? [], 1);
        $this->setIfExists('attemptUnitPrice', $data ?? [], null);
        $this->setIfExists('transactionFees', $data ?? [], null);
        $this->setIfExists('shippingFees', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('expireAt', $data ?? [], null);
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

        if ($this->container['ulid'] === null) {
            $invalidProperties[] = "'ulid' can't be null";
        }
        if ($this->container['shippingCarrier'] === null) {
            $invalidProperties[] = "'shippingCarrier' can't be null";
        }
        $allowedValues = $this->getShippingCarrierAllowableValues();
        if (!is_null($this->container['shippingCarrier']) && !in_array($this->container['shippingCarrier'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shippingCarrier', must be one of '%s'",
                $this->container['shippingCarrier'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['quantityToBeAcquired'] === null) {
            $invalidProperties[] = "'quantityToBeAcquired' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['expireAt'] === null) {
            $invalidProperties[] = "'expireAt' can't be null";
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
     * Gets ulid
     *
     * @return string
     */
    public function getUlid()
    {
        return $this->container['ulid'];
    }

    /**
     * Sets ulid
     *
     * @param string $ulid ulid
     *
     * @return self
     */
    public function setUlid($ulid)
    {
        if (is_null($ulid)) {
            throw new \InvalidArgumentException('non-nullable ulid cannot be null');
        }
        $this->container['ulid'] = $ulid;

        return $this;
    }

    /**
     * Gets shippingCarrier
     *
     * @return string
     */
    public function getShippingCarrier()
    {
        return $this->container['shippingCarrier'];
    }

    /**
     * Sets shippingCarrier
     *
     * @param string $shippingCarrier shippingCarrier
     *
     * @return self
     */
    public function setShippingCarrier($shippingCarrier)
    {
        if (is_null($shippingCarrier)) {
            throw new \InvalidArgumentException('non-nullable shippingCarrier cannot be null');
        }
        $allowedValues = $this->getShippingCarrierAllowableValues();
        if (!in_array($shippingCarrier, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shippingCarrier', must be one of '%s'",
                    $shippingCarrier,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shippingCarrier'] = $shippingCarrier;

        return $this;
    }

    /**
     * Gets quantityToBeAcquired
     *
     * @return int
     */
    public function getQuantityToBeAcquired()
    {
        return $this->container['quantityToBeAcquired'];
    }

    /**
     * Sets quantityToBeAcquired
     *
     * @param int $quantityToBeAcquired quantityToBeAcquired
     *
     * @return self
     */
    public function setQuantityToBeAcquired($quantityToBeAcquired)
    {
        if (is_null($quantityToBeAcquired)) {
            throw new \InvalidArgumentException('non-nullable quantityToBeAcquired cannot be null');
        }
        $this->container['quantityToBeAcquired'] = $quantityToBeAcquired;

        return $this;
    }

    /**
     * Gets attemptUnitPrice
     *
     * @return float|null
     */
    public function getAttemptUnitPrice()
    {
        return $this->container['attemptUnitPrice'];
    }

    /**
     * Sets attemptUnitPrice
     *
     * @param float|null $attemptUnitPrice attemptUnitPrice
     *
     * @return self
     */
    public function setAttemptUnitPrice($attemptUnitPrice)
    {
        if (is_null($attemptUnitPrice)) {
            throw new \InvalidArgumentException('non-nullable attemptUnitPrice cannot be null');
        }
        $this->container['attemptUnitPrice'] = $attemptUnitPrice;

        return $this;
    }

    /**
     * Gets transactionFees
     *
     * @return float|null
     */
    public function getTransactionFees()
    {
        return $this->container['transactionFees'];
    }

    /**
     * Sets transactionFees
     *
     * @param float|null $transactionFees transactionFees
     *
     * @return self
     */
    public function setTransactionFees($transactionFees)
    {
        if (is_null($transactionFees)) {
            throw new \InvalidArgumentException('non-nullable transactionFees cannot be null');
        }
        $this->container['transactionFees'] = $transactionFees;

        return $this;
    }

    /**
     * Gets shippingFees
     *
     * @return float|null
     */
    public function getShippingFees()
    {
        return $this->container['shippingFees'];
    }

    /**
     * Sets shippingFees
     *
     * @param float|null $shippingFees shippingFees
     *
     * @return self
     */
    public function setShippingFees($shippingFees)
    {
        if (is_null($shippingFees)) {
            throw new \InvalidArgumentException('non-nullable shippingFees cannot be null');
        }
        $this->container['shippingFees'] = $shippingFees;

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
     * Gets expireAt
     *
     * @return \DateTime
     */
    public function getExpireAt()
    {
        return $this->container['expireAt'];
    }

    /**
     * Sets expireAt
     *
     * @param \DateTime $expireAt expireAt
     *
     * @return self
     */
    public function setExpireAt($expireAt)
    {
        if (is_null($expireAt)) {
            throw new \InvalidArgumentException('non-nullable expireAt cannot be null');
        }
        $this->container['expireAt'] = $expireAt;

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


