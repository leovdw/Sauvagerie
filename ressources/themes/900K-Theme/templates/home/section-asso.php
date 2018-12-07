<?php
// Section Association

$asso_content     = get_field('asso_content');
$asso_img         = get_field('asso_img');
$home_asso        = get_field('home_asso');
 ?>

<div class="home__asso">
  <div class="home__asso--content">
    <?= $asso_content; ?>
    <a href="<?= $home_asso['url']; ?>">
      <button class="mdc-button mdc-button--raised mdc-ripple-upgraded">
        <?= $home_asso['txt']; ?>
      </button>
    </a>
  </div>

  <div class="home__asso--image" style="background-image: url(<?= $asso_img; ?>)">

  </div>
</div>
