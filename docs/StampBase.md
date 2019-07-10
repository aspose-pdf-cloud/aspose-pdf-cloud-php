# StampBase
Represents Pdf stamps.

*Inherited from [\Aspose\PDF\Model\LinkElement](LinkElement.md)*
## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**background** | **bool** | Sets or gets a bool value that indicates the content is stamped as background. If the value is true, the stamp content is layed at the bottom. By defalt, the value is false, the stamp content is layed at the top. | [optional]
**horizontal_alignment** | [**\Aspose\PDF\Model\HorizontalAlignment**](HorizontalAlignment.md) | Gets or sets Horizontal alignment of stamp on the page.  | [optional]
**opacity** | **double** | Gets or sets a value to indicate the stamp opacity. The value is from 0.0 to 1.0. By default the value is 1.0. | [optional]
**rotate** | [**\Aspose\PDF\Model\Rotation**](Rotation.md) | Sets or gets the rotation of stamp content according Rotation values. Note. This property is for set angles which are multiples of 90 degrees (0, 90, 180, 270 degrees). To set arbitrary angle use RotateAngle property. If angle set by ArbitraryAngle is not multiple of 90 then Rotate property returns Rotation.None. | [optional]
**rotate_angle** | **double** | Gets or sets rotate angle of stamp in degrees. This property allows to set arbitrary rotate angle.  | [optional]
**x_indent** | **double** | Horizontal stamp coordinate, starting from the left. | [optional]
**y_indent** | **double** | Vertical stamp coordinate, starting from the bottom. | [optional]
**zoom** | **double** | Zooming factor of the stamp. Allows to scale stamp. | [optional]
**links** | [**\Aspose\PDF\Model\Link[]**](Link.md) | Link to the document.<br />*Inherited from [\Aspose\PDF\Model\LinkElement](LinkElement.md)* | [optional]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md) [[View Source]](../src/Aspose/PDF/Model/StampBase.php)

