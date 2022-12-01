<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
              <!--News One Single-->
              <div class="news-one__single">
                <div class="news-one__img">
                  <img src=" <?php the_post_thumbnail_url(); ?> " alt="" />
                  <a href="<?php the_permalink(); ?>">
                    <span class="news-one__plus"></span>
                  </a>
                </div>
                <div class="news-one__content">
                  <p class="news-one__sub-title">
                  <?php 
                    $categories = get_the_category();

                    if ( ! empty( $categories ) ) {
                        echo esc_html( $categories[0]->name );	
                    }
                    ?>
                  </p>
                  <h3 class="news-one__title">
                    <a href="<?php the_permalink(); ?>"
                      ><?php the_title(); ?></a
                    >
                  </h3>
                  <ul class="list-unstyled news-one__meta">
                    <li>
                      <a href="<?php the_permalink(); ?>"
                        ><i class="far fa-clock"></i>  <?php the_date(); ?></a
                      >
                    </li>
              
                  </ul>
                </div>
              </div>
            </div>



<?php endwhile; endif; ?>