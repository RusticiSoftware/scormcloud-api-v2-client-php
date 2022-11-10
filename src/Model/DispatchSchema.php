<?php
/**
 * DispatchSchema
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
 * DispatchSchema Class Doc Comment
 *
 * @category Class
 * @package  RusticiSoftware\Cloud\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DispatchSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DispatchSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'destination_id' => 'string',
        'destination_name' => 'string',
        'course_id' => 'string',
        'course_title' => 'string',
        'updated' => '\DateTime',
        'created' => '\DateTime',
        'allow_new_registrations' => 'bool',
        'enabled' => 'bool',
        'instanced' => 'bool',
        'registration_cap' => 'int',
        'registration_count' => 'int',
        'expiration_date' => '\DateTime',
        'tags' => 'string[]',
        'email' => 'string',
        'notes' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'destination_id' => null,
        'destination_name' => null,
        'course_id' => null,
        'course_title' => null,
        'updated' => 'date-time',
        'created' => 'date-time',
        'allow_new_registrations' => null,
        'enabled' => null,
        'instanced' => null,
        'registration_cap' => 'int32',
        'registration_count' => 'int32',
        'expiration_date' => 'date-time',
        'tags' => null,
        'email' => null,
        'notes' => null
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
        'destination_name' => 'destinationName',
        'course_id' => 'courseId',
        'course_title' => 'courseTitle',
        'updated' => 'updated',
        'created' => 'created',
        'allow_new_registrations' => 'allowNewRegistrations',
        'enabled' => 'enabled',
        'instanced' => 'instanced',
        'registration_cap' => 'registrationCap',
        'registration_count' => 'registrationCount',
        'expiration_date' => 'expirationDate',
        'tags' => 'tags',
        'email' => 'email',
        'notes' => 'notes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'destination_id' => 'setDestinationId',
        'destination_name' => 'setDestinationName',
        'course_id' => 'setCourseId',
        'course_title' => 'setCourseTitle',
        'updated' => 'setUpdated',
        'created' => 'setCreated',
        'allow_new_registrations' => 'setAllowNewRegistrations',
        'enabled' => 'setEnabled',
        'instanced' => 'setInstanced',
        'registration_cap' => 'setRegistrationCap',
        'registration_count' => 'setRegistrationCount',
        'expiration_date' => 'setExpirationDate',
        'tags' => 'setTags',
        'email' => 'setEmail',
        'notes' => 'setNotes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'destination_id' => 'getDestinationId',
        'destination_name' => 'getDestinationName',
        'course_id' => 'getCourseId',
        'course_title' => 'getCourseTitle',
        'updated' => 'getUpdated',
        'created' => 'getCreated',
        'allow_new_registrations' => 'getAllowNewRegistrations',
        'enabled' => 'getEnabled',
        'instanced' => 'getInstanced',
        'registration_cap' => 'getRegistrationCap',
        'registration_count' => 'getRegistrationCount',
        'expiration_date' => 'getExpirationDate',
        'tags' => 'getTags',
        'email' => 'getEmail',
        'notes' => 'getNotes'
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
        $this->container['destination_name'] = isset($data['destination_name']) ? $data['destination_name'] : null;
        $this->container['course_id'] = isset($data['course_id']) ? $data['course_id'] : null;
        $this->container['course_title'] = isset($data['course_title']) ? $data['course_title'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['allow_new_registrations'] = isset($data['allow_new_registrations']) ? $data['allow_new_registrations'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['instanced'] = isset($data['instanced']) ? $data['instanced'] : null;
        $this->container['registration_cap'] = isset($data['registration_cap']) ? $data['registration_cap'] : null;
        $this->container['registration_count'] = isset($data['registration_count']) ? $data['registration_count'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
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
     * @param string $destination_id Destination ID.
     *
     * @return $this
     */
    public function setDestinationId($destination_id)
    {
        $this->container['destination_id'] = $destination_id;

        return $this;
    }

    /**
     * Gets destination_name
     *
     * @return string
     */
    public function getDestinationName()
    {
        return $this->container['destination_name'];
    }

    /**
     * Sets destination_name
     *
     * @param string $destination_name Name of the destination housing this dispatch
     *
     * @return $this
     */
    public function setDestinationName($destination_name)
    {
        $this->container['destination_name'] = $destination_name;

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
     * @param string $course_id Serialized external package ID.
     *
     * @return $this
     */
    public function setCourseId($course_id)
    {
        $this->container['course_id'] = $course_id;

        return $this;
    }

    /**
     * Gets course_title
     *
     * @return string
     */
    public function getCourseTitle()
    {
        return $this->container['course_title'];
    }

    /**
     * Sets course_title
     *
     * @param string $course_title Title of this dispatched course
     *
     * @return $this
     */
    public function setCourseTitle($course_title)
    {
        $this->container['course_title'] = $course_title;

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
     * @param bool $enabled If false, the dispatch can not be launched.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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
     * @param int $registration_count The current number of registrations that have been created for this dispatch.
     *
     * @return $this
     */
    public function setRegistrationCount($registration_count)
    {
        $this->container['registration_count'] = $registration_count;

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


