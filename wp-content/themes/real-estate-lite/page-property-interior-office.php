<?php
/**
 * Template Name: Property Interior - Office
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
	
	<?php
		$property_interior_office_header = get_field('property_interior_office_header');
		$property_interior_office_intro_copy = get_field('property_interior_office_intro_copy');
	?>
	<h1 class="center"><?php the_field('property_interior_office_header') ?></h1>
	<h2 class="center"><?php echo $property_interior_office_intro_copy; ?></h2>
</div>
<div class="content-wrapper col-center">
	<?php
		if(have_rows('property_interior_office')) : while(have_rows('property_interior_office')) : the_row();
		$property_interior_office_title = get_sub_field('property_interior_office_title');
		$property_interior_office_body = get_sub_field('property_interior_office_body');
		$property_interior_office_pdf = get_sub_field('property_interior_office_pdf');
		$property_interior_office_pdf_text = get_sub_field('property_interior_office_pdf_text');
		$property_interior_office_link_text = get_sub_field('property_interior_office_link_text');
		$property_interior_office_link = get_sub_field('property_interior_office_link');
		$property_interior_office_background_image = get_sub_field('property_interior_office_background_image');
	?>
		<div class="interiorProperty-section four-col center">
			<div class="interiorProperty-bgImg" style="background-image: url('<?php echo $property_interior_office_background_image; ?>')"></div>
			<div class="propertyContent">
				<h3><?php echo $property_interior_office_title; ?></h3>
				<p><?php echo $property_interior_office_body; ?></p>
				<a class="customButtonPDF" href="<?php echo $property_interior_office_pdf; ?>"><?php echo $property_interior_office_pdf_text; ?></a>
				<a class="customButton" href="<?php echo $property_interior_office_link; ?>"><?php echo $property_interior_office_link_text; ?></a>
			</div>
		</div>

	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>