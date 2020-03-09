<?php
/**
 * ReportingApi
 * PHP version 5
 *
 * @category Class
 * @package  RusticiSoftware\Cloud\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SCORM Cloud Rest API
 *
 * REST API used for SCORM Cloud integrations.
 *
 * OpenAPI spec version: 2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RusticiSoftware\Cloud\V2\Api;

use \RusticiSoftware\Cloud\V2\ApiClient;
use \RusticiSoftware\Cloud\V2\ApiException;
use \RusticiSoftware\Cloud\V2\Configuration;
use \RusticiSoftware\Cloud\V2\ObjectSerializer;

/**
 * ReportingApi Class Doc Comment
 *
 * @category Class
 * @package  RusticiSoftware\Cloud\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportingApi
{
    /**
     * API Client
     *
     * @var \RusticiSoftware\Cloud\V2\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \RusticiSoftware\Cloud\V2\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\RusticiSoftware\Cloud\V2\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \RusticiSoftware\Cloud\V2\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \RusticiSoftware\Cloud\V2\ApiClient $apiClient set the API client
     *
     * @return ReportingApi
     */
    public function setApiClient(\RusticiSoftware\Cloud\V2\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getAccountInfo
     *
     * Get all of the account information specified by the given app ID
     *
     * @throws \RusticiSoftware\Cloud\V2\ApiException on non-2xx response
     * @return \RusticiSoftware\Cloud\V2\Model\ReportageAccountInfoSchema
     */
    public function getAccountInfo()
    {
        list($response) = $this->getAccountInfoWithHttpInfo();
        return $response;
    }

    /**
     * Operation getAccountInfoWithHttpInfo
     *
     * Get all of the account information specified by the given app ID
     *
     * @throws \RusticiSoftware\Cloud\V2\ApiException on non-2xx response
     * @return array of \RusticiSoftware\Cloud\V2\Model\ReportageAccountInfoSchema, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAccountInfoWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/reporting/accountInfo";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\RusticiSoftware\Cloud\V2\Model\ReportageAccountInfoSchema',
                '/reporting/accountInfo'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RusticiSoftware\Cloud\V2\Model\ReportageAccountInfoSchema', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RusticiSoftware\Cloud\V2\Model\ReportageAccountInfoSchema', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RusticiSoftware\Cloud\V2\Model\MessageSchema', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getReportageAuthToken
     *
     * Get a session authentication token to use when launching Reportage
     *
     * @param string $nav_permission The navigation permissions for this Reportage session (required)
     * @param bool $admin Grant admin privileges to this Reportage session (optional, default to false)
     * @throws \RusticiSoftware\Cloud\V2\ApiException on non-2xx response
     * @return \RusticiSoftware\Cloud\V2\Model\ReportageAuthTokenSchema
     */
    public function getReportageAuthToken($nav_permission, $admin = null)
    {
        list($response) = $this->getReportageAuthTokenWithHttpInfo($nav_permission, $admin);
        return $response;
    }

    /**
     * Operation getReportageAuthTokenWithHttpInfo
     *
     * Get a session authentication token to use when launching Reportage
     *
     * @param string $nav_permission The navigation permissions for this Reportage session (required)
     * @param bool $admin Grant admin privileges to this Reportage session (optional, default to false)
     * @throws \RusticiSoftware\Cloud\V2\ApiException on non-2xx response
     * @return array of \RusticiSoftware\Cloud\V2\Model\ReportageAuthTokenSchema, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReportageAuthTokenWithHttpInfo($nav_permission, $admin = null)
    {
        // verify the required parameter 'nav_permission' is set
        if ($nav_permission === null) {
            throw new \InvalidArgumentException('Missing the required parameter $nav_permission when calling getReportageAuthToken');
        }
        // parse inputs
        $resourcePath = "/reporting/reportageAuth";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($nav_permission !== null) {
            $queryParams['navPermission'] = $this->apiClient->getSerializer()->toQueryValue($nav_permission);
        }
        // query params
        if ($admin !== null) {
            $queryParams['admin'] = $this->apiClient->getSerializer()->toQueryValue($admin);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\RusticiSoftware\Cloud\V2\Model\ReportageAuthTokenSchema',
                '/reporting/reportageAuth'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RusticiSoftware\Cloud\V2\Model\ReportageAuthTokenSchema', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RusticiSoftware\Cloud\V2\Model\ReportageAuthTokenSchema', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RusticiSoftware\Cloud\V2\Model\MessageSchema', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getReportageLink
     *
     * Get the link to a page in Reportage with the given authentication and permissions
     *
     * @param string $auth The reportage authentication token retrieved from a previous call to &#x60;GET reportageAuth&#x60; (required)
     * @param string $report_url The Reportage URL to try and access (required)
     * @throws \RusticiSoftware\Cloud\V2\ApiException on non-2xx response
     * @return \RusticiSoftware\Cloud\V2\Model\ReportageLinkSchema
     */
    public function getReportageLink($auth, $report_url)
    {
        list($response) = $this->getReportageLinkWithHttpInfo($auth, $report_url);
        return $response;
    }

    /**
     * Operation getReportageLinkWithHttpInfo
     *
     * Get the link to a page in Reportage with the given authentication and permissions
     *
     * @param string $auth The reportage authentication token retrieved from a previous call to &#x60;GET reportageAuth&#x60; (required)
     * @param string $report_url The Reportage URL to try and access (required)
     * @throws \RusticiSoftware\Cloud\V2\ApiException on non-2xx response
     * @return array of \RusticiSoftware\Cloud\V2\Model\ReportageLinkSchema, HTTP status code, HTTP response headers (array of strings)
     */
    public function getReportageLinkWithHttpInfo($auth, $report_url)
    {
        // verify the required parameter 'auth' is set
        if ($auth === null) {
            throw new \InvalidArgumentException('Missing the required parameter $auth when calling getReportageLink');
        }
        // verify the required parameter 'report_url' is set
        if ($report_url === null) {
            throw new \InvalidArgumentException('Missing the required parameter $report_url when calling getReportageLink');
        }
        // parse inputs
        $resourcePath = "/reporting/reportageLink";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($auth !== null) {
            $queryParams['auth'] = $this->apiClient->getSerializer()->toQueryValue($auth);
        }
        // query params
        if ($report_url !== null) {
            $queryParams['reportUrl'] = $this->apiClient->getSerializer()->toQueryValue($report_url);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\RusticiSoftware\Cloud\V2\Model\ReportageLinkSchema',
                '/reporting/reportageLink'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RusticiSoftware\Cloud\V2\Model\ReportageLinkSchema', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RusticiSoftware\Cloud\V2\Model\ReportageLinkSchema', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RusticiSoftware\Cloud\V2\Model\MessageSchema', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}