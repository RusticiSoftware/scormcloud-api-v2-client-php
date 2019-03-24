# PostBackSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** |  | [optional] 
**auth_type** | **string** | Optional parameter to specify how to authorize against the given postbackurl, can be &#39;form&#39; or &#39;httpbasic&#39;. If form authentication, the username and password for authentication are submitted as form fields &#39;username&#39; and &#39;password&#39;, and the registration data as the form field &#39;data&#39;. If httpbasic authentication is used, the username and password are placed in the standard Authorization HTTP header, and the registration data is the body of the message (sent as text/xml content type). This field is set to &#39;form&#39; by default. | [optional] [default to 'UNDEFINED']
**user_name** | **string** | The user name to be used in authorizing the postback of data to the URL specified by postback url. | [optional] 
**password** | **string** | The password to be used in authorizing the postback of data to the URL specified by postback url. | [optional] 
**results_format** | **string** | This parameter allows you to specify a level of detail in the information that is posted back while the course is being taken. It may be one of three values: &#39;course&#39; (course summary), &#39;activity&#39; (activity summary, or &#39;full&#39; (full detail), and is set to &#39;course&#39; by default. The information will be posted as xml, and the format of that xml is specified below under the method &#39;getRegistrationResult&#39; | [optional] [default to 'COURSE']

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


