# # Reseller

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reseller** | **string** | The name of the Reseller. This is the main ID for the group which will be used to link domains for ownership. |
**description** | **string** | This description can be used to give a more complete description and notes for this reseller. | [optional]
**domains_total** | **int** | This is the total number of domains in this Reseller&#39;s account. | [optional] [readonly]
**users_total** | **int** | This is the total number of users in all domains owned by this reseller. | [optional] [readonly]
**email_send_smtp_hostname** | **string** | This is the SMTP server hostname | [optional]
**email_send_smtp_port** | **int** | This is the SMTP port for sending emails. | [optional]
**email_send_smtp_username** | **string** | This is the username used in connecting to SMTP  server for sending email. | [optional]
**smtp_pwd** | **string** | This is the password used in connecting to SMTP  server for sending email. | [optional]
**active_calls_against_license_count** | **int** | This is the current active calls counting against the license including on net calls. | [optional] [readonly]
**active_calls_offnet_current** | **int** | This is the current active calls across all domains that are calls coming from or going to offnet numbers. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
