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


use Aspose\PDF\Api\PdfApi;
use Aspose\PDF\Configuration;

class PdfApiTest extends PHPUnit\Framework\TestCase
{

    protected $pdfApi;
    protected $tempFolder;
    protected $config;

    protected function setUp(): void
    {
        $servercreds_json = file_get_contents('../../../../../Settings/servercreds.json');
        $creds = json_decode($servercreds_json, true);
        $appSid = $creds['AppSID'];
        $appKey = $creds['AppKey'];
        $host = $creds['ProductUri'];

        $this->tempFolder = 'TempPdfCloud';        
        $this->config = new Configuration();
        $this->config->setAppKey($appKey);
        $this->config->setAppSid($appSid);
        $this->config->setHost($host);

        $this->pdfApi = new PdfApi(null, $this->config);
    }

    private function uploadFile($fileName, $subFolder = null) 
    {
        if (null != $subFolder)
        {
            $path = $this->tempFolder . '/' . $subFolder . '/' . $fileName;       
        }
        else
        {
            $path = $this->tempFolder . '/' . $fileName;
        }
	$file = realpath(__DIR__ . '/../../..') . '/testData/' . $fileName;
	$result = $this->pdfApi->uploadFile($Path=$path, $file); 
    } 

    public function testPutCreateEmptyDocument()
    {
        $name = 'empty.pdf';

        $folder = $this->tempFolder;

        $response = $this->pdfApi->putCreateDocument($name, $template_file = null, $data_file = null, $template_type = null, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

}
