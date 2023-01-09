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