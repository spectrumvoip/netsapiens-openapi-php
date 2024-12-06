# # UpdateGreetingTTSRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**synchronous** | [**\SpectrumVoip\\\\NetSapiens\Model\Synchronous**](Synchronous.md) |  |
**script** | **string** | This is a simple explanation of what the audio is and can include what is said in the audio file for explanation. |
**convert** | **string** | Setting yes will allow the API to attempt to convert the file from accepted formats into the correct format for media playback | [optional] [default to 'no']
**encoding** | **string** | Used when providing base64 encoded data to give the content tupe of the file. | [optional]
**base64_file** | **string** | This is a base64 encoded string formated without line breaks or spaces. | [optional]
**voice_language** | **string** | This is the language that can be requested when using TTS feature. Leave of to have API lookup configs from the defaults or domain specific configs. | [optional] [default to 'en-US']
**voice_id** | **string** | This value will allow you to select the voice to be used for TTS applications. Value must be valid or will cause errors. leave off request to have the API lookup defaults from system and/or domain. | [optional] [default to 'en-US-Wavenet-C']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
