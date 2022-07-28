<?php include('serve.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegisterPage</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>
    <form action="register_db.php">
        <div class="input-group">
            <label for="">Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="">Email</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label for="">Password</label>
            <input type="password" name="password1">
        </div>
        <div class="input-group">
            <label for="">Confirm Password</label>
            <input type="password" name="password2">
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">Register</button>
        </div>
        <p>Already a member ?<a href="login.php">Sing in</a></p>
    </form>
</body>
</html>