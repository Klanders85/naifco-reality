<?php
/**
 * Template Name: About
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
	<h1 class="center">About Naifco Realty</h1>
	
	<?php $about_intro_header = get_field('intro_copy'); ?>
	<h2><?php echo $about_intro_header; ?></h2>
</div>
<div class="content-wrapper col-center">
	<?php
		if(have_rows('about_section')) : while(have_rows('about_section')) : the_row();
		$about_section_title = get_sub_field('section_title');
		$about_section_body = get_sub_field('section_body');
		$about_section_link = get_sub_field('section_link');
		$about_section_link_text = get_sub_field('section_link_text');
		$about_section_bgImg = get_sub_field('section_bgImg');
	?>
		<div class="about-section six-col center" style="background-image: url('<?php echo $about_section_bgImg; ?>'); background-size: cover;">
			<h3><?php echo $about_section_title; ?></h3>
			<p><?php echo $about_section_body; ?></p>
			<a class="button" href="<?php echo $about_section_link; ?>"><?php echo $about_section_link_text; ?></a>
		</div>

	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>