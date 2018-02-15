<?php
/* --------------------------------------------------------
 * Show Image CD1 for Joomla 3.3+
 * --------------------------------------------------------
 * Copyright (C) 2014 Javier Cruz Lora. All Rights Reserved.
 * @license - GNU/GPL, http://www.gnu.org/licenses/gpl.html
 * Author: Javier Cruz Lora
 * Websites: http://www.templatef5.com
  ---------------------------------------------------------
 */
 
defined('_JEXEC') or die;
JLoader::register('mod_cdimageHelper', dirname(__FILE__).'/helper.php');
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::base() . 'modules/mod_cdimage/css/cdimage.css');
$document->addScript(JURI::root(true) ."/modules/mod_cdimage/js/waypoints.js");
$document->addScript(JURI::root(true) ."/modules/mod_cdimage/js/cdimagejs.min.js");
require_once 'inc/generatecss.php';
$list = mod_cdimageHelper::getList($params, $module);
if (isset($list[0])) {
	$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
	require JModuleHelper::getLayoutPath('mod_cdimage', $params->get('layout', 'default'));
}