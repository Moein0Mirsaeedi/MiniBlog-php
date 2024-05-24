<?php

require('function.php');

if(!authenticated()){
    redirect('login.php');
}

if(! isset($_GET['id'])){
    redirect('panel.php');
}

$id = $_GET['id'];
$posts = get_data('post');
$post = getPostById($posts, $id);

if(is_null($post)){
    redirect('panel.php');
}

$user = getUserData();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit post</title>
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
                        <input type="text" name="title" id="title" value="<?= $post['title'] ?>">
                    </div>
                    <div>
                        <label for="category">Category</label>
                        <select name="category" id="category">
                            <option value="0">Select category</option>
                            <option value="Politics" <?= ($post['tags'] == 'Politics')? 'selected': '' ?> >Politics</option>
                            <option value="Tech" <?= ($post['tags'] == 'Tech')? 'selected': '' ?> >Tech</option>
                            <option value="Entertainment" <?= ($post['tags'] == 'Entertainment')? 'selected': '' ?> >Entertainment</option>
                            <option value="Travel" <?= ($post['tags'] == 'Travel')? 'selected': '' ?> >Travel</option>
                            <option value="Sport" <?= ($post['tags'] == 'Sport')? 'selected': '' ?> >Sport</option>
                        </select>
                    </div>
                    <div>
                        <label for="content">Content</label>
                        <textarea name="content" id="content" cols="30" rows="10">
                        <?= $post['content'] ?>
                        </textarea>
                    </div>
                    <div>
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image">
                        <img src="<?= asset('images/' . $post['image']) ?>" alt="">
                    </div>
                    <div>
                        <input type="submit" value="Create">
                    </div>
                </form>
            </section>
        </main>
</body>
</html>