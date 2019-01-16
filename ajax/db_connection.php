<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'multi_login');
 if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

