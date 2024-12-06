# # AddressEndpoint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_callback_number** | [**\SpectrumVoip\\\\NetSapiens\Model\CreateAddressEndpointRequestAddressCallbackNumber**](CreateAddressEndpointRequestAddressCallbackNumber.md) |  | [optional]
**domain** | **string** | This is the main organization name. This is used to link resource to its group/tenant/organization/enterprise. ~ and * can be used alone in special cases to mean My Domain (~) and All Domains (\\*). |
**address_name** | **string** | This is the name label for the address |
**caller_name** | **string** | This is the caller&#39;s name for the address |
**address_line_1** | **string** | This is the address line 1 for the address | [optional]
**address_line_2** | **string** | This is the address line 2 for the address | [optional]
**address_city** | **string** | This is the city for the address | [optional]
**address_state_province_abbreviation** | **string** | This is the state or province (Canadian) abbreviation for the address | [optional]
**address_postal_code** | **string** | This is the postal code for the address | [optional]
**address_country_abbreviation** | **string** | This is the country appreviation for the address | [optional]
**address_location_description** | **string** | This is an optional location description for the address | [optional]
**ip_address_public** | **string** | This is the public IP of the client window creating the address. | [optional] [readonly]
**address_formatted_pidflo** | **object** | This is a return value of the formatted PIDFLO standardized value for the address. For create/update either location-id or address-formatted-pidflo is needed. If address-formatted-pidflo is used, fill in address-line-1, address-city, etc for address information | [optional]
**carrier** | **string** | This is the carrier name for the address | [optional]
**count_users_configured** | **int** | This is the count of how many users are using the particular address | [optional]
**address_formatted_pretty** | **string** | This is a human readable format of the address | [optional] [readonly]
**address_is_default_for_site** | **bool** | This is whether the address is a default for the site | [optional] [readonly]
**location_id** | **string** | This is the address-id in cases for creation using an existing address. For create/update either location-id or address-formatted-pidflo is needed | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
