<?php
include("../configs/database.php");

function getAll($table)
{
    global $con;
    $query = "SELECT * FROM $table";
    $result = mysqli_query($con, $query);
    $data = [];
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    return $data;
}

function getById($table, $id)
{
    global $con;
    $query = "SELECT * FROM $table WHERE id = $id";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return null;
    }

    return null;
}


function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: ' . $url);
    exit();
}
