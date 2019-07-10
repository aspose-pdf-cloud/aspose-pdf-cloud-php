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

$name = 'PdfWithScreenAnnotations.pdf';
$file = realpath(__DIR__ . '/../') . '/data/' . $name;
$pdfApi->PutCreate($Path=$name, $file); 

$attachmentFile = 'ScreenMovie.swf';
$file = realpath(__DIR__ . '/../') . '/data/' . $attachmentFile;
$pdfApi->PutCreate($Path=$attachmentFile, $file); 


$annotation = new Aspose\PDF\Model\ScreenAnnotation();
$annotation->setName("Test Text");
$annotation->setRect(new Aspose\PDF\Model\Rectangle(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
$annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::HIDDEN, Aspose\PDF\Model\AnnotationFlags::NO_VIEW]);
$annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
$annotation->setZIndex(1);
$annotation->setTitle('Title');
$annotation->setModified('01/01/2018 12:00:00.000 AM');
$annotation->setFilePath($tempFolder . '/' . $attachmentFile);

$responseAnnotations = $pdfApi->getDocumentScreenAnnotations($name, null, $tempFolder);
$annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();


$response = $pdfApi->putScreenAnnotation($name, $annotationId, $annotation, null, $tempFolder);

echo $response

?>