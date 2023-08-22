<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AiNameMatchRequest.php">
 *   Copyright (c) 2018-2023 Aspose Pty Ltd. All rights reserved.
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

namespace Aspose\Email\Model;

/**
 * Request model for AiNameApi::match operation.
 */
class AiNameMatchRequest
{
    /**
     * Initializes a new instance of the AiNameMatchRequest class.
     *  
     * @param string $name A name to match.
     * @param string $other_name Another name to match.
     * @param string $language An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \"it\" or \"ita\" for Italian).
     * @param string $location A geographic code such as an ISO-3166 two letter country code, for example \"FR\" for France.
     * @param string $encoding A character encoding name.
     * @param string $script A writing system code; starts with the ISO-15924 script name.
     * @param string $style Name writing style. Enum, available values: Formal, Informal, Legal, Academic
     */
    public function __construct($name = null, $other_name = null, $language = null, $location = null, $encoding = null, $script = null, $style = null)             
    {
        if ($name != null) {
            $this->name = $name;
        }
        if ($other_name != null) {
            $this->other_name = $other_name;
        }
        if ($language != null) {
            $this->language = $language;
        }
        if ($location != null) {
            $this->location = $location;
        }
        if ($encoding != null) {
            $this->encoding = $encoding;
        }
        if ($script != null) {
            $this->script = $script;
        }
        if ($style != null) {
            $this->style = $style;
        }
    }

    /**
     * A name to match.
     */
    public $name;

    /**
     * Another name to match.
     */
    public $other_name;

    /**
     * An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \"it\" or \"ita\" for Italian).
     */
    public $language;

    /**
     * A geographic code such as an ISO-3166 two letter country code, for example \"FR\" for France.
     */
    public $location;

    /**
     * A character encoding name.
     */
    public $encoding;

    /**
     * A writing system code; starts with the ISO-15924 script name.
     */
    public $script;

    /**
     * Name writing style. Enum, available values: Formal, Informal, Legal, Academic
     */
    public $style;
}
