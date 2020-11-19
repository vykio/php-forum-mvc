<?php

namespace forum\models;

class Repository {
    protected function connect() {
        try {
            $pdo = new \PDO('mysql:host=localhost;dbname=forum', 'root', '');
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(Exception $e) {
            throw $e;
        }
    }

    protected function query($query, $params = array()) {
        $statement = $this->connect()->prepare($query);
        $statement->execute($params);

        return $statement;
    }

}