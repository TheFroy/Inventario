<?php

require_once '../db/conexion.php';

$id = $_POST['id_delete'];

$query = "CALL del_articulo($id)";
$result = mysqli_query($link, $query);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo ("<script>
        window.alert('Se ha eliminado el articulo con éxito!');
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

