<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php the_title(); ?></title>
    <base href="https://claireb.promo-17.codeur.online/blog/">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="wrap">
      <header>
        <h1><a><?php bloginfo('name'); ?></a></h1>
        <h2><?php bloginfo('description'); ?></h2>
      
 <nav class="navbar navbar-expand-sm navbar-light border-menu" role="navigation">
              <div class="row">
              <!-- Brand and toggle get grouped for better mobile display -->
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




        <!-- <div class="border-menu">
            <?php 
            // wp_nav_menu(array('menu'=> 'main_nav'));?>
        </div> -->
      </header>