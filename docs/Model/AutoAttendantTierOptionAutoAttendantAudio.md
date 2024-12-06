# # AutoAttendantTierOptionAutoAttendantAudio

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**filename** | **string** | This is the filename without and path or folder. Should end in .wav | [optional]
**ordinal_order** | **int** | This is the index of the audio file. | [optional]
**file_duration_seconds** | **int** | This value is the length of the file in seconds. | [optional]
**file_size_kilobytes** | **string** | This value will be a formated filesize of the file in kilobytes | [optional]
**file_access_url** | **string** | This will be URL of the file for remote playback. | [optional]
**file_script_text** | **string** | This is the script that was used for text to speech and also used to create a new file. | [optional]
**text_to_speech_voice_id** | **string** | This is the voice id used when using text to speech. | [optional] [default to 'en-US-Wavenet-C']
**text_to_speech_language** | **string** | This is the voice language when using TTS. | [optional] [default to 'en_US']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
