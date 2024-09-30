<?php

$db = "note_app";
$username = "root";
$password = "";
$server_name = "localhost";

$conn = mysqli_connect($server_name, $username, $password, $db);

if(mysqli_connect_errno()){
    echo "Connection failed";
    die();
}else {
    echo "Connection successful";
    return $conn;
}

