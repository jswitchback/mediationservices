<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<div class="intro-wrapper">
		<p class="intro newsletter-intro">Found out more about us through our newsletter.</p>
		<a class="btn btn-primary mfp-inline-init" href="#newsletter-modal">Sign up!</a>
	</div>
	<div id="newsletter-modal" class="mfp-hide">
	  <?php print render($title_prefix); ?>
	  <?php if ($title): ?>
	    <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
	  <?php endif; ?>
	  <?php print render($title_suffix); ?>

	  <?php print $content; ?>
	</div>
</div><!-- /.block -->