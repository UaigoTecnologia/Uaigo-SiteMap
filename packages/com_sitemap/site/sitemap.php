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

$controller	= JControllerLegacy::getInstance('Sitemap');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();


?>