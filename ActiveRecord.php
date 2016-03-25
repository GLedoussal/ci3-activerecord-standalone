<?php
/**
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2016, Gwendal LE DOUSSAL
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @author	Gwendal LE DOUSSAL
 * @copyright 	Copyright (c) 2016 - 2016, Gwendal LE DOUSSAL (https://gwendal-ledoussal.fr)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://gwendal-ledoussal.fr
 * @since	Version 1.0.0
 * @filesource
 */

define('BASEPATH', realpath(dirname(__FILE__)).'/');
define('APPPATH', realpath(dirname(__FILE__)).'');
include_once( BASEPATH . 'core/Common.php');
include_once( BASEPATH . 'database/DB.php');

class ActiveRecord
{
	
	private static $instances = array();

	public static function getInstance($params, $active_record_override = false) {
		if (!isset(self::$instances[$params])) {
			self::$instances[$params] =& DB($params);
		}

		return self::$instances[$params];
	}
}