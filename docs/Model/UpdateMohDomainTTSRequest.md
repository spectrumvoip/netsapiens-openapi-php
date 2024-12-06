# # UpdateMohDomainTTSRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**synchronous** | [**\SpectrumVoip\\\\NetSapiens\Model\Synchronous**](Synchronous.md) |  |
**script** | **string** | This is a simple explanation of what the audio is and can include what is said in the audio file for explanation. |
**voice_language** | **string** | This is the language that can be requested when using TTS feature. Leave of to have API lookup configs from the defaults or domain specific configs. | [optional] [default to 'en-US']
**voice_id** | **string** | This value will allow you to select the voice to be used for TTS applications. Value must be valid or will cause errors. leave off request to have the API lookup defaults from system and/or domain. | [optional] [default to 'en-US-Wavenet-C']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
