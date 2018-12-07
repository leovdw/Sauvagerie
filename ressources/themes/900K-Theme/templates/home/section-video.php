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
      <iframe src="<?= $video_url; ?>" width="350" height="350" frameborder="0"></iframe>
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
    </div>
  </div>
  <div class="home__video--arrow"></div>
</div>
