<?php 
	require('base.php'); 
	require('models/category.php');

	$category = new Category();
	$all_categories = $category->getAll();

	if ($_SERVER['REQUEST_METHOD'] == "POST"){
		print_r($_POST);
	}
?>

<h1 class='page-heading'>New Book</h1>
<form action="controllers/Book.php?createBook=1" method="POST">
	<div class="row">
		<div class="col col-sm-6">
			<h5>Basic Information</h5>
			<input name="name" type="text" class="form-control" placeholder="Book Name"/>
			<input name="isbn" type="text" class="form-control" placeholder="ISBN"/>
			<input name="writer" type="text" class="form-control" placeholder="Writer"/>
			<select name="available" class='form-control'>
				<option value="1">Available</option>
				<option value="0">Unavailable</option>
			</select>
			<label for="">Category(s)</label>
			<select name="category" class='form-control' multiple>
				<?php
					while($cat = $all_categories->fetch_assoc()){
						echo "<option value='".$cat['id']."'>".$cat['name']."</option>";
					}
				?>
			</select>
		</div>
		<div class="col col-sm-6">
			<h5>More Information</h5>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroupFileAddon01">Upload Image</span>
				</div>
				<div class="custom-file">
					<input name="image" type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
					<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
				</div>
			</div>
			<label for="">Choose Condition</label>
			<select name="condition" class='form-control'>
				<option value="Normal">Normal</option>
				<option value="Good">Good</option>
				<option value="Bad">Bad</option>
			</select>
			<label for="">Book Details</label>
			<textarea name="details" id="" cols="30" rows="10" class="form-control"></textarea>
			<br><br>
			<input type="submit" class="btn btn-info" value="Save">	
		</div>
	</div>
	
</form>

<?php require('base-footer.php'); ?>