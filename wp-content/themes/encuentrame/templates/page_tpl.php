<?php 
 /**
 * Template Name: page
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
				<li><a href="./login.html">Login</a></li>
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
	var locations = [{"titulo":"Paviferia de Surco","latitud":"-12.152435803419683","longitud":"-76.98743999999999","contenido":"<p><b>\u00a0Surco\u00a0<\/b>&#8211;\u00a0Jr. Francisco Mari\u00e1tegui Alt. Cdra 4. Av. Los Proceres.<\/p>\n<p><strong>Fecha de Atenci\u00f3n: <\/strong>\u00a0desde el 21 al 24 de diciembre y del 28 al 30 de diciembre del 2017<\/p>\n<p><strong>Horario de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n<p>&nbsp;<\/p>\n","categorias":"cerdo_pavo"},{"titulo":"Multimarket San Miguel ","latitud":"-12.063588003393908","longitud":"-77.097444","contenido":"<p><strong>San Miguel <\/strong>&#8211;\u00a0Av. Elmer Faucett 579.<\/p>\n<p><strong>Horario:<\/strong> Lunes a s\u00e1bado de 8:00 a.m. a 9:00 p.m. Domingos de 8:00 a.m. a 8:00 pm.<br \/>\n<strong>Tel\u00e9fono:\u00a0<\/strong>4194380<\/p>\n","categorias":"consumo"},{"titulo":"Multimarket Encalada ","latitud":"-12.110237503407411","longitud":"-76.97276169999998","contenido":"<p><strong>Santiago de Surco<\/strong> &#8211; Av. Encalada 464.<\/p>\n<p><strong>Horario:<\/strong> Lunes a s\u00e1bado de 8:00 a.m. a 9:00 p.m. Domingos de 8:00 a.m. a 8:00 pm.<br \/>\n<strong>Tel\u00e9fono: <\/strong>4194390<\/p>\n","categorias":"consumo"},{"titulo":" Multimarket Caminos del Inca","latitud":"-12.120992803410516","longitud":"-76.98787020000003","contenido":"<p><strong>Santiago de Surco<\/strong> &#8211; Av. Caminos de Inca 1012.<\/p>\n<p><strong>Horario:<\/strong> Lunes a s\u00e1bado de 8:00 a.m. a 9:00 p.m. Domingos de 8:00 a.m. a 8:00 pm.<br \/>\n<strong>Tel\u00e9fono: <\/strong>4194360<\/p>\n","categorias":"consumo"},{"titulo":"Multimarket Surquillo","latitud":"-12.107628303406644","longitud":"-77.0182926","contenido":"<p><strong>Surquillo<\/strong> &#8211; Av. Rep\u00fablica de Panam\u00e1 4299.<\/p>\n<p><strong>Horario:<\/strong> Lunes a viernes\u00a0de 8:00 a.m. a 9:00 p.m. S\u00e1bados y Domingos de 8:00 a.m. a 4:00 pm.<br \/>\n<strong>Tel\u00e9fono: <\/strong>4194370<\/p>\n","categorias":"consumo"},{"titulo":"Paviferia de Comas","latitud":"-11.937633953357423","longitud":"-77.06657339999998","contenido":"<p><strong>Comas<\/strong> <strong>&#8211;<\/strong> Av. Los \u00a0Angeles N\u00b0 695-697 Urb. El Retablo (Complejo Comercial Unicachi).<\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 21 al 24 de diciembre y del 28 al 30 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n<p>&nbsp;<\/p>\n","categorias":"pavo"},{"titulo":"Paviferia de Lima","latitud":"-12.06132545","longitud":"-77.08594701","contenido":"<p><strong>Lima<\/strong>\u00a0<strong>&#8211;<\/strong>\u00a0Av. Venezuela (Al costado de la Hueca) Estadio San Marcos Puerta 1.<\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 21 al 24 de diciembre y del 28 al 30 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n","categorias":"pavo"},{"titulo":"Paviferia de Los Olivos","latitud":"-12.01008599","longitud":"-77.08801541","contenido":"<p><strong>Los Olivos<\/strong>\u00a0<strong>&#8211;<\/strong>\u00a0Av. Ang\u00e9lica Gamarra Cdra. 2 (Estadio Guadalupano).<\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 21 al 24 de diciembre y del 28 al 30 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n","categorias":"cerdo_pavo"},{"titulo":"Paviferia de San Juan de Miraflores","latitud":"-12.1617779","longitud":"-76.9644495","contenido":"<p><strong>San Juan de Miraflores<\/strong><strong>&#8211;<\/strong>\u00a0Av. Billinghurst 915 en el Colegio San Juan\u00a0 (a 3 cuadras de la Municipalidad de SJM).<\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 21 al 24 de diciembre y del 28 al 30 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n","categorias":"cerdo_pavo"},{"titulo":"Paviferia de San Juan de Lurigancho","latitud":"-11.98098912","longitud":"-76.99966756","contenido":"<p><strong>San Juan de Lurigancho<\/strong><strong>&#8211;<\/strong> Av. del\u00a0Parque\u00a0s\/n (Frente Universidad C\u00e9sar Vallejo).<\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 21 al 24 de diciembre y del 28 al 30 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n","categorias":"cerdo_pavo"},{"titulo":"Paviferia de Santa Anita","latitud":"-12.0434869","longitud":"-76.945954","contenido":"<p><strong>Santa Anita<\/strong><strong>&#8211;<\/strong>\u00a0Av. de la\u00a0Cultura 701 Puerta N\u00b04 Mercado de Productores (Altura km 3.5 de la Carretera Central).<\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 21 al 24 de diciembre y del 28 al 30 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n","categorias":"pavo"},{"titulo":"Paviferia de Chorrillos","latitud":"-12.1790007","longitud":"-76.9954524","contenido":"<p><strong>Chorrillos<\/strong><strong>&#8211;<\/strong>\u00a0 Av. El Sol N\u00b0 1395 La Campi\u00f1a (a 1\/2 \u00a0cuadra\u00a0del cruce con Av. Guardia Civil).<\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 21 al 24 de diciembre y del 28 al 30 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n","categorias":"pavo"},{"titulo":"Agentes Express de Ventanilla","latitud":"-11.82807913","longitud":"-77.12019674","contenido":"<p><strong>Ventanilla-<\/strong> Av. M. Calder\u00f3n S\/N puerta 2 &#8211; Complejo Deportivo de la Urb.\u00a0\u00a0Antonia Moreno de C\u00e1ceres\u00a0\u00a0(Costado del Hospital Chalaco III)<\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 21 al 24 de diciembre y del 28 al 30 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n","categorias":"pavo"},{"titulo":"Tienda Afiliada de San Juan de Miraflores ","latitud":"-12.1581802","longitud":"-76.9648921","contenido":"<p><strong>San Juan de Miraflores &#8211;<\/strong>\u00a0Av. Jos\u00e9 Charriarse 496.<\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 16 al 24 de diciembre y del 26 al 31 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 \u00a0y 31 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n","categorias":"pavo"},{"titulo":"Tienda Afiliada de Lince","latitud":"-12.0865961","longitud":"-77.0331263","contenido":"<p><strong>Lince\u00a0&#8211;<\/strong> Av. Petit Thouars 2260.<\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 16 al 24 de diciembre y del 26 al 31 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 \u00a0y 31 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n","categorias":"pavo"},{"titulo":"Tienda Afiliada de Callao","latitud":"-12.0483715","longitud":"-77.1112651","contenido":"<p><strong>Callao &#8211;<\/strong> Av. Argentina 3093 PB 4 PJE 1 Local 13, Minka.<\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 16 al 24 de diciembre y del 26 al 31 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 \u00a0y 31 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n","categorias":"pavo"},{"titulo":"Tienda Afiliada de Ate","latitud":"-12.0760109","longitud":"-76.9882571","contenido":"<p><strong>Ate\u00a0&#8211;<\/strong> Av. Los Paracas 162.<\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 16 al 24 de diciembre y del 26 al 31 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 \u00a0y 31 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n","categorias":"pavo"},{"titulo":"Tienda Afiliada La Victoria","latitud":"-12.07284","longitud":"-77.00915529999997","contenido":"<p><strong>La Victoria\u00a0&#8211;<\/strong> Jr.3 de Febrero 1247. Urb. Apolo.<\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 16 al 24 de diciembre y del 26 al 31 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 \u00a0y 31 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n","categorias":"pavo"},{"titulo":"Tienda Afiliada de Pueblo Libre","latitud":"30.062799","longitud":"-94.09578499999998","contenido":"<p><strong>Pueblo Libre &#8211;<\/strong> Av. Bolivar 1149.<\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 16 al 24 de diciembre y del 26 al 31 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 \u00a0y 31 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n","categorias":"pavo"},{"titulo":"Tienda Afiliada de Carabayllo","latitud":"-11.8986226","longitud":"-77.03297079999999","contenido":"<p><strong>Carabayllo\u00a0&#8211;<\/strong> Jr. Amaranto 120 Urb. Santa Isabel.<\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 16 al 24 de diciembre y del 26 al 31 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 \u00a0y 31 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n","categorias":"pavo"},{"titulo":"Tienda Afiliada de Chorrillos","latitud":"-12.1706607","longitud":"-77.02445969999997","contenido":"<p><strong>Chorrillos\u00a0&#8211;<\/strong> Jr. Justo Naveda 136.<\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 16 al 24 de diciembre y del 26 al 31 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 \u00a0y 31 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n","categorias":"pavo"},{"titulo":"Tienda Afiliada de Bre\u00f1a","latitud":"-12.0540634","longitud":"-77.04921130000002","contenido":"<p><strong>Bre\u00f1a\u00a0&#8211;<\/strong> Jr. Carhuaz 597. Urb Chacra Colorada.<\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 16 al 24 de diciembre y del 26 al 31 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 \u00a0y 31 de diciembre de 8:00 a.m. a 1:00 p.m<\/p>\n","categorias":"pavo"},{"titulo":"Paviferia de Surco","latitud":"-12.120991470787253","longitud":"-76.98819341559141","contenido":"<p><strong>Surco<\/strong>\u00a0<strong>&#8211; Av. Higuereta<\/strong><\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 21 al 24 de diciembre y del 29 al 31 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 y 31 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n","categorias":"pavo"},{"titulo":"Paviferia de Surquillo","latitud":"-12.107824903458573","longitud":"-77.01794204841002","contenido":"<p><strong>Surquillo<\/strong>\u00a0<strong>&#8211;\u00a015 de Agosto<\/strong><\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 21 al 24 de diciembre y del 29 al 31 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 y 31 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n","categorias":"pavo"},{"titulo":"Paviferia de San Miguel","latitud":"-12.0640192","longitud":"-77.09717649999999","contenido":"<p><strong>San Miguel<\/strong>\u00a0<strong>&#8211; Av.\u00a0Elmer Faucett cuadra 5<\/strong><\/p>\n<p><strong>Fecha de Atenci\u00f3n:\u00a0<\/strong>\u00a0desde el 21 al 24 de diciembre y del 29 al 31 de diciembre del 2017.<\/p>\n<p><strong>Horario\u00a0de Atenci\u00f3n:<\/strong>de 8:00 a.m. a 7:00 p.m.<\/p>\n<p>*El 24 y 31 de diciembre de 8:00 a.m. a 1:00 p.m.<\/p>\n","categorias":"pavo"}];

	function addMarker(locations){
		for (i = 0; i < locations.length; i++) {  
			marker = new google.maps.Marker({
			  position: new google.maps.LatLng(locations[i].latitud, locations[i].longitud),
			  map: map,
			  icon: icon
			});
			
			google.maps.event.addListener(marker, 'click', (function(marker, i) {
			        return function() {
			          var contenidoG = '<div class="contenBoxGoogle"><h3>'+locations[i].titulo+'</h3><div class="imagenesGoogle"><i class="categ_'+locations[i].categorias+'"></i></div></div><div class="contentGoogle">'+locations[i].contenido+'</div></div>';
			          infoWindow.setContent(contenidoG);
			          infoWindow.open(map, marker);
			        }
			    })(marker, i));
			markers.push(marker);
		}
	}

	function initMap() {
		map = new google.maps.Map(document.getElementById('googlemap'), {
					  center:	pos//{lat: -12.0266034, lng: -77.1278645}
					  ,zoom:	12
		});
					
					infoWindow = new google.maps.InfoWindow({map: map});
					setMyLocation();
					addMarker(filterLocations());
				}

	function setMapOnAll(map) {
	for (var i = 0; i < markers.length; i++) {
	  markers[i].setMap(map);
	}
	for (var i=0;i<rutas.length;i++) {
		rutas[i].setMap(null);
	}
}


function nearLocal(start) {
	var km_distance = [];
	console.log(pos);
	lat = pos.lat;
	lng = pos.lng;
	
	if(start) {
		lat = start.lat;
		lng = start.lng;
	}
	var partida = new google.maps.LatLng(lat, lng);
	for (var i = 0; i < locations.length; i++) {  
		var pre_destino = new google.maps.LatLng(locations[i].latitud, locations[i].longitud);
		/*diferencia de puntos en kilometros*/
		var km_diferencia = (google.maps.geometry.spherical.computeDistanceBetween(partida, pre_destino) / 1000).toFixed(2);	
		//console.log(minimo_aux);							
		km_distance.push(Math.round(km_diferencia));
	}
	minimo = Math.min.apply(null,km_distance);
	near = km_distance.indexOf(minimo);
	var destino = new google.maps.LatLng(locations[near].latitud, locations[near].longitud);
	var request = {
		origin: partida
		,destination: destino
		,travelMode: google.maps.TravelMode.DRIVING
	};
	
	var directionsDisplay = new google.maps.DirectionsRenderer();
	var directionsService = new google.maps.DirectionsService();
	
	directionsDisplay.setMap(null);
	
	directionsService.route(request, function(response, status) {
		if (status == 'OK') {
			directionsDisplay.setDirections(response);
			directionsDisplay.setMap(map);
			directionsDisplay.setOptions( { suppressMarkers: true } );
		}
	});
    
    
    //EDIT 11-08-2017 EYT
    
    var marker_origin = new google.maps.Marker({
		  position: partida,
		  map: map,
		  icon: icon_origin
		});
    
    markers.push(marker_origin);
    
	rutas.push(directionsDisplay);
}

function filterLocations(filter) {
	var arrayReturn = [];
	if(!filter) {
		for(i =0; i < locations.length; i++) {
			arrayReturn.push({
				categorias : locations[i].categorias
				,contenido : locations[i].contenido
				,longitud : locations[i].longitud
				,latitud : locations[i].latitud
				,titulo : locations[i].titulo
			});
		}
	} else {
		for(i =0; i < locations.length; i++) {
			if(locations[i].categorias==filter) {
				arrayReturn.push({
			    	categorias : locations[i].categorias
			    	,contenido : locations[i].contenido
			    	,longitud : locations[i].longitud
			    	,latitud : locations[i].latitud
			    	,titulo : locations[i].titulo
			    });
			}
		}
	}
	return arrayReturn;
}

				function setMyLocation() {
					if (navigator.geolocation) {
						navigator.geolocation.getCurrentPosition(function(position) {
						  posicion = {
							lat:	position.coords.latitude
							,lng:	position.coords.longitude
						  };
			              map.setCenter(posicion);
			              nearLocal(posicion);
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