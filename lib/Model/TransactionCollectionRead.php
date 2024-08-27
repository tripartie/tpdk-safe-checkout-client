<?php
/**
 * TransactionCollectionRead
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
 * TransactionCollectionRead Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Tripartie\SafeCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransactionCollectionRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Transaction-CollectionRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ulid' => 'string',
        'offer' => '\Tripartie\SafeCheckout\Model\TransactionOfferCollectionRead',
        'quote' => '\Tripartie\SafeCheckout\Model\TransactionQuoteCollectionRead',
        'buyer' => '\Tripartie\SafeCheckout\Model\TransactionPersonaCollectionRead',
        'status' => 'string',
        'fees' => 'float',
        'supplementalFees' => 'float',
        'total' => 'float',
        'totalCharged' => 'float',
        'totalFees' => 'float',
        'awaitedParty' => 'string',
        'statusExpiration' => '\DateTime'
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
        'offer' => null,
        'quote' => null,
        'buyer' => null,
        'status' => null,
        'fees' => null,
        'supplementalFees' => null,
        'total' => null,
        'totalCharged' => null,
        'totalFees' => null,
        'awaitedParty' => null,
        'statusExpiration' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ulid' => false,
        'offer' => false,
        'quote' => false,
        'buyer' => false,
        'status' => true,
        'fees' => true,
        'supplementalFees' => true,
        'total' => false,
        'totalCharged' => false,
        'totalFees' => false,
        'awaitedParty' => false,
        'statusExpiration' => true
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
        'offer' => 'offer',
        'quote' => 'quote',
        'buyer' => 'buyer',
        'status' => 'status',
        'fees' => 'fees',
        'supplementalFees' => 'supplementalFees',
        'total' => 'total',
        'totalCharged' => 'totalCharged',
        'totalFees' => 'totalFees',
        'awaitedParty' => 'awaitedParty',
        'statusExpiration' => 'statusExpiration'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ulid' => 'setUlid',
        'offer' => 'setOffer',
        'quote' => 'setQuote',
        'buyer' => 'setBuyer',
        'status' => 'setStatus',
        'fees' => 'setFees',
        'supplementalFees' => 'setSupplementalFees',
        'total' => 'setTotal',
        'totalCharged' => 'setTotalCharged',
        'totalFees' => 'setTotalFees',
        'awaitedParty' => 'setAwaitedParty',
        'statusExpiration' => 'setStatusExpiration'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ulid' => 'getUlid',
        'offer' => 'getOffer',
        'quote' => 'getQuote',
        'buyer' => 'getBuyer',
        'status' => 'getStatus',
        'fees' => 'getFees',
        'supplementalFees' => 'getSupplementalFees',
        'total' => 'getTotal',
        'totalCharged' => 'getTotalCharged',
        'totalFees' => 'getTotalFees',
        'awaitedParty' => 'getAwaitedParty',
        'statusExpiration' => 'getStatusExpiration'
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

    public const STATUS_CREATED = 'CREATED';
    public const STATUS_AUTHORIZED = 'AUTHORIZED';
    public const STATUS_REFUSED = 'REFUSED';
    public const STATUS_ACCEPTED = 'ACCEPTED';
    public const STATUS_SHIPPED = 'SHIPPED';
    public const STATUS_IN_TRANSIT = 'IN_TRANSIT';
    public const STATUS_BLOCKED = 'BLOCKED';
    public const STATUS_DELIVERED = 'DELIVERED';
    public const STATUS_COMPLETED = 'COMPLETED';
    public const STATUS_DISPUTED = 'DISPUTED';
    public const STATUS_CANCELLED = 'CANCELLED';
    public const STATUS_NULL = 'null';
    public const AWAITED_PARTY_BUYER = 'BUYER';
    public const AWAITED_PARTY_PLATFORM = 'PLATFORM';
    public const AWAITED_PARTY_SELLER = 'SELLER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_AUTHORIZED,
            self::STATUS_REFUSED,
            self::STATUS_ACCEPTED,
            self::STATUS_SHIPPED,
            self::STATUS_IN_TRANSIT,
            self::STATUS_BLOCKED,
            self::STATUS_DELIVERED,
            self::STATUS_COMPLETED,
            self::STATUS_DISPUTED,
            self::STATUS_CANCELLED,
            self::STATUS_NULL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAwaitedPartyAllowableValues()
    {
        return [
            self::AWAITED_PARTY_BUYER,
            self::AWAITED_PARTY_PLATFORM,
            self::AWAITED_PARTY_SELLER,
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
        $this->setIfExists('offer', $data ?? [], null);
        $this->setIfExists('quote', $data ?? [], null);
        $this->setIfExists('buyer', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('fees', $data ?? [], null);
        $this->setIfExists('supplementalFees', $data ?? [], null);
        $this->setIfExists('total', $data ?? [], null);
        $this->setIfExists('totalCharged', $data ?? [], null);
        $this->setIfExists('totalFees', $data ?? [], null);
        $this->setIfExists('awaitedParty', $data ?? [], null);
        $this->setIfExists('statusExpiration', $data ?? [], null);
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
        if ($this->container['offer'] === null) {
            $invalidProperties[] = "'offer' can't be null";
        }
        if ($this->container['quote'] === null) {
            $invalidProperties[] = "'quote' can't be null";
        }
        if ($this->container['buyer'] === null) {
            $invalidProperties[] = "'buyer' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAwaitedPartyAllowableValues();
        if (!is_null($this->container['awaitedParty']) && !in_array($this->container['awaitedParty'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'awaitedParty', must be one of '%s'",
                $this->container['awaitedParty'],
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
     * Gets offer
     *
     * @return \Tripartie\SafeCheckout\Model\TransactionOfferCollectionRead
     */
    public function getOffer()
    {
        return $this->container['offer'];
    }

    /**
     * Sets offer
     *
     * @param \Tripartie\SafeCheckout\Model\TransactionOfferCollectionRead $offer offer
     *
     * @return self
     */
    public function setOffer($offer)
    {
        if (is_null($offer)) {
            throw new \InvalidArgumentException('non-nullable offer cannot be null');
        }
        $this->container['offer'] = $offer;

        return $this;
    }

    /**
     * Gets quote
     *
     * @return \Tripartie\SafeCheckout\Model\TransactionQuoteCollectionRead
     */
    public function getQuote()
    {
        return $this->container['quote'];
    }

    /**
     * Sets quote
     *
     * @param \Tripartie\SafeCheckout\Model\TransactionQuoteCollectionRead $quote quote
     *
     * @return self
     */
    public function setQuote($quote)
    {
        if (is_null($quote)) {
            throw new \InvalidArgumentException('non-nullable quote cannot be null');
        }
        $this->container['quote'] = $quote;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \Tripartie\SafeCheckout\Model\TransactionPersonaCollectionRead
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \Tripartie\SafeCheckout\Model\TransactionPersonaCollectionRead $buyer buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        if (is_null($buyer)) {
            throw new \InvalidArgumentException('non-nullable buyer cannot be null');
        }
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
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
     * Gets fees
     *
     * @return float|null
     */
    public function getFees()
    {
        return $this->container['fees'];
    }

    /**
     * Sets fees
     *
     * @param float|null $fees fees
     *
     * @return self
     */
    public function setFees($fees)
    {
        if (is_null($fees)) {
            array_push($this->openAPINullablesSetToNull, 'fees');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fees', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fees'] = $fees;

        return $this;
    }

    /**
     * Gets supplementalFees
     *
     * @return float|null
     */
    public function getSupplementalFees()
    {
        return $this->container['supplementalFees'];
    }

    /**
     * Sets supplementalFees
     *
     * @param float|null $supplementalFees supplementalFees
     *
     * @return self
     */
    public function setSupplementalFees($supplementalFees)
    {
        if (is_null($supplementalFees)) {
            array_push($this->openAPINullablesSetToNull, 'supplementalFees');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('supplementalFees', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['supplementalFees'] = $supplementalFees;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float|null $total total
     *
     * @return self
     */
    public function setTotal($total)
    {
        if (is_null($total)) {
            throw new \InvalidArgumentException('non-nullable total cannot be null');
        }
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets totalCharged
     *
     * @return float|null
     */
    public function getTotalCharged()
    {
        return $this->container['totalCharged'];
    }

    /**
     * Sets totalCharged
     *
     * @param float|null $totalCharged totalCharged
     *
     * @return self
     */
    public function setTotalCharged($totalCharged)
    {
        if (is_null($totalCharged)) {
            throw new \InvalidArgumentException('non-nullable totalCharged cannot be null');
        }
        $this->container['totalCharged'] = $totalCharged;

        return $this;
    }

    /**
     * Gets totalFees
     *
     * @return float|null
     */
    public function getTotalFees()
    {
        return $this->container['totalFees'];
    }

    /**
     * Sets totalFees
     *
     * @param float|null $totalFees totalFees
     *
     * @return self
     */
    public function setTotalFees($totalFees)
    {
        if (is_null($totalFees)) {
            throw new \InvalidArgumentException('non-nullable totalFees cannot be null');
        }
        $this->container['totalFees'] = $totalFees;

        return $this;
    }

    /**
     * Gets awaitedParty
     *
     * @return string|null
     */
    public function getAwaitedParty()
    {
        return $this->container['awaitedParty'];
    }

    /**
     * Sets awaitedParty
     *
     * @param string|null $awaitedParty Determine who is awaited (actor) for the next transition
     *
     * @return self
     */
    public function setAwaitedParty($awaitedParty)
    {
        if (is_null($awaitedParty)) {
            throw new \InvalidArgumentException('non-nullable awaitedParty cannot be null');
        }
        $allowedValues = $this->getAwaitedPartyAllowableValues();
        if (!in_array($awaitedParty, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'awaitedParty', must be one of '%s'",
                    $awaitedParty,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['awaitedParty'] = $awaitedParty;

        return $this;
    }

    /**
     * Gets statusExpiration
     *
     * @return \DateTime|null
     */
    public function getStatusExpiration()
    {
        return $this->container['statusExpiration'];
    }

    /**
     * Sets statusExpiration
     *
     * @param \DateTime|null $statusExpiration Yield if eligible the date-time at which the transaction state expire.
     *
     * @return self
     */
    public function setStatusExpiration($statusExpiration)
    {
        if (is_null($statusExpiration)) {
            array_push($this->openAPINullablesSetToNull, 'statusExpiration');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('statusExpiration', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['statusExpiration'] = $statusExpiration;

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


