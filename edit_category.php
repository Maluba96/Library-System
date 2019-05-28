<?php 
	require('base.php'); 
	require('models/category.php');

	$category = new Category();

	$activeCategory = $category->findById($_GET['id'])->fetch_assoc();

	if ($_SERVER['REQUEST_METHOD'] == "POST"){
		$category->update($activeCategory['id'], $_POST['category_name']);
		header("location: edit_category.php?id=".$activeCategory['id']);
	}
?>

    <h1 class = 'page-heading'>Edit Category (<?php echo $activeCategory['name']; ?>)</h1>

    <form method="post" action = "" >
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Enter Category Name</span>
			</div>
			<input value=<?php echo $activeCategory['name'] ?> type="text" name='category_name' class="form-control" placeholder="Category" aria-label="Category Name" aria-describedby="basic-addon1">
			
			<input type="submit" class="btn btn-info" value = "Submit">
		</div>
	</form>


<?php require('base-footer.php'); ?>