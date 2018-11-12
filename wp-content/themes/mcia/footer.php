

<a href="#slider" class="top"><i class="fa fa-chevron-up"></i></a>

<!--START SCRIPTS -->

<script src="https://maps.googleapis.com/maps/api/js?key=[YOUR_KEY_GOES_HERE]&callback=initMap" async defer type="text/javascript"></script>

<script>
  function initMap() {
	var uluru = {lat: 42.879489, lng: -78.876206};// Add your coordinates here
	var map = new google.maps.Map(document.getElementById('map_canvas'), {
	  zoom: 15,
	  center: uluru,
	  scrollwheel: false
	});
	var marker = new google.maps.Marker({
	  position: uluru,
	  map: map
	});
  }
</script>
<?php wp_footer(); ?>
</body>
</html>