<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  
  <div class="site-wrap">

    

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">

                <h2 class="mb-0 site-logo">
                  <a href="<?php bloginfo('home'); ?>">
                    <?php bloginfo('name'); ?>
                  </a>
                </h2>

              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <?php
                      wp_nav_menu(array(
                        'theme_location'   => 'main-menu',
                        'menu_class'       => 'site-menu js-clone-nav d-none d-lg-block',
                        'container'        => 'ul'
                      ));
                    ?>

                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  