<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Library System</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		.page-heading{
			margin-top: 30px;
			margin-bottom: 30px;
		}
		.vertical-menu {
			width: 200px; /* Set a width if you like */
		}

		.vertical-menu a {
			background-color: #eee; /* Grey background color */
			color: black; /* Black text color */
			display: block; /* Make the links appear below each other */
			padding: 12px; /* Add some padding */
			text-decoration: none; /* Remove underline from links */
		}
		.vertical-menu a:hover {
			background-color: #ccc; /* Dark grey background on mouse-over */
		}

		.vertical-menu a:active {
			background-color: violet; /* Add a violet color to the "active/current" link */
			color: white;
		}
		.vertical {
			border-right: 1px solid black;

		}
		#parent {

		}
		#left{
			width: 15%;
			height: 1200px;
			background: white;
			float: left;
		}
		#right{
			margin-left: 15%;
			background: white;
			padding-left: 15px;
		}
		form input, select{
			margin-bottom: 20px;
		}
		/* input{
			width: 300px;
			height: 35px;
		}
		select{
			width: 300px;
			height: 35px;
		.btn{
			text-align: center;
		} */
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="index.php">Library System</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<!-- <li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				</li> -->
			</ul>
		</div>
	</nav>
	<!-- Side bar -->
	<div class="container-fluid">
		<div class="row">
			<div class="col col-sm-2">
				<!-- Side bar -->
				<div class="vertical-menu vertical">
					<a href="index.php">Dashboard</a><br>
					<a href="books.php">Books</a><br>
					<a href="categories.php">Categories</a><br>
					<a href="#">Members</a><br>
					<a href="#">Book Issue</a><br>
					<a href="#">My Book List</a><br>
				</div>
			</div>
			<div class="col col-sm-10">