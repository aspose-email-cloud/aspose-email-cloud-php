<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose" file="MapiPidLidPropertyDescriptorBuilder.php">
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
 * MapiPidLidPropertyDescriptorBuilder
 */

namespace Aspose\Email\Model;
use \Aspose\Email\ObjectSerializer;

/**
 *  MapiPidLidPropertyDescriptor builder.
 */
class MapiPidLidPropertyDescriptorBuilder
{
    /**
     * A model to build.
     * @var MapiPidLidPropertyDescriptor
     */
    private $model;
    /**
     * Initializes a new instance of the MapiPidLidPropertyDescriptorBuilder class.
     *
     * @param MapiPidLidPropertyDescriptor $model A model to build.
     */
    public function __construct($model)
    {
        $this->model = $model;
    }

    /**
     * @return MapiPidLidPropertyDescriptor Built model.
     */
    public function build()
    {
        $tempModel = $this->model;
        $this->model = null;
        return $tempModel;
    }

    /**
     * Sets canonicalName
     * @param string $canonicalName The name used to refer to the property in the documentation. The prefix of the canonical name identifies the basic characteristics of a property to the implementer. The canonical naming structure uses three categories that are denoted by the following prefixes to the canonical property name: * PidLid prefix: Properties identified by an unsigned 32-bit quantity along with a property set. * PidName prefix: Properties identified by a string name along with a property set. * PidTag prefix: Properties identified by an unsigned 16-bit quantity.
     * @return $this
     */
    public function canonicalName($canonicalName)
    {
        $this->model->setCanonicalName($canonicalName);
        return $this;
    }
    /**
     * Sets dataType
     * @param string $dataType [MS-OXCDATA]: Data Structures./nEnum, available values: Unspecified, Null, Integer16, Integer32, Floating32, Floating64, Currency, FloatingTime, ErrorCode, Boolean, Integer64, String, String8, Time, Guid, ServerId, Restriction, RuleAction, Binary, MultipleInteger16, MultipleInteger32, MultipleFloating32, MultipleFloating64, MultipleCurrency, MultipleFloatingTime, MultipleBoolean, MultipleInteger64, MultipleString, MultipleString8, MultipleTime, MultipleGuid, MultipleBinary, Object
     * @return $this
     */
    public function dataType($dataType)
    {
        $this->model->setDataType($dataType);
        return $this;
    }
    /**
     * Sets multipleValuesDataType
     * @param bool $multipleValuesDataType Indicates if data type contains of multiple values
     * @return $this
     */
    public function multipleValuesDataType($multipleValuesDataType)
    {
        $this->model->setMultipleValuesDataType($multipleValuesDataType);
        return $this;
    }
    /**
     * Sets name
     * @param string $name A string that identifies the property
     * @return $this
     */
    public function name($name)
    {
        $this->model->setName($name);
        return $this;
    }
    /**
     * Sets longId
     * @param int $longId An unsigned 32-bit quantity that, along with the property set, identifies a named property.
     * @return $this
     */
    public function longId($longId)
    {
        $this->model->setLongId($longId);
        return $this;
    }
    /**
     * Sets propertySet
     * @param string $propertySet A GUID that identifies a group of properties with a similar purpose.
     * @return $this
     */
    public function propertySet($propertySet)
    {
        $this->model->setPropertySet($propertySet);
        return $this;
    }
}

