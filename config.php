<?php

$server = 'localhost';
$username = "root";
$password = "arang123";
$database = "perpustakaan";

$getDB = mysqli_connect($server, $username, $password, $database);

if(!$db){
    return "Failed connected to database: " . mysqli_connect_error();
}

?>