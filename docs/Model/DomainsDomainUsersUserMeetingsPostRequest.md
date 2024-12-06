# # DomainsDomainUsersUserMeetingsPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | The description about the meeting | [optional]
**current_timestamp** | **\DateTime** | The current timestamp value of the meeting |
**meeting_calendar_invite_id** | **string** | The read only value for the meeting to use with calendar integration | [optional] [readonly]
**meeting_ordinal_sequence** | **int** | The read only value for the meeting with manage the calendar integrations | [optional] [readonly]
**core_server** | **string** | The core server which the meeting was created on and events are driven from | [optional] [readonly]
**chat_session_id** | **string** | The read only value identifying the meeting chat room session | [optional] [readonly]
**meeting_registration_id** | **string** | The token value for guest to use to register for a webinar | [optional]
**meeting_instance_id** | **string** | The instance value of a meeting with used to associate with a recording or differentiating recurring meetings | [optional]
**meeting_name** | **string** | The descriptive name of the meeting | [optional]
**meeting_type** | **string** | The meeting category either the standard meeting &#39;conference&#39; or a webinar style meeting by using &#39;presentation&#39; | [optional] [default to 'conference']
**limits_max_participants** | **int** | The maximum number of participants allows in the meeting | [optional]
**meeting_status** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsIdPost200ResponseMeetingStatus**](DomainsDomainUsersUserMeetingsIdPost200ResponseMeetingStatus.md) |  |
**meeting_schedule_start_datetime** | **\DateTime** | The scheduled start time for the meeting |
**timezone** | [**\SpectrumVoip\\\\NetSapiens\Model\TimeZone**](TimeZone.md) | The timezone which the meeting was created with |
**meeting_schedule_duration_minutes** | **int** | The scheduled length of the meeting | [optional]
**meeting_schedule_recurrence_rule** | **string** | The read only value describing the recuring nature of the meeting using RFC 5545 | [optional] [readonly]
**meeting_video_allowed_from** | **string** | The value indicating which attendee types can share video | [optional]
**meeting_audio_allowed_from** | **string** | The value indicating which attendee types can share audio | [optional]
**meeting_chat_enabled** | **int** |  | [optional] [default to 1]
**meeting_chat_history_enabled** | **int** |  | [optional] [default to 1]
**meeting_question_answer_enabled** | **int** |  | [optional] [default to 0]
**meeting_recording_enabled** | **int** |  | [optional] [default to 0]
**meeting_join_require_invite_enabled** | **int** |  | [optional] [default to 0]
**meeting_join_require_passcode_enabled** | **int** |  | [optional] [default to 0]
**meeting_require_host_to_begin_enabled** | **int** |  | [optional] [default to 0]
**meeting_allow_changes_from_hosts_enabled** | **int** |  | [optional] [default to 1]
**meeting_hide_attendee_list_enabled** | **int** |  | [optional] [default to 0]
**meeting_lock_enabled** | **int** |  | [optional] [default to 0]
**meeting_lock_allowed** | **string** | The value indicating if the meeting is allowed to be locked | [optional]
**meeting_room_enabled** | **int** |  | [default to 0]
**meeting_dial_in_number_blob** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserMeetingsIdPost200ResponseMeetingDialInNumberBlob**](DomainsDomainUsersUserMeetingsIdPost200ResponseMeetingDialInNumberBlob.md) |  | [optional]
**meeting_passcode** | **string** | The passcode used to enter meeting if it is required | [optional]
**meeting_previous_presenter_attendee_id** | **string** | The value of the previous attendee that prsented their screen | [optional] [readonly]
**meeting_presenter_attendee_id** | **string** | The value of the current attendee that is sharing their screen | [optional]
**meeting_video_layout_** | **string** | The current meeting layout default for entire meeting | [optional]
**last_modified_datetime** | **\DateTime** | The timestamp of the last time the meeting was modified | [optional]
**meeting_instance_actual_start_datetime** | **\DateTime** | The timestamp the current meeting instance was started | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
