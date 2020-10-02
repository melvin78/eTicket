
$('#change_schedule').click(function(){


 window.location.href = "buyTicket.php";


});

$(document).ready(function() {
   
  $("#ticket_details").click(function(){


window.location.href ="search_ticket.php";
  });

   $("#formss").submit(function(){



     $.ajax({
           type: "POST",
            url: 'save_ticket_information.php',
            data: $('#formss').serialize(),
            success:function(data){

              if (data==1){

  
                 $("#success_modal").modal('show');



              }

              else{

                alert("ticketbooked");
              }



            }

});

return false;
   });

});