<?php 

const BASE_URL = "http://localhost:8000/";

function asset($file){
    return BASE_URL . "assets/" . $file;
}

?>