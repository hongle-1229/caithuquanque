<?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "data_donhang";

    $connect = new mysqli($severname, $username, $password, $dbname);

    if ($connect->connect_error){
        die("Connect failed ". $connect->connect_error);
    }
?>

