<?php

// Section notre campagne

$camp_title       = get_field('camp_title');
$camp_content     = get_field('camp_content');
$camp_vds         = get_field('camp_vds');
 ?>

<div class="home__campain">
  <div class="home__campain--wraper">
      <h2><?= $camp_title; ?></h2>
      <?= $camp_content; ?>
      <div class="home__campain__vds--wraper">

          <?php if( have_rows('camp_vds') ):

           	// loop through the rows of data
              while ( have_rows('camp_vds') ) : the_row();
              $vds = get_sub_field('id_video_youtube');
              $btn = get_sub_field('btn_vids');
              ?>
              <div class="home__campain__vds">
                  <iframe src="https://www.youtube.com/embed/<?= $vds ?>&rel=0" width="350" height="450" frameborder="0" allowfullscreen></iframe>

                  <a href="<?= $btn['url']; ?>">
                    <button class="mdc-button mdc-button--raised mdc-ripple-upgraded">
                      <?= $btn['btn_txt']; ?>
                    </button>
                  </a>
              </div>
              <?php endwhile;

          endif; ?>

      </div>
    </div>
</div>
