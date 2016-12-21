<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package real-estate-lite
 */

?>

	</div><!-- #content -->

	<footer class="clearfix">
		<div class="four-col contactInfoWrapper">
			<ul>
				<li><a href="/naifco/contact">Contact Us</a></li>
				<li><i class="fa fa-phone"></i><span>(405) 555-1234</span></li>
				<li><i class="fa fa-fax"></i><span>(405) 555-4671</span></li>
				<li><i class="fa fa-home"></i><span>16200 Sonoma Park Drive ● Edmond,OK 73013</span></li>
				<li><i class="fa fa-envelope-o"></i><a href="mailto:info@ccdcproperties.com">info@ccdcproperties.com</a></li>
			</ul>
		</div>
		<div class="four-col mapWrapper hide-on-mobile">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3249.446690925197!2d-97.60597168495683!3d35.46849034921764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDI4JzA2LjUiTiA5N8KwMzYnMTMuNiJX!5e0!3m2!1sen!2sus!4v1481832839592" width="250" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="four-col newsLetterSignupWrapper">
			<?php echo smlsubform(); ?>
		</div>
	</footer>

</div><!-- #page -->
</div>

<?php wp_footer(); ?>

</body>
</html>
