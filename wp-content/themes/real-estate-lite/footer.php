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

	<footer>
		<div class="four-col contactLinkWrapper">
			<a href="/naifco/contact">Contact Us</a>
		</div>
		<div class="four-col mapWrapper">
			
				<!-- Begin Google Map -->
			<!DOCTYPE html>
			<html>
			  <head>
			    <style>
			       #map {
			        height: 400px;
			        width: 100%;
			       }
			    </style>
			  </head>
			  <body>
			    <h3>My Google Maps Demo</h3>
			    <div id="map"></div>
			    <script>
			      function initMap() {
			        var uluru = {lat: 35.468486, lng: -97.603783};
			        var map = new google.maps.Map(document.getElementById('map'), {
			          zoom: 15,
			          center: uluru
			        });
			        var marker = new google.maps.Marker({
			          position: uluru,
			          map: map
			        });
			      }
			    </script>
			    <script async defer
			    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdA5UDzmzaOH6F6a4ejqAb31uTc-fTE74&callback=initMap">
			    </script>
			  </body>
			</html>
			<!-- End Google Map -->
			
		</div>
		<div class="four-col newsLetterSignupWrapper">
			<?php echo smlsubform(); ?>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
