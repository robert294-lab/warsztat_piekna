<?php

/**
 * Załączenie stylów i skryptów do motywu
 */
function cloudyblog_scripts() {

  wp_enqueue_style( 'warsztat_piekna-style', get_stylesheet_uri(). '/css/_menu.scss',false,'1.1','all' );
  wp_enqueue_script( 'warsztat_piekna-script', get_template_directory_uri() . '/js/menu.js', array(), '20151215', true );

}
add_action( 'wp_enqueue_script', 'wp_enqueue_script' );