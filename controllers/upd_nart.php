<?php

require_once '../db/conexion.php';

$id = $_POST['upd_id_nart'];
$nombre = $_POST['upd_nom_nart'];
$marca = $_POST['upd_marca_nart'];
$modelo = $_POST['upd_modelo_nart'];
$desc = $_POST['upd_desc_nart'];
$cant = $_POST['upd_cant_nart'];
$precio = $_POST['upd_precio_nart'];
$oficina = $_POST['upd_ofi_nart'];

$query = "update articulos_oficina set nombre = '$nombre', marca = '$marca', modelo = '$modelo', descripcion = '$desc', cantidad = $cant, precio = $precio, id_oficina = $oficina where id = $id;";
$result = mysqli_query($link, $query);
print_r($_POST);
echo $query;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo ("<script>
    window.alert('Se ha actualizado el articulo con éxito!');
    window.location.href='../inventario_gen.php';
        </script>");
    
}
else{
    echo ("<script>
    window.alert('Ocurrio un error!');
    window.location.href='../inventario_gen.php';
    </script>");
}

mysqli_close($link);

?>