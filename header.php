<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="row">
      <?php
      wp_nav_menu(array(
        "theme_location" => "side-menu"
      ));

       ?>
    </div>
