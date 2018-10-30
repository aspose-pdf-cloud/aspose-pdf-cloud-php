<?php
/**
 * OptimizeOptions Class 
 *
 * @category Class
 * @description Represents Pdf optimize options.
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

use \ArrayAccess;
use \Aspose\PDF\ObjectSerializer;

class OptimizeOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OptimizeOptions';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_reuse_page_content' => 'bool',
        'compress_images' => 'bool',
        'image_quality' => 'int',
        'link_duplcate_streams' => 'bool',
        'remove_unused_objects' => 'bool',
        'remove_unused_streams' => 'bool',
        'unembed_fonts' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_reuse_page_content' => null,
        'compress_images' => null,
        'image_quality' => 'int32',
        'link_duplcate_streams' => null,
        'remove_unused_objects' => null,
        'remove_unused_streams' => null,
        'unembed_fonts' => null
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
        'allow_reuse_page_content' => 'AllowReusePageContent',
        'compress_images' => 'CompressImages',
        'image_quality' => 'ImageQuality',
        'link_duplcate_streams' => 'LinkDuplcateStreams',
        'remove_unused_objects' => 'RemoveUnusedObjects',
        'remove_unused_streams' => 'RemoveUnusedStreams',
        'unembed_fonts' => 'UnembedFonts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_reuse_page_content' => 'setAllowReusePageContent',
        'compress_images' => 'setCompressImages',
        'image_quality' => 'setImageQuality',
        'link_duplcate_streams' => 'setLinkDuplcateStreams',
        'remove_unused_objects' => 'setRemoveUnusedObjects',
        'remove_unused_streams' => 'setRemoveUnusedStreams',
        'unembed_fonts' => 'setUnembedFonts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_reuse_page_content' => 'getAllowReusePageContent',
        'compress_images' => 'getCompressImages',
        'image_quality' => 'getImageQuality',
        'link_duplcate_streams' => 'getLinkDuplcateStreams',
        'remove_unused_objects' => 'getRemoveUnusedObjects',
        'remove_unused_streams' => 'getRemoveUnusedStreams',
        'unembed_fonts' => 'getUnembedFonts'
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
        $this->container['allow_reuse_page_content'] = isset($data['allow_reuse_page_content']) ? $data['allow_reuse_page_content'] : null;
        $this->container['compress_images'] = isset($data['compress_images']) ? $data['compress_images'] : null;
        $this->container['image_quality'] = isset($data['image_quality']) ? $data['image_quality'] : null;
        $this->container['link_duplcate_streams'] = isset($data['link_duplcate_streams']) ? $data['link_duplcate_streams'] : null;
        $this->container['remove_unused_objects'] = isset($data['remove_unused_objects']) ? $data['remove_unused_objects'] : null;
        $this->container['remove_unused_streams'] = isset($data['remove_unused_streams']) ? $data['remove_unused_streams'] : null;
        $this->container['unembed_fonts'] = isset($data['unembed_fonts']) ? $data['unembed_fonts'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['allow_reuse_page_content'] === null) {
            $invalidProperties[] = "'allow_reuse_page_content' can't be null";
        }
        if ($this->container['compress_images'] === null) {
            $invalidProperties[] = "'compress_images' can't be null";
        }
        if ($this->container['image_quality'] === null) {
            $invalidProperties[] = "'image_quality' can't be null";
        }
        if ($this->container['link_duplcate_streams'] === null) {
            $invalidProperties[] = "'link_duplcate_streams' can't be null";
        }
        if ($this->container['remove_unused_objects'] === null) {
            $invalidProperties[] = "'remove_unused_objects' can't be null";
        }
        if ($this->container['remove_unused_streams'] === null) {
            $invalidProperties[] = "'remove_unused_streams' can't be null";
        }
        if ($this->container['unembed_fonts'] === null) {
            $invalidProperties[] = "'unembed_fonts' can't be null";
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

        if ($this->container['allow_reuse_page_content'] === null) {
            return false;
        }
        if ($this->container['compress_images'] === null) {
            return false;
        }
        if ($this->container['image_quality'] === null) {
            return false;
        }
        if ($this->container['link_duplcate_streams'] === null) {
            return false;
        }
        if ($this->container['remove_unused_objects'] === null) {
            return false;
        }
        if ($this->container['remove_unused_streams'] === null) {
            return false;
        }
        if ($this->container['unembed_fonts'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets allow_reuse_page_content
     *
     * @return bool
     */
    public function getAllowReusePageContent()
    {
        return $this->container['allow_reuse_page_content'];
    }

    /**
     * Sets allow_reuse_page_content
     *
     * @param bool $allow_reuse_page_content If true page contents will be reused when document is optimized for equal pages.
     *
     * @return $this
     */
    public function setAllowReusePageContent($allow_reuse_page_content)
    {
        $this->container['allow_reuse_page_content'] = $allow_reuse_page_content;

        return $this;
    }

    /**
     * Gets compress_images
     *
     * @return bool
     */
    public function getCompressImages()
    {
        return $this->container['compress_images'];
    }

    /**
     * Sets compress_images
     *
     * @param bool $compress_images If this flag is set to true images will be compressed in the document. compression level is specfied with ImageQuality property.
     *
     * @return $this
     */
    public function setCompressImages($compress_images)
    {
        $this->container['compress_images'] = $compress_images;

        return $this;
    }

    /**
     * Gets image_quality
     *
     * @return int
     */
    public function getImageQuality()
    {
        return $this->container['image_quality'];
    }

    /**
     * Sets image_quality
     *
     * @param int $image_quality Specifie slevel of image compression when CompressIamges flag is used.
     *
     * @return $this
     */
    public function setImageQuality($image_quality)
    {
        $this->container['image_quality'] = $image_quality;

        return $this;
    }

    /**
     * Gets link_duplcate_streams
     *
     * @return bool
     */
    public function getLinkDuplcateStreams()
    {
        return $this->container['link_duplcate_streams'];
    }

    /**
     * Sets link_duplcate_streams
     *
     * @param bool $link_duplcate_streams If this flag is set to true, Resource streams will be analyzed. If duplicate streams are found (i.e. if stream contents is equal), then thes streams will be stored as one object.  This allows to decrease document size in some cases (for example, when same document was concatenedted multiple times).
     *
     * @return $this
     */
    public function setLinkDuplcateStreams($link_duplcate_streams)
    {
        $this->container['link_duplcate_streams'] = $link_duplcate_streams;

        return $this;
    }

    /**
     * Gets remove_unused_objects
     *
     * @return bool
     */
    public function getRemoveUnusedObjects()
    {
        return $this->container['remove_unused_objects'];
    }

    /**
     * Sets remove_unused_objects
     *
     * @param bool $remove_unused_objects If this flag is set to true, all document objects will be checked and unused objects (i.e. objects which does not have any reference) are removed from document.
     *
     * @return $this
     */
    public function setRemoveUnusedObjects($remove_unused_objects)
    {
        $this->container['remove_unused_objects'] = $remove_unused_objects;

        return $this;
    }

    /**
     * Gets remove_unused_streams
     *
     * @return bool
     */
    public function getRemoveUnusedStreams()
    {
        return $this->container['remove_unused_streams'];
    }

    /**
     * Sets remove_unused_streams
     *
     * @param bool $remove_unused_streams If this flag set to true, every resource is checked on it's usage. If resource is never used, then resources is removed. This may decrease document size for example when pages were extracted from document.
     *
     * @return $this
     */
    public function setRemoveUnusedStreams($remove_unused_streams)
    {
        $this->container['remove_unused_streams'] = $remove_unused_streams;

        return $this;
    }

    /**
     * Gets unembed_fonts
     *
     * @return bool
     */
    public function getUnembedFonts()
    {
        return $this->container['unembed_fonts'];
    }

    /**
     * Sets unembed_fonts
     *
     * @param bool $unembed_fonts Make fonts not embedded if set to true.
     *
     * @return $this
     */
    public function setUnembedFonts($unembed_fonts)
    {
        $this->container['unembed_fonts'] = $unembed_fonts;

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


