<?php
  $args = array(
      'theme_location' => 'footer', // nom du slug
  );

  $facebook    = get_field('facebook', 'option');
  $twitter     = get_field('twitter', 'option');
  $in          = get_field('in', 'option');
?>
<div class="footer">
    <div class="footer--logo">
      <img src="<?= IMAGES_URL; ?>/logo_blanc_base.png" alt="Logo_aavi">
    </div>
    <?php wp_nav_menu($args); ?>
    <div class="footer--socials">
      <h4>Nous suivre</h4>
      <div class="footer--socials--icons">
        <a href="<?= $facebook; ?>" target="_blank" ><img src="<?= IMAGES_URL ?>/facebook.png" alt="facebook_icon"> </a>
        <a href="<?= $twitter; ?>" target="_blank"><img src="<?= IMAGES_URL ?>/twiter.png" alt="twiter"> </a>
        <a href="<?= $in; ?>" target="_blank"><img src="<?= IMAGES_URL ?>/in.png" alt="in"> </a>
      </div>
      <a href="mailto:sauvagerieagency@gmail.com">Contactez-nous</a>
    </div>

</div>
