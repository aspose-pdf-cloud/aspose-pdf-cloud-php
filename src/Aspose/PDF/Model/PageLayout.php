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
 * PageLayout Class 
 *
 * @category Class
 * @description Descibes page layout.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class PageLayout
{
    /**
     * Possible values of this enum
     */
    const SINGLE_PAGE = 'SinglePage';
    const ONE_COLUMN = 'OneColumn';
    const TWO_COLUMN_LEFT = 'TwoColumnLeft';
    const TWO_COLUMN_RIGHT = 'TwoColumnRight';
    const TWO_PAGE_LEFT = 'TwoPageLeft';
    const TWO_PAGE_RIGHT = 'TwoPageRight';
    const _DEFAULT = 'Default';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SINGLE_PAGE,
            self::ONE_COLUMN,
            self::TWO_COLUMN_LEFT,
            self::TWO_COLUMN_RIGHT,
            self::TWO_PAGE_LEFT,
            self::TWO_PAGE_RIGHT,
            self::_DEFAULT,
        ];
    }
}


