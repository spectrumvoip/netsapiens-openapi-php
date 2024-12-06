# # MessageSend

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** |  |
**message** | **string** | This is the text that will be sent as the message |
**destination** | [**\SpectrumVoip\\\\NetSapiens\Model\SendMessageChatRequestDestination**](SendMessageChatRequestDestination.md) |  |
**from_number** | **string** | This is used only for SMS. This is the user&#39;s number used to send outbound for SMS | [optional]
**data** | **string** | This is used only for media chat or MMS. This is the base64 data of the media file to be sent | [optional]
**mime_type** | **string** |  | [optional]
**size** | **int** | This is used only for media chat or MMS. This is the size in bytes of the media file being sent | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
