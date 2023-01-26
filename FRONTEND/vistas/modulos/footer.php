<!--=====================================
FOOTER
======================================-->

<footer class="container-fluid">

	<div class="container">

		<div class="row">

		 	<!--=====================================
			CATEGORÍAS Y SUBCATEGORÍAS FOOTER
			======================================-->

			<div class="col-lg-5 col-md-6 col-xs-12 footerCategorias">

			<?php

				$url = Ruta::ctrRuta();

				$item = null;
				$valor = null;

				$categorias = ControladorProductos::ctrMostrarCategorias($item, $valor);

				foreach ($categorias as $key => $value) {

					echo '<div class="col-lg-4 col-md-3 col-sm-4 col-xs-12">

						<h4><a href="'.$url.$value["ruta"].'" class="pixelCategorias" titulo="'.$value["categoria"].'">'.$value["categoria"].'</a></h4>

						<hr>

						<ul>';

						$item = "id_categoria";

						$valor = $value["id"];

						$subcategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);
						
						foreach ($subcategorias as $key => $value) {
						
							echo '<li><a href="'.$url.$value["ruta"].'" class="pixelSubCategorias" titulo="'.$value["subcategoria"].'">'.$value["subcategoria"].'</a></li>';

						}

						echo '</ul>

					</div>';

				}

			?>

			</div>

			<!--=====================================
			DATOS CONTACTO
			======================================-->

			<div class="col-md-3 col-sm-6 col-xs-12 text-left infoContacto">
				
				<h5>Dudas e inquietudes, contáctenos en:</h5>
				<br>
				
				<h5>
					
					<i class="fa fa-phone-square" aria-hidden="true"></i>  +34 640 17 52 21


					<br><br>

					<i class="fa fa-envelope" aria-hidden="true"></i> casari@gmail.com

					<br><br>

					<i class="fa fa-map-marker" aria-hidden="true"></i> Camino Caparacena, 4, Pinos Puente

					<br><br>
					Granada, España

				</h5>

			</div>

			<!--=====================================
			FORMULARIO CONTÁCTENOS
			======================================-->

			<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12 formContacto">
				
				<h4>Nuestra Ubicación</h4>

				<!-- <iframe src="https://maps.google.com/?ll=37.1810095,-3.6262914&z=11&output=embed" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe> -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1297.158962470523!2d-3.7518072610688087!3d37.257589779227864!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6dffe7b8585315%3A0x5eb14a004139b708!2sMateriales%20de%20Construcci%C3%B3n%20Casari!5e0!3m2!1ses!2sus!4v1674682872001!5m2!1ses!2sus" width="130%" height="300" frameborder="0" style="border:0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					
			</div>
			
		</div>

	</div>

</footer>


<!--=====================================
FINAL
======================================-->

<div class="container-fluid final">
	
	<div class="container">
	
		<div class="row">
			
			<div class="col-sm-6 col-xs-12 text-left text-muted">
				
				<h5>&copy; 2023 Todos los derechos reservados.</h5>

			</div>

			<div class="col-sm-6 col-xs-12 text-right social">
				
			<ul>

			<?php
				
			$social = ControladorPlantilla::ctrEstiloPlantilla();

				$jsonRedesSociales = json_decode($social["redesSociales"],true);		

				foreach ($jsonRedesSociales as $key => $value) {

					echo '<li>
							<a href="'.$value["url"].'" target="_blank">
								<i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
							</a>
						</li>';
				}

			?>

			</ul>

			</div>

		</div>

	</div>

</div>