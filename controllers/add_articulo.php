<?php

require_once '../db/conexion.php';

$nombre = $_POST['add_nombre'];
$color = $_POST['add_color'];
$talla = $_POST['add_talla'];
$material = $_POST['add_material'];
$cantidad = $_POST['add_cantidad'];
$nota = $_POST['add_nota'];

$query = "INSERT INTO articulos (nombre, color, talla_forma, material, cantidad, nota) values ('$nombre', '$color', '$talla', '$material', '$cantidad', '$nota')";
$result = mysqli_query($link, $query);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo ("<script>
        window.alert('Se ha registrado el articulo con éxito!');
        window.location.href='../';
        </script>");
    
}
else{
    echo ("<script>
    window.alert('Ocurrio un error!');
    window.location.href='../';
    </script>");
}

mysqli_close($link);

?>