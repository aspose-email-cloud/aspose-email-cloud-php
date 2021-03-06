<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="AiNameCulturalContextBuilder.php">
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
/**
 * AiNameCulturalContextBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  AiNameCulturalContext builder.
 */
class AiNameCulturalContextBuilder
{
    /**
     * A model to build.
     * @var AiNameCulturalContext
     */
    private $model;
    /**
     * Initializes a new instance of the AiNameCulturalContextBuilder class.
     *
     * @param AiNameCulturalContext $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return AiNameCulturalContext Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets language
     * @param string $language An ISO-639 code of the language; either 639-1 or 639-3 (e.g. \"it\" or \"ita\" for Italian)
     * @return $this
     */
    public function language($language)
    {
        $this->model->setLanguage($language);
        return $this;
    }
    /**
     * Sets location
     * @param string $location A geographic code such as an ISO-3166 two letter country code, for example \"FR\" for France
     * @return $this
     */
    public function location($location)
    {
        $this->model->setLocation($location);
        return $this;
    }
    /**
     * Sets script
     * @param string $script A writing system code; starts with the ISO-15924 script name
     * @return $this
     */
    public function script($script)
    {
        $this->model->setScript($script);
        return $this;
    }
    /**
     * Sets encoding
     * @param string $encoding A character encoding name
     * @return $this
     */
    public function encoding($encoding)
    {
        $this->model->setEncoding($encoding);
        return $this;
    }
    /**
     * Sets style
     * @param string $style Name writing style. Enum, available values: Formal, Informal, Legal, Academic
     * @return $this
     */
    public function style($style)
    {
        $this->model->setStyle($style);
        return $this;
    }
}

