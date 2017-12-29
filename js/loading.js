
pic1 = new Image(16, 16); 
pic1.src = "loader.gif";

$(document).ready(function(){
$("#invoice").change(function() { 

var usr = $("#invoice").val();

if(usr.length >=0)
{
$("#status").html('<img src="images/loader.gif">');

    $.ajax({  
    type: "POST",  
    url: "check.php",  
    data: "invoice="+ usr,  
    success: function(msg){  
   
   $("#status").ajaxComplete(function(event, request, settings){ 

	if(msg == 'OK')
	{ 
        $("#invoice").removeClass('object_error'); // if necessary
		$("#invoice").addClass("object_ok");
		$(this).html('<img src="images/accepted.png" winvoiceth="25" height="25">');
		
	}  
	else  
	{  
		$("#invoice").removeClass('object_ok'); // if necessary
		$("#invoice").addClass("object_error");
		$(this).html('<img src="images/rejected.png" winvoiceth="25" height="25">');
		

	}  
   
   });

 } 
   
  }); 

}
else
	{
		$("#status").html('<table><tr><td><img src="images/oops.gif" winvoiceth="30" height="30"></td><td><font color="blue" size="3px">নুন্যতম ৩ অক্ষর !!!</</font></td></tr></table>');
	$("#invoice").removeClass('object_ok'); // if necessary
	$("#invoice").addClass("object_error");
		document.FormName.invoice.value="";
		document.FormName.invoice.focus();
		return false;
	}

});

});

