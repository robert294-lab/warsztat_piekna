           <?php get_header(); ?>
		   <?php get_sidebar(); ?>
		   <h2
                class="headerWithShadow"
                data-shadowText="celebruj z nami każdy dzień"
                data-aos="fade-up"
                data-aos-easing="ease-out"
                data-aos-duration="1500"
                data-aos-delay="450"
                data-aos-anchor-placement="top-bottom"  >
                Hej! Zobacz co przygotowaliśmy dla
                <span class="headerWithShadow__withUnderline">Ciebie!</span>
            </h2>

            <section class="welcomeOffer">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post();
                the_content();
            endwhile; ?>
                <div class="welcomeOffer__box">
                    <div class="welcomeOffer__number">
                        <?php the_field('offer_number_01'); ?>
                    </div>
                    <h2 class="welcomeOffer__header">
                        <?php the_field('offer_title_01'); ?>
                    </h2>
                    <p class="welcomeOffer__text">
                        <?php the_field('offer_text_01'); ?>
                    </p>
                    <div
                        class="welcomeOffer__imgCont"
                        data-aos="fade-left"
                        data-aos-easing="ease-out"
                        data-aos-duration="1200"
                        data-aos-anchor-placement="top-bottom"
                    >
                        <img
                            src="<?php bloginfo('template_directory'); ?>/img/grey_grid.svg"
                            alt=""
                            class="welcomeOffer__grid"
                        />
                        <?php $image = get_field('offer_image_01'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size );}?>
                    </div>
                    <a href="" class="welcomeOffer__moreLink">
                        <span><?php the_field('more_text'); ?></span>
                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="" class="welcomeOffer__arrow">
                    </a>
                </div>
                <div class="welcomeOffer__box">
                    <div class="welcomeOffer__number">
                        <?php the_field('offer_number_02'); ?>
                    </div>
                    <h2 class="welcomeOffer__header">
                        <?php the_field('offer_title_02'); ?>
                    </h2>
                    <p class="welcomeOffer__text">
                        <?php the_field('offer_text_02'); ?>
                    </p>
                    <div
                        class="welcomeOffer__imgCont"
                        data-aos="fade-right"
                        data-aos-easing="ease-out"
                        data-aos-duration="1200"
                        data-aos-anchor-placement="top-bottom"
                    >
                        <img
                            src="<?php bloginfo('template_directory'); ?>/img/grey_grid.svg"
                            alt=""
                            class="welcomeOffer__grid"
                        />
                        <?php $image = get_field('offer_image_02'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size );}?>
                    </div>
                    <a href="" class="welcomeOffer__moreLink">
                        <span><?php the_field('more_text'); ?></span>
                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="" class="welcomeOffer__arrow">
                    </a>
                </div>
                <div class="welcomeOffer__box">
                    <div class="welcomeOffer__number">
                        <?php the_field('offer_number_03'); ?>
                    </div>
                    <h2 class="welcomeOffer__header">
                        <?php the_field('offer_title_03'); ?>
                    </h2>
                    <p class="welcomeOffer__text">
						<?php the_field('offer_text_03'); ?>
                    </p>
                    <div
                        class="welcomeOffer__imgCont"
                        data-aos="fade-left"
                        data-aos-easing="ease-out"
                        data-aos-duration="1200"
                        data-aos-anchor-placement="top-bottom"
                    >
                        <img
                            src="<?php bloginfo('template_directory'); ?>/img/grey_grid.svg"
                            alt=""
                            class="welcomeOffer__grid"
                        />
                        <?php $image = get_field('offer_image_03'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size );}?>
                    </div>
                    <a href="" class="welcomeOffer__moreLink">
                        <span><?php the_field('more_text'); ?></span>
                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="" class="welcomeOffer__arrow">
                    </a>
                </div>
                <div class="welcomeOffer__box">
                    <div class="welcomeOffer__number">
                        <?php the_field('offer_number_04'); ?>
                    </div>
                    <h2 class="welcomeOffer__header">
                        <?php the_field('offer_title_04'); ?>
                    </h2>
                    <p class="welcomeOffer__text">
                        <?php the_field('offer_text_04'); ?>
                    </p>
                    <div
                        class="welcomeOffer__imgCont"
                        data-aos="fade-right"
                        data-aos-easing="ease-out"
                        data-aos-duration="1200"
                        data-aos-anchor-placement="top-bottom"
                    >
                        <img
                            src="<?php bloginfo('template_directory'); ?>/img/grey_grid.svg"
                            alt=""
                            class="welcomeOffer__grid"
                        />
                        <?php $image = get_field('offer_image_04'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size );}?>
                    </div>
                    <a href="" class="welcomeOffer__moreLink">
                        <span><?php the_field('more_text'); ?></span>
                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="" class="welcomeOffer__arrow">
                    </a>
                </div>
            </section>

            <section class="holika">
                <img src="<?php bloginfo('template_directory'); ?>/img/icons/triangle.svg" alt="" class="holika__icon">
                <div class="holika__headerCont">
                    <h4 class="holika__smallHeader"><?php the_field('holika_title'); ?></h4>
                </div>
                <div class="holika__logoCont">
                    <img
                        src="<?php bloginfo('template_directory'); ?>/img/holika_logo.svg"
                        alt="Holika holika"
                        class="holika__logo"
                        data-aos="zoom-out"
                        data-aos-easing="ease-out"
                        data-aos-duration="1200"
                        data-aos-anchor-placement="top-bottom"
                    >
                    <img src="<?php bloginfo('template_directory'); ?>/img/grey_grid.svg" alt="" class="holika__logoGrid">
                </div>
                <div class="holika_images">
                    <div class="holika__imgCont">
                        <img
                            src="<?php bloginfo('template_directory'); ?>/img/holika02.png"
                            alt="Kosmetyki naturualne"
                            class="holika__img"
                            data-aos="fade-right"
                            data-aos-easing="ease-out"
                            data-aos-duration="1200"
                            data-aos-delay="200"
                            data-aos-anchor-placement="top-center"
                        />
                    </div>
                    <div class="holika__imgCont">
                        <img
                            src="<?php bloginfo('template_directory'); ?>/img/holika01.png"
                            alt="Kosmetyki naturualne"
                            class="holika__img"
                            data-aos="fade-left"
                            data-aos-easing="ease-out"
                            data-aos-duration="1200"
                            data-aos-delay="600"
                            data-aos-anchor-placement="top-center"
                        />
                    </div>
                </div>
                <div class="holika__makeAppointmentCont">
                    <div class="vividSection__container">
                        <a href="./offer.html" class="vividSection__inner">
                            <div class="vividSection__link">
                                <div class="vividSection__linkText">
                                    <?php the_field('look'); ?> <br /><?php the_field('more'); ?>
                                </div>
                                <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow_white.svg" alt="" class="vividSection__arrow">
                            </div>
                            <div class="vividSection__dotsCont">
                                <div class="dotsGrid"></div>
                            </div>
                        </a>
                        <div class="vividSection__dotsCont vividSection__dotsCont--pink">
                            <div class="dotsGrid dotsGrid--pink"></div>
                        </div>
                    </div>
                </div>
            </section>
			            <section class="contact">
                <div class="contact__smallHeaderCont">
                    <h5
                        class="contact__smallHeader"
                        data-aos="fade"
                        data-aos-easing="ease-out"
                        data-aos-duration="1200"
                    >
                        <?php the_field('look_road'); ?> 
                    </h5>
                </div>
                <img src="<?php bloginfo('template_directory'); ?>/img/icons/map.svg" alt="" class="contact__icon" />
                <div class="contact__mapCont">
                    <!-- Here comes the map from Google Maps API in js/map.js-->
                </div>
                <div class="contact__infoCont">
                    <div class="contact__address">
                        <div class="contact__mobileLine"><?php the_field('street'); ?></div>
                        <?php the_field('post_code'); ?>
                    </div>
                    <div class="contact__contactData">
                        <div class="contact__phoneCont">
                            <a href="tel: 517 111 156" class="contact__phone"><?php the_field('number_phone'); ?></a>
                        </div>
                        <div class="contact__emailCont">
                            <a href="mailto: salon@warsztatpiekna.com.pl" class="contact__email">
                                <?php the_field('email_adress'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="contact__imgCont">
                        <?php $image = get_field('reception_image'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size );}?>
                        <div class="contact__dotsCont">
                            <div class="dotsGrid dotsGrid--pink"></div>
                        </div>
                    </div>
                    <div class="contact__text contact__boldTextCont">
                        <p class="contact__text--bold">
						<?php the_field('contact_text_bold'); ?>
                        </p>
                        <a href="" class="contact__moreLink">
                            <span><?php the_field('see_more'); ?></span>
                            <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="">
                        </a>
                    </div>
                    <!-- All sections with 'capitalized' class get big fat first letter styled in _global.scss thanks to capitalizeFirstLetter.js -->
                    <div class="contact__text capitalized">
                        <?php the_field('contact_text_capitalized'); ?>
                    </div>
                    <div class="contact__text">
					<?php the_field('contact_text_capitalized'); ?>
                    </div>
                </div>
            </section>

            <section class="promotions">
                <div class="promotions__hero">
                    <div
                        class="promotions__heroText"
                        data-aos="fade-up"
                        data-aos-easing="ease-out"
                        data-aos-duration="1200"
                        data-aos-delay="350"
                    >
                        <?php the_field('promotions_text'); ?>
                    </div>
                    <div class="promotions__imgCont">
                        <img src="<?php bloginfo('template_directory'); ?>/img/chair.png" alt="" class="promotions__img" />
                    </div>
                </div>
                <div class="promotions__currentCont">
                    <h2
                        class="promotions__header"
                        data-aos="fade-up"
                        data-aos-duration="1200"
                        data-aos-delay="350"
                    >
                        <?php the_field('current'); ?>
                        <span class="promotions__header--withUnderline">
                            <?php the_field('promotions'); ?>
                        </span>
                    </h2>
                    <div class="promotions__cont">
                        <div class="promotions__box">
                            <h5 class="promotions__boxHeader">
                                <?php the_field('promotion_title_01'); ?>
                            </h5>
                            <div class="promotions__boxText">
							<?php the_field('promotion_text_01'); ?>
                            </div>
                            <div class="promotions__boxDateCont">
                                <img
                                    src="<?php bloginfo('template_directory'); ?>/img/icons/callendar.svg"
                                    alt=""
                                    class="promotions__boxIcon"
                                />
                                <div class="promotions__boxDate">
                                    <?php the_field('promotions_date_01'); ?>
                                </div>
                            </div>
                            <a href="" class="promotions__boxLink">
                                <?php the_field('look'); ?>
                                <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="">
                            </a>
                        </div>
                        <div class="promotions__box">
                            <h5 class="promotions__boxHeader">
                                <?php the_field('promotion_title_02'); ?>
                            </h5>
                            <div class="promotions__boxText">
                                <?php the_field('promotion_text_02'); ?>
                            </div>
                            <div class="promotions__boxDateCont">
                                <img
                                    src="<?php bloginfo('template_directory'); ?>/img/icons/callendar.svg"
                                    alt=""
                                    class="promotions__boxIcon"
                                />
                                <div class="promotions__boxDate">
                                    <?php the_field('promotions_date_02'); ?>
                                </div>
                            </div>
                            <a href="" class="promotions__boxLink">
                                <?php the_field('look'); ?>
                                <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="">
                            </a>
                        </div>
                        <div class="promotions__vividCont">
                            <div class="vividSection__container vividSection__container--centered">
                                <a href="promotions.html" class="vividSection__inner">
                                    <div class="vividSection__link">
                                        <div class="vividSection__linkText">
                                            <?php the_field('all_promotions'); ?> <br /><?php the_field('promotion'); ?>
                                        </div>
                                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow_white.svg" alt="" class="vividSection__arrow">
                                    </div>
                                    <div class="vividSection__dotsCont">
                                        <div class="dotsGrid"></div>
                                    </div>
                                </a>
                                <div class="vividSection__dotsCont vividSection__dotsCont--pink">
                                    <div class="dotsGrid dotsGrid--pink"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

			<?php get_footer(); ?>