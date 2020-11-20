<?php

namespace forum\models;

require_once("models/Repository.php");

class UserRepository extends Repository {

    public function getUsers() {
        return $this->query("SELECT (name, firstname, email, pseudo, role_id) FROM users");
    }

    public function getUserByRole($roleId) {
        return $this->query("SELECT (name, firstname, email, pseudo, role_id) FROM users WHERE role_id=?", [$roleId]);
    }

    public function createUser($pseudo, $name, $firstname, $email, $password) {
        $this->query("INSERT INTO users VALUES (null, :name, :firstname, :email, :password, :pseudo, 1)", 
        array(
            "name"=>$name,
            "firstname"=>$firstname,
            "email"=>$email,
            "password"=>password_hash($password, PASSWORD_BCRYPT),
            "pseudo"=>$pseudo
        ));
    }

    public function notDuplicate($field) {
        return !$this->query("SELECT ". $field ." FROM users WHERE " . $field."=:field", array("field"=>$field));
    }

}