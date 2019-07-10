<?php
require __DIR__.'\..\vendor\autoload.php';

use Aspose\PDF\Api\PdfApi;
use Aspose\PDF\Configuration;


$appSid = 'XXXXXXXXX';
$appKey = 'XXXXXXXXX';


$tempFolder = null;

$config = new Configuration();
$config->setAppKey($appKey);
$config->setAppSid($appSid);

$pdfApi = new PdfApi(null, $config);
$name = 'PdfWithAnnotations.pdf';


$responseAnnotations = $pdfApi->getDocumentAnnotations($name, null, $tempFolder);
print $responseAnnotations;
$annotationId = $responseAnnotations->getAnnotations()->getList()[0]->getId();

$response = $pdfApi->deleteAnnotation($name, $annotationId, null, $tempFolder);

echo $response

?>