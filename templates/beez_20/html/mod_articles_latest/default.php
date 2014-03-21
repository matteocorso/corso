<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_latest
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<?php /*JLoader::register('JHtmlString', JPATH_LIBRARIES .'/joomla/html/html/string.php');*/ ?>

<ul class="latestnews<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) :  ?>
	
	<li><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></li>
		<p><?php echo JHtml::_('string.truncate', strip_tags($item->introtext), 53); ?></p>
	
	<?php /*
	<li>
		<a href="<?php echo $item->link; ?>">
			<?php echo $item->title; ?></a>
		
	</li>*/
	?>
<?php endforeach; ?>
</ul>
