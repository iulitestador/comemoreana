$( document ).ready(function() {
	
	

	var qualMenu = "";
	
	$(".NiveisMenu .dica").click(function(event) {
		event.preventDefault();
		qualMenu = ".NiveisMenu #box-"+$(this).attr("id");
		$(".NiveisMenu .box-dica").stop().hide("fast");
		$(qualMenu).stop().slideToggle(200);
		
  
  	});
	
	  
});