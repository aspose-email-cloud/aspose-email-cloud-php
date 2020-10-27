# EmailAccountConfig

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_name** | **string** | Email account display name | [optional] 
**protocol_type** | **string** | Type of connection protocol. Enum, available values: IMAP, POP3, SMTP, EWS, WebDav | 
**host** | **string** | Email account host. | [optional] 
**port** | **int** | Port. | [optional] 
**socket_type** | **string** | Email account security mode Enum, available values: None, SSLExplicit, SSLImplicit, SSLAuto, Auto | 
**authentication_types** | **string[]** | Supported authentication types. Items: Email account authentication types. Enum, available values: NoAuth, OAuth2, PasswordCleartext, PasswordEncrypted, SmtpAfterPop, ClientIpAddress | [optional] 
**extra_info** | [**\Aspose\Email\Model\NameValuePair[]**](NameValuePair.md) | Extra account information. | [optional] 
**is_validated** | **bool** | Determines that configuration validated. Set to false if validation skipped. | 



[[Back to Model list]](README.md#documentation-for-models) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to README]](README.md)


