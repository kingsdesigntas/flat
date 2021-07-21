<?php 
    $backgroundColor = block_value('background-color'); 
    $textColor = block_value('text-color');
?>
<section class="alignfull flow-space-xl flow inner-content-section <?php block_field('className'); ?>"
    style="color: <?php echo $textColor ?>; background: <?php echo $backgroundColor ?>">
    <?php echo block_value('inner-content'); ?>
</section>