<?php

/**
 *
 *   Copyright (c) 2018 Aspose.Pdf for Cloud
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

require_once realpath(__DIR__ . '/../../..') . '/vendor/autoload.php';

use Aspose\Storage\StorageApi;
use Aspose\Storage\AsposeApp;

class Utils
{
	// Get App key and App SID from https://cloud.aspose.com
    const appSID = '';
    const apiKey = '';
	
	public static function uploadFile($fileName) {
		AsposeApp::$appSID = Utils::appSID;
		AsposeApp::$apiKey = Utils::apiKey;
        AsposeApp::$baseProductUri = 'http://api-dev.aspose.cloud/v1.1';
		
        $tempFolder = 'TempPdf';
        
		$storage = new StorageApi();
        $path = $tempFolder . '/' . $fileName;
		
		
		$file = realpath(__DIR__ . '/../../..') . '/testData/' . $fileName;
		$result = $storage->PutCreate($Path=$path, $versionId = null, $storage = null, $file); 
	} 
}

