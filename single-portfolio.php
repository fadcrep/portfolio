<?php
/**
* Template Name: Portfolio Page
*
* @package WordPress
* @subpackage Portfolio
* @since portfolio 1.0
*/
?>


<?php get_header(); ?>

	<div id="primary">
		<div id="content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<h1><?php the_title(); ?></h1>
				
				<?php the_content(); ?>
				
                <p>My custom field: <?php the_field('Titre'); 
                ?></p>
				
				

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>