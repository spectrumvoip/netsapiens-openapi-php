# # Message

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | [**\SpectrumVoip\\\\NetSapiens\Model\MessageId**](MessageId.md) |  |
**timestamp** | [**\SpectrumVoip\\\\NetSapiens\Model\Timestamp**](Timestamp.md) | This is when the message was recieved or sent |
**type** | **string** |  |
**domain** | **string** | This is the main organization name. This is used to link resource to its group/tenant/organization/enterprise. ~ and * can be used alone in special cases to mean My Domain (~) and All Domains (\\*). |
**direction** | **string** | This is the direction of the message. Either term for outbound or orig for inbound |
**from_number** | [**\SpectrumVoip\\\\NetSapiens\Model\MessageFromNumber**](MessageFromNumber.md) |  | [optional]
**from_user_id** | **string** | This is the User ID the message came from. Not set for offnet numbers |
**from_video_attendee_id** | **string** | This is the video attendee id the message came from if sent within a video call |
**from_user_agent** | **string** | This is the HTTP USER AGENT the message came from |
**dialed** | **string** | This is the number that this message is sent to. This can be comma seperated list of numbers if more than one in a group MMS session. Or null for chat sessions |
**text** | [**\SpectrumVoip\\\\NetSapiens\Model\MessageText**](MessageText.md) |  |
**terminating_user_id** | **string** | This is the receiving User ID of the message |
**terminating_number** | **string** | This is the number that this message is sent to. This can be comma seperated list of numbers if more than one in a group MMS session. Or null for chat sessions |
**status** | **string** | This is the status of the message |
**video_instance_id** | **string** | This is the video instance ID of the message if the message was sent from a video session. | [optional]
**media_type** | **string** | This is the media type of the message if applicable |
**media_size** | **int** | This is the media size of the message if applicable |
**deleted_datetime** | [**\SpectrumVoip\\\\NetSapiens\Model\Timestamp**](Timestamp.md) | This is when the message was recieved or sent | [optional]
**messagesession_reciever_hostname** | **string** | This is the receiver hostname for the message |
**messagesession_id** | **string** | This is the messagesession ID for this message |
**messagesession_participants** | **string** | This is the comma seperated participants of the messagesession associated with this message |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
