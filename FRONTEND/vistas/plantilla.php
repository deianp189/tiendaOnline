<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="title" content="Casari">
    <meta name="description" content="Casari es una tienda en línea de materiales de construcción ubicada en Granada">
    <meta name="keyword" content="construccion, azulejos, cemento, tejas, bañera, cristales">
    <title>Casari</title>

    <?php

        session_start();

        $icono=ControladorPlantilla::ctrEstiloPlantilla();

        echo '<link rel="icono" href="http://localhost/backend/'.$icono["icono"].'">';

    /*=============================================
	MANTENER LA RUTA FIJA DEL PROYECTO
	=============================================*/

    $url=Ruta::ctrRuta();

    $urlbackend=Ruta::ctrRutaBackend();

    // echo $url;

    echo '<link rel="icon" href="'.$urlbackend.$icono["icono"].'">';
    
    ?>

    
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plugins/flexslider.css">

    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/plantilla.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/cabecera.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/slide.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/productos.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/infoproducto.css">
    
    <link rel="stylesheet" href="vistas/css/plugins/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed">

    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.min.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plugins/bootstrap.min.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.easing.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plugins/scrollUp.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plugins/jquery.flexslider.js"></script>
</head>
<body>
    <!--------------------------- Cabecera ------------------------------>

    <?php 
    include "modulos/cabecera.php";

    /*=============================================
CONTENIDO DINÁMICO
=============================================*/

    $rutas=array();
    $ruta=null;

    if(isset($_GET["ruta"])){

        //echo $_GET["ruta"];
        $rutas=explode("/" ,$_GET["ruta"]);

            /*=============================================
        URL'S AMIGABLES DE CATEGORÍAS
        =============================================*/
        $item="ruta";
        $valor=$rutas[0];

        $rutaCategorias=ControladorProductos::ctrMostrarCategorias($item,$valor);

        if($rutas[0] == $rutaCategorias["ruta"]){

            $ruta=$rutas[0];
        }

        /*=============================================
        URL'S AMIGABLES DE SUBCATEGORÍAS
        =============================================*/
        $rutaSubCategorias=ControladorProductos::ctrMostrarSubCategorias($item,$valor);

        foreach ($rutaSubCategorias as $key => $value) {

            if($rutas[0] == $value["ruta"]){

                $ruta=$rutas[0];

            }
        }

        /*=============================================
        URL'S AMIGABLES DE PRODUCTOS
        =============================================*/
        $rutaProductos=ControladorProductos::ctrMostrarInfoProducto($item,$valor);

        if($rutas[0] == $rutaProductos["ruta"]){

            $infoProducto = $rutas[0];
        }

        /*=============================================
        LISTA BLANCA DE URL'S AMIGABLES
        =============================================*/
        if($ruta !=null || $rutas[0] == "articulos-gratis" || $rutas[0] == "lo-mas-vendido" || $rutas[0] == "lo-mas-visto"){

            include "modulos/productos.php";

        }else if($infoProducto !=null){

            include "modulos/infoproducto.php";
    
        }else if($rutas[0] == "buscador"){

            include "modulos/buscador.php";
            
        }else{
        
                include "modulos/error404.php";
        }

    }else{
        
        
        include "modulos/slide.php";
        include "modulos/destacados.php";

    }

    ?>

    <input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">

    <script src="<?php echo $url; ?>vistas/js/cabecera.js"></script>
    <script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
    <script src="<?php echo $url; ?>vistas/js/slide.js"></script>
    <script src="<?php echo $url; ?>vistas/js/buscador.js"></script>
    <script src="<?php echo $url; ?>vistas/js/infoproducto.js"></script>
    
</body>
</html>