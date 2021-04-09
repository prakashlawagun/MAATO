<!DOCTYPE html>
<!--Code by Divinector - divinectorweb.com-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Maato</title>
	<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="result.css">

</head>
<body>
	<div class="banner-text">
		  <div class="col-md-12">
              <h2 class="title" align="center">Online Soil Testing System</h2>
                       </div>
			 <?php 
    include('db_conn.php');
     $display="SELECT * FROM pointt";
     $query=mysqli_query($conn,$display);
     $total=mysqli_num_rows($query);
     if($total!=0){
          ?>
              <?php
            $serial=1;
            while($row=mysqli_fetch_array($query)){
              ?>
              
     <div class="box">
     	 <div class="panel-title">
            <hr />
                        <h3 align="center">Testing Result Details</h3>
                    
                          <table border="1" width="20%" style="margin: 50px;">
              <tr>
                <th style="background-color: MediumSeaGreen;  font-size: 20px;" colspan="3">Prepared For:</th>
              </tr>
              <tr>
                <td>
              Id: <?php echo $serial ?><br>
              Name: <?php echo $row['name']?><br>
                Email: <?php echo $row['email']?><br>
                Address: <?php echo $row['address']?>
                  </td>
                </tr>
                </table>

            </div>
                  <table class="table" border="1" width="70%" align="center">
              <tr>
              
              <th style="background-color: MediumSeaGreen;  font-size: 20px;">Analysis</th>
              <th style="background-color: MediumSeaGreen;  font-size: 20px;">Result</th>
               <th style="background-color: MediumSeaGreen;  font-size: 20px;">Optimal</th>
              </tr>
              <tr>
                <td>Soil pH(%)</td>
                  <td><?php echo $row['soil']?></td>
                   <td><?php echo $row['soilop']?></td>
              </tr>
              <tr>
              
                <td>Organic Matter</td>
                  <td><?php echo $row['organic']?></td>
                    <td><?php echo $row['organicop']?></td>
              </tr>
              <tr>
              
                <td>CEC</td>
                  <td><?php echo $row['cec']?></td>
                  <td><?php echo $row['cecop']?></td>
              </tr>
              <tr>
               
                <td>Iron</td>
                  <td><?php echo $row['iron']?></td>
                  <td><?php echo $row['ironop']?></td>
              </tr>
              <tr>
               
                <td>Zinc</td>
                  <td><?php echo $row['zinc']?></td>
                  <td><?php echo $row['zincop']?></td>
              </tr>
              <tr>
            
                <td>Phosphrous</td>
                  <td><?php echo $row['phosphorus']?></td>
                   <td><?php echo $row['phosphorusop']?></td>
              </tr>
              <tr>
             
                <td>Potassium</td>
                  <td><?php echo $row['potassium']?></td>
                    <td><?php echo $row['potassiumop']?></td>
              </tr>
              <tr>
             
                <td>Nitrogen</td>
                  <td><?php echo $row['nitrogen']?></td>
                    <td><?php echo $row['nitrogenop']?></td>
              </tr>
            </table>


                                    
            </table>         
              </div>
              <?php
              $serial++;
            }
            ?>
          <?php
        }
          ?>
		

	</div>
	
</body>
</html>
