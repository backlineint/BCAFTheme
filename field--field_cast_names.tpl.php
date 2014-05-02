<?php
// $Id: field.tpl.php,v 1.13 2010/03/26 17:14:45 dries Exp $

/**
 * @file field--field_cast_names.tpl.php
 * Comma delimits cast member names.
 */
?>

<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if (!$label_hidden): ?>
    <div class="field-label"<?php print $title_attributes; ?>><?php print $label ?>:&nbsp;</div>
  <?php endif; ?>
  <div class="field-items"<?php print $content_attributes; ?>>
    <?php foreach ($items as $delta => $item): ?>
      <div class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>>
      <p class = "inline">
      <?php print render($item);
      if ($delta < (count($items) - 1)) {
            	print ',&nbsp;'; 
          	}
      ?>    	
      </p>
      </div>
    <?php endforeach; ?>
  </div>
</div>
