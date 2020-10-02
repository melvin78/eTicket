<?php


	 $conn = new PDO("mysql:host=localhost;dbname=eticket;charset=utf8", "roote", "melvin");


   

 if(isset($_POST["type"]))
{
 if($_POST["type"] == "category_data")
 {
  $query = "
  SELECT * FROM county
  ORDER BY countyname ASC
  ";
  $statement = $conn->prepare($query);
  $statement->execute();
  $data = $statement->fetchAll();
  foreach($data as $row)
  {
   $output[] = array(
    'id'  => $row["idcounty"],
    'name'  => $row["countyname"]
   );
  }
  echo json_encode($output);
 }
 else
 {
  $query = "
  SELECT * FROM location 
  WHERE countyid = '".$_POST["category_id"]."' 
  ORDER BY location_name ASC
  ";
  $statement = $conn->prepare($query);
  $statement->execute();
  $data = $statement->fetchAll();
  foreach($data as $row)
  {
   $output[] = array(
    'id'  => $row["idlocation"],
    'name'  => $row["location_name"]
   );
  }
  echo json_encode($output);
 }
}




?>