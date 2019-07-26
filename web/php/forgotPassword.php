<?php

include_once "config.php";

/**
 * 
 */
class forgotPassword extends config
{
	
	

	function checkEmailExist($email,$token){

		$q = mysqli_query($this->conn(),"SELECT * FROM `users` WHERE `email` = '$email'");

	$count = mysqli_num_rows($q);
	if($count > 0){
		//echo "<script>alert('Email Found')</script>";

		$ins = mysqli_query($this->conn(),"INSERT INTO `forgotrequest`(`token`, `email`) VALUES ('$token','$email')");
		if($ins){
		$link = "http://localhost/web/FrontTheme/forgotPasswordRequest.php?token=".$token."&email=".$email;
		$this->forgotMail($email,$link);
		}

	}else{
		echo "<script>alert('Email not Found');window.location.href='../FrontTheme/home.php';</script>";
	}

	}


function forgotMail($email,$link){

require 'PHPMailerAutoload.php';
require 'credential.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = email;                 // SMTP username
$mail->Password = pass;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom(email, 'ABC Investing Official Site');
$mail->addAddress($email);     // Add a recipient
$mail->addReplyTo(email);

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

$mail->isHTML(true);                                  // Set email format to HTML
//$mail->SMTPAuth = false;
//$mail->SMTPSecure = false;

$mail->Subject = 'Forgot password Link';
$mail->Body    ='<a href="'.$link.'" style="color:red;">'.$link.'</a>';

//file_get_contents('feedbackReply_emailTemplate.php');//'This is the HTML message body <b style="background-color:red;">in bold!</b>';
$mail->AltBody = $link;

if(!$mail->send()) {
   
//$obj->errorModal("Message could not be sent","Mailer Error: ".$mail->ErrorInfo);
echo "<script>alert('Error Sending forgot Password Mail');window.location.href='../FrontTheme/home.php';</script>";

}
 else {


echo "<script>alert('Forgot Password Link Mail to your account');window.location.href='../FrontTheme/home.php';</script>";
   
//$obj->infoModal("Operation Success","Message has been sent");
}


}



}


	$email = $_POST["email"];
	$token = $_POST["token"];
	$forgotobj = new forgotPassword;
	$forgotobj->checkEmailExist($email,$token);



?>