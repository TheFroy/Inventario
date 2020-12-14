<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

require_once 'db/conexion.php';
include './components/modal_retirar.php';
include './components/modal_borrar.php';
include './components/modal_editar.php';
include './components/modal_add_user.php';
include './components/modal_anular_retiro.php';

$search = "";

$username = $_SESSION['username'];
$query = "SELECT * FROM usuarios where username = '$username'";
$res_user = mysqli_fetch_array(mysqli_query($link, $query));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>


<body class="barra">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="./main_page.php">Star Productions</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="./main_page.php">Inventario<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
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
                      <a href="#modal_add_user" data-toggle="modal" class="btn">añadir usuario</a>
                    </div>
                  </form>
            </div>
          </nav>
        </div>
    </header>

    <!--  -->
    <section class="my-4">
        <div class="container">
                <h1 class="text-left p-2 m-1 font-weigth-bold" style="font-size:calc(20px + 1.7vw);">Articulos</h1>
                <div class="container py-2 mb-2">
                    <div class="row justify-content-center">
                        <div class="col-md-9 col-sm-12 py-2">
                            <div class="container">
                                <form method="GET" class="row">
                                        <!-- <form action="" method="GET"> -->
                                        <div class="col-8">
                                            <input class="form-control" type="text" value="" name="search" placeholder="Nombre de articulo, color, talla, material">
                                        </div>
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-danger">Buscar</button>
                                        </div>
                                        <!-- </form> -->
                                </form>
                            </div>
                        </div>
                        <?php
                            if(isset($_GET['search'])){
                                $search = $_GET['search'];
                            }
                        ?>
                        <div class="col-md-3 col-sm-12  p-2">
                            <?php
                                if($res_user['adm'] == 1){
                                    echo  "<a class='btn btn-primary' data-target='#modal_agregar' data-toggle='modal'>Agregar nuevo</a>";
                                };
                            ?>
                        </div>
                    </div>
                </div>
                <section class="container barra" style="overflow-y: scroll; height:20rem">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Color</th>
                            <th scope="col">Talla - forma</th>
                            <th scope="col">Material</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if($search == ""){
                                $query = 'SELECT * FROM articulos';
                            }
                            else{
                                $query = "SELECT * from articulos WHERE nombre LIKE '%$search%' OR color LIKE '%$search%' OR talla_forma LIKE '%$search%' OR material LIKE '%$search%'";

                            };
                            $result = mysqli_query($link, $query);
                            
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo '<tr>'.
                                    "<th class='d-none' id=nota" . $row['id'] .">" . $row['nota'] . "</th>".
                                    "<th scope='col' id=id" . $row["id"].">". $row["id"]."</th>".
                                    "<th scope='col' id=nombre" . $row["id"].">". $row["nombre"]."</th>".
                                    "<th scope='col' id=color" . $row["id"].">". $row["color"]."</th>".
                                    "<th scope='col' id=talla" . $row["id"].">". $row["talla_forma"]."</th>".
                                    "<th scope='col' id=material" . $row["id"].">". $row["material"]."</th>".
                                    "<th scope='col' id=cant" . $row["id"].">". $row["cantidad"]."</th>";
                                    if($res_user['adm'] == 1){
                                        echo "<th scope='col'><a data-toggle='modal' href='#modal_editar'  id=".$row["id"]." class='btn btn-primary upd'>Editar</a></th>";
                                        echo "<th scope='col'><a data-toggle='modal' data-target='#modal_borrar' id=".$row["id"]." class='btn btn-danger del'>Borrar</a></th>";

                                    };
                                    echo "<th scope='col'><a data-toggle='modal' data-target='#modal_retirar' id=".$row["id"]." class='btn btn-success ret'>Retirar</a></th>".
                                    '</tr>';
                                    
                                }
                            ?>
                        </tbody>
                    </table>
                </section>
        </div>
    </section>

    <!--  -->

    <section class="my-4">
        <div class="container">
                <h1 class="text-left p-2 m-1 font-weigth-bold" style="font-size:calc(20px + 1.7vw);">Retiros</h1>
                <div class="container py-2 mb-2">
                    <form method="GET" class="row">
                        <div class="col-8">
                            <input class="form-control" name="search1" type="text" value="" placeholder="Fecha">
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-danger">Buscar</button>
                        </div>
                    </form>
                    <?php
                        $search1 = "";
                        if(isset($_GET['search1'])){
                            $search1 = $_GET['search1'];
                        }
                    ?>
                </div>
                <section class="container barra" style="overflow-y: scroll; height:20rem">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nombre de art.</th>
                                <th scope="col">Talla o forma</th>
                                <th scope="col">Color</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Usuario</th>
                                <th scope="col">Estado</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php
                        if($search1 == ""){
                            $query = "CALL read_retiros()";
                        }
                        else{
                            $query = "SELECT retiros.id_retiro, articulos.id, articulos.cantidad, articulos.nombre, articulos.talla_forma, articulos.color, retiros.cantidad_retiro, retiros.cliente, retiros.fecha, usuarios.username,retiros.estado FROM ((retiros inner join articulos  on retiros.id_producto = articulos.id) inner join usuarios on retiros.id_usuario = usuarios.id) WHERE fecha LIKE '%$search1%' or username LIKE '%$search1%' or cliente LIKE '%$search1%' or nombre LIKE '%$search1%' OR color LIKE '%$search1%' OR talla_forma LIKE '%$search1%' OR estado like '%$search1%' ORDER BY retiros.estado, retiros.fecha DESC ";
                        }
                        $result = mysqli_query($link, $query);
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo '<tr>';
                                    echo "<th scope='col'>". $row["nombre"]."</th>";
                                    echo "<th scope='col'>". $row["talla_forma"]."</th>";
                                    echo "<th scope='col'>". $row["color"]."</th>";
                                    echo "<th scope='col' id=cantidad_retiro".$row["id_retiro"].">". $row["cantidad_retiro"]."</th>";
                                    echo "<th scope='col'>". $row["cliente"]."</th>";
                                    echo "<th scope='col'>". $row["fecha"]."</th>";
                                    echo "<th scope='col'>". $row["username"]."</th>";

                                    echo "<th scope='col'>".$row['estado']."</th>";
    
                                    if($res_user['adm'] == 1){
                                        if($row['estado'] == "Activo" || $row['estado'] == 'activo'){
                                            echo "<th scope='col'><a id=". $row['id_retiro']." data-toggle='modal' href='#modal_anular' class='btn btn-warning anular'>Anular</a></th>";
                                        }
                                        else{
                                            echo "<th scope='col'><button disabled id=". $row['id_retiro']." data-toggle='modal' href='#modal_anular' class='btn btn-warning anular'>Anular</button></th>";
                                        }
                                    };
                                    
                                    echo "<th scope='col' class='d-none' id=id_retiro".$row["id_retiro"].">". $row["id_retiro"]."</th>";
                                    echo "<th scope='col' class='d-none' id=id_articulo_retiro".$row["id_retiro"].">". $row["id"]."</th>";
                                    echo "<th scope='col' class='d-none' id=cant_anular".$row["id_retiro"].">". $row["cantidad"]."</th>";
                                    echo '</tr>';
    
                                }
                            ?>
                        </tbody>
                    </table>
                </section>
        </div>
    </section>
   
    <!--  -->
    <section class="my-4">
        <div class="container ">
                <h1 class="text-left p-2 m-1 font-weigth-bold" style="font-size:calc(20px + 1.7vw);">Historial</h1>
                <div class="container py-2 mb-2">
                    <form method='GET' class="row">
                        <div class="col-8">
                            <input class="form-control" name="search3" type="text" value="" placeholder="Fecha">
                        </div>
                        <div class="col-4">
                            <button class="btn btn-danger">Buscar</button>
                        </div>
                    </form>
                    <?php
                    $search3 ="";
                        if(isset($_GET['search3'])){
                            $search3 = $_GET['search3'];
                        }
                    ?>
                </div>
                <section class="container barra" style="overflow-y: scroll; height:20rem">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Dia</th>
                                <th scope="col">Accion</th>
                                <th scope="col">Articulo</th>
                                <th scope="col">ID de articulo</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                            if($search3 == ""){
                                $query = "SELECT * FROM historial order by tmsp desc;";
                            }
                            else{
                                $query = "SELECT * FROM historial where tmsp like '%$search3%' or accion like '%$search3% or articulo like '%$search3% order by tmsp";
                                echo $query;
                            };
                            $res = mysqli_query($link, $query);
                            print_r($res);
                                while ($row = mysqli_fetch_array($res))
                                {
                                    echo '<tr>';
                                    echo "<th scope='col'>". $row["tmsp"]."</th>";
                                    echo "<th scope='col'>". $row["accion"]."</th>";
                                    echo "<th scope='col'>". $row["articulo"]."</th>";
                                    echo "<th scope='col'>". $row["id_articulo"]."</th>";
                                    echo '</tr>';
    
                                }
                            ?>
                        </tbody>
                    </table>
                </section>
        </div>
    </section>
    <script src="./js/anular.js"></script>
    <script src="./js/del.js"></script>
    <script src="./js/retirar.js"></script>
    <script src="./js/upd.js"></script>
</body>
</html>