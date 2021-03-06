<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="EmailConfigDiscoverPasswordRequestBuilder.php">
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
 * EmailConfigDiscoverPasswordRequestBuilder
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 *  EmailConfigDiscoverPasswordRequest builder.
 */
class EmailConfigDiscoverPasswordRequestBuilder
{
    /**
     * A model to build.
     * @var EmailConfigDiscoverPasswordRequest
     */
    private $model;
    /**
     * Initializes a new instance of the EmailConfigDiscoverPasswordRequestBuilder class.
     *
     * @param EmailConfigDiscoverPasswordRequest $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return EmailConfigDiscoverPasswordRequest Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets address
     * @param string $address Email address to discover.
     * @return $this
     */
    public function address($address)
    {
        $this->model->setAddress($address);
        return $this;
    }
    /**
     * Sets fastProcessing
     * @param bool $fastProcessing Turns on fast processing. All discover systems will run in parallel. First discovered result will be returned.
     * @return $this
     */
    public function fastProcessing($fastProcessing)
    {
        $this->model->setFastProcessing($fastProcessing);
        return $this;
    }
    /**
     * Sets login
     * @param string $login Email account login. If not specified, address used as a login.
     * @return $this
     */
    public function login($login)
    {
        $this->model->setLogin($login);
        return $this;
    }
    /**
     * Sets password
     * @param string $password Email account password.
     * @return $this
     */
    public function password($password)
    {
        $this->model->setPassword($password);
        return $this;
    }
}

