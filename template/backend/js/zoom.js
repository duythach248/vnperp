$(function(){
	var mousein = function(){
		$(this).css("opacity", "0").addClass("over").animate({height:"500px", width:"800px", opacity:"1"});
	}
	var mouseout = 
	function(){$(this).removeClass("over").animate({height:"auto", width:"auto"})}
	
	$(".rel").children().hover(mousein, mouseout);
	$(".rel").children().click(mouseout);
	
});