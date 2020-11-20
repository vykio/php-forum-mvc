<?php

namespace forum\models;

require_once("models/Repository.php");

class TopicRepository extends Repository {

    public function getTopics() {
        return $this->query("SELECT * FROM topics");
    }

    public function getTopic($categoryId) {
        return $this->query("SELECT * FROM topics WHERE category_id=?", [$categoryId]);
    }

}