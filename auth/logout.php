<?php

    require '../templates/header.php';

    unset($_SESSION['valid']);
    unset($_SESSION['timeout']);
    unset($_SESSION['username']);

    header("Location: ../index.php");
