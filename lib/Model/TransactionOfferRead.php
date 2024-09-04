<?php
/**
 * TransactionOfferRead
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
 * The version of the OpenAPI document: 2.0.35
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
 * TransactionOfferRead Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Tripartie\SafeCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TransactionOfferRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Transaction-Offer-Read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ulid' => 'string',
        'status' => 'string',
        'publicUrl' => 'string',
        'redirectUrl' => 'string',
        'seller' => '\Tripartie\SafeCheckout\Model\TransactionPersonaRead',
        'presetBuyer' => '\Tripartie\SafeCheckout\Model\TransactionPersonaRead',
        'nature' => 'string',
        'title' => 'string',
        'description' => 'string',
        'unitPrice' => 'float',
        'currencyCode' => 'string',
        'itemCount' => 'int',
        'condition' => 'string',
        'weightInGram' => 'int',
        'shippingAllowed' => 'bool',
        'handDeliveryAllowed' => 'bool',
        'shippingCarriers' => 'string[]',
        'eanCode' => 'string',
        'canBeSoldSeparately' => 'bool',
        'metadata' => '\Tripartie\SafeCheckout\Model\TransactionMetadataRead[]',
        'medias' => 'string[]',
        'createdAt' => '\DateTime',
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
        'ulid' => null,
        'status' => null,
        'publicUrl' => null,
        'redirectUrl' => null,
        'seller' => null,
        'presetBuyer' => null,
        'nature' => null,
        'title' => null,
        'description' => null,
        'unitPrice' => 'float',
        'currencyCode' => null,
        'itemCount' => null,
        'condition' => null,
        'weightInGram' => null,
        'shippingAllowed' => null,
        'handDeliveryAllowed' => null,
        'shippingCarriers' => null,
        'eanCode' => null,
        'canBeSoldSeparately' => null,
        'metadata' => null,
        'medias' => 'iri-reference',
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ulid' => false,
        'status' => false,
        'publicUrl' => true,
        'redirectUrl' => true,
        'seller' => false,
        'presetBuyer' => true,
        'nature' => false,
        'title' => false,
        'description' => true,
        'unitPrice' => false,
        'currencyCode' => false,
        'itemCount' => false,
        'condition' => false,
        'weightInGram' => false,
        'shippingAllowed' => false,
        'handDeliveryAllowed' => false,
        'shippingCarriers' => false,
        'eanCode' => true,
        'canBeSoldSeparately' => false,
        'metadata' => false,
        'medias' => false,
        'createdAt' => false,
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
        'ulid' => 'ulid',
        'status' => 'status',
        'publicUrl' => 'publicUrl',
        'redirectUrl' => 'redirectUrl',
        'seller' => 'seller',
        'presetBuyer' => 'presetBuyer',
        'nature' => 'nature',
        'title' => 'title',
        'description' => 'description',
        'unitPrice' => 'unitPrice',
        'currencyCode' => 'currencyCode',
        'itemCount' => 'itemCount',
        'condition' => 'condition',
        'weightInGram' => 'weightInGram',
        'shippingAllowed' => 'shippingAllowed',
        'handDeliveryAllowed' => 'handDeliveryAllowed',
        'shippingCarriers' => 'shippingCarriers',
        'eanCode' => 'eanCode',
        'canBeSoldSeparately' => 'canBeSoldSeparately',
        'metadata' => 'metadata',
        'medias' => 'medias',
        'createdAt' => 'createdAt',
        'updatedAt' => 'updatedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ulid' => 'setUlid',
        'status' => 'setStatus',
        'publicUrl' => 'setPublicUrl',
        'redirectUrl' => 'setRedirectUrl',
        'seller' => 'setSeller',
        'presetBuyer' => 'setPresetBuyer',
        'nature' => 'setNature',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'unitPrice' => 'setUnitPrice',
        'currencyCode' => 'setCurrencyCode',
        'itemCount' => 'setItemCount',
        'condition' => 'setCondition',
        'weightInGram' => 'setWeightInGram',
        'shippingAllowed' => 'setShippingAllowed',
        'handDeliveryAllowed' => 'setHandDeliveryAllowed',
        'shippingCarriers' => 'setShippingCarriers',
        'eanCode' => 'setEanCode',
        'canBeSoldSeparately' => 'setCanBeSoldSeparately',
        'metadata' => 'setMetadata',
        'medias' => 'setMedias',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ulid' => 'getUlid',
        'status' => 'getStatus',
        'publicUrl' => 'getPublicUrl',
        'redirectUrl' => 'getRedirectUrl',
        'seller' => 'getSeller',
        'presetBuyer' => 'getPresetBuyer',
        'nature' => 'getNature',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'unitPrice' => 'getUnitPrice',
        'currencyCode' => 'getCurrencyCode',
        'itemCount' => 'getItemCount',
        'condition' => 'getCondition',
        'weightInGram' => 'getWeightInGram',
        'shippingAllowed' => 'getShippingAllowed',
        'handDeliveryAllowed' => 'getHandDeliveryAllowed',
        'shippingCarriers' => 'getShippingCarriers',
        'eanCode' => 'getEanCode',
        'canBeSoldSeparately' => 'getCanBeSoldSeparately',
        'metadata' => 'getMetadata',
        'medias' => 'getMedias',
        'createdAt' => 'getCreatedAt',
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

    public const STATUS_ISSUED = 'issued';
    public const STATUS_ACTIVE = 'active';
    public const STATUS_FULFILLED = 'fulfilled';
    public const STATUS_EXPIRED = 'expired';
    public const NATURE_SERVICE = 'service';
    public const NATURE_PHYSICAL_ITEM = 'physical_item';
    public const NATURE_DEMATERIALIZED_ITEM = 'dematerialized_item';
    public const NATURE_RENT_ITEM = 'rent_item';
    public const CONDITION__NEW = 'NEW';
    public const CONDITION_USED = 'USED';
    public const CONDITION_DAMAGED = 'DAMAGED';
    public const CONDITION_DETERIORATED = 'DETERIORATED';
    public const CONDITION_UNRECOVERABLE = 'UNRECOVERABLE';
    public const SHIPPING_CARRIERS_SWISS_POST = 'SwissPost';
    public const SHIPPING_CARRIERS_COLISSIMO = 'Colissimo';
    public const SHIPPING_CARRIERS_MONDIAL_RELAY = 'MondialRelay';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ISSUED,
            self::STATUS_ACTIVE,
            self::STATUS_FULFILLED,
            self::STATUS_EXPIRED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNatureAllowableValues()
    {
        return [
            self::NATURE_SERVICE,
            self::NATURE_PHYSICAL_ITEM,
            self::NATURE_DEMATERIALIZED_ITEM,
            self::NATURE_RENT_ITEM,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConditionAllowableValues()
    {
        return [
            self::CONDITION__NEW,
            self::CONDITION_USED,
            self::CONDITION_DAMAGED,
            self::CONDITION_DETERIORATED,
            self::CONDITION_UNRECOVERABLE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShippingCarriersAllowableValues()
    {
        return [
            self::SHIPPING_CARRIERS_SWISS_POST,
            self::SHIPPING_CARRIERS_COLISSIMO,
            self::SHIPPING_CARRIERS_MONDIAL_RELAY,
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('publicUrl', $data ?? [], null);
        $this->setIfExists('redirectUrl', $data ?? [], null);
        $this->setIfExists('seller', $data ?? [], null);
        $this->setIfExists('presetBuyer', $data ?? [], null);
        $this->setIfExists('nature', $data ?? [], 'physical_item');
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('unitPrice', $data ?? [], null);
        $this->setIfExists('currencyCode', $data ?? [], 'EUR');
        $this->setIfExists('itemCount', $data ?? [], 1);
        $this->setIfExists('condition', $data ?? [], 'USED');
        $this->setIfExists('weightInGram', $data ?? [], null);
        $this->setIfExists('shippingAllowed', $data ?? [], null);
        $this->setIfExists('handDeliveryAllowed', $data ?? [], true);
        $this->setIfExists('shippingCarriers', $data ?? [], null);
        $this->setIfExists('eanCode', $data ?? [], null);
        $this->setIfExists('canBeSoldSeparately', $data ?? [], true);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('medias', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
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

        if ($this->container['ulid'] === null) {
            $invalidProperties[] = "'ulid' can't be null";
        }
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

        if ($this->container['seller'] === null) {
            $invalidProperties[] = "'seller' can't be null";
        }
        if ($this->container['nature'] === null) {
            $invalidProperties[] = "'nature' can't be null";
        }
        $allowedValues = $this->getNatureAllowableValues();
        if (!is_null($this->container['nature']) && !in_array($this->container['nature'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'nature', must be one of '%s'",
                $this->container['nature'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['currencyCode'] === null) {
            $invalidProperties[] = "'currencyCode' can't be null";
        }
        $allowedValues = $this->getConditionAllowableValues();
        if (!is_null($this->container['condition']) && !in_array($this->container['condition'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'condition', must be one of '%s'",
                $this->container['condition'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['weightInGram'] === null) {
            $invalidProperties[] = "'weightInGram' can't be null";
        }
        if ($this->container['shippingAllowed'] === null) {
            $invalidProperties[] = "'shippingAllowed' can't be null";
        }
        if ($this->container['handDeliveryAllowed'] === null) {
            $invalidProperties[] = "'handDeliveryAllowed' can't be null";
        }
        if ($this->container['canBeSoldSeparately'] === null) {
            $invalidProperties[] = "'canBeSoldSeparately' can't be null";
        }
        if ($this->container['medias'] === null) {
            $invalidProperties[] = "'medias' can't be null";
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
     * Gets publicUrl
     *
     * @return string|null
     */
    public function getPublicUrl()
    {
        return $this->container['publicUrl'];
    }

    /**
     * Sets publicUrl
     *
     * @param string|null $publicUrl The public URL for your Ad/Offer on your marketplace.
     *
     * @return self
     */
    public function setPublicUrl($publicUrl)
    {
        if (is_null($publicUrl)) {
            array_push($this->openAPINullablesSetToNull, 'publicUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('publicUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['publicUrl'] = $publicUrl;

        return $this;
    }

    /**
     * Gets redirectUrl
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->container['redirectUrl'];
    }

    /**
     * Sets redirectUrl
     *
     * @param string|null $redirectUrl Fill-in that field IF you intend to redirect your customer instead of using a WebView.
     *
     * @return self
     */
    public function setRedirectUrl($redirectUrl)
    {
        if (is_null($redirectUrl)) {
            array_push($this->openAPINullablesSetToNull, 'redirectUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redirectUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['redirectUrl'] = $redirectUrl;

        return $this;
    }

    /**
     * Gets seller
     *
     * @return \Tripartie\SafeCheckout\Model\TransactionPersonaRead
     */
    public function getSeller()
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller
     *
     * @param \Tripartie\SafeCheckout\Model\TransactionPersonaRead $seller seller
     *
     * @return self
     */
    public function setSeller($seller)
    {
        if (is_null($seller)) {
            throw new \InvalidArgumentException('non-nullable seller cannot be null');
        }
        $this->container['seller'] = $seller;

        return $this;
    }

    /**
     * Gets presetBuyer
     *
     * @return \Tripartie\SafeCheckout\Model\TransactionPersonaRead|null
     */
    public function getPresetBuyer()
    {
        return $this->container['presetBuyer'];
    }

    /**
     * Sets presetBuyer
     *
     * @param \Tripartie\SafeCheckout\Model\TransactionPersonaRead|null $presetBuyer presetBuyer
     *
     * @return self
     */
    public function setPresetBuyer($presetBuyer)
    {
        if (is_null($presetBuyer)) {
            array_push($this->openAPINullablesSetToNull, 'presetBuyer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('presetBuyer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['presetBuyer'] = $presetBuyer;

        return $this;
    }

    /**
     * Gets nature
     *
     * @return string
     */
    public function getNature()
    {
        return $this->container['nature'];
    }

    /**
     * Sets nature
     *
     * @param string $nature This WILL affect the assigned workflow. Choosing service will disable delivery for example. Refer to our technical hub for more information.
     *
     * @return self
     */
    public function setNature($nature)
    {
        if (is_null($nature)) {
            throw new \InvalidArgumentException('non-nullable nature cannot be null');
        }
        $allowedValues = $this->getNatureAllowableValues();
        if (!in_array($nature, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'nature', must be one of '%s'",
                    $nature,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['nature'] = $nature;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title title
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

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
            throw new \InvalidArgumentException('non-nullable unitPrice cannot be null');
        }
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currencyCode'];
    }

    /**
     * Sets currencyCode
     *
     * @param string $currencyCode currencyCode
     *
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        if (is_null($currencyCode)) {
            throw new \InvalidArgumentException('non-nullable currencyCode cannot be null');
        }
        $this->container['currencyCode'] = $currencyCode;

        return $this;
    }

    /**
     * Gets itemCount
     *
     * @return int|null
     */
    public function getItemCount()
    {
        return $this->container['itemCount'];
    }

    /**
     * Sets itemCount
     *
     * @param int|null $itemCount itemCount
     *
     * @return self
     */
    public function setItemCount($itemCount)
    {
        if (is_null($itemCount)) {
            throw new \InvalidArgumentException('non-nullable itemCount cannot be null');
        }
        $this->container['itemCount'] = $itemCount;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string|null $condition condition
     *
     * @return self
     */
    public function setCondition($condition)
    {
        if (is_null($condition)) {
            throw new \InvalidArgumentException('non-nullable condition cannot be null');
        }
        $allowedValues = $this->getConditionAllowableValues();
        if (!in_array($condition, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'condition', must be one of '%s'",
                    $condition,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets weightInGram
     *
     * @return int
     */
    public function getWeightInGram()
    {
        return $this->container['weightInGram'];
    }

    /**
     * Sets weightInGram
     *
     * @param int $weightInGram Accepted values between 500g (0.5kg) and 10,000g (10kg).
     *
     * @return self
     */
    public function setWeightInGram($weightInGram)
    {
        if (is_null($weightInGram)) {
            throw new \InvalidArgumentException('non-nullable weightInGram cannot be null');
        }
        $this->container['weightInGram'] = $weightInGram;

        return $this;
    }

    /**
     * Gets shippingAllowed
     *
     * @return bool
     */
    public function getShippingAllowed()
    {
        return $this->container['shippingAllowed'];
    }

    /**
     * Sets shippingAllowed
     *
     * @param bool $shippingAllowed That toggle allows the seller to propose shipping for its item. If set in conjunction of shippingCarrier, the label will be automatically generated. Also, it will restrict the carrier to the limited subset defined.
     *
     * @return self
     */
    public function setShippingAllowed($shippingAllowed)
    {
        if (is_null($shippingAllowed)) {
            throw new \InvalidArgumentException('non-nullable shippingAllowed cannot be null');
        }
        $this->container['shippingAllowed'] = $shippingAllowed;

        return $this;
    }

    /**
     * Gets handDeliveryAllowed
     *
     * @return bool
     */
    public function getHandDeliveryAllowed()
    {
        return $this->container['handDeliveryAllowed'];
    }

    /**
     * Sets handDeliveryAllowed
     *
     * @param bool $handDeliveryAllowed Enable both parties to finalize the transaction in person rather than using delivery. A QR Code must be scanned by the seller once the buyer claims the product.
     *
     * @return self
     */
    public function setHandDeliveryAllowed($handDeliveryAllowed)
    {
        if (is_null($handDeliveryAllowed)) {
            throw new \InvalidArgumentException('non-nullable handDeliveryAllowed cannot be null');
        }
        $this->container['handDeliveryAllowed'] = $handDeliveryAllowed;

        return $this;
    }

    /**
     * Gets shippingCarriers
     *
     * @return string[]|null
     */
    public function getShippingCarriers()
    {
        return $this->container['shippingCarriers'];
    }

    /**
     * Sets shippingCarriers
     *
     * @param string[]|null $shippingCarriers If you wish to enable automated shipping label generation through a specific provider, specify it there.
     *
     * @return self
     */
    public function setShippingCarriers($shippingCarriers)
    {
        if (is_null($shippingCarriers)) {
            throw new \InvalidArgumentException('non-nullable shippingCarriers cannot be null');
        }
        $allowedValues = $this->getShippingCarriersAllowableValues();
        if (array_diff($shippingCarriers, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'shippingCarriers', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shippingCarriers'] = $shippingCarriers;

        return $this;
    }

    /**
     * Gets eanCode
     *
     * @return string|null
     */
    public function getEanCode()
    {
        return $this->container['eanCode'];
    }

    /**
     * Sets eanCode
     *
     * @param string|null $eanCode eanCode
     *
     * @return self
     */
    public function setEanCode($eanCode)
    {
        if (is_null($eanCode)) {
            array_push($this->openAPINullablesSetToNull, 'eanCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('eanCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['eanCode'] = $eanCode;

        return $this;
    }

    /**
     * Gets canBeSoldSeparately
     *
     * @return bool
     */
    public function getCanBeSoldSeparately()
    {
        return $this->container['canBeSoldSeparately'];
    }

    /**
     * Sets canBeSoldSeparately
     *
     * @param bool $canBeSoldSeparately Set this flag to false to forbid a potential buyer to acquire less than \"itemCount\" item(s)
     *
     * @return self
     */
    public function setCanBeSoldSeparately($canBeSoldSeparately)
    {
        if (is_null($canBeSoldSeparately)) {
            throw new \InvalidArgumentException('non-nullable canBeSoldSeparately cannot be null');
        }
        $this->container['canBeSoldSeparately'] = $canBeSoldSeparately;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \Tripartie\SafeCheckout\Model\TransactionMetadataRead[]|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \Tripartie\SafeCheckout\Model\TransactionMetadataRead[]|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets medias
     *
     * @return string[]
     */
    public function getMedias()
    {
        return $this->container['medias'];
    }

    /**
     * Sets medias
     *
     * @param string[] $medias medias
     *
     * @return self
     */
    public function setMedias($medias)
    {
        if (is_null($medias)) {
            throw new \InvalidArgumentException('non-nullable medias cannot be null');
        }
        $this->container['medias'] = $medias;

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


