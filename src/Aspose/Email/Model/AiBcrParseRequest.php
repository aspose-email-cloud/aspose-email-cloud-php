<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AiBcrParseRequest.php">
 *   Copyright (c) 2018-2020 Aspose.Email for Cloud
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
 * Request model for aiBcrParse" operation.
 */
class AiBcrParseRequest
{
    /**
     * Initializes a new instance of the AiBcrParseRequest class.
     *  
     * @param \SplFileObject $file File to parse
     * @param string $countries Comma-separated codes of countries.
     * @param string $languages Comma-separated ISO-639 codes of languages (either 639-1 or 639-3; i.e. \"it\" or \"ita\" for Italian); it's \"\" by default.
     * @param bool $is_single Determines that image contains single VCard or more.
     */
    public function __construct($file, $countries = null, $languages = null, $is_single = null)             
    {
        $this->file = $file;
        $this->countries = $countries;
        $this->languages = $languages;
        $this->is_single = $is_single;
    }

    /**
     * File to parse
     */
    public $file;

    /**
     * Comma-separated codes of countries.
     */
    public $countries;

    /**
     * Comma-separated ISO-639 codes of languages (either 639-1 or 639-3; i.e. \"it\" or \"ita\" for Italian); it's \"\" by default.
     */
    public $languages;

    /**
     * Determines that image contains single VCard or more.
     */
    public $is_single;
}
?>
