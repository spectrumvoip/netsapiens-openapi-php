<?php
/**
 * AutoAttendantTierOptionAutoAttendantAudio
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
 * AutoAttendantTierOptionAutoAttendantAudio Class Doc Comment
 *
 * @category Class
 * @package  SpectrumVoip\\\\NetSapiens
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AutoAttendantTierOptionAutoAttendantAudio implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AutoAttendantTierOption_auto_attendant_audio';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'filename' => 'string',
        'ordinal_order' => 'int',
        'file_duration_seconds' => 'int',
        'file_size_kilobytes' => 'string',
        'file_access_url' => 'string',
        'file_script_text' => 'string',
        'text_to_speech_voice_id' => 'string',
        'text_to_speech_language' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'filename' => null,
        'ordinal_order' => null,
        'file_duration_seconds' => null,
        'file_size_kilobytes' => null,
        'file_access_url' => null,
        'file_script_text' => null,
        'text_to_speech_voice_id' => null,
        'text_to_speech_language' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'filename' => false,
        'ordinal_order' => false,
        'file_duration_seconds' => false,
        'file_size_kilobytes' => false,
        'file_access_url' => false,
        'file_script_text' => false,
        'text_to_speech_voice_id' => false,
        'text_to_speech_language' => false
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
        'filename' => 'filename',
        'ordinal_order' => 'ordinal-order',
        'file_duration_seconds' => 'file-duration-seconds',
        'file_size_kilobytes' => 'file-size-kilobytes',
        'file_access_url' => 'file-access-url',
        'file_script_text' => 'file-script-text',
        'text_to_speech_voice_id' => 'text-to-speech-voice-id',
        'text_to_speech_language' => 'text-to-speech-language'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'filename' => 'setFilename',
        'ordinal_order' => 'setOrdinalOrder',
        'file_duration_seconds' => 'setFileDurationSeconds',
        'file_size_kilobytes' => 'setFileSizeKilobytes',
        'file_access_url' => 'setFileAccessUrl',
        'file_script_text' => 'setFileScriptText',
        'text_to_speech_voice_id' => 'setTextToSpeechVoiceId',
        'text_to_speech_language' => 'setTextToSpeechLanguage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'filename' => 'getFilename',
        'ordinal_order' => 'getOrdinalOrder',
        'file_duration_seconds' => 'getFileDurationSeconds',
        'file_size_kilobytes' => 'getFileSizeKilobytes',
        'file_access_url' => 'getFileAccessUrl',
        'file_script_text' => 'getFileScriptText',
        'text_to_speech_voice_id' => 'getTextToSpeechVoiceId',
        'text_to_speech_language' => 'getTextToSpeechLanguage'
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
        $this->setIfExists('filename', $data ?? [], null);
        $this->setIfExists('ordinal_order', $data ?? [], null);
        $this->setIfExists('file_duration_seconds', $data ?? [], null);
        $this->setIfExists('file_size_kilobytes', $data ?? [], null);
        $this->setIfExists('file_access_url', $data ?? [], null);
        $this->setIfExists('file_script_text', $data ?? [], null);
        $this->setIfExists('text_to_speech_voice_id', $data ?? [], 'en-US-Wavenet-C');
        $this->setIfExists('text_to_speech_language', $data ?? [], 'en_US');
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
     * Gets filename
     *
     * @return string|null
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string|null $filename This is the filename without and path or folder. Should end in .wav
     *
     * @return self
     */
    public function setFilename($filename)
    {
        if (is_null($filename)) {
            throw new \InvalidArgumentException('non-nullable filename cannot be null');
        }
        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets ordinal_order
     *
     * @return int|null
     */
    public function getOrdinalOrder()
    {
        return $this->container['ordinal_order'];
    }

    /**
     * Sets ordinal_order
     *
     * @param int|null $ordinal_order This is the index of the audio file.
     *
     * @return self
     */
    public function setOrdinalOrder($ordinal_order)
    {
        if (is_null($ordinal_order)) {
            throw new \InvalidArgumentException('non-nullable ordinal_order cannot be null');
        }
        $this->container['ordinal_order'] = $ordinal_order;

        return $this;
    }

    /**
     * Gets file_duration_seconds
     *
     * @return int|null
     */
    public function getFileDurationSeconds()
    {
        return $this->container['file_duration_seconds'];
    }

    /**
     * Sets file_duration_seconds
     *
     * @param int|null $file_duration_seconds This value is the length of the file in seconds.
     *
     * @return self
     */
    public function setFileDurationSeconds($file_duration_seconds)
    {
        if (is_null($file_duration_seconds)) {
            throw new \InvalidArgumentException('non-nullable file_duration_seconds cannot be null');
        }
        $this->container['file_duration_seconds'] = $file_duration_seconds;

        return $this;
    }

    /**
     * Gets file_size_kilobytes
     *
     * @return string|null
     */
    public function getFileSizeKilobytes()
    {
        return $this->container['file_size_kilobytes'];
    }

    /**
     * Sets file_size_kilobytes
     *
     * @param string|null $file_size_kilobytes This value will be a formated filesize of the file in kilobytes
     *
     * @return self
     */
    public function setFileSizeKilobytes($file_size_kilobytes)
    {
        if (is_null($file_size_kilobytes)) {
            throw new \InvalidArgumentException('non-nullable file_size_kilobytes cannot be null');
        }
        $this->container['file_size_kilobytes'] = $file_size_kilobytes;

        return $this;
    }

    /**
     * Gets file_access_url
     *
     * @return string|null
     */
    public function getFileAccessUrl()
    {
        return $this->container['file_access_url'];
    }

    /**
     * Sets file_access_url
     *
     * @param string|null $file_access_url This will be URL of the file for remote playback.
     *
     * @return self
     */
    public function setFileAccessUrl($file_access_url)
    {
        if (is_null($file_access_url)) {
            throw new \InvalidArgumentException('non-nullable file_access_url cannot be null');
        }
        $this->container['file_access_url'] = $file_access_url;

        return $this;
    }

    /**
     * Gets file_script_text
     *
     * @return string|null
     */
    public function getFileScriptText()
    {
        return $this->container['file_script_text'];
    }

    /**
     * Sets file_script_text
     *
     * @param string|null $file_script_text This is the script that was used for text to speech and also used to create a new file.
     *
     * @return self
     */
    public function setFileScriptText($file_script_text)
    {
        if (is_null($file_script_text)) {
            throw new \InvalidArgumentException('non-nullable file_script_text cannot be null');
        }
        $this->container['file_script_text'] = $file_script_text;

        return $this;
    }

    /**
     * Gets text_to_speech_voice_id
     *
     * @return string|null
     */
    public function getTextToSpeechVoiceId()
    {
        return $this->container['text_to_speech_voice_id'];
    }

    /**
     * Sets text_to_speech_voice_id
     *
     * @param string|null $text_to_speech_voice_id This is the voice id used when using text to speech.
     *
     * @return self
     */
    public function setTextToSpeechVoiceId($text_to_speech_voice_id)
    {
        if (is_null($text_to_speech_voice_id)) {
            throw new \InvalidArgumentException('non-nullable text_to_speech_voice_id cannot be null');
        }
        $this->container['text_to_speech_voice_id'] = $text_to_speech_voice_id;

        return $this;
    }

    /**
     * Gets text_to_speech_language
     *
     * @return string|null
     */
    public function getTextToSpeechLanguage()
    {
        return $this->container['text_to_speech_language'];
    }

    /**
     * Sets text_to_speech_language
     *
     * @param string|null $text_to_speech_language This is the voice language when using TTS.
     *
     * @return self
     */
    public function setTextToSpeechLanguage($text_to_speech_language)
    {
        if (is_null($text_to_speech_language)) {
            throw new \InvalidArgumentException('non-nullable text_to_speech_language cannot be null');
        }
        $this->container['text_to_speech_language'] = $text_to_speech_language;

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


