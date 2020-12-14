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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="./main_page.php">Star Productions</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                    <a class="nav-link" href="./main_page.php">Inventario<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="./usuarios.php">usuarios</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <div class="container-fluid p-2 ">
                      <span class="p-2">
                        <img src="./img/user.svg" class="rounded-circle " alt="" height="30">
                        <span>Hola, <?php echo htmlspecialchars($_SESSION["username"]); ?></span>
                      </span>
                      <!-- <a href="reset-password.php" class="btn btn-warning"></a> -->
                      <a href="logout.php" class="btn btn-danger mr-1">Cerrar sesion</a>
                    </div>
                  </form>
            </div>
          </nav>
    </header>

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