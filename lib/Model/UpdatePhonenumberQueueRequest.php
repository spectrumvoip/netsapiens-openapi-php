<?php
/**
 * UpdatePhonenumberQueueRequest
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
 * UpdatePhonenumberQueueRequest Class Doc Comment
 *
 * @category Class
 * @package  SpectrumVoip\\\\NetSapiens
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdatePhonenumberQueueRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdatePhonenumberQueue_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'phonenumber' => 'string',
        'enabled' => '\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault',
        'dial_rule_application' => '\SpectrumVoip\\\\NetSapiens\Model\DialruleApplication',
        'dial_rule_parameter' => 'string',
        'dial_rule_translation_destination_user' => 'string',
        'dial_rule_translation_destination_host' => 'string',
        'dial_rule_translation_source_name' => 'string',
        'dial_rule_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'phonenumber' => null,
        'enabled' => null,
        'dial_rule_application' => null,
        'dial_rule_parameter' => null,
        'dial_rule_translation_destination_user' => null,
        'dial_rule_translation_destination_host' => null,
        'dial_rule_translation_source_name' => null,
        'dial_rule_description' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'phonenumber' => false,
        'enabled' => false,
        'dial_rule_application' => false,
        'dial_rule_parameter' => false,
        'dial_rule_translation_destination_user' => false,
        'dial_rule_translation_destination_host' => false,
        'dial_rule_translation_source_name' => false,
        'dial_rule_description' => false
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
        'phonenumber' => 'phonenumber',
        'enabled' => 'enabled',
        'dial_rule_application' => 'dial-rule-application',
        'dial_rule_parameter' => 'dial-rule-parameter',
        'dial_rule_translation_destination_user' => 'dial-rule-translation-destination-user',
        'dial_rule_translation_destination_host' => 'dial-rule-translation-destination-host',
        'dial_rule_translation_source_name' => 'dial-rule-translation-source-name',
        'dial_rule_description' => 'dial-rule-description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'phonenumber' => 'setPhonenumber',
        'enabled' => 'setEnabled',
        'dial_rule_application' => 'setDialRuleApplication',
        'dial_rule_parameter' => 'setDialRuleParameter',
        'dial_rule_translation_destination_user' => 'setDialRuleTranslationDestinationUser',
        'dial_rule_translation_destination_host' => 'setDialRuleTranslationDestinationHost',
        'dial_rule_translation_source_name' => 'setDialRuleTranslationSourceName',
        'dial_rule_description' => 'setDialRuleDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'phonenumber' => 'getPhonenumber',
        'enabled' => 'getEnabled',
        'dial_rule_application' => 'getDialRuleApplication',
        'dial_rule_parameter' => 'getDialRuleParameter',
        'dial_rule_translation_destination_user' => 'getDialRuleTranslationDestinationUser',
        'dial_rule_translation_destination_host' => 'getDialRuleTranslationDestinationHost',
        'dial_rule_translation_source_name' => 'getDialRuleTranslationSourceName',
        'dial_rule_description' => 'getDialRuleDescription'
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
        $this->setIfExists('phonenumber', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('dial_rule_application', $data ?? [], null);
        $this->setIfExists('dial_rule_parameter', $data ?? [], null);
        $this->setIfExists('dial_rule_translation_destination_user', $data ?? [], null);
        $this->setIfExists('dial_rule_translation_destination_host', $data ?? [], '[*]');
        $this->setIfExists('dial_rule_translation_source_name', $data ?? [], '[*]');
        $this->setIfExists('dial_rule_description', $data ?? [], null);
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

        if ($this->container['phonenumber'] === null) {
            $invalidProperties[] = "'phonenumber' can't be null";
        }
        if ($this->container['dial_rule_translation_destination_user'] === null) {
            $invalidProperties[] = "'dial_rule_translation_destination_user' can't be null";
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
     * Gets phonenumber
     *
     * @return string
     */
    public function getPhonenumber()
    {
        return $this->container['phonenumber'];
    }

    /**
     * Sets phonenumber
     *
     * @param string $phonenumber This is the main phonenumber setting. Should be a  formated in a e164 format with country count and number. US domestic numbers should be similiar to 18005551234
     *
     * @return self
     */
    public function setPhonenumber($phonenumber)
    {
        if (is_null($phonenumber)) {
            throw new \InvalidArgumentException('non-nullable phonenumber cannot be null');
        }
        $this->container['phonenumber'] = $phonenumber;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault|null
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault|null $enabled When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes.
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
     * Gets dial_rule_application
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\DialruleApplication|null
     */
    public function getDialRuleApplication()
    {
        return $this->container['dial_rule_application'];
    }

    /**
     * Sets dial_rule_application
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\DialruleApplication|null $dial_rule_application dial_rule_application
     *
     * @return self
     */
    public function setDialRuleApplication($dial_rule_application)
    {
        if (is_null($dial_rule_application)) {
            throw new \InvalidArgumentException('non-nullable dial_rule_application cannot be null');
        }
        $this->container['dial_rule_application'] = $dial_rule_application;

        return $this;
    }

    /**
     * Gets dial_rule_parameter
     *
     * @return string|null
     */
    public function getDialRuleParameter()
    {
        return $this->container['dial_rule_parameter'];
    }

    /**
     * Sets dial_rule_parameter
     *
     * @param string|null $dial_rule_parameter This is the application parameter field that can be used for additional settings based on the dial-rule-application. Default is empty string.
     *
     * @return self
     */
    public function setDialRuleParameter($dial_rule_parameter)
    {
        if (is_null($dial_rule_parameter)) {
            throw new \InvalidArgumentException('non-nullable dial_rule_parameter cannot be null');
        }
        $this->container['dial_rule_parameter'] = $dial_rule_parameter;

        return $this;
    }

    /**
     * Gets dial_rule_translation_destination_user
     *
     * @return string
     */
    public function getDialRuleTranslationDestinationUser()
    {
        return $this->container['dial_rule_translation_destination_user'];
    }

    /**
     * Sets dial_rule_translation_destination_user
     *
     * @param string $dial_rule_translation_destination_user This is the forward destination the call will be sent to in partnership with the application (dial-rule-application) and host (dial-rule-translation-destination-host). This might be a user, queue or offnet number depending on the application.
     *
     * @return self
     */
    public function setDialRuleTranslationDestinationUser($dial_rule_translation_destination_user)
    {
        if (is_null($dial_rule_translation_destination_user)) {
            throw new \InvalidArgumentException('non-nullable dial_rule_translation_destination_user cannot be null');
        }
        $this->container['dial_rule_translation_destination_user'] = $dial_rule_translation_destination_user;

        return $this;
    }

    /**
     * Gets dial_rule_translation_destination_host
     *
     * @return string|null
     */
    public function getDialRuleTranslationDestinationHost()
    {
        return $this->container['dial_rule_translation_destination_host'];
    }

    /**
     * Sets dial_rule_translation_destination_host
     *
     * @param string|null $dial_rule_translation_destination_host This is the forward destination host the call will be sent to in partnership with the application (dial-rule-application) and user (dial-rule-translation-destination-user). This might be the domain name or a connection name if trying to route offnet.
     *
     * @return self
     */
    public function setDialRuleTranslationDestinationHost($dial_rule_translation_destination_host)
    {
        if (is_null($dial_rule_translation_destination_host)) {
            throw new \InvalidArgumentException('non-nullable dial_rule_translation_destination_host cannot be null');
        }
        $this->container['dial_rule_translation_destination_host'] = $dial_rule_translation_destination_host;

        return $this;
    }

    /**
     * Gets dial_rule_translation_source_name
     *
     * @return string|null
     */
    public function getDialRuleTranslationSourceName()
    {
        return $this->container['dial_rule_translation_source_name'];
    }

    /**
     * Sets dial_rule_translation_source_name
     *
     * @param string|null $dial_rule_translation_source_name This field will allow customization of the source \"name\" often used for teh caller id name or the the descriptive quoted value outside of the sip uri. Defaults to [*] but you can add a prefix for example with something like this, sales_[*]
     *
     * @return self
     */
    public function setDialRuleTranslationSourceName($dial_rule_translation_source_name)
    {
        if (is_null($dial_rule_translation_source_name)) {
            throw new \InvalidArgumentException('non-nullable dial_rule_translation_source_name cannot be null');
        }
        $this->container['dial_rule_translation_source_name'] = $dial_rule_translation_source_name;

        return $this;
    }

    /**
     * Gets dial_rule_description
     *
     * @return string|null
     */
    public function getDialRuleDescription()
    {
        return $this->container['dial_rule_description'];
    }

    /**
     * Sets dial_rule_description
     *
     * @param string|null $dial_rule_description This is a description of the number/rule that can be used for defintion or tracking purposes.
     *
     * @return self
     */
    public function setDialRuleDescription($dial_rule_description)
    {
        if (is_null($dial_rule_description)) {
            throw new \InvalidArgumentException('non-nullable dial_rule_description cannot be null');
        }
        $this->container['dial_rule_description'] = $dial_rule_description;

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


