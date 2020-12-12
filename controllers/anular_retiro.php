<?php
require_once '../db/conexion.php';

$id_anular = $_POST['id_anular'];
$id_anular_art = $_POST['id_anular_art'];
$cant_anular = $_POST['cant_anular'];
$cant_total = $_POST['cant_total_anular'];

$cant_nueva = $cant_total + $cant_anular;

$query = "CALL anular_retiro($id_anular, $id_anular_art, $cant_nueva);";
$result = mysqli_query($link, $query);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo ("<script>
        window.alert('Se ha anulado el retiro con éxito!');
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