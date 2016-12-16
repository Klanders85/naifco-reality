<?php
/**
 * Template Name: Management Services
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
<div class="center intro-copy">
	<h1 class="center">Management Services</h1>
	
	<?php $about_intro_header = get_field('intro_copy'); ?>
	<h2><?php echo $about_intro_header; ?></h2>
</div>
<div class="content-wrapper col-center">
	<?php
		if(have_rows('services')) : while(have_rows('services')) : the_row();
		$service_title = get_sub_field('service_title');
		$service_body  = get_sub_field('service_body');
		$service_link  = get_sub_field('service_link');
		$service_link_text = get_sub_field('service_link_text');
		$service_background_image = get_sub_field('service_background_image');
	?>
		<div class="about-section six-col center" style="background-image: url('<?php echo $service_background_image; ?>'); background-size: cover;">
			<h3><?php echo $service_title; ?></h3>
			<p><?php echo $service_body; ?></p>
			<a class="customButton" href="<?php echo $service_link; ?>"><?php echo $service_link_text; ?></a>
		</div>

	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>