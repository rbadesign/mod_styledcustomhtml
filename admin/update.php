<?php
/**
 * @package StyledCustomHTML Module for Joomla! 2.5
 * @version $Id: 1.0 
 * @author RBA DESIGN INTERNATIONAL LLC
 * @Copyright (C) 2012 - RBA DESIGN INTERNATIONAL LLC
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/
defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');

class JFormFieldUpdate extends JFormField {
	protected $type = 'Update';

	protected function getInput() {
		return '<div id="styledcustomhtml_updates"></div>';
	}
}

/* eof */