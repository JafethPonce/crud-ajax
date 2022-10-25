<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "crud";

$conn = new mysqli($host, $username, $password, $database);
if(!$conn){
    echo "Error, no se pudo conectar con la BD".$conn->error;
    exit;
}
?>