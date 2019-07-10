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
$name = '4pages.pdf';
$file = realpath(__DIR__ . '/../') . '/data/' . $name;
$pdfApi->PutCreate($Path=$name, $file); 

$textState =  new Aspose\PDF\Model\TextState();
$textState->setFontSize(14);
$textState->setForegroundColor(new Aspose\PDF\Model\Color(['a' => 0xFF, 'r' => 0, 'g' => 0xFF, 'b' => 0]));
$textState->setBackgroundColor(new Aspose\PDF\Model\Color(['a' => 0xFF, 'r' => 0xFF, 'g' => 0, 'b' => 0]));
$footer = new Aspose\PDF\Model\TextFooter();
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
$footer->setTextAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
$footer->setValue('Footer');
$footer->setTextState($textState);
$startPage = 2;
$endPage = 3;

$response = $pdfApi->postDocumentTextFooter($name, $footer, $startPage, $endPage, null, $tempFolder);
echo $response

?>