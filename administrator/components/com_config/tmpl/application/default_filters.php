<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_config
 *
 * @copyright   (C) 2013 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

use Joomla\CMS\Language\Text;
use Joomla\CMS\Layout\LayoutHelper;

defined('_JEXEC') or die;

/** @var \Joomla\Component\Config\Administrator\View\Application\HtmlView $this */

$this->name = Text::_('COM_CONFIG_TEXT_FILTER_SETTINGS');
$this->description = '';
$this->fieldsname = 'filters';
$this->formclass = 'options-form';

echo LayoutHelper::render('joomla.content.text_filters', $this);
