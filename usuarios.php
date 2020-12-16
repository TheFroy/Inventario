<?php
require_once './db/conexion.php';

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

include './components/modal_add_user.php';
include './components/modal_borrar_usuario.php';
include './components/modal_upd_usuario.php';

 
?>

<!DOCTYPE html>
<html lang="eS">
<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php include './components/header.php' ?>


    <section>
    <div class="container mt-2">

                <h1 class="text-left p-2 m-1 d-inline font-weigth-bold" style="font-size:calc(20px + 1.7vw);">Usuarios</h1>
                <a href="#modal_add_user" data-toggle="modal" class="btn btn-primary p-2 btn-block d-inline">añadir usuario</a>
                
                <section class="container barra my-3" style="overflow-y: scroll; height:20rem">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nombre de usuario</th>
                                <th scope="col">Contraseña</th>
                                <th scope="col">Rol</th>
                                <th scope="col"></th>
                                <th scope="col"></th>

                            </tr>
                        </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM usuarios";
                        
                        $result = mysqli_query($link, $query);
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo '<tr>';
                                    if($row['username'] != 'root'){

                                        echo "<th scope='col' id='user".$row["id"]."'>". $row["username"]."</th>";
                                        echo "<th scope='col' id='pwd".$row["id"]."'>". $row["password"]."</th>";
                                        echo "<th scope='col' class='d-none' id='rol".$row["id"]."'>". $row["adm"]."</th>";
                                        if($row['adm'] == 1){
                                            echo "<th scope='col'>Administrador</th>";
                                        }
                                        else{
                                            echo "<th scope='col'>Empleado</th>";
                                        }
                                        echo "<th scope='col'><a data-toggle='modal' href='#modal_upd_usuario'  id=".$row["id"]." class='btn btn-success upd_user'>actualizar</a></th>";
                                        echo "<th scope='col'><a data-toggle='modal' href='#modal_borrar_usuario'  id=".$row["id"]." class='btn btn-danger del_user'>borrar</a></th>";
                                    }

                                    echo '</tr>';
    
                                }
                            ?> 
                        </tbody>
                    </table>
                </section>
        </div>
    </section>
        
</body>
<script src="./js/del_usuario.js"></script>
<script src="./js/upd_usuario.js"></script>
</html>