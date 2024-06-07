<?php
/**
 * ApiClientWrite
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
 * The version of the OpenAPI document: 2.0.12
 * Contact: noc@tripartie.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
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
 * ApiClientWrite Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Tripartie\SafeCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ApiClientWrite implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApiClient-Write';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'referenceName' => 'string',
        'desiredScopes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'referenceName' => null,
        'desiredScopes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'referenceName' => true,
        'desiredScopes' => false
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
        'referenceName' => 'referenceName',
        'desiredScopes' => 'desiredScopes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'referenceName' => 'setReferenceName',
        'desiredScopes' => 'setDesiredScopes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'referenceName' => 'getReferenceName',
        'desiredScopes' => 'getDesiredScopes'
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

    public const DESIRED_SCOPES_OFFER_READ = 'OFFER_READ';
    public const DESIRED_SCOPES_OFFER_WRITE = 'OFFER_WRITE';
    public const DESIRED_SCOPES_ORGANIZATION_READ = 'ORGANIZATION_READ';
    public const DESIRED_SCOPES_PERSONA_READ = 'PERSONA_READ';
    public const DESIRED_SCOPES_PERSONA_WRITE = 'PERSONA_WRITE';
    public const DESIRED_SCOPES_PERSONA_AUTH = 'PERSONA_AUTH';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDesiredScopesAllowableValues()
    {
        return [
            self::DESIRED_SCOPES_OFFER_READ,
            self::DESIRED_SCOPES_OFFER_WRITE,
            self::DESIRED_SCOPES_ORGANIZATION_READ,
            self::DESIRED_SCOPES_PERSONA_READ,
            self::DESIRED_SCOPES_PERSONA_WRITE,
            self::DESIRED_SCOPES_PERSONA_AUTH,
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
        $this->setIfExists('referenceName', $data ?? [], null);
        $this->setIfExists('desiredScopes', $data ?? [], null);
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

        if (!is_null($this->container['referenceName']) && (mb_strlen($this->container['referenceName']) > 32)) {
            $invalidProperties[] = "invalid value for 'referenceName', the character length must be smaller than or equal to 32.";
        }

        if (!is_null($this->container['desiredScopes']) && (count($this->container['desiredScopes']) < 1)) {
            $invalidProperties[] = "invalid value for 'desiredScopes', number of items must be greater than or equal to 1.";
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
     * Gets referenceName
     *
     * @return string|null
     */
    public function getReferenceName()
    {
        return $this->container['referenceName'];
    }

    /**
     * Sets referenceName
     *
     * @param string|null $referenceName referenceName
     *
     * @return self
     */
    public function setReferenceName($referenceName)
    {
        if (is_null($referenceName)) {
            array_push($this->openAPINullablesSetToNull, 'referenceName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('referenceName', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($referenceName) && (mb_strlen($referenceName) > 32)) {
            throw new \InvalidArgumentException('invalid length for $referenceName when calling ApiClientWrite., must be smaller than or equal to 32.');
        }

        $this->container['referenceName'] = $referenceName;

        return $this;
    }

    /**
     * Gets desiredScopes
     *
     * @return string[]|null
     */
    public function getDesiredScopes()
    {
        return $this->container['desiredScopes'];
    }

    /**
     * Sets desiredScopes
     *
     * @param string[]|null $desiredScopes desiredScopes
     *
     * @return self
     */
    public function setDesiredScopes($desiredScopes)
    {
        if (is_null($desiredScopes)) {
            throw new \InvalidArgumentException('non-nullable desiredScopes cannot be null');
        }
        $allowedValues = $this->getDesiredScopesAllowableValues();
        if (array_diff($desiredScopes, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'desiredScopes', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }


        if ((count($desiredScopes) < 1)) {
            throw new \InvalidArgumentException('invalid length for $desiredScopes when calling ApiClientWrite., number of items must be greater than or equal to 1.');
        }
        $this->container['desiredScopes'] = $desiredScopes;

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


