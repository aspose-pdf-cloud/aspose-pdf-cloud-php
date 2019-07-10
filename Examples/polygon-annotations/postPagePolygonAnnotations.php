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
$annotation = new Aspose\PDF\Model\PolygonAnnotation();
$annotation->setName("Test Text");
$annotation->setRect(new Aspose\PDF\Model\Rectangle(['llx' => 100, 'lly' => 100, 'urx' => 200, 'ury' => 200]));
$annotation->setFlags([Aspose\PDF\Model\AnnotationFlags::_DEFAULT]);
$annotation->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
$annotation->setRichText("Rich Text");
$annotation->setSubject("Subj");
$annotation->setZIndex(1);
$annotation->setTitle("Title");
$annotation->setVertices(
    [
        new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10]),
        new Aspose\PDF\Model\Point(['x' => 20, 'y' => 10]),
        new Aspose\PDF\Model\Point(['x' => 10, 'y' => 20]),
        new Aspose\PDF\Model\Point(['x' => 10, 'y' => 10])
    ]);
$response = $pdfApi->postPagePolygonAnnotations($name, $pageNumber, [$annotation], null, $tempFolder);

echo $response

?>