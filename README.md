# Aspose.PDF Cloud
- API version: 2.0
- Package version: 18.9.0

[Aspose.PDF Cloud](https://products.aspose.cloud/pdf) is a true REST API that enables you to perform a wide range of document processing operations including creation, manipulation, conversion and rendering of Pdf documents in the cloud.

Our Cloud SDKs are wrappers around REST API in various programming languages, allowing you to process documents in language of your choice quickly and easily, gaining all benefits of strong types and IDE highlights. This repository contains new generation SDKs for Aspose.PDF Cloud and examples.

These SDKs are now fully supported. If you have any questions, see any bugs or have enhancement request, feel free to reach out to us at [Free Support Forums](https://forum.aspose.cloud/c/pdf).

## Requirements

PHP 5.4.0 and later

## Unit Tests
Aspose PDF SDK includes a suite of unit tests within the "tests" subdirectory. These Unit Tests also serves as examples of how to use the Aspose PDF SDK.

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Usage
APIs of this SDK can be called as follows:

```php
<?php
use Aspose\PDF\Api\PdfApi;
use Aspose\PDF\Model\HttpStatusCode;
use Aspose\PDF\Configuration;

class PdfApiUsage
{

    protected $pdfApi;
    protected $tempFolder;
    protected $config;

    protected function setUp()
    {
        // Get App key and App SID from https://cloud.aspose.com
        $appSid = '';
	    $appKey = '';

        $this->tempFolder = 'TempPdfCloud';
        
        $this->config = new Configuration();
        $this->config->setAppKey($appKey);
        $this->config->setAppSid($appSid);

        $this->pdfApi = new PdfApi(null, $this->config);
    }

    public function testGetPageAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $pageNumber = 2;

        $response = $this->pdfApi->getPageAnnotations($name, $pageNumber, null, $this->tempFolder);
    }
}
```

## Licensing
All Aspose.PDF Cloud SDKs are licensed under [MIT License](LICENSE).

## Resources
+ [**Website**](https://www.aspose.cloud)
+ [**Product Home**](https://products.aspose.cloud/pdf/cloud)
+ [**Documentation**](https://docs.aspose.cloud/display/pdfcloud/Home)
+ [**Free Support Forum**](https://forum.aspose.cloud/c/pdf)
+ [**Paid Support Helpdesk**](https://helpdesk.aspose.cloud/)
+ [**Blog**](https://blog.aspose.cloud/category/aspose-products/aspose-pdf-product-family/)

## Documentation for API Endpoints

All URIs are relative to *https://api.aspose.cloud/v2.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PdfApi* | [**deleteAnnotation**](docs/Api/PdfApi.md#deleteannotation) | **DELETE** /pdf/\{name}/annotations/\{annotationId} | Delete document annotation by ID
*PdfApi* | [**deleteDocumentAnnotations**](docs/Api/PdfApi.md#deletedocumentannotations) | **DELETE** /pdf/\{name}/annotations | Delete all annotations from the document
*PdfApi* | [**deleteDocumentLinkAnnotations**](docs/Api/PdfApi.md#deletedocumentlinkannotations) | **DELETE** /pdf/\{name}/links | Delete all link annotations from the document
*PdfApi* | [**deleteField**](docs/Api/PdfApi.md#deletefield) | **DELETE** /pdf/\{name}/fields/\{fieldName} | Delete document field by name.
*PdfApi* | [**deleteImage**](docs/Api/PdfApi.md#deleteimage) | **DELETE** /pdf/\{name}/images/\{imageId} | Delete image from document page.
*PdfApi* | [**deleteLinkAnnotation**](docs/Api/PdfApi.md#deletelinkannotation) | **DELETE** /pdf/\{name}/links/\{linkId} | Delete document page link annotation by ID
*PdfApi* | [**deletePage**](docs/Api/PdfApi.md#deletepage) | **DELETE** /pdf/\{name}/pages/\{pageNumber} | Delete document page by its number.
*PdfApi* | [**deletePageAnnotations**](docs/Api/PdfApi.md#deletepageannotations) | **DELETE** /pdf/\{name}/pages/\{pageNumber}/annotations | Delete all annotations from the page
*PdfApi* | [**deletePageLinkAnnotations**](docs/Api/PdfApi.md#deletepagelinkannotations) | **DELETE** /pdf/\{name}/pages/\{pageNumber}/links | Delete all link annotations from the page
*PdfApi* | [**deleteProperties**](docs/Api/PdfApi.md#deleteproperties) | **DELETE** /pdf/\{name}/documentproperties | Delete custom document properties.
*PdfApi* | [**deleteProperty**](docs/Api/PdfApi.md#deleteproperty) | **DELETE** /pdf/\{name}/documentproperties/\{propertyName} | Delete document property.
*PdfApi* | [**getDocument**](docs/Api/PdfApi.md#getdocument) | **GET** /pdf/\{name} | Read common document info.
*PdfApi* | [**getDocumentAnnotations**](docs/Api/PdfApi.md#getdocumentannotations) | **GET** /pdf/\{name}/annotations | Read documant page annotations. Returns only FreeTextAnnotations, TextAnnotations, other annotations will implemented next releases.
*PdfApi* | [**getDocumentAttachmentByIndex**](docs/Api/PdfApi.md#getdocumentattachmentbyindex) | **GET** /pdf/\{name}/attachments/\{attachmentIndex} | Read document attachment info by its index.
*PdfApi* | [**getDocumentAttachments**](docs/Api/PdfApi.md#getdocumentattachments) | **GET** /pdf/\{name}/attachments | Read document attachments info.
*PdfApi* | [**getDocumentBookmarks**](docs/Api/PdfApi.md#getdocumentbookmarks) | **GET** /pdf/\{name}/bookmarks | Read document bookmark/bookmarks (including children).
*PdfApi* | [**getDocumentFreeTextAnnotations**](docs/Api/PdfApi.md#getdocumentfreetextannotations) | **GET** /pdf/\{name}/annotations/freetext | Read document free text annotations.
*PdfApi* | [**getDocumentProperties**](docs/Api/PdfApi.md#getdocumentproperties) | **GET** /pdf/\{name}/documentproperties | Read document properties.
*PdfApi* | [**getDocumentProperty**](docs/Api/PdfApi.md#getdocumentproperty) | **GET** /pdf/\{name}/documentproperties/\{propertyName} | Read document property by name.
*PdfApi* | [**getDocumentTextAnnotations**](docs/Api/PdfApi.md#getdocumenttextannotations) | **GET** /pdf/\{name}/annotations/text | Read document text annotations.
*PdfApi* | [**getDownload**](docs/Api/PdfApi.md#getdownload) | **GET** /storage/file | Download a specific file
*PdfApi* | [**getDownloadDocumentAttachmentByIndex**](docs/Api/PdfApi.md#getdownloaddocumentattachmentbyindex) | **GET** /pdf/\{name}/attachments/\{attachmentIndex}/download | Download document attachment content by its index.
*PdfApi* | [**getEpubInStorageToPdf**](docs/Api/PdfApi.md#getepubinstoragetopdf) | **GET** /pdf/create/epub | Convert EPUB file (located on storage) to PDF format and return resulting file in response.
*PdfApi* | [**getField**](docs/Api/PdfApi.md#getfield) | **GET** /pdf/\{name}/fields/\{fieldName} | Get document field by name.
*PdfApi* | [**getFields**](docs/Api/PdfApi.md#getfields) | **GET** /pdf/\{name}/fields | Get document fields.
*PdfApi* | [**getFreeTextAnnotation**](docs/Api/PdfApi.md#getfreetextannotation) | **GET** /pdf/\{name}/annotations/freetext/\{annotationId} | Read document page free text annotation by ID.
*PdfApi* | [**getHtmlInStorageToPdf**](docs/Api/PdfApi.md#gethtmlinstoragetopdf) | **GET** /pdf/create/html | Convert HTML file (located on storage) to PDF format and return resulting file in response.
*PdfApi* | [**getImage**](docs/Api/PdfApi.md#getimage) | **GET** /pdf/\{name}/images/\{imageId} | Read document image by ID.
*PdfApi* | [**getImageExtractAsGif**](docs/Api/PdfApi.md#getimageextractasgif) | **GET** /pdf/\{name}/images/\{imageId}/extract/gif | Extract document image in GIF format
*PdfApi* | [**getImageExtractAsJpeg**](docs/Api/PdfApi.md#getimageextractasjpeg) | **GET** /pdf/\{name}/images/\{imageId}/extract/jpeg | Extract document image in JPEG format
*PdfApi* | [**getImageExtractAsPng**](docs/Api/PdfApi.md#getimageextractaspng) | **GET** /pdf/\{name}/images/\{imageId}/extract/png | Extract document image in PNG format
*PdfApi* | [**getImageExtractAsTiff**](docs/Api/PdfApi.md#getimageextractastiff) | **GET** /pdf/\{name}/images/\{imageId}/extract/tiff | Extract document image in TIFF format
*PdfApi* | [**getImages**](docs/Api/PdfApi.md#getimages) | **GET** /pdf/\{name}/pages/\{pageNumber}/images | Read document images.
*PdfApi* | [**getLaTeXInStorageToPdf**](docs/Api/PdfApi.md#getlatexinstoragetopdf) | **GET** /pdf/create/latex | Convert LaTeX file (located on storage) to PDF format and return resulting file in response.
*PdfApi* | [**getLinkAnnotation**](docs/Api/PdfApi.md#getlinkannotation) | **GET** /pdf/\{name}/links/\{linkId} | Read document link annotation by ID.
*PdfApi* | [**getMhtInStorageToPdf**](docs/Api/PdfApi.md#getmhtinstoragetopdf) | **GET** /pdf/create/mht | Convert MHT file (located on storage) to PDF format and return resulting file in response.
*PdfApi* | [**getPage**](docs/Api/PdfApi.md#getpage) | **GET** /pdf/\{name}/pages/\{pageNumber} | Read document page info.
*PdfApi* | [**getPageAnnotations**](docs/Api/PdfApi.md#getpageannotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations | Read documant page annotations. Returns only FreeTextAnnotations, TextAnnotations, other annotations will implemented next releases.
*PdfApi* | [**getPageConvertToBmp**](docs/Api/PdfApi.md#getpageconverttobmp) | **GET** /pdf/\{name}/pages/\{pageNumber}/convert/bmp | Convert document page to Bmp image and return resulting file in response.
*PdfApi* | [**getPageConvertToEmf**](docs/Api/PdfApi.md#getpageconverttoemf) | **GET** /pdf/\{name}/pages/\{pageNumber}/convert/emf | Convert document page to Emf image and return resulting file in response.
*PdfApi* | [**getPageConvertToGif**](docs/Api/PdfApi.md#getpageconverttogif) | **GET** /pdf/\{name}/pages/\{pageNumber}/convert/gif | Convert document page to Gif image and return resulting file in response.
*PdfApi* | [**getPageConvertToJpeg**](docs/Api/PdfApi.md#getpageconverttojpeg) | **GET** /pdf/\{name}/pages/\{pageNumber}/convert/jpeg | Convert document page to Jpeg image and return resulting file in response.
*PdfApi* | [**getPageConvertToPng**](docs/Api/PdfApi.md#getpageconverttopng) | **GET** /pdf/\{name}/pages/\{pageNumber}/convert/png | Convert document page to Png image and return resulting file in response.
*PdfApi* | [**getPageConvertToTiff**](docs/Api/PdfApi.md#getpageconverttotiff) | **GET** /pdf/\{name}/pages/\{pageNumber}/convert/tiff | Convert document page to Tiff image  and return resulting file in response.
*PdfApi* | [**getPageFreeTextAnnotations**](docs/Api/PdfApi.md#getpagefreetextannotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/freetext | Read document page free text annotations.
*PdfApi* | [**getPageLinkAnnotation**](docs/Api/PdfApi.md#getpagelinkannotation) | **GET** /pdf/\{name}/pages/\{pageNumber}/links/\{linkId} | Read document page link annotation by ID.
*PdfApi* | [**getPageLinkAnnotations**](docs/Api/PdfApi.md#getpagelinkannotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/links | Read document page link annotations.
*PdfApi* | [**getPageText**](docs/Api/PdfApi.md#getpagetext) | **GET** /pdf/\{name}/pages/\{pageNumber}/text | Read page text items.
*PdfApi* | [**getPageTextAnnotations**](docs/Api/PdfApi.md#getpagetextannotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/text | Read document page text annotations.
*PdfApi* | [**getPages**](docs/Api/PdfApi.md#getpages) | **GET** /pdf/\{name}/pages | Read document pages info.
*PdfApi* | [**getPclInStorageToPdf**](docs/Api/PdfApi.md#getpclinstoragetopdf) | **GET** /pdf/create/pcl | Convert PCL file (located on storage) to PDF format and return resulting file in response.
*PdfApi* | [**getPdfInStorageToDoc**](docs/Api/PdfApi.md#getpdfinstoragetodoc) | **GET** /pdf/\{name}/convert/doc | Converts PDF document (located on storage) to DOC format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToEpub**](docs/Api/PdfApi.md#getpdfinstoragetoepub) | **GET** /pdf/\{name}/convert/epub | Converts PDF document (located on storage) to EPUB format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToHtml**](docs/Api/PdfApi.md#getpdfinstoragetohtml) | **GET** /pdf/\{name}/convert/html | Converts PDF document (located on storage) to Html format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToLaTeX**](docs/Api/PdfApi.md#getpdfinstoragetolatex) | **GET** /pdf/\{name}/convert/latex | Converts PDF document (located on storage) to LaTeX format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToMobiXml**](docs/Api/PdfApi.md#getpdfinstoragetomobixml) | **GET** /pdf/\{name}/convert/mobixml | Converts PDF document (located on storage) to MOBIXML format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToPdfA**](docs/Api/PdfApi.md#getpdfinstoragetopdfa) | **GET** /pdf/\{name}/convert/pdfa | Converts PDF document (located on storage) to PdfA format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToPptx**](docs/Api/PdfApi.md#getpdfinstoragetopptx) | **GET** /pdf/\{name}/convert/pptx | Converts PDF document (located on storage) to PPTX format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToSvg**](docs/Api/PdfApi.md#getpdfinstoragetosvg) | **GET** /pdf/\{name}/convert/svg | Converts PDF document (located on storage) to SVG format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToTiff**](docs/Api/PdfApi.md#getpdfinstoragetotiff) | **GET** /pdf/\{name}/convert/tiff | Converts PDF document (located on storage) to TIFF format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToXls**](docs/Api/PdfApi.md#getpdfinstoragetoxls) | **GET** /pdf/\{name}/convert/xls | Converts PDF document (located on storage) to XLS format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToXml**](docs/Api/PdfApi.md#getpdfinstoragetoxml) | **GET** /pdf/\{name}/convert/xml | Converts PDF document (located on storage) to XML format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToXps**](docs/Api/PdfApi.md#getpdfinstoragetoxps) | **GET** /pdf/\{name}/convert/xps | Converts PDF document (located on storage) to XPS format and returns resulting file in response content
*PdfApi* | [**getPsInStorageToPdf**](docs/Api/PdfApi.md#getpsinstoragetopdf) | **GET** /pdf/create/ps | Convert PS file (located on storage) to PDF format and return resulting file in response.
*PdfApi* | [**getSvgInStorageToPdf**](docs/Api/PdfApi.md#getsvginstoragetopdf) | **GET** /pdf/create/svg | Convert SVG file (located on storage) to PDF format and return resulting file in response.
*PdfApi* | [**getText**](docs/Api/PdfApi.md#gettext) | **GET** /pdf/\{name}/text | Read document text.
*PdfApi* | [**getTextAnnotation**](docs/Api/PdfApi.md#gettextannotation) | **GET** /pdf/\{name}/annotations/text/\{annotationId} | Read document page text annotation by ID.
*PdfApi* | [**getVerifySignature**](docs/Api/PdfApi.md#getverifysignature) | **GET** /pdf/\{name}/verifySignature | Verify signature document.
*PdfApi* | [**getWebInStorageToPdf**](docs/Api/PdfApi.md#getwebinstoragetopdf) | **GET** /pdf/create/web | Convert web page to PDF format and return resulting file in response.
*PdfApi* | [**getWordsPerPage**](docs/Api/PdfApi.md#getwordsperpage) | **GET** /pdf/\{name}/pages/wordCount | Get number of words per document page.
*PdfApi* | [**getXfaPdfInStorageToAcroForm**](docs/Api/PdfApi.md#getxfapdfinstoragetoacroform) | **GET** /pdf/\{name}/convert/xfatoacroform | Converts PDF document which contatins XFA form (located on storage) to PDF with AcroForm and returns resulting file response content
*PdfApi* | [**getXmlInStorageToPdf**](docs/Api/PdfApi.md#getxmlinstoragetopdf) | **GET** /pdf/create/xml | Convert XML file (located on storage) to PDF format and return resulting file in response.
*PdfApi* | [**getXpsInStorageToPdf**](docs/Api/PdfApi.md#getxpsinstoragetopdf) | **GET** /pdf/create/xps | Convert XPS file (located on storage) to PDF format and return resulting file in response.
*PdfApi* | [**getXslFoInStorageToPdf**](docs/Api/PdfApi.md#getxslfoinstoragetopdf) | **GET** /pdf/create/xslfo | Convert XslFo file (located on storage) to PDF format and return resulting file in response.
*PdfApi* | [**postAppendDocument**](docs/Api/PdfApi.md#postappenddocument) | **POST** /pdf/\{name}/appendDocument | Append document to existing one.
*PdfApi* | [**postCreateField**](docs/Api/PdfApi.md#postcreatefield) | **POST** /pdf/\{name}/fields | Create field.
*PdfApi* | [**postDocumentTextReplace**](docs/Api/PdfApi.md#postdocumenttextreplace) | **POST** /pdf/\{name}/text/replace | Document&#39;s replace text method.
*PdfApi* | [**postInsertImage**](docs/Api/PdfApi.md#postinsertimage) | **POST** /pdf/\{name}/pages/\{pageNumber}/images | Insert image to document page.
*PdfApi* | [**postMovePage**](docs/Api/PdfApi.md#postmovepage) | **POST** /pdf/\{name}/pages/\{pageNumber}/movePage | Move page to new position.
*PdfApi* | [**postOptimizeDocument**](docs/Api/PdfApi.md#postoptimizedocument) | **POST** /pdf/\{name}/optimize | Optimize document.
*PdfApi* | [**postPageFreeTextAnnotations**](docs/Api/PdfApi.md#postpagefreetextannotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/freetext | Add document page free text annotations.
*PdfApi* | [**postPageLinkAnnotations**](docs/Api/PdfApi.md#postpagelinkannotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/links | Add document page link annotations.
*PdfApi* | [**postPageTextAnnotations**](docs/Api/PdfApi.md#postpagetextannotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/text | Add document page text annotations.
*PdfApi* | [**postPageTextReplace**](docs/Api/PdfApi.md#postpagetextreplace) | **POST** /pdf/\{name}/pages/\{pageNumber}/text/replace | Page&#39;s replace text method.
*PdfApi* | [**postSignDocument**](docs/Api/PdfApi.md#postsigndocument) | **POST** /pdf/\{name}/sign | Sign document.
*PdfApi* | [**postSignPage**](docs/Api/PdfApi.md#postsignpage) | **POST** /pdf/\{name}/pages/\{pageNumber}/sign | Sign page.
*PdfApi* | [**postSplitDocument**](docs/Api/PdfApi.md#postsplitdocument) | **POST** /pdf/\{name}/split | Split document to parts.
*PdfApi* | [**putAddNewPage**](docs/Api/PdfApi.md#putaddnewpage) | **PUT** /pdf/\{name}/pages | Add new page to end of the document.
*PdfApi* | [**putAddText**](docs/Api/PdfApi.md#putaddtext) | **PUT** /pdf/\{name}/pages/\{pageNumber}/text | Add text to PDF document page.
*PdfApi* | [**putCreate**](docs/Api/PdfApi.md#putcreate) | **PUT** /storage/file | Upload a specific file
*PdfApi* | [**putCreateDocument**](docs/Api/PdfApi.md#putcreatedocument) | **PUT** /pdf/\{name} | Create empty document.
*PdfApi* | [**putEpubInStorageToPdf**](docs/Api/PdfApi.md#putepubinstoragetopdf) | **PUT** /pdf/\{name}/create/epub | Convert EPUB file (located on storage) to PDF format and upload resulting file to storage.
*PdfApi* | [**putFieldsFlatten**](docs/Api/PdfApi.md#putfieldsflatten) | **PUT** /pdf/\{name}/fields/flatten | Flatten form fields in document.
*PdfApi* | [**putFreeTextAnnotation**](docs/Api/PdfApi.md#putfreetextannotation) | **PUT** /pdf/\{name}/annotations/freetext/\{annotationId} | Replace document free text annotation
*PdfApi* | [**putHtmlInStorageToPdf**](docs/Api/PdfApi.md#puthtmlinstoragetopdf) | **PUT** /pdf/\{name}/create/html | Convert HTML file (located on storage) to PDF format and upload resulting file to storage.
*PdfApi* | [**putImageExtractAsGif**](docs/Api/PdfApi.md#putimageextractasgif) | **PUT** /pdf/\{name}/images/\{imageId}/extract/gif | Extract document image in GIF format to folder
*PdfApi* | [**putImageExtractAsJpeg**](docs/Api/PdfApi.md#putimageextractasjpeg) | **PUT** /pdf/\{name}/images/\{imageId}/extract/jpeg | Extract document image in JPEG format to folder
*PdfApi* | [**putImageExtractAsPng**](docs/Api/PdfApi.md#putimageextractaspng) | **PUT** /pdf/\{name}/images/\{imageId}/extract/png | Extract document image in PNG format to folder
*PdfApi* | [**putImageExtractAsTiff**](docs/Api/PdfApi.md#putimageextractastiff) | **PUT** /pdf/\{name}/images/\{imageId}/extract/tiff | Extract document image in TIFF format to folder
*PdfApi* | [**putImageInStorageToPdf**](docs/Api/PdfApi.md#putimageinstoragetopdf) | **PUT** /pdf/\{name}/create/images | Convert image file (located on storage) to PDF format and upload resulting file to storage.
*PdfApi* | [**putImagesExtractAsGif**](docs/Api/PdfApi.md#putimagesextractasgif) | **PUT** /pdf/\{name}/pages/\{pageNumber}/images/extract/gif | Extract document images in GIF format to folder.
*PdfApi* | [**putImagesExtractAsJpeg**](docs/Api/PdfApi.md#putimagesextractasjpeg) | **PUT** /pdf/\{name}/pages/\{pageNumber}/images/extract/jpeg | Extract document images in JPEG format to folder.
*PdfApi* | [**putImagesExtractAsPng**](docs/Api/PdfApi.md#putimagesextractaspng) | **PUT** /pdf/\{name}/pages/\{pageNumber}/images/extract/png | Extract document images in PNG format to folder.
*PdfApi* | [**putImagesExtractAsTiff**](docs/Api/PdfApi.md#putimagesextractastiff) | **PUT** /pdf/\{name}/pages/\{pageNumber}/images/extract/tiff | Extract document images in TIFF format to folder.
*PdfApi* | [**putLaTeXInStorageToPdf**](docs/Api/PdfApi.md#putlatexinstoragetopdf) | **PUT** /pdf/\{name}/create/latex | Convert LaTeX file (located on storage) to PDF format and upload resulting file to storage.
*PdfApi* | [**putLinkAnnotation**](docs/Api/PdfApi.md#putlinkannotation) | **PUT** /pdf/\{name}/links/\{linkId} | Replace document page link annotations
*PdfApi* | [**putMergeDocuments**](docs/Api/PdfApi.md#putmergedocuments) | **PUT** /pdf/\{name}/merge | Merge a list of documents.
*PdfApi* | [**putMhtInStorageToPdf**](docs/Api/PdfApi.md#putmhtinstoragetopdf) | **PUT** /pdf/\{name}/create/mht | Convert MHT file (located on storage) to PDF format and upload resulting file to storage.
*PdfApi* | [**putPageAddStamp**](docs/Api/PdfApi.md#putpageaddstamp) | **PUT** /pdf/\{name}/pages/\{pageNumber}/stamp | Add page stamp.
*PdfApi* | [**putPageConvertToBmp**](docs/Api/PdfApi.md#putpageconverttobmp) | **PUT** /pdf/\{name}/pages/\{pageNumber}/convert/bmp | Convert document page to bmp image and upload resulting file to storage.
*PdfApi* | [**putPageConvertToEmf**](docs/Api/PdfApi.md#putpageconverttoemf) | **PUT** /pdf/\{name}/pages/\{pageNumber}/convert/emf | Convert document page to emf image and upload resulting file to storage.
*PdfApi* | [**putPageConvertToGif**](docs/Api/PdfApi.md#putpageconverttogif) | **PUT** /pdf/\{name}/pages/\{pageNumber}/convert/gif | Convert document page to gif image and upload resulting file to storage.
*PdfApi* | [**putPageConvertToJpeg**](docs/Api/PdfApi.md#putpageconverttojpeg) | **PUT** /pdf/\{name}/pages/\{pageNumber}/convert/jpeg | Convert document page to Jpeg image and upload resulting file to storage.
*PdfApi* | [**putPageConvertToPng**](docs/Api/PdfApi.md#putpageconverttopng) | **PUT** /pdf/\{name}/pages/\{pageNumber}/convert/png | Convert document page to png image and upload resulting file to storage.
*PdfApi* | [**putPageConvertToTiff**](docs/Api/PdfApi.md#putpageconverttotiff) | **PUT** /pdf/\{name}/pages/\{pageNumber}/convert/tiff | Convert document page to Tiff image and upload resulting file to storage.
*PdfApi* | [**putPclInStorageToPdf**](docs/Api/PdfApi.md#putpclinstoragetopdf) | **PUT** /pdf/\{name}/create/pcl | Convert PCL file (located on storage) to PDF format and upload resulting file to storage.
*PdfApi* | [**putPdfInRequestToDoc**](docs/Api/PdfApi.md#putpdfinrequesttodoc) | **PUT** /pdf/convert/doc | Converts PDF document (in request content) to DOC format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToEpub**](docs/Api/PdfApi.md#putpdfinrequesttoepub) | **PUT** /pdf/convert/epub | Converts PDF document (in request content) to EPUB format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToHtml**](docs/Api/PdfApi.md#putpdfinrequesttohtml) | **PUT** /pdf/convert/html | Converts PDF document (in request content) to Html format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToLaTeX**](docs/Api/PdfApi.md#putpdfinrequesttolatex) | **PUT** /pdf/convert/latex | Converts PDF document (in request content) to LaTeX format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToMobiXml**](docs/Api/PdfApi.md#putpdfinrequesttomobixml) | **PUT** /pdf/convert/mobixml | Converts PDF document (in request content) to MOBIXML format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToPdfA**](docs/Api/PdfApi.md#putpdfinrequesttopdfa) | **PUT** /pdf/convert/pdfa | Converts PDF document (in request content) to PdfA format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToPptx**](docs/Api/PdfApi.md#putpdfinrequesttopptx) | **PUT** /pdf/convert/pptx | Converts PDF document (in request content) to PPTX format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToSvg**](docs/Api/PdfApi.md#putpdfinrequesttosvg) | **PUT** /pdf/convert/svg | Converts PDF document (in request content) to SVG format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToTiff**](docs/Api/PdfApi.md#putpdfinrequesttotiff) | **PUT** /pdf/convert/tiff | Converts PDF document (in request content) to TIFF format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToXls**](docs/Api/PdfApi.md#putpdfinrequesttoxls) | **PUT** /pdf/convert/xls | Converts PDF document (in request content) to XLS format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToXml**](docs/Api/PdfApi.md#putpdfinrequesttoxml) | **PUT** /pdf/convert/xml | Converts PDF document (in request content) to XML format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToXps**](docs/Api/PdfApi.md#putpdfinrequesttoxps) | **PUT** /pdf/convert/xps | Converts PDF document (in request content) to XPS format and uploads resulting file to storage.
*PdfApi* | [**putPdfInStorageToDoc**](docs/Api/PdfApi.md#putpdfinstoragetodoc) | **PUT** /pdf/\{name}/convert/doc | Converts PDF document (located on storage) to DOC format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToEpub**](docs/Api/PdfApi.md#putpdfinstoragetoepub) | **PUT** /pdf/\{name}/convert/epub | Converts PDF document (located on storage) to EPUB format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToHtml**](docs/Api/PdfApi.md#putpdfinstoragetohtml) | **PUT** /pdf/\{name}/convert/html | Converts PDF document (located on storage) to Html format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToLaTeX**](docs/Api/PdfApi.md#putpdfinstoragetolatex) | **PUT** /pdf/\{name}/convert/latex | Converts PDF document (located on storage) to LaTeX format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToMobiXml**](docs/Api/PdfApi.md#putpdfinstoragetomobixml) | **PUT** /pdf/\{name}/convert/mobixml | Converts PDF document (located on storage) to MOBIXML format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToPdfA**](docs/Api/PdfApi.md#putpdfinstoragetopdfa) | **PUT** /pdf/\{name}/convert/pdfa | Converts PDF document (located on storage) to PdfA format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToPptx**](docs/Api/PdfApi.md#putpdfinstoragetopptx) | **PUT** /pdf/\{name}/convert/pptx | Converts PDF document (located on storage) to PPTX format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToSvg**](docs/Api/PdfApi.md#putpdfinstoragetosvg) | **PUT** /pdf/\{name}/convert/svg | Converts PDF document (located on storage) to SVG format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToTiff**](docs/Api/PdfApi.md#putpdfinstoragetotiff) | **PUT** /pdf/\{name}/convert/tiff | Converts PDF document (located on storage) to TIFF format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToXls**](docs/Api/PdfApi.md#putpdfinstoragetoxls) | **PUT** /pdf/\{name}/convert/xls | Converts PDF document (located on storage) to XLS format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToXml**](docs/Api/PdfApi.md#putpdfinstoragetoxml) | **PUT** /pdf/\{name}/convert/xml | Converts PDF document (located on storage) to XML format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToXps**](docs/Api/PdfApi.md#putpdfinstoragetoxps) | **PUT** /pdf/\{name}/convert/xps | Converts PDF document (located on storage) to XPS format and uploads resulting file to storage
*PdfApi* | [**putPrivileges**](docs/Api/PdfApi.md#putprivileges) | **PUT** /pdf/\{name}/privileges | Update privilege document.
*PdfApi* | [**putPsInStorageToPdf**](docs/Api/PdfApi.md#putpsinstoragetopdf) | **PUT** /pdf/\{name}/create/ps | Convert PS file (located on storage) to PDF format and upload resulting file to storage.
*PdfApi* | [**putReplaceImage**](docs/Api/PdfApi.md#putreplaceimage) | **PUT** /pdf/\{name}/images/\{imageId} | Replace document image.
*PdfApi* | [**putSearchableDocument**](docs/Api/PdfApi.md#putsearchabledocument) | **PUT** /pdf/\{name}/ocr | Create searchable PDF document. Generate OCR layer for images in input PDF document.
*PdfApi* | [**putSetProperty**](docs/Api/PdfApi.md#putsetproperty) | **PUT** /pdf/\{name}/documentproperties/\{propertyName} | Add/update document property.
*PdfApi* | [**putSvgInStorageToPdf**](docs/Api/PdfApi.md#putsvginstoragetopdf) | **PUT** /pdf/\{name}/create/svg | Convert SVG file (located on storage) to PDF format and upload resulting file to storage.
*PdfApi* | [**putTextAnnotation**](docs/Api/PdfApi.md#puttextannotation) | **PUT** /pdf/\{name}/annotations/text/\{annotationId} | Replace document text annotation
*PdfApi* | [**putUpdateField**](docs/Api/PdfApi.md#putupdatefield) | **PUT** /pdf/\{name}/fields/\{fieldName} | Update field.
*PdfApi* | [**putUpdateFields**](docs/Api/PdfApi.md#putupdatefields) | **PUT** /pdf/\{name}/fields | Update fields.
*PdfApi* | [**putWebInStorageToPdf**](docs/Api/PdfApi.md#putwebinstoragetopdf) | **PUT** /pdf/\{name}/create/web | Convert web page to PDF format and upload resulting file to storage.
*PdfApi* | [**putXfaPdfInRequestToAcroForm**](docs/Api/PdfApi.md#putxfapdfinrequesttoacroform) | **PUT** /pdf/convert/xfatoacroform | Converts PDF document which contatins XFA form (in request content) to PDF with AcroForm and uploads resulting file to storage.
*PdfApi* | [**putXfaPdfInStorageToAcroForm**](docs/Api/PdfApi.md#putxfapdfinstoragetoacroform) | **PUT** /pdf/\{name}/convert/xfatoacroform | Converts PDF document which contatins XFA form (located on storage) to PDF with AcroForm and uploads resulting file to storage
*PdfApi* | [**putXmlInStorageToPdf**](docs/Api/PdfApi.md#putxmlinstoragetopdf) | **PUT** /pdf/\{name}/create/xml | Convert XML file (located on storage) to PDF format and upload resulting file to storage.
*PdfApi* | [**putXpsInStorageToPdf**](docs/Api/PdfApi.md#putxpsinstoragetopdf) | **PUT** /pdf/\{name}/create/xps | Convert XPS file (located on storage) to PDF format and upload resulting file to storage.
*PdfApi* | [**putXslFoInStorageToPdf**](docs/Api/PdfApi.md#putxslfoinstoragetopdf) | **PUT** /pdf/\{name}/create/xslfo | Convert XslFo file (located on storage) to PDF format and upload resulting file to storage.


## Documentation For Models

 - [AnnotationFlags](docs/Model/AnnotationFlags.md)
 - [AnnotationState](docs/Model/AnnotationState.md)
 - [AnnotationType](docs/Model/AnnotationType.md)
 - [AntialiasingProcessingType](docs/Model/AntialiasingProcessingType.md)
 - [AppendDocument](docs/Model/AppendDocument.md)
 - [AsposeResponse](docs/Model/AsposeResponse.md)
 - [Color](docs/Model/Color.md)
 - [ColorDepth](docs/Model/ColorDepth.md)
 - [CompressionType](docs/Model/CompressionType.md)
 - [DocFormat](docs/Model/DocFormat.md)
 - [DocRecognitionMode](docs/Model/DocRecognitionMode.md)
 - [DocumentPrivilege](docs/Model/DocumentPrivilege.md)
 - [EpubRecognitionMode](docs/Model/EpubRecognitionMode.md)
 - [FieldType](docs/Model/FieldType.md)
 - [FontEncodingRules](docs/Model/FontEncodingRules.md)
 - [FontSavingModes](docs/Model/FontSavingModes.md)
 - [FontStyles](docs/Model/FontStyles.md)
 - [FreeTextIntent](docs/Model/FreeTextIntent.md)
 - [HorizontalAlignment](docs/Model/HorizontalAlignment.md)
 - [HtmlDocumentType](docs/Model/HtmlDocumentType.md)
 - [HtmlMarkupGenerationModes](docs/Model/HtmlMarkupGenerationModes.md)
 - [ImageSrcType](docs/Model/ImageSrcType.md)
 - [ImageTemplate](docs/Model/ImageTemplate.md)
 - [ImageTemplatesRequest](docs/Model/ImageTemplatesRequest.md)
 - [Justification](docs/Model/Justification.md)
 - [LettersPositioningMethods](docs/Model/LettersPositioningMethods.md)
 - [LineSpacing](docs/Model/LineSpacing.md)
 - [Link](docs/Model/Link.md)
 - [LinkActionType](docs/Model/LinkActionType.md)
 - [LinkElement](docs/Model/LinkElement.md)
 - [LinkHighlightingMode](docs/Model/LinkHighlightingMode.md)
 - [MarginInfo](docs/Model/MarginInfo.md)
 - [MergeDocuments](docs/Model/MergeDocuments.md)
 - [OptimizeOptions](docs/Model/OptimizeOptions.md)
 - [PageWordCount](docs/Model/PageWordCount.md)
 - [Paragraph](docs/Model/Paragraph.md)
 - [PartsEmbeddingModes](docs/Model/PartsEmbeddingModes.md)
 - [PdfAType](docs/Model/PdfAType.md)
 - [RasterImagesSavingModes](docs/Model/RasterImagesSavingModes.md)
 - [RectanglePdf](docs/Model/RectanglePdf.md)
 - [Rotation](docs/Model/Rotation.md)
 - [Segment](docs/Model/Segment.md)
 - [ShapeType](docs/Model/ShapeType.md)
 - [Signature](docs/Model/Signature.md)
 - [SignatureType](docs/Model/SignatureType.md)
 - [SplitResult](docs/Model/SplitResult.md)
 - [Stamp](docs/Model/Stamp.md)
 - [StampType](docs/Model/StampType.md)
 - [TextHorizontalAlignment](docs/Model/TextHorizontalAlignment.md)
 - [TextIcon](docs/Model/TextIcon.md)
 - [TextLine](docs/Model/TextLine.md)
 - [TextRect](docs/Model/TextRect.md)
 - [TextRects](docs/Model/TextRects.md)
 - [TextReplace](docs/Model/TextReplace.md)
 - [TextReplaceListRequest](docs/Model/TextReplaceListRequest.md)
 - [TextState](docs/Model/TextState.md)
 - [TextStyle](docs/Model/TextStyle.md)
 - [VerticalAlignment](docs/Model/VerticalAlignment.md)
 - [WordCount](docs/Model/WordCount.md)
 - [WrapMode](docs/Model/WrapMode.md)
 - [Annotation](docs/Model/Annotation.md)
 - [AnnotationsInfo](docs/Model/AnnotationsInfo.md)
 - [AnnotationsInfoResponse](docs/Model/AnnotationsInfoResponse.md)
 - [Attachment](docs/Model/Attachment.md)
 - [AttachmentResponse](docs/Model/AttachmentResponse.md)
 - [Attachments](docs/Model/Attachments.md)
 - [AttachmentsResponse](docs/Model/AttachmentsResponse.md)
 - [Document](docs/Model/Document.md)
 - [DocumentPageResponse](docs/Model/DocumentPageResponse.md)
 - [DocumentPagesResponse](docs/Model/DocumentPagesResponse.md)
 - [DocumentProperties](docs/Model/DocumentProperties.md)
 - [DocumentPropertiesResponse](docs/Model/DocumentPropertiesResponse.md)
 - [DocumentProperty](docs/Model/DocumentProperty.md)
 - [DocumentPropertyResponse](docs/Model/DocumentPropertyResponse.md)
 - [DocumentResponse](docs/Model/DocumentResponse.md)
 - [Field](docs/Model/Field.md)
 - [FieldResponse](docs/Model/FieldResponse.md)
 - [Fields](docs/Model/Fields.md)
 - [FieldsResponse](docs/Model/FieldsResponse.md)
 - [FreeTextAnnotationResponse](docs/Model/FreeTextAnnotationResponse.md)
 - [FreeTextAnnotations](docs/Model/FreeTextAnnotations.md)
 - [FreeTextAnnotationsResponse](docs/Model/FreeTextAnnotationsResponse.md)
 - [Image](docs/Model/Image.md)
 - [ImageResponse](docs/Model/ImageResponse.md)
 - [Images](docs/Model/Images.md)
 - [ImagesResponse](docs/Model/ImagesResponse.md)
 - [LinkAnnotation](docs/Model/LinkAnnotation.md)
 - [LinkAnnotationResponse](docs/Model/LinkAnnotationResponse.md)
 - [LinkAnnotations](docs/Model/LinkAnnotations.md)
 - [LinkAnnotationsResponse](docs/Model/LinkAnnotationsResponse.md)
 - [Page](docs/Model/Page.md)
 - [Pages](docs/Model/Pages.md)
 - [SignatureVerifyResponse](docs/Model/SignatureVerifyResponse.md)
 - [SplitResultDocument](docs/Model/SplitResultDocument.md)
 - [SplitResultResponse](docs/Model/SplitResultResponse.md)
 - [TextAnnotationResponse](docs/Model/TextAnnotationResponse.md)
 - [TextAnnotations](docs/Model/TextAnnotations.md)
 - [TextAnnotationsResponse](docs/Model/TextAnnotationsResponse.md)
 - [TextRectsResponse](docs/Model/TextRectsResponse.md)
 - [TextReplaceResponse](docs/Model/TextReplaceResponse.md)
 - [WordCountResponse](docs/Model/WordCountResponse.md)
 - [AnnotationInfo](docs/Model/AnnotationInfo.md)
 - [MarkupAnnotation](docs/Model/MarkupAnnotation.md)
 - [FreeTextAnnotation](docs/Model/FreeTextAnnotation.md)
 - [TextAnnotation](docs/Model/TextAnnotation.md)

