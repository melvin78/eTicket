<?php

session_start();


     include 'connection.php';
    $conn = OpenCon();


	

 if (isset($_POST['userid']) && isset($_POST['passid'])){


$_SESSION['userid']=$_POST['userid'];

$passid = $_POST['passid'];

if($stmt = $conn -> prepare("SELECT password FROM user_password where idno =?")){
$stmt->bind_param("s",$_SESSION['userid']);

$stmt->execute();
$stmt -> bind_result($result);
$stmt-> fetch();
$stmt -> close();

}
 

  
 


 }

 else{
echo "password not set";
 }

 if(password_verify($passid, $result)){

 	echo 1;
 }
 else{

 	echo 0;
 }

 


?>