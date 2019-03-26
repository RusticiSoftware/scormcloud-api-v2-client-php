# SettingItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] 
**effective_value** | **string** | The value of this setting that would be used if read at this level, including defaults, fallback, and values set at less specific levels. | [optional] 
**effective_value_source** | **string** | The source of this effective value, default, fallback, or the level the value was set at. | [optional] 
**explicit_value** | **string** | The value of this setting that is explicitly set at this level. If not present, the setting is not specified at this level. | [optional] 
**metadata** | [**\RusticiSoftware\Cloud\V2\RusticiSoftware\Cloud\V2\Model\SettingMetadata**](SettingMetadata.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


