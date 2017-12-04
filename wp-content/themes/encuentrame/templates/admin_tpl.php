<?php 
 /**
 * Template Name: admin
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

 
 <!-- Contenido -->
 <div class="container row card_content">
 	<div class="col s12 m8 center-block">
 		<div class="card-panel center">
 			<div class="section section-admin">
 				<h5>Tiendas donde estoy</h5>
 				<p>Administra tus tiendas</p>
 				<div class="divider"></div>
 				<div class="card-panel grey lighten-5 z-depth-1">
 					<div class="row valign-wrapper no-margin">
 						<div class="col s7">
 							<span class="black-text">
 								<h5 class="blue-text text-darken-2">Tiendas de doña Julia</h5>
 								<p>Tienda cercana a la casa de los pollitos</p>
 								<b>Google Cords</b>
 								<p>-12 -5</p>
 							</span>
 						</div>
 						<div class="col s5">
 							<a class="waves-effect waves-light btn">Editar</a>
 							<br>
 							<a class="waves-effect waves-light btn">Ubicar en mapa</a>
 						</div>
 					</div>
 				</div>
 				<div class="card-panel grey lighten-5 z-depth-1">
 					<div class="row valign-wrapper no-margin">
 						<div class="col s7">
 							<span class="black-text">
 								<h5 class="blue-text text-darken-2">Tiendas de doña Julia</h5>
 								<p>Tienda cercana a la casa de los pollitos</p>
 								<b>Google Cords</b>
 								<p>-12 -5</p>
 							</span>
 						</div>
 						<div class="col s5">
 							<a class="waves-effect waves-light btn">Editar</a>
 							<br>
 							<a class="waves-effect waves-light btn">Ubicar en mapa</a>
 						</div>
 					</div>
 				</div>
 				<div class="card-panel grey lighten-5 z-depth-1">
 					<div class="row valign-wrapper no-margin">
 						<div class="col s7">
 							<span class="black-text">
 								<h5 class="blue-text text-darken-2">Tiendas de doña Julia</h5>
 								<p>Tienda cercana a la casa de los pollitos</p>
 								<b>Google Cords</b>
 								<p>-12 -5</p>
 							</span>
 						</div>
 						<div class="col s5">
 							<a class="waves-effect waves-light btn">Editar</a>
 							<br>
 							<a class="waves-effect waves-light btn">Ubicar en mapa</a>
 						</div>
 					</div>
 				</div>
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