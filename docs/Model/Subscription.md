# # Subscription

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | This is the main subscription id. This will be needed to edit and delete the subscription. |
**model** | **string** | This is the type of data that will be sent. you will need to reqest multiple subscriptions if you want more than one model. Addtional details available in guide at https://docs.ns-api.com/docs/event-subscriptions-1 | [optional]
**post_url** | **string** | This is the url the API will be posting data to. Should be in the format including https://. Can make a custom port if needed and the URL should have a valid SSL certificate as well. Http:// is supproted but not ideal for production. | [optional]
**subscription_geo_support** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**user_scope** | [**\SpectrumVoip\\\\NetSapiens\Model\Scopes**](Scopes.md) | This is the scope that should be enforced in combination with the reseller, domain and user fields. it will be set using the scope used to create the subscription. | [optional]
**reseller** | **string** | This is the reseller that the subscription will filter data for. * will be used for all resellers, but only valid with Super User scope on the request. | [optional]
**domain** | **string** | This is the domain that the subscription will filter data for. \&quot;*\&quot; will be used for all domains, but only valid with Super User scope | [optional] [default to '*']
**user** | **string** | This is the user that the subscription will filter data for. * will be used for all users. | [optional] [default to '*']
**subscription_creation_datetime** | **\DateTime** | This is a timestamp of creation of the event subscrtipion. | [optional]
**subscription_expires_datetime** | **\DateTime** | This timestamp in the format of YYYY-MM-DD HH:MM:SS will be with the subscription will expire. After it expires it will be removed after some amount of time. If left blank it will set the expires time to the expires time of the timed token used, if using a APIkey it will be 20 years from the creation date that it will set for the expires for the new subscription | [optional]
**preferred_server** | **string** | This is the server hostname for the prefered server for this subscription, meaning if this server is up and online it will be the one sending the events. It wil fail back to this servre after 60s of stability. | [optional]
**current_active_server** | **string** | This is the current server that is running this schedule. It will chagne only when a new server takes over and is a read only field. | [optional] [readonly]
**status** | **string** | This is the status of the schedule. A new schedule will get \&quot;pending\&quot; till it gets some data to send and once successfull it will go to \&quot;active\&quot;. If any attempts get a error over a interval it will toggle this field to \&quot;error\&quot; and reset only once it gets a clean interval of posts. | [optional] [readonly]
**error_count** | **int** | This is the number of attempted post&#39;s that resulted in a error, either an inability to send to a server (network,dns, timeout, etc..) or a response code that is above a 302. This value can be \&quot;reset\&quot; by setting it to 0 in a update request, but only 0 is allowed value. | [optional]
**posts_count** | **int** | This is the number of attempted post&#39;s in this schedule. This includes error and success attempts. This value can be \&quot;reset\&quot; by setting it to 0 in a update request, but only 0 is allowed value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
