<?php

require_once '../db/conexion.php';

$id = $_POST['id_delete'];

$query = "CALL del_articulo($id)";
$result = mysqli_query($link, $query);

echo "<meta http-equiv=\"refresh\" content=\"0;URL=../main_page.php\">";


mysqli_close($link);

?>

