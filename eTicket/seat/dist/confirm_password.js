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

            alert("sucessfuly logged in");
            window.location.href  = "selectseat.php";
          }
          else{

            $("#status").text("failed");
          }



            }



		});
	});


 



});
