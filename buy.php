<?php 
session_start();

$con = mysqli_connect('localhost','root','password');

if($con){
    echo "Connection Successful!<br>";
}
else{
    echo "No Connection!";
}

mysqli_select_db($con, "gofly");

$Name = $_POST['fullname'];
$Email = $_POST['email'];
$Add = $_POST['address'];
$City = $_POST['city'];
$State = $_POST['state'];
$Zip = $_POST['zip'];
$Cname = $_POST['cardname'];
$Enum = $_POST['cardnumber'];
$Amount = $_POST['amount'];
$Eyear = $_POST['expyear'];
$Cvv = $_POST['cvv'];


 $insert = "insert into buy(fullname, email, address, city,state,zip,cardname,cardnumber,amount,expyear,cvv) values('$Name','$Email','$Add','$City','$State','$Zip','$Cname','$Enum','$Amount','$Eyear', '$Cvv')";
    mysqli_query($con, $insert);


?>