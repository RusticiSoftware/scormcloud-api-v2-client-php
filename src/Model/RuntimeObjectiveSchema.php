<?php
/**
 * RuntimeObjectiveSchema
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
 * RuntimeObjectiveSchema Class Doc Comment
 *
 * @category Class
 * @package  RusticiSoftware\Cloud\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RuntimeObjectiveSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RuntimeObjectiveSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'score_scaled' => 'string',
        'score_min' => 'string',
        'score_max' => 'string',
        'score_raw' => 'string',
        'runtime_objective_success_status' => 'string',
        'runtime_objective_completion_status' => 'string',
        'progress_measure' => 'string',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'score_scaled' => null,
        'score_min' => null,
        'score_max' => null,
        'score_raw' => null,
        'runtime_objective_success_status' => null,
        'runtime_objective_completion_status' => null,
        'progress_measure' => null,
        'description' => null
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
        'score_scaled' => 'scoreScaled',
        'score_min' => 'scoreMin',
        'score_max' => 'scoreMax',
        'score_raw' => 'scoreRaw',
        'runtime_objective_success_status' => 'runtimeObjectiveSuccessStatus',
        'runtime_objective_completion_status' => 'runtimeObjectiveCompletionStatus',
        'progress_measure' => 'progressMeasure',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'score_scaled' => 'setScoreScaled',
        'score_min' => 'setScoreMin',
        'score_max' => 'setScoreMax',
        'score_raw' => 'setScoreRaw',
        'runtime_objective_success_status' => 'setRuntimeObjectiveSuccessStatus',
        'runtime_objective_completion_status' => 'setRuntimeObjectiveCompletionStatus',
        'progress_measure' => 'setProgressMeasure',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'score_scaled' => 'getScoreScaled',
        'score_min' => 'getScoreMin',
        'score_max' => 'getScoreMax',
        'score_raw' => 'getScoreRaw',
        'runtime_objective_success_status' => 'getRuntimeObjectiveSuccessStatus',
        'runtime_objective_completion_status' => 'getRuntimeObjectiveCompletionStatus',
        'progress_measure' => 'getProgressMeasure',
        'description' => 'getDescription'
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

    const RUNTIME_OBJECTIVE_SUCCESS_STATUS_UNKNOWN = 'UNKNOWN';
    const RUNTIME_OBJECTIVE_SUCCESS_STATUS_PASSED = 'PASSED';
    const RUNTIME_OBJECTIVE_SUCCESS_STATUS_FAILED = 'FAILED';
    const RUNTIME_OBJECTIVE_COMPLETION_STATUS_UNKNOWN = 'UNKNOWN';
    const RUNTIME_OBJECTIVE_COMPLETION_STATUS_COMPLETED = 'COMPLETED';
    const RUNTIME_OBJECTIVE_COMPLETION_STATUS_INCOMPLETE = 'INCOMPLETE';
    const RUNTIME_OBJECTIVE_COMPLETION_STATUS_NOT_ATTEMPTED = 'NOT_ATTEMPTED';
    const RUNTIME_OBJECTIVE_COMPLETION_STATUS_BROWSED = 'BROWSED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRuntimeObjectiveSuccessStatusAllowableValues()
    {
        return [
            self::RUNTIME_OBJECTIVE_SUCCESS_STATUS_UNKNOWN,
            self::RUNTIME_OBJECTIVE_SUCCESS_STATUS_PASSED,
            self::RUNTIME_OBJECTIVE_SUCCESS_STATUS_FAILED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRuntimeObjectiveCompletionStatusAllowableValues()
    {
        return [
            self::RUNTIME_OBJECTIVE_COMPLETION_STATUS_UNKNOWN,
            self::RUNTIME_OBJECTIVE_COMPLETION_STATUS_COMPLETED,
            self::RUNTIME_OBJECTIVE_COMPLETION_STATUS_INCOMPLETE,
            self::RUNTIME_OBJECTIVE_COMPLETION_STATUS_NOT_ATTEMPTED,
            self::RUNTIME_OBJECTIVE_COMPLETION_STATUS_BROWSED,
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
        $this->container['score_scaled'] = isset($data['score_scaled']) ? $data['score_scaled'] : null;
        $this->container['score_min'] = isset($data['score_min']) ? $data['score_min'] : null;
        $this->container['score_max'] = isset($data['score_max']) ? $data['score_max'] : null;
        $this->container['score_raw'] = isset($data['score_raw']) ? $data['score_raw'] : null;
        $this->container['runtime_objective_success_status'] = isset($data['runtime_objective_success_status']) ? $data['runtime_objective_success_status'] : 'UNKNOWN';
        $this->container['runtime_objective_completion_status'] = isset($data['runtime_objective_completion_status']) ? $data['runtime_objective_completion_status'] : 'UNKNOWN';
        $this->container['progress_measure'] = isset($data['progress_measure']) ? $data['progress_measure'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
     * Gets score_scaled
     *
     * @return string
     */
    public function getScoreScaled()
    {
        return $this->container['score_scaled'];
    }

    /**
     * Sets score_scaled
     *
     * @param string $score_scaled score_scaled
     *
     * @return $this
     */
    public function setScoreScaled($score_scaled)
    {
        $this->container['score_scaled'] = $score_scaled;

        return $this;
    }

    /**
     * Gets score_min
     *
     * @return string
     */
    public function getScoreMin()
    {
        return $this->container['score_min'];
    }

    /**
     * Sets score_min
     *
     * @param string $score_min score_min
     *
     * @return $this
     */
    public function setScoreMin($score_min)
    {
        $this->container['score_min'] = $score_min;

        return $this;
    }

    /**
     * Gets score_max
     *
     * @return string
     */
    public function getScoreMax()
    {
        return $this->container['score_max'];
    }

    /**
     * Sets score_max
     *
     * @param string $score_max score_max
     *
     * @return $this
     */
    public function setScoreMax($score_max)
    {
        $this->container['score_max'] = $score_max;

        return $this;
    }

    /**
     * Gets score_raw
     *
     * @return string
     */
    public function getScoreRaw()
    {
        return $this->container['score_raw'];
    }

    /**
     * Sets score_raw
     *
     * @param string $score_raw score_raw
     *
     * @return $this
     */
    public function setScoreRaw($score_raw)
    {
        $this->container['score_raw'] = $score_raw;

        return $this;
    }

    /**
     * Gets runtime_objective_success_status
     *
     * @return string
     */
    public function getRuntimeObjectiveSuccessStatus()
    {
        return $this->container['runtime_objective_success_status'];
    }

    /**
     * Sets runtime_objective_success_status
     *
     * @param string $runtime_objective_success_status runtime_objective_success_status
     *
     * @return $this
     */
    public function setRuntimeObjectiveSuccessStatus($runtime_objective_success_status)
    {
        $this->container['runtime_objective_success_status'] = $runtime_objective_success_status;

        return $this;
    }

    /**
     * Gets runtime_objective_completion_status
     *
     * @return string
     */
    public function getRuntimeObjectiveCompletionStatus()
    {
        return $this->container['runtime_objective_completion_status'];
    }

    /**
     * Sets runtime_objective_completion_status
     *
     * @param string $runtime_objective_completion_status runtime_objective_completion_status
     *
     * @return $this
     */
    public function setRuntimeObjectiveCompletionStatus($runtime_objective_completion_status)
    {
        $this->container['runtime_objective_completion_status'] = $runtime_objective_completion_status;

        return $this;
    }

    /**
     * Gets progress_measure
     *
     * @return string
     */
    public function getProgressMeasure()
    {
        return $this->container['progress_measure'];
    }

    /**
     * Sets progress_measure
     *
     * @param string $progress_measure progress_measure
     *
     * @return $this
     */
    public function setProgressMeasure($progress_measure)
    {
        $this->container['progress_measure'] = $progress_measure;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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


