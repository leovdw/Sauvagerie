<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Sauvagerie Agency</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include( TEMPLATE_PATH . '/misc/favicon.php' ) ;?>
  <?php wp_head() ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130587573-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-130587573-1');
  </script>

</head>
<body <?php body_class(); ?>>

  <header>
    <?php get_template_part('templates/header/header'); ?>
  </header>
  <div class="wraper 900k">
