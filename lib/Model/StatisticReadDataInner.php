<?php
/**
 * StatisticReadDataInner
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
 * The version of the OpenAPI document: 2.0.67
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
 * StatisticReadDataInner Class Doc Comment
 *
 * @category Class
 * @package  Tripartie\SafeCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StatisticReadDataInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Statistic_Read_data_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'request' => 'string',
        'startAt' => '\DateTime',
        'endAt' => '\DateTime',
        'value' => 'float',
        'values' => '\Tripartie\SafeCheckout\Model\StatisticOutputArraySingleValue[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'request' => null,
        'startAt' => 'date-time',
        'endAt' => 'date-time',
        'value' => null,
        'values' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'request' => false,
        'startAt' => false,
        'endAt' => false,
        'value' => false,
        'values' => false
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
        'request' => 'request',
        'startAt' => 'startAt',
        'endAt' => 'endAt',
        'value' => 'value',
        'values' => 'values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request' => 'setRequest',
        'startAt' => 'setStartAt',
        'endAt' => 'setEndAt',
        'value' => 'setValue',
        'values' => 'setValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request' => 'getRequest',
        'startAt' => 'getStartAt',
        'endAt' => 'getEndAt',
        'value' => 'getValue',
        'values' => 'getValues'
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

    public const REQUEST_OFFER_PUBLISHED_AMOUNT = 'OFFER_PUBLISHED_AMOUNT';
    public const REQUEST_OFFER_CREATED_AMOUNT = 'OFFER_CREATED_AMOUNT';
    public const REQUEST_TRANSACTION_ACCEPTED_PROPOSAL_AMOUNT = 'TRANSACTION_ACCEPTED_PROPOSAL_AMOUNT';
    public const REQUEST_TRANSACTION_ACCEPTED_PROPOSAL_COUNT = 'TRANSACTION_ACCEPTED_PROPOSAL_COUNT';
    public const REQUEST_TRANSACTION_ACCEPTED_PROPOSAL_SERVICE_FEE = 'TRANSACTION_ACCEPTED_PROPOSAL_SERVICE_FEE';
    public const REQUEST_TRANSACTION_ACCEPTED_PROPOSAL_SHIPPING_FEE = 'TRANSACTION_ACCEPTED_PROPOSAL_SHIPPING_FEE';
    public const REQUEST_TRANSACTION_COMPLETED_AMOUNT = 'TRANSACTION_COMPLETED_AMOUNT';
    public const REQUEST_TRANSACTION_COMPLETED_COUNT = 'TRANSACTION_COMPLETED_COUNT';
    public const REQUEST_TRANSACTION_COMPLETED_SERVICE_FEE = 'TRANSACTION_COMPLETED_SERVICE_FEE';
    public const REQUEST_TRANSACTION_COMPLETED_SHIPPING_FEE = 'TRANSACTION_COMPLETED_SHIPPING_FEE';
    public const REQUEST_TRANSACTION_CREATED_AMOUNT = 'TRANSACTION_CREATED_AMOUNT';
    public const REQUEST_TRANSACTION_CREATED_COUNT = 'TRANSACTION_CREATED_COUNT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequestAllowableValues()
    {
        return [
            self::REQUEST_OFFER_PUBLISHED_AMOUNT,
            self::REQUEST_OFFER_CREATED_AMOUNT,
            self::REQUEST_TRANSACTION_ACCEPTED_PROPOSAL_AMOUNT,
            self::REQUEST_TRANSACTION_ACCEPTED_PROPOSAL_COUNT,
            self::REQUEST_TRANSACTION_ACCEPTED_PROPOSAL_SERVICE_FEE,
            self::REQUEST_TRANSACTION_ACCEPTED_PROPOSAL_SHIPPING_FEE,
            self::REQUEST_TRANSACTION_COMPLETED_AMOUNT,
            self::REQUEST_TRANSACTION_COMPLETED_COUNT,
            self::REQUEST_TRANSACTION_COMPLETED_SERVICE_FEE,
            self::REQUEST_TRANSACTION_COMPLETED_SHIPPING_FEE,
            self::REQUEST_TRANSACTION_CREATED_AMOUNT,
            self::REQUEST_TRANSACTION_CREATED_COUNT,
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
        $this->setIfExists('request', $data ?? [], null);
        $this->setIfExists('startAt', $data ?? [], null);
        $this->setIfExists('endAt', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('values', $data ?? [], null);
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

        if ($this->container['request'] === null) {
            $invalidProperties[] = "'request' can't be null";
        }
        $allowedValues = $this->getRequestAllowableValues();
        if (!is_null($this->container['request']) && !in_array($this->container['request'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'request', must be one of '%s'",
                $this->container['request'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['startAt'] === null) {
            $invalidProperties[] = "'startAt' can't be null";
        }
        if ($this->container['endAt'] === null) {
            $invalidProperties[] = "'endAt' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
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
     * Gets request
     *
     * @return string
     */
    public function getRequest()
    {
        return $this->container['request'];
    }

    /**
     * Sets request
     *
     * @param string $request request
     *
     * @return self
     */
    public function setRequest($request)
    {
        if (is_null($request)) {
            throw new \InvalidArgumentException('non-nullable request cannot be null');
        }
        $allowedValues = $this->getRequestAllowableValues();
        if (!in_array($request, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'request', must be one of '%s'",
                    $request,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['request'] = $request;

        return $this;
    }

    /**
     * Gets startAt
     *
     * @return \DateTime
     */
    public function getStartAt()
    {
        return $this->container['startAt'];
    }

    /**
     * Sets startAt
     *
     * @param \DateTime $startAt startAt
     *
     * @return self
     */
    public function setStartAt($startAt)
    {
        if (is_null($startAt)) {
            throw new \InvalidArgumentException('non-nullable startAt cannot be null');
        }
        $this->container['startAt'] = $startAt;

        return $this;
    }

    /**
     * Gets endAt
     *
     * @return \DateTime
     */
    public function getEndAt()
    {
        return $this->container['endAt'];
    }

    /**
     * Sets endAt
     *
     * @param \DateTime $endAt endAt
     *
     * @return self
     */
    public function setEndAt($endAt)
    {
        if (is_null($endAt)) {
            throw new \InvalidArgumentException('non-nullable endAt cannot be null');
        }
        $this->container['endAt'] = $endAt;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets values
     *
     * @return \Tripartie\SafeCheckout\Model\StatisticOutputArraySingleValue[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param \Tripartie\SafeCheckout\Model\StatisticOutputArraySingleValue[] $values values
     *
     * @return self
     */
    public function setValues($values)
    {
        if (is_null($values)) {
            throw new \InvalidArgumentException('non-nullable values cannot be null');
        }
        $this->container['values'] = $values;

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

