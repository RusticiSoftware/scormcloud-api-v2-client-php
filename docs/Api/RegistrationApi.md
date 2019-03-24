# RusticiSoftware\Cloud\V2\RegistrationApi

All URIs are relative to *https://dev.cloud.scorm.com/api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNewRegistrationInstance**](RegistrationApi.md#createNewRegistrationInstance) | **POST** /registrations/{registrationId}/instances | Create a new instance for this registration specified by the registration ID
[**createRegistration**](RegistrationApi.md#createRegistration) | **POST** /registrations | Create a registration.
[**deleteRegistration**](RegistrationApi.md#deleteRegistration) | **DELETE** /registrations/{registrationId} | Delete &#x60;registrationId&#x60;
[**deleteRegistrationConfigurationSetting**](RegistrationApi.md#deleteRegistrationConfigurationSetting) | **DELETE** /registrations/{registrationId}/configuration/{settingId} | Clears the &#x60;settingId&#x60; value for this registration
[**deleteRegistrationInstanceConfigurationSetting**](RegistrationApi.md#deleteRegistrationInstanceConfigurationSetting) | **DELETE** /registrations/{registrationId}/instances/{instanceId}/configuration/{settingId} | Clears the &#x60;settingId&#x60; value for this registration instance
[**deleteRegistrationProgress**](RegistrationApi.md#deleteRegistrationProgress) | **DELETE** /registrations/{registrationId}/progress | Delete registration progress (clear registration)
[**deleteRegistrationsGlobalData**](RegistrationApi.md#deleteRegistrationsGlobalData) | **DELETE** /registrations/{registrationId}/globalData | Delete global data associated with &#x60;registrationId&#x60;
[**getRegistrationConfiguration**](RegistrationApi.md#getRegistrationConfiguration) | **GET** /registrations/{registrationId}/configuration | Returns all configuration settings for this registration
[**getRegistrationInstanceConfiguration**](RegistrationApi.md#getRegistrationInstanceConfiguration) | **GET** /registrations/{registrationId}/instances/{instanceId}/configuration | Returns all configuration settings for this registration instance
[**getRegistrationInstanceLaunchHistory**](RegistrationApi.md#getRegistrationInstanceLaunchHistory) | **GET** /registrations/{registrationId}/instances/{instanceId}/launchHistory | Returns history of this registration&#39;s launches
[**getRegistrationInstanceProgress**](RegistrationApi.md#getRegistrationInstanceProgress) | **GET** /registrations/{registrationId}/instances/{instanceId} | Get registration progress for instance &#x60;instanceId&#x60; of &#x60;registrationId&#x60;
[**getRegistrationInstanceStatements**](RegistrationApi.md#getRegistrationInstanceStatements) | **GET** /registrations/{registrationId}/instances/{instanceId}/xAPIStatements | Get xAPI statements for instance &#x60;instanceId&#x60; of &#x60;registrationId&#x60;
[**getRegistrationInstances**](RegistrationApi.md#getRegistrationInstances) | **GET** /registrations/{registrationId}/instances | Get all the instances of this the registration specified by the registration ID
[**getRegistrationLaunchHistory**](RegistrationApi.md#getRegistrationLaunchHistory) | **GET** /registrations/{registrationId}/launchHistory | Returns history of this registration&#39;s launches
[**getRegistrationLaunchLink**](RegistrationApi.md#getRegistrationLaunchLink) | **POST** /registrations/{registrationId}/launchLink | Returns the link to use to launch this registration
[**getRegistrationProgress**](RegistrationApi.md#getRegistrationProgress) | **GET** /registrations/{registrationId} | Get registration progress for &#x60;registrationId&#x60;
[**getRegistrationStatements**](RegistrationApi.md#getRegistrationStatements) | **GET** /registrations/{registrationId}/xAPIStatements | Get xAPI statements for &#x60;registrationId&#x60;
[**getRegistrations**](RegistrationApi.md#getRegistrations) | **GET** /registrations | Gets a list of registrations including a summary of the status of each registration.
[**registrationExists**](RegistrationApi.md#registrationExists) | **HEAD** /registrations/{registrationId} | Does this registration exist?
[**setRegistrationConfiguration**](RegistrationApi.md#setRegistrationConfiguration) | **POST** /registrations/{registrationId}/configuration | Set configuration settings for this registration.
[**setRegistrationInstanceConfiguration**](RegistrationApi.md#setRegistrationInstanceConfiguration) | **POST** /registrations/{registrationId}/instances/{instanceId}/configuration | Set configuration settings for this registration instance.


# **createNewRegistrationInstance**
> createNewRegistrationInstance($registration_id)

Create a new instance for this registration specified by the registration ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration

try {
    $api_instance->createNewRegistrationInstance($registration_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->createNewRegistrationInstance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRegistration**
> createRegistration($registration, $course_version)

Create a registration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration = new \RusticiSoftware\Cloud\V2\Model\CreateRegistrationSchema(); // \RusticiSoftware\Cloud\V2\Model\CreateRegistrationSchema | 
$course_version = 56; // int | The version of the course you want to create the registration for. Unless you have a reason for using this you probably do not need to.

try {
    $api_instance->createRegistration($registration, $course_version);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->createRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration** | [**\RusticiSoftware\Cloud\V2\Model\CreateRegistrationSchema**](../Model/\RusticiSoftware\Cloud\V2\Model\CreateRegistrationSchema.md)|  |
 **course_version** | **int**| The version of the course you want to create the registration for. Unless you have a reason for using this you probably do not need to. | [optional]

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRegistration**
> deleteRegistration($registration_id)

Delete `registrationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration

try {
    $api_instance->deleteRegistration($registration_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->deleteRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRegistrationConfigurationSetting**
> deleteRegistrationConfigurationSetting($registration_id, $setting_id)

Clears the `settingId` value for this registration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration
$setting_id = "setting_id_example"; // string | 

try {
    $api_instance->deleteRegistrationConfigurationSetting($registration_id, $setting_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->deleteRegistrationConfigurationSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |
 **setting_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRegistrationInstanceConfigurationSetting**
> deleteRegistrationInstanceConfigurationSetting($registration_id, $instance_id, $setting_id)

Clears the `settingId` value for this registration instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration
$instance_id = 56; // int | The instance of this registration
$setting_id = "setting_id_example"; // string | 

try {
    $api_instance->deleteRegistrationInstanceConfigurationSetting($registration_id, $instance_id, $setting_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->deleteRegistrationInstanceConfigurationSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |
 **instance_id** | **int**| The instance of this registration |
 **setting_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRegistrationProgress**
> deleteRegistrationProgress($registration_id)

Delete registration progress (clear registration)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration

try {
    $api_instance->deleteRegistrationProgress($registration_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->deleteRegistrationProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRegistrationsGlobalData**
> deleteRegistrationsGlobalData($registration_id)

Delete global data associated with `registrationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration

try {
    $api_instance->deleteRegistrationsGlobalData($registration_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->deleteRegistrationsGlobalData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationConfiguration**
> \RusticiSoftware\Cloud\V2\Model\SettingListSchema getRegistrationConfiguration($registration_id, $include_metadata)

Returns all configuration settings for this registration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration
$include_metadata = false; // bool | 

try {
    $result = $api_instance->getRegistrationConfiguration($registration_id, $include_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |
 **include_metadata** | **bool**|  | [optional] [default to false]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\SettingListSchema**](../Model/SettingListSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationInstanceConfiguration**
> \RusticiSoftware\Cloud\V2\Model\SettingListSchema getRegistrationInstanceConfiguration($registration_id, $instance_id, $include_metadata)

Returns all configuration settings for this registration instance

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration
$instance_id = 56; // int | The instance of this registration
$include_metadata = false; // bool | 

try {
    $result = $api_instance->getRegistrationInstanceConfiguration($registration_id, $instance_id, $include_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationInstanceConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |
 **instance_id** | **int**| The instance of this registration |
 **include_metadata** | **bool**|  | [optional] [default to false]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\SettingListSchema**](../Model/SettingListSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationInstanceLaunchHistory**
> \RusticiSoftware\Cloud\V2\Model\LaunchHistoryListSchema getRegistrationInstanceLaunchHistory($registration_id, $instance_id, $include_history_log)

Returns history of this registration's launches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration
$instance_id = 56; // int | The instance of this registration
$include_history_log = false; // bool | Whether to include the history log in the launch history

try {
    $result = $api_instance->getRegistrationInstanceLaunchHistory($registration_id, $instance_id, $include_history_log);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationInstanceLaunchHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |
 **instance_id** | **int**| The instance of this registration |
 **include_history_log** | **bool**| Whether to include the history log in the launch history | [optional] [default to false]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\LaunchHistoryListSchema**](../Model/LaunchHistoryListSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationInstanceProgress**
> \RusticiSoftware\Cloud\V2\Model\RegistrationSchema getRegistrationInstanceProgress($registration_id, $instance_id, $include_child_results, $include_interactions_and_objectives, $include_runtime)

Get registration progress for instance `instanceId` of `registrationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration
$instance_id = 56; // int | The instance of this registration
$include_child_results = false; // bool | Include information about each learning object, not just the top level in the results
$include_interactions_and_objectives = false; // bool | Include interactions and objectives in the results
$include_runtime = false; // bool | Include runtime details in the results

try {
    $result = $api_instance->getRegistrationInstanceProgress($registration_id, $instance_id, $include_child_results, $include_interactions_and_objectives, $include_runtime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationInstanceProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |
 **instance_id** | **int**| The instance of this registration |
 **include_child_results** | **bool**| Include information about each learning object, not just the top level in the results | [optional] [default to false]
 **include_interactions_and_objectives** | **bool**| Include interactions and objectives in the results | [optional] [default to false]
 **include_runtime** | **bool**| Include runtime details in the results | [optional] [default to false]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\RegistrationSchema**](../Model/RegistrationSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationInstanceStatements**
> \RusticiSoftware\Cloud\V2\Model\XapiStatementResult getRegistrationInstanceStatements($registration_id, $instance_id, $since, $until, $more)

Get xAPI statements for instance `instanceId` of `registrationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration
$instance_id = 56; // int | The instance of this registration
$since = new \DateTime(); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime(); // \DateTime | Only items updated before the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of registration lists, where needed. An opaque value, construction and parsing may change without notice.

try {
    $result = $api_instance->getRegistrationInstanceStatements($registration_id, $instance_id, $since, $until, $more);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationInstanceStatements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |
 **instance_id** | **int**| The instance of this registration |
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated before the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **more** | **string**| Value for this parameter will be provided in the &#39;more&#39; property of registration lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\XapiStatementResult**](../Model/XapiStatementResult.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationInstances**
> \RusticiSoftware\Cloud\V2\Model\RegistrationListSchema getRegistrationInstances($registration_id, $until, $since, $more, $include_child_results, $include_interactions_and_objectives, $include_runtime)

Get all the instances of this the registration specified by the registration ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration
$until = new \DateTime(); // \DateTime | Only items updated before the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$since = new \DateTime(); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of registration lists, where needed. An opaque value, construction and parsing may change without notice.
$include_child_results = false; // bool | Include information about each learning object, not just the top level in the results
$include_interactions_and_objectives = false; // bool | Include interactions and objectives in the results
$include_runtime = false; // bool | Include runtime details in the results

try {
    $result = $api_instance->getRegistrationInstances($registration_id, $until, $since, $more, $include_child_results, $include_interactions_and_objectives, $include_runtime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationInstances: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |
 **until** | **\DateTime**| Only items updated before the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **more** | **string**| Value for this parameter will be provided in the &#39;more&#39; property of registration lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]
 **include_child_results** | **bool**| Include information about each learning object, not just the top level in the results | [optional] [default to false]
 **include_interactions_and_objectives** | **bool**| Include interactions and objectives in the results | [optional] [default to false]
 **include_runtime** | **bool**| Include runtime details in the results | [optional] [default to false]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\RegistrationListSchema**](../Model/RegistrationListSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationLaunchHistory**
> \RusticiSoftware\Cloud\V2\Model\LaunchHistoryListSchema getRegistrationLaunchHistory($registration_id, $include_history_log)

Returns history of this registration's launches

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration
$include_history_log = false; // bool | Whether to include the history log in the launch history

try {
    $result = $api_instance->getRegistrationLaunchHistory($registration_id, $include_history_log);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationLaunchHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |
 **include_history_log** | **bool**| Whether to include the history log in the launch history | [optional] [default to false]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\LaunchHistoryListSchema**](../Model/LaunchHistoryListSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationLaunchLink**
> \RusticiSoftware\Cloud\V2\Model\LaunchLinkSchema getRegistrationLaunchLink($registration_id, $launch_link_request)

Returns the link to use to launch this registration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration
$launch_link_request = new \RusticiSoftware\Cloud\V2\Model\LaunchLinkRequestSchema(); // \RusticiSoftware\Cloud\V2\Model\LaunchLinkRequestSchema | 

try {
    $result = $api_instance->getRegistrationLaunchLink($registration_id, $launch_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationLaunchLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |
 **launch_link_request** | [**\RusticiSoftware\Cloud\V2\Model\LaunchLinkRequestSchema**](../Model/\RusticiSoftware\Cloud\V2\Model\LaunchLinkRequestSchema.md)|  |

### Return type

[**\RusticiSoftware\Cloud\V2\Model\LaunchLinkSchema**](../Model/LaunchLinkSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationProgress**
> \RusticiSoftware\Cloud\V2\Model\RegistrationSchema getRegistrationProgress($registration_id, $include_child_results, $include_interactions_and_objectives, $include_runtime)

Get registration progress for `registrationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration
$include_child_results = false; // bool | Include information about each learning object, not just the top level in the results
$include_interactions_and_objectives = false; // bool | Include interactions and objectives in the results
$include_runtime = false; // bool | Include runtime details in the results

try {
    $result = $api_instance->getRegistrationProgress($registration_id, $include_child_results, $include_interactions_and_objectives, $include_runtime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |
 **include_child_results** | **bool**| Include information about each learning object, not just the top level in the results | [optional] [default to false]
 **include_interactions_and_objectives** | **bool**| Include interactions and objectives in the results | [optional] [default to false]
 **include_runtime** | **bool**| Include runtime details in the results | [optional] [default to false]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\RegistrationSchema**](../Model/RegistrationSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrationStatements**
> \RusticiSoftware\Cloud\V2\Model\XapiStatementResult getRegistrationStatements($registration_id, $since, $until, $more)

Get xAPI statements for `registrationId`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration
$since = new \DateTime(); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime(); // \DateTime | Only items updated before the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of registration lists, where needed. An opaque value, construction and parsing may change without notice.

try {
    $result = $api_instance->getRegistrationStatements($registration_id, $since, $until, $more);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrationStatements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated before the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **more** | **string**| Value for this parameter will be provided in the &#39;more&#39; property of registration lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\XapiStatementResult**](../Model/XapiStatementResult.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRegistrations**
> \RusticiSoftware\Cloud\V2\Model\RegistrationListSchema getRegistrations($course_id, $learner_id, $since, $until, $more, $include_child_results, $include_interactions_and_objectives, $include_runtime)

Gets a list of registrations including a summary of the status of each registration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$course_id = "course_id_example"; // string | Only registrations for the specified course id will be included.
$learner_id = "learner_id_example"; // string | Only registrations for the specified learner id will be included.
$since = new \DateTime(); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime(); // \DateTime | Only items updated before the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of registration lists, where needed. An opaque value, construction and parsing may change without notice.
$include_child_results = false; // bool | Include information about each learning object, not just the top level in the results
$include_interactions_and_objectives = false; // bool | Include interactions and objectives in the results
$include_runtime = false; // bool | Include runtime details in the results

try {
    $result = $api_instance->getRegistrations($course_id, $learner_id, $since, $until, $more, $include_child_results, $include_interactions_and_objectives, $include_runtime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->getRegistrations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| Only registrations for the specified course id will be included. | [optional]
 **learner_id** | **string**| Only registrations for the specified learner id will be included. | [optional]
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated before the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **more** | **string**| Value for this parameter will be provided in the &#39;more&#39; property of registration lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]
 **include_child_results** | **bool**| Include information about each learning object, not just the top level in the results | [optional] [default to false]
 **include_interactions_and_objectives** | **bool**| Include interactions and objectives in the results | [optional] [default to false]
 **include_runtime** | **bool**| Include runtime details in the results | [optional] [default to false]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\RegistrationListSchema**](../Model/RegistrationListSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrationExists**
> registrationExists($registration_id)

Does this registration exist?

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration

try {
    $api_instance->registrationExists($registration_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->registrationExists: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRegistrationConfiguration**
> setRegistrationConfiguration($registration_id, $configuration_settings)

Set configuration settings for this registration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration
$configuration_settings = new \RusticiSoftware\Cloud\V2\Model\SettingsPostSchema(); // \RusticiSoftware\Cloud\V2\Model\SettingsPostSchema | 

try {
    $api_instance->setRegistrationConfiguration($registration_id, $configuration_settings);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->setRegistrationConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |
 **configuration_settings** | [**\RusticiSoftware\Cloud\V2\Model\SettingsPostSchema**](../Model/\RusticiSoftware\Cloud\V2\Model\SettingsPostSchema.md)|  |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setRegistrationInstanceConfiguration**
> setRegistrationInstanceConfiguration($registration_id, $instance_id, $configuration_settings)

Set configuration settings for this registration instance.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: APP_NORMAL
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');
// Configure OAuth2 access token for authorization: OAUTH
RusticiSoftware\Cloud\V2\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new RusticiSoftware\Cloud\V2\Api\RegistrationApi();
$registration_id = "registration_id_example"; // string | id for this registration
$instance_id = 56; // int | The instance of this registration
$configuration_settings = new \RusticiSoftware\Cloud\V2\Model\SettingsPostSchema(); // \RusticiSoftware\Cloud\V2\Model\SettingsPostSchema | 

try {
    $api_instance->setRegistrationInstanceConfiguration($registration_id, $instance_id, $configuration_settings);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->setRegistrationInstanceConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registration_id** | **string**| id for this registration |
 **instance_id** | **int**| The instance of this registration |
 **configuration_settings** | [**\RusticiSoftware\Cloud\V2\Model\SettingsPostSchema**](../Model/\RusticiSoftware\Cloud\V2\Model\SettingsPostSchema.md)|  |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

