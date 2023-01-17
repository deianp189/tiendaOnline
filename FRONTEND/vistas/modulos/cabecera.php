<?php 

$servidor = Ruta::ctrRutaBackend();
$url = Ruta::ctrRuta();

/*=============================================
INICIO DE SESIÓN USUARIO
=============================================*/

if(isset($_SESSION["validarSesion"])){

	if($_SESSION["validarSesion"] == "ok"){

		echo '<script>
		
			localStorage.setItem("usuario","'.$_SESSION["id"].'");

		</script>';

	}

}

?>

<!----------------------- Parte superior --------------------->

<div class="container-fluid barraSuperior" id="top">
    <div class="container">
        <div class="row">
            <!----------------Social------------------>
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">
                <ul>
                    <?php 
                        $social=ControladorPlantilla::ctrEstiloPlantilla();

                        $jsonRedesSociales = json_decode($social["redesSociales"],true);

                            foreach ($jsonRedesSociales as $key => $value) {

                                echo ' <li>
                                    <a href="'.$value["url"].'" target="_blank"><i
                                            class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hiden="true"></i></a>
                                    </li>';
            
                            }
                    ?>
                </ul>
            </div>

            <!---------------Registro-------------------->
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">
                <ul>
                    <li><a href="#modalIngreso" data-toggle="modal">Iniciar sesión</a></li>
                    <li>|</li>
                    <li><a href="#modalRegistro" data-toggle="modal">Crear una cuenta</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!----------------------- Header --------------------->
<header class="container-fluid">
    <div class="container">
        <div class="row" id="cabecera">
            <!----------------Logotipo--------------------->
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logotipo">
            <a href="<?php echo $url; ?>">

                <img src="<?php echo $urlbackend; ?><?php echo $social["logo"];  ?>" class="img-responsive">

            </a>
            </div>
            <!----------------Bloque categorias y buscador ------------------->
            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                <!--------------Boton categorias---------->
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">
                    <p>Categorías
                    <span class="pull-right">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </span>
                    </p>
                </div>

                <!----------------buscador----------->
                <div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">
                    <input type="search" name="buscar" class="form-control" placeholder="Buscar">
                    <span class="input-group-btn">
                        <a href="<?php echo $url ?>buscador/1/recientes"> <!--Desde la primera pagina y productos recientes-->
                            <button class="btn btn-default backColor" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </a>
                    </span>
                </div>
            </div>

            <!-------------Carrito de compras--------------->
            <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="carrito">
                <a href="#">
                    <button class="btn btn-default pull-left backColor">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </button>
                </a>
                <p>Tu cesta <span class="cantidadCesta">3</span><br>€<span class="sumaCesta">20</span></p>
            </div>

        </div>


        <!-------------Categorias--------------->
        <div class="col-xs-12  backColor" id="categorias">

            <?php
            $item=null;
            $valor=null;
            
            $categorias=ControladorProductos::ctrMostrarCategorias($item,$valor);
            
            //var_dump($categorias);

            foreach ($categorias as $key => $value) {

                echo '

                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">

                    <h4>
                        <a href="'.$value["ruta"].'" class="pixelCategorias">'.$value["categoria"].'</a>
                    </h4>

                    <hr>

                    <ul>';

                    $item="id_categoria";
                    $valor=$value["id"];


                    $subcategorias=ControladorProductos::ctrMostrarSubCategorias($item,$valor);

                    foreach ($subcategorias as $key => $value) {


                        echo '<li><a href="'.$value["ruta"].'" class="pixelSubCategorias">'.$value["subcategoria"].'</a></li>';
                    }


                        echo '</ul>   

                </div> ';
                
            
            }
            
            ?>
          
        </div>

    </div>
</header>

<!--=====================================
		VENTANA MODAL REGISTRO
