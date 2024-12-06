# # Messagesession

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | **string** | This is the main user extension for the user account. |
**domain** | **string** | This is the main organization name. This is used to link resource to its group/tenant/organization/enterprise. ~ and * can be used alone in special cases to mean My Domain (~) and All Domains (\\*). |
**messagesession_remote** | [**\SpectrumVoip\\\\NetSapiens\Model\MessagesessionMessagesessionRemote**](MessagesessionMessagesessionRemote.md) |  |
**messagesession_muted** | **string** | This is whether or not the message session is muted or not. \&quot;yes\&quot; or \&quot;no\&quot; |
**messagesession_id** | **string** | This is the identifier for the session |
**messagesession_sms_number** | [**\SpectrumVoip\\\\NetSapiens\Model\MessagesessionMessagesessionSmsNumber**](MessagesessionMessagesessionSmsNumber.md) |  |
**messagesession_last_datetime** | **string** | This is the last time the session had an inbound or outbound message |
**messagesession_start_datetime** | **string** | This is the when the message session started |
**messagesession_last_message** | [**\SpectrumVoip\\\\NetSapiens\Model\MessagesessionMessagesessionLastMessage**](MessagesessionMessagesessionLastMessage.md) |  |
**messagesession_last_sender** | **string** | This shows the UID or the phonenumber of who was the last message sender | [readonly]
**messagesession_last_status** | **string** | This is the last status of the messagesession. Will contain read/unread status | [readonly]
**messagesession_last_email_reminder_datetime** | **string** | This is when the last email reminder was sent out notifiying the user of a missed message | [readonly]
**messagesession_reciever_hostname** | **string** | This is the hostname of the last received message | [readonly]
**messagesession_queue_termination** | **string** | This is which SMS queue the messagesession is assigned to | [readonly]
**messagesession_queue_status** | **string** | This is the queue status of the messagesession | [readonly]
**messagesession_queue_session_id** | **string** | This is the queue session id placed on the messagesession | [readonly]
**messagesession_agent_start_datetime** | **string** | This is when the messagesession was started by the agent | [readonly]
**messagesession_last_type** | **string** |  |
**messagesession_last_media_type** | **string** | This is the last media type of the messagesession |
**messagesession_last_media_size** | **int** | This is the size of the last media of the messagesession |
**messagesession_type** | **string** | This is the type of messagesession |
**messagesession_name** | **string** | This is the name of the messagesession. Names can be assigned to group chats | [optional]
**messagesession_participants** | **string** | This is a comma seperated list of participants within a group chat or group sms messagesession | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
