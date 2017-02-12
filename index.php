<?php
require_once './shared/database.php';
$db = new Database();
$products = $db->getproducts();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="admin-panel">
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
    </div>    
    <div class="container">
        <hr>
        <div class="amazon">
            <h2 style="color:orange"><strong>Amazon 2</strong></h2>
        </div>    
        <table class="table">
            <tr>
                <td><span class="headers">Product ID</span></td>
                <td><span class="headers">Product Name</span></td>
                <td><span class="headers">Product Price</span></td>
                <td><span class="headers">Product Size</span></td>
                <td><span class="headers">Product Color</span></td>
                <td></td>
            </tr> 
                    <?php
                        foreach ($products as $product) {
                            echo '<tr><td>' . htmlspecialchars($product['id']) 
                                . '</td><td>' . htmlspecialchars($product['name']) 
                                . '</td><td>' . htmlspecialchars($product['price']) 
                                . '</td><td>' . htmlspecialchars($product['size'])    
                                . '</td><td>' . htmlspecialchars($product['color']) 
                                . '</td><td>' 
                                . '<form action="summary.php" method="post">' 
                                . '<input type="hidden" name="id" value="' . htmlspecialchars($product['id']) . '">'
                                . '<input type="submit" class="btn btn-primary" value="Buy item">'
                                . '</form></td></tr>';
                        }
                    ?>  
        </table>
        <div id="id01" class="modal">
  
            <form class="modal-content animate" action="index.php">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                        
                    <button type="submit">Login</button>
                    <input type="checkbox" checked="checked"> Remember me
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </div>
    </div>

    
    <!--<div class="above-left">
        <a href="admin/addproduct.php" class="space"><button type="button" class="btn btn-primary">Add product</button></a>
        <a href="admin/editproduct.php" class="space"><button type="button" class="btn btn-info">Edit product</button></a>
        <a href="admin/removeproduct.php" class="space"><button type="button" class="btn btn-danger">Remove product</button></a>
    </div>-->
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>