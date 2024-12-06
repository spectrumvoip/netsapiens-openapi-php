# # CreateSubscriptionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**model** | **string** | This is the type of data that will be sent. you will need to reqest multiple subscriptions if you want more than one model. Addtional details available in guide at https://docs.ns-api.com/docs/event-subscriptions-1 | [optional]
**post_url** | **string** | This is the url the API will be posting data to. Should be in the format including https://. Can make a custom port if needed and the URL should have a valid SSL certificate as well. Http:// is supproted but not ideal for production. | [optional]
**subscription_geo_support** | [**\SpectrumVoip\\\\NetSapiens\Model\YesNoStringYesDefault**](YesNoStringYesDefault.md) | When enabled this rule is available to be user though it may not be active as the timeframe might not match the current time or there could be other hihger priority timeframes. | [optional]
**reseller** | **string** | This is the reseller that the subscription will filter data for. * will be used for all resellers, but only valid with Super User scope on the request. | [optional]
**domain** | **string** | This is the domain that the subscription will filter data for. \&quot;*\&quot; will be used for all domains, but only valid with Super User scope | [optional] [default to '*']
**user** | **string** | This is the user that the subscription will filter data for. * will be used for all users. | [optional] [default to '*']
**preferred_server** | **string** | This is the server hostname for the prefered server for this subscription, meaning if this server is up and online it will be the one sending the events. It wil fail back to this servre after 60s of stability. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
