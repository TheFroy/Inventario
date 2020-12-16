<?php
require_once './db/conexion.php';

session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
};


function getTable($cod){
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    };

    $query = "SELECT articulos_oficina.id, articulos_oficina.nombre, articulos_oficina.marca, articulos_oficina.modelo, articulos_oficina.descripcion, articulos_oficina.cantidad, articulos_oficina.precio,oficinas.id AS id_oficina, articulos_oficina.cantidad*articulos_oficina.precio as 'total' FROM articulos_oficina inner join oficinas on articulos_oficina.id_oficina = oficinas.id WHERE oficinas.id = $cod  order by nombre asc;";
    $res = mysqli_query($link, $query);
    while ($row = mysqli_fetch_array($res))
    {
        echo '<tr>';
        echo "<th scope='col' class='d-none' id='".$row['id']."'>". $row["id"]."</th>";
        echo "<th scope='col' id='nom".$row['id']."'>". $row["nombre"]."</th>";
        echo "<th scope='col' id='marca".$row['id']."'>". $row["marca"]."</th>";
        echo "<th scope='col'class='d-none' id='modelo".$row['id']."'>". $row["modelo"]."</th>";
        echo "<th scope='col' class='d-none' id='desc".$row['id']."'>". $row["descripcion"]."</th>";
        echo "<th scope='col' id='cant".$row['id']."'>". $row["cantidad"]."</th>";
        echo "<th scope='col' id='precio".$row['id']."'>". $row["precio"]."</th>";
        echo "<th scope='col' class='d-none' id='ofi".$row['id']."'>". $row["id_oficina"]."</th>";
        echo "<th scope='col'>". $row["total"]."</th>";
        echo "<th scope='col'><a data-toggle='modal' data-target='#modal_upd_nart' id=".$row["id"]." class='btn btn-info info-nart'>+info</a></th>";
        echo "<th scope='col'><a data-toggle='modal' data-target='#modal_del_nart' id=".$row["id"]." class='btn btn-danger del_nart'>Borrar</a></th>";
        echo '</tr>';
        
    };
};

function getTableAll(){
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    };

    $query = "SELECT articulos_oficina.id, articulos_oficina.nombre, articulos_oficina.marca, articulos_oficina.modelo, articulos_oficina.descripcion, articulos_oficina.cantidad, articulos_oficina.precio,oficinas.id AS id_oficina, articulos_oficina.cantidad*articulos_oficina.precio as 'total', oficinas.nombre as ofi_nombre FROM articulos_oficina inner join oficinas on articulos_oficina.id_oficina = oficinas.id  order by nombre asc;";
    $res = mysqli_query($link, $query);
    while ($row = mysqli_fetch_array($res))
    {
        echo '<tr>';
        echo "<th scope='col' class='d-none' id='".$row['id']."'>". $row["id"]."</th>";
        echo "<th scope='col' id='nom".$row['id']."'>". $row["nombre"]."</th>";
        echo "<th scope='col' id='marca".$row['id']."'>". $row["marca"]."</th>";
        echo "<th scope='col'class='d-none' id='modelo".$row['id']."'>". $row["modelo"]."</th>";
        echo "<th scope='col' class='d-none' id='desc".$row['id']."'>". $row["descripcion"]."</th>";
        echo "<th scope='col' id='cant".$row['id']."'>". $row["cantidad"]."</th>";
        echo "<th scope='col' class=''>". $row["ofi_nombre"]."</th>";
        echo "<th scope='col' class='d-none' id='ofi".$row['id']."'>". $row["id_oficina"]."</th>";
        echo "<th scope='col' id='precio".$row['id']."'>". $row["precio"]."</th>";
        echo "<th scope='col'>". $row["total"]."</th>";
        echo "<th scope='col'><a data-toggle='modal' data-target='#modal_upd_nart' id=".$row["id"]." class='btn btn-info info-nart'>+info</a></th>";
        echo "<th scope='col'><a data-toggle='modal' data-target='#modal_del_nart' id=".$row["id"]." class='btn btn-danger del_nart'>Borrar</a></th>";
        echo '</tr>';
        
    };
};

function getOficina($cod){
    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    };

    $query = "SELECT id, nombre FROM oficinas where id=$cod";
    $nom = mysqli_fetch_array(mysqli_query($link, $query));
    echo $nom['nombre'];
}

include './components/modal_del_nart.php';
include './components/modal_upd_nart.php';
include './components/modal_add_nart.php';
?>

