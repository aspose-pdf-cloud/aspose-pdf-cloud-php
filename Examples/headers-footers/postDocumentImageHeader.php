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
$name = '4pages.pdf';
$file = realpath(__DIR__ . '/../') . '/data/' . $name;
$pdfApi->PutCreate($Path=$name, $file); 

$image = 'Koala.jpg';
$file = realpath(__DIR__ . '/../') . '/data/' . $image;
$pdfApi->PutCreate($Path=$image, $file); 


$header = new Aspose\PDF\Model\ImageHeader();
$header->setBackground(true);
$header->setLeftMargin(1);
$header->setRightMargin(2);
$header->setTopMargin(20);
$header->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
$header->setOpacity(1);
$header->setRotate(Aspose\PDF\Model\Rotation::NONE);
$header->setRotateAngle(0);
$header->setXIndent(0);
$header->setYIndent(0);
$header->setZoom(1);
$header->setFileName($tempFolder . '/' . $image);

$startPage = 2;
$endPage = 3;
$response = $pdfApi->postDocumentImageHeader($name, $header, $startPage, $endPage, null, $tempFolder);


print $response
?>