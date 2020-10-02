
<?php
session_start();
include 'connection.php';
 $conn = OpenCon();




$query ="SELECT * FROM passenger_ticket_details   where idticketdetails = '".$_SESSION['userid']."' 
 and dateofissue >= '".$_POST['travel_date_first']."' and travel_Date < '".$_POST['travel_date_second']."'  ";  
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






if (mysqli_num_rows($result)==0){

	echo 0;
}
else{


	foreach ($data as $row) {
		$output []=array(

           'arrival_time'  => $row["Expecte_arrivaltime"],
           'dateofissue'  => $row["dateofissue"],
           'fname'  => $row["fname"],
           'departuretime'  => $row["departuretime"],
           'sname'  => $row["sname"],
           'lname'  => $row["lname"],
           'phone'  => $row["phone"],
           'secondary_id'  => $row["secondary_id"],
           'travel_Date'  => $row["travel_Date"],
           'TICKETNO'  => $row["TICKETNO"],
           'Boardingfrom'  => $row["Boardingfrom"],
           'Destination' => $row["Destination"],
           'seat_id' => $row["seat_id"]


		);
	}

	echo json_encode($output);
}




?>



