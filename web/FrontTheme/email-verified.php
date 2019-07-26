<?php

	include_once "../php/reg.php";
	$obj = new reg();

   $code = $_GET["activationCode"];
   $person = $_GET["person"];

   if($obj->emailVerification($code,$person)){
   	echo "
   	<script>alert('You have Confirm your email address Login to your account');window.location.href='home.php';</script>   	
   	";
   }else{
   	echo "
   	<script>alert('Failed to verify you email address');window.location.href='home.php';</script>   	
   	";
   }
?>

