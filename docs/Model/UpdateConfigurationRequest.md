# # UpdateConfigurationRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**config_name** | **string** | This is the name of the configuration |
**config_value** | [**\SpectrumVoip\\\\NetSapiens\Model\UpdateConfigurationRequestConfigValue**](UpdateConfigurationRequestConfigValue.md) |  |
**domain** | **string** | This is the main organization name. This is used to link resource to its group/tenant/organization/enterprise. ~ and * can be used alone in special cases to mean My Domain (~) and All Domains (\\*). | [optional]
**description** | **string** | This describes the configuration | [optional]
**admin_ui_account_type** | **string** |  | [optional] [default to '*']
**reseller** | **string** |  | [optional] [default to '*']
**user** | **string** |  | [optional] [default to '*']
**user_scope** | **string** |  | [optional] [default to '*']
**core_server** | **string** |  | [optional] [default to '*']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
