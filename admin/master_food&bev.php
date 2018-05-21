<?php 
	include '../includes/conn.php';
	include '../includes/add_food.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php  ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/_main.css">
	<script src="../js/jquery3.3.1.js"></script>
	<script src="../js/_main.js"></script>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li class="left"><img src="../_images/user.png"></li>
				<li class="left1"><a href="#" id="lgout"><button class="btn-lgout">LOGOUT</button></a></li>
			</ul>
		</nav>
	</header>
	<div class="row">
		<div class="col-4">
				
		</div>

		<div class="col-4">
				<h1>MASTER FOOD &amp; BEVERAGE LIST</h1>
		</div>

		<div class="col-4">
				
		</div>
	</div>
<hr>
	<div class="row">
		<div class="col-6 food">
			<h2>Food</h2>
			<button class="btn-primary" id="food">Add</button>
					<?php
						$sql = "SELECT * FROM food_tbl";
						$result = $dbc->query($sql);
						echo "<ul class='list'>";
						while ($row = $result->fetch_assoc()) {
							echo "<li class='list-item'>".$row['name']."............................$".$row['price']."<form method='POST' action='".deleteFood($dbc)."'><input type='hidden' name='fid' value='".$row['food_id']."'><button type='submit' class='delete' name='deleteFood'>Delete</button></form></li>";
						}
						echo "</ul>";
					?>
		</div>

		<div class="col-6">
			<h2>Beverage</h2>
			<button class="btn-primary" id="beverage">Add</button>
					<?php
						$sql = "SELECT * FROM beverage_tbl";
						$result = $dbc->query($sql);
						echo "<ul class='list'>";
						while ($row = $result->fetch_assoc()) {
							echo "<li class='list-item'>".$row['name']."............................$".$row['price']."<form method='POST' action='".deleteBev($dbc)."'><input type='hidden' name='bid' value='".$row['bev_id']."'><button type='submit' class='delete' name='deleteBev'>Delete</button></form></li>";
						}
						echo "</ul>";
					?>
		</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require_once('../shared/footer.php'); ?>
</body>
</html>