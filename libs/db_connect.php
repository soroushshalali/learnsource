<?php

function db_connect()
{
    $base_adr = dirname(__FILE__) . '\\';
    require $base_adr . '../config.php';
    global $conn;
    $conn = new mysqli($HOSTNAME, $DBUSER, $DBPASSWORD, $DBNAME);
    if ($conn->connect_error) {
        die('There is an Error: ' . $conn->connect_error);
    } else {
        return true;
    }
}
