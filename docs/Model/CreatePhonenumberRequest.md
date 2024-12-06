# # CreatePhonenumberRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**phonenumber** | **string** | This is the main phonenumber setting. Should be a  formated in a e164 format with country count and number. US domestic numbers should be similiar to 18005551234 |
**enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**dial_rule_application** | [**\SpectrumVoip\\\\NetSapiens\Model\DialruleApplication**](DialruleApplication.md) |  | [optional]
**dial_rule_parameter** | **string** | This is the application parameter field that can be used for additional settings based on the dial-rule-application. Default is empty string. | [optional]
**dial_rule_translation_destination_user** | **string** | This is the forward destination the call will be sent to in partnership with the application (dial-rule-application) and host (dial-rule-translation-destination-host). This might be a user, queue or offnet number depending on the application. |
**dial_rule_translation_destination_host** | **string** | This is the forward destination host the call will be sent to in partnership with the application (dial-rule-application) and user (dial-rule-translation-destination-user). This might be the domain name or a connection name if trying to route offnet. | [optional] [default to '[*]']
**dial_rule_translation_source_name** | **string** | This field will allow customization of the source \&quot;name\&quot; often used for teh caller id name or the the descriptive quoted value outside of the sip uri. Defaults to [*] but you can add a prefix for example with something like this, sales_[*] | [optional] [default to '[*]']
**dial_rule_description** | **string** | This is a description of the number/rule that can be used for defintion or tracking purposes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
