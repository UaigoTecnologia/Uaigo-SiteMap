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



class SitemapViewSitemap extends JViewLegacy {
	protected $item 		= null;
	protected $pagination           = null;
	protected $state 		= null;
        protected $on_new_site_map      = null;

        public function display($tpl = null) {
		$this->item = $this->get('Item');
		$this->form = $this->get('Form');
		$this->state = $this->get('State');

		$dispatcher = JDispatcher::getInstance();

		$this->user = JFactory::getUser();

		if (count($errors = $this->get('Errors'))) {
			JError::raiseError(500, implode("\n", $errors));

			return false;
		}

		JPluginHelper::importPlugin('qmap');
		$results = $dispatcher->trigger('onNewSitemap', array('com_sitemap.sitemap'));
		$this->on_new_site_map = $results;

		

		$this->addToolbar();

		parent::display($tpl);

	}

	public function addToolbar() {

		JToolBarHelper::title(JText::_('COM_SITEMAP_EDIT_PAGE'), 'article-add.png');

		JToolBarHelper::apply('sitemap.apply');
		JToolBarHelper::save('sitemap.save');
		JToolBarHelper::divider();
		JToolBarHelper::cancel('sitemap.cancel');

	}
}

?>