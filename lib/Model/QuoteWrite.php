<?php
/**
 * QuoteWrite
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
 * QuoteWrite Class Doc Comment
 *
 * @category Class
 * @description Someone has to ask for a Quote prior to create a transaction and (therefor) charging a known amount of money.
 * @package  Tripartie\SafeCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class QuoteWrite implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Quote-Write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'captcha' => 'string',
        'offer' => 'string',
        'shippingCarrier' => 'string',
        'pickupCode' => 'string',
        'quantityToBeAcquired' => 'int',
        'attemptUnitPrice' => 'float',
        'thirdPartyRecipientFirstName' => 'string',
        'thirdPartyRecipientLastName' => 'string',
        'thirdPartyRecipientAddress' => '\Tripartie\SafeCheckout\Model\QuoteAddressWrite'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'captcha' => null,
        'offer' => 'iri-reference',
        'shippingCarrier' => null,
        'pickupCode' => null,
        'quantityToBeAcquired' => null,
        'attemptUnitPrice' => 'float',
        'thirdPartyRecipientFirstName' => null,
        'thirdPartyRecipientLastName' => null,
        'thirdPartyRecipientAddress' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'captcha' => true,
        'offer' => true,
        'shippingCarrier' => true,
        'pickupCode' => true,
        'quantityToBeAcquired' => false,
        'attemptUnitPrice' => false,
        'thirdPartyRecipientFirstName' => true,
        'thirdPartyRecipientLastName' => true,
        'thirdPartyRecipientAddress' => true
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
        'captcha' => 'captcha',
        'offer' => 'offer',
        'shippingCarrier' => 'shippingCarrier',
        'pickupCode' => 'pickupCode',
        'quantityToBeAcquired' => 'quantityToBeAcquired',
        'attemptUnitPrice' => 'attemptUnitPrice',
        'thirdPartyRecipientFirstName' => 'thirdPartyRecipientFirstName',
        'thirdPartyRecipientLastName' => 'thirdPartyRecipientLastName',
        'thirdPartyRecipientAddress' => 'thirdPartyRecipientAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'captcha' => 'setCaptcha',
        'offer' => 'setOffer',
        'shippingCarrier' => 'setShippingCarrier',
        'pickupCode' => 'setPickupCode',
        'quantityToBeAcquired' => 'setQuantityToBeAcquired',
        'attemptUnitPrice' => 'setAttemptUnitPrice',
        'thirdPartyRecipientFirstName' => 'setThirdPartyRecipientFirstName',
        'thirdPartyRecipientLastName' => 'setThirdPartyRecipientLastName',
        'thirdPartyRecipientAddress' => 'setThirdPartyRecipientAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'captcha' => 'getCaptcha',
        'offer' => 'getOffer',
        'shippingCarrier' => 'getShippingCarrier',
        'pickupCode' => 'getPickupCode',
        'quantityToBeAcquired' => 'getQuantityToBeAcquired',
        'attemptUnitPrice' => 'getAttemptUnitPrice',
        'thirdPartyRecipientFirstName' => 'getThirdPartyRecipientFirstName',
        'thirdPartyRecipientLastName' => 'getThirdPartyRecipientLastName',
        'thirdPartyRecipientAddress' => 'getThirdPartyRecipientAddress'
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
        $this->setIfExists('captcha', $data ?? [], null);
        $this->setIfExists('offer', $data ?? [], null);
        $this->setIfExists('shippingCarrier', $data ?? [], null);
        $this->setIfExists('pickupCode', $data ?? [], null);
        $this->setIfExists('quantityToBeAcquired', $data ?? [], 1);
        $this->setIfExists('attemptUnitPrice', $data ?? [], null);
        $this->setIfExists('thirdPartyRecipientFirstName', $data ?? [], null);
        $this->setIfExists('thirdPartyRecipientLastName', $data ?? [], null);
        $this->setIfExists('thirdPartyRecipientAddress', $data ?? [], null);
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

        if ($this->container['captcha'] === null) {
            $invalidProperties[] = "'captcha' can't be null";
        }
        $allowedValues = $this->getShippingCarrierAllowableValues();
        if (!is_null($this->container['shippingCarrier']) && !in_array($this->container['shippingCarrier'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shippingCarrier', must be one of '%s'",
                $this->container['shippingCarrier'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['thirdPartyRecipientFirstName']) && (mb_strlen($this->container['thirdPartyRecipientFirstName']) > 32)) {
            $invalidProperties[] = "invalid value for 'thirdPartyRecipientFirstName', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['thirdPartyRecipientFirstName']) && (mb_strlen($this->container['thirdPartyRecipientFirstName']) < 1)) {
            $invalidProperties[] = "invalid value for 'thirdPartyRecipientFirstName', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['thirdPartyRecipientLastName']) && (mb_strlen($this->container['thirdPartyRecipientLastName']) > 32)) {
            $invalidProperties[] = "invalid value for 'thirdPartyRecipientLastName', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['thirdPartyRecipientLastName']) && (mb_strlen($this->container['thirdPartyRecipientLastName']) < 1)) {
            $invalidProperties[] = "invalid value for 'thirdPartyRecipientLastName', the character length must be bigger than or equal to 1.";
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
     * Gets captcha
     *
     * @return string
     */
    public function getCaptcha()
    {
        return $this->container['captcha'];
    }

    /**
     * Sets captcha
     *
     * @param string $captcha captcha
     *
     * @return self
     */
    public function setCaptcha($captcha)
    {
        if (is_null($captcha)) {
            array_push($this->openAPINullablesSetToNull, 'captcha');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('captcha', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['captcha'] = $captcha;

        return $this;
    }

    /**
     * Gets offer
     *
     * @return string|null
     */
    public function getOffer()
    {
        return $this->container['offer'];
    }

    /**
     * Sets offer
     *
     * @param string|null $offer offer
     *
     * @return self
     */
    public function setOffer($offer)
    {
        if (is_null($offer)) {
            array_push($this->openAPINullablesSetToNull, 'offer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('offer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['offer'] = $offer;

        return $this;
    }

    /**
     * Gets shippingCarrier
     *
     * @return string|null
     */
    public function getShippingCarrier()
    {
        return $this->container['shippingCarrier'];
    }

    /**
     * Sets shippingCarrier
     *
     * @param string|null $shippingCarrier shippingCarrier
     *
     * @return self
     */
    public function setShippingCarrier($shippingCarrier)
    {
        if (is_null($shippingCarrier)) {
            array_push($this->openAPINullablesSetToNull, 'shippingCarrier');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shippingCarrier', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getShippingCarrierAllowableValues();
        if (!is_null($shippingCarrier) && !in_array($shippingCarrier, $allowedValues, true)) {
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
     * Gets pickupCode
     *
     * @return string|null
     */
    public function getPickupCode()
    {
        return $this->container['pickupCode'];
    }

    /**
     * Sets pickupCode
     *
     * @param string|null $pickupCode pickupCode
     *
     * @return self
     */
    public function setPickupCode($pickupCode)
    {
        if (is_null($pickupCode)) {
            array_push($this->openAPINullablesSetToNull, 'pickupCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pickupCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pickupCode'] = $pickupCode;

        return $this;
    }

    /**
     * Gets quantityToBeAcquired
     *
     * @return int|null
     */
    public function getQuantityToBeAcquired()
    {
        return $this->container['quantityToBeAcquired'];
    }

    /**
     * Sets quantityToBeAcquired
     *
     * @param int|null $quantityToBeAcquired quantityToBeAcquired
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
     * Gets thirdPartyRecipientFirstName
     *
     * @return string|null
     */
    public function getThirdPartyRecipientFirstName()
    {
        return $this->container['thirdPartyRecipientFirstName'];
    }

    /**
     * Sets thirdPartyRecipientFirstName
     *
     * @param string|null $thirdPartyRecipientFirstName thirdPartyRecipientFirstName
     *
     * @return self
     */
    public function setThirdPartyRecipientFirstName($thirdPartyRecipientFirstName)
    {
        if (is_null($thirdPartyRecipientFirstName)) {
            array_push($this->openAPINullablesSetToNull, 'thirdPartyRecipientFirstName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('thirdPartyRecipientFirstName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($thirdPartyRecipientFirstName) && (mb_strlen($thirdPartyRecipientFirstName) > 32)) {
            throw new \InvalidArgumentException('invalid length for $thirdPartyRecipientFirstName when calling QuoteWrite., must be smaller than or equal to 32.');
        }
        if (!is_null($thirdPartyRecipientFirstName) && (mb_strlen($thirdPartyRecipientFirstName) < 1)) {
            throw new \InvalidArgumentException('invalid length for $thirdPartyRecipientFirstName when calling QuoteWrite., must be bigger than or equal to 1.');
        }

        $this->container['thirdPartyRecipientFirstName'] = $thirdPartyRecipientFirstName;

        return $this;
    }

    /**
     * Gets thirdPartyRecipientLastName
     *
     * @return string|null
     */
    public function getThirdPartyRecipientLastName()
    {
        return $this->container['thirdPartyRecipientLastName'];
    }

    /**
     * Sets thirdPartyRecipientLastName
     *
     * @param string|null $thirdPartyRecipientLastName thirdPartyRecipientLastName
     *
     * @return self
     */
    public function setThirdPartyRecipientLastName($thirdPartyRecipientLastName)
    {
        if (is_null($thirdPartyRecipientLastName)) {
            array_push($this->openAPINullablesSetToNull, 'thirdPartyRecipientLastName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('thirdPartyRecipientLastName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($thirdPartyRecipientLastName) && (mb_strlen($thirdPartyRecipientLastName) > 32)) {
            throw new \InvalidArgumentException('invalid length for $thirdPartyRecipientLastName when calling QuoteWrite., must be smaller than or equal to 32.');
        }
        if (!is_null($thirdPartyRecipientLastName) && (mb_strlen($thirdPartyRecipientLastName) < 1)) {
            throw new \InvalidArgumentException('invalid length for $thirdPartyRecipientLastName when calling QuoteWrite., must be bigger than or equal to 1.');
        }

        $this->container['thirdPartyRecipientLastName'] = $thirdPartyRecipientLastName;

        return $this;
    }

    /**
     * Gets thirdPartyRecipientAddress
     *
     * @return \Tripartie\SafeCheckout\Model\QuoteAddressWrite|null
     */
    public function getThirdPartyRecipientAddress()
    {
        return $this->container['thirdPartyRecipientAddress'];
    }

    /**
     * Sets thirdPartyRecipientAddress
     *
     * @param \Tripartie\SafeCheckout\Model\QuoteAddressWrite|null $thirdPartyRecipientAddress thirdPartyRecipientAddress
     *
     * @return self
     */
    public function setThirdPartyRecipientAddress($thirdPartyRecipientAddress)
    {
        if (is_null($thirdPartyRecipientAddress)) {
            array_push($this->openAPINullablesSetToNull, 'thirdPartyRecipientAddress');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('thirdPartyRecipientAddress', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['thirdPartyRecipientAddress'] = $thirdPartyRecipientAddress;

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


