<?php

session_start();


     include 'connection.php';
    $conn = OpenCon();


	


if($stmt = $conn -> prepare("SELECT Firstn FROM userr where idno =?")){
$stmt->bind_param("s",$_SESSION['userid']);

$stmt->execute();
$stmt -> bind_result($session_userid);
 $stmt-> fetch();
$_SESSION['session_userid'] = $session_userid;


echo $session_userid;


}
 

  
 


 

 else{
echo "error";
 }

 


?>