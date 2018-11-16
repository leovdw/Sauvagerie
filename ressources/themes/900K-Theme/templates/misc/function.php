<?php
echo "<pre>";
var_dump(get_template_directory());
echo "</pre>";

define('THEME_PATH',          get_template_directory()            );
define('TEMPLATE_PATH' ,      THEME_PATH .        '/templates'    );

define('THEME_URL',           get_template_directory_uri()        );
define('IMAGES_URL',          THEME_URL .         '/dist/images'  );
define('JS_URL',              THEME_URL .         '/dist/scripts' );
define('CSS_URL',             THEME_URL .         '/dist/styles'  );

$folders = array('core', 'posttype', 'functions')
foreach ($folders as $folder) {
  foreach ( glob( THEME_PATH . "/inc/$folder/*.php" ) as $file) {
    include_once $file;
  }
}
