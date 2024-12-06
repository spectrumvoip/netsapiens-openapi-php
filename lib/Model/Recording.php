<?php
/**
 * Recording
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
 * Recording Class Doc Comment
 *
 * @category Class
 * @package  SpectrumVoip\\\\NetSapiens
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Recording implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Recording';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'call_recording_status' => 'string',
        'call_id' => 'string',
        'call_recording_started_datetime' => 'string',
        'call_recording_ended_datetime' => 'string',
        'call_recording_remote_wav' => 'string',
        'call_recording_remote_wav_size_kilobytes' => 'int',
        'call_recording_remote_storage_config_id' => 'string',
        'call_recording_match_pattern' => 'string',
        'call_recording_retrieved_datetime' => 'string',
        'file_duration_seconds' => 'int',
        'file_access_url' => 'string',
        'geo_call_id' => 'string',
        'file_size_kilobytes' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'call_recording_status' => null,
        'call_id' => null,
        'call_recording_started_datetime' => null,
        'call_recording_ended_datetime' => null,
        'call_recording_remote_wav' => null,
        'call_recording_remote_wav_size_kilobytes' => null,
        'call_recording_remote_storage_config_id' => null,
        'call_recording_match_pattern' => null,
        'call_recording_retrieved_datetime' => null,
        'file_duration_seconds' => null,
        'file_access_url' => null,
        'geo_call_id' => null,
        'file_size_kilobytes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'call_recording_status' => false,
        'call_id' => false,
        'call_recording_started_datetime' => false,
        'call_recording_ended_datetime' => false,
        'call_recording_remote_wav' => false,
        'call_recording_remote_wav_size_kilobytes' => false,
        'call_recording_remote_storage_config_id' => false,
        'call_recording_match_pattern' => false,
        'call_recording_retrieved_datetime' => false,
        'file_duration_seconds' => false,
        'file_access_url' => false,
        'geo_call_id' => false,
        'file_size_kilobytes' => false
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
        'call_recording_status' => 'call-recording-status',
        'call_id' => 'call-id',
        'call_recording_started_datetime' => 'call-recording-started-datetime',
        'call_recording_ended_datetime' => 'call-recording-ended-datetime',
        'call_recording_remote_wav' => 'call-recording-remote-wav',
        'call_recording_remote_wav_size_kilobytes' => 'call-recording-remote-wav-size-kilobytes',
        'call_recording_remote_storage_config_id' => 'call-recording-remote-storage-config-id',
        'call_recording_match_pattern' => 'call-recording-match-pattern',
        'call_recording_retrieved_datetime' => 'call-recording-retrieved-datetime',
        'file_duration_seconds' => 'file-duration-seconds',
        'file_access_url' => 'file-access-url',
        'geo_call_id' => 'geo-call-id',
        'file_size_kilobytes' => 'file-size-kilobytes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'call_recording_status' => 'setCallRecordingStatus',
        'call_id' => 'setCallId',
        'call_recording_started_datetime' => 'setCallRecordingStartedDatetime',
        'call_recording_ended_datetime' => 'setCallRecordingEndedDatetime',
        'call_recording_remote_wav' => 'setCallRecordingRemoteWav',
        'call_recording_remote_wav_size_kilobytes' => 'setCallRecordingRemoteWavSizeKilobytes',
        'call_recording_remote_storage_config_id' => 'setCallRecordingRemoteStorageConfigId',
        'call_recording_match_pattern' => 'setCallRecordingMatchPattern',
        'call_recording_retrieved_datetime' => 'setCallRecordingRetrievedDatetime',
        'file_duration_seconds' => 'setFileDurationSeconds',
        'file_access_url' => 'setFileAccessUrl',
        'geo_call_id' => 'setGeoCallId',
        'file_size_kilobytes' => 'setFileSizeKilobytes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'call_recording_status' => 'getCallRecordingStatus',
        'call_id' => 'getCallId',
        'call_recording_started_datetime' => 'getCallRecordingStartedDatetime',
        'call_recording_ended_datetime' => 'getCallRecordingEndedDatetime',
        'call_recording_remote_wav' => 'getCallRecordingRemoteWav',
        'call_recording_remote_wav_size_kilobytes' => 'getCallRecordingRemoteWavSizeKilobytes',
        'call_recording_remote_storage_config_id' => 'getCallRecordingRemoteStorageConfigId',
        'call_recording_match_pattern' => 'getCallRecordingMatchPattern',
        'call_recording_retrieved_datetime' => 'getCallRecordingRetrievedDatetime',
        'file_duration_seconds' => 'getFileDurationSeconds',
        'file_access_url' => 'getFileAccessUrl',
        'geo_call_id' => 'getGeoCallId',
        'file_size_kilobytes' => 'getFileSizeKilobytes'
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
        $this->setIfExists('call_recording_status', $data ?? [], null);
        $this->setIfExists('call_id', $data ?? [], null);
        $this->setIfExists('call_recording_started_datetime', $data ?? [], null);
        $this->setIfExists('call_recording_ended_datetime', $data ?? [], null);
        $this->setIfExists('call_recording_remote_wav', $data ?? [], null);
        $this->setIfExists('call_recording_remote_wav_size_kilobytes', $data ?? [], null);
        $this->setIfExists('call_recording_remote_storage_config_id', $data ?? [], null);
        $this->setIfExists('call_recording_match_pattern', $data ?? [], null);
        $this->setIfExists('call_recording_retrieved_datetime', $data ?? [], null);
        $this->setIfExists('file_duration_seconds', $data ?? [], null);
        $this->setIfExists('file_access_url', $data ?? [], null);
        $this->setIfExists('geo_call_id', $data ?? [], null);
        $this->setIfExists('file_size_kilobytes', $data ?? [], null);
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
     * Gets call_recording_status
     *
     * @return string|null
     */
    public function getCallRecordingStatus()
    {
        return $this->container['call_recording_status'];
    }

    /**
     * Sets call_recording_status
     *
     * @param string|null $call_recording_status Status of the recording
     *
     * @return self
     */
    public function setCallRecordingStatus($call_recording_status)
    {
        if (is_null($call_recording_status)) {
            throw new \InvalidArgumentException('non-nullable call_recording_status cannot be null');
        }
        $this->container['call_recording_status'] = $call_recording_status;

        return $this;
    }

    /**
     * Gets call_id
     *
     * @return string|null
     */
    public function getCallId()
    {
        return $this->container['call_id'];
    }

    /**
     * Sets call_id
     *
     * @param string|null $call_id Call-ID associated with the recording
     *
     * @return self
     */
    public function setCallId($call_id)
    {
        if (is_null($call_id)) {
            throw new \InvalidArgumentException('non-nullable call_id cannot be null');
        }
        $this->container['call_id'] = $call_id;

        return $this;
    }

    /**
     * Gets call_recording_started_datetime
     *
     * @return string|null
     */
    public function getCallRecordingStartedDatetime()
    {
        return $this->container['call_recording_started_datetime'];
    }

    /**
     * Sets call_recording_started_datetime
     *
     * @param string|null $call_recording_started_datetime Date & time the recording started
     *
     * @return self
     */
    public function setCallRecordingStartedDatetime($call_recording_started_datetime)
    {
        if (is_null($call_recording_started_datetime)) {
            throw new \InvalidArgumentException('non-nullable call_recording_started_datetime cannot be null');
        }
        $this->container['call_recording_started_datetime'] = $call_recording_started_datetime;

        return $this;
    }

    /**
     * Gets call_recording_ended_datetime
     *
     * @return string|null
     */
    public function getCallRecordingEndedDatetime()
    {
        return $this->container['call_recording_ended_datetime'];
    }

    /**
     * Sets call_recording_ended_datetime
     *
     * @param string|null $call_recording_ended_datetime Date & time the recording stopped
     *
     * @return self
     */
    public function setCallRecordingEndedDatetime($call_recording_ended_datetime)
    {
        if (is_null($call_recording_ended_datetime)) {
            throw new \InvalidArgumentException('non-nullable call_recording_ended_datetime cannot be null');
        }
        $this->container['call_recording_ended_datetime'] = $call_recording_ended_datetime;

        return $this;
    }

    /**
     * Gets call_recording_remote_wav
     *
     * @return string|null
     */
    public function getCallRecordingRemoteWav()
    {
        return $this->container['call_recording_remote_wav'];
    }

    /**
     * Sets call_recording_remote_wav
     *
     * @param string|null $call_recording_remote_wav Thie file location on the remote archive path.
     *
     * @return self
     */
    public function setCallRecordingRemoteWav($call_recording_remote_wav)
    {
        if (is_null($call_recording_remote_wav)) {
            throw new \InvalidArgumentException('non-nullable call_recording_remote_wav cannot be null');
        }
        $this->container['call_recording_remote_wav'] = $call_recording_remote_wav;

        return $this;
    }

    /**
     * Gets call_recording_remote_wav_size_kilobytes
     *
     * @return int|null
     */
    public function getCallRecordingRemoteWavSizeKilobytes()
    {
        return $this->container['call_recording_remote_wav_size_kilobytes'];
    }

    /**
     * Sets call_recording_remote_wav_size_kilobytes
     *
     * @param int|null $call_recording_remote_wav_size_kilobytes The file size in bytes which, if set, suggests that the file is located in remote storage
     *
     * @return self
     */
    public function setCallRecordingRemoteWavSizeKilobytes($call_recording_remote_wav_size_kilobytes)
    {
        if (is_null($call_recording_remote_wav_size_kilobytes)) {
            throw new \InvalidArgumentException('non-nullable call_recording_remote_wav_size_kilobytes cannot be null');
        }
        $this->container['call_recording_remote_wav_size_kilobytes'] = $call_recording_remote_wav_size_kilobytes;

        return $this;
    }

    /**
     * Gets call_recording_remote_storage_config_id
     *
     * @return string|null
     */
    public function getCallRecordingRemoteStorageConfigId()
    {
        return $this->container['call_recording_remote_storage_config_id'];
    }

    /**
     * Sets call_recording_remote_storage_config_id
     *
     * @param string|null $call_recording_remote_storage_config_id The config id for the file 's remote location.
     *
     * @return self
     */
    public function setCallRecordingRemoteStorageConfigId($call_recording_remote_storage_config_id)
    {
        if (is_null($call_recording_remote_storage_config_id)) {
            throw new \InvalidArgumentException('non-nullable call_recording_remote_storage_config_id cannot be null');
        }
        $this->container['call_recording_remote_storage_config_id'] = $call_recording_remote_storage_config_id;

        return $this;
    }

    /**
     * Gets call_recording_match_pattern
     *
     * @return string|null
     */
    public function getCallRecordingMatchPattern()
    {
        return $this->container['call_recording_match_pattern'];
    }

    /**
     * Sets call_recording_match_pattern
     *
     * @param string|null $call_recording_match_pattern This is the case id or the recording match the was used to trigger the request.
     *
     * @return self
     */
    public function setCallRecordingMatchPattern($call_recording_match_pattern)
    {
        if (is_null($call_recording_match_pattern)) {
            throw new \InvalidArgumentException('non-nullable call_recording_match_pattern cannot be null');
        }
        $this->container['call_recording_match_pattern'] = $call_recording_match_pattern;

        return $this;
    }

    /**
     * Gets call_recording_retrieved_datetime
     *
     * @return string|null
     */
    public function getCallRecordingRetrievedDatetime()
    {
        return $this->container['call_recording_retrieved_datetime'];
    }

    /**
     * Sets call_recording_retrieved_datetime
     *
     * @param string|null $call_recording_retrieved_datetime This is the time at which the recoridng was requested.
     *
     * @return self
     */
    public function setCallRecordingRetrievedDatetime($call_recording_retrieved_datetime)
    {
        if (is_null($call_recording_retrieved_datetime)) {
            throw new \InvalidArgumentException('non-nullable call_recording_retrieved_datetime cannot be null');
        }
        $this->container['call_recording_retrieved_datetime'] = $call_recording_retrieved_datetime;

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
     * @param int|null $file_duration_seconds The duration of the recording in seconds.
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
     * @param string|null $file_access_url The main url to access the recording.
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
     * Gets geo_call_id
     *
     * @return string|null
     */
    public function getGeoCallId()
    {
        return $this->container['geo_call_id'];
    }

    /**
     * Sets geo_call_id
     *
     * @param string|null $geo_call_id Corresponding Orig Call ID, if call_id is for a geo tunneled entry
     *
     * @return self
     */
    public function setGeoCallId($geo_call_id)
    {
        if (is_null($geo_call_id)) {
            throw new \InvalidArgumentException('non-nullable geo_call_id cannot be null');
        }
        $this->container['geo_call_id'] = $geo_call_id;

        return $this;
    }

    /**
     * Gets file_size_kilobytes
     *
     * @return int|null
     */
    public function getFileSizeKilobytes()
    {
        return $this->container['file_size_kilobytes'];
    }

    /**
     * Sets file_size_kilobytes
     *
     * @param int|null $file_size_kilobytes The size of the recording in kilobytes
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


