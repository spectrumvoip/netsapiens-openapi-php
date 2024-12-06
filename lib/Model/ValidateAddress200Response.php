<?php
/**
 * ValidateAddress200Response
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
 * ValidateAddress200Response Class Doc Comment
 *
 * @category Class
 * @package  SpectrumVoip\\\\NetSapiens
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ValidateAddress200Response implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ValidateAddress_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'domain' => 'string',
        'object' => 'string',
        'emergency_address_id' => 'string',
        'address_formatted_pidflo' => 'object',
        'address_name' => 'string',
        'caller_name' => 'string',
        'address_line_1' => 'string',
        'address_line_2' => 'string',
        'address_country_abbreviation' => 'string',
        'address_state_province_abbreviation' => 'string',
        'address_city' => 'string',
        'address_postal_code' => 'string',
        'carrier' => 'string'
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
        'object' => null,
        'emergency_address_id' => null,
        'address_formatted_pidflo' => null,
        'address_name' => null,
        'caller_name' => null,
        'address_line_1' => null,
        'address_line_2' => null,
        'address_country_abbreviation' => null,
        'address_state_province_abbreviation' => null,
        'address_city' => null,
        'address_postal_code' => null,
        'carrier' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'domain' => false,
        'object' => false,
        'emergency_address_id' => false,
        'address_formatted_pidflo' => false,
        'address_name' => false,
        'caller_name' => false,
        'address_line_1' => false,
        'address_line_2' => false,
        'address_country_abbreviation' => false,
        'address_state_province_abbreviation' => false,
        'address_city' => false,
        'address_postal_code' => false,
        'carrier' => false
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
        'object' => 'object',
        'emergency_address_id' => 'emergency-address-id',
        'address_formatted_pidflo' => 'address-formatted-pidflo',
        'address_name' => 'address-name',
        'caller_name' => 'caller-name',
        'address_line_1' => 'address-line-1',
        'address_line_2' => 'address-line-2',
        'address_country_abbreviation' => 'address-country-abbreviation',
        'address_state_province_abbreviation' => 'address-state-province-abbreviation',
        'address_city' => 'address-city',
        'address_postal_code' => 'address-postal-code',
        'carrier' => 'carrier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'domain' => 'setDomain',
        'object' => 'setObject',
        'emergency_address_id' => 'setEmergencyAddressId',
        'address_formatted_pidflo' => 'setAddressFormattedPidflo',
        'address_name' => 'setAddressName',
        'caller_name' => 'setCallerName',
        'address_line_1' => 'setAddressLine1',
        'address_line_2' => 'setAddressLine2',
        'address_country_abbreviation' => 'setAddressCountryAbbreviation',
        'address_state_province_abbreviation' => 'setAddressStateProvinceAbbreviation',
        'address_city' => 'setAddressCity',
        'address_postal_code' => 'setAddressPostalCode',
        'carrier' => 'setCarrier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'domain' => 'getDomain',
        'object' => 'getObject',
        'emergency_address_id' => 'getEmergencyAddressId',
        'address_formatted_pidflo' => 'getAddressFormattedPidflo',
        'address_name' => 'getAddressName',
        'caller_name' => 'getCallerName',
        'address_line_1' => 'getAddressLine1',
        'address_line_2' => 'getAddressLine2',
        'address_country_abbreviation' => 'getAddressCountryAbbreviation',
        'address_state_province_abbreviation' => 'getAddressStateProvinceAbbreviation',
        'address_city' => 'getAddressCity',
        'address_postal_code' => 'getAddressPostalCode',
        'carrier' => 'getCarrier'
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
        $this->setIfExists('object', $data ?? [], null);
        $this->setIfExists('emergency_address_id', $data ?? [], null);
        $this->setIfExists('address_formatted_pidflo', $data ?? [], null);
        $this->setIfExists('address_name', $data ?? [], null);
        $this->setIfExists('caller_name', $data ?? [], null);
        $this->setIfExists('address_line_1', $data ?? [], null);
        $this->setIfExists('address_line_2', $data ?? [], null);
        $this->setIfExists('address_country_abbreviation', $data ?? [], null);
        $this->setIfExists('address_state_province_abbreviation', $data ?? [], null);
        $this->setIfExists('address_city', $data ?? [], null);
        $this->setIfExists('address_postal_code', $data ?? [], null);
        $this->setIfExists('carrier', $data ?? [], null);
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
        if ($this->container['object'] === null) {
            $invalidProperties[] = "'object' can't be null";
        }
        if ($this->container['emergency_address_id'] === null) {
            $invalidProperties[] = "'emergency_address_id' can't be null";
        }
        if ($this->container['address_formatted_pidflo'] === null) {
            $invalidProperties[] = "'address_formatted_pidflo' can't be null";
        }
        if ($this->container['address_name'] === null) {
            $invalidProperties[] = "'address_name' can't be null";
        }
        if ($this->container['caller_name'] === null) {
            $invalidProperties[] = "'caller_name' can't be null";
        }
        if ($this->container['address_line_1'] === null) {
            $invalidProperties[] = "'address_line_1' can't be null";
        }
        if ($this->container['address_line_2'] === null) {
            $invalidProperties[] = "'address_line_2' can't be null";
        }
        if ($this->container['address_country_abbreviation'] === null) {
            $invalidProperties[] = "'address_country_abbreviation' can't be null";
        }
        if ($this->container['address_state_province_abbreviation'] === null) {
            $invalidProperties[] = "'address_state_province_abbreviation' can't be null";
        }
        if ($this->container['address_city'] === null) {
            $invalidProperties[] = "'address_city' can't be null";
        }
        if ($this->container['address_postal_code'] === null) {
            $invalidProperties[] = "'address_postal_code' can't be null";
        }
        if ($this->container['carrier'] === null) {
            $invalidProperties[] = "'carrier' can't be null";
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
     * Gets object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string $object object
     *
     * @return self
     */
    public function setObject($object)
    {
        if (is_null($object)) {
            throw new \InvalidArgumentException('non-nullable object cannot be null');
        }
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets emergency_address_id
     *
     * @return string
     */
    public function getEmergencyAddressId()
    {
        return $this->container['emergency_address_id'];
    }

    /**
     * Sets emergency_address_id
     *
     * @param string $emergency_address_id emergency_address_id
     *
     * @return self
     */
    public function setEmergencyAddressId($emergency_address_id)
    {
        if (is_null($emergency_address_id)) {
            throw new \InvalidArgumentException('non-nullable emergency_address_id cannot be null');
        }
        $this->container['emergency_address_id'] = $emergency_address_id;

        return $this;
    }

    /**
     * Gets address_formatted_pidflo
     *
     * @return object
     */
    public function getAddressFormattedPidflo()
    {
        return $this->container['address_formatted_pidflo'];
    }

    /**
     * Sets address_formatted_pidflo
     *
     * @param object $address_formatted_pidflo Standardized values and fields of the address. May be different depending on carrier
     *
     * @return self
     */
    public function setAddressFormattedPidflo($address_formatted_pidflo)
    {
        if (is_null($address_formatted_pidflo)) {
            throw new \InvalidArgumentException('non-nullable address_formatted_pidflo cannot be null');
        }
        $this->container['address_formatted_pidflo'] = $address_formatted_pidflo;

        return $this;
    }

    /**
     * Gets address_name
     *
     * @return string
     */
    public function getAddressName()
    {
        return $this->container['address_name'];
    }

    /**
     * Sets address_name
     *
     * @param string $address_name address_name
     *
     * @return self
     */
    public function setAddressName($address_name)
    {
        if (is_null($address_name)) {
            throw new \InvalidArgumentException('non-nullable address_name cannot be null');
        }
        $this->container['address_name'] = $address_name;

        return $this;
    }

    /**
     * Gets caller_name
     *
     * @return string
     */
    public function getCallerName()
    {
        return $this->container['caller_name'];
    }

    /**
     * Sets caller_name
     *
     * @param string $caller_name caller_name
     *
     * @return self
     */
    public function setCallerName($caller_name)
    {
        if (is_null($caller_name)) {
            throw new \InvalidArgumentException('non-nullable caller_name cannot be null');
        }
        $this->container['caller_name'] = $caller_name;

        return $this;
    }

    /**
     * Gets address_line_1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line_1'];
    }

    /**
     * Sets address_line_1
     *
     * @param string $address_line_1 address_line_1
     *
     * @return self
     */
    public function setAddressLine1($address_line_1)
    {
        if (is_null($address_line_1)) {
            throw new \InvalidArgumentException('non-nullable address_line_1 cannot be null');
        }
        $this->container['address_line_1'] = $address_line_1;

        return $this;
    }

    /**
     * Gets address_line_2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['address_line_2'];
    }

    /**
     * Sets address_line_2
     *
     * @param string $address_line_2 address_line_2
     *
     * @return self
     */
    public function setAddressLine2($address_line_2)
    {
        if (is_null($address_line_2)) {
            throw new \InvalidArgumentException('non-nullable address_line_2 cannot be null');
        }
        $this->container['address_line_2'] = $address_line_2;

        return $this;
    }

    /**
     * Gets address_country_abbreviation
     *
     * @return string
     */
    public function getAddressCountryAbbreviation()
    {
        return $this->container['address_country_abbreviation'];
    }

    /**
     * Sets address_country_abbreviation
     *
     * @param string $address_country_abbreviation address_country_abbreviation
     *
     * @return self
     */
    public function setAddressCountryAbbreviation($address_country_abbreviation)
    {
        if (is_null($address_country_abbreviation)) {
            throw new \InvalidArgumentException('non-nullable address_country_abbreviation cannot be null');
        }
        $this->container['address_country_abbreviation'] = $address_country_abbreviation;

        return $this;
    }

    /**
     * Gets address_state_province_abbreviation
     *
     * @return string
     */
    public function getAddressStateProvinceAbbreviation()
    {
        return $this->container['address_state_province_abbreviation'];
    }

    /**
     * Sets address_state_province_abbreviation
     *
     * @param string $address_state_province_abbreviation address_state_province_abbreviation
     *
     * @return self
     */
    public function setAddressStateProvinceAbbreviation($address_state_province_abbreviation)
    {
        if (is_null($address_state_province_abbreviation)) {
            throw new \InvalidArgumentException('non-nullable address_state_province_abbreviation cannot be null');
        }
        $this->container['address_state_province_abbreviation'] = $address_state_province_abbreviation;

        return $this;
    }

    /**
     * Gets address_city
     *
     * @return string
     */
    public function getAddressCity()
    {
        return $this->container['address_city'];
    }

    /**
     * Sets address_city
     *
     * @param string $address_city address_city
     *
     * @return self
     */
    public function setAddressCity($address_city)
    {
        if (is_null($address_city)) {
            throw new \InvalidArgumentException('non-nullable address_city cannot be null');
        }
        $this->container['address_city'] = $address_city;

        return $this;
    }

    /**
     * Gets address_postal_code
     *
     * @return string
     */
    public function getAddressPostalCode()
    {
        return $this->container['address_postal_code'];
    }

    /**
     * Sets address_postal_code
     *
     * @param string $address_postal_code address_postal_code
     *
     * @return self
     */
    public function setAddressPostalCode($address_postal_code)
    {
        if (is_null($address_postal_code)) {
            throw new \InvalidArgumentException('non-nullable address_postal_code cannot be null');
        }
        $this->container['address_postal_code'] = $address_postal_code;

        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string $carrier carrier
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


