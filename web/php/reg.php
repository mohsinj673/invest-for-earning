<?php

require_once "config.php";


class reg extends config{

function register($name,$email,$password,$userCode,$phone,$activationCode){

$name = $this->check($name);
$email = $this->check($email);
$password = $this->check($password);
$userCode = $this->check($userCode);
$phone = $this->check($phone);
$activationCode = $this->check($activationCode);
// $password = mysqli_real_escape_string($cOnfigObj->conn(),$password);
// $userCode = mysqli_real_escape_string($cOnfigObj->conn(),$userCode);
// $phone = mysqli_real_escape_string($cOnfigObj->conn(),$phone);

$password = password_hash($password, PASSWORD_DEFAULT);

$checkExistingEmail = $this->UniqueEmail($email);
if($checkExistingEmail >  0){
return false;
}else{
$q = mysqli_query($this->conn(),"INSERT INTO `users`(`name`, `phone`, `email`, `password`, `userCode`,`activationCode`) VALUES ('$name','$phone','$email','$password','$userCode','$activationCode')");
$link = "http://localhost/web/FrontTheme/email-verified.php?activationCode=".$activationCode."&person=".$email;
$this->ConfirmationMail($email,$link);
return $q;
}


}


function emailVerification($activationCode,$person){

$sql = mysqli_query($this->conn(),"SELECT * FROM `users` where `activationCode` = '$activationCode' and `email` = '$person'");
$resultCount = mysqli_num_rows($sql);
if($resultCount > 0) {
	while($row = mysqli_fetch_row($sql)){       
    $id = $row[0];
	$update = mysqli_query($this->conn(),"UPDATE `users` SET `verified`= 1  WHERE `id`= $id");
	return $update;	 
	}//while end
}else{
	return false;
}

}


function ConfirmationMail($email,$link){

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

$mail->Subject = 'Confirmation Link for your newly created account';
$mail->Body    ='<a href="'.$link.'" style="color:red;">'.$link.'</a>';

//file_get_contents('feedbackReply_emailTemplate.php');//'This is the HTML message body <b style="background-color:red;">in bold!</b>';
$mail->AltBody = $link;

if(!$mail->send()) {
   
//$obj->errorModal("Message could not be sent","Mailer Error: ".$mail->ErrorInfo);
}
 else {
   
//$obj->infoModal("Operation Success","Message has been sent");
}


}





}//reg Class

