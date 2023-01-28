<?php
include_once 'conexion.php';
$con = new Conexion();
$link = $con->conectar();

$id = $_POST['id'];
$query = "DELETE FROM productos WHERE id = :id";
$stmt = $link->prepare($query);
$stmt->bindParam(':id', $id);

if($stmt->execute()) {
    $response = array(
        'success' => true
    );
} else {
    $response = array(
        'success' => false
    );
}

echo json_encode($response);
