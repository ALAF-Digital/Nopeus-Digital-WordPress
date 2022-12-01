<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="news-details__left">
  
                <div class="news-details__img">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
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

                  <ul style="margin-bottom: 1rem;" class="list-unstyled news-details__meta">
                    <li>
                      <a href="blog-details.html"
                        ><i class="far fa-clock"></i> <?php the_date(); ?></a
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