<?php

$conn = include "conn.php";

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $insert = "INSERT INTO notes (title, content) VALUES (:title, :content);";
    $res = $conn->prepare($insert);
    $res->bindParam(":title", $title);
    $res->bindParam(":content", $content);
    $res->execute();
    echo "Success";
}

