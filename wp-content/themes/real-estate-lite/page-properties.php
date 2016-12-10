<?php
/**
 * Template Name: Properties
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
	<h1 class="center">Featured Project Title</h1>
	<h3>Click to dowload PDF CTA as 'READ MORE'</h3>
</div>
<div class="content-wrapper col-center">
	<?php
		if(have_rows('properties')) : while(have_rows('properties')) : the_row();
		$property_title = get_sub_field('property_title');
		$property_body = get_sub_field('property_body');
		$property_link = get_sub_field('property_link');
		$property_link_text = get_sub_field('property_link_text');
		$property_bgImg = get_sub_field('property_bgImg');
	?>
		<div class="about-section six-col center" style="background-image: url('<?php echo $property_bgImg; ?>'); background-size: cover;">
			<h3><?php echo $property_title; ?></h3>
			<p><?php echo $property_body; ?></p>
			<a class="customButton" href="<?php echo $property_link; ?>"><?php echo $property_link_text; ?></a>
		</div>

	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>