<?php
/**
 * @package     Phproberto.Joomla-Twig
 * @subpackage  Loader
 *
 * @copyright  Copyright (C) 2017 Roberto Segura López, Inc. All rights reserved.
 * @license    See COPYING.txt
 */

namespace Phproberto\Joomla\Twig\Loader;

defined('_JEXEC') or die;

/**
 * Joomla plugin file system loader.
 *
 * @since  1.0.0
 */
class PluginLoader extends ExtensionLoader
{
	/**
	 * Namespace applicable to this extension.
	 *
	 * @var  string
	 */
	protected $extensionNamespace = 'plugin';

	/**
	 * Get the paths to search for templates.
	 *
	 * @return  array
	 */
	protected function getTemplatePaths()
	{
		$paths = array();

		$tplOverrides = JPATH_THEMES . '/' . \JFactory::getApplication()->getTemplate() . '/html/plugins';

		if (is_dir($tplOverrides))
		{
			$paths[] = $tplOverrides;
		}

		$paths[] = JPATH_SITE . '/plugins';

		return $paths;
	}

	/**
	 * Parse a received extension name.
	 *
	 * @param   string  $name  Name of the template to search
	 *
	 * @return  string
	 */
	protected function parseExtensionName($name)
	{
		$nameParts = explode('/', $name);

		if (!isset($nameParts[2]))
		{
			return $name;
		}

		array_splice($nameParts, 2, 1, array($nameParts[2], 'tmpl'));

		return implode('/', $nameParts);
	}
}
