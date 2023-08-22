<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AiBcrParseRequestBuilder.php">
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
 * Builder for AiBcrParseRequest.
 */
class AiBcrParseRequestBuilder
{
    /**
     * A model to build.
     * @var AiBcrParseRequest
     */
    private $model;
    /**
     * Initializes a new instance of the AiBcrParseRequestBuilder class.
     *
     * @param AiBcrParseRequest $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return AiBcrParseRequest Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets file
     * @param \SplFileObject $file File to parse
     * @return $this
     */
    public function file($file)
    {
        $this->model->file = $file;
        return $this;
    }
    /**
     * Sets countries
     * @param string $countries Comma-separated codes of countries.
     * @return $this
     */
    public function countries($countries)
    {
        $this->model->countries = $countries;
        return $this;
    }
    /**
     * Sets languages
     * @param string $languages Comma-separated ISO-639 codes of languages (either 639-1 or 639-3; i.e. \"it\" or \"ita\" for Italian); it's \"\" by default.
     * @return $this
     */
    public function languages($languages)
    {
        $this->model->languages = $languages;
        return $this;
    }
    /**
     * Sets is_single
     * @param bool $is_single Determines that image contains single VCard or more.
     * @return $this
     */
    public function is_single($is_single)
    {
        $this->model->is_single = $is_single;
        return $this;
    }
}
