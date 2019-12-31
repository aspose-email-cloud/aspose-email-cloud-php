<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="aiNameMatchRequest.php">
 *   Copyright (c) 2018 Aspose.Email for Cloud
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

namespace Aspose\Email\Model\Requests;

/**
 * Request model for aiNameMatch" operation.
 */
class AiNameMatchRequest
{
    /**
     * Initializes a new instance of the AiNameMatchRequest class.
     *  
     * @param string $name A name to match (required)
     * @param string $other_name Another name to match (required)
     * @param string $language An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \"it\" or \"ita\" for Italian)
     * @param string $location A geographic code such as an ISO-3166 two letter country code, for example \"FR\" for France
     * @param string $encoding A character encoding name
     * @param string $script A writing system code; starts with the ISO-15924 script name
     * @param string $style Name writing style. Enum, available values: Formal, Informal, Legal, Academic
     */
    public function __construct($name, $other_name, $language = null, $location = null, $encoding = null, $script = null, $style = null)             
    {
        $this->name = $name;
        $this->other_name = $other_name;
        $this->language = $language;
        $this->location = $location;
        $this->encoding = $encoding;
        $this->script = $script;
        $this->style = $style;
    }

    /**
     * A name to match (required)
     */
    public $name;
	
    /**
     * Another name to match (required)
     */
    public $other_name;
	
    /**
     * An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \"it\" or \"ita\" for Italian)
     */
    public $language;
	
    /**
     * A geographic code such as an ISO-3166 two letter country code, for example \"FR\" for France
     */
    public $location;
	
    /**
     * A character encoding name
     */
    public $encoding;
	
    /**
     * A writing system code; starts with the ISO-15924 script name
     */
    public $script;
	
    /**
     * Name writing style. Enum, available values: Formal, Informal, Legal, Academic
     */
    public $style;
}
?>
