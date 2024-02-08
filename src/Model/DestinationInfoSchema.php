<?php
/**
 * DestinationInfoSchema
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
 * DestinationInfoSchema Class Doc Comment
 *
 * @category Class
 * @package  RusticiSoftware\Cloud\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DestinationInfoSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DestinationInfoSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'dispatch_count' => 'int',
        'updated' => '\DateTime',
        'created' => '\DateTime',
        'tags' => 'string[]',
        'email' => 'string',
        'notes' => 'string',
        'launch_auth' => '\RusticiSoftware\Cloud\V2\Model\LaunchAuthSchema',
        'lti13_data' => '\RusticiSoftware\Cloud\V2\Model\Lti13PlatformConfigurationSchema'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'dispatch_count' => 'int32',
        'updated' => 'date-time',
        'created' => 'date-time',
        'tags' => null,
        'email' => null,
        'notes' => null,
        'launch_auth' => null,
        'lti13_data' => null
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
        'name' => 'name',
        'dispatch_count' => 'dispatchCount',
        'updated' => 'updated',
        'created' => 'created',
        'tags' => 'tags',
        'email' => 'email',
        'notes' => 'notes',
        'launch_auth' => 'launchAuth',
        'lti13_data' => 'lti13Data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'dispatch_count' => 'setDispatchCount',
        'updated' => 'setUpdated',
        'created' => 'setCreated',
        'tags' => 'setTags',
        'email' => 'setEmail',
        'notes' => 'setNotes',
        'launch_auth' => 'setLaunchAuth',
        'lti13_data' => 'setLti13Data'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'dispatch_count' => 'getDispatchCount',
        'updated' => 'getUpdated',
        'created' => 'getCreated',
        'tags' => 'getTags',
        'email' => 'getEmail',
        'notes' => 'getNotes',
        'launch_auth' => 'getLaunchAuth',
        'lti13_data' => 'getLti13Data'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['dispatch_count'] = isset($data['dispatch_count']) ? $data['dispatch_count'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['launch_auth'] = isset($data['launch_auth']) ? $data['launch_auth'] : null;
        $this->container['lti13_data'] = isset($data['lti13_data']) ? $data['lti13_data'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The destination's name.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets dispatch_count
     *
     * @return int
     */
    public function getDispatchCount()
    {
        return $this->container['dispatch_count'];
    }

    /**
     * Sets dispatch_count
     *
     * @param int $dispatch_count dispatch_count
     *
     * @return $this
     */
    public function setDispatchCount($dispatch_count)
    {
        $this->container['dispatch_count'] = $dispatch_count;

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
     * @param string[] $tags Optional array of tags.
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
     * @param string $email SCORM Cloud user e-mail associated with this destination. If this is not provided, it will default to the owner of the Realm.
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
     * @param string $notes Any provided notes about this Destination
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets launch_auth
     *
     * @return \RusticiSoftware\Cloud\V2\Model\LaunchAuthSchema
     */
    public function getLaunchAuth()
    {
        return $this->container['launch_auth'];
    }

    /**
     * Sets launch_auth
     *
     * @param \RusticiSoftware\Cloud\V2\Model\LaunchAuthSchema $launch_auth launch_auth
     *
     * @return $this
     */
    public function setLaunchAuth($launch_auth)
    {
        $this->container['launch_auth'] = $launch_auth;

        return $this;
    }

    /**
     * Gets lti13_data
     *
     * @return \RusticiSoftware\Cloud\V2\Model\Lti13PlatformConfigurationSchema
     */
    public function getLti13Data()
    {
        return $this->container['lti13_data'];
    }

    /**
     * Sets lti13_data
     *
     * @param \RusticiSoftware\Cloud\V2\Model\Lti13PlatformConfigurationSchema $lti13_data lti13_data
     *
     * @return $this
     */
    public function setLti13Data($lti13_data)
    {
        $this->container['lti13_data'] = $lti13_data;

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

