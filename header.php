<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(); ?></title>
    <base href="https://claireb.promo-17.codeur.online/blog/">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
   
    <?php wp_head(); ?>
  </head>
  <body>
  <header>
    <h1><a href=""><img src="wp-content/themes/theme-vcb/assets/images/logo-vcb-claire-v1-c.jpg" alt="logo vcb" class="main-logo"></a></h1>
    <h2><?php bloginfo('description'); ?></h2>
    <div class="border-menu">
      <nav class="navbar navbar-expand-sm navbar-light" role="navigation">
        <div class="row">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <?php
                wp_nav_menu(array(
                  'theme_location' => 'primary',
                  'depth' => 2,
                  'container' => 'div',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id' => 'bs-example-navbar-collapse-1',
                  'menu_class' => 'nav navbar-nav',
                  'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                  'walker' => new WP_Bootstrap_Navwalker(),
                ));
              ?>
          </div>
        </nav>
      </div>
  </header>