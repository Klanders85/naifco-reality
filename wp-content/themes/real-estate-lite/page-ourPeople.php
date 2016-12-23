<?php
/**
 * Template Name: Our People
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
		<main id="main" class="site-main" role="main" style="padding: 20px;">	
		<?php dynamic_sidebar( 'page' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'home-page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->

		<div class="col-center">
		<h1 class="center">Our People</h1>
		<?php
			// check if the repeater field has rows of data
			if( have_rows('our_people') ): while ( have_rows('our_people') ) : the_row();
		        // display a sub field value
		        $peopleImage = get_sub_field('people_image');
		        $peopleName = get_sub_field('people_name');
		        $peopleSummary = get_sub_field('people_summary');
		?>
		<div class="mgmt-section six-col center">
			<div class="about-bgImg">
				<img src="<?php echo $peopleImage; ?>" alt="">
			</div>
			<h3><?php echo $peopleName; ?></h3>
			<div class="about-section-content">
				<p><?php echo $peopleSummary; ?></p>
			</div>
		</div>	
		<?php endwhile; endif; ?>	
		
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>