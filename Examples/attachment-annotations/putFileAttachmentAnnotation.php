<?php
require __DIR__.'\..\vendor\autoload.php';

use Aspose\PDF\Api\PdfApi;
use Aspose\PDF\Configuration;


$appSid = '78946fb4-3bd4-4d3e-b309-f9e2ff9ac6f9';
$appKey = 'b125f13bf6b76ed81ee990142d841195';


$tempFolder = null;

$config = new Configuration();
$config->setAppKey($appKey);
$config->setAppSid($appSid);

$pdfApi = new PdfApi(null, $config);

$name = 'PdfWithAnnotations.pdf';
$file = realpath(__DIR__ . '/../') . '/data/' . $name;
$pdfApi->PutCreate($Path=$name, $file); 

$attachmentFile = '4pages.pdf';
$file = realpath(__DIR__ . '/../') . '/data/' . $attachmentFile;
$pdfApi->PutCreate($Path=$name, $file); 

$pageNumber = 1;
$annotation = new Aspose\PDF\Model\FileAttachmentAnnotation();
$annotation->setName("Test Text");
$annotation->setRect(new Aspose\PDF\Model\Rectangle(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
$annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::HIDDEN, Aspose\PDF\Model\AnnotationFlags::NO_VIEW]);
$annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
$annotation->setRichText('Rich Text');
$annotation->setSubject('Subj');
$annotation->setZIndex(1);
$annotation->setTitle('Title');
$annotation->setModified('01/01/2018 12:00:00.000 AM');
$annotation->setFilePath($tempFolder . '/' . $attachmentFile);
$annotation->setFileName($attachmentFile);

$responseAnnotations = $pdfApi->getDocumentFileAttachmentAnnotations($name, null, $tempFolder);
$annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

$response = $pdfApi->putFileAttachmentAnnotation($name, $annotationId, $annotation, null, $tempFolder);

echo $response

?>