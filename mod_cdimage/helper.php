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
abstract class mod_cdimageHelper
{	
	public function getList(&$params, $module)
	{
		$document = JFactory::getDocument();
		$results = array();
		$results["cdimageiddiv"] = htmlspecialchars($params->get('cdimageiddiv'));
		$results["cdimagecolumnspc"] = htmlspecialchars($params->get('cdimagecolumnspc'));
		$results["cdimagecolumnstablet"] = htmlspecialchars($params->get('cdimagecolumnstablet'));
		$results["cdimagecolumnsmobile"] = htmlspecialchars($params->get('cdimagecolumnsmobile'));
		$results["cdimagetitlefontsize"] = htmlspecialchars($params->get('cdimagetitlefontsize'));
		$results["cdimagetitlecolor"] = htmlspecialchars($params->get('cdimagetitlecolor'));
		$results["cdimageselecttype"] = htmlspecialchars($params->get('cdimageselecttype'));
		$results["cdimagecircle"] = htmlspecialchars($params->get('cdimagecircle'));
		$results["cdimagetapcolor"] = htmlspecialchars($params->get('cdimagetapcolor'));
		$results["cdimageiconwidth"] = htmlspecialchars($params->get('cdimageiconwidth'));
		$results["cdimagepfontsize"] = htmlspecialchars($params->get('cdimagepfontsize'));
		$results["cdimagepcolor"] = htmlspecialchars($params->get('cdimagepcolor'));
		$results["cdimagetapopacity"] = htmlspecialchars($params->get('cdimagetapopacity'));
		$results["cdimageanimateicons"] = htmlspecialchars($params->get('cdimageanimateicons'));
		$results["cdimageanimatedirection"] = htmlspecialchars($params->get('cdimageanimatedirection'));
		$datos = json_decode($params->get('show_image_cd'),true);
		foreach ($datos as $key => $val) {
			$i=0;
			if ($key == 'cdimageurllink'){
				foreach ($val as $key => $subval) {
					$cdvalimage = htmlspecialchars($subval); 
					$results[$i]["cdimageurllink"] = $cdvalimage;
					$i++;
				}
			}
			if ($key == 'cdimageiconselect'){
				foreach ($val as $key => $subval) {
					$cdvalimage = htmlspecialchars($subval); 
					$results[$i]["cdimageiconselect"] = $cdvalimage;
					$i++;
				}
			}
			if ($key == 'cdimageimage'){
				foreach ($val as $key => $subval) {
					$cdvalimage = htmlspecialchars($subval); 
					$results[$i]["cdimageimage"] = $cdvalimage;
					$i++;
				}
			}
			if ($key == 'cdimagetitle'){
				foreach ($val as $key => $subval) {
					$cdvaltitle = htmlspecialchars($subval); 
					$results[$i]["cdimagetitle"] = $cdvaltitle;
					$i++;
				}
			}
			if ($key == 'cdimagetext'){
				foreach ($val as $key => $subval) {
					$cdvaltext = htmlspecialchars($subval); 
					$results[$i]["cdimagetext"] = $cdvaltext;
					$i++;
				}
			}
		}
		$cdimageconfig[$module->id]  = '(function($){$(document).ready(function(){$(".cdimagelicont'.$module->id.'").cdimagejse("'.$module->id.'", "'.$results["cdimageanimateicons"].'", "'.$results["cdimageanimatedirection"].'", "'.$results["cdimageiddiv"].'","'.$results["cdimagetitlefontsize"].'", "'.$results["cdimagetitlecolor"].'", "'.$results["cdimageselecttype"].'", "'.$results["cdimagetapcolor"].'", "'.$results["cdimagepfontsize"].'", "'.$results["cdimagepcolor"].'", "'.$results["cdimagetapopacity"].'");});
		})(jQuery);';
		foreach ($cdimageconfig as $item) {
			$document->addScriptDeclaration($item);
		}
		return $results;
	}
}