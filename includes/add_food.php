<?php
include 'conn.php';

if (isset($_POST['food'])) {
	$name = mysqli_real_escape_string($dbc, $_POST['name']);
	$price = mysqli_real_escape_string($dbc, $_POST['price']);
	$desc = mysqli_real_escape_string($dbc, $_POST['desc']);

	$sql = "INSERT INTO food_tbl(name, price, description) VALUES('$name', '$price', '$desc')";
	$result = $dbc->query($sql);

	header("Location: ../admin/master_food&bev.php");
}else if (isset($_POST['beverage'])) {
	$name = mysqli_real_escape_string($dbc, $_POST['name']);
	$price = mysqli_real_escape_string($dbc, $_POST['price']);
	$desc = mysqli_real_escape_string($dbc, $_POST['desc']);

	$sql = "INSERT INTO beverage_tbl(name, price, description) VALUES('$name', '$price', '$desc')";
	$result = $dbc->query($sql);

	header("Location: ../admin/master_food&bev.php");
}

function deleteFood($dbc){
	if (isset($_POST['deleteFood'])) {
		$fid = $_POST['fid'];

		$sql = "DELETE FROM food_tbl WHERE food_id='$fid'";
		$result = $dbc->query($sql);
	}
}

function deleteBev($dbc){
	if (isset($_POST['deleteBev'])) {
		$bid = $_POST['bid'];

		$sql = "DELETE FROM beverage_tbl WHERE bev_id='$bid'";
		$result = $dbc->query($sql);
	}
}

/*Add food to a specific cafe Menu*/

function addToFood($dbc){
	if (isset($_POST['addFood'])) {
		$name = $_POST['name'];
		$price = $_POST['price'];

		$sql = "INSERT INTO ref_food(name, price) VALUES('$name', '$price')";
		$result = $dbc->query($sql);

		header("Location: ../admin/menu_manage.php");
		}

	if (isset($_POST['addFood1'])) {
		$name = $_POST['name'];
		$price = $_POST['price'];

		$sql = "INSERT INTO lazenbys_food(name, price) VALUES('$name', '$price')";
		$result = $dbc->query($sql);

		header("Location: ../admin/menu_manage.php");
		}

	if (isset($_POST['addFood2'])) {
		$name = $_POST['name'];
		$price = $_POST['price'];

		$sql = "INSERT INTO trade_food(name, price) VALUES('$name', '$price')";
		$result = $dbc->query($sql);

		header("Location: ../admin/menu_manage.php");
		}
}


/* Add beverage to specific cafe Menu*/

function addToBev($dbc){
	if (isset($_POST['addBev'])) {
		$name = $_POST['name'];
		$price = $_POST['price'];

		$sql = "INSERT INTO ref_bev(name, price) VALUES('$name', '$price')";
		$result = $dbc->query($sql);

		header("Location: ../admin/menu_manage.php");
	}

	if (isset($_POST['addBev1'])) {
		$name = $_POST['name'];
		$price = $_POST['price'];

		$sql = "INSERT INTO lazenbys_bev(name, price) VALUES('$name', '$price')";
		$result = $dbc->query($sql);

		header("Location: ../admin/menu_manage.php");
	}

	if (isset($_POST['addBev2'])) {
		$name = $_POST['name'];
		$price = $_POST['price'];

		$sql = "INSERT INTO trade_bev(name, price) VALUES('$name', '$price')";
		$result = $dbc->query($sql);

		header("Location: ../admin/menu_manage.php");
	}
}


/*Remove food from a specific cafe page*/
function remFood($dbc){
		if (isset($_POST['remFood'])) {
			$name = $_POST['name'];
			$price = $_POST['price'];

			$sql = "DELETE FROM ref_food(name, price) VALUES('$name', '$price')";
			$result = $dbc->query($sql);

			header("Location: ../admin/menu_manage.php");
		}

		if (isset($_POST['remFood1'])) {
			$name = $_POST['name'];
			$price = $_POST['price'];

			$sql = "DELETE FROM lazenbys_food(name, price) VALUES('$name', '$price')";
			$result = $dbc->query($sql);

			header("Location: ../admin/menu_manage.php");
		}

		if (isset($_POST['remFood1'])) {
			$name = $_POST['name'];
			$price = $_POST['price'];

			$sql = "DELETE FROM trade_food(name, price) VALUES('$name', '$price')";
			$result = $dbc->query($sql);

			header("Location: ../admin/menu_manage.php");
		}


}


/*Remove beverage from a specific cafe page*/ 
function remBev($dbc){
		if (isset($_POST['remBev'])) {
			$name = $_POST['name'];
			$price = $_POST['price'];

			$sql = "DELETE FROM ref_bev(name, price) VALUES('$name', '$price')";
			$result = $dbc->query($sql);

			header("Location: ../admin/menu_manage.php");
		}

		if (isset($_POST['remBev1'])) {
			$name = $_POST['name'];
			$price = $_POST['price'];

			$sql = "DELETE FROM lazenbys_bev(name, price) VALUES('$name', '$price')";
			$result = $dbc->query($sql);

			header("Location: ../admin/menu_manage.php");
		}

		if (isset($_POST['remBev2'])) {
			$name = $_POST['name'];
			$price = $_POST['price'];

			$sql = "DELETE FROM trade_bev(name, price) VALUES('$name', '$price')";
			$result = $dbc->query($sql);

			header("Location: ../admin/menu_manage.php");
		}
}