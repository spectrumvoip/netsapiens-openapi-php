# # SmsNumber

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | This is the SMS Number |
**application** | **string** | This is the application of the number. Can be for a user, callqueue, or available |
**domain** | **string** | This is the main organization name. This is used to link resource to its group/tenant/organization/enterprise. ~ and * can be used alone in special cases to mean My Domain (~) and All Domains (\\*). |
**carrier** | **string** | This is the carrier the SMS number will send and receive messages through | [optional]
**dest** | **string** | This is the destination for the SMS number if assigned. Can be a user or a call queue |
**mms_capable** | **bool** | This is whether or not the SMS number can send MMS messages | [optional] [default to false]
**group_mms_capable** | **bool** | This is whether or not the SMS number can send group messages | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
