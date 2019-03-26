# RegistrationSchema

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**instance** | **int** |  | [optional] 
**xapi_registration_id** | **string** | xAPI registration id associated with this registration | [optional] 
**dispatch_id** | **string** | Dispatch ID for this registration, if applicable | [optional] 
**updated** | [**\DateTime**](\DateTime.md) |  | [optional] 
**registration_completion** | [**\RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\RegistrationCompletion**](RegistrationCompletion.md) |  | [optional] 
**registration_completion_amount** | **double** |  | [optional] 
**registration_success** | [**\RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\RegistrationSuccess**](RegistrationSuccess.md) |  | [optional] 
**score** | [**\RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\ScoreSchema**](ScoreSchema.md) |  | [optional] 
**total_seconds_tracked** | **double** |  | [optional] 
**first_access_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**last_access_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**completed_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**course** | [**\RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\CourseReferenceSchema**](CourseReferenceSchema.md) |  | [optional] 
**learner** | [**\RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\LearnerSchema**](LearnerSchema.md) |  | [optional] 
**global_objectives** | [**\RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\ObjectiveSchema[]**](ObjectiveSchema.md) |  | [optional] 
**shared_data** | [**\RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\SharedDataEntrySchema[]**](SharedDataEntrySchema.md) |  | [optional] 
**suspended_activity_id** | **string** |  | [optional] 
**activity_details** | [**\RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\ActivityResultSchema**](ActivityResultSchema.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


