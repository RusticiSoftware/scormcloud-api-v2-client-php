<?php
/**
 * CourseSchema
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
 * CourseSchema Class Doc Comment
 *
 * @category Class
 * @package  RusticiSoftware\Cloud\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CourseSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CourseSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'title' => 'string',
        'xapi_activity_id' => 'string',
        'created' => '\DateTime',
        'updated' => '\DateTime',
        'version' => 'int',
        'registration_count' => 'int',
        'activity_id' => 'string',
        'course_learning_standard' => 'string',
        'tags' => 'string[]',
        'dispatched' => 'bool',
        'metadata' => '\RusticiSoftware\Cloud\V2\Model\MetadataSchema',
        'root_activity' => '\RusticiSoftware\Cloud\V2\Model\CourseActivitySchema'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'title' => null,
        'xapi_activity_id' => null,
        'created' => 'date-time',
        'updated' => 'date-time',
        'version' => 'int32',
        'registration_count' => 'int32',
        'activity_id' => null,
        'course_learning_standard' => null,
        'tags' => null,
        'dispatched' => null,
        'metadata' => null,
        'root_activity' => null
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
        'id' => 'id',
        'title' => 'title',
        'xapi_activity_id' => 'xapiActivityId',
        'created' => 'created',
        'updated' => 'updated',
        'version' => 'version',
        'registration_count' => 'registrationCount',
        'activity_id' => 'activityId',
        'course_learning_standard' => 'courseLearningStandard',
        'tags' => 'tags',
        'dispatched' => 'dispatched',
        'metadata' => 'metadata',
        'root_activity' => 'rootActivity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'xapi_activity_id' => 'setXapiActivityId',
        'created' => 'setCreated',
        'updated' => 'setUpdated',
        'version' => 'setVersion',
        'registration_count' => 'setRegistrationCount',
        'activity_id' => 'setActivityId',
        'course_learning_standard' => 'setCourseLearningStandard',
        'tags' => 'setTags',
        'dispatched' => 'setDispatched',
        'metadata' => 'setMetadata',
        'root_activity' => 'setRootActivity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'xapi_activity_id' => 'getXapiActivityId',
        'created' => 'getCreated',
        'updated' => 'getUpdated',
        'version' => 'getVersion',
        'registration_count' => 'getRegistrationCount',
        'activity_id' => 'getActivityId',
        'course_learning_standard' => 'getCourseLearningStandard',
        'tags' => 'getTags',
        'dispatched' => 'getDispatched',
        'metadata' => 'getMetadata',
        'root_activity' => 'getRootActivity'
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

    const COURSE_LEARNING_STANDARD_UNKNOWN = 'UNKNOWN';
    const COURSE_LEARNING_STANDARD_SCORM11 = 'SCORM11';
    const COURSE_LEARNING_STANDARD_SCORM12 = 'SCORM12';
    const COURSE_LEARNING_STANDARD_SCORM20042_NDEDITION = 'SCORM20042NDEDITION';
    const COURSE_LEARNING_STANDARD_SCORM20043_RDEDITION = 'SCORM20043RDEDITION';
    const COURSE_LEARNING_STANDARD_SCORM20044_THEDITION = 'SCORM20044THEDITION';
    const COURSE_LEARNING_STANDARD_AICC = 'AICC';
    const COURSE_LEARNING_STANDARD_XAPI = 'XAPI';
    const COURSE_LEARNING_STANDARD_CMI5 = 'CMI5';
    const COURSE_LEARNING_STANDARD_LTI13 = 'LTI13';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCourseLearningStandardAllowableValues()
    {
        return [
            self::COURSE_LEARNING_STANDARD_UNKNOWN,
            self::COURSE_LEARNING_STANDARD_SCORM11,
            self::COURSE_LEARNING_STANDARD_SCORM12,
            self::COURSE_LEARNING_STANDARD_SCORM20042_NDEDITION,
            self::COURSE_LEARNING_STANDARD_SCORM20043_RDEDITION,
            self::COURSE_LEARNING_STANDARD_SCORM20044_THEDITION,
            self::COURSE_LEARNING_STANDARD_AICC,
            self::COURSE_LEARNING_STANDARD_XAPI,
            self::COURSE_LEARNING_STANDARD_CMI5,
            self::COURSE_LEARNING_STANDARD_LTI13,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['xapi_activity_id'] = isset($data['xapi_activity_id']) ? $data['xapi_activity_id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['registration_count'] = isset($data['registration_count']) ? $data['registration_count'] : null;
        $this->container['activity_id'] = isset($data['activity_id']) ? $data['activity_id'] : null;
        $this->container['course_learning_standard'] = isset($data['course_learning_standard']) ? $data['course_learning_standard'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['dispatched'] = isset($data['dispatched']) ? $data['dispatched'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['root_activity'] = isset($data['root_activity']) ? $data['root_activity'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets xapi_activity_id
     *
     * @return string
     */
    public function getXapiActivityId()
    {
        return $this->container['xapi_activity_id'];
    }

    /**
     * Sets xapi_activity_id
     *
     * @param string $xapi_activity_id xAPI activity id associated with this course
     *
     * @return $this
     */
    public function setXapiActivityId($xapi_activity_id)
    {
        $this->container['xapi_activity_id'] = $xapi_activity_id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime $updated updated
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets registration_count
     *
     * @return int
     */
    public function getRegistrationCount()
    {
        return $this->container['registration_count'];
    }

    /**
     * Sets registration_count
     *
     * @param int $registration_count registration_count
     *
     * @return $this
     */
    public function setRegistrationCount($registration_count)
    {
        $this->container['registration_count'] = $registration_count;

        return $this;
    }

    /**
     * Gets activity_id
     *
     * @return string
     */
    public function getActivityId()
    {
        return $this->container['activity_id'];
    }

    /**
     * Sets activity_id
     *
     * @param string $activity_id activity_id
     *
     * @return $this
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /**
     * Gets course_learning_standard
     *
     * @return string
     */
    public function getCourseLearningStandard()
    {
        return $this->container['course_learning_standard'];
    }

    /**
     * Sets course_learning_standard
     *
     * @param string $course_learning_standard course_learning_standard
     *
     * @return $this
     */
    public function setCourseLearningStandard($course_learning_standard)
    {
        $this->container['course_learning_standard'] = $course_learning_standard;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets dispatched
     *
     * @return bool
     */
    public function getDispatched()
    {
        return $this->container['dispatched'];
    }

    /**
     * Sets dispatched
     *
     * @param bool $dispatched dispatched
     *
     * @return $this
     */
    public function setDispatched($dispatched)
    {
        $this->container['dispatched'] = $dispatched;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \RusticiSoftware\Cloud\V2\Model\MetadataSchema
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \RusticiSoftware\Cloud\V2\Model\MetadataSchema $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets root_activity
     *
     * @return \RusticiSoftware\Cloud\V2\Model\CourseActivitySchema
     */
    public function getRootActivity()
    {
        return $this->container['root_activity'];
    }

    /**
     * Sets root_activity
     *
     * @param \RusticiSoftware\Cloud\V2\Model\CourseActivitySchema $root_activity root_activity
     *
     * @return $this
     */
    public function setRootActivity($root_activity)
    {
        $this->container['root_activity'] = $root_activity;

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


