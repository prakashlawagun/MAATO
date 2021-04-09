<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Maato</title>
    <link rel="stylesheet" href="form.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="content">
      <div class="image-box">
      ---------------------------------------------------------------
      <img src="soil1.jpg" alt="">
      --------------------------------------------------------------- 
      </div>
    <form method="post" action="connection.php">
      <div class="topic">Send us Request for Problem</div>
      <div class="input-box">
        <input type="text" name="name" required>
        <label>Enter your name</label>
      </div>
      <div class="input-box">
        <input type="text" name="email" required>
        <label>Enter your email</label>
      </div>
        <div class="input-box">
        <input type="text" name="address" required>
        <label>Enter your address</label>
      </div>
        <div class="input-box">
        <input type="text" name="phone" required>
        <label>Enter your phone</label>
      </div>
        <div class="input-box">
        <input type="text" name="place" required>
        <label>Enter your place</label>
      </div>
      <div class="message-box">
        <textarea id="msg" name="msg" rows="4" cols="50" name="msg" placeholder="Enter Your Problem"  required></textarea>
      
      </div>
      <div class="input-box">
        <input type="submit" value="Send Message" name="submit" onclick="popup()">
      </div>
    </form>
  </div>
  </div>
   <script>
    function popup(){
        alert('Dear Maato customer,You will soon get reply from company.Thank you for staying with Maato');
    }
  </script>
</body>
</html>
<?php 
}else{
     header("Location: maato.php");
     exit();
}
 ?>
