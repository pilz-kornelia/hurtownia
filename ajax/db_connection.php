<?php
session_start();
// Connection variables 
$host = "localhost"; // MySQL host name eg. localhost
$user = "root"; // MySQL user. eg. root ( if your on localserver)
$password = ""; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "multi_login"; // MySQL Database name
 
// Connect to MySQL Database
$con =  mysqli_connect('localhost', 'root', '', 'multi_login');

 

 ?>