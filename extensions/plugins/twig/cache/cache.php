<?php
/**
 * @package     Phproberto.Joomla-Twig
 * @subpackage  Plugin.Cache
 *
 * @copyright  Copyright (C) 2017 Roberto Segura López, Inc. All rights reserved.
 * @license    See COPYING.txt
 */

defined('_JEXEC') or die;

JLoader::import('twig.library');

use Phproberto\Joomla\Twig\Plugin\BasePlugin;
use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\LoaderInterface;

/**
 * Plugin to activate twig cache.
 *
 * @since  1.0.0
 */
class PlgTwigCache extends BasePlugin
{
	/**
	 * Triggered before environment has been loaded.
	 *
	 * @param   Environment      $environment  Loaded environment
	 * @param   LoaderInterface  $loader       Loader going to be sent to environment
	 * @param   array            $options      Options to initialise environment
	 *
	 * @return  void
	 */
	public function onTwigBeforeLoad(Environment $environment, LoaderInterface $loader, &$options)
	{
		$options['cache'] = \JFactory::getConfig()->get('cache_path', JPATH_CACHE) . '/twig';
	}
}
