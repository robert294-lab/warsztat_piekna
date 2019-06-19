           <?php get_header(); 
			get_sidebar(); ?>
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
                        01
                    </div>
                    <h2 class="welcomeOffer__header">
                        Zabiegi na twarz i ciało
                    </h2>
                    <p class="welcomeOffer__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas aspernatur numquam nesciunt assumenda, similique inventore voluptates vel laborum mollitia quisquam.
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
                        <img
                            src="<?php bloginfo('template_directory'); ?>/img/offer/01.png"
                            class="welcomeOffer__img"
                            alt=""
                            title=""
                        />
                    </div>
                    <a href="" class="welcomeOffer__moreLink">
                        <span>Więcej</span>
                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="" class="welcomeOffer__arrow">
                    </a>
                </div>
                <div class="welcomeOffer__box">
                    <div class="welcomeOffer__number">
                        02
                    </div>
                    <h2 class="welcomeOffer__header">
                        Pielęgnacja dłoni i podologia
                    </h2>
                    <p class="welcomeOffer__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus qui, impedit beatae modi nam quam, praesentium quaerat dicta, adipisci reiciendis obcaecati? Dicta optio unde dolor vel, modi aperiam possimus. Itaque quas neque animi, culpa harum quo error ut, modi odit.
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
                        <img
                            src="<?php bloginfo('template_directory'); ?>/img/offer/02.png"
                            class="welcomeOffer__img"
                            alt=""
                            title=""
                        />
                    </div>
                    <a href="" class="welcomeOffer__moreLink">
                        <span>Więcej</span>
                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="" class="welcomeOffer__arrow">
                    </a>
                </div>
                <div class="welcomeOffer__box">
                    <div class="welcomeOffer__number">
                        03
                    </div>
                    <h2 class="welcomeOffer__header">
                        Depilacja
                    </h2>
                    <p class="welcomeOffer__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas aspernatur numquam nesciunt assumenda, similique inventore voluptates vel laborum mollitia quisquam.
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
                        <img
                            src="<?php bloginfo('template_directory'); ?>/img/offer/03.png"
                            class="welcomeOffer__img"
                            alt=""
                            title=""
                        />
                    </div>
                    <a href="" class="welcomeOffer__moreLink">
                        <span>Więcej</span>
                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="" class="welcomeOffer__arrow">
                    </a>
                </div>
                <div class="welcomeOffer__box">
                    <div class="welcomeOffer__number">
                        04
                    </div>
                    <h2 class="welcomeOffer__header">
                        Makijaż
                    </h2>
                    <p class="welcomeOffer__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas aspernatur numquam nesciunt assumenda, similique inventore voluptates vel laborum mollitia quisquam.
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
                        <img
                            src="<?php bloginfo('template_directory'); ?>/img/offer/04.png"
                            class="welcomeOffer__img"
                            alt=""
                            title=""
                        />
                    </div>
                    <a href="" class="welcomeOffer__moreLink">
                        <span>Więcej</span>
                        <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="" class="welcomeOffer__arrow">
                    </a>
                </div>
            </section>

            <section class="holika">
                <img src="<?php bloginfo('template_directory'); ?>/img/icons/triangle.svg" alt="" class="holika__icon">
                <div class="holika__headerCont">
                    <h4 class="holika__smallHeader">Oferta naturalnych kosmetyków</h4>
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
                                    Zobacz <br />więcej
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
                        Zobacz jak do nas dojechać
                    </h5>
                </div>
                <img src="<?php bloginfo('template_directory'); ?>/img/icons/map.svg" alt="" class="contact__icon" />
                <div class="contact__mapCont">
                    <!-- Here comes the map from Google Maps API in js/map.js-->
                </div>
                <div class="contact__infoCont">
                    <div class="contact__address">
                        <div class="contact__mobileLine">ul. Bojki 4,</div>
                        30-611 Kraków
                    </div>
                    <div class="contact__contactData">
                        <div class="contact__phoneCont">
                            <a href="tel: 517 111 156" class="contact__phone">517 111 156</a>
                        </div>
                        <div class="contact__emailCont">
                            <a href="mailto: salon@warsztatpiekna.com.pl" class="contact__email">
                                salon@warsztatpiekna.com.pl
                            </a>
                        </div>
                    </div>
                    <div class="contact__imgCont">
                        <img src="<?php bloginfo('template_directory'); ?>/img/reception.png" alt="Recepcja" class="contact__img" />
                        <div class="contact__dotsCont">
                            <div class="dotsGrid dotsGrid--pink"></div>
                        </div>
                    </div>
                    <div class="contact__text contact__boldTextCont">
                        <p class="contact__text--bold">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam facilis veniam voluptatibus tenetur, distinctio error animi quod maxime cupiditate praesentium qui nostrum, magni assumenda ullam fugiat, eveniet? Dolores quia fugiat dolor earum aut, autem necessitatibus ad rem iusto impedit!
                        </p>
                        <a href="" class="contact__moreLink">
                            <span>See more</span>
                            <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="">
                        </a>
                    </div>
                    <!-- All sections with 'capitalized' class get big fat first letter styled in _global.scss thanks to capitalizeFirstLetter.js -->
                    <div class="contact__text capitalized">
                        Rorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, aut, nisi? Ipsa ut accusantium facere, voluptates delectus, ex earum qui commodi, distinctio totam et! Omnis ea quae voluptatibus, vel nobis similique quasi non soluta, magni voluptas error consectetur, tempora accusamus nihil illo dolore voluptate asperiores aut repellendus. Obcaecati, non tempore!
                    </div>
                    <div class="contact__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, explicabo ab. Voluptas ab autem illo, officia, minus sit ducimus facilis molestiae velit et rerum dignissimos sunt quidem. Cum porro nisi, modi assumenda esse est, similique iste harum neque qui praesentium. Vitae unde neque explicabo quidem, natus facilis repellat dolores cum, harum accusantium totam similique reprehenderit est commodi repudiandae in exercitationem.
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
                    <div class="promotions__cont">
                        <div class="promotions__box">
                            <h5 class="promotions__boxHeader">
                                -15% na zabiegi kosmetyczne
                            </h5>
                            <div class="promotions__boxText">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat maxime officia consequuntur fugiat perferendis similique deserunt quam aut soluta aliquam.
                            </div>
                            <div class="promotions__boxDateCont">
                                <img
                                    src="<?php bloginfo('template_directory'); ?>/img/icons/callendar.svg"
                                    alt=""
                                    class="promotions__boxIcon"
                                />
                                <div class="promotions__boxDate">
                                    31.08.2018 - 30.09-2018
                                </div>
                            </div>
                            <a href="" class="promotions__boxLink">
                                Zobacz
                                <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="">
                            </a>
                        </div>
                        <div class="promotions__box">
                            <h5 class="promotions__boxHeader">
                                -15% na zabiegi kosmetyczne
                            </h5>
                            <div class="promotions__boxText">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat maxime officia consequuntur fugiat perferendis similique deserunt quam aut soluta aliquam.
                            </div>
                            <div class="promotions__boxDateCont">
                                <img
                                    src="<?php bloginfo('template_directory'); ?>/img/icons/callendar.svg"
                                    alt=""
                                    class="promotions__boxIcon"
                                />
                                <div class="promotions__boxDate">
                                    31.08.2018 - 30.09-2018
                                </div>
                            </div>
                            <a href="" class="promotions__boxLink">
                                Zobacz
                                <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="">
                            </a>
                        </div>
                        <div class="promotions__vividCont">
                            <div class="vividSection__container vividSection__container--centered">
                                <a href="promotions.html" class="vividSection__inner">
                                    <div class="vividSection__link">
                                        <div class="vividSection__linkText">
                                            Wszystkie <br />promocje
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