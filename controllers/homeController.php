<?php

use forum\models\HomeRepository;

require_once("models/HomeRepository.php");

function showHome() {
    require_once("views/header.php");
    require("views/homeView.php");
    require_once("views/footer.php");
}