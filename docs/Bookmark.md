# Bookmark
Provides link to bookmark.

*Inherited from [\Aspose\PDF\Model\LinkElement](LinkElement.md)*
## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Get the Title; | [optional]
**italic** | **bool** | Is bookmark italic. | [optional]
**bold** | **bool** | Is bookmark bold. | [optional]
**color** | [**\Aspose\PDF\Model\Color**](Color.md) | Get the color | [optional]
**action** | **string** | Gets or sets the action bound with the bookmark. If PageNumber is presented the action can not be specified. The action type includes: "GoTo", "GoToR", "Launch", "Named". | [optional]
**level** | **int** | Gets or sets bookmark's hierarchy level. | [optional]
**destination** | **string** | Gets or sets bookmark's destination page. Required if action is set as string.Empty. | [optional]
**page_display** | **string** | Gets or sets the type of display bookmark's destination page. | [optional]
**page_display__bottom** | **int** | Gets or sets the bottom coordinate of page display. | [optional]
**page_display__left** | **int** | Gets or sets the left coordinate of page display. | [optional]
**page_display__right** | **int** | Gets or sets the right coordinate of page display. | [optional]
**page_display__top** | **int** | Gets or sets the top coordinate of page display. | [optional]
**page_display__zoom** | **int** | Gets or sets the zoom factor of page display. | [optional]
**page_number** | **int** | Gets or sets the number of bookmark's destination page.  | [optional]
**remote_file** | **string** | Gets or sets the file (path) which is required for "GoToR" action of bookmark. | [optional]
**bookmarks** | [**\Aspose\PDF\Model\Bookmarks**](Bookmarks.md) | The children bookmarks. | [optional]
**links** | [**\Aspose\PDF\Model\Link[]**](Link.md) | Link to the document.<br />*Inherited from [\Aspose\PDF\Model\LinkElement](LinkElement.md)* | [optional]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md) [[View Source]](../src/Aspose/PDF/Model/Bookmark.php)

