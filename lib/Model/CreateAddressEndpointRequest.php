<?php
/**
 * CreateAddressEndpointRequest
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
 * CreateAddressEndpointRequest Class Doc Comment
 *
 * @category Class
 * @package  SpectrumVoip\\\\NetSapiens
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateAddressEndpointRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateAddressEndpoint_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address_callback_number' => '\SpectrumVoip\\\\NetSapiens\Model\CreateAddressEndpointRequestAddressCallbackNumber',
        'address_name' => 'string',
        'caller_name' => 'string',
        'address_line_1' => 'string',
        'address_line_2' => 'string',
        'address_city' => 'string',
        'address_state_province_abbreviation' => 'string',
        'address_postal_code' => 'string',
        'address_country_abbreviation' => 'string',
        'address_location_description' => 'string',
        'address_formatted_pidflo' => 'object',
        'carrier' => 'string',
        'location_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address_callback_number' => null,
        'address_name' => null,
        'caller_name' => null,
        'address_line_1' => null,
        'address_line_2' => null,
        'address_city' => null,
        'address_state_province_abbreviation' => null,
        'address_postal_code' => null,
        'address_country_abbreviation' => null,
        'address_location_description' => null,
        'address_formatted_pidflo' => null,
        'carrier' => null,
        'location_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address_callback_number' => false,
        'address_name' => false,
        'caller_name' => false,
        'address_line_1' => false,
        'address_line_2' => true,
        'address_city' => false,
        'address_state_province_abbreviation' => false,
        'address_postal_code' => false,
        'address_country_abbreviation' => false,
        'address_location_description' => true,
        'address_formatted_pidflo' => true,
        'carrier' => true,
        'location_id' => true
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
        'address_callback_number' => 'address-callback-number',
        'address_name' => 'address-name',
        'caller_name' => 'caller-name',
        'address_line_1' => 'address-line-1',
        'address_line_2' => 'address-line-2',
        'address_city' => 'address-city',
        'address_state_province_abbreviation' => 'address-state-province-abbreviation',
        'address_postal_code' => 'address-postal-code',
        'address_country_abbreviation' => 'address-country-abbreviation',
        'address_location_description' => 'address-location-description',
        'address_formatted_pidflo' => 'address-formatted-pidflo',
        'carrier' => 'carrier',
        'location_id' => 'location-id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_callback_number' => 'setAddressCallbackNumber',
        'address_name' => 'setAddressName',
        'caller_name' => 'setCallerName',
        'address_line_1' => 'setAddressLine1',
        'address_line_2' => 'setAddressLine2',
        'address_city' => 'setAddressCity',
        'address_state_province_abbreviation' => 'setAddressStateProvinceAbbreviation',
        'address_postal_code' => 'setAddressPostalCode',
        'address_country_abbreviation' => 'setAddressCountryAbbreviation',
        'address_location_description' => 'setAddressLocationDescription',
        'address_formatted_pidflo' => 'setAddressFormattedPidflo',
        'carrier' => 'setCarrier',
        'location_id' => 'setLocationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_callback_number' => 'getAddressCallbackNumber',
        'address_name' => 'getAddressName',
        'caller_name' => 'getCallerName',
        'address_line_1' => 'getAddressLine1',
        'address_line_2' => 'getAddressLine2',
        'address_city' => 'getAddressCity',
        'address_state_province_abbreviation' => 'getAddressStateProvinceAbbreviation',
        'address_postal_code' => 'getAddressPostalCode',
        'address_country_abbreviation' => 'getAddressCountryAbbreviation',
        'address_location_description' => 'getAddressLocationDescription',
        'address_formatted_pidflo' => 'getAddressFormattedPidflo',
        'carrier' => 'getCarrier',
        'location_id' => 'getLocationId'
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
        $this->setIfExists('address_callback_number', $data ?? [], null);
        $this->setIfExists('address_name', $data ?? [], null);
        $this->setIfExists('caller_name', $data ?? [], null);
        $this->setIfExists('address_line_1', $data ?? [], null);
        $this->setIfExists('address_line_2', $data ?? [], null);
        $this->setIfExists('address_city', $data ?? [], null);
        $this->setIfExists('address_state_province_abbreviation', $data ?? [], null);
        $this->setIfExists('address_postal_code', $data ?? [], null);
        $this->setIfExists('address_country_abbreviation', $data ?? [], null);
        $this->setIfExists('address_location_description', $data ?? [], null);
        $this->setIfExists('address_formatted_pidflo', $data ?? [], null);
        $this->setIfExists('carrier', $data ?? [], null);
        $this->setIfExists('location_id', $data ?? [], null);
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

        if ($this->container['address_name'] === null) {
            $invalidProperties[] = "'address_name' can't be null";
        }
        if ($this->container['caller_name'] === null) {
            $invalidProperties[] = "'caller_name' can't be null";
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
     * Gets address_callback_number
     *
     * @return \SpectrumVoip\\\\NetSapiens\Model\CreateAddressEndpointRequestAddressCallbackNumber|null
     */
    public function getAddressCallbackNumber()
    {
        return $this->container['address_callback_number'];
    }

    /**
     * Sets address_callback_number
     *
     * @param \SpectrumVoip\\\\NetSapiens\Model\CreateAddressEndpointRequestAddressCallbackNumber|null $address_callback_number address_callback_number
     *
     * @return self
     */
    public function setAddressCallbackNumber($address_callback_number)
    {
        if (is_null($address_callback_number)) {
            throw new \InvalidArgumentException('non-nullable address_callback_number cannot be null');
        }
        $this->container['address_callback_number'] = $address_callback_number;

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
     * @param string $address_name This is the name label for the address
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
     * @param string $caller_name This is the caller's name for the address
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
     * @return string|null
     */
    public function getAddressLine1()
    {
        return $this->container['address_line_1'];
    }

    /**
     * Sets address_line_1
     *
     * @param string|null $address_line_1 This is the address line 1 for the address
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
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line_2'];
    }

    /**
     * Sets address_line_2
     *
     * @param string|null $address_line_2 This is the address line 2 for the address
     *
     * @return self
     */
    public function setAddressLine2($address_line_2)
    {
        if (is_null($address_line_2)) {
            array_push($this->openAPINullablesSetToNull, 'address_line_2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_line_2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_line_2'] = $address_line_2;

        return $this;
    }

    /**
     * Gets address_city
     *
     * @return string|null
     */
    public function getAddressCity()
    {
        return $this->container['address_city'];
    }

    /**
     * Sets address_city
     *
     * @param string|null $address_city This is the city for the address
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
     * Gets address_state_province_abbreviation
     *
     * @return string|null
     */
    public function getAddressStateProvinceAbbreviation()
    {
        return $this->container['address_state_province_abbreviation'];
    }

    /**
     * Sets address_state_province_abbreviation
     *
     * @param string|null $address_state_province_abbreviation This is the state or province (Canadian) abbreviation for the address
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
     * Gets address_postal_code
     *
     * @return string|null
     */
    public function getAddressPostalCode()
    {
        return $this->container['address_postal_code'];
    }

    /**
     * Sets address_postal_code
     *
     * @param string|null $address_postal_code This is the postal code for the address
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
     * Gets address_country_abbreviation
     *
     * @return string|null
     */
    public function getAddressCountryAbbreviation()
    {
        return $this->container['address_country_abbreviation'];
    }

    /**
     * Sets address_country_abbreviation
     *
     * @param string|null $address_country_abbreviation This is the country appreviation for the address
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
     * Gets address_location_description
     *
     * @return string|null
     */
    public function getAddressLocationDescription()
    {
        return $this->container['address_location_description'];
    }

    /**
     * Sets address_location_description
     *
     * @param string|null $address_location_description This is an optional location description for the address
     *
     * @return self
     */
    public function setAddressLocationDescription($address_location_description)
    {
        if (is_null($address_location_description)) {
            array_push($this->openAPINullablesSetToNull, 'address_location_description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_location_description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_location_description'] = $address_location_description;

        return $this;
    }

    /**
     * Gets address_formatted_pidflo
     *
     * @return object|null
     */
    public function getAddressFormattedPidflo()
    {
        return $this->container['address_formatted_pidflo'];
    }

    /**
     * Sets address_formatted_pidflo
     *
     * @param object|null $address_formatted_pidflo This is a return value of the formatted PIDFLO standardized value for the address. For create/update either location-id or address-formatted-pidflo is needed. If address-formatted-pidflo is used, fill in address-line-1, address-city, etc for address information
     *
     * @return self
     */
    public function setAddressFormattedPidflo($address_formatted_pidflo)
    {
        if (is_null($address_formatted_pidflo)) {
            array_push($this->openAPINullablesSetToNull, 'address_formatted_pidflo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('address_formatted_pidflo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['address_formatted_pidflo'] = $address_formatted_pidflo;

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
     * @param string|null $carrier This is the carrier name for the address
     *
     * @return self
     */
    public function setCarrier($carrier)
    {
        if (is_null($carrier)) {
            array_push($this->openAPINullablesSetToNull, 'carrier');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('carrier', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['carrier'] = $carrier;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return string|null
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param string|null $location_id This is the address-id in cases for creation using an existing address. For create/update either location-id or address-formatted-pidflo is needed
     *
     * @return self
     */
    public function setLocationId($location_id)
    {
        if (is_null($location_id)) {
            array_push($this->openAPINullablesSetToNull, 'location_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('location_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['location_id'] = $location_id;

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


