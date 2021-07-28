<?php
$backgroundColor = block_value('background-color');
$textColor = block_value('text-color');
?>
<section class="alignfull flow-space-xl inner-content-section <?php block_field('className');?>"
    style="color: <?php echo $textColor ?>; background: <?php echo $backgroundColor ?>;<?php if ($useTopShape): ?>padding-top: 0;<?php endif;?><?php if ($useBottomShape): ?>padding-bottom: 0;<?php endif;?>">
    <div class="inner-content-section-container flow">
        <?php echo block_value('inner-content'); ?>
    </div>
</section>