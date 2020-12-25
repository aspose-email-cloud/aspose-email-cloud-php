<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="EmailCloud.php">
*   Copyright (c) 2020 Aspose Pty Ltd. All rights reserved.
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

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * Aspose.Email Cloud API
 */
class EmailCloud
{
    private $httpClient;
    private $config;
    private $headerSelector;


    
    private $calendar;
    
    private $contact;
    
    private $email;
    
    private $disposableEmail;
    
    private $emailConfig;
    
    
    private $mapi;
    
    private $client;
    
    private $ai;
    
    private $cloudStorage;
    

    
    /**
     *  iCalendar document operations.
     *
     * @return CalendarApi
     */
    public function calendar(): CalendarApi
    {
        return $this->calendar;
    }
    
    /**
     *  Contact document operations. Supported formats: VCard, MSG, WebDav
     *
     * @return ContactApi
     */
    public function contact(): ContactApi
    {
        return $this->contact;
    }
    
    /**
     *  Email document (*.eml) operations.
     *
     * @return EmailApi
     */
    public function email(): EmailApi
    {
        return $this->email;
    }
    
    /**
     *  Checks if an email is a disposable one
     *
     * @return DisposableEmailApi
     */
    public function disposableEmail(): DisposableEmailApi
    {
        return $this->disposableEmail;
    }
    
    /**
     *  Email server configuration discovery.
     *
     * @return EmailConfigApi
     */
    public function emailConfig(): EmailConfigApi
    {
        return $this->emailConfig;
    }
    

    
    /**
     *  MAPI operations.
     *
     * @return MapiGroup
     */
    public function mapi(): MapiGroup
    {
        return $this->mapi;
    }
    
    /**
     *  Builtin Email client operations.
     *
     * @return ClientGroup
     */
    public function client(): ClientGroup
    {
        return $this->client;
    }
    
    /**
     *  AI powered operations.
     *
     * @return AiGroup
     */
    public function ai(): AiGroup
    {
        return $this->ai;
    }
    
    /**
     *  Cloud file storage operations.
     *
     * @return CloudStorageGroup
     */
    public function cloudStorage(): CloudStorageGroup
    {
        return $this->cloudStorage;
    }
    


    /**
     * Initializes a new instance of the EmailCloud class.
     * @param Configuration|null   $config configuration info
     * @param ClientInterface|null   $httpClient client for calling api
     * @param HeaderSelector|null   $selector class for header selection
     */
    public function __construct(
        Configuration $config = null,
        ClientInterface $httpClient = null,
        HeaderSelector $selector = null
    ) {
        $this->httpClient = $httpClient ?: new Client(['verify' => false]);
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();

    
        $this->calendar = new CalendarApi($this->httpClient, $this->config, $this->headerSelector);
    
        $this->contact = new ContactApi($this->httpClient, $this->config, $this->headerSelector);
    
        $this->email = new EmailApi($this->httpClient, $this->config, $this->headerSelector);
    
        $this->disposableEmail = new DisposableEmailApi($this->httpClient, $this->config, $this->headerSelector);
    
        $this->emailConfig = new EmailConfigApi($this->httpClient, $this->config, $this->headerSelector);
    
    
        $this->mapi = new MapiGroup($this->httpClient, $this->config, $this->headerSelector);
    
        $this->client = new ClientGroup($this->httpClient, $this->config, $this->headerSelector);
    
        $this->ai = new AiGroup($this->httpClient, $this->config, $this->headerSelector);
    
        $this->cloudStorage = new CloudStorageGroup($this->httpClient, $this->config, $this->headerSelector);
    

    }
}
