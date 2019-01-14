<?php

namespace application\models;

use application\core\Model;
use application\lib\DataBase;
use PDO;

class Post extends Model{

		private $error;

    public function isPostExists($id) {
				$params = [
						'id' => $id
				];

				return DataBase::column('SELECT id FROM recipes WHERE id = :id', $params);
		}

		public function getRecipes($id) {
				$params = [
						'id' => $id
				];

				$data = DataBase::row('SELECT * FROM recipes WHERE id = :id', $params)[0];

				$params_user = [
					'id' => $data['author_id']
				];
				$data['author'] = DataBase::row('SELECT login FROM users WHERE id = :id', $params_user)[0]['login'];

				return $data;
		}

		public function addRecipe($data) {
				if (empty($data['title'])) {
						$this->error = "Название рецепта не заполнено!";
						return false;
				}
				elseif (empty($data['description'])) {
						$this->error = "Описание рецепта не заполнено!";
						return false;
				}
				elseif (empty($data['text'])) {
						$this->error = "Технология приготовления рецепта не заполнено!";
						return false;
				}

				$author_id 		= $_SESSION['auth']['id'];
				$title 				= $data['title'];
				$description	= $data['description'];
				$text					= $data['text'];

				$query = "INSERT INTO recipes (author_id, title, description, text, date) " .
							"VALUES (:author_id, :title, :description, :text, NOW())";
				$response = $this->db->prepare($query);
				$response->bindParam(':author_id', $author_id, PDO::PARAM_STR);
				$response->bindParam(':title', $title, PDO::PARAM_STR);
				$response->bindParam(':description', $description, PDO::PARAM_STR);
				$response->bindParam(':text', $text, PDO::PARAM_STR);
				
				if (!$response->execute()) {
					$error = 'Не удалось сохранить рецепт. Попробуйте позже';
					return false;
				} 
        		return DataBase::lastInsertId();
		}

		public function deleteRecipe($id) {
			$params = [
				'id' => $id,
			];
			DataBase::query('DELETE FROM recipes WHERE id = :id', $params);
		}

		public function getError() {
				$tmpErr = $this->error;
				$this->error = '';
				return $tmpErr;
		}
}