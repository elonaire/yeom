<?php require_once('../shared/header.php'); include '../includes/conn.php'; include '../includes/register.inc.php'; ?>

	<div class="row">
		<div class="col-4">
			
		</div>

		<div class="col-4" id="form">
			<h1>User Registration</h1>
			<?php
			echo '
			<form method="POST" action="'.regCustomer($dbc).'" name="myForm">
				<input type="text" placeholder="Name" name="name">
				<input type="email" placeholder="e-mail" name="mail">
				<input type="text" placeholder="Mobile" name="mobile">
				<input type="text" placeholder="Credit Card No." name="credit">
				<input type="text" placeholder="Student/Staff ID" name="uid">
				<input type="password" placeholder="Password" name="pwd">
				<input type="password" placeholder="Confirm Password" name=""><br><br>
				<input type="submit" id="regButton" class="btn-success" value="Register" name="regCustomer">
			</form>';
			?>
		</div>

		<div class="col-4">
			
		</div>
	</div>

	<?php require_once('../shared/footer.php'); ?>
</body>
</html>