<?php echo $head; ?>
<?php echo $page_header; ?>
<?php // echo $inquiry_modal; ?>
<h1 id='' style='text-align:left'>Contact Us</h1>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#8A4117;background-size:100% auto; color:white;width:46%;padding:1%;height:auto;margin:1%;">
		<div id="map_canvas">
		</div>
    </div>
    <div class="pure-u-1-3" style="background:#8A4117;background-size:100% auto; color:white;width:46%;padding:1%;height:auto;margin:1%;">
    	<h1 style="text-align:left;">Address & Contact Location</h1>
    	<p>Address: 117 Shaw Boulevard, Pasig City, Metro Manila, Philippines</p>
    	<p>Tel: (632) 631-9123, 631-5291</p>
    	<p>Fax: (632) 634-3342</p>
    	<p>Email: sales@teresamarble.com</p>
    </div>
</div>
<br>
<div class="pure-g" style="text-align:left;">
    <div class="pure-u-1-3" style="background:#A66B24;color:white;width:31%;padding:1%;height:200px;margin-right:1%;">
    	<h1>Overview</h1>
    	<p>Today, Teresa Marble Corporation is the preeminent and acknowledged leader in the Philippine marble industry. The Rizal quarry site alone with its 7-hectare marble processing plant has an export capacity of 20,000 square meter slabs per month and 10,000 square meters of tiles per month.</p>
    </div>
    <div class="pure-u-1-3" style="background:#E19130; width:29%; height:200px;padding: 1%;">
    	<h1>Our Projects</h1>
    	<p>We have clients from Japan and United States. We also have well-known clients locally like Citibank Tower, Glorietta Mall and Cebu City Sports Club.</p>
    </div>
    <div class="pure-u-1-3" style="background:#A66B24; width:31%; padding: 1%; height:200px; margin-left: 1%; background-image:url('<?php echo URL::site('assets',true,false); ?>/phone-icon-hi.png'); background-repeat:no-repeat; background-position:bottom right;">
    	<h1>Teresa Marble Corporation</h1>
    	<p>Address: 117 Shaw Boulevard, Pasig City, PH</p>
    	<p>Tel: (632) 631-9123, 631-5291</p>
    	<p>Fax: (632) 634-3342</p>
    	<p>Email: sales@teresamarble.com</p>
    	<?php echo $fb; ?>
    </div>
</div>
</div>
<div class="footer">Copyright Teresa Marble Corporation 2013. All Rights Reserved</div>
<style type="text/css">
#map_canvas {
	width: 100%;
	height: 400px;
}
</style>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
$(document).ready(function(){
    function initialize() {
      var map_canvas = document.getElementById('map_canvas');
      var map_options = {
        center: new google.maps.LatLng(14.576377, 121.085110),
        zoom: 17,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(map_canvas, map_options)
    }
    google.maps.event.addDomListener(window, 'load', initialize);	
});
</script>
</body>
</html>