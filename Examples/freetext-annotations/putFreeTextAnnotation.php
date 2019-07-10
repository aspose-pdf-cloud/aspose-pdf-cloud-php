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

$textStyle = new Aspose\PDF\Model\TextStyle();
$textStyle->setFontSize(12); 
$textStyle->setFont("Arial");
$textStyle->setForegroundColor(new Aspose\PDF\Model\Color(['a' => 0xFF, 'r' => 0, 'g' => 0xFF, 'b' => 0]));
$textStyle->setBackgroundColor(new Aspose\PDF\Model\Color(['a' => 0xFF, 'r' => 0xFF, 'g' => 0, 'b' => 0]));
$freeTextAnnotation = new Aspose\PDF\Model\FreeTextAnnotation();
$freeTextAnnotation->setName("Test Free Text");
$freeTextAnnotation->setTextStyle($textStyle);
$freeTextAnnotation->setRect(new Aspose\PDF\Model\Rectangle(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
$freeTextAnnotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
$freeTextAnnotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
$freeTextAnnotation->setIntent(Aspose\PDF\Model\FreeTextIntent::FREE_TEXT_TYPE_WRITER);
$freeTextAnnotation->setRichText("Rich Text");
$freeTextAnnotation->setSubject("Text Box Subj");
$freeTextAnnotation->setZIndex(1);
$freeTextAnnotation->setJustification(Aspose\PDF\Model\Justification::CENTER);
$freeTextAnnotation->setTitle("Title");
$responseAnnotations = $pdfApi->getDocumentFreeTextAnnotations($name, null, $tempFolder);

$annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();
$response = $pdfApi->putFreeTextAnnotation($name, $annotationId, $freeTextAnnotation, null, $tempFolder);
echo $response

?>