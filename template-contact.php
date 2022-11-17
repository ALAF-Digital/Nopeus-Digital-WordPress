<?php

/**
 * Template Name: Contact Us
 */
?>

<?php get_header(); ?>

      <!--Page Header Start-->
      <section class="page-header">
        <div
          class="page-header-bg"
          style="
            background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/contact-header-bg.jpg);
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

      <!--Contact Details Start-->
      <section class="contact-details">
        <div class="container">
          <div class="row">
            <div class="col-xl-6">
              <div class="contact-details__inner">
                <!-- <div class="contact-details__map-box">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.320996930042!2d55.42848971501352!3d25.39406358380503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f59dcaa8f7997%3A0x69d6cad011fa4738!2sAmber%20Gem%20Tower%20-%20Sheikh%20Khalifa%20Bin%20Zayed%20St%20-%20Al%20Rashidiya%203%20-%20Ajman!5e0!3m2!1sen!2sae!4v1647950885824!5m2!1sen!2sae"
                    class="contact-details__map"
                    allowfullscreen
                  >
                  </iframe>
                </div> -->
                <div class="contact-details__content">
                  <div class="contact-details__title-box">
                    <h4 class="contact-details__title">Get in Touch</h4>
                  </div>
                  <p class="contact-details__address">
                    E2-2911 Amber Gem Tower P.O. Box 17803,<br />Ajman, U.A.E
                  </p>
                  <div class="contact-details__contact-info">
                    <div class="contact-details__contact-icon">
                      <span class="icon-phone1"></span>
                    </div>
                    <h4 class="contact-details__contact-number-email">
                      <a
                        style="margin-bottom: 0.5em"
                        href="https://api.whatsapp.com/send/?phone=%2B971529224818&text&type=phone_number&app_absent=0"
                        class="contact-details__contact-number"
                      >
                        <i class="fa-brands fa-whatsapp"></i> +971 (0) 52 922
                        4818</a
                      >
                      <a
                        style="margin-bottom: 0.5em"
                        href="tel:+9710529224818"
                        class="contact-details__contact-number"
                      >
                        <i class="fa-solid fa-mobile-screen-button"></i> +971
                        (0) 52 922 4818</a
                      >
                      <a
                        style="margin-bottom: 0.5em"
                        href="tel:+971065758779"
                        class="contact-details__contact-number"
                        ><i class="fa-solid fa-phone"></i> +971 (0) 6 575
                        8779</a
                      >
                      <a
                        href="mailto:needhelp@company.com"
                        class="contact-details__contact-email"
                        >contactus@vendorjunctiongroup.com</a
                      >
                    </h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="contact-details__content">
                <div class="contact-details__title-box">
                  <h4 class="contact-details__title">Write To Us</h4>
                </div>
                <form
                  action="assets/inc/sendemail.php"
                  class="comment-one__form contact-form-validated"
                  novalidate="novalidate"
                >
                  <div class="row">
                    <div class="col-xl-6">
                      <div class="comment-form__input-box">
                        <input
                          type="text"
                          placeholder="Full name"
                          name="name"
                        />
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="comment-form__input-box">
                        <input
                          type="email"
                          placeholder="Email address"
                          name="email"
                        />
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="comment-form__input-box">
                        <input type="text" placeholder="Phone" name="name" />
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="comment-form__input-box">
                        <input
                          type="text"
                          placeholder="Subject"
                          name="subject"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-12">
                      <div class="comment-form__input-box text-message-box">
                        <textarea
                          name="message"
                          placeholder="Write a Message"
                        ></textarea>
                      </div>
                      <div class="btn-box">
                        <button type="submit" class="thm-btn comment-form__btn">
                          Send a message
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--Contact Details End-->
      <section class="contact-one">
        <div
          class="contact-one-shape"
          style="
            background-image: url(assets/images/shapes/contact-one-shape.png);
          "
        ></div>
        <div class="container">
          <div class="contact-one__bottom" id="InterOffice">
            <h2 class="contact-one__bottom-title">Our Offices</h2>
            <div class="row">
              <div
                class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp animated"
                data-wow-delay="100ms"
                style="
                  visibility: visible;
                  animation-delay: 100ms;
                  animation-name: fadeInUp;
                "
              >
                <!--Contact One Single-->
                <div class="contact-one__single">
                  <h3 class="contact-one__title">USA | San Diego</h3>
                  <p class="contact-one__text-2">
                    4455 Murphy Canyon Rd, Suite 145, San Diego, California
                    92123, United States
                  </p>
                  <h4 class="contact-one__contact-info">
                    <a href="tel:+1 408 505 2532" class="contact-one__phone"
                      >+1 408 505 2532</a
                    >
                  </h4>
                </div>
              </div>
              <div
                class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp animated"
                data-wow-delay="100ms"
                style="
                  visibility: visible;
                  animation-delay: 100ms;
                  animation-name: fadeInUp;
                "
              >
                <!--Contact One Single-->
                <div class="contact-one__single">
                  <h3 class="contact-one__title">Finland | Oulu</h3>
                  <p class="contact-one__text-2">
                    Rautatienkatu 16 C 31 901100, Oulu Finland<br /><br />
                  </p>
                  <h4 class="contact-one__contact-info">
                    <a
                      href="tel:+358 (0) 40 541 6296"
                      class="contact-one__phone"
                      >+358 (0) 40 541 6296</a
                    >
                  </h4>
                </div>
              </div>
              <div
                class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp animated"
                data-wow-delay="100ms"
                style="
                  visibility: visible;
                  animation-delay: 100ms;
                  animation-name: fadeInUp;
                "
              >
                <!--Contact One Single-->
                <div class="contact-one__single">
                  <h3 class="contact-one__title">Denmark | Copenhagen</h3>
                  <p class="contact-one__text-2">
                    Ægirsgade, 16, 2th Copenhagen, Denmark<br /><br />
                  </p>
                  <h4 class="contact-one__contact-info">
                    <a href="tel:+34 676 620 051" class="contact-one__phone"
                      >+34 676 620 051</a
                    >
                  </h4>
                </div>
              </div>
              <div
                class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp animated"
                data-wow-delay="100ms"
                style="
                  visibility: visible;
                  animation-delay: 100ms;
                  animation-name: fadeInUp;
                "
              >
                <!--Contact One Single-->
                <div class="contact-one__single">
                  <h3 class="contact-one__title">Sweden | Stockholm</h3>
                  <p class="contact-one__text-2">
                    Bastuholmen, Bygatan 15 183 53 Tabay Stockholm, Sweden<br /><br />
                  </p>
                  <h4 class="contact-one__contact-info">
                    <a href="tel:+46 (0) 73 508 7655" class="contact-one__phone"
                      >+46 (0) 73 508 7655</a
                    >
                  </h4>
                </div>
              </div>
              <div
                class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp animated"
                data-wow-delay="100ms"
                style="
                  visibility: visible;
                  animation-delay: 100ms;
                  animation-name: fadeInUp;
                "
              >
                <!--Contact One Single-->
                <div class="contact-one__single">
                  <h3 class="contact-one__title">Saudi Arabia | Al Khobar</h3>
                  <p class="contact-one__text-2">
                    Al Moosa Complex, King Faisal Road, Al Khobar 31952, Kingdom
                    of Saudi Arabia
                  </p>
                  <h4 class="contact-one__contact-info">
                    <a
                      href="tel:+966 (0) 57 041 2410"
                      class="contact-one__phone"
                      >+966 (0) 57 041 2410</a
                    >
                  </h4>
                </div>
              </div>
              <div
                class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp animated"
                data-wow-delay="100ms"
                style="
                  visibility: visible;
                  animation-delay: 100ms;
                  animation-name: fadeInUp;
                "
              >
                <!--Contact One Single-->
                <div class="contact-one__single">
                  <h3 class="contact-one__title">India | Mumbai</h3>
                  <p class="contact-one__text-2">
                    7, Kailash Apartment Tapsi Pandey Compound R.P Road, Mumbai
                    India
                  </p>
                  <h4 class="contact-one__contact-info">
                    <a
                      href="tel:+91 (0) 998 799 4616"
                      class="contact-one__phone"
                      >+91 (0) 998 799 4616</a
                    >
                  </h4>
                </div>
              </div>
              <div
                class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp animated"
                data-wow-delay="100ms"
                style="
                  visibility: visible;
                  animation-delay: 100ms;
                  animation-name: fadeInUp;
                "
              >
                <!--Contact One Single-->
                <div class="contact-one__single">
                  <h3 class="contact-one__title">Pakistan | Lahore</h3>
                  <p class="contact-one__text-2">
                    Aman Plaza, 30-B, First Floor G.E.H.S Phase III, Link Model
                    Town Road Lahore, Pakistan
                  </p>
                  <h4 class="contact-one__contact-info">
                    <a
                      href="tel:+92 (0) 300 811 7425"
                      class="contact-one__phone"
                      >+92 (0) 300 811 7425</a
                    >
                  </h4>
                </div>
              </div>

              <div
                class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp animated"
                data-wow-delay="100ms"
                style="
                  visibility: visible;
                  animation-delay: 100ms;
                  animation-name: fadeInUp;
                "
              >
                <!--Contact One Single-->
                <div class="contact-one__single">
                  <h3 class="contact-one__title">Pakistan | Karachi</h3>
                  <p class="contact-one__text-2">
                    Building 12-C, 1st Floor 3rd Itehad Comm Lane, Phase 6, DHA,
                    Karachi, Pakistan
                  </p>
                  <h4 class="contact-one__contact-info">
                    <a
                      href="tel:+92 (0) 336 390 1440 "
                      class="contact-one__phone"
                      >+92 (0) 336 390 1440
                    </a>
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<?php get_footer(); ?>