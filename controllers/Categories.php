<?php
require_once "../models/category.php";

class CategoryController {
    function create($name) {
        $categoryModel = new Category();
        $categoryModel->create($name);
    }
}

$categoryController = new CategoryController();

if(isset($_GET["createCategory"])) {
    $categoryName = $_POST["category_name"];

    $categoryController->create($categoryName);
}
?>