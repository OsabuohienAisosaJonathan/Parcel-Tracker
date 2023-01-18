$(document).ready(function(){
						 
						 $body = $("body");

$(document).on({
    ajaxStart: function() { $body.addClass("loading");    },
     ajaxStop: function() { $body.removeClass("loading"); }    
});

						 
						 $('.track').click(function(){
										
										
										$('.msgBox').show(300);	  
										$('body').append('<div id="mask"></div>');	  
											  
											  
											  });
						   
	
		$('a.closeBox').click(function(){
							$('.msgBox2').hide(600, function(){
$('#mask').remove();
location.reload()
															});
							
});
	
	                          $('.confirmOtn').click(function(){
										
										$.post("../fetch_otn.php", { 
											   OTN: $('#trackNmb').val()
											   
											   }, 
											   
											   function(data){
												   jQuery('.msgBox2').css('display', 'inline-table');
												   $('.msgBox').hide(500);
												    $('.msgBox2').show(500);
												   $('#OTNInfo2').show(500); 
												   $('#OTNInfo2').html(data);
											   });
												
										
												});
  $('.confirmOtn2').click(function(){
										
										$.post("fetch_otn.php", { 
											   OTN: $('#trackNmb').val()
											   
											   }, 
											   
											   function(data){
												   jQuery('.msgBox2').css('display', 'inline-table');
												    jQuery('.msgBox2').css('position', 'absolute');
													jQuery('.msgBox2').css('left', '18%');
													jQuery('.msgBox2').css('top', '40%');
												   $('body').append('<div id="mask"></div>');	  
												   $('.msgBox').hide(500);
												    $('.msgBox2').show(500);
												   $('#OTNInfo2').show(500); 
												   $('#OTNInfo2').html(data);
											   });
												
										
												});


						   });

//clear message


$(document).keyup(function(e){
if(e.keyCode==27){

$('.msgBox').hide(600, function(){
$('#mask').remove();
											});
return false
}
});

