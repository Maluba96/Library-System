<?php
	require('../core/database.php');

	class Book extends DB{
		function getAll(){
			$result = $this->select("SELECT * FROM books");
			return $result;
		}

		function findById($id){
			$result = $this->select("SELECT * FROM books WHERE id='$id' LIMIT 1");
			return $result;
		}

		function create($name){
			$result = $this->select("INSERT INTO books (name) VALUES ('$name') ");
			return $result;
		}

		function update($id, $name){
			$result = $this->select("UPDATE books SET name='$name' WHERE id = '$id' ");
			return $result;
		}

		function delete($id){
			$result = $this->select("DELETE FROM books WHERE id='$id' ");
			return $result;
		}
	}