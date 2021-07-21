<?php 
    $backgroundColor = block_value('background-color'); 
    $textColor = block_value('text-color');
    $useTopShape = block_value('use-top-shape');
    $useBottomShape = block_value('use-bottom-shape');
?>
<section class="alignfull flow-space-xl inner-content-section <?php block_field('className'); ?>"
    style="color: <?php echo $textColor ?>; background: <?php echo $backgroundColor ?>;<?php if($useTopShape): ?>padding-top: 0;<?php endif;?><?php if($useBottomShape): ?>padding-bottom: 0;<?php endif;?>">
    <?php if($useTopShape): ?>
    <svg class="section-top-shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
        <path fill="white" fill-opacity="1"
            d="M0,224L120,213.3C240,203,480,181,720,165.3C960,149,1200,139,1320,133.3L1440,128L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
        </path>
    </svg>
    <?php endif; ?>
    <div class="inner-content-section-container flow">
        <?php echo block_value('inner-content'); ?>
    </div>
    <?php if($useBottomShape): ?>
    <svg class="section-bottom-shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"
        preserveAspectRatio="none">
        <path fill="white" fill-opacity="1"
            d="M0,224L120,213.3C240,203,480,181,720,165.3C960,149,1200,139,1320,133.3L1440,128L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
        </path>
    </svg>
    <?php endif; ?>
</section>