<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wedding_Band
 */
$sidebar_layout = wedding_band_sidebar_layout();
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

			   get_template_part( 'template-parts/content', 'page' );

			   /**
               * Comments
               * 
               * @hooked wedding_band_get_comment_section 
               */
                do_action( 'wedding_band_comment' );   
    
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
 if( $sidebar_layout == 'right-sidebar' ){
        get_sidebar();
    }
get_footer();
