<!DOCTYPE html>
<html>
<head>


	<title></title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<meta name="viewport" content="width=device-width"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body>

<div class="row">
  <div class="col-md-3"></div>
<div class="col-md-6">
  
 <form action="SetPassword.php" method="POST" id = "gh">
    <label>Set Your Password </label>
    <input class="form-control " name="userid" type="text" placeholder="IdentificationNo/PassportNo" style="width: 60%;"
    id="userid">
   <BR>
    <input class="form-control " name="passid" type="password" placeholder="password" style="width: 60%;"
    id="passid">
    <label id="status"><i></i></label>
    <BR><input type="button" value="Submit" name="but_submit" id="but_submit" class="btn btn-primary"/>
       
    <BR><form>

</div>
<div class="col-md-3"></div>
</div>


</body>
</html>


<script type="text/javascript">
	

var idno = $("#userid").val().trim();
     var password =$("#passid").val();
$(document).ready(function(){
  
    

	$('#but_submit').click(function(){
		

		$.ajax({
			     type: "POST",
            url: 'SetPassword.php',
            data: $('#gh').serialize(),
            success:function(data){
          if(data==1){

            alert("login with your new identification number and password");
            window.location.href  = "login.php";
          }
          else{

            $("#status").text("failed");
          }



            }



		});
	});


 



});

</script>