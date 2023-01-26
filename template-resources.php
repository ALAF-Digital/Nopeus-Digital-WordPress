<?php

/**
 * Template Name: Resources
 */
?>

<?php get_header(); ?>

      <!--Page Header Start-->
      <section class="page-header">
        <div
          class="page-header-bg"
          style="
            background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/resources-header-bg.jpeg);
          "
        ></div>
        <div class="page-header-shape-1 float-bob-x-6"></div>
        <div class="page-header-shape-2 float-bob-x-7"></div>
        <div class="container">
          <div class="page-header__inner">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </section>
      <!--Page Header End-->

      <section style="padding-top: 60px;" class="work-together">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <?php get_template_part('includes/section', 'content'); ?>
            </div>
          </div>
        </div>
      </section>
      
<?php get_footer(); ?>