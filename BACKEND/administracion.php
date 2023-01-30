<?php
session_start();

// Desactivar toda las notificaciónes del PHP
error_reporting(0);

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    // Redirigir al archivo de login
    header("Location: login.php");
    exit;
}



?>



<!DOCTYPE html>
<html>
<head>
  <title>Administración de productos</title>
  <link rel="stylesheet" href="css/administracion.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/eliminar_producto.js"></script>
</head>
<body>
  <nav>
  <a id="crear-producto" class="crear-producto" href="crearProducto.php">Crear producto</a>
  <form action="logout.php" method="post">
    <input type="submit" value="Cerrar sesión" style="background-color: #ff0000;color: #fff;padding: 10px 20px;border-radius: 5px;border: none;cursor: pointer;font-size: 18px;font-weight: bold;">
</form>
  </nav>
  <section id="productos">
    <h1>Productos</h1>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Categoría</th>
            <th>Título</th>
            <th>Precio</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
        <?php
        include_once 'conexion.php';
        $con = new Conexion();
        $link = $con->conectar();

        $query = "SELECT * FROM productos ORDER BY fecha DESC";
        $stmt = $link->prepare($query);
        $stmt->execute();
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
            <td><?= $result['id']; ?></td>
            <td>
   <?php




      $queryCategoria = "SELECT categoria FROM categorias WHERE id = ?";
      $stmtCategoria = $link->prepare($queryCategoria);
      $stmtCategoria->execute([$result['id_categoria']]);
      $resultCategoria = $stmtCategoria->fetch(PDO::FETCH_ASSOC);
      echo $resultCategoria['categoria'];
   ?>
            <td><?= $result['titulo']; ?></td>
            <td><?= $result['precio']; ?></td>

            <td><img class="img" src="<?= $result['portada']; ?>" alt="<?= $result['titulo']; ?>"></td>

            <td>
 
  <!-- Botón para eliminar producto -->
  <code><button class="eliminarProducto" style="background-color: #ba5e13;color: #fff;padding: 10px 20px;border-radius: 5px;border: none;cursor: pointer;font-size: 18px;font-weight: bold;" id="<?php echo $result['id']; ?>">Eliminar</button>

</td>

        </tr>
        <?php }
        $link = null;
        ?>
    </table>
</section>
    </table>
  </section>
</body>
</html>
