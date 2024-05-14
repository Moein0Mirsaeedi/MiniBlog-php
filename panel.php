<?php

require("./function.php");

if(!authenticated()){
    redirect('login.php');
}

$posts = get_data('post');
$user = getUserData();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
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
                <table>
                    <?php if($posts): ?>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>View</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php  foreach($posts as $post): ?>
                            <tbody>
                                <tr>
                                    <td><?= $post['id'] ?></td>
                                    <td><?= $post['title'] ?></td>
                                    <td><?php
                                        foreach($post['tags'] as $tag){
                                            echo $tag . ', ';
                                        }
                                    ?></td>
                                    <td><?= $post['view'] ?></td>
                                    <td><?= date('Y M d', strtotime($post['date_published'])) ?></td>
                                    <td>
                                        <a class="edit" href="#">Edit</a>
                                        <a class="delete" href="./delete.php?id=<?= $post['id'] ?>">Delete</a>

                                    </td>
                                </tr>
                            </tbody>
                        <?php endforeach ?>
                    <?php else: ?>
                        <p>No posts in database</p>
                    <?php endif ?>
                </table>
            </section>
        </main>
</body>
</html>