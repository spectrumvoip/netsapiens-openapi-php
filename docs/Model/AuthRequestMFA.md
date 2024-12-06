# # AuthRequestMFA

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**grant_type** | **string** | This is the type of authentication request being made. &#39;mfa&#39; would be needed in the second request with MFA passcode. | [default to 'mfa']
**client_id** | **string** | This is the client_id provided to the developer for accessing the api. Will match with the client_secret |
**client_secret** | **string** | This is the client_secret provided to the developer for accessing the api. Will match with the client_id |
**username** | **string** | This is the username and logic for the user. This may look like a uid (user@domain) or could be something else if setup diffferent including a email address potentially. |
**password** | **string** | This is the password for the user requesting access. |
**mfa_type** | **string** | This value will be provided in response to a auth request if MFA is needed. Move value from that token to this request. Likely will be &#39;authenticator&#39; | [default to 'authenticator']
**mfa_vendor** | **string** | This value will be provided in response to a auth request if MFA is needed. Move value from that token to this request.  Likely will be &#39;google&#39; | [default to 'google']
**ns_id_type** | **string** | Will likely be subscriber as the value here to defierentiate between authenticator for api/portal and mfa with admin ui | [default to 'subscriber']
**passcode** | **string** | This will be the 6 digit numberic passcode provided by a |
**access_token** | **string** | This will be the access_token or jwt that was given with the scope of mfa_required |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
