<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_users
 *
 * @copyright   (C) 2011 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

/** @var \Joomla\Component\Users\Administrator\View\Notes\HtmlView $this */
?>
<div class="unotes">
    <h1><?php echo Text::sprintf('COM_USERS_NOTES_FOR_USER', $this->user->name, $this->user->id); ?></h1>
<?php if (empty($this->items)) : ?>
    <?php echo Text::_('COM_USERS_NO_NOTES'); ?>
<?php else : ?>
    <ul class="alternating">
    <?php foreach ($this->items as $item) : ?>
        <li>
            <div class="fltlft utitle">
                <?php if ($item->subject) : ?>
                    <h4><?php echo Text::sprintf('COM_USERS_NOTE_N_SUBJECT', (int) $item->id, $this->escape($item->subject)); ?></h4>
                <?php else : ?>
                    <h4><?php echo Text::sprintf('COM_USERS_NOTE_N_SUBJECT', (int) $item->id, Text::_('COM_USERS_EMPTY_SUBJECT')); ?></h4>
                <?php endif; ?>
            </div>

            <div class="fltlft utitle">
                <?php echo HTMLHelper::_('date', $item->created_time, Text::_('DATE_FORMAT_LC2')); ?>
            </div>

            <?php $category_image = $item->cparams->get('image'); ?>

            <?php if ($item->catid && isset($category_image)) : ?>
            <div class="fltlft utitle">
                <?php echo HTMLHelper::_('users.image', $category_image); ?>
            </div>

            <div class="fltlft utitle">
                <em><?php echo $this->escape($item->category_title); ?></em>
            </div>
            <?php endif; ?>

            <div class="clr"></div>
            <div class="ubody">
                <?php echo (isset($item->body) ? HTMLHelper::_('content.prepare', $item->body) : ''); ?>
            </div>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>
</div>
