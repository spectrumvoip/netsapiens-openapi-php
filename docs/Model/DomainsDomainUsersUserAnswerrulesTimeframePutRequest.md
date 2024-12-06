# # DomainsDomainUsersUserAnswerrulesTimeframePutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. |
**is_active** | **bool** | This is read only option that will be true if this timeframe is active for this user when taking into account current settings, date/time and all timeframes. | [readonly]
**order** | **int** | This is to allow for a priority based order of different timeframes. The default is to add it in value higher (lower priority) than the lowest priority timeframe. Timeframe * will get 99 if not already set. | [optional] [readonly] [default to 99]
**simultaneous_ring** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesPostRequestSimultaneousRing**](DomainsDomainUsersUserAnswerrulesPostRequestSimultaneousRing.md) |  | [optional]
**do_not_disturb** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesPostRequestDoNotDisturb**](DomainsDomainUsersUserAnswerrulesPostRequestDoNotDisturb.md) |  | [optional]
**forward_always** | [**\SpectrumVoip\\\\NetSapiens\Model\AnswerruleFeature**](AnswerruleFeature.md) |  | [optional]
**forward_on_active** | [**\SpectrumVoip\\\\NetSapiens\Model\AnswerruleFeature**](AnswerruleFeature.md) |  | [optional]
**forward_on_busy** | [**\SpectrumVoip\\\\NetSapiens\Model\AnswerruleFeature**](AnswerruleFeature.md) |  | [optional]
**forward_no_answer** | [**\SpectrumVoip\\\\NetSapiens\Model\AnswerruleFeature**](AnswerruleFeature.md) |  | [optional]
**forward_when_unregistered** | [**\SpectrumVoip\\\\NetSapiens\Model\AnswerruleFeature**](AnswerruleFeature.md) |  | [optional]
**forward_on_dnd** | [**\SpectrumVoip\\\\NetSapiens\Model\AnswerruleFeature**](AnswerruleFeature.md) |  | [optional]
**forward_on_spam_call** | [**\SpectrumVoip\\\\NetSapiens\Model\AnswerruleFeature**](AnswerruleFeature.md) |  | [optional]
**call_screening** | [**\SpectrumVoip\\\\NetSapiens\Model\DomainsDomainUsersUserAnswerrulesPostRequestCallScreening**](DomainsDomainUsersUserAnswerrulesPostRequestCallScreening.md) |  | [optional]
**phone_numbers_to_allow** | [**\SpectrumVoip\\\\NetSapiens\Model\AnswerruleFeatureWithRemove**](AnswerruleFeatureWithRemove.md) | This is a list of numbers that would be allowed bypassing features like do-not-disturb and call-screening. | [optional]
**new_position** | **string** | This will move the answerrule to the top or bottom in the priority list. Top having the most priority, and bottom having the least priority | [optional]
**phone_numbers_to_reject** | [**\SpectrumVoip\\\\NetSapiens\Model\AnswerruleFeatureWithRemove**](AnswerruleFeatureWithRemove.md) | This is a list of numbers that would be allowed bypassing features like do-not-disturb and call-screening. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
