<?php

// Section notre campagne

$camp_title       = get_field('camp_title');
$camp_content     = get_field('camp_content');
$camp_vds         = get_field('camp_vds');
 ?>

<div class="home__campain">
    <h2><?= $camp_title; ?></h2>
    <?= $camp_content; ?>
    <div class="home__campain__vds--wraper">

        <?php if( have_rows('camp_vds') ):

         	// loop through the rows of data
            while ( have_rows('camp_vds') ) : the_row(); ?>
            <div class="home__campain__vds">
                <iframe src="https://www.youtube.com/embed/<?= the_sub_field('id_video_youtube'); ?>" width="350" height="450" frameborder="0"></iframe>
            </div>
            <?php endwhile;

        endif; ?>

    </div>
</div>
