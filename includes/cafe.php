<?php
include 'conn.php';
//Keep track of customer food orders in each cafe
function Food($dbc){
	//Ref
	if (isset($_POST['buyFood'])) {
		$uid = $_POST['sid'];
		$bal = $_POST['bal'];
		$fid = $_POST['fid'];

		$sql = "SELECT * FROM ref_food WHERE fid='$fid'";
		$result = $dbc->query($sql);
		$row = $result->fetch_assoc();
		$name = $row['name'];
		$price = $row['price'];

		$sql = "SELECT * FROM customer WHERE uid='$uid'";
		$result = $dbc->query($sql);
		$row = $result->fetch_assoc();
		$cid = $row['cus_id'];


		$sql = "INSERT INTO orders(name, price, cus_id, cafe_id) VALUES('$name', '$price', '$cid', 1)";
		$result = $dbc->query($sql);
	}

	//lazenbys
	if (isset($_POST['buyFood1'])) {
		$uid = $_POST['sid'];
		$bal = $_POST['bal'];
		$fid = $_POST['fid'];

		$sql = "SELECT * FROM lazenbys_food WHERE fid='$fid'";
		$result = $dbc->query($sql);
		$row = $result->fetch_assoc();
		$name = $row['name'];
		$price = $row['price'];

		$sql = "SELECT * FROM customer WHERE uid='$uid'";
		$result = $dbc->query($sql);
		$row = $result->fetch_assoc();
		$cid = $row['cus_id'];


		$sql = "INSERT INTO orders(name, price, cus_id, cafe_id) VALUES('$name', '$price', '$cid', 2)";
		$result = $dbc->query($sql);
	}

	//The trade
	if (isset($_POST['buyFood2'])) {
		$uid = $_POST['sid'];
		$bal = $_POST['bal'];
		$fid = $_POST['fid'];

		$sql = "SELECT * FROM trade_food WHERE fid='$fid'";
		$result = $dbc->query($sql);
		$row = $result->fetch_assoc();
		$name = $row['name'];
		$price = $row['price'];

		$sql = "SELECT * FROM customer WHERE uid='$uid'";
		$result = $dbc->query($sql);
		$row = $result->fetch_assoc();
		$cid = $row['cus_id'];


		$sql = "INSERT INTO orders(name, price, cus_id, cafe_id) VALUES('$name', '$price', '$cid', 3)";
		$result = $dbc->query($sql);
	}
}

//Keep track of customer beverage orders in each cafe
function Bev($dbc){
	//Ref
	if (isset($_POST['buyBev'])) {
		$uid = $_POST['sid'];
		$bal = $_POST['bal'];
		$bid = $_POST['bid'];

		$sql = "SELECT * FROM ref_bev WHERE b_id='$bid'";
		$result = $dbc->query($sql);
		$row = $result->fetch_assoc();
		$name = $row['name'];
		$price = $row['price'];

		$sql = "SELECT * FROM customer WHERE uid='$uid'";
		$result = $dbc->query($sql);
		$row = $result->fetch_assoc();
		$cid = $row['cus_id'];


		$sql = "INSERT INTO orders(name, price, cus_id, cafe_id) VALUES('$name', '$price', '$cid', 1)";
		$result = $dbc->query($sql);
	}

	//lazenbys
	if (isset($_POST['buyBev1'])) {
		$uid = $_POST['sid'];
		$bal = $_POST['bal'];
		$bid = $_POST['bid'];

		$sql = "SELECT * FROM lazenbys_bev WHERE b_id='$bid'";
		$result = $dbc->query($sql);
		$row = $result->fetch_assoc();
		$name = $row['name'];
		$price = $row['price'];

		$sql = "SELECT * FROM customer WHERE uid='$uid'";
		$result = $dbc->query($sql);
		$row = $result->fetch_assoc();
		$cid = $row['cus_id'];


		$sql = "INSERT INTO orders(name, price, cus_id, cafe_id) VALUES('$name', '$price', '$cid', 2)";
		$result = $dbc->query($sql);
	}

	//The trade
	if (isset($_POST['buyBev2'])) {
		$uid = $_POST['sid'];
		$bal = $_POST['bal'];
		$bid = $_POST['bid'];

		$sql = "SELECT * FROM trade_bev WHERE b_id='$bid'";
		$result = $dbc->query($sql);
		$row = $result->fetch_assoc();
		$name = $row['name'];
		$price = $row['price'];

		$sql = "SELECT * FROM customer WHERE uid='$uid'";
		$result = $dbc->query($sql);
		$row = $result->fetch_assoc();
		$cid = $row['cus_id'];


		$sql = "INSERT INTO orders(name, price, cus_id, cafe_id) VALUES('$name', '$price', '$cid', 3)";
		$result = $dbc->query($sql);
	}
}

