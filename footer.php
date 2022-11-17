      <!--CTA One Start-->
      <section class="cta-one">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="cta-one__inner">
                <div class="cta-one__inner-content">
                  <div class="cta-one-shape-1 float-bob-x"></div>
                  <div class="cta-one-shape-2 float-bob-x-2"></div>
                  <h3 class="cta-one__title">
                    Visit our Resource Center
                    <p class="cta-one__subtitle">
                      Market Infographics . Project Videos . Case Studies .
                      Success Stories . Industry Reports .
                    </p>
                  </h3>
                  <a href="resources.html" class="thm-btn cta-one__btn"
                    >Discover More</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--CTA One End-->

      <!--Site Footer Start-->
      <footer class="site-footer">
        <div class="site-footer__top">
          <div
            class="site-footer-shape-1"
            style="
              background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/site-footer-shape-1.png);
            "
          ></div>
          <div class="container">
            <div class="row">
              <div
                class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp"
                data-wow-delay="100ms"
              >
                <div class="footer-widget__column footer-widget__about">
                  <div class="footer-widget__logo">
                    <a href="<?php echo get_site_url(); ?>"
                      ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/vj-logo-ic.png" alt=""
                    /></a>
                  </div>
                  <div class="footer-widget__about-text-box">
                    <p class="footer-widget__about-text">
                      Global Strategy. Local Expertise
                    </p>
                  </div>
                  <div class="site-footer__social">
                    <a href="https://www.linkedin.com/company/vendorjunction/"
                      ><i class="fab fa-linkedin"></i
                    ></a>

                    <a href="https://www.facebook.com/vendorjunction.fzc"
                      ><i class="fab fa-facebook"></i
                    ></a>

                    <a href="https://www.instagram.com/vendorjunction_/"
                      ><i class="fab fa-instagram"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div
                class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp"
                data-wow-delay="200ms"
              >
                <div
                  class="footer-widget__column footer-widget__explore clearfix"
                >

                <?php wp_nav_menu( array(
                  'theme_location' => 'footer',
                  'container' => 'ul',
                  'menu_class' => 'footer-widget__explore-list list-unstyled clearfix',
                ) ); ?>
                  <!-- <h3 class="footer-widget__title">Links</h3> -->
                  <!-- <ul
                    class="footer-widget__explore-list list-unstyled clearfix"
                  >
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="what-we-do.html">What We Do</a></li>
                    <li><a href="references.html">References</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                  </ul> -->
                  <ul
                    class="footer-widget__explore-list footer-widget__explore-list-two list-unstyled clearfix"
                  >
                    <li>
                      <a href="what-we-do.html#IBD"
                        >International Business Development</a
                      >
                    </li>
                    <li>
                      <a href="what-we-do.html#CSE">Channel Sales Ecosystem</a>
                    </li>
                    <li>
                      <a href="what-we-do.html#SSP">Structured Sales Process</a>
                    </li>
                    <li>
                      <a href="what-we-do.html#IOM"
                        >In-Country Operations Management</a
                      >
                    </li>
                  </ul>
                </div>
                <div
                  class="footer-widget__column footer-widget__explore clearfix locfoot"
                >
                  <h3 class="footer-widget__title">
                    <a href="/contact.html#InterOffice">Our Offices</a>
                  </h3>
                  <ul
                    class="footer-widget__explore-list list-unstyled clearfix"
                  >
                    <li><a>USA</a></li>
                    <li><a>Finland</a></li>
                    <li><a>Sweden</a></li>
                    <li><a>Denmark </a></li>
                    <li><a>Saudi Arabia </a></li>
                    <li><a>India</a></li>
                    <li><a>Pakistan </a></li>
                  </ul>
                </div>
              </div>

              <div
                class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp"
                data-wow-delay="400ms"
              >
                <div
                  class="footer-widget__column footer-widget__contact clearfix"
                >
                  <h3 class="footer-widget__title">Head Office, U.A.E</h3>
                  <p class="footer-widget__contact-text">
                    E2-2911 Amber Gem Tower<br />

                    P.O. Box 17803, Ajman, U.A.E
                  </p>

                  <h4 class="footer-widget__contact-info">
                    M:
                    <a
                      href="tel:+971529224818"
                      class="footer-widget__contact-number"
                      >+971 (0) 52 922 4818</a
                    >
                  </h4>

                  <h4 class="footer-widget__contact-info">
                    P:
                    <a
                      href="tel:+97165758779"
                      class="footer-widget__contact-number"
                      >+971 (0) 6 575 8779</a
                    >
                  </h4>

                  <h4 class="footer-widget__contact-info">
                    <a
                      href="mailto:contactus@vendorjunctiongroup.com"
                      class="footer-widget__contact-email"
                      >contactus@vendorjunctiongroup.com</a
                    >
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="site-footer__bottom">
          <div class="container">
            <div class="row">
              <div class="col-xl-12">
                <div class="site-footer__bottom-inner">
                  <p class="site-footer__bottom-text">
                    Copyright © 2022 Vendor Junction
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!--Site Footer End-->
    </div>

    <div class="mobile-nav__wrapper">
      <div class="mobile-nav__overlay mobile-nav__toggler"></div>

      <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"
          ><i class="fa fa-times"></i
        ></span>

        <div class="logo-box">
          <a href="<?php echo get_site_url(); ?>" aria-label="logo image"
            ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/resources/logo-1.png" width="155" alt=""
          /></a>
        </div>

        <div class="mobile-nav__container"></div>

        <ul class="mobile-nav__contact list-unstyled">
          <li>
            <i class="fa fa-envelope"></i>
            <a href="mailto:contactus@vendorjunctiongroup.com"
              >contactus@vendorjunctiongroup.com</a
            >
          </li>
          <li>
            <i class="fa fa-phone-alt"></i>
            <a href="tel:+97165758779">+971 (0) 6 575 8779</a>
          </li>
        </ul>
        <div class="mobile-nav__top">
          <div class="mobile-nav__social">
            <div class="mobile-nav__social">
              <a
                href="https://www.linkedin.com/company/vendorjunction/"
                class="fab fa-linkedin"
              ></a>

              <a
                href="https://www.facebook.com/vendorjunction.fzc"
                class="fab fa-facebook-square"
              ></a>

              <a
                href="https://www.instagram.com/vendorjunction_/"
                class="fab fa-instagram"
              ></a>
            </div>
          </div>
          <!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__top -->
      </div>
      <!-- /.mobile-nav__content -->
    </div>

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"
      ><i class="fa fa-angle-up"></i
    ></a>

    <?php wp_footer(); ?>
    
  </body>
</html>
