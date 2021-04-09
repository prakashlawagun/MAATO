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
$day=$_POST['day'];
$time=$_POST['time'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$service=$_POST['service'];
$pedologist=$_POST['pedologist'];
$choice=$_POST['choice'];

$query="insert into appointment(day,time,name,phone,service,pedologist,choice) values('$day','$time','$name','$phone','$service','$pedologist','$choice')";
mysqli_query($conn,$query);
header('location:appointment.php');
?>