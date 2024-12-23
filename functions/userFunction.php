<?php
// session_start();
include("configs/database.php");

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
function getAllActive($table)
{
    global $con;
    $query = "SELECT * FROM $table WHERE status = '1'";
    
    return $result = mysqli_query($con, $query);
}
function getAllTrend($table)
{
    global $con;
    $query = "SELECT * FROM $table WHERE trending = '1'";
    $result = mysqli_query($con, $query);
    $data = [];
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    return $data;
}

function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: ' . $url);
    exit();
}

?>