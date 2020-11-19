<?php

namespace forum\models;

require_once("models/Repository.php");

class CategoryRepository extends Repository {

    public function getCategories() {
        return $this->query("SELECT * FROM categories");
    }

    public function getCategory($id) {
        return $this->query("SELECT * FROM categories WHERE id=?", [$id]);
    }

}