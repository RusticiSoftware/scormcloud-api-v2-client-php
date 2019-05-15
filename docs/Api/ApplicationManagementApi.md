# RusticiSoftware\Cloud\V2\ApplicationManagementApi

All URIs are relative to *https://cloud.scorm.com/api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createApplication**](ApplicationManagementApi.md#createApplication) | **PUT** /appManagement/applications/{applicationName} | Create a new application
[**createCredential**](ApplicationManagementApi.md#createCredential) | **POST** /appManagement/{childAppId}/credentials | Create credential
[**createToken**](ApplicationManagementApi.md#createToken) | **POST** /appManagement/token | Create token
[**deleteApplication**](ApplicationManagementApi.md#deleteApplication) | **DELETE** /appManagement/applications/{childAppId} | Delete an application.  If the application contains content, it must first be manually removed before calling this method, else an error will be thrown.
[**deleteCredential**](ApplicationManagementApi.md#deleteCredential) | **DELETE** /appManagement/{childAppId}/credentials/{credentialId} | Removes &#x60;credentialId&#x60; credentials
[**getApplicationConfiguration**](ApplicationManagementApi.md#getApplicationConfiguration) | **GET** /appManagement/configuration | Returns all configuration settings for this level
[**getApplicationList**](ApplicationManagementApi.md#getApplicationList) | **GET** /appManagement/applications | Get list of all applications in this realm.
[**getCredentials**](ApplicationManagementApi.md#getCredentials) | **GET** /appManagement/{childAppId}/credentials | List of credentials
[**setApplicationConfiguration**](ApplicationManagementApi.md#setApplicationConfiguration) | **POST** /appManagement/configuration | Set configuration settings for this level.
[**updateCredential**](ApplicationManagementApi.md#updateCredential) | **PUT** /appManagement/{childAppId}/credentials/{credentialId} | Update the name or status associated with &#x60;credentialId&#x60;


# **createApplication**
> \RusticiSoftware\Cloud\V2\Model\ApplicationSchema createApplication($application_name)

Create a new application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAUTH
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RusticiSoftware\Cloud\V2\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_name = "application_name_example"; // string | 

try {
    $result = $apiInstance->createApplication($application_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->createApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **application_name** | **string**|  |

### Return type

[**\RusticiSoftware\Cloud\V2\Model\ApplicationSchema**](../Model/ApplicationSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCredential**
> \RusticiSoftware\Cloud\V2\Model\CredentialCreatedSchema createCredential($child_app_id, $credential_request)

Create credential

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAUTH
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RusticiSoftware\Cloud\V2\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$child_app_id = "child_app_id_example"; // string | 
$credential_request = new \RusticiSoftware\Cloud\V2\Model\CredentialRequestSchema(); // \RusticiSoftware\Cloud\V2\Model\CredentialRequestSchema | 

try {
    $result = $apiInstance->createCredential($child_app_id, $credential_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->createCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **child_app_id** | **string**|  |
 **credential_request** | [**\RusticiSoftware\Cloud\V2\Model\CredentialRequestSchema**](../Model/CredentialRequestSchema.md)|  |

### Return type

[**\RusticiSoftware\Cloud\V2\Model\CredentialCreatedSchema**](../Model/CredentialCreatedSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createToken**
> \RusticiSoftware\Cloud\V2\Model\StringResultSchema createToken($token_request)

Create token

Creates, signs and returns a token based on the provided permissions, if the credentials used to request the token have the permissions being requested. Note: the token is not stored and therefore can not be modified or deleted. The requested permissions are encoded in the token which is then signed. As long as the secret used to create it is not changed the token will be valid until it expires.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RusticiSoftware\Cloud\V2\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_request = new \RusticiSoftware\Cloud\V2\Model\TokenRequestSchema(); // \RusticiSoftware\Cloud\V2\Model\TokenRequestSchema | 

try {
    $result = $apiInstance->createToken($token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->createToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token_request** | [**\RusticiSoftware\Cloud\V2\Model\TokenRequestSchema**](../Model/TokenRequestSchema.md)|  |

### Return type

[**\RusticiSoftware\Cloud\V2\Model\StringResultSchema**](../Model/StringResultSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteApplication**
> deleteApplication($child_app_id)

Delete an application.  If the application contains content, it must first be manually removed before calling this method, else an error will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAUTH
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RusticiSoftware\Cloud\V2\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$child_app_id = "child_app_id_example"; // string | 

try {
    $apiInstance->deleteApplication($child_app_id);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->deleteApplication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **child_app_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCredential**
> deleteCredential($child_app_id, $credential_id)

Removes `credentialId` credentials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAUTH
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RusticiSoftware\Cloud\V2\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$child_app_id = "child_app_id_example"; // string | 
$credential_id = "credential_id_example"; // string | 

try {
    $apiInstance->deleteCredential($child_app_id, $credential_id);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->deleteCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **child_app_id** | **string**|  |
 **credential_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApplicationConfiguration**
> \RusticiSoftware\Cloud\V2\Model\SettingListSchema getApplicationConfiguration($learning_standard, $single_sco, $include_metadata)

Returns all configuration settings for this level

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAUTH
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RusticiSoftware\Cloud\V2\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$learning_standard = "learning_standard_example"; // string | If specified, the request will be scoped to the provided learning standard.
$single_sco = true; // bool | Required if learningStandard is specified. Scopes settings to whether a package has only one SCO or assignable unit within it or not. To apply a configuration setting to a learning standard for single and multi-SCO content, it must be set for both scopes.
$include_metadata = false; // bool | 

try {
    $result = $apiInstance->getApplicationConfiguration($learning_standard, $single_sco, $include_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->getApplicationConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **learning_standard** | **string**| If specified, the request will be scoped to the provided learning standard. | [optional]
 **single_sco** | **bool**| Required if learningStandard is specified. Scopes settings to whether a package has only one SCO or assignable unit within it or not. To apply a configuration setting to a learning standard for single and multi-SCO content, it must be set for both scopes. | [optional]
 **include_metadata** | **bool**|  | [optional] [default to false]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\SettingListSchema**](../Model/SettingListSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApplicationList**
> \RusticiSoftware\Cloud\V2\Model\ApplicationListSchema getApplicationList()

Get list of all applications in this realm.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAUTH
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RusticiSoftware\Cloud\V2\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getApplicationList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->getApplicationList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RusticiSoftware\Cloud\V2\Model\ApplicationListSchema**](../Model/ApplicationListSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCredentials**
> \RusticiSoftware\Cloud\V2\Model\CredentialListSchema getCredentials($child_app_id)

List of credentials

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAUTH
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RusticiSoftware\Cloud\V2\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$child_app_id = "child_app_id_example"; // string | 

try {
    $result = $apiInstance->getCredentials($child_app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->getCredentials: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **child_app_id** | **string**|  |

### Return type

[**\RusticiSoftware\Cloud\V2\Model\CredentialListSchema**](../Model/CredentialListSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setApplicationConfiguration**
> setApplicationConfiguration($configuration_settings, $learning_standard, $single_sco)

Set configuration settings for this level.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAUTH
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RusticiSoftware\Cloud\V2\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$configuration_settings = new \RusticiSoftware\Cloud\V2\Model\SettingsPostSchema(); // \RusticiSoftware\Cloud\V2\Model\SettingsPostSchema | 
$learning_standard = "learning_standard_example"; // string | If specified, the request will be scoped to the provided learning standard.
$single_sco = true; // bool | Required if learningStandard is specified. Scopes settings to whether a package has only one SCO or assignable unit within it or not. To apply a configuration setting to a learning standard for single and multi-SCO content, it must be set for both scopes.

try {
    $apiInstance->setApplicationConfiguration($configuration_settings, $learning_standard, $single_sco);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->setApplicationConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **configuration_settings** | [**\RusticiSoftware\Cloud\V2\Model\SettingsPostSchema**](../Model/SettingsPostSchema.md)|  |
 **learning_standard** | **string**| If specified, the request will be scoped to the provided learning standard. | [optional]
 **single_sco** | **bool**| Required if learningStandard is specified. Scopes settings to whether a package has only one SCO or assignable unit within it or not. To apply a configuration setting to a learning standard for single and multi-SCO content, it must be set for both scopes. | [optional]

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCredential**
> updateCredential($child_app_id, $credential_id, $credential_update)

Update the name or status associated with `credentialId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: OAUTH
$config = RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new RusticiSoftware\Cloud\V2\Api\ApplicationManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$child_app_id = "child_app_id_example"; // string | 
$credential_id = "credential_id_example"; // string | 
$credential_update = new \RusticiSoftware\Cloud\V2\Model\CredentialRequestSchema(); // \RusticiSoftware\Cloud\V2\Model\CredentialRequestSchema | 

try {
    $apiInstance->updateCredential($child_app_id, $credential_id, $credential_update);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationManagementApi->updateCredential: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **child_app_id** | **string**|  |
 **credential_id** | **string**|  |
 **credential_update** | [**\RusticiSoftware\Cloud\V2\Model\CredentialRequestSchema**](../Model/CredentialRequestSchema.md)|  |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