======================================-->

            <div class="modal fade modalFormulario" id="modalRegistro" role="dialog">

                <div class="modal-content modal-dialog">

                    <div class="modal-body modalTitulo">

                            <h3 class="backColor">REGISTRARSE</h3>

                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                                <!-- REGISTRO FACEBOOK -->

                                <div class="col-sm-6 col-xs-12 facebook">

                                    <p>
                                        <i class="fa fa-facebook"></i>
                                            Registro con Facebook
                                    </p>
                                    
                                </div>

                                <!--REGISTRO DE USUARIO EN LA PAGINA-->

                                <form method="post" onsubmit="return registroUsuario()">
                                    
                                    <hr>
                                    
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                
                                                <i class="glyphicon glyphicon-user"></i>

                                            </span>

                                            <input type="text" class="form-control text-uppercase" id="regUsuario" name="regUsuario"
                                            placeholder="Nombre Completo" required>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                
                                                <i class="glyphicon glyphicon-envelope"></i>

                                            </span>

                                            <input type="email" class="form-control" id="regEmail" name="regEmail"
                                            placeholder="Correo" required>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                
                                                <i class="glyphicon glyphicon-lock"></i>

                                            </span>

                                            <input type="password" class="form-control" id="regPassword" name="regPassword"
                                            placeholder="Contraseña" required>

                                        </div>
                                    
                                    </div>


                                    <!--Recibimos los parametros y lo enviamos a php-->
                                    <?php 

                                        $registro = new ControladorUsuarios();
                                        $registro->ctrRegistroUsuario();
                                    
                                    ?>

                                    <input type="submit" class="btn btn-default backColor btn-block" value="ENVIAR">
                                </form>

                            </div>   


                        <div class="modal-footer">
                            ¿Ya tienes una cuenta? | <strong><a href="#modalIngreso" data-dismiss="modal" data-toggle="modal">Ingresar</a></strong>
                        </div>


                    </div>

                </div>

            </div>

<!--=====================================
VENTANA MODAL PARA EL INGRESO
======================================-->

<div class="modal fade modalFormulario" id="modalIngreso" role="dialog">

    <div class="modal-content modal-dialog">

        <div class="modal-body modalTitulo">

            <h3 class="backColor">INGRESAR</h3>

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <!--=====================================
			INGRESO FACEBOOK
			======================================-->

            <div class="col-sm-6 col-xs-12 facebook">

                <p>
                    <i class="fa fa-facebook"></i>
                    Ingreso con Facebook
                </p>

            </div>

            <!--=====================================
			INGRESO GOOGLE
			======================================-->
            <a href="<?php echo $rutaGoogle; ?>">

                <div class="col-sm-6 col-xs-12 google">

                    <p>
                        <i class="fa fa-google"></i>
                        Ingreso con Google
                    </p>

                </div>

            </a>

            <!--=====================================
			INGRESO DIRECTO
			======================================-->
            <form method="post">

                <hr>

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">

                            <i class="glyphicon glyphicon-envelope"></i>

                        </span>

                        <input type="email" class="form-control" id="ingEmail" name="ingEmail"
                            placeholder="Correo Electrónico" required>

                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">

                            <i class="glyphicon glyphicon-lock"></i>

                        </span>

                        <input type="password" class="form-control" id="ingPassword" name="ingPassword"
                            placeholder="Contraseña" required>

                    </div>

                </div>

                <?php

					$ingreso = new ControladorUsuarios();
					$ingreso -> ctrIngresoUsuario();

				?>

                <input type="submit" class="btn btn-default backColor btn-block btnIngreso" value="ENVIAR">

                <br>

                <center>

                    <a href="#modalPassword" data-dismiss="modal" data-toggle="modal">¿Olvidaste tu contraseña?</a>

                </center>

            </form>

        </div>

        <div class="modal-footer">

            ¿No tienes una cuenta registrada? | <strong><a href="#modalRegistro" data-dismiss="modal"
                    data-toggle="modal">Registrarse</a></strong>

        </div>



    </div>

</div>


<!--=====================================
VENTANA MODAL PARA OLVIDO DE CONTRASEÑA
======================================-->

<div class="modal fade modalFormulario" id="modalPassword" role="dialog">

    <div class="modal-content modal-dialog">

        <div class="modal-body modalTitulo">

            <h3 class="backColor">SOLICITUD DE NUEVA CONTRASEÑA</h3>

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <!--=====================================
			OLVIDO CONTRASEÑA
			======================================-->
            <form method="post">

                <label class="text-muted">Escribe el correo electrónico con el que estás registrado y allí te enviaremos
                    una nueva contraseña:</label>

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">

                            <i class="glyphicon glyphicon-envelope"></i>

                        </span>

                        <input type="email" class="form-control" id="passEmail" name="passEmail"
                            placeholder="Correo Electrónico" required>

                    </div>

                </div>

                <?php

					$password = new ControladorUsuarios();
					$password -> ctrOlvidoPassword();

				?>

                <input type="submit" class="btn btn-default backColor btn-block" value="ENVIAR">

            </form>



        </div>

        <div class="modal-footer">

            ¿No tienes una cuenta registrada? | <strong><a href="#modalRegistro" data-dismiss="modal"
                    data-toggle="modal">Registrarse</a></strong>

        </div>




    </div>

</div>

