<!DOCTYPE html>
<html lang = "en">

<head>
	<meta charset = "utf-8">
	<title>Mammad</title>
	<link rel = "stylesheet" type = "text/css"
		  href = "<?php echo base_url(); ?>css/bootstrap.css">
	<link rel = "stylesheet" type = "text/css"
		  href = "<?php echo base_url(); ?>css/bootstrap.min.css">
	<script type = 'text/javascript' src = "<?php echo base_url();
	?>js/bootstrap.js"></script>
	<script type = 'text/javascript' src = "<?php echo base_url();
	?>js/bootstrap.min.js"></script>
	<style>
		html
		{
			height: 100%;
		}
		.box
		{
			height: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
			margin-top: 15%;
		}
		form
		{
			margin-top: 5%;
		}

	</style>
</head>

<body>
<div class="container">

	<div class="col-lg-12">
		<nav class="navbar navbar-expand-lg navbar-light bg-light float-right col-lg-12">
			<a class="navbar-brand" href="#">Mammad</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="selectusername"> First Page <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="insert">Insert</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="selectusername" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Update
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="delete">Delete</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</div>
		</nav>
