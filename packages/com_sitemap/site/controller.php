<?php

/**
* Qlue Sitemap
*
* @author Rodrigo Emygdio da Silva
* @package UaigoSitemap
* @license GNU/GPL
* @version 1.0.0
*
* This component gathers information from various Joomla Components and 
* compiles them into a sitemap, supporting both an HTML view and an XML 
* format for search engines.
*
*/

defined('_JEXEC') or die('Restricted Access');

JLoader::import('joomla.application.component.controller');

class SitemapController extends JControllerLegacy {
	public function display($cachable = false, $urlparams = false) {
		$view = JRequest::getCmd('view', 'default');

		JRequest::setVar('view', $view);
		parent::display($cachable);
	}
}

?>