<!DOCTYPE html>
<html>

<head>
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <form action="verificarLogin.php" method="post">
        <legend>Iniciar sesión</legend>
        <label for="username">Nombre de usuario:</label>
        <input type="email" id="username" name="ingEmail"><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="ingPassword"><br><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>

</html>