<?php

require("./function.php");

if(!authenticated()){
    redirect('login.php');
}

if(!isset($_GET['id'])){
    redirect('panel.php');
}

$id = $_GET['id'];
$posts = get_data('post');

if(!getPostById($posts, $id)){
    redirect('panel.php');
}

deletePost($posts, $id);

redirect('panel.php')

?>