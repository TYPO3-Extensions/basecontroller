<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2008 Francois Suter (Cobweb) <typo3@cobweb.ch>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
*
* $Id: class.tx_basecontroller_base.php 34 2008-11-26 15:48:52Z fsuter $
***************************************************************/

require_once(PATH_t3lib.'class.t3lib_svbase.php');
//require_once(t3lib_extMgm::extPath('basecontroller', 'interfaces/class.tx_basecontroller_service.php'));

/**
 * Base controller service. All Controller services should inherit from this class
 *
 * @author	Francois Suter (Cobweb) <typo3@cobweb.ch>
 * @package	TYPO3
 * @subpackage	tx_basecontroller
 */
//abstract class tx_basecontroller_base extends t3lib_svbase implements tx_basecontroller_service {
abstract class tx_basecontroller_base extends t3lib_svbase {
}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/tx_basecontroller/class.tx_basecontroller_base.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/tx_basecontroller/class.tx_basecontroller_base.php']);
}
?>