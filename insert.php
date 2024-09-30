<?php

$conn = require_once("conn.php");

if(isset($_POST['submit'])){
    var_dump($_POST);
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];

    $query = 'INSERT INTO notes VALUES ("' .
        $id . '","' . 
        $title . '","' . 
        $content . 
        '");';
    
    echo $query;
    
    $res = mysqli_query($conn, $query);
    mysqli_close($conn);

    header("Location: index.php");
}

