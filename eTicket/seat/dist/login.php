
<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>

	<meta charset="UTF-8">
  <title>CodePen - CSS seat booking</title>

<link rel="stylesheet" href="h.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>


   
    
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="confirm_id.js"></script>
</head>
<body>
<div class="row text center">
	<div class="col-md-3"></div>
	<div class="col-md-6 jumbotron">
		
		 <div class="card border-info mb-3">
          <div class ="card-body">
    <form action="confirm_id.php" method="POST" id="confirmation">
    <label>Before continuing input your idno  </label>
    <input class="form-control " name="userid" type="text" placeholder="IdentificationNo/PassportNo" 
    id="userid">
   <BR>
    <input class="form-control " name="passid" type="password" placeholder="password" 
    id="passid">
    <label id="status"><i></i></label>
    <BR><input type="button" value="Submit" class="btn btn-primary" name="but_submit" id="but_submit" /><BR>
    

     

    <form>
    <a href="newUser.php"><i>Haven't registered yet ?click here to register</i></a>
  </div>
  </div>
	</div>
	<div class="col-md-3"></div>
</div>


</body>
</html>