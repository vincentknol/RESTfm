<?php
/**
 * RESTfm - FileMaker RESTful Web Service
 *
 * @copyright
 *  Copyright (c) 2011-2016 Goya Pty Ltd.
 *
 * @license
 *  Licensed under The MIT License. For full copyright and license information,
 *  please see the LICENSE file distributed with this package.
 *  Redistributions of files must retain the above copyright notice.
 *
 * @link
 *  http://restfm.com
 *
 * @author
 *  Gavin Stewart
 */

 /**
  * A generic row interface for fieldName/value pairs.
  */
class RESTfmMessageRow implements RESTfmMessageRowInterface {

    protected $_data = array();

    /**
     * Get rows of associative array data.
     *
     * @return array of fieldName/value pairs.
     */
    public function getData () {
        return $data;
    }

    /**
     * Set rows from associative array.
     *
     * @param array $assocArray
     *  Set row data with provided array of fieldName/value pairs.
     */
    public function setData ($assocArray) {
        $this->_data = $assocArray;
    }

    /**
     * Get specified fieldName.
     *
     * @param string $fieldName
     *
     * @return mixed
     */
    public function getField ($fieldName) {
        if (isset($this->_data[$fieldName])) { return $this->_data[$fieldName]; }
    }

    /**
     * Set specified fieldName.
     *
     * @param string $fieldName
     * @param mixed $fieldValue
     */
    public function setField ($fieldName, $fieldValue) {
        $this->_data[$fieldName] = $fieldValue;
    }

    /**
     * Unset/delete specified fieldName.
     *
     * @param string $fieldName
     */
    public function unsetField ($fieldName) {
        if (isset($this->_data[$fieldName])) { unset($this->_data[$fieldName]); }
    }

    /**
     * RESTfmMessage internal function.
     * Return a reference to the internal _data array.
     *
     * @return arrayref _data array.
     */
    public function &_getDataReference () {
        return $this->_data;
    }
};
