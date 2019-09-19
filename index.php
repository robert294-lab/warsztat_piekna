                  <?php get_header(); ?>
		   <?php get_sidebar(); ?>
<?php
$args = array('post_type' => 'Oferty','numberspost'=>-1);
$Oferty = get_posts($args);
$args2 = array('post_type' => 'Promocje', 'numberspost'=>-1);
$Promocje = get_posts($args2);
?>

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
            <div class="welcomeOffer__box welcomeOffer__box">
                <div class="welcomeOffer__box">
                <?php the_post();
        $size = 'full';
				foreach ($Oferty

                 as $key => $slide){

            $offer_number = get_field('offer_number', $slide->ID);
            $offer_title = get_field('offer_title', $slide->ID);
            $offer_text = get_field('offer_text', $slide->ID);
            $offer_image = get_field('offer_image', $slide->ID);
            $more_text = get_field('more_text', $slide->ID);
                 
					?>
                    <div class="welcomeOffer__number">
                        <?= $offer_number ?>
                    </div>
                   <h2 class="welcomeOffer__header" style="width: max-content;">
                        <?= $offer_title ?>
                    </h2>
                    <p class="welcomeOffer__text" style="width: 200%;">
                        <?= $offer_text ?>
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
<?php echo '<img src="'.$offer_image.'" >';?>
                    </div>
                    <a href="http://warsztatpiekna.com.pl/" class="welcomeOffer__moreLink">
                        <span><?= $more_text ?></span>
                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="" class="welcomeOffer__arrow">
                    </a>
                    <?php } ?>
                </div>
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
<link rel="https://maps.googleapis.com/maps/api/js?key=AIzaSyBo2SsZ8cEf6dwEyBxgrR0pXSpjtlqgiro&amp;callback=initMap" async="" defer="">
                    <!-- Here comes the map from Google Maps API in js/map.js-->
                </div>
                <div class="contact__infoCont">
                    <div class="contact__address">
                            <div class="contact__mobileLine"><a href="https://www.google.pl/maps/place/Warsztat+Pi%C4%99kna/@50.006985,19.9458985,14z/data=!4m8!1m2!2m1!1swarsztat+pi%C4%99kna!3m4!1s0x471643e44a596a07:0xf5ca9175a2d1c68!8m2!3d50.006985!4d19.963408" target="_blank"> <?php the_field('street'); ?><?php the_field('post_code'); ?> </a></div>
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
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, neque incidunt nihil harum tenetur fugit.
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
                        Aktualne
                        <span class="promotions__header--withUnderline">
                             promocje
                        </span>
                    </h2>
                    <div class="promotions__cont ">
						<?php the_post();
				foreach ($Promocje

                 as $key => $slide) {
            $promotion_title = get_field('promotion_title', $slide->ID);
            $promotion_text = get_field('promotion_text', $slide->ID);
            $promotions_date = get_field('promotions_date', $slide->ID);
 				?>
                        <div class="promotions__box">
                            <h5 class="promotions__boxHeader">
                                <?= $promotion_title ?>
                            </h5>
                            <div class="promotions__boxText">
							<?= $promotion_text ?>
                            </div>
                            <div class="promotions__boxDateCont">
                                <img
                                    src="<?php bloginfo('template_directory'); ?>/img/icons/callendar.svg"
                                    alt=""
                                    class="promotions__boxIcon"
                                />
                                <div class="promotions__boxDate">
                                    <?= $promotions_date ?>
                                </div>
                            </div>
                            <a href="" class="promotions__boxLink">
                                <?= $look ?>
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
                      <?php } ?>
						</div>
                    </div>
                </div>
            </section>

			<?php get_footer(); ?>