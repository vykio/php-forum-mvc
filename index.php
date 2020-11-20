<?php
/* Router */

require('controllers/homeController.php');
require('controllers/categoryController.php');
require('controllers/userController.php');

if (isset($_GET["action"]) && !empty($_GET["action"])) {
    $action = $_GET["action"];
    if ($action == "home") {
        showHome();
    } else if ($action == "categories") {
        showCategories();
    } else if ($action == "register") {
        if (isset($_POST["confirm"]) && !empty($_POST["confirm"])) {
            if (isset($_POST["pseudo"]) && !empty($_POST["pseudo"])) {
                if (isset($_POST["name"]) && !empty($_POST["name"])) {
                    if (isset($_POST["firstname"]) && !empty($_POST["firstname"])) {
                        if (isset($_POST["email"]) && !empty($_POST["confirm"])) {
                            if (isset($_POST["password1"]) && !empty($_POST["password1"])) {
                                if (isset($_POST["password2"]) && !empty($_POST["password2"])) {
                                    if ($_POST["password1"] == $_POST["password2"]) {
                                        $pseudo = $_POST["pseudo"];
                                        $name = $_POST["name"];
                                        $firstname = $_POST["firstname"];
                                        $email = $_POST["email"];
                                        $password = $_POST["password1"];
                                        registerUser($pseudo, $name, $firstname, $email, $password);
                                    } 
                                } 
                            }
                        }
                    }
                }
            }
        } else {
            showRegister();
        }
        
    } else {
        showHome();
    }
    
} else {
    showHome();
}