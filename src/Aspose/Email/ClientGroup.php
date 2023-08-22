<?php

/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="ClientGroup.php">
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
 * Builtin Email client operations.
 */
class ClientGroup
{
    
    private $account;
    
    private $folder;
    
    private $message;
    
    private $thread;
    

    
    /**
     * Email server account for built-in client operations.
     *
     * @return ClientAccountApi
     */
    public function account(): ClientAccountApi
    {
        return $this->account;
    }
    
    /**
     * Email client folder operations.
     *
     * @return ClientFolderApi
     */
    public function folder(): ClientFolderApi
    {
        return $this->folder;
    }
    
    /**
     * Email client message operations.
     *
     * @return ClientMessageApi
     */
    public function message(): ClientMessageApi
    {
        return $this->message;
    }
    
    /**
     * Email client thread operations.
     *
     * @return ClientThreadApi
     */
    public function thread(): ClientThreadApi
    {
        return $this->thread;
    }
    

    public function __construct(
        ClientInterface $client,
        Configuration $config,
        HeaderSelector $selector
    ) {
    
        $this->account = new ClientAccountApi($client, $config, $selector);
    
        $this->folder = new ClientFolderApi($client, $config, $selector);
    
        $this->message = new ClientMessageApi($client, $config, $selector);
    
        $this->thread = new ClientThreadApi($client, $config, $selector);
    

    }
}
