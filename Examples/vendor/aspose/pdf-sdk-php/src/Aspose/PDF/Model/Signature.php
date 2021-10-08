<?php
/**
 *
 * Copyright (c) 2021 Aspose.PDF Cloud
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */


/**
 * Signature Class 
 *
 * @category Class
 * @description Represents signature.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;

use \ArrayAccess;
use \Aspose\PDF\ObjectSerializer;

class Signature implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Signature';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'signature_path' => 'string',
        'signature_type' => '\Aspose\PDF\Model\SignatureType',
        'password' => 'string',
        'appearance' => 'string',
        'reason' => 'string',
        'contact' => 'string',
        'location' => 'string',
        'visible' => 'bool',
        'rectangle' => '\Aspose\PDF\Model\Rectangle',
        'form_field_name' => 'string',
        'authority' => 'string',
        'date' => 'string',
        'show_properties' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'signature_path' => null,
        'signature_type' => null,
        'password' => null,
        'appearance' => null,
        'reason' => null,
        'contact' => null,
        'location' => null,
        'visible' => null,
        'rectangle' => null,
        'form_field_name' => null,
        'authority' => null,
        'date' => null,
        'show_properties' => null
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
        'signature_path' => 'SignaturePath',
        'signature_type' => 'SignatureType',
        'password' => 'Password',
        'appearance' => 'Appearance',
        'reason' => 'Reason',
        'contact' => 'Contact',
        'location' => 'Location',
        'visible' => 'Visible',
        'rectangle' => 'Rectangle',
        'form_field_name' => 'FormFieldName',
        'authority' => 'Authority',
        'date' => 'Date',
        'show_properties' => 'ShowProperties'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'signature_path' => 'setSignaturePath',
        'signature_type' => 'setSignatureType',
        'password' => 'setPassword',
        'appearance' => 'setAppearance',
        'reason' => 'setReason',
        'contact' => 'setContact',
        'location' => 'setLocation',
        'visible' => 'setVisible',
        'rectangle' => 'setRectangle',
        'form_field_name' => 'setFormFieldName',
        'authority' => 'setAuthority',
        'date' => 'setDate',
        'show_properties' => 'setShowProperties'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'signature_path' => 'getSignaturePath',
        'signature_type' => 'getSignatureType',
        'password' => 'getPassword',
        'appearance' => 'getAppearance',
        'reason' => 'getReason',
        'contact' => 'getContact',
        'location' => 'getLocation',
        'visible' => 'getVisible',
        'rectangle' => 'getRectangle',
        'form_field_name' => 'getFormFieldName',
        'authority' => 'getAuthority',
        'date' => 'getDate',
        'show_properties' => 'getShowProperties'
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
        $this->container['signature_path'] = isset($data['signature_path']) ? $data['signature_path'] : null;
        $this->container['signature_type'] = isset($data['signature_type']) ? $data['signature_type'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['appearance'] = isset($data['appearance']) ? $data['appearance'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['rectangle'] = isset($data['rectangle']) ? $data['rectangle'] : null;
        $this->container['form_field_name'] = isset($data['form_field_name']) ? $data['form_field_name'] : null;
        $this->container['authority'] = isset($data['authority']) ? $data['authority'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['show_properties'] = isset($data['show_properties']) ? $data['show_properties'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['signature_path'] === null) {
            $invalidProperties[] = "'signature_path' can't be null";
        }
        if ($this->container['signature_type'] === null) {
            $invalidProperties[] = "'signature_type' can't be null";
        }
        if ($this->container['visible'] === null) {
            $invalidProperties[] = "'visible' can't be null";
        }
        if ($this->container['show_properties'] === null) {
            $invalidProperties[] = "'show_properties' can't be null";
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

        if ($this->container['signature_path'] === null) {
            return false;
        }
        if ($this->container['signature_type'] === null) {
            return false;
        }
        if ($this->container['visible'] === null) {
            return false;
        }
        if ($this->container['show_properties'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets signature_path
     *
     * @return string
     */
    public function getSignaturePath()
    {
        return $this->container['signature_path'];
    }

    /**
     * Sets signature_path
     *
     * @param string $signature_path Gets or sets the signature path.
     *
     * @return $this
     */
    public function setSignaturePath($signature_path)
    {
        $this->container['signature_path'] = $signature_path;

        return $this;
    }

    /**
     * Gets signature_type
     *
     * @return \Aspose\PDF\Model\SignatureType
     */
    public function getSignatureType()
    {
        return $this->container['signature_type'];
    }

    /**
     * Sets signature_type
     *
     * @param \Aspose\PDF\Model\SignatureType $signature_type Gets or sets the type of the signature.
     *
     * @return $this
     */
    public function setSignatureType($signature_type)
    {
        $this->container['signature_type'] = $signature_type;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Gets or sets the signature password.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets appearance
     *
     * @return string
     */
    public function getAppearance()
    {
        return $this->container['appearance'];
    }

    /**
     * Sets appearance
     *
     * @param string $appearance Sets or gets a graphic appearance for the signature. Property value represents an image file name.
     *
     * @return $this
     */
    public function setAppearance($appearance)
    {
        $this->container['appearance'] = $appearance;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason Gets or sets the reason of the signature.
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param string $contact Gets or sets the contact of the signature.
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location Gets or sets the location of the signature.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool $visible Gets or sets a value indicating whether this  is visible. Supports only when signing particular page.
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets rectangle
     *
     * @return \Aspose\PDF\Model\Rectangle
     */
    public function getRectangle()
    {
        return $this->container['rectangle'];
    }

    /**
     * Sets rectangle
     *
     * @param \Aspose\PDF\Model\Rectangle $rectangle Gets or sets the visible rectangle of the signature. Supports only when signing particular page.
     *
     * @return $this
     */
    public function setRectangle($rectangle)
    {
        $this->container['rectangle'] = $rectangle;

        return $this;
    }

    /**
     * Gets form_field_name
     *
     * @return string
     */
    public function getFormFieldName()
    {
        return $this->container['form_field_name'];
    }

    /**
     * Sets form_field_name
     *
     * @param string $form_field_name Gets or sets the name of the signature field. Supports only when signing document with particular form field.
     *
     * @return $this
     */
    public function setFormFieldName($form_field_name)
    {
        $this->container['form_field_name'] = $form_field_name;

        return $this;
    }

    /**
     * Gets authority
     *
     * @return string
     */
    public function getAuthority()
    {
        return $this->container['authority'];
    }

    /**
     * Sets authority
     *
     * @param string $authority Gets or sets the name of the person or authority signing the document..
     *
     * @return $this
     */
    public function setAuthority($authority)
    {
        $this->container['authority'] = $authority;

        return $this;
    }

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param string $date Gets or sets the time of signing.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets show_properties
     *
     * @return bool
     */
    public function getShowProperties()
    {
        return $this->container['show_properties'];
    }

    /**
     * Sets show_properties
     *
     * @param bool $show_properties Gets or sets the showproperties in signature field
     *
     * @return $this
     */
    public function setShowProperties($show_properties)
    {
        $this->container['show_properties'] = $show_properties;

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


