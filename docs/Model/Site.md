# # Site

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**synchronous** | [**\SpectrumVoip\\\\NetSapiens\Model\Synchronous**](Synchronous.md) |  | [optional]
**site** | **string** |  |
**login_username** | **string** | This is the login for the user used to access the portals and other applications. The default will be [user]@[domain] if not set otherwise.  This value is required to be unique across the entire system so 409 will be returned if not unique. | [optional]
**time_zone** | [**\SpectrumVoip\\\\NetSapiens\Model\TimeZone**](TimeZone.md) | The timezone which the meeting was created with | [optional]
**dial_plan** | **string** | This is the dial plan set for the user. Dial plans are used to control action and forward options that will be used when dialing out from the user. | [optional]
**dial_policy** | **string** | This value is the dial policy/permission for this user whch will control the destinations this user can dial. Generally dial policys are preconfigured at system level and selected at user level. | [optional]
**voicemail_user_control_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**phone_numbers_to_allow_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**phone_numbers_to_reject_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**call_screening_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**language_token** | **string** | This is the language that is set for the user to be used for portal viewing. | [optional] [default to 'en_US']
**limits_max_data_storage_kilobytes** | **int** | This is the maximum value in kilobytes that is allowed to be stored in the user&#39;s voicemail, audio greetings and fax storage. | [optional]
**limits_max_active_calls_total** | **int** | This is the maximum number of active calls allowed for the user. | [optional]
**directory_annouce_in_dial_by_name_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**voicemail_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**voicemail_receive_broadcast_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**reject_anonymous_calls_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**voicemail_playback_announce_datetime_received** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**voicemail_playback_announce_caller_id** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**voicemail_playback_sort_newest_to_oldest** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**caller_id_number** | **int** | This is the main caller id number for the user to be used for outbound calls outside of the domain. | [optional]
**caller_id_name** | **string** | This is the main caller id name for the user to be used for outbound calls outside of the domain. | [optional]
**caller_id_number_emergency** | **int** | This is the main caller id that will be used for emergency calls when placed by the user. | [optional]
**area_code** | **int** | This is a area code for the user. I will be used when user dial&#39;s 7 digits to translate it to full 10 or 11 digit number. | [optional]
**directory_name_visible_in_list_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**emergency_address_id** | **string** | Value will need to be an exact match to an address-id which links to a address for DLR (dynamic location routing) for emergency calling | [optional]
**music_on_hold_randomized_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**active_calls_total_current** | **int** | This read only setting is the current active call count for this user. | [optional] [readonly]
**recording_configuration** | [**\SpectrumVoip\\\\NetSapiens\Model\RecordingConfiguration**](RecordingConfiguration.md) |  | [optional]
**created_datetime** | **\DateTime** | This datetime is when the user was created. | [optional] [readonly]
**last_modified_datetime** | **\DateTime** | This datetime is when the user was last modified. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
