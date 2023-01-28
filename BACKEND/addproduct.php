<?php
$host = "localhost"; //reemplazar por el nombre del host correspondiente
$user = "root"; //reemplazar por el nombre de usuario correspondiente
$password = ""; //reemplazar por la contraseña correspondiente
$dbname = "ecomerce"; //reemplazar por el nombre de la base de datos correspondiente

// Crear conexión
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verificar conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Recibir datos del formulario
$id_categoria = $_POST['categoria'];

if (isset($_FILES["portada"])) {
    $categoria = strtolower($_POST['categoria']);
    $ruta = "vistas/img/productos/" . $categoria;
    if (!is_dir($ruta)) {
        mkdir($ruta);
    }
    $ruta = $ruta . "/" . $_FILES["portada"]["name"];
    move_uploaded_file($_FILES["portada"]["tmp_name"], $ruta);
}

//Obtencion de la variable multimedia
$categoria = strtolower($_POST['categoria']);
$ruta = "vistas/img/productos/" . $categoria;
$nombreImagen = $_FILES["portada"]["name"];
$ruta = $ruta . "/" . $nombreImagen;

$multimedia = "[{\"foto\":\"" . $ruta . "\"}]"; /////////////////////



switch ($id_categoria) {
    case "AZULEJOS":
        $id_categoria = 1;
        break;
    case "LADRILLOS":
        $id_categoria = 2;
        break;
    case "OBRA":
        $id_categoria = 3;
        break;
    case "ASEOS":
        $id_categoria = 4;
        break;
    case "CATALOGOS":
        $id_categoria = 5;
        break;
    default:
        $id_categoria = 0;
}

$id_subcategoria = $_POST['subcategoria'];

switch ($id_subcategoria) {
    case "Natural":
        $id_subcategoria = 1;
        break;
    case "Anti-Slip":
        $id_subcategoria = 2;
        break;
    case "Pulido":
        $id_subcategoria = 3;
        break;
    case "Ladrillo":
        $id_subcategoria = 4;
        break;
    case "Machihembrada":
        $id_subcategoria = 5;
        break;
    case "Adoquín":
        $id_subcategoria = 6;
        break;
    case "Cemento":
        $id_subcategoria = 7;
        break;
    case "Mortero":
        $id_subcategoria = 8;
        break;
    case "Muebles":
        $id_subcategoria = 9;
        break;
    case "Mamparas":
        $id_subcategoria = 10;
        break;
    case "Catálogos":
        $id_subcategoria = 11;
        break;
    default:
        $id_subcategoria = 0;
}

$tipo = "fisico";
$titulo = $_POST['titulo'];
$rutaURL = str_replace(" ", "-", $titulo); //recordar cambiar orden en el insert
//----------Aqui falta titular, pero es valor vacio, se intentará no meter---------------//
$detalles = "21x147,5 cm";
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$portada = $ruta;
$vistas = 0;
$ventas = 0;
$vistasGratis = 0;
$ventasGratis = 0;
$ofertadoPorCategoria = 0;
$ofertadoPorSubCategoria = 0;
$oferta = 0;
$precioOferta = 0;
$descuentoOferta = 0;
$imgOferta = "";
$finOferta = "0000-00-00 00:00:00";
$nuevo = 0;
$peso = 0;
$entrega = 0;
$fecha = date('Y-m-d H:i:s');


// Crear sentencia SQL para insertar datos en la tabla
$sql = "INSERT INTO productos (id, id_categoria, id_subcategoria, tipo, ruta, titulo, descripcion, multimedia, 
    detalles, precio, portada, vistas, ventas, vistasGratis,
    ventasGratis, ofertadoPorCategoria, ofertadoPorSubCategoria, oferta, precioOferta, descuentoOferta,
    imgOferta, finOferta, nuevo, peso, entrega, fecha)
    VALUES (NULL, '$id_categoria', '$id_subcategoria', '$tipo', '$rutaURL', '$titulo', '$descripcion',
    '$multimedia', '$detalles', '$precio', '$portada', '$vistas', '$ventas', '$vistasGratis', '$ventasGratis', 
    '$ofertadoPorCategoria', '$ofertadoPorSubCategoria', '$oferta', '$precioOferta', '$descuentoOferta', '$imgOferta', 
    '$finOferta', '$nuevo', '$peso', '$entrega', '$fecha')";


// Ejecutar sentencia SQL
if (mysqli_query($conn, $sql)) {
    echo "Producto agregado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Cerrar conexión
mysqli_close($conn);
