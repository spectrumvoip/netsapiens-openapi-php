# # DomainLegacy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**domain** | **string** | This is the main name of the domain. This name should be capable of being in SIP enpoints so no special characters or spaces |
**territory** | **string** | This is the Reseller name field. All domain&#39;s should be limied to a reseller. |
**description** | **string** | Description of domain. Can be any plain text summary of the domain or organization. |
**moh** | **string** | Enablement of Music on Hold | [optional]
**mor** | **string** | Enablement of Music on Ring | [optional]
**rmoh** | **string** | Enablement of Random Music on Hold by default | [optional]
**resi** | **string** |  | [optional] [default to 'no']
**sso** | **string** |  | [optional] [default to 'no']
**call_limit** | **int** |  | [optional]
**call_limit_ext** | **int** |  | [optional]
**sub_limit** | **int** |  | [optional]
**max_call_queue** | **int** |  | [optional]
**max_aa** | **int** |  | [optional]
**max_conference** | **int** |  | [optional]
**max_department** | **int** |  | [optional]
**max_user** | **int** |  | [optional]
**max_device** | **int** |  | [optional]
**time_zone** | **string** |  | [optional]
**dial_plan** | **string** |  | [optional]
**dial_policy** | **string** |  | [optional]
**policies** | **string** |  | [optional]
**email_sender** | **string** | This e-mail address will be displayed on e-mails sent from the system | [optional]
**smtp_host** | **string** |  | [optional]
**smtp_port** | **string** |  | [optional]
**smtp_uid** | **string** |  | [optional]
**smtp_pwd** | **string** |  | [optional]
**from_user** | **string** |  | [optional] [default to '[*]']
**from_host** | **string** |  | [optional] [default to '[*]']
**active_call** | **int** |  | [optional] [readonly]
**count_for_limit** | **int** |  | [optional] [readonly]
**count_external** | **int** |  | [optional] [readonly]
**sub_count** | **int** |  | [optional] [readonly]
**max_site** | **int** |  | [optional]
**max_fax** | **int** |  | [optional]
**address_id** | **string** |  | [optional]
**vmail_provisioned** | **string** |  | [optional]
**callid_nmbr** | **int** |  | [optional]
**callid_name** | **string** |  | [optional]
**callid_emgr** | **int** |  | [optional]
**area_code** | **int** |  | [optional]
**vmail_transcribe** | **string** |  | [optional]
**language** | **string** | The default language for the domain | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
