<?php
    date_default_timezone_set("Pacific/Auckland");
    // $dbc = mysqli_connect(host, username, password, table);
    $dbc = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB_TABLE'));
    if($dbc){
        // var_dump('connection successfull');
        $dbc->set_charset('utf8');
        mysqli_query($dbc, "SET time_zone = 'Asia/Colombo'");
    } else {
        die("ERROR, connection couldn't be made, Please check your enviroment files and include the right host, username, password and table.");
    }

    ob_start();
    session_start();
 ?>
