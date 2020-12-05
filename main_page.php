<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

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

<!-- Modal editar -->
<div class="modal fade" id="modal_editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Editar artículo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>
        <form action="" method="post">
            <div class="modal-body">
                <div class="container">
                    <div class="fetched-data"></div>
                    <div. class="row py-2">
                            <div class="col-4">
                                <label for="">ID de artículo</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" name="id">
                            </div>
                    </div.fetched-data>

                    <div class="row py-2">
                            <div class="col-4">
                                <label for="">Nombre</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" name="nombre">
                            </div>
                    </div>

                    <div class="row py-2">
                            <div class="col-4">
                                <label for="">Color</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" name="color">
                            </div>
                    </div>

                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">Talla o forma</label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control" name="talla_forma">
                        </div>
                    </div>

                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">Material</label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control" name="Material">
                        </div>
                    </div>

                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">Cantidad</label>
                        </div>
                        <div class="col-7">
                            <input type="number" class="form-control" name="cantidad">
                        </div>
                    </div>

                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">Nota</label>
                        </div>
                        <div class="col-7">
                            <textarea type="text" class="form-control" name="nota"></textarea>
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit"  class="btn btn-primary">Guardar Cambios</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal retirar -->
<div class="modal fade" id="modal_retirar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Retirar artículo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="" method="post">
            <div class="modal-body">
                <div class="container">

                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">ID de producto</label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control" name="id_producto">
                        </div>
                    </div>
                    
                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">Cantidad</label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control" name="cantidad">
                        </div>
                    </div>
                    
                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">Cliente</label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control" name="nombre_cliente">
                        </div>
                    </div>
                    
                    <div class="row py-2">
                        <div class="col-4">
                            <label for="">ID Usuario</label>
                        </div>
                        <div class="col-7">
                            <input type="text" class="form-control" name="id_usuario">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit"  class="btn btn-primary">Realizar retiro</button>
            </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Modal borrar -->
  <div class="modal fade" id="modal_borrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Borrar articulo</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h5>¿Está seguro que desea eliminar articulo?</h5>
          <input type="text" name="" id="id_delete" placeholder="id a eliminar">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Confirmar</button>
        </div>
      </div>
    </div>
  </div>

<body class="barra bg-light">
    <header>
        <div class="container-fluid text-center py-4 mb-4" style="background-color:lightgrey">
            <h1 class="" style="font-size:calc(30px + 2.5vw);">Inventario</h1>
            <h3>Bienvenido, <?php htmlspecialchars($_SESSION["username"]) ?></h3>
            <a href="logout.php" class="btn btn-danger mr-1">Cerrar sesion</a>

        </div>
    </header>


    <!--  -->
    <section class="my-4">
        <div class="container">
            <form action="" method="GET">
                <?php
                require_once 'db/conexion.php';
                $result = mysqli_query($link, 'SELECT * FROM articulos')
                ?>
                <h1 class="text-left p-2 m-1 font-weigth-bold" style="font-size:calc(20px + 1.7vw);">Articulos</h1>
                <div class="container py-2 mb-2">
                    <div class="row">
                        <div class="col-8">
                            <input class="form-control" type="text" value="" placeholder="Nombre de articulo">
                        </div>
                        <div class="col-4">
                            <button class="btn btn-danger">Buscar</button>
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
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo '<tr>'.
                                        "<th scope='col'>". $row["id"]."</th>".
                                        "<th scope='col'>". $row["nombre"]."</th>".
                                        "<th scope='col'>". $row["color"]."</th>".
                                        "<th scope='col'>". $row["talla_forma"]."</th>".
                                        "<th scope='col'>". $row["material"]."</th>".
                                        "<th scope='col'>". $row["cantidad"]."</th>".
                                        "<th scope='col'><a data-toggle='modal' href='#modal_editar' id='upd_art' data-id=".$row["id"]." class='btn btn-primary'>Editar</a></th>".
                                        "<th scope='col'><a data-toggle='modal' data-target='#modal_retirar'  class='btn btn-success'>Retirar</a></th>".
                                        "<th scope='col'><a data-toggle='modal' data-target='#modal_borrar' class='btn btn-danger'>Borrar</a></th>".
                                        '</tr>';
    
                                }
                            ?>
                        </tbody>
                    </table>
                </section>
            </form>
        </div>
    </section>

    <!--  -->

    <section class="my-4">
        <div class="container ">
            <form action="" method="GET">
                <?php
                $query = "SELECT articulos.nombre, articulos.talla_forma, articulos.color, retiros.cantidad_retiro, retiros.cliente, retiros.fecha, usuarios.username FROM ((retiros inner join articulos  on retiros.id_producto = articulos.id) inner join usuarios on retiros.id_usuario = usuarios.id);";
                $result = mysqli_query($link, $query);
                ?>
                <h1 class="text-left p-2 m-1 font-weigth-bold" style="font-size:calc(20px + 1.7vw);">Retiros</h1>
                <div class="container py-2 mb-2">
                    <div class="row">
                        <div class="col-8">
                            <input class="form-control" type="text" value="" placeholder="Fecha">
                        </div>
                        <div class="col-4">
                            <button class="btn btn-danger">Buscar</button>
                        </div>
                    </div>
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
                            <th scope="col">Anular</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo '<tr>';
                                    echo "<th scope='col'>". $row["nombre"]."</th>";
                                    echo "<th scope='col'>". $row["talla_forma"]."</th>";
                                    echo "<th scope='col'>". $row["color"]."</th>";
                                    echo "<th scope='col'>". $row["cantidad_retiro"]."</th>";
                                    echo "<th scope='col'>". $row["cliente"]."</th>";
                                    echo "<th scope='col'>". $row["fecha"]."</th>";
                                    echo "<th scope='col'>". $row["username"]."</th>";
                                    echo "<th scope='col'> 
                                        <input type='checkbox'> <span class='ml-3'><button class='btn btn-warning'>Anular</button></span>
                                    </th>";
                                    echo '</tr>';
    
                                }
                            ?>
                        </tbody>
                    </table>
                </section>
            </form>
        </div>
    </section>
   
    <!--  -->
    <section class="my-4">
        <div class="container ">
            <form action="" method="GET">
                <?php
                $result = mysqli_query($link, 'SELECT * FROM historial')
                ?>
                <h1 class="text-left p-2 m-1 font-weigth-bold" style="font-size:calc(20px + 1.7vw);">Historial</h1>
                <div class="container py-2 mb-2">
                    <div class="row">
                        <div class="col-8">
                            <input class="form-control" type="text" value="" placeholder="Fecha">
                        </div>
                        <div class="col-4">
                            <button class="btn btn-danger">Buscar</button>
                        </div>
                    </div>
                </div>
                <section class="container barra" style="overflow-y: scroll; height:20rem">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Dia</th>
                            <th scope="col">Accion</th>
                            <th scope="col">Articulo</th>
                        </tr>
                    </thead>
                        <tbody>
                            <?php
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo '<tr>';
                                    echo "<th scope='col'>". $row["tiempo"]."</th>";
                                    echo "<th scope='col'>". $row["accion"]."</th>";
                                    echo "<th scope='col'>". $row["articulo"]."</th>";
                                    echo '</tr>';
    
                                }
                            ?>
                        </tbody>
                    </table>
                </section>
            </form>
        </div>
    </section>

</body>
</html>