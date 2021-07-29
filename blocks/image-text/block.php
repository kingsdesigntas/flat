<?php
$image = block_value('image');
$imagePlacement = block_value('image-placement');
$heading = block_value('heading');
$copy = block_value('copy');
$aspectRatio = block_value('aspect-ratio');
?>

<div class="image-and-text-block flow-space-lg alignwide <?php block_field('className');?>">
    <?php if ($imagePlacement == 'left'): ?>
    <div data-sal="slide-right" data-sal-duration="600" class="image-and-text-image"
        style="aspect-ratio: <?php echo $aspectRatio ? $aspectRatio : ''; ?>">
        <?=wp_get_attachment_image($image, 'full');?>
    </div>
    <?php endif;?>
    <div class="flow" style="--flow: 1rem;">
        <h3><?=$heading;?></h3>
        <?=$copy;?>
    </div>
    <?php if ($imagePlacement == 'right'): ?>
    <div data-sal="slide-left" data-sal-duration="600" class="image-and-text-image image-text-block-right"
        style="aspect-ratio: <?php echo $aspectRatio ? $aspectRatio : ''; ?>">
        <?=wp_get_attachment_image($image, 'full');?>
    </div>
    <?php endif;?>
</div>