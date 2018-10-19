# Aspose\PDF\PdfApi

All URIs are relative to *https://api.aspose.cloud/v2.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAnnotation**](PdfApi.md#deleteAnnotation) | **DELETE** /pdf/{name}/annotations/{annotationId} | Delete document annotation by ID
[**deleteDocumentAnnotations**](PdfApi.md#deleteDocumentAnnotations) | **DELETE** /pdf/{name}/annotations | Delete all annotations from the document
[**deleteDocumentLinkAnnotations**](PdfApi.md#deleteDocumentLinkAnnotations) | **DELETE** /pdf/{name}/links | Delete all link annotations from the document
[**deleteField**](PdfApi.md#deleteField) | **DELETE** /pdf/{name}/fields/{fieldName} | Delete document field by name.
[**deleteImage**](PdfApi.md#deleteImage) | **DELETE** /pdf/{name}/images/{imageId} | Delete image from document page.
[**deleteLinkAnnotation**](PdfApi.md#deleteLinkAnnotation) | **DELETE** /pdf/{name}/links/{linkId} | Delete document page link annotation by ID
[**deletePage**](PdfApi.md#deletePage) | **DELETE** /pdf/{name}/pages/{pageNumber} | Delete document page by its number.
[**deletePageAnnotations**](PdfApi.md#deletePageAnnotations) | **DELETE** /pdf/{name}/pages/{pageNumber}/annotations | Delete all annotations from the page
[**deletePageLinkAnnotations**](PdfApi.md#deletePageLinkAnnotations) | **DELETE** /pdf/{name}/pages/{pageNumber}/links | Delete all link annotations from the page
[**deleteProperties**](PdfApi.md#deleteProperties) | **DELETE** /pdf/{name}/documentproperties | Delete custom document properties.
[**deleteProperty**](PdfApi.md#deleteProperty) | **DELETE** /pdf/{name}/documentproperties/{propertyName} | Delete document property.
[**getDocument**](PdfApi.md#getDocument) | **GET** /pdf/{name} | Read common document info.
[**getDocumentAnnotations**](PdfApi.md#getDocumentAnnotations) | **GET** /pdf/{name}/annotations | Read documant page annotations. Returns only FreeTextAnnotations, TextAnnotations, other annotations will implemented next releases.
[**getDocumentAttachmentByIndex**](PdfApi.md#getDocumentAttachmentByIndex) | **GET** /pdf/{name}/attachments/{attachmentIndex} | Read document attachment info by its index.
[**getDocumentAttachments**](PdfApi.md#getDocumentAttachments) | **GET** /pdf/{name}/attachments | Read document attachments info.
[**getDocumentBookmarks**](PdfApi.md#getDocumentBookmarks) | **GET** /pdf/{name}/bookmarks | Read document bookmark/bookmarks (including children).
[**getDocumentFreeTextAnnotations**](PdfApi.md#getDocumentFreeTextAnnotations) | **GET** /pdf/{name}/annotations/freetext | Read document free text annotations.
[**getDocumentProperties**](PdfApi.md#getDocumentProperties) | **GET** /pdf/{name}/documentproperties | Read document properties.
[**getDocumentProperty**](PdfApi.md#getDocumentProperty) | **GET** /pdf/{name}/documentproperties/{propertyName} | Read document property by name.
[**getDocumentTextAnnotations**](PdfApi.md#getDocumentTextAnnotations) | **GET** /pdf/{name}/annotations/text | Read document text annotations.
[**getDownload**](PdfApi.md#getDownload) | **GET** /storage/file | Download a specific file
[**getDownloadDocumentAttachmentByIndex**](PdfApi.md#getDownloadDocumentAttachmentByIndex) | **GET** /pdf/{name}/attachments/{attachmentIndex}/download | Download document attachment content by its index.
[**getEpubInStorageToPdf**](PdfApi.md#getEpubInStorageToPdf) | **GET** /pdf/create/epub | Convert EPUB file (located on storage) to PDF format and return resulting file in response.
[**getField**](PdfApi.md#getField) | **GET** /pdf/{name}/fields/{fieldName} | Get document field by name.
[**getFields**](PdfApi.md#getFields) | **GET** /pdf/{name}/fields | Get document fields.
[**getFreeTextAnnotation**](PdfApi.md#getFreeTextAnnotation) | **GET** /pdf/{name}/annotations/freetext/{annotationId} | Read document page free text annotation by ID.
[**getHtmlInStorageToPdf**](PdfApi.md#getHtmlInStorageToPdf) | **GET** /pdf/create/html | Convert HTML file (located on storage) to PDF format and return resulting file in response.
[**getImage**](PdfApi.md#getImage) | **GET** /pdf/{name}/images/{imageId} | Read document image by ID.
[**getImageExtractAsGif**](PdfApi.md#getImageExtractAsGif) | **GET** /pdf/{name}/images/{imageId}/extract/gif | Extract document image in GIF format
[**getImageExtractAsJpeg**](PdfApi.md#getImageExtractAsJpeg) | **GET** /pdf/{name}/images/{imageId}/extract/jpeg | Extract document image in JPEG format
[**getImageExtractAsPng**](PdfApi.md#getImageExtractAsPng) | **GET** /pdf/{name}/images/{imageId}/extract/png | Extract document image in PNG format
[**getImageExtractAsTiff**](PdfApi.md#getImageExtractAsTiff) | **GET** /pdf/{name}/images/{imageId}/extract/tiff | Extract document image in TIFF format
[**getImages**](PdfApi.md#getImages) | **GET** /pdf/{name}/pages/{pageNumber}/images | Read document images.
[**getLaTeXInStorageToPdf**](PdfApi.md#getLaTeXInStorageToPdf) | **GET** /pdf/create/latex | Convert LaTeX file (located on storage) to PDF format and return resulting file in response.
[**getLinkAnnotation**](PdfApi.md#getLinkAnnotation) | **GET** /pdf/{name}/links/{linkId} | Read document link annotation by ID.
[**getMhtInStorageToPdf**](PdfApi.md#getMhtInStorageToPdf) | **GET** /pdf/create/mht | Convert MHT file (located on storage) to PDF format and return resulting file in response.
[**getPage**](PdfApi.md#getPage) | **GET** /pdf/{name}/pages/{pageNumber} | Read document page info.
[**getPageAnnotations**](PdfApi.md#getPageAnnotations) | **GET** /pdf/{name}/pages/{pageNumber}/annotations | Read documant page annotations. Returns only FreeTextAnnotations, TextAnnotations, other annotations will implemented next releases.
[**getPageConvertToBmp**](PdfApi.md#getPageConvertToBmp) | **GET** /pdf/{name}/pages/{pageNumber}/convert/bmp | Convert document page to Bmp image and return resulting file in response.
[**getPageConvertToEmf**](PdfApi.md#getPageConvertToEmf) | **GET** /pdf/{name}/pages/{pageNumber}/convert/emf | Convert document page to Emf image and return resulting file in response.
[**getPageConvertToGif**](PdfApi.md#getPageConvertToGif) | **GET** /pdf/{name}/pages/{pageNumber}/convert/gif | Convert document page to Gif image and return resulting file in response.
[**getPageConvertToJpeg**](PdfApi.md#getPageConvertToJpeg) | **GET** /pdf/{name}/pages/{pageNumber}/convert/jpeg | Convert document page to Jpeg image and return resulting file in response.
[**getPageConvertToPng**](PdfApi.md#getPageConvertToPng) | **GET** /pdf/{name}/pages/{pageNumber}/convert/png | Convert document page to Png image and return resulting file in response.
[**getPageConvertToTiff**](PdfApi.md#getPageConvertToTiff) | **GET** /pdf/{name}/pages/{pageNumber}/convert/tiff | Convert document page to Tiff image  and return resulting file in response.
[**getPageFreeTextAnnotations**](PdfApi.md#getPageFreeTextAnnotations) | **GET** /pdf/{name}/pages/{pageNumber}/annotations/freetext | Read document page free text annotations.
[**getPageLinkAnnotation**](PdfApi.md#getPageLinkAnnotation) | **GET** /pdf/{name}/pages/{pageNumber}/links/{linkId} | Read document page link annotation by ID.
[**getPageLinkAnnotations**](PdfApi.md#getPageLinkAnnotations) | **GET** /pdf/{name}/pages/{pageNumber}/links | Read document page link annotations.
[**getPageText**](PdfApi.md#getPageText) | **GET** /pdf/{name}/pages/{pageNumber}/text | Read page text items.
[**getPageTextAnnotations**](PdfApi.md#getPageTextAnnotations) | **GET** /pdf/{name}/pages/{pageNumber}/annotations/text | Read document page text annotations.
[**getPages**](PdfApi.md#getPages) | **GET** /pdf/{name}/pages | Read document pages info.
[**getPclInStorageToPdf**](PdfApi.md#getPclInStorageToPdf) | **GET** /pdf/create/pcl | Convert PCL file (located on storage) to PDF format and return resulting file in response.
[**getPdfInStorageToDoc**](PdfApi.md#getPdfInStorageToDoc) | **GET** /pdf/{name}/convert/doc | Converts PDF document (located on storage) to DOC format and returns resulting file in response content
[**getPdfInStorageToEpub**](PdfApi.md#getPdfInStorageToEpub) | **GET** /pdf/{name}/convert/epub | Converts PDF document (located on storage) to EPUB format and returns resulting file in response content
[**getPdfInStorageToHtml**](PdfApi.md#getPdfInStorageToHtml) | **GET** /pdf/{name}/convert/html | Converts PDF document (located on storage) to Html format and returns resulting file in response content
[**getPdfInStorageToLaTeX**](PdfApi.md#getPdfInStorageToLaTeX) | **GET** /pdf/{name}/convert/latex | Converts PDF document (located on storage) to LaTeX format and returns resulting file in response content
[**getPdfInStorageToMobiXml**](PdfApi.md#getPdfInStorageToMobiXml) | **GET** /pdf/{name}/convert/mobixml | Converts PDF document (located on storage) to MOBIXML format and returns resulting file in response content
[**getPdfInStorageToPdfA**](PdfApi.md#getPdfInStorageToPdfA) | **GET** /pdf/{name}/convert/pdfa | Converts PDF document (located on storage) to PdfA format and returns resulting file in response content
[**getPdfInStorageToPptx**](PdfApi.md#getPdfInStorageToPptx) | **GET** /pdf/{name}/convert/pptx | Converts PDF document (located on storage) to PPTX format and returns resulting file in response content
[**getPdfInStorageToSvg**](PdfApi.md#getPdfInStorageToSvg) | **GET** /pdf/{name}/convert/svg | Converts PDF document (located on storage) to SVG format and returns resulting file in response content
[**getPdfInStorageToTiff**](PdfApi.md#getPdfInStorageToTiff) | **GET** /pdf/{name}/convert/tiff | Converts PDF document (located on storage) to TIFF format and returns resulting file in response content
[**getPdfInStorageToXls**](PdfApi.md#getPdfInStorageToXls) | **GET** /pdf/{name}/convert/xls | Converts PDF document (located on storage) to XLS format and returns resulting file in response content
[**getPdfInStorageToXml**](PdfApi.md#getPdfInStorageToXml) | **GET** /pdf/{name}/convert/xml | Converts PDF document (located on storage) to XML format and returns resulting file in response content
[**getPdfInStorageToXps**](PdfApi.md#getPdfInStorageToXps) | **GET** /pdf/{name}/convert/xps | Converts PDF document (located on storage) to XPS format and returns resulting file in response content
[**getPsInStorageToPdf**](PdfApi.md#getPsInStorageToPdf) | **GET** /pdf/create/ps | Convert PS file (located on storage) to PDF format and return resulting file in response.
[**getSvgInStorageToPdf**](PdfApi.md#getSvgInStorageToPdf) | **GET** /pdf/create/svg | Convert SVG file (located on storage) to PDF format and return resulting file in response.
[**getText**](PdfApi.md#getText) | **GET** /pdf/{name}/text | Read document text.
[**getTextAnnotation**](PdfApi.md#getTextAnnotation) | **GET** /pdf/{name}/annotations/text/{annotationId} | Read document page text annotation by ID.
[**getVerifySignature**](PdfApi.md#getVerifySignature) | **GET** /pdf/{name}/verifySignature | Verify signature document.
[**getWebInStorageToPdf**](PdfApi.md#getWebInStorageToPdf) | **GET** /pdf/create/web | Convert web page to PDF format and return resulting file in response.
[**getWordsPerPage**](PdfApi.md#getWordsPerPage) | **GET** /pdf/{name}/pages/wordCount | Get number of words per document page.
[**getXfaPdfInStorageToAcroForm**](PdfApi.md#getXfaPdfInStorageToAcroForm) | **GET** /pdf/{name}/convert/xfatoacroform | Converts PDF document which contatins XFA form (located on storage) to PDF with AcroForm and returns resulting file response content
[**getXmlInStorageToPdf**](PdfApi.md#getXmlInStorageToPdf) | **GET** /pdf/create/xml | Convert XML file (located on storage) to PDF format and return resulting file in response.
[**getXpsInStorageToPdf**](PdfApi.md#getXpsInStorageToPdf) | **GET** /pdf/create/xps | Convert XPS file (located on storage) to PDF format and return resulting file in response.
[**getXslFoInStorageToPdf**](PdfApi.md#getXslFoInStorageToPdf) | **GET** /pdf/create/xslfo | Convert XslFo file (located on storage) to PDF format and return resulting file in response.
[**postAppendDocument**](PdfApi.md#postAppendDocument) | **POST** /pdf/{name}/appendDocument | Append document to existing one.
[**postCreateField**](PdfApi.md#postCreateField) | **POST** /pdf/{name}/fields | Create field.
[**postDocumentTextReplace**](PdfApi.md#postDocumentTextReplace) | **POST** /pdf/{name}/text/replace | Document&#39;s replace text method.
[**postInsertImage**](PdfApi.md#postInsertImage) | **POST** /pdf/{name}/pages/{pageNumber}/images | Insert image to document page.
[**postMovePage**](PdfApi.md#postMovePage) | **POST** /pdf/{name}/pages/{pageNumber}/movePage | Move page to new position.
[**postOptimizeDocument**](PdfApi.md#postOptimizeDocument) | **POST** /pdf/{name}/optimize | Optimize document.
[**postPageFreeTextAnnotations**](PdfApi.md#postPageFreeTextAnnotations) | **POST** /pdf/{name}/pages/{pageNumber}/annotations/freetext | Add document page free text annotations.
[**postPageLinkAnnotations**](PdfApi.md#postPageLinkAnnotations) | **POST** /pdf/{name}/pages/{pageNumber}/links | Add document page link annotations.
[**postPageTextAnnotations**](PdfApi.md#postPageTextAnnotations) | **POST** /pdf/{name}/pages/{pageNumber}/annotations/text | Add document page text annotations.
[**postPageTextReplace**](PdfApi.md#postPageTextReplace) | **POST** /pdf/{name}/pages/{pageNumber}/text/replace | Page&#39;s replace text method.
[**postSignDocument**](PdfApi.md#postSignDocument) | **POST** /pdf/{name}/sign | Sign document.
[**postSignPage**](PdfApi.md#postSignPage) | **POST** /pdf/{name}/pages/{pageNumber}/sign | Sign page.
[**postSplitDocument**](PdfApi.md#postSplitDocument) | **POST** /pdf/{name}/split | Split document to parts.
[**putAddNewPage**](PdfApi.md#putAddNewPage) | **PUT** /pdf/{name}/pages | Add new page to end of the document.
[**putAddText**](PdfApi.md#putAddText) | **PUT** /pdf/{name}/pages/{pageNumber}/text | Add text to PDF document page.
[**putCreate**](PdfApi.md#putCreate) | **PUT** /storage/file | Upload a specific file
[**putCreateDocument**](PdfApi.md#putCreateDocument) | **PUT** /pdf/{name} | Create empty document.
[**putEpubInStorageToPdf**](PdfApi.md#putEpubInStorageToPdf) | **PUT** /pdf/{name}/create/epub | Convert EPUB file (located on storage) to PDF format and upload resulting file to storage.
[**putFieldsFlatten**](PdfApi.md#putFieldsFlatten) | **PUT** /pdf/{name}/fields/flatten | Flatten form fields in document.
[**putFreeTextAnnotation**](PdfApi.md#putFreeTextAnnotation) | **PUT** /pdf/{name}/annotations/freetext/{annotationId} | Replace document free text annotation
[**putHtmlInStorageToPdf**](PdfApi.md#putHtmlInStorageToPdf) | **PUT** /pdf/{name}/create/html | Convert HTML file (located on storage) to PDF format and upload resulting file to storage.
[**putImageExtractAsGif**](PdfApi.md#putImageExtractAsGif) | **PUT** /pdf/{name}/images/{imageId}/extract/gif | Extract document image in GIF format to folder
[**putImageExtractAsJpeg**](PdfApi.md#putImageExtractAsJpeg) | **PUT** /pdf/{name}/images/{imageId}/extract/jpeg | Extract document image in JPEG format to folder
[**putImageExtractAsPng**](PdfApi.md#putImageExtractAsPng) | **PUT** /pdf/{name}/images/{imageId}/extract/png | Extract document image in PNG format to folder
[**putImageExtractAsTiff**](PdfApi.md#putImageExtractAsTiff) | **PUT** /pdf/{name}/images/{imageId}/extract/tiff | Extract document image in TIFF format to folder
[**putImageInStorageToPdf**](PdfApi.md#putImageInStorageToPdf) | **PUT** /pdf/{name}/create/images | Convert image file (located on storage) to PDF format and upload resulting file to storage.
[**putImagesExtractAsGif**](PdfApi.md#putImagesExtractAsGif) | **PUT** /pdf/{name}/pages/{pageNumber}/images/extract/gif | Extract document images in GIF format to folder.
[**putImagesExtractAsJpeg**](PdfApi.md#putImagesExtractAsJpeg) | **PUT** /pdf/{name}/pages/{pageNumber}/images/extract/jpeg | Extract document images in JPEG format to folder.
[**putImagesExtractAsPng**](PdfApi.md#putImagesExtractAsPng) | **PUT** /pdf/{name}/pages/{pageNumber}/images/extract/png | Extract document images in PNG format to folder.
[**putImagesExtractAsTiff**](PdfApi.md#putImagesExtractAsTiff) | **PUT** /pdf/{name}/pages/{pageNumber}/images/extract/tiff | Extract document images in TIFF format to folder.
[**putLaTeXInStorageToPdf**](PdfApi.md#putLaTeXInStorageToPdf) | **PUT** /pdf/{name}/create/latex | Convert LaTeX file (located on storage) to PDF format and upload resulting file to storage.
[**putLinkAnnotation**](PdfApi.md#putLinkAnnotation) | **PUT** /pdf/{name}/links/{linkId} | Replace document page link annotations
[**putMergeDocuments**](PdfApi.md#putMergeDocuments) | **PUT** /pdf/{name}/merge | Merge a list of documents.
[**putMhtInStorageToPdf**](PdfApi.md#putMhtInStorageToPdf) | **PUT** /pdf/{name}/create/mht | Convert MHT file (located on storage) to PDF format and upload resulting file to storage.
[**putPageAddStamp**](PdfApi.md#putPageAddStamp) | **PUT** /pdf/{name}/pages/{pageNumber}/stamp | Add page stamp.
[**putPageConvertToBmp**](PdfApi.md#putPageConvertToBmp) | **PUT** /pdf/{name}/pages/{pageNumber}/convert/bmp | Convert document page to bmp image and upload resulting file to storage.
[**putPageConvertToEmf**](PdfApi.md#putPageConvertToEmf) | **PUT** /pdf/{name}/pages/{pageNumber}/convert/emf | Convert document page to emf image and upload resulting file to storage.
[**putPageConvertToGif**](PdfApi.md#putPageConvertToGif) | **PUT** /pdf/{name}/pages/{pageNumber}/convert/gif | Convert document page to gif image and upload resulting file to storage.
[**putPageConvertToJpeg**](PdfApi.md#putPageConvertToJpeg) | **PUT** /pdf/{name}/pages/{pageNumber}/convert/jpeg | Convert document page to Jpeg image and upload resulting file to storage.
[**putPageConvertToPng**](PdfApi.md#putPageConvertToPng) | **PUT** /pdf/{name}/pages/{pageNumber}/convert/png | Convert document page to png image and upload resulting file to storage.
[**putPageConvertToTiff**](PdfApi.md#putPageConvertToTiff) | **PUT** /pdf/{name}/pages/{pageNumber}/convert/tiff | Convert document page to Tiff image and upload resulting file to storage.
[**putPclInStorageToPdf**](PdfApi.md#putPclInStorageToPdf) | **PUT** /pdf/{name}/create/pcl | Convert PCL file (located on storage) to PDF format and upload resulting file to storage.
[**putPdfInRequestToDoc**](PdfApi.md#putPdfInRequestToDoc) | **PUT** /pdf/convert/doc | Converts PDF document (in request content) to DOC format and uploads resulting file to storage.
[**putPdfInRequestToEpub**](PdfApi.md#putPdfInRequestToEpub) | **PUT** /pdf/convert/epub | Converts PDF document (in request content) to EPUB format and uploads resulting file to storage.
[**putPdfInRequestToHtml**](PdfApi.md#putPdfInRequestToHtml) | **PUT** /pdf/convert/html | Converts PDF document (in request content) to Html format and uploads resulting file to storage.
[**putPdfInRequestToLaTeX**](PdfApi.md#putPdfInRequestToLaTeX) | **PUT** /pdf/convert/latex | Converts PDF document (in request content) to LaTeX format and uploads resulting file to storage.
[**putPdfInRequestToMobiXml**](PdfApi.md#putPdfInRequestToMobiXml) | **PUT** /pdf/convert/mobixml | Converts PDF document (in request content) to MOBIXML format and uploads resulting file to storage.
[**putPdfInRequestToPdfA**](PdfApi.md#putPdfInRequestToPdfA) | **PUT** /pdf/convert/pdfa | Converts PDF document (in request content) to PdfA format and uploads resulting file to storage.
[**putPdfInRequestToPptx**](PdfApi.md#putPdfInRequestToPptx) | **PUT** /pdf/convert/pptx | Converts PDF document (in request content) to PPTX format and uploads resulting file to storage.
[**putPdfInRequestToSvg**](PdfApi.md#putPdfInRequestToSvg) | **PUT** /pdf/convert/svg | Converts PDF document (in request content) to SVG format and uploads resulting file to storage.
[**putPdfInRequestToTiff**](PdfApi.md#putPdfInRequestToTiff) | **PUT** /pdf/convert/tiff | Converts PDF document (in request content) to TIFF format and uploads resulting file to storage.
[**putPdfInRequestToXls**](PdfApi.md#putPdfInRequestToXls) | **PUT** /pdf/convert/xls | Converts PDF document (in request content) to XLS format and uploads resulting file to storage.
[**putPdfInRequestToXml**](PdfApi.md#putPdfInRequestToXml) | **PUT** /pdf/convert/xml | Converts PDF document (in request content) to XML format and uploads resulting file to storage.
[**putPdfInRequestToXps**](PdfApi.md#putPdfInRequestToXps) | **PUT** /pdf/convert/xps | Converts PDF document (in request content) to XPS format and uploads resulting file to storage.
[**putPdfInStorageToDoc**](PdfApi.md#putPdfInStorageToDoc) | **PUT** /pdf/{name}/convert/doc | Converts PDF document (located on storage) to DOC format and uploads resulting file to storage
[**putPdfInStorageToEpub**](PdfApi.md#putPdfInStorageToEpub) | **PUT** /pdf/{name}/convert/epub | Converts PDF document (located on storage) to EPUB format and uploads resulting file to storage
[**putPdfInStorageToHtml**](PdfApi.md#putPdfInStorageToHtml) | **PUT** /pdf/{name}/convert/html | Converts PDF document (located on storage) to Html format and uploads resulting file to storage
[**putPdfInStorageToLaTeX**](PdfApi.md#putPdfInStorageToLaTeX) | **PUT** /pdf/{name}/convert/latex | Converts PDF document (located on storage) to LaTeX format and uploads resulting file to storage
[**putPdfInStorageToMobiXml**](PdfApi.md#putPdfInStorageToMobiXml) | **PUT** /pdf/{name}/convert/mobixml | Converts PDF document (located on storage) to MOBIXML format and uploads resulting file to storage
[**putPdfInStorageToPdfA**](PdfApi.md#putPdfInStorageToPdfA) | **PUT** /pdf/{name}/convert/pdfa | Converts PDF document (located on storage) to PdfA format and uploads resulting file to storage
[**putPdfInStorageToPptx**](PdfApi.md#putPdfInStorageToPptx) | **PUT** /pdf/{name}/convert/pptx | Converts PDF document (located on storage) to PPTX format and uploads resulting file to storage
[**putPdfInStorageToSvg**](PdfApi.md#putPdfInStorageToSvg) | **PUT** /pdf/{name}/convert/svg | Converts PDF document (located on storage) to SVG format and uploads resulting file to storage
[**putPdfInStorageToTiff**](PdfApi.md#putPdfInStorageToTiff) | **PUT** /pdf/{name}/convert/tiff | Converts PDF document (located on storage) to TIFF format and uploads resulting file to storage
[**putPdfInStorageToXls**](PdfApi.md#putPdfInStorageToXls) | **PUT** /pdf/{name}/convert/xls | Converts PDF document (located on storage) to XLS format and uploads resulting file to storage
[**putPdfInStorageToXml**](PdfApi.md#putPdfInStorageToXml) | **PUT** /pdf/{name}/convert/xml | Converts PDF document (located on storage) to XML format and uploads resulting file to storage
[**putPdfInStorageToXps**](PdfApi.md#putPdfInStorageToXps) | **PUT** /pdf/{name}/convert/xps | Converts PDF document (located on storage) to XPS format and uploads resulting file to storage
[**putPrivileges**](PdfApi.md#putPrivileges) | **PUT** /pdf/{name}/privileges | Update privilege document.
[**putPsInStorageToPdf**](PdfApi.md#putPsInStorageToPdf) | **PUT** /pdf/{name}/create/ps | Convert PS file (located on storage) to PDF format and upload resulting file to storage.
[**putReplaceImage**](PdfApi.md#putReplaceImage) | **PUT** /pdf/{name}/images/{imageId} | Replace document image.
[**putSearchableDocument**](PdfApi.md#putSearchableDocument) | **PUT** /pdf/{name}/ocr | Create searchable PDF document. Generate OCR layer for images in input PDF document.
[**putSetProperty**](PdfApi.md#putSetProperty) | **PUT** /pdf/{name}/documentproperties/{propertyName} | Add/update document property.
[**putSvgInStorageToPdf**](PdfApi.md#putSvgInStorageToPdf) | **PUT** /pdf/{name}/create/svg | Convert SVG file (located on storage) to PDF format and upload resulting file to storage.
[**putTextAnnotation**](PdfApi.md#putTextAnnotation) | **PUT** /pdf/{name}/annotations/text/{annotationId} | Replace document text annotation
[**putUpdateField**](PdfApi.md#putUpdateField) | **PUT** /pdf/{name}/fields/{fieldName} | Update field.
[**putUpdateFields**](PdfApi.md#putUpdateFields) | **PUT** /pdf/{name}/fields | Update fields.
[**putWebInStorageToPdf**](PdfApi.md#putWebInStorageToPdf) | **PUT** /pdf/{name}/create/web | Convert web page to PDF format and upload resulting file to storage.
[**putXfaPdfInRequestToAcroForm**](PdfApi.md#putXfaPdfInRequestToAcroForm) | **PUT** /pdf/convert/xfatoacroform | Converts PDF document which contatins XFA form (in request content) to PDF with AcroForm and uploads resulting file to storage.
[**putXfaPdfInStorageToAcroForm**](PdfApi.md#putXfaPdfInStorageToAcroForm) | **PUT** /pdf/{name}/convert/xfatoacroform | Converts PDF document which contatins XFA form (located on storage) to PDF with AcroForm and uploads resulting file to storage
[**putXmlInStorageToPdf**](PdfApi.md#putXmlInStorageToPdf) | **PUT** /pdf/{name}/create/xml | Convert XML file (located on storage) to PDF format and upload resulting file to storage.
[**putXpsInStorageToPdf**](PdfApi.md#putXpsInStorageToPdf) | **PUT** /pdf/{name}/create/xps | Convert XPS file (located on storage) to PDF format and upload resulting file to storage.
[**putXslFoInStorageToPdf**](PdfApi.md#putXslFoInStorageToPdf) | **PUT** /pdf/{name}/create/xslfo | Convert XslFo file (located on storage) to PDF format and upload resulting file to storage.


# **deleteAnnotation**
> \Aspose\PDF\Model\AsposeResponse deleteAnnotation($name, $annotation_id, $storage, $folder)

Delete document annotation by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$annotation_id = "annotation_id_example"; // string | The annotation ID.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->deleteAnnotation($name, $annotation_id, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->deleteAnnotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **annotation_id** | **string**| The annotation ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDocumentAnnotations**
> \Aspose\PDF\Model\AsposeResponse deleteDocumentAnnotations($name, $storage, $folder)

Delete all annotations from the document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->deleteDocumentAnnotations($name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->deleteDocumentAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDocumentLinkAnnotations**
> \Aspose\PDF\Model\AsposeResponse deleteDocumentLinkAnnotations($name, $storage, $folder)

Delete all link annotations from the document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->deleteDocumentLinkAnnotations($name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->deleteDocumentLinkAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteField**
> \Aspose\PDF\Model\AsposeResponse deleteField($name, $field_name, $storage, $folder)

Delete document field by name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$field_name = "field_name_example"; // string | The field name/
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->deleteField($name, $field_name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->deleteField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **field_name** | **string**| The field name/ |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteImage**
> \Aspose\PDF\Model\AsposeResponse deleteImage($name, $image_id, $storage, $folder)

Delete image from document page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$image_id = "image_id_example"; // string | Image ID.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->deleteImage($name, $image_id, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->deleteImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **image_id** | **string**| Image ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLinkAnnotation**
> \Aspose\PDF\Model\AsposeResponse deleteLinkAnnotation($name, $link_id, $storage, $folder)

Delete document page link annotation by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$link_id = "link_id_example"; // string | The link ID.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->deleteLinkAnnotation($name, $link_id, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->deleteLinkAnnotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **link_id** | **string**| The link ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePage**
> \Aspose\PDF\Model\AsposeResponse deletePage($name, $page_number, $storage, $folder)

Delete document page by its number.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->deletePage($name, $page_number, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->deletePage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePageAnnotations**
> \Aspose\PDF\Model\AsposeResponse deletePageAnnotations($name, $page_number, $storage, $folder)

Delete all annotations from the page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->deletePageAnnotations($name, $page_number, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->deletePageAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePageLinkAnnotations**
> \Aspose\PDF\Model\AsposeResponse deletePageLinkAnnotations($name, $page_number, $storage, $folder)

Delete all link annotations from the page

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->deletePageLinkAnnotations($name, $page_number, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->deletePageLinkAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProperties**
> \Aspose\PDF\Model\AsposeResponse deleteProperties($name, $storage, $folder)

Delete custom document properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$storage = "storage_example"; // string | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->deleteProperties($name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->deleteProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **storage** | **string**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProperty**
> \Aspose\PDF\Model\AsposeResponse deleteProperty($name, $property_name, $storage, $folder)

Delete document property.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$property_name = "property_name_example"; // string | 
$storage = "storage_example"; // string | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->deleteProperty($name, $property_name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->deleteProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **property_name** | **string**|  |
 **storage** | **string**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocument**
> \Aspose\PDF\Model\DocumentResponse getDocument($name, $storage, $folder)

Read common document info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getDocument($name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentAnnotations**
> \Aspose\PDF\Model\AnnotationsInfoResponse getDocumentAnnotations($name, $storage, $folder)

Read documant page annotations. Returns only FreeTextAnnotations, TextAnnotations, other annotations will implemented next releases.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getDocumentAnnotations($name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getDocumentAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AnnotationsInfoResponse**](../Model/AnnotationsInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentAttachmentByIndex**
> \Aspose\PDF\Model\AttachmentResponse getDocumentAttachmentByIndex($name, $attachment_index, $storage, $folder)

Read document attachment info by its index.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$attachment_index = 56; // int | The attachment index.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getDocumentAttachmentByIndex($name, $attachment_index, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getDocumentAttachmentByIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **attachment_index** | **int**| The attachment index. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AttachmentResponse**](../Model/AttachmentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentAttachments**
> \Aspose\PDF\Model\AttachmentsResponse getDocumentAttachments($name, $storage, $folder)

Read document attachments info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getDocumentAttachments($name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getDocumentAttachments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AttachmentsResponse**](../Model/AttachmentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentBookmarks**
> \SplFileObject getDocumentBookmarks($name, $bookmark_path, $storage, $folder)

Read document bookmark/bookmarks (including children).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$bookmark_path = "bookmark_path_example"; // string | The bookmark path. Leave it empty if you want to get all the bookmarks in the document.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getDocumentBookmarks($name, $bookmark_path, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getDocumentBookmarks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **bookmark_path** | **string**| The bookmark path. Leave it empty if you want to get all the bookmarks in the document. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentFreeTextAnnotations**
> \Aspose\PDF\Model\FreeTextAnnotationsResponse getDocumentFreeTextAnnotations($name, $storage, $folder)

Read document free text annotations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getDocumentFreeTextAnnotations($name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getDocumentFreeTextAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FreeTextAnnotationsResponse**](../Model/FreeTextAnnotationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentProperties**
> \Aspose\PDF\Model\DocumentPropertiesResponse getDocumentProperties($name, $storage, $folder)

Read document properties.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$storage = "storage_example"; // string | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->getDocumentProperties($name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getDocumentProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **storage** | **string**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentPropertiesResponse**](../Model/DocumentPropertiesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentProperty**
> \Aspose\PDF\Model\DocumentPropertyResponse getDocumentProperty($name, $property_name, $storage, $folder)

Read document property by name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$property_name = "property_name_example"; // string | 
$storage = "storage_example"; // string | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->getDocumentProperty($name, $property_name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getDocumentProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **property_name** | **string**|  |
 **storage** | **string**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentPropertyResponse**](../Model/DocumentPropertyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentTextAnnotations**
> \Aspose\PDF\Model\TextAnnotationsResponse getDocumentTextAnnotations($name, $storage, $folder)

Read document text annotations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getDocumentTextAnnotations($name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getDocumentTextAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\TextAnnotationsResponse**](../Model/TextAnnotationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDownload**
> \SplFileObject getDownload($path, $version_id, $storage)

Download a specific file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Path of the file including the file name and extension e.g. /file.ext
$version_id = "version_id_example"; // string | File's version
$storage = "storage_example"; // string | User's storage name

try {
    $result = $apiInstance->getDownload($path, $version_id, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path of the file including the file name and extension e.g. /file.ext |
 **version_id** | **string**| File&#39;s version | [optional]
 **storage** | **string**| User&#39;s storage name | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDownloadDocumentAttachmentByIndex**
> \SplFileObject getDownloadDocumentAttachmentByIndex($name, $attachment_index, $storage, $folder)

Download document attachment content by its index.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$attachment_index = 56; // int | The attachment index.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getDownloadDocumentAttachmentByIndex($name, $attachment_index, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getDownloadDocumentAttachmentByIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **attachment_index** | **int**| The attachment index. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEpubInStorageToPdf**
> \SplFileObject getEpubInStorageToPdf($src_path, $storage)

Convert EPUB file (located on storage) to PDF format and return resulting file in response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.epub)
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getEpubInStorageToPdf($src_path, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getEpubInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.epub) |
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getField**
> \Aspose\PDF\Model\FieldResponse getField($name, $field_name, $storage, $folder)

Get document field by name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$field_name = "field_name_example"; // string | The field name/
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getField($name, $field_name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **field_name** | **string**| The field name/ |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FieldResponse**](../Model/FieldResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFields**
> \Aspose\PDF\Model\FieldsResponse getFields($name, $storage, $folder)

Get document fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getFields($name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FieldsResponse**](../Model/FieldsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFreeTextAnnotation**
> \Aspose\PDF\Model\FreeTextAnnotationResponse getFreeTextAnnotation($name, $annotation_id, $storage, $folder)

Read document page free text annotation by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$annotation_id = "annotation_id_example"; // string | The annotation ID.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getFreeTextAnnotation($name, $annotation_id, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getFreeTextAnnotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **annotation_id** | **string**| The annotation ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FreeTextAnnotationResponse**](../Model/FreeTextAnnotationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getHtmlInStorageToPdf**
> \SplFileObject getHtmlInStorageToPdf($src_path, $html_file_name, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $storage)

Convert HTML file (located on storage) to PDF format and return resulting file in response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.zip)
$html_file_name = "html_file_name_example"; // string | Name of HTML file in ZIP.
$height = 1.2; // double | Page height
$width = 1.2; // double | Page width
$is_landscape = true; // bool | Is page landscaped
$margin_left = 1.2; // double | Page margin left
$margin_bottom = 1.2; // double | Page margin bottom
$margin_right = 1.2; // double | Page margin right
$margin_top = 1.2; // double | Page margin top
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getHtmlInStorageToPdf($src_path, $html_file_name, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getHtmlInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImage**
> \Aspose\PDF\Model\ImageResponse getImage($name, $image_id, $storage, $folder)

Read document image by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$image_id = "image_id_example"; // string | Image ID.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getImage($name, $image_id, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **image_id** | **string**| Image ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\ImageResponse**](../Model/ImageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImageExtractAsGif**
> \SplFileObject getImageExtractAsGif($name, $image_id, $width, $height, $storage, $folder)

Extract document image in GIF format

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$image_id = "image_id_example"; // string | Image ID.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getImageExtractAsGif($name, $image_id, $width, $height, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getImageExtractAsGif: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImageExtractAsJpeg**
> \SplFileObject getImageExtractAsJpeg($name, $image_id, $width, $height, $storage, $folder)

Extract document image in JPEG format

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$image_id = "image_id_example"; // string | Image ID.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getImageExtractAsJpeg($name, $image_id, $width, $height, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getImageExtractAsJpeg: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImageExtractAsPng**
> \SplFileObject getImageExtractAsPng($name, $image_id, $width, $height, $storage, $folder)

Extract document image in PNG format

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$image_id = "image_id_example"; // string | Image ID.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getImageExtractAsPng($name, $image_id, $width, $height, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getImageExtractAsPng: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImageExtractAsTiff**
> \SplFileObject getImageExtractAsTiff($name, $image_id, $width, $height, $storage, $folder)

Extract document image in TIFF format

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$image_id = "image_id_example"; // string | Image ID.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getImageExtractAsTiff($name, $image_id, $width, $height, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getImageExtractAsTiff: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImages**
> \Aspose\PDF\Model\ImagesResponse getImages($name, $page_number, $storage, $folder)

Read document images.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getImages($name, $page_number, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\ImagesResponse**](../Model/ImagesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLaTeXInStorageToPdf**
> \SplFileObject getLaTeXInStorageToPdf($src_path, $storage)

Convert LaTeX file (located on storage) to PDF format and return resulting file in response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.tex)
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getLaTeXInStorageToPdf($src_path, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getLaTeXInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.tex) |
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLinkAnnotation**
> \Aspose\PDF\Model\LinkAnnotationResponse getLinkAnnotation($name, $link_id, $storage, $folder)

Read document link annotation by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$link_id = "link_id_example"; // string | The link ID.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getLinkAnnotation($name, $link_id, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getLinkAnnotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **link_id** | **string**| The link ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\LinkAnnotationResponse**](../Model/LinkAnnotationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMhtInStorageToPdf**
> \SplFileObject getMhtInStorageToPdf($src_path, $storage)

Convert MHT file (located on storage) to PDF format and return resulting file in response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.mht)
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getMhtInStorageToPdf($src_path, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getMhtInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.mht) |
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPage**
> \Aspose\PDF\Model\DocumentPageResponse getPage($name, $page_number, $storage, $folder)

Read document page info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getPage($name, $page_number, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentPageResponse**](../Model/DocumentPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPageAnnotations**
> \Aspose\PDF\Model\AnnotationsInfoResponse getPageAnnotations($name, $page_number, $storage, $folder)

Read documant page annotations. Returns only FreeTextAnnotations, TextAnnotations, other annotations will implemented next releases.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getPageAnnotations($name, $page_number, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPageAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AnnotationsInfoResponse**](../Model/AnnotationsInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPageConvertToBmp**
> \SplFileObject getPageConvertToBmp($name, $page_number, $width, $height, $folder, $storage)

Convert document page to Bmp image and return resulting file in response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPageConvertToBmp($name, $page_number, $width, $height, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPageConvertToBmp: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPageConvertToEmf**
> \SplFileObject getPageConvertToEmf($name, $page_number, $width, $height, $folder, $storage)

Convert document page to Emf image and return resulting file in response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPageConvertToEmf($name, $page_number, $width, $height, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPageConvertToEmf: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPageConvertToGif**
> \SplFileObject getPageConvertToGif($name, $page_number, $width, $height, $folder, $storage)

Convert document page to Gif image and return resulting file in response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPageConvertToGif($name, $page_number, $width, $height, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPageConvertToGif: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPageConvertToJpeg**
> \SplFileObject getPageConvertToJpeg($name, $page_number, $width, $height, $folder, $storage)

Convert document page to Jpeg image and return resulting file in response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPageConvertToJpeg($name, $page_number, $width, $height, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPageConvertToJpeg: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPageConvertToPng**
> \SplFileObject getPageConvertToPng($name, $page_number, $width, $height, $folder, $storage)

Convert document page to Png image and return resulting file in response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPageConvertToPng($name, $page_number, $width, $height, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPageConvertToPng: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPageConvertToTiff**
> \SplFileObject getPageConvertToTiff($name, $page_number, $width, $height, $folder, $storage)

Convert document page to Tiff image  and return resulting file in response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPageConvertToTiff($name, $page_number, $width, $height, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPageConvertToTiff: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPageFreeTextAnnotations**
> \Aspose\PDF\Model\FreeTextAnnotationsResponse getPageFreeTextAnnotations($name, $page_number, $storage, $folder)

Read document page free text annotations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getPageFreeTextAnnotations($name, $page_number, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPageFreeTextAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FreeTextAnnotationsResponse**](../Model/FreeTextAnnotationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPageLinkAnnotation**
> \Aspose\PDF\Model\LinkAnnotationResponse getPageLinkAnnotation($name, $page_number, $link_id, $storage, $folder)

Read document page link annotation by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$link_id = "link_id_example"; // string | The link ID.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getPageLinkAnnotation($name, $page_number, $link_id, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPageLinkAnnotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPageLinkAnnotations**
> \Aspose\PDF\Model\LinkAnnotationsResponse getPageLinkAnnotations($name, $page_number, $storage, $folder)

Read document page link annotations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getPageLinkAnnotations($name, $page_number, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPageLinkAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\LinkAnnotationsResponse**](../Model/LinkAnnotationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPageText**
> \Aspose\PDF\Model\TextRectsResponse getPageText($name, $page_number, $llx, $lly, $urx, $ury, $format, $regex, $split_rects, $folder, $storage)

Read page text items.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | Number of page (starting from 1).
$llx = 1.2; // double | 
$lly = 1.2; // double | 
$urx = 1.2; // double | 
$ury = 1.2; // double | 
$format = array("format_example"); // string[] | List of formats for search.
$regex = "regex_example"; // string | Formats are specified as a regular expression.
$split_rects = true; // bool | Split result fragments (default is true).
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPageText($name, $page_number, $llx, $lly, $urx, $ury, $format, $regex, $split_rects, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPageText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| Number of page (starting from 1). |
 **llx** | **double**|  |
 **lly** | **double**|  |
 **urx** | **double**|  |
 **ury** | **double**|  |
 **format** | [**string[]**](../Model/string.md)| List of formats for search. | [optional]
 **regex** | **string**| Formats are specified as a regular expression. | [optional]
 **split_rects** | **bool**| Split result fragments (default is true). | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\TextRectsResponse**](../Model/TextRectsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPageTextAnnotations**
> \Aspose\PDF\Model\TextAnnotationsResponse getPageTextAnnotations($name, $page_number, $storage, $folder)

Read document page text annotations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getPageTextAnnotations($name, $page_number, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPageTextAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **page_number** | **int**| The page number. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\TextAnnotationsResponse**](../Model/TextAnnotationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPages**
> \Aspose\PDF\Model\DocumentPagesResponse getPages($name, $storage, $folder)

Read document pages info.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getPages($name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentPagesResponse**](../Model/DocumentPagesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPclInStorageToPdf**
> \SplFileObject getPclInStorageToPdf($src_path, $storage)

Convert PCL file (located on storage) to PDF format and return resulting file in response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.pcl)
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPclInStorageToPdf($src_path, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPclInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.pcl) |
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPdfInStorageToDoc**
> \SplFileObject getPdfInStorageToDoc($name, $add_return_to_line_end, $format, $image_resolution_x, $image_resolution_y, $max_distance_between_text_lines, $mode, $recognize_bullets, $relative_horizontal_proximity, $folder, $storage)

Converts PDF document (located on storage) to DOC format and returns resulting file in response content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$add_return_to_line_end = true; // bool | Add return to line end.
$format = "format_example"; // string | Allows to specify .doc or .docx file format.
$image_resolution_x = 56; // int | Image resolution X.
$image_resolution_y = 56; // int | Image resolution Y.
$max_distance_between_text_lines = 1.2; // double | Max distance between text lines.
$mode = "mode_example"; // string | Allows to control how a PDF document is converted into a word processing document.
$recognize_bullets = true; // bool | Recognize bullets.
$relative_horizontal_proximity = 1.2; // double | Relative horizontal proximity.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPdfInStorageToDoc($name, $add_return_to_line_end, $format, $image_resolution_x, $image_resolution_y, $max_distance_between_text_lines, $mode, $recognize_bullets, $relative_horizontal_proximity, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPdfInStorageToDoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPdfInStorageToEpub**
> \SplFileObject getPdfInStorageToEpub($name, $content_recognition_mode, $folder, $storage)

Converts PDF document (located on storage) to EPUB format and returns resulting file in response content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$content_recognition_mode = "content_recognition_mode_example"; // string | ?roperty tunes conversion for this or that desirable method of recognition of content.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPdfInStorageToEpub($name, $content_recognition_mode, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPdfInStorageToEpub: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **content_recognition_mode** | **string**| ?roperty tunes conversion for this or that desirable method of recognition of content. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPdfInStorageToHtml**
> \SplFileObject getPdfInStorageToHtml($name, $additional_margin_width_in_points, $compress_svg_graphics_if_any, $convert_marked_content_to_layers, $default_font_name, $document_type, $fixed_layout, $image_resolution, $minimal_line_width, $prevent_glyphs_grouping, $split_css_into_pages, $split_into_pages, $use_z_order, $antialiasing_processing, $css_class_names_prefix, $explicit_list_of_saved_pages, $font_encoding_strategy, $font_saving_mode, $html_markup_generation_mode, $letters_positioning_method, $pages_flow_type_depends_on_viewers_screen_size, $parts_embedding_mode, $raster_images_saving_mode, $remove_empty_areas_on_top_and_bottom, $save_shadowed_texts_as_transparent_texts, $save_transparent_texts, $special_folder_for_all_images, $special_folder_for_svg_images, $try_save_text_underlining_and_strikeouting_in_css, $folder, $storage)

Converts PDF document (located on storage) to Html format and returns resulting file in response content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$additional_margin_width_in_points = 56; // int | Defines width of margin that will be forcibly left around that output HTML-areas.
$compress_svg_graphics_if_any = true; // bool | The flag that indicates whether found SVG graphics(if any) will be compressed(zipped) into SVGZ format during saving.
$convert_marked_content_to_layers = true; // bool | If attribute ConvertMarkedContentToLayers set to true then an all elements inside a PDF marked content (layer) will be put into an HTML div with \"data-pdflayer\" attribute specifying a layer name. This layer name will be extracted from optional properties of PDF marked content. If this attribute is false (by default) then no any layers will be created from PDF marked content.
$default_font_name = "default_font_name_example"; // string | Specifies the name of an installed font which is used to substitute any document font that is not embedded and not installed in the system. If null then default substitution font is used.
$document_type = "document_type_example"; // string | Result document type.
$fixed_layout = true; // bool | The value indicating whether that HTML is created as fixed layout.
$image_resolution = 56; // int | Resolution for image rendering.
$minimal_line_width = 56; // int | This attribute sets minimal width of graphic path line. If thickness of line is less than 1px Adobe Acrobat rounds it to this value. So this attribute can be used to emulate this behavior for HTML browsers.
$prevent_glyphs_grouping = true; // bool | This attribute switch on the mode when text glyphs will not be grouped into words and strings This mode allows to keep maximum precision during positioning of glyphs on the page and it can be used for conversion documents with music notes or glyphs that should be placed separately each other. This parameter will be applied to document only when the value of FixedLayout attribute is true.
$split_css_into_pages = true; // bool | When multipage-mode selected(i.e 'SplitIntoPages' is 'true'), then this attribute defines whether should be created separate CSS-file for each result HTML page.
$split_into_pages = true; // bool | The flag that indicates whether each page of source document will be converted into it's own target HTML document, i.e whether result HTML will be splitted into several HTML-pages.
$use_z_order = true; // bool | If attribute UseZORder set to true, graphics and text are added to resultant HTML document accordingly Z-order in original PDF document. If this attribute is false all graphics is put as single layer which may cause some unnecessary effects for overlapped objects.
$antialiasing_processing = "antialiasing_processing_example"; // string | The parameter defines required antialiasing measures during conversion of compound background images from PDF to HTML.
$css_class_names_prefix = "css_class_names_prefix_example"; // string | When PDFtoHTML converter generates result CSSs, CSS class names (something like \".stl_01 {}\" ... \".stl_NN {}) are generated and used in result CSS. This property allows forcibly set class name prefix.
$explicit_list_of_saved_pages = array(56); // int[] | With this property You can explicitely define what pages of document should be converted. Pages in this list must have 1-based numbers. I.e. valid numbers of pages must be taken from range (1...[NumberOfPagesInConvertedDocument]) Order of appearing of pages in this list does not affect their order in result HTML page(s) - in result pages allways will go in order in which they are present in source PDF.
$font_encoding_strategy = "font_encoding_strategy_example"; // string | Defines encoding special rule to tune PDF decoding for current document.
$font_saving_mode = "font_saving_mode_example"; // string | Defines font saving mode that will be used during saving of PDF to desirable format.
$html_markup_generation_mode = "html_markup_generation_mode_example"; // string | Sometimes specific reqirments to generation of HTML markup are present. This parameter defines HTML preparing modes that can be used during conversion of PDF to HTML to match such specific requirments.
$letters_positioning_method = "letters_positioning_method_example"; // string | The mode of positioning of letters in words in result HTML.
$pages_flow_type_depends_on_viewers_screen_size = true; // bool | If attribute 'SplitOnPages=false', than whole HTML representing all input PDF pages will be put into one big result HTML file. This flag defines whether result HTML will be generated in such way that flow of areas that represent PDF pages in result HTML will depend on screen resolution of viewer.
$parts_embedding_mode = "parts_embedding_mode_example"; // string | It defines whether referenced files (HTML, Fonts,Images, CSSes) will be embedded into main HTML file or will be generated as apart binary entities.
$raster_images_saving_mode = "raster_images_saving_mode_example"; // string | Converted PDF can contain raster images This parameter defines how they should be handled during conversion of PDF to HTML.
$remove_empty_areas_on_top_and_bottom = true; // bool | Defines whether in created HTML will be removed top and bottom empty area without any content (if any).
$save_shadowed_texts_as_transparent_texts = true; // bool | Pdf can contain texts that are shadowed by another elements (f.e. by images) but can be selected to clipboard in Acrobat Reader (usually it happen when document contains images and OCRed texts extracted from it). This settings tells to converter whether we need save such texts as transparent selectable texts in result HTML to mimic behaviour of Acrobat Reader (othervise such texts are usually saved as hidden, not available for copying to clipboard).
$save_transparent_texts = true; // bool | Pdf can contain transparent texts that can be selected to clipboard (usually it happen when document contains images and OCRed texts extracted from it). This settings tells to converter whether we need save such texts as transparent selectable texts in result HTML.
$special_folder_for_all_images = "special_folder_for_all_images_example"; // string | The path to directory to which must be saved any images if they are encountered during saving of document as HTML. If parameter is empty or null then image files(if any) wil be saved together with other files linked to HTML It does not affect anything if CustomImageSavingStrategy property was successfully used to process relevant image file.
$special_folder_for_svg_images = "special_folder_for_svg_images_example"; // string | The path to directory to which must be saved only SVG-images if they are encountered during saving of document as HTML. If parameter is empty or null then SVG files(if any) wil be saved together with other image-files (near to output file) or in special folder for images (if it specified in SpecialImagesFolderIfAny option). It does not affect anything if CustomImageSavingStrategy property was successfully used to process relevant image file.
$try_save_text_underlining_and_strikeouting_in_css = true; // bool | PDF itself does not contain underlining markers for texts. It emulated with line situated under text. This option allows converter try guess that this or that line is a text's underlining and put this info into CSS instead of drawing of underlining graphically.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPdfInStorageToHtml($name, $additional_margin_width_in_points, $compress_svg_graphics_if_any, $convert_marked_content_to_layers, $default_font_name, $document_type, $fixed_layout, $image_resolution, $minimal_line_width, $prevent_glyphs_grouping, $split_css_into_pages, $split_into_pages, $use_z_order, $antialiasing_processing, $css_class_names_prefix, $explicit_list_of_saved_pages, $font_encoding_strategy, $font_saving_mode, $html_markup_generation_mode, $letters_positioning_method, $pages_flow_type_depends_on_viewers_screen_size, $parts_embedding_mode, $raster_images_saving_mode, $remove_empty_areas_on_top_and_bottom, $save_shadowed_texts_as_transparent_texts, $save_transparent_texts, $special_folder_for_all_images, $special_folder_for_svg_images, $try_save_text_underlining_and_strikeouting_in_css, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPdfInStorageToHtml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **additional_margin_width_in_points** | **int**| Defines width of margin that will be forcibly left around that output HTML-areas. | [optional]
 **compress_svg_graphics_if_any** | **bool**| The flag that indicates whether found SVG graphics(if any) will be compressed(zipped) into SVGZ format during saving. | [optional]
 **convert_marked_content_to_layers** | **bool**| If attribute ConvertMarkedContentToLayers set to true then an all elements inside a PDF marked content (layer) will be put into an HTML div with \&quot;data-pdflayer\&quot; attribute specifying a layer name. This layer name will be extracted from optional properties of PDF marked content. If this attribute is false (by default) then no any layers will be created from PDF marked content. | [optional]
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
 **css_class_names_prefix** | **string**| When PDFtoHTML converter generates result CSSs, CSS class names (something like \&quot;.stl_01 {}\&quot; ... \&quot;.stl_NN {}) are generated and used in result CSS. This property allows forcibly set class name prefix. | [optional]
 **explicit_list_of_saved_pages** | [**int[]**](../Model/int.md)| With this property You can explicitely define what pages of document should be converted. Pages in this list must have 1-based numbers. I.e. valid numbers of pages must be taken from range (1...[NumberOfPagesInConvertedDocument]) Order of appearing of pages in this list does not affect their order in result HTML page(s) - in result pages allways will go in order in which they are present in source PDF. | [optional]
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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPdfInStorageToLaTeX**
> \SplFileObject getPdfInStorageToLaTeX($name, $pages_count, $folder, $storage)

Converts PDF document (located on storage) to LaTeX format and returns resulting file in response content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$pages_count = 56; // int | Pages count.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPdfInStorageToLaTeX($name, $pages_count, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPdfInStorageToLaTeX: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **pages_count** | **int**| Pages count. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPdfInStorageToMobiXml**
> \SplFileObject getPdfInStorageToMobiXml($name, $folder, $storage)

Converts PDF document (located on storage) to MOBIXML format and returns resulting file in response content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPdfInStorageToMobiXml($name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPdfInStorageToMobiXml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPdfInStorageToPdfA**
> \SplFileObject getPdfInStorageToPdfA($name, $type, $folder, $storage)

Converts PDF document (located on storage) to PdfA format and returns resulting file in response content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$type = "type_example"; // string | Type of PdfA format.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPdfInStorageToPdfA($name, $type, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPdfInStorageToPdfA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **type** | **string**| Type of PdfA format. |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPdfInStorageToPptx**
> \SplFileObject getPdfInStorageToPptx($name, $separate_images, $slides_as_images, $folder, $storage)

Converts PDF document (located on storage) to PPTX format and returns resulting file in response content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$separate_images = true; // bool | Separate images.
$slides_as_images = true; // bool | Slides as images.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPdfInStorageToPptx($name, $separate_images, $slides_as_images, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPdfInStorageToPptx: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **separate_images** | **bool**| Separate images. | [optional]
 **slides_as_images** | **bool**| Slides as images. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPdfInStorageToSvg**
> \SplFileObject getPdfInStorageToSvg($name, $compress_output_to_zip_archive, $folder, $storage)

Converts PDF document (located on storage) to SVG format and returns resulting file in response content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$compress_output_to_zip_archive = true; // bool | Specifies whether output will be created as one zip-archive.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPdfInStorageToSvg($name, $compress_output_to_zip_archive, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPdfInStorageToSvg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **compress_output_to_zip_archive** | **bool**| Specifies whether output will be created as one zip-archive. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPdfInStorageToTiff**
> \SplFileObject getPdfInStorageToTiff($name, $brightness, $compression, $color_depth, $left_margin, $right_margin, $top_margin, $bottom_margin, $orientation, $skip_blank_pages, $width, $height, $x_resolution, $y_resolution, $page_index, $page_count, $folder, $storage)

Converts PDF document (located on storage) to TIFF format and returns resulting file in response content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$brightness = 1.2; // double | Image brightness.
$compression = "compression_example"; // string | Tiff compression. Possible values are: LZW, CCITT4, CCITT3, RLE, None.
$color_depth = "color_depth_example"; // string | Image color depth. Possible valuse are: Default, Format8bpp, Format4bpp, Format1bpp.
$left_margin = 56; // int | Left image margin.
$right_margin = 56; // int | Right image margin.
$top_margin = 56; // int | Top image margin.
$bottom_margin = 56; // int | Bottom image margin.
$orientation = "orientation_example"; // string | Image orientation. Possible values are: None, Landscape, Portait.
$skip_blank_pages = true; // bool | Skip blank pages flag.
$width = 56; // int | Image width.
$height = 56; // int | Image height.
$x_resolution = 56; // int | Horizontal resolution.
$y_resolution = 56; // int | Vertical resolution.
$page_index = 56; // int | Start page to export.
$page_count = 56; // int | Number of pages to export.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPdfInStorageToTiff($name, $brightness, $compression, $color_depth, $left_margin, $right_margin, $top_margin, $bottom_margin, $orientation, $skip_blank_pages, $width, $height, $x_resolution, $y_resolution, $page_index, $page_count, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPdfInStorageToTiff: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPdfInStorageToXls**
> \SplFileObject getPdfInStorageToXls($name, $insert_blank_column_at_first, $minimize_the_number_of_worksheets, $scale_factor, $uniform_worksheets, $folder, $storage)

Converts PDF document (located on storage) to XLS format and returns resulting file in response content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$insert_blank_column_at_first = true; // bool | Insert blank column at first
$minimize_the_number_of_worksheets = true; // bool | Minimize the number of worksheets
$scale_factor = 1.2; // double | Scale factor
$uniform_worksheets = true; // bool | Uniform worksheets
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPdfInStorageToXls($name, $insert_blank_column_at_first, $minimize_the_number_of_worksheets, $scale_factor, $uniform_worksheets, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPdfInStorageToXls: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPdfInStorageToXml**
> \SplFileObject getPdfInStorageToXml($name, $folder, $storage)

Converts PDF document (located on storage) to XML format and returns resulting file in response content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPdfInStorageToXml($name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPdfInStorageToXml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPdfInStorageToXps**
> \SplFileObject getPdfInStorageToXps($name, $folder, $storage)

Converts PDF document (located on storage) to XPS format and returns resulting file in response content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPdfInStorageToXps($name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPdfInStorageToXps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPsInStorageToPdf**
> \SplFileObject getPsInStorageToPdf($src_path, $storage)

Convert PS file (located on storage) to PDF format and return resulting file in response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.ps)
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getPsInStorageToPdf($src_path, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getPsInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.ps) |
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSvgInStorageToPdf**
> \SplFileObject getSvgInStorageToPdf($src_path, $adjust_page_size, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $storage)

Convert SVG file (located on storage) to PDF format and return resulting file in response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.svg)
$adjust_page_size = true; // bool | Adjust page size
$height = 1.2; // double | Page height
$width = 1.2; // double | Page width
$is_landscape = true; // bool | Is page landscaped
$margin_left = 1.2; // double | Page margin left
$margin_bottom = 1.2; // double | Page margin bottom
$margin_right = 1.2; // double | Page margin right
$margin_top = 1.2; // double | Page margin top
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getSvgInStorageToPdf($src_path, $adjust_page_size, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getSvgInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getText**
> \Aspose\PDF\Model\TextRectsResponse getText($name, $llx, $lly, $urx, $ury, $format, $regex, $split_rects, $folder, $storage)

Read document text.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$llx = 1.2; // double | 
$lly = 1.2; // double | 
$urx = 1.2; // double | 
$ury = 1.2; // double | 
$format = array("format_example"); // string[] | List of formats for search.
$regex = "regex_example"; // string | Formats are specified as a regular expression.
$split_rects = true; // bool | Split result fragments (default is true).
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getText($name, $llx, $lly, $urx, $ury, $format, $regex, $split_rects, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **llx** | **double**|  |
 **lly** | **double**|  |
 **urx** | **double**|  |
 **ury** | **double**|  |
 **format** | [**string[]**](../Model/string.md)| List of formats for search. | [optional]
 **regex** | **string**| Formats are specified as a regular expression. | [optional]
 **split_rects** | **bool**| Split result fragments (default is true). | [optional]
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\TextRectsResponse**](../Model/TextRectsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTextAnnotation**
> \Aspose\PDF\Model\TextAnnotationResponse getTextAnnotation($name, $annotation_id, $storage, $folder)

Read document page text annotation by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$annotation_id = "annotation_id_example"; // string | The annotation ID.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getTextAnnotation($name, $annotation_id, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getTextAnnotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **annotation_id** | **string**| The annotation ID. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\TextAnnotationResponse**](../Model/TextAnnotationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVerifySignature**
> \Aspose\PDF\Model\SignatureVerifyResponse getVerifySignature($name, $sign_name, $storage, $folder)

Verify signature document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$sign_name = "sign_name_example"; // string | Sign name.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getVerifySignature($name, $sign_name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getVerifySignature: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **sign_name** | **string**| Sign name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\SignatureVerifyResponse**](../Model/SignatureVerifyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebInStorageToPdf**
> \SplFileObject getWebInStorageToPdf($url, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $storage)

Convert web page to PDF format and return resulting file in response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$url = "url_example"; // string | Source url
$height = 1.2; // double | Page height
$width = 1.2; // double | Page width
$is_landscape = true; // bool | Is page landscaped
$margin_left = 1.2; // double | Page margin left
$margin_bottom = 1.2; // double | Page margin bottom
$margin_right = 1.2; // double | Page margin right
$margin_top = 1.2; // double | Page margin top
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getWebInStorageToPdf($url, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getWebInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWordsPerPage**
> \Aspose\PDF\Model\WordCountResponse getWordsPerPage($name, $storage, $folder)

Get number of words per document page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->getWordsPerPage($name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getWordsPerPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\WordCountResponse**](../Model/WordCountResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getXfaPdfInStorageToAcroForm**
> \SplFileObject getXfaPdfInStorageToAcroForm($name, $folder, $storage)

Converts PDF document which contatins XFA form (located on storage) to PDF with AcroForm and returns resulting file response content

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getXfaPdfInStorageToAcroForm($name, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getXfaPdfInStorageToAcroForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getXmlInStorageToPdf**
> \SplFileObject getXmlInStorageToPdf($src_path, $xsl_file_path, $storage)

Convert XML file (located on storage) to PDF format and return resulting file in response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.xml)
$xsl_file_path = "xsl_file_path_example"; // string | Full XSL source filename (ex. /folder1/folder2/template.xsl)
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getXmlInStorageToPdf($src_path, $xsl_file_path, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getXmlInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.xml) |
 **xsl_file_path** | **string**| Full XSL source filename (ex. /folder1/folder2/template.xsl) | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getXpsInStorageToPdf**
> \SplFileObject getXpsInStorageToPdf($src_path, $storage)

Convert XPS file (located on storage) to PDF format and return resulting file in response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.xps)
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getXpsInStorageToPdf($src_path, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getXpsInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.xps) |
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getXslFoInStorageToPdf**
> \SplFileObject getXslFoInStorageToPdf($src_path, $storage)

Convert XslFo file (located on storage) to PDF format and return resulting file in response.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.xslfo)
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->getXslFoInStorageToPdf($src_path, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->getXslFoInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.xslfo) |
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAppendDocument**
> \Aspose\PDF\Model\DocumentResponse postAppendDocument($name, $append_document, $append_file, $start_page, $end_page, $storage, $folder)

Append document to existing one.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The original document name.
$append_document = new \Aspose\PDF\Model\AppendDocument(); // \Aspose\PDF\Model\AppendDocument | with the append document data.
$append_file = "append_file_example"; // string | Append file server path.
$start_page = 0; // int | Appending start page.
$end_page = 0; // int | Appending end page.
$storage = "storage_example"; // string | The documents storage.
$folder = "folder_example"; // string | The original document folder.

try {
    $result = $apiInstance->postAppendDocument($name, $append_document, $append_file, $start_page, $end_page, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->postAppendDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCreateField**
> \Aspose\PDF\Model\AsposeResponse postCreateField($name, $page, $field, $storage, $folder)

Create field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page = 56; // int | Document page number.
$field = new \Aspose\PDF\Model\Field(); // \Aspose\PDF\Model\Field | with the field data.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->postCreateField($name, $page, $field, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->postCreateField: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDocumentTextReplace**
> \Aspose\PDF\Model\TextReplaceResponse postDocumentTextReplace($name, $text_replace, $storage, $folder)

Document's replace text method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$text_replace = new \Aspose\PDF\Model\TextReplaceListRequest(); // \Aspose\PDF\Model\TextReplaceListRequest | 
$storage = "storage_example"; // string | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->postDocumentTextReplace($name, $text_replace, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->postDocumentTextReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  |
 **text_replace** | [**\Aspose\PDF\Model\TextReplaceListRequest**](../Model/TextReplaceListRequest.md)|  |
 **storage** | **string**|  | [optional]
 **folder** | **string**|  | [optional]

### Return type

[**\Aspose\PDF\Model\TextReplaceResponse**](../Model/TextReplaceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postInsertImage**
> \Aspose\PDF\Model\AsposeResponse postInsertImage($name, $page_number, $llx, $lly, $urx, $ury, $image_file_path, $storage, $folder, $image)

Insert image to document page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$llx = 1.2; // double | Coordinate lower left X.
$lly = 1.2; // double | Coordinate lower left Y.
$urx = 1.2; // double | Coordinate upper right X.
$ury = 1.2; // double | Coordinate upper right Y.
$image_file_path = "image_file_path_example"; // string | Path to image file if specified. Request content is used otherwise.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.
$image = "/path/to/file.txt"; // \SplFileObject | Image file.

try {
    $result = $apiInstance->postInsertImage($name, $page_number, $llx, $lly, $urx, $ury, $image_file_path, $storage, $folder, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->postInsertImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postMovePage**
> \Aspose\PDF\Model\AsposeResponse postMovePage($name, $page_number, $new_index, $storage, $folder)

Move page to new position.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$new_index = 56; // int | The new page position/index.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->postMovePage($name, $page_number, $new_index, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->postMovePage: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postOptimizeDocument**
> \Aspose\PDF\Model\AsposeResponse postOptimizeDocument($name, $options, $storage, $folder)

Optimize document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$options = new \Aspose\PDF\Model\OptimizeOptions(); // \Aspose\PDF\Model\OptimizeOptions | The optimization options.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->postOptimizeDocument($name, $options, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->postOptimizeDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **options** | [**\Aspose\PDF\Model\OptimizeOptions**](../Model/OptimizeOptions.md)| The optimization options. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPageFreeTextAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageFreeTextAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page free text annotations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$annotations = array(new \Aspose\PDF\Model\FreeTextAnnotation()); // \Aspose\PDF\Model\FreeTextAnnotation[] | The array of annotation.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->postPageFreeTextAnnotations($name, $page_number, $annotations, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->postPageFreeTextAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPageLinkAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageLinkAnnotations($name, $page_number, $links, $storage, $folder)

Add document page link annotations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$links = array(new \Aspose\PDF\Model\LinkAnnotation()); // \Aspose\PDF\Model\LinkAnnotation[] | Array of link anotation.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->postPageLinkAnnotations($name, $page_number, $links, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->postPageLinkAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPageTextAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageTextAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page text annotations.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$annotations = array(new \Aspose\PDF\Model\TextAnnotation()); // \Aspose\PDF\Model\TextAnnotation[] | The array of annotation.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->postPageTextAnnotations($name, $page_number, $annotations, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->postPageTextAnnotations: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postPageTextReplace**
> \Aspose\PDF\Model\TextReplaceResponse postPageTextReplace($name, $page_number, $text_replace_list_request, $storage, $folder)

Page's replace text method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$page_number = 56; // int | 
$text_replace_list_request = new \Aspose\PDF\Model\TextReplaceListRequest(); // \Aspose\PDF\Model\TextReplaceListRequest | 
$storage = "storage_example"; // string | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->postPageTextReplace($name, $page_number, $text_replace_list_request, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->postPageTextReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignDocument**
> \Aspose\PDF\Model\AsposeResponse postSignDocument($name, $signature, $storage, $folder)

Sign document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$signature = new \Aspose\PDF\Model\Signature(); // \Aspose\PDF\Model\Signature | Signature object containing signature data.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->postSignDocument($name, $signature, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->postSignDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **signature** | [**\Aspose\PDF\Model\Signature**](../Model/Signature.md)| Signature object containing signature data. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignPage**
> \Aspose\PDF\Model\AsposeResponse postSignPage($name, $page_number, $signature, $storage, $folder)

Sign page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$signature = new \Aspose\PDF\Model\Signature(); // \Aspose\PDF\Model\Signature | Signature object containing signature data.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->postSignPage($name, $page_number, $signature, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->postSignPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSplitDocument**
> \Aspose\PDF\Model\SplitResultResponse postSplitDocument($name, $format, $from, $to, $storage, $folder)

Split document to parts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Document name.
$format = "format_example"; // string | Resulting documents format.
$from = 56; // int | Start page if defined.
$to = 56; // int | End page if defined.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->postSplitDocument($name, $format, $from, $to, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->postSplitDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putAddNewPage**
> \Aspose\PDF\Model\DocumentPagesResponse putAddNewPage($name, $storage, $folder)

Add new page to end of the document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->putAddNewPage($name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putAddNewPage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentPagesResponse**](../Model/DocumentPagesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putAddText**
> \Aspose\PDF\Model\AsposeResponse putAddText($name, $page_number, $paragraph, $folder, $storage)

Add text to PDF document page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | Number of page (starting from 1).
$paragraph = new \Aspose\PDF\Model\Paragraph(); // \Aspose\PDF\Model\Paragraph | Paragraph data.
$folder = "folder_example"; // string | Document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putAddText($name, $page_number, $paragraph, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putAddText: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCreate**
> \Aspose\PDF\Model\AsposeResponse putCreate($path, $file, $version_id, $storage)

Upload a specific file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$path = "path_example"; // string | Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext
$file = "/path/to/file.txt"; // \SplFileObject | File to upload
$version_id = "version_id_example"; // string | Source file's version
$storage = "storage_example"; // string | User's storage name

try {
    $result = $apiInstance->putCreate($path, $file, $version_id, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext |
 **file** | **\SplFileObject**| File to upload |
 **version_id** | **string**| Source file&#39;s version | [optional]
 **storage** | **string**| User&#39;s storage name | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putCreateDocument**
> \Aspose\PDF\Model\DocumentResponse putCreateDocument($name, $storage, $folder)

Create empty document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The new document name.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The new document folder.

try {
    $result = $apiInstance->putCreateDocument($name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putCreateDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The new document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The new document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentResponse**](../Model/DocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putEpubInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putEpubInStorageToPdf($name, $src_path, $storage, $dst_folder)

Convert EPUB file (located on storage) to PDF format and upload resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.epub)
$storage = "storage_example"; // string | The document storage.
$dst_folder = "dst_folder_example"; // string | The destination document folder.

try {
    $result = $apiInstance->putEpubInStorageToPdf($name, $src_path, $storage, $dst_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putEpubInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.epub) |
 **storage** | **string**| The document storage. | [optional]
 **dst_folder** | **string**| The destination document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFieldsFlatten**
> \Aspose\PDF\Model\AsposeResponse putFieldsFlatten($name, $storage, $folder)

Flatten form fields in document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->putFieldsFlatten($name, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putFieldsFlatten: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putFreeTextAnnotation**
> \Aspose\PDF\Model\FreeTextAnnotationResponse putFreeTextAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document free text annotation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$annotation_id = "annotation_id_example"; // string | The annotation ID.
$annotation = new \Aspose\PDF\Model\FreeTextAnnotation(); // \Aspose\PDF\Model\FreeTextAnnotation | Annotation.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->putFreeTextAnnotation($name, $annotation_id, $annotation, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putFreeTextAnnotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putHtmlInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putHtmlInStorageToPdf($name, $src_path, $html_file_name, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $dst_folder, $storage)

Convert HTML file (located on storage) to PDF format and upload resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.zip)
$html_file_name = "html_file_name_example"; // string | Name of HTML file in ZIP.
$height = 1.2; // double | Page height
$width = 1.2; // double | Page width
$is_landscape = true; // bool | Is page landscaped
$margin_left = 1.2; // double | Page margin left
$margin_bottom = 1.2; // double | Page margin bottom
$margin_right = 1.2; // double | Page margin right
$margin_top = 1.2; // double | Page margin top
$dst_folder = "dst_folder_example"; // string | The destination document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putHtmlInStorageToPdf($name, $src_path, $html_file_name, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $dst_folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putHtmlInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putImageExtractAsGif**
> \Aspose\PDF\Model\AsposeResponse putImageExtractAsGif($name, $image_id, $width, $height, $storage, $folder, $dest_folder)

Extract document image in GIF format to folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$image_id = "image_id_example"; // string | Image ID.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.
$dest_folder = "dest_folder_example"; // string | The document folder.

try {
    $result = $apiInstance->putImageExtractAsGif($name, $image_id, $width, $height, $storage, $folder, $dest_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putImageExtractAsGif: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putImageExtractAsJpeg**
> \Aspose\PDF\Model\AsposeResponse putImageExtractAsJpeg($name, $image_id, $width, $height, $storage, $folder, $dest_folder)

Extract document image in JPEG format to folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$image_id = "image_id_example"; // string | Image ID.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.
$dest_folder = "dest_folder_example"; // string | The document folder.

try {
    $result = $apiInstance->putImageExtractAsJpeg($name, $image_id, $width, $height, $storage, $folder, $dest_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putImageExtractAsJpeg: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putImageExtractAsPng**
> \Aspose\PDF\Model\AsposeResponse putImageExtractAsPng($name, $image_id, $width, $height, $storage, $folder, $dest_folder)

Extract document image in PNG format to folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$image_id = "image_id_example"; // string | Image ID.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.
$dest_folder = "dest_folder_example"; // string | The document folder.

try {
    $result = $apiInstance->putImageExtractAsPng($name, $image_id, $width, $height, $storage, $folder, $dest_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putImageExtractAsPng: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putImageExtractAsTiff**
> \Aspose\PDF\Model\AsposeResponse putImageExtractAsTiff($name, $image_id, $width, $height, $storage, $folder, $dest_folder)

Extract document image in TIFF format to folder

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$image_id = "image_id_example"; // string | Image ID.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.
$dest_folder = "dest_folder_example"; // string | The document folder.

try {
    $result = $apiInstance->putImageExtractAsTiff($name, $image_id, $width, $height, $storage, $folder, $dest_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putImageExtractAsTiff: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putImageInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putImageInStorageToPdf($name, $image_templates, $dst_folder, $storage)

Convert image file (located on storage) to PDF format and upload resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$image_templates = new \Aspose\PDF\Model\ImageTemplatesRequest(); // \Aspose\PDF\Model\ImageTemplatesRequest | Image templates
$dst_folder = "dst_folder_example"; // string | The destination document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putImageInStorageToPdf($name, $image_templates, $dst_folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putImageInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **image_templates** | [**\Aspose\PDF\Model\ImageTemplatesRequest**](../Model/ImageTemplatesRequest.md)| Image templates |
 **dst_folder** | **string**| The destination document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putImagesExtractAsGif**
> \Aspose\PDF\Model\AsposeResponse putImagesExtractAsGif($name, $page_number, $width, $height, $storage, $folder, $dest_folder)

Extract document images in GIF format to folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.
$dest_folder = "dest_folder_example"; // string | The document folder.

try {
    $result = $apiInstance->putImagesExtractAsGif($name, $page_number, $width, $height, $storage, $folder, $dest_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putImagesExtractAsGif: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putImagesExtractAsJpeg**
> \Aspose\PDF\Model\AsposeResponse putImagesExtractAsJpeg($name, $page_number, $width, $height, $storage, $folder, $dest_folder)

Extract document images in JPEG format to folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$storage = "storage_example"; // string | 
$folder = "folder_example"; // string | The document folder.
$dest_folder = "dest_folder_example"; // string | The document folder.

try {
    $result = $apiInstance->putImagesExtractAsJpeg($name, $page_number, $width, $height, $storage, $folder, $dest_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putImagesExtractAsJpeg: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putImagesExtractAsPng**
> \Aspose\PDF\Model\AsposeResponse putImagesExtractAsPng($name, $page_number, $width, $height, $storage, $folder, $dest_folder)

Extract document images in PNG format to folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.
$dest_folder = "dest_folder_example"; // string | The document folder.

try {
    $result = $apiInstance->putImagesExtractAsPng($name, $page_number, $width, $height, $storage, $folder, $dest_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putImagesExtractAsPng: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putImagesExtractAsTiff**
> \Aspose\PDF\Model\AsposeResponse putImagesExtractAsTiff($name, $page_number, $width, $height, $storage, $folder, $dest_folder)

Extract document images in TIFF format to folder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.
$dest_folder = "dest_folder_example"; // string | The document folder.

try {
    $result = $apiInstance->putImagesExtractAsTiff($name, $page_number, $width, $height, $storage, $folder, $dest_folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putImagesExtractAsTiff: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putLaTeXInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putLaTeXInStorageToPdf($name, $src_path, $dst_folder, $storage)

Convert LaTeX file (located on storage) to PDF format and upload resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.tex)
$dst_folder = "dst_folder_example"; // string | The destination document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putLaTeXInStorageToPdf($name, $src_path, $dst_folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putLaTeXInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.tex) |
 **dst_folder** | **string**| The destination document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putLinkAnnotation**
> \Aspose\PDF\Model\LinkAnnotationResponse putLinkAnnotation($name, $link_id, $link, $storage, $folder)

Replace document page link annotations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$link_id = "link_id_example"; // string | The link ID.
$link = new \Aspose\PDF\Model\LinkAnnotation(); // \Aspose\PDF\Model\LinkAnnotation | Link anotation.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->putLinkAnnotation($name, $link_id, $link, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putLinkAnnotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMergeDocuments**
> \SplFileObject putMergeDocuments($name, $merge_documents, $storage, $folder)

Merge a list of documents.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Resulting documen name.
$merge_documents = new \Aspose\PDF\Model\MergeDocuments(); // \Aspose\PDF\Model\MergeDocuments | with a list of documents.
$storage = "storage_example"; // string | Resulting document storage.
$folder = "folder_example"; // string | Resulting document folder.

try {
    $result = $apiInstance->putMergeDocuments($name, $merge_documents, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putMergeDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Resulting documen name. |
 **merge_documents** | [**\Aspose\PDF\Model\MergeDocuments**](../Model/MergeDocuments.md)| with a list of documents. | [optional]
 **storage** | **string**| Resulting document storage. | [optional]
 **folder** | **string**| Resulting document folder. | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putMhtInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putMhtInStorageToPdf($name, $src_path, $dst_folder, $storage)

Convert MHT file (located on storage) to PDF format and upload resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.mht)
$dst_folder = "dst_folder_example"; // string | The destination document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putMhtInStorageToPdf($name, $src_path, $dst_folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putMhtInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.mht) |
 **dst_folder** | **string**| The destination document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPageAddStamp**
> \Aspose\PDF\Model\AsposeResponse putPageAddStamp($name, $page_number, $stamp, $storage, $folder)

Add page stamp.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$stamp = new \Aspose\PDF\Model\Stamp(); // \Aspose\PDF\Model\Stamp | with data.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->putPageAddStamp($name, $page_number, $stamp, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPageAddStamp: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPageConvertToBmp**
> \Aspose\PDF\Model\AsposeResponse putPageConvertToBmp($name, $page_number, $out_path, $width, $height, $folder, $storage)

Convert document page to bmp image and upload resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$out_path = "out_path_example"; // string | The out path of result image.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPageConvertToBmp($name, $page_number, $out_path, $width, $height, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPageConvertToBmp: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPageConvertToEmf**
> \Aspose\PDF\Model\AsposeResponse putPageConvertToEmf($name, $page_number, $out_path, $width, $height, $folder, $storage)

Convert document page to emf image and upload resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$out_path = "out_path_example"; // string | The out path of result image.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPageConvertToEmf($name, $page_number, $out_path, $width, $height, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPageConvertToEmf: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPageConvertToGif**
> \Aspose\PDF\Model\AsposeResponse putPageConvertToGif($name, $page_number, $out_path, $width, $height, $folder, $storage)

Convert document page to gif image and upload resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$out_path = "out_path_example"; // string | The out path of result image.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPageConvertToGif($name, $page_number, $out_path, $width, $height, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPageConvertToGif: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPageConvertToJpeg**
> \Aspose\PDF\Model\AsposeResponse putPageConvertToJpeg($name, $page_number, $out_path, $width, $height, $folder, $storage)

Convert document page to Jpeg image and upload resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$out_path = "out_path_example"; // string | The out path of result image.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPageConvertToJpeg($name, $page_number, $out_path, $width, $height, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPageConvertToJpeg: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPageConvertToPng**
> \Aspose\PDF\Model\AsposeResponse putPageConvertToPng($name, $page_number, $out_path, $width, $height, $folder, $storage)

Convert document page to png image and upload resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$out_path = "out_path_example"; // string | The out path of result image.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPageConvertToPng($name, $page_number, $out_path, $width, $height, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPageConvertToPng: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPageConvertToTiff**
> \Aspose\PDF\Model\AsposeResponse putPageConvertToTiff($name, $page_number, $out_path, $width, $height, $folder, $storage)

Convert document page to Tiff image and upload resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$page_number = 56; // int | The page number.
$out_path = "out_path_example"; // string | The out path of result image.
$width = 56; // int | The converted image width.
$height = 56; // int | The converted image height.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPageConvertToTiff($name, $page_number, $out_path, $width, $height, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPageConvertToTiff: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPclInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putPclInStorageToPdf($name, $src_path, $dst_folder, $storage)

Convert PCL file (located on storage) to PDF format and upload resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.pcl)
$dst_folder = "dst_folder_example"; // string | The destination document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPclInStorageToPdf($name, $src_path, $dst_folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPclInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.pcl) |
 **dst_folder** | **string**| The destination document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInRequestToDoc**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToDoc($out_path, $add_return_to_line_end, $format, $image_resolution_x, $image_resolution_y, $max_distance_between_text_lines, $mode, $recognize_bullets, $relative_horizontal_proximity, $storage, $file)

Converts PDF document (in request content) to DOC format and uploads resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.doc)
$add_return_to_line_end = true; // bool | Add return to line end.
$format = "format_example"; // string | Allows to specify .doc or .docx file format.
$image_resolution_x = 56; // int | Image resolution X.
$image_resolution_y = 56; // int | Image resolution Y.
$max_distance_between_text_lines = 1.2; // double | Max distance between text lines.
$mode = "mode_example"; // string | Allows to control how a PDF document is converted into a word processing document.
$recognize_bullets = true; // bool | Recognize bullets.
$relative_horizontal_proximity = 1.2; // double | Relative horizontal proximity.
$storage = "storage_example"; // string | The document storage.
$file = "/path/to/file.txt"; // \SplFileObject | A file to be converted.

try {
    $result = $apiInstance->putPdfInRequestToDoc($out_path, $add_return_to_line_end, $format, $image_resolution_x, $image_resolution_y, $max_distance_between_text_lines, $mode, $recognize_bullets, $relative_horizontal_proximity, $storage, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInRequestToDoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInRequestToEpub**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToEpub($out_path, $content_recognition_mode, $storage, $file)

Converts PDF document (in request content) to EPUB format and uploads resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.epub)
$content_recognition_mode = "content_recognition_mode_example"; // string | ?roperty tunes conversion for this or that desirable method of recognition of content.
$storage = "storage_example"; // string | The document storage.
$file = "/path/to/file.txt"; // \SplFileObject | A file to be converted.

try {
    $result = $apiInstance->putPdfInRequestToEpub($out_path, $content_recognition_mode, $storage, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInRequestToEpub: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.epub) |
 **content_recognition_mode** | **string**| ?roperty tunes conversion for this or that desirable method of recognition of content. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInRequestToHtml**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToHtml($out_path, $additional_margin_width_in_points, $compress_svg_graphics_if_any, $convert_marked_content_to_layers, $default_font_name, $document_type, $fixed_layout, $image_resolution, $minimal_line_width, $prevent_glyphs_grouping, $split_css_into_pages, $split_into_pages, $use_z_order, $antialiasing_processing, $css_class_names_prefix, $explicit_list_of_saved_pages, $font_encoding_strategy, $font_saving_mode, $html_markup_generation_mode, $letters_positioning_method, $pages_flow_type_depends_on_viewers_screen_size, $parts_embedding_mode, $raster_images_saving_mode, $remove_empty_areas_on_top_and_bottom, $save_shadowed_texts_as_transparent_texts, $save_transparent_texts, $special_folder_for_all_images, $special_folder_for_svg_images, $try_save_text_underlining_and_strikeouting_in_css, $storage, $file)

Converts PDF document (in request content) to Html format and uploads resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.html)
$additional_margin_width_in_points = 56; // int | Defines width of margin that will be forcibly left around that output HTML-areas.
$compress_svg_graphics_if_any = true; // bool | The flag that indicates whether found SVG graphics(if any) will be compressed(zipped) into SVGZ format during saving.
$convert_marked_content_to_layers = true; // bool | If attribute ConvertMarkedContentToLayers set to true then an all elements inside a PDF marked content (layer) will be put into an HTML div with \"data-pdflayer\" attribute specifying a layer name. This layer name will be extracted from optional properties of PDF marked content. If this attribute is false (by default) then no any layers will be created from PDF marked content.
$default_font_name = "default_font_name_example"; // string | Specifies the name of an installed font which is used to substitute any document font that is not embedded and not installed in the system. If null then default substitution font is used.
$document_type = "document_type_example"; // string | Result document type.
$fixed_layout = true; // bool | The value indicating whether that HTML is created as fixed layout.
$image_resolution = 56; // int | Resolution for image rendering.
$minimal_line_width = 56; // int | This attribute sets minimal width of graphic path line. If thickness of line is less than 1px Adobe Acrobat rounds it to this value. So this attribute can be used to emulate this behavior for HTML browsers.
$prevent_glyphs_grouping = true; // bool | This attribute switch on the mode when text glyphs will not be grouped into words and strings This mode allows to keep maximum precision during positioning of glyphs on the page and it can be used for conversion documents with music notes or glyphs that should be placed separately each other. This parameter will be applied to document only when the value of FixedLayout attribute is true.
$split_css_into_pages = true; // bool | When multipage-mode selected(i.e 'SplitIntoPages' is 'true'), then this attribute defines whether should be created separate CSS-file for each result HTML page.
$split_into_pages = true; // bool | The flag that indicates whether each page of source document will be converted into it's own target HTML document, i.e whether result HTML will be splitted into several HTML-pages.
$use_z_order = true; // bool | If attribute UseZORder set to true, graphics and text are added to resultant HTML document accordingly Z-order in original PDF document. If this attribute is false all graphics is put as single layer which may cause some unnecessary effects for overlapped objects.
$antialiasing_processing = "antialiasing_processing_example"; // string | The parameter defines required antialiasing measures during conversion of compound background images from PDF to HTML.
$css_class_names_prefix = "css_class_names_prefix_example"; // string | When PDFtoHTML converter generates result CSSs, CSS class names (something like \".stl_01 {}\" ... \".stl_NN {}) are generated and used in result CSS. This property allows forcibly set class name prefix.
$explicit_list_of_saved_pages = array(56); // int[] | With this property You can explicitely define what pages of document should be converted. Pages in this list must have 1-based numbers. I.e. valid numbers of pages must be taken from range (1...[NumberOfPagesInConvertedDocument]) Order of appearing of pages in this list does not affect their order in result HTML page(s) - in result pages allways will go in order in which they are present in source PDF.
$font_encoding_strategy = "font_encoding_strategy_example"; // string | Defines encoding special rule to tune PDF decoding for current document.
$font_saving_mode = "font_saving_mode_example"; // string | Defines font saving mode that will be used during saving of PDF to desirable format.
$html_markup_generation_mode = "html_markup_generation_mode_example"; // string | Sometimes specific reqirments to generation of HTML markup are present. This parameter defines HTML preparing modes that can be used during conversion of PDF to HTML to match such specific requirments.
$letters_positioning_method = "letters_positioning_method_example"; // string | The mode of positioning of letters in words in result HTML.
$pages_flow_type_depends_on_viewers_screen_size = true; // bool | If attribute 'SplitOnPages=false', than whole HTML representing all input PDF pages will be put into one big result HTML file. This flag defines whether result HTML will be generated in such way that flow of areas that represent PDF pages in result HTML will depend on screen resolution of viewer.
$parts_embedding_mode = "parts_embedding_mode_example"; // string | It defines whether referenced files (HTML, Fonts,Images, CSSes) will be embedded into main HTML file or will be generated as apart binary entities.
$raster_images_saving_mode = "raster_images_saving_mode_example"; // string | Converted PDF can contain raster images This parameter defines how they should be handled during conversion of PDF to HTML.
$remove_empty_areas_on_top_and_bottom = true; // bool | Defines whether in created HTML will be removed top and bottom empty area without any content (if any).
$save_shadowed_texts_as_transparent_texts = true; // bool | Pdf can contain texts that are shadowed by another elements (f.e. by images) but can be selected to clipboard in Acrobat Reader (usually it happen when document contains images and OCRed texts extracted from it). This settings tells to converter whether we need save such texts as transparent selectable texts in result HTML to mimic behaviour of Acrobat Reader (othervise such texts are usually saved as hidden, not available for copying to clipboard).
$save_transparent_texts = true; // bool | Pdf can contain transparent texts that can be selected to clipboard (usually it happen when document contains images and OCRed texts extracted from it). This settings tells to converter whether we need save such texts as transparent selectable texts in result HTML.
$special_folder_for_all_images = "special_folder_for_all_images_example"; // string | The path to directory to which must be saved any images if they are encountered during saving of document as HTML. If parameter is empty or null then image files(if any) wil be saved together with other files linked to HTML It does not affect anything if CustomImageSavingStrategy property was successfully used to process relevant image file.
$special_folder_for_svg_images = "special_folder_for_svg_images_example"; // string | The path to directory to which must be saved only SVG-images if they are encountered during saving of document as HTML. If parameter is empty or null then SVG files(if any) wil be saved together with other image-files (near to output file) or in special folder for images (if it specified in SpecialImagesFolderIfAny option). It does not affect anything if CustomImageSavingStrategy property was successfully used to process relevant image file.
$try_save_text_underlining_and_strikeouting_in_css = true; // bool | PDF itself does not contain underlining markers for texts. It emulated with line situated under text. This option allows converter try guess that this or that line is a text's underlining and put this info into CSS instead of drawing of underlining graphically.
$storage = "storage_example"; // string | The document storage.
$file = "/path/to/file.txt"; // \SplFileObject | A file to be converted.

try {
    $result = $apiInstance->putPdfInRequestToHtml($out_path, $additional_margin_width_in_points, $compress_svg_graphics_if_any, $convert_marked_content_to_layers, $default_font_name, $document_type, $fixed_layout, $image_resolution, $minimal_line_width, $prevent_glyphs_grouping, $split_css_into_pages, $split_into_pages, $use_z_order, $antialiasing_processing, $css_class_names_prefix, $explicit_list_of_saved_pages, $font_encoding_strategy, $font_saving_mode, $html_markup_generation_mode, $letters_positioning_method, $pages_flow_type_depends_on_viewers_screen_size, $parts_embedding_mode, $raster_images_saving_mode, $remove_empty_areas_on_top_and_bottom, $save_shadowed_texts_as_transparent_texts, $save_transparent_texts, $special_folder_for_all_images, $special_folder_for_svg_images, $try_save_text_underlining_and_strikeouting_in_css, $storage, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInRequestToHtml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.html) |
 **additional_margin_width_in_points** | **int**| Defines width of margin that will be forcibly left around that output HTML-areas. | [optional]
 **compress_svg_graphics_if_any** | **bool**| The flag that indicates whether found SVG graphics(if any) will be compressed(zipped) into SVGZ format during saving. | [optional]
 **convert_marked_content_to_layers** | **bool**| If attribute ConvertMarkedContentToLayers set to true then an all elements inside a PDF marked content (layer) will be put into an HTML div with \&quot;data-pdflayer\&quot; attribute specifying a layer name. This layer name will be extracted from optional properties of PDF marked content. If this attribute is false (by default) then no any layers will be created from PDF marked content. | [optional]
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
 **css_class_names_prefix** | **string**| When PDFtoHTML converter generates result CSSs, CSS class names (something like \&quot;.stl_01 {}\&quot; ... \&quot;.stl_NN {}) are generated and used in result CSS. This property allows forcibly set class name prefix. | [optional]
 **explicit_list_of_saved_pages** | [**int[]**](../Model/int.md)| With this property You can explicitely define what pages of document should be converted. Pages in this list must have 1-based numbers. I.e. valid numbers of pages must be taken from range (1...[NumberOfPagesInConvertedDocument]) Order of appearing of pages in this list does not affect their order in result HTML page(s) - in result pages allways will go in order in which they are present in source PDF. | [optional]
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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInRequestToLaTeX**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToLaTeX($out_path, $pages_count, $storage, $file)

Converts PDF document (in request content) to LaTeX format and uploads resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.tex)
$pages_count = 56; // int | Pages count.
$storage = "storage_example"; // string | The document storage.
$file = "/path/to/file.txt"; // \SplFileObject | A file to be converted.

try {
    $result = $apiInstance->putPdfInRequestToLaTeX($out_path, $pages_count, $storage, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInRequestToLaTeX: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.tex) |
 **pages_count** | **int**| Pages count. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInRequestToMobiXml**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToMobiXml($out_path, $storage, $file)

Converts PDF document (in request content) to MOBIXML format and uploads resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.mobixml)
$storage = "storage_example"; // string | The document storage.
$file = "/path/to/file.txt"; // \SplFileObject | A file to be converted.

try {
    $result = $apiInstance->putPdfInRequestToMobiXml($out_path, $storage, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInRequestToMobiXml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.mobixml) |
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInRequestToPdfA**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToPdfA($out_path, $type, $storage, $file)

Converts PDF document (in request content) to PdfA format and uploads resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.pdf)
$type = "type_example"; // string | Type of PdfA format.
$storage = "storage_example"; // string | The document storage.
$file = "/path/to/file.txt"; // \SplFileObject | A file to be converted.

try {
    $result = $apiInstance->putPdfInRequestToPdfA($out_path, $type, $storage, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInRequestToPdfA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.pdf) |
 **type** | **string**| Type of PdfA format. |
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInRequestToPptx**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToPptx($out_path, $separate_images, $slides_as_images, $storage, $file)

Converts PDF document (in request content) to PPTX format and uploads resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.pptx)
$separate_images = true; // bool | Separate images.
$slides_as_images = true; // bool | Slides as images.
$storage = "storage_example"; // string | The document storage.
$file = "/path/to/file.txt"; // \SplFileObject | A file to be converted.

try {
    $result = $apiInstance->putPdfInRequestToPptx($out_path, $separate_images, $slides_as_images, $storage, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInRequestToPptx: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInRequestToSvg**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToSvg($out_path, $storage, $file)

Converts PDF document (in request content) to SVG format and uploads resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.svg)
$storage = "storage_example"; // string | The document storage.
$file = "/path/to/file.txt"; // \SplFileObject | A file to be converted.

try {
    $result = $apiInstance->putPdfInRequestToSvg($out_path, $storage, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInRequestToSvg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.svg) |
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInRequestToTiff**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToTiff($out_path, $brightness, $compression, $color_depth, $left_margin, $right_margin, $top_margin, $bottom_margin, $orientation, $skip_blank_pages, $width, $height, $x_resolution, $y_resolution, $page_index, $page_count, $storage, $file)

Converts PDF document (in request content) to TIFF format and uploads resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.tiff)
$brightness = 1.2; // double | Image brightness.
$compression = "compression_example"; // string | Tiff compression. Possible values are: LZW, CCITT4, CCITT3, RLE, None.
$color_depth = "color_depth_example"; // string | Image color depth. Possible valuse are: Default, Format8bpp, Format4bpp, Format1bpp.
$left_margin = 56; // int | Left image margin.
$right_margin = 56; // int | Right image margin.
$top_margin = 56; // int | Top image margin.
$bottom_margin = 56; // int | Bottom image margin.
$orientation = "orientation_example"; // string | Image orientation. Possible values are: None, Landscape, Portait.
$skip_blank_pages = true; // bool | Skip blank pages flag.
$width = 56; // int | Image width.
$height = 56; // int | Image height.
$x_resolution = 56; // int | Horizontal resolution.
$y_resolution = 56; // int | Vertical resolution.
$page_index = 56; // int | Start page to export.
$page_count = 56; // int | Number of pages to export.
$storage = "storage_example"; // string | The document storage.
$file = "/path/to/file.txt"; // \SplFileObject | A file to be converted.

try {
    $result = $apiInstance->putPdfInRequestToTiff($out_path, $brightness, $compression, $color_depth, $left_margin, $right_margin, $top_margin, $bottom_margin, $orientation, $skip_blank_pages, $width, $height, $x_resolution, $y_resolution, $page_index, $page_count, $storage, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInRequestToTiff: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInRequestToXls**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToXls($out_path, $insert_blank_column_at_first, $minimize_the_number_of_worksheets, $scale_factor, $uniform_worksheets, $storage, $file)

Converts PDF document (in request content) to XLS format and uploads resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.xls)
$insert_blank_column_at_first = true; // bool | Insert blank column at first
$minimize_the_number_of_worksheets = true; // bool | Minimize the number of worksheets
$scale_factor = 1.2; // double | Scale factor
$uniform_worksheets = true; // bool | Uniform worksheets
$storage = "storage_example"; // string | The document storage.
$file = "/path/to/file.txt"; // \SplFileObject | A file to be converted.

try {
    $result = $apiInstance->putPdfInRequestToXls($out_path, $insert_blank_column_at_first, $minimize_the_number_of_worksheets, $scale_factor, $uniform_worksheets, $storage, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInRequestToXls: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInRequestToXml**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToXml($out_path, $storage, $file)

Converts PDF document (in request content) to XML format and uploads resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.xml)
$storage = "storage_example"; // string | The document storage.
$file = "/path/to/file.txt"; // \SplFileObject | A file to be converted.

try {
    $result = $apiInstance->putPdfInRequestToXml($out_path, $storage, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInRequestToXml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.xml) |
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInRequestToXps**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToXps($out_path, $storage, $file)

Converts PDF document (in request content) to XPS format and uploads resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.xps)
$storage = "storage_example"; // string | The document storage.
$file = "/path/to/file.txt"; // \SplFileObject | A file to be converted.

try {
    $result = $apiInstance->putPdfInRequestToXps($out_path, $storage, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInRequestToXps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.xps) |
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInStorageToDoc**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToDoc($name, $out_path, $add_return_to_line_end, $format, $image_resolution_x, $image_resolution_y, $max_distance_between_text_lines, $mode, $recognize_bullets, $relative_horizontal_proximity, $folder, $storage)

Converts PDF document (located on storage) to DOC format and uploads resulting file to storage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.doc)
$add_return_to_line_end = true; // bool | Add return to line end.
$format = "format_example"; // string | Allows to specify .doc or .docx file format.
$image_resolution_x = 56; // int | Image resolution X.
$image_resolution_y = 56; // int | Image resolution Y.
$max_distance_between_text_lines = 1.2; // double | Max distance between text lines.
$mode = "mode_example"; // string | Allows to control how a PDF document is converted into a word processing document.
$recognize_bullets = true; // bool | Recognize bullets.
$relative_horizontal_proximity = 1.2; // double | Relative horizontal proximity.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPdfInStorageToDoc($name, $out_path, $add_return_to_line_end, $format, $image_resolution_x, $image_resolution_y, $max_distance_between_text_lines, $mode, $recognize_bullets, $relative_horizontal_proximity, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInStorageToDoc: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInStorageToEpub**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToEpub($name, $out_path, $content_recognition_mode, $folder, $storage)

Converts PDF document (located on storage) to EPUB format and uploads resulting file to storage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.epub)
$content_recognition_mode = "content_recognition_mode_example"; // string | ?roperty tunes conversion for this or that desirable method of recognition of content.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPdfInStorageToEpub($name, $out_path, $content_recognition_mode, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInStorageToEpub: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInStorageToHtml**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToHtml($name, $out_path, $additional_margin_width_in_points, $compress_svg_graphics_if_any, $convert_marked_content_to_layers, $default_font_name, $document_type, $fixed_layout, $image_resolution, $minimal_line_width, $prevent_glyphs_grouping, $split_css_into_pages, $split_into_pages, $use_z_order, $antialiasing_processing, $css_class_names_prefix, $explicit_list_of_saved_pages, $font_encoding_strategy, $font_saving_mode, $html_markup_generation_mode, $letters_positioning_method, $pages_flow_type_depends_on_viewers_screen_size, $parts_embedding_mode, $raster_images_saving_mode, $remove_empty_areas_on_top_and_bottom, $save_shadowed_texts_as_transparent_texts, $save_transparent_texts, $special_folder_for_all_images, $special_folder_for_svg_images, $try_save_text_underlining_and_strikeouting_in_css, $folder, $storage)

Converts PDF document (located on storage) to Html format and uploads resulting file to storage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.html)
$additional_margin_width_in_points = 56; // int | Defines width of margin that will be forcibly left around that output HTML-areas.
$compress_svg_graphics_if_any = true; // bool | The flag that indicates whether found SVG graphics(if any) will be compressed(zipped) into SVGZ format during saving.
$convert_marked_content_to_layers = true; // bool | If attribute ConvertMarkedContentToLayers set to true then an all elements inside a PDF marked content (layer) will be put into an HTML div with \"data-pdflayer\" attribute specifying a layer name. This layer name will be extracted from optional properties of PDF marked content. If this attribute is false (by default) then no any layers will be created from PDF marked content.
$default_font_name = "default_font_name_example"; // string | Specifies the name of an installed font which is used to substitute any document font that is not embedded and not installed in the system. If null then default substitution font is used.
$document_type = "document_type_example"; // string | Result document type.
$fixed_layout = true; // bool | The value indicating whether that HTML is created as fixed layout.
$image_resolution = 56; // int | Resolution for image rendering.
$minimal_line_width = 56; // int | This attribute sets minimal width of graphic path line. If thickness of line is less than 1px Adobe Acrobat rounds it to this value. So this attribute can be used to emulate this behavior for HTML browsers.
$prevent_glyphs_grouping = true; // bool | This attribute switch on the mode when text glyphs will not be grouped into words and strings This mode allows to keep maximum precision during positioning of glyphs on the page and it can be used for conversion documents with music notes or glyphs that should be placed separately each other. This parameter will be applied to document only when the value of FixedLayout attribute is true.
$split_css_into_pages = true; // bool | When multipage-mode selected(i.e 'SplitIntoPages' is 'true'), then this attribute defines whether should be created separate CSS-file for each result HTML page.
$split_into_pages = true; // bool | The flag that indicates whether each page of source document will be converted into it's own target HTML document, i.e whether result HTML will be splitted into several HTML-pages.
$use_z_order = true; // bool | If attribute UseZORder set to true, graphics and text are added to resultant HTML document accordingly Z-order in original PDF document. If this attribute is false all graphics is put as single layer which may cause some unnecessary effects for overlapped objects.
$antialiasing_processing = "antialiasing_processing_example"; // string | The parameter defines required antialiasing measures during conversion of compound background images from PDF to HTML.
$css_class_names_prefix = "css_class_names_prefix_example"; // string | When PDFtoHTML converter generates result CSSs, CSS class names (something like \".stl_01 {}\" ... \".stl_NN {}) are generated and used in result CSS. This property allows forcibly set class name prefix.
$explicit_list_of_saved_pages = array(56); // int[] | With this property You can explicitely define what pages of document should be converted. Pages in this list must have 1-based numbers. I.e. valid numbers of pages must be taken from range (1...[NumberOfPagesInConvertedDocument]) Order of appearing of pages in this list does not affect their order in result HTML page(s) - in result pages allways will go in order in which they are present in source PDF.
$font_encoding_strategy = "font_encoding_strategy_example"; // string | Defines encoding special rule to tune PDF decoding for current document.
$font_saving_mode = "font_saving_mode_example"; // string | Defines font saving mode that will be used during saving of PDF to desirable format.
$html_markup_generation_mode = "html_markup_generation_mode_example"; // string | Sometimes specific reqirments to generation of HTML markup are present. This parameter defines HTML preparing modes that can be used during conversion of PDF to HTML to match such specific requirments.
$letters_positioning_method = "letters_positioning_method_example"; // string | The mode of positioning of letters in words in result HTML.
$pages_flow_type_depends_on_viewers_screen_size = true; // bool | If attribute 'SplitOnPages=false', than whole HTML representing all input PDF pages will be put into one big result HTML file. This flag defines whether result HTML will be generated in such way that flow of areas that represent PDF pages in result HTML will depend on screen resolution of viewer.
$parts_embedding_mode = "parts_embedding_mode_example"; // string | It defines whether referenced files (HTML, Fonts,Images, CSSes) will be embedded into main HTML file or will be generated as apart binary entities.
$raster_images_saving_mode = "raster_images_saving_mode_example"; // string | Converted PDF can contain raster images This parameter defines how they should be handled during conversion of PDF to HTML.
$remove_empty_areas_on_top_and_bottom = true; // bool | Defines whether in created HTML will be removed top and bottom empty area without any content (if any).
$save_shadowed_texts_as_transparent_texts = true; // bool | Pdf can contain texts that are shadowed by another elements (f.e. by images) but can be selected to clipboard in Acrobat Reader (usually it happen when document contains images and OCRed texts extracted from it). This settings tells to converter whether we need save such texts as transparent selectable texts in result HTML to mimic behaviour of Acrobat Reader (othervise such texts are usually saved as hidden, not available for copying to clipboard).
$save_transparent_texts = true; // bool | Pdf can contain transparent texts that can be selected to clipboard (usually it happen when document contains images and OCRed texts extracted from it). This settings tells to converter whether we need save such texts as transparent selectable texts in result HTML.
$special_folder_for_all_images = "special_folder_for_all_images_example"; // string | The path to directory to which must be saved any images if they are encountered during saving of document as HTML. If parameter is empty or null then image files(if any) wil be saved together with other files linked to HTML It does not affect anything if CustomImageSavingStrategy property was successfully used to process relevant image file.
$special_folder_for_svg_images = "special_folder_for_svg_images_example"; // string | The path to directory to which must be saved only SVG-images if they are encountered during saving of document as HTML. If parameter is empty or null then SVG files(if any) wil be saved together with other image-files (near to output file) or in special folder for images (if it specified in SpecialImagesFolderIfAny option). It does not affect anything if CustomImageSavingStrategy property was successfully used to process relevant image file.
$try_save_text_underlining_and_strikeouting_in_css = true; // bool | PDF itself does not contain underlining markers for texts. It emulated with line situated under text. This option allows converter try guess that this or that line is a text's underlining and put this info into CSS instead of drawing of underlining graphically.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPdfInStorageToHtml($name, $out_path, $additional_margin_width_in_points, $compress_svg_graphics_if_any, $convert_marked_content_to_layers, $default_font_name, $document_type, $fixed_layout, $image_resolution, $minimal_line_width, $prevent_glyphs_grouping, $split_css_into_pages, $split_into_pages, $use_z_order, $antialiasing_processing, $css_class_names_prefix, $explicit_list_of_saved_pages, $font_encoding_strategy, $font_saving_mode, $html_markup_generation_mode, $letters_positioning_method, $pages_flow_type_depends_on_viewers_screen_size, $parts_embedding_mode, $raster_images_saving_mode, $remove_empty_areas_on_top_and_bottom, $save_shadowed_texts_as_transparent_texts, $save_transparent_texts, $special_folder_for_all_images, $special_folder_for_svg_images, $try_save_text_underlining_and_strikeouting_in_css, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInStorageToHtml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.html) |
 **additional_margin_width_in_points** | **int**| Defines width of margin that will be forcibly left around that output HTML-areas. | [optional]
 **compress_svg_graphics_if_any** | **bool**| The flag that indicates whether found SVG graphics(if any) will be compressed(zipped) into SVGZ format during saving. | [optional]
 **convert_marked_content_to_layers** | **bool**| If attribute ConvertMarkedContentToLayers set to true then an all elements inside a PDF marked content (layer) will be put into an HTML div with \&quot;data-pdflayer\&quot; attribute specifying a layer name. This layer name will be extracted from optional properties of PDF marked content. If this attribute is false (by default) then no any layers will be created from PDF marked content. | [optional]
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
 **css_class_names_prefix** | **string**| When PDFtoHTML converter generates result CSSs, CSS class names (something like \&quot;.stl_01 {}\&quot; ... \&quot;.stl_NN {}) are generated and used in result CSS. This property allows forcibly set class name prefix. | [optional]
 **explicit_list_of_saved_pages** | [**int[]**](../Model/int.md)| With this property You can explicitely define what pages of document should be converted. Pages in this list must have 1-based numbers. I.e. valid numbers of pages must be taken from range (1...[NumberOfPagesInConvertedDocument]) Order of appearing of pages in this list does not affect their order in result HTML page(s) - in result pages allways will go in order in which they are present in source PDF. | [optional]
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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInStorageToLaTeX**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToLaTeX($name, $out_path, $pages_count, $folder, $storage)

Converts PDF document (located on storage) to LaTeX format and uploads resulting file to storage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.tex)
$pages_count = 56; // int | Pages count.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPdfInStorageToLaTeX($name, $out_path, $pages_count, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInStorageToLaTeX: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInStorageToMobiXml**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToMobiXml($name, $out_path, $folder, $storage)

Converts PDF document (located on storage) to MOBIXML format and uploads resulting file to storage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.mobixml)
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPdfInStorageToMobiXml($name, $out_path, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInStorageToMobiXml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.mobixml) |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInStorageToPdfA**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToPdfA($name, $out_path, $type, $folder, $storage)

Converts PDF document (located on storage) to PdfA format and uploads resulting file to storage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.pdf)
$type = "type_example"; // string | Type of PdfA format.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPdfInStorageToPdfA($name, $out_path, $type, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInStorageToPdfA: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInStorageToPptx**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToPptx($name, $out_path, $separate_images, $slides_as_images, $folder, $storage)

Converts PDF document (located on storage) to PPTX format and uploads resulting file to storage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.pptx)
$separate_images = true; // bool | Separate images.
$slides_as_images = true; // bool | Slides as images.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPdfInStorageToPptx($name, $out_path, $separate_images, $slides_as_images, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInStorageToPptx: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInStorageToSvg**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToSvg($name, $out_path, $folder, $storage)

Converts PDF document (located on storage) to SVG format and uploads resulting file to storage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.svg)
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPdfInStorageToSvg($name, $out_path, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInStorageToSvg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.svg) |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInStorageToTiff**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToTiff($name, $out_path, $brightness, $compression, $color_depth, $left_margin, $right_margin, $top_margin, $bottom_margin, $orientation, $skip_blank_pages, $width, $height, $x_resolution, $y_resolution, $page_index, $page_count, $folder, $storage)

Converts PDF document (located on storage) to TIFF format and uploads resulting file to storage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.tiff)
$brightness = 1.2; // double | Image brightness.
$compression = "compression_example"; // string | Tiff compression. Possible values are: LZW, CCITT4, CCITT3, RLE, None.
$color_depth = "color_depth_example"; // string | Image color depth. Possible valuse are: Default, Format8bpp, Format4bpp, Format1bpp.
$left_margin = 56; // int | Left image margin.
$right_margin = 56; // int | Right image margin.
$top_margin = 56; // int | Top image margin.
$bottom_margin = 56; // int | Bottom image margin.
$orientation = "orientation_example"; // string | Image orientation. Possible values are: None, Landscape, Portait.
$skip_blank_pages = true; // bool | Skip blank pages flag.
$width = 56; // int | Image width.
$height = 56; // int | Image height.
$x_resolution = 56; // int | Horizontal resolution.
$y_resolution = 56; // int | Vertical resolution.
$page_index = 56; // int | Start page to export.
$page_count = 56; // int | Number of pages to export.
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPdfInStorageToTiff($name, $out_path, $brightness, $compression, $color_depth, $left_margin, $right_margin, $top_margin, $bottom_margin, $orientation, $skip_blank_pages, $width, $height, $x_resolution, $y_resolution, $page_index, $page_count, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInStorageToTiff: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInStorageToXls**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToXls($name, $out_path, $insert_blank_column_at_first, $minimize_the_number_of_worksheets, $scale_factor, $uniform_worksheets, $folder, $storage)

Converts PDF document (located on storage) to XLS format and uploads resulting file to storage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.xls)
$insert_blank_column_at_first = true; // bool | Insert blank column at first
$minimize_the_number_of_worksheets = true; // bool | Minimize the number of worksheets
$scale_factor = 1.2; // double | Scale factor
$uniform_worksheets = true; // bool | Uniform worksheets
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPdfInStorageToXls($name, $out_path, $insert_blank_column_at_first, $minimize_the_number_of_worksheets, $scale_factor, $uniform_worksheets, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInStorageToXls: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInStorageToXml**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToXml($name, $out_path, $folder, $storage)

Converts PDF document (located on storage) to XML format and uploads resulting file to storage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.xml)
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPdfInStorageToXml($name, $out_path, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInStorageToXml: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.xml) |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPdfInStorageToXps**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToXps($name, $out_path, $folder, $storage)

Converts PDF document (located on storage) to XPS format and uploads resulting file to storage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.xps)
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPdfInStorageToXps($name, $out_path, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPdfInStorageToXps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.xps) |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPrivileges**
> \Aspose\PDF\Model\AsposeResponse putPrivileges($name, $privileges, $storage, $folder)

Update privilege document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$privileges = new \Aspose\PDF\Model\DocumentPrivilege(); // \Aspose\PDF\Model\DocumentPrivilege | Document privileges.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->putPrivileges($name, $privileges, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPrivileges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **privileges** | [**\Aspose\PDF\Model\DocumentPrivilege**](../Model/DocumentPrivilege.md)| Document privileges. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putPsInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putPsInStorageToPdf($name, $src_path, $dst_folder, $storage)

Convert PS file (located on storage) to PDF format and upload resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.ps)
$dst_folder = "dst_folder_example"; // string | The destination document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putPsInStorageToPdf($name, $src_path, $dst_folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putPsInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.ps) |
 **dst_folder** | **string**| The destination document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putReplaceImage**
> \Aspose\PDF\Model\ImageResponse putReplaceImage($name, $image_id, $image_file_path, $storage, $folder, $image)

Replace document image.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$image_id = "image_id_example"; // string | The image ID.
$image_file_path = "image_file_path_example"; // string | Path to image file if specified. Request content is used otherwise.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.
$image = "/path/to/file.txt"; // \SplFileObject | Image file.

try {
    $result = $apiInstance->putReplaceImage($name, $image_id, $image_file_path, $storage, $folder, $image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putReplaceImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSearchableDocument**
> \Aspose\PDF\Model\AsposeResponse putSearchableDocument($name, $storage, $folder, $lang)

Create searchable PDF document. Generate OCR layer for images in input PDF document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.
$lang = "lang_example"; // string | language for OCR engine. Possible values: eng, ara, bel, ben, bul, ces, dan, deu, ell, fin, fra, heb, hin, ind, isl, ita, jpn, kor, nld, nor, pol, por, ron, rus, spa, swe, tha, tur, ukr, vie, chi_sim, chi_tra or thier combination e.g. eng,rus

try {
    $result = $apiInstance->putSearchableDocument($name, $storage, $folder, $lang);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putSearchableDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]
 **lang** | **string**| language for OCR engine. Possible values: eng, ara, bel, ben, bul, ces, dan, deu, ell, fin, fra, heb, hin, ind, isl, ita, jpn, kor, nld, nor, pol, por, ron, rus, spa, swe, tha, tur, ukr, vie, chi_sim, chi_tra or thier combination e.g. eng,rus | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSetProperty**
> \Aspose\PDF\Model\DocumentPropertyResponse putSetProperty($name, $property_name, $value, $storage, $folder)

Add/update document property.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | 
$property_name = "property_name_example"; // string | 
$value = "value_example"; // string | 
$storage = "storage_example"; // string | 
$folder = "folder_example"; // string | 

try {
    $result = $apiInstance->putSetProperty($name, $property_name, $value, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putSetProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSvgInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putSvgInStorageToPdf($name, $src_path, $adjust_page_size, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $dst_folder, $storage)

Convert SVG file (located on storage) to PDF format and upload resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.svg)
$adjust_page_size = true; // bool | Adjust page size
$height = 1.2; // double | Page height
$width = 1.2; // double | Page width
$is_landscape = true; // bool | Is page landscaped
$margin_left = 1.2; // double | Page margin left
$margin_bottom = 1.2; // double | Page margin bottom
$margin_right = 1.2; // double | Page margin right
$margin_top = 1.2; // double | Page margin top
$dst_folder = "dst_folder_example"; // string | The destination document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putSvgInStorageToPdf($name, $src_path, $adjust_page_size, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $dst_folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putSvgInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putTextAnnotation**
> \Aspose\PDF\Model\TextAnnotationResponse putTextAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document text annotation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$annotation_id = "annotation_id_example"; // string | The annotation ID.
$annotation = new \Aspose\PDF\Model\TextAnnotation(); // \Aspose\PDF\Model\TextAnnotation | Annotation.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->putTextAnnotation($name, $annotation_id, $annotation, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putTextAnnotation: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUpdateField**
> \Aspose\PDF\Model\FieldResponse putUpdateField($name, $field_name, $field, $storage, $folder)

Update field.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$field_name = "field_name_example"; // string | The name of a field to be updated.
$field = new \Aspose\PDF\Model\Field(); // \Aspose\PDF\Model\Field | with the field data.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->putUpdateField($name, $field_name, $field, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putUpdateField: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putUpdateFields**
> \Aspose\PDF\Model\FieldsResponse putUpdateFields($name, $fields, $storage, $folder)

Update fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$fields = new \Aspose\PDF\Model\Fields(); // \Aspose\PDF\Model\Fields | with the fields data.
$storage = "storage_example"; // string | The document storage.
$folder = "folder_example"; // string | The document folder.

try {
    $result = $apiInstance->putUpdateFields($name, $fields, $storage, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putUpdateFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **fields** | [**\Aspose\PDF\Model\Fields**](../Model/Fields.md)| with the fields data. | [optional]
 **storage** | **string**| The document storage. | [optional]
 **folder** | **string**| The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FieldsResponse**](../Model/FieldsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putWebInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putWebInStorageToPdf($name, $url, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $dst_folder, $storage)

Convert web page to PDF format and upload resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$url = "url_example"; // string | Source url
$height = 1.2; // double | Page height
$width = 1.2; // double | Page width
$is_landscape = true; // bool | Is page landscaped
$margin_left = 1.2; // double | Page margin left
$margin_bottom = 1.2; // double | Page margin bottom
$margin_right = 1.2; // double | Page margin right
$margin_top = 1.2; // double | Page margin top
$dst_folder = "dst_folder_example"; // string | The destination document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putWebInStorageToPdf($name, $url, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $dst_folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putWebInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putXfaPdfInRequestToAcroForm**
> \Aspose\PDF\Model\AsposeResponse putXfaPdfInRequestToAcroForm($out_path, $storage, $file)

Converts PDF document which contatins XFA form (in request content) to PDF with AcroForm and uploads resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.pdf)
$storage = "storage_example"; // string | The document storage.
$file = "/path/to/file.txt"; // \SplFileObject | A file to be converted.

try {
    $result = $apiInstance->putXfaPdfInRequestToAcroForm($out_path, $storage, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putXfaPdfInRequestToAcroForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.pdf) |
 **storage** | **string**| The document storage. | [optional]
 **file** | **\SplFileObject**| A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putXfaPdfInStorageToAcroForm**
> \Aspose\PDF\Model\AsposeResponse putXfaPdfInStorageToAcroForm($name, $out_path, $folder, $storage)

Converts PDF document which contatins XFA form (located on storage) to PDF with AcroForm and uploads resulting file to storage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$out_path = "out_path_example"; // string | Full resulting filename (ex. /folder1/folder2/result.pdf)
$folder = "folder_example"; // string | The document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putXfaPdfInStorageToAcroForm($name, $out_path, $folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putXfaPdfInStorageToAcroForm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **out_path** | **string**| Full resulting filename (ex. /folder1/folder2/result.pdf) |
 **folder** | **string**| The document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putXmlInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putXmlInStorageToPdf($name, $src_path, $xsl_file_path, $dst_folder, $storage)

Convert XML file (located on storage) to PDF format and upload resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.xml)
$xsl_file_path = "xsl_file_path_example"; // string | Full XSL source filename (ex. /folder1/folder2/template.xsl)
$dst_folder = "dst_folder_example"; // string | The destination document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putXmlInStorageToPdf($name, $src_path, $xsl_file_path, $dst_folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putXmlInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

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

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putXpsInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putXpsInStorageToPdf($name, $src_path, $dst_folder, $storage)

Convert XPS file (located on storage) to PDF format and upload resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.xps)
$dst_folder = "dst_folder_example"; // string | The destination document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putXpsInStorageToPdf($name, $src_path, $dst_folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putXpsInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.xps) |
 **dst_folder** | **string**| The destination document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putXslFoInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putXslFoInStorageToPdf($name, $src_path, $dst_folder, $storage)

Convert XslFo file (located on storage) to PDF format and upload resulting file to storage.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Aspose\PDF\Api\PdfApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | The document name.
$src_path = "src_path_example"; // string | Full source filename (ex. /folder1/folder2/template.xpsfo)
$dst_folder = "dst_folder_example"; // string | The destination document folder.
$storage = "storage_example"; // string | The document storage.

try {
    $result = $apiInstance->putXslFoInStorageToPdf($name, $src_path, $dst_folder, $storage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfApi->putXslFoInStorageToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| The document name. |
 **src_path** | **string**| Full source filename (ex. /folder1/folder2/template.xpsfo) |
 **dst_folder** | **string**| The destination document folder. | [optional]
 **storage** | **string**| The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](../Model/AsposeResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

