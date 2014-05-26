<?php

/**
* Uaigo! Sitemap
*
* @author Rodrigo Emygdio da Silva
* @package UaigoSitemap
* @license GNU/GPL
* @version 1.0
*
* This component gathers information from various Joomla Components and 
* compiles them into a sitemap, supporting both an HTML view and an XML 
* format for search engines.
*
*/

defined('_JEXEC') or die('Restricted Access');

class SitemapTableSitemap extends JTable {

	public function __construct(&$db) {
		parent::__construct('#__sitemap_sitemaps', 'id', $db);
	}

}

?>