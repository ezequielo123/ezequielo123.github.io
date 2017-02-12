<?php
require_once '../shared/database.php';
$db = new Database();
$products = $db->getproducts();

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
            padding-right: 5px;
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
        <h2>Products</h2>
        <hr>
        <table class="table">
            <tr>
                <td>Product ID</td>
                <td>Product Name</td>
                <td>Product Price</td>
                <td>Product Size</td>
                <td>Product Color</td>
            </tr> 
                    <?php
                        foreach ($products as $product) {
                            echo '<tr><td>' 
                                . htmlspecialchars($product['id']) 
                                . '</td><td>' 
                                . htmlspecialchars($product['name']) 
                                . '</td><td>' 
                                . htmlspecialchars($product['price']) 
                                . '</td><td>' . htmlspecialchars($product['size']) 
                                . '</td><td>' . htmlspecialchars($product['color']) 
                                . '</td></tr>';
                        }
                    ?>  
        </table>
    </div>
    <div class="above-left">
        <a href="addproduct.php" class="space"><button type="button" class="btn btn-primary">Add product</button></a>
        <a href="editproduct.php" class="space"><button type="button" class="btn btn-info">Edit product</button></a>
        <a href="removeproduct.php" class="space"><button type="button" class="btn btn-danger">Remove product</button></a>
    </div>
</body>
</html>