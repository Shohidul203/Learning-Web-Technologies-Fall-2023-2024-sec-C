<?php
    session_start();
    $username = $_REQUEST['username'];
    $number = $_REQUEST['number'];
    $password = $_REQUEST['password'];

    require_once('../models/adminModel.php');
    $result = register($username, $password, $number);
    echo $result;
?>