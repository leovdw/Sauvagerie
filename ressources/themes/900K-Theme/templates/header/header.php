<?php
  $args = array(
      'theme_location' => 'header', // nom du slug
  );
?>

<div class="main-menu">
  <div class="main-menu__dstp">
    <div class="main-menu__dstp--logo">
      <img src="<?= IMAGES_URL; ?>/aavi_logo.png" alt="Logo_aavi">
    </div>

    <?php wp_nav_menu($args); ?>
  </div>
  <div class="burger-menu">
    <div class="burger-click-region">
      <span class="burger-menu-piece"></span>
      <span class="burger-menu-piece"></span>
      <span class="burger-menu-piece"></span>
    </div>
  </div>
  <div class="burger-menu-sidebar">
    <?php wp_nav_menu($args); ?>

    <a href="mailto:sauvagerieagency@gmail.com">
      <button class="mdc-button mdc-button--raised mdc-ripple-upgraded">
        Contact
      </button>
    </a>
  </div>
</div>
