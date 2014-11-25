$(document).ready(function(){
	
	//show snow
	$.fn.snow();
	
	//popup form	
	$("#overlay").show();
	$(".sorry").css("display","table");
	
	//message after successful share
	$(".share .btn").click(function() {
		$("#overlay").show();
		$(".thanks").css("display","table");
		return false;
	});
	
	//close overlay
	$(".done, .close").click(function() {
		$(".popup").hide();
		$("#overlay").hide();
		return false;
	});
	
	
	//submit winner form
	$(".submit").click(function() {
		$("#overlay").show();
		$(".congrats").css("display","table");
		return false;
	});
	
});

$(window).load(function() {
	$(".preloader").fadeOut("slow");
});

