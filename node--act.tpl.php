<?php

/**
 * @file node--act.tpl.php
 * Renders a festival act.
 *
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

<script type="text/javascript">var switchTo5x=false;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "73503b2b-4b43-4660-96c6-5358fabcd1fc"}); </script>

<div id = "share_this">
<span class='st_fblike_hcount' displayText='Facebook Like'></span>
<span class='st_twitter_hcount' st_via='' displayText='Tweet'></span>
<!--<span class='st_sharethis_hcount' displayText='ShareThis'></span>-->
</div> <!-- /#share_this -->

  <div class="content act_info"<?php print $content_attributes; ?>>
    <?php
      hide($content['comments']);
      hide($content['links']);
      hide($content['field_photo']);      
      print render($content);
    ?>
  </div>
  
  <div id = "show_sidebar">
  <?php
  	print render($content['field_photo']); 
  	print render(block_get_blocks_by_region('show_sidebar')); 
  ?>  
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
