<?php

/**
 * @file
 * Default theme implementation for field collection items.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) field collection item label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-field-collection-item
 *   - field-collection-item-{field_name}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

	<?php print render($content['field_slide_image']); ?>

	<?php if (isset($content['field_slide_caption'])): ?>
			<div class="caption"><?php print render($content['field_slide_caption']); ?></div>
	<?php endif; ?>

	<?php if ($has_leadin): ?>
		<div class="leadin">

			<?php if (isset($content['field_slide_title'])): ?>
				<h2 class="slide-title"><?php print render($content['field_slide_title']); ?></h2>
			<?php endif; ?>

			<?php if (isset($content['field_slide_description'])): ?>
					<div class="slide-description"><?php print render($content['field_slide_description']); ?></div>
			<?php endif; ?>

		</div>
	<?php endif; ?>

	<?php print render($content); ?>

</div>

<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>
    <?php
      print render($content);
    ?>
  </div>
</div>