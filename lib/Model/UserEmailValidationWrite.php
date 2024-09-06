<?php
/**
 * UserEmailValidationWrite
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
 * The version of the OpenAPI document: 2.0.50
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
 * UserEmailValidationWrite Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Tripartie\SafeCheckout
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserEmailValidationWrite implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'User-EmailValidationWrite';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'captcha' => 'string',
        'plainPassword' => 'string',
        'emailVerificationInput' => 'string'
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
        'plainPassword' => null,
        'emailVerificationInput' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'captcha' => true,
        'plainPassword' => true,
        'emailVerificationInput' => true
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
        'plainPassword' => 'plainPassword',
        'emailVerificationInput' => 'emailVerificationInput'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'captcha' => 'setCaptcha',
        'plainPassword' => 'setPlainPassword',
        'emailVerificationInput' => 'setEmailVerificationInput'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'captcha' => 'getCaptcha',
        'plainPassword' => 'getPlainPassword',
        'emailVerificationInput' => 'getEmailVerificationInput'
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
        $this->setIfExists('captcha', $data ?? [], null);
        $this->setIfExists('plainPassword', $data ?? [], null);
        $this->setIfExists('emailVerificationInput', $data ?? [], null);
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
        if (!is_null($this->container['plainPassword']) && (mb_strlen($this->container['plainPassword']) > 64)) {
            $invalidProperties[] = "invalid value for 'plainPassword', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['plainPassword']) && (mb_strlen($this->container['plainPassword']) < 6)) {
            $invalidProperties[] = "invalid value for 'plainPassword', the character length must be bigger than or equal to 6.";
        }

        if ($this->container['emailVerificationInput'] === null) {
            $invalidProperties[] = "'emailVerificationInput' can't be null";
        }
        if ((mb_strlen($this->container['emailVerificationInput']) > 128)) {
            $invalidProperties[] = "invalid value for 'emailVerificationInput', the character length must be smaller than or equal to 128.";
        }

        if ((mb_strlen($this->container['emailVerificationInput']) < 128)) {
            $invalidProperties[] = "invalid value for 'emailVerificationInput', the character length must be bigger than or equal to 128.";
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
     * Gets plainPassword
     *
     * @return string|null
     */
    public function getPlainPassword()
    {
        return $this->container['plainPassword'];
    }

    /**
     * Sets plainPassword
     *
     * @param string|null $plainPassword plainPassword
     *
     * @return self
     */
    public function setPlainPassword($plainPassword)
    {
        if (is_null($plainPassword)) {
            array_push($this->openAPINullablesSetToNull, 'plainPassword');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('plainPassword', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($plainPassword) && (mb_strlen($plainPassword) > 64)) {
            throw new \InvalidArgumentException('invalid length for $plainPassword when calling UserEmailValidationWrite., must be smaller than or equal to 64.');
        }
        if (!is_null($plainPassword) && (mb_strlen($plainPassword) < 6)) {
            throw new \InvalidArgumentException('invalid length for $plainPassword when calling UserEmailValidationWrite., must be bigger than or equal to 6.');
        }

        $this->container['plainPassword'] = $plainPassword;

        return $this;
    }

    /**
     * Gets emailVerificationInput
     *
     * @return string
     */
    public function getEmailVerificationInput()
    {
        return $this->container['emailVerificationInput'];
    }

    /**
     * Sets emailVerificationInput
     *
     * @param string $emailVerificationInput emailVerificationInput
     *
     * @return self
     */
    public function setEmailVerificationInput($emailVerificationInput)
    {
        if (is_null($emailVerificationInput)) {
            array_push($this->openAPINullablesSetToNull, 'emailVerificationInput');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('emailVerificationInput', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($emailVerificationInput) && (mb_strlen($emailVerificationInput) > 128)) {
            throw new \InvalidArgumentException('invalid length for $emailVerificationInput when calling UserEmailValidationWrite., must be smaller than or equal to 128.');
        }
        if (!is_null($emailVerificationInput) && (mb_strlen($emailVerificationInput) < 128)) {
            throw new \InvalidArgumentException('invalid length for $emailVerificationInput when calling UserEmailValidationWrite., must be bigger than or equal to 128.');
        }

        $this->container['emailVerificationInput'] = $emailVerificationInput;

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


