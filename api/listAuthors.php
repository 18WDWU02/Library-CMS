<?php
    require '../vendor/autoload.php';
    $dotenv = new Dotenv\Dotenv(__DIR__ . '/..');
    $dotenv->load();

    require '../templates/connection.php';

    $value = $_GET['inputValue'];

    $sql = "SELECT * FROM `authors` WHERE author_name LIKE '$value%' LIMIT 10";

    $result = mysqli_query($dbc, $sql);

    if($result && mysqli_affected_rows($dbc) > 0){
        $authors = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        $authors = null;
    }

    header("Content-Type: application/json");
    echo json_encode($authors);
