# # ConfigDefinitionsConfigNamePutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | This describes the configuration being defined |
**default** | [**\SpectrumVoip\\\\NetSapiens\Model\StringInteger**](StringInteger.md) | This is the default for the configuration. If no scope-specific default is set, this value will be used |
**code_version** | **string** | This is the code version this definition starts to become applicable |
**data_type** | **string** | This is the data type allowed for this configuration |
**config_def_allow_hostname** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**config_def_allow_reseller_access** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**config_def_default_basic_user** | [**\SpectrumVoip\\\\NetSapiens\Model\StringInteger**](StringInteger.md) | This is the default for the configuration. If no scope-specific default is set, this value will be used | [optional]
**config_def_default_call_center_supervisor** | [**\SpectrumVoip\\\\NetSapiens\Model\StringInteger**](StringInteger.md) | This is the default for the configuration. If no scope-specific default is set, this value will be used | [optional]
**config_def_default_office_manager** | [**\SpectrumVoip\\\\NetSapiens\Model\StringInteger**](StringInteger.md) | This is the default for the configuration. If no scope-specific default is set, this value will be used | [optional]
**config_def_default_reseller** | [**\SpectrumVoip\\\\NetSapiens\Model\StringInteger**](StringInteger.md) | This is the default for the configuration. If no scope-specific default is set, this value will be used | [optional]
**config_def_default_super_user** | [**\SpectrumVoip\\\\NetSapiens\Model\StringInteger**](StringInteger.md) | This is the default for the configuration. If no scope-specific default is set, this value will be used | [optional]
**tags** | **string** | Any tags, comma seperated, that should be applied to the defintion | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
