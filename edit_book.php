<?php require('base.php'); ?>
<h1 class='page-heading'>Edit Book</h1>
<form action="">
	<div class="row">
		<div class="col col-sm-6">
			<h5>Basic Information</h5>
			<input type="text" class="form-control" placeholder="Book Name"/>
			<input type="text" class="form-control" placeholder="ISBN"/>
			<input type="text" class="form-control" placeholder="Writer"/>
			<select name="available" class='form-control'>
				<option value="">--</option>
				<option value="YES">Available</option>
				<option value="NO">Unavailable</option>
			</select>
			<label for="">Category(s)</label>
			<select name="category" class='form-control' multiple>
				<option value="">--</option>
				<option value="YES">Available</option>
				<option value="NO">Unavailable</option>
			</select>
		</div>
		<div class="col col-sm-6">
			<h5>More Information</h5>
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroupFileAddon01">Upload Image</span>
				</div>
				<div class="custom-file">
					<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
					<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
				</div>
			</div>
			<label for="">Choose Condition</label>
			<select name="category" class='form-control' multiple>
				<option value="">Normal</option>
				<option value="YES">Good</option>
				<option value="NO">Bad</option>
			</select>
			<label for="">Book Details</label>
			<textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
			<br><br>
			<input type="submit" class="btn btn-info" value="Save">	
		</div>
	</div>
	
</form>

<?php require('base-footer.php'); ?>