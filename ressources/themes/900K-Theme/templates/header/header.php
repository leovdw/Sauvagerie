<?php
  $args = array(
      'theme_location' => 'header', // nom du slug
  );
?>

<div class="main-menu">
  <!-- <div class="main-menu__logo">
    <img src="<?php // IMAGES_URL ?>" alt="Logo">
  </div> -->
  <?php //wp_nav_menu($args); ?>
  <!-- <div class="main-menu__responsive-toggler">

  </div> -->
  <div class="burger-menu">
    <div class="burger-click-region">
      <span class="burger-menu-piece"></span>
      <span class="burger-menu-piece"></span>
      <span class="burger-menu-piece"></span>
    </div>
  </div>
  <div class="burger-menu-sidebar">
    <?php wp_nav_menu($args); ?>

    <a href="<?= get_permalink( get_page_by_title( 'Contact' ) )?>">
      <button class="mdc-button mdc-button--raised mdc-ripple-upgraded">
        Contact
      </button>
    </a>
  </div>
</div>
