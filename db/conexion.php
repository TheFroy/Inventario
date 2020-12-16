<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// define('DB_SERVER', 'bd9w7cm5sj0bqjc2hsxz-mysql.services.clever-cloud.com');
// define('DB_USERNAME', 'uievyq3vkosweoal');
// define('DB_PASSWORD', 'rtJ4e1PEt36eq0Ye8MkU');
// define('DB_NAME', 'bd9w7cm5sj0bqjc2hsxz');

// /* Attempt to connect to MySQL database */
// $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// // Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'superUser');
define('DB_PASSWORD', 'sudo');
define('DB_NAME', 'inventario_blast');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>