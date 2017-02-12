<?php
require_once '../shared/database.php';
if ($_POST) {
    $db = new Database();
    $db->editproduct($_POST['price'], $_POST['id']);
    header('Location: products.php');  

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
        .border-input {
            border: 2px solid black;
            box-shadow: 10px 10px 5px #888888;
        }
        h2 {
            text-align: center;
            color: black;
            padding-bottom: 10px;
        }
        .new-form {
            display: flex;
            justify-content: space-around;
        }
        .para {
            font-size: 16px;
        }
        .admin-panel {
            position: fixed;
            background-color: black;
            padding: 1px;
            top: 0;
            right: 0;
            color: white;
        }   
        .admin-panel:hover {
            background-color: grey;
        }
        .above-left {
            display: flex;
            justify-content: flex-start;
            padding-top: 35px;
            padding-left: 200px;
        }
        .space {
            padding-right: 8px;
        }
        .container {
            padding-top: 40px;
        }
    </style>
</head>
<body>
    <div class="admin-panel">
        <p>Logged in</p>
    </div>    
    
    <div class="container">
        <hr>
        <h2>Update Product</h2>
        <hr>
        <h1>No idea how to do this... please come back soon</h1>
        <form action="" method="post" class="new-form">
            ID: <input type="text" name="id">
            Price: <input type="text" name="price">
            <input type="submit" class="btn btn-danger border-input" value="Update product">
        </form>
    </div>
    <div class="above-left">
        <a href="addproduct.php" class="space"><button type="button" class="btn btn-primary">Go back to Add a product</button></a>
        <a href="products.php" class="space"><button type="button" class="btn btn-primary">Go back to Available products</button></a>
    </div>
</body>
</html>