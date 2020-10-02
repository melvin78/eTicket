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

  $location = mysqli_query($conn, "select location_name from location where idlocation ='".$_SESSION["sub_category_item"]."' ") 
or die(mysql_error());  
 $reslocationfrom = mysqli_fetch_assoc($location);  



$locationt = mysqli_query($conn, "select location_name from location where idlocation ='".$_SESSION["sub_category_itemt"]."' ") 
or die(mysql_error());  
 $reslocationt = mysqli_fetch_assoc($locationt);  

$query ="SELECT * FROM buss   where Boardingpoint = '".$reslocationfrom['location_name']."' 
and traveldate = '".$_SESSION["travel_date"]."' and Destination = '".$reslocationt['location_name']."' ";  
 $result = mysqli_query($conn, $query) or die(mysql_error()); 
 $data =mysqli_fetch_all($result,MYSQLI_ASSOC); 
/*
 $stmt = $conn -> prepare("SELECT idschedule FROM schedule   where traveldate =? 
and fro_M = ? and to_dest =?");
$stmt->bind_param("sss",$_SESSION['travel_date'],$_SESSION["sub_category_item"],$_SESSION['sub_category_itemt']);

$stmt->execute();
$stmt -> bind_result($result_schedule);
$stmt-> fetch();

$result_schedule =$_SESSION['$result_schedule'];
*/
}
else{

  header('Location: buyTicket.php');
}





if (mysqli_num_rows($result)==0){

	echo 0;
}
else{


	foreach ($data as $row) {
		$output []=array(

           'busno'  => $row["busno"],
           'seatsavailable'  => $row["seatsavailable"],
           'traveldate'  => $row["traveldate"],
           'Boardingpoint'  => $row["Boardingpoint"],
           'Destination'  => $row["Destination"],
           'departuretime'  => $row["departuretime"],
           'arrival_time'  => $row["arrival_time"],
           'price'  => $row["price"],
           'countyfrom'  => $row["countyfrom"],
           'countyt'  => $row["countyt"],
           'schedule' => $row["idschedule"],
           'busid' => $row["idbus"]


		);
	}

	echo json_encode($output);
}




?>
