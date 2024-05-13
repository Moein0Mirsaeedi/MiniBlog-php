<?php

require("./function.php");

if(!authenticated()){
    redirect('login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= asset("css/styles.css") ?>" />
    <link rel="stylesheet" href="<?= asset("css/panel.css") ?>" />
</head>
<body>
    <main>
            <nav>
                <ul>
                    <li><a href="<?= BASE_URL ?>index.php">Home</a></li>
                    <li><a href="<?= BASE_URL ?>panel.php">Panel</a></li>
                    <li><a href="<?= BASE_URL ?>create.php">Create post</a></li>
                    <li><a href="<?= BASE_URL ?>logout.php">Logout</a></li>
                </ul>
            </nav>
            <section class="content">
                <div>
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title">
                </div>
                <div>
                    <label for="category">Category</label>
                    <select name="category" id="category">
                        <option value="political">Political</option>
                        <option value="sport">Sport</option>
                        <option value="social">Social</option>
                    </select>
                </div>
                <div>
                    <label for="content">Content</label>
                    <textarea name="contenbt" id="content" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image">
                </div>
                <div>
                    <input type="submit" value="Login">
                </div>
            </section>
        </main>
</body>
</html>