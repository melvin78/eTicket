
<?php 


session_start();




include 'connection.php';
 $conn = OpenCon();
   $location = mysqli_query($conn, "select location_name from location where idlocation ='".$_SESSION["sub_category_item"]."' ") 
or die(mysql_error());  
 $reslocationfrom = mysqli_fetch_row($location);  

  $locationto = mysqli_query($conn, "select location_name from location where idlocation ='".$_SESSION["sub_category_itemt"]."' ") 
or die(mysql_error());  
 $reslocationto= mysqli_fetch_row($locationto);  


if(isset($_POST['busno'])){
  

 $_SESSION['busno']=$_POST['busno'];

 $_SESSION['schedule']= $_POST['schedule'];

 $_SESSION['busid']=$_POST['busid'];

 $_SESSION['price']=$_POST['price'];

 $_SESSION['ofseats']= $_POST['ofseats'];

 $_SESSION['Boardingpoint']=$_POST['Boardingpoint'];

 $_SESSION['Destination']=  $_POST['Destination'];

}
else if(isset($_SESSION['busno'])){
 $_SESSION['busno']=$_SESSION['busno'];

 $_SESSION['schedule']= $_SESSION['schedule'];

 $_SESSION['busid']=$_SESSION['busid'];

 $_SESSION['price']=$_SESSION['price'];

 $_SESSION['ofseats']= $_SESSION['ofseats'];

 $_SESSION['Boardingpoint']=$_SESSION['Boardingpoint'];

 $_SESSION['Destination']=  $_SESSION['Destination'];


}

else{

   header('Location: buyTicket.php');
}
















?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - CSS seat booking</title>

<link rel="stylesheet" href="h.css">

<link rel="stylesheet" href="selectseat.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="check_seat.js"></script>
<script src="confirm_ticket_purchase.js"></script>


   
    
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</head>
<body >
<div class="container">
<div class="modal fade" id="success_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_title">Ticket status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>You have successfuly made your Purchase!. This confirms you wish to travel from <b><?php echo $reslocationfrom[0]?></b> to <b><?php echo  $reslocationto[0]?></b> and you will travel on the said date <b><?php echo $_SESSION['travel_date']?>.</b>. Click on ticket details to see more information about your ticket . Check your email also for the ticket details or you can head over to my account section to see your booked tickets. Have a great day!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="ticket_details">Ticket Details</button>
      </div>
    </div>
  </div>
</div>
</div>
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
  <input type="hidden" name="schedule_no[]" value="<?php echo $_SESSION['schedule']?> " id ="schedule_no">
  <input type="hidden" name="idticket[]"  value=" <?php 

if(isset($_SESSION['userid'])){

  echo $_SESSION['userid'];
}
else

echo"null";

  
       ?> " id ="idticket">
    <input type="hidden" name="busid[]" value="<?php echo $_SESSION['busid']?> " id ="busid">
     <input type="hidden" name="session_userid" value="" id ="sess_uid">
<BR><BR>


<div class="row">
  <div class="col-md-3"></div>
    <div class="col-md-6" id ="client_username"></div>
      <div class="col-md-3"></div>
</div>
<Br><br>
<div class="row">
 
 
   

        <div class="col-md-3"></div>

  
    <div class="col-md-6 ">
     <div class="card border-info mb-3 ">
          <div class ="card-body">


<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="travel_date">Travel Date:</label>
      <input type="text" readonly class="form-control-plaintext" id="travel_date" name="Boardingpoint" value="<?php echo $_SESSION['travel_date'];?>">
    </div>
    <div class="form-group col-md-6">
      <label for="Boardingpoint">Departuring From:</label>
  <input type="text"  readonly class="form-control-plaintext" name="Boardingpoint" id ="Boardingpoint" value='<?php 

$_SESSION['reslocationfrom']=$reslocationfrom[0];

  echo $reslocationfrom[0];?>'>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="travelto">Traveling To:</label>
  <input type="text" readonly class="form-control-plaintext" name="travelto" id ="travelto" value='<?php echo $reslocationto[0];
$_SESSION['reslocationto']=$reslocationto[0];


  ?>'>
    </div>
 <div class="form-group col-md-6">
      <label for="Boardingpoint">Bus No:</label>
  <input type="text" readonly class="form-control-plaintext" name="busno" id ="busno" value='<?php echo $_SESSION['busno'];?>'>
    </div>
  </div>
</form>

<button id ="change_schedule" class="btn btn-primary">CHANGE</button>
             </div>
     </div>
     
    </div>
 <div class="col-md-3"></div>
    <!--
    <div class="col-md-3">
    
  <div class="card border-info mb-3">
          <div class ="card-body">
            <form action="selectseat.php" method="POST" id="change_schedules">
            <label>Change travel date:</label>
