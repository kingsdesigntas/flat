<?php $image = block_value('image') ?>
<div class="user-card-block <?php block_field('className'); ?>">
    <div>
        <?php echo wp_get_attachment_image($image, 'full') ?>
    </div>
    <div class="flow" style="--flow: 1.5rem;">
        <h3><?php block_field('name')?></h3>
        <p><?php block_field('role')?></p>
        <p><?php block_field('description')?></p>
    </div>
</div>