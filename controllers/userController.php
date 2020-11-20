<?php

use forum\models\UserRepository;

require_once("models/UserRepository.php");

function showRegister($errorMessage = null) {
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
						if (!$userRepository->isDuplicate("email", $email)) {
                            if (!$userRepository->isDuplicate("pseudo", $pseudo)) {
                                $userRepository->createUser($pseudo, $name, $firstname, $email, $password);
                                showRegister();
                            } else {
                                showRegister("Le pseudo est déjà utilisé");
                            }
                        } else {
                            showRegister("Cette adresse mail a déjà été utilisée");
                        }
                    } else {
                        showRegister("Cette email n'est pas conforme");
                    }
                } else {
                    showRegister("Le mot de passe doit contenir entre 6 et 60 caractères");
                }

            } else {
                showRegister("Le nom doit contenir entre 3 et 32 caractères"); 
            }
        }else {
            showRegister("Le prénom doit contenir entre 3 et 32 caractères");
        }
    } else {
        showRegister("Le pseudo doit contenir entre 3 et 32 caractères");
    }
    
}