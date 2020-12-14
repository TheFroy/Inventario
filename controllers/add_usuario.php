<?php

require_once '../db/conexion.php';

$username = $_POST['add_username'];
$pwd = password_hash($_POST['add_pwd'],PASSWORD_DEFAULT);
$rol = $_POST['add_rol'];

$query = "CALL add_usuario('$username', '$pwd', $rol)";
$result = mysqli_query($link, $query);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo ("<script>
        window.alert('Se ha agregado el usuario con éxito!');
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