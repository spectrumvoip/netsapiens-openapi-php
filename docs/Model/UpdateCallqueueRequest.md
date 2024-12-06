# # UpdateCallqueueRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | This is a simple description of the callqueue which can be used to better explain the use or purpose of this call queue. | [optional]
**callqueue_dispatch_type** | **string** | This is the main dispatch type for hunting agents. The options are described below.  #Round-robin #Tiered Round-robin #Ring All #Linear Cascade #Linear Hunt #Call Park | [optional]
**callqueue_calculate_statistics** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoString**](YesNoString.md) |  | [optional]
**active_queued_calls_total_current** | **int** | This is the current calls waiting in the call queue waiting to be dispatched. | [optional] [readonly]
**callqueue_agent_dispatch_timeout_seconds** | **int** | This is the timeout in seconds the call queue will attempt an agent before timing out and retrying additional resources. | [optional]
**callqueue_count_agents_available** | **int** | This is the current number of agents logged in and available for work. | [optional] [readonly]
**callqueue_count_agents_total** | **int** | This is the current number of agents configured for this callqueue. | [optional]
**callqueue_debug** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoString**](YesNoString.md) |  | [optional]
**callqueue_force_full_intro_playback** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoString**](YesNoString.md) |  | [optional]
**callqueue_max_callback_queueing_hours** | **int** | This setting will allow callback&#39;s in the callqueue allowing callers to press a buton and opt for a callback instead of waiting. 0 the default is off, any other positive number will enable callback and allow callback up to that many hours after the callback is requested. | [optional] [default to 0]
**callqueue_max_current_callers_to_accept_new_callers** | **int** | This setting is the maximum number of callers allowed in the queue before forward busy answer rules will be followed. 0 is unlimited | [optional] [default to 0]
**callqueue_max_current_wait_to_accept_new_callers_seconds** | **int** | This setting is the maximum expected wait time  allowed in the queue before forward busy answer rules will be followed. 0 is unlimited | [optional] [default to 0]
**callqueue_max_wait_timeout_minutes** | **int** | This is the max wait time in minutes that it would allow a call to wait before being forced out of the queue. 0 is unlimited | [optional] [default to 0]
**callqueue_require_available_agents_to_accept_new_callers** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**callqueue_source_match** | **string** | This is a optional setting that will control the source match for the forward dispatch leg of calls allowing if needed different matches to connecting devices when calls come through the queue. | [optional]
**callqueue_sms_enable** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**recording_configuration** | [**\SpectrumVoip\\\\NetSapiens\Model\RecordingConfiguration**](RecordingConfiguration.md) |  | [optional]
**callqueue_sms_phrase_initiate_chat** | **string** | This is the keyword that will be the trigger for a new SMS queueing session | [optional]
**callqueue_sms_phrase_initiate_success** | **string** | The message to auto reply to a inbound SMS message once the trigger keyword is detected | [optional]
**callqueue_sms_phrase_initiation_fail_** | **string** | The message that will be auto replied when a message wihtout the keywork is detected. | [optional]
**callqueue_sms_phrase_no_agents_available** | **string** | The message that will be auto replied when there are no agents available and the system is unable to setup a sms chat session at this time. | [optional]
**callqueue_sms_phrase_terminate_chat** | **string** | This is the keyword that will be the trigger to end a active SMS session. | [optional]
**callqueue_sms_phrase_terminate_success** | **string** | The message that will be played after a successfully termination of a session via a keyword. | [optional]
**callqueue_agent_auto_logout_after_missed** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]
**callqueue_sim_ring_1st_round** | **int** | When using a callqueue-dispatch-type value that allows for mutlple agents to be run on at a time this setting controls the amount of agents that are dispatched in the first round. | [optional] [default to 0]
**callqueue_sim_ring_increment** | **int** | When using a callqueue-dispatch-type value that allows for mutlple agents to be run on at a time this setting controls the amount of agents that will be added to the group activly ringing at each agent timeout level. | [optional] [default to 1]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
