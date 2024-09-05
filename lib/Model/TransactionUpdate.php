<?php
/**
 * TransactionUpdate
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
 * The version of the OpenAPI document: 2.0.38
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
 * TransactionUpdate Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Tripartie\SafeCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransactionUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Transaction-Update';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => 'string',
        'supplementalFees' => 'float',
        'balanceToRefund' => 'float',
        'feesToRefund' => 'float',
        'forceRefundShipping' => 'bool',
        'review' => 'string',
        'rating' => 'int',
        'handOverCodeConfirmation' => 'string',
        'updatedAt' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'supplementalFees' => null,
        'balanceToRefund' => null,
        'feesToRefund' => null,
        'forceRefundShipping' => null,
        'review' => null,
        'rating' => null,
        'handOverCodeConfirmation' => null,
        'updatedAt' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => true,
        'supplementalFees' => true,
        'balanceToRefund' => true,
        'feesToRefund' => true,
        'forceRefundShipping' => true,
        'review' => true,
        'rating' => true,
        'handOverCodeConfirmation' => true,
        'updatedAt' => true
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
        'status' => 'status',
        'supplementalFees' => 'supplementalFees',
        'balanceToRefund' => 'balanceToRefund',
        'feesToRefund' => 'feesToRefund',
        'forceRefundShipping' => 'forceRefundShipping',
        'review' => 'review',
        'rating' => 'rating',
        'handOverCodeConfirmation' => 'handOverCodeConfirmation',
        'updatedAt' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'supplementalFees' => 'setSupplementalFees',
        'balanceToRefund' => 'setBalanceToRefund',
        'feesToRefund' => 'setFeesToRefund',
        'forceRefundShipping' => 'setForceRefundShipping',
        'review' => 'setReview',
        'rating' => 'setRating',
        'handOverCodeConfirmation' => 'setHandOverCodeConfirmation',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'supplementalFees' => 'getSupplementalFees',
        'balanceToRefund' => 'getBalanceToRefund',
        'feesToRefund' => 'getFeesToRefund',
        'forceRefundShipping' => 'getForceRefundShipping',
        'review' => 'getReview',
        'rating' => 'getRating',
        'handOverCodeConfirmation' => 'getHandOverCodeConfirmation',
        'updatedAt' => 'getUpdatedAt'
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('supplementalFees', $data ?? [], null);
        $this->setIfExists('balanceToRefund', $data ?? [], null);
        $this->setIfExists('feesToRefund', $data ?? [], null);
        $this->setIfExists('forceRefundShipping', $data ?? [], null);
        $this->setIfExists('review', $data ?? [], null);
        $this->setIfExists('rating', $data ?? [], null);
        $this->setIfExists('handOverCodeConfirmation', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
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

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
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
     * Gets balanceToRefund
     *
     * @return float|null
     */
    public function getBalanceToRefund()
    {
        return $this->container['balanceToRefund'];
    }

    /**
     * Sets balanceToRefund
     *
     * @param float|null $balanceToRefund balanceToRefund
     *
     * @return self
     */
    public function setBalanceToRefund($balanceToRefund)
    {
        if (is_null($balanceToRefund)) {
            array_push($this->openAPINullablesSetToNull, 'balanceToRefund');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('balanceToRefund', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['balanceToRefund'] = $balanceToRefund;

        return $this;
    }

    /**
     * Gets feesToRefund
     *
     * @return float|null
     */
    public function getFeesToRefund()
    {
        return $this->container['feesToRefund'];
    }

    /**
     * Sets feesToRefund
     *
     * @param float|null $feesToRefund feesToRefund
     *
     * @return self
     */
    public function setFeesToRefund($feesToRefund)
    {
        if (is_null($feesToRefund)) {
            array_push($this->openAPINullablesSetToNull, 'feesToRefund');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('feesToRefund', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['feesToRefund'] = $feesToRefund;

        return $this;
    }

    /**
     * Gets forceRefundShipping
     *
     * @return bool|null
     */
    public function getForceRefundShipping()
    {
        return $this->container['forceRefundShipping'];
    }

    /**
     * Sets forceRefundShipping
     *
     * @param bool|null $forceRefundShipping Shipping is never refunded on purpose. Once deposited (parcel), we are billed for it.
     *
     * @return self
     */
    public function setForceRefundShipping($forceRefundShipping)
    {
        if (is_null($forceRefundShipping)) {
            array_push($this->openAPINullablesSetToNull, 'forceRefundShipping');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('forceRefundShipping', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['forceRefundShipping'] = $forceRefundShipping;

        return $this;
    }

    /**
     * Gets review
     *
     * @return string|null
     */
    public function getReview()
    {
        return $this->container['review'];
    }

    /**
     * Sets review
     *
     * @param string|null $review review
     *
     * @return self
     */
    public function setReview($review)
    {
        if (is_null($review)) {
            array_push($this->openAPINullablesSetToNull, 'review');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('review', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['review'] = $review;

        return $this;
    }

    /**
     * Gets rating
     *
     * @return int|null
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param int|null $rating rating
     *
     * @return self
     */
    public function setRating($rating)
    {
        if (is_null($rating)) {
            array_push($this->openAPINullablesSetToNull, 'rating');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('rating', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets handOverCodeConfirmation
     *
     * @return string|null
     */
    public function getHandOverCodeConfirmation()
    {
        return $this->container['handOverCodeConfirmation'];
    }

    /**
     * Sets handOverCodeConfirmation
     *
     * @param string|null $handOverCodeConfirmation handOverCodeConfirmation
     *
     * @return self
     */
    public function setHandOverCodeConfirmation($handOverCodeConfirmation)
    {
        if (is_null($handOverCodeConfirmation)) {
            array_push($this->openAPINullablesSetToNull, 'handOverCodeConfirmation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('handOverCodeConfirmation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['handOverCodeConfirmation'] = $handOverCodeConfirmation;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        if (is_null($updatedAt)) {
            array_push($this->openAPINullablesSetToNull, 'updatedAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('updatedAt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['updatedAt'] = $updatedAt;

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


