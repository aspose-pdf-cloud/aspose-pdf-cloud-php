<?php
require __DIR__.'/../vendor/autoload.php';

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
$endPage = 2;
$annotation_types = [Aspose\PDF\Model\AnnotationType::STAMP];


$response = $pdfApi->putAnnotationsFlatten($name, null, $endPage, $annotation_types, null, $tempFolder);
echo $response

?>