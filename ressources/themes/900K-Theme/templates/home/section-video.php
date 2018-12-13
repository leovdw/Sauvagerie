<?php
// Section Video
$home_title       = get_field('home_title');
$home_content     = get_field('home_content');
$video_url        = get_field('video_url');
$home_btn         = get_field('home_btn');
$home_btn_second  = get_field('home_btn_second');

 ?>

<div class="home__video--section">
  <div class="home__video--wraper">
    <div class="home__video--content">
      <h1><?= $home_title; ?></h1>
      <?= $home_content; ?>
    </div>

    <div class="home__video">
      <iframe width="350" height="350" src="https://www.youtube-nocookie.com/embed/brfdSvQN3Sc?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <a href="<?= $home_btn['url']; ?>">
        <button class="mdc-button mdc-button--raised mdc-ripple-upgraded">
          <?= $home_btn['btn_txt']; ?>
        </button>
      </a>
      <a href="<?= $home_btn_second['url']; ?>">
        <button class="mdc-button mdc-button--raised mdc-ripple-upgraded">
          <?= $home_btn_second['btn_txt']; ?>
        </button>
      </a>
      <a href="<?= esc_url( get_permalink( get_page_by_title( 'Nos sources' ) ) ); ?>">
        <button class="mdc-button mdc-button--raised mdc-ripple-upgraded">
          Nos sources
        </button>
      </a>
    </div>
  </div>
  <div class="home__video--arrow"></div>
</div>
