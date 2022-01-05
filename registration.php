<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost' , 'root','password');
if($con){
	echo "connection successful";
}else{
	echo "no connection";
}
  mysqli_select_db($con , "gofly");

$name = $_POST['user'];
$pass = $_POST['password'];

$dupliacte = " select * from login where name = '$name' && password = '$pass' ";
$result  = mysqli_query($con , $dupliacte);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "dupliacte data";
}else {
	$insert = "insert into login(name  ,  password) values('$name'  , '$pass' ) ";
	mysqli_query($con  , $insert);

}

?>