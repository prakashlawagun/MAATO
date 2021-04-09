<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
else
{
	echo "connection sucessful";
}
$name=$_POST['name'];
$email=$_POST['email'];
$address=$_POST['address'];
$amount=$_POST['amount'];

$query="insert into payment(name,email,address,amount) values('$name','$email','$address','$amount')";
mysqli_query($conn,$query);
header('location:payment.php');
?>