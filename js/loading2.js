
pic1 = new Image(16, 16); 
pic1.src = "loader.gif";

$(document).ready(function(){
$("#id").change(function() { 

var usr = $("#id").val();

if(usr.length >=0)
{
$("#status2").html('<img src="images/loader.gif">');

    $.ajax({  
    type: "POST",  
    url: "check2.php",  
    data: "id="+ usr,  
    success: function(msg){  
   
   $("#status2").ajaxComplete(function(event, request, settings){ 

	if(msg == 'OK')
	{ 
        $("#id").removeClass('object_error'); // if necessary
		$("#id").addClass("object_ok");
		$(this).html('<img src="images/accepted.png" width="25" height="25">');
		
	}  
	else  
	{  
		$("#id").removeClass('object_ok'); // if necessary
		$("#id").addClass("object_error");
		$(this).html('<img src="images/rejected.png" width="25" height="25">');
		

	}  
   
   });

 } 
   
  }); 

}
else
	{
		$("#status2").html('<table><tr><td><img src="images/oops.gif" width="30" height="30"></td><td><font color="blue" size="3px">নুন্যতম ৩ অক্ষর !!!</</font></td></tr></table>');
	$("#id").removeClass('object_ok'); // if necessary
	$("#id").addClass("object_error");
		document.FormName.id.value="";
		document.FormName.id.focus();
		return false;
	}

});

});

