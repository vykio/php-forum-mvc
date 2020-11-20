<?php

use forum\models\CategoryRepository;

require_once("models/CategoryRepository.php");

function showCategories() {
    require_once("views/header.php"); 

    $categoryRepository = new CategoryRepository();
    $result = $categoryRepository->getCategories();
    require("views/categoriesView.php");
    $result->closeCursor();

    require_once("views/footer.php"); 
}