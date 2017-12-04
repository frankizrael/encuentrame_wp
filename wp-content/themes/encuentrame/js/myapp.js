/*DeFINICION DE LA LIBRERIA JAVASCRIPT DE encuentrame */
	function encuentrame( configs ) {
		this.configs = configs;
	}
	encuentrame.prototype.init = function(){
		console.log(arguments[0]);
	}
	encuentrame.prototype.focus = function( $id ){
		$id.focus();
	}
	encuentrame.prototype.toggle_busqueda = function($id,$search){
		$search.slideToggle();
		$id.focus();
	}
	encuentrame.prototype.declarar = function(){
		var map, infoWindow, posOverride;
		var pos = {lat: -12.0266034, lng: -77.1278645};
		var markers = [];
		var rutas = [];
		var icon = "";
		var icon_origin = " http://sarai.dhdinc.org/sanfernando/wp-content/themes/manya-sanfernando/assets/images/static/pin_mapa2.png"; 	

	}
	encuentrame.prototype.search = function(search,url_json){
		$.ajax({
			url: url_json,
			data: {tipo: search, action: 'search'},
			method: 'post',
			dataType: 'json',
			beforeSubmit: function(){
				$("body").addClass("loading");
			},
			success: function(data){
			   	
			},
			complete: function(){
				$("body").removeClass("loading");
			},
		});	
	}


	encuentrame.prototype.setMyLocation = function() {
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

	encuentrame.prototype.initmap = function(id,pos) {
		map = new google.maps.Map(document.getElementById(id), {
		  center:	pos//{lat: -12.0266034, lng: -77.1278645}
		  ,zoom:	10
		});		
		infoWindow = new google.maps.InfoWindow;
	}

	/* constructor */
	encuentrameC = new encuentrame();
	encuentrameC.init("Inicia encuentrame");