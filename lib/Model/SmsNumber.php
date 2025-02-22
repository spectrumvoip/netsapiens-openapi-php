<?php
/**
 * SmsNumber
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  SpectrumVoip\\\\NetSapiens
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NetSapiens API v2
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SpectrumVoip\\\\NetSapiens\Model;

use \ArrayAccess;
use \SpectrumVoip\\\\NetSapiens\ObjectSerializer;

/**
 * SmsNumber Class Doc Comment
 *
 * @category Class
 * @package  SpectrumVoip\\\\NetSapiens
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SmsNumber implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SmsNumber';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'number' => 'string',
        'application' => 'string',
        'domain' => 'string',
        'carrier' => 'string',
        'dest' => 'string',
        'mms_capable' => 'bool',
        'group_mms_capable' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'number' => null,
        'application' => null,
        'domain' => null,
        'carrier' => null,
        'dest' => null,
        'mms_capable' => null,
        'group_mms_capable' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'number' => false,
        'application' => false,
        'domain' => false,
        'carrier' => false,
        'dest' => false,
        'mms_capable' => false,
        'group_mms_capable' => false
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
        'number' => 'number',
        'application' => 'application',
        'domain' => 'domain',
        'carrier' => 'carrier',
        'dest' => 'dest',
        'mms_capable' => 'mms-capable',
        'group_mms_capable' => 'group-mms-capable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number' => 'setNumber',
        'application' => 'setApplication',
        'domain' => 'setDomain',
        'carrier' => 'setCarrier',
        'dest' => 'setDest',
        'mms_capable' => 'setMmsCapable',
        'group_mms_capable' => 'setGroupMmsCapable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number' => 'getNumber',
        'application' => 'getApplication',
        'domain' => 'getDomain',
        'carrier' => 'getCarrier',
        'dest' => 'getDest',
        'mms_capable' => 'getMmsCapable',
        'group_mms_capable' => 'getGroupMmsCapable'
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
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('application', $data ?? [], null);
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('carrier', $data ?? [], null);
        $this->setIfExists('dest', $data ?? [], null);
        $this->setIfExists('mms_capable', $data ?? [], false);
        $this->setIfExists('group_mms_capable', $data ?? [], false);
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

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['application'] === null) {
            $invalidProperties[] = "'application' can't be null";
        }
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
        if ((mb_strlen($this->container['domain']) > 64)) {
            $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 64.";
        }

        if (!preg_match("/^[A-Za-z0-9._-]+|\\*/", $this->container['domain'])) {
            $invalidProperties[] = "invalid value for 'domain', must be conform to the pattern /^[A-Za-z0-9._-]+|\\*/.";
        }

        if ($this->container['dest'] === null) {
            $invalidProperties[] = "'dest' can't be null";
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
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number This is the SMS Number
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets application
     *
     * @return string
     */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
     * Sets application
     *
     * @param string $application This is the application of the number. Can be for a user, callqueue, or available
     *
     * @return self
     */
    public function setApplication($application)
    {
        if (is_null($application)) {
            throw new \InvalidArgumentException('non-nullable application cannot be null');
        }
        $this->container['application'] = $application;

        return $this;
    }

    /**
     * Gets domain
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
     * Sets domain
     *
     * @param string $domain This is the main organization name. This is used to link resource to its group/tenant/organization/enterprise. ~ and * can be used alone in special cases to mean My Domain (~) and All Domains (\\*).
     *
     * @return self
     */
    public function setDomain($domain)
    {
        if (is_null($domain)) {
            throw new \InvalidArgumentException('non-nullable domain cannot be null');
        }
        if ((mb_strlen($domain) > 64)) {
            throw new \InvalidArgumentException('invalid length for $domain when calling SmsNumber., must be smaller than or equal to 64.');
        }
        if ((!preg_match("/^[A-Za-z0-9._-]+|\\*/", ObjectSerializer::toString($domain)))) {
            throw new \InvalidArgumentException("invalid value for \$domain when calling SmsNumber., must conform to the pattern /^[A-Za-z0-9._-]+|\\*/.");
        }

        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string|null $carrier This is the carrier the SMS number will send and receive messages through
     *
     * @return self
     */
    public function setCarrier($carrier)
    {
        if (is_null($carrier)) {
            throw new \InvalidArgumentException('non-nullable carrier cannot be null');
        }
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets dest
     *
     * @return string
     */
    public function getDest()
    {
        return $this->container['dest'];
    }

    /**
     * Sets dest
     *
     * @param string $dest This is the destination for the SMS number if assigned. Can be a user or a call queue
     *
     * @return self
     */
    public function setDest($dest)
    {
        if (is_null($dest)) {
            throw new \InvalidArgumentException('non-nullable dest cannot be null');
        }
        $this->container['dest'] = $dest;

        return $this;
    }

    /**
     * Gets mms_capable
     *
     * @return bool|null
     */
    public function getMmsCapable()
    {
        return $this->container['mms_capable'];
    }

    /**
     * Sets mms_capable
     *
     * @param bool|null $mms_capable This is whether or not the SMS number can send MMS messages
     *
     * @return self
     */
    public function setMmsCapable($mms_capable)
    {
        if (is_null($mms_capable)) {
            throw new \InvalidArgumentException('non-nullable mms_capable cannot be null');
        }
        $this->container['mms_capable'] = $mms_capable;

        return $this;
    }

    /**
     * Gets group_mms_capable
     *
     * @return bool|null
     */
    public function getGroupMmsCapable()
    {
        return $this->container['group_mms_capable'];
    }

    /**
     * Sets group_mms_capable
     *
     * @param bool|null $group_mms_capable This is whether or not the SMS number can send group messages
     *
     * @return self
     */
    public function setGroupMmsCapable($group_mms_capable)
    {
        if (is_null($group_mms_capable)) {
            throw new \InvalidArgumentException('non-nullable group_mms_capable cannot be null');
        }
        $this->container['group_mms_capable'] = $group_mms_capable;

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


