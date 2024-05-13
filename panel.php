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
    <title>Panel</title>
    <link rel="stylesheet" href="<?= asset("css/styles.css") ?>" />
    <link rel="stylesheet" href="<?= asset("css/panel.css") ?>" />
</head>
<body>
    <main>
            <nav>
                <ul>
                    <li><a href="#">Panel</a></li>
                    <li><a href="#">Create post</a></li>
                </ul>
            </nav>
            <section class="content">
                <table>
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
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>this is a post</td>
                            <td>politiacl</td>
                            <td>150 view</td>
                            <td>2021 May 05</td>
                            <td>
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>this is a post</td>
                            <td>politiacl</td>
                            <td>150 view</td>
                            <td>2021 May 05</td>
                            <td>
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>this is a post</td>
                            <td>politiacl</td>
                            <td>150 view</td>
                            <td>2021 May 05</td>
                            <td>
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>this is a post</td>
                            <td>politiacl</td>
                            <td>150 view</td>
                            <td>2021 May 05</td>
                            <td>
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>this is a post</td>
                            <td>politiacl</td>
                            <td>150 view</td>
                            <td>2021 May 05</td>
                            <td>
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>this is a post</td>
                            <td>politiacl</td>
                            <td>150 view</td>
                            <td>2021 May 05</td>
                            <td>
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>this is a post</td>
                            <td>politiacl</td>
                            <td>150 view</td>
                            <td>2021 May 05</td>
                            <td>
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
</body>
</html>