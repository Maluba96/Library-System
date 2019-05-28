<?php
	require('../core/database.php');

	class Category extends DB{
		function getAll(){
			$result = $this->select("SELECT * FROM categories");
			return $result;
		}

		function findById($id){
			$result = $this->select("SELECT * FROM categories WHERE id='$id' LIMIT 1");
			return $result;
		}

		function create($name){
			$result = $this->select("INSERT INTO categories (name) VALUES ('$name') ");
			return $result;
		}

		function update($id, $name){
			$result = $this->select("UPDATE categories SET name='$name' WHERE id = '$id' ");
			return $result;
		}

		function delete($id){
			$result = $this->select("DELETE FROM categories WHERE id='$id' ");
			return $result;
		}
	}