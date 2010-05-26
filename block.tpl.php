<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block"><div class="block-inner">

  <?php if ($block->subject): ?>
    <h2 class="title"><?php print $block->subject ?></h2>
  <?php endif;?>

  <div class="content">
    <?php print $block->content ?>
  </div>

  <?php if (user_access('administer blocks')) :?>
    <div class="edit"><?php print $edit_link; ?></div>
  <?php endif; ?>

</div></div>
