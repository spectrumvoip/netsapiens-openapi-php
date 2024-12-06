# # CreateApikey200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | This is the main description/name for the API key that should describe its purpose for tracking and understanding its intended use. |
**key_id** | **string** | This is the Key ID that will identify the key and allow for managment, audit tracking and monitoring. |
**key** | **string** | This is the key that will need to be saved securly for use in accessing the API. It will only be shown once. | [optional] [readonly]
**reseller** | **string** | This is the reseller that will limit the API key to access the resellers data set. | [default to '*']
**user** | **string** | This is the main user extension for the user account. | [optional]
**domain** | **string** | This is the main organization name. This is used to link resource to its group/tenant/organization/enterprise. ~ and * can be used alone in special cases to mean My Domain (~) and All Domains (\\*). |
**user_scope** | **string** | This is the scope that will be be used to enforce permissions for this API key and access. | [optional]
**ip_address** | **string** | Optional IP restrictions for API to require access from matching IP or subnets. Multipe ips/subnets can be provided comma seperated | [optional]
**readonly** | **string** | If enabled it will limit any get Scope to a read only verion providing only GET acces to the read actions. POST, PUT and DELETE will be rejected. | [optional] [default to 'no']
**can_create_keys** | **string** | If enabled it will allow this key to make keys for lesser scopes then itself. It will not allow creations of scopes same or higher access level. | [optional] [default to 'no']
**allowed_models** | [**\SpectrumVoip\\\\NetSapiens\Model\ReadApikeys200ResponseInnerAllowedModels**](ReadApikeys200ResponseInnerAllowedModels.md) |  | [optional]
**created_datetime** | **\DateTime** | The datetime that the key was created. | [optional] [readonly]
**lastused_datetime** | **\DateTime** | The datetime of the last time the apikey was used for API access. The timestamp is acurrate up to the hour to avoid overhead in tracking high volume requests | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
