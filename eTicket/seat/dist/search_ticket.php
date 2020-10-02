
<?php
session_start();

if (!isset($_SESSION['userid'])){

echo "<a href =login.php> kindly login first</a>";

}


?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="h.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>


   
    
 
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<title>
		


		
	</title>

	<style type="text/css">

		 @import url('https://fonts.googleapis.com/css?family=Oswald');

		 .font-card{

		 	 font-family: 'Oswald', sans-serif;
		 }


		 .card {
      box-shadow: 0 0 10px 0 rgba(100, 100, 100, 0.26);
    }



	</style>
</head>
<body>
	<BR>
	<BR>
<form  action="searchby_ticket.php" method="POST" id="searchby_ticket">
	<label>Before Date</label><input type="date" name="travel_date_first">
	<label>After Date</label><input type="date" name="travel_date_second">
	

<input type="button" value="SEARCH"  name="search_ticket_button" id="search_ticket_button" class="btn btn-primary"/>
</form>

<br>

<div class="row"> 
<div class="col-md-2"></div>
<div class="col-md-8" id="generated_search_tickets">
	



</div>
<div class="col-md-2"></div>


</div>


</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){

     $("#search_ticket_button").click(function(){

$.ajax({
           type: "POST",
            url: 'searchby_ticket.php',
            data: $('#searchby_ticket').serialize(),
            dataType:"json",
            success:function(data){

            	if(data==0){

                 $("#generated_search_tickets").append("<h2>Unfortunately there are no booked tickets for that date</h2>")

            	}

            	else{

            		 for (var count = 0; count < data.length; count++) { 

                   $("#generated_search_tickets").append(
'<div class ="card border-info mb-3 ">'+
'<div class="card-header text-white bg-secondary mb-3  text-left">'+
    '<h2 class= font-card>'+data[count].fname+'&nbsp'+data[count].sname+'&nbsp'+data[count].lname+'</h2>'+
    '<h3 class= font-card>'+data[count].TICKETNO+'</h3>'+
    '<h3 class= font-card>'+data[count].seat_id+'</h3>'+
  '</div>'+
'<div class ="card-body bg-light mb-3">'+

                   	'<form>'+
  '<div class="form-row">'+
    '<div class="form-group col-md-6">'+
      '<label for="inputEmail4">BOARDING POINT</label>'+
      '<input type="email"readonly class="form-control-plaintext  font-card" value='+data[count].Boardingfrom+'>'+
    '</div>'+
    '<div class="form-group col-md-6">'+
      '<label for="inputPassword4">DESTINATION</label>'+
      '<input type="text" readonly class="form-control-plaintext  font-card" value ='+data[count].Destination+' >'+
   ' </div>'+
  '</div>'+
  '<div class="form-group">'+
   ' <label for="inputAddress">TRAVEL DATE</label>'+
    '<input type="text" readonly class="form-control-plaintext font-card" value='+data[count].travel_Date+' >'+
  '</div>'+
  '<div class="form-row">'+
  '<div class="form-group col-md-6">'+
    '<label for="inputAddress2">DEPARTURE TIME</label>'+
   ' <input type="text" readonly class="form-control-plaintext font-card" value='+data[count].departuretime+' >'+
  '</div>'+
     '<div class="form-group col-md-6">'+
      '<label for="inputPassword4">EXPECTED ARRIVAL TIME</label>'+
      '<input type="text" readonly class="form-control-plaintext font-card" value ='+data[count].arrival_time+' >'+
   ' </div>'+
  '</div>'+
  '<div class="form-row">'+
    '<div class="form-group col-md-6">'+
      '<label for="inputCity">PASSENGER ID NO</label>'+
      '<input type="text" readonly class="form-control-plaintext font-card" value='+data[count].secondary_id+'>'+
    '</div>'+
   '<div class="form-group col-md-6">'+
      '<label for="inputCity">PASSENGER PHONE NO</label>'+
      '<input type="text" readonly class="form-control-plaintext font-card" value='+data[count].phone+'>'+
    '</div>'+
    '</div>'+


  '<button type="submit" class="btn btn-primary">Sign in</button>'+
'</form>'+
'</div>'+
'</div>'+
'</br>'

                   	























                   	);


            		  }




            	}




            }


             });



     });





	});



</script>