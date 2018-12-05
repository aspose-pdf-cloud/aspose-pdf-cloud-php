<?php

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


use Aspose\PDF\Api\PdfApi;
use Aspose\PDF\Configuration;

class PdfApiTest extends PHPUnit_Framework_TestCase
{

    protected $pdfApi;
    protected $tempFolder;
    protected $config;

    protected function setUp()
    {
        // Get App key and App SID from https://aspose.cloud
        $appSid = '';
        $appKey = '';
        $host = 'http://billing.cloud.saltov.dynabic.com/v2.0';


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
		$result = $this->pdfApi->PutCreate($Path=$path, $file); 
	} 

    //Annotations Tests

    public function testGetDocumentAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->getDocumentAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testDeleteDocumentAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->deleteDocumentAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPageAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $response = $this->pdfApi->getPageAnnotations($name, $pageNumber, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testDeletePageAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $response = $this->pdfApi->deletePageAnnotations($name, $pageNumber, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testDeleteAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $responseAnnotations = $this->pdfApi->getDocumentAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->deleteAnnotation($name, $annotationId, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    //Polygon Annotations Tests

    public function testGetDocumentPolygonAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->getDocumentPolygonAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPagePolygonAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $response = $this->pdfApi->getPagePolygonAnnotations($name, $pageNumber, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetPolygonAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $responseAnnotations = $this->pdfApi->getDocumentPolygonAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->getPolygonAnnotation($name, $annotationId, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostPagePolygonAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $annotation = new Aspose\PDF\Model\PolygonAnnotation();
        $annotation->setName("Test Text");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text");
        $annotation->setSubject("Subj");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title");
        $annotation->setVertices(
            [
                new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10]),
                new Aspose\PDF\Model\Point(['x' => 20, 'y' => 10]),
                new Aspose\PDF\Model\Point(['x' => 10, 'y' => 20]),
                new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10])
            ]);

        $response = $this->pdfApi->postPagePolygonAnnotations($name, $pageNumber, [$annotation], null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testPutPolygonAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $annotation = new Aspose\PDF\Model\PolygonAnnotation();
        $annotation->setName("Test Text Updated");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text Updated");
        $annotation->setSubject("Subj Updated");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title Updated");
        $annotation->setVertices(
            [
                new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10]),
                new Aspose\PDF\Model\Point(['x' => 20, 'y' => 10]),
                new Aspose\PDF\Model\Point(['x' => 10, 'y' => 20]),
                new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10])
            ]);

        $responseAnnotations = $this->pdfApi->getDocumentPolygonAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->putPolygonAnnotation($name, $annotationId, $annotation, null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    //PolyLine Annotations Tests

    public function testGetDocumentPolyLineAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->getDocumentPolyLineAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPagePolyLineAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $response = $this->pdfApi->getPagePolyLineAnnotations($name, $pageNumber, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetPolyLineAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $responseAnnotations = $this->pdfApi->getDocumentPolyLineAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->getPolyLineAnnotation($name, $annotationId, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostPagePolyLineAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $annotation = new Aspose\PDF\Model\PolyLineAnnotation();
        $annotation->setName("Test Text");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text");
        $annotation->setSubject("Subj");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title");
        $annotation->setVertices(
            [
                new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10]),
                new Aspose\PDF\Model\Point(['x' => 20, 'y' => 10]),
                new Aspose\PDF\Model\Point(['x' => 10, 'y' => 20]),
                new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10])
            ]);

        $response = $this->pdfApi->postPagePolyLineAnnotations($name, $pageNumber, [$annotation], null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testPutPolyLineAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $annotation = new Aspose\PDF\Model\PolyLineAnnotation();
        $annotation->setName("Test Text Updated");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text Updated");
        $annotation->setSubject("Subj Updated");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title Updated");
        $annotation->setVertices(
            [
                new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10]),
                new Aspose\PDF\Model\Point(['x' => 20, 'y' => 10]),
                new Aspose\PDF\Model\Point(['x' => 10, 'y' => 20]),
                new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10])
            ]);

        $responseAnnotations = $this->pdfApi->getDocumentPolyLineAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->putPolyLineAnnotation($name, $annotationId, $annotation, null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    
    //Circle Annotations Tests

    public function testGetDocumentCircleAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->getDocumentCircleAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPageCircleAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $response = $this->pdfApi->getPageCircleAnnotations($name, $pageNumber, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetCircleAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $responseAnnotations = $this->pdfApi->getDocumentCircleAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->getCircleAnnotation($name, $annotationId, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostPageCircleAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $annotation = new Aspose\PDF\Model\CircleAnnotation();
        $annotation->setName("Test Text");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text");
        $annotation->setSubject("Subj");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title");
        
        $response = $this->pdfApi->postPageCircleAnnotations($name, $pageNumber, [$annotation], null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testPutCircleAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $annotation = new Aspose\PDF\Model\CircleAnnotation();
        $annotation->setName("Test Text Updated");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text Updated");
        $annotation->setSubject("Subj Updated");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title Updated");
        
        $responseAnnotations = $this->pdfApi->getDocumentCircleAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->putCircleAnnotation($name, $annotationId, $annotation, null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }


    //Square Annotations Tests

    public function testGetDocumentSquareAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->getDocumentSquareAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPageSquareAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $response = $this->pdfApi->getPageSquareAnnotations($name, $pageNumber, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetSquareAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $responseAnnotations = $this->pdfApi->getDocumentSquareAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->getSquareAnnotation($name, $annotationId, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostPageSquareAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $annotation = new Aspose\PDF\Model\SquareAnnotation();
        $annotation->setName("Test Text");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text");
        $annotation->setSubject("Subj");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title");
        
        $response = $this->pdfApi->postPageSquareAnnotations($name, $pageNumber, [$annotation], null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testPutSquareAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $annotation = new Aspose\PDF\Model\SquareAnnotation();
        $annotation->setName("Test Text Updated");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text Updated");
        $annotation->setSubject("Subj Updated");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title Updated");
        
        $responseAnnotations = $this->pdfApi->getDocumentSquareAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->putSquareAnnotation($name, $annotationId, $annotation, null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    //Line Annotations Tests

    public function testGetDocumentLineAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->getDocumentLineAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPageLineAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $response = $this->pdfApi->getPageLineAnnotations($name, $pageNumber, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetLineAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $responseAnnotations = $this->pdfApi->getDocumentLineAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->getLineAnnotation($name, $annotationId, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostPageLineAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $lineAnnotation = new Aspose\PDF\Model\LineAnnotation();
        $lineAnnotation->setName("Test Text");
        $lineAnnotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $lineAnnotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $lineAnnotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $lineAnnotation->setRichText("Rich Text");
        $lineAnnotation->setSubject("Subj");
        $lineAnnotation->setZIndex(1);
        $lineAnnotation->setTitle("Title");
        $lineAnnotation->setStarting(new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10]));
        $lineAnnotation->setEnding(new Aspose\PDF\Model\Point(['x' => 100, 'y' => 100]));

        $response = $this->pdfApi->postPageLineAnnotations($name, $pageNumber, [$lineAnnotation], null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testPutLineAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $lineAnnotation = new Aspose\PDF\Model\LineAnnotation();
        $lineAnnotation->setName("Test Text Updated");
        $lineAnnotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $lineAnnotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $lineAnnotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $lineAnnotation->setRichText("Rich Text Updated");
        $lineAnnotation->setSubject("Subj Updated");
        $lineAnnotation->setZIndex(1);
        $lineAnnotation->setTitle("Title Updated");
        $lineAnnotation->setStarting(new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10]));
        $lineAnnotation->setEnding(new Aspose\PDF\Model\Point(['x' => 100, 'y' => 100]));

        $responseAnnotations = $this->pdfApi->getDocumentLineAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->putLineAnnotation($name, $annotationId, $lineAnnotation, null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    //Free Text Annotations Tests

    public function testGetDocumentFreeTextAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->getDocumentFreeTextAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPageFreeTextAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $response = $this->pdfApi->getPageFreeTextAnnotations($name, $pageNumber, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetFreeTextAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $responseAnnotations = $this->pdfApi->getDocumentFreeTextAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->getFreeTextAnnotation($name, $annotationId, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostPageFreeTextAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $textStyle = new Aspose\PDF\Model\TextStyle();
        $textStyle->setFontSize(12); 
        $textStyle->setFont("Arial");
        $textStyle->setForegroundColor(new Aspose\PDF\Model\Color(['a' => 0xFF, 'r' => 0, 'g' => 0xFF, 'b' => 0]));
        $textStyle->setBackgroundColor(new Aspose\PDF\Model\Color(['a' => 0xFF, 'r' => 0xFF, 'g' => 0, 'b' => 0]));

        $freeTextAnnotation = new Aspose\PDF\Model\FreeTextAnnotation();
        $freeTextAnnotation->setName("Test Free Text");
        $freeTextAnnotation->setTextStyle($textStyle);
        $freeTextAnnotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $freeTextAnnotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $freeTextAnnotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $freeTextAnnotation->setIntent(Aspose\PDF\Model\FreeTextIntent::FREE_TEXT_TYPE_WRITER);
        $freeTextAnnotation->setRichText("Rich Text");
        $freeTextAnnotation->setSubject("Text Box Subj");
        $freeTextAnnotation->setZIndex(1);
        $freeTextAnnotation->setJustification(Aspose\PDF\Model\Justification::CENTER);
        $freeTextAnnotation->setTitle("Title");

        $response = $this->pdfApi->postPageFreeTextAnnotations($name, $pageNumber, [$freeTextAnnotation], null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testPutFreeTextAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $textStyle = new Aspose\PDF\Model\TextStyle();
        $textStyle->setFontSize(12); 
        $textStyle->setFont("Arial");
        $textStyle->setForegroundColor(new Aspose\PDF\Model\Color(['a' => 0xFF, 'r' => 0, 'g' => 0xFF, 'b' => 0]));
        $textStyle->setBackgroundColor(new Aspose\PDF\Model\Color(['a' => 0xFF, 'r' => 0xFF, 'g' => 0, 'b' => 0]));

        $freeTextAnnotation = new Aspose\PDF\Model\FreeTextAnnotation();
        $freeTextAnnotation->setName("Test Free Text");
        $freeTextAnnotation->setTextStyle($textStyle);
        $freeTextAnnotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $freeTextAnnotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $freeTextAnnotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $freeTextAnnotation->setIntent(Aspose\PDF\Model\FreeTextIntent::FREE_TEXT_TYPE_WRITER);
        $freeTextAnnotation->setRichText("Rich Text");
        $freeTextAnnotation->setSubject("Text Box Subj");
        $freeTextAnnotation->setZIndex(1);
        $freeTextAnnotation->setJustification(Aspose\PDF\Model\Justification::CENTER);
        $freeTextAnnotation->setTitle("Title");

        $responseAnnotations = $this->pdfApi->getDocumentFreeTextAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->putFreeTextAnnotation($name, $annotationId, $freeTextAnnotation, null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    // Text Annotations Tests

    public function testGetDocumentTextAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->getDocumentTextAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPageTextAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $response = $this->pdfApi->getPageTextAnnotations($name, $pageNumber, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetTextAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $responseAnnotations = $this->pdfApi->getDocumentTextAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->getTextAnnotation($name, $annotationId, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostPageTextAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $textAnnotation = new Aspose\PDF\Model\TextAnnotation();
        $textAnnotation->setName("Test Free Text");
        $textAnnotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $textAnnotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $textAnnotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $textAnnotation->setRichText("Rich Text");
        $textAnnotation->setSubject("Text Box Subj");
        $textAnnotation->setZIndex(1);
        $textAnnotation->setState(Aspose\PDF\Model\AnnotationState::UNDEFINED);

        $response = $this->pdfApi->postPageTextAnnotations($name, $pageNumber, [$textAnnotation], null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }


    public function testPutTextAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $textAnnotation = new Aspose\PDF\Model\TextAnnotation();
        $textAnnotation->setName("Test Free Text");
        $textAnnotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $textAnnotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $textAnnotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $textAnnotation->setRichText("Rich Text");
        $textAnnotation->setSubject("Text Box Subj");
        $textAnnotation->setZIndex(1);
        $textAnnotation->setState(Aspose\PDF\Model\AnnotationState::UNDEFINED);
        $responseAnnotations = $this->pdfApi->getDocumentTextAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->putTextAnnotation($name, $annotationId, $textAnnotation, null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    //Highlight Annotations Tests

    public function testGetDocumentHighlightAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->getDocumentHighlightAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPageHighlightAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $response = $this->pdfApi->getPageHighlightAnnotations($name, $pageNumber, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetHighlightAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $responseAnnotations = $this->pdfApi->getDocumentHighlightAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->getHighlightAnnotation($name, $annotationId, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostPageHighlightAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $annotation = new Aspose\PDF\Model\HighlightAnnotation();
        $annotation->setName("Test Text");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text");
        $annotation->setSubject("Subj");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title");
        $annotation->setQuadPoints([
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10]),
            new Aspose\PDF\Model\Point(['x' => 20, 'y' => 10]),
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 20]),
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10])
        ]);
        $annotation->setModified('02/02/2018 00:00:00.000 AM');

        $response = $this->pdfApi->postPageHighlightAnnotations($name, $pageNumber, [$annotation], null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testPutHighlightAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $annotation = new Aspose\PDF\Model\HighlightAnnotation();
        $annotation->setName("Test Text Updated");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text Updated");
        $annotation->setSubject("Subj Updated");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title Updated");
        $annotation->setQuadPoints([
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10]),
            new Aspose\PDF\Model\Point(['x' => 20, 'y' => 10]),
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 20]),
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10])
        ]);
        $annotation->setModified('02/02/2018 00:00:00.000 AM');

        $responseAnnotations = $this->pdfApi->getDocumentHighlightAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->putHighlightAnnotation($name, $annotationId, $annotation, null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    //Squiggly Annotations Tests

    public function testGetDocumentSquigglyAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->getDocumentSquigglyAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPageSquigglyAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $response = $this->pdfApi->getPageSquigglyAnnotations($name, $pageNumber, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetSquigglyAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $responseAnnotations = $this->pdfApi->getDocumentSquigglyAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->getSquigglyAnnotation($name, $annotationId, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostPageSquigglyAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $annotation = new Aspose\PDF\Model\SquigglyAnnotation();
        $annotation->setName("Test Text");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text");
        $annotation->setSubject("Subj");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title");
        $annotation->setQuadPoints([
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10]),
            new Aspose\PDF\Model\Point(['x' => 20, 'y' => 10]),
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 20]),
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10])
        ]);
        $annotation->setModified('02/02/2018 00:00:00.000 AM');

        $response = $this->pdfApi->postPageSquigglyAnnotations($name, $pageNumber, [$annotation], null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testPutSquigglyAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $annotation = new Aspose\PDF\Model\SquigglyAnnotation();
        $annotation->setName("Test Text Updated");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text Updated");
        $annotation->setSubject("Subj Updated");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title Updated");
        $annotation->setQuadPoints([
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10]),
            new Aspose\PDF\Model\Point(['x' => 20, 'y' => 10]),
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 20]),
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10])
        ]);
        $annotation->setModified('02/02/2018 00:00:00.000 AM');

        $responseAnnotations = $this->pdfApi->getDocumentSquigglyAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->putSquigglyAnnotation($name, $annotationId, $annotation, null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    //StrikeOut Annotations Tests

    public function testGetDocumentStrikeOutAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->getDocumentStrikeOutAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPageStrikeOutAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $response = $this->pdfApi->getPageStrikeOutAnnotations($name, $pageNumber, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetStrikeOutAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $responseAnnotations = $this->pdfApi->getDocumentStrikeOutAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->getStrikeOutAnnotation($name, $annotationId, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostPageStrikeOutAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $annotation = new Aspose\PDF\Model\StrikeOutAnnotation();
        $annotation->setName("Test Text");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text");
        $annotation->setSubject("Subj");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title");
        $annotation->setQuadPoints([
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10]),
            new Aspose\PDF\Model\Point(['x' => 20, 'y' => 10]),
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 20]),
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10])
        ]);
        $annotation->setModified('02/02/2018 00:00:00.000 AM');

        $response = $this->pdfApi->postPageStrikeOutAnnotations($name, $pageNumber, [$annotation], null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testPutStrikeOutAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $annotation = new Aspose\PDF\Model\StrikeOutAnnotation();
        $annotation->setName("Test Text Updated");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text Updated");
        $annotation->setSubject("Subj Updated");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title Updated");
        $annotation->setQuadPoints([
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10]),
            new Aspose\PDF\Model\Point(['x' => 20, 'y' => 10]),
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 20]),
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10])
        ]);
        $annotation->setModified('02/02/2018 00:00:00.000 AM');

        $responseAnnotations = $this->pdfApi->getDocumentStrikeOutAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->putStrikeOutAnnotation($name, $annotationId, $annotation, null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    //Caret Annotations Tests

    public function testGetDocumentCaretAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->getDocumentCaretAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPageCaretAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $response = $this->pdfApi->getPageCaretAnnotations($name, $pageNumber, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetCaretAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $responseAnnotations = $this->pdfApi->getDocumentCaretAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->getCaretAnnotation($name, $annotationId, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostPageCaretAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $annotation = new Aspose\PDF\Model\CaretAnnotation();
        $annotation->setName("Test Text");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text");
        $annotation->setSubject("Subj");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title");
        $annotation->setFrame(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setModified('02/02/2018 00:00:00.000 AM');

        $response = $this->pdfApi->postPageCaretAnnotations($name, $pageNumber, [$annotation], null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testPutCaretAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $annotation = new Aspose\PDF\Model\CaretAnnotation();
        $annotation->setName("Test Text Updated");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text Updated");
        $annotation->setSubject("Subj Updated");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title Updated");
        $annotation->setFrame(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setModified('02/02/2018 00:00:00.000 AM');

        $responseAnnotations = $this->pdfApi->getDocumentCaretAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->putCaretAnnotation($name, $annotationId, $annotation, null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    //Underline Annotations Tests

    public function testGetDocumentUnderlineAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->getDocumentUnderlineAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPageUnderlineAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $response = $this->pdfApi->getPageUnderlineAnnotations($name, $pageNumber, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetUnderlineAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $responseAnnotations = $this->pdfApi->getDocumentUnderlineAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->getUnderlineAnnotation($name, $annotationId, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostPageUnderlineAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $annotation = new Aspose\PDF\Model\UnderlineAnnotation();
        $annotation->setName("Test Text");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text");
        $annotation->setSubject("Subj");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title");
        $annotation->setQuadPoints([
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10]),
            new Aspose\PDF\Model\Point(['x' => 20, 'y' => 10]),
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 20]),
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10])
        ]);
        $annotation->setModified('02/02/2018 00:00:00.000 AM');

        $response = $this->pdfApi->postPageUnderlineAnnotations($name, $pageNumber, [$annotation], null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testPutUnderlineAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $annotation = new Aspose\PDF\Model\UnderlineAnnotation();
        $annotation->setName("Test Text Updated");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text Updated");
        $annotation->setSubject("Subj Updated");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title Updated");
        $annotation->setQuadPoints([
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10]),
            new Aspose\PDF\Model\Point(['x' => 20, 'y' => 10]),
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 20]),
            new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10])
        ]);
        $annotation->setModified('02/02/2018 00:00:00.000 AM');

        $responseAnnotations = $this->pdfApi->getDocumentUnderlineAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->putUnderlineAnnotation($name, $annotationId, $annotation, null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    //Ink Annotations Tests

    public function testGetDocumentInkAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->getDocumentInkAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPageInkAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $response = $this->pdfApi->getPageInkAnnotations($name, $pageNumber, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetInkAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $responseAnnotations = $this->pdfApi->getDocumentInkAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->getInkAnnotation($name, $annotationId, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostPageInkAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $annotation = new Aspose\PDF\Model\InkAnnotation();
        $annotation->setName("Test Text");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text");
        $annotation->setSubject("Subj");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title");
        $annotation->setInkList([
            [
                new Aspose\PDF\Model\Point(['x' => 10, 'y' => 40]),
                new Aspose\PDF\Model\Point(['x' => 30, 'y' => 40]),
            ],
            [
                new Aspose\PDF\Model\Point(['x' => 10, 'y' => 20]),
                new Aspose\PDF\Model\Point(['x' => 20, 'y' => 20]),
                new Aspose\PDF\Model\Point(['x' => 30, 'y' => 20]),
            ]
        ]);
        $annotation->setModified('02/02/2018 00:00:00.000 AM');

        $response = $this->pdfApi->postPageInkAnnotations($name, $pageNumber, [$annotation], null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testPutInkAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $annotation = new Aspose\PDF\Model\InkAnnotation();
        $annotation->setName("Test Text Updated");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setRichText("Rich Text Updated");
        $annotation->setSubject("Subj Updated");
        $annotation->setZIndex(1);
        $annotation->setTitle("Title Updated");
        $annotation->setInkList([
            [
                new Aspose\PDF\Model\Point(['x' => 10, 'y' => 40]),
                new Aspose\PDF\Model\Point(['x' => 30, 'y' => 40]),
            ],
            [
                new Aspose\PDF\Model\Point(['x' => 10, 'y' => 20]),
                new Aspose\PDF\Model\Point(['x' => 20, 'y' => 20]),
                new Aspose\PDF\Model\Point(['x' => 30, 'y' => 20]),
            ]
        ]);
        $annotation->setModified('02/02/2018 00:00:00.000 AM');

        $responseAnnotations = $this->pdfApi->getDocumentInkAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->putInkAnnotation($name, $annotationId, $annotation, null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    //Popup Annotations Tests

    public function testGetDocumentPopupAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->getDocumentPopupAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetDocumentPopupAnnotationsByParent()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $parentId = 'GI5TAOZRGU3CYNZSGEWDCNZWFQ3TGOI';

        $response = $this->pdfApi->getDocumentPopupAnnotationsByParent($name, $parentId, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPagePopupAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $response = $this->pdfApi->getPagePopupAnnotations($name, $pageNumber, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetPopupAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $responseAnnotations = $this->pdfApi->getDocumentPopupAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->getPopupAnnotation($name, $annotationId, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostPopupAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $parentId = 'GI5TCMR3GE2TQLBSGM3CYMJYGUWDENRV';
        $pageNumber = 2;

        $annotation = new Aspose\PDF\Model\PopupAnnotation();
        $annotation->setName("Test Text");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setZIndex(1);
        $annotation->setModified('02/02/2018 00:00:00.000 AM');

        $response = $this->pdfApi->postPopupAnnotation($name, $parentId, $annotation, null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testPutPopupAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $annotation = new Aspose\PDF\Model\PopupAnnotation();
        $annotation->setName("Test Text Updated");
        $annotation->setRect(new Aspose\PDF\Model\RectanglePdf(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
        $annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
        $annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
        $annotation->setZIndex(1);
        $annotation->setModified('02/02/2018 00:00:00.000 AM');

        $responseAnnotations = $this->pdfApi->getDocumentPopupAnnotations($name, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

        $response = $this->pdfApi->putPopupAnnotation($name, $annotationId, $annotation, null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    //Append Tests

    public function testPostAppendDocumentUsingQueryParams()
    {
        $name = 'PdfWithImages2.pdf';
        $appendFileName = '4pages.pdf';

        $this->uploadFile($name);
        $this->uploadFile($appendFileName);

        $startPage = 2;
        $endPage = 4;

        $response = $this->pdfApi->postAppendDocument($name, null, $this->tempFolder . '/' . $appendFileName, $startPage, $endPage, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostAppendDocumentUsingBodyParams()
    {
        $name = 'PdfWithImages2.pdf';
        $appendFileName = '4pages.pdf';

        $this->uploadFile($name);
        $this->uploadFile($appendFileName);

        $appendDocument = new Aspose\PDF\Model\AppendDocument();
        $appendDocument->setDocument($this->tempFolder . '/' . $appendFileName);
        $appendDocument->setStartPage(2);
        $appendDocument->setEndPage(4);

        $response = $this->pdfApi->postAppendDocument($name, $appendDocument, null, null, null, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    //Attachments Tests

    public function testGetDocumentAttachmentByIndex()
    {
        $name = 'PdfWithEmbeddedFiles.pdf';
        $this->uploadFile($name);

        $attachmentIndex = 1;

        $response = $this->pdfApi->getDocumentAttachmentByIndex($name, $attachmentIndex, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetDocumentAttachments()
    {
        $name = 'PdfWithEmbeddedFiles.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->getDocumentAttachments($name, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetDownloadDocumentAttachmentByIndex()
    {
        $name = 'PdfWithEmbeddedFiles.pdf';
        $this->uploadFile($name);

        $attachmentIndex = 1;
    
        $response = $this->pdfApi->getDownloadDocumentAttachmentByIndex($name, $attachmentIndex, null, $this->tempFolder);
        $this->assertNotNull($response);
    }

    // Bookmarks Tests

    public function testGetDocumentBookmarks()
    {
        $name = 'PdfWithBookmarks.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->getDocumentBookmarks($name, null, null, $this->tempFolder);
        $this->assertNotNull($response);
    }

    // Convert Tests

    public function testGetPdfInStorageToDoc()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getPdfInStorageToDoc($name, null, null, null, null, null, null, null, null, $folder);
        $this->assertNotNull($response);        
    }
        
    public function testPutPdfInStorageToDoc()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);
        $folder = $this->tempFolder;
        $resFileName = "result.doc";
        
        $response = $this->pdfApi->putPdfInStorageToDoc($name, $this->tempFolder . '/' . $resFileName, null, null, null, null, null, null, null, null, $folder);
        $this->assertNotNull($response);
    }

    public function testPutPdfInRequestToDoc()
    {
        $name = '4pages.pdf';
        $file = realpath(__DIR__ . '/../../..') . '/testData/' . $name;
        $resFileName = "result.doc";

        $response = $this->pdfApi->putPdfInRequestToDoc($this->tempFolder . '/' . $resFileName, null, null, null, null, null, null, null, null, null, $file);
        $this->assertNotNull($response);
    }

    public function testGetPdfInStorageToPdfA()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);
        
        $type = Aspose\PDF\Model\PdfAType::PDFA1_A;
        $folder = $this->tempFolder;


        $response = $this->pdfApi->getPdfInStorageToPdfA($name, $type, $folder);
        $this->assertNotNull($response);        
    }
        
    public function testPutPdfInStorageToPdfA()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $type = Aspose\PDF\Model\PdfAType::PDFA1_A;
        $folder = $this->tempFolder;
        $resFileName = "result.pdf";
        
        $response = $this->pdfApi->putPdfInStorageToPdfA($name, $this->tempFolder . '/' . $resFileName, $type, $folder);
        $this->assertNotNull($response);
    }

    public function testPutPdfInRequestToPdfA()
    {
        $name = '4pages.pdf';
        $file = realpath(__DIR__ . '/../../..') . '/testData/' . $name;
        $type = Aspose\PDF\Model\PdfAType::PDFA1_A;
        $resFileName = "result.pdf";

        $response = $this->pdfApi->putPdfInRequestToPdfA($this->tempFolder . '/' . $resFileName, $type, null, $file);
        $this->assertNotNull($response);
    }

    public function testGetPdfInStorageToTiff()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);
        
        $folder = $this->tempFolder;


        $response = $this->pdfApi->getPdfInStorageToTiff($name, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, $folder);
        $this->assertNotNull($response);        
    }
        
    public function testPutPdfInStorageToTiff()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;
        $resFileName = "result.tiff";
        
        $response = $this->pdfApi->putPdfInStorageToTiff($name, $this->tempFolder . '/' . $resFileName, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, $folder);
        $this->assertNotNull($response);
    }

    public function testPutPdfInRequestToTiff()
    {
        $name = '4pages.pdf';
        $file = realpath(__DIR__ . '/../../..') . '/testData/' . $name;
        $resFileName = "result.tiff";

        $response = $this->pdfApi->putPdfInRequestToTiff($this->tempFolder . '/' . $resFileName, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, $file);
        $this->assertNotNull($response);
    }

    public function testGetPdfInStorageToSvg()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);
        
        $folder = $this->tempFolder;


        $response = $this->pdfApi->getPdfInStorageToSvg($name, null, $folder);
        $this->assertNotNull($response);        
    }
        
    public function testPutPdfInStorageToSvg()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;
        $resFileName = "result.svg";
        
        $response = $this->pdfApi->putPdfInStorageToSvg($name, $this->tempFolder . '/' . $resFileName, $folder);
        $this->assertNotNull($response);
    }

    public function testPutPdfInRequestToSvg()
    {
        $name = '4pages.pdf';
        $file = realpath(__DIR__ . '/../../..') . '/testData/' . $name;
        $resFileName = "result.svg";

        $response = $this->pdfApi->putPdfInRequestToSvg($this->tempFolder . '/' . $resFileName, null, $file);
        $this->assertNotNull($response);
    }

    public function testGetPdfInStorageToXps()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);
        
        $folder = $this->tempFolder;


        $response = $this->pdfApi->getPdfInStorageToXps($name, $folder);
        $this->assertNotNull($response);        
    }
        
    public function testPutPdfInStorageToXps()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;
        $resFileName = "result.xps";
        
        $response = $this->pdfApi->putPdfInStorageToXps($name, $this->tempFolder . '/' . $resFileName, $folder);
        $this->assertNotNull($response);
    }

    public function testPutPdfInRequestToXps()
    {
        $name = '4pages.pdf';
        $file = realpath(__DIR__ . '/../../..') . '/testData/' . $name;
        $resFileName = "result.xps";

        $response = $this->pdfApi->putPdfInRequestToXps($this->tempFolder . '/' . $resFileName, null, $file);
        $this->assertNotNull($response);
    }

    public function testGetPdfInStorageToXls()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);
        
        $folder = $this->tempFolder;


        $response = $this->pdfApi->getPdfInStorageToXls($name, null, null, null, null, $folder);
        $this->assertNotNull($response);        
    }
        
    public function testPutPdfInStorageToXls()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;
        $resFileName = "result.xls";
        
        $response = $this->pdfApi->putPdfInStorageToXls($name, $this->tempFolder . '/' . $resFileName, null, null, null, null, $folder);
        $this->assertNotNull($response);
    }

    public function testPutPdfInRequestToXls()
    {
        $name = '4pages.pdf';
        $file = realpath(__DIR__ . '/../../..') . '/testData/' . $name;
        $resFileName = "result.xls";

        $response = $this->pdfApi->putPdfInRequestToXls($this->tempFolder . '/' . $resFileName, null, null, null, null, null, $file);
        $this->assertNotNull($response);
    }


    public function testGetPdfInStorageToHtml()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);
        
        $folder = $this->tempFolder;


        $response = $this->pdfApi->getPdfInStorageToHtml($name, null, null, null, null, null,  null,  null, null, 
            null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, $folder);
        $this->assertNotNull($response);        
    }
        
    public function testPutPdfInStorageToHtml()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;
        $resFileName = "result.zip";
        
        $response = $this->pdfApi->putPdfInStorageToHtml(
            $name, 
            $this->tempFolder . '/' . $resFileName, 
            $additional_margin_width_in_points = null, 
            $compress_svg_graphics_if_any = null, 
            $convert_marked_content_to_layers = null, 
            $default_font_name = null, 
            $document_type = null, 
            $fixed_layout = null, 
            $image_resolution = null, 
            $minimal_line_width = null, 
            $prevent_glyphs_grouping = null, 
            $split_css_into_pages = null, 
            $split_into_pages = null, 
            $use_z_order = null, 
            $antialiasing_processing = null, 
            $css_class_names_prefix = null, 
            $explicit_list_of_saved_pages = null, 
            $font_encoding_strategy = null, 
            $font_saving_mode = null, 
            $html_markup_generation_mode = null, 
            $letters_positioning_method = null, 
            $pages_flow_type_depends_on_viewers_screen_size = null, 
            $parts_embedding_mode = null,
            $raster_images_saving_mode = null, 
            $remove_empty_areas_on_top_and_bottom = null, 
            $save_shadowed_texts_as_transparent_texts = null, 
            $save_transparent_texts = null, 
            $special_folder_for_all_images = null, 
            $special_folder_for_svg_images = null, 
            $try_save_text_underlining_and_strikeouting_in_css = null, 
            $folder);
        $this->assertNotNull($response);
    }

    public function testPutPdfInRequestToHtml()
    {
        $name = '4pages.pdf';
        $file = realpath(__DIR__ . '/../../..') . '/testData/' . $name;
        $resFileName = "result.zip";

        $response = $this->pdfApi->putPdfInRequestToHtml(
            $this->tempFolder . '/' . $resFileName, 
            $additional_margin_width_in_points = null, 
            $compress_svg_graphics_if_any = null, 
            $convert_marked_content_to_layers = null, 
            $default_font_name = null, 
            $document_type = null, 
            $fixed_layout = null, 
            $image_resolution = null, 
            $minimal_line_width = null, 
            $prevent_glyphs_grouping = null, 
            $split_css_into_pages = null, 
            $split_into_pages = null, 
            $use_z_order = null, 
            $antialiasing_processing = null, 
            $css_class_names_prefix = null, 
            $explicit_list_of_saved_pages = null, 
            $font_encoding_strategy = null, 
            $font_saving_mode = null, 
            $html_markup_generation_mode = null, 
            $letters_positioning_method = null, 
            $pages_flow_type_depends_on_viewers_screen_size = null, 
            $parts_embedding_mode = null,
            $raster_images_saving_mode = null, 
            $remove_empty_areas_on_top_and_bottom = null, 
            $save_shadowed_texts_as_transparent_texts = null, 
            $save_transparent_texts = null, 
            $special_folder_for_all_images = null, 
            $special_folder_for_svg_images = null, 
            $try_save_text_underlining_and_strikeouting_in_css = null,
            $storage = null, 
            $file);
        $this->assertNotNull($response);
    }

    public function testGetPdfInStorageToEpub()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);
        
        $folder = $this->tempFolder;


        $response = $this->pdfApi->getPdfInStorageToEpub($name, null, $folder);
        $this->assertNotNull($response);        
    }
        
    public function testPutPdfInStorageToEpub()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;
        $resFileName = "result.epub";
        
        $response = $this->pdfApi->putPdfInStorageToEpub($name, $this->tempFolder . '/' . $resFileName, null, $folder);
        $this->assertNotNull($response);
    }

    public function testPutPdfInRequestToEpub()
    {
        $name = '4pages.pdf';
        $file = realpath(__DIR__ . '/../../..') . '/testData/' . $name;
        $resFileName = "result.epub";

        $response = $this->pdfApi->putPdfInRequestToEpub($this->tempFolder . '/' . $resFileName, null, null, $file);
        $this->assertNotNull($response);
    }


    public function testGetPdfInStorageToPptx()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);
        
        $folder = $this->tempFolder;


        $response = $this->pdfApi->getPdfInStorageToPptx($name, null, null, $folder);
        $this->assertNotNull($response);        
    }
        
    public function testPutPdfInStorageToPptx()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;
        $resFileName = "result.pptx";
        
        $response = $this->pdfApi->putPdfInStorageToPptx($name, $this->tempFolder . '/' . $resFileName, null, null, $folder);
        $this->assertNotNull($response);
    }

    public function testPutPdfInRequestToPptx()
    {
        $name = '4pages.pdf';
        $file = realpath(__DIR__ . '/../../..') . '/testData/' . $name;
        $resFileName = "result.pptx";

        $response = $this->pdfApi->putPdfInRequestToPptx($this->tempFolder . '/' . $resFileName, null, null, null, $file);
        $this->assertNotNull($response);
    }


    public function testGetPdfInStorageToLaTeX()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);
        
        $folder = $this->tempFolder;


        $response = $this->pdfApi->getPdfInStorageToLaTeX($name, null, $folder);
        $this->assertNotNull($response);        
    }
        
    public function testPutPdfInStorageToLaTeX()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;
        $resFileName = "result.latex";
        
        $response = $this->pdfApi->putPdfInStorageToLaTeX($name, $this->tempFolder . '/' . $resFileName, null, $folder);
        $this->assertNotNull($response);
    }

    public function testPutPdfInRequestToLaTeX()
    {
        $name = '4pages.pdf';
        $file = realpath(__DIR__ . '/../../..') . '/testData/' . $name;
        $resFileName = "result.latex";

        $response = $this->pdfApi->putPdfInRequestToLaTeX($this->tempFolder . '/' . $resFileName, null, null, $file);
        $this->assertNotNull($response);
    }


    public function testGetPdfInStorageToMobiXml()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);
        
        $folder = $this->tempFolder;


        $response = $this->pdfApi->getPdfInStorageToMobiXml($name, $folder);
        $this->assertNotNull($response);        
    }
        

    public function testPutPdfInStorageToMobiXml()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;
        $resFileName = "result.mobi";
        
        $response = $this->pdfApi->putPdfInStorageToMobiXml($name, $this->tempFolder . '/' . $resFileName, $folder);
        $this->assertNotNull($response);
    }


    public function testPutPdfInRequestToMobiXml()
    {
        $name = '4pages.pdf';
        $file = realpath(__DIR__ . '/../../..') . '/testData/' . $name;
        $resFileName = "result.mobi";

        $response = $this->pdfApi->putPdfInRequestToMobiXml($this->tempFolder . '/' . $resFileName, null, $file);
        $this->assertNotNull($response);
    }


    public function testGetXfaPdfInStorageToAcroForm()
    {
        $name = 'PdfWithXfaForm.pdf';
        $this->uploadFile($name);
        
        $folder = $this->tempFolder;


        $response = $this->pdfApi->getXfaPdfInStorageToAcroForm($name, $folder);
        $this->assertNotNull($response);        
    }
        
    public function testPutXfaPdfInStorageToAcroForm()
    {
        $name = 'PdfWithXfaForm.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;
        $resFileName = "result.pdf";
        
        $response = $this->pdfApi->putXfaPdfInStorageToAcroForm($name, $this->tempFolder . '/' . $resFileName, $folder);
        $this->assertNotNull($response);
    }

    public function testPutXfaPdfInRequestToAcroForm()
    {
        $name = 'PdfWithXfaForm.pdf';
        $file = realpath(__DIR__ . '/../../..') . '/testData/' . $name;
        $resFileName = "result.pdf";

        $response = $this->pdfApi->putXfaPdfInRequestToAcroForm($this->tempFolder . '/' . $resFileName, null, $file);
        $this->assertNotNull($response);
    }


    public function testGetPdfInStorageToXml()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);
        
        $folder = $this->tempFolder;


        $response = $this->pdfApi->getPdfInStorageToXml($name, $folder);
        $this->assertNotNull($response);        
    }
        
    public function testPutPdfInStorageToXml()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;
        $resFileName = "result.xml";
        
        $response = $this->pdfApi->putPdfInStorageToXml($name, $this->tempFolder . '/' . $resFileName, $folder);
        $this->assertNotNull($response);
    }

    public function testPutPdfInRequestToXml()
    {
        $name = '4pages.pdf';
        $file = realpath(__DIR__ . '/../../..') . '/testData/' . $name;
        $resFileName = "result.xml";

        $response = $this->pdfApi->putPdfInRequestToXml($this->tempFolder . '/' . $resFileName, null, $file);
        $this->assertNotNull($response);
    }

    //Convert to PDF Tests

    public function testGetEpubInStorageToPdf()
    {
        $name = '4pages.epub';
        $this->uploadFile($name);

        $src_path = $this->tempFolder . '/' . $name;

        $response = $this->pdfApi->getEpubInStorageToPdf($src_path);
        $this->assertGreaterThan(0, $response->getSize());
    }

    public function testPutEpubInStorageToPdf()
    {
        $name = '4pages.epub';
        $this->uploadFile($name);

        $src_path = $this->tempFolder . '/' . $name;
        $resultName = "fromEpub.pdf";

        $response = $this->pdfApi->putEpubInStorageToPdf($resultName, $src_path, null, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }



    public function testGetWebInStorageToPdf()
    {
        $sourceUrl = "http://google.com";

        $response = $this->pdfApi->getWebInStorageToPdf($sourceUrl);
        $this->assertGreaterThan(0, $response->getSize());
    }

    public function testPutWebInStorageToPdf()
    {
        $sourceUrl = "http://google.com";
        $resultName = "fromWeb.pdf";

        $response = $this->pdfApi->putWebInStorageToPdf( $resultName,  $sourceUrl, $height = null, 
                $width = null, $is_landscape = null, $margin_left = null, 
                $margin_bottom = null, $margin_right = null, $margin_top = null, 
                $dst_folder = $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testGetLaTeXInStorageToPdf()
    {
        $name = "TexExample.tex";
        $this->uploadFile($name);

        $src_path = $this->tempFolder . '/' . $name;

        $response = $this->pdfApi->getLaTeXInStorageToPdf($src_path);
        $this->assertGreaterThan(0, $response->getSize());
    }

    public function testPutLaTeXInStorageToPdf()
    {
        $name = "TexExample.tex";
        $this->uploadFile($name);

        $src_path = $this->tempFolder . '/' . $name;
        $resultName = "fromTex.pdf";

        $response = $this->pdfApi->putLaTeXInStorageToPdf($resultName, $src_path, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testGetMhtInStorageToPdf()
    {
        $name = "MhtExample.mht";
        $this->uploadFile($name);

        $src_path = $this->tempFolder . '/' . $name;

        $response = $this->pdfApi->getMhtInStorageToPdf($src_path);
        $this->assertGreaterThan(0, $response->getSize());
    }

    public function testPutMhtInStorageToPdf()
    {
        $name = "MhtExample.mht";
        $this->uploadFile($name);

        $src_path = $this->tempFolder . '/' . $name;
        $resultName = "fromMht.pdf";

        $response = $this->pdfApi->putMhtInStorageToPdf($resultName, $src_path, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testGetHtmlInStorageToPdf()
    {
        $name = "HtmlWithImage.zip";
        $this->uploadFile($name);
        $html_file_name = "HtmlWithImage.html";
        $height = 650;
        $width = 250;
        $src_path = $this->tempFolder . '/' . $name;

        $response = $this->pdfApi->getHtmlInStorageToPdf($src_path, $html_file_name, $height, $width);
        $this->assertGreaterThan(0, $response->getSize());
    }

    public function testPutHtmlInStorageToPdf()
    {
        $name = "HtmlWithImage.zip";
        $this->uploadFile($name);
        $html_file_name = "HtmlWithImage.html";
        $height = 650;
        $width = 250;
        $src_path = $this->tempFolder . '/' . $name;
        $resultName = "fromHtml.pdf";

        $response = $this->pdfApi->putHtmlInStorageToPdf($name, $src_path, $html_file_name, 
            $height, $width, $is_landscape = null, $margin_left = null, 
            $margin_bottom = null, $margin_right = null, $margin_top = null, 
            $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testGetXslFoInStorageToPdf()
    {
        $name = "XslfoExample.xslfo";
        $this->uploadFile($name);

        $src_path = $this->tempFolder . '/' . $name;

        $response = $this->pdfApi->getXslFoInStorageToPdf($src_path);
        $this->assertGreaterThan(0, $response->getSize());
    }

    public function testPutXslFoInStorageToPdf()
    {
        $name = "XslfoExample.xslfo";
        $this->uploadFile($name);

        $src_path = $this->tempFolder . '/' . $name;
        $resultName = "fromXlsFo.pdf";

        $response = $this->pdfApi->putXslFoInStorageToPdf($resultName, $src_path, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testGetXpsInStorageToPdf()
    {
        $name = "Simple.xps";
        $this->uploadFile($name);

        $src_path = $this->tempFolder . '/' . $name;

        $response = $this->pdfApi->getXpsInStorageToPdf($src_path);
        $this->assertGreaterThan(0, $response->getSize());
    }

    public function testPutXpsInStorageToPdf()
    {
        $name = "Simple.xps";
        $this->uploadFile($name);

        $src_path = $this->tempFolder . '/' . $name;
        $resultName = "fromXps.pdf";

        $response = $this->pdfApi->putXpsInStorageToPdf($resultName, $src_path, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }


    public function testGetSvgInStorageToPdf()
    {
        $name = "Simple.svg";
        $this->uploadFile($name);

        $src_path = $this->tempFolder . '/' . $name;

        $response = $this->pdfApi->getSvgInStorageToPdf($src_path);
        $this->assertGreaterThan(0, $response->getSize());
    }

    public function testPutSvgInStorageToPdf()
    {
        $name = "Simple.svg";
        $this->uploadFile($name);

        $src_path = $this->tempFolder . '/' . $name;
        $resultName = "fromSvg.pdf";

        $response = $this->pdfApi->putSvgInStorageToPdf($resultName, $src_path, $adjust_page_size = null, 
            $height = null, $width = null, $is_landscape = null, $margin_left = null, 
            $margin_bottom = null, $margin_right = null, $margin_top = null, $dst_folder = $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }


    public function testGetPclInStorageToPdf()
    {
        $name = "template.pcl";
        $this->uploadFile($name);

        $src_path = $this->tempFolder . '/' . $name;

        $response = $this->pdfApi->getPclInStorageToPdf($src_path);
        $this->assertGreaterThan(0, $response->getSize());
    }

    public function testPutPclInStorageToPdf()
    {
        $name = "template.pcl";
        $this->uploadFile($name);

        $src_path = $this->tempFolder . '/' . $name;
        $resultName = "fromPcl.pdf";

        $response = $this->pdfApi->putPclInStorageToPdf($resultName, $src_path, $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }


    public function testGetXmlInStorageToPdf()
    {
        $name = "template.xml";
        $this->uploadFile($name);

        $src_path = $this->tempFolder . '/' . $name;

        $response = $this->pdfApi->getXmlInStorageToPdf($src_path);
        $this->assertGreaterThan(0, $response->getSize());
    }

    public function testPutXmlInStorageToPdf()
    {
        $name = "template.xml";
        $this->uploadFile($name);

        $src_path = $this->tempFolder . '/' . $name;
        $resultName = "fromXml.pdf";

        $response = $this->pdfApi->putXmlInStorageToPdf($resultName, $src_path, $xsl_file_path = null, $dst_folder = $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testGetPsInStorageToPdf()
    {
        $name = "Typography.PS";
        $this->uploadFile($name);

        $src_path = $this->tempFolder . '/' . $name;

        $response = $this->pdfApi->getPsInStorageToPdf($src_path);
        $this->assertGreaterThan(0, $response->getSize());
    }

    public function testPutPsInStorageToPdf()
    {
        $name = "Typography.PS";
        $this->uploadFile($name);

        $src_path = $this->tempFolder . '/' . $name;
        $resultName = "fromPs.pdf";

        $response = $this->pdfApi->putPsInStorageToPdf($resultName, $src_path, $xsl_file_path = null, null, $dst_folder = $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testPutImageInStorageToPdf()
    {
        $dataFile1 = "33539.jpg";
        $this->uploadFile($dataFile1);
        
        $dataFile2 = "44781.jpg";
        $this->uploadFile($dataFile2);

        $resultName = "result.pdf";

        
        
        $imageTemplatesRequest = new Aspose\PDF\Model\ImageTemplatesRequest();
        $imageTemplatesRequest->setIsOcr(true);
        $imageTemplatesRequest->setOcrLangs("eng");
        $imageTemplatesRequest->setImagesList(
            [
                new Aspose\PDF\Model\ImageTemplate(['image_path' => "$this->tempFolder/$dataFile1", 'image_src_type' => Aspose\PDF\Model\ImageSrcType::COMMON]), 
                new Aspose\PDF\Model\ImageTemplate(['image_path' => "$this->tempFolder/$dataFile2", 'image_src_type' => Aspose\PDF\Model\ImageSrcType::COMMON])
            ]
        );

        $response = $this->pdfApi->putImageInStorageToPdf($resultName, $imageTemplatesRequest, $dst_folder = $this->tempFolder);
        $this->assertEquals(201, $response->getCode());
    }

    // Document Tests

    public function testGetDocument()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->getDocument($name, $storage = null, $folder);
        $this->assertNotNull($response);
    }

    public function testPostOptimizeDocument()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $optimizeOptions = new Aspose\PDF\Model\OptimizeOptions();
        $optimizeOptions->setAllowReusePageContent(false);
        $optimizeOptions->setCompressImages(true);
        $optimizeOptions->setImageQuality(100);
        $optimizeOptions->setLinkDuplcateStreams(true);
        $optimizeOptions->setRemoveUnusedObjects(true);
        $optimizeOptions->setRemoveUnusedStreams(true);
        $optimizeOptions->setUnembedFonts(true);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->postOptimizeDocument($name, $optimizeOptions, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testPostSplitDocument()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->postSplitDocument($name, $format = null, $from = null, $to = null, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testPutCreateEmptyDocument()
    {
        $name = 'empty.pdf';

        $folder = $this->tempFolder;

        $response = $this->pdfApi->putCreateDocument($name, $template_file = null, $data_file = null, $template_type = null, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    // Fields Tests

    public function testGetField()
    {
        $name = 'PdfWithAcroForm.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;
        $fieldName = 'textField';

        $response = $this->pdfApi->getField($name, $fieldName, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetFields()
    {
        $name = 'PdfWithAcroForm.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->getFields($name, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostCreateField()
    {
        $name = 'Hello_world.pdf';
        $this->uploadFile($name);

        $rect = new Aspose\PDF\Model\RectanglePdf();
        $rect->setLlx(50);
        $rect->setLly(200);
        $rect->setUrx(200);
        $rect->setUry(400);


        $field = new  Aspose\PDF\Model\Field();
        $field->setName('checkboxfield');
        $field->setValues(['1']);
        $field->setType('Boolean');
        $field->setRect($rect);

        $pageNumber = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->postCreateField($name, $pageNumber, $field, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testPutUpdateField()
    {
        $name = 'PdfWithAcroForm.pdf';
        $this->uploadFile($name);

        $fieldName = 'textField';

        $field = new Aspose\PDF\Model\Field();
        $field->setName($fieldName);
        $field->setValues(['Text field updated value.']);
        $field->setType(Aspose\PDF\Model\FieldType::TEXT);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->putUpdateField($name, $fieldName, $field, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testPutUpdateFields()
    {
        $name = 'PdfWithAcroForm.pdf';
        $this->uploadFile($name);

        $fieldName = 'textField';

        $field = new Aspose\PDF\Model\Field();
        $field->setName($fieldName);
        $field->setValues(['Text field updated value.']);
        $field->setType(Aspose\PDF\Model\FieldType::TEXT);

        $fields = new Aspose\PDF\Model\Fields();
        $fields->setList([$field]);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->putUpdateFields($name, $fields, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testDeleteField()
    {
        $name = 'PdfWithAcroForm.pdf';
        $this->uploadFile($name);

        $fieldName = 'textField';

        $folder = $this->tempFolder;

        $response = $this->pdfApi->deleteField($name, $fieldName, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }
    

    public function testPutFieldsFlatten()
    {
        $name = 'PdfWithAcroForm.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->putFieldsFlatten($name, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }


    // Images Tests

    public function testGetImage()
    {
        $name = 'PdfWithImages2.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $imageNumber = 1;
        $folder = $this->tempFolder;

        $responseImages = $this->pdfApi->getImages($name, $pageNumber, $storage = null, $folder);
        $this->assertEquals(200, $responseImages->getCode());
        $imageId = $responseImages->getImages()->getList()[0]->getId();

        $response = $this->pdfApi->getImage($name, $imageId, null, $folder);
        $this->assertNotNull($response);
    }

    public function testDeleteImage()
    {
        $name = 'PdfWithImages2.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $imageNumber = 1;
        $folder = $this->tempFolder;

        $responseImages = $this->pdfApi->getImages($name, $pageNumber, $storage = null, $folder);
        $this->assertEquals(200, $responseImages->getCode());
        $imageId = $responseImages->getImages()->getList()[0]->getId();

        $response = $this->pdfApi->deleteImage($name, $imageId, null, $folder);
        $this->assertNotNull($response);
    }

    public function testGetImages()
    {
        $name = 'PdfWithImages2.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getImages($name, $pageNumber, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPutReplaceImage()
    {
        $name = 'PdfWithImages2.pdf';
        $this->uploadFile($name);

        $imageFileName = 'Koala.jpg';
        $this->uploadFile($imageFileName);

        $pageNumber = 1;
        $imageNumber = 1;
        $folder = $this->tempFolder;
        $imageFile = $folder . '/' . $imageFileName;

        $responseImages = $this->pdfApi->getImages($name, $pageNumber, $storage = null, $folder);
        $this->assertEquals(200, $responseImages->getCode());
        $imageId = $responseImages->getImages()->getList()[0]->getId();

        $response = $this->pdfApi->putReplaceImage($name, $imageId, $imageFile, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testPostInsertImage()
    {
        $name = 'PdfWithImages2.pdf';
        $this->uploadFile($name);

        $imageFileName = 'Koala.jpg';
        $this->uploadFile($imageFileName);

        $pageNumber = 1;
        $imageNumber = 1;
        $folder = $this->tempFolder;
        $imageFile = $folder . '/' . $imageFileName;

        $response = $this->pdfApi->postInsertImage($name, $pageNumber, $llx = 10, $lly = 10, $urx = 100, $ury = 100, $imageFile, $storage = null, $folder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testPutImagesExtractAsJpeg()
    {
        $name = "PdfWithImages2.pdf";
        $this->uploadFile($name);

        $page_number = 1;
        $dest_folder = "$this->tempFolder/extract_jpg";

        $response = $this->pdfApi->putImagesExtractAsJpeg($name, $page_number, $width = null, $height = null, $storage = null, $folder = $this->tempFolder, $dest_folder);
        $this->assertEquals(200, $response->getCode());
    }

    
    public function testPutImagesExtractAsTiff()
    {
        $name = "PdfWithImages2.pdf";
        $this->uploadFile($name);

        $page_number = 1;
        $dest_folder = "$this->tempFolder/extract_tiff";

        $response = $this->pdfApi->putImagesExtractAsTiff($name, $page_number, $width = null, $height = null, $storage = null, $folder = $this->tempFolder, $dest_folder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testPutImagesExtractAsGif()
    {
        $name = "PdfWithImages2.pdf";
        $this->uploadFile($name);

        $page_number = 1;
        $dest_folder = "$this->tempFolder/extract_gif";

        $response = $this->pdfApi->putImagesExtractAsGif($name, $page_number, $width = null, $height = null, $storage = null, $folder = $this->tempFolder, $dest_folder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testPutImagesExtractAsPng()
    {
        $name = "PdfWithImages2.pdf";
        $this->uploadFile($name);

        $page_number = 1;
        $dest_folder = "$this->tempFolder/extract_png";

        $response = $this->pdfApi->putImagesExtractAsPng($name, $page_number, $width = null, $height = null, $storage = null, $folder = $this->tempFolder, $dest_folder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testPutImageExtractAsJpeg()
    {
        $name = "PdfWithImages2.pdf";
        $this->uploadFile($name);

        $pageNumber = 1;
        $destFolder = "$this->tempFolder/extract_jpg";

        $responseImages = $this->pdfApi->getImages($name, $pageNumber, $storage = null, $this->tempFolder);
        $this->assertEquals(200, $responseImages->getCode());
        $imageId = $responseImages->getImages()->getList()[0]->getId();

        $response = $this->pdfApi->putImageExtractAsJpeg($name, $imageId, $width = null, $height = null, $storage = null, $folder = $this->tempFolder, $destFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetImageExtractAsJpeg()
    {
        $name = "PdfWithImages2.pdf";
        $this->uploadFile($name);

        $pageNumber = 1;
        
        $responseImages = $this->pdfApi->getImages($name, $pageNumber, $storage = null, $this->tempFolder);
        $this->assertEquals(200, $responseImages->getCode());
        $imageId = $responseImages->getImages()->getList()[0]->getId();

        $response = $this->pdfApi->getImageExtractAsJpeg($name, $imageId, $width = null, $height = null, $storage = null, $folder = $this->tempFolder);
        $this->assertNotNull($response);
    }

    public function testPutImageExtractAsTiff()
    {
        $name = "PdfWithImages2.pdf";
        $this->uploadFile($name);

        $pageNumber = 1;
        $destFolder = "$this->tempFolder/extract_tiff";

        $responseImages = $this->pdfApi->getImages($name, $pageNumber, $storage = null, $this->tempFolder);
        $this->assertEquals(200, $responseImages->getCode());
        $imageId = $responseImages->getImages()->getList()[0]->getId();

        $response = $this->pdfApi->putImageExtractAsTiff($name, $imageId, $width = null, $height = null, $storage = null, $folder = $this->tempFolder, $destFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetImageExtractAsTiff()
    {
        $name = "PdfWithImages2.pdf";
        $this->uploadFile($name);

        $pageNumber = 1;
        
        $responseImages = $this->pdfApi->getImages($name, $pageNumber, $storage = null, $this->tempFolder);
        $this->assertEquals(200, $responseImages->getCode());
        $imageId = $responseImages->getImages()->getList()[0]->getId();

        $response = $this->pdfApi->getImageExtractAsTiff($name, $imageId, $width = null, $height = null, $storage = null, $folder = $this->tempFolder);
        $this->assertNotNull($response);
    }

    public function testPutImageExtractAsGif()
    {
        $name = "PdfWithImages2.pdf";
        $this->uploadFile($name);

        $pageNumber = 1;
        $destFolder = "$this->tempFolder/extract_gif";

        $responseImages = $this->pdfApi->getImages($name, $pageNumber, $storage = null, $this->tempFolder);
        $this->assertEquals(200, $responseImages->getCode());
        $imageId = $responseImages->getImages()->getList()[0]->getId();

        $response = $this->pdfApi->putImageExtractAsGif($name, $imageId, $width = null, $height = null, $storage = null, $folder = $this->tempFolder, $destFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetImageExtractAsGif()
    {
        $name = "PdfWithImages2.pdf";
        $this->uploadFile($name);

        $pageNumber = 1;

        $responseImages = $this->pdfApi->getImages($name, $pageNumber, $storage = null, $this->tempFolder);
        $this->assertEquals(200, $responseImages->getCode());
        $imageId = $responseImages->getImages()->getList()[0]->getId();

        $response = $this->pdfApi->getImageExtractAsGif($name, $imageId, $width = null, $height = null, $storage = null, $folder = $this->tempFolder);
        $this->assertNotNull($response);
    }

    public function testPutImageExtractAsPng()
    {
        $name = "PdfWithImages2.pdf";
        $this->uploadFile($name);

        $pageNumber = 1;
        $destFolder = "$this->tempFolder/extract_png";

        $responseImages = $this->pdfApi->getImages($name, $pageNumber, $storage = null, $this->tempFolder);
        $this->assertEquals(200, $responseImages->getCode());
        $imageId = $responseImages->getImages()->getList()[0]->getId();

        $response = $this->pdfApi->putImageExtractAsPng($name, $imageId, $width = null, $height = null, $storage = null, $folder = $this->tempFolder, $destFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetImageExtractAsPng()
    {
        $name = "PdfWithImages2.pdf";
        $this->uploadFile($name);

        $pageNumber = 1;

        $responseImages = $this->pdfApi->getImages($name, $pageNumber, $storage = null, $this->tempFolder);
        $this->assertEquals(200, $responseImages->getCode());
        $imageId = $responseImages->getImages()->getList()[0]->getId();

        $response = $this->pdfApi->getImageExtractAsPng($name, $imageId, $width = null, $height = null, $storage = null, $folder = $this->tempFolder);
        $this->assertNotNull($response);
    }

    // Links Tests

    public function testGetPageLinkAnnotation()
    {
        $name = 'PdfWithLinks.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $linkIndex = 1;
        $folder = $this->tempFolder;

        $responseAnnotations = $this->pdfApi->getPageLinkAnnotations($name, $pageNumber, $storage = null, $folder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $linkId = $responseAnnotations->getLinks()->getList()[0]->getId();

        $response = $this->pdfApi->getPageLinkAnnotation($name, $pageNumber, $linkId, null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testDeleteLinkAnnotation()
    {
        $name = 'PdfWithLinks.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $linkIndex = 1;
        $folder = $this->tempFolder;

        $responseAnnotations = $this->pdfApi->getPageLinkAnnotations($name, $pageNumber, $storage = null, $folder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $linkId = $responseAnnotations->getLinks()->getList()[0]->getId();

        $response = $this->pdfApi->deleteLinkAnnotation($name, $linkId, null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPageLinkAnnotations()
    {
        $name = 'PdfWithLinks.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getPageLinkAnnotations($name, $pageNumber, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testPostPageLinkAnnotations()
    {
        $name = 'PdfWithLinks.pdf';
        $this->uploadFile($name);

        $rect1 = new \Aspose\PDF\Model\RectanglePdf();
        $rect1->setLlx(100);
        $rect1->setLly(100);
        $rect1->setUrx(200);
        $rect1->setUry(200);

        $linkAnnotation1 = new \Aspose\PDF\Model\LinkAnnotation();
        $linkAnnotation1->setActionType(\Aspose\PDF\Model\LinkActionType::GO_TO_URI_ACTION);
        $linkAnnotation1->setAction("https://products.aspose.cloud/pdf");
        $linkAnnotation1->setRect($rect1);

        $rect2 = new \Aspose\PDF\Model\RectanglePdf();
        $rect2->setLlx(200);
        $rect2->setLly(200);
        $rect2->setUrx(300);
        $rect2->setUry(300);

        $linkAnnotation2 = new \Aspose\PDF\Model\LinkAnnotation();
        $linkAnnotation2->setActionType(\Aspose\PDF\Model\LinkActionType::GO_TO_URI_ACTION);
        $linkAnnotation2->setAction("https://products.aspose.cloud");
        $linkAnnotation2->setRect($rect2);

        $pageNumber = 1;
        $folder = $this->tempFolder;
        $links = [$linkAnnotation1, $linkAnnotation2];


        $response = $this->pdfApi->postPageLinkAnnotations($name, $pageNumber, $links, $storage = null, $folder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testPutLinkAnnotation()
    {
        $name = 'PdfWithLinks.pdf';
        $this->uploadFile($name);

        $rect1 = new \Aspose\PDF\Model\RectanglePdf();
        $rect1->setLlx(100);
        $rect1->setLly(100);
        $rect1->setUrx(200);
        $rect1->setUry(200);

        $linkAnnotation1 = new \Aspose\PDF\Model\LinkAnnotation();
        $linkAnnotation1->setActionType(\Aspose\PDF\Model\LinkActionType::GO_TO_URI_ACTION);
        $linkAnnotation1->setAction("https://products.aspose.cloud/pdf");
        $linkAnnotation1->setRect($rect1);

        $pageNumber = 1;
        $folder = $this->tempFolder;
       

        $responseAnnotations = $this->pdfApi->getPageLinkAnnotations($name, $pageNumber, $storage = null, $folder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $linkId = $responseAnnotations->getLinks()->getList()[0]->getId();

        $response = $this->pdfApi->putLinkAnnotation($name, $linkId, $linkAnnotation1, $storage = null, $folder);
        $this->assertEquals(201, $response->getCode());
    }

    public function testDeletePageLinkAnnotations()
    {
        $name = 'PdfWithLinks.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->deletePageLinkAnnotations($name, $pageNumber, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testDeleteDocumentLinkAnnotations()
    {
        $name = 'PdfWithLinks.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->deleteDocumentLinkAnnotations($name, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetLinkAnnotation()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $responseAnnotations = $this->pdfApi->getPageLinkAnnotations($name, $pageNumber, null, $this->tempFolder);
        $this->assertEquals(200, $responseAnnotations->getCode());
        $annotationId = $responseAnnotations->getLinks()->getList()[0]->getId();

        $response = $this->pdfApi->getLinkAnnotation($name, $annotationId, null, $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    // Merge Tests

    public function testPutMergeDocuments()
    {
        $nameList = ['4pages.pdf', 'PdfWithImages2.pdf', 'marketing.pdf'];
        foreach ($nameList as $name)
        {
            $this->uploadFile($name);
        }

        $resultName = 'MergingResult.pdf';

        $mergeDocuments = new Aspose\PDF\Model\MergeDocuments();

        $i = 0;
        foreach ($nameList as $name)
        {
            $nameList[$i] = $this->tempFolder . '/' . $name;
            $i++;
        }

        $mergeDocuments->setList($nameList);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->putMergeDocuments($resultName, $mergeDocuments, $storage = null, $folder);
        $this->assertNotNull($response);
    }

    // OCR Tests

    public function testPutSearchableDocument()
    {
        $name = 'rusdoc.pdf';
        $this->uploadFile($name);

        $lang = 'rus,eng';
        $folder = $this->tempFolder;

        $response = $this->pdfApi->putSearchableDocument($name, $storage = null, $folder, $lang);
        $this->assertEquals(200, $response->getCode());
    }

    public function testPutSearchableDocumentWithDefaultLang()
    {
        $name = 'rusdoc.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->putSearchableDocument($name, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    // Page Convert To Image Tests

    public function testGetPageConvertToTiff()
    {
        $name = "4pages.pdf";
        $page_number = 2;
        $response = $this->pdfApi->getPageConvertToTiff($name, $page_number, $width = null, $height = null, $folder = $this->tempFolder);
        $this->assertGreaterThan(0, $response->getSize());
    }

    public function testPutPageConvertToTiff()
    {
        $name = "4pages.pdf";
        $page_number = 2;
        $result_file = "page.tiff";
        $out_path = "$this->tempFolder/$result_file";
        $response = $this->pdfApi->putPageConvertToTiff($name, $page_number, $out_path, $width = null, $height = null, $folder = $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPageConvertToJpeg()
    {
        $name = "4pages.pdf";
        $page_number = 2;
        $response = $this->pdfApi->getPageConvertToJpeg($name, $page_number, $width = null, $height = null, $folder = $this->tempFolder);
        $this->assertGreaterThan(0, $response->getSize());
    }

    public function testPutPageConvertToJpeg()
    {
        $name = "4pages.pdf";
        $page_number = 2;
        $result_file = "page.jpeg";
        $out_path = "$this->tempFolder/$result_file";
        $response = $this->pdfApi->putPageConvertToJpeg($name, $page_number, $out_path, $width = null, $height = null, $folder = $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPageConvertToPng()
    {
        $name = "4pages.pdf";
        $page_number = 2;
        $response = $this->pdfApi->getPageConvertToPng($name, $page_number, $width = null, $height = null, $folder = $this->tempFolder);
        $this->assertGreaterThan(0, $response->getSize());
    }

    public function testPutPageConvertToPng()
    {
        $name = "4pages.pdf";
        $page_number = 2;
        $result_file = "page.png";
        $out_path = "$this->tempFolder/$result_file";
        $response = $this->pdfApi->putPageConvertToPng($name, $page_number, $out_path, $width = null, $height = null, $folder = $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPageConvertToEmf()
    {
        $name = "4pages.pdf";
        $page_number = 2;
        $response = $this->pdfApi->getPageConvertToEmf($name, $page_number, $width = null, $height = null, $folder = $this->tempFolder);
        $this->assertGreaterThan(0, $response->getSize());
    }

    public function testPutPageConvertToEmf()
    {
        $name = "4pages.pdf";
        $page_number = 2;
        $result_file = "page.emf";
        $out_path = "$this->tempFolder/$result_file";
        $response = $this->pdfApi->putPageConvertToEmf($name, $page_number, $out_path, $width = null, $height = null, $folder = $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPageConvertToBmp()
    {
        $name = "4pages.pdf";
        $page_number = 2;
        $response = $this->pdfApi->getPageConvertToBmp($name, $page_number, $width = null, $height = null, $folder = $this->tempFolder);
        $this->assertGreaterThan(0, $response->getSize());
    }

    public function testPutPageConvertToBmp()
    {
        $name = "4pages.pdf";
        $page_number = 2;
        $result_file = "page.bmp";
        $out_path = "$this->tempFolder/$result_file";
        $response = $this->pdfApi->putPageConvertToBmp($name, $page_number, $out_path, $width = null, $height = null, $folder = $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetPageConvertToGif()
    {
        $name = "4pages.pdf";
        $page_number = 2;
        $response = $this->pdfApi->getPageConvertToGif($name, $page_number, $width = null, $height = null, $folder = $this->tempFolder);
        $this->assertGreaterThan(0, $response->getSize());
    }

    public function testPutPageConvertToGif()
    {
        $name = "4pages.pdf";
        $page_number = 2;
        $result_file = "page.gif";
        $out_path = "$this->tempFolder/$result_file";
        $response = $this->pdfApi->putPageConvertToGif($name, $page_number, $out_path, $width = null, $height = null, $folder = $this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }

    // Pages Tests

    public function testDeletePage()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->deletePage($name, $pageNumber, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetPage()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $pageNumber = 3;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getPage($name, $pageNumber, null, $folder);
        $this->assertNotNull($response);
    }

    public function testGetPages()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->getPages($name, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetWordsPerPage()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->getWordsPerPage($name, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostMovePage()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;
        $pageNumber = 1;
        $newIndex = 1;

        $response = $this->pdfApi->postMovePage($name, $pageNumber, $newIndex, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPutAddNewPage()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->putAddNewPage($name, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPutPageAddStamp()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $stampFileName = 'Penguins.jpg';
        $this->uploadFile($stampFileName);

        $pageNumber = 1;
        $folder = $this->tempFolder;


        $stamp = new Aspose\PDF\Model\Stamp();
        $stamp->setType(Aspose\PDF\Model\StampType::IMAGE);
        $stamp->setFileName($folder . '/' . $stampFileName);
        $stamp->setBackground(true);
        $stamp->setWidth(200);
        $stamp->setHeight(200);
        $stamp->setXIndent(100);
        $stamp->setYIndent(100);

        $response = $this->pdfApi->putPageAddStamp($name, $pageNumber, $stamp, null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    // Privileges Tests

    public function testPutPrivileges()
    {
        $name = "4pages.pdf";
        $this->uploadFile($name);

        $documentPrivilege = new Aspose\PDF\Model\DocumentPrivilege();
        $documentPrivilege->setAllowCopy(false);
        $documentPrivilege->setAllowPrint(false);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->putPrivileges($name, $documentPrivilege, null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    // Properties Tests

    public function testDeleteProperties()
    {
        $name = 'PdfWithAcroForm.pdf';
        $this->uploadFile($name);

        $property1 = new Aspose\PDF\Model\DocumentProperty();
        $property1->setName('prop1');
        $property1->setValue('val1');

        $folder = $this->tempFolder;

        $property2 = new Aspose\PDF\Model\DocumentProperty();
        $property2->setName('prop2');
        $property2->setValue('val2');


        $this->pdfApi->putSetProperty($name, $property1->getName(), $property1, $storage = null, $folder);
        $this->pdfApi->putSetProperty($name, $property2->getName(), $property2, $storage = null, $folder);

        $response = $this->pdfApi->deleteProperties($name, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testDeleteProperty()
    {
        $name = 'PdfWithAcroForm.pdf';
        $this->uploadFile($name);

        $property1 = new Aspose\PDF\Model\DocumentProperty();
        $property1->setName('prop1');
        $property1->setValue('val1');

        $folder = $this->tempFolder;

        $this->pdfApi->putSetProperty($name, $property1->getName(), $property1, $storage = null, $folder);

        $response = $this->pdfApi->deleteProperty($name, $property1->getName(), $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetDocumentProperties()
    {
        $name = 'PdfWithAcroForm.pdf';
        $this->uploadFile($name);

        $property1 = new Aspose\PDF\Model\DocumentProperty();
        $property1->setName('prop1');
        $property1->setValue('val1');

        $folder = $this->tempFolder;

        $property2 = new Aspose\PDF\Model\DocumentProperty();
        $property2->setName('prop2');
        $property2->setValue('val2');

        $this->pdfApi->putSetProperty($name, $property1->getName(), $property1, $storage = null, $folder);
        $this->pdfApi->putSetProperty($name, $property2->getName(), $property2, $storage = null, $folder);

        $response = $this->pdfApi->getDocumentProperties($name, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetDocumentProperty()
    {
        $name = 'PdfWithAcroForm.pdf';
        $this->uploadFile($name);

        $property1 = new Aspose\PDF\Model\DocumentProperty();
        $property1->setName('prop1');
        $property1->setValue('val1');

        $folder = $this->tempFolder;

        $this->pdfApi->putSetProperty($name, $property1->getName(), $property1, $storage = null, $folder);

        $response = $this->pdfApi->getDocumentProperty($name, $property1->getName(), $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPutSetProperty()
    {
        $name = 'PdfWithAcroForm.pdf';
        $this->uploadFile($name);

        $property1 = new Aspose\PDF\Model\DocumentProperty();
        $property1->setName('prop1');
        $property1->setValue('val1');

        $folder = $this->tempFolder;

        $response = $this->pdfApi->putSetProperty($name, $property1->getName(), $property1, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    // Sign Tests

    public function testGetVerifySignature()
    {
        $name = 'BlankWithSignature.pdf';
        $this->uploadFile($name);

        $signatureFileName = 'test1234.pfx';
        $this->uploadFile($signatureFileName);

        $rectangle = new Aspose\PDF\Model\RectanglePdf();
        $rectangle->setLlx(100);
        $rectangle->setLly(100);
        $rectangle->setUrx(500);
        $rectangle->setUry(200);

        $folder = $this->tempFolder;

        $signature = new Aspose\PDF\Model\Signature();
        $signature->setAuthority('Sergey Smal');
        $signature->setContact('test@mail.ru');
        $signature->setDate('08/01/2012 12:15:00.000 PM');
        $signature->setFormFieldName('Signature1');
        $signature->setLocation('Ukraine');
        $signature->setPassword('test1234');
        $signature->setRectangle($rectangle);
        $signature->setSignaturePath($folder . '/' . $signatureFileName);
        $signature->setSignatureType(Aspose\PDF\Model\SignatureType::PKCS7);
        $signature->setVisible(true);

        $responseSign = $this->pdfApi->postSignDocument($name, $signature, $storage = null, $folder);
        $this->assertEquals(200, $responseSign->getCode());

        $response = $this->pdfApi->getVerifySignature($name, $signature->getFormFieldName(), $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testPostSignDocument()
    {
        $name = 'BlankWithSignature.pdf';
        $this->uploadFile($name);

        $signatureFileName = 'test1234.pfx';
        $this->uploadFile($signatureFileName);

        $rectangle = new Aspose\PDF\Model\RectanglePdf();
        $rectangle->setLlx(100);
        $rectangle->setLly(100);
        $rectangle->setUrx(500);
        $rectangle->setUry(200);

        $folder = $this->tempFolder;

        $signature = new Aspose\PDF\Model\Signature();
        $signature->setAuthority('Sergey Smal');
        $signature->setContact('test@mail.ru');
        $signature->setDate('08/01/2012 12:15:00.000 PM');
        $signature->setFormFieldName('Signature1');
        $signature->setLocation('Ukraine');
        $signature->setPassword('test1234');
        $signature->setRectangle($rectangle);
        $signature->setSignaturePath($folder . '/' . $signatureFileName);
        $signature->setSignatureType(Aspose\PDF\Model\SignatureType::PKCS7);
        $signature->setVisible(true);

        $response = $this->pdfApi->postSignDocument($name, $signature, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostSignPage()
    {
        $name = 'BlankWithSignature.pdf';
        $this->uploadFile($name);

        $signatureFileName = 'test1234.pfx';
        $this->uploadFile($signatureFileName);

        $pageNumber = 1;

        $rectangle = new Aspose\PDF\Model\RectanglePdf();
        $rectangle->setLlx(100);
        $rectangle->setLly(100);
        $rectangle->setUrx(500);
        $rectangle->setUry(200);

        $folder = $this->tempFolder;

        $signature = new Aspose\PDF\Model\Signature();
        $signature->setAuthority('Sergey Smal');
        $signature->setContact('test@mail.ru');
        $signature->setDate('08/01/2012 12:15:00.000 PM');
        $signature->setFormFieldName('Signature1');
        $signature->setLocation('Ukraine');
        $signature->setPassword('test1234');
        $signature->setRectangle($rectangle);
        $signature->setSignaturePath($folder . '/' . $signatureFileName);
        $signature->setSignatureType(Aspose\PDF\Model\SignatureType::PKCS7);
        $signature->setVisible(true);

        $response = $this->pdfApi->postSignPage($name, $pageNumber, $signature, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    // Text Replace Tests

    public function testPostDocumentTextReplace()
    {
        $name = "marketing.pdf";
        $this->uploadFile($name);

        $rect = new Aspose\PDF\Model\RectanglePdf();
        $rect->setLlx(100);
        $rect->setLly(100);
        $rect->setUrx(300);
        $rect->setUry(300);

        $textReplace = new Aspose\PDF\Model\TextReplace();
        $textReplace->setOldValue("market");
        $textReplace->setNewValue("m_a_r_k_e_t");
        $textReplace->setRect($rect);
        $textReplace->setRegex(false);
        
        $textReplaceList = new Aspose\PDF\Model\TextReplaceListRequest();
        $textReplaceList->setTextReplaces([$textReplace]);
        $textReplaceList->setStartIndex(0);
        $textReplaceList->setCountReplace(0);

        $folder = $this->tempFolder;

        $response  = $this->pdfApi->postDocumentTextReplace($name, $textReplaceList, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testPostPageTextReplace()
    {
        $name = "marketing.pdf";
        $this->uploadFile($name);
        $pageNumber = 1;

        $rect = new Aspose\PDF\Model\RectanglePdf();
        $rect->setLlx(100);
        $rect->setLly(100);
        $rect->setUrx(300);
        $rect->setUry(300);

        $textReplace = new Aspose\PDF\Model\TextReplace();
        $textReplace->setOldValue("market");
        $textReplace->setNewValue("m_a_r_k_e_t");
        $textReplace->setRect($rect);
        $textReplace->setRegex(false);

        $textReplaceList = new Aspose\PDF\Model\TextReplaceListRequest();
        $textReplaceList->setTextReplaces([$textReplace]);
        $textReplaceList->setStartIndex(0);
        $textReplaceList->setCountReplace(0);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->postPageTextReplace($name, $pageNumber, $textReplaceList, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    // Text Tests

    public function testGetText()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $x = 0;
        $y = 0;
        $width = 0;
        $height = 0;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getText($name, $x, $y, $width, $height, $format = null, $regex = null, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }


    public function testGetPageTextByTwoTextOnPage()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $x = 0;
        $y = 0;
        $width = 0;
        $height = 0;

        $format = ['First Page', 'Second Page'];
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getPageText($name, $pageNumber, $x, $y, $width, $height, $format, $regex = null, $storage = null, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    public function testPutAddText()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $folder = $this->tempFolder;

        $rectangle = new Aspose\PDF\Model\RectanglePdf();
        $rectangle->setLlx(100);
        $rectangle->setLly(100);
        $rectangle->setUrx(200);
        $rectangle->setUry(200);

        $foregroundColor = new Aspose\PDF\Model\Color();
        $foregroundColor->setA(0x00);
        $foregroundColor->setR(0x00);
        $foregroundColor->setG(0xFF);
        $foregroundColor->setB(0x00);

        $backgroundColor = new Aspose\PDF\Model\Color();
        $backgroundColor->setA(0x00);
        $backgroundColor->setR(0xFF);
        $backgroundColor->setG(0x00);
        $backgroundColor->setB(0x00);

        $textState = new Aspose\PDF\Model\TextState();
        $textState->setFont('Arial');
        $textState->setFontSize(10);
        $textState->setForegroundColor($foregroundColor);
        $textState->setBackgroundColor($backgroundColor);
        $textState->setFontStyle(Aspose\PDF\Model\FontStyles::BOLD);

        $segment = new Aspose\PDF\Model\Segment();
        $segment->setValue('segment 1');
        $segment->setTextState($textState);

        $textLine = new Aspose\PDF\Model\TextLine();
        $textLine->setHorizontalAlignment(Aspose\PDF\Model\TextHorizontalAlignment::RIGHT);
        $textLine->setSegments([$segment]);

        $paragraph = new Aspose\PDF\Model\Paragraph();
        $paragraph->setRectangle($rectangle);
        $paragraph->setLeftMargin(10);
        $paragraph->setRightMargin(10);
        $paragraph->setTopMargin(20);
        $paragraph->setBottomMargin(20);
        $paragraph->setHorizontalAlignment(Aspose\PDF\Model\TextHorizontalAlignment::FULL_JUSTIFY);
        $paragraph->setLineSpacing(Aspose\PDF\Model\LineSpacing::FONT_SIZE);
        $paragraph->setRotation(10);
        $paragraph->setSubsequentLinesIndent(20);
        $paragraph->setVerticalAlignment(Aspose\PDF\Model\VerticalAlignment::CENTER);
        $paragraph->setWrapMode(Aspose\PDF\Model\WrapMode::BY_WORDS);
        $paragraph->setLines([$textLine]);


        $response = $this->pdfApi->putAddText($name, $pageNumber, $paragraph, $folder);
        $this->assertEquals(200, $response->getCode());
    }

    // Upload/Download Tests
    
    public function testUploadFile()
    {
        $name = '4pages.pdf';
        $path = $this->tempFolder . '/' . $name;
        $file = realpath(__DIR__ . '/../../..') . '/testData/' . $name;
        $response = $this->pdfApi->putCreate($path, $file);
        $this->assertEquals(200, $response->getCode());
    }

    public function testGetDownload()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $path = $this->tempFolder . '/' . $name;

        $response = $this->pdfApi->getDownload($path);
        $this->assertNotNull($response);
    }

    public function testGetListFiles()
    {
        $response = $this->pdfApi->getListFiles($this->tempFolder);
        $this->assertEquals(200, $response->getCode());
    }
}
