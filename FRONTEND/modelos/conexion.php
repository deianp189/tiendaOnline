<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=ecomerce",
						"root",
						"",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}

?>

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