<?php
/**
 * AddressCreateReturn
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
 * AddressCreateReturn Class Doc Comment
 *
 * @category Class
 * @package  SpectrumVoip\\\\NetSapiens
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AddressCreateReturn implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddressCreateReturn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address_formatted_pidflo' => 'object',
        'object' => 'string',
        'domain' => 'string',
        'user' => 'string',
        'address_id' => 'string',
        'address_name' => 'string',
        'callid_nmbr' => 'string',
        'address_line_1' => 'string',
        'address_line_2' => 'string',
        'city' => 'string',
        'state_code' => 'string',
        'zip' => 'string',
        'country_code' => 'string',
        'location' => 'string',
        'carrier' => 'string',
        'public_ip' => 'string',
        'action' => 'string',
        'singular' => 'int',
        'controller' => 'string',
        'format' => 'string',
        'api_ver' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address_formatted_pidflo' => null,
        'object' => null,
        'domain' => null,
        'user' => null,
        'address_id' => null,
        'address_name' => null,
        'callid_nmbr' => null,
        'address_line_1' => null,
        'address_line_2' => null,
        'city' => null,
        'state_code' => null,
        'zip' => null,
        'country_code' => null,
        'location' => null,
        'carrier' => null,
        'public_ip' => null,
        'action' => null,
        'singular' => null,
        'controller' => null,
        'format' => null,
        'api_ver' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'address_formatted_pidflo' => false,
        'object' => false,
        'domain' => false,
        'user' => false,
        'address_id' => false,
        'address_name' => false,
        'callid_nmbr' => false,
        'address_line_1' => false,
        'address_line_2' => false,
        'city' => false,
        'state_code' => false,
        'zip' => false,
        'country_code' => false,
        'location' => false,
        'carrier' => false,
        'public_ip' => false,
        'action' => false,
        'singular' => false,
        'controller' => false,
        'format' => false,
        'api_ver' => false
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
        'address_formatted_pidflo' => 'address-formatted-pidflo',
        'object' => 'object',
        'domain' => 'domain',
        'user' => 'user',
        'address_id' => 'address_id',
        'address_name' => 'address_name',
        'callid_nmbr' => 'callid_nmbr',
        'address_line_1' => 'address_line_1',
        'address_line_2' => 'address_line_2',
        'city' => 'city',
        'state_code' => 'state_code',
        'zip' => 'zip',
        'country_code' => 'country_code',
        'location' => 'location',
        'carrier' => 'carrier',
        'public_ip' => 'public_ip',
        'action' => 'action',
        'singular' => 'singular',
        'controller' => 'controller',
        'format' => 'format',
        'api_ver' => 'apiVer'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_formatted_pidflo' => 'setAddressFormattedPidflo',
        'object' => 'setObject',
        'domain' => 'setDomain',
        'user' => 'setUser',
        'address_id' => 'setAddressId',
        'address_name' => 'setAddressName',
        'callid_nmbr' => 'setCallidNmbr',
        'address_line_1' => 'setAddressLine1',
        'address_line_2' => 'setAddressLine2',
        'city' => 'setCity',
        'state_code' => 'setStateCode',
        'zip' => 'setZip',
        'country_code' => 'setCountryCode',
        'location' => 'setLocation',
        'carrier' => 'setCarrier',
        'public_ip' => 'setPublicIp',
        'action' => 'setAction',
        'singular' => 'setSingular',
        'controller' => 'setController',
        'format' => 'setFormat',
        'api_ver' => 'setApiVer'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_formatted_pidflo' => 'getAddressFormattedPidflo',
        'object' => 'getObject',
        'domain' => 'getDomain',
        'user' => 'getUser',
        'address_id' => 'getAddressId',
        'address_name' => 'getAddressName',
        'callid_nmbr' => 'getCallidNmbr',
        'address_line_1' => 'getAddressLine1',
        'address_line_2' => 'getAddressLine2',
        'city' => 'getCity',
        'state_code' => 'getStateCode',
        'zip' => 'getZip',
        'country_code' => 'getCountryCode',
        'location' => 'getLocation',
        'carrier' => 'getCarrier',
        'public_ip' => 'getPublicIp',
        'action' => 'getAction',
        'singular' => 'getSingular',
        'controller' => 'getController',
        'format' => 'getFormat',
        'api_ver' => 'getApiVer'
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
        $this->setIfExists('address_formatted_pidflo', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], null);
        $this->setIfExists('domain', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
        $this->setIfExists('address_id', $data ?? [], null);
        $this->setIfExists('address_name', $data ?? [], null);
        $this->setIfExists('callid_nmbr', $data ?? [], null);
        $this->setIfExists('address_line_1', $data ?? [], null);
        $this->setIfExists('address_line_2', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('state_code', $data ?? [], null);
        $this->setIfExists('zip', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('carrier', $data ?? [], null);
        $this->setIfExists('public_ip', $data ?? [], null);
        $this->setIfExists('action', $data ?? [], null);
        $this->setIfExists('singular', $data ?? [], null);
        $this->setIfExists('controller', $data ?? [], null);
        $this->setIfExists('format', $data ?? [], null);
        $this->setIfExists('api_ver', $data ?? [], null);
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

        if ($this->container['address_formatted_pidflo'] === null) {
            $invalidProperties[] = "'address_formatted_pidflo' can't be null";
        }
        if ($this->container['object'] === null) {
            $invalidProperties[] = "'object' can't be null";
        }
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
        if ($this->container['user'] === null) {
            $invalidProperties[] = "'user' can't be null";
        }
        if ($this->container['address_id'] === null) {
            $invalidProperties[] = "'address_id' can't be null";
        }
        if ($this->container['address_name'] === null) {
            $invalidProperties[] = "'address_name' can't be null";
        }
        if ($this->container['callid_nmbr'] === null) {
            $invalidProperties[] = "'callid_nmbr' can't be null";
        }
        if ($this->container['address_line_1'] === null) {
            $invalidProperties[] = "'address_line_1' can't be null";
        }
        if ($this->container['address_line_2'] === null) {
            $invalidProperties[] = "'address_line_2' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['state_code'] === null) {
            $invalidProperties[] = "'state_code' can't be null";
        }
        if ($this->container['zip'] === null) {
            $invalidProperties[] = "'zip' can't be null";
        }
        if ($this->container['country_code'] === null) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if ($this->container['location'] === null) {
            $invalidProperties[] = "'location' can't be null";
        }
        if ($this->container['carrier'] === null) {
            $invalidProperties[] = "'carrier' can't be null";
        }
        if ($this->container['public_ip'] === null) {
            $invalidProperties[] = "'public_ip' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['singular'] === null) {
            $invalidProperties[] = "'singular' can't be null";
        }
        if ($this->container['controller'] === null) {
            $invalidProperties[] = "'controller' can't be null";
        }
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        if ($this->container['api_ver'] === null) {
            $invalidProperties[] = "'api_ver' can't be null";
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
     * @param object $address_formatted_pidflo address_formatted_pidflo
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
     * Gets address_id
     *
     * @return string
     */
    public function getAddressId()
    {
        return $this->container['address_id'];
    }

    /**
     * Sets address_id
     *
     * @param string $address_id address_id
     *
     * @return self
     */
    public function setAddressId($address_id)
    {
        if (is_null($address_id)) {
            throw new \InvalidArgumentException('non-nullable address_id cannot be null');
        }
        $this->container['address_id'] = $address_id;

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
     * Gets callid_nmbr
     *
     * @return string
     */
    public function getCallidNmbr()
    {
        return $this->container['callid_nmbr'];
    }

    /**
     * Sets callid_nmbr
     *
     * @param string $callid_nmbr callid_nmbr
     *
     * @return self
     */
    public function setCallidNmbr($callid_nmbr)
    {
        if (is_null($callid_nmbr)) {
            throw new \InvalidArgumentException('non-nullable callid_nmbr cannot be null');
        }
        $this->container['callid_nmbr'] = $callid_nmbr;

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
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state_code
     *
     * @return string
     */
    public function getStateCode()
    {
        return $this->container['state_code'];
    }

    /**
     * Sets state_code
     *
     * @param string $state_code state_code
     *
     * @return self
     */
    public function setStateCode($state_code)
    {
        if (is_null($state_code)) {
            throw new \InvalidArgumentException('non-nullable state_code cannot be null');
        }
        $this->container['state_code'] = $state_code;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string $zip zip
     *
     * @return self
     */
    public function setZip($zip)
    {
        if (is_null($zip)) {
            throw new \InvalidArgumentException('non-nullable zip cannot be null');
        }
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code country_code
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

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
     * Gets public_ip
     *
     * @return string
     */
    public function getPublicIp()
    {
        return $this->container['public_ip'];
    }

    /**
     * Sets public_ip
     *
     * @param string $public_ip public_ip
     *
     * @return self
     */
    public function setPublicIp($public_ip)
    {
        if (is_null($public_ip)) {
            throw new \InvalidArgumentException('non-nullable public_ip cannot be null');
        }
        $this->container['public_ip'] = $public_ip;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action action
     *
     * @return self
     */
    public function setAction($action)
    {
        if (is_null($action)) {
            throw new \InvalidArgumentException('non-nullable action cannot be null');
        }
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets singular
     *
     * @return int
     */
    public function getSingular()
    {
        return $this->container['singular'];
    }

    /**
     * Sets singular
     *
     * @param int $singular singular
     *
     * @return self
     */
    public function setSingular($singular)
    {
        if (is_null($singular)) {
            throw new \InvalidArgumentException('non-nullable singular cannot be null');
        }
        $this->container['singular'] = $singular;

        return $this;
    }

    /**
     * Gets controller
     *
     * @return string
     */
    public function getController()
    {
        return $this->container['controller'];
    }

    /**
     * Sets controller
     *
     * @param string $controller controller
     *
     * @return self
     */
    public function setController($controller)
    {
        if (is_null($controller)) {
            throw new \InvalidArgumentException('non-nullable controller cannot be null');
        }
        $this->container['controller'] = $controller;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format format
     *
     * @return self
     */
    public function setFormat($format)
    {
        if (is_null($format)) {
            throw new \InvalidArgumentException('non-nullable format cannot be null');
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets api_ver
     *
     * @return string
     */
    public function getApiVer()
    {
        return $this->container['api_ver'];
    }

    /**
     * Sets api_ver
     *
     * @param string $api_ver api_ver
     *
     * @return self
     */
    public function setApiVer($api_ver)
    {
        if (is_null($api_ver)) {
            throw new \InvalidArgumentException('non-nullable api_ver cannot be null');
        }
        $this->container['api_ver'] = $api_ver;

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


