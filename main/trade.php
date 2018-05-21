<?php
session_start();
include '../includes/cafe.php'; 
include '../includes/authenticate.php'; 
include '../includes/conn.php';
 
	if (!isset($_SESSION['id'])) {
	$_SESSION['id'] = "none";
	$_SESSION['bal'] = "N/A";
}else{
	$sess = $_SESSION['id'];
	$bal = $_SESSION['bal'];
}
?>

<?php require_once('../shared/header.php'); ?>

<div id="login"><?php echo '<form method="POST" action="'.userLogin1($dbc).'"><input type="text" placeholder="User ID" name="uid"><br><input type="password" placeholder="password" name="pwd"><br><input type="submit" class="btn-success" value="login" name="login1"></form>'; ?>
</div>

	<div class="row">
		<div class="col-4">
			<?php
				$sql = "SELECT * FROM time_tbl WHERE name='THE TRADE TABLE'";
				$result = $dbc->query($sql);
				$row = $result->fetch_assoc();

				echo '<h2>Opening: '.$row['o_time'].' hrs</h2><br><h2>Closing: '.$row['c_time'].'hrs</h2>';
			?>	
		</div>

		<div class="col-4">
				<h1>THE TRADE TABLE</h1>
		</div>

		<div class="col-4">
			<a href="Javascript:void(0)" class="icon"><img src="../_images/trolley.png">
				<span class="number">
					<?php
						error_reporting(0);
						ini_set('display_errors', 0);

						$sql = "SELECT * FROM time_tbl WHERE name='THE REF'";
						$result = $dbc->query($sql);
						$row = $result->fetch_assoc();
						$cfid = $row['cafe_id'];

						$sql = "SELECT * FROM customer WHERE uid='$s'";
						$result = $dbc->query($sql);
						$row = $result->fetch_assoc();
						$csid = $row['cus_id'];

						$sql = "SELECT * FROM orders WHERE cus_id='$csid' cafe_id='$cfid'";
						$result = $dbc->query($sql);
						$no = 0;
						if (mysqli_num_rows($result)>0) {
							$no = mysqli_num_rows($result);
						}
						echo $no;
					 ?>
					</span></a>
			<div class="trolley"></div>	&nbsp;
			<?php 
				echo "Balance: $".$bal." <a href='user_acc.php'".">(".$sess.")</a>"; 
			?>
		</div>
	</div>

	<div class="row">
				<div class="col-6">
					<h2>Food</h2>
					<?php
						$sql = "SELECT * FROM ref_food";
						$result = $dbc->query($sql);
						echo "<ul class='list'>";
						while ($row = $result->fetch_assoc()) {
							echo "<li class='list-item'>".$row['name']."............................$".$row['price']."<form method='POST' action='".Food($dbc)."'><input type='hidden' name='fid' value='".$row['fid']."'><input type='hidden' name='sid' value='".$sess."'><input type='hidden' name='bal' value='".$bal."'><button type='submit' class='comment' name='commFood'>Comment</button><button type='submit' class='buy' name='buyFood2'>Buy</button></form></li>";
						}
						echo "</ul>";
					?>
				</div>

				<div class="col-6">
					<h2>Beverages</h2>
					<?php
						$sql = "SELECT * FROM ref_bev";
						$result = $dbc->query($sql);
						echo "<ul class='list'>";
						while ($row = $result->fetch_assoc()) {
							echo "<li class='list-item'>".$row['name']."............................$".$row['price']."<form method='POST' action='".Bev($dbc)."'><input type='hidden' name='bid' value='".$row['b_id']."'><input type='hidden' name='sid' value='".$sess."'><input type='hidden' name='bal' value='".$bal."'><button type='submit' class='comment' name='commBev'>Comment</button><button type='submit' class='buy' name='buyBev2'>Buy</button></form></li>";
						}
						echo "</ul>";
					?>
				</div>
			</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require_once('../shared/footer.php'); ?>
</body>
</html>