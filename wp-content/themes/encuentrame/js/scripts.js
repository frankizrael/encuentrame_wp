(function($) {
	$(document).ready(function(){
		encuentrameC.focus($("#nav-wrapper-search input"));		

		function cerrar_busqueda(){
			$("#nav-wrapper-search").slideUp();
		}

		$("#search-button").on("click",function(e){
			e.preventDefault();
			encuentrameC.toggle_busqueda($("#nav-wrapper-search input"),$("#nav-wrapper-search"));
		});

		$("#nav-wrapper--close").on("click",function(e){
			cerrar_busqueda();
		});

		// Para que el menu lateral aparezca
		$(".button-collapse").sideNav();

		
	});        
})( jQuery );


