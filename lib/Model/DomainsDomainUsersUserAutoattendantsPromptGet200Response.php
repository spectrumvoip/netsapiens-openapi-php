<?php
/**
 * DomainsDomainUsersUserAutoattendantsPromptGet200Response
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
 * DomainsDomainUsersUserAutoattendantsPromptGet200Response Class Doc Comment
 *
 * @category Class
 * @package  SpectrumVoip\\\\NetSapiens
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DomainsDomainUsersUserAutoattendantsPromptGet200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_domains__domain__users__user__autoattendants__prompt__get_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attendant_name' => 'string',
        'user' => 'string',
        'time_frame' => 'string',
        'starting_prompt' => 'string',
        'auto_attendant' => '\SpectrumVoip\\\\NetSapiens\Model\AutoAttendantTier'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attendant_name' => null,
        'user' => null,
        'time_frame' => null,
        'starting_prompt' => null,
        'auto_attendant' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'attendant_name' => false,
        'user' => false,
        'time_frame' => false,
        'starting_prompt' => false,
        'auto_attendant' => false
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
        'attendant_name' => 'attendant-name',
        'user' => 'user',
        'time_frame' => 'time-frame',
        'starting_prompt' => 'starting-prompt',
        'auto_attendant' => 'auto-attendant'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attendant_name' => 'setAttendantName',
        'user' => 'setUser',
        'time_frame' => 'setTimeFrame',
        'starting_prompt' => 'setStartingPrompt',
        'auto_attendant' => 'setAutoAttendant'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attendant_name' => 'getAttendantName',
        'user' => 'getUser',
        'time_frame' => 'getTimeFrame',
        'starting_prompt' => 'getStartingPrompt',
        'auto_attendant' => 'getAutoAttendant'
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
        $this->setIfExists('attendant_name', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('time_frame', $data ?? [], null);
        $this->setIfExists('starting_prompt', $data ?? [], null);
        $this->setIfExists('auto_attendant', $data ?? [], null);
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

        if ($this->container['attendant_name'] === null) {
            $invalidProperties[] = "'attendant_name' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
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
     * Gets attendant_name
     *
     * @return string
     */
    public function getAttendantName()
    {
        return $this->container['attendant_name'];
    }

    /**
     * Sets attendant_name
     *
     * @param string $attendant_name This is the main name for the auto attendant. Should be used to explain the main purpose for the auto attendant.
     *
     * @return self
     */
    public function setAttendantName($attendant_name)
    {
        if (is_null($attendant_name)) {
            throw new \InvalidArgumentException('non-nullable attendant_name cannot be null');
        }
        $this->container['attendant_name'] = $attendant_name;

        return $this;
    }

    /**
     * Gets user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string $user user
     *
     * @return self
     */
    public function setUser($user)
    {
        if (is_null($user)) {
            throw new \InvalidArgumentException('non-nullable user cannot be null');
        }
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets time_frame
     *
     * @return string|null
     */
    public function getTimeFrame()
    {
        return $this->container['time_frame'];
    }

    /**
     * Sets time_frame
     *
     * @param string|null $time_frame time_frame
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
     * Gets starting_prompt
     *
     * @return string|null
     */
    public function getStartingPrompt()
    {
        return $this->container['starting_prompt'];
    }

    /**
     * Sets starting_prompt
     *
     * @param string|null $starting_prompt This is a \"id\" of sorts making this auto attendant unique in terms of this user and dial plan. Will be needed when reading details on a specific AA or making any modifications including removal.
     *
     * @return self
     */
    public function setStartingPrompt($starting_prompt)
    {
        if (is_null($starting_prompt)) {
            throw new \InvalidArgumentException('non-nullable starting_prompt cannot be null');
        }
        $this->container['starting_prompt'] = $starting_prompt;

        return $this;
    }

    /**
     * Gets auto_attendant
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\AutoAttendantTier|null
     */
    public function getAutoAttendant()
    {
        return $this->container['auto_attendant'];
    }

    /**
     * Sets auto_attendant
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\AutoAttendantTier|null $auto_attendant auto_attendant
     *
     * @return self
     */
    public function setAutoAttendant($auto_attendant)
    {
        if (is_null($auto_attendant)) {
            throw new \InvalidArgumentException('non-nullable auto_attendant cannot be null');
        }
        $this->container['auto_attendant'] = $auto_attendant;

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


