<?php

namespace application\models;

use application\core\Model;
use application\lib\DataBase;
use application\models\Post;

class Admin extends Model{
    
    public function deleteRecipe($id) {
        $postModel = new Post;

        if (!$postModel->isPostExists($id)) {
            return false;
        }

        return $postModel->deleteRecipe($id);
    }
}