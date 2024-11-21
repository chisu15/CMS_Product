<?php 

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "bt3";

    // CREATE DATABASE CONNECT
    $con = mysqli_connect($host, $username, $password, $database);

    if (!$con)
    {
        die("Connection to Database failed". mysqli_connect_error());
    }
    else{
        echo"Connection to Database successfully";
    }
?>