<!DOCTYPE html>
<html lang="es">
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
                    <a class="nav-link" href="./main_page.php">Inventario de sublimacion<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                    <a class="nav-link" href="./usuarios.php">usuarios</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="./inventario_gen.php">inventario general</a>
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
<!--  -->

    <div class="container-fluid p-3 ">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <a class="btn btn-primary " data-toggle="modal" data-target="#modal_add_nart">añadir articulo</a>
                </div>
                <div class="col-9">
                    <h4>Total de inventario: B\. 
                        <?php
                            require_once './db/conexion.php';
                            $query = "select sum(cantidad*precio) as total from articulos_oficina";
                            $row = mysqli_fetch_array(mysqli_query($link, $query));
                            echo $row['total'];
                        ?>
                    </h4>
                </div>
            </div>
        </div>
    </div>

    

    <div id="accordion">
        <div class="card">
            <div  class="card-header mb-0 text-left" >
            <h3 class="font-weight-bold" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="headingOne"><?php getOficina(1); ?></h3>
            <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                <div class="py-2">
                    <section class="">
                        <div class="container-fluid">
                                <!-- <h1 class="text-left p-2 m-1 font-weigth-bold" style="font-size:calc(20px + 1.7vw);">Estudio #2</h1> -->
                                <section class="container barra" style="overflow-y: scroll; height:20rem">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <!-- <th scope="col">ID</th> -->
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Marca</th>
                                                <!-- <th scope="col">Modelo</th> -->
                                                <!-- <th scope="col">Descripcion</th> -->
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Precio Uni.</th>
                                                <th scope="col">Total</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody><?php getTable(1);?></tbody>
                                    </table>
                                </section>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        </div>

        <div class="card">
            <div  class="card-header mb-0 text-left">
            <h3 class="font-weight-bold" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="true" aria-controls="collapseOne" id="headingOne"><?php getOficina(2); ?></h3>
            <div id="collapsetwo" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                <div class="py-2">
                    <section class="">
                        <div class="container">
                                <section class="container barra" style="overflow-y: scroll; height:20rem">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <!-- <th scope="col">ID</th> -->
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Marca</th>
                                                <!-- <th scope="col">Modelo</th> -->
                                                <!-- <th scope="col">Descripcion</th> -->
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Precio Uni.</th>
                                                <th scope="col">Total</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody><?php getTable(2);?></tbody>
                                    </table>
                                </section>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div  class="card-header mb-0 text-left">
            <h3 class="font-weight-bold" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapseOne" id="headingOne"><?php getOficina(3); ?></h3>
            <div id="collapse3" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                <div class="py-2">
                    <section class="">
                        <div class="container">
                                <section class="container barra" style="overflow-y: scroll; height:20rem">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <!-- <th scope="col">ID</th> -->
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Marca</th>
                                                <!-- <th scope="col">Modelo</th> -->
                                                <!-- <th scope="col">Descripcion</th> -->
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Precio Uni.</th>
                                                <th scope="col">Total</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody><?php getTable(3);?></tbody>
                                    </table>
                                </section>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div  class="card-header mb-0 text-left" >
            <h3 class="font-weight-bold" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapseOne" id="headingOne"><?php getOficina(4); ?></h3>
            <div id="collapse4" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                <div class="py-2">
                    <section class="">
                        <div class="container">
                                <section class="container barra" style="overflow-y: scroll; height:20rem">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <!-- <th scope="col">ID</th> -->
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Marca</th>
                                                <!-- <th scope="col">Modelo</th> -->
                                                <!-- <th scope="col">Descripcion</th> -->
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Precio Uni.</th>
                                                <th scope="col">Total</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody><?php getTable(4);?></tbody>
                                    </table>
                                </section>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div  class="card-header mb-0 text-left" >
            <h3 class="font-weight-bold" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapseOne" id="headingOne"><?php getOficina(5); ?></h3>
            <div id="collapse5" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                <div class="py-2">
                    <section class="">
                        <div class="container">
                                <section class="container barra" style="overflow-y: scroll; height:20rem">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <!-- <th scope="col">ID</th> -->
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Marca</th>
                                                <!-- <th scope="col">Modelo</th> -->
                                                <!-- <th scope="col">Descripcion</th> -->
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Precio Uni.</th>
                                                <th scope="col">Total</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody><?php getTable(5);?></tbody>
                                    </table>
                                </section>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div  class="card-header mb-0 text-left" >
            <h3 class="font-weight-bold" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapseOne" id="headingOne"><?php getOficina(6); ?></h3>
            <div id="collapse6" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                <div class="py-2">
                    <section class="">
                        <div class="container">
                                <section class="container barra" style="overflow-y: scroll; height:20rem">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <!-- <th scope="col">ID</th> -->
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Marca</th>
                                                <!-- <th scope="col">Modelo</th> -->
                                                <!-- <th scope="col">Descripcion</th> -->
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Precio Uni.</th>
                                                <th scope="col">Total</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody><?php getTable(6);?></tbody>
                                    </table>
                                </section>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div  class="card-header mb-0 text-left" >
            <h3 class="font-weight-bold" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapseOne" id="headingOne"><?php getOficina(7); ?></h3>
            <div id="collapse7" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                <div class="py-2">
                    <section class="">
                        <div class="container">
                                <section class="container barra" style="overflow-y: scroll; height:20rem">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <!-- <th scope="col">ID</th> -->
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Marca</th>
                                                <!-- <th scope="col">Modelo</th> -->
                                                <!-- <th scope="col">Descripcion</th> -->
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Precio Uni.</th>
                                                <th scope="col">Total</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody><?php getTable(7);?></tbody>
                                    </table>
                                </section>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div  class="card-header mb-0 text-left" >
            <h3 class="font-weight-bold" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapseOne" id="headingOne"><?php getOficina(8); ?></h3>
            <div id="collapse8" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                <div class="py-2">
                    <section class="">
                        <div class="container">
                                <section class="container barra" style="overflow-y: scroll; height:20rem">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <!-- <th scope="col">ID</th> -->
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Marca</th>
                                                <!-- <th scope="col">Modelo</th> -->
                                                <!-- <th scope="col">Descripcion</th> -->
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Precio Uni.</th>
                                                <th scope="col">Total</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody><?php getTable(8);?></tbody>
                                    </table>
                                </section>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div  class="card-header mb-0 text-left" >
            <h3 class="font-weight-bold" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapseOne" id="headingOne"><?php getOficina(9); ?></h3>
            <div id="collapse9" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                <div class="py-2">
                    <section class="">
                        <div class="container">
                                <section class="container barra" style="overflow-y: scroll; height:20rem">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <!-- <th scope="col">ID</th> -->
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Marca</th>
                                                <!-- <th scope="col">Modelo</th> -->
                                                <!-- <th scope="col">Descripcion</th> -->
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Precio Uni.</th>
                                                <th scope="col">Total</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody><?php getTable(9);?></tbody>
                                    </table>
                                </section>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div  class="card-header mb-0 text-left" >
            <h3 class="font-weight-bold" data-toggle="collapse" data-target="#collapse10" aria-expanded="true" aria-controls="collapseOne" id="headingOne"><?php getOficina(10); ?></h3>
            <div id="collapse10" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                <div class="py-2">
                    <section class="">
                        <div class="container">
                                <section class="container barra" style="overflow-y: scroll; height:20rem">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <!-- <th scope="col">ID</th> -->
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Marca</th>
                                                <!-- <th scope="col">Modelo</th> -->
                                                <!-- <th scope="col">Descripcion</th> -->
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Precio Uni.</th>
                                                <th scope="col">Total</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody><?php getTable(10);?></tbody>
                                    </table>
                                </section>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div  class="card-header mb-0 text-left" >
            <h3 class="font-weight-bold" data-toggle="collapse" data-target="#collapse11" aria-expanded="true" aria-controls="collapseOne" id="headingOne"><?php getOficina(11); ?></h3>
            <div id="collapse11" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                <div class="py-2">
                    <section class="">
                        <div class="container">
                                <section class="container barra" style="overflow-y: scroll; height:20rem">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <!-- <th scope="col">ID</th> -->
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Marca</th>
                                                <!-- <th scope="col">Modelo</th> -->
                                                <!-- <th scope="col">Descripcion</th> -->
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Precio Uni.</th>
                                                <th scope="col">Total</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody><?php getTable(11);?></tbody>
                                    </table>
                                </section>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div  class="card-header mb-0 text-left" >
            <h3 class="font-weight-bold" data-toggle="collapse" data-target="#collapse12" aria-expanded="true" aria-controls="collapseOne" id="headingOne"><?php getOficina(12); ?></h3>
            <div id="collapse12" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                <div class="py-2">
                    <section class="">
                        <div class="container">
                                <section class="container barra" style="overflow-y: scroll; height:20rem">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <!-- <th scope="col">ID</th> -->
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Marca</th>
                                                <!-- <th scope="col">Modelo</th> -->
                                                <!-- <th scope="col">Descripcion</th> -->
                                                <th scope="col">Cantidad</th>
                                                <th scope="col">Precio Uni.</th>
                                                <th scope="col">Total</th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody><?php getTable(12);?></tbody>
                                    </table>
                                </section>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!--  -->

</body>
<script src="./js/upd_nart.js"></script>
<script src="./js/del_nart.js"></script>
</html>