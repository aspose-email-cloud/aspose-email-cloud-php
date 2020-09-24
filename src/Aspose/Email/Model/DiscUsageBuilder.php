<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="DiscUsageBuilder.php">
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
 * DiscUsageBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  DiscUsage builder.
 */
class DiscUsageBuilder
{
    /**
     * A model to build.
     * @var DiscUsage
     */
    private $model;
    /**
     * Initializes a new instance of the DiscUsageBuilder class.
     *
     * @param DiscUsage $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return DiscUsage Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets usedSize
     * @param int $usedSize Application used disc space.
     * @return $this
     */
    public function usedSize($usedSize)
    {
        $this->model->setUsedSize($usedSize);
        return $this;
    }
    /**
     * Sets totalSize
     * @param int $totalSize Total disc space.
     * @return $this
     */
    public function totalSize($totalSize)
    {
        $this->model->setTotalSize($totalSize);
        return $this;
    }
}

