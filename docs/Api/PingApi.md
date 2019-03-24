# RusticiSoftware\Cloud\V2\PingApi

All URIs are relative to *https://dev.cloud.scorm.com/api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pingAppId**](PingApi.md#pingAppId) | **GET** /ping | Get back a message indicating that the API is working.


# **pingAppId**
> \RusticiSoftware\Cloud\V2\Model\PingSchema pingAppId()

Get back a message indicating that the API is working.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\PingApi();

try {
    $result = $api_instance->pingAppId();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PingApi->pingAppId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RusticiSoftware\Cloud\V2\Model\PingSchema**](../Model/PingSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

