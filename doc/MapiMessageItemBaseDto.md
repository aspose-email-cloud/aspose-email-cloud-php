# MapiMessageItemBaseDto

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attachments** | [**\Aspose\Email\Model\MapiAttachmentDto[]**](MapiAttachmentDto.md) | Message item attachments. | [optional] 
**billing** | **string** | Billing information associated with an item. | [optional] 
**body** | **string** | Message text. | [optional] 
**body_html** | **string** | Gets the BodyRtf of the message converted to HTML, if present, otherwise an empty string. | [optional] 
**body_rtf** | **string** | RTF formatted message text. | [optional] 
**body_type** | **string** | The content type of message body. Enum, available values: PlainText, Html, Rtf | 
**categories** | **string[]** | Contains keywords or categories for the message object. | [optional] 
**companies** | **string[]** | Contains the names of the companies that are associated with an item. | [optional] 
**item_id** | **string** | The item id, uses with a server. | [optional] 
**message_class** | **string** | Case-sensitive string that identifies the sender-defined message class, such as IPM.Note. The message class specifies the type, purpose, or content of the message. | [optional] 
**mileage** | **string** | Contains the mileage information that is associated with an item. | [optional] 
**recipients** | [**\Aspose\Email\Model\MapiRecipientDto[]**](MapiRecipientDto.md) | Recipients of the message. | [optional] 
**sensitivity** | **string** | Contains values that indicate the message sensitivity. Enum, available values: None, Personal, Private, CompanyConfidential | 
**subject** | **string** | Subject of the message. | [optional] 
**subject_prefix** | **string** | Subject prefix that typically indicates some action on a message, such as \"FW: \" for forwarding. | [optional] 
**properties** | [**\Aspose\Email\Model\MapiPropertyDto[]**](MapiPropertyDto.md) | List of MAPI properties | [optional] 
**discriminator** | **string** |  | 



[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)


