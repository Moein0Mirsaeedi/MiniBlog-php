<?php

require("./function.php");

if(!authenticated()){
    redirect('login.php');
}

?>