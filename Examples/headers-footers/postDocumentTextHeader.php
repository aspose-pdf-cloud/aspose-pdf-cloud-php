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
$header = new Aspose\PDF\Model\TextHeader();
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
$header->setTextAlignment(Aspose\PDF\Model\HorizontalAlignment::CENTER);
$header->setValue('Header');
$header->setTextState($textState);
$startPage = 2;
$endPage = 3;
$response = $pdfApi->postDocumentTextHeader($name, $header, $startPage, $endPage, null, $tempFolder);

echo $response

?>