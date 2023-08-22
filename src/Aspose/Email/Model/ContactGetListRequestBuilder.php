<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="ContactGetListRequestBuilder.php">
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
 * Builder for ContactGetListRequest.
 */
class ContactGetListRequestBuilder
{
    /**
     * A model to build.
     * @var ContactGetListRequest
     */
    private $model;
    /**
     * Initializes a new instance of the ContactGetListRequestBuilder class.
     *
     * @param ContactGetListRequest $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return ContactGetListRequest Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets format
     * @param string $format Contact document format. Enum, available values: VCard, WebDav, Msg
     * @return $this
     */
    public function format($format)
    {
        $this->model->format = $format;
        return $this;
    }
    /**
     * Sets folder
     * @param string $folder Path to folder in storage.
     * @return $this
     */
    public function folder($folder)
    {
        $this->model->folder = $folder;
        return $this;
    }
    /**
     * Sets storage
     * @param string $storage Storage name.
     * @return $this
     */
    public function storage($storage)
    {
        $this->model->storage = $storage;
        return $this;
    }
    /**
     * Sets items_per_page
     * @param int $items_per_page Count of items on page.
     * @return $this
     */
    public function items_per_page($items_per_page)
    {
        $this->model->items_per_page = $items_per_page;
        return $this;
    }
    /**
     * Sets page_number
     * @param int $page_number Page number.
     * @return $this
     */
    public function page_number($page_number)
    {
        $this->model->page_number = $page_number;
        return $this;
    }
}