<input class="input" name="travel_date" id ="travel_date" type="date" value="">
        <div class="form-group">
            <label>Select Country</label>
            <select name="category_item" id="category_item" class="form-control  " data-live-search="true" title="Select County" required="select Country" style="width: 50%;">
             

            </select>
          </div>
          <div class="form-group">
            <label>Change Departure Location</label>
            <select name="sub_category_item" id="sub_category_item" class="form-control " data-live-search="true" title="Select Departure Location" required="Select Destination" style="width: 50%;">

            </select>
          </div>

   <div class="form-group">
            <label>Select Country</label>
            <select name="category_itemt" id="category_itemt" class="form-control " data-live-search="true" title="Select County" required="select Country" style="width: 50%;">

            </select>
          </div>
          <div class="form-group">
            <label>Change Destination</label>
            <select name="sub_category_itemt" id="sub_category_itemt" class="form-control " data-live-search="true" title="Select Departure Location" required="selectde Departure Location" style="width: 50%;">

            </select>
          </div>

          <input class=" btn btn-primary " name="search_bus" type="button" value="CONFIRM" id="change_schedule">
<label id="schedule_status"><i></i></label>
      </form>
          </div>
        </div>


    </div>
  -->
    <div class="col-md-1"></div>
</div>

<div class="row seaty disabledbutton">
  <div class="col-md-1">
    
    
  </div>
  <div class="col-md-5">
    
