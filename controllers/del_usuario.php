<?php

require_once '../db/conexion.php';

$id = $_POST['id_delete_user'];

$query = "CALL del_usuario($id)";
$result = mysqli_query($link, $query);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo ("<script>
        window.alert('Se ha eliminado el usuario con éxito!');
        window.location.href='../usuarios.php';
        </script>");
    
}
else{
    echo ("<script>
    window.alert('Ocurrio un error!');
    window.location.href='../usuarios.php';
    </script>");
}

mysqli_close($link);

?>
