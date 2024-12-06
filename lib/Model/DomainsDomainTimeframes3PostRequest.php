<?php
/**
 * DomainsDomainTimeframes3PostRequest
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
 * DomainsDomainTimeframes3PostRequest Class Doc Comment
 *
 * @category Class
 * @package  SpectrumVoip\\\\NetSapiens
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DomainsDomainTimeframes3PostRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_domains__domain__timeframes_3_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'synchronous' => '\SpectrumVoip\\\\NetSapiens\Model\Synchronous',
        'timeframe_name' => 'string',
        'timeframe_type' => 'string',
        'timeframe_holiday_array' => '\SpectrumVoip\\\\NetSapiens\Model\TimeframeHoliday[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'synchronous' => null,
        'timeframe_name' => null,
        'timeframe_type' => null,
        'timeframe_holiday_array' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'synchronous' => false,
        'timeframe_name' => false,
        'timeframe_type' => false,
        'timeframe_holiday_array' => false
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
        'synchronous' => 'synchronous',
        'timeframe_name' => 'timeframe-name',
        'timeframe_type' => 'timeframe-type',
        'timeframe_holiday_array' => 'timeframe-holiday-array'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'synchronous' => 'setSynchronous',
        'timeframe_name' => 'setTimeframeName',
        'timeframe_type' => 'setTimeframeType',
        'timeframe_holiday_array' => 'setTimeframeHolidayArray'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'synchronous' => 'getSynchronous',
        'timeframe_name' => 'getTimeframeName',
        'timeframe_type' => 'getTimeframeType',
        'timeframe_holiday_array' => 'getTimeframeHolidayArray'
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
        $this->setIfExists('synchronous', $data ?? [], null);
        $this->setIfExists('timeframe_name', $data ?? [], null);
        $this->setIfExists('timeframe_type', $data ?? [], null);
        $this->setIfExists('timeframe_holiday_array', $data ?? [], null);
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

        if ($this->container['synchronous'] === null) {
            $invalidProperties[] = "'synchronous' can't be null";
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
     * Gets synchronous
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\Synchronous
     */
    public function getSynchronous()
    {
        return $this->container['synchronous'];
    }

    /**
     * Sets synchronous
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\Synchronous $synchronous synchronous
     *
     * @return self
     */
    public function setSynchronous($synchronous)
    {
        if (is_null($synchronous)) {
            throw new \InvalidArgumentException('non-nullable synchronous cannot be null');
        }
        $this->container['synchronous'] = $synchronous;

        return $this;
    }

    /**
     * Gets timeframe_name
     *
     * @return string|null
     */
    public function getTimeframeName()
    {
        return $this->container['timeframe_name'];
    }

    /**
     * Sets timeframe_name
     *
     * @param string|null $timeframe_name timeframe_name
     *
     * @return self
     */
    public function setTimeframeName($timeframe_name)
    {
        if (is_null($timeframe_name)) {
            throw new \InvalidArgumentException('non-nullable timeframe_name cannot be null');
        }
        $this->container['timeframe_name'] = $timeframe_name;

        return $this;
    }

    /**
     * Gets timeframe_type
     *
     * @return string|null
     */
    public function getTimeframeType()
    {
        return $this->container['timeframe_type'];
    }

    /**
     * Sets timeframe_type
     *
     * @param string|null $timeframe_type ```days-of-week```: Days of Week ```specific-dates```: Specific Dates ```holiday```: Holidays ```custom```: Custom ```always```: Always
     *
     * @return self
     */
    public function setTimeframeType($timeframe_type)
    {
        if (is_null($timeframe_type)) {
            throw new \InvalidArgumentException('non-nullable timeframe_type cannot be null');
        }
        $this->container['timeframe_type'] = $timeframe_type;

        return $this;
    }

    /**
     * Gets timeframe_holiday_array
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\TimeframeHoliday[]|null
     */
    public function getTimeframeHolidayArray()
    {
        return $this->container['timeframe_holiday_array'];
    }

    /**
     * Sets timeframe_holiday_array
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\TimeframeHoliday[]|null $timeframe_holiday_array timeframe_holiday_array
     *
     * @return self
     */
    public function setTimeframeHolidayArray($timeframe_holiday_array)
    {
        if (is_null($timeframe_holiday_array)) {
            throw new \InvalidArgumentException('non-nullable timeframe_holiday_array cannot be null');
        }
        $this->container['timeframe_holiday_array'] = $timeframe_holiday_array;

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


