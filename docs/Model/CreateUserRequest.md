# # CreateUserRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**synchronous** | [**\SpectrumVoip\\\\NetSapiens\Model\Synchronous**](Synchronous.md) |  | [optional]
**user** | **string** | This is the main user extension for the user account. |
**name_first_name** | **string** | This is the first name for the user |
**name_last_name** | **string** | This is the last name for the user |
**login_username** | **string** | This is the login for the user used to access the portals and other applications. The default will be [user]@[domain] if not set otherwise.  This value is required to be unique across the entire system so 409 will be returned if not unique. | [optional]
**email_address** | **string** | This is the email adresses or list of email addresses sepertaed with a semi-colon. |
**user_scope** | [**\SpectrumVoip\\\\NetSapiens\Model\Scopes**](Scopes.md) | This is the scope that should be enforced in combination with the reseller, domain and user fields. it will be set using the scope used to create the subscription. |
**department** | **string** | This is the depertment that user belongs to in the domain. Can be any string to group users, a department is not require to be setup before in order to set it for a user. | [optional]
**site** | **string** | This is the site or location for this user. The site will group users that are at the same phyiscal location, but can be used for other grouping purposes as well. New users will inherit some settings from the site if the site was previously setup. If the site is not previously created then a new site will be created with the value given on new user create assuming the domain&#39;s max sites setting has remaining sites. | [optional]
**time_zone** | [**\SpectrumVoip\\\\NetSapiens\Model\TimeZone**](TimeZone.md) | The timezone which the meeting was created with | [optional]
**voicemail_login_pin** | **int** | This is the numberic pin that would be used by the user validating their account when connecting into voice IVR to check voicemail. | [optional]
**privacy** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**dial_plan** | **string** | This is the dial plan set for the user. Dial plans are used to control action and forward options that will be used when dialing out from the user. | [optional]
**dial_policy** | **string** | This value is the dial policy/permission for this user whch will control the destinations this user can dial. Generally dial policys are preconfigured at system level and selected at user level. | [optional]
**status_message** | **string** | This is is a value that is often set by the end user to show their current status, often a away message of some kind. | [optional]
**user_presence_status** | **string** | This is a read only presence status for the user that will be calculated by the core system based on registration, answer rules and active call status. | [optional] [readonly]
**directory_name_number_dtmf_mapping** | **int** | This is a 3 digit numberic mapping that correlates to the first 3 digits of a user&#39;s first or last name for dial by name directory. Example Smith would be \&quot;764\&quot; translating the letters to numbers using the normal phone number mappings. | [optional]
**voicemail_user_control_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**phone_numbers_to_allow_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**phone_numbers_to_reject_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**call_screening_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**ring_no_answer_timeout_seconds** | **int** | This time setting in seconds will controll how long a inbound call attempt will attempt to connect the call before stopping and attempting the next option which might be a forward setting in answer rules or voicemail if enabled. | [optional]
**language_token** | **string** | This is the language that is set for the user to be used for portal viewing. | [optional] [default to 'en_US']
**limits_max_data_storage_kilobytes** | **int** | This is the maximum value in kilobytes that is allowed to be stored in the user&#39;s voicemail, audio greetings and fax storage. | [optional]
**limits_max_active_calls_total** | **int** | This is the maximum number of active calls allowed for the user. | [optional]
**directory_annouce_in_dial_by_name_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**directory_override_order_duplicate_dtmf_mapping** | **int** | This value can be used in cases where multiple users have the same value for directory-name-number-dtmf-mapping, if they are the same then use this setting to set the order low to high for playback in dial by name directory menu. | [optional]
**voicemail_greeting_index** | **int** | This is the index of the greeting that is enabled currently for the user. Greeting 0 is the generic \&quot;[name] is not available\&quot; message will be played. | [optional]
**voicemail_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**voicemail_receive_broadcast_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**reject_anonymous_calls_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**voicemail_playback_announce_datetime_received** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**voicemail_playback_announce_caller_id** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**voicemail_playback_sort_newest_to_oldest** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**email_send_alert_new_voicemail_cc_list_csv** | **string** | This list of user&#39;s which will be forward copies of new voicemails left on that user. | [optional]
**email_send_alert_new_voicemail_behavior** | **string** | This is the behavior that the voicemail logic will take after a voicmail is left. The options include ability to send with attachements or hyperlinks. | [optional] [default to 'no']
**email_send_alert_new_voicemail_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**email_send_alert_new_missed_call_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**email_send_alert_data_storage_limit_reached_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**caller_id_number** | **int** | This is the main caller id number for the user to be used for outbound calls outside of the domain. | [optional]
**caller_id_name** | **string** | This is the main caller id name for the user to be used for outbound calls outside of the domain. | [optional]
**caller_id_number_emergency** | **int** | This is the main caller id that will be used for emergency calls when placed by the user. | [optional]
**area_code** | **int** | This is a area code for the user. I will be used when user dial&#39;s 7 digits to translate it to full 10 or 11 digit number. | [optional]
**directory_name_visible_in_list_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**service_code** | **string** | Service codes are for internal use that allow user&#39;s to be tagged for billing and tracking purposes. Any service code starting with \&quot;system-\&quot; will be hidden by default in the portals and not count as regular users. | [optional]
**voicemail_transcription_enabled** | **string** | Enable this setting and select a vendor if you wish to have voicemails transcripted after a voicemail is recorded. | [optional] [default to 'no']
**emergency_address_id** | **string** | Value will need to be an exact match to an address-id which links to a address for DLR (dynamic location routing) for emergency calling | [optional]
**call_recordings_hide_from_others_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**music_on_hold_randomized_enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**music_on_hold_comfort_message_repeat_interval_seconds** | **int** | This interval will control how frequently the music on hold would be interupted and have messages played. Should be used when using music on hod and custom messages. | [optional]
**active_calls_total_current** | **int** | This read only setting is the current active call count for this user. | [optional] [readonly]
**recording_configuration** | [**\SpectrumVoip\\\\NetSapiens\Model\RecordingConfiguration**](RecordingConfiguration.md) |  | [optional]
**account_status** | **string** | This status is read only and is calcuated to suggest special states that can be relayed to the end user or manager views. Status&#39;s include when a user is new, the user has been reset or pasword needs to be set. | [optional] [readonly]
**created_datetime** | **\DateTime** | This datetime is when the user was created. | [optional] [readonly]
**last_modified_datetime** | **\DateTime** | This datetime is when the user was last modified. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
