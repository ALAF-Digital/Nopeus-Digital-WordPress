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

      <!-- <section class="trusted-one">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 wow fadeInLeft" data-wow-delay="100ms">
              
              <div class="services-two__single">
                <div class="services-two__icon">
                  <span class="fa-solid fa-book-open"></span>
                </div>
                <h3 class="services-two__title">Data<br />Sheets</h3>
                <div class="services-two__bottom-box">
                  <a href="#" class="services-two__read-more">Browse</a>
                  <a href="#" class="services-two__arrow"
                    ><span class="fa-solid fa-arrow-right"></span
                  ></a>
                </div>
              </div>
            </div>

            <div class="col-xl-4 wow fadeInLeft" data-wow-delay="100ms">
              
              <div class="services-two__single">
                <div class="services-two__icon">
                  <span class="fa-solid fa-database"></span>
                </div>
                <h3 class="services-two__title">Case<br />Studies</h3>
                <div class="services-two__bottom-box">
                  <a href="#" class="services-two__read-more">Browse</a>
                  <a href="#" class="services-two__arrow"
                    ><span class="fa-solid fa-arrow-right"></span
                  ></a>
                </div>
              </div>
            </div>

            <div class="col-xl-4 wow fadeInLeft" data-wow-delay="100ms">
              
              <div class="services-two__single">
                <div class="services-two__icon">
                  <span class="fa-solid fa-file"></span>
                </div>
                <h3 class="services-two__title">Company<br />Documents</h3>
                <div class="services-two__bottom-box">
                  <a href="#" class="services-two__read-more">Browse</a>
                  <a href="#" class="services-two__arrow"
                    ><span class="fa-solid fa-arrow-right"></span
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->

      <section class="welcome-two" id="ourfocus" style="background: none">
        <div class="container">
          <div class="row">

            <!-- <div class="col-xl-5">
              <div
                class="welcome-two__left wow slideInLeft animated animated"
                data-wow-delay="100ms"
                data-wow-duration="2500ms"
                style="
                  visibility: visible;
                  animation-duration: 2500ms;
                  animation-delay: 100ms;
                  animation-name: slideInLeft;
                "
              >
                <div class="welcome-two__img">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/markets-middle-east-min.webp"
                    alt=""
                  />
                </div>
              </div>
            </div> -->

            <div class="col-xl-12">
              <div class="welcome-two__right">
                <div class="section-title text-left">
                  <h2 class="section-title__title"><i class="fa-solid fa-book-open"></i> Brochures & Datasheets</h2>
                </div>

                <div class="quality-work__tab-box tabs-box">
                  <div class="tabs-content">
                    <!--tab-->
                    <div class="tab active-tab" id="one" style="display: block">
                      <div class="tab-content__inner">
                        <div class="welcome-two__content">
                          

                          <?php 
                              $rows = get_field('brochures_&_datasheets');
                              if( $rows ) {
                                  echo '<ul class="list-unstyled welcome-two__points resource-center-list">';
                                  foreach( $rows as $row ) {
                                      $title = $row['title'];
                                      $document = $row['document'];
                                      echo '<li><div class="icon"><i class="fa-solid fa-download"></i></div><div class="text">';
                                          echo $title;
                                      echo '</div></li>';
                                  }
                                  echo '</ul>';
                              }
                            ?>


                            
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-12">
              <div class="welcome-two__right">
                <div class="section-title text-left">
                  <h2 class="section-title__title"><i class="fa-solid fa-database"></i> Case Studies</h2>
                </div>

                <div class="quality-work__tab-box tabs-box">
                  <div class="tabs-content">
                    <!--tab-->
                    <div class="tab active-tab" id="one" style="display: block">
                      <div class="tab-content__inner">
                        <div class="welcome-two__content">
                          <ul class="list-unstyled welcome-two__points resource-center-list">
                            <li>
                              <div class="icon">
                                <i class="fa-solid fa-download"></i>
                              </div>
                              <div class="text">
                                <p>BBA Data Sheet</p>
                              </div>
                            </li>
                            <li>
                              <div class="icon">
                                <i class="fa-solid fa-download"></i>
                              </div>
                              <div class="text">
                                <p>Company profile</p>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

  

      
<?php get_footer(); ?>