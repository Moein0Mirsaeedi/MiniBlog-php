<?php

require("./function.php");

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $errors = [];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = strtolower($email);

    $errors = validateLogin($email, $password);

    if(!count($errors)){
        $users = get_data('users');
        $user = login($users, $email, $password);
        if($user){
            $_SESSION['user'] = $user;
            header("Location: ./index.php");
        }else{
            $errors[] = "Email or password is incorrect";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #fff;
        }

        .container {
            width: 400px;
            margin: 40px auto;
            padding: 20px;
            background-color: #222;
            border: 1px solid #444;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .login-form,.register-form {
            width: 100%;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            height: 40px;
            margin-bottom: 20px;
            padding: 10px;
            background-color: #444;
            color: #fff;
            border: none;
            border-radius: 5px;
        }

        button[type="submit"] {
            width: 100%;
            height: 40px;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #3e8e41;
        }

        p {
            text-align: center;
            margin-top: 20px;
        }

        a {
            text-decoration: none;
            color: #4CAF50;
        }

        a:hover {
            color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h2>Login</h2>
            <form action="login.php" method="post">
                <input type="email" name="email" placeholder="email" value="<?= isset($email)? $email : '' ?>">
                <input type="password" name="password" placeholder="Password" value="<?= isset($password)? $password : '' ?>">
                <button type="submit">Login</button>
                <p>Don't have an account? <a href="register.php">Register</a></p>
            </form>
        </div>
        <?php if(isset($errors) && count($errors)): ?>
            <div class="alert alert-danger" role="alert">
                <?php foreach($errors as $error): ?>
                    <span style="color: red;"><?= $error ?></span><br>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>