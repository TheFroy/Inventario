<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: main_page.php");
    exit;
}

// Include config file
require_once "db/conexion.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM usuarios WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("location: main_page.php");
                        } else {
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else {
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Ubuntu&display=swap" rel="stylesheet">
    <!-- Animaciones -->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <!--  -->
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class=" barra" >
<div class="container-fluid" style="margin-top: 10%;">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="container">
                    <div class="row justify-content-center" >
                        <div class="col-md-9 font1">
                            <div class="container animate__animated animate__fadeIn animate__slow p-4 bg-white shadow border rounded">
                                <h2 class="p-2 font1 text-center">Inicio de sesion</h2>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="font2">
                                        <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>" >
                                            <label>Nombre de Usuario</label>
                                            <input type="text" require value="<?php echo $username; ?>" name="username"  class="form-control p-2 ">
                                        </div>
            
                                        <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                            <label>Contraseña</label>
                                            <input type="password" required name="password"  class="form-control p-2 ">
                                            <!-- <a href="./resetpassword.php" target="_blank" rel="noopener noreferrer" class="mt-4">Olvidaste tu contraseña?</a> -->
                                        </div>
            
                                        <input class="mt-4 btn btn-primary btn-block rounded" type="submit" value="Ingresar" ></input>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 animate__animated animate__fadeIn animate__slow">
                <div class=" text-center container-fluid" >
                    <!-- <img class="img-fluid" style="max-width: 350px;" src=""  alt=""> -->
                    <h6 class=" text-center" style="font-size:calc(25px + 1vw)"> Star Productions</h6>
                    <h6 class=" text-center font-weight-light" style="font-size:calc(15px + 1vw)"> Inventario de material para sublimar</h6>
                </div>
            </div>
        </div>
    </div>
    
    <footer class=" fixed-bottom font1">
        <div class="p-4 text-center  animate__animated animate__fadeIn animate__delay-1s">
        </div>
    </footer>
</body>
</html>
