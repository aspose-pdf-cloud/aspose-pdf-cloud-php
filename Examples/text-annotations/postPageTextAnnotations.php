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


$pageNumber = 2;

$textAnnotation = new Aspose\PDF\Model\TextAnnotation();
$textAnnotation->setName("Test Free Text");
$textAnnotation->setRect(new Aspose\PDF\Model\Rectangle(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
$textAnnotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
$textAnnotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
$textAnnotation->setRichText("Rich Text");
$textAnnotation->setSubject("Text Box Subj");
$textAnnotation->setZIndex(1);
$textAnnotation->setState(Aspose\PDF\Model\AnnotationState::UNDEFINED);

$response = $pdfApi->postPageTextAnnotations($name, $pageNumber, [$textAnnotation], null, $tempFolder);

echo $response

?>