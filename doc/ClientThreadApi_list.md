## Documentation for ClientThreadApi

All URIs are relative to *https://api.aspose.cloud/v4.0*

Method | HTTP request | Description
------ | ------------ | -----------
[**delete**](ClientThreadApi.md#delete) | **DELETE** /email/client/thread | Delete thread by id. All messages from thread will also be deleted.
[**getList**](ClientThreadApi.md#getList) | **GET** /email/client/thread/list | Get message threads from folder. All messages are partly fetched (without email body and some other fields).
[**getMessages**](ClientThreadApi.md#getMessages) | **GET** /email/client/thread/messages | Get messages from thread by id. All messages are fully fetched. For accounts with CacheFile only cached messages will be returned.
[**move**](ClientThreadApi.md#move) | **PUT** /email/client/thread/move | Move thread to another folder.
[**setIsRead**](ClientThreadApi.md#setIsRead) | **PUT** /email/client/thread/set-is-read | Mark all messages in thread as read or unread.

