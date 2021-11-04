<?php
/**
 * CreateDispatchSchema
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
 * Swagger Codegen version: 2.4.12
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
 * CreateDispatchSchema Class Doc Comment
 *
 * @category Class
 * @package  RusticiSoftware\Cloud\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateDispatchSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateDispatchSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'destination_id' => 'string',
        'course_id' => 'string',
        'allow_new_registrations' => 'bool',
        'instanced' => 'bool',
        'registration_cap' => 'int',
        'expiration_date' => '\DateTime',
        'enabled' => 'bool',
        'tags' => 'string[]',
        'email' => 'string',
        'notes' => 'string',
        'post_back' => '\RusticiSoftware\Cloud\V2\Model\PostBackSchema'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'destination_id' => null,
        'course_id' => null,
        'allow_new_registrations' => null,
        'instanced' => null,
        'registration_cap' => 'int32',
        'expiration_date' => 'date-time',
        'enabled' => null,
        'tags' => null,
        'email' => null,
        'notes' => null,
        'post_back' => null
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
        'destination_id' => 'destinationId',
        'course_id' => 'courseId',
        'allow_new_registrations' => 'allowNewRegistrations',
        'instanced' => 'instanced',
        'registration_cap' => 'registrationCap',
        'expiration_date' => 'expirationDate',
        'enabled' => 'enabled',
        'tags' => 'tags',
        'email' => 'email',
        'notes' => 'notes',
        'post_back' => 'postBack'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'destination_id' => 'setDestinationId',
        'course_id' => 'setCourseId',
        'allow_new_registrations' => 'setAllowNewRegistrations',
        'instanced' => 'setInstanced',
        'registration_cap' => 'setRegistrationCap',
        'expiration_date' => 'setExpirationDate',
        'enabled' => 'setEnabled',
        'tags' => 'setTags',
        'email' => 'setEmail',
        'notes' => 'setNotes',
        'post_back' => 'setPostBack'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'destination_id' => 'getDestinationId',
        'course_id' => 'getCourseId',
        'allow_new_registrations' => 'getAllowNewRegistrations',
        'instanced' => 'getInstanced',
        'registration_cap' => 'getRegistrationCap',
        'expiration_date' => 'getExpirationDate',
        'enabled' => 'getEnabled',
        'tags' => 'getTags',
        'email' => 'getEmail',
        'notes' => 'getNotes',
        'post_back' => 'getPostBack'
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
        $this->container['destination_id'] = isset($data['destination_id']) ? $data['destination_id'] : null;
        $this->container['course_id'] = isset($data['course_id']) ? $data['course_id'] : null;
        $this->container['allow_new_registrations'] = isset($data['allow_new_registrations']) ? $data['allow_new_registrations'] : true;
        $this->container['instanced'] = isset($data['instanced']) ? $data['instanced'] : true;
        $this->container['registration_cap'] = isset($data['registration_cap']) ? $data['registration_cap'] : 0;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : true;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['post_back'] = isset($data['post_back']) ? $data['post_back'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['destination_id'] === null) {
            $invalidProperties[] = "'destination_id' can't be null";
        }
        if ($this->container['course_id'] === null) {
            $invalidProperties[] = "'course_id' can't be null";
        }
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
     * Gets destination_id
     *
     * @return string
     */
    public function getDestinationId()
    {
        return $this->container['destination_id'];
    }

    /**
     * Sets destination_id
     *
     * @param string $destination_id Id of the destination this dispatch will belong to.
     *
     * @return $this
     */
    public function setDestinationId($destination_id)
    {
        $this->container['destination_id'] = $destination_id;

        return $this;
    }

    /**
     * Gets course_id
     *
     * @return string
     */
    public function getCourseId()
    {
        return $this->container['course_id'];
    }

    /**
     * Sets course_id
     *
     * @param string $course_id Id of the course to be dispatched.
     *
     * @return $this
     */
    public function setCourseId($course_id)
    {
        $this->container['course_id'] = $course_id;

        return $this;
    }

    /**
     * Gets allow_new_registrations
     *
     * @return bool
     */
    public function getAllowNewRegistrations()
    {
        return $this->container['allow_new_registrations'];
    }

    /**
     * Sets allow_new_registrations
     *
     * @param bool $allow_new_registrations If true, then new registrations can be created for this dispatch.
     *
     * @return $this
     */
    public function setAllowNewRegistrations($allow_new_registrations)
    {
        $this->container['allow_new_registrations'] = $allow_new_registrations;

        return $this;
    }

    /**
     * Gets instanced
     *
     * @return bool
     */
    public function getInstanced()
    {
        return $this->container['instanced'];
    }

    /**
     * Sets instanced
     *
     * @param bool $instanced If true, then a new registration instance will be created if the client LMS doesn't provide launch data for an existing one. Otherwise, the same instance will always be used for the given cmi.learner_id.
     *
     * @return $this
     */
    public function setInstanced($instanced)
    {
        $this->container['instanced'] = $instanced;

        return $this;
    }

    /**
     * Gets registration_cap
     *
     * @return int
     */
    public function getRegistrationCap()
    {
        return $this->container['registration_cap'];
    }

    /**
     * Sets registration_cap
     *
     * @param int $registration_cap The maximum number of registrations that can be created for this dispatch, where '0' means 'unlimited registrations'.
     *
     * @return $this
     */
    public function setRegistrationCap($registration_cap)
    {
        $this->container['registration_cap'] = $registration_cap;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime $expiration_date The ISO 8601 TimeStamp (defaults to UTC) after which this dispatch will be disabled. An empty value will represent no expiration date.
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled If true, then this dispatch can be launched.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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
     * @param string[] $tags The tags to associate with this Dispatch.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email SCORM Cloud user e-mail associated with this dispatch. If this is not provided, it will default to the owner of the Realm.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes Any provided notes about this dispatch.
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets post_back
     *
     * @return \RusticiSoftware\Cloud\V2\Model\PostBackSchema
     */
    public function getPostBack()
    {
        return $this->container['post_back'];
    }

    /**
     * Sets post_back
     *
     * @param \RusticiSoftware\Cloud\V2\Model\PostBackSchema $post_back The postback information for this Dispatch.
     *
     * @return $this
     */
    public function setPostBack($post_back)
    {
        $this->container['post_back'] = $post_back;

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


