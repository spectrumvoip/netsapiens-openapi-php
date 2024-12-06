# # Vmailnag

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | This is the main organization name. This is used to link resource to its group/tenant/organization/enterprise. ~ and * can be used alone in special cases to mean My Domain (~) and All Domains (\\*). | [optional]
**user** | **string** | This is the main user extension for the user account. | [optional]
**voicemail_reminder_phonecall_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**voicemail_reminder_phonecall_phonenumber_array** | **int[]** | Phone reminder numbers | [optional]
**voicemail_reminder_sms_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**voicemail_reminder_sms_phonenumber_array** | **int[]** | SMS reminder numbers | [optional]
**voicemail_reminder_email_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**voicemail_reminder_email_address_array** | **string[]** | Email reminder addresses | [optional]
**voicemail_reminder_interval_minutes** | **int** | Interval of reminders (minutes) | [optional]
**voicemail_reminder_last_sent** | **int** | Timestamp of last sent reminder | [optional] [readonly]
**voicemail_reminder_control_server** | **string** | Current server managing the reminders for the user | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
