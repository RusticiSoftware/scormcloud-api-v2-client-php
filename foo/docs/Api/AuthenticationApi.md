# RusticiSoftware\Cloud\V2\AuthenticationApi

All URIs are relative to *https://dev.cloud.scorm.com/api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAppToken**](AuthenticationApi.md#getAppToken) | **POST** /oauth/authenticate/application/token | Authenticates for a oauth token


# **getAppToken**
> \RusticiSoftware\Cloud\V2\Model\ApplicationToken getAppToken($scope, $expiration)

Authenticates for a oauth token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new RusticiSoftware\Cloud\V2\Api\AuthenticationApi();
$scope = "scope_example"; // string | 
$expiration = 300; // int | 

try {
    $result = $api_instance->getAppToken($scope, $expiration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getAppToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scope** | **string**|  |
 **expiration** | **int**|  | [optional] [default to 300]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\ApplicationToken**](../Model/ApplicationToken.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

