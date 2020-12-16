<section class="my-4">
        <div class="container ">
                <h1 class="text-left p-2 m-1 font-weigth-bold" style="font-size:calc(20px + 1.7vw);">Historial</h1>
                <div class="container py-2 mb-2">
                    <form method='GET' class="row">
                        <div class="col-8">
                            <input class="form-control" name="search2" type="text" value="" placeholder="Fecha">
                        </div>
                        <div class="col-4">
                            <button class="btn btn-danger">Buscar</button>
                        </div>
                    </form>
                    <?php
                    $search2 ="";
                        if(isset($_GET['search2'])){
                            $search2 = $_GET['search2'];
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
                                if($search2 == ""){
                                    $query = "SELECT * FROM historial order by tmsp desc;";
                                }
                                else{
                                    $query = "SELECT * FROM historial where tmsp like '%$search2%' or accion like '%$search2% or articulo like '%$search2% order by tmsp";
                                };
                                echo $query
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