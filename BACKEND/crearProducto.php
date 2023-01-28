<!DOCTYPE html>
<html>

<head>
    <title>Agregar Producto</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/crearProducto.css">
</head>

<script>
    function validarForm() {
        var categoria = document.getElementById("categoria").value;
        var subcategoria = document.getElementById("subcategoria").value;
        var titulo = document.getElementById("titulo").value;
        var descripcion = document.getElementById("descripcion").value;
        var precio = document.getElementById("precio").value;
        var portada = document.getElementById("portada").value;
        if (categoria == "" || subcategoria == "" || titulo == "" || descripcion == "" || precio == "" || portada == "") {
            alert("Por favor, rellene todos los campos del formulario.");
            return false;
        } else {
            return true;
        }
    }

    function resetForm() {
        document.getElementById("form").reset();
    }

    function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57) && charCode!==46) {
        return false;
    }
    return true;
}
</script>

<body>

    <h1>Agregar Producto</h1>
    <form id="form" action="addproduct.php" method="post" enctype="multipart/form-data" onsubmit="return validarForm()">
        <?php
        require_once "conexion.php";
        $conexion = new Conexion();
        $link = $conexion->conectar();

        $query = "SELECT categoria FROM categorias";
        $result = $link->query($query);
        ?>
        <label for="categoria">Categoría:</label>
        <select id="categoria" name="categoria">
            <option value="" selected>Seleccionar categoría</option>
            <?php while ($categoria = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $categoria['categoria']; ?>"><?php echo $categoria['categoria']; ?></option>
            <?php } ?>

            <br>

        </select>
        <?php
        require_once "conexion.php";
        $conexion = new Conexion();
        $link = $conexion->conectar();

        $query = "SELECT subcategoria FROM subcategorias";
        $result = $link->query($query);
        ?>
        <label for="subcategoria">Categoría:</label>
        <select id="subcategoria" name="subcategoria">
            <option value="" selected>Seleccionar subcategoría</option>
            <?php while ($subcategoria = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                <option value="<?php echo $subcategoria['subcategoria']; ?>"><?php echo $subcategoria['subcategoria']; ?></option>
            <?php } ?>

        </select>

        <br>
        <label for="titulo">Título producto:</label>
        <input type="text" name="titulo" id="titulo">
        <br>
        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" id="descripcion"></textarea>
        <br>
        <label for="precio">Precio:</label>
        
        <input type="number" name="precio" min="0" step="0.01" required>
        <br>
        <label for="portada">Foto producto:</label>
        <input type="file" name="portada" id="portada">
        <br>
        <input type="submit" value="Agregar Producto">
        <button type="button" onclick="resetForm()">Vaciar formulario</button>

        

    </form>
    <script>
    $(document).ready(function(){
        $('#form').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: 'addproduct.php',
                type: 'POST',
                data: formData,
                success: function(data){
                    if(data == "Producto agregado correctamente"){
                        alert("Producto agregado correctamente");
                    }else{
                        alert("Error al agregar producto");
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });
    });
</script>

    
</body>



</html>