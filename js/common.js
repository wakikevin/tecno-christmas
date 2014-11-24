$(document).ready(function(){
		
	$("#overlay").show();
	$(".sorry").css("display","table");
	
	$(".share .btn").click(function() {
		$("#overlay").show();
		$(".thanks").css("display","table");
		return false;
	});
	
	$(".done, .close").click(function() {
		$(".popup").hide();
		$("#overlay").hide();
		return false;
	});
	
	$(".submit").click(function() {
		$("#overlay").show();
		$(".congrats").css("display","table");
		return false;
	});
	
});

$(window).load(function() {
	$(".preloader").fadeOut("slow");
});

