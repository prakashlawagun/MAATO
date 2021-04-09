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
$phone=$_POST['phone'];
$place=$_POST['place'];
$msg=$_POST['msg'];

$query="insert into form(name,email,address,phone,place,msg) values('$name','$email','$address','$phone','$place','$msg')";
mysqli_query($conn,$query);
header('location:form.php');
?>