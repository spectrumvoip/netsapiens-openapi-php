<?php
/**
 * UpdateGreetingTTSRequest
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
 * UpdateGreetingTTSRequest Class Doc Comment
 *
 * @category Class
 * @package  SpectrumVoip\\\\NetSapiens
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateGreetingTTSRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateGreetingTTS_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'synchronous' => '\SpectrumVoip\\\\NetSapiens\Model\Synchronous',
        'script' => 'string',
        'convert' => 'string',
        'encoding' => 'string',
        'base64_file' => 'string',
        'voice_language' => 'string',
        'voice_id' => 'string'
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
        'script' => null,
        'convert' => null,
        'encoding' => null,
        'base64_file' => null,
        'voice_language' => null,
        'voice_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'synchronous' => false,
        'script' => false,
        'convert' => false,
        'encoding' => false,
        'base64_file' => false,
        'voice_language' => false,
        'voice_id' => false
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
        'script' => 'script',
        'convert' => 'convert',
        'encoding' => 'encoding',
        'base64_file' => 'base64_file',
        'voice_language' => 'voice_language',
        'voice_id' => 'voice_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'synchronous' => 'setSynchronous',
        'script' => 'setScript',
        'convert' => 'setConvert',
        'encoding' => 'setEncoding',
        'base64_file' => 'setBase64File',
        'voice_language' => 'setVoiceLanguage',
        'voice_id' => 'setVoiceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'synchronous' => 'getSynchronous',
        'script' => 'getScript',
        'convert' => 'getConvert',
        'encoding' => 'getEncoding',
        'base64_file' => 'getBase64File',
        'voice_language' => 'getVoiceLanguage',
        'voice_id' => 'getVoiceId'
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

    public const CONVERT_YES = 'yes';
    public const CONVERT_NO = 'no';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConvertAllowableValues()
    {
        return [
            self::CONVERT_YES,
            self::CONVERT_NO,
        ];
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
        $this->setIfExists('script', $data ?? [], null);
        $this->setIfExists('convert', $data ?? [], 'no');
        $this->setIfExists('encoding', $data ?? [], null);
        $this->setIfExists('base64_file', $data ?? [], null);
        $this->setIfExists('voice_language', $data ?? [], 'en-US');
        $this->setIfExists('voice_id', $data ?? [], 'en-US-Wavenet-C');
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
        if ($this->container['script'] === null) {
            $invalidProperties[] = "'script' can't be null";
        }
        $allowedValues = $this->getConvertAllowableValues();
        if (!is_null($this->container['convert']) && !in_array($this->container['convert'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'convert', must be one of '%s'",
                $this->container['convert'],
                implode("', '", $allowedValues)
            );
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
     * Gets script
     *
     * @return string
     */
    public function getScript()
    {
        return $this->container['script'];
    }

    /**
     * Sets script
     *
     * @param string $script This is a simple explanation of what the audio is and can include what is said in the audio file for explanation.
     *
     * @return self
     */
    public function setScript($script)
    {
        if (is_null($script)) {
            throw new \InvalidArgumentException('non-nullable script cannot be null');
        }
        $this->container['script'] = $script;

        return $this;
    }

    /**
     * Gets convert
     *
     * @return string|null
     */
    public function getConvert()
    {
        return $this->container['convert'];
    }

    /**
     * Sets convert
     *
     * @param string|null $convert Setting yes will allow the API to attempt to convert the file from accepted formats into the correct format for media playback
     *
     * @return self
     */
    public function setConvert($convert)
    {
        if (is_null($convert)) {
            throw new \InvalidArgumentException('non-nullable convert cannot be null');
        }
        $allowedValues = $this->getConvertAllowableValues();
        if (!in_array($convert, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'convert', must be one of '%s'",
                    $convert,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['convert'] = $convert;

        return $this;
    }

    /**
     * Gets encoding
     *
     * @return string|null
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     *
     * @param string|null $encoding Used when providing base64 encoded data to give the content tupe of the file.
     *
     * @return self
     */
    public function setEncoding($encoding)
    {
        if (is_null($encoding)) {
            throw new \InvalidArgumentException('non-nullable encoding cannot be null');
        }
        $this->container['encoding'] = $encoding;

        return $this;
    }

    /**
     * Gets base64_file
     *
     * @return string|null
     */
    public function getBase64File()
    {
        return $this->container['base64_file'];
    }

    /**
     * Sets base64_file
     *
     * @param string|null $base64_file This is a base64 encoded string formated without line breaks or spaces.
     *
     * @return self
     */
    public function setBase64File($base64_file)
    {
        if (is_null($base64_file)) {
            throw new \InvalidArgumentException('non-nullable base64_file cannot be null');
        }
        $this->container['base64_file'] = $base64_file;

        return $this;
    }

    /**
     * Gets voice_language
     *
     * @return string|null
     */
    public function getVoiceLanguage()
    {
        return $this->container['voice_language'];
    }

    /**
     * Sets voice_language
     *
     * @param string|null $voice_language This is the language that can be requested when using TTS feature. Leave of to have API lookup configs from the defaults or domain specific configs.
     *
     * @return self
     */
    public function setVoiceLanguage($voice_language)
    {
        if (is_null($voice_language)) {
            throw new \InvalidArgumentException('non-nullable voice_language cannot be null');
        }
        $this->container['voice_language'] = $voice_language;

        return $this;
    }

    /**
     * Gets voice_id
     *
     * @return string|null
     */
    public function getVoiceId()
    {
        return $this->container['voice_id'];
    }

    /**
     * Sets voice_id
     *
     * @param string|null $voice_id This value will allow you to select the voice to be used for TTS applications. Value must be valid or will cause errors. leave off request to have the API lookup defaults from system and/or domain.
     *
     * @return self
     */
    public function setVoiceId($voice_id)
    {
        if (is_null($voice_id)) {
            throw new \InvalidArgumentException('non-nullable voice_id cannot be null');
        }
        $this->container['voice_id'] = $voice_id;

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


