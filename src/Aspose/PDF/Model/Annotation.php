<?php
/**
 * Annotation Class 
 *
 * @category Class
 * @description Provides annotation.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

/**
 *
 *   Copyright (c) 2018 Aspose.PDF Cloud
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


namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class Annotation extends LinkElement 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Annotation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contents' => 'string',
        'creation_date' => 'string',
        'subject' => 'string',
        'title' => 'string',
        'modified' => 'string',
        'id' => 'string',
        'flags' => '\Aspose\PDF\Model\AnnotationFlags[]',
        'name' => 'string',
        'rect' => '\Aspose\PDF\Model\RectanglePdf',
        'page_index' => 'int',
        'z_index' => 'int',
        'horizontal_alignment' => '\Aspose\PDF\Model\HorizontalAlignment',
        'vertical_alignment' => '\Aspose\PDF\Model\VerticalAlignment'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contents' => null,
        'creation_date' => null,
        'subject' => null,
        'title' => null,
        'modified' => null,
        'id' => null,
        'flags' => null,
        'name' => null,
        'rect' => null,
        'page_index' => 'int32',
        'z_index' => 'int32',
        'horizontal_alignment' => null,
        'vertical_alignment' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'contents' => 'Contents',
        'creation_date' => 'CreationDate',
        'subject' => 'Subject',
        'title' => 'Title',
        'modified' => 'Modified',
        'id' => 'Id',
        'flags' => 'Flags',
        'name' => 'Name',
        'rect' => 'Rect',
        'page_index' => 'PageIndex',
        'z_index' => 'ZIndex',
        'horizontal_alignment' => 'HorizontalAlignment',
        'vertical_alignment' => 'VerticalAlignment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contents' => 'setContents',
        'creation_date' => 'setCreationDate',
        'subject' => 'setSubject',
        'title' => 'setTitle',
        'modified' => 'setModified',
        'id' => 'setId',
        'flags' => 'setFlags',
        'name' => 'setName',
        'rect' => 'setRect',
        'page_index' => 'setPageIndex',
        'z_index' => 'setZIndex',
        'horizontal_alignment' => 'setHorizontalAlignment',
        'vertical_alignment' => 'setVerticalAlignment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contents' => 'getContents',
        'creation_date' => 'getCreationDate',
        'subject' => 'getSubject',
        'title' => 'getTitle',
        'modified' => 'getModified',
        'id' => 'getId',
        'flags' => 'getFlags',
        'name' => 'getName',
        'rect' => 'getRect',
        'page_index' => 'getPageIndex',
        'z_index' => 'getZIndex',
        'horizontal_alignment' => 'getHorizontalAlignment',
        'vertical_alignment' => 'getVerticalAlignment'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['contents'] = isset($data['contents']) ? $data['contents'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['flags'] = isset($data['flags']) ? $data['flags'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['rect'] = isset($data['rect']) ? $data['rect'] : null;
        $this->container['page_index'] = isset($data['page_index']) ? $data['page_index'] : null;
        $this->container['z_index'] = isset($data['z_index']) ? $data['z_index'] : null;
        $this->container['horizontal_alignment'] = isset($data['horizontal_alignment']) ? $data['horizontal_alignment'] : null;
        $this->container['vertical_alignment'] = isset($data['vertical_alignment']) ? $data['vertical_alignment'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
        if (!parent::valid()) {
            return false;
        }

        return true;
    }


    /**
     * Gets contents
     *
     * @return string
     */
    public function getContents()
    {
        return $this->container['contents'];
    }

    /**
     * Sets contents
     *
     * @param string $contents Get the annotation content.
     *
     * @return $this
     */
    public function setContents($contents)
    {
        $this->container['contents'] = $contents;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return string
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param string $creation_date The date and time when the annotation was created.
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject Get the annotation subject.
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

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
     * @param string $title Get the annotation title.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return string
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param string $modified The date and time when the annotation was last modified.
     *
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
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
     * @param string $id Gets ID of the annotation.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets flags
     *
     * @return \Aspose\PDF\Model\AnnotationFlags[]
     */
    public function getFlags()
    {
        return $this->container['flags'];
    }

    /**
     * Sets flags
     *
     * @param \Aspose\PDF\Model\AnnotationFlags[] $flags Gets Flags of the annotation.
     *
     * @return $this
     */
    public function setFlags($flags)
    {
        $this->container['flags'] = $flags;

        return $this;
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
     * @param string $name Gets Name of the annotation.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets rect
     *
     * @return \Aspose\PDF\Model\RectanglePdf
     */
    public function getRect()
    {
        return $this->container['rect'];
    }

    /**
     * Sets rect
     *
     * @param \Aspose\PDF\Model\RectanglePdf $rect Gets Rect of the annotation.
     *
     * @return $this
     */
    public function setRect($rect)
    {
        $this->container['rect'] = $rect;

        return $this;
    }

    /**
     * Gets page_index
     *
     * @return int
     */
    public function getPageIndex()
    {
        return $this->container['page_index'];
    }

    /**
     * Sets page_index
     *
     * @param int $page_index Gets PageIndex of the annotation.
     *
     * @return $this
     */
    public function setPageIndex($page_index)
    {
        $this->container['page_index'] = $page_index;

        return $this;
    }

    /**
     * Gets z_index
     *
     * @return int
     */
    public function getZIndex()
    {
        return $this->container['z_index'];
    }

    /**
     * Sets z_index
     *
     * @param int $z_index Gets ZIndex of the annotation.
     *
     * @return $this
     */
    public function setZIndex($z_index)
    {
        $this->container['z_index'] = $z_index;

        return $this;
    }

    /**
     * Gets horizontal_alignment
     *
     * @return \Aspose\PDF\Model\HorizontalAlignment
     */
    public function getHorizontalAlignment()
    {
        return $this->container['horizontal_alignment'];
    }

    /**
     * Sets horizontal_alignment
     *
     * @param \Aspose\PDF\Model\HorizontalAlignment $horizontal_alignment Gets HorizontalAlignment of the annotation.
     *
     * @return $this
     */
    public function setHorizontalAlignment($horizontal_alignment)
    {
        $this->container['horizontal_alignment'] = $horizontal_alignment;

        return $this;
    }

    /**
     * Gets vertical_alignment
     *
     * @return \Aspose\PDF\Model\VerticalAlignment
     */
    public function getVerticalAlignment()
    {
        return $this->container['vertical_alignment'];
    }

    /**
     * Sets vertical_alignment
     *
     * @param \Aspose\PDF\Model\VerticalAlignment $vertical_alignment Gets VerticalAlignment of the annotation.
     *
     * @return $this
     */
    public function setVerticalAlignment($vertical_alignment)
    {
        $this->container['vertical_alignment'] = $vertical_alignment;

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


