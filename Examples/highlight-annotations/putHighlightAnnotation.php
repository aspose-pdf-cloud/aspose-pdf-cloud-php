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
$name = 'PdfWithAnnotations.pdf';
$file = realpath(__DIR__ . '/../') . '/data/' . $name;
$pdfApi->PutCreate($Path=$name, $file); 


$annotation = new Aspose\PDF\Model\HighlightAnnotation();
$annotation->setName("Test Text Updated");
$annotation->setRect(new Aspose\PDF\Model\Rectangle(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
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
$responseAnnotations = $pdfApi->getDocumentHighlightAnnotations($name, null, $tempFolder);


$annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();
$response = $pdfApi->putHighlightAnnotation($name, $annotationId, $annotation, null, $tempFolder);
echo $response

?>