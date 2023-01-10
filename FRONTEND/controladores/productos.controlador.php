<?php 
class ControladorProductos{

    /*=============================================
MOSTRAR CATEGORÍAS
=============================================*/


public static function ctrMostrarCategorias($item,$valor){

    $tabla="categorias";

    $respuesta=ModeloProductos::mdlMostrarCategorias($tabla,$item,$valor);

    return $respuesta;


}

    /*=============================================
MOSTRAR SUBCATEGORÍAS
=============================================*/

public static function ctrMostrarSubCategorias($item,$valor){

    $tabla="subcategorias";

    $respuesta=ModeloProductos::mdlMostrarSubCategorias($tabla,$item,$valor);

    return $respuesta;


}

     /*=============================================
MOSTRAR PRODUCTOS
=============================================*/

public static function ctrMostrarProductos($ordenar, $item , $valor, $base, $tope, $modo){

    $tabla="productos";

    $respuesta=ModeloProductos::mdlMostrarProductos($tabla , $ordenar, $item , $valor, $base, $tope, $modo);

    return $respuesta;
}

public static function ctrMostrarInfoProducto($item ,$valor){

    $tabla="productos";

    $respuesta=ModeloProductos::mdlMostrarInfoProducto($tabla,$item,$valor);

    return $respuesta;
}


public static function ctrMostrarBanner($ruta){

    $tabla="banner";

    $respuesta=ModeloProductos::mdlMostrarBanner($tabla,$ruta);

    return $respuesta;
}


public static function ctrListarProductos($ordenar, $item2, $valor2){

    $tabla = "productos";

    $respuesta = ModeloProductos::mdlListarProductos($tabla, $ordenar, $item2, $valor2);

    return $respuesta;


}


public static function ctrBuscarProductos($busqueda ,$ordenar ,$modo ,$base ,$tope){

    $tabla="productos";

    $respuesta = ModeloProductos::mdlBuscarProductos($tabla, $busqueda ,$ordenar ,$modo ,$base ,$tope);

    return $respuesta;


}

public static function ctrListarProductosBusqueda($busqueda){

    $tabla="productos";

    $respuesta = ModeloProductos::mdlListarProductosBusqueda($tabla, $busqueda);

    return $respuesta;

}


public static function ctrActualizarVistaProducto($datos, $item){

    $tabla = "productos";

    $respuesta = ModeloProductos::mdlActualizarVistaProducto($tabla, $datos, $item);

    return $respuesta;

}

}

?>