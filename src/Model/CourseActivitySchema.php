<?php
/**
 * CourseActivitySchema
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
 * CourseActivitySchema Class Doc Comment
 *
 * @category Class
 * @package  RusticiSoftware\Cloud\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CourseActivitySchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CourseActivitySchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'external_identifier' => 'string',
        'item_identifier' => 'string',
        'resource_identifier' => 'string',
        'activity_type' => 'string',
        'href' => 'string',
        'scaled_passing_score' => 'string',
        'title' => 'string',
        'children' => '\RusticiSoftware\Cloud\V2\Model\CourseActivitySchema[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'external_identifier' => null,
        'item_identifier' => null,
        'resource_identifier' => null,
        'activity_type' => null,
        'href' => null,
        'scaled_passing_score' => null,
        'title' => null,
        'children' => null
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
        'external_identifier' => 'externalIdentifier',
        'item_identifier' => 'itemIdentifier',
        'resource_identifier' => 'resourceIdentifier',
        'activity_type' => 'activityType',
        'href' => 'href',
        'scaled_passing_score' => 'scaledPassingScore',
        'title' => 'title',
        'children' => 'children'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_identifier' => 'setExternalIdentifier',
        'item_identifier' => 'setItemIdentifier',
        'resource_identifier' => 'setResourceIdentifier',
        'activity_type' => 'setActivityType',
        'href' => 'setHref',
        'scaled_passing_score' => 'setScaledPassingScore',
        'title' => 'setTitle',
        'children' => 'setChildren'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_identifier' => 'getExternalIdentifier',
        'item_identifier' => 'getItemIdentifier',
        'resource_identifier' => 'getResourceIdentifier',
        'activity_type' => 'getActivityType',
        'href' => 'getHref',
        'scaled_passing_score' => 'getScaledPassingScore',
        'title' => 'getTitle',
        'children' => 'getChildren'
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

    const ACTIVITY_TYPE_UNKNOWN = 'UNKNOWN';
    const ACTIVITY_TYPE_AGGREGATION = 'AGGREGATION';
    const ACTIVITY_TYPE_SCO = 'SCO';
    const ACTIVITY_TYPE_ASSET = 'ASSET';
    const ACTIVITY_TYPE_OBJECTIVE = 'OBJECTIVE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActivityTypeAllowableValues()
    {
        return [
            self::ACTIVITY_TYPE_UNKNOWN,
            self::ACTIVITY_TYPE_AGGREGATION,
            self::ACTIVITY_TYPE_SCO,
            self::ACTIVITY_TYPE_ASSET,
            self::ACTIVITY_TYPE_OBJECTIVE,
        ];
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
        $this->container['external_identifier'] = isset($data['external_identifier']) ? $data['external_identifier'] : null;
        $this->container['item_identifier'] = isset($data['item_identifier']) ? $data['item_identifier'] : null;
        $this->container['resource_identifier'] = isset($data['resource_identifier']) ? $data['resource_identifier'] : null;
        $this->container['activity_type'] = isset($data['activity_type']) ? $data['activity_type'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['scaled_passing_score'] = isset($data['scaled_passing_score']) ? $data['scaled_passing_score'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
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
     * Gets external_identifier
     *
     * @return string
     */
    public function getExternalIdentifier()
    {
        return $this->container['external_identifier'];
    }

    /**
     * Sets external_identifier
     *
     * @param string $external_identifier An arbitrary identifier that the external LMS system can associate with this LearningObject to track it as it is reused across courses
     *
     * @return $this
     */
    public function setExternalIdentifier($external_identifier)
    {
        $this->container['external_identifier'] = $external_identifier;

        return $this;
    }

    /**
     * Gets item_identifier
     *
     * @return string
     */
    public function getItemIdentifier()
    {
        return $this->container['item_identifier'];
    }

    /**
     * Sets item_identifier
     *
     * @param string $item_identifier The string which identifies this activity in the context of its course
     *
     * @return $this
     */
    public function setItemIdentifier($item_identifier)
    {
        $this->container['item_identifier'] = $item_identifier;

        return $this;
    }

    /**
     * Gets resource_identifier
     *
     * @return string
     */
    public function getResourceIdentifier()
    {
        return $this->container['resource_identifier'];
    }

    /**
     * Sets resource_identifier
     *
     * @param string $resource_identifier The string which identifies this activity's resource in a course's manifest
     *
     * @return $this
     */
    public function setResourceIdentifier($resource_identifier)
    {
        $this->container['resource_identifier'] = $resource_identifier;

        return $this;
    }

    /**
     * Gets activity_type
     *
     * @return string
     */
    public function getActivityType()
    {
        return $this->container['activity_type'];
    }

    /**
     * Sets activity_type
     *
     * @param string $activity_type The type of activity this is
     *
     * @return $this
     */
    public function setActivityType($activity_type)
    {
        $this->container['activity_type'] = $activity_type;

        return $this;
    }

    /**
     * Gets href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string $href The web path used to launch this activity
     *
     * @return $this
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets scaled_passing_score
     *
     * @return string
     */
    public function getScaledPassingScore()
    {
        return $this->container['scaled_passing_score'];
    }

    /**
     * Sets scaled_passing_score
     *
     * @param string $scaled_passing_score The score required of a learner to pass this activity
     *
     * @return $this
     */
    public function setScaledPassingScore($scaled_passing_score)
    {
        $this->container['scaled_passing_score'] = $scaled_passing_score;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The title of the activity
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets children
     *
     * @return \RusticiSoftware\Cloud\V2\Model\CourseActivitySchema[]
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     *
     * @param \RusticiSoftware\Cloud\V2\Model\CourseActivitySchema[] $children children
     *
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

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


