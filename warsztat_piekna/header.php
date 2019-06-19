<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
      <?php if(is_search()) :?>
            <meta name="robots" content="noindex, nofollow" />
        <?php endif; ?>
		<!-- scripts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:200,400,600,700,900|Roboto:200,400,600" rel="stylesheet">
        <script src="<?php echo warsztat_piekna ?>/js/capitalizeFirstLetter.js"></script>
        <script src="<?php echo warsztat_piekna ?>/js/dotsGrid.js"></script>
        <script src="<?php echo warsztat_piekna ?>/js/map.js" charset="UTF-8"></script>
        <script src="<?php echo warsztat_piekna ?>/js/menu.js"></script>
        <script src="<?php echo warsztat_piekna ?>/js/scrollBar.js"></script>
		<script src="<?php echo warsztat_piekna ?>/js/slider.js"></script>
			<!--end scripts -->
		<!-- styles -->
		<link href="<?php get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo get_template_directory_uri();?>/css/__global.scss" rel="stylesheet"/>
        <link href="<?php echo get_template_directory_uri();?>/css/__variables.scss" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri();?>/css/_animations.scss" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri();?>/css/_contact.scss" rel="stylesheet"/>
        <link href="<?php echo get_template_directory_uri();?>/css/_dotsGrid.scss" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri();?>/css/_footer.scss" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri();?>/css/_headerWithShadow.scss" rel="stylesheet"/>
        <link href="<?php echo get_template_directory_uri();?>/css/_holika.scss" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri();?>/css/_linkWithArrow.scss" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri();?>/css/_menu.scss" rel="stylesheet"/>
        <link href="<?php echo get_template_directory_uri();?>/css/_navbar.scss" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri();?>/css/_offer.scss" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri();?>/css/_promotions.scss" rel="stylesheet"/>
        <link href="<?php echo get_template_directory_uri();?>/css/_slider.scss" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri();?>/css/_vividSection.scss" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri();?>/css/_welcome.scss" rel="stylesheet"/>
        <link href="<?php echo get_template_directory_uri();?>/css/_welcomeOffer.scss" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri();?>/css/_withLine.scss" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri();?>/css/main.scss" rel="stylesheet"/>
		<link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet"/>
		<!-- end styles-->
		<link rel="pingback" href="<?php bloginfo('pingback_url');?>" >
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		
        <!-- Animation on sctoll library -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <title><?php
                
                if(is_archive()) {
                    echo ucfirst(trim(wp_title('', false))) . ' - ';  
                } else 
                    
                if(!(is_404()) && (is_single()) || (is_page())) {
                    $title = wp_title('', false);
                    if(!empty($title)) {
                        echo $title ;
                    }
                } else 

                if(is_404()) {
                    echo 'Nie znaleziono strony';
                }
                        
                if (is_home()) {
                    bloginfo('name');
                    echo ' - ';
                    bloginfo('description');
                    } else {
                        // echo bloginfo('name');
                    }
                    

                global $paged;
                if($paged > 1) {
                    echo ' - strona ' . $paged; 
                }

            ?></title>
    <?php wp_head(); ?>
    </head>
    <body <?php body_class()?>>

        <main class="global__content">

            <nav class="navbar__container">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo.svg" alt="Warsztat piękna" class="navbar__logo" />
                <div class="navbar__menuTogglerCont">
                    <div class="navbar__menuToggler" onclick="toggleMenu()">
                        <div class="navbar__menuBar" ></div>
                        <div class="navbar__menuBar"></div>
                        <div class="navbar__menuBar"></div>
                    </div>
                </div>

                <div class="menu__container">
                    <div class="menu__scrollable">
                        <ul class="menu__list">
                            <li class="menu__item menu__item--active">
                                <a href="home.php" class="menu__link">
                                    <span><?php bloginfo('name'); ?><span><?php bloginfo('description'); ?></span><?php wp_list_pages('title_li='); ?></span>
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="oferta.php" class="menu__link">
                                    <span><?php wp_list_pages('title_li='); ?></span>
                                </a>
                                <div class="menu__subMenuCont">
                                    <div class="menu__subMenu">
                                        <div class="withLine withLine--pink">
                                            <h6 class="menu__subHeader">
                                                Gabinet kosmetyczny
                                            </h6>
                                        </div>
                                        <div class="menu__subList">
                                            <a href="" class="menu__subItem">
                                                Zabiegi na twarz i ciało
                                            </a>
                                            <a href="" class="menu__subItem">
                                                Makijaż permanentny
                                            </a>
                                            <a href="" class="menu__subItem">
                                                Manicure i pedicure
                                            </a>
                                            <a href="" class="menu__subItem">
                                                Laseroterapia - Laser IPL
                                            </a>
                                            <a href="" class="menu__subItem">
                                                Pielęgnacja oczu
                                            </a>
                                            <a href="" class="menu__subItem">
                                                Depilacja woskiem
                                            </a>
                                            <a href="" class="menu__subItem">
                                                Dla mężczyzn
                                            </a>
                                            <a href="" class="menu__subItem menu__subItem--special">
                                                Specjalne oferty
                                            </a>
                                        </div>
                                    </div>
                                    <div class="menu__subMenu menu__subMenu--desktop">
                                        <div class="withLine">
                                            <h6 class="menu__subHeader">
                                                Oferta naturalnych kosmetyków
                                            </h6>
                                        </div>
                                        <div class="menu__subList">
                                            <a href="" class="menu__subItem">
                                                Pielęgnacja twarzy
                                            </a>
                                            <a href="" class="menu__subItem">
                                                Kremy i emulsje
                                            </a>
                                            <a href="" class="menu__subItem">
                                                Kremy BB
                                            </a>
                                            <a href="" class="menu__subItem">
                                                Makijaż
                                            </a>
                                            <a href="" class="menu__subItem">
                                                Ciało
                                            </a>
                                            <a href="" class="menu__subItem">
                                                Maseczki i peelingi
                                            </a>
                                            <a href="" class="menu__subItem menu__subItem--special">
                                                Promocje
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu__item menu__item--pink menu__item--blackForDesktop">
                                <a href="promocja.php" class="menu__link">
                                    <span><?php wp_list_pages('title_li='); ?></span>
                                </a>
                            </li>
                            <li class="menu__item menu__item--contact">
                                <div class="menu__contact--mobile">
                                    <div class="vividSection__container vividSection__container--low">
                                        <a href="" class="vividSection__inner">
                                            <div class="vividSection__link">
                                                <div class="vividSection__linkText">
                                                    Umów się<br />
                                                    na wizytę
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
                                <a href="kontakt.php" class="menu__link menu__contact--desktop">
                                    <span><?php wp_list_pages('title_li='); ?></span>
                                </a>
                            </li>
                        </ul>
                  
				  </div>
                </div>

            </nav>
			

 