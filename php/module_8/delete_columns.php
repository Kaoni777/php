<?php
try{
    //Connect to the database
    $pdo = new PDD(dsn: "mysql:host=localhost; dbname=new_db", username: "root", password: "");

    $sql = "ALTER TABLE users DROP COLUMN email";

    $pdo->exec(statement: $sql);

    echo "Column dropped succesfully";
}catch(PDOException $e){
    echo $e->getMessage();
}
?>