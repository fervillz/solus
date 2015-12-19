<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Solus
 */
?>

<div id="tertiary" class="footer-widget-area">

<?php for ($i=1; $i <=3; $i++) :?>
	<div class="block footer-widget-<?php echo $i ?>">
		<?php if (! dynamic_sidebar( "footer-widget-".$i )): ?>
			<h3 class="footer-widget-title">Widget Title</h3>
			Add Some <a href="<?php echo site_url(); ?>/wp-admin/widgets.php" target="_blank"><b>widgets</b></a>
		<?php endif ?>
	</div><!-- /footer-widget-1 -->
<?php endfor; ?>

</div><!-- #secondary -->
