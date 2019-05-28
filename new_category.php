<?php require('base.php'); ?>

    <h1 class = 'page-heading'>New Category</h1>

    <form action="controllers/Categories.php?createCategory=1">
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Enter Category Name</span>
			</div>
			<input type="text" name='category_name' class="form-control" placeholder="Category" aria-label="Category Name" aria-describedby="basic-addon1">
			
			<input type="submit" class="btn btn-info" value = "Submit">
		</div>
	</form>


<?php require('base-footer.php'); ?>