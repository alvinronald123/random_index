<?php
// session_start();
// define('SITEURL', 'http://localhost/QOM/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
Define('DB_PASSWORD', '');
define('DB_NAME', 'qom_db');

$conn = mysqli_connect(LOCALHOST, DB_USERNAME,DB_PASSWORD)  or die(mysqli_error($conn));

$db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn));

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>