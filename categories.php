<?php 

	require('base.php');
	require('models/category.php');

	$category = new Category();
?>

<h1 class='page-heading'>Categories</h1>

<div class="">
	<a href="new_category.php" class="btn btn-info">NEW CATEGORY</a> <br><BR />
	<table class="table table-bordered">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">CATEGORY NAME</th>
				<th scope="col">ACTION</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$cat = $category->getAll();
				while ($row = $cat->fetch_assoc()){
					echo "<tr>";
					echo "<th scope='row'>".$row['id']."</th>";
					echo "<td>".$row['name']. "</td>";
					echo "<td><a href='edit_category.php?id=".$row['id']."'>Edit</a></td>";
					echo "</tr>";
				}
			?>
		</tbody>
	</table>
</div>

<?php require('base-footer.php'); ?>
