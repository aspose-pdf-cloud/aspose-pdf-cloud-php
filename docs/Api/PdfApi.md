# Aspose\PDF\PdfApi

All URIs are relative to *https://api.aspose.cloud/v2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAnnotation**](PdfApi.md#deleteannotation) | **DELETE** /pdf/\{name}/annotations/\{annotationId} | Delete document annotation by ID
[**deleteDocumentAnnotations**](PdfApi.md#deletedocumentannotations) | **DELETE** /pdf/\{name}/annotations | Delete all annotations from the document
[**deleteDocumentLinkAnnotations**](PdfApi.md#deletedocumentlinkannotations) | **DELETE** /pdf/\{name}/links | Delete all link annotations from the document
[**deleteField**](PdfApi.md#deletefield) | **DELETE** /pdf/\{name}/fields/\{fieldName} | Delete document field by name.
[**deleteImage**](PdfApi.md#deleteimage) | **DELETE** /pdf/\{name}/images/\{imageId} | Delete image from document page.
[**deleteLinkAnnotation**](PdfApi.md#deletelinkannotation) | **DELETE** /pdf/\{name}/links/\{linkId} | Delete document page link annotation by ID
[**deletePage**](PdfApi.md#deletepage) | **DELETE** /pdf/\{name}/pages/\{pageNumber} | Delete document page by its number.
[**deletePageAnnotations**](PdfApi.md#deletepageannotations) | **DELETE** /pdf/\{name}/pages/\{pageNumber}/annotations | Delete all annotations from the page
[**deletePageLinkAnnotations**](PdfApi.md#deletepagelinkannotations) | **DELETE** /pdf/\{name}/pages/\{pageNumber}/links | Delete all link annotations from the page
[**deleteProperties**](PdfApi.md#deleteproperties) | **DELETE** /pdf/\{name}/documentproperties | Delete custom document properties.
[**deleteProperty**](PdfApi.md#deleteproperty) | **DELETE** /pdf/\{name}/documentproperties/\{propertyName} | Delete document property.
[**getCircleAnnotation**](PdfApi.md#getcircleannotation) | **GET** /pdf/\{name}/annotations/circle/\{annotationId} | Read document page circle annotation by ID.
[**getDocument**](PdfApi.md#getdocument) | **GET** /pdf/\{name} | Read common document info.
[**getDocumentAnnotations**](PdfApi.md#getdocumentannotations) | **GET** /pdf/\{name}/annotations | Read documant page annotations. Returns only FreeTextAnnotations, TextAnnotations, other annotations will implemented next releases.
[**getDocumentAttachmentByIndex**](PdfApi.md#getdocumentattachmentbyindex) | **GET** /pdf/\{name}/attachments/\{attachmentIndex} | Read document attachment info by its index.
[**getDocumentAttachments**](PdfApi.md#getdocumentattachments) | **GET** /pdf/\{name}/attachments | Read document attachments info.
[**getDocumentBookmarks**](PdfApi.md#getdocumentbookmarks) | **GET** /pdf/\{name}/bookmarks | Read document bookmark/bookmarks (including children).
[**getDocumentCircleAnnotations**](PdfApi.md#getdocumentcircleannotations) | **GET** /pdf/\{name}/annotations/circle | Read document circle annotations.
[**getDocumentFreeTextAnnotations**](PdfApi.md#getdocumentfreetextannotations) | **GET** /pdf/\{name}/annotations/freetext | Read document free text annotations.
[**getDocumentLineAnnotations**](PdfApi.md#getdocumentlineannotations) | **GET** /pdf/\{name}/annotations/line | Read document line annotations.
[**getDocumentPolyLineAnnotations**](PdfApi.md#getdocumentpolylineannotations) | **GET** /pdf/\{name}/annotations/polyline | Read document polyline annotations.
[**getDocumentPolygonAnnotations**](PdfApi.md#getdocumentpolygonannotations) | **GET** /pdf/\{name}/annotations/polygon | Read document polygon annotations.
[**getDocumentProperties**](PdfApi.md#getdocumentproperties) | **GET** /pdf/\{name}/documentproperties | Read document properties.
[**getDocumentProperty**](PdfApi.md#getdocumentproperty) | **GET** /pdf/\{name}/documentproperties/\{propertyName} | Read document property by name.
[**getDocumentSquareAnnotations**](PdfApi.md#getdocumentsquareannotations) | **GET** /pdf/\{name}/annotations/square | Read document square annotations.
[**getDocumentTextAnnotations**](PdfApi.md#getdocumenttextannotations) | **GET** /pdf/\{name}/annotations/text | Read document text annotations.
[**getDownload**](PdfApi.md#getdownload) | **GET** /storage/file | Download a specific file
[**getDownloadDocumentAttachmentByIndex**](PdfApi.md#getdownloaddocumentattachmentbyindex) | **GET** /pdf/\{name}/attachments/\{attachmentIndex}/download | Download document attachment content by its index.
[**getEpubInStorageToPdf**](PdfApi.md#getepubinstoragetopdf) | **GET** /pdf/create/epub | Convert EPUB file (located on storage) to PDF format and return resulting file in response.
[**getField**](PdfApi.md#getfield) | **GET** /pdf/\{name}/fields/\{fieldName} | Get document field by name.
[**getFields**](PdfApi.md#getfields) | **GET** /pdf/\{name}/fields | Get document fields.
[**getFreeTextAnnotation**](PdfApi.md#getfreetextannotation) | **GET** /pdf/\{name}/annotations/freetext/\{annotationId} | Read document page free text annotation by ID.
[**getHtmlInStorageToPdf**](PdfApi.md#gethtmlinstoragetopdf) | **GET** /pdf/create/html | Convert HTML file (located on storage) to PDF format and return resulting file in response.
[**getImage**](PdfApi.md#getimage) | **GET** /pdf/\{name}/images/\{imageId} | Read document image by ID.
[**getImageExtractAsGif**](PdfApi.md#getimageextractasgif) | **GET** /pdf/\{name}/images/\{imageId}/extract/gif | Extract document image in GIF format
[**getImageExtractAsJpeg**](PdfApi.md#getimageextractasjpeg) | **GET** /pdf/\{name}/images/\{imageId}/extract/jpeg | Extract document image in JPEG format
[**getImageExtractAsPng**](PdfApi.md#getimageextractaspng) | **GET** /pdf/\{name}/images/\{imageId}/extract/png | Extract document image in PNG format
[**getImageExtractAsTiff**](PdfApi.md#getimageextractastiff) | **GET** /pdf/\{name}/images/\{imageId}/extract/tiff | Extract document image in TIFF format
[**getImages**](PdfApi.md#getimages) | **GET** /pdf/\{name}/pages/\{pageNumber}/images | Read document images.
[**getLaTeXInStorageToPdf**](PdfApi.md#getlatexinstoragetopdf) | **GET** /pdf/create/latex | Convert LaTeX file (located on storage) to PDF format and return resulting file in response.
[**getLineAnnotation**](PdfApi.md#getlineannotation) | **GET** /pdf/\{name}/annotations/line/\{annotationId} | Read document page line annotation by ID.
[**getLinkAnnotation**](PdfApi.md#getlinkannotation) | **GET** /pdf/\{name}/links/\{linkId} | Read document link annotation by ID.
[**getMhtInStorageToPdf**](PdfApi.md#getmhtinstoragetopdf) | **GET** /pdf/create/mht | Convert MHT file (located on storage) to PDF format and return resulting file in response.
[**getPage**](PdfApi.md#getpage) | **GET** /pdf/\{name}/pages/\{pageNumber} | Read document page info.
[**getPageAnnotations**](PdfApi.md#getpageannotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations | Read documant page annotations. Returns only FreeTextAnnotations, TextAnnotations, other annotations will implemented next releases.
[**getPageCircleAnnotations**](PdfApi.md#getpagecircleannotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/circle | Read document page circle annotations.
[**getPageConvertToBmp**](PdfApi.md#getpageconverttobmp) | **GET** /pdf/\{name}/pages/\{pageNumber}/convert/bmp | Convert document page to Bmp image and return resulting file in response.
[**getPageConvertToEmf**](PdfApi.md#getpageconverttoemf) | **GET** /pdf/\{name}/pages/\{pageNumber}/convert/emf | Convert document page to Emf image and return resulting file in response.
[**getPageConvertToGif**](PdfApi.md#getpageconverttogif) | **GET** /pdf/\{name}/pages/\{pageNumber}/convert/gif | Convert document page to Gif image and return resulting file in response.
[**getPageConvertToJpeg**](PdfApi.md#getpageconverttojpeg) | **GET** /pdf/\{name}/pages/\{pageNumber}/convert/jpeg | Convert document page to Jpeg image and return resulting file in response.
[**getPageConvertToPng**](PdfApi.md#getpageconverttopng) | **GET** /pdf/\{name}/pages/\{pageNumber}/convert/png | Convert document page to Png image and return resulting file in response.
[**getPageConvertToTiff**](PdfApi.md#getpageconverttotiff) | **GET** /pdf/\{name}/pages/\{pageNumber}/convert/tiff | Convert document page to Tiff image  and return resulting file in response.
[**getPageFreeTextAnnotations**](PdfApi.md#getpagefreetextannotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/freetext | Read document page free text annotations.
[**getPageLineAnnotations**](PdfApi.md#getpagelineannotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/line | Read document page line annotations.
[**getPageLinkAnnotation**](PdfApi.md#getpagelinkannotation) | **GET** /pdf/\{name}/pages/\{pageNumber}/links/\{linkId} | Read document page link annotation by ID.
[**getPageLinkAnnotations**](PdfApi.md#getpagelinkannotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/links | Read document page link annotations.
[**getPagePolyLineAnnotations**](PdfApi.md#getpagepolylineannotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/polyline | Read document page polyline annotations.
[**getPagePolygonAnnotations**](PdfApi.md#getpagepolygonannotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/polygon | Read document page polygon annotations.
[**getPageSquareAnnotations**](PdfApi.md#getpagesquareannotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/square | Read document page square annotations.
[**getPageText**](PdfApi.md#getpagetext) | **GET** /pdf/\{name}/pages/\{pageNumber}/text | Read page text items.
[**getPageTextAnnotations**](PdfApi.md#getpagetextannotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/text | Read document page text annotations.
[**getPages**](PdfApi.md#getpages) | **GET** /pdf/\{name}/pages | Read document pages info.
[**getPclInStorageToPdf**](PdfApi.md#getpclinstoragetopdf) | **GET** /pdf/create/pcl | Convert PCL file (located on storage) to PDF format and return resulting file in response.
[**getPdfInStorageToDoc**](PdfApi.md#getpdfinstoragetodoc) | **GET** /pdf/\{name}/convert/doc | Converts PDF document (located on storage) to DOC format and returns resulting file in response content
[**getPdfInStorageToEpub**](PdfApi.md#getpdfinstoragetoepub) | **GET** /pdf/\{name}/convert/epub | Converts PDF document (located on storage) to EPUB format and returns resulting file in response content
[**getPdfInStorageToHtml**](PdfApi.md#getpdfinstoragetohtml) | **GET** /pdf/\{name}/convert/html | Converts PDF document (located on storage) to Html format and returns resulting file in response content
[**getPdfInStorageToLaTeX**](PdfApi.md#getpdfinstoragetolatex) | **GET** /pdf/\{name}/convert/latex | Converts PDF document (located on storage) to LaTeX format and returns resulting file in response content
[**getPdfInStorageToMobiXml**](PdfApi.md#getpdfinstoragetomobixml) | **GET** /pdf/\{name}/convert/mobixml | Converts PDF document (located on storage) to MOBIXML format and returns resulting file in response content
[**getPdfInStorageToPdfA**](PdfApi.md#getpdfinstoragetopdfa) | **GET** /pdf/\{name}/convert/pdfa | Converts PDF document (located on storage) to PdfA format and returns resulting file in response content
[**getPdfInStorageToPptx**](PdfApi.md#getpdfinstoragetopptx) | **GET** /pdf/\{name}/convert/pptx | Converts PDF document (located on storage) to PPTX format and returns resulting file in response content
[**getPdfInStorageToSvg**](PdfApi.md#getpdfinstoragetosvg) | **GET** /pdf/\{name}/convert/svg | Converts PDF document (located on storage) to SVG format and returns resulting file in response content
[**getPdfInStorageToTiff**](PdfApi.md#getpdfinstoragetotiff) | **GET** /pdf/\{name}/convert/tiff | Converts PDF document (located on storage) to TIFF format and returns resulting file in response content
[**getPdfInStorageToXls**](PdfApi.md#getpdfinstoragetoxls) | **GET** /pdf/\{name}/convert/xls | Converts PDF document (located on storage) to XLS format and returns resulting file in response content
[**getPdfInStorageToXml**](PdfApi.md#getpdfinstoragetoxml) | **GET** /pdf/\{name}/convert/xml | Converts PDF document (located on storage) to XML format and returns resulting file in response content
[**getPdfInStorageToXps**](PdfApi.md#getpdfinstoragetoxps) | **GET** /pdf/\{name}/convert/xps | Converts PDF document (located on storage) to XPS format and returns resulting file in response content
[**getPolyLineAnnotation**](PdfApi.md#getpolylineannotation) | **GET** /pdf/\{name}/annotations/polyline/\{annotationId} | Read document page polyline annotation by ID.
[**getPolygonAnnotation**](PdfApi.md#getpolygonannotation) | **GET** /pdf/\{name}/annotations/polygon/\{annotationId} | Read document page polygon annotation by ID.
[**getPsInStorageToPdf**](PdfApi.md#getpsinstoragetopdf) | **GET** /pdf/create/ps | Convert PS file (located on storage) to PDF format and return resulting file in response.
[**getSquareAnnotation**](PdfApi.md#getsquareannotation) | **GET** /pdf/\{name}/annotations/square/\{annotationId} | Read document page square annotation by ID.
[**getSvgInStorageToPdf**](PdfApi.md#getsvginstoragetopdf) | **GET** /pdf/create/svg | Convert SVG file (located on storage) to PDF format and return resulting file in response.
[**getText**](PdfApi.md#gettext) | **GET** /pdf/\{name}/text | Read document text.
[**getTextAnnotation**](PdfApi.md#gettextannotation) | **GET** /pdf/\{name}/annotations/text/\{annotationId} | Read document page text annotation by ID.
[**getVerifySignature**](PdfApi.md#getverifysignature) | **GET** /pdf/\{name}/verifySignature | Verify signature document.
[**getWebInStorageToPdf**](PdfApi.md#getwebinstoragetopdf) | **GET** /pdf/create/web | Convert web page to PDF format and return resulting file in response.
[**getWordsPerPage**](PdfApi.md#getwordsperpage) | **GET** /pdf/\{name}/pages/wordCount | Get number of words per document page.
[**getXfaPdfInStorageToAcroForm**](PdfApi.md#getxfapdfinstoragetoacroform) | **GET** /pdf/\{name}/convert/xfatoacroform | Converts PDF document which contatins XFA form (located on storage) to PDF with AcroForm and returns resulting file response content
[**getXmlInStorageToPdf**](PdfApi.md#getxmlinstoragetopdf) | **GET** /pdf/create/xml | Convert XML file (located on storage) to PDF format and return resulting file in response.
[**getXpsInStorageToPdf**](PdfApi.md#getxpsinstoragetopdf) | **GET** /pdf/create/xps | Convert XPS file (located on storage) to PDF format and return resulting file in response.
[**getXslFoInStorageToPdf**](PdfApi.md#getxslfoinstoragetopdf) | **GET** /pdf/create/xslfo | Convert XslFo file (located on storage) to PDF format and return resulting file in response.
[**postAppendDocument**](PdfApi.md#postappenddocument) | **POST** /pdf/\{name}/appendDocument | Append document to existing one.
[**postCreateField**](PdfApi.md#postcreatefield) | **POST** /pdf/\{name}/fields | Create field.
[**postDocumentTextReplace**](PdfApi.md#postdocumenttextreplace) | **POST** /pdf/\{name}/text/replace | Document&#39;s replace text method.
[**postInsertImage**](PdfApi.md#postinsertimage) | **POST** /pdf/\{name}/pages/\{pageNumber}/images | Insert image to document page.
[**postMovePage**](PdfApi.md#postmovepage) | **POST** /pdf/\{name}/pages/\{pageNumber}/movePage | Move page to new position.
[**postOptimizeDocument**](PdfApi.md#postoptimizedocument) | **POST** /pdf/\{name}/optimize | Optimize document.
[**postPageCircleAnnotations**](PdfApi.md#postpagecircleannotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/circle | Add document page circle annotations.
[**postPageFreeTextAnnotations**](PdfApi.md#postpagefreetextannotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/freetext | Add document page free text annotations.
[**postPageLineAnnotations**](PdfApi.md#postpagelineannotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/line | Add document page line annotations.
[**postPageLinkAnnotations**](PdfApi.md#postpagelinkannotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/links | Add document page link annotations.
[**postPagePolyLineAnnotations**](PdfApi.md#postpagepolylineannotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/polyline | Add document page polyline annotations.
[**postPagePolygonAnnotations**](PdfApi.md#postpagepolygonannotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/polygon | Add document page polygon annotations.
[**postPageSquareAnnotations**](PdfApi.md#postpagesquareannotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/square | Add document page square annotations.
[**postPageTextAnnotations**](PdfApi.md#postpagetextannotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/text | Add document page text annotations.
[**postPageTextReplace**](PdfApi.md#postpagetextreplace) | **POST** /pdf/\{name}/pages/\{pageNumber}/text/replace | Page&#39;s replace text method.
[**postSignDocument**](PdfApi.md#postsigndocument) | **POST** /pdf/\{name}/sign | Sign document.
[**postSignPage**](PdfApi.md#postsignpage) | **POST** /pdf/\{name}/pages/\{pageNumber}/sign | Sign page.
[**postSplitDocument**](PdfApi.md#postsplitdocument) | **POST** /pdf/\{name}/split | Split document to parts.
[**putAddNewPage**](PdfApi.md#putaddnewpage) | **PUT** /pdf/\{name}/pages | Add new page to end of the document.
[**putAddText**](PdfApi.md#putaddtext) | **PUT** /pdf/\{name}/pages/\{pageNumber}/text | Add text to PDF document page.
[**putCircleAnnotation**](PdfApi.md#putcircleannotation) | **PUT** /pdf/\{name}/annotations/circle/\{annotationId} | Replace document circle annotation
[**putCreate**](PdfApi.md#putcreate) | **PUT** /storage/file | Upload a specific file
[**putCreateDocument**](PdfApi.md#putcreatedocument) | **PUT** /pdf/\{name} | Create empty document.
[**putEpubInStorageToPdf**](PdfApi.md#putepubinstoragetopdf) | **PUT** /pdf/\{name}/create/epub | Convert EPUB file (located on storage) to PDF format and upload resulting file to storage.
[**putFieldsFlatten**](PdfApi.md#putfieldsflatten) | **PUT** /pdf/\{name}/fields/flatten | Flatten form fields in document.
[**putFreeTextAnnotation**](PdfApi.md#putfreetextannotation) | **PUT** /pdf/\{name}/annotations/freetext/\{annotationId} | Replace document free text annotation
[**putHtmlInStorageToPdf**](PdfApi.md#puthtmlinstoragetopdf) | **PUT** /pdf/\{name}/create/html | Convert HTML file (located on storage) to PDF format and upload resulting file to storage.
[**putImageExtractAsGif**](PdfApi.md#putimageextractasgif) | **PUT** /pdf/\{name}/images/\{imageId}/extract/gif | Extract document image in GIF format to folder
[**putImageExtractAsJpeg**](PdfApi.md#putimageextractasjpeg) | **PUT** /pdf/\{name}/images/\{imageId}/extract/jpeg | Extract document image in JPEG format to folder
[**putImageExtractAsPng**](PdfApi.md#putimageextractaspng) | **PUT** /pdf/\{name}/images/\{imageId}/extract/png | Extract document image in PNG format to folder
[**putImageExtractAsTiff**](PdfApi.md#putimageextractastiff) | **PUT** /pdf/\{name}/images/\{imageId}/extract/tiff | Extract document image in TIFF format to folder
[**putImageInStorageToPdf**](PdfApi.md#putimageinstoragetopdf) | **PUT** /pdf/\{name}/create/images | Convert image file (located on storage) to PDF format and upload resulting file to storage.
[**putImagesExtractAsGif**](PdfApi.md#putimagesextractasgif) | **PUT** /pdf/\{name}/pages/\{pageNumber}/images/extract/gif | Extract document images in GIF format to folder.
[**putImagesExtractAsJpeg**](PdfApi.md#putimagesextractasjpeg) | **PUT** /pdf/\{name}/pages/\{pageNumber}/images/extract/jpeg | Extract document images in JPEG format to folder.
[**putImagesExtractAsPng**](PdfApi.md#putimagesextractaspng) | **PUT** /pdf/\{name}/pages/\{pageNumber}/images/extract/png | Extract document images in PNG format to folder.
[**putImagesExtractAsTiff**](PdfApi.md#putimagesextractastiff) | **PUT** /pdf/\{name}/pages/\{pageNumber}/images/extract/tiff | Extract document images in TIFF format to folder.
[**putLaTeXInStorageToPdf**](PdfApi.md#putlatexinstoragetopdf) | **PUT** /pdf/\{name}/create/latex | Convert LaTeX file (located on storage) to PDF format and upload resulting file to storage.
[**putLineAnnotation**](PdfApi.md#putlineannotation) | **PUT** /pdf/\{name}/annotations/line/\{annotationId} | Replace document line annotation
[**putLinkAnnotation**](PdfApi.md#putlinkannotation) | **PUT** /pdf/\{name}/links/\{linkId} | Replace document page link annotations
[**putMergeDocuments**](PdfApi.md#putmergedocuments) | **PUT** /pdf/\{name}/merge | Merge a list of documents.
[**putMhtInStorageToPdf**](PdfApi.md#putmhtinstoragetopdf) | **PUT** /pdf/\{name}/create/mht | Convert MHT file (located on storage) to PDF format and upload resulting file to storage.
[**putPageAddStamp**](PdfApi.md#putpageaddstamp) | **PUT** /pdf/\{name}/pages/\{pageNumber}/stamp | Add page stamp.
[**putPageConvertToBmp**](PdfApi.md#putpageconverttobmp) | **PUT** /pdf/\{name}/pages/\{pageNumber}/convert/bmp | Convert document page to bmp image and upload resulting file to storage.
[**putPageConvertToEmf**](PdfApi.md#putpageconverttoemf) | **PUT** /pdf/\{name}/pages/\{pageNumber}/convert/emf | Convert document page to emf image and upload resulting file to storage.
[**putPageConvertToGif**](PdfApi.md#putpageconverttogif) | **PUT** /pdf/\{name}/pages/\{pageNumber}/convert/gif | Convert document page to gif image and upload resulting file to storage.
[**putPageConvertToJpeg**](PdfApi.md#putpageconverttojpeg) | **PUT** /pdf/\{name}/pages/\{pageNumber}/convert/jpeg | Convert document page to Jpeg image and upload resulting file to storage.
[**putPageConvertToPng**](PdfApi.md#putpageconverttopng) | **PUT** /pdf/\{name}/pages/\{pageNumber}/convert/png | Convert document page to png image and upload resulting file to storage.
[**putPageConvertToTiff**](PdfApi.md#putpageconverttotiff) | **PUT** /pdf/\{name}/pages/\{pageNumber}/convert/tiff | Convert document page to Tiff image and upload resulting file to storage.
[**putPclInStorageToPdf**](PdfApi.md#putpclinstoragetopdf) | **PUT** /pdf/\{name}/create/pcl | Convert PCL file (located on storage) to PDF format and upload resulting file to storage.
[**putPdfInRequestToDoc**](PdfApi.md#putpdfinrequesttodoc) | **PUT** /pdf/convert/doc | Converts PDF document (in request content) to DOC format and uploads resulting file to storage.
[**putPdfInRequestToEpub**](PdfApi.md#putpdfinrequesttoepub) | **PUT** /pdf/convert/epub | Converts PDF document (in request content) to EPUB format and uploads resulting file to storage.
[**putPdfInRequestToHtml**](PdfApi.md#putpdfinrequesttohtml) | **PUT** /pdf/convert/html | Converts PDF document (in request content) to Html format and uploads resulting file to storage.
[**putPdfInRequestToLaTeX**](PdfApi.md#putpdfinrequesttolatex) | **PUT** /pdf/convert/latex | Converts PDF document (in request content) to LaTeX format and uploads resulting file to storage.
[**putPdfInRequestToMobiXml**](PdfApi.md#putpdfinrequesttomobixml) | **PUT** /pdf/convert/mobixml | Converts PDF document (in request content) to MOBIXML format and uploads resulting file to storage.
[**putPdfInRequestToPdfA**](PdfApi.md#putpdfinrequesttopdfa) | **PUT** /pdf/convert/pdfa | Converts PDF document (in request content) to PdfA format and uploads resulting file to storage.
[**putPdfInRequestToPptx**](PdfApi.md#putpdfinrequesttopptx) | **PUT** /pdf/convert/pptx | Converts PDF document (in request content) to PPTX format and uploads resulting file to storage.
[**putPdfInRequestToSvg**](PdfApi.md#putpdfinrequesttosvg) | **PUT** /pdf/convert/svg | Converts PDF document (in request content) to SVG format and uploads resulting file to storage.
[**putPdfInRequestToTiff**](PdfApi.md#putpdfinrequesttotiff) | **PUT** /pdf/convert/tiff | Converts PDF document (in request content) to TIFF format and uploads resulting file to storage.
[**putPdfInRequestToXls**](PdfApi.md#putpdfinrequesttoxls) | **PUT** /pdf/convert/xls | Converts PDF document (in request content) to XLS format and uploads resulting file to storage.
[**putPdfInRequestToXml**](PdfApi.md#putpdfinrequesttoxml) | **PUT** /pdf/convert/xml | Converts PDF document (in request content) to XML format and uploads resulting file to storage.
[**putPdfInRequestToXps**](PdfApi.md#putpdfinrequesttoxps) | **PUT** /pdf/convert/xps | Converts PDF document (in request content) to XPS format and uploads resulting file to storage.
[**putPdfInStorageToDoc**](PdfApi.md#putpdfinstoragetodoc) | **PUT** /pdf/\{name}/convert/doc | Converts PDF document (located on storage) to DOC format and uploads resulting file to storage
[**putPdfInStorageToEpub**](PdfApi.md#putpdfinstoragetoepub) | **PUT** /pdf/\{name}/convert/epub | Converts PDF document (located on storage) to EPUB format and uploads resulting file to storage
[**putPdfInStorageToHtml**](PdfApi.md#putpdfinstoragetohtml) | **PUT** /pdf/\{name}/convert/html | Converts PDF document (located on storage) to Html format and uploads resulting file to storage
[**putPdfInStorageToLaTeX**](PdfApi.md#putpdfinstoragetolatex) | **PUT** /pdf/\{name}/convert/latex | Converts PDF document (located on storage) to LaTeX format and uploads resulting file to storage
[**putPdfInStorageToMobiXml**](PdfApi.md#putpdfinstoragetomobixml) | **PUT** /pdf/\{name}/convert/mobixml | Converts PDF document (located on storage) to MOBIXML format and uploads resulting file to storage
[**putPdfInStorageToPdfA**](PdfApi.md#putpdfinstoragetopdfa) | **PUT** /pdf/\{name}/convert/pdfa | Converts PDF document (located on storage) to PdfA format and uploads resulting file to storage
[**putPdfInStorageToPptx**](PdfApi.md#putpdfinstoragetopptx) | **PUT** /pdf/\{name}/convert/pptx | Converts PDF document (located on storage) to PPTX format and uploads resulting file to storage
[**putPdfInStorageToSvg**](PdfApi.md#putpdfinstoragetosvg) | **PUT** /pdf/\{name}/convert/svg | Converts PDF document (located on storage) to SVG format and uploads resulting file to storage
[**putPdfInStorageToTiff**](PdfApi.md#putpdfinstoragetotiff) | **PUT** /pdf/\{name}/convert/tiff | Converts PDF document (located on storage) to TIFF format and uploads resulting file to storage
[**putPdfInStorageToXls**](PdfApi.md#putpdfinstoragetoxls) | **PUT** /pdf/\{name}/convert/xls | Converts PDF document (located on storage) to XLS format and uploads resulting file to storage
[**putPdfInStorageToXml**](PdfApi.md#putpdfinstoragetoxml) | **PUT** /pdf/\{name}/convert/xml | Converts PDF document (located on storage) to XML format and uploads resulting file to storage
[**putPdfInStorageToXps**](PdfApi.md#putpdfinstoragetoxps) | **PUT** /pdf/\{name}/convert/xps | Converts PDF document (located on storage) to XPS format and uploads resulting file to storage
[**putPolyLineAnnotation**](PdfApi.md#putpolylineannotation) | **PUT** /pdf/\{name}/annotations/polyline/\{annotationId} | Replace document polyline annotation
[**putPolygonAnnotation**](PdfApi.md#putpolygonannotation) | **PUT** /pdf/\{name}/annotations/polygon/\{annotationId} | Replace document polygon annotation
[**putPrivileges**](PdfApi.md#putprivileges) | **PUT** /pdf/\{name}/privileges | Update privilege document.
[**putPsInStorageToPdf**](PdfApi.md#putpsinstoragetopdf) | **PUT** /pdf/\{name}/create/ps | Convert PS file (located on storage) to PDF format and upload resulting file to storage.
[**putReplaceImage**](PdfApi.md#putreplaceimage) | **PUT** /pdf/\{name}/images/\{imageId} | Replace document image.
[**putSearchableDocument**](PdfApi.md#putsearchabledocument) | **PUT** /pdf/\{name}/ocr | Create searchable PDF document. Generate OCR layer for images in input PDF document.
[**putSetProperty**](PdfApi.md#putsetproperty) | **PUT** /pdf/\{name}/documentproperties/\{propertyName} | Add/update document property.
[**putSquareAnnotation**](PdfApi.md#putsquareannotation) | **PUT** /pdf/\{name}/annotations/square/\{annotationId} | Replace document square annotation
[**putSvgInStorageToPdf**](PdfApi.md#putsvginstoragetopdf) | **PUT** /pdf/\{name}/create/svg | Convert SVG file (located on storage) to PDF format and upload resulting file to storage.
[**putTextAnnotation**](PdfApi.md#puttextannotation) | **PUT** /pdf/\{name}/annotations/text/\{annotationId} | Replace document text annotation
[**putUpdateField**](PdfApi.md#putupdatefield) | **PUT** /pdf/\{name}/fields/\{fieldName} | Update field.
[**putUpdateFields**](PdfApi.md#putupdatefields) | **PUT** /pdf/\{name}/fields | Update fields.
[**putWebInStorageToPdf**](PdfApi.md#putwebinstoragetopdf) | **PUT** /pdf/\{name}/create/web | Convert web page to PDF format and upload resulting file to storage.
[**putXfaPdfInRequestToAcroForm**](PdfApi.md#putxfapdfinrequesttoacroform) | **PUT** /pdf/convert/xfatoacroform | Converts PDF document which contatins XFA form (in request content) to PDF with AcroForm and uploads resulting file to storage.
[**putXfaPdfInStorageToAcroForm**](PdfApi.md#putxfapdfinstoragetoacroform) | **PUT** /pdf/\{name}/convert/xfatoacroform | Converts PDF document which contatins XFA form (located on storage) to PDF with AcroForm and uploads resulting file to storage
[**putXmlInStorageToPdf**](PdfApi.md#putxmlinstoragetopdf) | **PUT** /pdf/\{name}/create/xml | Convert XML file (located on storage) to PDF format and upload resulting file to storage.
[**putXpsInStorageToPdf**](PdfApi.md#putxpsinstoragetopdf) | **PUT** /pdf/\{name}/create/xps | Convert XPS file (located on storage) to PDF format and upload resulting file to storage.
[**putXslFoInStorageToPdf**](PdfApi.md#putxslfoinstoragetopdf) | **PUT** /pdf/\{name}/create/xslfo | Convert XslFo file (located on storage) to PDF format and upload resulting file to storage.


<a name="deleteannotation"></a>
# **deleteAnnotation**
> \Aspose\PDF\Model\AsposeResponse deleteAnnotation($name, $annotation_id, $storage, $folder)

Delete document annotation by ID

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **annotation_id** | **string**| The annotation ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="deletedocumentannotations"></a>
# **deleteDocumentAnnotations**
> \Aspose\PDF\Model\AsposeResponse deleteDocumentAnnotations($name, $storage, $folder)

Delete all annotations from the document

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="deletedocumentlinkannotations"></a>
# **deleteDocumentLinkAnnotations**
> \Aspose\PDF\Model\AsposeResponse deleteDocumentLinkAnnotations($name, $storage, $folder)

Delete all link annotations from the document

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="deletefield"></a>
# **deleteField**
> \Aspose\PDF\Model\AsposeResponse deleteField($name, $field_name, $storage, $folder)

Delete document field by name.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **field_name** | **string**| The field name/ |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="deleteimage"></a>
# **deleteImage**
> \Aspose\PDF\Model\AsposeResponse deleteImage($name, $image_id, $storage, $folder)

Delete image from document page.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **image_id** | **string**| Image ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="deletelinkannotation"></a>
# **deleteLinkAnnotation**
> \Aspose\PDF\Model\AsposeResponse deleteLinkAnnotation($name, $link_id, $storage, $folder)

Delete document page link annotation by ID

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **link_id** | **string**| The link ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="deletepage"></a>
# **deletePage**
> \Aspose\PDF\Model\AsposeResponse deletePage($name, $page_number, $storage, $folder)

Delete document page by its number.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="deletepageannotations"></a>
# **deletePageAnnotations**
> \Aspose\PDF\Model\AsposeResponse deletePageAnnotations($name, $page_number, $storage, $folder)

Delete all annotations from the page

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="deletepagelinkannotations"></a>
# **deletePageLinkAnnotations**
> \Aspose\PDF\Model\AsposeResponse deletePageLinkAnnotations($name, $page_number, $storage, $folder)

Delete all link annotations from the page

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="deleteproperties"></a>
# **deleteProperties**
> \Aspose\PDF\Model\AsposeResponse deleteProperties($name, $storage, $folder)

Delete custom document properties.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **storage** | **string**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="deleteproperty"></a>
# **deleteProperty**
> \Aspose\PDF\Model\AsposeResponse deleteProperty($name, $property_name, $storage, $folder)

Delete document property.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **property_name** | **string**|  |
 **storage** | **string**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getcircleannotation"></a>
# **getCircleAnnotation**
> \Aspose\PDF\Model\CircleAnnotationResponse getCircleAnnotation($name, $annotation_id, $storage, $folder)

Read document page circle annotation by ID.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **annotation_id** | **string**| The annotation ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\CircleAnnotationResponse**](../Model/CircleAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getdocument"></a>
# **getDocument**
> \Aspose\PDF\Model\DocumentResponse getDocument($name, $storage, $folder)

Read common document info.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentResponse**](../Model/DocumentResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getdocumentannotations"></a>
# **getDocumentAnnotations**
> \Aspose\PDF\Model\AnnotationsInfoResponse getDocumentAnnotations($name, $storage, $folder)

Read documant page annotations. Returns only FreeTextAnnotations, TextAnnotations, other annotations will implemented next releases.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AnnotationsInfoResponse**](../Model/AnnotationsInfoResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getdocumentattachmentbyindex"></a>
# **getDocumentAttachmentByIndex**
> \Aspose\PDF\Model\AttachmentResponse getDocumentAttachmentByIndex($name, $attachment_index, $storage, $folder)

Read document attachment info by its index.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **attachment_index** | **int**| The attachment index. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AttachmentResponse**](../Model/AttachmentResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getdocumentattachments"></a>
# **getDocumentAttachments**
> \Aspose\PDF\Model\AttachmentsResponse getDocumentAttachments($name, $storage, $folder)

Read document attachments info.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AttachmentsResponse**](../Model/AttachmentsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getdocumentbookmarks"></a>
# **getDocumentBookmarks**
> \SplFileObject getDocumentBookmarks($name, $bookmark_path, $storage, $folder)

Read document bookmark/bookmarks (including children).

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **bookmark_path** | **string**| The bookmark path. Leave it empty if you want to get all the bookmarks in the document. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getdocumentcircleannotations"></a>
# **getDocumentCircleAnnotations**
> \Aspose\PDF\Model\CircleAnnotationsResponse getDocumentCircleAnnotations($name, $storage, $folder)

Read document circle annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\CircleAnnotationsResponse**](../Model/CircleAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getdocumentfreetextannotations"></a>
# **getDocumentFreeTextAnnotations**
> \Aspose\PDF\Model\FreeTextAnnotationsResponse getDocumentFreeTextAnnotations($name, $storage, $folder)

Read document free text annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FreeTextAnnotationsResponse**](../Model/FreeTextAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getdocumentlineannotations"></a>
# **getDocumentLineAnnotations**
> \Aspose\PDF\Model\LineAnnotationsResponse getDocumentLineAnnotations($name, $storage, $folder)

Read document line annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\LineAnnotationsResponse**](../Model/LineAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getdocumentpolylineannotations"></a>
# **getDocumentPolyLineAnnotations**
> \Aspose\PDF\Model\PolyLineAnnotationsResponse getDocumentPolyLineAnnotations($name, $storage, $folder)

Read document polyline annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PolyLineAnnotationsResponse**](../Model/PolyLineAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getdocumentpolygonannotations"></a>
# **getDocumentPolygonAnnotations**
> \Aspose\PDF\Model\PolygonAnnotationsResponse getDocumentPolygonAnnotations($name, $storage, $folder)

Read document polygon annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PolygonAnnotationsResponse**](../Model/PolygonAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getdocumentproperties"></a>
# **getDocumentProperties**
> \Aspose\PDF\Model\DocumentPropertiesResponse getDocumentProperties($name, $storage, $folder)

Read document properties.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **storage** | **string**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentPropertiesResponse**](../Model/DocumentPropertiesResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getdocumentproperty"></a>
# **getDocumentProperty**
> \Aspose\PDF\Model\DocumentPropertyResponse getDocumentProperty($name, $property_name, $storage, $folder)

Read document property by name.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **property_name** | **string**|  |
 **storage** | **string**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentPropertyResponse**](../Model/DocumentPropertyResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getdocumentsquareannotations"></a>
# **getDocumentSquareAnnotations**
> \Aspose\PDF\Model\SquareAnnotationsResponse getDocumentSquareAnnotations($name, $storage, $folder)

Read document square annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\SquareAnnotationsResponse**](../Model/SquareAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getdocumenttextannotations"></a>
# **getDocumentTextAnnotations**
> \Aspose\PDF\Model\TextAnnotationsResponse getDocumentTextAnnotations($name, $storage, $folder)

Read document text annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\TextAnnotationsResponse**](../Model/TextAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getdownload"></a>
# **getDownload**
> \SplFileObject getDownload($path, $version_id, $storage)

Download a specific file

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path of the file including the file name and extension e.g. /file.ext |
 **version_id** | **string**| File&#39;s version | [optional]
 **storage** | **string**| User&#39;s storage name | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getdownloaddocumentattachmentbyindex"></a>
# **getDownloadDocumentAttachmentByIndex**
> \SplFileObject getDownloadDocumentAttachmentByIndex($name, $attachment_index, $storage, $folder)

Download document attachment content by its index.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **attachment_index** | **int**| The attachment index. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getepubinstoragetopdf"></a>
# **getEpubInStorageToPdf**
> \SplFileObject getEpubInStorageToPdf($src_path, $storage)

Convert EPUB file (located on storage) to PDF format and return resulting file in response.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.epub) |
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getfield"></a>
# **getField**
> \Aspose\PDF\Model\FieldResponse getField($name, $field_name, $storage, $folder)

Get document field by name.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **field_name** | **string**| The field name/ |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FieldResponse**](../Model/FieldResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getfields"></a>
# **getFields**
> \Aspose\PDF\Model\FieldsResponse getFields($name, $storage, $folder)

Get document fields.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FieldsResponse**](../Model/FieldsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getfreetextannotation"></a>
# **getFreeTextAnnotation**
> \Aspose\PDF\Model\FreeTextAnnotationResponse getFreeTextAnnotation($name, $annotation_id, $storage, $folder)

Read document page free text annotation by ID.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **annotation_id** | **string**| The annotation ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FreeTextAnnotationResponse**](../Model/FreeTextAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="gethtmlinstoragetopdf"></a>
# **getHtmlInStorageToPdf**
> \SplFileObject getHtmlInStorageToPdf($src_path, $html_file_name, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $storage)

Convert HTML file (located on storage) to PDF format and return resulting file in response.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.zip) |
 **html_file_name** | **string**| Name of HTML file in ZIP. |
 **height** | **double**| Page height | [optional]
 **width** | **double**| Page width | [optional]
 **is_landscape** | **bool**| Is page landscaped | [optional]
 **margin_left** | **double**| Page margin left | [optional]
 **margin_bottom** | **double**| Page margin bottom | [optional]
 **margin_right** | **double**| Page margin right | [optional]
 **margin_top** | **double**| Page margin top | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getimage"></a>
# **getImage**
> \Aspose\PDF\Model\ImageResponse getImage($name, $image_id, $storage, $folder)

Read document image by ID.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **image_id** | **string**| Image ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\ImageResponse**](../Model/ImageResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getimageextractasgif"></a>
# **getImageExtractAsGif**
> \SplFileObject getImageExtractAsGif($name, $image_id, $width, $height, $storage, $folder)

Extract document image in GIF format

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **image_id** | **string**| Image ID. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getimageextractasjpeg"></a>
# **getImageExtractAsJpeg**
> \SplFileObject getImageExtractAsJpeg($name, $image_id, $width, $height, $storage, $folder)

Extract document image in JPEG format

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **image_id** | **string**| Image ID. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getimageextractaspng"></a>
# **getImageExtractAsPng**
> \SplFileObject getImageExtractAsPng($name, $image_id, $width, $height, $storage, $folder)

Extract document image in PNG format

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **image_id** | **string**| Image ID. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getimageextractastiff"></a>
# **getImageExtractAsTiff**
> \SplFileObject getImageExtractAsTiff($name, $image_id, $width, $height, $storage, $folder)

Extract document image in TIFF format

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **image_id** | **string**| Image ID. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getimages"></a>
# **getImages**
> \Aspose\PDF\Model\ImagesResponse getImages($name, $page_number, $storage, $folder)

Read document images.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\ImagesResponse**](../Model/ImagesResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getlatexinstoragetopdf"></a>
# **getLaTeXInStorageToPdf**
> \SplFileObject getLaTeXInStorageToPdf($src_path, $storage)

Convert LaTeX file (located on storage) to PDF format and return resulting file in response.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.tex) |
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getlineannotation"></a>
# **getLineAnnotation**
> \Aspose\PDF\Model\LineAnnotationResponse getLineAnnotation($name, $annotation_id, $storage, $folder)

Read document page line annotation by ID.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **annotation_id** | **string**| The annotation ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\LineAnnotationResponse**](../Model/LineAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getlinkannotation"></a>
# **getLinkAnnotation**
> \Aspose\PDF\Model\LinkAnnotationResponse getLinkAnnotation($name, $link_id, $storage, $folder)

Read document link annotation by ID.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **link_id** | **string**| The link ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\LinkAnnotationResponse**](../Model/LinkAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getmhtinstoragetopdf"></a>
# **getMhtInStorageToPdf**
> \SplFileObject getMhtInStorageToPdf($src_path, $storage)

Convert MHT file (located on storage) to PDF format and return resulting file in response.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.mht) |
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpage"></a>
# **getPage**
> \Aspose\PDF\Model\DocumentPageResponse getPage($name, $page_number, $storage, $folder)

Read document page info.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentPageResponse**](../Model/DocumentPageResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpageannotations"></a>
# **getPageAnnotations**
> \Aspose\PDF\Model\AnnotationsInfoResponse getPageAnnotations($name, $page_number, $storage, $folder)

Read documant page annotations. Returns only FreeTextAnnotations, TextAnnotations, other annotations will implemented next releases.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AnnotationsInfoResponse**](../Model/AnnotationsInfoResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpagecircleannotations"></a>
# **getPageCircleAnnotations**
> \Aspose\PDF\Model\CircleAnnotationsResponse getPageCircleAnnotations($name, $page_number, $storage, $folder)

Read document page circle annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\CircleAnnotationsResponse**](../Model/CircleAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpageconverttobmp"></a>
# **getPageConvertToBmp**
> \SplFileObject getPageConvertToBmp($name, $page_number, $width, $height, $folder, $storage)

Convert document page to Bmp image and return resulting file in response.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpageconverttoemf"></a>
# **getPageConvertToEmf**
> \SplFileObject getPageConvertToEmf($name, $page_number, $width, $height, $folder, $storage)

Convert document page to Emf image and return resulting file in response.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpageconverttogif"></a>
# **getPageConvertToGif**
> \SplFileObject getPageConvertToGif($name, $page_number, $width, $height, $folder, $storage)

Convert document page to Gif image and return resulting file in response.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpageconverttojpeg"></a>
# **getPageConvertToJpeg**
> \SplFileObject getPageConvertToJpeg($name, $page_number, $width, $height, $folder, $storage)

Convert document page to Jpeg image and return resulting file in response.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpageconverttopng"></a>
# **getPageConvertToPng**
> \SplFileObject getPageConvertToPng($name, $page_number, $width, $height, $folder, $storage)

Convert document page to Png image and return resulting file in response.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpageconverttotiff"></a>
# **getPageConvertToTiff**
> \SplFileObject getPageConvertToTiff($name, $page_number, $width, $height, $folder, $storage)

Convert document page to Tiff image  and return resulting file in response.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpagefreetextannotations"></a>
# **getPageFreeTextAnnotations**
> \Aspose\PDF\Model\FreeTextAnnotationsResponse getPageFreeTextAnnotations($name, $page_number, $storage, $folder)

Read document page free text annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FreeTextAnnotationsResponse**](../Model/FreeTextAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpagelineannotations"></a>
# **getPageLineAnnotations**
> \Aspose\PDF\Model\LineAnnotationsResponse getPageLineAnnotations($name, $page_number, $storage, $folder)

Read document page line annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\LineAnnotationsResponse**](../Model/LineAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpagelinkannotation"></a>
# **getPageLinkAnnotation**
> \Aspose\PDF\Model\LinkAnnotationResponse getPageLinkAnnotation($name, $page_number, $link_id, $storage, $folder)

Read document page link annotation by ID.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **link_id** | **string**| The link ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\LinkAnnotationResponse**](../Model/LinkAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpagelinkannotations"></a>
# **getPageLinkAnnotations**
> \Aspose\PDF\Model\LinkAnnotationsResponse getPageLinkAnnotations($name, $page_number, $storage, $folder)

Read document page link annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\LinkAnnotationsResponse**](../Model/LinkAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpagepolylineannotations"></a>
# **getPagePolyLineAnnotations**
> \Aspose\PDF\Model\PolyLineAnnotationsResponse getPagePolyLineAnnotations($name, $page_number, $storage, $folder)

Read document page polyline annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PolyLineAnnotationsResponse**](../Model/PolyLineAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpagepolygonannotations"></a>
# **getPagePolygonAnnotations**
> \Aspose\PDF\Model\PolygonAnnotationsResponse getPagePolygonAnnotations($name, $page_number, $storage, $folder)

Read document page polygon annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PolygonAnnotationsResponse**](../Model/PolygonAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpagesquareannotations"></a>
# **getPageSquareAnnotations**
> \Aspose\PDF\Model\SquareAnnotationsResponse getPageSquareAnnotations($name, $page_number, $storage, $folder)

Read document page square annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\SquareAnnotationsResponse**](../Model/SquareAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpagetext"></a>
# **getPageText**
> \Aspose\PDF\Model\TextRectsResponse getPageText($name, $page_number, $llx, $lly, $urx, $ury, $format, $regex, $split_rects, $folder, $storage)

Read page text items.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| Number of page (starting from 1). |
 **llx** | **double**|  |
 **lly** | **double**|  |
 **urx** | **double**|  |
 **ury** | **double**|  |
 **format** | **string[]**| List of formats for search. | [optional]
 **regex** | **string**| Formats are specified as a regular expression. | [optional]
 **split_rects** | **bool**| Split result fragments (default is true). | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\TextRectsResponse**](../Model/TextRectsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpagetextannotations"></a>
# **getPageTextAnnotations**
> \Aspose\PDF\Model\TextAnnotationsResponse getPageTextAnnotations($name, $page_number, $storage, $folder)

Read document page text annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\TextAnnotationsResponse**](../Model/TextAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpages"></a>
# **getPages**
> \Aspose\PDF\Model\DocumentPagesResponse getPages($name, $storage, $folder)

Read document pages info.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentPagesResponse**](../Model/DocumentPagesResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpclinstoragetopdf"></a>
# **getPclInStorageToPdf**
> \SplFileObject getPclInStorageToPdf($src_path, $storage)

Convert PCL file (located on storage) to PDF format and return resulting file in response.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.pcl) |
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpdfinstoragetodoc"></a>
# **getPdfInStorageToDoc**
> \SplFileObject getPdfInStorageToDoc($name, $add_return_to_line_end, $format, $image_resolution_x, $image_resolution_y, $max_distance_between_text_lines, $mode, $recognize_bullets, $relative_horizontal_proximity, $folder, $storage)

Converts PDF document (located on storage) to DOC format and returns resulting file in response content

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **add_return_to_line_end** | **bool**| Add return to line end. | [optional]
 **format** | **string**| Allows to specify .doc or .docx file format. | [optional]
 **image_resolution_x** | **int**| Image resolution X. | [optional]
 **image_resolution_y** | **int**| Image resolution Y. | [optional]
 **max_distance_between_text_lines** | **double**| Max distance between text lines. | [optional]
 **mode** | **string**| Allows to control how a PDF document is converted into a word processing document. | [optional]
 **recognize_bullets** | **bool**| Recognize bullets. | [optional]
 **relative_horizontal_proximity** | **double**| Relative horizontal proximity. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpdfinstoragetoepub"></a>
# **getPdfInStorageToEpub**
> \SplFileObject getPdfInStorageToEpub($name, $content_recognition_mode, $folder, $storage)

Converts PDF document (located on storage) to EPUB format and returns resulting file in response content

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **content_recognition_mode** | **string**| ?roperty tunes conversion for this or that desirable method of recognition of content. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpdfinstoragetohtml"></a>
# **getPdfInStorageToHtml**
> \SplFileObject getPdfInStorageToHtml($name, $additional_margin_width_in_points, $compress_svg_graphics_if_any, $convert_marked_content_to_layers, $default_font_name, $document_type, $fixed_layout, $image_resolution, $minimal_line_width, $prevent_glyphs_grouping, $split_css_into_pages, $split_into_pages, $use_z_order, $antialiasing_processing, $css_class_names_prefix, $explicit_list_of_saved_pages, $font_encoding_strategy, $font_saving_mode, $html_markup_generation_mode, $letters_positioning_method, $pages_flow_type_depends_on_viewers_screen_size, $parts_embedding_mode, $raster_images_saving_mode, $remove_empty_areas_on_top_and_bottom, $save_shadowed_texts_as_transparent_texts, $save_transparent_texts, $special_folder_for_all_images, $special_folder_for_svg_images, $try_save_text_underlining_and_strikeouting_in_css, $folder, $storage)

Converts PDF document (located on storage) to Html format and returns resulting file in response content

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **additional_margin_width_in_points** | **int**| Defines width of margin that will be forcibly left around that output HTML-areas. | [optional]
 **compress_svg_graphics_if_any** | **bool**| The flag that indicates whether found SVG graphics(if any) will be compressed(zipped) into SVGZ format during saving. | [optional]
 **convert_marked_content_to_layers** | **bool**| If attribute ConvertMarkedContentToLayers set to true then an all elements inside a PDF marked content (layer) will be put into an HTML div with &quot;data-pdflayer&quot; attribute specifying a layer name. This layer name will be extracted from optional properties of PDF marked content. If this attribute is false (by default) then no any layers will be created from PDF marked content. | [optional]
 **default_font_name** | **string**| Specifies the name of an installed font which is used to substitute any document font that is not embedded and not installed in the system. If null then default substitution font is used. | [optional]
 **document_type** | **string**| Result document type. | [optional]
 **fixed_layout** | **bool**| The value indicating whether that HTML is created as fixed layout. | [optional]
 **image_resolution** | **int**| Resolution for image rendering. | [optional]
 **minimal_line_width** | **int**| This attribute sets minimal width of graphic path line. If thickness of line is less than 1px Adobe Acrobat rounds it to this value. So this attribute can be used to emulate this behavior for HTML browsers. | [optional]
 **prevent_glyphs_grouping** | **bool**| This attribute switch on the mode when text glyphs will not be grouped into words and strings This mode allows to keep maximum precision during positioning of glyphs on the page and it can be used for conversion documents with music notes or glyphs that should be placed separately each other. This parameter will be applied to document only when the value of FixedLayout attribute is true. | [optional]
 **split_css_into_pages** | **bool**| When multipage-mode selected(i.e &#39;SplitIntoPages&#39; is &#39;true&#39;), then this attribute defines whether should be created separate CSS-file for each result HTML page. | [optional]
 **split_into_pages** | **bool**| The flag that indicates whether each page of source document will be converted into it&#39;s own target HTML document, i.e whether result HTML will be splitted into several HTML-pages. | [optional]
 **use_z_order** | **bool**| If attribute UseZORder set to true, graphics and text are added to resultant HTML document accordingly Z-order in original PDF document. If this attribute is false all graphics is put as single layer which may cause some unnecessary effects for overlapped objects. | [optional]
 **antialiasing_processing** | **string**| The parameter defines required antialiasing measures during conversion of compound background images from PDF to HTML. | [optional]
 **css_class_names_prefix** | **string**| When PDFtoHTML converter generates result CSSs, CSS class names (something like &quot;.stl_01 {}&quot; ... &quot;.stl_NN {}) are generated and used in result CSS. This property allows forcibly set class name prefix. | [optional]
 **explicit_list_of_saved_pages** | **int[]**| With this property You can explicitely define what pages of document should be converted. Pages in this list must have 1-based numbers. I.e. valid numbers of pages must be taken from range (1...[NumberOfPagesInConvertedDocument]) Order of appearing of pages in this list does not affect their order in result HTML page(s) - in result pages allways will go in order in which they are present in source PDF. | [optional]
 **font_encoding_strategy** | **string**| Defines encoding special rule to tune PDF decoding for current document. | [optional]
 **font_saving_mode** | **string**| Defines font saving mode that will be used during saving of PDF to desirable format. | [optional]
 **html_markup_generation_mode** | **string**| Sometimes specific reqirments to generation of HTML markup are present. This parameter defines HTML preparing modes that can be used during conversion of PDF to HTML to match such specific requirments. | [optional]
 **letters_positioning_method** | **string**| The mode of positioning of letters in words in result HTML. | [optional]
 **pages_flow_type_depends_on_viewers_screen_size** | **bool**| If attribute &#39;SplitOnPages&#x3D;false&#39;, than whole HTML representing all input PDF pages will be put into one big result HTML file. This flag defines whether result HTML will be generated in such way that flow of areas that represent PDF pages in result HTML will depend on screen resolution of viewer. | [optional]
 **parts_embedding_mode** | **string**| It defines whether referenced files (HTML, Fonts,Images, CSSes) will be embedded into main HTML file or will be generated as apart binary entities. | [optional]
 **raster_images_saving_mode** | **string**| Converted PDF can contain raster images This parameter defines how they should be handled during conversion of PDF to HTML. | [optional]
 **remove_empty_areas_on_top_and_bottom** | **bool**| Defines whether in created HTML will be removed top and bottom empty area without any content (if any). | [optional]
 **save_shadowed_texts_as_transparent_texts** | **bool**| Pdf can contain texts that are shadowed by another elements (f.e. by images) but can be selected to clipboard in Acrobat Reader (usually it happen when document contains images and OCRed texts extracted from it). This settings tells to converter whether we need save such texts as transparent selectable texts in result HTML to mimic behaviour of Acrobat Reader (othervise such texts are usually saved as hidden, not available for copying to clipboard). | [optional]
 **save_transparent_texts** | **bool**| Pdf can contain transparent texts that can be selected to clipboard (usually it happen when document contains images and OCRed texts extracted from it). This settings tells to converter whether we need save such texts as transparent selectable texts in result HTML. | [optional]
 **special_folder_for_all_images** | **string**| The path to directory to which must be saved any images if they are encountered during saving of document as HTML. If parameter is empty or null then image files(if any) wil be saved together with other files linked to HTML It does not affect anything if CustomImageSavingStrategy property was successfully used to process relevant image file. | [optional]
 **special_folder_for_svg_images** | **string**| The path to directory to which must be saved only SVG-images if they are encountered during saving of document as HTML. If parameter is empty or null then SVG files(if any) wil be saved together with other image-files (near to output file) or in special folder for images (if it specified in SpecialImagesFolderIfAny option). It does not affect anything if CustomImageSavingStrategy property was successfully used to process relevant image file. | [optional]
 **try_save_text_underlining_and_strikeouting_in_css** | **bool**| PDF itself does not contain underlining markers for texts. It emulated with line situated under text. This option allows converter try guess that this or that line is a text&#39;s underlining and put this info into CSS instead of drawing of underlining graphically. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpdfinstoragetolatex"></a>
# **getPdfInStorageToLaTeX**
> \SplFileObject getPdfInStorageToLaTeX($name, $pages_count, $folder, $storage)

Converts PDF document (located on storage) to LaTeX format and returns resulting file in response content

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **pages_count** | **int**| Pages count. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpdfinstoragetomobixml"></a>
# **getPdfInStorageToMobiXml**
> \SplFileObject getPdfInStorageToMobiXml($name, $folder, $storage)

Converts PDF document (located on storage) to MOBIXML format and returns resulting file in response content

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpdfinstoragetopdfa"></a>
# **getPdfInStorageToPdfA**
> \SplFileObject getPdfInStorageToPdfA($name, $type, $folder, $storage)

Converts PDF document (located on storage) to PdfA format and returns resulting file in response content

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **type** | **string**| Type of PdfA format. |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpdfinstoragetopptx"></a>
# **getPdfInStorageToPptx**
> \SplFileObject getPdfInStorageToPptx($name, $separate_images, $slides_as_images, $folder, $storage)

Converts PDF document (located on storage) to PPTX format and returns resulting file in response content

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **separate_images** | **bool**| Separate images. | [optional]
 **slides_as_images** | **bool**| Slides as images. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpdfinstoragetosvg"></a>
# **getPdfInStorageToSvg**
> \SplFileObject getPdfInStorageToSvg($name, $compress_output_to_zip_archive, $folder, $storage)

Converts PDF document (located on storage) to SVG format and returns resulting file in response content

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **compress_output_to_zip_archive** | **bool**| Specifies whether output will be created as one zip-archive. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpdfinstoragetotiff"></a>
# **getPdfInStorageToTiff**
> \SplFileObject getPdfInStorageToTiff($name, $brightness, $compression, $color_depth, $left_margin, $right_margin, $top_margin, $bottom_margin, $orientation, $skip_blank_pages, $width, $height, $x_resolution, $y_resolution, $page_index, $page_count, $folder, $storage)

Converts PDF document (located on storage) to TIFF format and returns resulting file in response content

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **brightness** | **double**| Image brightness. | [optional]
 **compression** | **string**| Tiff compression. Possible values are: LZW, CCITT4, CCITT3, RLE, None. | [optional]
 **color_depth** | **string**| Image color depth. Possible valuse are: Default, Format8bpp, Format4bpp, Format1bpp. | [optional]
 **left_margin** | **int**| Left image margin. | [optional]
 **right_margin** | **int**| Right image margin. | [optional]
 **top_margin** | **int**| Top image margin. | [optional]
 **bottom_margin** | **int**| Bottom image margin. | [optional]
 **orientation** | **string**| Image orientation. Possible values are: None, Landscape, Portait. | [optional]
 **skip_blank_pages** | **bool**| Skip blank pages flag. | [optional]
 **width** | **int**| Image width. | [optional]
 **height** | **int**| Image height. | [optional]
 **x_resolution** | **int**| Horizontal resolution. | [optional]
 **y_resolution** | **int**| Vertical resolution. | [optional]
 **page_index** | **int**| Start page to export. | [optional]
 **page_count** | **int**| Number of pages to export. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpdfinstoragetoxls"></a>
# **getPdfInStorageToXls**
> \SplFileObject getPdfInStorageToXls($name, $insert_blank_column_at_first, $minimize_the_number_of_worksheets, $scale_factor, $uniform_worksheets, $folder, $storage)

Converts PDF document (located on storage) to XLS format and returns resulting file in response content

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **insert_blank_column_at_first** | **bool**| Insert blank column at first | [optional]
 **minimize_the_number_of_worksheets** | **bool**| Minimize the number of worksheets | [optional]
 **scale_factor** | **double**| Scale factor | [optional]
 **uniform_worksheets** | **bool**| Uniform worksheets | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpdfinstoragetoxml"></a>
# **getPdfInStorageToXml**
> \SplFileObject getPdfInStorageToXml($name, $folder, $storage)

Converts PDF document (located on storage) to XML format and returns resulting file in response content

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpdfinstoragetoxps"></a>
# **getPdfInStorageToXps**
> \SplFileObject getPdfInStorageToXps($name, $folder, $storage)

Converts PDF document (located on storage) to XPS format and returns resulting file in response content

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpolylineannotation"></a>
# **getPolyLineAnnotation**
> \Aspose\PDF\Model\PolyLineAnnotationResponse getPolyLineAnnotation($name, $annotation_id, $storage, $folder)

Read document page polyline annotation by ID.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **annotation_id** | **string**| The annotation ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PolyLineAnnotationResponse**](../Model/PolyLineAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpolygonannotation"></a>
# **getPolygonAnnotation**
> \Aspose\PDF\Model\PolygonAnnotationResponse getPolygonAnnotation($name, $annotation_id, $storage, $folder)

Read document page polygon annotation by ID.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **annotation_id** | **string**| The annotation ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PolygonAnnotationResponse**](../Model/PolygonAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getpsinstoragetopdf"></a>
# **getPsInStorageToPdf**
> \SplFileObject getPsInStorageToPdf($src_path, $storage)

Convert PS file (located on storage) to PDF format and return resulting file in response.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.ps) |
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getsquareannotation"></a>
# **getSquareAnnotation**
> \Aspose\PDF\Model\SquareAnnotationResponse getSquareAnnotation($name, $annotation_id, $storage, $folder)

Read document page square annotation by ID.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **annotation_id** | **string**| The annotation ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\SquareAnnotationResponse**](../Model/SquareAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getsvginstoragetopdf"></a>
# **getSvgInStorageToPdf**
> \SplFileObject getSvgInStorageToPdf($src_path, $adjust_page_size, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $storage)

Convert SVG file (located on storage) to PDF format and return resulting file in response.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.svg) |
 **adjust_page_size** | **bool**| Adjust page size | [optional]
 **height** | **double**| Page height | [optional]
 **width** | **double**| Page width | [optional]
 **is_landscape** | **bool**| Is page landscaped | [optional]
 **margin_left** | **double**| Page margin left | [optional]
 **margin_bottom** | **double**| Page margin bottom | [optional]
 **margin_right** | **double**| Page margin right | [optional]
 **margin_top** | **double**| Page margin top | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="gettext"></a>
# **getText**
> \Aspose\PDF\Model\TextRectsResponse getText($name, $llx, $lly, $urx, $ury, $format, $regex, $split_rects, $folder, $storage)

Read document text.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **llx** | **double**|  |
 **lly** | **double**|  |
 **urx** | **double**|  |
 **ury** | **double**|  |
 **format** | **string[]**| List of formats for search. | [optional]
 **regex** | **string**| Formats are specified as a regular expression. | [optional]
 **split_rects** | **bool**| Split result fragments (default is true). | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\TextRectsResponse**](../Model/TextRectsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="gettextannotation"></a>
# **getTextAnnotation**
> \Aspose\PDF\Model\TextAnnotationResponse getTextAnnotation($name, $annotation_id, $storage, $folder)

Read document page text annotation by ID.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **annotation_id** | **string**| The annotation ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\TextAnnotationResponse**](../Model/TextAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getverifysignature"></a>
# **getVerifySignature**
> \Aspose\PDF\Model\SignatureVerifyResponse getVerifySignature($name, $sign_name, $storage, $folder)

Verify signature document.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **sign_name** | **string**| Sign name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\SignatureVerifyResponse**](../Model/SignatureVerifyResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getwebinstoragetopdf"></a>
# **getWebInStorageToPdf**
> \SplFileObject getWebInStorageToPdf($url, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $storage)

Convert web page to PDF format and return resulting file in response.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | **string**| Source url |
 **height** | **double**| Page height | [optional]
 **width** | **double**| Page width | [optional]
 **is_landscape** | **bool**| Is page landscaped | [optional]
 **margin_left** | **double**| Page margin left | [optional]
 **margin_bottom** | **double**| Page margin bottom | [optional]
 **margin_right** | **double**| Page margin right | [optional]
 **margin_top** | **double**| Page margin top | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getwordsperpage"></a>
# **getWordsPerPage**
> \Aspose\PDF\Model\WordCountResponse getWordsPerPage($name, $storage, $folder)

Get number of words per document page.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\WordCountResponse**](../Model/WordCountResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getxfapdfinstoragetoacroform"></a>
# **getXfaPdfInStorageToAcroForm**
> \SplFileObject getXfaPdfInStorageToAcroForm($name, $folder, $storage)

Converts PDF document which contatins XFA form (located on storage) to PDF with AcroForm and returns resulting file response content

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getxmlinstoragetopdf"></a>
# **getXmlInStorageToPdf**
> \SplFileObject getXmlInStorageToPdf($src_path, $xsl_file_path, $storage)

Convert XML file (located on storage) to PDF format and return resulting file in response.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.xml) |
 **xsl_file_path** | **string**| Full XSL source filename (ex. /folder1/folder2/template.xsl) | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getxpsinstoragetopdf"></a>
# **getXpsInStorageToPdf**
> \SplFileObject getXpsInStorageToPdf($src_path, $storage)

Convert XPS file (located on storage) to PDF format and return resulting file in response.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.xps) |
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="getxslfoinstoragetopdf"></a>
# **getXslFoInStorageToPdf**
> \SplFileObject getXslFoInStorageToPdf($src_path, $storage)

Convert XslFo file (located on storage) to PDF format and return resulting file in response.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.xslfo) |
 **storage** | **string**| The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="postappenddocument"></a>
# **postAppendDocument**
> \Aspose\PDF\Model\DocumentResponse postAppendDocument($name, $append_document, $append_file, $start_page, $end_page, $storage, $folder)

Append document to existing one.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The original document name. |
 **append_document** | [**\Aspose\PDF\Model\AppendDocument**](../Model/AppendDocument.md)| with the append document data. | [optional]
 **append_file** | **string**| Append file server path. | [optional]
 **start_page** | **int**| Appending start page. | [optional] [default to 0]
 **end_page** | **int**| Appending end page. | [optional] [default to 0]
 **storage** | **string**| The documents storage. | [optional]
 **folder** | **string**| The original document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentResponse**](../Model/DocumentResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="postcreatefield"></a>
# **postCreateField**
> \Aspose\PDF\Model\AsposeResponse postCreateField($name, $page, $field, $storage, $folder)

Create field.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page** | **int**| Document page number. |
 **field** | [**\Aspose\PDF\Model\Field**](../Model/Field.md)| with the field data. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="postdocumenttextreplace"></a>
# **postDocumentTextReplace**
> \Aspose\PDF\Model\TextReplaceResponse postDocumentTextReplace($name, $text_replace, $storage, $folder)

Document's replace text method.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **text_replace** | [**\Aspose\PDF\Model\TextReplaceListRequest**](../Model/TextReplaceListRequest.md)|  |
 **storage** | **string**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\PDF\Model\TextReplaceResponse**](../Model/TextReplaceResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="postinsertimage"></a>
# **postInsertImage**
> \Aspose\PDF\Model\AsposeResponse postInsertImage($name, $page_number, $llx, $lly, $urx, $ury, $image_file_path, $storage, $folder, $image)

Insert image to document page.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **llx** | **double**| Coordinate lower left X. |
 **lly** | **double**| Coordinate lower left Y. |
 **urx** | **double**| Coordinate upper right X. |
 **ury** | **double**| Coordinate upper right Y. |
 **image_file_path** | **string**| Path to image file if specified. Request content is used otherwise. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **image** | **\SplFileObject**| Image file. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="postmovepage"></a>
# **postMovePage**
> \Aspose\PDF\Model\AsposeResponse postMovePage($name, $page_number, $new_index, $storage, $folder)

Move page to new position.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **new_index** | **int**| The new page position/index. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="postoptimizedocument"></a>
# **postOptimizeDocument**
> \Aspose\PDF\Model\AsposeResponse postOptimizeDocument($name, $options, $storage, $folder)

Optimize document.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **options** | [**\Aspose\PDF\Model\OptimizeOptions**](../Model/OptimizeOptions.md)| The optimization options. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="postpagecircleannotations"></a>
# **postPageCircleAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageCircleAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page circle annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **annotations** | [**\Aspose\PDF\Model\CircleAnnotation[]**](../Model/CircleAnnotation.md)| The array of annotation. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="postpagefreetextannotations"></a>
# **postPageFreeTextAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageFreeTextAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page free text annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **annotations** | [**\Aspose\PDF\Model\FreeTextAnnotation[]**](../Model/FreeTextAnnotation.md)| The array of annotation. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="postpagelineannotations"></a>
# **postPageLineAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageLineAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page line annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **annotations** | [**\Aspose\PDF\Model\LineAnnotation[]**](../Model/LineAnnotation.md)| The array of annotation. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="postpagelinkannotations"></a>
# **postPageLinkAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageLinkAnnotations($name, $page_number, $links, $storage, $folder)

Add document page link annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **links** | [**\Aspose\PDF\Model\LinkAnnotation[]**](../Model/LinkAnnotation.md)| Array of link anotation. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="postpagepolylineannotations"></a>
# **postPagePolyLineAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPagePolyLineAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page polyline annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **annotations** | [**\Aspose\PDF\Model\PolyLineAnnotation[]**](../Model/PolyLineAnnotation.md)| The array of annotation. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="postpagepolygonannotations"></a>
# **postPagePolygonAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPagePolygonAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page polygon annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **annotations** | [**\Aspose\PDF\Model\PolygonAnnotation[]**](../Model/PolygonAnnotation.md)| The array of annotation. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="postpagesquareannotations"></a>
# **postPageSquareAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageSquareAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page square annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **annotations** | [**\Aspose\PDF\Model\SquareAnnotation[]**](../Model/SquareAnnotation.md)| The array of annotation. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="postpagetextannotations"></a>
# **postPageTextAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageTextAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page text annotations.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **annotations** | [**\Aspose\PDF\Model\TextAnnotation[]**](../Model/TextAnnotation.md)| The array of annotation. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="postpagetextreplace"></a>
# **postPageTextReplace**
> \Aspose\PDF\Model\TextReplaceResponse postPageTextReplace($name, $page_number, $text_replace_list_request, $storage, $folder)

Page's replace text method.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **page_number** | **int**|  |
 **text_replace_list_request** | [**\Aspose\PDF\Model\TextReplaceListRequest**](../Model/TextReplaceListRequest.md)|  |
 **storage** | **string**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\PDF\Model\TextReplaceResponse**](../Model/TextReplaceResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="postsigndocument"></a>
# **postSignDocument**
> \Aspose\PDF\Model\AsposeResponse postSignDocument($name, $signature, $storage, $folder)

Sign document.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **signature** | [**\Aspose\PDF\Model\Signature**](../Model/Signature.md)| Signature object containing signature data. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="postsignpage"></a>
# **postSignPage**
> \Aspose\PDF\Model\AsposeResponse postSignPage($name, $page_number, $signature, $storage, $folder)

Sign page.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **signature** | [**\Aspose\PDF\Model\Signature**](../Model/Signature.md)| Signature object containing signature data. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="postsplitdocument"></a>
# **postSplitDocument**
> \Aspose\PDF\Model\SplitResultResponse postSplitDocument($name, $format, $from, $to, $storage, $folder)

Split document to parts.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Document name. |
 **format** | **string**| Resulting documents format. | [optional]
 **from** | **int**| Start page if defined. | [optional]
 **to** | **int**| End page if defined. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\SplitResultResponse**](../Model/SplitResultResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putaddnewpage"></a>
# **putAddNewPage**
> \Aspose\PDF\Model\DocumentPagesResponse putAddNewPage($name, $storage, $folder)

Add new page to end of the document.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentPagesResponse**](../Model/DocumentPagesResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putaddtext"></a>
# **putAddText**
> \Aspose\PDF\Model\AsposeResponse putAddText($name, $page_number, $paragraph, $folder, $storage)

Add text to PDF document page.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| Number of page (starting from 1). |
 **paragraph** | [**\Aspose\PDF\Model\Paragraph**](../Model/Paragraph.md)| Paragraph data. | [optional]
 **folder** | **string**| Document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putcircleannotation"></a>
# **putCircleAnnotation**
> \Aspose\PDF\Model\CircleAnnotationResponse putCircleAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document circle annotation

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **annotation_id** | **string**| The annotation ID. |
 **annotation** | [**\Aspose\PDF\Model\CircleAnnotation**](../Model/CircleAnnotation.md)| Annotation. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\CircleAnnotationResponse**](../Model/CircleAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putcreate"></a>
# **putCreate**
> \Aspose\PDF\Model\AsposeResponse putCreate($path, $file, $version_id, $storage)

Upload a specific file

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext |
 **file** | **\SplFileObject**| File to upload |
 **version_id** | **string**| Source file&#39;s version | [optional]
 **storage** | **string**| User&#39;s storage name | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putcreatedocument"></a>
# **putCreateDocument**
> \Aspose\PDF\Model\DocumentResponse putCreateDocument($name, $storage, $folder)

Create empty document.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The new document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The new document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentResponse**](../Model/DocumentResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putepubinstoragetopdf"></a>
# **putEpubInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putEpubInStorageToPdf($name, $src_path, $storage, $dst_folder)

Convert EPUB file (located on storage) to PDF format and upload resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.epub) |
 **storage** | **string**| The document storage. | [optional]
 **dst_folder** | **string**| The destination document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putfieldsflatten"></a>
# **putFieldsFlatten**
> \Aspose\PDF\Model\AsposeResponse putFieldsFlatten($name, $storage, $folder)

Flatten form fields in document.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putfreetextannotation"></a>
# **putFreeTextAnnotation**
> \Aspose\PDF\Model\FreeTextAnnotationResponse putFreeTextAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document free text annotation

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **annotation_id** | **string**| The annotation ID. |
 **annotation** | [**\Aspose\PDF\Model\FreeTextAnnotation**](../Model/FreeTextAnnotation.md)| Annotation. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FreeTextAnnotationResponse**](../Model/FreeTextAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="puthtmlinstoragetopdf"></a>
# **putHtmlInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putHtmlInStorageToPdf($name, $src_path, $html_file_name, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $dst_folder, $storage)

Convert HTML file (located on storage) to PDF format and upload resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.zip) |
 **html_file_name** | **string**| Name of HTML file in ZIP. |
 **height** | **double**| Page height | [optional]
 **width** | **double**| Page width | [optional]
 **is_landscape** | **bool**| Is page landscaped | [optional]
 **margin_left** | **double**| Page margin left | [optional]
 **margin_bottom** | **double**| Page margin bottom | [optional]
 **margin_right** | **double**| Page margin right | [optional]
 **margin_top** | **double**| Page margin top | [optional]
 **dst_folder** | **string**| The destination document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putimageextractasgif"></a>
# **putImageExtractAsGif**
> \Aspose\PDF\Model\AsposeResponse putImageExtractAsGif($name, $image_id, $width, $height, $storage, $folder, $dest_folder)

Extract document image in GIF format to folder

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **image_id** | **string**| Image ID. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **dest_folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putimageextractasjpeg"></a>
# **putImageExtractAsJpeg**
> \Aspose\PDF\Model\AsposeResponse putImageExtractAsJpeg($name, $image_id, $width, $height, $storage, $folder, $dest_folder)

Extract document image in JPEG format to folder

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **image_id** | **string**| Image ID. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **dest_folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putimageextractaspng"></a>
# **putImageExtractAsPng**
> \Aspose\PDF\Model\AsposeResponse putImageExtractAsPng($name, $image_id, $width, $height, $storage, $folder, $dest_folder)

Extract document image in PNG format to folder

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **image_id** | **string**| Image ID. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **dest_folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putimageextractastiff"></a>
# **putImageExtractAsTiff**
> \Aspose\PDF\Model\AsposeResponse putImageExtractAsTiff($name, $image_id, $width, $height, $storage, $folder, $dest_folder)

Extract document image in TIFF format to folder

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **image_id** | **string**| Image ID. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **dest_folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putimageinstoragetopdf"></a>
# **putImageInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putImageInStorageToPdf($name, $image_templates, $dst_folder, $storage)

Convert image file (located on storage) to PDF format and upload resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **image_templates** | [**\Aspose\PDF\Model\ImageTemplatesRequest**](../Model/ImageTemplatesRequest.md)| Image templates |
 **dst_folder** | **string**| The destination document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putimagesextractasgif"></a>
# **putImagesExtractAsGif**
> \Aspose\PDF\Model\AsposeResponse putImagesExtractAsGif($name, $page_number, $width, $height, $storage, $folder, $dest_folder)

Extract document images in GIF format to folder.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **dest_folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putimagesextractasjpeg"></a>
# **putImagesExtractAsJpeg**
> \Aspose\PDF\Model\AsposeResponse putImagesExtractAsJpeg($name, $page_number, $width, $height, $storage, $folder, $dest_folder)

Extract document images in JPEG format to folder.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **storage** | **string**|  | [optional]
 **folder** | **string**| The document folder. | [optional]
 **dest_folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putimagesextractaspng"></a>
# **putImagesExtractAsPng**
> \Aspose\PDF\Model\AsposeResponse putImagesExtractAsPng($name, $page_number, $width, $height, $storage, $folder, $dest_folder)

Extract document images in PNG format to folder.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **dest_folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putimagesextractastiff"></a>
# **putImagesExtractAsTiff**
> \Aspose\PDF\Model\AsposeResponse putImagesExtractAsTiff($name, $page_number, $width, $height, $storage, $folder, $dest_folder)

Extract document images in TIFF format to folder.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **dest_folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putlatexinstoragetopdf"></a>
# **putLaTeXInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putLaTeXInStorageToPdf($name, $src_path, $dst_folder, $storage)

Convert LaTeX file (located on storage) to PDF format and upload resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.tex) |
 **dst_folder** | **string**| The destination document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putlineannotation"></a>
# **putLineAnnotation**
> \Aspose\PDF\Model\LineAnnotationResponse putLineAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document line annotation

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **annotation_id** | **string**| The annotation ID. |
 **annotation** | [**\Aspose\PDF\Model\LineAnnotation**](../Model/LineAnnotation.md)| Annotation. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\LineAnnotationResponse**](../Model/LineAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putlinkannotation"></a>
# **putLinkAnnotation**
> \Aspose\PDF\Model\LinkAnnotationResponse putLinkAnnotation($name, $link_id, $link, $storage, $folder)

Replace document page link annotations

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **link_id** | **string**| The link ID. |
 **link** | [**\Aspose\PDF\Model\LinkAnnotation**](../Model/LinkAnnotation.md)| Link anotation. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\LinkAnnotationResponse**](../Model/LinkAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putmergedocuments"></a>
# **putMergeDocuments**
> \SplFileObject putMergeDocuments($name, $merge_documents, $storage, $folder)

Merge a list of documents.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Resulting documen name. |
 **merge_documents** | [**\Aspose\PDF\Model\MergeDocuments**](../Model/MergeDocuments.md)| with a list of documents. | [optional]
 **storage** | **string**| Resulting document storage. | [optional]
 **folder** | **string**| Resulting document folder. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putmhtinstoragetopdf"></a>
# **putMhtInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putMhtInStorageToPdf($name, $src_path, $dst_folder, $storage)

Convert MHT file (located on storage) to PDF format and upload resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.mht) |
 **dst_folder** | **string**| The destination document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpageaddstamp"></a>
# **putPageAddStamp**
> \Aspose\PDF\Model\AsposeResponse putPageAddStamp($name, $page_number, $stamp, $storage, $folder)

Add page stamp.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **stamp** | [**\Aspose\PDF\Model\Stamp**](../Model/Stamp.md)| with data. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpageconverttobmp"></a>
# **putPageConvertToBmp**
> \Aspose\PDF\Model\AsposeResponse putPageConvertToBmp($name, $page_number, $out_path, $width, $height, $folder, $storage)

Convert document page to bmp image and upload resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **out_path** | **string**| The out path of result image. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpageconverttoemf"></a>
# **putPageConvertToEmf**
> \Aspose\PDF\Model\AsposeResponse putPageConvertToEmf($name, $page_number, $out_path, $width, $height, $folder, $storage)

Convert document page to emf image and upload resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **out_path** | **string**| The out path of result image. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpageconverttogif"></a>
# **putPageConvertToGif**
> \Aspose\PDF\Model\AsposeResponse putPageConvertToGif($name, $page_number, $out_path, $width, $height, $folder, $storage)

Convert document page to gif image and upload resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **out_path** | **string**| The out path of result image. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpageconverttojpeg"></a>
# **putPageConvertToJpeg**
> \Aspose\PDF\Model\AsposeResponse putPageConvertToJpeg($name, $page_number, $out_path, $width, $height, $folder, $storage)

Convert document page to Jpeg image and upload resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **out_path** | **string**| The out path of result image. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpageconverttopng"></a>
# **putPageConvertToPng**
> \Aspose\PDF\Model\AsposeResponse putPageConvertToPng($name, $page_number, $out_path, $width, $height, $folder, $storage)

Convert document page to png image and upload resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **out_path** | **string**| The out path of result image. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpageconverttotiff"></a>
# **putPageConvertToTiff**
> \Aspose\PDF\Model\AsposeResponse putPageConvertToTiff($name, $page_number, $out_path, $width, $height, $folder, $storage)

Convert document page to Tiff image and upload resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **out_path** | **string**| The out path of result image. |
 **width** | **int**| The converted image width. | [optional]
 **height** | **int**| The converted image height. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpclinstoragetopdf"></a>
# **putPclInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putPclInStorageToPdf($name, $src_path, $dst_folder, $storage)

Convert PCL file (located on storage) to PDF format and upload resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.pcl) |
 **dst_folder** | **string**| The destination document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinrequesttodoc"></a>
# **putPdfInRequestToDoc**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToDoc($out_path, $add_return_to_line_end, $format, $image_resolution_x, $image_resolution_y, $max_distance_between_text_lines, $mode, $recognize_bullets, $relative_horizontal_proximity, $storage, $file)

Converts PDF document (in request content) to DOC format and uploads resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.doc) |
 **add_return_to_line_end** | **bool**| Add return to line end. | [optional]
 **format** | **string**| Allows to specify .doc or .docx file format. | [optional]
 **image_resolution_x** | **int**| Image resolution X. | [optional]
 **image_resolution_y** | **int**| Image resolution Y. | [optional]
 **max_distance_between_text_lines** | **double**| Max distance between text lines. | [optional]
 **mode** | **string**| Allows to control how a PDF document is converted into a word processing document. | [optional]
 **recognize_bullets** | **bool**| Recognize bullets. | [optional]
 **relative_horizontal_proximity** | **double**| Relative horizontal proximity. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinrequesttoepub"></a>
# **putPdfInRequestToEpub**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToEpub($out_path, $content_recognition_mode, $storage, $file)

Converts PDF document (in request content) to EPUB format and uploads resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.epub) |
 **content_recognition_mode** | **string**| ?roperty tunes conversion for this or that desirable method of recognition of content. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinrequesttohtml"></a>
# **putPdfInRequestToHtml**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToHtml($out_path, $additional_margin_width_in_points, $compress_svg_graphics_if_any, $convert_marked_content_to_layers, $default_font_name, $document_type, $fixed_layout, $image_resolution, $minimal_line_width, $prevent_glyphs_grouping, $split_css_into_pages, $split_into_pages, $use_z_order, $antialiasing_processing, $css_class_names_prefix, $explicit_list_of_saved_pages, $font_encoding_strategy, $font_saving_mode, $html_markup_generation_mode, $letters_positioning_method, $pages_flow_type_depends_on_viewers_screen_size, $parts_embedding_mode, $raster_images_saving_mode, $remove_empty_areas_on_top_and_bottom, $save_shadowed_texts_as_transparent_texts, $save_transparent_texts, $special_folder_for_all_images, $special_folder_for_svg_images, $try_save_text_underlining_and_strikeouting_in_css, $storage, $file)

Converts PDF document (in request content) to Html format and uploads resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.html) |
 **additional_margin_width_in_points** | **int**| Defines width of margin that will be forcibly left around that output HTML-areas. | [optional]
 **compress_svg_graphics_if_any** | **bool**| The flag that indicates whether found SVG graphics(if any) will be compressed(zipped) into SVGZ format during saving. | [optional]
 **convert_marked_content_to_layers** | **bool**| If attribute ConvertMarkedContentToLayers set to true then an all elements inside a PDF marked content (layer) will be put into an HTML div with &quot;data-pdflayer&quot; attribute specifying a layer name. This layer name will be extracted from optional properties of PDF marked content. If this attribute is false (by default) then no any layers will be created from PDF marked content. | [optional]
 **default_font_name** | **string**| Specifies the name of an installed font which is used to substitute any document font that is not embedded and not installed in the system. If null then default substitution font is used. | [optional]
 **document_type** | **string**| Result document type. | [optional]
 **fixed_layout** | **bool**| The value indicating whether that HTML is created as fixed layout. | [optional]
 **image_resolution** | **int**| Resolution for image rendering. | [optional]
 **minimal_line_width** | **int**| This attribute sets minimal width of graphic path line. If thickness of line is less than 1px Adobe Acrobat rounds it to this value. So this attribute can be used to emulate this behavior for HTML browsers. | [optional]
 **prevent_glyphs_grouping** | **bool**| This attribute switch on the mode when text glyphs will not be grouped into words and strings This mode allows to keep maximum precision during positioning of glyphs on the page and it can be used for conversion documents with music notes or glyphs that should be placed separately each other. This parameter will be applied to document only when the value of FixedLayout attribute is true. | [optional]
 **split_css_into_pages** | **bool**| When multipage-mode selected(i.e &#39;SplitIntoPages&#39; is &#39;true&#39;), then this attribute defines whether should be created separate CSS-file for each result HTML page. | [optional]
 **split_into_pages** | **bool**| The flag that indicates whether each page of source document will be converted into it&#39;s own target HTML document, i.e whether result HTML will be splitted into several HTML-pages. | [optional]
 **use_z_order** | **bool**| If attribute UseZORder set to true, graphics and text are added to resultant HTML document accordingly Z-order in original PDF document. If this attribute is false all graphics is put as single layer which may cause some unnecessary effects for overlapped objects. | [optional]
 **antialiasing_processing** | **string**| The parameter defines required antialiasing measures during conversion of compound background images from PDF to HTML. | [optional]
 **css_class_names_prefix** | **string**| When PDFtoHTML converter generates result CSSs, CSS class names (something like &quot;.stl_01 {}&quot; ... &quot;.stl_NN {}) are generated and used in result CSS. This property allows forcibly set class name prefix. | [optional]
 **explicit_list_of_saved_pages** | **int[]**| With this property You can explicitely define what pages of document should be converted. Pages in this list must have 1-based numbers. I.e. valid numbers of pages must be taken from range (1...[NumberOfPagesInConvertedDocument]) Order of appearing of pages in this list does not affect their order in result HTML page(s) - in result pages allways will go in order in which they are present in source PDF. | [optional]
 **font_encoding_strategy** | **string**| Defines encoding special rule to tune PDF decoding for current document. | [optional]
 **font_saving_mode** | **string**| Defines font saving mode that will be used during saving of PDF to desirable format. | [optional]
 **html_markup_generation_mode** | **string**| Sometimes specific reqirments to generation of HTML markup are present. This parameter defines HTML preparing modes that can be used during conversion of PDF to HTML to match such specific requirments. | [optional]
 **letters_positioning_method** | **string**| The mode of positioning of letters in words in result HTML. | [optional]
 **pages_flow_type_depends_on_viewers_screen_size** | **bool**| If attribute &#39;SplitOnPages&#x3D;false&#39;, than whole HTML representing all input PDF pages will be put into one big result HTML file. This flag defines whether result HTML will be generated in such way that flow of areas that represent PDF pages in result HTML will depend on screen resolution of viewer. | [optional]
 **parts_embedding_mode** | **string**| It defines whether referenced files (HTML, Fonts,Images, CSSes) will be embedded into main HTML file or will be generated as apart binary entities. | [optional]
 **raster_images_saving_mode** | **string**| Converted PDF can contain raster images This parameter defines how they should be handled during conversion of PDF to HTML. | [optional]
 **remove_empty_areas_on_top_and_bottom** | **bool**| Defines whether in created HTML will be removed top and bottom empty area without any content (if any). | [optional]
 **save_shadowed_texts_as_transparent_texts** | **bool**| Pdf can contain texts that are shadowed by another elements (f.e. by images) but can be selected to clipboard in Acrobat Reader (usually it happen when document contains images and OCRed texts extracted from it). This settings tells to converter whether we need save such texts as transparent selectable texts in result HTML to mimic behaviour of Acrobat Reader (othervise such texts are usually saved as hidden, not available for copying to clipboard). | [optional]
 **save_transparent_texts** | **bool**| Pdf can contain transparent texts that can be selected to clipboard (usually it happen when document contains images and OCRed texts extracted from it). This settings tells to converter whether we need save such texts as transparent selectable texts in result HTML. | [optional]
 **special_folder_for_all_images** | **string**| The path to directory to which must be saved any images if they are encountered during saving of document as HTML. If parameter is empty or null then image files(if any) wil be saved together with other files linked to HTML It does not affect anything if CustomImageSavingStrategy property was successfully used to process relevant image file. | [optional]
 **special_folder_for_svg_images** | **string**| The path to directory to which must be saved only SVG-images if they are encountered during saving of document as HTML. If parameter is empty or null then SVG files(if any) wil be saved together with other image-files (near to output file) or in special folder for images (if it specified in SpecialImagesFolderIfAny option). It does not affect anything if CustomImageSavingStrategy property was successfully used to process relevant image file. | [optional]
 **try_save_text_underlining_and_strikeouting_in_css** | **bool**| PDF itself does not contain underlining markers for texts. It emulated with line situated under text. This option allows converter try guess that this or that line is a text&#39;s underlining and put this info into CSS instead of drawing of underlining graphically. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinrequesttolatex"></a>
# **putPdfInRequestToLaTeX**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToLaTeX($out_path, $pages_count, $storage, $file)

Converts PDF document (in request content) to LaTeX format and uploads resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.tex) |
 **pages_count** | **int**| Pages count. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinrequesttomobixml"></a>
# **putPdfInRequestToMobiXml**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToMobiXml($out_path, $storage, $file)

Converts PDF document (in request content) to MOBIXML format and uploads resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.mobixml) |
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinrequesttopdfa"></a>
# **putPdfInRequestToPdfA**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToPdfA($out_path, $type, $storage, $file)

Converts PDF document (in request content) to PdfA format and uploads resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.pdf) |
 **type** | **string**| Type of PdfA format. |
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinrequesttopptx"></a>
# **putPdfInRequestToPptx**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToPptx($out_path, $separate_images, $slides_as_images, $storage, $file)

Converts PDF document (in request content) to PPTX format and uploads resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.pptx) |
 **separate_images** | **bool**| Separate images. | [optional]
 **slides_as_images** | **bool**| Slides as images. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinrequesttosvg"></a>
# **putPdfInRequestToSvg**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToSvg($out_path, $storage, $file)

Converts PDF document (in request content) to SVG format and uploads resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.svg) |
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinrequesttotiff"></a>
# **putPdfInRequestToTiff**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToTiff($out_path, $brightness, $compression, $color_depth, $left_margin, $right_margin, $top_margin, $bottom_margin, $orientation, $skip_blank_pages, $width, $height, $x_resolution, $y_resolution, $page_index, $page_count, $storage, $file)

Converts PDF document (in request content) to TIFF format and uploads resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.tiff) |
 **brightness** | **double**| Image brightness. | [optional]
 **compression** | **string**| Tiff compression. Possible values are: LZW, CCITT4, CCITT3, RLE, None. | [optional]
 **color_depth** | **string**| Image color depth. Possible valuse are: Default, Format8bpp, Format4bpp, Format1bpp. | [optional]
 **left_margin** | **int**| Left image margin. | [optional]
 **right_margin** | **int**| Right image margin. | [optional]
 **top_margin** | **int**| Top image margin. | [optional]
 **bottom_margin** | **int**| Bottom image margin. | [optional]
 **orientation** | **string**| Image orientation. Possible values are: None, Landscape, Portait. | [optional]
 **skip_blank_pages** | **bool**| Skip blank pages flag. | [optional]
 **width** | **int**| Image width. | [optional]
 **height** | **int**| Image height. | [optional]
 **x_resolution** | **int**| Horizontal resolution. | [optional]
 **y_resolution** | **int**| Vertical resolution. | [optional]
 **page_index** | **int**| Start page to export. | [optional]
 **page_count** | **int**| Number of pages to export. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinrequesttoxls"></a>
# **putPdfInRequestToXls**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToXls($out_path, $insert_blank_column_at_first, $minimize_the_number_of_worksheets, $scale_factor, $uniform_worksheets, $storage, $file)

Converts PDF document (in request content) to XLS format and uploads resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.xls) |
 **insert_blank_column_at_first** | **bool**| Insert blank column at first | [optional]
 **minimize_the_number_of_worksheets** | **bool**| Minimize the number of worksheets | [optional]
 **scale_factor** | **double**| Scale factor | [optional]
 **uniform_worksheets** | **bool**| Uniform worksheets | [optional]
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinrequesttoxml"></a>
# **putPdfInRequestToXml**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToXml($out_path, $storage, $file)

Converts PDF document (in request content) to XML format and uploads resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.xml) |
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinrequesttoxps"></a>
# **putPdfInRequestToXps**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToXps($out_path, $storage, $file)

Converts PDF document (in request content) to XPS format and uploads resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.xps) |
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinstoragetodoc"></a>
# **putPdfInStorageToDoc**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToDoc($name, $out_path, $add_return_to_line_end, $format, $image_resolution_x, $image_resolution_y, $max_distance_between_text_lines, $mode, $recognize_bullets, $relative_horizontal_proximity, $folder, $storage)

Converts PDF document (located on storage) to DOC format and uploads resulting file to storage

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.doc) |
 **add_return_to_line_end** | **bool**| Add return to line end. | [optional]
 **format** | **string**| Allows to specify .doc or .docx file format. | [optional]
 **image_resolution_x** | **int**| Image resolution X. | [optional]
 **image_resolution_y** | **int**| Image resolution Y. | [optional]
 **max_distance_between_text_lines** | **double**| Max distance between text lines. | [optional]
 **mode** | **string**| Allows to control how a PDF document is converted into a word processing document. | [optional]
 **recognize_bullets** | **bool**| Recognize bullets. | [optional]
 **relative_horizontal_proximity** | **double**| Relative horizontal proximity. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinstoragetoepub"></a>
# **putPdfInStorageToEpub**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToEpub($name, $out_path, $content_recognition_mode, $folder, $storage)

Converts PDF document (located on storage) to EPUB format and uploads resulting file to storage

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.epub) |
 **content_recognition_mode** | **string**| ?roperty tunes conversion for this or that desirable method of recognition of content. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinstoragetohtml"></a>
# **putPdfInStorageToHtml**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToHtml($name, $out_path, $additional_margin_width_in_points, $compress_svg_graphics_if_any, $convert_marked_content_to_layers, $default_font_name, $document_type, $fixed_layout, $image_resolution, $minimal_line_width, $prevent_glyphs_grouping, $split_css_into_pages, $split_into_pages, $use_z_order, $antialiasing_processing, $css_class_names_prefix, $explicit_list_of_saved_pages, $font_encoding_strategy, $font_saving_mode, $html_markup_generation_mode, $letters_positioning_method, $pages_flow_type_depends_on_viewers_screen_size, $parts_embedding_mode, $raster_images_saving_mode, $remove_empty_areas_on_top_and_bottom, $save_shadowed_texts_as_transparent_texts, $save_transparent_texts, $special_folder_for_all_images, $special_folder_for_svg_images, $try_save_text_underlining_and_strikeouting_in_css, $folder, $storage)

Converts PDF document (located on storage) to Html format and uploads resulting file to storage

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.html) |
 **additional_margin_width_in_points** | **int**| Defines width of margin that will be forcibly left around that output HTML-areas. | [optional]
 **compress_svg_graphics_if_any** | **bool**| The flag that indicates whether found SVG graphics(if any) will be compressed(zipped) into SVGZ format during saving. | [optional]
 **convert_marked_content_to_layers** | **bool**| If attribute ConvertMarkedContentToLayers set to true then an all elements inside a PDF marked content (layer) will be put into an HTML div with &quot;data-pdflayer&quot; attribute specifying a layer name. This layer name will be extracted from optional properties of PDF marked content. If this attribute is false (by default) then no any layers will be created from PDF marked content. | [optional]
 **default_font_name** | **string**| Specifies the name of an installed font which is used to substitute any document font that is not embedded and not installed in the system. If null then default substitution font is used. | [optional]
 **document_type** | **string**| Result document type. | [optional]
 **fixed_layout** | **bool**| The value indicating whether that HTML is created as fixed layout. | [optional]
 **image_resolution** | **int**| Resolution for image rendering. | [optional]
 **minimal_line_width** | **int**| This attribute sets minimal width of graphic path line. If thickness of line is less than 1px Adobe Acrobat rounds it to this value. So this attribute can be used to emulate this behavior for HTML browsers. | [optional]
 **prevent_glyphs_grouping** | **bool**| This attribute switch on the mode when text glyphs will not be grouped into words and strings This mode allows to keep maximum precision during positioning of glyphs on the page and it can be used for conversion documents with music notes or glyphs that should be placed separately each other. This parameter will be applied to document only when the value of FixedLayout attribute is true. | [optional]
 **split_css_into_pages** | **bool**| When multipage-mode selected(i.e &#39;SplitIntoPages&#39; is &#39;true&#39;), then this attribute defines whether should be created separate CSS-file for each result HTML page. | [optional]
 **split_into_pages** | **bool**| The flag that indicates whether each page of source document will be converted into it&#39;s own target HTML document, i.e whether result HTML will be splitted into several HTML-pages. | [optional]
 **use_z_order** | **bool**| If attribute UseZORder set to true, graphics and text are added to resultant HTML document accordingly Z-order in original PDF document. If this attribute is false all graphics is put as single layer which may cause some unnecessary effects for overlapped objects. | [optional]
 **antialiasing_processing** | **string**| The parameter defines required antialiasing measures during conversion of compound background images from PDF to HTML. | [optional]
 **css_class_names_prefix** | **string**| When PDFtoHTML converter generates result CSSs, CSS class names (something like &quot;.stl_01 {}&quot; ... &quot;.stl_NN {}) are generated and used in result CSS. This property allows forcibly set class name prefix. | [optional]
 **explicit_list_of_saved_pages** | **int[]**| With this property You can explicitely define what pages of document should be converted. Pages in this list must have 1-based numbers. I.e. valid numbers of pages must be taken from range (1...[NumberOfPagesInConvertedDocument]) Order of appearing of pages in this list does not affect their order in result HTML page(s) - in result pages allways will go in order in which they are present in source PDF. | [optional]
 **font_encoding_strategy** | **string**| Defines encoding special rule to tune PDF decoding for current document. | [optional]
 **font_saving_mode** | **string**| Defines font saving mode that will be used during saving of PDF to desirable format. | [optional]
 **html_markup_generation_mode** | **string**| Sometimes specific reqirments to generation of HTML markup are present. This parameter defines HTML preparing modes that can be used during conversion of PDF to HTML to match such specific requirments. | [optional]
 **letters_positioning_method** | **string**| The mode of positioning of letters in words in result HTML. | [optional]
 **pages_flow_type_depends_on_viewers_screen_size** | **bool**| If attribute &#39;SplitOnPages&#x3D;false&#39;, than whole HTML representing all input PDF pages will be put into one big result HTML file. This flag defines whether result HTML will be generated in such way that flow of areas that represent PDF pages in result HTML will depend on screen resolution of viewer. | [optional]
 **parts_embedding_mode** | **string**| It defines whether referenced files (HTML, Fonts,Images, CSSes) will be embedded into main HTML file or will be generated as apart binary entities. | [optional]
 **raster_images_saving_mode** | **string**| Converted PDF can contain raster images This parameter defines how they should be handled during conversion of PDF to HTML. | [optional]
 **remove_empty_areas_on_top_and_bottom** | **bool**| Defines whether in created HTML will be removed top and bottom empty area without any content (if any). | [optional]
 **save_shadowed_texts_as_transparent_texts** | **bool**| Pdf can contain texts that are shadowed by another elements (f.e. by images) but can be selected to clipboard in Acrobat Reader (usually it happen when document contains images and OCRed texts extracted from it). This settings tells to converter whether we need save such texts as transparent selectable texts in result HTML to mimic behaviour of Acrobat Reader (othervise such texts are usually saved as hidden, not available for copying to clipboard). | [optional]
 **save_transparent_texts** | **bool**| Pdf can contain transparent texts that can be selected to clipboard (usually it happen when document contains images and OCRed texts extracted from it). This settings tells to converter whether we need save such texts as transparent selectable texts in result HTML. | [optional]
 **special_folder_for_all_images** | **string**| The path to directory to which must be saved any images if they are encountered during saving of document as HTML. If parameter is empty or null then image files(if any) wil be saved together with other files linked to HTML It does not affect anything if CustomImageSavingStrategy property was successfully used to process relevant image file. | [optional]
 **special_folder_for_svg_images** | **string**| The path to directory to which must be saved only SVG-images if they are encountered during saving of document as HTML. If parameter is empty or null then SVG files(if any) wil be saved together with other image-files (near to output file) or in special folder for images (if it specified in SpecialImagesFolderIfAny option). It does not affect anything if CustomImageSavingStrategy property was successfully used to process relevant image file. | [optional]
 **try_save_text_underlining_and_strikeouting_in_css** | **bool**| PDF itself does not contain underlining markers for texts. It emulated with line situated under text. This option allows converter try guess that this or that line is a text&#39;s underlining and put this info into CSS instead of drawing of underlining graphically. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinstoragetolatex"></a>
# **putPdfInStorageToLaTeX**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToLaTeX($name, $out_path, $pages_count, $folder, $storage)

Converts PDF document (located on storage) to LaTeX format and uploads resulting file to storage

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.tex) |
 **pages_count** | **int**| Pages count. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinstoragetomobixml"></a>
# **putPdfInStorageToMobiXml**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToMobiXml($name, $out_path, $folder, $storage)

Converts PDF document (located on storage) to MOBIXML format and uploads resulting file to storage

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.mobixml) |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinstoragetopdfa"></a>
# **putPdfInStorageToPdfA**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToPdfA($name, $out_path, $type, $folder, $storage)

Converts PDF document (located on storage) to PdfA format and uploads resulting file to storage

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.pdf) |
 **type** | **string**| Type of PdfA format. |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinstoragetopptx"></a>
# **putPdfInStorageToPptx**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToPptx($name, $out_path, $separate_images, $slides_as_images, $folder, $storage)

Converts PDF document (located on storage) to PPTX format and uploads resulting file to storage

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.pptx) |
 **separate_images** | **bool**| Separate images. | [optional]
 **slides_as_images** | **bool**| Slides as images. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinstoragetosvg"></a>
# **putPdfInStorageToSvg**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToSvg($name, $out_path, $folder, $storage)

Converts PDF document (located on storage) to SVG format and uploads resulting file to storage

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.svg) |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinstoragetotiff"></a>
# **putPdfInStorageToTiff**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToTiff($name, $out_path, $brightness, $compression, $color_depth, $left_margin, $right_margin, $top_margin, $bottom_margin, $orientation, $skip_blank_pages, $width, $height, $x_resolution, $y_resolution, $page_index, $page_count, $folder, $storage)

Converts PDF document (located on storage) to TIFF format and uploads resulting file to storage

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.tiff) |
 **brightness** | **double**| Image brightness. | [optional]
 **compression** | **string**| Tiff compression. Possible values are: LZW, CCITT4, CCITT3, RLE, None. | [optional]
 **color_depth** | **string**| Image color depth. Possible valuse are: Default, Format8bpp, Format4bpp, Format1bpp. | [optional]
 **left_margin** | **int**| Left image margin. | [optional]
 **right_margin** | **int**| Right image margin. | [optional]
 **top_margin** | **int**| Top image margin. | [optional]
 **bottom_margin** | **int**| Bottom image margin. | [optional]
 **orientation** | **string**| Image orientation. Possible values are: None, Landscape, Portait. | [optional]
 **skip_blank_pages** | **bool**| Skip blank pages flag. | [optional]
 **width** | **int**| Image width. | [optional]
 **height** | **int**| Image height. | [optional]
 **x_resolution** | **int**| Horizontal resolution. | [optional]
 **y_resolution** | **int**| Vertical resolution. | [optional]
 **page_index** | **int**| Start page to export. | [optional]
 **page_count** | **int**| Number of pages to export. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinstoragetoxls"></a>
# **putPdfInStorageToXls**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToXls($name, $out_path, $insert_blank_column_at_first, $minimize_the_number_of_worksheets, $scale_factor, $uniform_worksheets, $folder, $storage)

Converts PDF document (located on storage) to XLS format and uploads resulting file to storage

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.xls) |
 **insert_blank_column_at_first** | **bool**| Insert blank column at first | [optional]
 **minimize_the_number_of_worksheets** | **bool**| Minimize the number of worksheets | [optional]
 **scale_factor** | **double**| Scale factor | [optional]
 **uniform_worksheets** | **bool**| Uniform worksheets | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinstoragetoxml"></a>
# **putPdfInStorageToXml**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToXml($name, $out_path, $folder, $storage)

Converts PDF document (located on storage) to XML format and uploads resulting file to storage

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.xml) |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpdfinstoragetoxps"></a>
# **putPdfInStorageToXps**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToXps($name, $out_path, $folder, $storage)

Converts PDF document (located on storage) to XPS format and uploads resulting file to storage

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.xps) |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpolylineannotation"></a>
# **putPolyLineAnnotation**
> \Aspose\PDF\Model\PolyLineAnnotationResponse putPolyLineAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document polyline annotation

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **annotation_id** | **string**| The annotation ID. |
 **annotation** | [**\Aspose\PDF\Model\PolyLineAnnotation**](../Model/PolyLineAnnotation.md)| Annotation. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PolyLineAnnotationResponse**](../Model/PolyLineAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpolygonannotation"></a>
# **putPolygonAnnotation**
> \Aspose\PDF\Model\PolygonAnnotationResponse putPolygonAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document polygon annotation

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **annotation_id** | **string**| The annotation ID. |
 **annotation** | [**\Aspose\PDF\Model\PolygonAnnotation**](../Model/PolygonAnnotation.md)| Annotation. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PolygonAnnotationResponse**](../Model/PolygonAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putprivileges"></a>
# **putPrivileges**
> \Aspose\PDF\Model\AsposeResponse putPrivileges($name, $privileges, $storage, $folder)

Update privilege document.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **privileges** | [**\Aspose\PDF\Model\DocumentPrivilege**](../Model/DocumentPrivilege.md)| Document privileges. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putpsinstoragetopdf"></a>
# **putPsInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putPsInStorageToPdf($name, $src_path, $dst_folder, $storage)

Convert PS file (located on storage) to PDF format and upload resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.ps) |
 **dst_folder** | **string**| The destination document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putreplaceimage"></a>
# **putReplaceImage**
> \Aspose\PDF\Model\ImageResponse putReplaceImage($name, $image_id, $image_file_path, $storage, $folder, $image)

Replace document image.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **image_id** | **string**| The image ID. |
 **image_file_path** | **string**| Path to image file if specified. Request content is used otherwise. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **image** | **\SplFileObject**| Image file. | [optional]

### Return type

[**\Aspose\PDF\Model\ImageResponse**](../Model/ImageResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putsearchabledocument"></a>
# **putSearchableDocument**
> \Aspose\PDF\Model\AsposeResponse putSearchableDocument($name, $storage, $folder, $lang)

Create searchable PDF document. Generate OCR layer for images in input PDF document.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **lang** | **string**| language for OCR engine. Possible values: eng, ara, bel, ben, bul, ces, dan, deu, ell, fin, fra, heb, hin, ind, isl, ita, jpn, kor, nld, nor, pol, por, ron, rus, spa, swe, tha, tur, ukr, vie, chi_sim, chi_tra or thier combination e.g. eng,rus | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putsetproperty"></a>
# **putSetProperty**
> \Aspose\PDF\Model\DocumentPropertyResponse putSetProperty($name, $property_name, $value, $storage, $folder)

Add/update document property.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **property_name** | **string**|  |
 **value** | **string**|  |
 **storage** | **string**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentPropertyResponse**](../Model/DocumentPropertyResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putsquareannotation"></a>
# **putSquareAnnotation**
> \Aspose\PDF\Model\SquareAnnotationResponse putSquareAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document square annotation

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **annotation_id** | **string**| The annotation ID. |
 **annotation** | [**\Aspose\PDF\Model\SquareAnnotation**](../Model/SquareAnnotation.md)| Annotation. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\SquareAnnotationResponse**](../Model/SquareAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putsvginstoragetopdf"></a>
# **putSvgInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putSvgInStorageToPdf($name, $src_path, $adjust_page_size, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $dst_folder, $storage)

Convert SVG file (located on storage) to PDF format and upload resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.svg) |
 **adjust_page_size** | **bool**| Adjust page size | [optional]
 **height** | **double**| Page height | [optional]
 **width** | **double**| Page width | [optional]
 **is_landscape** | **bool**| Is page landscaped | [optional]
 **margin_left** | **double**| Page margin left | [optional]
 **margin_bottom** | **double**| Page margin bottom | [optional]
 **margin_right** | **double**| Page margin right | [optional]
 **margin_top** | **double**| Page margin top | [optional]
 **dst_folder** | **string**| The destination document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="puttextannotation"></a>
# **putTextAnnotation**
> \Aspose\PDF\Model\TextAnnotationResponse putTextAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document text annotation

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **annotation_id** | **string**| The annotation ID. |
 **annotation** | [**\Aspose\PDF\Model\TextAnnotation**](../Model/TextAnnotation.md)| Annotation. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\TextAnnotationResponse**](../Model/TextAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putupdatefield"></a>
# **putUpdateField**
> \Aspose\PDF\Model\FieldResponse putUpdateField($name, $field_name, $field, $storage, $folder)

Update field.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **field_name** | **string**| The name of a field to be updated. |
 **field** | [**\Aspose\PDF\Model\Field**](../Model/Field.md)| with the field data. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FieldResponse**](../Model/FieldResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putupdatefields"></a>
# **putUpdateFields**
> \Aspose\PDF\Model\FieldsResponse putUpdateFields($name, $fields, $storage, $folder)

Update fields.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **fields** | [**\Aspose\PDF\Model\Fields**](../Model/Fields.md)| with the fields data. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FieldsResponse**](../Model/FieldsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putwebinstoragetopdf"></a>
# **putWebInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putWebInStorageToPdf($name, $url, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $dst_folder, $storage)

Convert web page to PDF format and upload resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **url** | **string**| Source url |
 **height** | **double**| Page height | [optional]
 **width** | **double**| Page width | [optional]
 **is_landscape** | **bool**| Is page landscaped | [optional]
 **margin_left** | **double**| Page margin left | [optional]
 **margin_bottom** | **double**| Page margin bottom | [optional]
 **margin_right** | **double**| Page margin right | [optional]
 **margin_top** | **double**| Page margin top | [optional]
 **dst_folder** | **string**| The destination document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putxfapdfinrequesttoacroform"></a>
# **putXfaPdfInRequestToAcroForm**
> \Aspose\PDF\Model\AsposeResponse putXfaPdfInRequestToAcroForm($out_path, $storage, $file)

Converts PDF document which contatins XFA form (in request content) to PDF with AcroForm and uploads resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.pdf) |
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putxfapdfinstoragetoacroform"></a>
# **putXfaPdfInStorageToAcroForm**
> \Aspose\PDF\Model\AsposeResponse putXfaPdfInStorageToAcroForm($name, $out_path, $folder, $storage)

Converts PDF document which contatins XFA form (located on storage) to PDF with AcroForm and uploads resulting file to storage

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.pdf) |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putxmlinstoragetopdf"></a>
# **putXmlInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putXmlInStorageToPdf($name, $src_path, $xsl_file_path, $dst_folder, $storage)

Convert XML file (located on storage) to PDF format and upload resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.xml) |
 **xsl_file_path** | **string**| Full XSL source filename (ex. /folder1/folder2/template.xsl) | [optional]
 **dst_folder** | **string**| The destination document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putxpsinstoragetopdf"></a>
# **putXpsInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putXpsInStorageToPdf($name, $src_path, $dst_folder, $storage)

Convert XPS file (located on storage) to PDF format and upload resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.xps) |
 **dst_folder** | **string**| The destination document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

<a name="putxslfoinstoragetopdf"></a>
# **putXslFoInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putXslFoInStorageToPdf($name, $src_path, $dst_folder, $storage)

Convert XslFo file (located on storage) to PDF format and upload resulting file to storage.

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.xpsfo) |
 **dst_folder** | **string**| The destination document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

