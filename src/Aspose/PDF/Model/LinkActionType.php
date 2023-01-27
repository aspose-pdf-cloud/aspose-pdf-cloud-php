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
 * LinkActionType Class 
 *
 * @category Class
 * @description Represents list of link action types.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class LinkActionType
{
    /**
     * Possible values of this enum
     */
    const GO_TO_ACTION = 'GoToAction';
    const GO_TO_URI_ACTION = 'GoToURIAction';
    const JAVASCRIPT_ACTION = 'JavascriptAction';
    const LAUNCH_ACTION = 'LaunchAction';
    const NAMED_ACTION = 'NamedAction';
    const SUBMIT_FORM_ACTION = 'SubmitFormAction';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GO_TO_ACTION,
            self::GO_TO_URI_ACTION,
            self::JAVASCRIPT_ACTION,
            self::LAUNCH_ACTION,
            self::NAMED_ACTION,
            self::SUBMIT_FORM_ACTION,
        ];
    }
}


