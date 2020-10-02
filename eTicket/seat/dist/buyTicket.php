


<?php 

session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>
		

New USER
	</title>


  

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>


   
    
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="check_schedule.js"></script>
<style type="text/css">
  
   .card {
      box-shadow: 0 0 10px 0 rgba(100, 100, 100, 0.26);
    }
  
</style>
   
</head>


<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="search_ticket.php">View Booked tickets</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<br>
<form action="selectseat.php" method="POST" class="form-group form-control" id="findschedule" >


<div class="row text center">
	<div class="col-md-2"></div>
    <div class="col-md-2">
    	
  
</div>
<div class="col-md-2">
	
	<label>Pick a travel date:</label>
<input class="input" name="travel_date" id ="travel_date" type="date" value="">

</div>




 <br />
    <div class="container">
      
      <br />
      <div class="panel panel-default">
        <div class="panel-heading">Travel from:</div>
        <div class="panel-body">
          <div class="form-group">
            <label>Select Country</label>
            <select name="category_item" id="category_item" class="form-control input-lg" data-live-search="true" title="Select County" required="select Country">

            </select>
          </div>
          <div class="form-group">
            <label>Select Departure Location</label>
            <select name="sub_category_item" id="sub_category_item" class="form-control input-sm" data-live-search="true" title="Select Departure Location" required="selectde Departure Location">

            </select>
          </div>
        </div>
      </div>
    </div>


<br />
    <div class="container">
      
      <br />
      <div class="panel panel-default">
        <div class="panel-heading">Travel To:</div>
        <div class="panel-body">
          <div class="form-group">
            <label>Select Country</label>
            <select name="category_itemt" id="category_itemt" class="form-control input-lg" data-live-search="true" title="Select County" required="select Country">
             

            </select>
          </div>
          <div class="form-group">
            <label>Select Destination</label>
            <select name="sub_category_itemt" id="sub_category_itemt" class="form-control input-lg" data-live-search="true" title="Select Departure Location" required="Select Destination">

            </select>
          </div>
        </div>
      </div>
    </div>

    <div class="row text center ">

    	<div class="col-md-2"></div>
    	<div class="col-md-8">


<input class=" btn btn-primary " name="search_bus" type="submit" value="BOOK" id="search">





<label id="schedule_status"><i></i></label>
  

</form>
<BR><br><br>

<div id="form_schedule"   style="overflow: auto; height: 1000px; width: 1000px;" >
</div>

  <!--
<form class="form-group" action = "seat/dist/selectseat.php" method = "POST" >
  





   <label>oAvailable Seats:</label>
   <input type="text" name="ofseats" readonly="" value="" id="ofseats">
   <label>Date of Travel:</label>
   <input type="text" name="traveldate" id= "traveldate" readonly="" id="traveldate">
   <label>Boarding Point:</label>
 <input type="text" name="Boardingpoint" readonly="" id="Boardingpoint">
   <label>Destination:</label>
   <input type="text" name="Destination" readonly="" id="Destination">
  <label>Price</label>
   <input type="text" name="price" id ="price" readonly="" id="price" ><Br>
   <LABEL>Departure Country</LABEL>
   <input type="text" name="countyfrom" readonly="" id ="countyfrom" >
   <LABEL>Destination Country</LABEL>
  <input type="text" name="countyto" readonly="" id ="countyto" >
  <LABEL>Expected Arrival Time</LABEL>
   <input type="text" name="Arrival" readonly=""  id="Arrival" >


   <label>Bus no:</label>
  <input type="text" name="busno" id="busno" readonly="" id="busno" ><BR>

    <input type="submit" name="submit" value ="Book Now">

</form>
-->







  </body>
</html>

<script>
$(document).on("click ","#submit_schedule_details_buy",function(){

window.Location.href= "selectseat.php";

});

  

</script>


<!--

'<form action = "selectseat.php" method = "POST" >'+
  '<div class="form-row">'+
    '<div class="form-group col-md-6">'+
      '<label for="fname">No of Seats Available</label>' +
      '<input type="fname" class="form-control" id="idno" name="idno" value="+data[count].seatsavailable+">'+
    '</div>'+
   ' <div class="form-group col-md-6">'+
     ' <label for="fname">Travel Date</label>'+
      '<input type="fname" class="form-control" id="fname" name="fname" value="+data[count].traveldate+">'+
   ' </div>'+
   ' <div class="form-group col-md-6">'+
     ' <label for="sname">Boarding Point</label>'+
     ' <input type="text" class="form-control" id="sname" name="sname" value="+data[count].Boardingpoint+">'+
    '</div>'+

    '<div class="form-group col-md-6">'+
      '<label for="sname">Destination</label>'+
      '<input type="text" class="form-control" id="suname" NAME="suname"value="+data[count].Destination+">'+
    '</div>'+
  '</div>'+
  '<div class="form-group ">'+
    '<label for="resid">price</label>'+
    '<input type="text" class="form-control" id="resid" name="resid" value="+data[count].price+" >'+
  '</div>'+
  '<div class="form-group">
   ' <label for="emailid">Departure Time</label>'+
   ' <input type="Email" class="form-control" id="emailid" name="emailid"value="+data[count].departuretime+">'+
  '</div>'+
 ' <div class="form-row">'+
   ' <div class="form-group col-md-6">'+
     ' <label for="phone">County From</label>'+
     ' <input type="text" class="form-control" id="phone" value="+data[count].countyfrom+">'+
    '</div>'+
   '<label for="emailid">BUS NO</label>'+
   ' <input type="Email" class="form-control" id="emailid" name="emailid"value="+data[count].busno+">'+
 ' </div>'+
   ' <div class="form-group col-md-4">'+
     ' <label for="dob">County To</label>'+
      ' <input type="Date" class="form-control" id="dob" name ="dob" value="+data[count].countyt+">'+
   ' </div>'+
    
  '</div>'+
  
  '<input type="submit" class="btn btn-primary"  name="BOOK NOW"></button>'+

 
'</form>'
-->