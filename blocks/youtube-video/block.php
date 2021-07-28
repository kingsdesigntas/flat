<?php
$video = block_value('video');
$title = block_value('title');
$aspect = block_value('aspect-ratio');
?>
<div data-sal="slide-up" data-sal-duration="600" class="youtube-block <?php block_field('className');?>">
    <iframe title="<?php echo $title ?>" style="aspect-ratio:<?php echo $aspect ?>"
        src="https://www.youtube-nocookie.com/embed/<?php echo $video ?>" title="<?php echo $title ?>"
        allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>