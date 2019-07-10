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
$name = 'PageNumberStamp.pdf';
$file = realpath(__DIR__ . '/../') . '/data/' . $name;
$pdfApi->PutCreate($Path=$name, $file); 

$stampsResponse = $pdfApi->getDocumentStamps($name, null, $tempFolder);
$stampId = $stampsResponse->getStamps()->getList()[0]->getId();
$response = $pdfApi->deleteStamp($name, $stampId, null, $tempFolder);


$pageNumber = 1;

$response = $pdfApi->postPageImageStamps($name, $pageNumber, [$stamp], null, $tempFolder);
echo $response

?>