<?php
session_start();
?>
<?php
include 'connection.php';
 $conn = OpenCon();

$sub_category_item= $_POST["sub_category_item"];
$_SESSION['sub_category_item']=$sub_category_item;
$sub_category_itemt = $_POST["sub_category_itemt"];
$_SESSION['sub_category_itemt']=$sub_category_itemt;
$travel_date = $_POST["travel_date"];
$_SESSION['travel_date']=$travel_date;

   
if(isset($_POST["sub_category_item"])&& isset($_POST["sub_category_itemt"]) && isset($_POST["travel_date"])){

  $location = mysqli_query($conn, "select location_name from location where idlocation ='".$_POST["sub_category_item"]."' ") 
or die(mysql_error());  
 $reslocationfrom = mysqli_fetch_assoc($location);  



$locationt = mysqli_query($conn, "select location_name from location where idlocation ='".$_POST["sub_category_itemt"]."' ") 
or die(mysql_error());  
 $reslocationt = mysqli_fetch_assoc($locationt);  

$query ="SELECT * FROM buss   where Boardingpoint = '".$reslocationfrom['location_name']."' 
and traveldate = '".$_POST["travel_date"]."' and Destination = '".$reslocationt['location_name']."' ";  
 $result = mysqli_query($conn, $query) or die(mysql_error()); 
 $data =mysqli_fetch_all($result,MYSQLI_ASSOC); 

}
else{

  $_SESSION['sub_category_item']=$_POST["sub_category_item"];

$_SESSION['sub_category_itemt']=$_POST["sub_category_itemt"];

$_SESSION['travel_date']= $_POST["travel_date"];
}





if (mysqli_num_rows($result)==0){

	echo 0;
}
else{



	foreach ($data as $row) {
		$output []=array(

           'busno'  => $row["busno"],
           'seatsavailable'  => $row["seatsavailable"],
       


		);
	}

	echo json_encode($output);
}




?>
