<?php
/**
 * ImportConnectorRequestSchema
 *
 * PHP version 7
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
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RusticiSoftware\Cloud\V2\Model;

use \ArrayAccess;
use \RusticiSoftware\Cloud\V2\ObjectSerializer;

/**
 * ImportConnectorRequestSchema Class Doc Comment
 *
 * @category Class
 * @description Used to create a course from a content connector. Before creating a course using this schema, a content connector must be created using the &#x60;/contentConnectors&#x60; API endpoints. Once a content connector has been created, this schema can be used to create a course that can be launched using that connector.  For example, this schema is used to import an LTI 1.3 Tool to be consumed by SCORM Cloud acting as the LTI Platform.
 * @package  RusticiSoftware\Cloud\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ImportConnectorRequestSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImportConnectorRequestSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'connector_id' => 'string',
        'connector_id_for_content' => 'string',
        'metadata_for_connector' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'connector_id' => null,
        'connector_id_for_content' => null,
        'metadata_for_connector' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'connector_id' => 'connectorId',
        'connector_id_for_content' => 'connectorIdForContent',
        'metadata_for_connector' => 'metadataForConnector'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'connector_id' => 'setConnectorId',
        'connector_id_for_content' => 'setConnectorIdForContent',
        'metadata_for_connector' => 'setMetadataForConnector'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'connector_id' => 'getConnectorId',
        'connector_id_for_content' => 'getConnectorIdForContent',
        'metadata_for_connector' => 'getMetadataForConnector'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['connector_id'] = isset($data['connector_id']) ? $data['connector_id'] : null;
        $this->container['connector_id_for_content'] = isset($data['connector_id_for_content']) ? $data['connector_id_for_content'] : null;
        $this->container['metadata_for_connector'] = isset($data['metadata_for_connector']) ? $data['metadata_for_connector'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets connector_id
     *
     * @return string
     */
    public function getConnectorId()
    {
        return $this->container['connector_id'];
    }

    /**
     * Sets connector_id
     *
     * @param string $connector_id The connector to use for this course
     *
     * @return $this
     */
    public function setConnectorId($connector_id)
    {
        $this->container['connector_id'] = $connector_id;

        return $this;
    }

    /**
     * Gets connector_id_for_content
     *
     * @return string
     */
    public function getConnectorIdForContent()
    {
        return $this->container['connector_id_for_content'];
    }

    /**
     * Sets connector_id_for_content
     *
     * @param string $connector_id_for_content The id the connector provides to identify this content
     *
     * @return $this
     */
    public function setConnectorIdForContent($connector_id_for_content)
    {
        $this->container['connector_id_for_content'] = $connector_id_for_content;

        return $this;
    }

    /**
     * Gets metadata_for_connector
     *
     * @return object
     */
    public function getMetadataForConnector()
    {
        return $this->container['metadata_for_connector'];
    }

    /**
     * Sets metadata_for_connector
     *
     * @param object $metadata_for_connector The metadata for this connector, format is implementation specific
     *
     * @return $this
     */
    public function setMetadataForConnector($metadata_for_connector)
    {
        $this->container['metadata_for_connector'] = $metadata_for_connector;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


