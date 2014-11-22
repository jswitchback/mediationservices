<?php
/**
 * Mothership template is the source
 */
?>
<?php
if ($classes) {
  $classes = ' class="'. $classes . ' "';
} 
?>

<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- block -->
<?php } ?>
<div <?php print $id_block . $classes .  $attributes; ?>>

	<?php print render($title_prefix); ?>
  <?php if ($block->subject): ?>
    <h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
  <?php endif;?>
 	<?php print render($title_suffix); ?>

  <?php print $mothership_poorthemers_helper;  ?>
	<div class="intro-wrapper">
		<p class="intro newsletter-intro">Find out more about us through our newsletter.</p>
		<a class="btn btn-primary mfp-inline-init" href="#newsletter-modal" data-modal-class="mfp-newsletter">Sign up!</a>
	</div>

	<div id="newsletter-modal" class="mfp-hide">

	  <h2 class="modal-title">Newsletter Signup</h2>

	  <?php if (!theme_get_setting('mothership_classes_block_contentdiv') AND $block->module == "block"): ?>
	  <div <?php print $content_attributes; ?>>
	  <?php endif ?>

	  <?php print $content ?>

	  <?php if (!theme_get_setting('mothership_classes_block_contentdiv') AND $block->module == "block"): ?>
	  </div>
	  <?php endif ?>
	</div>
</div>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- /block -->
<?php } ?>