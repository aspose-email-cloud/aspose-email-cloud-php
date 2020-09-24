<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailThreadBuilder.php">
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
 * EmailThreadBuilder
 */

namespace Aspose\Email\Model;

use \ArrayAccess;
use \Aspose\Email\ObjectSerializer;

/**
 *  EmailThread builder.
 */
class EmailThreadBuilder
{
    /**
     * A model to build.
     * @var EmailThread
     */
    private $model;
    /**
     * Initializes a new instance of the EmailThreadBuilder class.
     *
     * @param EmailThread $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return EmailThread Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets id
     * @param string $id Thread identifier
     * @return $this
     */
    public function id($id)
    {
        $this->model->setId($id);
        return $this;
    }
    /**
     * Sets subject
     * @param string $subject Thread subject
     * @return $this
     */
    public function subject($subject)
    {
        $this->model->setSubject($subject);
        return $this;
    }
    /**
     * Sets messages
     * @param \Aspose\Email\Model\EmailDto[] $messages List of messages in thread
     * @return $this
     */
    public function messages($messages)
    {
        $this->model->setMessages($messages);
        return $this;
    }
    /**
     * Sets folder
     * @param string $folder Thread folder location
     * @return $this
     */
    public function folder($folder)
    {
        $this->model->setFolder($folder);
        return $this;
    }
}

