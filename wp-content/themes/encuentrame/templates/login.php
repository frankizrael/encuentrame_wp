<?php 
 /**
 * Template Name: login
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

 
 <!-- Contenido -->
	<div class="container row">
		<div class="col s12 m8 center-block">
			<div class="card-panel center">
				<div class="section">
					<h5>Loguea ahora mismo</h5>
					<p>Encontrar lo que siempre buscas siempre será gratuito</p>
					<div class="section">
						<a href="./" class="waves-effect waves-light btn-large">Inicia sesión con Facebook</a>
					</div>
					<div class="divider"></div>
					<p><a href="./admin">Registra tus primeras tiendas gratis</a><br>Trata bien a nuestros clientes, los queremos mucho.</p>
				</div>
			</div>
		</div>
	</div>

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


</body>
</html>