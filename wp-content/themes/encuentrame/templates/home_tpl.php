<?php 
 /**
 * Template Name: home
 */
 get_header();
?>

<?php get_footer(); ?>
<!-- Menu Top and Lateral -->
	<nav>
		<div id="menu_top" class="nav-wrapper">
			<a href="./" class="brand-logo">Encuentra.me</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a id="search-button"><i class="material-icons">search</i></a></li>
				<li><a href="./login">Login</a></li>
			</ul>
		</div>
		<div id="nav-wrapper-search" class="nav-wrapper hidden">
			<form>
				<div class="input-field">
					<input id="search" placeholder="Búsqueda directa" id="search" type="search" required>
					<label class="label-icon" for="search"><i class="material-icons">search</i></label>
					<i id="nav-wrapper--close" class="material-icons">close</i>
				</div>
			</form>
		</div>
		<ul class="side-nav" id="mobile-demo">
			<div class="col s12 m8 offset-m2 l6 offset-l3">
				<a href="#" class="card-panel grey lighten-5 z-depth-1">
					<div class="row valign-wrapper">
						<div class="col s10 info">
							<h5 class="blue-text text-darken-2">Section 1 <span>a 140 metros</span><i class="material-icons">navigate_next</i></h5>
							<p>Tienda cercana a la casa de los pollitos</p>
						</div>
						<div class="col s2 extra">
							<img src="https://marketplace.canva.com/MAB5nccL-pw/1/thumbnail/canva-arrow-MAB5nccL-pw.png" alt="" class="circle responsive-img">
						</div>
					</div>
				</a>
			</div>
		</ul>
	</nav>
	
	<!-- Floating Button -->
	<div class="fixed-action-btn click-to-toggle">
		<a class="btn-floating btn-large red">
			<i class="large material-icons">add</i>
		</a>
		<ul class="no-circular-floating">
			<li><a class="btn-floating waves-effect waves-light btn">Volver al anterior</a></li>
			<li><a class="btn-floating waves-effect waves-light btn">Ir al siguiente</a></li>
			<li><a href="#" data-activates="mobile-demo" class="button-collapse btn-floating waves-effect waves-light btn">Más establecimientos</a></li>
		</ul>
	</div>
	
	<!-- GMaps -->
	<div id="googlemap">		
	</div>
<script type="text/javascript">
	var map, infoWindow, posOverride;
	var pos = {lat: -12.0266034, lng: -77.1278645};
	var markers = [];
	var rutas = [];
	var icon = " http://sarai.dhdinc.org/sanfernando/wp-content/themes/manya-sanfernando/assets/images/static/pin_mapa.png";
	var icon_origin = " http://sarai.dhdinc.org/sanfernando/wp-content/themes/manya-sanfernando/assets/images/static/pin_mapa2.png"; 	

	function initMap() {
		map = new google.maps.Map(document.getElementById('googlemap'), {
					  center:	pos//{lat: -12.0266034, lng: -77.1278645}
					  ,zoom:	12
		});
					
					infoWindow = new google.maps.InfoWindow({map: map});
					setMyLocation();
				}

				function setMyLocation() {
					if (navigator.geolocation) {
						navigator.geolocation.getCurrentPosition(function(position) {
						  posicion = {
							lat:	position.coords.latitude
							,lng:	position.coords.longitude
						  };
						  infoWindow.setPosition(posicion);
			              infoWindow.setContent('aqui ando cdsm');
			              map.setCenter(posicion);
						});
					} else {
						console.log("error: Navegador no soportado");
					}
				}
      	(function($) {
		})( jQuery );
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrGN1sWuslODj8wpoSYqYw4Z2A7mq_pwQ&sensor=false&callback=initMap&libraries=geometry,places,drawing&ext=.js" type="text/javascript"></script>

</body>
</html>