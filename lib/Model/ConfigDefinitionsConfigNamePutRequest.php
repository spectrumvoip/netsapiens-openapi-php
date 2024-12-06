<?php
/**
 * ConfigDefinitionsConfigNamePutRequest
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
 * ConfigDefinitionsConfigNamePutRequest Class Doc Comment
 *
 * @category Class
 * @package  SpectrumVoip\\\\NetSapiens
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConfigDefinitionsConfigNamePutRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = '_config_definitions__config_name__put_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'default' => '\SpectrumVoip\\\\NetSapiens\Model\StringInteger',
        'code_version' => 'string',
        'data_type' => 'string',
        'config_def_allow_hostname' => '\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault',
        'config_def_allow_reseller_access' => '\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault',
        'config_def_default_basic_user' => '\SpectrumVoip\\\\NetSapiens\Model\StringInteger',
        'config_def_default_call_center_supervisor' => '\SpectrumVoip\\\\NetSapiens\Model\StringInteger',
        'config_def_default_office_manager' => '\SpectrumVoip\\\\NetSapiens\Model\StringInteger',
        'config_def_default_reseller' => '\SpectrumVoip\\\\NetSapiens\Model\StringInteger',
        'config_def_default_super_user' => '\SpectrumVoip\\\\NetSapiens\Model\StringInteger',
        'tags' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'description' => null,
        'default' => null,
        'code_version' => null,
        'data_type' => null,
        'config_def_allow_hostname' => null,
        'config_def_allow_reseller_access' => null,
        'config_def_default_basic_user' => null,
        'config_def_default_call_center_supervisor' => null,
        'config_def_default_office_manager' => null,
        'config_def_default_reseller' => null,
        'config_def_default_super_user' => null,
        'tags' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'description' => false,
        'default' => false,
        'code_version' => false,
        'data_type' => false,
        'config_def_allow_hostname' => false,
        'config_def_allow_reseller_access' => false,
        'config_def_default_basic_user' => false,
        'config_def_default_call_center_supervisor' => false,
        'config_def_default_office_manager' => false,
        'config_def_default_reseller' => false,
        'config_def_default_super_user' => false,
        'tags' => false
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
        'description' => 'description',
        'default' => 'default',
        'code_version' => 'code-version',
        'data_type' => 'data-type',
        'config_def_allow_hostname' => 'config-def-allow-hostname',
        'config_def_allow_reseller_access' => 'config-def-allow-reseller-access',
        'config_def_default_basic_user' => 'config-def-default-basic-user',
        'config_def_default_call_center_supervisor' => 'config-def-default-call-center-supervisor',
        'config_def_default_office_manager' => 'config-def-default-office-manager',
        'config_def_default_reseller' => 'config-def-default-reseller',
        'config_def_default_super_user' => 'config-def-default-super-user',
        'tags' => 'tags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'default' => 'setDefault',
        'code_version' => 'setCodeVersion',
        'data_type' => 'setDataType',
        'config_def_allow_hostname' => 'setConfigDefAllowHostname',
        'config_def_allow_reseller_access' => 'setConfigDefAllowResellerAccess',
        'config_def_default_basic_user' => 'setConfigDefDefaultBasicUser',
        'config_def_default_call_center_supervisor' => 'setConfigDefDefaultCallCenterSupervisor',
        'config_def_default_office_manager' => 'setConfigDefDefaultOfficeManager',
        'config_def_default_reseller' => 'setConfigDefDefaultReseller',
        'config_def_default_super_user' => 'setConfigDefDefaultSuperUser',
        'tags' => 'setTags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'default' => 'getDefault',
        'code_version' => 'getCodeVersion',
        'data_type' => 'getDataType',
        'config_def_allow_hostname' => 'getConfigDefAllowHostname',
        'config_def_allow_reseller_access' => 'getConfigDefAllowResellerAccess',
        'config_def_default_basic_user' => 'getConfigDefDefaultBasicUser',
        'config_def_default_call_center_supervisor' => 'getConfigDefDefaultCallCenterSupervisor',
        'config_def_default_office_manager' => 'getConfigDefDefaultOfficeManager',
        'config_def_default_reseller' => 'getConfigDefDefaultReseller',
        'config_def_default_super_user' => 'getConfigDefDefaultSuperUser',
        'tags' => 'getTags'
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
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('default', $data ?? [], null);
        $this->setIfExists('code_version', $data ?? [], null);
        $this->setIfExists('data_type', $data ?? [], null);
        $this->setIfExists('config_def_allow_hostname', $data ?? [], null);
        $this->setIfExists('config_def_allow_reseller_access', $data ?? [], null);
        $this->setIfExists('config_def_default_basic_user', $data ?? [], null);
        $this->setIfExists('config_def_default_call_center_supervisor', $data ?? [], null);
        $this->setIfExists('config_def_default_office_manager', $data ?? [], null);
        $this->setIfExists('config_def_default_reseller', $data ?? [], null);
        $this->setIfExists('config_def_default_super_user', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
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

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['default'] === null) {
            $invalidProperties[] = "'default' can't be null";
        }
        if ($this->container['code_version'] === null) {
            $invalidProperties[] = "'code_version' can't be null";
        }
        if ($this->container['data_type'] === null) {
            $invalidProperties[] = "'data_type' can't be null";
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description This describes the configuration being defined
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
     * Gets default
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\StringInteger
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\StringInteger $default This is the default for the configuration. If no scope-specific default is set, this value will be used
     *
     * @return self
     */
    public function setDefault($default)
    {
        if (is_null($default)) {
            throw new \InvalidArgumentException('non-nullable default cannot be null');
        }
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets code_version
     *
     * @return string
     */
    public function getCodeVersion()
    {
        return $this->container['code_version'];
    }

    /**
     * Sets code_version
     *
     * @param string $code_version This is the code version this definition starts to become applicable
     *
     * @return self
     */
    public function setCodeVersion($code_version)
    {
        if (is_null($code_version)) {
            throw new \InvalidArgumentException('non-nullable code_version cannot be null');
        }
        $this->container['code_version'] = $code_version;

        return $this;
    }

    /**
     * Gets data_type
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type
     *
     * @param string $data_type This is the data type allowed for this configuration
     *
     * @return self
     */
    public function setDataType($data_type)
    {
        if (is_null($data_type)) {
            throw new \InvalidArgumentException('non-nullable data_type cannot be null');
        }
        $this->container['data_type'] = $data_type;

        return $this;
    }

    /**
     * Gets config_def_allow_hostname
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault|null
     */
    public function getConfigDefAllowHostname()
    {
        return $this->container['config_def_allow_hostname'];
    }

    /**
     * Sets config_def_allow_hostname
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault|null $config_def_allow_hostname When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes.
     *
     * @return self
     */
    public function setConfigDefAllowHostname($config_def_allow_hostname)
    {
        if (is_null($config_def_allow_hostname)) {
            throw new \InvalidArgumentException('non-nullable config_def_allow_hostname cannot be null');
        }
        $this->container['config_def_allow_hostname'] = $config_def_allow_hostname;

        return $this;
    }

    /**
     * Gets config_def_allow_reseller_access
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault|null
     */
    public function getConfigDefAllowResellerAccess()
    {
        return $this->container['config_def_allow_reseller_access'];
    }

    /**
     * Sets config_def_allow_reseller_access
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault|null $config_def_allow_reseller_access When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes.
     *
     * @return self
     */
    public function setConfigDefAllowResellerAccess($config_def_allow_reseller_access)
    {
        if (is_null($config_def_allow_reseller_access)) {
            throw new \InvalidArgumentException('non-nullable config_def_allow_reseller_access cannot be null');
        }
        $this->container['config_def_allow_reseller_access'] = $config_def_allow_reseller_access;

        return $this;
    }

    /**
     * Gets config_def_default_basic_user
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\StringInteger|null
     */
    public function getConfigDefDefaultBasicUser()
    {
        return $this->container['config_def_default_basic_user'];
    }

    /**
     * Sets config_def_default_basic_user
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\StringInteger|null $config_def_default_basic_user This is the default for the configuration. If no scope-specific default is set, this value will be used
     *
     * @return self
     */
    public function setConfigDefDefaultBasicUser($config_def_default_basic_user)
    {
        if (is_null($config_def_default_basic_user)) {
            throw new \InvalidArgumentException('non-nullable config_def_default_basic_user cannot be null');
        }
        $this->container['config_def_default_basic_user'] = $config_def_default_basic_user;

        return $this;
    }

    /**
     * Gets config_def_default_call_center_supervisor
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\StringInteger|null
     */
    public function getConfigDefDefaultCallCenterSupervisor()
    {
        return $this->container['config_def_default_call_center_supervisor'];
    }

    /**
     * Sets config_def_default_call_center_supervisor
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\StringInteger|null $config_def_default_call_center_supervisor This is the default for the configuration. If no scope-specific default is set, this value will be used
     *
     * @return self
     */
    public function setConfigDefDefaultCallCenterSupervisor($config_def_default_call_center_supervisor)
    {
        if (is_null($config_def_default_call_center_supervisor)) {
            throw new \InvalidArgumentException('non-nullable config_def_default_call_center_supervisor cannot be null');
        }
        $this->container['config_def_default_call_center_supervisor'] = $config_def_default_call_center_supervisor;

        return $this;
    }

    /**
     * Gets config_def_default_office_manager
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\StringInteger|null
     */
    public function getConfigDefDefaultOfficeManager()
    {
        return $this->container['config_def_default_office_manager'];
    }

    /**
     * Sets config_def_default_office_manager
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\StringInteger|null $config_def_default_office_manager This is the default for the configuration. If no scope-specific default is set, this value will be used
     *
     * @return self
     */
    public function setConfigDefDefaultOfficeManager($config_def_default_office_manager)
    {
        if (is_null($config_def_default_office_manager)) {
            throw new \InvalidArgumentException('non-nullable config_def_default_office_manager cannot be null');
        }
        $this->container['config_def_default_office_manager'] = $config_def_default_office_manager;

        return $this;
    }

    /**
     * Gets config_def_default_reseller
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\StringInteger|null
     */
    public function getConfigDefDefaultReseller()
    {
        return $this->container['config_def_default_reseller'];
    }

    /**
     * Sets config_def_default_reseller
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\StringInteger|null $config_def_default_reseller This is the default for the configuration. If no scope-specific default is set, this value will be used
     *
     * @return self
     */
    public function setConfigDefDefaultReseller($config_def_default_reseller)
    {
        if (is_null($config_def_default_reseller)) {
            throw new \InvalidArgumentException('non-nullable config_def_default_reseller cannot be null');
        }
        $this->container['config_def_default_reseller'] = $config_def_default_reseller;

        return $this;
    }

    /**
     * Gets config_def_default_super_user
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\StringInteger|null
     */
    public function getConfigDefDefaultSuperUser()
    {
        return $this->container['config_def_default_super_user'];
    }

    /**
     * Sets config_def_default_super_user
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\StringInteger|null $config_def_default_super_user This is the default for the configuration. If no scope-specific default is set, this value will be used
     *
     * @return self
     */
    public function setConfigDefDefaultSuperUser($config_def_default_super_user)
    {
        if (is_null($config_def_default_super_user)) {
            throw new \InvalidArgumentException('non-nullable config_def_default_super_user cannot be null');
        }
        $this->container['config_def_default_super_user'] = $config_def_default_super_user;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string|null $tags Any tags, comma seperated, that should be applied to the defintion
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

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


