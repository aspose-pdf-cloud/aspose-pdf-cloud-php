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


$footer = new Aspose\PDF\Model\ImageFooter();
$footer->setBackground(true);
$footer->setLeftMargin(1);
$footer->setRightMargin(2);
$footer->setBottomMargin(20);
$footer->setHorizontalAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
$footer->setOpacity(1);
$footer->setRotate(Aspose\PDF\Model\Rotation::NONE);
$footer->setRotateAngle(0);
$footer->setXIndent(0);
$footer->setYIndent(0);
$footer->setZoom(1);
$footer->setFileName($tempFolder . '/' . $image);

$startPage = 2;
$endPage = 3;


$startPage = 2;
$endPage = 3;
$response = $pdfApi->postDocumentImageFooter($name, $footer, $startPage, $endPage, null, $tempFolder);


print $response
?>