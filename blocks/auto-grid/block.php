<?php $blockWidth = block_value('block-width'); ?>
<?php $itemWidth = block_value('item-width') ?>
<?php $gap = block_value('gap') ?>
<?php $fit = block_value('fit') ?>

<div class="auto-grid-block flow-space-lg <?php block_field('className'); ?> align<?php echo $blockWidth ?>"
    style="--flow: 1.5rem;grid-template-columns: repeat(auto-<?php echo $fit ?>, minmax(<?php echo $itemWidth ?>,1fr));gap:<?php echo $gap ?>">
    <?php echo block_value('inner-blocks') ?>
</div>