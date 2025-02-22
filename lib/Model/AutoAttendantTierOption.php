<?php
/**
 * AutoAttendantTierOption
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
 * AutoAttendantTierOption Class Doc Comment
 *
 * @category Class
 * @package  SpectrumVoip\\\\NetSapiens
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AutoAttendantTierOption implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AutoAttendantTierOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'destination_application' => '\SpectrumVoip\\\\NetSapiens\Model\DialruleApplication',
        'destination_user' => 'string',
        'caller_name_translation' => 'string',
        'description' => 'string',
        'call_to_record' => 'string',
        'auto_attendant' => '\SpectrumVoip\\\\NetSapiens\Model\AutoAttendantTierOptionAutoAttendant',
        'remove' => '\SpectrumVoip\\\\NetSapiens\Model\YesNoString'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'destination_application' => null,
        'destination_user' => null,
        'caller_name_translation' => null,
        'description' => null,
        'call_to_record' => null,
        'auto_attendant' => null,
        'remove' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'destination_application' => false,
        'destination_user' => false,
        'caller_name_translation' => false,
        'description' => false,
        'call_to_record' => false,
        'auto_attendant' => false,
        'remove' => true
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
        'destination_application' => 'destination-application',
        'destination_user' => 'destination-user',
        'caller_name_translation' => 'caller-name-translation',
        'description' => 'description',
        'call_to_record' => 'call-to-record',
        'auto_attendant' => 'auto-attendant',
        'remove' => 'remove'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'destination_application' => 'setDestinationApplication',
        'destination_user' => 'setDestinationUser',
        'caller_name_translation' => 'setCallerNameTranslation',
        'description' => 'setDescription',
        'call_to_record' => 'setCallToRecord',
        'auto_attendant' => 'setAutoAttendant',
        'remove' => 'setRemove'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'destination_application' => 'getDestinationApplication',
        'destination_user' => 'getDestinationUser',
        'caller_name_translation' => 'getCallerNameTranslation',
        'description' => 'getDescription',
        'call_to_record' => 'getCallToRecord',
        'auto_attendant' => 'getAutoAttendant',
        'remove' => 'getRemove'
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
        $this->setIfExists('destination_application', $data ?? [], null);
        $this->setIfExists('destination_user', $data ?? [], null);
        $this->setIfExists('caller_name_translation', $data ?? [], '[*]');
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('call_to_record', $data ?? [], null);
        $this->setIfExists('auto_attendant', $data ?? [], null);
        $this->setIfExists('remove', $data ?? [], null);
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

        if ($this->container['destination_user'] === null) {
            $invalidProperties[] = "'destination_user' can't be null";
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
     * Gets destination_application
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\DialruleApplication|null
     */
    public function getDestinationApplication()
    {
        return $this->container['destination_application'];
    }

    /**
     * Sets destination_application
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\DialruleApplication|null $destination_application destination_application
     *
     * @return self
     */
    public function setDestinationApplication($destination_application)
    {
        if (is_null($destination_application)) {
            throw new \InvalidArgumentException('non-nullable destination_application cannot be null');
        }
        $this->container['destination_application'] = $destination_application;

        return $this;
    }

    /**
     * Gets destination_user
     *
     * @return string
     */
    public function getDestinationUser()
    {
        return $this->container['destination_user'];
    }

    /**
     * Sets destination_user
     *
     * @param string $destination_user destination_user
     *
     * @return self
     */
    public function setDestinationUser($destination_user)
    {
        if (is_null($destination_user)) {
            throw new \InvalidArgumentException('non-nullable destination_user cannot be null');
        }
        $this->container['destination_user'] = $destination_user;

        return $this;
    }

    /**
     * Gets caller_name_translation
     *
     * @return string|null
     */
    public function getCallerNameTranslation()
    {
        return $this->container['caller_name_translation'];
    }

    /**
     * Sets caller_name_translation
     *
     * @param string|null $caller_name_translation caller_name_translation
     *
     * @return self
     */
    public function setCallerNameTranslation($caller_name_translation)
    {
        if (is_null($caller_name_translation)) {
            throw new \InvalidArgumentException('non-nullable caller_name_translation cannot be null');
        }
        $this->container['caller_name_translation'] = $caller_name_translation;

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
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets call_to_record
     *
     * @return string|null
     */
    public function getCallToRecord()
    {
        return $this->container['call_to_record'];
    }

    /**
     * Sets call_to_record
     *
     * @param string|null $call_to_record call_to_record
     *
     * @return self
     */
    public function setCallToRecord($call_to_record)
    {
        if (is_null($call_to_record)) {
            throw new \InvalidArgumentException('non-nullable call_to_record cannot be null');
        }
        $this->container['call_to_record'] = $call_to_record;

        return $this;
    }

    /**
     * Gets auto_attendant
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\AutoAttendantTierOptionAutoAttendant|null
     */
    public function getAutoAttendant()
    {
        return $this->container['auto_attendant'];
    }

    /**
     * Sets auto_attendant
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\AutoAttendantTierOptionAutoAttendant|null $auto_attendant auto_attendant
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
     * Gets remove
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\YesNoString|null
     */
    public function getRemove()
    {
        return $this->container['remove'];
    }

    /**
     * Sets remove
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\YesNoString|null $remove remove
     *
     * @return self
     */
    public function setRemove($remove)
    {
        if (is_null($remove)) {
            array_push($this->openAPINullablesSetToNull, 'remove');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('remove', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['remove'] = $remove;

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


