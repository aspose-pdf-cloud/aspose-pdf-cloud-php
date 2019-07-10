<?php
require __DIR__.'\..\vendor\autoload.php';

use Aspose\PDF\Api\PdfApi;
use Aspose\PDF\Configuration;


$appSid = 'XXXXXXX';
$appKey = 'XXXXXXX';


$tempFolder = null;

$config = new Configuration();
$config->setAppKey($appKey);
$config->setAppSid($appSid);

$pdfApi = new PdfApi(null, $config);
$name = 'PdfWithAnnotations1.pdf';
$file = realpath(__DIR__ . '/../') . '/data/' . $name;
$pdfApi->PutCreate($Path=$name, $file); 


$attachmentFile = '4pages.pdf';
$file = realpath(__DIR__ . '/../') . '/data/' . $attachmentFile;
$pdfApi->PutCreate($Path=$attachmentFile, $file); 

$pageNumber = 1;
$annotation = new Aspose\PDF\Model\MovieAnnotation();
$annotation->setName("Test Text");
$annotation->setRect(new Aspose\PDF\Model\Rectangle(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
$annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::HIDDEN, Aspose\PDF\Model\AnnotationFlags::NO_VIEW]);
$annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
$annotation->setZIndex(1);
$annotation->setFilePath($attachmentFile);
$annotation->setModified('01/01/2018 12:00:00.000 AM');

$responseAnnotations = $pdfApi->getDocumentMovieAnnotations($name, null, $tempFolder);
$annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();
$response = $pdfApi->putMovieAnnotation($name, $annotationId, $annotation, null, $tempFolder);
echo $response

?>