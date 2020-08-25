# Aspose\Email\ClientMessageApi

All URIs are relative to *https://api.aspose.cloud/v3.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**clientMessageAppend**](ClientMessageApi.md#clientMessageAppend) | **POST** /email/client/message/append | Add email message to specified folder in email account.
[**clientMessageAppendFile**](ClientMessageApi.md#clientMessageAppendFile) | **POST** /email/client/message/file/append | Add email message from file to specified folder in email account.
[**clientMessageDelete**](ClientMessageApi.md#clientMessageDelete) | **DELETE** /email/client/message | Delete message.
[**clientMessageFetch**](ClientMessageApi.md#clientMessageFetch) | **GET** /email/client/message | Fetch message from email account
[**clientMessageFetchFile**](ClientMessageApi.md#clientMessageFetchFile) | **GET** /email/client/message/file | Fetch message as file from email account
[**clientMessageList**](ClientMessageApi.md#clientMessageList) | **GET** /email/client/message/list | Get messages from folder, filtered by query
[**clientMessageMove**](ClientMessageApi.md#clientMessageMove) | **PUT** /email/client/message/move | Move message to another folder.
[**clientMessageSend**](ClientMessageApi.md#clientMessageSend) | **POST** /email/client/message | Send an email specified by model in request.
[**clientMessageSendFile**](ClientMessageApi.md#clientMessageSendFile) | **POST** /email/client/message/file | Send an email file.
[**clientMessageSetIsRead**](ClientMessageApi.md#clientMessageSetIsRead) | **PUT** /email/client/message/set-is-read | Mark message as read or unread.


# **clientMessageAppend**
```php
function \Aspose\Email\Model\ValueTOfString clientMessageAppend(ClientMessageAppendRequest $request)
```
Add email message to specified folder in email account.

### Return type

[**\Aspose\Email\Model\ValueTOfString**](ValueTOfString.md)

### Request parameters
```php
new Aspose\Email\Model\ClientMessageAppendRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\ClientMessageAppendRequest**](ClientMessageAppendRequest.md)| Append email request. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **clientMessageAppendFile**
```php
function \Aspose\Email\Model\ValueTOfString clientMessageAppendFile(ClientMessageAppendFileRequest $request)
```
Add email message from file to specified folder in email account.

### Return type

[**\Aspose\Email\Model\ValueTOfString**](ValueTOfString.md)

### Request parameters
```php
new Aspose\Email\Model\ClientMessageAppendFileRequest(
    $account,
    $file,
    $storage,
    $account_storage_folder,
    $format,
    $folder,
    $mark_as_sent)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**| Email account. |
 **file** | **\SplFileObject**| Message file to append. |
 **storage** | **string**| Storage name where account file located. | [optional]
 **account_storage_folder** | **string**| Folder in storage where account file located. | [optional]
 **format** | **string**| Email file format. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef | [optional] [default to 0]
 **folder** | **string**| Path to folder on email server to append message to. | [optional]
 **mark_as_sent** | **bool**| Determines that appended message should be market as sent or not. | [optional] [default to true]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **clientMessageDelete**
```php
function clientMessageDelete(ClientMessageDeleteRequest $request)
```
Delete message.

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\ClientMessageDeleteRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\ClientMessageDeleteRequest**](ClientMessageDeleteRequest.md)| Delete message request. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **clientMessageFetch**
```php
function \Aspose\Email\Model\MailMessageBase clientMessageFetch(ClientMessageFetchRequest $request)
```
Fetch message from email account

### Return type

[**\Aspose\Email\Model\MailMessageBase**](MailMessageBase.md)

### Request parameters
```php
new Aspose\Email\Model\ClientMessageFetchRequest(
    $message_id,
    $account,
    $folder,
    $storage,
    $account_storage_folder,
    $type,
    $format)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**| Message identifier |
 **account** | **string**| Email account |
 **folder** | **string**| Account folder to fetch from (should be specified for some protocols such as IMAP) | [optional]
 **storage** | **string**| Storage name where account file located. | [optional]
 **account_storage_folder** | **string**| Folder in storage where account file located. | [optional]
 **type** | **string**| MailMessageBase type. Using this property you can fetch message in different formats (as EmailDto, MapiMessageDto or a file represented as Base64 string).              Enum, available values: Dto, Mapi, Base64 | [optional] [default to 0]
 **format** | **string**| Base64 data format. Used only if type is set to Base64. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **clientMessageFetchFile**
```php
function \SplFileObject clientMessageFetchFile(ClientMessageFetchFileRequest $request)
```
Fetch message as file from email account

### Return type

[**\SplFileObject**](\SplFileObject.md)

### Request parameters
```php
new Aspose\Email\Model\ClientMessageFetchFileRequest(
    $message_id,
    $account,
    $folder,
    $storage,
    $account_storage_folder,
    $format)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message_id** | **string**| Message identifier |
 **account** | **string**| Email account |
 **folder** | **string**| Account folder to fetch from (should be specified for some protocols such as IMAP) | [optional]
 **storage** | **string**| Storage name where account file located. | [optional]
 **account_storage_folder** | **string**| Folder in storage where account file located. | [optional]
 **format** | **string**| Fetched message file format. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **clientMessageList**
```php
function \Aspose\Email\Model\MailMessageBaseList clientMessageList(ClientMessageListRequest $request)
```
Get messages from folder, filtered by query

The query string should have the following view.      The example of a simple expression:       '<Field name>' <Comparison operator> '<Field value>',  where &lt;Field Name&gt; - the name of a message field through which filtering is made, &lt;Comparison operator&gt; - comparison operators, as their name implies, allow to compare message field and specified value, &lt;Field value&gt; - value to be compared with a message field.      The number of simple expressions can make a compound one, ex.:     (<Simple expression 1> & <Simple expression 2>) | <Simple expression 3     >,  where \"&amp;\" - logical-AND operator, \"|\" - logical-OR operator      At present the following values are allowed as a field name (<Field name>):  \"To\" - represents a TO field of message, \"Text\" - represents string in the header or body of the message, \"Bcc\" - represents a BCC field of message, \"Body\" - represents a string in the body of message, \"Cc\" - represents a CC field of message, \"From\" - represents a From field of message, \"Subject\" - represents a string in the subject of message, \"InternalDate\" - represents an internal date of message, \"SentDate\" - represents a sent date of message      Additionally, the following field names are allowed for IMAP-protocol:  \"Answered\" - represents an /Answered flag of message \"Seen\" - represents a /Seen flag of message \"Flagged\" - represents a /Flagged flag of message \"Draft\" - represents a /Draft flag of message \"Deleted\" - represents a Deleted/ flag of message \"Recent\" - represents a Deleted/ flag of message \"MessageSize\" - represents a size (in bytes) of message      Additionally, the following field names are allowed for Exchange:  \"IsRead\" - Indicates whether the message has been read \"HasAttachment\" - Indicates whether or not the message has attachments \"IsSubmitted\" - Indicates whether the message has been submitted to the Outbox \"ContentClass\" - represents a content class of item      Additionally, the following field names are allowed for pst/ost files:  \"MessageClass\" - Represents a message class \"ContainerClass\" - Represents a folder container class \"Importance\" - Represents a message importance \"MessageSize\" - represents a size (in bytes) of message \"FolderName\" - represents a folder name \"ContentsCount\" - represents a total number of items in the folder \"UnreadContentsCount\" - represents the number of unread items in the folder. \"Subfolders\" - Indicates whether or not the folder has subfolders \"Read\" - the message is marked as having been read \"HasAttachment\" - the message has at least one attachment \"Unsent\" - the message is still being composed \"Unmodified\" - the message has not been modified since it was first saved (if unsent) or it was delivered (if sent) \"FromMe\" - the user receiving the message was also the user who sent the message \"Resend\" - the message includes a request for a resend operation with a non-delivery report \"NotifyRead\" - the user who sent the message has requested notification when a recipient first reads it \"NotifyUnread\" - the user who sent the message has requested notification when a recipient deletes it before reading or the Message object expires \"EverRead\" - the message has been read at least once      The field value (<Field value>) can take the following values:     For text fields - any string,     For date type fields - the string of \"d-MMM-yyy\" format, ex. \"10-Feb-2009\",     For flags (fields of boolean type) - either \"True\", or \"False\"

### Return type

[**\Aspose\Email\Model\MailMessageBaseList**](MailMessageBaseList.md)

### Request parameters
```php
new Aspose\Email\Model\ClientMessageListRequest(
    $folder,
    $account,
    $query_string,
    $storage,
    $account_storage_folder,
    $recursive,
    $type,
    $format)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | **string**| A folder in email account |
 **account** | **string**| Email account |
 **query_string** | **string**| A MailQuery search string | [optional]
 **storage** | **string**| Storage name where account file located | [optional]
 **account_storage_folder** | **string**| Folder in storage where account file located | [optional]
 **recursive** | **bool**| Specifies that should message be searched in subfolders recursively | [optional] [default to false]
 **type** | **string**| MailMessageBase type. Using this property you can get messages in different formats (as EmailDto, MapiMessageDto or a file represented as Base64 string).              Enum, available values: Dto, Mapi, Base64 | [optional] [default to 0]
 **format** | **string**| Base64 data format. Used only if type is set to Base64. Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **clientMessageMove**
```php
function clientMessageMove(ClientMessageMoveRequest $request)
```
Move message to another folder.

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\ClientMessageMoveRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\ClientMessageMoveRequest**](ClientMessageMoveRequest.md)| Move message request. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **clientMessageSend**
```php
function clientMessageSend(ClientMessageSendRequest $request)
```
Send an email specified by model in request.

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\ClientMessageSendRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\ClientMessageSendRequest**](ClientMessageSendRequest.md)| Send email request. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **clientMessageSendFile**
```php
function clientMessageSendFile(ClientMessageSendFileRequest $request)
```
Send an email file.

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\ClientMessageSendFileRequest(
    $account,
    $file,
    $storage,
    $account_storage_folder,
    $format)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**| Email account |
 **file** | **\SplFileObject**| File to send |
 **storage** | **string**| Storage name where account file located. | [optional]
 **account_storage_folder** | **string**| Folder in storage where account file located. | [optional]
 **format** | **string**| Email file format Enum, available values: Eml, Msg, MsgUnicode, Mhtml, Html, Tnef | [optional] [default to 0]

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

# **clientMessageSetIsRead**
```php
function clientMessageSetIsRead(ClientMessageSetIsReadRequest $request)
```
Mark message as read or unread.

### Return type

void (empty response body)

### Request parameters
```php
new Aspose\Email\Model\ClientMessageSetIsReadRequest(
    $request)
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\Aspose\Email\Model\ClientMessageSetIsReadRequest**](ClientMessageSetIsReadRequest.md)| Delete message request. |

[[Back to top]](#) [[Back to API list]](README.md#documentation-for-api-endpoints) [[Back to Model list]](README.md#documentation-for-models) [[Back to README]](README.md)

