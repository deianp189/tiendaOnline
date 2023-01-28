<?php
// Conexión a la base de datos
$conn = mysqli_connect("localhost", "root", "", "ecomerce");

// Comprobar conexión
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Recibir datos del formulario de inicio de sesión
$email = $_POST['ingEmail'];
$password = $_POST['ingPassword'];

// Verificar que el email y la contraseña proporcionados existan en la tabla de administradores
$query = "SELECT * FROM administradores WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $query);

// Verificar si el usuario existe
if (mysqli_num_rows($result) > 0) {
    // Iniciar sesión
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['logged_in'] = true;
    $_SESSION['email'] = $email;
    // Redirigir al panel de administración
    header("Location: administracion.php");
} else {
    // Mostrar mensaje de error
    echo "Email o contraseña incorrectos. Por favor, vuelve a intentarlo.";
}

// Cerrar conexión a la base de datos
mysqli_close($conn);
?>
