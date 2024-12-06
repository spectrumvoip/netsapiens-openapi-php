# # JwtResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aud** | **string** | The \&quot;aud\&quot; (audience) claim identifies the recipients that the JWT is    intended for.  Each principal intended to process the JWT MUST    identify itself with a value in the audience claim.  If the principal    processing the claim does not identify itself with a value in the    \&quot;aud\&quot; claim when this claim is present, then the JWT MUST be    rejected.  In the general case, the \&quot;aud\&quot; value is an array of case-    sensitive strings, each containing a StringOrURI value.  In the    special case when the JWT has one audience, the \&quot;aud\&quot; value MAY be a    single case-sensitive string containing a StringOrURI value.  The    interpretation of audience values is generally application specific.    Use of this claim is OPTIONAL. | [optional]
**exp** | **int** | The \&quot;exp\&quot; (expiration time) claim identifies the expiration time on    or after which the JWT MUST NOT be accepted for processing.  The    processing of the \&quot;exp\&quot; claim requires that the current date/time    MUST be before the expiration date/time listed in the \&quot;exp\&quot; claim.  Implementers MAY provide for some small leeway, usually no more than    a few minutes, to account for clock skew.  Its value MUST be a number    containing a NumericDate value.  Use of this claim is OPTIONAL. | [optional]
**iat** | **int** | The \&quot;iat\&quot; (issued at) claim identifies the time at which the JWT was    issued.  This claim can be used to determine the age of the JWT.  Its    value MUST be a number containing a NumericDate value.  Use of this    claim is OPTIONAL. | [optional]
**iss** | **string** | The \&quot;iss\&quot; (issuer) claim identifies the principal that issued the    JWT.  The processing of this claim is generally application specific.    The \&quot;iss\&quot; value is a case-sensitive string containing a StringOrURI    value.  Use of this claim is OPTIONAL. | [optional]
**jti** | **string** | The \&quot;jti\&quot; (JWT ID) claim provides a unique identifier for the JWT.    The identifier value MUST be assigned in a manner that ensures that    there is a negligible probability that the same value will be    accidentally assigned to a different data object; if the application    uses multiple issuers, collisions MUST be prevented among values    produced by different issuers as well.  The \&quot;jti\&quot; claim can be used    to prevent the JWT from being replayed.  The \&quot;jti\&quot; value is a case-    sensitive string.  Use of this claim is OPTIONAL. | [optional]
**sub** | **string** | The \&quot;sub\&quot; (subject) claim identifies the principal that is the    subject of the JWT.  The claims in a JWT are normally statements    about the subject.  The subject value MUST either be scoped to be    locally unique in the context of the issuer or be globally unique.    The processing of this claim is generally application specific.  The    \&quot;sub\&quot; value is a case-sensitive string containing a StringOrURI    value.  Use of this claim is OPTIONAL. | [optional]
**time_out** | **int** | The time is the number of miliseconds the JWT will be valid for. | [optional]
**domain** | **string** | This is the main organization name. This is used to link resource to its group/tenant/organization/enterprise. ~ and * can be used alone in special cases to mean My Domain (~) and All Domains (\\*). | [optional]
**territory** | **string** | This is the reseller that the token will be limited to. | [optional]
**user** | **string** | This is the user that the token will be limited to. | [optional]
**user_email** | **string** | The user&#39;s email address if defined. |
**user_scope** | **string** | The user&#39;s scope if defined. |
**display_name** | **string** | The user&#39;s display name (first + last) if defined. |
**apiversion** | **string** | The version of the netsapiens API used in token generation | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
