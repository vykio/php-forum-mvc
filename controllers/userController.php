<?php

use forum\models\UserRepository;

require_once("models/UserRepository.php");

function showRegister() {
    require_once("views/header.php"); 

    require("views/registerView.php");

    require_once("views/footer.php");
}

function registerUser($pseudo, $name, $firstname, $email, $password) {
    $userRepository = new UserRepository();

	if (strlen($pseudo) >= 3 && strlen($pseudo) <= 32 && preg_match('/[a-zA-Z0-9_]+/', $pseudo)){
        if (strlen($name) >= 3 && strlen($name) <= 32 && preg_match('/[a-zA-Z- ]+/', $name)){
            if (strlen($firstname) >= 3 && strlen($firstname) <= 32 && preg_match('/[a-zA-Z- ]+/', $firstname)){
				if (strlen($password) >= 6 && strlen($password) <= 60) {
					if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
						if (!$userRepository->notDuplicate("email")) {
                            if (!$userRepository->notDuplicate("pseudo")) {
                                $userRepository->createUser($pseudo, $name, $firstname, $email, $password);
                                showRegister();
                            } else {
                                die("pseudo duplicate");
                            }
                        } else {
                            die("email duplicate");
                        }
                    } else {
                        die("email invalide");
                    }
                } else {
                    die("password entre 6 et 60 caractères");
                }

            } else {
                die("nom entre 3 et 32 caractères"); 
            }
        }else {
            die("prénom entre 3 et 32 caractères");
        }
    } else {
        die("pseudo entre 3 et 32 caractères");
    }
    
}