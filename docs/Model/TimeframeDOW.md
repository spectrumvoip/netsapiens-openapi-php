# # TimeframeDOW

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**timeframe_id** | **string** |  | [optional]
**timeframe_parent_id** | **string** |  | [optional] [readonly]
**ordinal_order** | **float** |  | [optional] [readonly]
**timeframe_weekly_sunday_begin_time_1** | **string** | Beginning of the first time period during which the time frame will take effect on Sundays - format: hhmm | [optional]
**timeframe_weekly_sunday_end_time_1** | **string** | End of the first time period during which the time frame will take effect on Sundays - format: hhmm | [optional]
**timeframe_weekly_sunday_begin_time_2** | **string** | Beginning of the second time period, if there is one, during which the time frame will take effect on Sundays - format: hhmm | [optional]
**timeframe_weekly_sunday_end_time_2** | **string** | End of the second time period, if there is one, during which the time frame will take effect on Sundays - format: hhmm | [optional]
**timeframe_weekly_monday_begin_time_1** | **string** | Beginning of the first time period during which the time frame will take effect on Mondays - format: hhmm | [optional]
**timeframe_weekly_monday_end_time_1** | **string** | End of the first time period during which the time frame will take effect on Mondays - format: hhmm | [optional]
**timeframe_weekly_monday_begin_time_2** | **string** | Beginning of the second time period, if there is one, during which the time frame will take effect on Mondays - format: hhmm | [optional]
**timeframe_weekly_monday_end_time_2** | **string** | End of the second time period, if there is one, during which the time frame will take effect on Mondays - format: hhmm | [optional]
**timeframe_weekly_tuesday_begin_time_1** | **string** | Beginning of the first time period during which the time frame will take effect on Tuesdays - format: hhmm | [optional]
**timeframe_weekly_tuesday_end_time_1** | **string** | End of the first time period during which the time frame will take effect on Tuesdays - format: hhmm | [optional]
**timeframe_weekly_tuesday_begin_time_2** | **string** | Beginning of the second time period, if there is one, during which the time frame will take effect on Tuesdays - format: hhmm | [optional]
**timeframe_weekly_tuesday_end_time_2** | **string** | End of the second time period, if there is one, during which the time frame will take effect on Tuesdays - format: hhmm | [optional]
**timeframe_weekly_wednesday_begin_time_1** | **string** | Beginning of the first time period during which the time frame will take effect on Wednesdays - format: hhmm | [optional]
**timeframe_weekly_wednesday_end_time_1** | **string** | End of the first time period during which the time frame will take effect on Wednesdays - format: hhmm | [optional]
**timeframe_weekly_wednesday_begin_time_2** | **string** | Beginning of the second time period, if there is one, during which the time frame will take effect on Wednesdays - format: hhmm | [optional]
**timeframe_weekly_wednesday_end_time_2** | **string** | End of the second time period, if there is one, during which the time frame will take effect on Wednesdays - format: hhmm | [optional]
**timeframe_weekly_thursday_begin_time_1** | **string** | Beginning of the first time period during which the time frame will take effect on Thursdays - format: hhmm | [optional]
**timeframe_weekly_thursday_end_time_1** | **string** | End of the first time period during which the time frame will take effect on Thursdays - format: hhmm | [optional]
**timeframe_weekly_thursday_begin_time_2** | **string** | Beginning of the second time period, if there is one, during which the time frame will take effect on Thursdays - format: hhmm | [optional]
**timeframe_weekly_thursday_end_time_2** | **string** | End of the second time period, if there is one, during which the time frame will take effect on Thursdays - format: hhmm | [optional]
**timeframe_weekly_friday_begin_time_1** | **string** | Beginning of the first time period during which the time frame will take effect on Fridays - format: hhmm | [optional]
**timeframe_weekly_friday_end_time_1** | **string** | End of the first time period during which the time frame will take effect on Fridays - format: hhmm | [optional]
**timeframe_weekly_friday_begin_time_2** | **string** | Beginning of the second time period, if there is one, during which the time frame will take effect on Fridays - format: hhmm | [optional]
**timeframe_weekly_friday_end_time_2** | **string** | End of the second time period, if there is one, during which the time frame will take effect on Fridays - format: hhmm | [optional]
**timeframe_weekly_saturday_begin_time_1** | **string** | Beginning of the first time period during which the time frame will take effect on Saturdays - format: hhmm | [optional]
**timeframe_weekly_saturday_end_time_1** | **string** | End of the first time period during which the time frame will take effect on Saturdays - format: hhmm | [optional]
**timeframe_weekly_saturday_begin_time_2** | **string** | Beginning of the second time period, if there is one, during which the time frame will take effect on Saturdays - format: hhmm | [optional]
**timeframe_weekly_saturday_end_time_2** | **string** | End of the second time period, if there is one, during which the time frame will take effect on Saturdays - format: hhmm | [optional]
**timeframe_recurrence_type** | **string** | &#x60;&#x60;&#x60;weekly&#x60;&#x60;&#x60;: recur every week &#x60;&#x60;&#x60;custom&#x60;&#x60;&#x60;: if this option is selected the fields &#x60;&#x60;&#x60;timeframe-recurrence-begin-date&#x60;&#x60;&#x60;, &#x60;&#x60;&#x60;timeframe-recurrence-custom-interval&#x60;&#x60;&#x60;, &#x60;&#x60;&#x60;timeframe-recurrence-custom-interval-option&#x60;&#x60;&#x60;, and &#x60;&#x60;&#x60;timeframe-recurrence-custom-interval-count&#x60;&#x60;&#x60; must be set correctly to produce any behavior |
**timeframe_recurrence_begin_date** | **string** | Start date of the recurrence - format: YYYYMMDD - note: this field is only applicable for the &#x60;&#x60;&#x60;timeframe-recurrence-type&#x60;&#x60;&#x60; option &#x60;&#x60;&#x60;custom&#x60;&#x60;&#x60; |
**timeframe_recurrence_custom_interval** | **string** | Must be combined with the field &#x60;&#x60;&#x60;timeframe-recurrence-custom-interval-count&#x60;&#x60;&#x60;  &#x60;&#x60;&#x60;weeks&#x60;&#x60;&#x60;: recur every &#x60;&#x60;&#x60;timeframe-recurrence-custom-interval-count&#x60;&#x60;&#x60; weeks &#x60;&#x60;&#x60;months&#x60;&#x60;&#x60;: recur every &#x60;&#x60;&#x60;timeframe-recurrence-custom-interval-count&#x60;&#x60;&#x60; months |
**timeframe_recurrence_custom_interval_count** | **string** | Specifies the recurrence count based on the period specified in &#x60;&#x60;&#x60;timeframe-recurrence-custom-interval&#x60;&#x60;&#x60; e.g. &#39;every 6 weeks&#39; or &#39;every 3 months&#39;  If the field &#x60;&#x60;&#x60;timeframe-recurrence-custom-interval&#x60;&#x60;&#x60; is set to &#x60;&#x60;&#x60;months&#x60;&#x60;&#x60; this field determines the count in combination with the option set in &#x60;&#x60;&#x60;timeframe-recurrence-custom-interval-option&#x60;&#x60;&#x60; |
**timeframe_recurrence_custom_interval_option** | **string** | If &#x60;&#x60;&#x60;timeframe-recurrence-custom-interval&#x60;&#x60;&#x60; is set to &#x60;&#x60;&#x60;weeks&#x60;&#x60;&#x60; this field is not used. This field is for &#x60;&#x60;&#x60;months&#x60;&#x60;&#x60; only. The following options configure recurrence for the Days of Week period according to the start date defined in &#x60;&#x60;&#x60;timeframe-recurrence-begin-date&#x60;&#x60;&#x60;.  For &#x60;&#x60;&#x60;timeframe-recurrence-custom-interval&#x60;&#x60;&#x60; of &#x60;&#x60;&#x60;months&#x60;&#x60;&#x60;: &#x60;&#x60;&#x60;monthly-same-day&#x60;&#x60;&#x60;: recur on the same day of the month, e.g.: the 14th day, the 29th day - note: if there are months in which the “day” does not occur, the Days fo Week will not be active during that month, e.g.: the 31st day of February &#x60;&#x60;&#x60;monthly-ordinal-weekday&#x60;&#x60;&#x60;:  recur on any ordinal weekday in the given month e.g. the third Friday, the second Monday &#x60;&#x60;&#x60;monthly-first-last-weekday&#x60;&#x60;&#x60;: recur on the first or last instance of the selected weekday in the month, e.g.: the first Wednesday, the last Tuesday - note: this will produce potentially unexpected behavior if used with a date that is not the first or last occurrence of that particular weekday |
**timeframe_recurrence_end_option** | **string** | &#x60;&#x60;&#x60;never&#x60;&#x60;&#x60;: recurrence will continue indefinitely &#x60;&#x60;&#x60;onADate&#x60;&#x60;&#x60;: recurrence will end on a date, specified in &#x60;&#x60;&#x60;timeframe-recurrence-end-date&#x60;&#x60;&#x60; |
**timeframe_recurrence_end_date** | **string** | End date of the recurrence - format: YYYYMMDD |
**timeframe_expiry_datetime** | **string** |  | [optional] [readonly]
**domain** | **string** |  | [optional] [readonly]
**timeframe_next_observance_datetime** | **float[]** | List of the upcoming occurrences of the days of week if &#x60;&#x60;&#x60;recurrence&#x60;&#x60;&#x60; is configured as &#x60;&#x60;&#x60;custom&#x60;&#x60;&#x60;, formatted as epoch timestamp in seconds | [optional]
**timeframe_recurrence_rrule** | **string** |  | [optional] [readonly]
**timeframe_is_v1** | **bool** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
