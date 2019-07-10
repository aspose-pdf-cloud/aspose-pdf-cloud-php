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

$startPageNumber = 2;
$endPageNumber = 3;


$stamp = new Aspose\PDF\Model\PageNumberStamp();
$stamp->setBackground(true);
$stamp->setLeftMargin(1);
$stamp->setRightMargin(2);
$stamp->setTopMargin(3);
$stamp->setBottomMargin(4);
$stamp->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
$stamp->setVerticalAlignment(Aspose\PDF\Model\VerticalAlignment::BOTTOM);
$stamp->setOpacity(1);
$stamp->setRotate(Aspose\PDF\Model\Rotation::NONE);
$stamp->setRotateAngle(0);
$stamp->setXIndent(0);
$stamp->setYIndent(0);
$stamp->setZoom(1);
$stamp->setStartingNumber(3);
$stamp->setValue('Page #');


$pageNumber = 1;

$response = $pdfApi->postDocumentPageNumberStamps($name, $stamp, $startPageNumber, $endPageNumber, null, $tempFolder);
echo $response

?>