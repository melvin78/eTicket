<?php

session_start();


     include 'connection.php';
    $conn = OpenCon();


	




$stmt = $conn -> prepare("SELECT idno FROM userr where idno =?");
$stmt->bind_param("s",$_POST['idno']);

$stmt->execute();
$stmt -> store_result();

$numberofrows = $stmt->num_rows;

if($numberofrows ==0){


	echo 0;// id no not found safe to registre
}

else{

	echo 1; // id no found not safe to register
}




 

  
 




 


?>