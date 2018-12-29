# PdfApi

All URIs are relative to *https://api.aspose.cloud/v2.0/*

Method | HTTP request | Description
------------- | ------------- | -------------
*PdfApi* | [**deleteAnnotation**](PdfApi.md#deleteAnnotation) | **DELETE** /pdf/\{name}/annotations/\{annotationId} | Delete document annotation by ID
*PdfApi* | [**deleteDocumentAnnotations**](PdfApi.md#deleteDocumentAnnotations) | **DELETE** /pdf/\{name}/annotations | Delete all annotations from the document
*PdfApi* | [**deleteDocumentLinkAnnotations**](PdfApi.md#deleteDocumentLinkAnnotations) | **DELETE** /pdf/\{name}/links | Delete all link annotations from the document
*PdfApi* | [**deleteField**](PdfApi.md#deleteField) | **DELETE** /pdf/\{name}/fields/\{fieldName} | Delete document field by name.
*PdfApi* | [**deleteFile**](PdfApi.md#deleteFile) | **DELETE** /storage/file | Remove a specific file 
*PdfApi* | [**deleteFolder**](PdfApi.md#deleteFolder) | **DELETE** /storage/folder | Remove a specific folder 
*PdfApi* | [**deleteImage**](PdfApi.md#deleteImage) | **DELETE** /pdf/\{name}/images/\{imageId} | Delete image from document page.
*PdfApi* | [**deleteLinkAnnotation**](PdfApi.md#deleteLinkAnnotation) | **DELETE** /pdf/\{name}/links/\{linkId} | Delete document page link annotation by ID
*PdfApi* | [**deletePage**](PdfApi.md#deletePage) | **DELETE** /pdf/\{name}/pages/\{pageNumber} | Delete document page by its number.
*PdfApi* | [**deletePageAnnotations**](PdfApi.md#deletePageAnnotations) | **DELETE** /pdf/\{name}/pages/\{pageNumber}/annotations | Delete all annotations from the page
*PdfApi* | [**deletePageLinkAnnotations**](PdfApi.md#deletePageLinkAnnotations) | **DELETE** /pdf/\{name}/pages/\{pageNumber}/links | Delete all link annotations from the page
*PdfApi* | [**deleteProperties**](PdfApi.md#deleteProperties) | **DELETE** /pdf/\{name}/documentproperties | Delete custom document properties.
*PdfApi* | [**deleteProperty**](PdfApi.md#deleteProperty) | **DELETE** /pdf/\{name}/documentproperties/\{propertyName} | Delete document property.
*PdfApi* | [**getCaretAnnotation**](PdfApi.md#getCaretAnnotation) | **GET** /pdf/\{name}/annotations/caret/\{annotationId} | Read document page caret annotation by ID.
*PdfApi* | [**getCircleAnnotation**](PdfApi.md#getCircleAnnotation) | **GET** /pdf/\{name}/annotations/circle/\{annotationId} | Read document page circle annotation by ID.
*PdfApi* | [**getDiscUsage**](PdfApi.md#getDiscUsage) | **GET** /storage/disc | Check the disk usage of the current account 
*PdfApi* | [**getDocument**](PdfApi.md#getDocument) | **GET** /pdf/\{name} | Read common document info.
*PdfApi* | [**getDocumentAnnotations**](PdfApi.md#getDocumentAnnotations) | **GET** /pdf/\{name}/annotations | Read documant page annotations. Returns only FreeTextAnnotations, TextAnnotations, other annotations will implemented next releases.
*PdfApi* | [**getDocumentAttachmentByIndex**](PdfApi.md#getDocumentAttachmentByIndex) | **GET** /pdf/\{name}/attachments/\{attachmentIndex} | Read document attachment info by its index.
*PdfApi* | [**getDocumentAttachments**](PdfApi.md#getDocumentAttachments) | **GET** /pdf/\{name}/attachments | Read document attachments info.
*PdfApi* | [**getDocumentBookmarks**](PdfApi.md#getDocumentBookmarks) | **GET** /pdf/\{name}/bookmarks | Read document bookmark/bookmarks (including children).
*PdfApi* | [**getDocumentCaretAnnotations**](PdfApi.md#getDocumentCaretAnnotations) | **GET** /pdf/\{name}/annotations/caret | Read document caret annotations.
*PdfApi* | [**getDocumentCircleAnnotations**](PdfApi.md#getDocumentCircleAnnotations) | **GET** /pdf/\{name}/annotations/circle | Read document circle annotations.
*PdfApi* | [**getDocumentFreeTextAnnotations**](PdfApi.md#getDocumentFreeTextAnnotations) | **GET** /pdf/\{name}/annotations/freetext | Read document free text annotations.
*PdfApi* | [**getDocumentHighlightAnnotations**](PdfApi.md#getDocumentHighlightAnnotations) | **GET** /pdf/\{name}/annotations/highlight | Read document highlight annotations.
*PdfApi* | [**getDocumentInkAnnotations**](PdfApi.md#getDocumentInkAnnotations) | **GET** /pdf/\{name}/annotations/ink | Read document ink annotations.
*PdfApi* | [**getDocumentLineAnnotations**](PdfApi.md#getDocumentLineAnnotations) | **GET** /pdf/\{name}/annotations/line | Read document line annotations.
*PdfApi* | [**getDocumentPolygonAnnotations**](PdfApi.md#getDocumentPolygonAnnotations) | **GET** /pdf/\{name}/annotations/polygon | Read document polygon annotations.
*PdfApi* | [**getDocumentPolyLineAnnotations**](PdfApi.md#getDocumentPolyLineAnnotations) | **GET** /pdf/\{name}/annotations/polyline | Read document polyline annotations.
*PdfApi* | [**getDocumentPopupAnnotations**](PdfApi.md#getDocumentPopupAnnotations) | **GET** /pdf/\{name}/annotations/popup | Read document popup annotations.
*PdfApi* | [**getDocumentPopupAnnotationsByParent**](PdfApi.md#getDocumentPopupAnnotationsByParent) | **GET** /pdf/\{name}/annotations/\{annotationId}/popup | Read document popup annotations by parent id.
*PdfApi* | [**getDocumentProperties**](PdfApi.md#getDocumentProperties) | **GET** /pdf/\{name}/documentproperties | Read document properties.
*PdfApi* | [**getDocumentProperty**](PdfApi.md#getDocumentProperty) | **GET** /pdf/\{name}/documentproperties/\{propertyName} | Read document property by name.
*PdfApi* | [**getDocumentSquareAnnotations**](PdfApi.md#getDocumentSquareAnnotations) | **GET** /pdf/\{name}/annotations/square | Read document square annotations.
*PdfApi* | [**getDocumentSquigglyAnnotations**](PdfApi.md#getDocumentSquigglyAnnotations) | **GET** /pdf/\{name}/annotations/squiggly | Read document squiggly annotations.
*PdfApi* | [**getDocumentStrikeOutAnnotations**](PdfApi.md#getDocumentStrikeOutAnnotations) | **GET** /pdf/\{name}/annotations/strikeout | Read document StrikeOut annotations.
*PdfApi* | [**getDocumentTextAnnotations**](PdfApi.md#getDocumentTextAnnotations) | **GET** /pdf/\{name}/annotations/text | Read document text annotations.
*PdfApi* | [**getDocumentUnderlineAnnotations**](PdfApi.md#getDocumentUnderlineAnnotations) | **GET** /pdf/\{name}/annotations/underline | Read document underline annotations.
*PdfApi* | [**getDownload**](PdfApi.md#getDownload) | **GET** /storage/file | Download a specific file 
*PdfApi* | [**getDownloadDocumentAttachmentByIndex**](PdfApi.md#getDownloadDocumentAttachmentByIndex) | **GET** /pdf/\{name}/attachments/\{attachmentIndex}/download | Download document attachment content by its index.
*PdfApi* | [**getEpubInStorageToPdf**](PdfApi.md#getEpubInStorageToPdf) | **GET** /pdf/create/epub | Convert EPUB file (located on storage) to PDF format and return resulting file in response. 
*PdfApi* | [**getField**](PdfApi.md#getField) | **GET** /pdf/\{name}/fields/\{fieldName} | Get document field by name.
*PdfApi* | [**getFields**](PdfApi.md#getFields) | **GET** /pdf/\{name}/fields | Get document fields.
*PdfApi* | [**getFreeTextAnnotation**](PdfApi.md#getFreeTextAnnotation) | **GET** /pdf/\{name}/annotations/freetext/\{annotationId} | Read document page free text annotation by ID.
*PdfApi* | [**getHighlightAnnotation**](PdfApi.md#getHighlightAnnotation) | **GET** /pdf/\{name}/annotations/highlight/\{annotationId} | Read document page highlight annotation by ID.
*PdfApi* | [**getHtmlInStorageToPdf**](PdfApi.md#getHtmlInStorageToPdf) | **GET** /pdf/create/html | Convert HTML file (located on storage) to PDF format and return resulting file in response. 
*PdfApi* | [**getImage**](PdfApi.md#getImage) | **GET** /pdf/\{name}/images/\{imageId} | Read document image by ID.
*PdfApi* | [**getImageExtractAsGif**](PdfApi.md#getImageExtractAsGif) | **GET** /pdf/\{name}/images/\{imageId}/extract/gif | Extract document image in GIF format
*PdfApi* | [**getImageExtractAsJpeg**](PdfApi.md#getImageExtractAsJpeg) | **GET** /pdf/\{name}/images/\{imageId}/extract/jpeg | Extract document image in JPEG format
*PdfApi* | [**getImageExtractAsPng**](PdfApi.md#getImageExtractAsPng) | **GET** /pdf/\{name}/images/\{imageId}/extract/png | Extract document image in PNG format
*PdfApi* | [**getImageExtractAsTiff**](PdfApi.md#getImageExtractAsTiff) | **GET** /pdf/\{name}/images/\{imageId}/extract/tiff | Extract document image in TIFF format
*PdfApi* | [**getImages**](PdfApi.md#getImages) | **GET** /pdf/\{name}/pages/\{pageNumber}/images | Read document images.
*PdfApi* | [**getInkAnnotation**](PdfApi.md#getInkAnnotation) | **GET** /pdf/\{name}/annotations/ink/\{annotationId} | Read document page ink annotation by ID.
*PdfApi* | [**getIsExist**](PdfApi.md#getIsExist) | **GET** /storage/exist | Check if a specific file or folder exists
*PdfApi* | [**getIsStorageExist**](PdfApi.md#getIsStorageExist) | **GET** /storage/\{name}/exist | Check if storage exists 
*PdfApi* | [**getLaTeXInStorageToPdf**](PdfApi.md#getLaTeXInStorageToPdf) | **GET** /pdf/create/latex | Convert LaTeX file (located on storage) to PDF format and return resulting file in response. 
*PdfApi* | [**getLineAnnotation**](PdfApi.md#getLineAnnotation) | **GET** /pdf/\{name}/annotations/line/\{annotationId} | Read document page line annotation by ID.
*PdfApi* | [**getLinkAnnotation**](PdfApi.md#getLinkAnnotation) | **GET** /pdf/\{name}/links/\{linkId} | Read document link annotation by ID.
*PdfApi* | [**getListFiles**](PdfApi.md#getListFiles) | **GET** /storage/folder | Get the file listing of a specific folder 
*PdfApi* | [**getListFileVersions**](PdfApi.md#getListFileVersions) | **GET** /storage/version | Get the file's versions list 
*PdfApi* | [**getMhtInStorageToPdf**](PdfApi.md#getMhtInStorageToPdf) | **GET** /pdf/create/mht | Convert MHT file (located on storage) to PDF format and return resulting file in response. 
*PdfApi* | [**getPage**](PdfApi.md#getPage) | **GET** /pdf/\{name}/pages/\{pageNumber} | Read document page info.
*PdfApi* | [**getPageAnnotations**](PdfApi.md#getPageAnnotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations | Read documant page annotations. Returns only FreeTextAnnotations, TextAnnotations, other annotations will implemented next releases.
*PdfApi* | [**getPageCaretAnnotations**](PdfApi.md#getPageCaretAnnotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/caret | Read document page caret annotations.
*PdfApi* | [**getPageCircleAnnotations**](PdfApi.md#getPageCircleAnnotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/circle | Read document page circle annotations.
*PdfApi* | [**getPageConvertToBmp**](PdfApi.md#getPageConvertToBmp) | **GET** /pdf/\{name}/pages/\{pageNumber}/convert/bmp | Convert document page to Bmp image and return resulting file in response.
*PdfApi* | [**getPageConvertToEmf**](PdfApi.md#getPageConvertToEmf) | **GET** /pdf/\{name}/pages/\{pageNumber}/convert/emf | Convert document page to Emf image and return resulting file in response.
*PdfApi* | [**getPageConvertToGif**](PdfApi.md#getPageConvertToGif) | **GET** /pdf/\{name}/pages/\{pageNumber}/convert/gif | Convert document page to Gif image and return resulting file in response.
*PdfApi* | [**getPageConvertToJpeg**](PdfApi.md#getPageConvertToJpeg) | **GET** /pdf/\{name}/pages/\{pageNumber}/convert/jpeg | Convert document page to Jpeg image and return resulting file in response.
*PdfApi* | [**getPageConvertToPng**](PdfApi.md#getPageConvertToPng) | **GET** /pdf/\{name}/pages/\{pageNumber}/convert/png | Convert document page to Png image and return resulting file in response.
*PdfApi* | [**getPageConvertToTiff**](PdfApi.md#getPageConvertToTiff) | **GET** /pdf/\{name}/pages/\{pageNumber}/convert/tiff | Convert document page to Tiff image and return resulting file in response.
*PdfApi* | [**getPageFreeTextAnnotations**](PdfApi.md#getPageFreeTextAnnotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/freetext | Read document page free text annotations.
*PdfApi* | [**getPageHighlightAnnotations**](PdfApi.md#getPageHighlightAnnotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/highlight | Read document page highlight annotations.
*PdfApi* | [**getPageInkAnnotations**](PdfApi.md#getPageInkAnnotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/ink | Read document page ink annotations.
*PdfApi* | [**getPageLineAnnotations**](PdfApi.md#getPageLineAnnotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/line | Read document page line annotations.
*PdfApi* | [**getPageLinkAnnotation**](PdfApi.md#getPageLinkAnnotation) | **GET** /pdf/\{name}/pages/\{pageNumber}/links/\{linkId} | Read document page link annotation by ID.
*PdfApi* | [**getPageLinkAnnotations**](PdfApi.md#getPageLinkAnnotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/links | Read document page link annotations.
*PdfApi* | [**getPagePolygonAnnotations**](PdfApi.md#getPagePolygonAnnotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/polygon | Read document page polygon annotations.
*PdfApi* | [**getPagePolyLineAnnotations**](PdfApi.md#getPagePolyLineAnnotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/polyline | Read document page polyline annotations.
*PdfApi* | [**getPagePopupAnnotations**](PdfApi.md#getPagePopupAnnotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/popup | Read document page popup annotations.
*PdfApi* | [**getPages**](PdfApi.md#getPages) | **GET** /pdf/\{name}/pages | Read document pages info.
*PdfApi* | [**getPageSquareAnnotations**](PdfApi.md#getPageSquareAnnotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/square | Read document page square annotations.
*PdfApi* | [**getPageSquigglyAnnotations**](PdfApi.md#getPageSquigglyAnnotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/squiggly | Read document page squiggly annotations.
*PdfApi* | [**getPageStrikeOutAnnotations**](PdfApi.md#getPageStrikeOutAnnotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/strikeout | Read document page StrikeOut annotations.
*PdfApi* | [**getPageText**](PdfApi.md#getPageText) | **GET** /pdf/\{name}/pages/\{pageNumber}/text | Read page text items.
*PdfApi* | [**getPageTextAnnotations**](PdfApi.md#getPageTextAnnotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/text | Read document page text annotations.
*PdfApi* | [**getPageUnderlineAnnotations**](PdfApi.md#getPageUnderlineAnnotations) | **GET** /pdf/\{name}/pages/\{pageNumber}/annotations/underline | Read document page underline annotations.
*PdfApi* | [**getPclInStorageToPdf**](PdfApi.md#getPclInStorageToPdf) | **GET** /pdf/create/pcl | Convert PCL file (located on storage) to PDF format and return resulting file in response. 
*PdfApi* | [**getPdfInStorageToDoc**](PdfApi.md#getPdfInStorageToDoc) | **GET** /pdf/\{name}/convert/doc | Converts PDF document (located on storage) to DOC format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToEpub**](PdfApi.md#getPdfInStorageToEpub) | **GET** /pdf/\{name}/convert/epub | Converts PDF document (located on storage) to EPUB format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToHtml**](PdfApi.md#getPdfInStorageToHtml) | **GET** /pdf/\{name}/convert/html | Converts PDF document (located on storage) to Html format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToLaTeX**](PdfApi.md#getPdfInStorageToLaTeX) | **GET** /pdf/\{name}/convert/latex | Converts PDF document (located on storage) to LaTeX format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToMobiXml**](PdfApi.md#getPdfInStorageToMobiXml) | **GET** /pdf/\{name}/convert/mobixml | Converts PDF document (located on storage) to MOBIXML format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToPdfA**](PdfApi.md#getPdfInStorageToPdfA) | **GET** /pdf/\{name}/convert/pdfa | Converts PDF document (located on storage) to PdfA format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToPptx**](PdfApi.md#getPdfInStorageToPptx) | **GET** /pdf/\{name}/convert/pptx | Converts PDF document (located on storage) to PPTX format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToSvg**](PdfApi.md#getPdfInStorageToSvg) | **GET** /pdf/\{name}/convert/svg | Converts PDF document (located on storage) to SVG format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToTiff**](PdfApi.md#getPdfInStorageToTiff) | **GET** /pdf/\{name}/convert/tiff | Converts PDF document (located on storage) to TIFF format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToXls**](PdfApi.md#getPdfInStorageToXls) | **GET** /pdf/\{name}/convert/xls | Converts PDF document (located on storage) to XLS format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToXml**](PdfApi.md#getPdfInStorageToXml) | **GET** /pdf/\{name}/convert/xml | Converts PDF document (located on storage) to XML format and returns resulting file in response content
*PdfApi* | [**getPdfInStorageToXps**](PdfApi.md#getPdfInStorageToXps) | **GET** /pdf/\{name}/convert/xps | Converts PDF document (located on storage) to XPS format and returns resulting file in response content
*PdfApi* | [**getPolygonAnnotation**](PdfApi.md#getPolygonAnnotation) | **GET** /pdf/\{name}/annotations/polygon/\{annotationId} | Read document page polygon annotation by ID.
*PdfApi* | [**getPolyLineAnnotation**](PdfApi.md#getPolyLineAnnotation) | **GET** /pdf/\{name}/annotations/polyline/\{annotationId} | Read document page polyline annotation by ID.
*PdfApi* | [**getPopupAnnotation**](PdfApi.md#getPopupAnnotation) | **GET** /pdf/\{name}/annotations/popup/\{annotationId} | Read document page popup annotation by ID.
*PdfApi* | [**getPsInStorageToPdf**](PdfApi.md#getPsInStorageToPdf) | **GET** /pdf/create/ps | Convert PS file (located on storage) to PDF format and return resulting file in response. 
*PdfApi* | [**getSquareAnnotation**](PdfApi.md#getSquareAnnotation) | **GET** /pdf/\{name}/annotations/square/\{annotationId} | Read document page square annotation by ID.
*PdfApi* | [**getSquigglyAnnotation**](PdfApi.md#getSquigglyAnnotation) | **GET** /pdf/\{name}/annotations/squiggly/\{annotationId} | Read document page squiggly annotation by ID.
*PdfApi* | [**getStrikeOutAnnotation**](PdfApi.md#getStrikeOutAnnotation) | **GET** /pdf/\{name}/annotations/strikeout/\{annotationId} | Read document page StrikeOut annotation by ID.
*PdfApi* | [**getSvgInStorageToPdf**](PdfApi.md#getSvgInStorageToPdf) | **GET** /pdf/create/svg | Convert SVG file (located on storage) to PDF format and return resulting file in response. 
*PdfApi* | [**getText**](PdfApi.md#getText) | **GET** /pdf/\{name}/text | Read document text.
*PdfApi* | [**getTextAnnotation**](PdfApi.md#getTextAnnotation) | **GET** /pdf/\{name}/annotations/text/\{annotationId} | Read document page text annotation by ID.
*PdfApi* | [**getUnderlineAnnotation**](PdfApi.md#getUnderlineAnnotation) | **GET** /pdf/\{name}/annotations/underline/\{annotationId} | Read document page underline annotation by ID.
*PdfApi* | [**getVerifySignature**](PdfApi.md#getVerifySignature) | **GET** /pdf/\{name}/verifySignature | Verify signature document.
*PdfApi* | [**getWebInStorageToPdf**](PdfApi.md#getWebInStorageToPdf) | **GET** /pdf/create/web | Convert web page to PDF format and return resulting file in response. 
*PdfApi* | [**getWordsPerPage**](PdfApi.md#getWordsPerPage) | **GET** /pdf/\{name}/pages/wordCount | Get number of words per document page.
*PdfApi* | [**getXfaPdfInStorageToAcroForm**](PdfApi.md#getXfaPdfInStorageToAcroForm) | **GET** /pdf/\{name}/convert/xfatoacroform | Converts PDF document which contatins XFA form (located on storage) to PDF with AcroForm and returns resulting file response content
*PdfApi* | [**getXmlInStorageToPdf**](PdfApi.md#getXmlInStorageToPdf) | **GET** /pdf/create/xml | Convert XML file (located on storage) to PDF format and return resulting file in response. 
*PdfApi* | [**getXpsInStorageToPdf**](PdfApi.md#getXpsInStorageToPdf) | **GET** /pdf/create/xps | Convert XPS file (located on storage) to PDF format and return resulting file in response. 
*PdfApi* | [**getXslFoInStorageToPdf**](PdfApi.md#getXslFoInStorageToPdf) | **GET** /pdf/create/xslfo | Convert XslFo file (located on storage) to PDF format and return resulting file in response. 
*PdfApi* | [**postAppendDocument**](PdfApi.md#postAppendDocument) | **POST** /pdf/\{name}/appendDocument | Append document to existing one.
*PdfApi* | [**postCreateField**](PdfApi.md#postCreateField) | **POST** /pdf/\{name}/fields | Create field.
*PdfApi* | [**postDocumentTextReplace**](PdfApi.md#postDocumentTextReplace) | **POST** /pdf/\{name}/text/replace | Document's replace text method.
*PdfApi* | [**postFlattenDocument**](PdfApi.md#postFlattenDocument) | **POST** /pdf/\{name}/flatten | Removes all fields from the document and place their values instead.
*PdfApi* | [**postInsertImage**](PdfApi.md#postInsertImage) | **POST** /pdf/\{name}/pages/\{pageNumber}/images | Insert image to document page.
*PdfApi* | [**postMoveFile**](PdfApi.md#postMoveFile) | **POST** /storage/file | Move a specific file
*PdfApi* | [**postMoveFolder**](PdfApi.md#postMoveFolder) | **POST** /storage/folder | Move a specific folder 
*PdfApi* | [**postMovePage**](PdfApi.md#postMovePage) | **POST** /pdf/\{name}/pages/\{pageNumber}/movePage | Move page to new position.
*PdfApi* | [**postOptimizeDocument**](PdfApi.md#postOptimizeDocument) | **POST** /pdf/\{name}/optimize | Optimize document.
*PdfApi* | [**postPageCaretAnnotations**](PdfApi.md#postPageCaretAnnotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/caret | Add document page caret annotations.
*PdfApi* | [**postPageCircleAnnotations**](PdfApi.md#postPageCircleAnnotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/circle | Add document page circle annotations.
*PdfApi* | [**postPageFreeTextAnnotations**](PdfApi.md#postPageFreeTextAnnotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/freetext | Add document page free text annotations.
*PdfApi* | [**postPageHighlightAnnotations**](PdfApi.md#postPageHighlightAnnotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/highlight | Add document page highlight annotations.
*PdfApi* | [**postPageInkAnnotations**](PdfApi.md#postPageInkAnnotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/ink | Add document page ink annotations.
*PdfApi* | [**postPageLineAnnotations**](PdfApi.md#postPageLineAnnotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/line | Add document page line annotations.
*PdfApi* | [**postPageLinkAnnotations**](PdfApi.md#postPageLinkAnnotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/links | Add document page link annotations.
*PdfApi* | [**postPagePolygonAnnotations**](PdfApi.md#postPagePolygonAnnotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/polygon | Add document page polygon annotations.
*PdfApi* | [**postPagePolyLineAnnotations**](PdfApi.md#postPagePolyLineAnnotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/polyline | Add document page polyline annotations.
*PdfApi* | [**postPageSquareAnnotations**](PdfApi.md#postPageSquareAnnotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/square | Add document page square annotations.
*PdfApi* | [**postPageSquigglyAnnotations**](PdfApi.md#postPageSquigglyAnnotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/squiggly | Add document page squiggly annotations.
*PdfApi* | [**postPageStrikeOutAnnotations**](PdfApi.md#postPageStrikeOutAnnotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/strikeout | Add document page StrikeOut annotations.
*PdfApi* | [**postPageTextAnnotations**](PdfApi.md#postPageTextAnnotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/text | Add document page text annotations.
*PdfApi* | [**postPageTextReplace**](PdfApi.md#postPageTextReplace) | **POST** /pdf/\{name}/pages/\{pageNumber}/text/replace | Page's replace text method.
*PdfApi* | [**postPageUnderlineAnnotations**](PdfApi.md#postPageUnderlineAnnotations) | **POST** /pdf/\{name}/pages/\{pageNumber}/annotations/underline | Add document page underline annotations.
*PdfApi* | [**postPopupAnnotation**](PdfApi.md#postPopupAnnotation) | **POST** /pdf/\{name}/annotations/\{annotationId}/popup | Add document popup annotations.
*PdfApi* | [**postSignDocument**](PdfApi.md#postSignDocument) | **POST** /pdf/\{name}/sign | Sign document.
*PdfApi* | [**postSignPage**](PdfApi.md#postSignPage) | **POST** /pdf/\{name}/pages/\{pageNumber}/sign | Sign page.
*PdfApi* | [**postSplitDocument**](PdfApi.md#postSplitDocument) | **POST** /pdf/\{name}/split | Split document to parts.
*PdfApi* | [**putAddNewPage**](PdfApi.md#putAddNewPage) | **PUT** /pdf/\{name}/pages | Add new page to end of the document.
*PdfApi* | [**putAddText**](PdfApi.md#putAddText) | **PUT** /pdf/\{name}/pages/\{pageNumber}/text | Add text to PDF document page.
*PdfApi* | [**putCaretAnnotation**](PdfApi.md#putCaretAnnotation) | **PUT** /pdf/\{name}/annotations/caret/\{annotationId} | Replace document caret annotation
*PdfApi* | [**putCircleAnnotation**](PdfApi.md#putCircleAnnotation) | **PUT** /pdf/\{name}/annotations/circle/\{annotationId} | Replace document circle annotation
*PdfApi* | [**putCreate**](PdfApi.md#putCreate) | **PUT** /storage/file | Upload a specific file 
*PdfApi* | [**putCreateDocument**](PdfApi.md#putCreateDocument) | **PUT** /pdf/\{name} | Create empty document.
*PdfApi* | [**putCreateFolder**](PdfApi.md#putCreateFolder) | **PUT** /storage/folder | Create the folder 
*PdfApi* | [**putEpubInStorageToPdf**](PdfApi.md#putEpubInStorageToPdf) | **PUT** /pdf/\{name}/create/epub | Convert EPUB file (located on storage) to PDF format and upload resulting file to storage. 
*PdfApi* | [**putFieldsFlatten**](PdfApi.md#putFieldsFlatten) | **PUT** /pdf/\{name}/fields/flatten | Flatten form fields in document.
*PdfApi* | [**putFreeTextAnnotation**](PdfApi.md#putFreeTextAnnotation) | **PUT** /pdf/\{name}/annotations/freetext/\{annotationId} | Replace document free text annotation
*PdfApi* | [**putHighlightAnnotation**](PdfApi.md#putHighlightAnnotation) | **PUT** /pdf/\{name}/annotations/highlight/\{annotationId} | Replace document highlight annotation
*PdfApi* | [**putHtmlInStorageToPdf**](PdfApi.md#putHtmlInStorageToPdf) | **PUT** /pdf/\{name}/create/html | Convert HTML file (located on storage) to PDF format and upload resulting file to storage. 
*PdfApi* | [**putImageExtractAsGif**](PdfApi.md#putImageExtractAsGif) | **PUT** /pdf/\{name}/images/\{imageId}/extract/gif | Extract document image in GIF format to folder
*PdfApi* | [**putImageExtractAsJpeg**](PdfApi.md#putImageExtractAsJpeg) | **PUT** /pdf/\{name}/images/\{imageId}/extract/jpeg | Extract document image in JPEG format to folder
*PdfApi* | [**putImageExtractAsPng**](PdfApi.md#putImageExtractAsPng) | **PUT** /pdf/\{name}/images/\{imageId}/extract/png | Extract document image in PNG format to folder
*PdfApi* | [**putImageExtractAsTiff**](PdfApi.md#putImageExtractAsTiff) | **PUT** /pdf/\{name}/images/\{imageId}/extract/tiff | Extract document image in TIFF format to folder
*PdfApi* | [**putImageInStorageToPdf**](PdfApi.md#putImageInStorageToPdf) | **PUT** /pdf/\{name}/create/images | Convert image file (located on storage) to PDF format and upload resulting file to storage. 
*PdfApi* | [**putImagesExtractAsGif**](PdfApi.md#putImagesExtractAsGif) | **PUT** /pdf/\{name}/pages/\{pageNumber}/images/extract/gif | Extract document images in GIF format to folder.
*PdfApi* | [**putImagesExtractAsJpeg**](PdfApi.md#putImagesExtractAsJpeg) | **PUT** /pdf/\{name}/pages/\{pageNumber}/images/extract/jpeg | Extract document images in JPEG format to folder.
*PdfApi* | [**putImagesExtractAsPng**](PdfApi.md#putImagesExtractAsPng) | **PUT** /pdf/\{name}/pages/\{pageNumber}/images/extract/png | Extract document images in PNG format to folder.
*PdfApi* | [**putImagesExtractAsTiff**](PdfApi.md#putImagesExtractAsTiff) | **PUT** /pdf/\{name}/pages/\{pageNumber}/images/extract/tiff | Extract document images in TIFF format to folder.
*PdfApi* | [**putInkAnnotation**](PdfApi.md#putInkAnnotation) | **PUT** /pdf/\{name}/annotations/ink/\{annotationId} | Replace document ink annotation
*PdfApi* | [**putLaTeXInStorageToPdf**](PdfApi.md#putLaTeXInStorageToPdf) | **PUT** /pdf/\{name}/create/latex | Convert LaTeX file (located on storage) to PDF format and upload resulting file to storage. 
*PdfApi* | [**putLineAnnotation**](PdfApi.md#putLineAnnotation) | **PUT** /pdf/\{name}/annotations/line/\{annotationId} | Replace document line annotation
*PdfApi* | [**putLinkAnnotation**](PdfApi.md#putLinkAnnotation) | **PUT** /pdf/\{name}/links/\{linkId} | Replace document page link annotations
*PdfApi* | [**putMergeDocuments**](PdfApi.md#putMergeDocuments) | **PUT** /pdf/\{name}/merge | Merge a list of documents.
*PdfApi* | [**putMhtInStorageToPdf**](PdfApi.md#putMhtInStorageToPdf) | **PUT** /pdf/\{name}/create/mht | Convert MHT file (located on storage) to PDF format and upload resulting file to storage. 
*PdfApi* | [**putPageAddStamp**](PdfApi.md#putPageAddStamp) | **PUT** /pdf/\{name}/pages/\{pageNumber}/stamp | Add page stamp.
*PdfApi* | [**putPageConvertToBmp**](PdfApi.md#putPageConvertToBmp) | **PUT** /pdf/\{name}/pages/\{pageNumber}/convert/bmp | Convert document page to bmp image and upload resulting file to storage.
*PdfApi* | [**putPageConvertToEmf**](PdfApi.md#putPageConvertToEmf) | **PUT** /pdf/\{name}/pages/\{pageNumber}/convert/emf | Convert document page to emf image and upload resulting file to storage.
*PdfApi* | [**putPageConvertToGif**](PdfApi.md#putPageConvertToGif) | **PUT** /pdf/\{name}/pages/\{pageNumber}/convert/gif | Convert document page to gif image and upload resulting file to storage.
*PdfApi* | [**putPageConvertToJpeg**](PdfApi.md#putPageConvertToJpeg) | **PUT** /pdf/\{name}/pages/\{pageNumber}/convert/jpeg | Convert document page to Jpeg image and upload resulting file to storage.
*PdfApi* | [**putPageConvertToPng**](PdfApi.md#putPageConvertToPng) | **PUT** /pdf/\{name}/pages/\{pageNumber}/convert/png | Convert document page to png image and upload resulting file to storage.
*PdfApi* | [**putPageConvertToTiff**](PdfApi.md#putPageConvertToTiff) | **PUT** /pdf/\{name}/pages/\{pageNumber}/convert/tiff | Convert document page to Tiff image and upload resulting file to storage.
*PdfApi* | [**putPclInStorageToPdf**](PdfApi.md#putPclInStorageToPdf) | **PUT** /pdf/\{name}/create/pcl | Convert PCL file (located on storage) to PDF format and upload resulting file to storage. 
*PdfApi* | [**putPdfInRequestToDoc**](PdfApi.md#putPdfInRequestToDoc) | **PUT** /pdf/convert/doc | Converts PDF document (in request content) to DOC format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToEpub**](PdfApi.md#putPdfInRequestToEpub) | **PUT** /pdf/convert/epub | Converts PDF document (in request content) to EPUB format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToHtml**](PdfApi.md#putPdfInRequestToHtml) | **PUT** /pdf/convert/html | Converts PDF document (in request content) to Html format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToLaTeX**](PdfApi.md#putPdfInRequestToLaTeX) | **PUT** /pdf/convert/latex | Converts PDF document (in request content) to LaTeX format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToMobiXml**](PdfApi.md#putPdfInRequestToMobiXml) | **PUT** /pdf/convert/mobixml | Converts PDF document (in request content) to MOBIXML format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToPdfA**](PdfApi.md#putPdfInRequestToPdfA) | **PUT** /pdf/convert/pdfa | Converts PDF document (in request content) to PdfA format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToPptx**](PdfApi.md#putPdfInRequestToPptx) | **PUT** /pdf/convert/pptx | Converts PDF document (in request content) to PPTX format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToSvg**](PdfApi.md#putPdfInRequestToSvg) | **PUT** /pdf/convert/svg | Converts PDF document (in request content) to SVG format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToTiff**](PdfApi.md#putPdfInRequestToTiff) | **PUT** /pdf/convert/tiff | Converts PDF document (in request content) to TIFF format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToXls**](PdfApi.md#putPdfInRequestToXls) | **PUT** /pdf/convert/xls | Converts PDF document (in request content) to XLS format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToXml**](PdfApi.md#putPdfInRequestToXml) | **PUT** /pdf/convert/xml | Converts PDF document (in request content) to XML format and uploads resulting file to storage.
*PdfApi* | [**putPdfInRequestToXps**](PdfApi.md#putPdfInRequestToXps) | **PUT** /pdf/convert/xps | Converts PDF document (in request content) to XPS format and uploads resulting file to storage.
*PdfApi* | [**putPdfInStorageToDoc**](PdfApi.md#putPdfInStorageToDoc) | **PUT** /pdf/\{name}/convert/doc | Converts PDF document (located on storage) to DOC format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToEpub**](PdfApi.md#putPdfInStorageToEpub) | **PUT** /pdf/\{name}/convert/epub | Converts PDF document (located on storage) to EPUB format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToHtml**](PdfApi.md#putPdfInStorageToHtml) | **PUT** /pdf/\{name}/convert/html | Converts PDF document (located on storage) to Html format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToLaTeX**](PdfApi.md#putPdfInStorageToLaTeX) | **PUT** /pdf/\{name}/convert/latex | Converts PDF document (located on storage) to LaTeX format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToMobiXml**](PdfApi.md#putPdfInStorageToMobiXml) | **PUT** /pdf/\{name}/convert/mobixml | Converts PDF document (located on storage) to MOBIXML format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToPdfA**](PdfApi.md#putPdfInStorageToPdfA) | **PUT** /pdf/\{name}/convert/pdfa | Converts PDF document (located on storage) to PdfA format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToPptx**](PdfApi.md#putPdfInStorageToPptx) | **PUT** /pdf/\{name}/convert/pptx | Converts PDF document (located on storage) to PPTX format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToSvg**](PdfApi.md#putPdfInStorageToSvg) | **PUT** /pdf/\{name}/convert/svg | Converts PDF document (located on storage) to SVG format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToTiff**](PdfApi.md#putPdfInStorageToTiff) | **PUT** /pdf/\{name}/convert/tiff | Converts PDF document (located on storage) to TIFF format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToXls**](PdfApi.md#putPdfInStorageToXls) | **PUT** /pdf/\{name}/convert/xls | Converts PDF document (located on storage) to XLS format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToXml**](PdfApi.md#putPdfInStorageToXml) | **PUT** /pdf/\{name}/convert/xml | Converts PDF document (located on storage) to XML format and uploads resulting file to storage
*PdfApi* | [**putPdfInStorageToXps**](PdfApi.md#putPdfInStorageToXps) | **PUT** /pdf/\{name}/convert/xps | Converts PDF document (located on storage) to XPS format and uploads resulting file to storage
*PdfApi* | [**putPolygonAnnotation**](PdfApi.md#putPolygonAnnotation) | **PUT** /pdf/\{name}/annotations/polygon/\{annotationId} | Replace document polygon annotation
*PdfApi* | [**putPolyLineAnnotation**](PdfApi.md#putPolyLineAnnotation) | **PUT** /pdf/\{name}/annotations/polyline/\{annotationId} | Replace document polyline annotation
*PdfApi* | [**putPopupAnnotation**](PdfApi.md#putPopupAnnotation) | **PUT** /pdf/\{name}/annotations/popup/\{annotationId} | Replace document popup annotation
*PdfApi* | [**putPrivileges**](PdfApi.md#putPrivileges) | **PUT** /pdf/\{name}/privileges | Update privilege document.
*PdfApi* | [**putPsInStorageToPdf**](PdfApi.md#putPsInStorageToPdf) | **PUT** /pdf/\{name}/create/ps | Convert PS file (located on storage) to PDF format and upload resulting file to storage. 
*PdfApi* | [**putReplaceImage**](PdfApi.md#putReplaceImage) | **PUT** /pdf/\{name}/images/\{imageId} | Replace document image.
*PdfApi* | [**putSearchableDocument**](PdfApi.md#putSearchableDocument) | **PUT** /pdf/\{name}/ocr | Create searchable PDF document. Generate OCR layer for images in input PDF document.
*PdfApi* | [**putSetProperty**](PdfApi.md#putSetProperty) | **PUT** /pdf/\{name}/documentproperties/\{propertyName} | Add/update document property.
*PdfApi* | [**putSquareAnnotation**](PdfApi.md#putSquareAnnotation) | **PUT** /pdf/\{name}/annotations/square/\{annotationId} | Replace document square annotation
*PdfApi* | [**putSquigglyAnnotation**](PdfApi.md#putSquigglyAnnotation) | **PUT** /pdf/\{name}/annotations/squiggly/\{annotationId} | Replace document squiggly annotation
*PdfApi* | [**putStrikeOutAnnotation**](PdfApi.md#putStrikeOutAnnotation) | **PUT** /pdf/\{name}/annotations/strikeout/\{annotationId} | Replace document StrikeOut annotation
*PdfApi* | [**putSvgInStorageToPdf**](PdfApi.md#putSvgInStorageToPdf) | **PUT** /pdf/\{name}/create/svg | Convert SVG file (located on storage) to PDF format and upload resulting file to storage. 
*PdfApi* | [**putTextAnnotation**](PdfApi.md#putTextAnnotation) | **PUT** /pdf/\{name}/annotations/text/\{annotationId} | Replace document text annotation
*PdfApi* | [**putUnderlineAnnotation**](PdfApi.md#putUnderlineAnnotation) | **PUT** /pdf/\{name}/annotations/underline/\{annotationId} | Replace document underline annotation
*PdfApi* | [**putUpdateField**](PdfApi.md#putUpdateField) | **PUT** /pdf/\{name}/fields/\{fieldName} | Update field.
*PdfApi* | [**putUpdateFields**](PdfApi.md#putUpdateFields) | **PUT** /pdf/\{name}/fields | Update fields.
*PdfApi* | [**putWebInStorageToPdf**](PdfApi.md#putWebInStorageToPdf) | **PUT** /pdf/\{name}/create/web | Convert web page to PDF format and upload resulting file to storage. 
*PdfApi* | [**putXfaPdfInRequestToAcroForm**](PdfApi.md#putXfaPdfInRequestToAcroForm) | **PUT** /pdf/convert/xfatoacroform | Converts PDF document which contatins XFA form (in request content) to PDF with AcroForm and uploads resulting file to storage.
*PdfApi* | [**putXfaPdfInStorageToAcroForm**](PdfApi.md#putXfaPdfInStorageToAcroForm) | **PUT** /pdf/\{name}/convert/xfatoacroform | Converts PDF document which contatins XFA form (located on storage) to PDF with AcroForm and uploads resulting file to storage
*PdfApi* | [**putXmlInStorageToPdf**](PdfApi.md#putXmlInStorageToPdf) | **PUT** /pdf/\{name}/create/xml | Convert XML file (located on storage) to PDF format and upload resulting file to storage. 
*PdfApi* | [**putXpsInStorageToPdf**](PdfApi.md#putXpsInStorageToPdf) | **PUT** /pdf/\{name}/create/xps | Convert XPS file (located on storage) to PDF format and upload resulting file to storage. 
*PdfApi* | [**putXslFoInStorageToPdf**](PdfApi.md#putXslFoInStorageToPdf) | **PUT** /pdf/\{name}/create/xslfo | Convert XslFo file (located on storage) to PDF format and upload resulting file to storage. 
<a name="deleteAnnotation"></a>
## **deleteAnnotation**
> \Aspose\PDF\Model\AsposeResponse deleteAnnotation($name, $annotation_id, $storage, $folder)

Delete document annotation by ID

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="deleteDocumentAnnotations"></a>
## **deleteDocumentAnnotations**
> \Aspose\PDF\Model\AsposeResponse deleteDocumentAnnotations($name, $storage, $folder)

Delete all annotations from the document

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="deleteDocumentLinkAnnotations"></a>
## **deleteDocumentLinkAnnotations**
> \Aspose\PDF\Model\AsposeResponse deleteDocumentLinkAnnotations($name, $storage, $folder)

Delete all link annotations from the document

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="deleteField"></a>
## **deleteField**
> \Aspose\PDF\Model\AsposeResponse deleteField($name, $field_name, $storage, $folder)

Delete document field by name.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$field_name** | **string** | The field name/ | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="deleteFile"></a>
## **deleteFile**
> \Aspose\PDF\Model\AsposeResponse deleteFile($path, $version_id, $storage)

Remove a specific file 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$path** | **string** | Path of the file including file name and extension e.g. /Folder1/file.ext | 
**$version_id** | **string** | File's version | [optional]
**$storage** | **string** | User's storage name | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="deleteFolder"></a>
## **deleteFolder**
> \Aspose\PDF\Model\AsposeResponse deleteFolder($path, $storage, $recursive)

Remove a specific folder 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$path** | **string** | Folder path e.g. /Folder1 | 
**$storage** | **string** | User's storage name | [optional]
**$recursive** | **bool** | Remove recursivelly inner folder/files. If false and folder contains data than exception is raised. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="deleteImage"></a>
## **deleteImage**
> \Aspose\PDF\Model\AsposeResponse deleteImage($name, $image_id, $storage, $folder)

Delete image from document page.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$image_id** | **string** | Image ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="deleteLinkAnnotation"></a>
## **deleteLinkAnnotation**
> \Aspose\PDF\Model\AsposeResponse deleteLinkAnnotation($name, $link_id, $storage, $folder)

Delete document page link annotation by ID

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$link_id** | **string** | The link ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="deletePage"></a>
## **deletePage**
> \Aspose\PDF\Model\AsposeResponse deletePage($name, $page_number, $storage, $folder)

Delete document page by its number.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="deletePageAnnotations"></a>
## **deletePageAnnotations**
> \Aspose\PDF\Model\AsposeResponse deletePageAnnotations($name, $page_number, $storage, $folder)

Delete all annotations from the page

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="deletePageLinkAnnotations"></a>
## **deletePageLinkAnnotations**
> \Aspose\PDF\Model\AsposeResponse deletePageLinkAnnotations($name, $page_number, $storage, $folder)

Delete all link annotations from the page

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="deleteProperties"></a>
## **deleteProperties**
> \Aspose\PDF\Model\AsposeResponse deleteProperties($name, $storage, $folder)

Delete custom document properties.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** |  | 
**$storage** | **string** |  | [optional]
**$folder** | **string** |  | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="deleteProperty"></a>
## **deleteProperty**
> \Aspose\PDF\Model\AsposeResponse deleteProperty($name, $property_name, $storage, $folder)

Delete document property.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** |  | 
**$property_name** | **string** |  | 
**$storage** | **string** |  | [optional]
**$folder** | **string** |  | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getCaretAnnotation"></a>
## **getCaretAnnotation**
> \Aspose\PDF\Model\CaretAnnotationResponse getCaretAnnotation($name, $annotation_id, $storage, $folder)

Read document page caret annotation by ID.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\CaretAnnotationResponse**](CaretAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getCircleAnnotation"></a>
## **getCircleAnnotation**
> \Aspose\PDF\Model\CircleAnnotationResponse getCircleAnnotation($name, $annotation_id, $storage, $folder)

Read document page circle annotation by ID.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\CircleAnnotationResponse**](CircleAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDiscUsage"></a>
## **getDiscUsage**
> \Aspose\PDF\Model\DiscUsageResponse getDiscUsage($storage)

Check the disk usage of the current account 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$storage** | **string** | User's storage name | [optional]

### Return type

[**\Aspose\PDF\Model\DiscUsageResponse**](DiscUsageResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocument"></a>
## **getDocument**
> \Aspose\PDF\Model\DocumentResponse getDocument($name, $storage, $folder)

Read common document info.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentResponse**](DocumentResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getDocumentAnnotations"></a>
## **getDocumentAnnotations**
> \Aspose\PDF\Model\AnnotationsInfoResponse getDocumentAnnotations($name, $storage, $folder)

Read documant page annotations. Returns only FreeTextAnnotations, TextAnnotations, other annotations will implemented next releases.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AnnotationsInfoResponse**](AnnotationsInfoResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentAttachmentByIndex"></a>
## **getDocumentAttachmentByIndex**
> \Aspose\PDF\Model\AttachmentResponse getDocumentAttachmentByIndex($name, $attachment_index, $storage, $folder)

Read document attachment info by its index.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$attachment_index** | **int** | The attachment index. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AttachmentResponse**](AttachmentResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentAttachments"></a>
## **getDocumentAttachments**
> \Aspose\PDF\Model\AttachmentsResponse getDocumentAttachments($name, $storage, $folder)

Read document attachments info.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AttachmentsResponse**](AttachmentsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentBookmarks"></a>
## **getDocumentBookmarks**
> \SplFileObject getDocumentBookmarks($name, $bookmark_path, $storage, $folder)

Read document bookmark/bookmarks (including children).

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$bookmark_path** | **string** | The bookmark path. Leave it empty if you want to get all the bookmarks in the document. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getDocumentCaretAnnotations"></a>
## **getDocumentCaretAnnotations**
> \Aspose\PDF\Model\CaretAnnotationsResponse getDocumentCaretAnnotations($name, $storage, $folder)

Read document caret annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\CaretAnnotationsResponse**](CaretAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentCircleAnnotations"></a>
## **getDocumentCircleAnnotations**
> \Aspose\PDF\Model\CircleAnnotationsResponse getDocumentCircleAnnotations($name, $storage, $folder)

Read document circle annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\CircleAnnotationsResponse**](CircleAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentFreeTextAnnotations"></a>
## **getDocumentFreeTextAnnotations**
> \Aspose\PDF\Model\FreeTextAnnotationsResponse getDocumentFreeTextAnnotations($name, $storage, $folder)

Read document free text annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FreeTextAnnotationsResponse**](FreeTextAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentHighlightAnnotations"></a>
## **getDocumentHighlightAnnotations**
> \Aspose\PDF\Model\HighlightAnnotationsResponse getDocumentHighlightAnnotations($name, $storage, $folder)

Read document highlight annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\HighlightAnnotationsResponse**](HighlightAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentInkAnnotations"></a>
## **getDocumentInkAnnotations**
> \Aspose\PDF\Model\InkAnnotationsResponse getDocumentInkAnnotations($name, $storage, $folder)

Read document ink annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\InkAnnotationsResponse**](InkAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentLineAnnotations"></a>
## **getDocumentLineAnnotations**
> \Aspose\PDF\Model\LineAnnotationsResponse getDocumentLineAnnotations($name, $storage, $folder)

Read document line annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\LineAnnotationsResponse**](LineAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentPolygonAnnotations"></a>
## **getDocumentPolygonAnnotations**
> \Aspose\PDF\Model\PolygonAnnotationsResponse getDocumentPolygonAnnotations($name, $storage, $folder)

Read document polygon annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PolygonAnnotationsResponse**](PolygonAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentPolyLineAnnotations"></a>
## **getDocumentPolyLineAnnotations**
> \Aspose\PDF\Model\PolyLineAnnotationsResponse getDocumentPolyLineAnnotations($name, $storage, $folder)

Read document polyline annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PolyLineAnnotationsResponse**](PolyLineAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentPopupAnnotations"></a>
## **getDocumentPopupAnnotations**
> \Aspose\PDF\Model\PopupAnnotationsResponse getDocumentPopupAnnotations($name, $storage, $folder)

Read document popup annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PopupAnnotationsResponse**](PopupAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentPopupAnnotationsByParent"></a>
## **getDocumentPopupAnnotationsByParent**
> \Aspose\PDF\Model\PopupAnnotationsResponse getDocumentPopupAnnotationsByParent($name, $annotation_id, $storage, $folder)

Read document popup annotations by parent id.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The parent annotation ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PopupAnnotationsResponse**](PopupAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentProperties"></a>
## **getDocumentProperties**
> \Aspose\PDF\Model\DocumentPropertiesResponse getDocumentProperties($name, $storage, $folder)

Read document properties.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** |  | 
**$storage** | **string** |  | [optional]
**$folder** | **string** |  | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentPropertiesResponse**](DocumentPropertiesResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentProperty"></a>
## **getDocumentProperty**
> \Aspose\PDF\Model\DocumentPropertyResponse getDocumentProperty($name, $property_name, $storage, $folder)

Read document property by name.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** |  | 
**$property_name** | **string** |  | 
**$storage** | **string** |  | [optional]
**$folder** | **string** |  | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentPropertyResponse**](DocumentPropertyResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentSquareAnnotations"></a>
## **getDocumentSquareAnnotations**
> \Aspose\PDF\Model\SquareAnnotationsResponse getDocumentSquareAnnotations($name, $storage, $folder)

Read document square annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\SquareAnnotationsResponse**](SquareAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentSquigglyAnnotations"></a>
## **getDocumentSquigglyAnnotations**
> \Aspose\PDF\Model\SquigglyAnnotationsResponse getDocumentSquigglyAnnotations($name, $storage, $folder)

Read document squiggly annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\SquigglyAnnotationsResponse**](SquigglyAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentStrikeOutAnnotations"></a>
## **getDocumentStrikeOutAnnotations**
> \Aspose\PDF\Model\StrikeOutAnnotationsResponse getDocumentStrikeOutAnnotations($name, $storage, $folder)

Read document StrikeOut annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\StrikeOutAnnotationsResponse**](StrikeOutAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentTextAnnotations"></a>
## **getDocumentTextAnnotations**
> \Aspose\PDF\Model\TextAnnotationsResponse getDocumentTextAnnotations($name, $storage, $folder)

Read document text annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\TextAnnotationsResponse**](TextAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDocumentUnderlineAnnotations"></a>
## **getDocumentUnderlineAnnotations**
> \Aspose\PDF\Model\UnderlineAnnotationsResponse getDocumentUnderlineAnnotations($name, $storage, $folder)

Read document underline annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\UnderlineAnnotationsResponse**](UnderlineAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getDownload"></a>
## **getDownload**
> \SplFileObject getDownload($path, $version_id, $storage)

Download a specific file 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$path** | **string** | Path of the file including the file name and extension e.g. /file.ext | 
**$version_id** | **string** | File's version | [optional]
**$storage** | **string** | User's storage name | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getDownloadDocumentAttachmentByIndex"></a>
## **getDownloadDocumentAttachmentByIndex**
> \SplFileObject getDownloadDocumentAttachmentByIndex($name, $attachment_index, $storage, $folder)

Download document attachment content by its index.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$attachment_index** | **int** | The attachment index. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getEpubInStorageToPdf"></a>
## **getEpubInStorageToPdf**
> \SplFileObject getEpubInStorageToPdf($src_path, $storage)

Convert EPUB file (located on storage) to PDF format and return resulting file in response. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.epub) | 
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getField"></a>
## **getField**
> \Aspose\PDF\Model\FieldResponse getField($name, $field_name, $storage, $folder)

Get document field by name.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$field_name** | **string** | The field name/ | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FieldResponse**](FieldResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getFields"></a>
## **getFields**
> \Aspose\PDF\Model\FieldsResponse getFields($name, $storage, $folder)

Get document fields.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FieldsResponse**](FieldsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getFreeTextAnnotation"></a>
## **getFreeTextAnnotation**
> \Aspose\PDF\Model\FreeTextAnnotationResponse getFreeTextAnnotation($name, $annotation_id, $storage, $folder)

Read document page free text annotation by ID.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FreeTextAnnotationResponse**](FreeTextAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getHighlightAnnotation"></a>
## **getHighlightAnnotation**
> \Aspose\PDF\Model\HighlightAnnotationResponse getHighlightAnnotation($name, $annotation_id, $storage, $folder)

Read document page highlight annotation by ID.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\HighlightAnnotationResponse**](HighlightAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getHtmlInStorageToPdf"></a>
## **getHtmlInStorageToPdf**
> \SplFileObject getHtmlInStorageToPdf($src_path, $html_file_name, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $storage)

Convert HTML file (located on storage) to PDF format and return resulting file in response. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.zip) | 
**$html_file_name** | **string** | Name of HTML file in ZIP. | [optional]
**$height** | **double** | Page height | [optional]
**$width** | **double** | Page width | [optional]
**$is_landscape** | **bool** | Is page landscaped | [optional]
**$margin_left** | **double** | Page margin left | [optional]
**$margin_bottom** | **double** | Page margin bottom | [optional]
**$margin_right** | **double** | Page margin right | [optional]
**$margin_top** | **double** | Page margin top | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getImage"></a>
## **getImage**
> \Aspose\PDF\Model\ImageResponse getImage($name, $image_id, $storage, $folder)

Read document image by ID.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$image_id** | **string** | Image ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\ImageResponse**](ImageResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getImageExtractAsGif"></a>
## **getImageExtractAsGif**
> \SplFileObject getImageExtractAsGif($name, $image_id, $width, $height, $storage, $folder)

Extract document image in GIF format

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$image_id** | **string** | Image ID. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getImageExtractAsJpeg"></a>
## **getImageExtractAsJpeg**
> \SplFileObject getImageExtractAsJpeg($name, $image_id, $width, $height, $storage, $folder)

Extract document image in JPEG format

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$image_id** | **string** | Image ID. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getImageExtractAsPng"></a>
## **getImageExtractAsPng**
> \SplFileObject getImageExtractAsPng($name, $image_id, $width, $height, $storage, $folder)

Extract document image in PNG format

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$image_id** | **string** | Image ID. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getImageExtractAsTiff"></a>
## **getImageExtractAsTiff**
> \SplFileObject getImageExtractAsTiff($name, $image_id, $width, $height, $storage, $folder)

Extract document image in TIFF format

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$image_id** | **string** | Image ID. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getImages"></a>
## **getImages**
> \Aspose\PDF\Model\ImagesResponse getImages($name, $page_number, $storage, $folder)

Read document images.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\ImagesResponse**](ImagesResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getInkAnnotation"></a>
## **getInkAnnotation**
> \Aspose\PDF\Model\InkAnnotationResponse getInkAnnotation($name, $annotation_id, $storage, $folder)

Read document page ink annotation by ID.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\InkAnnotationResponse**](InkAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getIsExist"></a>
## **getIsExist**
> \Aspose\PDF\Model\FileExistResponse getIsExist($path, $version_id, $storage)

Check if a specific file or folder exists

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$path** | **string** | File or folder path e.g. /file.ext or /Folder1 | 
**$version_id** | **string** | File's version | [optional]
**$storage** | **string** | User's storage name | [optional]

### Return type

[**\Aspose\PDF\Model\FileExistResponse**](FileExistResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getIsStorageExist"></a>
## **getIsStorageExist**
> \Aspose\PDF\Model\StorageExistResponse getIsStorageExist($name)

Check if storage exists 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | Storage name | 

### Return type

[**\Aspose\PDF\Model\StorageExistResponse**](StorageExistResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getLaTeXInStorageToPdf"></a>
## **getLaTeXInStorageToPdf**
> \SplFileObject getLaTeXInStorageToPdf($src_path, $storage)

Convert LaTeX file (located on storage) to PDF format and return resulting file in response. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.tex) | 
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getLineAnnotation"></a>
## **getLineAnnotation**
> \Aspose\PDF\Model\LineAnnotationResponse getLineAnnotation($name, $annotation_id, $storage, $folder)

Read document page line annotation by ID.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\LineAnnotationResponse**](LineAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getLinkAnnotation"></a>
## **getLinkAnnotation**
> \Aspose\PDF\Model\LinkAnnotationResponse getLinkAnnotation($name, $link_id, $storage, $folder)

Read document link annotation by ID.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$link_id** | **string** | The link ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\LinkAnnotationResponse**](LinkAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getListFiles"></a>
## **getListFiles**
> \Aspose\PDF\Model\FilesResponse getListFiles($path, $storage)

Get the file listing of a specific folder 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$path** | **string** | Start with name of storage e.g. root folder '/'or some folder '/folder1/..' | [optional]
**$storage** | **string** | User's storage name | [optional]

### Return type

[**\Aspose\PDF\Model\FilesResponse**](FilesResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getListFileVersions"></a>
## **getListFileVersions**
> \Aspose\PDF\Model\FileVersionsResponse getListFileVersions($path, $storage)

Get the file's versions list 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$path** | **string** | File path e.g. /file.ext or /Folder1/file.ext | 
**$storage** | **string** | User's storage name | [optional]

### Return type

[**\Aspose\PDF\Model\FileVersionsResponse**](FileVersionsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getMhtInStorageToPdf"></a>
## **getMhtInStorageToPdf**
> \SplFileObject getMhtInStorageToPdf($src_path, $storage)

Convert MHT file (located on storage) to PDF format and return resulting file in response. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.mht) | 
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getPage"></a>
## **getPage**
> \Aspose\PDF\Model\DocumentPageResponse getPage($name, $page_number, $storage, $folder)

Read document page info.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentPageResponse**](DocumentPageResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageAnnotations"></a>
## **getPageAnnotations**
> \Aspose\PDF\Model\AnnotationsInfoResponse getPageAnnotations($name, $page_number, $storage, $folder)

Read documant page annotations. Returns only FreeTextAnnotations, TextAnnotations, other annotations will implemented next releases.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AnnotationsInfoResponse**](AnnotationsInfoResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageCaretAnnotations"></a>
## **getPageCaretAnnotations**
> \Aspose\PDF\Model\CaretAnnotationsResponse getPageCaretAnnotations($name, $page_number, $storage, $folder)

Read document page caret annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\CaretAnnotationsResponse**](CaretAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageCircleAnnotations"></a>
## **getPageCircleAnnotations**
> \Aspose\PDF\Model\CircleAnnotationsResponse getPageCircleAnnotations($name, $page_number, $storage, $folder)

Read document page circle annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\CircleAnnotationsResponse**](CircleAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageConvertToBmp"></a>
## **getPageConvertToBmp**
> \SplFileObject getPageConvertToBmp($name, $page_number, $width, $height, $folder, $storage)

Convert document page to Bmp image and return resulting file in response.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageConvertToEmf"></a>
## **getPageConvertToEmf**
> \SplFileObject getPageConvertToEmf($name, $page_number, $width, $height, $folder, $storage)

Convert document page to Emf image and return resulting file in response.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageConvertToGif"></a>
## **getPageConvertToGif**
> \SplFileObject getPageConvertToGif($name, $page_number, $width, $height, $folder, $storage)

Convert document page to Gif image and return resulting file in response.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageConvertToJpeg"></a>
## **getPageConvertToJpeg**
> \SplFileObject getPageConvertToJpeg($name, $page_number, $width, $height, $folder, $storage)

Convert document page to Jpeg image and return resulting file in response.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageConvertToPng"></a>
## **getPageConvertToPng**
> \SplFileObject getPageConvertToPng($name, $page_number, $width, $height, $folder, $storage)

Convert document page to Png image and return resulting file in response.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageConvertToTiff"></a>
## **getPageConvertToTiff**
> \SplFileObject getPageConvertToTiff($name, $page_number, $width, $height, $folder, $storage)

Convert document page to Tiff image and return resulting file in response.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageFreeTextAnnotations"></a>
## **getPageFreeTextAnnotations**
> \Aspose\PDF\Model\FreeTextAnnotationsResponse getPageFreeTextAnnotations($name, $page_number, $storage, $folder)

Read document page free text annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FreeTextAnnotationsResponse**](FreeTextAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageHighlightAnnotations"></a>
## **getPageHighlightAnnotations**
> \Aspose\PDF\Model\HighlightAnnotationsResponse getPageHighlightAnnotations($name, $page_number, $storage, $folder)

Read document page highlight annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\HighlightAnnotationsResponse**](HighlightAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageInkAnnotations"></a>
## **getPageInkAnnotations**
> \Aspose\PDF\Model\InkAnnotationsResponse getPageInkAnnotations($name, $page_number, $storage, $folder)

Read document page ink annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\InkAnnotationsResponse**](InkAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageLineAnnotations"></a>
## **getPageLineAnnotations**
> \Aspose\PDF\Model\LineAnnotationsResponse getPageLineAnnotations($name, $page_number, $storage, $folder)

Read document page line annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\LineAnnotationsResponse**](LineAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageLinkAnnotation"></a>
## **getPageLinkAnnotation**
> \Aspose\PDF\Model\LinkAnnotationResponse getPageLinkAnnotation($name, $page_number, $link_id, $storage, $folder)

Read document page link annotation by ID.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$link_id** | **string** | The link ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\LinkAnnotationResponse**](LinkAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageLinkAnnotations"></a>
## **getPageLinkAnnotations**
> \Aspose\PDF\Model\LinkAnnotationsResponse getPageLinkAnnotations($name, $page_number, $storage, $folder)

Read document page link annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\LinkAnnotationsResponse**](LinkAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPagePolygonAnnotations"></a>
## **getPagePolygonAnnotations**
> \Aspose\PDF\Model\PolygonAnnotationsResponse getPagePolygonAnnotations($name, $page_number, $storage, $folder)

Read document page polygon annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PolygonAnnotationsResponse**](PolygonAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPagePolyLineAnnotations"></a>
## **getPagePolyLineAnnotations**
> \Aspose\PDF\Model\PolyLineAnnotationsResponse getPagePolyLineAnnotations($name, $page_number, $storage, $folder)

Read document page polyline annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PolyLineAnnotationsResponse**](PolyLineAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPagePopupAnnotations"></a>
## **getPagePopupAnnotations**
> \Aspose\PDF\Model\PopupAnnotationsResponse getPagePopupAnnotations($name, $page_number, $storage, $folder)

Read document page popup annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PopupAnnotationsResponse**](PopupAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPages"></a>
## **getPages**
> \Aspose\PDF\Model\DocumentPagesResponse getPages($name, $storage, $folder)

Read document pages info.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentPagesResponse**](DocumentPagesResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageSquareAnnotations"></a>
## **getPageSquareAnnotations**
> \Aspose\PDF\Model\SquareAnnotationsResponse getPageSquareAnnotations($name, $page_number, $storage, $folder)

Read document page square annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\SquareAnnotationsResponse**](SquareAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageSquigglyAnnotations"></a>
## **getPageSquigglyAnnotations**
> \Aspose\PDF\Model\SquigglyAnnotationsResponse getPageSquigglyAnnotations($name, $page_number, $storage, $folder)

Read document page squiggly annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\SquigglyAnnotationsResponse**](SquigglyAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageStrikeOutAnnotations"></a>
## **getPageStrikeOutAnnotations**
> \Aspose\PDF\Model\StrikeOutAnnotationsResponse getPageStrikeOutAnnotations($name, $page_number, $storage, $folder)

Read document page StrikeOut annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\StrikeOutAnnotationsResponse**](StrikeOutAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageText"></a>
## **getPageText**
> \Aspose\PDF\Model\TextRectsResponse getPageText($name, $page_number, $_l_l_x, $_l_l_y, $_u_r_x, $_u_r_y, $format, $regex, $split_rects, $folder, $storage)

Read page text items.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | Number of page (starting from 1). | 
**$_l_l_x** | **double** | X-coordinate of lower - left corner. | 
**$_l_l_y** | **double** | Y - coordinate of lower-left corner. | 
**$_u_r_x** | **double** | X - coordinate of upper-right corner. | 
**$_u_r_y** | **double** | Y - coordinate of upper-right corner. | 
**$format** | **string[]** | List of formats for search. | [optional]
**$regex** | **string** | Formats are specified as a regular expression. | [optional]
**$split_rects** | **bool** | Split result fragments (default is true). | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\TextRectsResponse**](TextRectsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageTextAnnotations"></a>
## **getPageTextAnnotations**
> \Aspose\PDF\Model\TextAnnotationsResponse getPageTextAnnotations($name, $page_number, $storage, $folder)

Read document page text annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\TextAnnotationsResponse**](TextAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPageUnderlineAnnotations"></a>
## **getPageUnderlineAnnotations**
> \Aspose\PDF\Model\UnderlineAnnotationsResponse getPageUnderlineAnnotations($name, $page_number, $storage, $folder)

Read document page underline annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\UnderlineAnnotationsResponse**](UnderlineAnnotationsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPclInStorageToPdf"></a>
## **getPclInStorageToPdf**
> \SplFileObject getPclInStorageToPdf($src_path, $storage)

Convert PCL file (located on storage) to PDF format and return resulting file in response. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.pcl) | 
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getPdfInStorageToDoc"></a>
## **getPdfInStorageToDoc**
> \SplFileObject getPdfInStorageToDoc($name, $add_return_to_line_end, $format, $image_resolution_x, $image_resolution_y, $max_distance_between_text_lines, $mode, $recognize_bullets, $relative_horizontal_proximity, $folder, $storage)

Converts PDF document (located on storage) to DOC format and returns resulting file in response content

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$add_return_to_line_end** | **bool** | Add return to line end. | [optional]
**$format** | [**\Aspose\PDF\Model\DocFormat**](DocFormat.md) | Allows to specify .doc or .docx file format. | [optional]
**$image_resolution_x** | **int** | Image resolution X. | [optional]
**$image_resolution_y** | **int** | Image resolution Y. | [optional]
**$max_distance_between_text_lines** | **double** | Max distance between text lines. | [optional]
**$mode** | [**\Aspose\PDF\Model\DocRecognitionMode**](DocRecognitionMode.md) | Allows to control how a PDF document is converted into a word processing document. | [optional]
**$recognize_bullets** | **bool** | Recognize bullets. | [optional]
**$relative_horizontal_proximity** | **double** | Relative horizontal proximity. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getPdfInStorageToEpub"></a>
## **getPdfInStorageToEpub**
> \SplFileObject getPdfInStorageToEpub($name, $content_recognition_mode, $folder, $storage)

Converts PDF document (located on storage) to EPUB format and returns resulting file in response content

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$content_recognition_mode** | [**\Aspose\PDF\Model\EpubRecognitionMode**](EpubRecognitionMode.md) | Property tunes conversion for this or that desirable method of recognition of content. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getPdfInStorageToHtml"></a>
## **getPdfInStorageToHtml**
> \SplFileObject getPdfInStorageToHtml($name, $additional_margin_width_in_points, $compress_svg_graphics_if_any, $convert_marked_content_to_layers, $default_font_name, $document_type, $fixed_layout, $image_resolution, $minimal_line_width, $prevent_glyphs_grouping, $split_css_into_pages, $split_into_pages, $use_z_order, $antialiasing_processing, $css_class_names_prefix, $explicit_list_of_saved_pages, $font_encoding_strategy, $font_saving_mode, $html_markup_generation_mode, $letters_positioning_method, $pages_flow_type_depends_on_viewers_screen_size, $parts_embedding_mode, $raster_images_saving_mode, $remove_empty_areas_on_top_and_bottom, $save_shadowed_texts_as_transparent_texts, $save_transparent_texts, $special_folder_for_all_images, $special_folder_for_svg_images, $try_save_text_underlining_and_strikeouting_in_css, $folder, $storage)

Converts PDF document (located on storage) to Html format and returns resulting file in response content

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$additional_margin_width_in_points** | **int** | Defines width of margin that will be forcibly left around that output HTML-areas. | [optional]
**$compress_svg_graphics_if_any** | **bool** | The flag that indicates whether found SVG graphics(if any) will be compressed(zipped) into SVGZ format during saving. | [optional]
**$convert_marked_content_to_layers** | **bool** | If attribute ConvertMarkedContentToLayers set to true then an all elements inside a PDF marked content (layer) will be put into an HTML div with "data-pdflayer" attribute specifying a layer name. This layer name will be extracted from optional properties of PDF marked content. If this attribute is false (by default) then no any layers will be created from PDF marked content. | [optional]
**$default_font_name** | **string** | Specifies the name of an installed font which is used to substitute any document font that is not embedded and not installed in the system. If null then default substitution font is used. | [optional]
**$document_type** | [**\Aspose\PDF\Model\HtmlDocumentType**](HtmlDocumentType.md) | Result document type. | [optional]
**$fixed_layout** | **bool** | The value indicating whether that HTML is created as fixed layout. | [optional]
**$image_resolution** | **int** | Resolution for image rendering. | [optional]
**$minimal_line_width** | **int** | This attribute sets minimal width of graphic path line. If thickness of line is less than 1px Adobe Acrobat rounds it to this value. So this attribute can be used to emulate this behavior for HTML browsers. | [optional]
**$prevent_glyphs_grouping** | **bool** | This attribute switch on the mode when text glyphs will not be grouped into words and strings This mode allows to keep maximum precision during positioning of glyphs on the page and it can be used for conversion documents with music notes or glyphs that should be placed separately each other. This parameter will be applied to document only when the value of FixedLayout attribute is true. | [optional]
**$split_css_into_pages** | **bool** | When multipage-mode selected(i.e 'SplitIntoPages' is 'true'), then this attribute defines whether should be created separate CSS-file for each result HTML page. | [optional]
**$split_into_pages** | **bool** | The flag that indicates whether each page of source document will be converted into it's own target HTML document, i.e whether result HTML will be splitted into several HTML-pages. | [optional]
**$use_z_order** | **bool** | If attribute UseZORder set to true, graphics and text are added to resultant HTML document accordingly Z-order in original PDF document. If this attribute is false all graphics is put as single layer which may cause some unnecessary effects for overlapped objects. | [optional]
**$antialiasing_processing** | [**\Aspose\PDF\Model\AntialiasingProcessingType**](AntialiasingProcessingType.md) | The parameter defines required antialiasing measures during conversion of compound background images from PDF to HTML. | [optional]
**$css_class_names_prefix** | **string** | When PDFtoHTML converter generates result CSSs, CSS class names (something like ".stl_01 {}" ... ".stl_NN {}) are generated and used in result CSS. This property allows forcibly set class name prefix. | [optional]
**$explicit_list_of_saved_pages** | **int[]** | With this property You can explicitely define what pages of document should be converted. Pages in this list must have 1-based numbers. I.e. valid numbers of pages must be taken from range (1...[NumberOfPagesInConvertedDocument]) Order of appearing of pages in this list does not affect their order in result HTML page(s) - in result pages allways will go in order in which they are present in source PDF. | [optional]
**$font_encoding_strategy** | [**\Aspose\PDF\Model\FontEncodingRules**](FontEncodingRules.md) | Defines encoding special rule to tune PDF decoding for current document. | [optional]
**$font_saving_mode** | [**\Aspose\PDF\Model\FontSavingModes**](FontSavingModes.md) | Defines font saving mode that will be used during saving of PDF to desirable format. | [optional]
**$html_markup_generation_mode** | [**\Aspose\PDF\Model\HtmlMarkupGenerationModes**](HtmlMarkupGenerationModes.md) | Sometimes specific reqirments to generation of HTML markup are present. This parameter defines HTML preparing modes that can be used during conversion of PDF to HTML to match such specific requirments. | [optional]
**$letters_positioning_method** | [**\Aspose\PDF\Model\LettersPositioningMethods**](LettersPositioningMethods.md) | The mode of positioning of letters in words in result HTML. | [optional]
**$pages_flow_type_depends_on_viewers_screen_size** | **bool** | If attribute 'SplitOnPages=false', than whole HTML representing all input PDF pages will be put into one big result HTML file. This flag defines whether result HTML will be generated in such way that flow of areas that represent PDF pages in result HTML will depend on screen resolution of viewer. | [optional]
**$parts_embedding_mode** | [**\Aspose\PDF\Model\PartsEmbeddingModes**](PartsEmbeddingModes.md) | It defines whether referenced files (HTML, Fonts,Images, CSSes) will be embedded into main HTML file or will be generated as apart binary entities. | [optional]
**$raster_images_saving_mode** | [**\Aspose\PDF\Model\RasterImagesSavingModes**](RasterImagesSavingModes.md) | Converted PDF can contain raster images This parameter defines how they should be handled during conversion of PDF to HTML. | [optional]
**$remove_empty_areas_on_top_and_bottom** | **bool** | Defines whether in created HTML will be removed top and bottom empty area without any content (if any). | [optional]
**$save_shadowed_texts_as_transparent_texts** | **bool** | Pdf can contain texts that are shadowed by another elements (f.e. by images) but can be selected to clipboard in Acrobat Reader (usually it happen when document contains images and OCRed texts extracted from it). This settings tells to converter whether we need save such texts as transparent selectable texts in result HTML to mimic behaviour of Acrobat Reader (othervise such texts are usually saved as hidden, not available for copying to clipboard). | [optional]
**$save_transparent_texts** | **bool** | Pdf can contain transparent texts that can be selected to clipboard (usually it happen when document contains images and OCRed texts extracted from it). This settings tells to converter whether we need save such texts as transparent selectable texts in result HTML. | [optional]
**$special_folder_for_all_images** | **string** | The path to directory to which must be saved any images if they are encountered during saving of document as HTML. If parameter is empty or null then image files(if any) wil be saved together with other files linked to HTML It does not affect anything if CustomImageSavingStrategy property was successfully used to process relevant image file. | [optional]
**$special_folder_for_svg_images** | **string** | The path to directory to which must be saved only SVG-images if they are encountered during saving of document as HTML. If parameter is empty or null then SVG files(if any) wil be saved together with other image-files (near to output file) or in special folder for images (if it specified in SpecialImagesFolderIfAny option). It does not affect anything if CustomImageSavingStrategy property was successfully used to process relevant image file. | [optional]
**$try_save_text_underlining_and_strikeouting_in_css** | **bool** | PDF itself does not contain underlining markers for texts. It emulated with line situated under text. This option allows converter try guess that this or that line is a text's underlining and put this info into CSS instead of drawing of underlining graphically. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getPdfInStorageToLaTeX"></a>
## **getPdfInStorageToLaTeX**
> \SplFileObject getPdfInStorageToLaTeX($name, $pages_count, $folder, $storage)

Converts PDF document (located on storage) to LaTeX format and returns resulting file in response content

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$pages_count** | **int** | Pages count. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getPdfInStorageToMobiXml"></a>
## **getPdfInStorageToMobiXml**
> \SplFileObject getPdfInStorageToMobiXml($name, $folder, $storage)

Converts PDF document (located on storage) to MOBIXML format and returns resulting file in response content

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getPdfInStorageToPdfA"></a>
## **getPdfInStorageToPdfA**
> \SplFileObject getPdfInStorageToPdfA($name, $type, $folder, $storage)

Converts PDF document (located on storage) to PdfA format and returns resulting file in response content

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$type** | [**\Aspose\PDF\Model\PdfAType**](PdfAType.md) | Type of PdfA format. | 
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getPdfInStorageToPptx"></a>
## **getPdfInStorageToPptx**
> \SplFileObject getPdfInStorageToPptx($name, $separate_images, $slides_as_images, $folder, $storage)

Converts PDF document (located on storage) to PPTX format and returns resulting file in response content

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$separate_images** | **bool** | Separate images. | [optional]
**$slides_as_images** | **bool** | Slides as images. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getPdfInStorageToSvg"></a>
## **getPdfInStorageToSvg**
> \SplFileObject getPdfInStorageToSvg($name, $compress_output_to_zip_archive, $folder, $storage)

Converts PDF document (located on storage) to SVG format and returns resulting file in response content

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$compress_output_to_zip_archive** | **bool** | Specifies whether output will be created as one zip-archive. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getPdfInStorageToTiff"></a>
## **getPdfInStorageToTiff**
> \SplFileObject getPdfInStorageToTiff($name, $brightness, $compression, $color_depth, $left_margin, $right_margin, $top_margin, $bottom_margin, $orientation, $skip_blank_pages, $width, $height, $x_resolution, $y_resolution, $page_index, $page_count, $folder, $storage)

Converts PDF document (located on storage) to TIFF format and returns resulting file in response content

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$brightness** | **double** | Image brightness. | [optional]
**$compression** | [**\Aspose\PDF\Model\CompressionType**](CompressionType.md) | Tiff compression. Possible values are: LZW, CCITT4, CCITT3, RLE, None. | [optional]
**$color_depth** | [**\Aspose\PDF\Model\ColorDepth**](ColorDepth.md) | Image color depth. Possible valuse are: Default, Format8bpp, Format4bpp, Format1bpp. | [optional]
**$left_margin** | **int** | Left image margin. | [optional]
**$right_margin** | **int** | Right image margin. | [optional]
**$top_margin** | **int** | Top image margin. | [optional]
**$bottom_margin** | **int** | Bottom image margin. | [optional]
**$orientation** | [**\Aspose\PDF\Model\ShapeType**](ShapeType.md) | Image orientation. Possible values are: None, Landscape, Portait. | [optional]
**$skip_blank_pages** | **bool** | Skip blank pages flag. | [optional]
**$width** | **int** | Image width. | [optional]
**$height** | **int** | Image height. | [optional]
**$x_resolution** | **int** | Horizontal resolution. | [optional]
**$y_resolution** | **int** | Vertical resolution. | [optional]
**$page_index** | **int** | Start page to export. | [optional]
**$page_count** | **int** | Number of pages to export. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getPdfInStorageToXls"></a>
## **getPdfInStorageToXls**
> \SplFileObject getPdfInStorageToXls($name, $insert_blank_column_at_first, $minimize_the_number_of_worksheets, $scale_factor, $uniform_worksheets, $folder, $storage)

Converts PDF document (located on storage) to XLS format and returns resulting file in response content

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$insert_blank_column_at_first** | **bool** | Insert blank column at first | [optional]
**$minimize_the_number_of_worksheets** | **bool** | Minimize the number of worksheets | [optional]
**$scale_factor** | **double** | Scale factor | [optional]
**$uniform_worksheets** | **bool** | Uniform worksheets | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getPdfInStorageToXml"></a>
## **getPdfInStorageToXml**
> \SplFileObject getPdfInStorageToXml($name, $folder, $storage)

Converts PDF document (located on storage) to XML format and returns resulting file in response content

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getPdfInStorageToXps"></a>
## **getPdfInStorageToXps**
> \SplFileObject getPdfInStorageToXps($name, $folder, $storage)

Converts PDF document (located on storage) to XPS format and returns resulting file in response content

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getPolygonAnnotation"></a>
## **getPolygonAnnotation**
> \Aspose\PDF\Model\PolygonAnnotationResponse getPolygonAnnotation($name, $annotation_id, $storage, $folder)

Read document page polygon annotation by ID.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PolygonAnnotationResponse**](PolygonAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPolyLineAnnotation"></a>
## **getPolyLineAnnotation**
> \Aspose\PDF\Model\PolyLineAnnotationResponse getPolyLineAnnotation($name, $annotation_id, $storage, $folder)

Read document page polyline annotation by ID.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PolyLineAnnotationResponse**](PolyLineAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPopupAnnotation"></a>
## **getPopupAnnotation**
> \Aspose\PDF\Model\PopupAnnotationResponse getPopupAnnotation($name, $annotation_id, $storage, $folder)

Read document page popup annotation by ID.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PopupAnnotationResponse**](PopupAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getPsInStorageToPdf"></a>
## **getPsInStorageToPdf**
> \SplFileObject getPsInStorageToPdf($src_path, $storage)

Convert PS file (located on storage) to PDF format and return resulting file in response. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.ps) | 
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getSquareAnnotation"></a>
## **getSquareAnnotation**
> \Aspose\PDF\Model\SquareAnnotationResponse getSquareAnnotation($name, $annotation_id, $storage, $folder)

Read document page square annotation by ID.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\SquareAnnotationResponse**](SquareAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getSquigglyAnnotation"></a>
## **getSquigglyAnnotation**
> \Aspose\PDF\Model\SquigglyAnnotationResponse getSquigglyAnnotation($name, $annotation_id, $storage, $folder)

Read document page squiggly annotation by ID.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\SquigglyAnnotationResponse**](SquigglyAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getStrikeOutAnnotation"></a>
## **getStrikeOutAnnotation**
> \Aspose\PDF\Model\StrikeOutAnnotationResponse getStrikeOutAnnotation($name, $annotation_id, $storage, $folder)

Read document page StrikeOut annotation by ID.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\StrikeOutAnnotationResponse**](StrikeOutAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getSvgInStorageToPdf"></a>
## **getSvgInStorageToPdf**
> \SplFileObject getSvgInStorageToPdf($src_path, $adjust_page_size, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $storage)

Convert SVG file (located on storage) to PDF format and return resulting file in response. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.svg) | 
**$adjust_page_size** | **bool** | Adjust page size | [optional]
**$height** | **double** | Page height | [optional]
**$width** | **double** | Page width | [optional]
**$is_landscape** | **bool** | Is page landscaped | [optional]
**$margin_left** | **double** | Page margin left | [optional]
**$margin_bottom** | **double** | Page margin bottom | [optional]
**$margin_right** | **double** | Page margin right | [optional]
**$margin_top** | **double** | Page margin top | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getText"></a>
## **getText**
> \Aspose\PDF\Model\TextRectsResponse getText($name, $_l_l_x, $_l_l_y, $_u_r_x, $_u_r_y, $format, $regex, $split_rects, $folder, $storage)

Read document text.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$_l_l_x** | **double** | X-coordinate of lower - left corner. | 
**$_l_l_y** | **double** | Y - coordinate of lower-left corner. | 
**$_u_r_x** | **double** | X - coordinate of upper-right corner. | 
**$_u_r_y** | **double** | Y - coordinate of upper-right corner. | 
**$format** | **string[]** | List of formats for search. | [optional]
**$regex** | **string** | Formats are specified as a regular expression. | [optional]
**$split_rects** | **bool** | Split result fragments (default is true). | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\TextRectsResponse**](TextRectsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getTextAnnotation"></a>
## **getTextAnnotation**
> \Aspose\PDF\Model\TextAnnotationResponse getTextAnnotation($name, $annotation_id, $storage, $folder)

Read document page text annotation by ID.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\TextAnnotationResponse**](TextAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getUnderlineAnnotation"></a>
## **getUnderlineAnnotation**
> \Aspose\PDF\Model\UnderlineAnnotationResponse getUnderlineAnnotation($name, $annotation_id, $storage, $folder)

Read document page underline annotation by ID.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\UnderlineAnnotationResponse**](UnderlineAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getVerifySignature"></a>
## **getVerifySignature**
> \Aspose\PDF\Model\SignatureVerifyResponse getVerifySignature($name, $sign_name, $storage, $folder)

Verify signature document.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$sign_name** | **string** | Sign name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\SignatureVerifyResponse**](SignatureVerifyResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getWebInStorageToPdf"></a>
## **getWebInStorageToPdf**
> \SplFileObject getWebInStorageToPdf($url, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $storage)

Convert web page to PDF format and return resulting file in response. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$url** | **string** | Source url | 
**$height** | **double** | Page height | [optional]
**$width** | **double** | Page width | [optional]
**$is_landscape** | **bool** | Is page landscaped | [optional]
**$margin_left** | **double** | Page margin left | [optional]
**$margin_bottom** | **double** | Page margin bottom | [optional]
**$margin_right** | **double** | Page margin right | [optional]
**$margin_top** | **double** | Page margin top | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getWordsPerPage"></a>
## **getWordsPerPage**
> \Aspose\PDF\Model\WordCountResponse getWordsPerPage($name, $storage, $folder)

Get number of words per document page.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\WordCountResponse**](WordCountResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="getXfaPdfInStorageToAcroForm"></a>
## **getXfaPdfInStorageToAcroForm**
> \SplFileObject getXfaPdfInStorageToAcroForm($name, $folder, $storage)

Converts PDF document which contatins XFA form (located on storage) to PDF with AcroForm and returns resulting file response content

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getXmlInStorageToPdf"></a>
## **getXmlInStorageToPdf**
> \SplFileObject getXmlInStorageToPdf($src_path, $xsl_file_path, $storage)

Convert XML file (located on storage) to PDF format and return resulting file in response. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.xml) | 
**$xsl_file_path** | **string** | Full XSL source filename (ex. /folder1/folder2/template.xsl) | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getXpsInStorageToPdf"></a>
## **getXpsInStorageToPdf**
> \SplFileObject getXpsInStorageToPdf($src_path, $storage)

Convert XPS file (located on storage) to PDF format and return resulting file in response. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.xps) | 
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="getXslFoInStorageToPdf"></a>
## **getXslFoInStorageToPdf**
> \SplFileObject getXslFoInStorageToPdf($src_path, $storage)

Convert XslFo file (located on storage) to PDF format and return resulting file in response. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.xslfo) | 
**$storage** | **string** | The document storage. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: multipart/form-data

<a name="postAppendDocument"></a>
## **postAppendDocument**
> \Aspose\PDF\Model\DocumentResponse postAppendDocument($name, $append_document, $append_file, $start_page, $end_page, $storage, $folder)

Append document to existing one.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The original document name. | 
**$append_document** | [**\Aspose\PDF\Model\AppendDocument**](AppendDocument.md) | with the append document data. | [optional]
**$append_file** | **string** | Append file server path. | [optional]
**$start_page** | **int** | Appending start page. | [optional]
**$end_page** | **int** | Appending end page. | [optional]
**$storage** | **string** | The documents storage. | [optional]
**$folder** | **string** | The original document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentResponse**](DocumentResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postCreateField"></a>
## **postCreateField**
> \Aspose\PDF\Model\AsposeResponse postCreateField($name, $page, $field, $storage, $folder)

Create field.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page** | **int** | Document page number. | 
**$field** | [**\Aspose\PDF\Model\Field**](Field.md) | with the field data. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postDocumentTextReplace"></a>
## **postDocumentTextReplace**
> \Aspose\PDF\Model\TextReplaceResponse postDocumentTextReplace($name, $text_replace, $storage, $folder)

Document's replace text method.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** |  | 
**$text_replace** | [**\Aspose\PDF\Model\TextReplaceListRequest**](TextReplaceListRequest.md) |  | 
**$storage** | **string** |  | [optional]
**$folder** | **string** |  | [optional]

### Return type

[**\Aspose\PDF\Model\TextReplaceResponse**](TextReplaceResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postFlattenDocument"></a>
## **postFlattenDocument**
> \Aspose\PDF\Model\AsposeResponse postFlattenDocument($name, $update_appearances, $call_events, $hide_buttons, $storage, $folder)

Removes all fields from the document and place their values instead.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$update_appearances** | **bool** | If set, all field appearances will be regenerated before flattening. This option may help if field is incorrectly flattened. This option may decrease performance.. | [optional]
**$call_events** | **bool** | If set, formatting and other JavaScript events will be called. | [optional]
**$hide_buttons** | **bool** | If set, buttons will be removed from flattened document. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postInsertImage"></a>
## **postInsertImage**
> \Aspose\PDF\Model\AsposeResponse postInsertImage($name, $page_number, $llx, $lly, $urx, $ury, $image_file_path, $storage, $folder, $image)

Insert image to document page.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$llx** | **double** | Coordinate lower left X. | 
**$lly** | **double** | Coordinate lower left Y. | 
**$urx** | **double** | Coordinate upper right X. | 
**$ury** | **double** | Coordinate upper right Y. | 
**$image_file_path** | **string** | Path to image file if specified. Request content is used otherwise. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$image** | **\SplFileObject** | Image file. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

<a name="postMoveFile"></a>
## **postMoveFile**
> \Aspose\PDF\Model\AsposeResponse postMoveFile($src, $dest, $version_id, $storage, $dest_storage)

Move a specific file

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$src** | **string** | Source file path e.g. /fileSource.ext | 
**$dest** | **string** | Destination file path e.g. /fileDestination.ext | 
**$version_id** | **string** | Source file's version, | [optional]
**$storage** | **string** | User's source storage name | [optional]
**$dest_storage** | **string** | User's destination storage name | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

<a name="postMoveFolder"></a>
## **postMoveFolder**
> \Aspose\PDF\Model\AsposeResponse postMoveFolder($src, $dest, $storage, $dest_storage)

Move a specific folder 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$src** | **string** | Source folder path e.g. /Folder1 | 
**$dest** | **string** | Destination folder path e.g. /Folder2 | 
**$storage** | **string** | User's source storage name | [optional]
**$dest_storage** | **string** | User's destination storage name | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postMovePage"></a>
## **postMovePage**
> \Aspose\PDF\Model\AsposeResponse postMovePage($name, $page_number, $new_index, $storage, $folder)

Move page to new position.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$new_index** | **int** | The new page position/index. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postOptimizeDocument"></a>
## **postOptimizeDocument**
> \Aspose\PDF\Model\AsposeResponse postOptimizeDocument($name, $options, $storage, $folder)

Optimize document.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$options** | [**\Aspose\PDF\Model\OptimizeOptions**](OptimizeOptions.md) | The optimization options. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postPageCaretAnnotations"></a>
## **postPageCaretAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageCaretAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page caret annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$annotations** | [**\Aspose\PDF\Model\CaretAnnotation[]**](CaretAnnotation.md) | The array of annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postPageCircleAnnotations"></a>
## **postPageCircleAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageCircleAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page circle annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$annotations** | [**\Aspose\PDF\Model\CircleAnnotation[]**](CircleAnnotation.md) | The array of annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postPageFreeTextAnnotations"></a>
## **postPageFreeTextAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageFreeTextAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page free text annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$annotations** | [**\Aspose\PDF\Model\FreeTextAnnotation[]**](FreeTextAnnotation.md) | The array of annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postPageHighlightAnnotations"></a>
## **postPageHighlightAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageHighlightAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page highlight annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$annotations** | [**\Aspose\PDF\Model\HighlightAnnotation[]**](HighlightAnnotation.md) | The array of annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postPageInkAnnotations"></a>
## **postPageInkAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageInkAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page ink annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$annotations** | [**\Aspose\PDF\Model\InkAnnotation[]**](InkAnnotation.md) | The array of annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postPageLineAnnotations"></a>
## **postPageLineAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageLineAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page line annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$annotations** | [**\Aspose\PDF\Model\LineAnnotation[]**](LineAnnotation.md) | The array of annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postPageLinkAnnotations"></a>
## **postPageLinkAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageLinkAnnotations($name, $page_number, $links, $storage, $folder)

Add document page link annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$links** | [**\Aspose\PDF\Model\LinkAnnotation[]**](LinkAnnotation.md) | Array of link anotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postPagePolygonAnnotations"></a>
## **postPagePolygonAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPagePolygonAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page polygon annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$annotations** | [**\Aspose\PDF\Model\PolygonAnnotation[]**](PolygonAnnotation.md) | The array of annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postPagePolyLineAnnotations"></a>
## **postPagePolyLineAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPagePolyLineAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page polyline annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$annotations** | [**\Aspose\PDF\Model\PolyLineAnnotation[]**](PolyLineAnnotation.md) | The array of annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postPageSquareAnnotations"></a>
## **postPageSquareAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageSquareAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page square annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$annotations** | [**\Aspose\PDF\Model\SquareAnnotation[]**](SquareAnnotation.md) | The array of annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postPageSquigglyAnnotations"></a>
## **postPageSquigglyAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageSquigglyAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page squiggly annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$annotations** | [**\Aspose\PDF\Model\SquigglyAnnotation[]**](SquigglyAnnotation.md) | The array of annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postPageStrikeOutAnnotations"></a>
## **postPageStrikeOutAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageStrikeOutAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page StrikeOut annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$annotations** | [**\Aspose\PDF\Model\StrikeOutAnnotation[]**](StrikeOutAnnotation.md) | The array of annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postPageTextAnnotations"></a>
## **postPageTextAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageTextAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page text annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$annotations** | [**\Aspose\PDF\Model\TextAnnotation[]**](TextAnnotation.md) | The array of annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postPageTextReplace"></a>
## **postPageTextReplace**
> \Aspose\PDF\Model\TextReplaceResponse postPageTextReplace($name, $page_number, $text_replace_list_request, $storage, $folder)

Page's replace text method.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** |  | 
**$page_number** | **int** |  | 
**$text_replace_list_request** | [**\Aspose\PDF\Model\TextReplaceListRequest**](TextReplaceListRequest.md) |  | 
**$storage** | **string** |  | [optional]
**$folder** | **string** |  | [optional]

### Return type

[**\Aspose\PDF\Model\TextReplaceResponse**](TextReplaceResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postPageUnderlineAnnotations"></a>
## **postPageUnderlineAnnotations**
> \Aspose\PDF\Model\AsposeResponse postPageUnderlineAnnotations($name, $page_number, $annotations, $storage, $folder)

Add document page underline annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$annotations** | [**\Aspose\PDF\Model\UnderlineAnnotation[]**](UnderlineAnnotation.md) | The array of annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postPopupAnnotation"></a>
## **postPopupAnnotation**
> \Aspose\PDF\Model\AsposeResponse postPopupAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Add document popup annotations.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The parent annotation ID. | 
**$annotation** | [**\Aspose\PDF\Model\PopupAnnotation**](PopupAnnotation.md) | The annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postSignDocument"></a>
## **postSignDocument**
> \Aspose\PDF\Model\AsposeResponse postSignDocument($name, $signature, $storage, $folder)

Sign document.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$signature** | [**\Aspose\PDF\Model\Signature**](Signature.md) | Signature object containing signature data. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postSignPage"></a>
## **postSignPage**
> \Aspose\PDF\Model\AsposeResponse postSignPage($name, $page_number, $signature, $storage, $folder)

Sign page.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$signature** | [**\Aspose\PDF\Model\Signature**](Signature.md) | Signature object containing signature data. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="postSplitDocument"></a>
## **postSplitDocument**
> \Aspose\PDF\Model\SplitResultResponse postSplitDocument($name, $format, $from, $to, $storage, $folder)

Split document to parts.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | Document name. | 
**$format** | **string** | Resulting documents format. | [optional]
**$from** | **int** | Start page if defined. | [optional]
**$to** | **int** | End page if defined. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\SplitResultResponse**](SplitResultResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putAddNewPage"></a>
## **putAddNewPage**
> \Aspose\PDF\Model\DocumentPagesResponse putAddNewPage($name, $storage, $folder)

Add new page to end of the document.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentPagesResponse**](DocumentPagesResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putAddText"></a>
## **putAddText**
> \Aspose\PDF\Model\AsposeResponse putAddText($name, $page_number, $paragraph, $folder, $storage)

Add text to PDF document page.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | Number of page (starting from 1). | 
**$paragraph** | [**\Aspose\PDF\Model\Paragraph**](Paragraph.md) | Paragraph data. | [optional]
**$folder** | **string** | Document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putCaretAnnotation"></a>
## **putCaretAnnotation**
> \Aspose\PDF\Model\CaretAnnotationResponse putCaretAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document caret annotation

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$annotation** | [**\Aspose\PDF\Model\CaretAnnotation**](CaretAnnotation.md) | Annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\CaretAnnotationResponse**](CaretAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putCircleAnnotation"></a>
## **putCircleAnnotation**
> \Aspose\PDF\Model\CircleAnnotationResponse putCircleAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document circle annotation

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$annotation** | [**\Aspose\PDF\Model\CircleAnnotation**](CircleAnnotation.md) | Annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\CircleAnnotationResponse**](CircleAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putCreate"></a>
## **putCreate**
> \Aspose\PDF\Model\AsposeResponse putCreate($path, $_file, $version_id, $storage)

Upload a specific file 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$path** | **string** | Path where to upload including filename and extension e.g. /file.ext or /Folder 1/file.ext | 
**$_file** | **\SplFileObject** | File to upload | 
**$version_id** | **string** | Source file's version | [optional]
**$storage** | **string** | User's storage name | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

<a name="putCreateDocument"></a>
## **putCreateDocument**
> \Aspose\PDF\Model\DocumentResponse putCreateDocument($name, $storage, $folder)

Create empty document.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The new document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The new document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentResponse**](DocumentResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putCreateFolder"></a>
## **putCreateFolder**
> \Aspose\PDF\Model\AsposeResponse putCreateFolder($path, $storage, $dest_storage)

Create the folder 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$path** | **string** | Target folder's path e.g. Folder1/Folder2/. The folders will be created recursively | 
**$storage** | **string** | User's source storage name | [optional]
**$dest_storage** | **string** | User's destination storage name | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putEpubInStorageToPdf"></a>
## **putEpubInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putEpubInStorageToPdf($name, $src_path, $storage, $dst_folder)

Convert EPUB file (located on storage) to PDF format and upload resulting file to storage. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.epub) | 
**$storage** | **string** | The document storage. | [optional]
**$dst_folder** | **string** | The destination document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putFieldsFlatten"></a>
## **putFieldsFlatten**
> \Aspose\PDF\Model\AsposeResponse putFieldsFlatten($name, $storage, $folder)

Flatten form fields in document.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putFreeTextAnnotation"></a>
## **putFreeTextAnnotation**
> \Aspose\PDF\Model\FreeTextAnnotationResponse putFreeTextAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document free text annotation

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$annotation** | [**\Aspose\PDF\Model\FreeTextAnnotation**](FreeTextAnnotation.md) | Annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FreeTextAnnotationResponse**](FreeTextAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putHighlightAnnotation"></a>
## **putHighlightAnnotation**
> \Aspose\PDF\Model\HighlightAnnotationResponse putHighlightAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document highlight annotation

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$annotation** | [**\Aspose\PDF\Model\HighlightAnnotation**](HighlightAnnotation.md) | Annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\HighlightAnnotationResponse**](HighlightAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putHtmlInStorageToPdf"></a>
## **putHtmlInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putHtmlInStorageToPdf($name, $src_path, $html_file_name, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $dst_folder, $storage)

Convert HTML file (located on storage) to PDF format and upload resulting file to storage. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.zip) | 
**$html_file_name** | **string** | Name of HTML file in ZIP. | [optional]
**$height** | **double** | Page height | [optional]
**$width** | **double** | Page width | [optional]
**$is_landscape** | **bool** | Is page landscaped | [optional]
**$margin_left** | **double** | Page margin left | [optional]
**$margin_bottom** | **double** | Page margin bottom | [optional]
**$margin_right** | **double** | Page margin right | [optional]
**$margin_top** | **double** | Page margin top | [optional]
**$dst_folder** | **string** | The destination document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putImageExtractAsGif"></a>
## **putImageExtractAsGif**
> \Aspose\PDF\Model\AsposeResponse putImageExtractAsGif($name, $image_id, $width, $height, $storage, $folder, $dest_folder)

Extract document image in GIF format to folder

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$image_id** | **string** | Image ID. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$dest_folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putImageExtractAsJpeg"></a>
## **putImageExtractAsJpeg**
> \Aspose\PDF\Model\AsposeResponse putImageExtractAsJpeg($name, $image_id, $width, $height, $storage, $folder, $dest_folder)

Extract document image in JPEG format to folder

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$image_id** | **string** | Image ID. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$dest_folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putImageExtractAsPng"></a>
## **putImageExtractAsPng**
> \Aspose\PDF\Model\AsposeResponse putImageExtractAsPng($name, $image_id, $width, $height, $storage, $folder, $dest_folder)

Extract document image in PNG format to folder

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$image_id** | **string** | Image ID. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$dest_folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putImageExtractAsTiff"></a>
## **putImageExtractAsTiff**
> \Aspose\PDF\Model\AsposeResponse putImageExtractAsTiff($name, $image_id, $width, $height, $storage, $folder, $dest_folder)

Extract document image in TIFF format to folder

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$image_id** | **string** | Image ID. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$dest_folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putImageInStorageToPdf"></a>
## **putImageInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putImageInStorageToPdf($name, $image_templates, $dst_folder, $storage)

Convert image file (located on storage) to PDF format and upload resulting file to storage. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$image_templates** | [**\Aspose\PDF\Model\ImageTemplatesRequest**](ImageTemplatesRequest.md) | Image templates | 
**$dst_folder** | **string** | The destination document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putImagesExtractAsGif"></a>
## **putImagesExtractAsGif**
> \Aspose\PDF\Model\AsposeResponse putImagesExtractAsGif($name, $page_number, $width, $height, $storage, $folder, $dest_folder)

Extract document images in GIF format to folder.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$dest_folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putImagesExtractAsJpeg"></a>
## **putImagesExtractAsJpeg**
> \Aspose\PDF\Model\AsposeResponse putImagesExtractAsJpeg($name, $page_number, $width, $height, $storage, $folder, $dest_folder)

Extract document images in JPEG format to folder.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$storage** | **string** |  | [optional]
**$folder** | **string** | The document folder. | [optional]
**$dest_folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putImagesExtractAsPng"></a>
## **putImagesExtractAsPng**
> \Aspose\PDF\Model\AsposeResponse putImagesExtractAsPng($name, $page_number, $width, $height, $storage, $folder, $dest_folder)

Extract document images in PNG format to folder.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$dest_folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putImagesExtractAsTiff"></a>
## **putImagesExtractAsTiff**
> \Aspose\PDF\Model\AsposeResponse putImagesExtractAsTiff($name, $page_number, $width, $height, $storage, $folder, $dest_folder)

Extract document images in TIFF format to folder.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$dest_folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putInkAnnotation"></a>
## **putInkAnnotation**
> \Aspose\PDF\Model\InkAnnotationResponse putInkAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document ink annotation

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$annotation** | [**\Aspose\PDF\Model\InkAnnotation**](InkAnnotation.md) | Annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\InkAnnotationResponse**](InkAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putLaTeXInStorageToPdf"></a>
## **putLaTeXInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putLaTeXInStorageToPdf($name, $src_path, $dst_folder, $storage)

Convert LaTeX file (located on storage) to PDF format and upload resulting file to storage. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.tex) | 
**$dst_folder** | **string** | The destination document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putLineAnnotation"></a>
## **putLineAnnotation**
> \Aspose\PDF\Model\LineAnnotationResponse putLineAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document line annotation

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$annotation** | [**\Aspose\PDF\Model\LineAnnotation**](LineAnnotation.md) | Annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\LineAnnotationResponse**](LineAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putLinkAnnotation"></a>
## **putLinkAnnotation**
> \Aspose\PDF\Model\LinkAnnotationResponse putLinkAnnotation($name, $link_id, $link, $storage, $folder)

Replace document page link annotations

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$link_id** | **string** | The link ID. | 
**$link** | [**\Aspose\PDF\Model\LinkAnnotation**](LinkAnnotation.md) | Link anotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\LinkAnnotationResponse**](LinkAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putMergeDocuments"></a>
## **putMergeDocuments**
> \SplFileObject putMergeDocuments($name, $merge_documents, $storage, $folder)

Merge a list of documents.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | Resulting documen name. | 
**$merge_documents** | [**\Aspose\PDF\Model\MergeDocuments**](MergeDocuments.md) | with a list of documents. | [optional]
**$storage** | **string** | Resulting document storage. | [optional]
**$folder** | **string** | Resulting document folder. | [optional]

### Return type

**\SplFileObject**

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putMhtInStorageToPdf"></a>
## **putMhtInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putMhtInStorageToPdf($name, $src_path, $dst_folder, $storage)

Convert MHT file (located on storage) to PDF format and upload resulting file to storage. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.mht) | 
**$dst_folder** | **string** | The destination document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPageAddStamp"></a>
## **putPageAddStamp**
> \Aspose\PDF\Model\AsposeResponse putPageAddStamp($name, $page_number, $stamp, $storage, $folder)

Add page stamp.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$stamp** | [**\Aspose\PDF\Model\Stamp**](Stamp.md) | with data. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPageConvertToBmp"></a>
## **putPageConvertToBmp**
> \Aspose\PDF\Model\AsposeResponse putPageConvertToBmp($name, $page_number, $out_path, $width, $height, $folder, $storage)

Convert document page to bmp image and upload resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$out_path** | **string** | The out path of result image. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPageConvertToEmf"></a>
## **putPageConvertToEmf**
> \Aspose\PDF\Model\AsposeResponse putPageConvertToEmf($name, $page_number, $out_path, $width, $height, $folder, $storage)

Convert document page to emf image and upload resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$out_path** | **string** | The out path of result image. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPageConvertToGif"></a>
## **putPageConvertToGif**
> \Aspose\PDF\Model\AsposeResponse putPageConvertToGif($name, $page_number, $out_path, $width, $height, $folder, $storage)

Convert document page to gif image and upload resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$out_path** | **string** | The out path of result image. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPageConvertToJpeg"></a>
## **putPageConvertToJpeg**
> \Aspose\PDF\Model\AsposeResponse putPageConvertToJpeg($name, $page_number, $out_path, $width, $height, $folder, $storage)

Convert document page to Jpeg image and upload resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$out_path** | **string** | The out path of result image. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPageConvertToPng"></a>
## **putPageConvertToPng**
> \Aspose\PDF\Model\AsposeResponse putPageConvertToPng($name, $page_number, $out_path, $width, $height, $folder, $storage)

Convert document page to png image and upload resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$out_path** | **string** | The out path of result image. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPageConvertToTiff"></a>
## **putPageConvertToTiff**
> \Aspose\PDF\Model\AsposeResponse putPageConvertToTiff($name, $page_number, $out_path, $width, $height, $folder, $storage)

Convert document page to Tiff image and upload resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$page_number** | **int** | The page number. | 
**$out_path** | **string** | The out path of result image. | 
**$width** | **int** | The converted image width. | [optional]
**$height** | **int** | The converted image height. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPclInStorageToPdf"></a>
## **putPclInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putPclInStorageToPdf($name, $src_path, $dst_folder, $storage)

Convert PCL file (located on storage) to PDF format and upload resulting file to storage. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.pcl) | 
**$dst_folder** | **string** | The destination document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPdfInRequestToDoc"></a>
## **putPdfInRequestToDoc**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToDoc($out_path, $add_return_to_line_end, $format, $image_resolution_x, $image_resolution_y, $max_distance_between_text_lines, $mode, $recognize_bullets, $relative_horizontal_proximity, $storage, $file)

Converts PDF document (in request content) to DOC format and uploads resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.doc) | 
**$add_return_to_line_end** | **bool** | Add return to line end. | [optional]
**$format** | [**\Aspose\PDF\Model\DocFormat**](DocFormat.md) | Allows to specify .doc or .docx file format. | [optional]
**$image_resolution_x** | **int** | Image resolution X. | [optional]
**$image_resolution_y** | **int** | Image resolution Y. | [optional]
**$max_distance_between_text_lines** | **double** | Max distance between text lines. | [optional]
**$mode** | [**\Aspose\PDF\Model\DocRecognitionMode**](DocRecognitionMode.md) | Allows to control how a PDF document is converted into a word processing document. | [optional]
**$recognize_bullets** | **bool** | Recognize bullets. | [optional]
**$relative_horizontal_proximity** | **double** | Relative horizontal proximity. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$file** | **\SplFileObject** | A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

<a name="putPdfInRequestToEpub"></a>
## **putPdfInRequestToEpub**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToEpub($out_path, $content_recognition_mode, $storage, $file)

Converts PDF document (in request content) to EPUB format and uploads resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.epub) | 
**$content_recognition_mode** | [**\Aspose\PDF\Model\EpubRecognitionMode**](EpubRecognitionMode.md) | Property tunes conversion for this or that desirable method of recognition of content. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$file** | **\SplFileObject** | A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

<a name="putPdfInRequestToHtml"></a>
## **putPdfInRequestToHtml**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToHtml($out_path, $additional_margin_width_in_points, $compress_svg_graphics_if_any, $convert_marked_content_to_layers, $default_font_name, $document_type, $fixed_layout, $image_resolution, $minimal_line_width, $prevent_glyphs_grouping, $split_css_into_pages, $split_into_pages, $use_z_order, $antialiasing_processing, $css_class_names_prefix, $explicit_list_of_saved_pages, $font_encoding_strategy, $font_saving_mode, $html_markup_generation_mode, $letters_positioning_method, $pages_flow_type_depends_on_viewers_screen_size, $parts_embedding_mode, $raster_images_saving_mode, $remove_empty_areas_on_top_and_bottom, $save_shadowed_texts_as_transparent_texts, $save_transparent_texts, $special_folder_for_all_images, $special_folder_for_svg_images, $try_save_text_underlining_and_strikeouting_in_css, $storage, $file)

Converts PDF document (in request content) to Html format and uploads resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.html) | 
**$additional_margin_width_in_points** | **int** | Defines width of margin that will be forcibly left around that output HTML-areas. | [optional]
**$compress_svg_graphics_if_any** | **bool** | The flag that indicates whether found SVG graphics(if any) will be compressed(zipped) into SVGZ format during saving. | [optional]
**$convert_marked_content_to_layers** | **bool** | If attribute ConvertMarkedContentToLayers set to true then an all elements inside a PDF marked content (layer) will be put into an HTML div with "data-pdflayer" attribute specifying a layer name. This layer name will be extracted from optional properties of PDF marked content. If this attribute is false (by default) then no any layers will be created from PDF marked content. | [optional]
**$default_font_name** | **string** | Specifies the name of an installed font which is used to substitute any document font that is not embedded and not installed in the system. If null then default substitution font is used. | [optional]
**$document_type** | [**\Aspose\PDF\Model\HtmlDocumentType**](HtmlDocumentType.md) | Result document type. | [optional]
**$fixed_layout** | **bool** | The value indicating whether that HTML is created as fixed layout. | [optional]
**$image_resolution** | **int** | Resolution for image rendering. | [optional]
**$minimal_line_width** | **int** | This attribute sets minimal width of graphic path line. If thickness of line is less than 1px Adobe Acrobat rounds it to this value. So this attribute can be used to emulate this behavior for HTML browsers. | [optional]
**$prevent_glyphs_grouping** | **bool** | This attribute switch on the mode when text glyphs will not be grouped into words and strings This mode allows to keep maximum precision during positioning of glyphs on the page and it can be used for conversion documents with music notes or glyphs that should be placed separately each other. This parameter will be applied to document only when the value of FixedLayout attribute is true. | [optional]
**$split_css_into_pages** | **bool** | When multipage-mode selected(i.e 'SplitIntoPages' is 'true'), then this attribute defines whether should be created separate CSS-file for each result HTML page. | [optional]
**$split_into_pages** | **bool** | The flag that indicates whether each page of source document will be converted into it's own target HTML document, i.e whether result HTML will be splitted into several HTML-pages. | [optional]
**$use_z_order** | **bool** | If attribute UseZORder set to true, graphics and text are added to resultant HTML document accordingly Z-order in original PDF document. If this attribute is false all graphics is put as single layer which may cause some unnecessary effects for overlapped objects. | [optional]
**$antialiasing_processing** | [**\Aspose\PDF\Model\AntialiasingProcessingType**](AntialiasingProcessingType.md) | The parameter defines required antialiasing measures during conversion of compound background images from PDF to HTML. | [optional]
**$css_class_names_prefix** | **string** | When PDFtoHTML converter generates result CSSs, CSS class names (something like ".stl_01 {}" ... ".stl_NN {}) are generated and used in result CSS. This property allows forcibly set class name prefix. | [optional]
**$explicit_list_of_saved_pages** | **int[]** | With this property You can explicitely define what pages of document should be converted. Pages in this list must have 1-based numbers. I.e. valid numbers of pages must be taken from range (1...[NumberOfPagesInConvertedDocument]) Order of appearing of pages in this list does not affect their order in result HTML page(s) - in result pages allways will go in order in which they are present in source PDF. | [optional]
**$font_encoding_strategy** | [**\Aspose\PDF\Model\FontEncodingRules**](FontEncodingRules.md) | Defines encoding special rule to tune PDF decoding for current document. | [optional]
**$font_saving_mode** | [**\Aspose\PDF\Model\FontSavingModes**](FontSavingModes.md) | Defines font saving mode that will be used during saving of PDF to desirable format. | [optional]
**$html_markup_generation_mode** | [**\Aspose\PDF\Model\HtmlMarkupGenerationModes**](HtmlMarkupGenerationModes.md) | Sometimes specific reqirments to generation of HTML markup are present. This parameter defines HTML preparing modes that can be used during conversion of PDF to HTML to match such specific requirments. | [optional]
**$letters_positioning_method** | [**\Aspose\PDF\Model\LettersPositioningMethods**](LettersPositioningMethods.md) | The mode of positioning of letters in words in result HTML. | [optional]
**$pages_flow_type_depends_on_viewers_screen_size** | **bool** | If attribute 'SplitOnPages=false', than whole HTML representing all input PDF pages will be put into one big result HTML file. This flag defines whether result HTML will be generated in such way that flow of areas that represent PDF pages in result HTML will depend on screen resolution of viewer. | [optional]
**$parts_embedding_mode** | [**\Aspose\PDF\Model\PartsEmbeddingModes**](PartsEmbeddingModes.md) | It defines whether referenced files (HTML, Fonts,Images, CSSes) will be embedded into main HTML file or will be generated as apart binary entities. | [optional]
**$raster_images_saving_mode** | [**\Aspose\PDF\Model\RasterImagesSavingModes**](RasterImagesSavingModes.md) | Converted PDF can contain raster images This parameter defines how they should be handled during conversion of PDF to HTML. | [optional]
**$remove_empty_areas_on_top_and_bottom** | **bool** | Defines whether in created HTML will be removed top and bottom empty area without any content (if any). | [optional]
**$save_shadowed_texts_as_transparent_texts** | **bool** | Pdf can contain texts that are shadowed by another elements (f.e. by images) but can be selected to clipboard in Acrobat Reader (usually it happen when document contains images and OCRed texts extracted from it). This settings tells to converter whether we need save such texts as transparent selectable texts in result HTML to mimic behaviour of Acrobat Reader (othervise such texts are usually saved as hidden, not available for copying to clipboard). | [optional]
**$save_transparent_texts** | **bool** | Pdf can contain transparent texts that can be selected to clipboard (usually it happen when document contains images and OCRed texts extracted from it). This settings tells to converter whether we need save such texts as transparent selectable texts in result HTML. | [optional]
**$special_folder_for_all_images** | **string** | The path to directory to which must be saved any images if they are encountered during saving of document as HTML. If parameter is empty or null then image files(if any) wil be saved together with other files linked to HTML It does not affect anything if CustomImageSavingStrategy property was successfully used to process relevant image file. | [optional]
**$special_folder_for_svg_images** | **string** | The path to directory to which must be saved only SVG-images if they are encountered during saving of document as HTML. If parameter is empty or null then SVG files(if any) wil be saved together with other image-files (near to output file) or in special folder for images (if it specified in SpecialImagesFolderIfAny option). It does not affect anything if CustomImageSavingStrategy property was successfully used to process relevant image file. | [optional]
**$try_save_text_underlining_and_strikeouting_in_css** | **bool** | PDF itself does not contain underlining markers for texts. It emulated with line situated under text. This option allows converter try guess that this or that line is a text's underlining and put this info into CSS instead of drawing of underlining graphically. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$file** | **\SplFileObject** | A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

<a name="putPdfInRequestToLaTeX"></a>
## **putPdfInRequestToLaTeX**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToLaTeX($out_path, $pages_count, $storage, $file)

Converts PDF document (in request content) to LaTeX format and uploads resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.tex) | 
**$pages_count** | **int** | Pages count. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$file** | **\SplFileObject** | A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

<a name="putPdfInRequestToMobiXml"></a>
## **putPdfInRequestToMobiXml**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToMobiXml($out_path, $storage, $file)

Converts PDF document (in request content) to MOBIXML format and uploads resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.mobixml) | 
**$storage** | **string** | The document storage. | [optional]
**$file** | **\SplFileObject** | A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

<a name="putPdfInRequestToPdfA"></a>
## **putPdfInRequestToPdfA**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToPdfA($out_path, $type, $storage, $file)

Converts PDF document (in request content) to PdfA format and uploads resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.pdf) | 
**$type** | [**\Aspose\PDF\Model\PdfAType**](PdfAType.md) | Type of PdfA format. | 
**$storage** | **string** | The document storage. | [optional]
**$file** | **\SplFileObject** | A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

<a name="putPdfInRequestToPptx"></a>
## **putPdfInRequestToPptx**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToPptx($out_path, $separate_images, $slides_as_images, $storage, $file)

Converts PDF document (in request content) to PPTX format and uploads resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.pptx) | 
**$separate_images** | **bool** | Separate images. | [optional]
**$slides_as_images** | **bool** | Slides as images. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$file** | **\SplFileObject** | A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

<a name="putPdfInRequestToSvg"></a>
## **putPdfInRequestToSvg**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToSvg($out_path, $storage, $file)

Converts PDF document (in request content) to SVG format and uploads resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.svg) | 
**$storage** | **string** | The document storage. | [optional]
**$file** | **\SplFileObject** | A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

<a name="putPdfInRequestToTiff"></a>
## **putPdfInRequestToTiff**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToTiff($out_path, $brightness, $compression, $color_depth, $left_margin, $right_margin, $top_margin, $bottom_margin, $orientation, $skip_blank_pages, $width, $height, $x_resolution, $y_resolution, $page_index, $page_count, $storage, $file)

Converts PDF document (in request content) to TIFF format and uploads resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.tiff) | 
**$brightness** | **double** | Image brightness. | [optional]
**$compression** | [**\Aspose\PDF\Model\CompressionType**](CompressionType.md) | Tiff compression. Possible values are: LZW, CCITT4, CCITT3, RLE, None. | [optional]
**$color_depth** | [**\Aspose\PDF\Model\ColorDepth**](ColorDepth.md) | Image color depth. Possible valuse are: Default, Format8bpp, Format4bpp, Format1bpp. | [optional]
**$left_margin** | **int** | Left image margin. | [optional]
**$right_margin** | **int** | Right image margin. | [optional]
**$top_margin** | **int** | Top image margin. | [optional]
**$bottom_margin** | **int** | Bottom image margin. | [optional]
**$orientation** | [**\Aspose\PDF\Model\ShapeType**](ShapeType.md) | Image orientation. Possible values are: None, Landscape, Portait. | [optional]
**$skip_blank_pages** | **bool** | Skip blank pages flag. | [optional]
**$width** | **int** | Image width. | [optional]
**$height** | **int** | Image height. | [optional]
**$x_resolution** | **int** | Horizontal resolution. | [optional]
**$y_resolution** | **int** | Vertical resolution. | [optional]
**$page_index** | **int** | Start page to export. | [optional]
**$page_count** | **int** | Number of pages to export. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$file** | **\SplFileObject** | A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

<a name="putPdfInRequestToXls"></a>
## **putPdfInRequestToXls**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToXls($out_path, $insert_blank_column_at_first, $minimize_the_number_of_worksheets, $scale_factor, $uniform_worksheets, $storage, $file)

Converts PDF document (in request content) to XLS format and uploads resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.xls) | 
**$insert_blank_column_at_first** | **bool** | Insert blank column at first | [optional]
**$minimize_the_number_of_worksheets** | **bool** | Minimize the number of worksheets | [optional]
**$scale_factor** | **double** | Scale factor | [optional]
**$uniform_worksheets** | **bool** | Uniform worksheets | [optional]
**$storage** | **string** | The document storage. | [optional]
**$file** | **\SplFileObject** | A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

<a name="putPdfInRequestToXml"></a>
## **putPdfInRequestToXml**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToXml($out_path, $storage, $file)

Converts PDF document (in request content) to XML format and uploads resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.xml) | 
**$storage** | **string** | The document storage. | [optional]
**$file** | **\SplFileObject** | A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

<a name="putPdfInRequestToXps"></a>
## **putPdfInRequestToXps**
> \Aspose\PDF\Model\AsposeResponse putPdfInRequestToXps($out_path, $storage, $file)

Converts PDF document (in request content) to XPS format and uploads resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.xps) | 
**$storage** | **string** | The document storage. | [optional]
**$file** | **\SplFileObject** | A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

<a name="putPdfInStorageToDoc"></a>
## **putPdfInStorageToDoc**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToDoc($name, $out_path, $add_return_to_line_end, $format, $image_resolution_x, $image_resolution_y, $max_distance_between_text_lines, $mode, $recognize_bullets, $relative_horizontal_proximity, $folder, $storage)

Converts PDF document (located on storage) to DOC format and uploads resulting file to storage

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.doc) | 
**$add_return_to_line_end** | **bool** | Add return to line end. | [optional]
**$format** | [**\Aspose\PDF\Model\DocFormat**](DocFormat.md) | Allows to specify .doc or .docx file format. | [optional]
**$image_resolution_x** | **int** | Image resolution X. | [optional]
**$image_resolution_y** | **int** | Image resolution Y. | [optional]
**$max_distance_between_text_lines** | **double** | Max distance between text lines. | [optional]
**$mode** | [**\Aspose\PDF\Model\DocRecognitionMode**](DocRecognitionMode.md) | Allows to control how a PDF document is converted into a word processing document. | [optional]
**$recognize_bullets** | **bool** | Recognize bullets. | [optional]
**$relative_horizontal_proximity** | **double** | Relative horizontal proximity. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPdfInStorageToEpub"></a>
## **putPdfInStorageToEpub**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToEpub($name, $out_path, $content_recognition_mode, $folder, $storage)

Converts PDF document (located on storage) to EPUB format and uploads resulting file to storage

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.epub) | 
**$content_recognition_mode** | [**\Aspose\PDF\Model\EpubRecognitionMode**](EpubRecognitionMode.md) | Property tunes conversion for this or that desirable method of recognition of content. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPdfInStorageToHtml"></a>
## **putPdfInStorageToHtml**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToHtml($name, $out_path, $additional_margin_width_in_points, $compress_svg_graphics_if_any, $convert_marked_content_to_layers, $default_font_name, $document_type, $fixed_layout, $image_resolution, $minimal_line_width, $prevent_glyphs_grouping, $split_css_into_pages, $split_into_pages, $use_z_order, $antialiasing_processing, $css_class_names_prefix, $explicit_list_of_saved_pages, $font_encoding_strategy, $font_saving_mode, $html_markup_generation_mode, $letters_positioning_method, $pages_flow_type_depends_on_viewers_screen_size, $parts_embedding_mode, $raster_images_saving_mode, $remove_empty_areas_on_top_and_bottom, $save_shadowed_texts_as_transparent_texts, $save_transparent_texts, $special_folder_for_all_images, $special_folder_for_svg_images, $try_save_text_underlining_and_strikeouting_in_css, $folder, $storage)

Converts PDF document (located on storage) to Html format and uploads resulting file to storage

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.html) | 
**$additional_margin_width_in_points** | **int** | Defines width of margin that will be forcibly left around that output HTML-areas. | [optional]
**$compress_svg_graphics_if_any** | **bool** | The flag that indicates whether found SVG graphics(if any) will be compressed(zipped) into SVGZ format during saving. | [optional]
**$convert_marked_content_to_layers** | **bool** | If attribute ConvertMarkedContentToLayers set to true then an all elements inside a PDF marked content (layer) will be put into an HTML div with "data-pdflayer" attribute specifying a layer name. This layer name will be extracted from optional properties of PDF marked content. If this attribute is false (by default) then no any layers will be created from PDF marked content. | [optional]
**$default_font_name** | **string** | Specifies the name of an installed font which is used to substitute any document font that is not embedded and not installed in the system. If null then default substitution font is used. | [optional]
**$document_type** | [**\Aspose\PDF\Model\HtmlDocumentType**](HtmlDocumentType.md) | Result document type. | [optional]
**$fixed_layout** | **bool** | The value indicating whether that HTML is created as fixed layout. | [optional]
**$image_resolution** | **int** | Resolution for image rendering. | [optional]
**$minimal_line_width** | **int** | This attribute sets minimal width of graphic path line. If thickness of line is less than 1px Adobe Acrobat rounds it to this value. So this attribute can be used to emulate this behavior for HTML browsers. | [optional]
**$prevent_glyphs_grouping** | **bool** | This attribute switch on the mode when text glyphs will not be grouped into words and strings This mode allows to keep maximum precision during positioning of glyphs on the page and it can be used for conversion documents with music notes or glyphs that should be placed separately each other. This parameter will be applied to document only when the value of FixedLayout attribute is true. | [optional]
**$split_css_into_pages** | **bool** | When multipage-mode selected(i.e 'SplitIntoPages' is 'true'), then this attribute defines whether should be created separate CSS-file for each result HTML page. | [optional]
**$split_into_pages** | **bool** | The flag that indicates whether each page of source document will be converted into it's own target HTML document, i.e whether result HTML will be splitted into several HTML-pages. | [optional]
**$use_z_order** | **bool** | If attribute UseZORder set to true, graphics and text are added to resultant HTML document accordingly Z-order in original PDF document. If this attribute is false all graphics is put as single layer which may cause some unnecessary effects for overlapped objects. | [optional]
**$antialiasing_processing** | [**\Aspose\PDF\Model\AntialiasingProcessingType**](AntialiasingProcessingType.md) | The parameter defines required antialiasing measures during conversion of compound background images from PDF to HTML. | [optional]
**$css_class_names_prefix** | **string** | When PDFtoHTML converter generates result CSSs, CSS class names (something like ".stl_01 {}" ... ".stl_NN {}) are generated and used in result CSS. This property allows forcibly set class name prefix. | [optional]
**$explicit_list_of_saved_pages** | **int[]** | With this property You can explicitely define what pages of document should be converted. Pages in this list must have 1-based numbers. I.e. valid numbers of pages must be taken from range (1...[NumberOfPagesInConvertedDocument]) Order of appearing of pages in this list does not affect their order in result HTML page(s) - in result pages allways will go in order in which they are present in source PDF. | [optional]
**$font_encoding_strategy** | [**\Aspose\PDF\Model\FontEncodingRules**](FontEncodingRules.md) | Defines encoding special rule to tune PDF decoding for current document. | [optional]
**$font_saving_mode** | [**\Aspose\PDF\Model\FontSavingModes**](FontSavingModes.md) | Defines font saving mode that will be used during saving of PDF to desirable format. | [optional]
**$html_markup_generation_mode** | [**\Aspose\PDF\Model\HtmlMarkupGenerationModes**](HtmlMarkupGenerationModes.md) | Sometimes specific reqirments to generation of HTML markup are present. This parameter defines HTML preparing modes that can be used during conversion of PDF to HTML to match such specific requirments. | [optional]
**$letters_positioning_method** | [**\Aspose\PDF\Model\LettersPositioningMethods**](LettersPositioningMethods.md) | The mode of positioning of letters in words in result HTML. | [optional]
**$pages_flow_type_depends_on_viewers_screen_size** | **bool** | If attribute 'SplitOnPages=false', than whole HTML representing all input PDF pages will be put into one big result HTML file. This flag defines whether result HTML will be generated in such way that flow of areas that represent PDF pages in result HTML will depend on screen resolution of viewer. | [optional]
**$parts_embedding_mode** | [**\Aspose\PDF\Model\PartsEmbeddingModes**](PartsEmbeddingModes.md) | It defines whether referenced files (HTML, Fonts,Images, CSSes) will be embedded into main HTML file or will be generated as apart binary entities. | [optional]
**$raster_images_saving_mode** | [**\Aspose\PDF\Model\RasterImagesSavingModes**](RasterImagesSavingModes.md) | Converted PDF can contain raster images This parameter defines how they should be handled during conversion of PDF to HTML. | [optional]
**$remove_empty_areas_on_top_and_bottom** | **bool** | Defines whether in created HTML will be removed top and bottom empty area without any content (if any). | [optional]
**$save_shadowed_texts_as_transparent_texts** | **bool** | Pdf can contain texts that are shadowed by another elements (f.e. by images) but can be selected to clipboard in Acrobat Reader (usually it happen when document contains images and OCRed texts extracted from it). This settings tells to converter whether we need save such texts as transparent selectable texts in result HTML to mimic behaviour of Acrobat Reader (othervise such texts are usually saved as hidden, not available for copying to clipboard). | [optional]
**$save_transparent_texts** | **bool** | Pdf can contain transparent texts that can be selected to clipboard (usually it happen when document contains images and OCRed texts extracted from it). This settings tells to converter whether we need save such texts as transparent selectable texts in result HTML. | [optional]
**$special_folder_for_all_images** | **string** | The path to directory to which must be saved any images if they are encountered during saving of document as HTML. If parameter is empty or null then image files(if any) wil be saved together with other files linked to HTML It does not affect anything if CustomImageSavingStrategy property was successfully used to process relevant image file. | [optional]
**$special_folder_for_svg_images** | **string** | The path to directory to which must be saved only SVG-images if they are encountered during saving of document as HTML. If parameter is empty or null then SVG files(if any) wil be saved together with other image-files (near to output file) or in special folder for images (if it specified in SpecialImagesFolderIfAny option). It does not affect anything if CustomImageSavingStrategy property was successfully used to process relevant image file. | [optional]
**$try_save_text_underlining_and_strikeouting_in_css** | **bool** | PDF itself does not contain underlining markers for texts. It emulated with line situated under text. This option allows converter try guess that this or that line is a text's underlining and put this info into CSS instead of drawing of underlining graphically. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPdfInStorageToLaTeX"></a>
## **putPdfInStorageToLaTeX**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToLaTeX($name, $out_path, $pages_count, $folder, $storage)

Converts PDF document (located on storage) to LaTeX format and uploads resulting file to storage

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.tex) | 
**$pages_count** | **int** | Pages count. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPdfInStorageToMobiXml"></a>
## **putPdfInStorageToMobiXml**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToMobiXml($name, $out_path, $folder, $storage)

Converts PDF document (located on storage) to MOBIXML format and uploads resulting file to storage

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.mobixml) | 
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPdfInStorageToPdfA"></a>
## **putPdfInStorageToPdfA**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToPdfA($name, $out_path, $type, $folder, $storage)

Converts PDF document (located on storage) to PdfA format and uploads resulting file to storage

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.pdf) | 
**$type** | [**\Aspose\PDF\Model\PdfAType**](PdfAType.md) | Type of PdfA format. | 
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPdfInStorageToPptx"></a>
## **putPdfInStorageToPptx**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToPptx($name, $out_path, $separate_images, $slides_as_images, $folder, $storage)

Converts PDF document (located on storage) to PPTX format and uploads resulting file to storage

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.pptx) | 
**$separate_images** | **bool** | Separate images. | [optional]
**$slides_as_images** | **bool** | Slides as images. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPdfInStorageToSvg"></a>
## **putPdfInStorageToSvg**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToSvg($name, $out_path, $folder, $storage)

Converts PDF document (located on storage) to SVG format and uploads resulting file to storage

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.svg) | 
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPdfInStorageToTiff"></a>
## **putPdfInStorageToTiff**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToTiff($name, $out_path, $brightness, $compression, $color_depth, $left_margin, $right_margin, $top_margin, $bottom_margin, $orientation, $skip_blank_pages, $width, $height, $x_resolution, $y_resolution, $page_index, $page_count, $folder, $storage)

Converts PDF document (located on storage) to TIFF format and uploads resulting file to storage

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.tiff) | 
**$brightness** | **double** | Image brightness. | [optional]
**$compression** | [**\Aspose\PDF\Model\CompressionType**](CompressionType.md) | Tiff compression. Possible values are: LZW, CCITT4, CCITT3, RLE, None. | [optional]
**$color_depth** | [**\Aspose\PDF\Model\ColorDepth**](ColorDepth.md) | Image color depth. Possible valuse are: Default, Format8bpp, Format4bpp, Format1bpp. | [optional]
**$left_margin** | **int** | Left image margin. | [optional]
**$right_margin** | **int** | Right image margin. | [optional]
**$top_margin** | **int** | Top image margin. | [optional]
**$bottom_margin** | **int** | Bottom image margin. | [optional]
**$orientation** | [**\Aspose\PDF\Model\ShapeType**](ShapeType.md) | Image orientation. Possible values are: None, Landscape, Portait. | [optional]
**$skip_blank_pages** | **bool** | Skip blank pages flag. | [optional]
**$width** | **int** | Image width. | [optional]
**$height** | **int** | Image height. | [optional]
**$x_resolution** | **int** | Horizontal resolution. | [optional]
**$y_resolution** | **int** | Vertical resolution. | [optional]
**$page_index** | **int** | Start page to export. | [optional]
**$page_count** | **int** | Number of pages to export. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPdfInStorageToXls"></a>
## **putPdfInStorageToXls**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToXls($name, $out_path, $insert_blank_column_at_first, $minimize_the_number_of_worksheets, $scale_factor, $uniform_worksheets, $folder, $storage)

Converts PDF document (located on storage) to XLS format and uploads resulting file to storage

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.xls) | 
**$insert_blank_column_at_first** | **bool** | Insert blank column at first | [optional]
**$minimize_the_number_of_worksheets** | **bool** | Minimize the number of worksheets | [optional]
**$scale_factor** | **double** | Scale factor | [optional]
**$uniform_worksheets** | **bool** | Uniform worksheets | [optional]
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPdfInStorageToXml"></a>
## **putPdfInStorageToXml**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToXml($name, $out_path, $folder, $storage)

Converts PDF document (located on storage) to XML format and uploads resulting file to storage

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.xml) | 
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPdfInStorageToXps"></a>
## **putPdfInStorageToXps**
> \Aspose\PDF\Model\AsposeResponse putPdfInStorageToXps($name, $out_path, $folder, $storage)

Converts PDF document (located on storage) to XPS format and uploads resulting file to storage

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.xps) | 
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPolygonAnnotation"></a>
## **putPolygonAnnotation**
> \Aspose\PDF\Model\PolygonAnnotationResponse putPolygonAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document polygon annotation

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$annotation** | [**\Aspose\PDF\Model\PolygonAnnotation**](PolygonAnnotation.md) | Annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PolygonAnnotationResponse**](PolygonAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPolyLineAnnotation"></a>
## **putPolyLineAnnotation**
> \Aspose\PDF\Model\PolyLineAnnotationResponse putPolyLineAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document polyline annotation

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$annotation** | [**\Aspose\PDF\Model\PolyLineAnnotation**](PolyLineAnnotation.md) | Annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PolyLineAnnotationResponse**](PolyLineAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPopupAnnotation"></a>
## **putPopupAnnotation**
> \Aspose\PDF\Model\PopupAnnotationResponse putPopupAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document popup annotation

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$annotation** | [**\Aspose\PDF\Model\PopupAnnotation**](PopupAnnotation.md) | Annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\PopupAnnotationResponse**](PopupAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPrivileges"></a>
## **putPrivileges**
> \Aspose\PDF\Model\AsposeResponse putPrivileges($name, $privileges, $storage, $folder)

Update privilege document.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$privileges** | [**\Aspose\PDF\Model\DocumentPrivilege**](DocumentPrivilege.md) | Document privileges.  | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putPsInStorageToPdf"></a>
## **putPsInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putPsInStorageToPdf($name, $src_path, $dst_folder, $storage)

Convert PS file (located on storage) to PDF format and upload resulting file to storage. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.ps) | 
**$dst_folder** | **string** | The destination document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putReplaceImage"></a>
## **putReplaceImage**
> \Aspose\PDF\Model\ImageResponse putReplaceImage($name, $image_id, $image_file_path, $storage, $folder, $image)

Replace document image.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$image_id** | **string** | The image ID. | 
**$image_file_path** | **string** | Path to image file if specified. Request content is used otherwise. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$image** | **\SplFileObject** | Image file. | [optional]

### Return type

[**\Aspose\PDF\Model\ImageResponse**](ImageResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

<a name="putSearchableDocument"></a>
## **putSearchableDocument**
> \Aspose\PDF\Model\AsposeResponse putSearchableDocument($name, $storage, $folder, $lang)

Create searchable PDF document. Generate OCR layer for images in input PDF document.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]
**$lang** | **string** | language for OCR engine. Possible values: eng, ara, bel, ben, bul, ces, dan, deu, ell, fin, fra, heb, hin, ind, isl, ita, jpn, kor, nld, nor, pol, por, ron, rus, spa, swe, tha, tur, ukr, vie, chi_sim, chi_tra or thier combination e.g. eng,rus  | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putSetProperty"></a>
## **putSetProperty**
> \Aspose\PDF\Model\DocumentPropertyResponse putSetProperty($name, $property_name, $value, $storage, $folder)

Add/update document property.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** |  | 
**$property_name** | **string** |  | 
**$value** | **string** |  | 
**$storage** | **string** |  | [optional]
**$folder** | **string** |  | [optional]

### Return type

[**\Aspose\PDF\Model\DocumentPropertyResponse**](DocumentPropertyResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putSquareAnnotation"></a>
## **putSquareAnnotation**
> \Aspose\PDF\Model\SquareAnnotationResponse putSquareAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document square annotation

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$annotation** | [**\Aspose\PDF\Model\SquareAnnotation**](SquareAnnotation.md) | Annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\SquareAnnotationResponse**](SquareAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putSquigglyAnnotation"></a>
## **putSquigglyAnnotation**
> \Aspose\PDF\Model\SquigglyAnnotationResponse putSquigglyAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document squiggly annotation

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$annotation** | [**\Aspose\PDF\Model\SquigglyAnnotation**](SquigglyAnnotation.md) | Annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\SquigglyAnnotationResponse**](SquigglyAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putStrikeOutAnnotation"></a>
## **putStrikeOutAnnotation**
> \Aspose\PDF\Model\StrikeOutAnnotationResponse putStrikeOutAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document StrikeOut annotation

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$annotation** | [**\Aspose\PDF\Model\StrikeOutAnnotation**](StrikeOutAnnotation.md) | Annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\StrikeOutAnnotationResponse**](StrikeOutAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putSvgInStorageToPdf"></a>
## **putSvgInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putSvgInStorageToPdf($name, $src_path, $adjust_page_size, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $dst_folder, $storage)

Convert SVG file (located on storage) to PDF format and upload resulting file to storage. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.svg) | 
**$adjust_page_size** | **bool** | Adjust page size | [optional]
**$height** | **double** | Page height | [optional]
**$width** | **double** | Page width | [optional]
**$is_landscape** | **bool** | Is page landscaped | [optional]
**$margin_left** | **double** | Page margin left | [optional]
**$margin_bottom** | **double** | Page margin bottom | [optional]
**$margin_right** | **double** | Page margin right | [optional]
**$margin_top** | **double** | Page margin top | [optional]
**$dst_folder** | **string** | The destination document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putTextAnnotation"></a>
## **putTextAnnotation**
> \Aspose\PDF\Model\TextAnnotationResponse putTextAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document text annotation

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$annotation** | [**\Aspose\PDF\Model\TextAnnotation**](TextAnnotation.md) | Annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\TextAnnotationResponse**](TextAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putUnderlineAnnotation"></a>
## **putUnderlineAnnotation**
> \Aspose\PDF\Model\UnderlineAnnotationResponse putUnderlineAnnotation($name, $annotation_id, $annotation, $storage, $folder)

Replace document underline annotation

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$annotation_id** | **string** | The annotation ID. | 
**$annotation** | [**\Aspose\PDF\Model\UnderlineAnnotation**](UnderlineAnnotation.md) | Annotation. | 
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\UnderlineAnnotationResponse**](UnderlineAnnotationResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putUpdateField"></a>
## **putUpdateField**
> \Aspose\PDF\Model\FieldResponse putUpdateField($name, $field_name, $field, $storage, $folder)

Update field.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$field_name** | **string** | The name of a field to be updated. | 
**$field** | [**\Aspose\PDF\Model\Field**](Field.md) | with the field data. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FieldResponse**](FieldResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putUpdateFields"></a>
## **putUpdateFields**
> \Aspose\PDF\Model\FieldsResponse putUpdateFields($name, $fields, $storage, $folder)

Update fields.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$fields** | [**\Aspose\PDF\Model\Fields**](Fields.md) | with the fields data. | [optional]
**$storage** | **string** | The document storage. | [optional]
**$folder** | **string** | The document folder. | [optional]

### Return type

[**\Aspose\PDF\Model\FieldsResponse**](FieldsResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putWebInStorageToPdf"></a>
## **putWebInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putWebInStorageToPdf($name, $url, $height, $width, $is_landscape, $margin_left, $margin_bottom, $margin_right, $margin_top, $dst_folder, $storage)

Convert web page to PDF format and upload resulting file to storage. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$url** | **string** | Source url | 
**$height** | **double** | Page height | [optional]
**$width** | **double** | Page width | [optional]
**$is_landscape** | **bool** | Is page landscaped | [optional]
**$margin_left** | **double** | Page margin left | [optional]
**$margin_bottom** | **double** | Page margin bottom | [optional]
**$margin_right** | **double** | Page margin right | [optional]
**$margin_top** | **double** | Page margin top | [optional]
**$dst_folder** | **string** | The destination document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putXfaPdfInRequestToAcroForm"></a>
## **putXfaPdfInRequestToAcroForm**
> \Aspose\PDF\Model\AsposeResponse putXfaPdfInRequestToAcroForm($out_path, $storage, $file)

Converts PDF document which contatins XFA form (in request content) to PDF with AcroForm and uploads resulting file to storage.

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.pdf) | 
**$storage** | **string** | The document storage. | [optional]
**$file** | **\SplFileObject** | A file to be converted. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

<a name="putXfaPdfInStorageToAcroForm"></a>
## **putXfaPdfInStorageToAcroForm**
> \Aspose\PDF\Model\AsposeResponse putXfaPdfInStorageToAcroForm($name, $out_path, $folder, $storage)

Converts PDF document which contatins XFA form (located on storage) to PDF with AcroForm and uploads resulting file to storage

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$out_path** | **string** | Full resulting filename (ex. /folder1/folder2/result.pdf) | 
**$folder** | **string** | The document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putXmlInStorageToPdf"></a>
## **putXmlInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putXmlInStorageToPdf($name, $src_path, $xsl_file_path, $dst_folder, $storage)

Convert XML file (located on storage) to PDF format and upload resulting file to storage. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.xml) | 
**$xsl_file_path** | **string** | Full XSL source filename (ex. /folder1/folder2/template.xsl) | [optional]
**$dst_folder** | **string** | The destination document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putXpsInStorageToPdf"></a>
## **putXpsInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putXpsInStorageToPdf($name, $src_path, $dst_folder, $storage)

Convert XPS file (located on storage) to PDF format and upload resulting file to storage. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.xps) | 
**$dst_folder** | **string** | The destination document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

<a name="putXslFoInStorageToPdf"></a>
## **putXslFoInStorageToPdf**
> \Aspose\PDF\Model\AsposeResponse putXslFoInStorageToPdf($name, $src_path, $dst_folder, $storage)

Convert XslFo file (located on storage) to PDF format and upload resulting file to storage. 

### Parameters
Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**$name** | **string** | The document name. | 
**$src_path** | **string** | Full source filename (ex. /folder1/folder2/template.xpsfo) | 
**$dst_folder** | **string** | The destination document folder. | [optional]
**$storage** | **string** | The document storage. | [optional]

### Return type

[**\Aspose\PDF\Model\AsposeResponse**](AsposeResponse.md)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json


