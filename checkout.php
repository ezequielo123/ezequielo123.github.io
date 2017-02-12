<?php
require_once './shared/database.php';
$db = new Database();
if ($_POST) {
    
    $orderid = $db->insertorderid($_POST['id']);
    $db->insertorderproduct($_POST['id'], $orderid);
    header('Location: index.php');
} 

   
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
            <a href="index.php" class="space"><button type="button" class="btn btn-primary">Go back</button></a>      
        
    
</body>
</html>