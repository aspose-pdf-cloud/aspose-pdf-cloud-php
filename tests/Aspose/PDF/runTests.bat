@echo off

php ..\..\..\vendor\phpunit\phpunit\phpunit PdfApiTest.php

rem https://phpunit.readthedocs.io/en/10.0/textui.html?highlight=deprecation#details-about-issues
rem php ..\..\..\vendor\phpunit\phpunit\phpunit --display-deprecations PdfApiTest.4.php

pause