<div class="plane " >

 
  <div class="exit exit--front fuselage">
   
    
 <input type="hidden" name="bno" id = "bno" class="bno" value="<?php echo $_SESSION['busno']?>">

 <p><i>Choose a seat from the layout below and fill the form for each passenger</i></p>

  
     
     

   
  </div>


  <ol class="cabin fuselage">
    <BR><BR>
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="1A" class="chk A1 1" name="st" />
          <label for="1A"class="l_1A">1A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1B" class="chk B1 2" name="st" />
          <label for="1B" class="l_1B">1B</label>
        </li>
        <li class="seat">
          
        </li>
        <li class="seat">
          
        <li class="seat">
          <input type="checkbox" id="1C" class="3"  name="st " />
          <label for="1C"class="l_1C">1C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="1D" class="4"  name="st " />
          <label for="1D" class="l_1D">1D</label>
        </li>
      </ol>
    </li>
    <li class="">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="2A" name="st"  />
          <label for="2A" class="l_2A">2A</label>
        </li>
        
        <li class="seat">
          <input type="checkbox" id="2B" name="st" />
          <label for="2B" class="l_2B">2B</label>
        </li>
        <li class="seat">
         
        </li>
        <li class="seat">
         
        </li>
        <li class="seat">
          <input type="checkbox" id="2C" name="st"  />
          <label for="2C" class="l_2C">2C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="2D" name="D2" class="st" />
          <label for="2D" class="l_2D">2D</label>
        </li>
      </ol>
    </li>
    <li class="">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="3A" name="st" />
          <label for="3A"class="l_3A">3A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3B" name="st" />
          <label for="3B" class="l_3B">3B</label>
        </li>
        <li class="seat">
         
        </li>
        <li class="seat">
         
        </li>
        <li class="seat">
          <input type="checkbox" id="3C" name="C3" />
          <label for="3C" class="l_3C">3C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="3D" name="D3" />
          <label for="3D" class="l_3D">3D</label>
        </li>
      </ol>
    </li>
    <li class="">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="4A" name="A4" />
          <label for="4A" class="l_4A">4A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4B" name="B4" />
          <label for="4B" class="l_4B">4B</label>
        </li>
        <li class="seat">
         
        </li>
        <li class="seat">
          
        </li>
        <li class="seat">
          <input type="checkbox" id="4C" name="C4" />
          <label for="4C" class="l_4C">4C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="4D" name="D4" />
          <label for="4D" class="l_4D">4D</label>
        </li>
      </ol>
    </li>
    <li class="">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="5A" name="A5" />
          <label for="5A" class="l_5A">5A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5B" name="B5" />
          <label for="5B" class="l_5B">5B</label>
        </li>
        <li class="seat">
         
        </li>
        <li class="seat">
         
        </li>
        <li class="seat">
          <input type="checkbox" id="5C" name="C5" />
          <label for="5C" class="l_5C">5C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="5D" name="D5" />
          <label for="5D" class="l_5D">5D</label>
        </li>
      </ol>
    </li>
    <li class="">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="6A" name="A6" />
          <label for="6A" class="l_6A">6A</label>
        </li>
     
        <li class="seat">
           <input type="checkbox" id="6B" name="B6" />
          <label for="6B" class="l_6B">6B</label>
        </li>
        <li class="seat">
         
        </li>
        
        <li class="seat">
         
        </li>

        <li class="seat">
          <input type="checkbox" id="6C" name="C6" />
          <label for="6C"class="l_6C">6C</label>
        </li>

        <li class="seat">
          <input type="checkbox" id="6D" name="D6" />
          <label for="6D" class="l_6D">6D</label>
        </li>
      </ol>
    </li>
    <li class="">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="7A" name="A7" />
          <label for="7A" class="l_7A">7A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7B" name="B7" />
          <label for="7B" class="l_7B">7B</label>
        </li>
        <li class="seat">
          
        </li>
        <li class="seat">
          
        </li>
        <li class="seat">
          <input type="checkbox" id="7C" name="C7" />
          <label for="7C"class="l_7C">7C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="7D" name="D7" />
          <label for="7D" class="l_7D">7D</label>
        </li>
      </ol>
    </li>
    <li class="">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="8A" name="A8" />
          <label for="8A" class="l_8A" >8A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8B" name="B8"  />
          <label for="8B" class="l_8B" >8B</label>
        </li>
        <li class="seat">
          
        </li>
        <li class="seat">
          
        </li>
        <li class="seat">
          <input type="checkbox" id="8C" name="C8" />
          <label for="8C" class="l_8C" >8C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="8D" class="chk D8" />
          <label for="8D" class="l_8D">8D</label>
        </li>
      </ol>
    </li>
    <li class="">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="9A" name="A9" />
          <label for="9A" class="l_9A">9A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9B" name="B9"  />
          <label for="9B" class="l_9B">9B</label>
        </li>
        <li class="seat">
          
        </li>
        <li class="seat">
          
        </li>
        <li class="seat">
          <input type="checkbox" id="9C" name="C9" />
          <label for="9C"class="l_9C">9C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="9D" name="D9" />
          <label for="9D" class="l_9D">9D</label>
        </li>
      </ol>
    </li>
    <li class="">
      <ol class="seats" type="A">
        <li class="seat">
          <input type="checkbox" id="10A" name=" A10" />
          <label for="10A" class="l_10A">10A</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10B" name="B10" />
          <label for="10B" class="l_10B">10B</label>
        </li>
          <li class="seat">
          
        </li>
        <li class="seat">
          <input type="checkbox" id="10C" name="C10" />
          <label for="10C" class="l_10C">10C</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10D" name="D10" />
          <label for="10D" class="l_10D" >10D</label>
        </li>
        <li class="seat">
          <input type="checkbox" id="10E" name="E10" />
          <label for="10E" class="l_10E">10E</label>
        </li>
         <li class="seat">
          
        </li>
      </ol>
    </li>
   </ol>
   
   
  </div><!--end of class plane-->
  </div>
  <div class="col-md-5">
    
    <div class="  card border-info mb-3">
  <div class="card-header">
<p style="font-size: 12px"><i>Fill in the forms on the right for each passenger.Kindly note passenger below 3yrs of age are required to
have a ticket. If a Passenger does not have both identification no or passport number,key in your own identification number.</i></p>
  </div><!--end of class plane-->
  <div class="card-body">
<form id="formss" action="access_token.php" method="POST">
  
  
</form>
</div>
</div>

  </div>
  <div class="col-md-1"></div>
</div>

<BR><BR>
<div class="row disabledbutton" id="seat_booking">
  <div class="col-md-3"></div>
 

<div class="col-md-6 card border-info mb-3 " style="overflow: auto;" >
   <div class="card-header">Passenger Details Summary</div>
  <div class="card-body">

    <table class="table" id="maintable"  style="overflow: auto;">
      <thead>
        <Tr>
        
        <th scope="col">Seat No</th>
        <th scope="col">Name</th>

  
        </Tr>

      </thead>
      <tbody id="summary_tickets">
    
      </tbody>
    </table>
    <!--<label class="fr">sds</label>-->
  </div>
  <div class="card-footer"><input type="submit" value="CONFIRM" form="formss" name="confirm_ticket_purchase" id="confirm_ticket_purchase" class="btn btn-primary"/></div>
</div>
  
</div><!--END OF MAIN CARD-->

<div class="col-md-3 "></div>
</div><!-- end of container -->


<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8" id="summary_details">
    

</div>
    <div class="col-md-2"></div>

</div>





</body>
</html>

  



  <script type="text/javascript">
     

     






   </script>

