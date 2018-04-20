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


use Aspose\PDF\Api\PdfApi;
use Aspose\PDF\Model\HttpStatusCode;
use Aspose\PDF\Configuration;

class PdfApiTest extends PHPUnit_Framework_TestCase
{

    protected $pdfApi;
    protected $tempFolder;
    protected $config;

    protected function setUp()
    {
        // Get App key and App SID from https://cloud.aspose.com
        $appSid = '';
	    $appKey = '';
        $host = 'http://api-dev.aspose.cloud/v1.1';

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

    public function testGetPageAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $this->uploadFile($name);

        $pageNumber = 2;

        $response = $this->pdfApi->getPageAnnotations($name, $pageNumber, null, $this->tempFolder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
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
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
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
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    //Attachments Tests

    public function testGetDocumentAttachmentByIndex()
    {
        $name = 'PdfWithEmbeddedFiles.pdf';
        $this->uploadFile($name);

        $attachmentIndex = 1;

        $response = $this->pdfApi->getDocumentAttachmentByIndex($name, $attachmentIndex, null, $this->tempFolder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }

    public function testGetDocumentAttachments()
    {
        $name = 'PdfWithEmbeddedFiles.pdf';
        $this->uploadFile($name);

        $response = $this->pdfApi->getDocumentAttachments($name, null, $this->tempFolder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
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


    # Document Save As Tiff Tests

    public function testPutDocumentSaveAsTiffUsingQueryParams()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $resultFile = '4pages.tiff';
        $brightness = 0.6;
        $compression = Aspose\PDF\Model\CompressionType::CCITT4;
        $colorDepth = Aspose\PDF\Model\ColorDepth::FORMAT1BPP;
        $leftMargin = 0;
        $rightMargin = 0;
        $topMargin = 0;
        $bottomMargin = 0;
        $orientation = Aspose\PDF\Model\ShapeType::PORTRAIT;
        $skipBlankPages = true;
        $width = 1200;
        $height = 1600;
        $xResolution = 200;
        $yResolution = 200;
        $pageIndex = 2;
        $pageCount= 2;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->putDocumentSaveAsTiff($name, $export_options = null, $resultFile, $brightness, $compression,
            $colorDepth, $leftMargin, $rightMargin, $topMargin, $bottomMargin, $orientation, $skipBlankPages,
            $width, $height, $xResolution, $yResolution, $pageIndex, $pageCount, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }

    public function testPutDocumentSaveAsTiffUsingBodyParams()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $exportOptions = new  Aspose\PDF\Model\TiffExportOptions();
        $exportOptions->setResultFile('4pages.tiff');
        $exportOptions->setBrightness(0.6);
        $exportOptions->setCompression(Aspose\PDF\Model\CompressionType::CCITT4);
        $exportOptions->setColorDepth(Aspose\PDF\Model\ColorDepth::FORMAT1BPP);
        $exportOptions->setLeftMargin(0);
        $exportOptions->setRightMargin(0);
        $exportOptions->setTopMargin(0);
        $exportOptions->setBottomMargin(0);
        $exportOptions->setOrientation(Aspose\PDF\Model\ShapeType::PORTRAIT);
        $exportOptions->setSkipBlankPages(true);
        $exportOptions->setWidth(1200);
        $exportOptions->setHeight(1600);
        $exportOptions->setXResolution(200);
        $exportOptions->setYResolution(200);
        $exportOptions->setPageIndex(2);
        $exportOptions->setPageCount(2);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->putDocumentSaveAsTiff($name, $exportOptions, $result_file = null,
            $brightness = null, $compression = null, $color_depth = null, $left_margin = null, $right_margin = null,
            $top_margin = null, $bottom_margin = null, $orientation = null, $skip_blank_pages = null, $width = null,
            $height = null, $x_resolution = null, $y_resolution = null, $page_index = null, $page_count = null,
            $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    // Document Tests

    public function testGetDocument()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->getDocument($name, $format = null, $storage = null, $folder);
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
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }

    public function testPostSplitDocument()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->postSplitDocument($name, $format = null, $from = null, $to = null, $storage = null, $folder);
           $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testPutConvertDocument()
    {
        $url = 'http://pdf995.com/samples/pdf.pdf';
        $format = 'tiff';

        $response = $this->pdfApi->putConvertDocument($format, $url);
        $this->assertNotNull($response);
    }


    public function testPutCreateEmptyDocument()
    {
        $name = 'empty.pdf';

        $folder = $this->tempFolder;

        $response = $this->pdfApi->putCreateDocument($name, $template_file = null, $data_file = null, $template_type = null, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testPutCreateDocument()
    {
        $name = 'HtmlExample1.pdf';
        $templateName = 'HtmlExample1.html';
        $folder = $this->tempFolder;
        $templateFile = $folder . '/' . $templateName;

        $this->uploadFile($templateName);

        $templateType = 'html';

        $response = $this->pdfApi->putCreateDocument($name, $templateFile, $data_file = null, $templateType, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testPutCreateDocumentFromImages()
    {
        $image1 = '33539.jpg';
        $this->uploadFile($image1);

        $image2 = '44781.jpg';
        $this->uploadFile($image2);

        $resultDocName = 'pdffromimagesinquery.pdf';
        $folder = $this->tempFolder;

        $images = new Aspose\PDF\Model\ImagesListRequest();
        $images->setImagesList([$this->tempFolder . '/' . $image1, $this->tempFolder . '/' . $image2]);

        $ocr = false;

        $response = $this->pdfApi->putCreateDocumentFromImages($resultDocName, $images , 'false', 'eng', null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    // Fields Tests

    public function testGetField()
    {
        $name = 'PdfWithAcroForm.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;
        $fieldName = 'textField';

        $response = $this->pdfApi->getField($name, $fieldName, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testGetFields()
    {
        $name = 'PdfWithAcroForm.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->getFields($name, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testPostCreateField()
    {
        $name = 'Hello_world.pdf';
        $this->uploadFile($name);

        $rect = new Aspose\PDF\Model\Rectangle();
        $rect->setX(50);
        $rect->setY(200);
        $rect->setWidth(150);
        $rect->setHeight(200);


        $field = new  Aspose\PDF\Model\Field();
        $field->setName('checkboxfield');
        $field->setValues(['1']);
        $field->setType('Boolean');
        $field->setRect($rect);

        $pageNumber = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->postCreateField($name, $pageNumber, $field, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
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
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }

    // Fragments And Segments Tests

    public function testGetFragment()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $fragmentNumber = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getFragment($name, $pageNumber, $fragmentNumber, $with_empty = null, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testGetFragmentTextFormat()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $fragmentNumber = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getFragmentTextFormat($name, $pageNumber, $fragmentNumber, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testGetFragments()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getFragments($name, $pageNumber, $with_empty = null, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testGetSegment()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $fragmentNumber = 1;
        $segmentNumber = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getSegment($name, $pageNumber, $fragmentNumber, $segmentNumber, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testGetSegmentTextFormat()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $fragmentNumber = 1;
        $segmentNumber = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getSegmentTextFormat($name, $pageNumber, $fragmentNumber, $segmentNumber, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testGetSegments()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $fragmentNumber = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getSegments($name, $pageNumber, $fragmentNumber, $with_empty = null, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    // Images Tests

    public function testGetImage()
    {
        $name = 'PdfWithImages2.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $imageNumber = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getImage($name, $pageNumber, $imageNumber, null, 0, 0, null, $folder);
        $this->assertNotNull($response);
    }


    public function testGetImages()
    {
        $name = 'PdfWithImages2.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getImages($name, $pageNumber, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testPostReplaceImage()
    {
        $name = 'PdfWithImages2.pdf';
        $this->uploadFile($name);

        $imageFileName = 'Koala.jpg';
        $this->uploadFile($imageFileName);

        $pageNumber = 1;
        $imageNumber = 1;
        $folder = $this->tempFolder;
        $imageFile = $folder . '/' . $imageFileName;

        $response = $this->pdfApi->postReplaceImage($name, $pageNumber, $imageNumber, $imageFile, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }

    public function testGetImageWithFormat()
    {
        $name = 'PdfWithImages2.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $imageNumber = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getImage($name, $pageNumber, $imageNumber, 'jpeg', 100, 100, null, $folder);
        $this->assertNotNull($response);
    }

    public function testPostReplaceImageFromRequest()
    {
        $name = 'PdfWithImages2.pdf';
        $this->uploadFile($name);

        $imageFileName = 'Koala.jpg';
        $file = realpath(__DIR__ . '/../../..') . '/testData/' . $imageFileName;

        $pageNumber = 1;
        $imageNumber = 1;
        $folder = $this->tempFolder;
        $imageFile = $folder . '/' . $imageFileName;

        $response = $this->pdfApi->postReplaceImage($name, $pageNumber, $imageNumber, null, null, $folder, $file);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }

    // Links Tests

    public function testGetPageLinkAnnotationByIndex()
    {
        $name = 'PdfWithLinks.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $linkIndex = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getPageLinkAnnotationByIndex($name, $pageNumber, $linkIndex, null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testGetPageLinkAnnotations()
    {
        $name = 'PdfWithLinks.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getPageLinkAnnotations($name, $pageNumber, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
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
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }



    // Pages Tests

    public function testDeletePage()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->deletePage($name, $pageNumber, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testGetPage()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $pageNumber = 3;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getPage($name, $pageNumber, null, 0, 0, null, $folder);
        $this->assertNotNull($response);
    }

    public function testGetPageWithFormat()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $pageNumber = 3;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getPage($name, $pageNumber, 'jpeg', 100, 100, null, $folder);
        $this->assertNotNull($response);
    }

    public function testGetPages()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->getPages($name, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testGetWordsPerPage()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->getWordsPerPage($name, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testPostMovePage()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;
        $pageNumber = 1;
        $newIndex = 1;

        $response = $this->pdfApi->postMovePage($name, $pageNumber, $newIndex, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testPutAddNewPage()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->putAddNewPage($name, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
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
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    // Paragraphs Tests

    public function testPutAddText()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $folder = $this->tempFolder;

        $rectangle = new Aspose\PDF\Model\Rectangle();
        $rectangle->setX(100);
        $rectangle->setY(100);
        $rectangle->setWidth(200);
        $rectangle->setHeight(200);

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
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
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
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
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
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
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
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
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
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
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
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }



    // Sign Tests

    public function testPostSignDocument()
    {
        $name = 'BlankWithSignature.pdf';
        $this->uploadFile($name);

        $signatureFileName = 'test1234.pfx';
        $this->uploadFile($signatureFileName);

        $rectangle = new Aspose\PDF\Model\Rectangle();
        $rectangle->setX(100);
        $rectangle->setY(100);
        $rectangle->setWidth(400);
        $rectangle->setHeight(100);

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
        $signature->setSignatureType(Aspose\PDF\Model\SignatureType::PKCS_7);
        $signature->setVisible(true);

        $response = $this->pdfApi->postSignDocument($name, $signature, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testPostSignPage()
    {
        $name = 'BlankWithSignature.pdf';
        $this->uploadFile($name);

        $signatureFileName = 'test1234.pfx';
        $this->uploadFile($signatureFileName);

        $pageNumber = 1;

        $rectangle = new Aspose\PDF\Model\Rectangle();
        $rectangle->setX(100);
        $rectangle->setY(100);
        $rectangle->setWidth(400);
        $rectangle->setHeight(100);

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
        $signature->setSignatureType(Aspose\PDF\Model\SignatureType::PKCS_7);
        $signature->setVisible(true);

        $response = $this->pdfApi->postSignPage($name, $pageNumber, $signature, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    // Text Items Tests

    public function testGetPageTextItems()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;
        $folder = $this->tempFolder;

        $response = $this->pdfApi->getPageTextItems($name, $pageNumber, $with_empty = null, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }

    public function testGetTextItems()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->getTextItems($name, $with_empty = null, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    // Text Replace Tests

    public function testPostDocumentReplaceText()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $textReplaceRequest = new Aspose\PDF\Model\TextReplaceRequest();
        $textReplaceRequest->setOldValue('Page');
        $textReplaceRequest->setNewValue('p_a_g_e');
        $textReplaceRequest->setRegex(false);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->postDocumentReplaceText($name, $textReplaceRequest, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testPostDocumentReplaceTextList()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $textReplaceRequest1 = new Aspose\PDF\Model\TextReplaceRequest();
        $textReplaceRequest1->setOldValue('First');
        $textReplaceRequest1->setNewValue('1');
        $textReplaceRequest1->setRegex(false);

        $textReplaceRequest2 = new Aspose\PDF\Model\TextReplaceRequest();
        $textReplaceRequest2->setOldValue('Page');
        $textReplaceRequest2->setNewValue('p_a_g_e');
        $textReplaceRequest2->setRegex(false);

        $textReplaceListRequest = new Aspose\PDF\Model\TextReplaceListRequest();
        $textReplaceListRequest->setTextReplaces([$textReplaceRequest1, $textReplaceRequest2]);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->postDocumentReplaceTextList($name, $textReplaceListRequest, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testPostPageReplaceText()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;

        $textReplaceRequest = new Aspose\PDF\Model\TextReplaceRequest();
        $textReplaceRequest->setOldValue('Page');
        $textReplaceRequest->setNewValue('p_a_g_e');
        $textReplaceRequest->setRegex(false);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->postPageReplaceText($name, $pageNumber, $textReplaceRequest, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testPostPageReplaceTextList()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $pageNumber = 1;

        $textReplaceRequest1 = new Aspose\PDF\Model\TextReplaceRequest();
        $textReplaceRequest1->setOldValue('First');
        $textReplaceRequest1->setNewValue('1');
        $textReplaceRequest1->setRegex(false);

        $textReplaceRequest2 = new Aspose\PDF\Model\TextReplaceRequest();
        $textReplaceRequest2->setOldValue('Page');
        $textReplaceRequest2->setNewValue('p_a_g_e');
        $textReplaceRequest2->setRegex(false);

        $textReplaceListRequest = new Aspose\PDF\Model\TextReplaceListRequest();
        $textReplaceListRequest->setTextReplaces([$textReplaceRequest1, $textReplaceRequest2]);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->postPageReplaceTextList($name, $pageNumber, $textReplaceListRequest, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    // OCR Tests

    public function testPutSearchableDocument()
    {
        $name = 'rusdoc.pdf';
        $this->uploadFile($name);

        $lang = 'rus,eng';
        $folder = $this->tempFolder;

        $response = $this->pdfApi->putSearchableDocument($name, $storage = null, $folder, $lang);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }

    public function testPutSearchableDocumentWithDefaultLang()
    {
        $name = 'rusdoc.pdf';
        $this->uploadFile($name);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->putSearchableDocument($name, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
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
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
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
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    // Text Replace Tests

    public function testPostDocumentTextReplaceWholeDocByRect()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $rect = new Aspose\PDF\Model\Rectangle();
        $rect->setX(100);
        $rect->setY(700);
        $rect->setWidth(300);
        $rect->setHeight(300);

        $textReplace = new Aspose\PDF\Model\TextReplace();
        $textReplace->setOldValue('Page');
        $textReplace->setNewValue('p_a_g_e');
        $textReplace->setRect($rect);

        $textReplaceList = new Aspose\PDF\Model\TextReplaceListRequest();
        $textReplaceList->setTextReplaces([$textReplace]);
        $textReplaceList->setStartIndex(0);
        $textReplaceList->setCountReplace(0);

        $folder = $this->tempFolder;

        $response  = $this->pdfApi->postDocumentTextReplace($name, $textReplaceList, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }


    public function testPostPageTextReplaceByRect()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);
        $pageNumber = 1;

        $rect = new Aspose\PDF\Model\Rectangle();
        $rect->setX(100);
        $rect->setY(700);
        $rect->setWidth(300);
        $rect->setHeight(300);

        $textReplace = new Aspose\PDF\Model\TextReplace();
        $textReplace->setOldValue('Page');
        $textReplace->setNewValue('p_a_g_e');
        $textReplace->setRect($rect);

        $textReplaceList = new Aspose\PDF\Model\TextReplaceListRequest();
        $textReplaceList->setTextReplaces([$textReplace]);
        $textReplaceList->setStartIndex(0);
        $textReplaceList->setCountReplace(0);

        $folder = $this->tempFolder;

        $response = $this->pdfApi->postPageTextReplace($name, $pageNumber, $textReplaceList, $storage = null, $folder);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
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

        $response = $this->pdfApi->putPdfInRequestToDoc($this->tempFolder . '/' . $resFileName, null, null, null, null, null, null, null, null, $file);
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

        $response = $this->pdfApi->putPdfInRequestToPdfA($this->tempFolder . '/' . $resFileName, $type, $file);
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

        $response = $this->pdfApi->putPdfInRequestToTiff($this->tempFolder . '/' . $resFileName, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, $file);
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
        
        $response = $this->pdfApi->putPdfInStorageToSvg($name, $this->tempFolder . '/' . $resFileName, null, $folder);
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

        $response = $this->pdfApi->putPdfInRequestToXps($this->tempFolder . '/' . $resFileName, $file);
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

        $response = $this->pdfApi->putPdfInRequestToXls($this->tempFolder . '/' . $resFileName, null, null, null, null, $file);
        $this->assertNotNull($response);
    }

    // Upload/Download Tests
    public function testUploadFile()
    {
        $name = '4pages.pdf';
        $path = $this->tempFolder . '/' . $name;
        $file = realpath(__DIR__ . '/../../..') . '/testData/' . $name;
        $response = $this->pdfApi->putCreate($path, $file);
        $this->assertEquals(HttpStatusCode::OK, $response->getCode());
    }

    public function testGetDownload()
    {
        $name = '4pages.pdf';
        $this->uploadFile($name);

        $path = $this->tempFolder . '/' . $name;

        $response = $this->pdfApi->getDownload($path);
        $this->assertNotNull($response);
    }

}
