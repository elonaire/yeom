<?php 
session_start();
include '../includes/authenticate.php';
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
	<title><?php echo $sess;  ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/_main.css">
	<script src="../js/jquery3.3.1.js"></script>
	<script src="../js/_main.js"></script>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="../index.php">HOME</a></li>
				<li class="left2"><img src="../_images/wallet.png"><span><?php echo "$".$bal ?></span></li>
				<li class="left"><img src="../_images/user.png"></li>
				<li class="left1"><?php echo '<form method="POST" action="'.userLogout($dbc).'"><button class="btn-lgout" type="submit" name="lgout">LOGOUT</button></form>'; ?></li>
			</ul>
		</nav>
	</header>

	<div id="login"></div>

	<div class="row">
		<main>
			<div class="row">
				<div class="col-6">
					<button class="btn-primary lg" id="deposit">Deposit Funds</button>
					<button class="btn-primary lg" id="settings">Settings</button>
				</div>

				<div class="col-6">
					<div id="content">
						
					</div>
				</div>
			</div>
		</main>

		<aside>
			
		</aside>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require_once('../shared/footer.php'); ?>
</body>
</html>