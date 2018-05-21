<?php
include 'conn.php';
function regCustomer($dbc){
	if (isset($_POST['regCustomer'])) {
		$name = mysqli_real_escape_string($dbc, $_POST['name']);
		$uid = mysqli_real_escape_string($dbc, $_POST['uid']);
		$umail = mysqli_real_escape_string($dbc, $_POST['mail']);
		$mobile = mysqli_real_escape_string($dbc, $_POST['mobile']);
		$credit = mysqli_real_escape_string($dbc, $_POST['credit']);
		$pwd = mysqli_real_escape_string($dbc, $_POST['pwd']);
		$bal = 2000;

		$sql = "INSERT INTO customer(name,uid,mail,card,mobile,	pwd, balance) VALUES('$name','$uid','$umail','$mobile','$credit','$pwd','$bal')";
		$result = $dbc->query($sql);

		$message = "<h3>Hello ".$name." please confirm your email. <h3><a href='localhost/elon/index.php'>Confirm</a>";

		require("../_vendors/PHPMailer-master/src/PHPMailer.php");
		require("../_vendors/PHPMailer-master/src/Exception.php");
		require("../_vendors/PHPMailer-master/src/SMTP.php");


		$mail = new PHPMailer\PHPMailer\PHPMailer(true);                              // Passing `true` enables exceptions
		try {
		    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = 'in-v3.mailjet.com';  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = '987973c8ae8ab1707cf4ee613d805749';                 // SMTP username
		    $mail->Password = '5d24e86abe2f094b0c6e6fa0d0247f10';                           // SMTP password
		    $mail->SMTPSecure = 'tsl';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 587;
		                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom("elonsantos63@gmail.com", "Y.E.O.M Ltd");
		    $mail->addAddress($umail);     // Add a recipient

		    
		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Email confirmation';
		    $mail->Body    = $message;
		    $mail->AltBody = strip_tags($message);

		    $mail->send();
		    //echo 'Message has been sent';
		} catch (Exception $e) {
		    //echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
	}
}
