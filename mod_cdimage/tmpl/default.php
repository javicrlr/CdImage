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
?>
<nav class="cdimagelicont cdimagelicont<?php echo $module->id ?> <?php echo $moduleclass_sfx ?>">
	<ul>        
	<?php 
		$z=0;
		foreach ($list as $item) {
			?>
            <?php if (($list[$z]["cdimagetitle"]) || ($list[$z]["cdimagetext"]) || ($list[$z]["cdimageimage"]) ) { ?>
            <li class="cdimageli cdcolumns-md-<?php echo $list["cdimagecolumnspc"];?> cdcolumns-sm-<?php echo $list["cdimagecolumnstablet"];?>  cdcolumns-xs-<?php echo $list["cdimagecolumnsmobile"];;?>" id="cdimagelicont<?php echo $z; ?>">
                	<div class="cdimagedivli" >
                    	<img src="<?php echo $list[$z]["cdimageimage"]; ?>" class= "cdimage-center <?php if ($list["cdimagecircle"] == 1) {?>cdimage-circle<?php }?> " />
                    </div>
                    <a href="<?php echo $list[$z]["cdimageurllink"]; ?>">
                        <div class="cdimagecover cdimagecover<?php echo $module->id ?> <?php if ($list["cdimagecircle"] == 1) {?> cdimage-circle <?php }?>" >
                            <div class="cdimagetitle cdimagetitle<?php echo $module->id ?>"><?php echo $list[$z]["cdimagetitle"]; ?></div>
                            <?php if ($list[$z]["cdimageiconselect"]) { ?>
                            <div class="cdimageicon cdimageicon<?php echo $module->id ?>"><img src="/modules/mod_cdimage/img/<?php echo $list[$z]["cdimageiconselect"]; ?>" width="<?php echo $list["cdimageiconwidth"];?>" height="auto" /></div>
                            <?php }?>
                            <div class="cdimagetext cdimagetext<?php echo $module->id ?>"><?php echo $list[$z]["cdimagetext"]; ?></div>
                        </div>
                    </a>
            </li>
            <?php }?>
            <?php
			//Incrementamos en 1 la variable contador $z 
			$z++;
		}
		?>
	</ul>
</nav>  
