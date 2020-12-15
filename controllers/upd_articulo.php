<?php

require_once '../db/conexion.php';

$id = $_POST['upd_id'];
$nombre = $_POST['upd_nombre'];
$color = $_POST['upd_color'];
$talla = $_POST['upd_talla'];
$material = $_POST['upd_material'];
$cantidad = $_POST['upd_cantidad'];
$nota = $_POST['nota'];

$query = "CALL upd_articulo($id, '$nombre', '$color', '$talla', '$material', $cantidad, '$nota')";

$result = mysqli_query($link, $query);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo ("<script>
        window.alert('Se ha actualizado el articulo con éxito!');
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