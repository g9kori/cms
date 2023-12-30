<?php
// 1. CREATE A DATABASE CONNECTION
define("DB_SERVER", "localhost");
define("DB_USER", "widget_cms");
define("DB_PASS", "secret_password");
define("DB_NAME", "widget_corp");

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

//Test if connection occured
if(mysqli_connect_errno()){
    die("Database connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
    // displays actual error or an empty string using error() and error number-errno()
}
?>
