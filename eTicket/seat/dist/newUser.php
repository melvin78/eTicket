<!DOCTYPE html>
<html>
<head>
	<title>
		

New USER
	</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<meta name="viewport" content="width=device-width"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="register.js" ></script>

</head>


<body>

<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-6">
    
<form id = "userdetails" action="regNewuser.php" method="POST" >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname">Goverment Issued IdentificationNo/Passport no</label>
      <input type="fname" class="form-control" id="idno" name="idno" placeholder="Identification Number" required ="Input Identification no">
    </div>
  </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname">First Name</label>
      <input type="fname" class="form-control" id="fname" name="fname" placeholder="First Name" required="Input first name">
    </div>
    <div class="form-group col-md-6">
      <label for="sname">Second Name</label>
      <input type="text" class="form-control" id="sname" name="sname" placeholder="Second Name" required="input second name">
    </div>

    <div class="form-group col-md-6">
      <label for="sname">Sur Name</label>
      <input type="text" class="form-control" id="suname" NAME="suname"placeholder="Sur Name" required="input sur name">
    </div>
  </div>
 
  <div class="form-group">
    <label for="emailid">Email Address</label>
    <input type="Email" class="form-control" id="emailid" name="emailid"placeholder="@yahoo.com,@gmail.com"required="input email Address">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="phone">Phone Number</label>
      <input type="text" class="form-control" id="phone" name="phone" required="input phone number">
    </div>
    <div class="form-group col-md-4">
      <label for="dob">Date of Birth</label>
       <input type="Date" class="form-control" id="dob" name ="dob" placeholder="" required="input date of birth">
    </div>
    
  </div>
  
  <input type="submit" class="btn btn-primary" id ="Register" name="Register" value="Register" />

  <label id ="regstatus"></label>
</form>


  </div>
  <DIV class="col-md-3"></DIV>

</div>


<br>


</body>
</html>
<script type="text/javascript">
	
$(document).ready(function(){






});







</script>