<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
      <?php if(is_search()) :?>
            <meta name="robots" content="noindex, nofollow" />
        <?php endif; ?>
		<!-- scripts -->

<?php wp_enqueue_script( 'warsztat_piekna-letter', get_theme_file_uri( '/js/capitalizeFirstLetter.js' ), array(), '1.1', true );?>
<?php wp_enqueue_script( 'warsztat_piekna-grid', get_theme_file_uri( '/js/dotsGrid.js' ), array(), '1.1', true );?>
<?php wp_enqueue_script( 'warsztat_piekna-map', get_theme_file_uri( '/js/map.js' ), array(), '1.1', true );?>
<?php wp_enqueue_script( 'warsztat_piekna-menu', get_theme_file_uri( '/js/menu.js' ), array(), '1.1', true );?>
<?php wp_enqueue_script( 'warsztat_piekna-scrollBar', get_theme_file_uri( '/js/scrollBar.js' ), array(), '1.1', true );?>
<?php wp_enqueue_script( 'warsztat_piekna-slider', get_theme_file_uri( '/js/slider.js' ), array(), '1.1', true );?>
			<!--end scripts -->
		<!-- styles -->
		<link href="<?php get_stylesheet_uri(); ?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet"/>
		<!-- end styles-->
		<link rel="pingback" href="<?php bloginfo('pingback_url');?>" >
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		
        <!-- Animation on sctoll library -->
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.css" type="text/css" ></script>
		<script src="https://fonts.googleapis.com/css?family=Raleway:200,400,600,700,900|Roboto:200,400,600" rel="stylesheet" type="text/css" ></script>
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
			

 