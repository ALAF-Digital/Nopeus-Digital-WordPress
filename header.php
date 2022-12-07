<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo get_the_title(); ?> - <?php echo get_bloginfo( 'name' ); ?> - <?php echo get_bloginfo( 'description' ); ?> </title>

    <meta name="description" content="" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      rel="stylesheet"
    />

    <script
      src="https://kit.fontawesome.com/e2ef1da0eb.js"
      crossorigin="anonymous"
    ></script>
    
    <?php wp_head(); ?>
  </head>

  <body>
    <!-- <div class="preloader">
      <img
        class="preloader__image"
        width="60"
        src="<?php echo get_template_directory_uri(); ?>/assets/images/loader.png"
        alt=""
      />
    </div> -->
    <!-- /.preloader -->
    <div class="page-wrapper">
      <header class="main-header clearfix">
        <nav class="main-menu clearfix">
          <div class="main-menu-wrapper clearfix">
            <div class="main-menu-wrapper__left">
              <div class="main-menu-wrapper__logo">
                <a href="<?php echo get_site_url(); ?>"
                  ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/logo-1.png" alt=""
                /></a>
              </div>
              <div class="main-menu-wrapper__main-menu">
                <a href="#" class="mobile-nav__toggler"
                  ><i class="fa fa-bars"></i
                ></a>

                <?php wp_nav_menu( array(
                  'theme_location' => 'header',
                  'container' => 'ul',
                  'menu_class' => 'main-menu__list',
                ) ); ?>

              </div>
            </div>
            <div class="main-menu-wrapper__right">
              <div class="main-menu-wrapper__call">
                <div class="main-menu-wrapper__call-icon">
                  <span class="icimg">
                    <a target="_blank" href="https://wa.me/+971529224818"
                      ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/whatsapp.png"
                    /></a>
                  </span>
                </div>
                <div class="main-menu-wrapper__call-number">
                  <p>Talk to an expert</p>
                  <h5>
                    <a href="https://wa.me/+971529224818">+971 52 922 4818</a>
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>

      <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div>
      </div>
