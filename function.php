<?php 

session_start();

const BASE_URL = "http://localhost:8000/";

function asset($file){
    // access to asset files
    return BASE_URL . "assets/" . $file;
}

function dd($data){
    // stop program and print log
    die('<pre>' . var_export($data, true) . '</pre>');
}

function get_data($filename){
    // Get data from json files
    $file_adress = "./database/" . $filename . ".json";
    $file = fopen($file_adress, "r+");
    $database = fread($file, filesize($file_adress));
    fclose($file);

    return json_decode($database, true);
}

function redirect($path){
    header("location: $path");
    exit();
}

function orderPostsByViews($posts) {
    // Sort the posts by views in descending order
    usort($posts, function($a, $b) {
        return $b['view'] - $a['view'];
    });

    // Return the sorted posts
    $posts = array_values($posts);
    return count($posts)? $posts : null;
}

function orderPostByDate($posts){
    // Sort the posts by date in descending order
    usort($posts, function($a,$b){
        return strtotime($b['date_published']) - strtotime($a['date_published']);
    });

    $posts = array_values($posts);
    return count($posts)? $posts : null;
}

function getPostById($posts, $id){
    $post = array_filter($posts, function($post) use($id){
        if($post['id'] == $id){
            return true;
        }else{
            return false;
        };
    });

    $post = array_values($post);
    return (count($post)) ? $post[0] : null;
}

function getPostByWord($posts, $search){
    $search = trim($search);
    if($search != ""){
        $posts = array_filter($posts, function($post) use($search){
            if(strpos($post['title'],$search) !== false
            or strpos($post['content'],$search) !== false
            or strpos($post['author'],$search) !== false){
                return true;
            }else{
                return false;
            }
        });
        $posts = array_values($posts);
        return count($posts)? $posts : null;
    }else{
        return null;
    }

}

function getPostByCategory($posts, $category) {
    $posts = array_filter($posts, function($post) use($category){
        foreach($post['tags'] as $tag){
            if($tag == $category)
                return true;
        };
    });
    $posts = array_values($posts);
    return count($posts)? $posts : null;
}

function getCountCategory($posts, $category){
    $i = 0;
    foreach($posts as $post){
        foreach($post['tags'] as $tag){
            if($tag == $category)
                $i++;
        };
    }
    return $i;
}

function login($users, $email, $password){
    $user = array_filter($users, function($user) use($email, $password){
        if($user['email'] == $email && $user['password'] == $password){
            return true;
        }else{
            return false;
        }
    });

    $user = array_values($user);
    return count($user)? $user[0] : null;
}

function validateLogin($email, $password){
    $errors = [];

    if(empty($email)){
        $errors[] = 'Email is required';
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = 'Email is invalid';
    }

    if(empty($password)){
        $errors[] = 'Password is required';
    }

    return $errors;
}

function authenticated(){
    if(isset($_SESSION['user'])){
        return true;
    }else{
        return false;
    }
}

?>