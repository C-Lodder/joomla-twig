<?php
/**
 * @package     Phproberto.Joomla-Twig
 * @subpackage  Extension
 *
 * @copyright  Copyright (C) 2017 Roberto Segura López, Inc. All rights reserved.
 * @license    See COPYING.txt
 */

namespace Phproberto\Joomla\Twig\Extension;

defined('_JEXEC') or die;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * Extension to improve array handling.
 *
 * @since  __DEPLOY_VERSION__
 */
class JArray extends AbstractExtension
{
	/**
	 * Inject our filter.
	 *
	 * @return  array
	 */
	public function getFilters()
	{
		return array(
			new TwigFilter('to_array', array($this, 'toArray'))
		);
	}

	/**
	 * Cast variable to array.
	 *
	 * @param   mixed  $var  Var to cast
	 *
	 * @return  array
	 */
	public function toArray($var)
	{
		return (array) ($var);
	}

	/**
	 * Get the name of this extension.
	 *
	 * @return  string
	 */
	public function getName()
	{
		return 'jarray';
	}
}