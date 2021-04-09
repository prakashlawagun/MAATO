<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
   
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maato</title>
    <link rel="stylesheet" href="photo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <style type="text/css">
   #country{
    width: 70%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
   }
   form{
    width: 60%;
    margin: 20px auto;
   }
   form div{
    margin-top: 5px;
   }
   #img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
   }
   #img_div:after{
    content: "";
    display: block;
    clear: both;
   }
   .content .card #country .status{
    border-radius: 10px;
   }
   img{
    float: left;
    margin: 5px;
    width: 95%;
    height: 60%;
    align-items: center;
   }
   textarea{
    width: 100%;
    border: 1px solid #481c01;
    background-color: #f2f2f2;
    font-size: 20px;
    border-radius: 5px;
    margin: auto;
    resize: none;

   }
   @media screen and(max-width: 300px){
     #country,textarea{
      width: 100%;
     }
     img{
      width: 100%;
     }
   }
</style>
   
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>MAA<span>TO</span></h3>
      </div>
      <div class="right_area">

        <a href="logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="use1.jpg" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
         <a href="product.php"><i class="fas fa-user"></i><span>Profile</span></a>
        <a href="appointment.php"><i class="fas fa-calendar-check"></i><span>Appointment</span></a>
        <a href="payment.php"><i class="fas fa-money-check-alt"></i><span></span> Payment</a>
        <a href="form.php"><i class="fab fa-delicious"></i><span>Forms</span></a>
        <a href="result.php"><i class="fas fa-poll-h"></i><span>Result</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
      
        <h4>Welcom &nbsp;&nbsp;<?php echo $_SESSION['name']; ?></h4>
      </div>
      <a href="product.php"><i class="fas fa-user"></i><span>Profile</span></a>
      <a href="appointment.php"><i class="fas fa-calendar-check"></i><span>Appointment</span></a>
        <a href="payment.php"><i class="fas fa-money-check-alt"></i><span></span>Payment</a>
        <a href="form.php"><i class="fab fa-delicious"></i><span>Forms</span></a>
        <a href="result.php"><i class="fas fa-poll-h"></i><span>Result</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="card">
          <h1 align="center" style="padding: 8px;">Welcome Users</h1>
          <h2 align="center" style="padding: 8px;"><u>Post About New Technology in Agriculture.</u></h2>
    <form method="POST" action="photocon.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <div>
      <input type="file" name="image" required>
    </div>
    <div class="status">

      <textarea 
        id="text" 
        cols="25" 
        rows="4" 
        name="image_text" 
        placeholder="Write about Agro Technology.." required></textarea>
    </div>
    <div>
      <button type="submit" name="upload" onclick="Recomend()"style="background-color: #4CAF50; padding: 5px; color:#ffffff">POST</button>
    </div>
  </form>
<div id="country">
   <?php
  include'db_conn.php';
   $result = "SELECT accountt.name,images.* FROM images inner join accountt on images.user_id=accountt.id";
     $query=mysqli_query($conn,$result);
     $total=mysqli_num_rows($query);
     
    while ($row = mysqli_fetch_array($query)) {
      echo "<div id='img_div'>";
       echo "<p>".$row['name']." share a post.</p>";
       echo "<p>".$row['image_text']."</p>";
        echo "<img src='img".$row['image']."' >";
      echo "</div>";
    }
  ?>
  
</div>
        
      </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    function Recomend(){
      
      alert("Are you sure to post this?")
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
                           