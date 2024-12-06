# # Transcription

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**call_intelligence_job_id** | **int** | This is the main ID identifying the transcription job and will link all intelligence features. | [optional] [readonly]
**call_intelligence_processing_status** | **string** | This is the status of the transcription and intelegence work. The data will be enter as soon as the request is made to remote vendor, but might not be availabel fully untill status is \&quot;finished\&quot; | [optional] [readonly]
**created_datetime** | **string** | The date-time of the request for transcription. | [optional] [readonly]
**call_id** | **string** | The linked call-id for the SIP call being recorded. Could be an orig_callid or term_callid depending on who requested recording and type of call. | [optional]
**call_intelligence_features_enabled** | **string** | List of features enabled for request. | [optional]
**call_intelligence_summary** | **string** | The main summary of the call when available. | [optional]
**call_intelligence_topics_top** | **string[]** | The list of top topics detected on the call based on frequency. | [optional]
**call_intelligence_duration_seconds** | **float** | The duration in seconds for the length of time where detected voice was seen. | [optional]
**call_intelligence_duration_seconds_negative** | **int** | The duration in seconds for the length of time where detected voice was seen with a Negative sentiment | [optional]
**call_intelligence_duration_seconds_neutral** | **float** | The duration in seconds for the length of time where detected voice was seen. | [optional]
**call_intelligence_duration_seconds_positive** | **float** | The duration in seconds for the length of time where detected voice was seen with a Positve sentiment | [optional]
**call_intelligence_ending_duration_seconds** | **float** |  | [optional]
**call_intelligence_ending_duration_seconds_negative** | **int** |  | [optional]
**call_intelligence_ending_duration_seconds_neutral** | **float** |  | [optional]
**call_intelligence_ending_duration_seconds_positive** | **float** |  | [optional]
**call_intelligence_ending_percent_negative** | **int** |  | [optional]
**call_intelligence_ending_percent_neutral** | **int** |  | [optional]
**call_intelligence_ending_percent_positive** | **int** |  | [optional]
**call_intelligence_ending_sentiment_scale** | **int** |  | [optional]
**call_intelligence_percent_negative** | **int** |  | [optional]
**call_intelligence_percent_neutral** | **int** |  | [optional]
**call_intelligence_percent_positive** | **int** |  | [optional]
**call_intelligence_segments** | [**\SpectrumVoip\\\\NetSapiens\Model\TranscriptionCallIntelligenceSegmentsInner[]**](TranscriptionCallIntelligenceSegmentsInner.md) |  | [optional]
**call_intelligence_summary_status** | **string** |  | [optional]
**call_intelligence_topics_all** | **string[]** | The complete list of detected topics in the conversation | [optional]
**errors** | **string** | If errors are present it will display here. | [optional]
**last_modified_datetime** | **\DateTime** | The modified time of the transcription job. Difference between this and created-datetime will be the duration of the job in most cases. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
