<?php
/**
 * OrganizationRead
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
 * The version of the OpenAPI document: 2.0.20
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
 * OrganizationRead Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Tripartie\SafeCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrganizationRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Organization-Read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'vatNumber' => 'string',
        'commercialRegistryNumber' => 'string',
        'websiteUrl' => 'string',
        'customBaseUrl' => 'string',
        'domainVerified' => 'bool',
        'icon' => '\Tripartie\SafeCheckout\Model\OrganizationMediaRead',
        'logo' => '\Tripartie\SafeCheckout\Model\OrganizationMediaRead',
        'primaryColor' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'vatNumber' => null,
        'commercialRegistryNumber' => null,
        'websiteUrl' => null,
        'customBaseUrl' => null,
        'domainVerified' => null,
        'icon' => null,
        'logo' => null,
        'primaryColor' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'vatNumber' => true,
        'commercialRegistryNumber' => false,
        'websiteUrl' => true,
        'customBaseUrl' => true,
        'domainVerified' => false,
        'icon' => true,
        'logo' => true,
        'primaryColor' => true
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
        'name' => 'name',
        'vatNumber' => 'vatNumber',
        'commercialRegistryNumber' => 'commercialRegistryNumber',
        'websiteUrl' => 'websiteUrl',
        'customBaseUrl' => 'customBaseUrl',
        'domainVerified' => 'domainVerified',
        'icon' => 'icon',
        'logo' => 'logo',
        'primaryColor' => 'primaryColor'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'vatNumber' => 'setVatNumber',
        'commercialRegistryNumber' => 'setCommercialRegistryNumber',
        'websiteUrl' => 'setWebsiteUrl',
        'customBaseUrl' => 'setCustomBaseUrl',
        'domainVerified' => 'setDomainVerified',
        'icon' => 'setIcon',
        'logo' => 'setLogo',
        'primaryColor' => 'setPrimaryColor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'vatNumber' => 'getVatNumber',
        'commercialRegistryNumber' => 'getCommercialRegistryNumber',
        'websiteUrl' => 'getWebsiteUrl',
        'customBaseUrl' => 'getCustomBaseUrl',
        'domainVerified' => 'getDomainVerified',
        'icon' => 'getIcon',
        'logo' => 'getLogo',
        'primaryColor' => 'getPrimaryColor'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('vatNumber', $data ?? [], null);
        $this->setIfExists('commercialRegistryNumber', $data ?? [], null);
        $this->setIfExists('websiteUrl', $data ?? [], null);
        $this->setIfExists('customBaseUrl', $data ?? [], null);
        $this->setIfExists('domainVerified', $data ?? [], null);
        $this->setIfExists('icon', $data ?? [], null);
        $this->setIfExists('logo', $data ?? [], null);
        $this->setIfExists('primaryColor', $data ?? [], null);
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

        if ($this->container['domainVerified'] === null) {
            $invalidProperties[] = "'domainVerified' can't be null";
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets vatNumber
     *
     * @return string|null
     */
    public function getVatNumber()
    {
        return $this->container['vatNumber'];
    }

    /**
     * Sets vatNumber
     *
     * @param string|null $vatNumber vatNumber
     *
     * @return self
     */
    public function setVatNumber($vatNumber)
    {
        if (is_null($vatNumber)) {
            array_push($this->openAPINullablesSetToNull, 'vatNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('vatNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['vatNumber'] = $vatNumber;

        return $this;
    }

    /**
     * Gets commercialRegistryNumber
     *
     * @return string|null
     */
    public function getCommercialRegistryNumber()
    {
        return $this->container['commercialRegistryNumber'];
    }

    /**
     * Sets commercialRegistryNumber
     *
     * @param string|null $commercialRegistryNumber commercialRegistryNumber
     *
     * @return self
     */
    public function setCommercialRegistryNumber($commercialRegistryNumber)
    {
        if (is_null($commercialRegistryNumber)) {
            throw new \InvalidArgumentException('non-nullable commercialRegistryNumber cannot be null');
        }
        $this->container['commercialRegistryNumber'] = $commercialRegistryNumber;

        return $this;
    }

    /**
     * Gets websiteUrl
     *
     * @return string|null
     */
    public function getWebsiteUrl()
    {
        return $this->container['websiteUrl'];
    }

    /**
     * Sets websiteUrl
     *
     * @param string|null $websiteUrl websiteUrl
     *
     * @return self
     */
    public function setWebsiteUrl($websiteUrl)
    {
        if (is_null($websiteUrl)) {
            array_push($this->openAPINullablesSetToNull, 'websiteUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('websiteUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['websiteUrl'] = $websiteUrl;

        return $this;
    }

    /**
     * Gets customBaseUrl
     *
     * @return string|null
     */
    public function getCustomBaseUrl()
    {
        return $this->container['customBaseUrl'];
    }

    /**
     * Sets customBaseUrl
     *
     * @param string|null $customBaseUrl customBaseUrl
     *
     * @return self
     */
    public function setCustomBaseUrl($customBaseUrl)
    {
        if (is_null($customBaseUrl)) {
            array_push($this->openAPINullablesSetToNull, 'customBaseUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customBaseUrl', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customBaseUrl'] = $customBaseUrl;

        return $this;
    }

    /**
     * Gets domainVerified
     *
     * @return bool
     */
    public function getDomainVerified()
    {
        return $this->container['domainVerified'];
    }

    /**
     * Sets domainVerified
     *
     * @param bool $domainVerified domainVerified
     *
     * @return self
     */
    public function setDomainVerified($domainVerified)
    {
        if (is_null($domainVerified)) {
            throw new \InvalidArgumentException('non-nullable domainVerified cannot be null');
        }
        $this->container['domainVerified'] = $domainVerified;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return \Tripartie\SafeCheckout\Model\OrganizationMediaRead|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param \Tripartie\SafeCheckout\Model\OrganizationMediaRead|null $icon icon
     *
     * @return self
     */
    public function setIcon($icon)
    {
        if (is_null($icon)) {
            array_push($this->openAPINullablesSetToNull, 'icon');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('icon', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return \Tripartie\SafeCheckout\Model\OrganizationMediaRead|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param \Tripartie\SafeCheckout\Model\OrganizationMediaRead|null $logo logo
     *
     * @return self
     */
    public function setLogo($logo)
    {
        if (is_null($logo)) {
            array_push($this->openAPINullablesSetToNull, 'logo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('logo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['logo'] = $logo;

        return $this;
    }

    /**
     * Gets primaryColor
     *
     * @return string|null
     */
    public function getPrimaryColor()
    {
        return $this->container['primaryColor'];
    }

    /**
     * Sets primaryColor
     *
     * @param string|null $primaryColor primaryColor
     *
     * @return self
     */
    public function setPrimaryColor($primaryColor)
    {
        if (is_null($primaryColor)) {
            array_push($this->openAPINullablesSetToNull, 'primaryColor');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('primaryColor', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['primaryColor'] = $primaryColor;

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


