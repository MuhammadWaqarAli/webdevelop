<!DOCTYPE html>
<html>
<head>
	<title>UI Learning</title>
	
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	
	
</head>
<body>
	<div class="main-content">
		<nav class="navbar navbar-expand-lg rounded bg-dark navbar-dark navbar-fixed-top">
		<a href="index.php" class="navbar-brand"> <img src="assets/img/logo8.png" class="img-fluid"width="65">UI LEARNING</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-id" aria-controls="navbar-id" aria-expanded="false" aria-lable="toggle-navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbar-id">
			<ul class="navbar-nav mr-auto justify-content-center w-100">
				<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
				<li class="nav-item"><a class="nav-link" href="services.php">services</a></li>
				<li class="nav-item"><a class="nav-link" href="portfolio.php">Portfolio</a></li>
				<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
				
			</ul>
				<ul class="navbar-nav mr-auto justify-content-end w-100">
				<li class="nav-item">
					<a href="#" class="nav-link" data-toggle="modal" data-target="#signUp" data-backdrop="static" keyboard="false"><i class="fas fa-user-plus"></i> SignUP</a>
				</li>

				<li class="nav-item"><a class="nav-link"  data-toggle="modal" data-target="#signin" data-backdrop="static" keyboard="false"href="#"><i class="fas fa-sign-in-alt"></i> Login</a></li>
				
			</ul>	
				
			
			
		</div>
		
	</nav>
	<div class="fade modal" id="signUp" tabindex="-1">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title"> SignUp </h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>User Name:</label>
						<input class="form-control" type="text" name="name">
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input class="form-control" type="email" name="email">
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input class="form-control" type="Password" name="Password">
					</div>
					<div class="form-group">
						<label>Confirm password:</label>
						<input class="form-control" type="password" name="confirm_password">
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-dark btn1">Submit</button>
					<button class="btn btn-dark btn1"data-dismiss="modal">Close</button>
				</div>		
			</div>
		</div>
	</div>
	<div class="fade modal" id="signin" tabindex="-1">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title"> Signin </h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>User Name:</label>
						<input class="form-control" type="text" name="name">
					</div>
					<div class="form-group">
						<label>Email:</label>
						<input class="form-control" type="email" name="email">
					</div>
					<div class="form-group">
						<label>Password:</label>
						<input class="form-control" type="Password" name="Password">
					</div>
					<div class="form-group">
						<label>Confirm password:</label>
						<input class="form-control" type="password" name="confirm_password">
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-dark btn1">Submit</button>
					<button class="btn btn-dark btn1"data-dismiss="modal">Close</button>
				</div>		
			</div>
		</div>
	</div><br>