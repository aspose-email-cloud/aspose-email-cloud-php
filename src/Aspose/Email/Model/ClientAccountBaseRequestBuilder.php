<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ClientAccountBaseRequestBuilder.php">
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
/**
 * ClientAccountBaseRequestBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  ClientAccountBaseRequest builder.
 */
class ClientAccountBaseRequestBuilder
{
    /**
     * A model to build.
     * @var ClientAccountBaseRequest
     */
    private $model;
    /**
     * Initializes a new instance of the ClientAccountBaseRequestBuilder class.
     *
     * @param ClientAccountBaseRequest $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return ClientAccountBaseRequest Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets accountLocation
     * @param \Aspose\Email\Model\StorageFileLocation $accountLocation Email client account configuration location on storage.
     * @return $this
     */
    public function accountLocation($accountLocation)
    {
        $this->model->setAccountLocation($accountLocation);
        return $this;
    }
}

