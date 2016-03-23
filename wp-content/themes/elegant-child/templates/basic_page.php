<?php
/**
 * Template Name: Basic Page
 *
 * Template for displaying basic content pages with a background
 *
 * @package     Elegant Child WordPress theme
 * @subpackage  Templates
 * @author      Sebastián González
 * @since       1.0.0
 */

get_header(); ?>

	<div id="primary" class="content-area clr">

		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php $bg_image = get_field("background_image"); ?>
				
			<div class="color-overlay" style=" background-image: url(<?php echo $bg_image['url']; ?>)">
                <div class="background-overlay" style="background-color: <?php the_field("background_color"); ?>"></div>
            </div>


				
			<main id="content" class="site-content" role="main">

				<h1><?php the_title(); ?></h1>

				<?php the_content(); ?>

			</main><!-- #content -->

		<?php endwhile; ?>

		<?php //get_sidebar(); ?>

	</div><!-- #primary -->

<?php get_footer(); ?>