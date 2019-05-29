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

$pageNumber = 2;

$lineAnnotation = new Aspose\PDF\Model\LineAnnotation();
$lineAnnotation->setName("Test Text");
$lineAnnotation->setRect(new Aspose\PDF\Model\Rectangle(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
$lineAnnotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
$lineAnnotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
$lineAnnotation->setRichText("Rich Text");
$lineAnnotation->setSubject("Subj");
$lineAnnotation->setZIndex(1);
$lineAnnotation->setTitle("Title");
$lineAnnotation->setStarting(new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10]));
$lineAnnotation->setEnding(new Aspose\PDF\Model\Point(['x' => 100, 'y' => 100]));

$response = $pdfApi->postPageLineAnnotations($name, $pageNumber, [$lineAnnotation], null, $tempFolder);

echo $response

?>