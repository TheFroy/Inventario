<?php

require_once '../db/conexion.php';

$id = $_POST['upd_id_user'];
$username = $_POST['upd_username'];
// $pwd = password_hash($_POST['upd_pwd'],PASSWORD_DEFAULT);
$rol = $_POST['upd_rol'];

$query = "update usuarios set username = '$username', adm = '$rol' where id = $id;";

$result = mysqli_query($link, $query);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo ("<script>
        window.alert('Se ha actualizado el usuario con éxito!');
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