<?php

use forum\models\HomeRepository;
use forum\models\CategoryRepository;

require_once("models/HomeRepository.php");
require_once("models/CategoryRepository.php");

function showHome() {
    require_once("views/header.php"); 

    $categoryRepository = new CategoryRepository();
    $categories = $categoryRepository->getCategories();

    require("views/homeView.php");
    
    
    require_once("views/footer.php");
}