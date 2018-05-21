<?php
include 'conn.php';

function userLogin($dbc){
	if (isset($_POST['login'])) {
		if (isset($_SESSION['id'])) {
			session_destroy();
		}	

		$cuid = mysqli_real_escape_string($dbc, $_POST['uid']);
		$cpwd = mysqli_real_escape_string($dbc, $_POST['pwd']);

		$check = $cuid;

		if (strpos($check, 'US') || strpos($check, 'UE')) {
			$sql = "SELECT * FROM customer";
			$result = $dbc->query($sql);
			$row = $result->fetch_assoc();

			$uid = $row['uid'];
			$pwd = $row['pwd'];
			$bal = $row['balance'];

			if ($check == $uid && $cpwd == $pwd) {
			session_start();
			$_SESSION['id'] = $cuid;
			$_SESSION['bal'] = $bal;
			header("Location: main/user_acc.php");
			}else{
				session_start();
				header("Location: index.php");
			}
		}else if (strpos($check, 'CM')) {
			$sql = "SELECT * FROM manager";
			$result = $dbc->query($sql);
			$row = $result->fetch_assoc();

			$uid = $row['uid'];
			$pwd = $row['pwd'];
			$cid = $row['cafe_id'];

			if ($check == $uid && $cpwd == $pwd) {
			session_start();
			$_SESSION['id'] = $cuid;

			header("Location: admin/menu_manage.php");

			}else{
				session_start();
				header("Location: index.php");
			}	
		}else if (strpos($check, 'DB')) {
			$sql = "SELECT * FROM director";
			$result = $dbc->query($sql);
			$row = $result->fetch_assoc();

			$uid = $row['uid'];
			$pwd = $row['pwd'];

			if ($check == $uid && $cpwd == $pwd) {
			session_start();
			$_SESSION['id'] = $cuid;

			header("Location: admin/menu_manage.php");

			}else{
				session_start();
				header("Location: index.php");
			}	
		}

	}
}

function userLogin1($dbc){
	if (isset($_POST['login1'])) {
		if (isset($_SESSION['id'])) {
			session_destroy();
		}	

		$cuid = mysqli_real_escape_string($dbc, $_POST['uid']);
		$cpwd = mysqli_real_escape_string($dbc, $_POST['pwd']);

		$check = $cuid;

		if (strpos($check, 'US') || strpos($check, 'UE')) {
			$sql = "SELECT * FROM customer";
			$result = $dbc->query($sql);
			$row = $result->fetch_assoc();

			$uid = $row['uid'];
			$pwd = $row['pwd'];
			$bal = $row['balance'];

			if ($check == $uid && $cpwd == $pwd) {
			session_start();
			$_SESSION['id'] = $cuid;
			$_SESSION['bal'] = $bal;
			header("Location: main/user_acc.php");
			}else{
				session_start();
				header("Location: index.php");
			}
		}else if (strpos($check, 'CM')) {
			$sql = "SELECT * FROM manager";
			$result = $dbc->query($sql);
			$row = $result->fetch_assoc();

			$uid = $row['uid'];
			$pwd = $row['pwd'];
			$cid = $row['cafe_id'];

			if ($check == $uid && $cpwd == $pwd) {
			session_start();
			$_SESSION['id'] = $cuid;

			header("Location: ../admin/menu_manage.php");

			}else{
				session_start();
				header("Location: ../index.php");
			}	
		}else if (strpos($check, 'DB')) {
			$sql = "SELECT * FROM director";
			$result = $dbc->query($sql);
			$row = $result->fetch_assoc();

			$uid = $row['uid'];
			$pwd = $row['pwd'];

			if ($check == $uid && $cpwd == $pwd) {
			session_start();
			$_SESSION['id'] = $cuid;

			header("Location: ../admin/menu_manage.php");

			}else{
				session_start();
				header("Location: ../index.php");
			}	
		}

	}
}

function userLogout($dbc){
	if (isset($_POST['lgout'])) {
		session_destroy();
		header("Location: ../index.php");
	}
}