# # Recording

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**call_recording_status** | **string** | Status of the recording | [optional]
**call_id** | **string** | Call-ID associated with the recording | [optional]
**call_recording_started_datetime** | **string** | Date &amp; time the recording started | [optional]
**call_recording_ended_datetime** | **string** | Date &amp; time the recording stopped | [optional]
**call_recording_remote_wav** | **string** | Thie file location on the remote archive path. | [optional]
**call_recording_remote_wav_size_kilobytes** | **int** | The file size in bytes which, if set, suggests that the file is located in remote storage | [optional]
**call_recording_remote_storage_config_id** | **string** | The config id for the file &#39;s remote location. | [optional]
**call_recording_match_pattern** | **string** | This is the case id or the recording match the was used to trigger the request. | [optional]
**call_recording_retrieved_datetime** | **string** | This is the time at which the recoridng was requested. | [optional]
**file_duration_seconds** | **int** | The duration of the recording in seconds. | [optional]
**file_access_url** | **string** | The main url to access the recording. | [optional]
**geo_call_id** | **string** | Corresponding Orig Call ID, if call_id is for a geo tunneled entry | [optional]
**file_size_kilobytes** | **int** | The size of the recording in kilobytes | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
