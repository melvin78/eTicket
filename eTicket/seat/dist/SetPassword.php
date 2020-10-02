
  <?php

session_start();

     include 'connection.php';
    $conn = OpenCon();





    if (isset($_POST['passid']) && isset($_POST['userid'])){
$_SESSION['userid']= $_POST['userid'];

 
    $idno = $_POST['userid'];
    $password = password_hash($_POST ['passid'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("insert into user_password (idno,password)values(?,?)");
    $stmt->bind_param("ss",$idno,$password);

    if($stmt->execute()){

echo 1;
    }

 else{

    echo 0;
 }


}

else{
    echo "no";
}






   




    ?>

