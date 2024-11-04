<?php
/**
 * StatisticRead
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
 * The version of the OpenAPI document: 2.0.101
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
 * StatisticRead Class Doc Comment
 *
 * @category Class
 * @package  Tripartie\SafeCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StatisticRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Statistic-Read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'request' => 'string[]',
        'focusOn' => 'string',
        'focusType' => 'string',
        'startAt' => '\DateTime',
        'endAt' => '\DateTime',
        'groupByPeriod' => 'string',
        'data' => '\Tripartie\SafeCheckout\Model\StatisticReadDataInner[]'
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
        'focusOn' => null,
        'focusType' => null,
        'startAt' => 'date-time',
        'endAt' => 'date-time',
        'groupByPeriod' => null,
        'data' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'request' => false,
        'focusOn' => true,
        'focusType' => true,
        'startAt' => true,
        'endAt' => true,
        'groupByPeriod' => true,
        'data' => false
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
        'focusOn' => 'focusOn',
        'focusType' => 'focusType',
        'startAt' => 'startAt',
        'endAt' => 'endAt',
        'groupByPeriod' => 'groupByPeriod',
        'data' => 'data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'request' => 'setRequest',
        'focusOn' => 'setFocusOn',
        'focusType' => 'setFocusType',
        'startAt' => 'setStartAt',
        'endAt' => 'setEndAt',
        'groupByPeriod' => 'setGroupByPeriod',
        'data' => 'setData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'request' => 'getRequest',
        'focusOn' => 'getFocusOn',
        'focusType' => 'getFocusType',
        'startAt' => 'getStartAt',
        'endAt' => 'getEndAt',
        'groupByPeriod' => 'getGroupByPeriod',
        'data' => 'getData'
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

    public const REQUEST_FINALIZED_CASHOUT_AMOUNT = 'FINALIZED_CASHOUT_AMOUNT';
    public const REQUEST_FINALIZED_CASHOUT_COUNT = 'FINALIZED_CASHOUT_COUNT';
    public const REQUEST_PENDING_CASHOUT_AMOUNT = 'PENDING_CASHOUT_AMOUNT';
    public const REQUEST_PENDING_CASHOUT_COUNT = 'PENDING_CASHOUT_COUNT';
    public const REQUEST_OFFER_PUBLISHED_AMOUNT = 'OFFER_PUBLISHED_AMOUNT';
    public const REQUEST_OFFER_PUBLISHED_COUNT = 'OFFER_PUBLISHED_COUNT';
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
    public const REQUEST_WALLET_AVAILABLE_AMOUNT = 'WALLET_AVAILABLE_AMOUNT';
    public const REQUEST_WALLET_IN_CUSTODY_AMOUNT = 'WALLET_IN_CUSTODY_AMOUNT';
    public const FOCUS_TYPE_ORGANIZATION = 'Organization';
    public const FOCUS_TYPE_USER = 'User';
    public const FOCUS_TYPE_PERSONA = 'Persona';
    public const GROUP_BY_PERIOD_DAILY = 'DAILY';
    public const GROUP_BY_PERIOD_WEEKLY = 'WEEKLY';
    public const GROUP_BY_PERIOD_MONTHLY = 'MONTHLY';
    public const GROUP_BY_PERIOD_QUARTERLY = 'QUARTERLY';
    public const GROUP_BY_PERIOD_YEARLY = 'YEARLY';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequestAllowableValues()
    {
        return [
            self::REQUEST_FINALIZED_CASHOUT_AMOUNT,
            self::REQUEST_FINALIZED_CASHOUT_COUNT,
            self::REQUEST_PENDING_CASHOUT_AMOUNT,
            self::REQUEST_PENDING_CASHOUT_COUNT,
            self::REQUEST_OFFER_PUBLISHED_AMOUNT,
            self::REQUEST_OFFER_PUBLISHED_COUNT,
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
            self::REQUEST_WALLET_AVAILABLE_AMOUNT,
            self::REQUEST_WALLET_IN_CUSTODY_AMOUNT,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFocusTypeAllowableValues()
    {
        return [
            self::FOCUS_TYPE_ORGANIZATION,
            self::FOCUS_TYPE_USER,
            self::FOCUS_TYPE_PERSONA,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGroupByPeriodAllowableValues()
    {
        return [
            self::GROUP_BY_PERIOD_DAILY,
            self::GROUP_BY_PERIOD_WEEKLY,
            self::GROUP_BY_PERIOD_MONTHLY,
            self::GROUP_BY_PERIOD_QUARTERLY,
            self::GROUP_BY_PERIOD_YEARLY,
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
        $this->setIfExists('focusOn', $data ?? [], null);
        $this->setIfExists('focusType', $data ?? [], null);
        $this->setIfExists('startAt', $data ?? [], null);
        $this->setIfExists('endAt', $data ?? [], null);
        $this->setIfExists('groupByPeriod', $data ?? [], null);
        $this->setIfExists('data', $data ?? [], null);
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
        $allowedValues = $this->getFocusTypeAllowableValues();
        if (!is_null($this->container['focusType']) && !in_array($this->container['focusType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'focusType', must be one of '%s'",
                $this->container['focusType'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getGroupByPeriodAllowableValues();
        if (!is_null($this->container['groupByPeriod']) && !in_array($this->container['groupByPeriod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'groupByPeriod', must be one of '%s'",
                $this->container['groupByPeriod'],
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
     * Gets request
     *
     * @return string[]
     */
    public function getRequest()
    {
        return $this->container['request'];
    }

    /**
     * Sets request
     *
     * @param string[] $request request
     *
     * @return self
     */
    public function setRequest($request)
    {
        if (is_null($request)) {
            throw new \InvalidArgumentException('non-nullable request cannot be null');
        }
        $allowedValues = $this->getRequestAllowableValues();
        if (array_diff($request, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'request', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        $this->container['request'] = $request;

        return $this;
    }

    /**
     * Gets focusOn
     *
     * @return string|null
     */
    public function getFocusOn()
    {
        return $this->container['focusOn'];
    }

    /**
     * Sets focusOn
     *
     * @param string|null $focusOn focusOn
     *
     * @return self
     */
    public function setFocusOn($focusOn)
    {
        if (is_null($focusOn)) {
            array_push($this->openAPINullablesSetToNull, 'focusOn');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('focusOn', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['focusOn'] = $focusOn;

        return $this;
    }

    /**
     * Gets focusType
     *
     * @return string|null
     */
    public function getFocusType()
    {
        return $this->container['focusType'];
    }

    /**
     * Sets focusType
     *
     * @param string|null $focusType focusType
     *
     * @return self
     */
    public function setFocusType($focusType)
    {
        if (is_null($focusType)) {
            array_push($this->openAPINullablesSetToNull, 'focusType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('focusType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getFocusTypeAllowableValues();
        if (!is_null($focusType) && !in_array($focusType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'focusType', must be one of '%s'",
                    $focusType,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['focusType'] = $focusType;

        return $this;
    }

    /**
     * Gets startAt
     *
     * @return \DateTime|null
     */
    public function getStartAt()
    {
        return $this->container['startAt'];
    }

    /**
     * Sets startAt
     *
     * @param \DateTime|null $startAt startAt
     *
     * @return self
     */
    public function setStartAt($startAt)
    {
        if (is_null($startAt)) {
            array_push($this->openAPINullablesSetToNull, 'startAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('startAt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['startAt'] = $startAt;

        return $this;
    }

    /**
     * Gets endAt
     *
     * @return \DateTime|null
     */
    public function getEndAt()
    {
        return $this->container['endAt'];
    }

    /**
     * Sets endAt
     *
     * @param \DateTime|null $endAt endAt
     *
     * @return self
     */
    public function setEndAt($endAt)
    {
        if (is_null($endAt)) {
            array_push($this->openAPINullablesSetToNull, 'endAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('endAt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['endAt'] = $endAt;

        return $this;
    }

    /**
     * Gets groupByPeriod
     *
     * @return string|null
     */
    public function getGroupByPeriod()
    {
        return $this->container['groupByPeriod'];
    }

    /**
     * Sets groupByPeriod
     *
     * @param string|null $groupByPeriod groupByPeriod
     *
     * @return self
     */
    public function setGroupByPeriod($groupByPeriod)
    {
        if (is_null($groupByPeriod)) {
            array_push($this->openAPINullablesSetToNull, 'groupByPeriod');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('groupByPeriod', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getGroupByPeriodAllowableValues();
        if (!is_null($groupByPeriod) && !in_array($groupByPeriod, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'groupByPeriod', must be one of '%s'",
                    $groupByPeriod,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['groupByPeriod'] = $groupByPeriod;

        return $this;
    }

    /**
     * Gets data
     *
     * @return \Tripartie\SafeCheckout\Model\StatisticReadDataInner[]|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \Tripartie\SafeCheckout\Model\StatisticReadDataInner[]|null $data data
     *
     * @return self
     */
    public function setData($data)
    {
        if (is_null($data)) {
            throw new \InvalidArgumentException('non-nullable data cannot be null');
        }
        $this->container['data'] = $data;

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


