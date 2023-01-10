<?php 


require_once "conexion.php";


class ModeloProductos{

    /*=============================================
	MOSTRAR CATEGORÍAS
	=============================================*/

    public static function mdlMostrarCategorias($tabla,$item,$valor){


        if($item !=null){

            $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item=:$item");

                    $stmt ->bindParam(":".$item , $valor , PDO::PARAM_STR);

                    $stmt->execute();

                    return $stmt->fetch();

            }else{

            $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla");

                    $stmt->execute();

                    return $stmt->fetchAll();

            }

            $stmt->close();

            $stmt =null;

    }


/*=============================================
	MOSTRAR SUB-CATEGORÍAS
	=============================================*/


    public static function mdlMostrarSubCategorias($tabla,$item,$valor){


            $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item=:$item");

                    $stmt ->bindParam(":".$item , $valor , PDO::PARAM_STR);

                    $stmt->execute();

                    return $stmt->fetchAll();

                    $stmt->close();

                    $stmt =null;

    
    }

    /*=============================================
	MOSTRAR PRODUCTOS
	=============================================*/

    public static function mdlMostrarProductos($tabla,$ordenar,$item,$valor,$base,$tope,$modo){

        if($item !=null){

            $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item=:$item ORDER BY $ordenar $modo LIMIT $base, $tope");
            $stmt ->bindParam(":".$item , $valor , PDO::PARAM_STR);
            $stmt->execute();
    
            return $stmt->fetchAll();
    
        }else{
    
            $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $ordenar $modo LIMIT $base, $tope ");         
            $stmt->execute();
    
            return $stmt->fetchAll();    
    
         }
            $stmt->close();
            $stmt =null;
    }

    public static function mdlMostrarInfoProducto($tabla,$item,$valor){

        $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item=:$item");
        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
        $stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();
		$stmt = null;
    }

    public static function mdlMostrarBanner($tabla,$ruta){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE ruta = :ruta");
		$stmt -> bindParam(":ruta", $ruta, PDO::PARAM_STR);
		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();
		$stmt = null;
    }


    public static function mdlListarProductos($tabla, $ordenar, $item, $valor){


        if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY $ordenar DESC");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $ordenar DESC");
			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();
		$stmt = null;

    }


    public static function mdlBuscarProductos($tabla, $busqueda ,$ordenar ,$modo ,$base ,$tope){
        //Aqui buscamos la coincidencia con las posibles tablas de la bbdd
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE ruta LIKE '%$busqueda%' OR titulo LIKE '%$busqueda%' OR titular LIKE '%$busqueda%' OR descripcion LIKE '%$busqueda%' ORDER BY $ordenar $modo LIMIT $base , $tope");
        $stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();
		$stmt = null;

    }

    public static function mdlListarProductosBusqueda($tabla, $busqueda){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE ruta LIKE '%$busqueda%' OR titulo LIKE '%$busqueda%' OR titular LIKE '%$busqueda%' OR descripcion LIKE '%$busqueda%'");
        $stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();
		$stmt = null;

    }

    public static function mdlActualizarVistaProducto($tabla, $datos, $item){

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item = :$item WHERE ruta = :ruta");

    $stmt -> bindParam(":ruta", $datos["ruta"], PDO::PARAM_STR);
	$stmt -> bindParam(":".$item, $datos["valor"], PDO::PARAM_STR);

    if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();
		$stmt = null;

    }

}

?>