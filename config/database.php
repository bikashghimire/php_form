<?php
define ('DB_HOST','localhost');
define ('DB_USER','bikash');
define ('DB_PASS','YqUs3_Sqd8]d)J@');
define ('DB_NAME','php_dev');

// Create Connection 
$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($conn->connect_error){
    die('Connection failed'.  $conn->connect->error);
}


?>