<?php
/**
 * @package StyledCustomHTML Module for Joomla! 2.5
 * @version $Id: 1.0 
 * @author RBA DESIGN INTERNATIONAL LLC
 * @Copyright (C) 2012 - RBA DESIGN INTERNATIONAL LLC
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/

defined( '_JEXEC' ) or die( 'Restricted access' );
		$document = &JFactory::getDocument();
		$document->addStyleSheet('modules/mod_styledcustomhtml/css/default.css' );

$class_sfx	= $params->get( 'class_sfx', "" );
$style = array(
	"display"	=> $params->get( 'display', "" ),
	"position"	=> $params->get( 'position', "" ),
	"left"		=> $params->get( 'left', "" ),
	"top"		=> $params->get( 'top', "" ),
	"right"		=> $params->get( 'right', "" ),
	"bottom"	=> $params->get( 'bottom', "" ),
	"width"		=> $params->get( 'width', "" ),
	"height"	=> $params->get( 'height', "" ),
	"border"	=> $params->get( 'border', "" )
);

$customHtml	= $params->get( 'customHtml', "" )

?>
<div style="position:relative;">
<div class="<?php echo 'styledCustomHtml' . $class_sfx; ?>" style="<?php foreach($style as $key => $value) if($value!="") echo $key.':'.$value.';' ; ?>">
<?php echo $customHtml; ?>
</div>
</div>