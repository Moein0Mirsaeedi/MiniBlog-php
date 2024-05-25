<?php

require("./function.php");

if(!authenticated()){
    redirect('login.php');
}

$user = getUserData();

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title']) && isset($_POST['category']) && isset($_POST['content']) && isset($_POST['user']) && isset($_POST['image'])){
    $title = $_POST['title'];
    $category = $_POST['category'];
    $content = $_POST['content'];
    $author = $_SESSION['user']['username'];
    $image = $_FILES['image'];

    $errors = validatePost($title, $category, $content, $image);
    if(! count($errors)){
        $posts = get_data('post');
        createPost($posts, $title, $category, $content, $author, $image);
        redirect('panel.php');
    }
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
                <ul>
                    <li><?= $user['username'] ?></li>
                </ul>
            </nav>
            <section class="content">
                    <?php if(isset($errors) && count($errors)): ?>
                        <div class="errors">
                            <ul>
                                <?php foreach($errors as $error): ?>
                                    <li><?= $error ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" value="<?= isset($title)? $title : '' ?>">
                    </div>
                    <div>
                        <label for="category">Category</label>
                        <select name="category" id="category">
                            <option value="0">Select category</option>
                            <option value="Politics" <?= (isset($category) and $category == 'Politics')? 'selected': '' ?> >Politics</option>
                            <option value="Tech" <?= (isset($category) and $category == 'Tech')? 'selected': '' ?> >Tech</option>
                            <option value="Entertainment" <?= (isset($category) and $category == 'Entertainment')? 'selected': '' ?> >Entertainment</option>
                            <option value="Travel" <?= (isset($category) and $category == 'Travel')? 'selected': '' ?> >Travel</option>
                            <option value="Sport" <?= (isset($category) and $category == 'Sport')? 'selected': '' ?> >Sport</option>
                        </select>
                    </div>
                    <div>
                        <label for="content">Content</label>
                        <textarea name="content" id="content" cols="30" rows="10">
                        <?= isset($content)? $content : '' ?>

                        </textarea>
                    </div>
                    <div>
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image">
                    </div>
                    <div>
                        <input type="submit" value="Create">
                    </div>
                </form>
            </section>
        </main>
</body>
</html>