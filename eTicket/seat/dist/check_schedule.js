$(document).ready(function(){

$(function(){ 
$("#findschedule").submit(function(){





$.ajax({
 type: "POST",
            url: 'findschedule.php',
            data: $('#findschedule').serialize(),
            cache:true,
            success:function(data){
              if(data==0){

                $('#schedule_status').text("Unfortunately there are no buses available for the chosen route,kindly choose another route.").css("color", "red");
              }
              else{
                $('#schedule_status').text("choose schedule from below").css("color" ,"green");
                $('#search').hide();
                $.ajax({

                 type: "POST",
                 url:'findschedule.php',
                 data:$('#findschedule').serialize(),
                 cache:true,
                 dataType:"json",
                 success:function(data){ 
                  for (var count = 0; count < data.length; count++) {
                    $('#form_schedule').append(
                     
'<div class ="card border-info mb-3">'+
'<div class ="card-body">'+
'<form action = "selectseat.php" method = "POST" >'+

  '<div class="form-row">'+
    '<div class="form-group col-md-6">'+
      '<label for="fname">No of Seats Available</label>' +
      '<input type="text" class="form-control-plaintext" name="ofseats" id="ofseats" value='+data[count].seatsavailable+'>'+
      '<input type ="hidden" value='+data[count].schedule+ ' name="schedule">'+

    '</div>'+
   ' <div class="form-group col-md-6">'+
     ' <label for="fname">busno</label>'+
      '<input type="text" readonly class="form-control-plaintext" name="busno" id ="busno" value='+data[count].busno+'>'+
      '<input type ="hidden" value='+data[count].busid+ ' name="busid">'+
   ' </div>'+
   ' <div class="form-group col-md-6">'+
     ' <label for="sname">Boarding Point</label>'+
     ' <input type="text" readonly class="form-control-plaintext" name="Boardingpoint" id ="Boardingpoint" value='+data[count].Boardingpoint+'>'+
    '</div>'+

    '<div class="form-group col-md-6">'+
      '<label for="sname">Destination</label>'+
      '<input type="text" readonly class="form-control-plaintext" name="Destination" id="Destination"value='+data[count].Destination+'>'+
    '</div>'+
  '</div>'+
  '<div class="form-row">'+
   '<div class="form-group col-md-6">'+
    '<label for="resid">price</label>'+
    '<input type="text" readonly class="form-control-plaintext" name="price" id="price" value='+data[count].price+'>'+
  '</div>'+
   '<div class="form-group col-md-6">'+
   ' <label for="emailid">Departure Time</label>'+
   ' <input type="text" readonly class="form-control-plaintext" name ="departuretime" id ="departuretime" value='+data[count].departuretime+'>'+
  '</div>'+
   ' <div class="form-group col-md-6">'+
     ' <label for="phone">County From</label>'+
     ' <input type="text" readonly class="form-control-plaintext" name="countyfrom" id ="countyfrom"value='+data[count].countyfrom+'>'+
    '</div>'+
 '</div>'+
   ' <div class="form-row">'+
   ' <div class="form-group col-md-6">'+
     ' <label for="dob">Expected Arrival Time</label>'+
      ' <input type="text" readonly class="form-control-plaintext" name ="arrival_time "value='+data[count].arrival_time+'>'+
   ' </div>'+
   ' <div class="form-group col-md-6">'+
     ' <label for="dob">County To</label>'+
      ' <input type="text" readonly class="form-control-plaintext" name="countyt" value='+data[count].countyt+'>'+
   ' </div>'+
   ' <div class="form-group col-md-6">'+
     '<input type="submit" class="btn btn-primary" value="BOOK NOW" name="BOOK NOW">'+
   ' </div>'+
    
  '</div>'+
  '</form>'+
  '</div>'+
  '</div>'+
'<br>'+
'<br>'
 );

     }//end of for loop

        $('html, body').animate({
                    scrollTop: $("#form_schedule").offset().top
                }, 2000);
            
}// end of success function data

                });//end of ajax method
                
                
              
             
              
              }// end of else statement




            }// end of success function


});// end of first ajax request


return false;
});// end of search click function
});

});



$(document).ready(function(){





  $('#category_item').selectpicker();

  $('#sub_category_item').selectpicker();

  load_data('category_data');

  function load_data(type, category_id = '')
  {
    $.ajax({
      url:"load_location.php",
      method:"POST",
      data:{type:type, category_id:category_id},
      dataType:"json",
      cache:true,
      success:function(data)
      {
        var html = '';
        for(var count = 0; count < data.length; count++)
        {
          html += '<option value="'+data[count].id+'" >'+data[count].name+'</option>';
        }
        if(type == 'category_data')
        {
          $('#category_item').html(html);
          $('#category_item').selectpicker('refresh');
        }
        else
        {
          $('#sub_category_item').html(html);
          $('#sub_category_item').selectpicker('refresh');
        }
      }
    })
  }

  $(document).on('change', '#category_item', function(){
    var category_id = $('#category_item').val();
    load_data('sub_category_data', category_id);
  });
  
});



  $('#category_itemt').selectpicker();

  $('#sub_category_itemt').selectpicker();

  load_data('category_data');

  function load_data(type, category_id = '')
  {
    $.ajax({
      url:"load_location2.php",
      method:"POST",
      data:{type:type, category_id:category_id},
      dataType:"json",
      cache:true,
      success:function(data)
      {
        var html = '';
        for(var count = 0; count < data.length; count++)
        {
          html += '<option value="'+data[count].id+'">'+data[count].name+'</option>';
        }
        if(type == 'category_data')
        {
          $('#category_itemt').html(html);
          $('#category_itemt').selectpicker('refresh');
        }
        else
        {
          $('#sub_category_itemt').html(html);
          $('#sub_category_itemt').selectpicker('refresh');
        }
      }
    })
  }

  $(document).on('change', '#category_itemt', function(){
    var category_id = $('#category_itemt').val();
    load_data('sub_category_data', category_id);
  });