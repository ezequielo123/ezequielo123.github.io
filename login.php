<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <form action="login.php">
        <div class="container text-center">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required><br />

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required><br />

            <input type="checkbox" checked="checked"> Remember me   
            <button type="submit" class="btn btn-success">Login</button>
            
        </div>

        <div class="container text-right">
            <a  href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
            
        </div>
    </form>
</body>
</html>