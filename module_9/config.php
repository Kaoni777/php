<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "another_db";

try{
    $connect = new PDO("mysql:host=$server;dbname=$dbname",username: $username, password: $password);

    echo "Connected!!!";
}catch(Exception $e){
    echo "Something went wrong!!!";
}
?>