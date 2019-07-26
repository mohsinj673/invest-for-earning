<?php

include_once('config.php');


class Users extends config{
	

//get All Users
function getUsers(){
	$userList = $this->select("users");
 	// var_dump($userList);
 	// die();
 	return $userList;
} 


//get User By Its ID 
function userByID($id){
	$userById = $this->selectTableById("users",$id);
	return $userById;
}


//Get User By its EMail 
function getUserByEmail($email){
$email = $this->check($email);
$data = mysqli_query($this->conn(),"SELECT * FROM `users` WHERE `email` = '$email'");
return $data;
}


}


?>