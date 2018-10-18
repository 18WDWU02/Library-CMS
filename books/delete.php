<?php
    require '../vendor/autoload.php';

    $dotenv = new Dotenv\Dotenv(__DIR__ . '/..');
    $dotenv->load();

    require '../templates/connection.php';


    $id = $_POST['bookID'];
    $sql = "SELECT * FROM `books` WHERE id = $id";

    $result = mysqli_query($dbc, $sql);

    if($result && mysqli_affected_rows($dbc) > 0){

        $book = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $imageName = $book['image_name'];

        unlink("../images/uploads/thumbnails/$imageName");
        unlink("../images/uploads/medium/$imageName");
        unlink("../images/uploads/$imageName");

        $sqlDelete = "DELETE FROM `books` WHERE id = $id";
        $result = mysqli_query($dbc, $sqlDelete);

        header("Location: ../index.php");

    } else if(mysqli_affected_rows($dbc) == 0){
        header('Location: ../errors/404.php');
    } else {
        die("ERROR, cannot get the data requested");
    }
