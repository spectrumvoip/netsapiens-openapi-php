# # DialRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | This is the main organization name. This is used to link resource to its group/tenant/organization/enterprise. ~ and * can be used alone in special cases to mean My Domain (~) and All Domains (\\*). |
**dial_rule_dial_plan** | **string** | This is the dial plan name the dial rule exists in. |
**dail_rule_matching_to_uri** | **string** | This is the main digit string match for the dial translation. |
**dialrule** | **string** | This is the dialrule id that will be given with each read action that will be needed to read back individual value, update specific rules or delete rules. If wanting to programatically generate the dial rule id is a base64 encoding of the concatination with \&quot;||\&quot; of the following fields in order, dail-rule-matching-to-uri, dail-rule-matching-from-uri, dail-rule-matching-day-of-week, dail-rule-matching-start-date, dail-rule-matching-end-date, dail-rule-matching-start-time, dail-rule-matching-end-time |
**enabled** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**dail_rule_matching_from_uri** | **string** | This is a source match that would allow for a specific dial rule match based on the caller as well as the forward destination of dail-rule-matching-to-uri. | [optional] [default to '*']
**dial_rule_matching_day_of_week** | **string** | This is a field that will control the DOW (day of week) match for this rule. Default is * or to match all the time, but valid format will allow any single day of the week 0-6 (sunday-saturday) or a range in square brackets like [0-6] | [optional] [default to '*']
**dial_rule_matching_start_date** | **\DateTime** | This is the start of a the valid date range for this rule.  Keep to * if you do not want to use date range for this rule. | [optional]
**dial_rule_matching_end_date** | **\DateTime** | This is the end of a the valid date range for this rule.  Keep to * if you do not want to use date range for this rule. | [optional]
**dial_rule_matching_start_time** | **string** | This is the start of a the valid time range for this rule.  Keep to * if you do not want to use time range for this rule. The format is a valid HH:MM format from 00:00 to 23:59. The timezone would be the user&#39;s timezone if passing through a user already. | [optional] [default to '*']
**dial_rule_matching_end_time** | **string** | This is the end of a the valid time range for this rule.  Keep to * if you do not want to use time range for this rule. The format is a valid HH:MM format from 00:00 to 23:59. The timezone would be the user&#39;s timezone if passing through a user already. | [optional] [default to '*']
**dial_rule_application** | [**\SpectrumVoip\\\\NetSapiens\Model\DialruleApplication**](DialruleApplication.md) |  | [optional]
**dial_rule_parameter** | **string** | This is the application parameter field that can be used for additional settings based on the dial-rule-application. Default is empty string. | [optional]
**dial_rule_translation_destination_scheme** | **string** | This setting controls the \&quot;sip schema\&quot; on the destination, in most all case setting to \&quot;[*]\&quot; is correct. | [optional] [default to '[*]']
**dial_rule_translation_destination_user** | **string** | This is the forward destination the call will be sent to in partnership with the application (dial-rule-application) and host (dial-rule-translation-destination-host). This might be a user, queue or offnet number depending on the application. |
**dial_rule_translation_destination_host** | **string** | This is the forward destination host the call will be sent to in partnership with the application (dial-rule-application) and user (dial-rule-translation-destination-user). This might be the domain name or a connection name if trying to route offnet. | [optional] [default to '[*]']
**dial_rule_translation_source_name** | **string** | This field will allow customization of the source \&quot;name\&quot; often used for teh caller id name or the the descriptive quoted value outside of the sip uri. Defaults to [*] but you can add a prefix for example with something like this, sales_[*] | [optional] [default to '[*]']
**dial_rule_translation_source_scheme** | **string** | This setting controls the \&quot;sip schema\&quot; on the destination, in most all case setting to \&quot;[*]\&quot; is correct. | [optional] [default to '[*]']
**dial_rule_translation_source_user** | **string** | This field will allow customization of the source \&quot;user\&quot; which is often the caller id number or the value before the @ in then SIP uri. Defaults to [*] but you can modify and include [*] as the previous value. An example would be using a token like &lt;OwnCidNmbr&gt; to replace with a user&#39;s caller id number. | [optional] [default to '[*]']
**dial_rule_translation_source_host** | **string** | This field will allow customization of the source \&quot;host\&quot; which is  the value after the @ in then SIP uri. Defaults to [*] but you can modify and include [*] as the previous value. An example would be using a token like &lt;OwnDomain&gt; to replace with a user&#39;s domain | [optional] [default to '[*]']
**dial_rule_description** | **string** | This is a description of the number/rule that can be used for defintion or tracking purposes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
