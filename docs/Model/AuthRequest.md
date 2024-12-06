# # AuthRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**grant_type** | **string** | This is the type of authentication request being made. &#39;password&#39; is most common if using username and password from end user to grant access. | [default to 'password']
**client_id** | **string** | This is the client_id provided to the developer for accessing the api. Will match with the client_secret |
**client_secret** | **string** | This is the client_secret provided to the developer for accessing the api. Will match with the client_id |
**username** | **string** | This is the username and logic for the user. This may look like a uid (user@domain) or could be something else if setup diffferent including a email address potentially. |
**password** | **string** | This is the password for the user requesting access. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
