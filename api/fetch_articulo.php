<?php
require_once 'db/conexion.php';
//Include database connection
if($_POST['rowid']) {
    //$id = $_POST['rowid']; //escape string
    $result = mysqli_query($link, 'SELECT * FROM articulos');
    
                                while ($row = mysqli_fetch_array($result))
                                {
                                    echo 'funciona!';
    
                                }
                            
    // Run the Query
    // Fetch Records
    // Echo the data you want to show in modal
 }
?>