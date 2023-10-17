<?php
    $dbhost = "phpapp2323-server.postgres.database.azure.com";
    $dbuser = "pqxgybivhf";
    $dbpassword = "331JDVYE6PRJO7A7$";
    $dbname = "phpapp2323-database";
    $port = 5432;
    $conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname, $port);
    if (!$conn){
        die("No hay conexión: ".mysqli_connect_error());
    }
?>
