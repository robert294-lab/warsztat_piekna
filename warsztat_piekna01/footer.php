 <footer class="footer">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo_pion.svg" alt="" class="footer__logo" />
                <div class="footer__copyright">
                    <?php the_field('copyright'); ?>
                </div>
                <div class="footer__socialsCont">
                    <a href="" class="footer__socialLink">
                        <?php $image = get_field('social_icon_01'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size );}?>
                    </a>
                    <a href="" class="footer__socialLink">
                        <?php $image = get_field('social_icon_02'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size );}?>
                    </a>
                    <a href="" class="footer__socialLink">
                        <?php $image = get_field('social_icon_03'); $size = 'full'; if( $image ) { echo wp_get_attachment_image( $image, $size );}?>
                    </a>
                </div>
            </footer>
<?php wp_footer(); ?>
