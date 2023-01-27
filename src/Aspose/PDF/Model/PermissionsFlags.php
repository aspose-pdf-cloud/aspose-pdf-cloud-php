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
 * PermissionsFlags Class 
 *
 * @category Class
 * @description This enum represents user&#39;s permissions for a pdf.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class PermissionsFlags
{
    /**
     * Possible values of this enum
     */
    const PRINT_DOCUMENT = 'PrintDocument';
    const MODIFY_CONTENT = 'ModifyContent';
    const EXTRACT_CONTENT = 'ExtractContent';
    const MODIFY_TEXT_ANNOTATIONS = 'ModifyTextAnnotations';
    const FILL_FORM = 'FillForm';
    const EXTRACT_CONTENT_WITH_DISABILITIES = 'ExtractContentWithDisabilities';
    const ASSEMBLE_DOCUMENT = 'AssembleDocument';
    const PRINTING_QUALITY = 'PrintingQuality';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PRINT_DOCUMENT,
            self::MODIFY_CONTENT,
            self::EXTRACT_CONTENT,
            self::MODIFY_TEXT_ANNOTATIONS,
            self::FILL_FORM,
            self::EXTRACT_CONTENT_WITH_DISABILITIES,
            self::ASSEMBLE_DOCUMENT,
            self::PRINTING_QUALITY,
        ];
    }
}


