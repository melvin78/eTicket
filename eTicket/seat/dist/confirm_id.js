  $(document).ready(function(){
  

    
$("#but_submit").click(function(){

var userid =$("#userid").val().trim();


var passid =$("#passid").val().trim();

if(userid !=''){
 
  $.ajax({


    

    url:'confirm_id.php',
    type:'POST',
    data:$('#confirmation').serialize(),
    success:function(data){




     
      if(data==0){
          
           $("#status").text("Identification no not found").css("color","red");
         $("#seat_booking").addClass('disabledbutton');
      }

      else {
        
    window.location.href ="selectseat.php";
  

      }

    }



  });

  
}


else{
       
 $("#status").text("Input id no first").css("color","red");
    }




});
});