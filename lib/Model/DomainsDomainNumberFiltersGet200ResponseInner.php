<?php
/**
 * DomainsDomainNumberFiltersGet200ResponseInner
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
 * DomainsDomainNumberFiltersGet200ResponseInner Class Doc Comment
 *
 * @category Class
 * @package  SpectrumVoip\\\\NetSapiens
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DomainsDomainNumberFiltersGet200ResponseInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_domains__domain__number_filters_get_200_response_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'domain' => 'string',
        'time_frame' => 'string',
        'enabled' => '\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault',
        'is_active' => 'bool',
        'phone_numbers_to_reject' => '\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersGet200ResponseInnerPhoneNumbersToReject'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'domain' => null,
        'time_frame' => null,
        'enabled' => null,
        'is_active' => null,
        'phone_numbers_to_reject' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'domain' => false,
        'time_frame' => false,
        'enabled' => false,
        'is_active' => false,
        'phone_numbers_to_reject' => false
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
        'domain' => 'domain',
        'time_frame' => 'time-frame',
        'enabled' => 'enabled',
        'is_active' => 'is-active',
        'phone_numbers_to_reject' => 'phone-numbers-to-reject'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domain' => 'setDomain',
        'time_frame' => 'setTimeFrame',
        'enabled' => 'setEnabled',
        'is_active' => 'setIsActive',
        'phone_numbers_to_reject' => 'setPhoneNumbersToReject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domain' => 'getDomain',
        'time_frame' => 'getTimeFrame',
        'enabled' => 'getEnabled',
        'is_active' => 'getIsActive',
        'phone_numbers_to_reject' => 'getPhoneNumbersToReject'
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
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('time_frame', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], null);
        $this->setIfExists('phone_numbers_to_reject', $data ?? [], null);
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

        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
        if ((mb_strlen($this->container['domain']) > 64)) {
            $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 64.";
        }

        if (!preg_match("/^[A-Za-z0-9._-]+|\\*/", $this->container['domain'])) {
            $invalidProperties[] = "invalid value for 'domain', must be conform to the pattern /^[A-Za-z0-9._-]+|\\*/.";
        }

        if ($this->container['time_frame'] === null) {
            $invalidProperties[] = "'time_frame' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['is_active'] === null) {
            $invalidProperties[] = "'is_active' can't be null";
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
            throw new \InvalidArgumentException('invalid length for $domain when calling DomainsDomainNumberFiltersGet200ResponseInner., must be smaller than or equal to 64.');
        }
        if ((!preg_match("/^[A-Za-z0-9._-]+|\\*/", ObjectSerializer::toString($domain)))) {
            throw new \InvalidArgumentException("invalid value for \$domain when calling DomainsDomainNumberFiltersGet200ResponseInner., must conform to the pattern /^[A-Za-z0-9._-]+|\\*/.");
        }

        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets time_frame
     *
     * @return string
     */
    public function getTimeFrame()
    {
        return $this->container['time_frame'];
    }

    /**
     * Sets time_frame
     *
     * @param string $time_frame This is the timeframe that also is needed to make this set of answer rules unique. * is teh default and if no timeframes are setup this is is how to set anserrules.
     *
     * @return self
     */
    public function setTimeFrame($time_frame)
    {
        if (is_null($time_frame)) {
            throw new \InvalidArgumentException('non-nullable time_frame cannot be null');
        }
        $this->container['time_frame'] = $time_frame;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault $enabled When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes.
     *
     * @return self
     */
    public function setEnabled($enabled)
    {
        if (is_null($enabled)) {
            throw new \InvalidArgumentException('non-nullable enabled cannot be null');
        }
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets is_active
     *
     * @return bool
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool $is_active This is read only option that will be true if this timeframe is active for this user when taking into account current settings, date/time and all timeframes.
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets phone_numbers_to_reject
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersGet200ResponseInnerPhoneNumbersToReject|null
     */
    public function getPhoneNumbersToReject()
    {
        return $this->container['phone_numbers_to_reject'];
    }

    /**
     * Sets phone_numbers_to_reject
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\DomainsDomainNumberFiltersGet200ResponseInnerPhoneNumbersToReject|null $phone_numbers_to_reject phone_numbers_to_reject
     *
     * @return self
     */
    public function setPhoneNumbersToReject($phone_numbers_to_reject)
    {
        if (is_null($phone_numbers_to_reject)) {
            throw new \InvalidArgumentException('non-nullable phone_numbers_to_reject cannot be null');
        }
        $this->container['phone_numbers_to_reject'] = $phone_numbers_to_reject;

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


