<?php
class Conexion
{
    public function conectar()
    {
        try {
            $link = new PDO("mysql:host=localhost;dbname=ecomerce",
                "root",
                "",
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
            );
            return $link;
        } catch (PDOException $e) {
            echo "Error al conectarse a la base de datos: " . $e->getMessage();
        }
    }
}
?>

<!--
<?php

// class Conexion{
// 	public function conectar(){

// 		$link = new PDO("mysql:host=localhost;dbname=id20205759_ecomerce",
// 						"id20205759_root",
// 						"i%]n7Rg<pYVoU/?E",
// 						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
// 		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
// 						);

// 		return $link;

// 	}
// }

?>
