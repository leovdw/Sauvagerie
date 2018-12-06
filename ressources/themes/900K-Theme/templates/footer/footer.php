<?php
  $args = array(
      'theme_location' => 'footer', // nom du slug
  );
?>
<div class="footer">
    <div class="footer--logo">
      <img src="<?= IMAGES_URL; ?>/logo_blanc_base.png" alt="Logo_aavi">
    </div>
    <?php wp_nav_menu($args); ?>
    <div class="footer--socials">
      <h4>Nous suivre</h4>
      <div class="footer--socials--icons">
        <a href="#"><img src="<?= IMAGES_URL ?>/facebook.png" alt="facebook_icon"> </a>
        <a href="#"><img src="<?= IMAGES_URL ?>/twiter.png" alt="twiter"> </a>
        <a href="#"><img src="<?= IMAGES_URL ?>/in.png" alt="in"> </a>
      </div>
      <a href="#">Contactez-nous</a>
    </div>

</div>
