<?php
require_once '../shared/database.php';
if ($_POST) {
    $db = new Database();
    $db->insertproducts($_POST['name'], $_POST['price'], $_POST['size'], $_POST['color']);
    header('Location: addproduct.php');  
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
            box-shadow: 5px 4px 5px #888888;
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
            font-weight: bold;
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
        <h2>Add Product</h2>
        <hr>
        <form action="" method="post" class="new-form">
            <p><span class="para">Name:</span> <input type="text" class="border-input" name="name"></p><br>
            <p><span class="para">Price:</span> <input type="text" class="border-input" name="price"></p><br>
            <p><span class="para">Size:</span> <input type="text" class="border-input" name="size"></p><br>
            <p><span class="para">Color:</span> <input type="text" class="border-input" name="color"></p><br>
            <input type="submit" class="btn btn-success border-input" value="Add New Product">
        </form>
    </div>
    <div class="above-left">
        <a href="products.php"><button type="button" class="btn btn-primary">See available products</button></a>
    </div>
</body>
</html>