<?php

namespace application\models;

use application\core\Model;
use application\lib\DataBase;

class Main extends Model{

    public function getCount() {
		return DataBase::column('SELECT COUNT(id) FROM recipes');
    }
    
    public function recipesList($route) {
		$max = 10;
		$params = [
			'max' => $max,
			'start' => ((($route['page'] ?? 1) - 1) * $max),
		];
		return DataBase::row('SELECT * FROM recipes ORDER BY id DESC LIMIT :start, :max', $params);
	}
}
