<?php

$username = "root";
$password = "";
$server_name = "localhost";
$db = "note_app";

try {
    $pdo = new PDO("mysql:host=$server_name;dbname=$db", $username, $password);
    return $pdo;
    
}catch (PDOException $e){
    echo "Connection failed";
}

