<?php
$username = $_SESSION['username'];
$query = "SELECT * FROM usuarios where username = '$username'";
$res_user = mysqli_fetch_array(mysqli_query($link, $query));

function getOficinaName(){

    $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    };

    $query = "SELECT * FROM oficinas;";
    $result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_array($result)){
        echo "<a class='dropdown-item' href='/inventario_blast/views_oficinas/oficina".$row["id"].".php'>".$row["nombre"]."</a>";
    }
}
?>

<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="./main_page.php">Star Productions</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="/inventario_blast/main_page.php">Inventario de sublimacion<span class="sr-only">(current)</span></a>
                    </li>
                    <?php
                    if($res_user['adm'] == 1){
                        echo "<li class='nav-item'>".
                            "<a class='nav-link' href='/inventario_blast/usuarios.php'>usuarios</a>".
                            "</li>".
                            "<li class='nav-item'>".
                            "<a class='nav-link' href='/inventario_blast/inventario_gen.php'>inventario general</a>".
                            "</li>".
                            "<li class='nav-item dropdown'>".
                                "<a class='nav-link dropdown-toggle' href='' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>".
                                "Inventario general".
                                "</a>".
                                "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
                                    getOficinaName();
                        echo    "</div>".
                            "</li>";
                    }
                    ?>
                    
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
        </div>
    </header>