<?php
 session_start();
 

	 $conn = new PDO("mysql:host=localhost;dbname=eticket;charset=utf8", "roote", "melvin");

 
 if(isset($_SESSION['busno'])){

 $query = "SELECT seatscol  FROM availale_seats where busno='".$_SESSION["busno"]."' ";
  $statement = $conn->prepare($query);
  $statement->execute();
  $data = $statement->fetchAll();
 
  foreach($data as $row)
  {
   $output[] = array(
   
      $row["seatscol"]

   );
  }

  
  echo json_encode($output);
 


 }
 else{

 echo "dumbass";
 }

?>