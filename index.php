<?php
session_start();
include 'includes/authenticate.php';
 
	if (!isset($_SESSION['id'])) {
	$_SESSION['id'] = "none";
	$_SESSION['bal'] = "N/A";
}else{
	$sess = $_SESSION['id'];
	$bal = $_SESSION['bal'];
}	
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Y.E.O.M Pty Ltd</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/_main.css">
	<script src="js/jquery3.3.1.js"></script>
	<script src="js/_main.js"></script>
</head>
<body id="index-body">
	<header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li class="left"><a href="main/register.php">Register</a></li>
				<li class="left1"><button class="btn-lg">Login</button></li>
			</ul>
		</nav>
	</header>

	<div id="login"><?php echo '<form method="POST" action="'.userLogin($dbc).'"><input type="text" placeholder="User ID" name="uid"><br><input type="password" placeholder="password" name="pwd"><br><input type="submit" class="btn-success" value="login" name="login"></form>'; ?>
	</div>

	<div class="row">
		<div class="col-4">
			
		</div>

		<div class="col-4">
			<h1>Select Cafe Menu</h1>
		</div>

		<div class="col-4">
			
		</div>
	</div>

	<div class="row">
			<div class="col-4 cafe">
				<h2>The Ref Menu</h2><hr><br>
				<a href="main/ref.php" class="btn-primary lg">View...</a>
			</div>

			<div class="col-4 cafe">
				<h2>Lazenbys Menu</h2><hr><br>
				<a href="main/lazenbys.php" class="btn-primary lg">View...</a>
			</div>

			<div class="col-4 cafe">
				<h2>The Trade Table Menu</h2><hr><br>
				<a href="main/trade.php" class="btn-primary lg">View...</a>
			</div>	
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<footer>
		<div class="row">
			<div class="col-3">
				<p>copyright</p>
			</div>

			<div class="col-3">
				<p>terms and conditions</p>
			</div>

			<div class="col-3">
				<p>contacts</p>
			</div>

			<div class="col-3">
				<p>designed by</p>
			</div>
		</div>
	</footer>
</body>
</html>