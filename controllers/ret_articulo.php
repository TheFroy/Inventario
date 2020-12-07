<?php

require_once '../db/conexion.php';

$id = $_POST['id_retirar'];
$cantidad = $_POST['cant_retirar'];
$cliente = $_POST['cliente_retirar'];
$usuario = $_SESSION["username"];

$query = "CALL add_retiro($id, '$cantidad', '$cliente', '$usuario')";
$result = mysqli_query($link, $query);

echo "<meta http-equiv=\"refresh\" content=\"0;URL=../main_page.php\">";


mysqli_close($link);

?>