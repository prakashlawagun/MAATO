<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
   
 ?>
<!DOCTYPE html>
<html>
  <head>
    <title> User Profile </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
  </head>
  <style>
    *{
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: 'Poppins',sans-serif;
    }
    body{
      background-image: url('college.jpg');
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      height: 100vh;
    }
    .middle{
      padding: 10px;

    }
    #file{
      display: none;
    }
    #uploadBtn{
      height:40px;
      width: 20%;
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      text-align: center;
      background:rgba(0,0,0,0.7);
      color:wheat;
      line-height: 30px;
      font-family: sans-serif;
      font-size: 15px;
      cursor: pointer;

    }
    .profile-card{
      width: 516px;
      margin: auto;
      margin-top: 120px;
      margin-bottom: 12px;
      background: #ffffffd9;
      border-radius: 10px;
      opacity: 0.98;
      font-weight: 800;
      box-shadow: 2px 4px 10px 2px rgba(0, 0, 0, 0.5);
      position: relative;
    }
    .image-container{
      position: relative;
    }
    .image-container img{
      width: 29%;
      border-radius: 50%;
      margin-top: 15px;
      margin-left: 190px;
      height: 152px;
    }
    .title{
      position: absolute;
      left: 183px;
      top: 170px;
      font-size: 17px;
      font-weight: 700;
      color: #292525;
      text-shadow: #FC0 1px 0  10px;
    }
    .main-container{
      padding: 40px 20px 20px 20px;
    }
    .info{
      color: black;
      margin-right: 16px;
      padding: 14px;
    }
  
    
    .about{
      border: 2px solid gray;
      border-radius: 7px;
      margin-left: 12px;
      display: none;

    }
    .about img{
      width: 100px;
      height: 100px;
      border-radius: 50%;
      margin-left: 12px;
      margin-top: 4px;
    }
    .about p{
      padding: 12px;
      margin-top: 0px;
      margin-left: 13px;
      font-family: 'Lobster',cursive;
      font-size: 17px;
    }
    .about h3{
      margin-left: 14px;
      text-decoration: underline;
    }
  
    input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
  
  </style>
  
<body>     
<div class="profile-card">
  <div class="image-container">
    <div class="pic">
    <img src="download.png" id="photo">
    <input type="file" id="file">
    <label for="file" id="uploadBtn">Upload</label>
  </div>
    <div class="title">
      <h2 align="center"><?php echo $_SESSION['name']; ?></h2>
    </div>
  </div>
  <div class="main-container">
    <p><strong>Address:</strong> <?php echo $_SESSION['address']; ?></p>
    <p><strong>Email:</strong></i> <?php echo $_SESSION['email']; ?></p>
    <hr>
    <form action="" method="post">
      <center class="middle">
      <input type="text" name="name" placeholder="<?php echo $_SESSION['name']; ?>"  required><br>
       <input type="text" name="address" placeholder="<?php echo $_SESSION['address']; ?>"  required><br>
        <input type="email" name="email" placeholder="<?php echo $_SESSION['email']; ?>"  required><br>
    <input type="submit" class="btn" name="submit" value="Update">
  </center>
  </form>
  </div>
</div>

</script>
</body>
</html>
<?php 
include'db_conn.php';
if(isset($_POST['submit'])){
  $id = $_SESSION['id'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $address= $_POST['address'];
 $Lquery="UPDATE accountt SET  name='$name',address='$address', email = '$email' Where id = '$id' ";
 $result=mysqli_query($conn,$Lquery);
  if($result){
    echo"update suscess";
  }
  else{
     echo"Update not successfully";
  }
}
?>
<?php 
}else{
     header("Location: maato.php");
     exit();
}
 ?>