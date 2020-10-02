

var mainform = '<div id= "mainform" class="mf">'+
'<h2 class="seatinfo"></h2>'+


 '<label>First Name:</label>'+
'<input type="text" name="fname[]" id="fname" class="form-control" ><br>'+
 '<label>Second Name:</label>'+
'<input type="text" name="sname[]" id="sname" class="form-control"><br>'+
 '<label>Surname:</label>'+
'<input type="text" name="surname[]" class="form-control"><br>'+
 '<label>Phone Number:</label>'+
'<input type="text" name="pno[]" class="form-control"><br>'+
 
 '<label>Email Address:</label>'+
'<input type="text" name="emailad[]" class="form-control"><br>'+

'</div>'+
'<BR>';

var  summary_tickets = 
        '<TR>'+
       '<Td id ="sno_table"></Td>'+
       '<td id="pass_name"></td>'+
     '</TR>'
      ;

$(document).ready(function(){

  $("#change_schedule").click(function(){

window.location.href ="buyTicket.php";

  });

var session_userid =$("#idticket").val().trim();
if(session_userid=="null"){
 $("#seat_booking").addClass('disabledbutton');
          $(".seaty").addClass('disabledbutton');
   $("#client_username").append("<p>Before continuing you have to login first.Click <a href=login.php>here</a>to login<p>");
 
}

else{

          $.ajax({


    

    url:'getName.php',
    type:'POST',
    data:{session_userid:session_userid},
    success:function(data){
       
       $("#client_username").append("<p>Welcome Back,<b>"+data+"</b>,choose your desired seats and have a safe journey!<p>");

          
    
        $("#seat_booking").removeClass('disabledbutton');
          $(".seaty").removeClass('disabledbutton');
}

});
        }
      


    var A1 = $('.l_1A').text();
    var B1 = $('.l_1B').text();
    var C1  = $('.l_1C').text();
    var D1= $('.l_1D').text();
    var A2= $('.l_2A').text();
    var B2 = $('.l_2B').text();
    var C2 = $('.l_2C').text();
    var D2 = $('.l_2D').text();
    var A3 = $('.l_3A').text();
    var B3 = $('.l_3B').text();
    var C3 = $('.l_3C').text();
    var D3 = $('.l_3D').text();
    var A4 = $('.l_4A').text();
    var B4 = $('.l_4B').text();
    var C4 = $('.l_4C').text();
    var D4 = $('.l_4D').text();
    var A5 = $('.l_5A').text();
    var B5 = $('.l_5B').text();
    var C5 = $('.l_5C').text();
    var D5 = $('.l_5D').text();
    var A6 = $('.l_6A').text();
    var B6 = $('.l_6B').text();
    var C6 = $('.l_6C').text();
    var D6 = $('.l_6D').text();
    var A7 = $('.l_7A').text();
    var B7 = $('.l_7B').text();
    var C7 = $('.l_7C').text();
    var D7 = $('.l_7D').text();
    var A8 = $('.l_8A').text();
    var B8 = $('.l_8B').text();
    var C8 = $('.l_8C').text();
    var D8 = $('.l_8D').text();
    var A9 = $('.l_9A').text();
    var B9 = $('.l_9B').text();
    var C9 = $('.l_9C').text();
    var D9 = $('.l_9D').text();
    var A10 = $('.l_10A').text();
    var B10 = $('.l_10B').text();
    var C10 = $('.l_10C').text();
    var D10 = $('.l_10D').text();
    var E10 = $('.l_10E').text();




var check_status = function  (seatno,data){


var idx = data.indexOf(seatno);




if (idx == -1) {


  var res = $("#"+seatno).prop("disabled",true);
  return res;


}
else{

  var res = $("#"+seatno).prop("disabled",false);
  return res;

//SEAT NOT AVAILBLE
}


}

var generate_form = function(seatno){


var sched = $("#schedule_no").val();
var idticket = $("#idticket").val();
var busid = $('#busid').val();
$("#"+seatno).change(function(){

  var $this = $(this);

  if ($this.is(':checked')){
    

    var res1 =$('#formss').append("<div class="+seatno+"  id=generated-forms ><h2>Passenger Details for Seat "+seatno+"</h2>"+


      '<div id= "mainform" class="mf">'+
'<h2 class="seatinfo"></h2>'+
 '<input type="hidden" name="seatno[]" id ="seatno" value="'+seatno+'" >'+
  '<input type="hidden" name="schd[]" id ="schd" value='+sched+' >'+
   '<input type="hidden" name="idticket[]" id ="idticket" value='+idticket+' >'+
   '<input type="hidden" name="busid[]" id ="busid" value='+busid+' >'+
 
 
'<label>Identification No:</label>'+
'<input type="text" name="id[]" id="id" class="form-control" required ="input first name" ><br>'+
 '<label>First Name:</label>'+
'<input type="text" name="fname[]" id="fname" class="form-control" required ="input first name"><br>'+
 '<label>Second Name:</label>'+
'<input type="text" name="sname[]" id="sname" class="form-control" required ="input first name"><br>'+
 '<label>Surname:</label>'+
'<input type="text" name="surname[]" class="form-control" required ="input first name"><br>'+
 '<label>Phone Number:</label>'+
'<input type="text" name="pno[]" class="form-control" required ="input first name"><br>'+
 


'</div>'+
'<BR>'+

















      "</div>");
    return res1;
  }


else{

     var res2 = $("."+seatno).remove();
 return res2;
}

});
  



}


var generate_summary = function(seatno){




$("#"+seatno).change(function(){

  var $this = $(this);

  if ($this.is(':checked')){
  /*
    var ty = $('tr.'+seatno).find("td#sno_table");
*/
    var res1 =$('table tbody').append("<tr class = "+seatno+"><td id =sno_table>"+seatno+"</td><td class="+seatno+"></td></tr>"); ///  $("#sno_table").text(seatno);///
    /*
    const iterator = res1.values();
    for (const value of iterator) {
      
        return res1;
    }

*/
return res1;
     
  }


else{

     var res2 = $("."+seatno).remove();
 return res2;
}

});
  



}

/*
  var generate_table_seat_no = function(seatno){




$("#"+seatno).change(function(){

  var $this = $(this);

  if ($this.is(':checked')){
    

    var res1 =$('#sno_table').text(seatno);
    return res1;
  }


else{

     var res2 = $('#sno_table').text("pick seat");
 return res2;
}

});
  



}
*/
  var generate_table_pass_name = function(seatno){




$(document).on("keyup change ","div."+seatno+" input:text[name='fname[]']",function(){

var data = $(this).val();
$('td.'+seatno).text(data);


});







}































 








    var busno = $('.bno').text();
    $.ajax({
        url: 'checkseat.php',
        type: 'POST',
        dataType: 'JSON',
        data:{busno:busno},
        success: function(data){


        
        var filtered_data = Array.prototype.concat.apply([],data);

       
           check_status(A1,filtered_data) ;
           generate_form(A1);
           generate_summary(A1);
           generate_table_pass_name(A1);


           check_status(A2,filtered_data);
             generate_form(A2);
             generate_summary(A2);
             generate_table_pass_name(A2);


           check_status(A3,filtered_data);
           generate_form(A3);
           generate_summary(A3);
           generate_table_pass_name(A3);


           check_status(A4,filtered_data) ;
            generate_form(A4);
            generate_summary(A4);
            generate_table_pass_name(A4);


           check_status(A5,filtered_data);
             generate_form(A5);
             generate_summary(A5);
             generate_table_pass_name(A5);


           check_status(A6,filtered_data);
           generate_form(A6);
           generate_summary(A6);
           generate_table_pass_name(A6);


           check_status(A7,filtered_data) ;
             generate_form(A7);
             generate_summary(A7);
             generate_table_pass_name(A7);


           check_status(A8,filtered_data);
             generate_form(A8);
             generate_summary(A8);
             generate_table_pass_name(A8);


           check_status(A9,filtered_data);
             generate_form(A9);
             generate_summary(A9);
             generate_table_pass_name(A9);

           check_status(A10,filtered_data) ;
             generate_form(A10);
             generate_summary(A10);
             generate_table_pass_name(A10);


           check_status(B1,filtered_data);
             generate_form(B1);
             generate_summary(B1);
             generate_table_pass_name(B1);


           check_status(B2,filtered_data);
             generate_form(B2);
             generate_summary(B2);
             generate_table_pass_name(B2);


           check_status(B3,filtered_data) ;
             generate_form(B3);
             generate_summary(B3);
             generate_table_pass_name(B3);


           check_status(B4,filtered_data);
             generate_form(B4);
             generate_summary(B4);
             generate_table_pass_name(B4);


           check_status(B5,filtered_data);
             generate_form(B5);
             generate_summary(B5);
             generate_table_pass_name(B5);


           check_status(B6,filtered_data) ;
             generate_form(B6);
             generate_summary(B6);
             generate_table_pass_name(B6);

          
             
           check_status(B7,filtered_data);
             generate_form(B7);
             generate_summary(B7);
             generate_table_pass_name(B7);

   
            
           check_status(B8,filtered_data);
             generate_form(B8);
             generate_summary(B8);
             generate_table_pass_name(B8);

           check_status(B9,filtered_data) ;
             generate_form(B9);
             generate_summary(B9);
             generate_table_pass_name(B9);

           check_status(B10,filtered_data);
             generate_form(B10);
             generate_summary(B10);
             generate_table_pass_name(B10);


           check_status(C1,filtered_data);
             generate_form(C1);
             generate_summary(C1);
             generate_table_pass_name(C1);


           check_status(C2,filtered_data) ;
             generate_form(C2);
             generate_summary(C2);
             generate_table_pass_name(C2);


           check_status(C3,filtered_data);
             generate_form(C3);
             generate_summary(C3);
             generate_table_pass_name(C3);


           check_status(C4,filtered_data);
             generate_form(C4);
             generate_summary(C4);
             generate_table_pass_name(A9);


           check_status(C5,filtered_data) ;
             generate_form(C5);
             generate_summary(C5);
             generate_table_pass_name(C5);


           check_status(C6,filtered_data);
             generate_form(C6);
             generate_summary(C6);
             generate_table_pass_name(C6);


           check_status(C7,filtered_data);
             generate_form(C7);
             generate_summary(C7);
             generate_table_pass_name(C7);




           check_status(C8,filtered_data) ;
             generate_form(C8);
             generate_summary(C8);
             generate_table_pass_name(C8);


           check_status(C9,filtered_data);
             generate_form(C9);
             generate_summary(C9);
             generate_table_pass_name(C9);


           check_status(C10,filtered_data);
             generate_form(C10);
             generate_summary(C10);
             generate_table_pass_name(C10);


           check_status(D1,filtered_data) ;
             generate_form(D1);
             generate_summary(D1);
             generate_table_pass_name(D1);


           check_status(D2,filtered_data);
             generate_form(D2);
             generate_summary(D2);
             generate_table_pass_name(D2);


           check_status(D3,filtered_data);
             generate_form(D3);
             generate_summary(D3);
             generate_table_pass_name(D3);


           check_status(D4,filtered_data) ;
             generate_form(D4);
             generate_summary(D4);
             generate_table_pass_name(D4);


           check_status(D5,filtered_data);
             generate_form(D5);
             generate_summary(D5);
             generate_table_pass_name(D5);


           check_status(D6,filtered_data);
             generate_form(D6);
             generate_summary(D6);
             generate_table_pass_name(D6);


           check_status(D7,filtered_data) ;
             generate_form(D7);
             generate_summary(D7);
             generate_table_pass_name(D7);


           check_status(D8,filtered_data);
             generate_form(D8);
             generate_summary(D8);
             generate_table_pass_name(D8);


           check_status(D9,filtered_data);
             generate_form(D9);
             generate_summary(D9);
             generate_table_pass_name(D9);


           check_status(D10,filtered_data) ;
             generate_form(D10);
             generate_summary(D10);
             generate_table_pass_name(D10);


           check_status(E10,filtered_data);
             generate_form(E10);
             generate_summary(E10);
             generate_table_pass_name(E10);


           
      
                


            }
        
    });

});