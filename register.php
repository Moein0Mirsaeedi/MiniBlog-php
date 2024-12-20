<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        <div class="register-form">
            <h2>Register</h2>
            <form action="register.php" method="post">
                <input type="text" name="username" placeholder="Username">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="password" name="confirm_password" placeholder="Confirm Password">
                <button type="submit">Register</button>
                <p>Already have an account? <a href="login.php">Login</a></p>
            </form>
        </div>
    </div>
</body>
</html>