<?php
    $server = "localhost";
    $users = "root";
    $password = "";
    $database = "financial";
    $connection = mysqli_connect($server, $users, $password, $database);

    if(mysqli_connect_errno()){
        die("Conexão falhou: " . mysqli_connect_errno());
    }

?>