<?php
include 'db.php';

//Fetch all users from the database
$sql = "SELECT * FROM users";
$stmt = spdo->prepare(Ssql);
$stmt->execute();
$users = $stmt->fetchALL(PDD::FETCH_ASSDC)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" contect="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>