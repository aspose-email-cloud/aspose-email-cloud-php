<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AiNameFormatRequestBuilder.php">
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
 * Builder for AiNameFormatRequest.
 */
class AiNameFormatRequestBuilder
{
    /**
     * A model to build.
     * @var AiNameFormatRequest
     */
    private $model;
    /**
     * Initializes a new instance of the AiNameFormatRequestBuilder class.
     *
     * @param AiNameFormatRequest $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return AiNameFormatRequest Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets name
     * @param string $name A name to format.
     * @return $this
     */
    public function name($name)
    {
        $this->model->name = $name;
        return $this;
    }
    /**
     * Sets language
     * @param string $language An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \"it\" or \"ita\" for Italian).
     * @return $this
     */
    public function language($language)
    {
        $this->model->language = $language;
        return $this;
    }
    /**
     * Sets location
     * @param string $location A geographic code such as an ISO-3166 two letter country code, for example \"FR\" for France.
     * @return $this
     */
    public function location($location)
    {
        $this->model->location = $location;
        return $this;
    }
    /**
     * Sets encoding
     * @param string $encoding A character encoding name.
     * @return $this
     */
    public function encoding($encoding)
    {
        $this->model->encoding = $encoding;
        return $this;
    }
    /**
     * Sets script
     * @param string $script A writing system code; starts with the ISO-15924 script name.
     * @return $this
     */
    public function script($script)
    {
        $this->model->script = $script;
        return $this;
    }
    /**
     * Sets format
     * @param string $format Format of the name. Predefined format can be used by ID, or custom format can be specified. Predefined formats:      /format/default/ (= '%t%F%m%N%L%p')     /format/FN+LN/ (= '%F%L')     /format/title+FN+LN/ (= '%t%F%L')     /format/FN+MN+LN/ (= '%F%M%N%L')     /format/title+FN+MN+LN/ (= '%t%F%M%N%L')     /format/FN+MI+LN/ (= '%F%m%N%L')     /format/title+FN+MI+LN/ (= '%t%F%m%N%L')     /format/LN/ (= '%L')     /format/title+LN/ (= '%t%L')     /format/LN+FN+MN/ (= '%L,%F%M%N')     /format/LN+title+FN+MN/ (= '%L,%t%F%M%N')     /format/LN+FN+MI/ (= '%L,%F%m%N')     /format/LN+title+FN+MI/ (= '%L,%t%F%m%N')  Custom format string - custom combination of characters and the next term placeholders:      '%t' - Title (prefix)     '%F' - First name     '%f' - First initial     '%M' - Middle name(s)     '%m' - Middle initial(s)     '%N' - Nickname     '%L' - Last name     '%l' - Last initial     '%p' - Postfix  If no value for format option was provided, its default value is '%t%F%m%N%L%p'
     * @return $this
     */
    public function format($format)
    {
        $this->model->format = $format;
        return $this;
    }
    /**
     * Sets style
     * @param string $style Name writing style. Enum, available values: Formal, Informal, Legal, Academic
     * @return $this
     */
    public function style($style)
    {
        $this->model->style = $style;
        return $this;
    }
}
