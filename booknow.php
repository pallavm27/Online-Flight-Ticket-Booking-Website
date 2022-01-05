<?php
session_start();
$con = mysqli_connect('localhost' , 'root','password');
if($con){
	echo "Your Data Has Been Submitted!!!!";
}else{
	echo "no connection";
}
  mysqli_select_db($con , "gofly");
  

$Board = $_POST['boarding'];
$Destiny   = $_POST['destination'];
$Date = $_POST['tdate'];
$Time = $_POST['time'];
$Flightno = $_POST['flightno'];
$Adult = $_POST['adult'];
$Msg = $_POST['msg'];
$Name= $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['phno'];




	$insert = "insert into passenger(boarding , destination , tdate ,time ,flightno ,adult ,msg, name ,email, phno ) values( '$Board'  , '$Destiny','$Date','$Time','$Flightno'  , '$Adult','$Msg', '$Name' , '$Email' , '$Phone'   ) ";
	mysqli_query($con  , $insert);

?>