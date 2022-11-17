<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="news-details__left">
                <div class="news-details__img">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/news-thumb-1.jpg"
                    alt=""
                  />
                </div>
                <div class="news-details__content">
                  <p class="news-details__sub-title">
                    <?php 
                    $categories = get_the_category();

                    if ( ! empty( $categories ) ) {
                        echo esc_html( $categories[0]->name );	
                    }
                    ?>
                  </p>
                  <ul class="list-unstyled news-details__meta">
                    <li>
                      <a href="blog-details.html"
                        ><i class="far fa-clock"></i> <?php the_date(); ?></a
                      >
                    </li>
                    <li><span>/</span></li>
                    <li>
                      <a href="blog-details.html"
                        ><i class="far fa-map"></i> Finland</a
                      >
                    </li>
                  </ul>
                  <h3 class="news-details__title">
                    <?php the_title(); ?>
                  </h3>

                  <?php the_content(); ?>
               
                </div>
              </div>



<?php endwhile; endif; ?>