<?php
// Section reasons

$resons_title     = get_field('resons_title');
$raison           = get_field('raison');
?>


<div class="home__reasons">
  <h2><?= $resons_title; ?></h2>
  <div class="home__reasons--wraper">
  <?php if( have_rows('raison') ):
    $i = 1;
    // loop through the rows of data
      while ( have_rows('raison') ) : the_row();
      $reasons_title    = get_sub_field('reasons_title');
      $reasons_content  = get_sub_field('reasons_content');
      ?>

      <?php if ($i%2 == 1){ ?>
        <div class="home__reasons--simple" style="--key:'<?= $i; ?>'">
          <h4><?= $reasons_title; ?></h4>
          <?= $reasons_content; ?>
        </div>
      <?php }else { ?>
        <div class="home__reasons--simple odd" style="--key:' <?= $i; ?>'">
          <h4><?= $reasons_title; ?></h4>
          <?= $reasons_content; ?>
        </div>
      <?php };
      $i++;
      ?>
      <?php endwhile;
  endif; ?>
  </div>
</div>
