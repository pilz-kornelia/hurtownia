<?php

session_start();


$mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));

if (isset($_POST['save'])){
    $name = $_POST['name'];
    $komentarz = $_POST['komentarz'];
    
    $mysqli->query("INSERT INTO data (name, komentarz) VALUES ('$name', '$komentarz')") or
        die($mysqli->error);

    $_SESSION['message']= "Record has been saved!";
    $_SESSION['msg_type']= "success";
    
    header("location: opinie.php");
    
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());
    
    $_SESSION['message']= "Record has been deleted!";
    $_SESSION['msg_type']= "danger";
    
    header("location: opinie.php");
}