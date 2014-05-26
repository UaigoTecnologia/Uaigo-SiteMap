<?php

/**
* Uaigo! Sitemap
*
* @author Rodrigo Emygdio da Silva 
* @package UaigoSitemap
* @license GNU/GPL
* @version 0.0.0
*
* This component gathers information from various Joomla Components and 
* compiles them into a sitemap, supporting both an HTML view and an XML 
* format for search engines.
*
*/

defined('_JEXEC') or die;
JLoader::register('SitemapHelper', JPATH_COMPONENT . DS . 'helpers' . DS . 'helper.php');

if (!JFactory::getUser()->authorise('core.manage', 'com_sitemap'))
{
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

$controller	= JControllerLegacy::getInstance('Sitemap');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();

?>