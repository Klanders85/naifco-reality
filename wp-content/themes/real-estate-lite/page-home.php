<?php
/**
 * Template Name: Home
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package real-estate-lite
 */

get_header(); realeast_page_title();?>

<?php if ( get_header_image() ) : ?>
	<div class="home-image">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
	</a>
	</div>
	<?php endif; // End header image check. ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php dynamic_sidebar( 'page' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'home-page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
		<div class="summarySectionWrapper col-center">
			
				<!-- the 2 strings properties are taken from the Name field of the field group -->
				<?php 
				if(have_rows('summary_section')) : while(have_rows('summary_section')) : the_row(); 
					// this is the method the get the parts that make up the repeater, you would have a specific variable for things like text, images, links, etc.
					// the string in get_sub_field HAS to match the name in the sub field spot on the CMS
					$summary_section_image = get_sub_field('summary_section_image');
					$summary_section_header = get_sub_field('summary_section_header');
					$summary_section_text = get_sub_field('summary_section_text');
				?>
					
					<div class="center four-col">
						<img src="<?php echo $summary_section_image;?>" alt="">
						<h4><?php echo $summary_section_header; ?></h4>
						<?php echo $summary_section_text; ?>
					</div>
				<?php endwhile; endif; ?>
		</div>
		<hr>

		<?php  
			$feature_project_image = get_field('feature_main_image');
			$feature_project_header = get_field('feature_project_header');
			$feature_project_text = get_field('feature_project_text');

			if( !empty($feature_project_image)) : ?>
			<!-- more styles with .featuredProject in authorStyles.css -->
			<div class="center featuredProject" style="background-image: url('<?php echo $feature_project_image; ?>');">
			<div class="contentWrapper">
				<h2><?php echo $feature_project_header; ?></h2>
				<p><?php echo $feature_project_text; ?></p>
			</div>
			<div class="buttonWrapper pull-right">
				<a class="button" href="#">Learn More</a>	
			</div>
				
			</div>
		<?php endif; ?>

		<div id="testimonialSlider" class="center">
			<?php echo do_shortcode("[show_testimonials]"); ?>
		</div>

	</div><!-- #primary -->

	

<?php get_footer(); ?>
