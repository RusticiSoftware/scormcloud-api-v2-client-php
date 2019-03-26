# CreateRegistrationSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**course_id** | **string** |  | 
**learner** | [**\RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\LearnerSchema**](LearnerSchema.md) |  | 
**registration_id** | **string** |  | 
**xapi_registration_id** | **string** | The xapiRegistrationId to be associated with this registration. If not specified, the system will assign an xapiRegistrationId. As per the xApi specification, this must be a UUID. | [optional] 
**learner_tags** | **string[]** |  | [optional] 
**course_tags** | **string[]** |  | [optional] 
**registration_tags** | **string[]** |  | [optional] 
**post_back** | [**\RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\PostBackSchema**](PostBackSchema.md) | Specifies an optional override URL for which to post activity and status data in real time as the course is completed. By default all of these settings are read from your configuration. | [optional] 
**initial_registration_state** | [**\RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\RegistrationSchema**](RegistrationSchema.md) |  | [optional] 
**initial_settings** | [**\RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\SettingsPostSchema**](SettingsPostSchema.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


