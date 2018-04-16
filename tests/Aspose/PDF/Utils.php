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

//use Aspose\Storage\StorageApi;
//use Aspose\Storage\AsposeApp;
use Aspose\PDF\Api;

class Utils
{
	// Get App key and App SID from https://cloud.aspose.com
    const appSid = 'b03fc72c-e765-4427-822c-8c50a6dd628a';
	const apiKey = '95e2a135b1e1b5e8e6b4a97395b30213';
	const baseProductUri = 'http://api-dev.aspose.cloud';
	
	public static function uploadFile($fileName, $pdfApi) {
		//AsposeApp::$appSID = Utils::appSID;
		//AsposeApp::$apiKey = Utils::apiKey;
        //AsposeApp::$baseProductUri = 'http://api-dev.aspose.cloud/v1.1';
		
        $tempFolder = 'TempPdfCloud';
        
		//$storage = new StorageApi();
        $path = $tempFolder . '/' . $fileName;
		
		
		$file = realpath(__DIR__ . '/../../..') . '/testData/' . $fileName;
		$result = $pdfApi->PutCreate($Path=$path, $file); 
	} 
}

