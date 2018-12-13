<?php
$facebook         = get_field('facebook', 'option');
$twitter          = get_field('twitter', 'option');
$in               = get_field('in', 'option');


 ?>
<div class="home">

  <?php get_template_part('templates/home/section-video'); ?>

  <?php get_template_part('templates/home/section-asso'); ?>

  <?php get_template_part('templates/home/section-campain'); ?>

  <?php get_template_part('templates/home/section-reasons'); ?>

  <?php get_template_part('templates/home/newletter'); ?>

</div>
