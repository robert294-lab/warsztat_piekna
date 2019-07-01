            <div class="scrollBar">
                <div class="scrollBar__container">
                    <img
                        src="<?php bloginfo('template_directory'); ?>/img/icons/scrollBar_arrow.svg"
                        alt=""
                        class="scrollBar__arrow scrollBar__arrow--up"
                    />
                    <div class="scrollBar__bulletsCont">
                        <!-- Generated automatically in scrollBar.js file -->
                    </div>
                    <img
                        src="<?php bloginfo('template_directory'); ?>/img/icons/scrollBar_arrow.svg"
                        alt=""
                        class="scrollBar__arrow scrollBar__arrow--down"
                    />
                </div>
            </div>

            <section class="welcome__container">
                <div class="welcome__loadingBar"></div>
                <div class="welcome__slidesCont">

                    <div class="welcome__sliderBox welcome__sliderBox--active">
                        <div class="welcome__heroCont">
                            <?php $image = get_field('welcome_image'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size );}?>
                        </div>
                        <div class="welcome__textCont">
                            <h1 class="welcome__header">
                                <div class="welcome__withUnderline"><?php the_field('header_top_title'); ?></div>
                                <span class="welcome__headerSub"><?php the_field('header_bottom_title'); ?></span>
                            </h1>
                            <div class="welcome__text">
                               <?php the_field('header_text'); ?>
                            </div>
                            <div class="welcome__linkCont">
                                <div class="linkWithArrow__cont">
                                    <a href="offer.html" class="linkWithArrow__text">
                                        <?php the_field('check_offer'); ?>
                                    </a>
                                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="⭢" class="linkWithArrow__arrow">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="welcome__sliderBox">
                        <div class="welcome__heroCont">
                            <?php $image = get_field('welcome_image_02'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size );}?>
							</div>
                        <div class="welcome__textCont">
                            <h1 class="welcome__header">
                                <div class="welcome__withUnderline"><?php the_field('header_top_title_02'); ?></div>
                                <span class="welcome__headerSub"><?php the_field('header_bottom_title_02'); ?></span>
                            </h1>
                            <div class="welcome__text">
                                <?php the_field('header_text_02'); ?>
                            </div>
                            <div class="welcome__linkCont">
                                <div class="linkWithArrow__cont">
                                    <a href="offer.html" class="linkWithArrow__text">
                                        <?php the_field('check_offer_02'); ?>
                                    </a>
                                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="⭢" class="linkWithArrow__arrow">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="welcome__sliderBox">
                        <div class="welcome__heroCont">
                            <?php $image = get_field('welcome_image_03'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size );}?>
                        </div>
                        <div class="welcome__textCont">
                            <h1 class="welcome__header">
                                <div class="welcome__withUnderline"><?php the_field('header_top_title_03'); ?></div>
                                <span class="welcome__headerSub"><?php the_field('header_bottom_title_03'); ?></span>
                            </h1>
                            <div class="welcome__text">
                                <?php the_field('header_text_03'); ?>
                            </div>
                            <div class="welcome__linkCont">
                                <div class="linkWithArrow__cont">
                                    <a href="offer.html" class="linkWithArrow__text">
                                        <?php the_field('check_offer_03'); ?>
                                    </a>
                                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="⭢" class="linkWithArrow__arrow">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="welcome__makeAppointmentCont">
                    <div class="vividSection__container">
                        <a href="" class="vividSection__inner">
                            <div class="vividSection__link">
                                <div class="vividSection__linkText">
                                    <?php the_field('visit'); ?><br />
                                    <?php the_field('visit_02'); ?>
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