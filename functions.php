<?php 

function portfolio_scripts_styles() {
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

add_action( 'wp_enqueue_scripts', 'portfolio_scripts_styles');


/**
 * Register Portfolios posts types.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 *
 * @since portfolio 0.1
 */
function portfolio_register_post_type() {
	$labels = array(
		'name'               => _x( 'Portfolios', 'post type general name', 'portfolio' ),
		'singular_name'      => _x( 'Portfolio', 'post type singular name', 'portfolio' ),
		'menu_name'          => _x( 'Portfolios', 'admin menu', 'portfolio' ),
		'name_admin_bar'     => _x( 'Portfolio', 'add new on admin bar', 'portfolio' ),
		'add_new'            => _x( 'Add New', 'portfolio', 'portfolio' ),
		'add_new_item'       => __( 'Add New Portfolio', 'portfolio' ),
		'new_item'           => __( 'New Portfolio', 'portfolio' ),
		'edit_item'          => __( 'Edit Portfolio', 'portfolio' ),
		'view_item'          => __( 'View Portfolio', 'portfolio' ),
		'all_items'          => __( 'All Portfolios', 'portfolio' ),
		'search_items'       => __( 'Search Portfolios', 'portfolio' ),
		'parent_item_colon'  => __( 'Parent Portfolios:', 'portfolio' ),
		'not_found'          => __( 'No portfolios found.', 'portfolio' ),
		'not_found_in_trash' => __( 'No portfolios found in Trash.', 'portfolio' )
	);
	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'portfolio' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'portfolio' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);
	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'portfolio_register_post_type' );

?>