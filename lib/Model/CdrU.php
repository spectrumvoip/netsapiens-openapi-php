<?php
/**
 * CdrU
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
 * CdrU Class Doc Comment
 *
 * @category Class
 * @package  SpectrumVoip\\\\NetSapiens
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CdrU implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CdrU';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uid' => 'string',
        'domain' => 'string',
        'cdr_id' => 'string',
        'type' => 'int',
        'time_start' => 'int',
        'time_answer' => 'int',
        'time_release' => 'int',
        'duration' => 'int',
        'orig_to_uri' => 'string',
        'number' => 'string',
        'name' => 'string',
        'onnet' => 'int',
        'hide' => 'int',
        'tag' => 'string',
        'expected_trace' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uid' => null,
        'domain' => null,
        'cdr_id' => null,
        'type' => null,
        'time_start' => null,
        'time_answer' => null,
        'time_release' => null,
        'duration' => null,
        'orig_to_uri' => null,
        'number' => null,
        'name' => null,
        'onnet' => null,
        'hide' => null,
        'tag' => null,
        'expected_trace' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'uid' => false,
        'domain' => false,
        'cdr_id' => false,
        'type' => false,
        'time_start' => false,
        'time_answer' => false,
        'time_release' => false,
        'duration' => false,
        'orig_to_uri' => false,
        'number' => true,
        'name' => true,
        'onnet' => false,
        'hide' => false,
        'tag' => false,
        'expected_trace' => false
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
        'uid' => 'uid',
        'domain' => 'domain',
        'cdr_id' => 'cdr_id',
        'type' => 'type',
        'time_start' => 'time_start',
        'time_answer' => 'time_answer',
        'time_release' => 'time_release',
        'duration' => 'duration',
        'orig_to_uri' => 'orig_to_uri',
        'number' => 'number',
        'name' => 'name',
        'onnet' => 'onnet',
        'hide' => 'hide',
        'tag' => 'tag',
        'expected_trace' => 'expected_trace'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uid' => 'setUid',
        'domain' => 'setDomain',
        'cdr_id' => 'setCdrId',
        'type' => 'setType',
        'time_start' => 'setTimeStart',
        'time_answer' => 'setTimeAnswer',
        'time_release' => 'setTimeRelease',
        'duration' => 'setDuration',
        'orig_to_uri' => 'setOrigToUri',
        'number' => 'setNumber',
        'name' => 'setName',
        'onnet' => 'setOnnet',
        'hide' => 'setHide',
        'tag' => 'setTag',
        'expected_trace' => 'setExpectedTrace'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uid' => 'getUid',
        'domain' => 'getDomain',
        'cdr_id' => 'getCdrId',
        'type' => 'getType',
        'time_start' => 'getTimeStart',
        'time_answer' => 'getTimeAnswer',
        'time_release' => 'getTimeRelease',
        'duration' => 'getDuration',
        'orig_to_uri' => 'getOrigToUri',
        'number' => 'getNumber',
        'name' => 'getName',
        'onnet' => 'getOnnet',
        'hide' => 'getHide',
        'tag' => 'getTag',
        'expected_trace' => 'getExpectedTrace'
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
        $this->setIfExists('uid', $data ?? [], null);
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('cdr_id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('time_start', $data ?? [], null);
        $this->setIfExists('time_answer', $data ?? [], null);
        $this->setIfExists('time_release', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('orig_to_uri', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('onnet', $data ?? [], null);
        $this->setIfExists('hide', $data ?? [], null);
        $this->setIfExists('tag', $data ?? [], null);
        $this->setIfExists('expected_trace', $data ?? [], null);
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

        if ($this->container['uid'] === null) {
            $invalidProperties[] = "'uid' can't be null";
        }
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
        if ($this->container['cdr_id'] === null) {
            $invalidProperties[] = "'cdr_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['time_start'] === null) {
            $invalidProperties[] = "'time_start' can't be null";
        }
        if ($this->container['time_answer'] === null) {
            $invalidProperties[] = "'time_answer' can't be null";
        }
        if ($this->container['time_release'] === null) {
            $invalidProperties[] = "'time_release' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['orig_to_uri'] === null) {
            $invalidProperties[] = "'orig_to_uri' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['onnet'] === null) {
            $invalidProperties[] = "'onnet' can't be null";
        }
        if ($this->container['hide'] === null) {
            $invalidProperties[] = "'hide' can't be null";
        }
        if ($this->container['tag'] === null) {
            $invalidProperties[] = "'tag' can't be null";
        }
        if ($this->container['expected_trace'] === null) {
            $invalidProperties[] = "'expected_trace' can't be null";
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
     * Gets uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string $uid uid
     *
     * @return self
     */
    public function setUid($uid)
    {
        if (is_null($uid)) {
            throw new \InvalidArgumentException('non-nullable uid cannot be null');
        }
        $this->container['uid'] = $uid;

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
     * @param string $domain domain
     *
     * @return self
     */
    public function setDomain($domain)
    {
        if (is_null($domain)) {
            throw new \InvalidArgumentException('non-nullable domain cannot be null');
        }
        $this->container['domain'] = $domain;

        return $this;
    }

    /**
     * Gets cdr_id
     *
     * @return string
     */
    public function getCdrId()
    {
        return $this->container['cdr_id'];
    }

    /**
     * Sets cdr_id
     *
     * @param string $cdr_id cdr_id
     *
     * @return self
     */
    public function setCdrId($cdr_id)
    {
        if (is_null($cdr_id)) {
            throw new \InvalidArgumentException('non-nullable cdr_id cannot be null');
        }
        $this->container['cdr_id'] = $cdr_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets time_start
     *
     * @return int
     */
    public function getTimeStart()
    {
        return $this->container['time_start'];
    }

    /**
     * Sets time_start
     *
     * @param int $time_start time_start
     *
     * @return self
     */
    public function setTimeStart($time_start)
    {
        if (is_null($time_start)) {
            throw new \InvalidArgumentException('non-nullable time_start cannot be null');
        }
        $this->container['time_start'] = $time_start;

        return $this;
    }

    /**
     * Gets time_answer
     *
     * @return int
     */
    public function getTimeAnswer()
    {
        return $this->container['time_answer'];
    }

    /**
     * Sets time_answer
     *
     * @param int $time_answer time_answer
     *
     * @return self
     */
    public function setTimeAnswer($time_answer)
    {
        if (is_null($time_answer)) {
            throw new \InvalidArgumentException('non-nullable time_answer cannot be null');
        }
        $this->container['time_answer'] = $time_answer;

        return $this;
    }

    /**
     * Gets time_release
     *
     * @return int
     */
    public function getTimeRelease()
    {
        return $this->container['time_release'];
    }

    /**
     * Sets time_release
     *
     * @param int $time_release time_release
     *
     * @return self
     */
    public function setTimeRelease($time_release)
    {
        if (is_null($time_release)) {
            throw new \InvalidArgumentException('non-nullable time_release cannot be null');
        }
        $this->container['time_release'] = $time_release;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration duration
     *
     * @return self
     */
    public function setDuration($duration)
    {
        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets orig_to_uri
     *
     * @return string
     */
    public function getOrigToUri()
    {
        return $this->container['orig_to_uri'];
    }

    /**
     * Sets orig_to_uri
     *
     * @param string $orig_to_uri orig_to_uri
     *
     * @return self
     */
    public function setOrigToUri($orig_to_uri)
    {
        if (is_null($orig_to_uri)) {
            throw new \InvalidArgumentException('non-nullable orig_to_uri cannot be null');
        }
        $this->container['orig_to_uri'] = $orig_to_uri;

        return $this;
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
     * @param string $number number
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            array_push($this->openAPINullablesSetToNull, 'number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets onnet
     *
     * @return int
     */
    public function getOnnet()
    {
        return $this->container['onnet'];
    }

    /**
     * Sets onnet
     *
     * @param int $onnet onnet
     *
     * @return self
     */
    public function setOnnet($onnet)
    {
        if (is_null($onnet)) {
            throw new \InvalidArgumentException('non-nullable onnet cannot be null');
        }
        $this->container['onnet'] = $onnet;

        return $this;
    }

    /**
     * Gets hide
     *
     * @return int
     */
    public function getHide()
    {
        return $this->container['hide'];
    }

    /**
     * Sets hide
     *
     * @param int $hide hide
     *
     * @return self
     */
    public function setHide($hide)
    {
        if (is_null($hide)) {
            throw new \InvalidArgumentException('non-nullable hide cannot be null');
        }
        $this->container['hide'] = $hide;

        return $this;
    }

    /**
     * Gets tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
     * Sets tag
     *
     * @param string $tag tag
     *
     * @return self
     */
    public function setTag($tag)
    {
        if (is_null($tag)) {
            throw new \InvalidArgumentException('non-nullable tag cannot be null');
        }
        $this->container['tag'] = $tag;

        return $this;
    }

    /**
     * Gets expected_trace
     *
     * @return bool
     */
    public function getExpectedTrace()
    {
        return $this->container['expected_trace'];
    }

    /**
     * Sets expected_trace
     *
     * @param bool $expected_trace expected_trace
     *
     * @return self
     */
    public function setExpectedTrace($expected_trace)
    {
        if (is_null($expected_trace)) {
            throw new \InvalidArgumentException('non-nullable expected_trace cannot be null');
        }
        $this->container['expected_trace'] = $expected_trace;

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


