<?php

/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="AiGroup.php">
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

use GuzzleHttp\ClientInterface;

/**
 * AI powered operations.
 */
class AiGroup
{
    
    private $bcr;
    
    private $name;
    

    
    /**
     * AI Business card recognition operations.
     *
     * @return AiBcrApi
     */
    public function bcr()
    {
        return $this->bcr;
    }
    
    /**
     * AI Name operations.
     *
     * @return AiNameApi
     */
    public function name()
    {
        return $this->name;
    }
    

    public function __construct(
        ClientInterface $client,
        Configuration $config,
        HeaderSelector $selector
    ) {
    
        $this->bcr = new AiBcrApi($client, $config, $selector);
    
        $this->name = new AiNameApi($client, $config, $selector);
    

    }
}
