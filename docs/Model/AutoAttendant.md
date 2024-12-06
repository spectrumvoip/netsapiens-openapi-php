# # AutoAttendant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attendant_name** | **string** | This is the main name for the auto attendant. Should be used to explain the main purpose for the auto attendant. |
**user** | **string** |  |
**time_frame** | **string** |  | [optional]
**starting_prompt** | **string** | This is a \&quot;id\&quot; of sorts making this auto attendant unique in terms of this user and dial plan. Will be needed when reading details on a specific AA or making any modifications including removal. | [optional]
**read_path** | **string** | Shown only on a read of multiple auto attendants, will assist in getting the path for reading specific Attendant details. | [optional]
**auto_attendant** | [**\SpectrumVoip\\\\NetSapiens\Model\AutoAttendantTier**](AutoAttendantTier.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
