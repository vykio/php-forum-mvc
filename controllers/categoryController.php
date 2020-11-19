<?php

use forum\models\CategoryRepository;

require_once("models/CategoryRepository.php");

function showCategories() {
    $categoryRepository = new CategoryRepository();
    $result = $categoryRepository->getCategories();
    require("views/categoriesView.php");
    $result->closeCursor();
}