<?php
  $facebook    = get_field('facebook', 'option');
  $twitter     = get_field('twitter', 'option');
  $in          = get_field('in', 'option');
 ?>
<div class="home">
  <div class="home__head">
    <div class="home--logo">
      <img src="<?= IMAGES_URL; ?>/logo_blanc.png" alt="Logo_aavi">
      <h2>AAVI</h2>
    </div>
    <div class="home--video--wraper">
      <h2>Stop aux handicapés !</h2>
      <div class="home--video">

      </div>
      <p>
        Les handicapés nous pourrissent la vie au travail. Agissons dès aujourd’hui ! <br> <br>

        Notre association est là pour partager votre <br>
        expérience et vous proposer des solutions.<br><br>

        N’attendez plus rejoignez-nous !
      </p>
      <div class="home--video--arrow"></div>
    </div>
  </div>
  <div class="home--socials">
    <h3>Rejoins-nous !</h3>
    <div class="home--socials--newsletter">
      <input type="text" name="" placeholder="Votre adresse e-mail">
      <a href="#" class="home--socials--newsletter--sub mdc-button mdc-button--raised mdc-ripple-upgraded">S'inscrire</a>
    </div>
    <h4>Partager</h4>
    <div class="home--socials--icons">
      <a href="<?= $facebook; ?>" target="_blank"><img src="<?= IMAGES_URL ?>/facebook.png" alt="facebook_icon"> </a>
      <a href="<?= $twitter; ?>" target="_blank"><img src="<?= IMAGES_URL ?>/twiter.png" alt="twiter"> </a>
      <a href="<?= $in; ?>" target="_blank"><img src="<?= IMAGES_URL ?>/in.png" alt="in"> </a>
    </div>
  </div>
</div>
