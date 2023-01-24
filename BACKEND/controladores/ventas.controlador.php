<?php

class ControladorVentas{

    /*=============================================
	MOSTRAR TOTAL VENTAS
	=============================================*/

    public function ctrMostrarTotalVentas(){

        $tabla = "compras";

        $respuesta = ModeloVentas::mdlMostrarTotalVentas($tabla);

        return $respuesta;


    }


    public function ctrMostrarVentas(){

        $tabla = "compras";

        $respuesta = ModeloVentas::mdlMostrarVentas($tabla);


        return $respuesta;


    }





}


?>