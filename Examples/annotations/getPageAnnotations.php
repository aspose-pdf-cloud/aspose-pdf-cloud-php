<?php
require __DIR__.'/../vendor/autoload.php';

use Aspose\PDF\Api\PdfApi;
use Aspose\PDF\Configuration;


$appSid = 'XXXXXXXXX';
$appKey = 'XXXXXXXXX';


$tempFolder = '';

$config = new Configuration();
$config->setAppKey($appKey);
$config->setAppSid($appSid);

$pdfApi = new PdfApi(null, $config);
$name = 'PdfWithAnnotations.pdf';
$pageNumber = 2;

$response = $pdfApi->getPageAnnotations($name, $pageNumber, null, null);

echo $response


?>