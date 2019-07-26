<?php

include_once "../php/config.php";
$conObj = new config();

$token = $_GET["token"];
$email = $_GET["email"];
$token = $conObj->check($token);
$email = $conObj->check($email);

$q = mysqli_query($conObj->conn(),"SELECT * FROM `forgotrequest` WHERE `email` = '$email'");
if(mysqli_num_rows($q) > 0){
	//echo "<script>alert('Email mil gya');</script>";
$dlt = mysqli_query($conObj->conn(),"DELETE FROM `forgotrequest` WHERE `email` = '$email'");
		if($dlt){
?>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!--bootstrap-css-->

<div class="row">

<div class="col-md-6 col-offset-3">
<h2>Reset Password</h2>
<form method="post" action="" id="my-form">
	<div class="form-group">
	<input type="password" name="password" id="pass" class="form-control" placeholder="New password" required="" minlength="8">
	</div>
	<div class="form-group">
	<input type="password" name="Confirmpassword" id="cpass" class="form-control" placeholder="Confirm password" required="" minlength="8">
	</div>
	<div class="form-group">
	<input type="submit" class="btn btn-primary btn-lg" name="submit" value="Submit">
	</div>
</form>

</div>

<script type="text/javascript">
	window.addEventListener("load",function() {
  document.getElementById('my-form').addEventListener("submit",function(e) {
    // // before the code
    /* do what you want with the form */
   var pass = document.getElementById('pass').value;
     var cpass = document.getElementById('cpass').value;
    if(pass == cpass){
    alert('form submit successfully');	
    }else{
    	alert('password not matched');
    e.preventDefault();	
    }
    // Should be triggered on form submit
    
  });
});
</script>


<?php
		
if(isset($_POST["submit"])){
	$password = $_POST["password"];
	$password = $conObj->check($password);
	$password = password_hash($password, PASSWORD_DEFAULT);
	$query = mysqli_query($conObj->conn(),"UPDATE `users` SET `password`='$password', WHERE `email` = '$email'");
	if(mysqli_num_rows($query) > 0){
							echo "<script>alert('Password Reset successfully');window.location.href='home.php';</script>";
							}else{
								echo "<script>alert('Error while resetting your password');window.location.href='home.php';</script>";
							}
}
?>

<?php
}
}else{
	echo "<script>alert('Access Denied you cannot acces this page directly');window.location.href='home.php';</script>";
}


?>