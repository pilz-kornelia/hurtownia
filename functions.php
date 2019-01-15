<?php

session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'multi_login');

// variable declaration
$username = $first_name = $last_name = $city = $zipcode = $adress = $email = "";
$errors = array();

// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
    register();
}

// call the login() function if register_btn is clicked
if (isset($_POST['login_btn'])) {
    login();
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user']);
    header("location: ../index.php");
}

// REGISTER USER
function register() {
    global $db, $errors, $username, $password;

    // receive all input values from the form
    $username = e($_POST['username']);
    $first_name = e($_POST['first_name']);
    $last_name = e($_POST['last_name']);
    $email = e($_POST['email']);
    $city = e($_POST['city']);
    $zipcode = e($_POST['zipcode']);
    $adress = e($_POST['adress']);
    $password_1 = e($_POST['password_1']);
    $password_2 = e($_POST['password_2']);
    $sql_u = "SELECT * FROM users WHERE username='$username'";
    $sql_e = "SELECT * FROM users WHERE email='$email'";
    $res_u = mysqli_query($db, $sql_u);
    $res_e = mysqli_query($db, $sql_e);

    // form validation: ensure that the form is correctly filled
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($first_name)) {
        array_push($errors, "First name is required");
    }
    if (empty($last_name)) {
        array_push($errors, "Last name is required");
    }
    if (empty($city)) {
        array_push($errors, "City name is required");
    }
    if (empty($zipcode)) {
        array_push($errors, "Zipcode is required");
    }
    if (empty($adress)) {
        array_push($errors, "Adress is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }
    if (mysqli_num_rows($res_u) > 0) {
        array_push($errors, "Sorry... username already taken");
    } else if (mysqli_num_rows($res_e) > 0) {
        array_push($errors, "Sorry... email already taken");
    }

    // register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1); //encrypt the password before saving in the database
        $adress = md5($adress);
        $city = md5($city);
        $zipcode = md5($zipcode);
        $first_name = md5($first_name);
        $last_name = md5($last_name);
        $password = e($_POST['password']);

        if (isset($_POST['user_type'])) {
            $user_type = e($_POST['user_type']);
            $query = "INSERT INTO users (username, first_name, last_name, city, zipcode, adress, email, user_type, password) 
						  VALUES('$username', '$first_name', '$last_name', '$city', '$zipcode', '$adress','$email', '$user_type', '$password')";
            mysqli_query($db, $query);
            $_SESSION['success'] = "New user successfully created!!";
            header('location: index.html');
        } else {
            $query = "INSERT INTO users (username, first_name, last_name, city, zipcode, adress, email, user_type, password) 
						  VALUES('$username', '$first_name', '$last_name', '$city', '$zipcode', '$adress', '$email', 'user', '$password')";
            mysqli_query($db, $query);

            // get id of the created user
            $logged_in_user_id = mysqli_insert_id($db);

            $_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
            $_SESSION['success'];
            header('location: index.php');
        }
    }
}

// return user array from their id
function getUserById($id) {
    global $db;
    $query = "SELECT * FROM users WHERE id=" . $id;
    $result = mysqli_query($db, $query);

    $user = mysqli_fetch_assoc($result);
    return $user;
}

// LOGIN USER
function login() {
    global $db, $username, $errors, $username_err;

    // grap form values
    $username = e($_POST['username']);
    $password = e($_POST['password']);

    // make sure form is filled properly
    if (empty($username)) {
        array_push($errors, "Username is required>");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (!empty($_POST["remember"])) {
        setcookie("username", $username, time() + (10 * 365 * 24 * 60 * 60));
        setcookie("password", $password, time() + (10 * 365 * 24 * 60 * 60));
    } else {
        if (isset($_COOKIE["username"])) {
            setcookie("username", "");
        }
        if (isset($_COOKIE["password"])) {
            setcookie("password", "");
        }
    }

    // attempt login if no errors on form
    if (count($errors) == 0) {
        $password = md5($password);

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results) == 1) { // user found
            // check if user is admin or user
            $logged_in_user = mysqli_fetch_assoc($results);
            if ($logged_in_user['user_type'] == 'admin') {

                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success'] = "You are now logged in";
                header('location: admin/index.php');
            } else {
                $_SESSION['user'] = $logged_in_user;
                $_SESSION['success'] = "You are now logged in";

                header('location: index.php');
            }
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

function isLoggedIn() {
    if (isset($_SESSION['user'])) {
        return true;
    } else {
        return false;
    }
}

function isAdmin() {
    if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin') {
        return true;
    } else {
        return false;
    }
}

// escape string
function e($val) {
    global $db;
    return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
    global $errors;

    if (count($errors) > 0) {
        echo '<div class="header">';
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
        echo '</div>';
    }
}

?>