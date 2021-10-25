<?php
require_once('includes/navbar.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font -->
    <!-- Bootstrap cdn -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <title>Cron Master</title>
</head>
<body>
	<!-- Navbar -->
	<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Cron Master</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		<li class="nav-item">
			<a class="nav-link" href="index.php">Cron Logs</a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Cron Jobs
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			<a class="dropdown-item" href="#">Set up new cron</a>
			<a class="dropdown-item" href="#">Cron dashboard</a>
			</div>
		</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
		</form>
	</div>
	</nav> -->
	<div class="div-grid-login">
			<form class="centered-form">
				<div class="box-form">
					<h1>Cron Master Login</h1>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="email" class="form-control" id="username"placeholder="Enter username">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-login">Submit</button>
				</div>
			</form>
	</div>
</body>
<!-- Bootstrap js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>