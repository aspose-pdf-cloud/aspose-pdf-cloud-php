# Aspose.PDF Cloud
[Aspose.PDF Cloud](https://products.aspose.cloud/pdf/cloud) is a true REST API that enables you to perform a wide range of document processing operations including creation, manipulation, conversion and rendering of Pdf documents in the cloud.

Our Cloud SDKs are wrappers around REST API in various programming languages, allowing you to process documents in language of your choice quickly and easily, gaining all benefits of strong types and IDE highlights. This repository contains new generation SDKs for Aspose.PDF Cloud and examples.

These SDKs are now fully supported. If you have any questions, see any bugs or have enhancement request, feel free to reach out to us at [Free Support Forums](https://forum.aspose.cloud/c/pdf).

## Usage
APIs of this SDK can be called as follows:

```php
<?php
use Aspose\PDF\Api\PdfApi;
use Aspose\PDF\Model\HttpStatusCode;
use Aspose\PDF\Configuration;

class PdfApiUsage
{

    protected $pdfApi;
    protected $tempFolder;
    protected $config;

    protected function setUp()
    {
        // Get App key and App SID from https://cloud.aspose.com
        $appSid = '';
	    $appKey = '';
        $host = 'http://api-dev.aspose.cloud/v1.1';

        $this->tempFolder = 'TempPdfCloud';
        
        $this->config = new Configuration();
        $this->config->setAppKey($appKey);
        $this->config->setAppSid($appSid);
        $this->config->setHost($host);

        $this->pdfApi = new PdfApi(null, $this->config);
    }

    //Annotations Tests

    public function testGetPageAnnotations()
    {
        $name = 'PdfWithAnnotations.pdf';
        $pageNumber = 2;

        $response = $this->pdfApi->getPageAnnotations($name, $pageNumber, null, $this->tempFolder);
    }
}
```
## Unit Tests
Aspose PDF SDK includes a suite of unit tests within the "tests" subdirectory. These Unit Tests also serves as examples of how to use the Aspose PDF SDK.

## Licensing
All Aspose.PDF Cloud SDKs are licensed under [MIT License](LICENSE).

## Resources
+ [**Website**](https://www.aspose.cloud)
+ [**Product Home**](https://products.aspose.cloud/pdf/cloud)
+ [**Documentation**](https://docs.aspose.cloud/display/pdfcloud/Home)
+ [**Free Support Forum**](https://forum.aspose.cloud/c/pdf)
+ [**Paid Support Helpdesk**](https://helpdesk.aspose.cloud/)
+ [**Blog**](https://blog.aspose.cloud/category/aspose-products/aspose-pdf-product-family/)
