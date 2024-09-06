<?php
/**
 * TransactionQuoteCollectionRead
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
 * The version of the OpenAPI document: 2.0.54
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
 * TransactionQuoteCollectionRead Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Tripartie\SafeCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransactionQuoteCollectionRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Transaction-Quote-CollectionRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ulid' => 'string',
        'shippingCarrier' => 'string',
        'pickupCode' => 'string',
        'quantityToBeAcquired' => 'int',
        'attemptUnitPrice' => 'float',
        'currency' => 'string',
        'originalUnitPrice' => 'float',
        'originalUnitPriceUnconverted' => 'float',
        'transactionFees' => 'float',
        'shippingFees' => 'float',
        'thirdPartyRecipientFirstName' => 'string',
        'thirdPartyRecipientLastName' => 'string',
        'createdAt' => '\DateTime',
        'expireAt' => '\DateTime',
        'iri' => 'string',
        'unitPrice' => 'float',
        'price' => 'float',
        'buyerTotal' => 'float',
        'sellerTotal' => 'float'
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
        'pickupCode' => null,
        'quantityToBeAcquired' => null,
        'attemptUnitPrice' => 'float',
        'currency' => null,
        'originalUnitPrice' => 'float',
        'originalUnitPriceUnconverted' => 'float',
        'transactionFees' => 'float',
        'shippingFees' => 'float',
        'thirdPartyRecipientFirstName' => null,
        'thirdPartyRecipientLastName' => null,
        'createdAt' => 'date-time',
        'expireAt' => 'date-time',
        'iri' => 'iri-reference',
        'unitPrice' => null,
        'price' => null,
        'buyerTotal' => null,
        'sellerTotal' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ulid' => false,
        'shippingCarrier' => true,
        'pickupCode' => true,
        'quantityToBeAcquired' => false,
        'attemptUnitPrice' => false,
        'currency' => true,
        'originalUnitPrice' => false,
        'originalUnitPriceUnconverted' => false,
        'transactionFees' => false,
        'shippingFees' => false,
        'thirdPartyRecipientFirstName' => true,
        'thirdPartyRecipientLastName' => true,
        'createdAt' => false,
        'expireAt' => false,
        'iri' => false,
        'unitPrice' => true,
        'price' => true,
        'buyerTotal' => true,
        'sellerTotal' => true
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
        'pickupCode' => 'pickupCode',
        'quantityToBeAcquired' => 'quantityToBeAcquired',
        'attemptUnitPrice' => 'attemptUnitPrice',
        'currency' => 'currency',
        'originalUnitPrice' => 'originalUnitPrice',
        'originalUnitPriceUnconverted' => 'originalUnitPriceUnconverted',
        'transactionFees' => 'transactionFees',
        'shippingFees' => 'shippingFees',
        'thirdPartyRecipientFirstName' => 'thirdPartyRecipientFirstName',
        'thirdPartyRecipientLastName' => 'thirdPartyRecipientLastName',
        'createdAt' => 'createdAt',
        'expireAt' => 'expireAt',
        'iri' => 'iri',
        'unitPrice' => 'unitPrice',
        'price' => 'price',
        'buyerTotal' => 'buyerTotal',
        'sellerTotal' => 'sellerTotal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ulid' => 'setUlid',
        'shippingCarrier' => 'setShippingCarrier',
        'pickupCode' => 'setPickupCode',
        'quantityToBeAcquired' => 'setQuantityToBeAcquired',
        'attemptUnitPrice' => 'setAttemptUnitPrice',
        'currency' => 'setCurrency',
        'originalUnitPrice' => 'setOriginalUnitPrice',
        'originalUnitPriceUnconverted' => 'setOriginalUnitPriceUnconverted',
        'transactionFees' => 'setTransactionFees',
        'shippingFees' => 'setShippingFees',
        'thirdPartyRecipientFirstName' => 'setThirdPartyRecipientFirstName',
        'thirdPartyRecipientLastName' => 'setThirdPartyRecipientLastName',
        'createdAt' => 'setCreatedAt',
        'expireAt' => 'setExpireAt',
        'iri' => 'setIri',
        'unitPrice' => 'setUnitPrice',
        'price' => 'setPrice',
        'buyerTotal' => 'setBuyerTotal',
        'sellerTotal' => 'setSellerTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ulid' => 'getUlid',
        'shippingCarrier' => 'getShippingCarrier',
        'pickupCode' => 'getPickupCode',
        'quantityToBeAcquired' => 'getQuantityToBeAcquired',
        'attemptUnitPrice' => 'getAttemptUnitPrice',
        'currency' => 'getCurrency',
        'originalUnitPrice' => 'getOriginalUnitPrice',
        'originalUnitPriceUnconverted' => 'getOriginalUnitPriceUnconverted',
        'transactionFees' => 'getTransactionFees',
        'shippingFees' => 'getShippingFees',
        'thirdPartyRecipientFirstName' => 'getThirdPartyRecipientFirstName',
        'thirdPartyRecipientLastName' => 'getThirdPartyRecipientLastName',
        'createdAt' => 'getCreatedAt',
        'expireAt' => 'getExpireAt',
        'iri' => 'getIri',
        'unitPrice' => 'getUnitPrice',
        'price' => 'getPrice',
        'buyerTotal' => 'getBuyerTotal',
        'sellerTotal' => 'getSellerTotal'
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
    public const SHIPPING_CARRIER_NULL = 'null';

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
            self::SHIPPING_CARRIER_NULL,
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
        $this->setIfExists('pickupCode', $data ?? [], null);
        $this->setIfExists('quantityToBeAcquired', $data ?? [], 1);
        $this->setIfExists('attemptUnitPrice', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], 'EUR');
        $this->setIfExists('originalUnitPrice', $data ?? [], null);
        $this->setIfExists('originalUnitPriceUnconverted', $data ?? [], null);
        $this->setIfExists('transactionFees', $data ?? [], null);
        $this->setIfExists('shippingFees', $data ?? [], null);
        $this->setIfExists('thirdPartyRecipientFirstName', $data ?? [], null);
        $this->setIfExists('thirdPartyRecipientLastName', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('expireAt', $data ?? [], null);
        $this->setIfExists('iri', $data ?? [], null);
        $this->setIfExists('unitPrice', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('buyerTotal', $data ?? [], null);
        $this->setIfExists('sellerTotal', $data ?? [], null);
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
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Expect 'EUR' only for now.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            array_push($this->openAPINullablesSetToNull, 'currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets originalUnitPrice
     *
     * @return float|null
     */
    public function getOriginalUnitPrice()
    {
        return $this->container['originalUnitPrice'];
    }

    /**
     * Sets originalUnitPrice
     *
     * @param float|null $originalUnitPrice originalUnitPrice
     *
     * @return self
     */
    public function setOriginalUnitPrice($originalUnitPrice)
    {
        if (is_null($originalUnitPrice)) {
            throw new \InvalidArgumentException('non-nullable originalUnitPrice cannot be null');
        }
        $this->container['originalUnitPrice'] = $originalUnitPrice;

        return $this;
    }

    /**
     * Gets originalUnitPriceUnconverted
     *
     * @return float|null
     */
    public function getOriginalUnitPriceUnconverted()
    {
        return $this->container['originalUnitPriceUnconverted'];
    }

    /**
     * Sets originalUnitPriceUnconverted
     *
     * @param float|null $originalUnitPriceUnconverted originalUnitPriceUnconverted
     *
     * @return self
     */
    public function setOriginalUnitPriceUnconverted($originalUnitPriceUnconverted)
    {
        if (is_null($originalUnitPriceUnconverted)) {
            throw new \InvalidArgumentException('non-nullable originalUnitPriceUnconverted cannot be null');
        }
        $this->container['originalUnitPriceUnconverted'] = $originalUnitPriceUnconverted;

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
        $this->container['thirdPartyRecipientLastName'] = $thirdPartyRecipientLastName;

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
     * Gets iri
     *
     * @return string|null
     */
    public function getIri()
    {
        return $this->container['iri'];
    }

    /**
     * Sets iri
     *
     * @param string|null $iri iri
     *
     * @return self
     */
    public function setIri($iri)
    {
        if (is_null($iri)) {
            throw new \InvalidArgumentException('non-nullable iri cannot be null');
        }
        $this->container['iri'] = $iri;

        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return float|null
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param float|null $unitPrice unitPrice
     *
     * @return self
     */
    public function setUnitPrice($unitPrice)
    {
        if (is_null($unitPrice)) {
            array_push($this->openAPINullablesSetToNull, 'unitPrice');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unitPrice', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            array_push($this->openAPINullablesSetToNull, 'price');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('price', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets buyerTotal
     *
     * @return float|null
     */
    public function getBuyerTotal()
    {
        return $this->container['buyerTotal'];
    }

    /**
     * Sets buyerTotal
     *
     * @param float|null $buyerTotal The buyer pays for:  - A) item  - B) shipping (optional)  - C) fees     (optional) This method sum them automatically.
     *
     * @return self
     */
    public function setBuyerTotal($buyerTotal)
    {
        if (is_null($buyerTotal)) {
            array_push($this->openAPINullablesSetToNull, 'buyerTotal');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('buyerTotal', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['buyerTotal'] = $buyerTotal;

        return $this;
    }

    /**
     * Gets sellerTotal
     *
     * @return float|null
     */
    public function getSellerTotal()
    {
        return $this->container['sellerTotal'];
    }

    /**
     * Sets sellerTotal
     *
     * @param float|null $sellerTotal Represent what amount is to be expected released to the seller.
     *
     * @return self
     */
    public function setSellerTotal($sellerTotal)
    {
        if (is_null($sellerTotal)) {
            array_push($this->openAPINullablesSetToNull, 'sellerTotal');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sellerTotal', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sellerTotal'] = $sellerTotal;

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


