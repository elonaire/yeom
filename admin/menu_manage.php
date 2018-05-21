<?php 
session_start(); 
if (!isset($_SESSION['id'])) {
	header("Location: ../index.php");
}
include '../includes/authenticate.php';
include '../includes/conn.php'; 
include '../includes/add_food.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		echo '<title>';

		echo '</title>';
	?>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/_main.css">
	<script src="../js/jquery3.3.1.js"></script>
	<script src="../js/_main.js"></script>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li class="left"><img src="../_images/user.png"></li>
				<li class="left1"><?php echo '<a href="'.userLogout($dbc).'" id="lgout"><button class="btn-lgout">LOGOUT</button></a>'; ?></li>
			</ul>
		</nav>
	</header>

	<div id="login"></div>

	<div class="row">
		<div class="col-6">
			<button class="btn-primary lg show">Add Food &amp; Beverage</button	>
			<button class="btn-primary lg del">Delete Item</button>
			<button class="btn-primary lg" id="settings1">Settings</button>
			<div class="add-item">
				<?php
					echo '<h2>Food</h2>';
					$sql = "SELECT * FROM food_tbl";
					$result = $dbc->query($sql);
					echo '<ul class="list">';
					while ($row = $result->fetch_assoc()) {
						echo "<li class='list-item'>".$row['name']."............................$".$row['price']."<form method='POST' action='".addToFood($dbc)."'><input type='hidden' name='name' value='".$row['name']."'><input type='hidden' name='price' value='".$row['price']."'><button type='submit' class='add' name='addFood'>Add</button></form></li>";
					}
					echo '</ul>';
				?>
			</div>

			<div class="add-item1">
				<?php
					echo '<h2>Food</h2>';
					$sql = "SELECT * FROM food_tbl";
					$result = $dbc->query($sql);
					echo '<ul class="list">';
					while ($row = $result->fetch_assoc()) {
						echo "<li class='list-item'>".$row['name']."............................$".$row['price']."<form method='POST' action='".addToFood($dbc)."'><input type='hidden' name='name' value='".$row['name']."'><input type='hidden' name='price' value='".$row['price']."'><button type='submit' class='add' name='addFood1'>Add</button></form></li>";
					}
					echo '</ul>';
				?>
			</div>

			<div class="add-item2">
				<?php
					echo '<h2>Food</h2>';
					$sql = "SELECT * FROM food_tbl";
					$result = $dbc->query($sql);
					echo '<ul class="list">';
					while ($row = $result->fetch_assoc()) {
						echo "<li class='list-item'>".$row['name']."............................$".$row['price']."<form method='POST' action='".addToFood($dbc)."'><input type='hidden' name='name' value='".$row['name']."'><input type='hidden' name='price' value='".$row['price']."'><button type='submit' class='add' name='addFood2'>Add</button></form></li>";
					}
					echo '</ul>';
				?>
			</div>

			<div class="rem-item">
				<?php
					echo '<h2>Food</h2>';
					$sql = "SELECT * FROM ref_food";
					$result = $dbc->query($sql);
					echo '<ul class="list">';
					while ($row = $result->fetch_assoc()) {
						echo "<li class='list-item'>".$row['name']."............................$".$row['price']."<form method='POST' action='".remFood($dbc)."'><input type='hidden' name='name' value='".$row['name']."'><input type='hidden' name='price' value='".$row['price']."'><button type='submit' class='add' name='remFood'>Add</button></form></li>";
					}
					echo '</ul>';
				?>
			</div>

			<div class="rem-item1">
				<?php
					echo '<h2>Food</h2>';
					$sql = "SELECT * FROM ref_food";
					$result = $dbc->query($sql);
					echo '<ul class="list">';
					while ($row = $result->fetch_assoc()) {
						echo "<li class='list-item'>".$row['name']."............................$".$row['price']."<form method='POST' action='".remFood($dbc)."'><input type='hidden' name='name' value='".$row['name']."'><input type='hidden' name='price' value='".$row['price']."'><button type='submit' class='add' name='remFood1'>Add</button></form></li>";
					}
					echo '</ul>';
				?>
			</div>

			<div class="rem-item2">
				<?php
					echo '<h2>Food</h2>';
					$sql = "SELECT * FROM ref_food";
					$result = $dbc->query($sql);
					echo '<ul class="list">';
					while ($row = $result->fetch_assoc()) {
						echo "<li class='list-item'>".$row['name']."............................$".$row['price']."<form method='POST' action='".remFood($dbc)."'><input type='hidden' name='name' value='".$row['name']."'><input type='hidden' name='price' value='".$row['price']."'><button type='submit' class='add' name='remFood2'>Add</button></form></li>";
					}
					echo '</ul>';
				?>
			</div>
		</div>

		<div class="col-6">
			<div class="add-item">
				<?php
					echo '<h2>Beverages</h2>';
					$sql = "SELECT * FROM beverage_tbl";
					$result = $dbc->query($sql);
					echo '<ul class="list">';
					while ($row = $result->fetch_assoc()) {
						echo "<li class='list-item'>".$row['name']."............................$".$row['price']."<form method='POST' action='".addToBev($dbc)."'><input type='hidden' name='name' value='".$row['name']."'><input type='hidden' name='price' value='".$row['price']."'><button type='submit' class='add' name='addBev'>Add</button></form></li>";
					}
					echo '</ul>';
				?>
			</div>

			<div class="add-item1">
				<?php
					echo '<h2>Beverages</h2>';
					$sql = "SELECT * FROM beverage_tbl";
					$result = $dbc->query($sql);
					echo '<ul class="list">';
					while ($row = $result->fetch_assoc()) {
						echo "<li class='list-item'>".$row['name']."............................$".$row['price']."<form method='POST' action='".addToBev($dbc)."'><input type='hidden' name='name' value='".$row['name']."'><input type='hidden' name='price' value='".$row['price']."'><button type='submit' class='add' name='addBev1'>Add</button></form></li>";
					}
					echo '</ul>';
				?>
			</div>

			<div class="add-item2">
				<?php
					echo '<h2>Beverages</h2>';
					$sql = "SELECT * FROM beverage_tbl";
					$result = $dbc->query($sql);
					echo '<ul class="list">';
					while ($row = $result->fetch_assoc()) {
						echo "<li class='list-item'>".$row['name']."............................$".$row['price']."<form method='POST' action='".addToBev($dbc)."'><input type='hidden' name='name' value='".$row['name']."'><input type='hidden' name='price' value='".$row['price']."'><button type='submit' class='add' name='addBev2'>Add</button></form></li>";
					}
					echo '</ul>';
				?>
			</div>

			<div class="rem-item">
				<?php
					echo '<h2>Beverages</h2>';
					$sql = "SELECT * FROM ref_bev";
					$result = $dbc->query($sql);
					echo '<ul class="list">';
					while ($row = $result->fetch_assoc()) {
						echo "<li class='list-item'>".$row['name']."............................$".$row['price']."<form method='POST' action='".remBev($dbc)."'><input type='hidden' name='name' value='".$row['name']."'><input type='hidden' name='price' value='".$row['price']."'><button type='submit' class='add' name='remBev'>Add</button></form></li>";
					}
					echo '</ul>';
				?>
			</div>

			<div class="rem-item1">
				<?php
					echo '<h2>Beverages</h2>';
					$sql = "SELECT * FROM ref_bev";
					$result = $dbc->query($sql);
					echo '<ul class="list">';
					while ($row = $result->fetch_assoc()) {
						echo "<li class='list-item'>".$row['name']."............................$".$row['price']."<form method='POST' action='".remBev($dbc)."'><input type='hidden' name='name' value='".$row['name']."'><input type='hidden' name='price' value='".$row['price']."'><button type='submit' class='add' name='remBev1'>Add</button></form></li>";
					}
					echo '</ul>';
				?>
			</div>

			<div class="rem-item2">
				<?php
					echo '<h2>Beverages</h2>';
					$sql = "SELECT * FROM ref_bev";
					$result = $dbc->query($sql);
					echo '<ul class="list">';
					while ($row = $result->fetch_assoc()) {
						echo "<li class='list-item'>".$row['name']."............................$".$row['price']."<form method='POST' action='".remBev($dbc)."'><input type='hidden' name='name' value='".$row['name']."'><input type='hidden' name='price' value='".$row['price']."'><button type='submit' class='add' name='remBev2'>Add</button></form></li>";
					}
					echo '</ul>';
				?>
			</div>
		</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require_once('../shared/footer.php'); ?>
</body>
</html>