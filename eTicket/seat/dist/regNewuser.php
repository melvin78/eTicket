
  <?php
    include 'connection.php';
    $conn = OpenCon();




$stmt = $conn->prepare("INSERT INTO `userr` (`Firstn`, `SecondName`, `surname`, `emailAddress`, `Dob`, `idno`, `phoneNumber`) VALUES (?, ?, ?, ?, ?,?, ?)");

$stmt->bind_param("sssssss",$Firstn,$SecondName,$surname,$emailAddress,$Dob,$idno,$phoneNumber);

$Firstn= $_POST['fname'];
$SecondName=$_POST['sname'];
$surname = $_POST['suname'];
$emailAddress=$_POST['emailid'];
$Dob=$_POST['dob'];
$idno=$_POST['idno'];
$phoneNumber= $_POST['phone'];


    if($stmt->execute()){

    	echo 1;
    }
    else{

    	echo 0;
    }
   
  ?>