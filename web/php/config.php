<?php

class Config{


//Connection string start
function conn(){
$con = mysqli_connect("localhost","root","","investorswebdb") or die("unable to connect");
return $con;
}
//connection string end


//restrict sql injection attacks start
function check($a){
$a =	mysqli_real_escape_string($this->conn(),$a);
return $a;
}
//restrict sql injection attacks end


//get all table data by name of table
function select($tableName){
$tableName = $this->check($tableName);
$query = mysqli_query($this->conn(),"SELECT * FROM `$tableName` ");
return $query;

}

function selectTableById($table,$id){
$table = $this->check($table);
$id = $this->check($id);
$query = mysqli_query($this->conn(),"SELECT * FROM `$table` WHERE `id` = $id ");
return $query;

}

//unqiue email foreach user registeration start
function UniqueEmail($a){
$d = mysqli_query($this->conn(),"select * from `users` where `email` = '$a' ");
$count = mysqli_num_rows($d);
return $count;
}
//unqiue email foreach user registeration end


//This is User Login Start
// function login($a,$b){
// $a =  $this->check($a);
// $b = $this->check($b);
// $b = md5($b);
// $d = mysqli_query($this->conn(),"select * from `tblsignup` where `email` = '$a' and `pass` = '$b' ") or die("error in login");
// return $d;

// }
//This is User Login Start



//User Registeration func
// function signup($a,$b,$c,$d){

// $a = $this->check($a);
// $b = $this->check($b);
// $c = $this->check($c);
// $d = $this->check($d);
// $c = md5($c);
// $checkEmailExist = $this->UniqueEmail($b);
// if($checkEmailExist > 0){
// $this->errorModal("email error","This Email is already Registered try new");
// }else{ 
// $result = mysqli_query($this->conn(),"INSERT INTO `tblsignup` (`id`,`uname`, `email`, `pass`, `subtype`,`substatus`) VALUES ('','".$a."','".$b."','".$c."','".$d."',1)");
// 	return $result;		
// }
// }//User Registeration func


//User Registeration func by user
// function signupByUser($a,$b,$c,$d){

// $a = $this->check($a);
// $b = $this->check($b);
// $c = $this->check($c);
// $d = $this->check($d);
// $c = md5($c);
// $checkEmailExist = $this->UniqueEmail($b);
// if($checkEmailExist > 0){
// $this->generalPopup("email error","This Email is already Registered try new");
// }else{ 
// $result = mysqli_query($this->conn(),"INSERT INTO `tblsignup` (`id`,`uname`, `email`, `pass`, `subtype`,`substatus`) VALUES ('','".$a."','".$b."','".$c."','".$d."',1)");
// return $result;
// }
// }//User Registeration func


}//class config End 

?>