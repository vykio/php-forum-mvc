<?php

function showErrorView($error, $file, $line) {
    require_once("views/header.php"); 
    require("views/errorView.php");
    require_once("views/footer.php"); 
}