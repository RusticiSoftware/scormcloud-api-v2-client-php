<?php
/**
 * LaunchHistorySchema
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
 * LaunchHistorySchema Class Doc Comment
 *
 * @category Class
 * @package  RusticiSoftware\Cloud\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LaunchHistorySchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LaunchHistorySchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'instance' => 'int',
        'score' => '\RusticiSoftware\Cloud\V2\Model\ScoreSchema',
        'completion_status' => 'string',
        'success_status' => 'string',
        'history_log' => 'string',
        'total_seconds_tracked' => 'double',
        'launch_time' => '\DateTime',
        'exit_time' => '\DateTime',
        'last_runtime_update' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'instance' => 'int32',
        'score' => null,
        'completion_status' => null,
        'success_status' => null,
        'history_log' => null,
        'total_seconds_tracked' => 'double',
        'launch_time' => 'date-time',
        'exit_time' => 'date-time',
        'last_runtime_update' => 'date-time'
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
        'instance' => 'instance',
        'score' => 'score',
        'completion_status' => 'completionStatus',
        'success_status' => 'successStatus',
        'history_log' => 'historyLog',
        'total_seconds_tracked' => 'totalSecondsTracked',
        'launch_time' => 'launchTime',
        'exit_time' => 'exitTime',
        'last_runtime_update' => 'lastRuntimeUpdate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'instance' => 'setInstance',
        'score' => 'setScore',
        'completion_status' => 'setCompletionStatus',
        'success_status' => 'setSuccessStatus',
        'history_log' => 'setHistoryLog',
        'total_seconds_tracked' => 'setTotalSecondsTracked',
        'launch_time' => 'setLaunchTime',
        'exit_time' => 'setExitTime',
        'last_runtime_update' => 'setLastRuntimeUpdate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'instance' => 'getInstance',
        'score' => 'getScore',
        'completion_status' => 'getCompletionStatus',
        'success_status' => 'getSuccessStatus',
        'history_log' => 'getHistoryLog',
        'total_seconds_tracked' => 'getTotalSecondsTracked',
        'launch_time' => 'getLaunchTime',
        'exit_time' => 'getExitTime',
        'last_runtime_update' => 'getLastRuntimeUpdate'
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

    const COMPLETION_STATUS_UNKNOWN = 'UNKNOWN';
    const COMPLETION_STATUS_COMPLETED = 'COMPLETED';
    const COMPLETION_STATUS_INCOMPLETE = 'INCOMPLETE';
    const SUCCESS_STATUS_UNKNOWN = 'UNKNOWN';
    const SUCCESS_STATUS_PASSED = 'PASSED';
    const SUCCESS_STATUS_FAILED = 'FAILED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompletionStatusAllowableValues()
    {
        return [
            self::COMPLETION_STATUS_UNKNOWN,
            self::COMPLETION_STATUS_COMPLETED,
            self::COMPLETION_STATUS_INCOMPLETE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSuccessStatusAllowableValues()
    {
        return [
            self::SUCCESS_STATUS_UNKNOWN,
            self::SUCCESS_STATUS_PASSED,
            self::SUCCESS_STATUS_FAILED,
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
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['completion_status'] = isset($data['completion_status']) ? $data['completion_status'] : 'UNKNOWN';
        $this->container['success_status'] = isset($data['success_status']) ? $data['success_status'] : 'UNKNOWN';
        $this->container['history_log'] = isset($data['history_log']) ? $data['history_log'] : null;
        $this->container['total_seconds_tracked'] = isset($data['total_seconds_tracked']) ? $data['total_seconds_tracked'] : null;
        $this->container['launch_time'] = isset($data['launch_time']) ? $data['launch_time'] : null;
        $this->container['exit_time'] = isset($data['exit_time']) ? $data['exit_time'] : null;
        $this->container['last_runtime_update'] = isset($data['last_runtime_update']) ? $data['last_runtime_update'] : null;
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
     * Gets instance
     *
     * @return int
     */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
     * Sets instance
     *
     * @param int $instance instance
     *
     * @return $this
     */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;

        return $this;
    }

    /**
     * Gets score
     *
     * @return \RusticiSoftware\Cloud\V2\Model\ScoreSchema
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param \RusticiSoftware\Cloud\V2\Model\ScoreSchema $score score
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets completion_status
     *
     * @return string
     */
    public function getCompletionStatus()
    {
        return $this->container['completion_status'];
    }

    /**
     * Sets completion_status
     *
     * @param string $completion_status completion_status
     *
     * @return $this
     */
    public function setCompletionStatus($completion_status)
    {
        $this->container['completion_status'] = $completion_status;

        return $this;
    }

    /**
     * Gets success_status
     *
     * @return string
     */
    public function getSuccessStatus()
    {
        return $this->container['success_status'];
    }

    /**
     * Sets success_status
     *
     * @param string $success_status success_status
     *
     * @return $this
     */
    public function setSuccessStatus($success_status)
    {
        $this->container['success_status'] = $success_status;

        return $this;
    }

    /**
     * Gets history_log
     *
     * @return string
     */
    public function getHistoryLog()
    {
        return $this->container['history_log'];
    }

    /**
     * Sets history_log
     *
     * @param string $history_log history_log
     *
     * @return $this
     */
    public function setHistoryLog($history_log)
    {
        $this->container['history_log'] = $history_log;

        return $this;
    }

    /**
     * Gets total_seconds_tracked
     *
     * @return double
     */
    public function getTotalSecondsTracked()
    {
        return $this->container['total_seconds_tracked'];
    }

    /**
     * Sets total_seconds_tracked
     *
     * @param double $total_seconds_tracked total_seconds_tracked
     *
     * @return $this
     */
    public function setTotalSecondsTracked($total_seconds_tracked)
    {
        $this->container['total_seconds_tracked'] = $total_seconds_tracked;

        return $this;
    }

    /**
     * Gets launch_time
     *
     * @return \DateTime
     */
    public function getLaunchTime()
    {
        return $this->container['launch_time'];
    }

    /**
     * Sets launch_time
     *
     * @param \DateTime $launch_time The time of the launch in UTC
     *
     * @return $this
     */
    public function setLaunchTime($launch_time)
    {
        $this->container['launch_time'] = $launch_time;

        return $this;
    }

    /**
     * Gets exit_time
     *
     * @return \DateTime
     */
    public function getExitTime()
    {
        return $this->container['exit_time'];
    }

    /**
     * Sets exit_time
     *
     * @param \DateTime $exit_time The time of the exit in UTC
     *
     * @return $this
     */
    public function setExitTime($exit_time)
    {
        $this->container['exit_time'] = $exit_time;

        return $this;
    }

    /**
     * Gets last_runtime_update
     *
     * @return \DateTime
     */
    public function getLastRuntimeUpdate()
    {
        return $this->container['last_runtime_update'];
    }

    /**
     * Sets last_runtime_update
     *
     * @param \DateTime $last_runtime_update The time of the last runtime update in UTC
     *
     * @return $this
     */
    public function setLastRuntimeUpdate($last_runtime_update)
    {
        $this->container['last_runtime_update'] = $last_runtime_update;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetGet($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


