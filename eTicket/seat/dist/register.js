$(document).ready(function(){




 $('#userdetails').submit(function(){

 	

 	    $.ajax({
           type: "POST",
            url: 'check_user.php',
            data: $('#userdetails').serialize(),
            success:function(data){
          if(data==0){

    

    $.ajax({
           type: "POST",
            url: 'regNewuser.php',
            data: $('#userdetails').serialize(),
            success:function(data){
          if(data==1){

           window.location.href = "password.php";
          }
          else{

            $("#regstatus").text("failedfgh");
          }



            }



    });











          }
          else{

            $("#regstatus").text("Your identification is already registered with us try recoverig your password");
          }



            }



    });
return false;
  });










});