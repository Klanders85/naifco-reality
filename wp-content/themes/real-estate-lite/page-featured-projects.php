<?php
/**
 * Template Name: Featured Projects
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
	<h2>Featured Project Description</h2>

	<h3>Click to dowload PDF CTA as 'READ MORE'</h3>
</div>
<div class="content-wrapper col-center">
	<?php
		if(have_rows('featured_projects')) : while(have_rows('featured_projects')) : the_row();
		$project_title = get_sub_field('project_title');
		$project_body = get_sub_field('project_body');
		$project_link = get_sub_field('project_link');
		$project_link_text = get_sub_field('project_link_text');
		$project_bgImg = get_sub_field('project_bgImg');
	?>
		<div class="about-section six-col center" style="background-image: url('<?php echo $project_bgImg; ?>'); background-size: cover;">
			<h3><?php echo $project_title; ?></h3>
			<p><?php echo $project_body; ?></p>
			<a class="customButton" href="<?php echo $project_link; ?>"><?php echo $project_link_text; ?></a>
		</div>

	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>