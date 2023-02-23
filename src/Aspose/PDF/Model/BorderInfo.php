<?php
/**
 *
 * Copyright (c) 2023 Aspose.PDF Cloud
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
 * BorderInfo Class 
 *
 * @category Class
 * @description This class represents border for graphics elements.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;

use \ArrayAccess;
use \Aspose\PDF\ObjectSerializer;

class BorderInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BorderInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'left' => '\Aspose\PDF\Model\GraphInfo',
        'right' => '\Aspose\PDF\Model\GraphInfo',
        'top' => '\Aspose\PDF\Model\GraphInfo',
        'bottom' => '\Aspose\PDF\Model\GraphInfo',
        'rounded_border_radius' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'left' => null,
        'right' => null,
        'top' => null,
        'bottom' => null,
        'rounded_border_radius' => 'double'
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
        'left' => 'Left',
        'right' => 'Right',
        'top' => 'Top',
        'bottom' => 'Bottom',
        'rounded_border_radius' => 'RoundedBorderRadius'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'left' => 'setLeft',
        'right' => 'setRight',
        'top' => 'setTop',
        'bottom' => 'setBottom',
        'rounded_border_radius' => 'setRoundedBorderRadius'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'left' => 'getLeft',
        'right' => 'getRight',
        'top' => 'getTop',
        'bottom' => 'getBottom',
        'rounded_border_radius' => 'getRoundedBorderRadius'
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
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['right'] = isset($data['right']) ? $data['right'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['bottom'] = isset($data['bottom']) ? $data['bottom'] : null;
        $this->container['rounded_border_radius'] = isset($data['rounded_border_radius']) ? $data['rounded_border_radius'] : null;
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

        return true;
    }


    /**
     * Gets left
     *
     * @return \Aspose\PDF\Model\GraphInfo
     */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /**
     * Sets left
     *
     * @param \Aspose\PDF\Model\GraphInfo $left Gets or sets a object that indicates left of the border.
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;

        return $this;
    }

    /**
     * Gets right
     *
     * @return \Aspose\PDF\Model\GraphInfo
     */
    public function getRight()
    {
        return $this->container['right'];
    }

    /**
     * Sets right
     *
     * @param \Aspose\PDF\Model\GraphInfo $right Gets or sets a object that indicates right of the border.
     *
     * @return $this
     */
    public function setRight($right)
    {
        $this->container['right'] = $right;

        return $this;
    }

    /**
     * Gets top
     *
     * @return \Aspose\PDF\Model\GraphInfo
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
     * Sets top
     *
     * @param \Aspose\PDF\Model\GraphInfo $top Gets or sets a object that indicates the top border.
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;

        return $this;
    }

    /**
     * Gets bottom
     *
     * @return \Aspose\PDF\Model\GraphInfo
     */
    public function getBottom()
    {
        return $this->container['bottom'];
    }

    /**
     * Sets bottom
     *
     * @param \Aspose\PDF\Model\GraphInfo $bottom Gets or sets a object that indicates bottom of the border.
     *
     * @return $this
     */
    public function setBottom($bottom)
    {
        $this->container['bottom'] = $bottom;

        return $this;
    }

    /**
     * Gets rounded_border_radius
     *
     * @return double
     */
    public function getRoundedBorderRadius()
    {
        return $this->container['rounded_border_radius'];
    }

    /**
     * Sets rounded_border_radius
     *
     * @param double $rounded_border_radius Gets or sets a rouded border radius
     *
     * @return $this
     */
    public function setRoundedBorderRadius($rounded_border_radius)
    {
        $this->container['rounded_border_radius'] = $rounded_border_radius;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
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


