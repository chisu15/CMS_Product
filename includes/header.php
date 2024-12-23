<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .table-hover tbody tr:hover {
            background-color: #f8f9fa;
            cursor: pointer;
        }
    </style>
    <title>GameStore | Trang chủ</title>
</head>

<body>
    <?php
    include("includes/navbar.php");
    ?>