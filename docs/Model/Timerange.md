# # Timerange

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ordinal_order** | **int** | This will be a unique index and orger for the specific timerange inside of the given timeframe. | [optional]
**start_date** | **\DateTime** | This is field will be set for the start of a calender based time range in the format of YYYY-MM-DD. To disable the start of a range use \&quot;now\&quot;. | [optional]
**end_date** | **\DateTime** | This is field will be set for the end of a calender based time range in the format of YYYY-MM-DD. To disable the start of a range use \&quot;never\&quot;. | [optional]
**day_of_week_number** | [**\SpectrumVoip\\\\NetSapiens\Model\TimerangeDayOfWeekNumber**](TimerangeDayOfWeekNumber.md) |  |
**start_time** | **string** | This is the time in HH:MM format for the given time range. This will be the start of the window and will be based on the user&#39;s time-zone. | [optional] [default to '00:00']
**end_time** | **string** | This is the time in HH:MM format for the given time range. This will be the end of the window and will be based on the user&#39;s time-zone. | [optional] [default to '23:59']
**invert_match** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringNoDefault**](YesNoStringNoDefault.md) | This settings will control if the the parent feature is enabled. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
