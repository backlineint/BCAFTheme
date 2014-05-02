<?php

/**
 * @file node--workshop.tpl.php
 * Display detail for a workshop
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($display_submitted): ?>
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      print render($content['field_photo']); 
      print render($content['field_date_and_time']);
      print render($content['field_venue']);      
      print render($content['field_ticket_price']);
      hide($content['field_sold_out']);
      hide($content['field_ticket_link']);
      ?>
      <?php if (in_array("Yes", $field_sold_out[0])): ?>
      	<h2 class = "field-name-field-ticket-link">Sold Out</h2> 
      <?php else: ?>
		<?php print render($content['field_ticket_link']); ?>       
      <?php endif; ?> 
      <?php
      //print render($content['field_photo']);
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
