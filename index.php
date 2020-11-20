<?php
/* Router */

require('controllers/homeController.php');
require('controllers/categoryController.php');
require('controllers/userController.php');
require("controllers/errorController.php");

try{
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
                            if (isset($_POST["email"]) && !empty($_POST["email"])) {
                                if (isset($_POST["password1"]) && !empty($_POST["password1"])) {
                                    if (isset($_POST["password2"]) && !empty($_POST["password2"])) {
                                        if ($_POST["password1"] == $_POST["password2"]) {
                                            $pseudo = $_POST["pseudo"];
                                            $name = $_POST["name"];
                                            $firstname = $_POST["firstname"];
                                            $email = $_POST["email"];
                                            $password = $_POST["password1"];
                                            registerUser($pseudo, $name, $firstname, $email, $password);
                                        } else {
                                            throw new Exception("Les mots de passe ne correspondent pas");
                                        }
                                    } else {
                                        throw new Exception("Le mot de passe de vérification n'est pas renseigné");
                                    }
                                } else {
                                    throw new Exception("Le mot de passe n'est pas renseigné");
                                }
                            } else {
                                throw new Exception("L'email n'est pas renseignée");
                            }
                        } else {
                            throw new Exception("Le nom de famille n'est pas renseigné");
                        }
                    } else {
                        throw new Exception("Le prénom n'est pas renseigné");
                    }
                } else {
                    throw new Exception("Le pseudo n'est pas renseignée");
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
} catch(Exception $e) {
    $message = $e->getMessage();
    $file = basename($e->getFile());
    $line = $e->getLine();
    showErrorView($message, $file, $line);
}