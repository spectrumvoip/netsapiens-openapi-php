# # DomainsDomainVideoSubscriptionSlugPostRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**switch_plan** | **bool** | If specified and set to the subscription ID of one of the company’s current plans, that plan will be canceled and used in to prorate the initial amount of the new plan (plan switching) If set to null, the current plan(s) of the company will not be canceled and instead the company will be subscribed to the provided plan in addition to their existing plan(s). When omitted (no key/value not present in the request body), the default behavior of switching the company’s current plan with the new plan will be applied. | [optional]
**host_limit** | **int** | A positive integer value that the new subscription’s host limit should be set to. When subscribing to a product that is using the per-host pricing method, the host_limit value provided will be multiplied by the per-host price of the product to determine and set the total amount of the monthly subscription charges. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
