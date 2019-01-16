<?php
// include Database connection file
iinclude("db_connection.php");
 
// check request
if(isset($_POST))
{
    $username = e($_POST['username']);
    $first_name = e($_POST['first_name']);
    $last_name = e($_POST['last_name']);
    $email = e($_POST['email']);
    $city = e($_POST['city']);
    $zipcode = e($_POST['zipcode']);
    $adress = e($_POST['adress']);
    $password_1 = e($_POST['password_1']);
    $password_2 = e($_POST['password_2']);
   


        $query = "UPDATE info SET username='$username', first_name='$first_name', last_name='$last_name', city='$city', zipcode='$zipcode', adress='$adress', email='$email', user_type='$user_type', password='$password' WHERE id=$id";
    if (!$result = mysqli_query($db, $query)) {
        exit(mysqli_error($db));
    }
}