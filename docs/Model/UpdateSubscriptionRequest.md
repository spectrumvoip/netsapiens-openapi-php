# # UpdateSubscriptionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**model** | **string** | This is the type of data that will be sent. you will need to reqest multiple subscriptions if you want more than one model. Addtional details available in guide at https://docs.ns-api.com/docs/event-subscriptions-1 | [optional]
**post_url** | **string** | This is the url the API will be posting data to. Should be in the format including https://. Can make a custom port if needed and the URL should have a valid SSL certificate as well. Http:// is supproted but not ideal for production. | [optional]
**subscription_geo_support** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**subscription_expires_datetime** | **\DateTime** | This timestamp in the format of YYYY-MM-DD HH:MM:SS will be with the subscription will expire. After it expires it will be removed after some amount of time. If left blank it will set the expires time to the expires time of the timed token used, if using a APIkey it will be 20 years from the creation date that it will set for the expires for the new subscription | [optional]
**preferred_server** | **string** | This is the server hostname for the prefered server for this subscription, meaning if this server is up and online it will be the one sending the events. It wil fail back to this servre after 60s of stability. | [optional]
**error_count** | **int** | This is the number of attempted post&#39;s that resulted in a error, either an inability to send to a server (network,dns, timeout, etc..) or a response code that is above a 302. This value can be \&quot;reset\&quot; by setting it to 0 in a update request, but only 0 is allowed value. | [optional]
**posts_count** | **int** | This is the number of attempted post&#39;s in this schedule. This includes error and success attempts. This value can be \&quot;reset\&quot; by setting it to 0 in a update request, but only 0 is allowed value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
