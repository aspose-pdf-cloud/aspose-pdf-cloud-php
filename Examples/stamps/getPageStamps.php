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
$name = 'PageNumberStamp.pdf';
$file = realpath(__DIR__ . '/../') . '/data/' . $name;
$pdfApi->PutCreate($Path=$name, $file); 

$pageNumber = 1;

$response = $pdfApi->getPageStamps($name, $pageNumber, null, $tempFolder);
echo $response

?>