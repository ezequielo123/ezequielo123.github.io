<?php
require_once './shared/database.php';
$db = new Database();
$product = $db->getproduct($_POST['id']);

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site</title>
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
            justify-content: space-between;
            padding-right: 5px;
            padding-top: 35px;
            padding-left: 200px;
        }
        .space {
            padding-right: 8px;
            padding-bottom: 15px;
        }
        .container {
            padding-top: 40px;
        }
        .headers {
            font-size: 18px;
            font-weight: bold;
        }
        .amazon {
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="admin-panel">
        <p>Logged in</p>
    </div>    
    <div class="container">
        <hr>
        <div class="amazon">
            <h2 style="color:orange"><strong>Amazon 2</strong></h2>
        </div> 
            <table class="table table-responsive">
                <tr>
                    <td class="warning">Product Name</td>
                    <td class="warning">Product Price</td>
                    <td class="warning">Product Size</td>
                    <td class="warning">Product Color</td>
                </tr> 
                <tr>
                    <?php echo '<td class="success">' . $product['name']
                            . '</td><td class="success">' 
                            . $product['price']
                            . '</td><td class="success">' 
                            . $product['size']
                            . '</td><td class="success">'
                            . $product['color']
                            . '</td>'; 
                    ?>
                </tr> 
             </table>           
        <div class="above-left">
            <a href="index.php" class="space"><button type="button" class="btn btn-primary">Keep shopping</button></a>
            <form action="checkout.php" method="post">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']); ?>">
                <input type="submit" class="btn btn-primary" value="Checkout">
            </form>    
        </div>
    </div>
    
</body>
</html>