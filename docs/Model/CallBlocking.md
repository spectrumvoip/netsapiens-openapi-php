# # CallBlocking

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | This is the main organization name. This is used to link resource to its group/tenant/organization/enterprise. ~ and * can be used alone in special cases to mean My Domain (~) and All Domains (\\*). |
**user** | **string** | This is the main user extension for the user account. |
**enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**is_active** | **bool** | This is read only option that will be true if this timeframe is active for this user when taking into account current settings, date/time and all timeframes. | [optional] [readonly]
**phone_numbers_to_reject** | [**\SpectrumVoip\\\\NetSapiens\Model\CallBlockingPhoneNumbersToReject**](CallBlockingPhoneNumbersToReject.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
