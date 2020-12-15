<?php

require_once '../db/conexion.php';

$nombre = $_POST['add_nom_nart'];
$marca = $_POST['add_marca_nart'];
$modelo = $_POST['add_modelo_nart'];
$desc = $_POST['add_desc_nart'];
$cant = $_POST['add_cant_nart'];
$precio = $_POST['add_precio_nart'];
$oficina = $_POST['add_ofi_nart'];

$query = "INSERT INTO articulos_oficina (nombre, marca, modelo, descripcion, cantidad, precio, id_oficina) values( '$nombre',  '$marca', '$modelo', '$desc', $cant, $precio, $oficina);"; 
$result = mysqli_query($link, $query);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // window.location.href='../inventario_gen.php';
    echo ("<script>
    window.alert('Se ha actualizado el articulo con éxito!');
        </script>");
    
}
else{
    // window.location.href='../inventario_gen.php';
    echo ("<script>
    window.alert('Ocurrio un error!');
    </script>");
}

mysqli_close($link);

?>