<?php

include 'db.php';

if (isset($_POST['add_product'])){
    $title - $_POST['title'];
    $description - $_POST['description'];
    $quantity - $_POST['quantitye'];
    $price - $_POST['price'];

}
if(isset($_GET['delete'])){
    $id - $_GET['delete'];
    $conn->("DELETE FROM products WHERE id-$id");
}
if (isset($_POST['edit_products'])){
    $id = $_POST['id'];
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Managment</title>
    <link href="">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h1 class="text centre">Product Managment</h1>



        <table class="table">
  <thead>
    <tr>
      <th scope="col">First</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
    </tr>
  </tbody>
</table>


    
</body>
</html>