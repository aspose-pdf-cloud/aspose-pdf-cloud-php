﻿# HtmlMarkupGenerationModes
Sometimes specific reqirments to created HTML are present.
This enum defines HTML preparing modes that can be used
during conversion of PDF to HTML to match such specific requirments.
            

## Enum
Name | Type | Value | Description
------------ | ------------- | ------------- | -------------
**WRITE_ALL_HTML** | **string** | 'WriteAllHtml' | Default mode any specific requirments are absent. Will be generated output that will contain all parts of HTML without any special additional processing.
**WRITE_ONLY_BODY_CONTENT** | **string** | 'WriteOnlyBodyContent' | will be stripped away all HTML content that is outside HTML's body, i.e. will be left only content that is inside tags

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md) [[View Source]](../src/Aspose/PDF/Model/HtmlMarkupGenerationModes.php)

