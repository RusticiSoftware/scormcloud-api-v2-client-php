# RusticiSoftware\Cloud\V2\CourseApi

All URIs are relative to *https://cloud.scorm.com/api/v2/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**buildCoursePreviewLaunchLink**](CourseApi.md#buildCoursePreviewLaunchLink) | **POST** /courses/{courseId}/preview | Returns the launch link to use to preview this course
[**buildCoursePreviewLaunchLinkWithVersion**](CourseApi.md#buildCoursePreviewLaunchLinkWithVersion) | **POST** /courses/{courseId}/versions/{versionId}/preview | Returns the link to use to preview this course
[**createFetchAndImportCourseJob**](CourseApi.md#createFetchAndImportCourseJob) | **POST** /courses/importJobs | Start a job to fetch and import a course.
[**createUploadAndImportCourseJob**](CourseApi.md#createUploadAndImportCourseJob) | **POST** /courses/importJobs/upload | Upload a course and start an import job for it.
[**deleteCourse**](CourseApi.md#deleteCourse) | **DELETE** /courses/{courseId} | Delete &#x60;courseId&#x60;
[**deleteCourseConfigurationSetting**](CourseApi.md#deleteCourseConfigurationSetting) | **DELETE** /courses/{courseId}/configuration/{settingId} | Clears the &#x60;settingId&#x60; value for this course
[**deleteCourseTags**](CourseApi.md#deleteCourseTags) | **DELETE** /courses/{courseId}/tags | Delete tags for this course
[**deleteCourseVersion**](CourseApi.md#deleteCourseVersion) | **DELETE** /courses/{courseId}/versions/{versionId} | Delete version &#x60;versionId&#x60; of &#x60;courseId&#x60;
[**deleteCourseVersionConfigurationSetting**](CourseApi.md#deleteCourseVersionConfigurationSetting) | **DELETE** /courses/{courseId}/versions/{versionId}/configuration/{settingId} | Clears the &#x60;settingId&#x60; value for this course and version.
[**getCourse**](CourseApi.md#getCourse) | **GET** /courses/{courseId} | Get information about &#x60;courseId&#x60;
[**getCourseConfiguration**](CourseApi.md#getCourseConfiguration) | **GET** /courses/{courseId}/configuration | Returns all configuration settings for this course
[**getCourseStatements**](CourseApi.md#getCourseStatements) | **GET** /courses/{courseId}/xAPIStatements | Get xAPI statements for &#x60;courseId&#x60;
[**getCourseTags**](CourseApi.md#getCourseTags) | **GET** /courses/{courseId}/tags | Get the tags for this course
[**getCourseVersionConfiguration**](CourseApi.md#getCourseVersionConfiguration) | **GET** /courses/{courseId}/versions/{versionId}/configuration | Returns all configuration settings for this course and version.
[**getCourseVersionInfo**](CourseApi.md#getCourseVersionInfo) | **GET** /courses/{courseId}/versions/{versionId} | Get version &#x60;versionId&#x60; of &#x60;courseId&#x60;
[**getCourseVersionStatements**](CourseApi.md#getCourseVersionStatements) | **GET** /courses/{courseId}/versions/{versionId}/xAPIStatements | Get xAPI statements for version &#x60;versionId&#x60; of &#x60;courseId&#x60;
[**getCourseVersions**](CourseApi.md#getCourseVersions) | **GET** /courses/{courseId}/versions | Get all versions of &#x60;courseId&#x60;
[**getCourses**](CourseApi.md#getCourses) | **GET** /courses | Get all courses for &#x60;appId&#x60;
[**getImportJobStatus**](CourseApi.md#getImportJobStatus) | **GET** /courses/importJobs/{importJobId} | Check the status of an import job.
[**putCourseTags**](CourseApi.md#putCourseTags) | **PUT** /courses/{courseId}/tags | Set the tags for this course
[**putCourseTagsBatch**](CourseApi.md#putCourseTagsBatch) | **PUT** /courses/tags | Sets all of the provided tags on all of the provided courses
[**setCourseConfiguration**](CourseApi.md#setCourseConfiguration) | **POST** /courses/{courseId}/configuration | Set configuration settings for this course.
[**setCourseTitle**](CourseApi.md#setCourseTitle) | **PUT** /courses/{courseId}/title | Sets the course title for &#x60;courseId&#x60;
[**setCourseVersionConfiguration**](CourseApi.md#setCourseVersionConfiguration) | **POST** /courses/{courseId}/versions/{versionId}/configuration | Set configuration settings for this course and version.


# **buildCoursePreviewLaunchLink**
> \RusticiSoftware\Cloud\V2\Model\LaunchLinkSchema buildCoursePreviewLaunchLink($course_id, $launch_link_request, $css_url)

Returns the launch link to use to preview this course

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 
$launch_link_request = new \RusticiSoftware\Cloud\V2\Model\LaunchLinkRequestSchema(); // \RusticiSoftware\Cloud\V2\Model\LaunchLinkRequestSchema | 
$css_url = "css_url_example"; // string | 

try {
    $result = $apiInstance->buildCoursePreviewLaunchLink($course_id, $launch_link_request, $css_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->buildCoursePreviewLaunchLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |
 **launch_link_request** | [**\RusticiSoftware\Cloud\V2\Model\LaunchLinkRequestSchema**](../Model/LaunchLinkRequestSchema.md)|  |
 **css_url** | **string**|  | [optional]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\LaunchLinkSchema**](../Model/LaunchLinkSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **buildCoursePreviewLaunchLinkWithVersion**
> \RusticiSoftware\Cloud\V2\Model\LaunchLinkSchema buildCoursePreviewLaunchLinkWithVersion($course_id, $version_id, $launch_link_request)

Returns the link to use to preview this course

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | The course version
$launch_link_request = new \RusticiSoftware\Cloud\V2\Model\LaunchLinkRequestSchema(); // \RusticiSoftware\Cloud\V2\Model\LaunchLinkRequestSchema | 

try {
    $result = $apiInstance->buildCoursePreviewLaunchLinkWithVersion($course_id, $version_id, $launch_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->buildCoursePreviewLaunchLinkWithVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |
 **version_id** | **int**| The course version |
 **launch_link_request** | [**\RusticiSoftware\Cloud\V2\Model\LaunchLinkRequestSchema**](../Model/LaunchLinkRequestSchema.md)|  |

### Return type

[**\RusticiSoftware\Cloud\V2\Model\LaunchLinkSchema**](../Model/LaunchLinkSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFetchAndImportCourseJob**
> \RusticiSoftware\Cloud\V2\Model\StringResultSchema createFetchAndImportCourseJob($course_id, $import_request, $may_create_new_version, $postback_url)

Start a job to fetch and import a course.

An import job will be started to fetch and import the referenced file, and the import job ID will be returned. If the import is successful, the imported course will be registered using the courseId provided.\"

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use.
$import_request = new \RusticiSoftware\Cloud\V2\Model\ImportFetchRequestSchema(); // \RusticiSoftware\Cloud\V2\Model\ImportFetchRequestSchema | 
$may_create_new_version = false; // bool | Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn't already exist.
$postback_url = "postback_url_example"; // string | An optional parameter that specifies a URL to send a postback to when the course has finished uploading.

try {
    $result = $apiInstance->createFetchAndImportCourseJob($course_id, $import_request, $may_create_new_version, $postback_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->createFetchAndImportCourseJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use. |
 **import_request** | [**\RusticiSoftware\Cloud\V2\Model\ImportFetchRequestSchema**](../Model/ImportFetchRequestSchema.md)|  |
 **may_create_new_version** | **bool**| Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn&#39;t already exist. | [optional] [default to false]
 **postback_url** | **string**| An optional parameter that specifies a URL to send a postback to when the course has finished uploading. | [optional]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\StringResultSchema**](../Model/StringResultSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createUploadAndImportCourseJob**
> \RusticiSoftware\Cloud\V2\Model\StringResultSchema createUploadAndImportCourseJob($course_id, $may_create_new_version, $file, $postback_url)

Upload a course and start an import job for it.

An import job will be started to import the posted file, and the import job ID will be returned. If the import is successful, the imported course will be registered using the courseId provided.

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use.
$may_create_new_version = false; // bool | Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn't already exist.
$file = "/path/to/file.txt"; // \SplFileObject | The zip file of the course contents to import.
$postback_url = "postback_url_example"; // string | An optional parameter that specifies a URL to send a postback to when the course has finished uploading.

try {
    $result = $apiInstance->createUploadAndImportCourseJob($course_id, $may_create_new_version, $file, $postback_url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->createUploadAndImportCourseJob: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**| A unique identifier your application will use to identify the course after import. Your application is responsible both for generating this unique ID and for keeping track of the ID for later use. |
 **may_create_new_version** | **bool**| Is it OK to create a new version of this course? If this is set to false and the course already exists, the upload will fail. If true and the course already exists then a new version will be created. No effect if the course doesn&#39;t already exist. | [optional] [default to false]
 **file** | **\SplFileObject**| The zip file of the course contents to import. | [optional]
 **postback_url** | **string**| An optional parameter that specifies a URL to send a postback to when the course has finished uploading. | [optional]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\StringResultSchema**](../Model/StringResultSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCourse**
> deleteCourse($course_id)

Delete `courseId`

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 

try {
    $apiInstance->deleteCourse($course_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->deleteCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCourseConfigurationSetting**
> deleteCourseConfigurationSetting($course_id, $setting_id)

Clears the `settingId` value for this course

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 
$setting_id = "setting_id_example"; // string | 

try {
    $apiInstance->deleteCourseConfigurationSetting($course_id, $setting_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->deleteCourseConfigurationSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |
 **setting_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCourseTags**
> deleteCourseTags($course_id, $tags)

Delete tags for this course

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 
$tags = new \RusticiSoftware\Cloud\V2\Model\TagListSchema(); // \RusticiSoftware\Cloud\V2\Model\TagListSchema | 

try {
    $apiInstance->deleteCourseTags($course_id, $tags);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->deleteCourseTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |
 **tags** | [**\RusticiSoftware\Cloud\V2\Model\TagListSchema**](../Model/TagListSchema.md)|  |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCourseVersion**
> deleteCourseVersion($course_id, $version_id)

Delete version `versionId` of `courseId`

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | The course version

try {
    $apiInstance->deleteCourseVersion($course_id, $version_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->deleteCourseVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |
 **version_id** | **int**| The course version |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCourseVersionConfigurationSetting**
> deleteCourseVersionConfigurationSetting($course_id, $version_id, $setting_id)

Clears the `settingId` value for this course and version.

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | The course version
$setting_id = "setting_id_example"; // string | 

try {
    $apiInstance->deleteCourseVersionConfigurationSetting($course_id, $version_id, $setting_id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->deleteCourseVersionConfigurationSetting: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |
 **version_id** | **int**| The course version |
 **setting_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourse**
> \RusticiSoftware\Cloud\V2\Model\CourseSchema getCourse($course_id, $include_registration_count, $include_course_metadata)

Get information about `courseId`

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 
$include_registration_count = false; // bool | Include the registration count in the results
$include_course_metadata = false; // bool | Include course metadata in the results. If the course has no metadata, adding this parameter has no effect.

try {
    $result = $apiInstance->getCourse($course_id, $include_registration_count, $include_course_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourse: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |
 **include_registration_count** | **bool**| Include the registration count in the results | [optional] [default to false]
 **include_course_metadata** | **bool**| Include course metadata in the results. If the course has no metadata, adding this parameter has no effect. | [optional] [default to false]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\CourseSchema**](../Model/CourseSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseConfiguration**
> \RusticiSoftware\Cloud\V2\Model\SettingListSchema getCourseConfiguration($course_id, $include_metadata)

Returns all configuration settings for this course

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 
$include_metadata = false; // bool | 

try {
    $result = $apiInstance->getCourseConfiguration($course_id, $include_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |
 **include_metadata** | **bool**|  | [optional] [default to false]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\SettingListSchema**](../Model/SettingListSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseStatements**
> \RusticiSoftware\Cloud\V2\Model\XapiStatementResult getCourseStatements($course_id, $learner_id, $since, $until, $more)

Get xAPI statements for `courseId`

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 
$learner_id = "learner_id_example"; // string | Only entries for the specified learner id will be included.
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated before the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of registration lists, where needed. An opaque value, construction and parsing may change without notice.

try {
    $result = $apiInstance->getCourseStatements($course_id, $learner_id, $since, $until, $more);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseStatements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |
 **learner_id** | **string**| Only entries for the specified learner id will be included. | [optional]
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

# **getCourseTags**
> \RusticiSoftware\Cloud\V2\Model\TagListSchema getCourseTags($course_id)

Get the tags for this course

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 

try {
    $result = $apiInstance->getCourseTags($course_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |

### Return type

[**\RusticiSoftware\Cloud\V2\Model\TagListSchema**](../Model/TagListSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseVersionConfiguration**
> \RusticiSoftware\Cloud\V2\Model\SettingListSchema getCourseVersionConfiguration($course_id, $version_id, $include_metadata)

Returns all configuration settings for this course and version.

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | The course version
$include_metadata = false; // bool | 

try {
    $result = $apiInstance->getCourseVersionConfiguration($course_id, $version_id, $include_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseVersionConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |
 **version_id** | **int**| The course version |
 **include_metadata** | **bool**|  | [optional] [default to false]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\SettingListSchema**](../Model/SettingListSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseVersionInfo**
> \RusticiSoftware\Cloud\V2\Model\CourseSchema getCourseVersionInfo($course_id, $version_id, $include_registration_count, $include_course_metadata)

Get version `versionId` of `courseId`

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | The course version
$include_registration_count = false; // bool | Include the registration count in the results
$include_course_metadata = false; // bool | Include course metadata in the results. If the course has no metadata, adding this parameter has no effect.

try {
    $result = $apiInstance->getCourseVersionInfo($course_id, $version_id, $include_registration_count, $include_course_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseVersionInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |
 **version_id** | **int**| The course version |
 **include_registration_count** | **bool**| Include the registration count in the results | [optional] [default to false]
 **include_course_metadata** | **bool**| Include course metadata in the results. If the course has no metadata, adding this parameter has no effect. | [optional] [default to false]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\CourseSchema**](../Model/CourseSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourseVersionStatements**
> \RusticiSoftware\Cloud\V2\Model\XapiStatementResult getCourseVersionStatements($course_id, $version_id, $learner_id, $since, $until, $more)

Get xAPI statements for version `versionId` of `courseId`

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | The course version
$learner_id = "learner_id_example"; // string | Only entries for the specified learner id will be included.
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated before the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of registration lists, where needed. An opaque value, construction and parsing may change without notice.

try {
    $result = $apiInstance->getCourseVersionStatements($course_id, $version_id, $learner_id, $since, $until, $more);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseVersionStatements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |
 **version_id** | **int**| The course version |
 **learner_id** | **string**| Only entries for the specified learner id will be included. | [optional]
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

# **getCourseVersions**
> \RusticiSoftware\Cloud\V2\Model\CourseListNonPagedSchema getCourseVersions($course_id, $since, $until, $include_registration_count, $include_course_metadata)

Get all versions of `courseId`

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated before the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$include_registration_count = false; // bool | Include the registration count in the results
$include_course_metadata = false; // bool | Include course metadata in the results. If the course has no metadata, adding this parameter has no effect.

try {
    $result = $apiInstance->getCourseVersions($course_id, $since, $until, $include_registration_count, $include_course_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourseVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated before the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **include_registration_count** | **bool**| Include the registration count in the results | [optional] [default to false]
 **include_course_metadata** | **bool**| Include course metadata in the results. If the course has no metadata, adding this parameter has no effect. | [optional] [default to false]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\CourseListNonPagedSchema**](../Model/CourseListNonPagedSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCourses**
> \RusticiSoftware\Cloud\V2\Model\CourseListSchema getCourses($more, $since, $until, $filter, $filter_by, $order_by, $include_registration_count, $include_course_metadata, $tags)

Get all courses for `appId`

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$more = "more_example"; // string | Value for this parameter will be provided in the 'more' property of registration lists, where needed. An opaque value, construction and parsing may change without notice.
$since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Only items updated before the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used.
$filter = "filter_example"; // string | Optional string which filters results by a specified field (described by filterBy).
$filter_by = "filter_by_example"; // string | Optional enum parameter for specifying the field on which to run the filter.  Defaults to course_id.
$order_by = "order_by_example"; // string | Optional enum parameter for specifying the field and order by which to sort the results.  Defaults to creation_date_desc.
$include_registration_count = false; // bool | Include the registration count in the results
$include_course_metadata = false; // bool | Include course metadata in the results. If the course has no metadata, adding this parameter has no effect.
$tags = array("tags_example"); // string[] | 

try {
    $result = $apiInstance->getCourses($more, $since, $until, $filter, $filter_by, $order_by, $include_registration_count, $include_course_metadata, $tags);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getCourses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **more** | **string**| Value for this parameter will be provided in the &#39;more&#39; property of registration lists, where needed. An opaque value, construction and parsing may change without notice. | [optional]
 **since** | **\DateTime**| Only items updated since the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **until** | **\DateTime**| Only items updated before the specified ISO 8601 TimeStamp (inclusive) are included. If a time zone is not specified, UTC time zone will be used. | [optional]
 **filter** | **string**| Optional string which filters results by a specified field (described by filterBy). | [optional]
 **filter_by** | **string**| Optional enum parameter for specifying the field on which to run the filter.  Defaults to course_id. | [optional]
 **order_by** | **string**| Optional enum parameter for specifying the field and order by which to sort the results.  Defaults to creation_date_desc. | [optional]
 **include_registration_count** | **bool**| Include the registration count in the results | [optional] [default to false]
 **include_course_metadata** | **bool**| Include course metadata in the results. If the course has no metadata, adding this parameter has no effect. | [optional] [default to false]
 **tags** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\RusticiSoftware\Cloud\V2\Model\CourseListSchema**](../Model/CourseListSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImportJobStatus**
> \RusticiSoftware\Cloud\V2\Model\ImportJobResultSchema getImportJobStatus($import_job_id)

Check the status of an import job.

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$import_job_id = "import_job_id_example"; // string | Id received when the import job was submitted to the importJobs resource.

try {
    $result = $apiInstance->getImportJobStatus($import_job_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getImportJobStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **import_job_id** | **string**| Id received when the import job was submitted to the importJobs resource. |

### Return type

[**\RusticiSoftware\Cloud\V2\Model\ImportJobResultSchema**](../Model/ImportJobResultSchema.md)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCourseTags**
> putCourseTags($course_id, $tags)

Set the tags for this course

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 
$tags = new \RusticiSoftware\Cloud\V2\Model\TagListSchema(); // \RusticiSoftware\Cloud\V2\Model\TagListSchema | 

try {
    $apiInstance->putCourseTags($course_id, $tags);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->putCourseTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |
 **tags** | [**\RusticiSoftware\Cloud\V2\Model\TagListSchema**](../Model/TagListSchema.md)|  |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCourseTagsBatch**
> putCourseTagsBatch($batch)

Sets all of the provided tags on all of the provided courses

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch = new \RusticiSoftware\Cloud\V2\Model\CourseTagsBatchSchema(); // \RusticiSoftware\Cloud\V2\Model\CourseTagsBatchSchema | 

try {
    $apiInstance->putCourseTagsBatch($batch);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->putCourseTagsBatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch** | [**\RusticiSoftware\Cloud\V2\Model\CourseTagsBatchSchema**](../Model/CourseTagsBatchSchema.md)|  |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCourseConfiguration**
> setCourseConfiguration($course_id, $configuration_settings)

Set configuration settings for this course.

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 
$configuration_settings = new \RusticiSoftware\Cloud\V2\Model\SettingsPostSchema(); // \RusticiSoftware\Cloud\V2\Model\SettingsPostSchema | 

try {
    $apiInstance->setCourseConfiguration($course_id, $configuration_settings);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->setCourseConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |
 **configuration_settings** | [**\RusticiSoftware\Cloud\V2\Model\SettingsPostSchema**](../Model/SettingsPostSchema.md)|  |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCourseTitle**
> string setCourseTitle($course_id, $title)

Sets the course title for `courseId`

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 
$title = new \RusticiSoftware\Cloud\V2\Model\TitleSchema(); // \RusticiSoftware\Cloud\V2\Model\TitleSchema | 

try {
    $result = $apiInstance->setCourseTitle($course_id, $title);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->setCourseTitle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |
 **title** | [**\RusticiSoftware\Cloud\V2\Model\TitleSchema**](../Model/TitleSchema.md)|  |

### Return type

**string**

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setCourseVersionConfiguration**
> setCourseVersionConfiguration($course_id, $version_id, $configuration_settings)

Set configuration settings for this course and version.

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

$apiInstance = new RusticiSoftware\Cloud\V2\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$course_id = "course_id_example"; // string | 
$version_id = 56; // int | The course version
$configuration_settings = new \RusticiSoftware\Cloud\V2\Model\SettingsPostSchema(); // \RusticiSoftware\Cloud\V2\Model\SettingsPostSchema | 

try {
    $apiInstance->setCourseVersionConfiguration($course_id, $version_id, $configuration_settings);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->setCourseVersionConfiguration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **course_id** | **string**|  |
 **version_id** | **int**| The course version |
 **configuration_settings** | [**\RusticiSoftware\Cloud\V2\Model\SettingsPostSchema**](../Model/SettingsPostSchema.md)|  |

### Return type

void (empty response body)

### Authorization

[APP_NORMAL](../../README.md#APP_NORMAL), [OAUTH](../../README.md#OAUTH)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

