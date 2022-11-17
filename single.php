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
          <h1>News &amp; Events</h1>
          </div>
        </div>
      </section>
      <!--Page Header End-->
      
      <!--News Details Start-->
      <section class="news-details">
        <div class="container">
          <div class="row">
            <div class="col-xl-8 col-lg-7">
            <?php get_template_part('includes/section', 'single'); ?>
            </div>
            <div class="col-xl-4 col-lg-5">
              <div class="sidebar">
                <div class="sidebar__single sidebar__post">
                  <h3 class="sidebar__title">Related Posts</h3>
                  <ul class="sidebar__post-list list-unstyled">
                    <li>
                      <div class="sidebar__post-image">
                        <img src="assets/images/blog/news-1-2.jpg" alt="" />
                      </div>
                      <div class="sidebar__post-content">
                        <h3>
                          <span class="sidebar__post-content-meta"
                            ><i class="far fa-clock"></i>20 Oct, 2021</span
                          >
                          <a href="blog-details.html"
                            >Integer tristique odio vitae lorem gra</a
                          >
                        </h3>
                      </div>
                    </li>
                    <li>
                      <div class="sidebar__post-image">
                        <img src="assets/images/blog/news-1-2.jpg" alt="" />
                      </div>
                      <div class="sidebar__post-content">
                        <h3>
                          <span class="sidebar__post-content-meta"
                            ><i class="far fa-clock"></i>20 Oct, 2021</span
                          >
                          <a href="blog-details.html"
                            >Integer tristique odio vitae lorem gra</a
                          >
                        </h3>
                      </div>
                    </li>
                    <li>
                      <div class="sidebar__post-image">
                        <img src="assets/images/blog/news-1-2.jpg" alt="" />
                      </div>
                      <div class="sidebar__post-content">
                        <h3>
                          <span class="sidebar__post-content-meta"
                            ><i class="far fa-clock"></i>20 Oct, 2021</span
                          >
                          <a href="blog-details.html"
                            >Integer tristique odio vitae lorem gra</a
                          >
                        </h3>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="sidebar__single sidebar__category">
                  <h3 class="sidebar__title">Categories</h3>
                  <ul class="sidebar__category-list list-unstyled">
                    <li class="active">
                      <a href="blog-details.html"
                        >News <span class="fa fa-angle-right"></span
                      ></a>
                    </li>
                    <li>
                      <a href=""
                        >Events <span class="fa fa-angle-right"></span
                      ></a>
                    </li>
                    <li>
                      <a href=""
                        >Business & Finance
                        <span class="fa fa-angle-right"></span
                      ></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<?php get_footer(); ?>