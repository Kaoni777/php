<?php

//With this fille we include the database connection
include_once("config.php");

//isset() function determine is a variable is declared and is diffrent from NULL
if(isset($_post['submit'])){
    $name = $_post['name'];
    $username = $_post['username'];
    $email = $_post['email'];

    $sql = "INSERT INTO users(name, username, email) VALUES(:name, :username, :email)";

    $sqlQuery = $connect->prepare(query: $sql);

    $sqlQuery->bindParam(param: 'name', var: &$name)
    $sqlQuery->bindParam(param: 'name', var: &$username)
    $sqlQuery->bindParam(param: 'name', var: &$email)

    $sqlQuery->execute();

    echo "The user was added succesfully!"
}
?>