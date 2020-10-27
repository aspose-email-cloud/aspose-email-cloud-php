# Aspose\Email\FolderApi

            
# **copyFolder**
```php
function copyFolder(
    CopyFolderRequest $request
): 
```
Copy folder

### Return type

void (empty response body)

### Request parameters
```php
$request = new CopyFolderRequest(
    $src_path,
    $dest_path,
    $src_storage_name,
    $dest_storage_name
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Source folder path e.g. &#39;/src&#39; |
 **dest_path** | **string**| Destination folder path e.g. &#39;/dst&#39; |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **createFolder**
```php
function createFolder(
    CreateFolderRequest $request
): 
```
Create the folder

### Return type

void (empty response body)

### Request parameters
```php
$request = new CreateFolderRequest(
    $path,
    $storage_name
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path to create e.g. &#39;folder_1/folder_2/&#39; |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **deleteFolder**
```php
function deleteFolder(
    DeleteFolderRequest $request
): 
```
Delete folder

### Return type

void (empty response body)

### Request parameters
```php
$request = new DeleteFolderRequest(
    $path,
    $storage_name,
    $recursive
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path e.g. &#39;/folder&#39; |
 **storage_name** | **string**| Storage name | [optional]
 **recursive** | **bool**| Enable to delete folders, subfolders and files | [optional] [default to false]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **getFilesList**
```php
function getFilesList(
    GetFilesListRequest $request
): FilesList 
```
Get all files and folders within a folder

### Return type

[**FilesList**](FilesList.md)

### Request parameters
```php
$request = new GetFilesListRequest(
    $path,
    $storage_name
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**| Folder path e.g. &#39;/folder&#39; |
 **storage_name** | **string**| Storage name | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

            
# **moveFolder**
```php
function moveFolder(
    MoveFolderRequest $request
): 
```
Move folder

### Return type

void (empty response body)

### Request parameters
```php
$request = new MoveFolderRequest(
    $src_path,
    $dest_path,
    $src_storage_name,
    $dest_storage_name
);
```


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **src_path** | **string**| Folder path to move e.g. &#39;/folder&#39; |
 **dest_path** | **string**| Destination folder path to move to e.g &#39;/dst&#39; |
 **src_storage_name** | **string**| Source storage name | [optional]
 **dest_storage_name** | **string**| Destination storage name | [optional]

[[Back to top]](#)  [[Back to README]](README.md) [[Back to Model list]](Models.md)

