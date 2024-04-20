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

function orderPostsByViews($posts) {
    // Sort the posts by views in descending order
    usort($posts, function($a, $b) {
        return $b['view'] - $a['view'];
    });

    // Return the sorted posts
    return $posts;
}

?>