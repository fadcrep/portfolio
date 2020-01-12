<?php 

function bootship_scripts_styles() {
  /*
   * Adds JavaScript to pages with the comment form to support
   * sites with threaded comments (when in use).
   */
 
  // Loads our main stylesheet.
 
  wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '2016-08-09' );

  // Font Awesome stylesheet
  wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css', array(), '5.7.2' );

  wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0' );

  wp_enqueue_style( 'wpb-google-fonts-Monserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,700,800&display=swap', false ); 

  wp_enqueue_style( 'wpb-google-fonts-Lato', 'https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap', false ); 
}

add_action( 'wp_enqueue_scripts', 'bootship_scripts_styles');

?>