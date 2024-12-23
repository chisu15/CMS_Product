<?php 

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "bt3";


    $con = mysqli_connect($host, $username, $password, $database);

    if (!$con)
    {
        die("Kết nối cơ sở dữ liệu thất bại". mysqli_connect_error());
    }
    else{
        // echo"Connection to Database successfully";
    }
?>