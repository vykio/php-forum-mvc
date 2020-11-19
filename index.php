<?php

require('controllers/homeController.php');
require('controllers/categoryController.php');

if (isset($_GET["action"]) && !empty($_GET["action"])) {
    $action = $_GET["action"];
    if ($action == "home") {
        showHome();
    } else if ($action == "categories") {
        showCategories();
    } else {
        showHome();
    }
    
} else {
    showHome();
}