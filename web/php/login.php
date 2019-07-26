<?php
session_start();
?>


<?php

include_once "config.php";
$ConObj = new config();

$email =  $_POST["email"];
$password = $_POST["password"];

$email = $ConObj->check($email);
$password = $ConObj->check($password);


$result = mysqli_query($ConObj->conn(),"SELECT * FROM `users` where `email` = '$email' and `verified` = 1");



 if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                     if(password_verify($password, $row["password"]))  
                     {  
                          //return true;  
                          $_SESSION['MyUser'] = $row["email"];  
                          echo "<script>window.location.href='../UserPanel/MyDashboard.php'</script>"; 
                     }  
                     else  
                     {  
                          //return false;  
                          echo '<script>alert("Wrong User Details")</script>';
                          echo "<script>window.location.href='../FrontTheme/home.php'<script>";  
                     }  
                }  
           }  
           else  
           {  
                echo '<script>alert("Email not Verified")</script>';  
           		echo "<script>window.location.href='../FrontTheme/home.php'<script>";
           } 


?>