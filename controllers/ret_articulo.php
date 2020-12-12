<?php

require_once '../db/conexion.php';
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}


$id = $_POST['id_retirar'];
$cantidad_retirar = $_POST['cant_retirar'];
$cliente = $_POST['cliente_retirar'];
$usuario = $_SESSION["username"];
$cant_total = $_POST['cant_total'];
$id_usuario = $_SESSION["id"];

$cant_nueva = $cant_total - $cantidad_retirar ;


$query = "CALL add_retiro($id, $cantidad_retirar, '$cliente', '$usuario', $cant_nueva, $id_usuario)";
$result = mysqli_query($link, $query);

// if (mysqli_num_rows($result)==0) { PERFORM ACTION }
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo ("<script>
        window.alert('Se ha registrado el retiro con éxito!');
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