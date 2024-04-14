<?php 

const BASE_URL = "http://localhost:8000/";

function asset($file){
    return BASE_URL . "assets/" . $file;
}

function dd($data){
    die('<pre>' . var_export($data, true) . '</pre>');
}

function get_data($filename){
    $file_adress = "./database/" . $filename . ".json";
    $file = fopen($file_adress, "r+");
    $database = fread($file, filesize($file_adress));
    fclose($file);

    return json_decode($database, true);
}

function get_post_order_by_view($posts){
    uasort($posts,function($first,$second){
        if($first["view"] > $second["view"]){
            return -1;
        }else{
            return 1;
        }
    });

    $posts = array_values($posts);
    return count($posts)? $posts : null;
}

?>