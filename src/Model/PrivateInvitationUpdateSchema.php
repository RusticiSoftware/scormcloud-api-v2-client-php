<?php
/**
 * PrivateInvitationUpdateSchema
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
 * PrivateInvitationUpdateSchema Class Doc Comment
 *
 * @category Class
 * @package  RusticiSoftware\Cloud\V2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PrivateInvitationUpdateSchema implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PrivateInvitationUpdateSchema';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_launch' => 'bool',
        'invitation_email' => '\RusticiSoftware\Cloud\V2\Model\InvitationEmailSchema',
        'post_back' => '\RusticiSoftware\Cloud\V2\Model\PostBackSchema',
        'expiration_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_launch' => null,
        'invitation_email' => null,
        'post_back' => null,
        'expiration_date' => 'date-time'
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
        'allow_launch' => 'allowLaunch',
        'invitation_email' => 'invitationEmail',
        'post_back' => 'postBack',
        'expiration_date' => 'expirationDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_launch' => 'setAllowLaunch',
        'invitation_email' => 'setInvitationEmail',
        'post_back' => 'setPostBack',
        'expiration_date' => 'setExpirationDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_launch' => 'getAllowLaunch',
        'invitation_email' => 'getInvitationEmail',
        'post_back' => 'getPostBack',
        'expiration_date' => 'getExpirationDate'
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
        $this->container['allow_launch'] = isset($data['allow_launch']) ? $data['allow_launch'] : null;
        $this->container['invitation_email'] = isset($data['invitation_email']) ? $data['invitation_email'] : null;
        $this->container['post_back'] = isset($data['post_back']) ? $data['post_back'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
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
     * Gets allow_launch
     *
     * @return bool
     */
    public function getAllowLaunch()
    {
        return $this->container['allow_launch'];
    }

    /**
     * Sets allow_launch
     *
     * @param bool $allow_launch If true, then new registrations can be created for this invitation.
     *
     * @return $this
     */
    public function setAllowLaunch($allow_launch)
    {
        $this->container['allow_launch'] = $allow_launch;

        return $this;
    }

    /**
     * Gets invitation_email
     *
     * @return \RusticiSoftware\Cloud\V2\Model\InvitationEmailSchema
     */
    public function getInvitationEmail()
    {
        return $this->container['invitation_email'];
    }

    /**
     * Sets invitation_email
     *
     * @param \RusticiSoftware\Cloud\V2\Model\InvitationEmailSchema $invitation_email invitation_email
     *
     * @return $this
     */
    public function setInvitationEmail($invitation_email)
    {
        $this->container['invitation_email'] = $invitation_email;

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
     * @param \RusticiSoftware\Cloud\V2\Model\PostBackSchema $post_back Specifies a URL for which to post activity and status data in real time as the course is completed
     *
     * @return $this
     */
    public function setPostBack($post_back)
    {
        $this->container['post_back'] = $post_back;

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
     * @param \DateTime $expiration_date The ISO 8601 TimeStamp (defaults to UTC) after which this invitation will expire and can no longer be launched. An empty value will represent no expiration date.
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

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


