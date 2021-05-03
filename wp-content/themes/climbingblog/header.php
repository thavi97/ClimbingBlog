<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Climbing Blog</title>
    <?php wp_head();?>
  </head>
  <body <?php body_class();?>>

<header class="sticky-top">
  <div class="container">
    <?php
      wp_nav_menu(
        array(
          'theme_location' => 'top-menu',
          'menu_class' => 'navigation',
        )
      );
    ?>
  </div>
</header>
