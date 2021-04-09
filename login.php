<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$email = validate($_POST['email']);
	$pass = validate($_POST['password']);

	if (empty($email)) {
		header("Location: maato.php?error=	Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: maato.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM accountt WHERE email='$email' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['address'] = $row['address'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: photo.php");
		        exit();
            }else{
				header("Location: maato.php?error=Incorect Email or password");
		        exit();
			}
		}else{
			header("Location: maato.php?error=Incorect Email or password");
	        exit();
		}
	}
	
}else{
	header("Location: maato.php");
	exit();
}