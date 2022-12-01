<?php get_header(); ?>

      <!--Page Header Start-->
      <section class="page-header">
        <div
          class="page-header-bg"
          style="
            background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/news-header-bg.jpeg);
          "
        ></div>
        <div class="page-header-shape-1 float-bob-x-6"></div>
        <div class="page-header-shape-2 float-bob-x-7"></div>
        <div class="container">
          <div class="page-header__inner">
          <h1><?php single_term_title() ?></h1>
          </div>
        </div>
      </section>
      <!--Page Header End-->
      
      <!--News One Start-->
      <section class="news-page">
        <div class="container">
          <div class="row">
          <?php get_template_part('includes/section', 'archive'); ?>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div class="blog-pagination">
              <?php
          global $wp_query; 

          $big = 999999999; // need an unlikely integer

          echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages,
            'prev_text' => '<i class="fa fa-angle-left"></i>',
            'next_text' => '<i class="fa fa-angle-right"></i>',
            'mid_size' => 1,
            'end_size' => 0,
          ) );
          ?>
                <!-- <a class="prev page-numbers" href="<?php previous_posts_link(); ?>"
                  ><i class="fa fa-angle-left"></i
                ></a>
                <span class="page-numbers current">1</span>
                <a class="page-numbers" href="#">2</a>
                <a class="next page-numbers" href="
                /** <?php get_permalink( get_adjacent_post(false,'',false)->ID ); ?> **/
                "
                  ><i class="fa fa-angle-right"></i
                ></a> -->
              </div>
              <!-- /.blog-pagination -->
            </div>
            <!-- /.col-lg-12 -->
          </div>
        </div>
      </section>
      <!--News One End-->

<?php get_footer(); ?>