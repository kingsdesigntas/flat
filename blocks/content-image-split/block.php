<?php
$image = block_value('image');
if (block_value('placement') == 'left') {
    $placement = 'left';
}
if (block_value('placement') == 'right') {
    $placement = 'right';
}
?>

<div
    class="content-image-split-block split-block-<?php echo $placement ?> flow-space-lg alignfull <?php block_field('className');?>">
    <?php if ($placement == 'left'): ?>
    <div class="content-image-split-image">
        <?=wp_get_attachment_image($image, 'full');?>
    </div>
    <?php endif;?>
    <div class="content-image-split-content flow" style="--flow: 1rem;">
        <div>
            <?php block_field('content')?>
            <p>Placement is : <?php echo $placement ?></p>
        </div>
    </div>
    <?php if ($placement == 'right'): ?>
    <div class="content-image-split-image">
        <?=wp_get_attachment_image($image, 'full');?>
    </div>
    <?php endif;?>
</div>