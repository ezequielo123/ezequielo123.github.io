<?php
require_once '../shared/database.php';
if ($_POST) {
    $db = new Database();
    $product = $db->removeproduct($_POST['id']);
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
        <h2>Remove Product</h2>
        <hr>
        <form action="" method="post" class="new-form">
            <p><span class="para">ID:</span> <input type="text" class="border-input" name="id"></p><br>
            <input type="submit" class="btn btn-danger border-input" value="Remove product">
        </form>
    </div>
    <div class="above-left">
        <a href="addproduct.php" class="space"><button type="button" class="btn btn-primary">Go back to Add a product</button></a>
        <a href="products.php" class="space"><button type="button" class="btn btn-primary">Go back to Available products</button></a>
    </div>
</body>
</html>