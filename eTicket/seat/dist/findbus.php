

<?php 

session_start();
?>

<?php

$sub_category_item= $_POST["sub_category_item"];
$_SESSION['sub_category_item']=$sub_category_item;
$sub_category_itemt = $_POST["sub_category_itemt"];
$_SESSION['sub_category_itemt']=$sub_category_itemt;
$travel_date = $_POST["travel_date"];
$_SESSION['travel_date']=$travel_date;

include 'connection.php';


    $conn = OpenCon();
if(isset($_POST["sub_category_item"])){

  $location = mysqli_query($conn, "select location_name from location where idlocation ='".$_POST["sub_category_item"]."' ") 
or die(mysql_error());  
 $reslocationfrom = mysqli_fetch_assoc($location);  



$locationt = mysqli_query($conn, "select location_name from location where idlocation ='".$_POST["sub_category_itemt"]."' ") 
or die(mysql_error());  
 $reslocationt = mysqli_fetch_assoc($locationt);  

$query ="SELECT * FROM buss   where Boardingpoint = '".$reslocationfrom['location_name']."' 
and traveldate = '".$_POST["travel_date"]."' and Destination = '".$reslocationt['location_name']."' ";  
 $result = mysqli_query($conn, $query) or die(mysql_error());  

}
else{

  header('Location: buyTicket.php');
}





if (mysqli_num_rows($result)==0){

	echo "Bus not Available";
}


?>

<!DOCTYPE html>  
 <html>  
      <head>  
          
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


           <style type="text/css">
           	


           	div{
          height: 400px;
          width: 300px;
          overflow: auto;


           	}
           </style>
      </head>  
      <body>  
           <br /><br />  
           <div class="container ">  
                
                <br />  
                
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                           









                             


  
       echo'   <td>';
  echo' <form class="form-group" action = "seat/dist/selectseat.php" method = "POST" >';
	





  echo' <label>oAvailable Seats:</label>';
  echo'  <input type="text" name="ofseats" readonly="" value="'.$row["seatsavailable"].'" >';
  echo'  <label>Date of Travel:</label>';
  echo'  <input type="text" name="traveldate" id= "traveldate" readonly="" value="'.$row["traveldate"].'" >';

  echo'  <label>Boarding Point:</label>';
  echo'  <input type="text" name="Boardingpoint" readonly="" value="'.$row["Boardingpoint"].'" ><br>';
  echo'  <label>Destination:</label>';
  echo' <input type="text" name="Destination" readonly="" value="'.$row["Destination"].'" >';
  echo' <label>Price</label>';
  echo'  <input type="text" name="price" id ="price" readonly="" value="'.$row["price"].'" ><Br>';
  echo'  <LABEL>Departure Country</LABEL>';
  echo'  <input type="text" name="countyfrom" readonly="" value ="'.$row["countyfrom"].'" >';
  echo'  <LABEL>Destination Country</LABEL>';
  echo'  <input type="text" name="countyto" readonly="" value ="'.$row["countyt"].'" >';
  echo' <LABEL>Expected Arrival Time</LABEL>';
  echo'  <input type="text" name="Arrival" readonly="" value ="'.$row["arrival_time"].'" >';


  echo' <label>Bus no:</label>';
  echo'<input type="text" name="busno" id="busno" readonly="" value ="'.$row["busno"].'" ><BR>';

  echo'  <input type="submit" name="submit" value ="Book Now">';



echo '</form>';
echo '</td>';
echo '</table>'; 
echo '<br><BR>';

















                          }  
                          ?>  
            </div>


      </body>  
 </html>  
