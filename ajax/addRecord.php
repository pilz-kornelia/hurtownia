<?php

if (isset($_POST['username']) && isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['city']) && isset($_POST['zipcode']) && isset($_POST['adress']) && isset($_POST['email']) && isset($_POST['user_type']) && isset($_POST['password'])) {
    // include Database connection file 
    include("db_connection.php");

    // get values 
    $username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $adress = e($_POST['adress']);
    $password = $_POST['password'];

    $query = "INSERT INTO users(username, first_name, last_name, city, zipcode, adress, email, user_type, password) VALUES('$first_name', '$last_name', '$email')";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    echo "1 Record Added!";
}
?>