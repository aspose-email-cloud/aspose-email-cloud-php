<?php

/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="CloudStorageGroup.php">
*   Copyright (c) 2020-2023 Aspose Pty Ltd. All rights reserved.
* </copyright>
* <summary>
*   Permission is hereby granted, free of charge, to any person obtaining a copy
*  of this software and associated documentation files (the "Software"), to deal
*  in the Software without restriction, including without limitation the rights
*  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
*  copies of the Software, and to permit persons to whom the Software is
*  furnished to do so, subject to the following conditions:
*
*  The above copyright notice and this permission notice shall be included in all
*  copies or substantial portions of the Software.
*
*  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
*  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
*  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
*  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
*  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
*  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
*  SOFTWARE.
* </summary>
* --------------------------------------------------------------------------------------------------------------------
*/

namespace Aspose\Email;

use GuzzleHttp\ClientInterface;

/**
 * Cloud file storage operations.
 */
class CloudStorageGroup
{
    
    private $file;
    
    private $folder;
    
    private $storage;
    

    
    /**
     * File operations controller
     *
     * @return FileApi
     */
    public function file(): FileApi
    {
        return $this->file;
    }
    
    /**
     * Folder operations controller
     *
     * @return FolderApi
     */
    public function folder(): FolderApi
    {
        return $this->folder;
    }
    
    /**
     * Storage operations controller
     *
     * @return StorageApi
     */
    public function storage(): StorageApi
    {
        return $this->storage;
    }
    

    public function __construct(
        ClientInterface $client,
        Configuration $config,
        HeaderSelector $selector
    ) {
    
        $this->file = new FileApi($client, $config, $selector);
    
        $this->folder = new FolderApi($client, $config, $selector);
    
        $this->storage = new StorageApi($client, $config, $selector);
    

    }
}
