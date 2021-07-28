<?php $image = block_value('image')?>
<?php $heading = block_value('heading')?>
<?php $showContent = block_value('show-content')?>
<?php $showHeading = block_value('show-heading')?>
<?php $showOverlay = block_value('show-overlay')?>
<?php $showCopy = block_value('show-copy')?>
<?php $showButton = block_value('show-button')?>

<div class="banner-block first-block-negative-margin alignfull flow-space-lg <?php block_field('className');?>"
    style="--focus: <?php block_field('focal-point')?>;min-height: <?php block_field('minimum-height')?>">
    <?php echo wp_get_attachment_image($image, 'full'); ?>
    <?php if ($showOverlay): ?>
    <div class="banner-block-overlay" style="background: <?php echo block_value('overlay-color'); ?>"></div>
    <?php endif;?>
    <?php if ($showContent): ?>
    <div class="banner-block-content flow"
        style="--flow:1.5rem;text-align: <?php block_field('content-text-alignment');?>">
        <?php switch (block_value('heading-level')) {
    case 1:
        if ($showHeading):
        ?><h1 style="color:<?php block_field('heading-color');?>"><?php echo $heading ?></h1>
        <?php endif;
        break;
    case 2:
        if ($showHeading):
        ?><h2 style="color:<?php block_field('heading-color');?>"><?php echo $heading ?></h2>
        <?php endif;
        break;
    case 3:
        if ($showHeading):
        ?><h3 style="color:<?php block_field('heading-color');?>"><?php echo $heading ?></h3>
        <?php endif;
    default:
        if ($showHeading):
        ?><h2 style=" color:<?php block_field('heading-color');?>"><?php echo $heading ?></h2>
        <?php endif;
};
if ($showCopy): ?>
        <div style="color:<?php block_field('copy-color');?>"><?php block_field('copy');?></div>
        <?php endif;
if ($showButton): ?>
        <a class="btn-secondary" href="<?php block_field('button-url');?>"><?php block_field('button-text');?></a>
        <?php endif;?>
    </div>
    <?php endif;?>
</div>