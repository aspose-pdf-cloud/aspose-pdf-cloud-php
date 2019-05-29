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


$responseAnnotations = $pdfApi->getDocumentPolygonAnnotations($name, null, $tempFolder);
$annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();


$response = $pdfApi->putPolygonAnnotation($name, $annotationId, $annotation, null, $tempFolder);

echo $response

?>