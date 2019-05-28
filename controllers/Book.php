<?php
require_once "../models/book.php";

class BookController {
    function create($bookData) {
        $bookModel = new Book();
        $bookModel->create($bookData);
    }

    function getAllBooks() {
        $bookModel = new Book();
        $allBooks = $bookModel->getAll();
        return $allBooks;
    }

    function deleteBook($id) {
        $bookModel = new Book();
        $bookModel->delete($id);
    }

    function updateBook($bookData) {
        $bookModel = new Book();
        $bookModel->update($bookData);
    }
}

$bookController = new BookController();

if(isset($_GET["createBook"])) {
    $bookData = array();
    $bookData["name"] = $_POST["name"];
    $bookData["isbn"] = $_POST["isbn"];
    $bookData["writer"] = $_POST["writer"];
    $bookData["available"] = $_POST["available"];
    $bookData["category"] = $_POST["category"];
    $bookData["image"] = $_POST["image"];
    $bookData["condition"] = $_POST["condition"];
    $bookData["details"] = $_POST["details"];
    $bookController->create($bookData);
}

$bookData;
if(isset($_GET["getBooks"])) {
    $bookData = $BookController->getAllBooks();
}

if(isset($_GET["deleteBook"])) {
    $bookId = $_GET["bookId"];
    $bookController->deleteBook($bookId);
}

if(isset($_GET["updateBook"])) {
    $bookData = array();
    $bookData["name"] = $_POST["name"];
    $bookData["isbn"] = $_POST["isbn"];
    $bookData["writer"] = $_POST["writer"];
    $bookData["available"] = $_POST["available"];
    $bookData["category"] = $_POST["category"];
    $bookData["image"] = $_POST["image"];
    $bookData["condition"] = $_POST["condition"];
    $bookData["details"] = $_POST["details"];
    $bookController->updateBook($bookData);
}
?>