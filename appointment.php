<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Reservation Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <style type="text/css">
            
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');


*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}
body{
    font-family: 'Poppins', sans-serif;
}
.banner{
    min-height: 100vh;
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("soil1.jpg") center/cover no-repeat;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    color: #fff;
    padding-bottom: 20px;
}
.card-container{
    display: grid;
    grid-template-columns: 420px 420px;
}
.card-img{
    background: url("soil.jpg") center/cover no-repeat;
}
.banner h2{
    padding-bottom: 40px;
    margin-bottom: 20px;
}
.card-content{
    background: #fff;
    height: 440px;
}
.card-content h3{
    text-align: center;
    color: #000;
    padding: 25px 0 10px 0;
    font-size: 26px;
    font-weight: 500;
}
.form-row{
    display: flex;
    width: 100%;
    margin: 0 auto;
}
form select, form input{
    display: block;
    width: 100%;
    margin: 15px 12px;
    padding: 5px;
    font-size: 15px;
    font-family: 'Poppins', sans-serif;
    outline: none;
    border: none;
    border-bottom: 1px solid #eee;
    font-weight: 300;
}
form input[type = text], form input[type = number], form input::placeholder, select{
    color: #9a9a9a;
}
form input[type = submit]{
    color: #fff;
    background: #f2745f;
    padding: 12px 0;
    border-radius: 4px;
    width: 50%;
    cursor: pointer;
}
form input[type = submit]:hover{
    opacity: 0.9;
}
@media(max-width: 992px){
    .card-container{
        grid-template-columns: 100%;
        width: 100vw;
    }
    .card-img{
        height: 330px;
    }
}
          
      </style>
    </head>
    <body>
        
        <section class = "banner">
            <h2>GET APPOINTMENT TO PEDOLOGISTS</h2>
            <div class = "card-container">
                <div class = "card-img">
                    <!-- image here -->
                </div>

                <div class = "card-content">
                    <h3>BOOK NOW</h3>
                    <form method="post" action="apointcon.php">
                        <div class = "form-row">
                            <select name = "day"  required>
                                <option disabled selected hidden>Select Day</option>
                                <option value = "sunday">Sunday</option>
                                <option value = "monday">Monday</option>
                                <option value = "tuesday">Tuesday</option>
                                <option value = "wednesday">Wednesday</option>
                                <option value = "thursday">Thursday</option>
                                <option value = "friday">Friday</option>
                                <option value = "saturday">Saturday</option>
                            </select>

                            <select name = "time"  required>
                                <option disabled selected hidden>Select Time</option>
                                <option value="10:00">10:00</option>
                                <option value="10:30" >10:30</option>
                                <option value="11:00">11:00</option>
                                <option value="11:30">11:30</option>
                                <option value="12:00">12:00</option>
                                <option value="12:30">12:30</option>
                                <option value="1:00">1:00</option>
                                <option value="1:30">1:30</option>
                                <option value="12:00">2:00</option>
                            </select>

                        </div>

                        <div class = "form-row">
                            <input type = "text" placeholder="Full Name" name="name"  required>
                            <input type = "text" placeholder="Phone Number" name="phone"  required>
                        </div>

                        <div class = "form-row">
                             <select name="service"  required>
                                <option disabled selected hidden>Services</option>
                                <option >Soil Testing</option>
                                <option >Contract Farm</option>
                                <option >Fertilizer Analysis</option>
                            </select>

                             <select name = "pedologist"  required>
                                <option disabled selected hidden>Pedologists</option>
                                <option >Ram Ghimire</option>
                                <option >Sam Gurug</option>
                                <option >Gita Sunar</option>
                            </select>
                            
                        </div>

                        <div class = "form-row">
                             <select name="choice"  required>
                                <option disabled selected hidden>Methods</option>
                                <option >I want to call Pedologist in my farm area.</option>
                                <option >I want to brought my soil in your company directly.</option>
                                
                            </select>
                        </div>

                         <input type = "submit" value = "BOOK NOW" onclick="popup()">
                    </form>
                </div>
            </div>
        </section>
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