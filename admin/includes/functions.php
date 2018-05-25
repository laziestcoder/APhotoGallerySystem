<?php

spl_autoload_register(function ($class) {
    $class = strtolower($class);
    $the_path = "includes/{$class}.php";
    if (file_exists($the_path)) {
        require_once($the_path);
    } else {
        die("This file named {$class}.php was not found");
    }
});

function redirect($location){
    header("Location: {$location}");
}

?>