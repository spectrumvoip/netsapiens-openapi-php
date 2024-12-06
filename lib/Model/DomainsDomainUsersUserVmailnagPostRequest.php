<?php
/**
 * DomainsDomainUsersUserVmailnagPostRequest
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
 * DomainsDomainUsersUserVmailnagPostRequest Class Doc Comment
 *
 * @category Class
 * @package  SpectrumVoip\\\\NetSapiens
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DomainsDomainUsersUserVmailnagPostRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_domains__domain__users__user__vmailnag_post_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'voicemail_reminder_phonecall_enabled' => '\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault',
        'voicemail_reminder_phonecall_phonenumber_array' => 'int[]',
        'voicemail_reminder_sms_enabled' => '\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault',
        'voicemail_reminder_sms_phonenumber_array' => 'int[]',
        'voicemail_reminder_email_enabled' => '\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault',
        'voicemail_reminder_email_address_array' => 'string[]',
        'voicemail_reminder_interval_minutes' => 'int',
        'voicemail_reminder_last_sent' => 'int',
        'voicemail_reminder_control_server' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'voicemail_reminder_phonecall_enabled' => null,
        'voicemail_reminder_phonecall_phonenumber_array' => null,
        'voicemail_reminder_sms_enabled' => null,
        'voicemail_reminder_sms_phonenumber_array' => null,
        'voicemail_reminder_email_enabled' => null,
        'voicemail_reminder_email_address_array' => null,
        'voicemail_reminder_interval_minutes' => null,
        'voicemail_reminder_last_sent' => null,
        'voicemail_reminder_control_server' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'voicemail_reminder_phonecall_enabled' => false,
        'voicemail_reminder_phonecall_phonenumber_array' => false,
        'voicemail_reminder_sms_enabled' => false,
        'voicemail_reminder_sms_phonenumber_array' => false,
        'voicemail_reminder_email_enabled' => false,
        'voicemail_reminder_email_address_array' => false,
        'voicemail_reminder_interval_minutes' => false,
        'voicemail_reminder_last_sent' => false,
        'voicemail_reminder_control_server' => false
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
        'voicemail_reminder_phonecall_enabled' => 'voicemail-reminder-phonecall-enabled',
        'voicemail_reminder_phonecall_phonenumber_array' => 'voicemail-reminder-phonecall-phonenumber-array',
        'voicemail_reminder_sms_enabled' => 'voicemail-reminder-sms-enabled',
        'voicemail_reminder_sms_phonenumber_array' => 'voicemail-reminder-sms-phonenumber-array',
        'voicemail_reminder_email_enabled' => 'voicemail-reminder-email-enabled',
        'voicemail_reminder_email_address_array' => 'voicemail-reminder-email-address-array',
        'voicemail_reminder_interval_minutes' => 'voicemail-reminder-interval-minutes',
        'voicemail_reminder_last_sent' => 'voicemail-reminder-last-sent',
        'voicemail_reminder_control_server' => 'voicemail-reminder-control-server'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'voicemail_reminder_phonecall_enabled' => 'setVoicemailReminderPhonecallEnabled',
        'voicemail_reminder_phonecall_phonenumber_array' => 'setVoicemailReminderPhonecallPhonenumberArray',
        'voicemail_reminder_sms_enabled' => 'setVoicemailReminderSmsEnabled',
        'voicemail_reminder_sms_phonenumber_array' => 'setVoicemailReminderSmsPhonenumberArray',
        'voicemail_reminder_email_enabled' => 'setVoicemailReminderEmailEnabled',
        'voicemail_reminder_email_address_array' => 'setVoicemailReminderEmailAddressArray',
        'voicemail_reminder_interval_minutes' => 'setVoicemailReminderIntervalMinutes',
        'voicemail_reminder_last_sent' => 'setVoicemailReminderLastSent',
        'voicemail_reminder_control_server' => 'setVoicemailReminderControlServer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'voicemail_reminder_phonecall_enabled' => 'getVoicemailReminderPhonecallEnabled',
        'voicemail_reminder_phonecall_phonenumber_array' => 'getVoicemailReminderPhonecallPhonenumberArray',
        'voicemail_reminder_sms_enabled' => 'getVoicemailReminderSmsEnabled',
        'voicemail_reminder_sms_phonenumber_array' => 'getVoicemailReminderSmsPhonenumberArray',
        'voicemail_reminder_email_enabled' => 'getVoicemailReminderEmailEnabled',
        'voicemail_reminder_email_address_array' => 'getVoicemailReminderEmailAddressArray',
        'voicemail_reminder_interval_minutes' => 'getVoicemailReminderIntervalMinutes',
        'voicemail_reminder_last_sent' => 'getVoicemailReminderLastSent',
        'voicemail_reminder_control_server' => 'getVoicemailReminderControlServer'
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
        $this->setIfExists('voicemail_reminder_phonecall_enabled', $data ?? [], null);
        $this->setIfExists('voicemail_reminder_phonecall_phonenumber_array', $data ?? [], null);
        $this->setIfExists('voicemail_reminder_sms_enabled', $data ?? [], null);
        $this->setIfExists('voicemail_reminder_sms_phonenumber_array', $data ?? [], null);
        $this->setIfExists('voicemail_reminder_email_enabled', $data ?? [], null);
        $this->setIfExists('voicemail_reminder_email_address_array', $data ?? [], null);
        $this->setIfExists('voicemail_reminder_interval_minutes', $data ?? [], null);
        $this->setIfExists('voicemail_reminder_last_sent', $data ?? [], null);
        $this->setIfExists('voicemail_reminder_control_server', $data ?? [], null);
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
     * Gets voicemail_reminder_phonecall_enabled
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault|null
     */
    public function getVoicemailReminderPhonecallEnabled()
    {
        return $this->container['voicemail_reminder_phonecall_enabled'];
    }

    /**
     * Sets voicemail_reminder_phonecall_enabled
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault|null $voicemail_reminder_phonecall_enabled This settings will control if the the parent feature is enabled.
     *
     * @return self
     */
    public function setVoicemailReminderPhonecallEnabled($voicemail_reminder_phonecall_enabled)
    {
        if (is_null($voicemail_reminder_phonecall_enabled)) {
            throw new \InvalidArgumentException('non-nullable voicemail_reminder_phonecall_enabled cannot be null');
        }
        $this->container['voicemail_reminder_phonecall_enabled'] = $voicemail_reminder_phonecall_enabled;

        return $this;
    }

    /**
     * Gets voicemail_reminder_phonecall_phonenumber_array
     *
     * @return int[]|null
     */
    public function getVoicemailReminderPhonecallPhonenumberArray()
    {
        return $this->container['voicemail_reminder_phonecall_phonenumber_array'];
    }

    /**
     * Sets voicemail_reminder_phonecall_phonenumber_array
     *
     * @param int[]|null $voicemail_reminder_phonecall_phonenumber_array Phone reminder numbers
     *
     * @return self
     */
    public function setVoicemailReminderPhonecallPhonenumberArray($voicemail_reminder_phonecall_phonenumber_array)
    {
        if (is_null($voicemail_reminder_phonecall_phonenumber_array)) {
            throw new \InvalidArgumentException('non-nullable voicemail_reminder_phonecall_phonenumber_array cannot be null');
        }
        $this->container['voicemail_reminder_phonecall_phonenumber_array'] = $voicemail_reminder_phonecall_phonenumber_array;

        return $this;
    }

    /**
     * Gets voicemail_reminder_sms_enabled
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault|null
     */
    public function getVoicemailReminderSmsEnabled()
    {
        return $this->container['voicemail_reminder_sms_enabled'];
    }

    /**
     * Sets voicemail_reminder_sms_enabled
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault|null $voicemail_reminder_sms_enabled This settings will control if the the parent feature is enabled.
     *
     * @return self
     */
    public function setVoicemailReminderSmsEnabled($voicemail_reminder_sms_enabled)
    {
        if (is_null($voicemail_reminder_sms_enabled)) {
            throw new \InvalidArgumentException('non-nullable voicemail_reminder_sms_enabled cannot be null');
        }
        $this->container['voicemail_reminder_sms_enabled'] = $voicemail_reminder_sms_enabled;

        return $this;
    }

    /**
     * Gets voicemail_reminder_sms_phonenumber_array
     *
     * @return int[]|null
     */
    public function getVoicemailReminderSmsPhonenumberArray()
    {
        return $this->container['voicemail_reminder_sms_phonenumber_array'];
    }

    /**
     * Sets voicemail_reminder_sms_phonenumber_array
     *
     * @param int[]|null $voicemail_reminder_sms_phonenumber_array SMS reminder numbers
     *
     * @return self
     */
    public function setVoicemailReminderSmsPhonenumberArray($voicemail_reminder_sms_phonenumber_array)
    {
        if (is_null($voicemail_reminder_sms_phonenumber_array)) {
            throw new \InvalidArgumentException('non-nullable voicemail_reminder_sms_phonenumber_array cannot be null');
        }
        $this->container['voicemail_reminder_sms_phonenumber_array'] = $voicemail_reminder_sms_phonenumber_array;

        return $this;
    }

    /**
     * Gets voicemail_reminder_email_enabled
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault|null
     */
    public function getVoicemailReminderEmailEnabled()
    {
        return $this->container['voicemail_reminder_email_enabled'];
    }

    /**
     * Sets voicemail_reminder_email_enabled
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault|null $voicemail_reminder_email_enabled This settings will control if the the parent feature is enabled.
     *
     * @return self
     */
    public function setVoicemailReminderEmailEnabled($voicemail_reminder_email_enabled)
    {
        if (is_null($voicemail_reminder_email_enabled)) {
            throw new \InvalidArgumentException('non-nullable voicemail_reminder_email_enabled cannot be null');
        }
        $this->container['voicemail_reminder_email_enabled'] = $voicemail_reminder_email_enabled;

        return $this;
    }

    /**
     * Gets voicemail_reminder_email_address_array
     *
     * @return string[]|null
     */
    public function getVoicemailReminderEmailAddressArray()
    {
        return $this->container['voicemail_reminder_email_address_array'];
    }

    /**
     * Sets voicemail_reminder_email_address_array
     *
     * @param string[]|null $voicemail_reminder_email_address_array Email reminder addresses
     *
     * @return self
     */
    public function setVoicemailReminderEmailAddressArray($voicemail_reminder_email_address_array)
    {
        if (is_null($voicemail_reminder_email_address_array)) {
            throw new \InvalidArgumentException('non-nullable voicemail_reminder_email_address_array cannot be null');
        }
        $this->container['voicemail_reminder_email_address_array'] = $voicemail_reminder_email_address_array;

        return $this;
    }

    /**
     * Gets voicemail_reminder_interval_minutes
     *
     * @return int|null
     */
    public function getVoicemailReminderIntervalMinutes()
    {
        return $this->container['voicemail_reminder_interval_minutes'];
    }

    /**
     * Sets voicemail_reminder_interval_minutes
     *
     * @param int|null $voicemail_reminder_interval_minutes Interval of reminders (minutes)
     *
     * @return self
     */
    public function setVoicemailReminderIntervalMinutes($voicemail_reminder_interval_minutes)
    {
        if (is_null($voicemail_reminder_interval_minutes)) {
            throw new \InvalidArgumentException('non-nullable voicemail_reminder_interval_minutes cannot be null');
        }
        $this->container['voicemail_reminder_interval_minutes'] = $voicemail_reminder_interval_minutes;

        return $this;
    }

    /**
     * Gets voicemail_reminder_last_sent
     *
     * @return int|null
     */
    public function getVoicemailReminderLastSent()
    {
        return $this->container['voicemail_reminder_last_sent'];
    }

    /**
     * Sets voicemail_reminder_last_sent
     *
     * @param int|null $voicemail_reminder_last_sent Timestamp of last sent reminder
     *
     * @return self
     */
    public function setVoicemailReminderLastSent($voicemail_reminder_last_sent)
    {
        if (is_null($voicemail_reminder_last_sent)) {
            throw new \InvalidArgumentException('non-nullable voicemail_reminder_last_sent cannot be null');
        }
        $this->container['voicemail_reminder_last_sent'] = $voicemail_reminder_last_sent;

        return $this;
    }

    /**
     * Gets voicemail_reminder_control_server
     *
     * @return string|null
     */
    public function getVoicemailReminderControlServer()
    {
        return $this->container['voicemail_reminder_control_server'];
    }

    /**
     * Sets voicemail_reminder_control_server
     *
     * @param string|null $voicemail_reminder_control_server Current server managing the reminders for the user
     *
     * @return self
     */
    public function setVoicemailReminderControlServer($voicemail_reminder_control_server)
    {
        if (is_null($voicemail_reminder_control_server)) {
            throw new \InvalidArgumentException('non-nullable voicemail_reminder_control_server cannot be null');
        }
        $this->container['voicemail_reminder_control_server'] = $voicemail_reminder_control_server;

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


