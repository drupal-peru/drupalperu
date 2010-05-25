<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block <?php print $block_classes; ?>">

  <?php if ($block->subject): ?>
    <h2><?php print $block->subject ?></h2>
  <?php endif;?>

  <div class="content">
    <?php print $block->content ?>
  </div>

  <?php if (user_access('administer blocks')) :?>
    <div class="edit"><?php print $edit_link; ?></div>
  <?php endif; ?>

</div>
