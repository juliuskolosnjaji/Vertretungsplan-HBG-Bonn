<?php
/**
 * HBGLehrerSlider1  Module Entry Point
 *
 * @package    HBGLehrerSlider1
 * @subpackage Modules
 * @license    GNU/GPL, see LICENSE.php
 * mod_HBGLehrerSlider1  is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */

// No direct access
defined('_JEXEC') or die;
// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$test = 'bla';

$vertretungheute = modvertretungenhbghelper::getvertretungen0hbg($params);

$vertretungmorgen = modvertretungenhbghelper::getvertretungen1hbg($params);

$vertretungzweitage = modvertretungenhbghelper::getvertretungen2hbg($params);

$vertretungdreitage = modvertretungenhbghelper::getvertretungen3hbg($params);

$vertretungviertage = modvertretungenhbghelper::getvertretungen4hbg($params);

require JModuleHelper::getLayoutPath('mod_hbglehrerslider1');