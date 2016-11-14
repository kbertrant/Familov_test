$("#sub").click( function() {
 $.post( $("#imageform").attr("action"), 
         $("#imageform :input").serializeArray(), 
         function(info){ $("#result").html(info); 
   });
 clearInput();
});
 
$("#imageform").submit( function() {
  return false;	
});
 
function clearInput() {
	$("#imageform :input").each( function() {
	   $(this).val('');
	});
}