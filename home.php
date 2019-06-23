<?php get_header(); ?>

<h1><?php the_title(); ?></h1>
                        <div class="welcome__textCont">
                            <h1 class="welcome__header">
                                <div class="welcome__withUnderline"><?php if( get_field('header_top_title') ): ?>
    <h2><?php the_field('header_top_title'); ?></h2>
<?php endif; ?></div>
                                <span class="welcome__headerSub">piękna wita</span>
                            </h1>
                            <div class="welcome__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur molestias modi aperiam fugit rerum sit, commodi atque quia dolorem enim.
                            </div>
                            <div class="welcome__linkCont">
                                <div class="linkWithArrow__cont">
                                    <a href="offer.html" class="linkWithArrow__text">
                                        Sprawdź ofertę
                                    </a>
                                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/arrow.svg" alt="⭢" class="linkWithArrow__arrow">
                                </div>
                            </div>
                        </div>
                    </div>
<?php if( get_field('sub_heading') ): ?>
    <h2><?php the_field('sub_heading'); ?></h2>
<?php endif; ?>

<div class="hero">
    <?php $image = get_field('hero_image'); ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</div>

<?php if( have_rows('event') ): ?>
    <ul>
    <?php while( have_rows('event') ): the_row(); ?>
        <li>
            <a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('title'); ?></a>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>
<?php get_footer(); ?>