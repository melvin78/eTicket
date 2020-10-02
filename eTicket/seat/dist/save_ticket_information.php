


<?php
session_start();


  include 'connection.php';
    $conn = OpenCon();

/*
 $stmt = $conn -> prepare("SELECT idschedule FROM schedule   where traveldate =? 
and fro_M = ? and to_dest =?");
$stmt->bind_param("sss",$_SESSION['travel_date'],$_SESSION["sub_category_item"],$_SESSION['sub_category_itemt']);

$stmt->execute();
$stmt -> bind_result($result);
$stmt-> fetch();

echo $result;



 $stmt = $conn -> prepare("SELECT idschedule FROM schedule   where traveldate =? 
and fro_M = ? and to_dest =?");
$stmt->bindParam("sss",$_SESSION['travel_date'],$_SESSION["sub_category_item"],$_SESSION['sub_category_itemt']);

$stmt->execute();

$result_schedule = $stmt-> fetch();

$_SESSION['result_schedule'] =$result_schedule;
*/











 $query = "INSERT INTO ticketdet (idticketdetails,schedule_id,busid,seat_id,fname,sname,lname,phone,secondary_id) VALUES (?,?,?,?,?,?,?,?,?)";

       for($count= 0;$count<count($_POST['seatno']);$count++){
      
        $userid = $_POST['idticket'][$count];
        $schedu= $_POST['schd'][$count];
        $busid = $_POST['busid'][$count];
        $seat_id=$_POST['seatno'][$count];

        $fname=$_POST['fname'][$count];
        $sname=$_POST['sname'][$count];
        $surname=$_POST['surname'][$count];
        $pno=$_POST['pno'][$count];
        $secondary_id = $_POST['id'][$count];
        
       


       	$stmt = $conn->prepare($query);
       	$stmt->bind_param('sssssssss',$userid,$schedu,$busid,$seat_id,$fname,$sname,$surname,$pno,$secondary_id);
      





       	 
       	if($stmt->execute()){
         
echo 1;
       	} 
      else{
     echo 0;
      } 


       }

         	


/*
$consumer_key ='1hJ6yqBAEqYO44g6HFEO4e52GqkbBv68 ';
$consumer_secret = 'E6SSQScpULzCIspG';
$headers = ['Content-Type:application/json; charset-utf8'];

$url = 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_HTTTPHEADER, $headers)
*/


/*
 $query ="SELECT idschedule FROM schedule   where traveldate = '".$_SESSION['travel_date']."' 
and from = '".$_SESSION["sub_category_item"]."' and to = '".$_SESSION['sub_category_itemt']."' ";  
 $result = mysqli_query($conn, $query) or die(mysql_error()); 
 $data =mysqli_fetch_row($result); 

 echo $data[0];
 */

 #------------------------------------------
function clearStoredResults($mysqli_link){
#------------------------------------------
    while($mysqli_link->next_result()){
      if($l_result = $mysqli_link->store_result()){
              $l_result->free();
      }
    }
}

?>