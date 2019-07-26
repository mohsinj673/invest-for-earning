<?php
session_start();
unset($_SESSION['MyUser']);

if(!isset($_SESSION['MyUser'])){
	echo "<script>window.location.href='../FrontTheme/home.php';</script>";
}

?>